
@extends('layouts.app')

@section('content')

<div id="guestValidationMsg" class="alert alert-success fade show mt-4" style="display: none;">
    <p id="massage" class="mb-0"></p>
</div>
<div class="page-content row">
    <div class="page-content-wrapper m-t">      
        <div class="sbox animated fadeInRight">    
            <div class="sbox-content">  
                <div class="toolbar-line">
                   <div class="row">
                        <div class="col-sm-6">
                            <select class="form-control" name='property_category' id='property_category' style="height: 28px; margin-left: 5px;" 
                            onchange="machhotels(this.value);"> 
                            <option>Select</option>
                                @if(!empty($category))
                                    @foreach($category as $catlist)
                                        <option value="{{$catlist->category_name}}" <?php if(Request::get('selcat') == $catlist->category_name){ echo 'selected';} ?>>{{$catlist->category_name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        <div>
                    </div>         
                </div>
                <div class="col-sm-3">
                    <input type="text" name="search_hotel" id="search_hotel" class="form-control">
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-primary form-control" data-toggle="modal" id="import" data-target="#importdata" onclick="ImportWithId();">Import</button>
                    {{-- <button name="submit" class="btn btn-primary form-control" onclick="ImportWithId();">Import Hotel</button> --}}
                </div>
            </div>
        </div>
        
        @if(isset($hotels))
        <?php

        $hotelDropDwn = "";
        $allproperties = "";

        $hotelDropDwn .= '<select class="form-control booking-property" name="hotel_property[]" style="height: 28px; margin-left: 5px;">
                <option value=""> Select </option>';
                 foreach ($hotels as $value) { 
                    $hotelDropDwn .= '<option value="'.$value['hotel_id'].'">'. $value['hotel_name'] . '</option>';
                }

                $hotelDropDwn .= '</select>';

        $allproperties .= '<select class="form-control emp-property" name="matched_property[]" style="height: 28px; margin-left: 5px;"> 
            <option value="">Select</option>';

            foreach ($allprops as $prop){
                $allproperties .= '<option value="'. $prop->id .'">'. $prop->property_name .'</option>';
            }
            $allproperties .= '</select>';

        ?>  
            <div class="table-responsive" style="min-height:300px;">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Imported hotel</th>
                            <th>Emporium Hotel</th>
                            <th>Booking.com Hotel</th>
                            <th>Booking.com Prices</th>
                            <th>Edit Prices</th>
                            <th>Booking.com Suites</th>
                            <th>PropertyRoomImage</th>
                            <th>Actions</th>
                          </tr>
                    </thead>
                    <tbody>
                    <?php //if($prop->id == $val['property_id']){ echo ' selected="selected"';} 
                    $shown = [];
                    ?>
                    @if(isset($allprops))

                    @foreach($allprops as $key => $val)
                        <tr id="match-row-{{ $key.'-'.$val['id'] }}" class="match-row">
                            <td width="10"  ><span id="imported" class="imported" style="display: none; font-size: x-large;"></span></td>
                            <td width="30">
                                <?php echo $allproperties; ?>
                            </td>
                            <td width="50">
                                <?php echo $hotelDropDwn;?>
                            </td>
                            <td width="30"> 
                                <a data-toggle="modal" id="sessionprice" data-target="#viewprice" onclick="viewPrice('{{ $key.'-'.$val['id'] }}')">View Prices</a>
                            </td>
                            <td width="30">
                                <a href="javascript:void(0);" onclick="editPrice('{{ $key.'-'.$val['id'] }}')">Edit Prices</a>
                            </td>
                            <td width="30">
                                <a class="text-secondary" data-toggle="modal" id="mediumButton" data-target="#mediumModal">View Suites</a>
                            </td>
                            <td width="30">
                                <a class="text-secondary" data-toggle="modal" id="displayButton" data-target="#displayImages" onclick="DisplayImages('{{ $key.'-'.$val['id'] }}');">View Images</a>
                            </td>
                            <td width="30">
                                <button class="btn btn-primary form-control" data-toggle="modal" id="import" data-target="#importdata" onclick="OpenImportModel('{{ $key.'-'.$val['id'] }}');">Import</button>
                            </td>
                        </tr>
                    @endforeach
                    @endif    
                    </tbody>
                </table>  
            </div>
        @endif
        <?php 
        if(isset($dest_id)) { ?>
        <input type="hidden" name="dest_id" id="dest_id" value="{{ $dest_id }}">    
        <?php } ?>
    </div>        
</div>

<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hotel Rooms</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="mediumBody">
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="displayImages" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Display Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="roomPhotos">
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="viewprice" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View Price</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="PriceDetail">
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="displayImportBtn" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ImportData</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="importmodelId">
                
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
 

    function OpenImportModel(id){
        
        $("#importdata").html("");
        var hotel_id = $('.booking-property', $('#match-row-' + id)).val();
        var property_id = $('.emp-property', $('#match-row-' + id)).val();
        var dest_id = $("#dest_id").val();

        $.ajax({
            url: '/importdetail',
            type: 'get',
            data: { hotel_id:hotel_id,
                    property_id: property_id,
                    dest_id: dest_id  },
            dataType: 'json',

            success:function(response){
                $("#importmodelId").html(response.html);
                $('#displayImportBtn').modal("show");

            }
        });
    }

    function editPrice(id){

        var property_id = $('.emp-property', $('#match-row-' + id)).val();
        if(!property_id){
            alert("Please select emporium hotel");
            return false;
        }
        window.open("/properties_settings/"+property_id+"/price");
    }

    function viewPrice(id){

        var property_id = $('.emp-property', $('#match-row-' + id)).val();
        var hotel_id = $('.booking-property', $('#match-row-' + id)).val();

        if(!property_id){
            alert("Please select booking.com hotel");
            return false;
        }

        $("#PriceDetail").html("");

        $.ajax({
            url: '/viewprice',
            type:'get',
            data:{ property_id: property_id,
                hotel_id: hotel_id },
            dataType:'json',

            success:function(response){
                $("#PriceDetail").html(response.seasondate);
                $('#viewprice').modal("show");
            }
        });

        
    }

    function machhotels(catg)
    {
        window.location.href = "{{URL::to('matchhotels')}}?selcat="+catg;
    }

    function savematch(id){
        var hotel_id = $('.booking-property', $('#match-row-' + id)).val();
        var property_id = $('.emp-property', $('#match-row-' + id)).val();

        if(!property_id || !hotel_id){
            alert("Please select both emporium and booking.com hotels");
            return false;
        }

        $.ajax({
            url: '/savematchhotels',
            data:{ hotel_id: hotel_id,
                property_id: property_id },
            type: 'post',
            dataType: 'json',

            success:function(response){
                if(response.status === true){
                    console.log(response);  
                    $('#guestValidationMsg').find('#massage').html("Data Submitted Succesfully");
                    $('#guestValidationMsg').show();
                }   
            }
        });
    }

    function importHotelDetail(id){
        var hotel_id = $('.booking-property', $('#match-row-' + id)).val();
        var dest_id = $("#dest_id").val();
        $.ajax({
            url: '/import/hotels/'+ hotel_id +'/'+ dest_id,
            // data: { hotel_id: hotel_id,
            //         dest_id: dest_id }, 
            type: 'get',
            dataType: 'json',

            success:function(response){
                console.log(response)
                if(response.status === true){
                    alert("Hotel Data is Imported from booking.com");
                }   
                if(response.status === false){
                    alert("Hotel Data is Imported djhf from booking.com");
                }
          }
        });
    }

    function ImportWithId(){
        var hotel_id = $("#search_hotel").val();

        $.ajax({
            url: '/searchwithid',
            data: { hotel_id: hotel_id },
            type: 'get',
            dataType: 'json',

            success:function(response){
                $("#importmodelId").html(response.html);
                $('#displayImportBtn').modal("show");
            }
        });
    }

    function DisplayImages(id){
        var hotel_id = $('.booking-property', $('#match-row-' + id)).val();
        $('#roomPhotos').html("");
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'dipslay/room/',
            data: { hotel_id: hotel_id },

            success:function(response){
                $('#roomPhotos').html(response.roomphotos);
                $('#displayImages').modal("show");
                if(response.status === false){
                    alert("This Hotel has no Images!");
                }
            }
        });

    }

     $(document).on('click', '#mediumButton', function(event) {        
            event.preventDefault();
            $('#mediumBody').html("");
            var hotel_id = $('.booking-property', $(event.target).parents('tr')).val();

            if(!hotel_id){
                alert("Please select booking.com hotel");
                return false;
            }

            $.ajax({
                type:'GET',
                dataType: 'json',
                url: 'roomdetail/'+hotel_id,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumBody').html(result.roomdetail);
                    $('#mediumModal').modal("show");
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });
    <?php if(isset($matched) && !empty($matched)){ ?>
        var matched = '<?php echo addslashes(json_encode($matched))?>'; 
    <?php } 
    ?>
    $(document).ready(function () {
        if(typeof matched !== 'undefined' && typeof matched !== null){
            var arr = jQuery.parseJSON( matched );
        }    
        var propDrp = [];
        var hotelDrp = [];

        if(typeof arr !== null){
            $(".match-row").each(function(){
                var tr = $(this);
                var isSetVal = false;
                $.each(arr, function (key, value) {
                    var ProOpt = $('.emp-property', tr).val();
                    if(propDrp.indexOf(value.property_id) == -1 && !isSetVal){
                        $('.emp-property', tr).val(value.property_id);
                        $('.booking-property', tr).val(value.hotel_id);
                        if(value.booking_hotel_id){
                            $('.imported ', tr).html('✔');
                            $('.imported ', tr).show();
                        }
                        propDrp.push(value.property_id);
                        isSetVal = true;
                    }
                });
            });    
        }

        $('.matched_property').selectize({
            sortField: 'text'
        });
        $('.emp-property').selectize({
            sortField: 'text'
        });
        $('.booking-property').selectize({
            sortField: 'text'
        });
    });

</script> 
@stop
