
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
    if(isset($rooms) && !empty($rooms)){
        foreach ($rooms as $key => $value) {
            foreach ($value->bed_configurations as $key => $val) {
                foreach ($val->bed_types as $key => $data) { 
                    $name .= $data->name_with_count.'.';  ?>
                <div class="col-sm-6">
                    <input type="text" name="roomname" id="roomsName" value="{{$name}}" class="form-control">
                </div>
                <div class="col-sm-6">
                    <button name="view" class="btn btn-primary form-control">View</button>
                </div>     
            <?php } 
            }    
        }
    }?>    
</div>