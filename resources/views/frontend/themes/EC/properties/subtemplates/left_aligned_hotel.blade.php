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
      <h3 class="title-second title-line mb-0"><?php echo $editorChoice->property_name;?></h3>
    </div>
    <div class="col-md-6 text-right">
      <div class="d-flex justify-content-end align-items-center">
        <h4 class="hover-primary mb-0">
          From € <?php echo $editorChoice->price;?>
        </h4>
        <div class="dropdown ml-3">
          <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Add to Collection
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Add to Collection</a>
            <a class="dropdown-item" href="#">Share</a>
          </div>
        </div>
        <a href="#" class="btn btn-primary ml-2">Book This Suite</a>
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
              }elseif(is_object($propertyImages[0])){
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
            <?php echo $editorChoice->detail_section1_description_box1;?>
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
            }elseif(is_object($editorImage)){
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

      <div class="hero-meta">
        <div class="left-meta">
          <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
              <a class="nav-link btn-sidebar" href="#" data-sidebar="#reviews">Reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-sidebar" href="#" data-sidebar="#quickinfo" onclick="replacePropertyData(<?php echo $editorChoice->id;?>)">Hotel Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-sidebar" href="#" data-sidebar="#property-gallery" onclick="replacePropertyData(<?php echo $editorChoice->id;?>)">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-sidebar" href="#" data-sidebar="#suiteside" onclick="replacePropertySuites(<?php echo $editorChoice->id;?>)">Suites</a>
            </li>
          </ul>
        </div>
        <div class="right-meta align-self-center">
          <a href="#" class="btn btn-primary btn-block rounded-0">Reservation</a>
        </div>
      </div>
    </div>
  </div>
</div>