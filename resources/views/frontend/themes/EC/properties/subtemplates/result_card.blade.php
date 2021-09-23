<script type="text/javascript">
  properties[<?php echo $property->id;?>] = <?php echo json_encode($property);?>;
  properties[<?php echo $property->id;?>]['images'] = <?php echo json_encode($propertyImages);?>;
</script>
<div class="col-lg-6 col-md-6 mb-5 ">
  <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
    <div class="pr-lst result-grid global-search-resultbox">
      <?php foreach($property->propertyImages as $image):?>
        <div>
          <img src="<?php echo 'property-image/resize/450x320/'.$property['container']['name'].'/'.$image['file_name'];?>" alt="">
        </div>
      <?php endforeach;?>
    </div>
    <div class="my-dropdown">
      <div class="btn-group dropleft">
        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="ico ico-diamon diamon-label"></i>
        </a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item">Add to collection</a>
          <a href="#" class="dropdown-item btn-sidebar create-collection"
            data-sidebar="#myCollection">Create new collection</a>
        </div>
      </div>

    </div>
    <div class="hotel-meta full-width is-small">
      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside" onclick="replacePropertySuites(<?php echo $property->id;?>)">
        Suite(s)
      </a>
      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo" onclick="replacePropertyData(<?php echo $property->id;?>)">
        Quick info
      </a>
      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#property-gallery" onclick="replacePropertyData(<?php echo $property->id;?>)">
        Gallery
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
      <a href="detail-page.html" class="btn rounded-0">
        Suite Info
      </a>
      <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
        Check Availability
      </a>
    </div>
  </div>
  <a href="#">
    <div class="title-offset mt-5 ">
      <h3 class="title-second title-line mb-0"><?php echo $property->property_name;?></h3>
      <h4 class="title-font-2 title-third">experience</h4>
    </div>
  </a>
</div>