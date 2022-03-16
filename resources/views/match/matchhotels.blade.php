
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
                            <td width="30">
                                <?php echo $allproperties; ?>
                            </td>
                            <td width="50">
                                <?php echo $hotelDropDwn;?>
                            </td>
                            <td width="30">
                                <a href="javascript:void(0)" onclick="viewPrice('{{ $key.'-'.$val['id'] }}')">View Prices</a>
                            </td>
                            <td width="30">
                                <a href="javascript:void(0)" onclick="editPrice('{{ $key.'-'.$val['id'] }}')">Edit Prices</a>
                            </td>
                            <td width="30">
                                <a class="text-secondary" data-toggle="modal" id="mediumButton" data-target="#mediumModal">View Suites</a>
                            </td>
                            <td width="30">
                                <a class="text-secondary" data-toggle="modal" id="displayButton" data-target="#displayImages" onclick="DisplayImages('{{ $key.'-'.$val['id'] }}');">RoomImage</a>
                            </td>
                            <td width="30"><button class="btn btn-primary form-control " onclick="savematch('{{ $key.'-'.$val['id'] }}');">Approve</button>
                                <button class="btn btn-primary form-control" onclick="importHotelDetail({{ $key.'-'.$val['id'] }});">ImportHotel</button>
                                <button class="btn btn-primary form-control" data-toggle="modal" id="import" data-target="#importdata" onclick="OpenImportModel('{{ $key.'-'.$val['id'] }}');">ImportingOtherDetail</button>
                            </td>
                            <td width="30">
                                {{-- <a class="text-secondary" data-toggle="modal" id="import" data-target="#importdata" onclick="OpenImportModel('{{ $key.'-'.$val['id'] }}');">ImportData</a> --}}
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
        alert(hotel_id);
        alert(property_id);
        $.ajax({
            url: '/importdetail',
            type: 'get',
            data: { hotel_id:hotel_id,
                    property_id: property_id },
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
        var hotel_id = $('.booking-property', $('#match-row-' + id)).val();
        if(!hotel_id){
            alert("Please select booking.com hotel");
            return false;
        }
        window.open("https://secure.booking.com/book.html?hotel_id=" + hotel_id + "&checkout={{ date ('Y-m-d', strtotime ('+180 day')) }}&checkin={{ date ('Y-m-d', strtotime ('+178 day')) }}&interval=2&stage=1&nr_rooms_729233401_325315371_3_0_0=1");
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
        alert(dest_id);
        $.ajax({
            url: '/import/hotels',
            data: { hotel_id: hotel_id,
                    dest_id: dest_id }, 
            type: 'post',

            success:function(response){
                console.log(response)
                if(response.status === true){
                    alert("Hotel Data is Imported from booking.com");
                    $('#guestValidationMsg').find('#massage').html("Hotel Data is Imported from booking.com");
                    $('#guestValidationMsg').show();
                }   
                if(response.status === false){
                    alert("Hotel Data is Imported djhf from booking.com");
                    $('#guestValidationMsg').find('#massage').html("This hotel data is already Imported");
                    $('#guestValidationMsg').show();
                }
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
        
        let arr = jQuery.parseJSON( matched );
        var propDrp = [];
        var hotelDrp = [];
        
        
        $(".match-row").each(function(){
            var tr = $(this);
            var isSetVal = false;
            $.each(arr, function (key, value) {
                var ProOpt = $('.emp-property', tr).val();
                if(propDrp.indexOf(value.property_id) == -1 && !isSetVal){
                    $('.emp-property', tr).val(value.property_id);
                    $('.booking-property', tr).val(value.hotel_id);
                    propDrp.push(value.property_id);
                    isSetVal = true;
                }
            });
        });    
        

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
