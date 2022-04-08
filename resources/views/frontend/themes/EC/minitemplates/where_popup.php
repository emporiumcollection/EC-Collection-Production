<style type="text/css">
  /* .wherepopup{
    display: block;
    overflow: scroll;
    overflow-x: hidden;
    min-height: 0px;
    max-height: 500px;
  } */
  .search-field .wherepopup .nav-link{
    font-size: 16px !important;
  }
</style>
<?php 
if(isset($trendingFilters)):
?>
<!-- <div class="search-suggest">
  <div>
    <h5>Popular Now</h5>
    <?php 
      foreach($trendingFilters as $filter => $row):      
        if(!in_array($filter, ['Atmosphere', 'Facilities', 'Experience', 'Inspiration'])):
    ?>
    <div>
      <?php foreach($row as $col):?>
        <a href="/globalsearchavailability?s=<?php echo $col['category_name'] ?>" class="suggest-item"><?php echo $col['category_name'] ?></a>
      <?php endforeach;?>
    </div>
    <?php 
        endif;
      endforeach;
    ?>
  </div>
  <?php 
    foreach($trendingFilters as $filter => $row):      
      if(in_array($filter, ['Atmosphere', 'Facilities', 'Experience', 'Inspiration'])):
  ?>
  <div>
    <h5><?php echo $filter;?></h5>
    <?php foreach($row as $col):?>
      <a href="/globalsearchavailability?s=<?php echo $keyword;?>&<?php echo strtolower($filter);?>=<?php echo $col['category_name'] ?>" class="suggest-item"><?php echo $col['category_name'] ?></a>
    <?php endforeach;?>
  </div>
  <?php 
      endif;
    endforeach;
  ?>
</div> -->
<?php endif;?>
<?php
$voyage = '<h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="voyage-desti-header">Voyage Collection</h3>
        <ul class="nav border-bottom-0 flex-column voyage-destination">
        </ul>';

$spa = '
        <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="spa-desti-header">Spa Collection</h3>
        <ul class="nav border-bottom-0 flex-column spa-destination">
        </ul>';

$safari = '<h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="safari-desti-header">Safari Collection</h3>
        <ul class="nav border-bottom-0 flex-column safari-destination">
        </ul>';

$islands = '<h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="islands-desti-header">Islands Collection</h3>
        <ul class="nav border-bottom-0 flex-column islands-destination">
        </ul>';

$voyage_hotel = '<h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="voyage-hotel-header">Voyage Hotels</h3>
        <ul class="nav border-bottom-0 flex-column voyage-hotels">
        </ul>';

$spa_hotel = '<h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="spa-hotel-header">Spa Hotels</h3>
        <ul class="nav border-bottom-0 flex-column spa-hotels">
        </ul>';

$safari_hotel = '<h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="safari-hotel-header">Safari Hotels</h3>
        <ul class="nav border-bottom-0 flex-column safari-hotels">
        </ul>';

$islands_hotel = '<h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="islands-hotel-header">Islands Hotels</h3>
        <ul class="nav border-bottom-0 flex-column islands-hotels">
        </ul>';      
?>
<div class="wherepopup" style="display:none;">
  <div class="whereinner">
    <div class="row">
      <div class="col-6" id="destisresults">
        <h2 style="text-transform: uppercase; color: #FFF;">Destinations</h2>
        <?php
        if(\Config::get('app.currentdomain') == 'voyage'){
          echo $voyage;
          echo $spa;
          echo $safari;
          echo $islands;
        }else if(\Config::get('app.currentdomain') == 'spa'){
          echo $spa;
          echo $voyage;
          echo $safari;
          echo $islands;
        }else if(\Config::get('app.currentdomain') == 'safari'){
          echo $safari;
          echo $spa;
          echo $voyage;
          echo $islands;
        }else if(\Config::get('app.currentdomain') == 'islands'){
          echo $islands;
          echo $spa;
          echo $voyage;
          echo $safari;
        }else{
          echo $voyage;
          echo $spa;
          echo $safari;
          echo $islands;
        }
        ?>
      </div>
      <div class="col-6" id="hotelsresults">
        <h2 style="text-transform: uppercase; color: #FFF;">Hotels</h2>
        <?php
        if(\Config::get('app.currentdomain') == 'voyage'){
          echo $voyage_hotel;
          echo $spa_hotel;
          echo $safari_hotel;
          echo $islands_hotel;
        }else if(\Config::get('app.currentdomain') == 'emporium-collection'){
          echo $voyage_hotel;
          echo $spa_hotel;
          echo $safari_hotel;
          echo $islands_hotel;
        }else if(\Config::get('app.currentdomain') == 'spa'){
          echo $spa_hotel;
          echo $voyage_hotel;
          echo $safari_hotel;
          echo $islands_hotel;
        }else if(\Config::get('app.currentdomain') == 'safari'){
          echo $safari_hotel;
          echo $spa_hotel;
          echo $voyage_hotel;
          echo $islands_hotel;
        }else if(\Config::get('app.currentdomain') == 'islands'){
          echo $islands_hotel;
          echo $spa_hotel;
          echo $voyage_hotel;
          echo $safari_hotel;
        }
        ?>
      </div>
    </div>
    <div class="scrolldown">
      <i class="down-arrow"></i>
    </div>
  </div>
</div>