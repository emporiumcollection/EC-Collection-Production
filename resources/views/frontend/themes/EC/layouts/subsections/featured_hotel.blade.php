<?php
if(isset($featureProperties[0])):
?>
<div class="row">
  <div class="col-7 col-lk--0991" style="padding-left: 0px;">
      <div class="hotel-tag-label featured-bg">
      Featured    </div>
      <?php 
        foreach($featureProperties[0]->propertyImages as $image):
          if(isset($featureProperties[0]['container']['name'])){
            $container_name = $featureProperties[0]['container']['name'];
          }else{
            $container_name = strtolower(str_replace("-", " ", trim($featureProperties[0]->property_name)));
          }

          if(is_array($image)){
            $file_name = $image['file_name'];
          }elseif(is_object($image)){
            $file_name = $image->file_name;
          }else{
            $file_name = 'default-image.png';
          }
      ?>
        <div>
          <a href="suite.html">
            <img src="<?php echo 'property-image/resize/480x432/'.$container_name.'/'.$file_name.'/property-image';?>" class="img-fluid" alt="">
          </a>
        </div>
      <?php 
        break;
        endforeach;
      ?>
  </div>
  <div class="col">
    <div class="fetaruer py-5 pl-2 pr-2">
      <h3 class="title-3 title-i "><?php echo $featureProperties[0]->property_short_name;?></h3>
      <p class="font-2 ">
        <i>
          <?php echo $featureProperties[0]->detail_section1_description_box1;?>
        </i>
      </p>
    </div>
  </div>
</div>
<?php
endif;
?>