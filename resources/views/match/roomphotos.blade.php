
<div class="row">
    @if(isset($error))
        <div class="col-sm-6">
            <div id="guestValidationMsg" class="alert alert-danger">
                <p id="massage" class="mb-0">{{$error}}</p>
            </div>
        </div>
    @endif
        <?php foreach ($photos as $key => $value) { 
            
        ?>
            <div class="col-sm-12" style="padding-top: 10px;padding-bottom: 10px;">
                <a href="{{ str_replace( "640x200","1800x1200",$value->url_640x200) }}" target="blank" >
                    <img src="{{ $value->url_640x200 }}" width="550">
                </a>
            </div>  
        <?php } ?>    
    </div> 
</div>