<div class="wizard-nav show">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a href="#" class="nav-link active">
          <div><i class="ico ico-fi-hotel"></i></div>
          <div class="wiza-title">Hotels</div>
        </a>
      </li>
      <?php if(\Config::get('app.currentdomain') != 'voyage'){?>
      <li class="nav-item">
        <a href="{{ \Config::get('app.voyagedomain') }}" class="nav-link">
          <div><i class="ico ico-voyage"></i></div>
          <div class="wiza-title">Voyage</div>
        </a>
      </li>
      <?php }?>
      <?php if(\Config::get('app.currentdomain') != 'spa'){?>
      <li class="nav-item">
        <a href="{{ \Config::get('app.spadomain') }}" class="nav-link">
          <div><i class="ico ico-spa"></i></div>
          <div class="wiza-title">Spas</div>
        </a>
      </li>
      <?php }?>
      <?php if(\Config::get('app.currentdomain') != 'safari'){?>
      <li class="nav-item">
        <a href="{{ \Config::get('app.safaridomain') }}" class="nav-link">
          <div><i class="ico ico-safari"></i></div>
          <div class="wiza-title">Safaris</div>
        </a>
      </li>
      <?php }?>
      <?php if(\Config::get('app.currentdomain') != 'islands'){?>
      <li class="nav-item">
        <a href="{{ \Config::get('app.islandsdomain') }}" class="nav-link">
          <div><i class="ico ico-islands"></i></div>
          <div class="wiza-title">Islands</div>
        </a>
      </li>
      <?php }?>
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
          <div><i class="ico ico-fi-magazine"></i></div>
          <div class="wiza-title">Magazine</div>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <div><i class="ico ico-fi-experience"></i></div>
          <div class="wiza-title">Experiences</div>
        </a>
      </li>
    </ul>
  </div>