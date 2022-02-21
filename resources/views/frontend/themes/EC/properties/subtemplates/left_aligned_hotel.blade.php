
<script type="text/javascript">
  if(properties === undefined){
    var properties = [];
  }
</script>
<div class="mb-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <a href="/hotel/{{ $editorChoice->property_slug }}">
        <h3 class="title-second title-line mb-0"><?php echo $editorChoice->property_name;?>
        </h3>

          <?php
          if($is_admin == 1){
            echo '(<a target="_blank" href="/properties_settings/'.$editorChoice->id.'/types?return=">Edit</a> | <a target="_blank" href="/properties_settings/'.$editorChoice->id.'/property_images?return=">Edit Images</a> | <a target="_blank" href="/properties_settings/'.$editorChoice->id.'/rooms">Edit Suite Images</a>)';
          }
          ?>
      </a>
    </div>
    <div class="col-md-6 text-right">
      <div class="d-flex justify-content-end align-items-center">
        <?php if(isset($editorChoice->price) AND $editorChoice->price != 0){ ?>
        <h4 class="hover-primary mb-0">
          From € <?php echo $editorChoice->price;?>
        </h4>
        <?php } else{ ?>
          <button class="btn btn-primary btn-block rounded-0">Price on request</button>
        <?php } ?>
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
      <div class="col-lg-6 is-hover">
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
            <img src="<?php echo 'property-image/resize/1200x700/'.$container_name.'/'.$file_name.'/property-image';?>" alt="">
          <?php endif;?>
          <div class="hotel-srt-desc hero-desc">
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
                <img src="<?php echo 'property-image/resize/1200x700/'.$container_name.'/'.$file_name.'/property-image';?>" alt="">
              </div>
            </div>
          <?php 
          $imageNum++;
          if($imageNum>3) break;
          endforeach;
          ?>
        </div>
      </div>

      <div class="hero-meta d-xl-flex d-lg-flex d-xs-none">
        <div class="left-meta">
          <ul class="nav nav-pills nav-fill">
            @if(!empty($editorChoice->suites))
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
          <a href="/hotel/{{ $editorChoice->property_slug }}" class="btn btn-primary btn-block rounded-0">Reservation</a>
        </div>
      </div>
      <div class="hotel-meta-mobile col-lg-6">
        <a href="#" class="btn rounded-0 btn-sidebar btn-info-hotel" data-sidebar="#mobile_menu" onclick="replacePropertyMobileMenu(<?php echo $editorChoice->id;?>)">
          Hotel Info <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
        <a href="/hotel/{{ $editorChoice->property_slug }}" data-toggle="collapse" class="btn btn-primary rounded-0">
          Reservation
        </a>
      </div>
    </div>
  </div>
</div>
