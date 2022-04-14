<div class="row">
    <?php 
    $name = "";
    $rooms_array = [];

    if(isset($rooms) && !empty($rooms)){
        foreach ($rooms as $key => $value) {    
            if(!in_array($value->room_id, $rooms_array) && !in_array($value->room_name, $rooms_array)){
                $room_name = $value->room_name;
                $room_id = $value->room_id;
                $rooms_array[] = $room_id;
                $rooms_array[] = $room_name;
        ?>
        <div class="col-sm-6">
            <input type="text" name="roomname" id="roomsName" value="{{$room_name}}" class="form-control">
        </div>
        <div class="col-sm-6">
            <button name="view" class="btn btn-primary form-control" onclick="downloadSuiteImages('{{ $hotel_id }}','{{ $room_id }}')">Importing Suite Images</button>
        </div>     
        <?php } 
        }
    }?>    
</div>
<div class="modal fade" id="displayImages12" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Display Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="roomPhotos12">
                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function downloadSuiteImages(hotel_id,room_id){
        window.location.href = "{{URL::to('makezip/file')}}?hotel_id="+hotel_id+'&&room_id='+room_id;
        
        //  // $.ajax({
        //  //    url: '/makezip/file'+hotel_id,
        //  //    type: 'get',
        //  //    data: { hotel_id: hotel_id,
        //  //            room_id: room_id
        //  //        },
        //  //    datatype: 'json',

        //     // success:function(response){
                
        //     //     // $('#mediumModal').modal("hide");
        //     //     $('#roomPhotos12').html(response.roomphotos);
        //     //     $('#displayImages12').modal("show");
        //     //     if(response.status === false){
        //     //         alert("This Hotel has no Images!");
        //     //     }
        //     // }
        // });
    }

</script>  