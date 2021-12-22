<div class="wizard-nav show">
    <ul class="nav flex-column">
      <?php 
        $currentdomain = \Config::get('app.currentdomain');
      ?>
      
      <li class="nav-item">
        <a href="<?php if($currentdomain == 'voyage'){ echo ""; } else { echo \Config::get('app.voyagedomain'); } ?>" class="nav-link <?php if($currentdomain == 'voyage'){ echo "active"; } ?>" >
          <div><i class="ico ico-fi-hotel"></i></div>
          <div class="wiza-title">Voyage</div>
        </a>
      </li>
     
      <li class="nav-item">
        <a href="<?php if($currentdomain == 'spa') { echo ""; } else { echo \Config::get('app.spadomain'); } ?>" class="nav-link <?php if($currentdomain == 'spa'){ echo "active"; } ?> ">
          <div><i class="ico ico-spa"></i></div>
          <div class="wiza-title">Spas</div>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="<?php if($currentdomain == 'safari') { echo ""; } else { echo \Config::get('app.safaridomain'); } ?>" class="nav-link <?php if($currentdomain == 'safari'){ echo "active"; } ?> ">
          <div><i class="ico ico-safari"></i></div>
          <div class="wiza-title">Safaris</div>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="<?php if($currentdomain == 'islands') { echo ""; } else { echo \Config::get('app.islandsdomain'); } ?>" class="nav-link <?php if($currentdomain == 'islands'){ echo "active"; } ?> ">
          <div><i class="ico ico-islands"></i></div>
          <div class="wiza-title">Islands</div>
        </a>
      </li>
     
        <li class="nav-item">
          <a href="<?php  if($currentdomain == 'magazine') { echo ""; } else { echo \Config::get('app.magazinedomain'); } ?> " class="nav-link <?php if($currentdomain == 'magazine'){ echo "active"; } ?> ">
            <div><i class="ico ico-fi-magazine"></i></div>
            <div class="wiza-title">Magazine</div>
          </a>
        </li>
      
      {{-- <li class="nav-item">
        <a href="#" class="nav-link">
          <div><i class="ico ico-fi-flight"></i></div>
          <div class="wiza-title">Jet</div>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <div><i class="ico ico-fi-yacht"></i></div>
          <div class="wiza-title">Yachts</div>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <div><i class="ico ico-fi-villa"></i></div>
          <div class="wiza-title">Villas</div>
        </a>
      </li> --}}
      
      <li class="nav-item">
        <a href="#" class="nav-link">
          <div><i class="ico ico-fi-experience"></i></div>
          <div class="wiza-title">Experiences</div>
        </a>
      </li>
    </ul>
  </div>