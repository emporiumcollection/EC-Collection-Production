<div class="line-separate "></div>
<div class="row">
  <div class="col-sm-7 mb-4">
    <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
      <div class="img-offset-slide ">
      <?php 
        foreach($propertyImages as $editorImage):?>
        <div>
          <a href="suite.html">
            <img src="uploads/container_user_files/locations/<?php echo $editorChoice['container']['name']?>/property-images/<?php echo $editorImage['file_name']; ?>" class="img-fluid" alt="">
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

    <a href="detail-page.html">
      <div class="title-offset mt-5">
        <h3 class="title-second title-line mb-0"><?php echo $editorChoice->detail_section1_title;?></h3>
        <h4 class="title-font-2 title-third"><?php echo $editorChoice->detail_section1_description_box1;?></h4>
      </div>
    </a>

  </div>
  <div class="col-sm-5 mb-4">
    <div class="fetaruer py-5 pl-5 pr-0">
      <h3 class="title-3 title-i ">— featured hotel —</h3>
      <p class="font-2 ">
        <i>
          Think about New York of the 1980s with its large artwork, early hip hop, and punk rock scenes.
          Then
          translate that vitality to a lodge on the Decrease East Aspect. Put collectively you get The
          Ludlow
          Resort.
        </i>
      </p>
    </div>
  </div>
</div>