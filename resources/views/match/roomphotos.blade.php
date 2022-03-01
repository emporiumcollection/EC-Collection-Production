
<div class="row">
    @if(isset($error))
        <div class="col-sm-6">
            <div id="guestValidationMsg" class="alert alert-danger">
                <p id="massage" class="mb-0">{{$error}}</p>
            </div>
        </div>
    @endif
        <?php foreach ($photos as $key => $value) { ?>
            <div class="col-sm-12">
                <a href="{{ $value->url_640x200}}" target="blank">Room Image{{ $key}}</a>
            </div>  
        <?php } ?>    
    </div> 
</div>