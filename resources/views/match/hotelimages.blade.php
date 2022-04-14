<div style="float:right;">
    <button class="btn btn-primary form-control" onclick="DownloadZipFile('{{ $hotel_id }}');">Download Zipfile</button>
</div>
<div class="row">
    <?php 
     foreach ($photos as $key => $value) { 
    ?>
    <div class="col-sm-12" style="padding-top: 10px;padding-bottom: 10px;">
        <a href="{{ str_replace("640x200","1440x1440",$value->url_1440) }}" target="blank" >
            <img src="{{ $value->url_1440 }}" width="550">
        </a>
    </div>  
    <?php }  ?>    
</div>

<script type="text/javascript">

    function DownloadZipFile(hotel_id){
        
        window.location.href = "{{URL::to('downloadimages')}}?hotel_id="+hotel_id;   
        
    }
</script>
