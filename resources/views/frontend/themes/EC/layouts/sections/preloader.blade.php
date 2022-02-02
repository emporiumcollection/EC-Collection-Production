<?php
  $loaderImage = 'images/ecd67d87075247.5dad757ad6705.jpg';
  $loaderTitle = 'Loading Luxury-Collection-Name';
  $loaderDescription = 'We are working to get collection of your choice.';

  if(isset($loaderImages[0]['files']) && !empty($loaderImages[0]['files'])){
    foreach($loaderImages as $limage){      
      if(file_exists(public_path().'/uploads/container_user_files/emotional-gallery-loader/' . $limage['name'] . '/' . isset($limage['files'][0]['file_name']))){

        $loaderImage = 'uploads/container_user_files/emotional-gallery-loader/' . $limage['name'] . '/' . $limage['files'][0]['file_name'];

        $loaderTitle = $limage['title'];
        $loaderDescription = $limage['description'];    
        break;
      }
    }
  }
?>
<div class="pageload" style="background-image: url(<?php echo $loaderImage;?>);">
  <div class="logo"></div>
  <div class="loading-dcs">
    <p class="loading-title"><?php echo $loaderTitle;?></p>
    <p class="loading-content">
      <?php echo $loaderDescription;?>
    </p>
  </div>
  <!-- <div class="spinner">
    <div></div>
    <div></div>
  </div> -->
</div>
<script type="text/javascript">
  $('body').css('overflow', 'hidden');
  $(document).ready(function () {
    setTimeout(function () {
      $('body').css('overflow', 'auto');
      $('.pageload').hide();
    }, 3000)
  });
</script>