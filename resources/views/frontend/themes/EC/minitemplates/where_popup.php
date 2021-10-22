<?php 
if(isset($trendingFilters)):
?>
<div class="search-suggest">
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
</div>
<?php endif;?>
<div class="wherepopup">
  <div class="whereinner">
    <div class="row">
      <div class="col-6" id="destisresults">
        <h2 style="text-transform: uppercase; color: #FFF;">Destinations</h2>
        <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="voyage-desti-header">Voyage</h3>
        <ul class="flex-column voyage-destination">
        </ul>
        <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="spa-desti-header">Spa</h3>
        <ul class="flex-column spa-destination">
        </ul>
        <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="safari-desti-header">Safari</h3>
        <ul class="flex-column safari-destination">
        </ul>
        <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="islands-desti-header">Islands</h3>
        <ul class="flex-column islands-destination">
        </ul>
      </div>
      <div class="col-6" id="hotelsresults">
        <h2 style="text-transform: uppercase; color: #FFF;">Hotels</h2>
        <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="voyage-hotel-header">Voyage</h3>
        <ul class="flex-column voyage-hotels">
        </ul>
        <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="spa-hotel-header">Spa</h3>
        <ul class="flex-column spa-hotels">
        </ul>
        <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="safari-hotel-header">Safari</h3>
        <ul class="flex-column safari-hotels">
        </ul>
        <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="islands-hotel-header">Islands</h3>
        <ul class="flex-column islands-hotels">
        </ul>
      </div>
    </div>
  </div>
</div>