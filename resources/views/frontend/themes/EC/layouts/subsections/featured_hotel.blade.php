<?php
if(isset($featureProperties[0])):
?>
<div class="row">
  <div class="col-7 col-lk--0991">
    <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
      <div class="img-offset-slide ">
        <?php foreach($featureProperties[0]->propertyImages as $image):?>
          <div>
            <a href="suite.html">
              <img src="<?php echo 'property-image/resize/418x285/'.$featureProperties[0]['container']['name'].'/'.$image['file_name'].'/property-image';?>" class="img-fluid" alt="">
            </a>
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
      <div class="hotel-meta full-width">
        <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">
          Reviews
        </a>
        <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo">
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
              <span class="title-font-2 mr-1">From</span> <span class="color-primary">€ <?php echo $featureProperties[0]->price;?> </span>
            </h3>

            <div class="ml-2">
              <span class="pernight"></span>
            </div>
          </div>

        </div>
      </div>
    </div>
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