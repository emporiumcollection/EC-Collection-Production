<div class="hotel-item-map" id="hotel_<?php echo $property->id;?>">
<script type="text/javascript">
  properties[<?php echo $property->id;?>] = <?php echo json_encode($property);?>;
  properties[<?php echo $property->id;?>]['images'] = <?php echo json_encode($property->propertyImages);?>;
</script>
<div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
    <div class="hotel-tag-label" style="background: #89a49f;">
      <?php echo $block_title;?>
    </div>
    <div class="pr-lst result-grid">
      <?php if($block_title):?>
      <?php endif;?>
      <?php foreach($property->propertyImages as $image):
          if(isset($property['container']['name'])){
            $container_name = $property['container']['name'];
          }else{
            $container_name = strtolower(str_replace("-", " ", trim($property->property_name)));
          }

          if(is_array($image)){
            $file_name = $image['file_name'];
          }elseif(is_object($image) && isset($image->file->file_name)){
            $file_name = $image->file->file_name;
          }else{
            $file_name = 'default-image.png';
          }
      ?>
      <div>
        <img src="<?php echo 'property-image/resize/383x261/'.$container_name.'/'.$file_name.'/property-image';?>" class="w-100" alt="">
      </div>
      <?php endforeach;?>
    </div>
    <div class="my-dropdown">
      <div class="btn-group dropleft">
        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="ico ico-diamon diamon-label"></i>
        </a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item btn-sidebar" data-sidebar="#myCollection">Add to collection</a>
          <a href="#" class="dropdown-item btn-sidebar create-collection" data-sidebar="#myCollection">Create
            new collection</a>
          <a href="#" class="dropdown-item btn-sidebar create-collection" data-sidebar="#share">Share</a>
        </div>
      </div>

    </div>
    <div class="hotel-meta full-width is-small">
      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews" onclick="replaceReviewData(<?php echo $property->id;?>)">
        Reviews
      </a>
      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo" onclick="replacePropertyData(<?php echo $property->id;?>)">
        Quick info
      </a>
      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#property-gallery" onclick="replacePropertyData(<?php echo $property->id;?>)">
        Gallery
      </a>
      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside" onclick="replacePropertySuites(<?php echo $property->id;?>)">
        Suite(s)
      </a>
      <div class="hotel-prices hotel-price-detail d-flex">
        <div class="row align-items-center justify-content-center">
          <div class="mr-2">
            <i class="ico ico-info-green"></i>
          </div>
          <h3 class="mb-0">
            <span class="title-font-2 mr-1">From</span> <span class="color-primary">€ 167 </span>
          </h3>
          <div class="ml-2">
            <span class="pernight"></span>
          </div>
        </div>

      </div>
    </div>
    <div class="hotel-meta-mobile">
      <a href="#" class="btn rounded-0">
        Suite Info
      </a>
      <a href="#" class="btn btn-primary rounded-0">
        Check Availability
      </a>
    </div>
  </div>
  <a href="#">
    <div class="mb-3 mt-2 ">
      <h3 class="title-second is-small title-line mb-0"><?php echo $property->property_name;?></h3>
    </div>
  </a>
  <?php if(isset($property->suites[0]->rooms[0]->room_name) && $property->suites[0]->rooms[0]->room_name):?>
    <div class="hotel-info-content px-3 font-2">
      <div class="row align-items-center mb-3">
        <div class="col-md-7">
          <p class="mb-0 text-16"><b><?php echo $property->suites[0]->rooms[0]->room_name;?></b> </p>
          <p class="text-16 mb-0"><?php echo $property->suites[0]->rooms[0]->num_beds;?> single beds</p>
        </div>
        <div class="col-md-5">
          <a href="#" class="btn btn-dark btn-block btn-sm btn-sidebar" data-sidebar="#suiteside" onclick="replacePropertySuites(<?php echo $property->id;?>)">View
            Suites</a>
        </div>
      </div>
      <!--
      <p class="mb-0 guest-info">2 weeks, 2 adults </p>
      <div class="row align-items-center mb-3">
        <div class="col-md-6">
          <p class="price-info mb-0">€269</p>
        </div>
        <div class="col-md-6 text-right">
          <a href="#" class="btn btn-dark btn-block btn-sm">Book "11 Howard 12"</a>
        </div>
      </div>
      <p class=" included"> Includes taxes and charges </p>
      <p class="cancellation "><b>Free cancellation</b> </p>
      <p class="text-danger "><b>Only 4 left at this price on our site</b></p>
      -->
      <div class="addre">
        <?php echo $property->address;?>
      </div>
      <!--<div class="addre-list">
        <p class="mb-0 text-16"><b>Top attractions</b></p>
        <div class="row">
          <div class="col-9">Misericórdia Church</div>
          <div class="col-3 text-right">5.1 km</div>
          <div class="col-9">City Doors</div>
          <div class="col-3 text-right">5.2 km</div>
        </div>
      </div>
      <hr class="line-dark">
      <div class="addre-list">
        <p class="mb-0 text-16"><b>Top Experiences:</b></p>
        <div class="row">
          <div class="col-9">Lorem ipsum dolor</div>
          <div class="col-3 text-right"><a href="#" class="btn-sidebar" data-sidebar="#topExperiences">View</a>
          </div>
          <div class="col-9">Sit amet</div>
          <div class="col-3 text-right"><a href="#" class="btn-sidebar" data-sidebar="#topExperiences">View</a>
          </div>
        </div>
      </div>-->
    </div>
  <?php endif;?>
</div>