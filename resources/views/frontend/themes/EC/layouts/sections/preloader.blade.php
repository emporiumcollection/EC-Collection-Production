<?php
  $loaderImage = 'images/ecd67d87075247.5dad757ad6705.jpg';
  $loaderTitle = 'Loading Luxury-Collection-Name';
  $loaderDescription = 'We are working to get collection of your choice.';

  if(isset($loaderImages) && !empty($loaderImages)){
    $loaderImage = $loaderImages[0]['files'][0]['file_name'];
    $loaderImage = 'uploads/container_user_files/emotional-gallery-loader/' . $loaderImages[0]['name'] . '/' . $loaderImage;

    $loaderTitle = $loaderImages[0]['title'];
    $loaderDescription = $loaderImages[0]['description'];
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