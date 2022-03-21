<div style="float:right;">
    <button class="btn btn-primary form-control" onclick="DownloadZipFile('{{ $hotel_id }}');">Download Zipfile</button>
</div>
<div class="row">
    <?php 
     foreach ($photos as $key => $value) { 
    ?>
    <div class="col-sm-12" style="padding-top: 10px;padding-bottom: 10px;">
        <a href="{{ str_replace( "640x200","1800x1200",$value->url_640x200) }}" target="blank" >
            <img src="{{ $value->url_640x200 }}" width="550">
        </a>
    </div>  
    <?php }  ?>    
</div>

<script type="text/javascript">
    var image = '<?php echo json_encode($hotel_id)?>'; 

    function DownloadZipFile(id){
        
        window.location.href = "{{URL::to('makezip/file')}}?id="+id;
        
    }
</script>
