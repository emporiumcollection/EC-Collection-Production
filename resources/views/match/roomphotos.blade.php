<div style="float:right;">
    <button class="btn btn-primary form-control" onclick="DownloadZipFile();">Download Zipfile</button>
</div>
<div class="row">
    <?php $images = [];
     foreach ($photos as $key => $value) { 
        $images[] =  $value->url_640x200 ;
    ?>
    <div class="col-sm-12" style="padding-top: 10px;padding-bottom: 10px;">
        <a href="{{ str_replace( "640x200","1800x1200",$value->url_640x200) }}" target="blank" >
            <img src="{{ $value->url_640x200 }}" width="550">
        </a>
    </div>  
    <?php }  ?>    
</div>

<script type="text/javascript">
    var image = '<?php echo addslashes(json_encode($images))?>'; 

    function DownloadZipFile(){
        let arr = jQuery.parseJSON(image);
        console.log(arr);
        $.ajax({
            url: '/makezip',
            type: 'post',
            data: { image: image },
            datatype: 'json',

            success:function(response){

            }
        });
    }
</script>
