
<script type="text/javascript">
  if(properties === undefined){
    var properties = [];
  }
  properties[<?php echo $editorChoice->id;?>] = <?php echo json_encode($editorChoice);?>;
  properties[<?php echo $editorChoice->id;?>]['images'] = <?php echo json_encode($propertyImages);?>;
</script>
<div class="mb-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <a href="/hotel/hoteldetail/<?php echo $editorChoice->id; ?>">
        <h3 class="title-second title-line mb-0"><?php echo $editorChoice->property_name;?></h3>
      </a>
    </div>
    <div class="col-md-6 text-right">
      <div class="d-flex justify-content-end align-items-center">
        <h4 class="hover-primary mb-0">
          From € <?php echo $editorChoice->price;?>
        </h4>
        {{--<div class="dropdown ml-3">
          <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Add to Collection
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item btn-sidebar" href="#" data-sidebar="#myCollection">Add to Collection</a>
            <a class="dropdown-item" href="#">Share</a>
          </div>
        </div> --}}
        {{-- <a href="/hotel/hoteldetail/{{ $editorChoice->id }}" class="btn btn-primary ml-2">Book This Suite</a> --}}
      </div>
    </div>
  </div>
  <div class="hero-container">  
    <div class="hotel-tag-label" style="background: #89a49f;">
      <?php echo $block_title;?>
    </div>
    <div class="row hero-row mt-4">
      <div class="col-lg-6">
        <div class="hero-item">
          <?php if(!empty($propertyImages)):
              if(isset($editorChoice['container']['name'])){
                $container_name = $editorChoice['container']['name'];
              }else{
                $container_name = strtolower(str_replace(" ", "-", trim($editorChoice->property_name)));
              }

              if(is_array($propertyImages[0])){
                $file_name = $propertyImages[0]['file_name'];
              }elseif(is_object($propertyImages[0]) && isset($propertyImages[0]->file->file_name)){
                $file_name = $propertyImages[0]->file->file_name;
              }else{
                $file_name = 'default-image.png';
              }
            ?>
            <img src="<?php echo 'property-image/resize/627x627/'.$container_name.'/'.$file_name.'/property-image';?>" alt="">
          <?php endif;?>
          <div class="hero-desc">
            <h4><?php echo $editorChoice->detail_section1_title;?></h4>
          </div>
        </div>
      </div>
      <div class="col-lg-6 is-hover">
        <div class="hotel-srt-desc">
          <div class="title-offset mb-4 ">
            <h3 class="title-second title-line mb-0">
              <?php echo $editorChoice->detail_section1_title;?>
            </h3>
            <h4 class="title-font-2 title-third">experience</h4>
          </div>
          <p>
            <?php echo substr($editorChoice->detail_section1_description_box1, 0, 500) ."...";?>
          </p>
        </div>
        <div class="row">
          <?php
          $imageNum = 0; 
          foreach($propertyImages as $pi => $editorImage):
            if($pi==0) continue;

            if(isset($editorChoice['container']['name'])){
              $container_name = $editorChoice['container']['name'];
            }else{
              $container_name = strtolower(str_replace(" ", "-", trim($editorChoice->property_name)));
            }

            if(is_array($editorImage)){
              $file_name = $editorImage['file_name'];
            }elseif(is_object($editorImage) && isset($editorImage->file->file_name)){
              $file_name = $editorImage->file->file_name;
            }else{
              $file_name = 'default-image.png';
            }
          ?>
            <div class="col-md-6">
              <div class="hero-item">
                <img src="<?php echo 'property-image/resize/311x311/'.$container_name.'/'.$file_name.'/property-image';?>" alt="">
              </div>
            </div>
          <?php 
          $imageNum++;
          if($imageNum>3) break;
          endforeach;
          ?>
        </div>
      </div>

      <div class="hero-meta d-sm-none d-md-none d-xl-flex d-lg-flex d-xs-none">
        <div class="left-meta">
          <ul class="nav nav-pills nav-fill">
            @if(!empty($editorChoice->suites->toArray()))
            <li class="nav-item">
              <a class="nav-link btn-sidebar" href="#" data-sidebar="#suiteside" onclick="replacePropertySuites(<?php echo $editorChoice->id;?>)">Suites</a>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link btn-sidebar" href="#" data-sidebar="#quickinfo" onclick="replacePropertyData(<?php echo $editorChoice->id;?>)">Hotel Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-sidebar" href="#" data-sidebar="#property-gallery" onclick="replacePropertyData(<?php echo $editorChoice->id;?>)">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-sidebar" href="#" data-sidebar="#reviews" onclick="replaceReviewData(<?php echo $editorChoice->id;?>)">Reviews</a>
            </li>
          </ul>
        </div>
        <div class="right-meta align-self-center">
          <a href="/hotel/hoteldetail/{{ $editorChoice->id }}" class="btn btn-primary btn-block rounded-0">Reservation</a>
        </div>
      </div>
      <div class="hotel-meta-mobile col-lg-6">
        <a href="#" class="btn rounded-0 btn-sidebar btn-info-hotel" data-sidebar="#mobile_menu">
          Hotel Info <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
        <a href="/hotel/hoteldetail/{{ $editorChoice->id }}" data-toggle="collapse" class="btn btn-primary rounded-0">
          Reservation
        </a>
      </div>
    </div>
  </div>
