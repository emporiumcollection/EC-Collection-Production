
<div class="row">
    @if(isset($error))
        <div class="col-sm-6">
            <div id="guestValidationMsg" class="alert alert-danger">
                <p id="massage" class="mb-0">{{$error}}</p>
            </div>
        </div>
    @endif
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
            <button name="view" class="btn btn-primary form-control">View</button>
        </div>     
        <?php } 
        }
    }?>    
</div>