<script type="text/javascript">
  properties[<?php echo $editorChoice->id;?>] = <?php echo json_encode($editorChoice);?>;
  properties[<?php echo $editorChoice->id;?>]['images'] = <?php echo json_encode($propertyImages);?>;
</script>
<div class="line-separate "></div>
<div class="row">
  <div class="col-sm-8 mb-4">
    <div class="hotel-page-list suite-ontouch no-opacity index-2">

      <?php if(!empty($propertyImages)):?>
        <img src="<?php echo 'property-image/resize/615x420/'.$editorChoice['container']['name'].'/'.$propertyImages[0]['file_name'];?>" class="img-fluid" alt="">
      <?php endif;?>

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
      <!--<div class="hotel-meta full-width">
        <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">
          Reviews
        </a>
        <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo" onclick="replacePropertyData(<?php echo $editorChoice->id;?>)">
          Quick info
        </a>
        <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#gallery">
          Gallery
        </a>
        <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside">
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
      </div>-->
      <div class="hotel-meta-mobile">
        <a href="detail-page.html" class="btn rounded-0">
          Suite Info
        </a>
        <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
          Check Availability
        </a>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mb-4">
    <h3 class="title-line is-small fadeInUp "><?php echo $block_title;?></h3>
    <p class="mt-4">
      <?php echo $editorChoice->detail_section1_description_box1;?>
    </p>
  </div>
</div>
<div class="row ">
  <div class="col-sm-4 mb-4">
    <a href="detail-page.html">
      <div class="title-offset title-offset-2 mt-5 ">
        <h3 class="title-second title-line mb-0"><?php echo $editorChoice->detail_section1_title;?></h3>
        <h4 class="title-font-2 title-third">experience</h4>
      </div>
    </a>
  </div>
  <div class="col-sm-8 mb-4">
    <div class="img-offset hotel-page-list suite-ontouch off-set-123">
      <div class="img-offset-slide offsets---190">
        <?php
        $imageNum = 0; 
        foreach($propertyImages as $editorImage):?>
        <div>
          <a href="suite.html">
            <img src="<?php echo 'property-image/resize/615x420/'.$editorChoice['container']['name'].'/'.$editorImage['file_name'];?>" class="img-fluid" alt="">
          </a>
        </div>
        <?php 
        $imageNum++;
        if($imageNum>3) break;
        endforeach;?>
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
      <div class="hotel-meta full-width">
        <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside" onclick="replacePropertySuites(<?php echo $editorChoice->id;?>)">
          Suite(s)
        </a>
        <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo" onclick="replacePropertyData(<?php echo $editorChoice->id;?>)">
          Quick info
        </a>
        <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#property-gallery" onclick="replacePropertyData(<?php echo $editorChoice->id;?>)">
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
  </div>
</div>