</div>
{{-- mobile menu --}}
<div class="sidebar-main share-sidebar filter-bg" id="mobile_menu">
    <a href="#" class="close-sidebar" data-dismis="">

        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>


    <div class="sidebar-scroller">
        <div class="d-flex">
            <a href="#" class="sidebar-back" data-close="sidebar">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="mb-5"><?php echo $editorChoice->property_name;?></h3>
        </div>
        <div class="filter-list">
            <div class="accordion accordion-ex" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="/hotel/hoteldetail/{{ $editorChoice->id }}" class="btn btn-link btn-block text-left">
                                View <?php echo $editorChoice->property_name;?>
                            </a>
                        </h2>
                    </div>
                </div>
                {{--<div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#Byexperience">
                                Suites
                                <i class="fa fa-plus" style="display: none;"></i>
                                <i class="fa fa-minus"></i>
                            </button>
                        </h2>
                    </div>
                    <div id="Byexperience" class="additional-collapse collapse show">
                        <div class="card-body">
                            <a href="all-suite.html" class="nav-link">All Suite</a>
                            <a href="detail-suite.html" class="nav-link">The Mark Fire Bedroom</a>
                            <a href="detail-suite.html" class="nav-link">Suite Name</a>
                            <a href="detail-suite.html" class="nav-link">Suite Name</a>
                            <a href="detail-suite.html" class="nav-link">Suite Name</a>
                            <a href="detail-suite.html" class="nav-link">Suite Name</a>
                        </div>
                    </div>
                </div>--}}
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left btn-sidebar" data-sidebar="#property-gallery" onclick="replacePropertyData(<?php echo $editorChoice->id;?>)">
                                Gallery
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left btn-sidebar" data-sidebar="#reviews" onclick="replaceReviewData(<?php echo $editorChoice->id;?>)">
                                Reviews
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left">
                                Suite
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left">
                                Spa &amp; Wellness
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="restaurant.html" class="btn btn-link btn-block text-left">
                                Restaurants &amp; Bars
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="location.html" class="btn btn-link btn-block text-left">
                                Location
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left">
                                Video Channel
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="faq.html" class="btn btn-link btn-block text-left">
                                FAQ
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left" data-close="sidebar">
                                Close Menu
                            </a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <a href="#" class="sidebar-back" data-close="sidebar">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="mb-5"><?php echo $editorChoice->property_name;?></h3>
        </div>
    </div>
</div>
{{-- mobile menu --}}