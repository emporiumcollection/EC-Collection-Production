
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
                            onchange="machhotels(this.value);" > 
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
        <div class="table-responsive" style="min-height:300px;">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Booking.com Hotel</th>
                        <th>Booking.com Prices</th>
                        <th>Edit Prices</th>
                        <th>Booking.com Suites</th>
                        <th>Emporium Hotel</th>
                        <th>Actions</th>
                      </tr>
                </thead>
                <tbody>
                @if(isset($hotels))                             
                    @foreach ($hotels as $val)
                        <tr>
                            <td width="30">{{ $val['hotel_name'] }}</td>
                            <td width="30"><a href="https://secure.booking.com/book.html?hotel_id={{ $val['hotel_id'] }}&checkout={{ date ('Y-m-d', strtotime ('+180 day')) }}&checkin={{ date ('Y-m-d', strtotime ('+178 day')) }}&interval=2&stage=1&nr_rooms_729233401_325315371_3_0_0=1" target="_blank">View Prices</a> </td>
                            <td width="30">
                                <a href="/properties_settings/{{ $val['property_id'] }}/types" target="_blank">Edit Prices</a>
                            </td>
                            <td width="30">
                                <a class="text-secondary" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ $val['hotel_id'] }}">
                                        View Suites
                                    </a>
                            </td>
                            <input type="hidden" name="hotel_name" value="{{ $val['hotel_name'] }}">
                            <input type="hidden" name="dest_id" value="{{ $val['dest_id'] }}">
                            <input type="hidden" name="property_id" value="{{ $val['property_id'] }}">
                            <input type="hidden" name="hotel_id" id="hotel_id" value="{{ $val['hotel_id'] }}">
                            <td width="50">
                                <select class="form-control" name='matched_property' id='matched_property' style="height: 28px; margin-left: 5px;" > 
                                    @foreach ($allprops as $prop)
                                        <option value="{{ $prop->id }}" <?php if($prop->id == $val['property_id']){ echo ' selected="selected"';} ?>>{{ $prop->property_name }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td width="30"><button class="btn btn-primary form-control" onclick="savematch({{ $val['hotel_id'] }}, {{ $val['property_id'] }});">Approve</button></td>
                        </tr>
                    @endforeach
                @endif    
                </tbody>
            </table>  
        </div>
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

<script type="text/javascript">

    function machhotels(catg)
    {
        window.location.href = "{{URL::to('matchhotels')}}?selcat="+catg;
    }

    function savematch(hotel_id,property_id){
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

     $(document).on('click', '#mediumButton', function(event) {
            event.preventDefault();
            var hotel_id = $("#hotel_id").val("");
            let href = $(this).attr('data-attr');
            $.ajax({
                type:'GET',
                dataType: 'json',
                url: 'roomdetail/'+href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    // console.log(result[0].rooms);

                    $('#mediumBody').html(result.roomdetail);
                    $('#mediumModal').modal("show");
                    // $("#mediumBody").append(response.roomdetail);
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

</script> 
@stop
