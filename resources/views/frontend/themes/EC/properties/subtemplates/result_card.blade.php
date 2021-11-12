<script type="text/javascript">
  properties[<?php echo $property->id;?>] = <?php echo json_encode($property);?>;
  properties[<?php echo $property->id;?>]['images'] = <?php echo json_encode($propertyImages);?>;
</script>
<div class="col-lg-6 col-md-6 mb-5 ">
  <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">

    <div class="pr-lst result-grid">
      <!-- <div>
        <img <?php echo 'src="/images/default-hotel.png"';?> <?php echo 'data-src="/images/default-hotel.png"';?> class="w-100 results-media" alt="">
      </div> -->
      <?php 
      foreach($property->propertyImages as $image):
        
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
          <img <?php echo 'src="property-image/resize/615x419/'.$container_name.'/default-image.png/property-image"';?> <?php echo 'data-src="property-image/resize/615x419/'.$container_name.'/'.$file_name.'/property-image"';?> class="w-100 results-media" alt="">
        </div>
      <?php 
      endforeach;?>
    </div>
    <div class="my-dropdown">
      <div class="btn-group dropleft">
        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="ico ico-diamon diamon-label"></i>
        </a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item add_collection">Add to collection</a>
          <a href="#" class="dropdown-item btn-sidebar create-collection"
            data-sidebar="#myCollection" onclick="collection(<?php echo $property->id;?>)">Create new collection</a>
        </div>
      </div>

    </div>
    <div class="hotel-meta full-width is-small">
      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">
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
            <span class="title-font-2 mr-1">From</span> <span class="color-primary">€ <?php echo $property->price;?> </span>
          </h3>
          <div class="ml-2">
            <span class="pernight"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="hotel-meta-mobile">
      <a href="detail-page.html" class="btn rounded-0">
        Suite Info
      </a>
      <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
        Check Availability
      </a>
    </div>
  </div>
  <a href="/hotel/hoteldetail/{{ $property->id }}">
    <div class="title-offset mt-5 ">
      <h3 class="title-second title-line mb-0"><?php echo $property->property_name;?></h3>
      <h4 class="title-font-2 title-third"><?php echo $property->city;?></h4>
    </div>
  </a>
</div>