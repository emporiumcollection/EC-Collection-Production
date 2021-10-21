<?php
if(isset($featureProperties[0])):
?>
<div class="row">
  <div class="col-7 col-lk--0991">
      <?php 
        foreach($featureProperties[0]->propertyImages as $image):
      ?>
        <div>
          <a href="suite.html">
            <img src="<?php echo 'property-image/resize/480x432/'.$featureProperties[0]['container']['name'].'/'.$image['file_name'].'/property-image';?>" class="img-fluid" alt="">
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