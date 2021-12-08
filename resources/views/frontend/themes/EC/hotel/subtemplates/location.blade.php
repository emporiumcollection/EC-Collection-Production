<div class="col-lg-8 content-lg">
  <ul class="nav nav-pills nav-clr nav-breadcrumb nav-breadcrumb-ip mb-3 mt-3">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="/hotel/hoteldetail/{{ $property->id }}">{{ $property->property_name }}</a>
    </li>
  </ul>
  <div class="d-flex w-100 wow fadeInUp align-items-center" data-wow-delay=".3s">
    <a href="main-page.html" class="back-btn ipad-view">
      <i class="ico ico-back"></i>
    </a>
    <div class="title-main mb-4 w-100">
      <h2>{{ $property->property_name }}</h2>
      <a href="/hotel/hoteldetail/{{ $property->id }}" class="main-close">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
          xmlns="http://www.w3.org/2000/svg">
          <title>Close</title>
          <path
            d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
          </path>
        </svg>
      </a>
    </div>
  </div>

  <div class="main-container wow fadeInUp" data-wow-delay=".3s">
    
    <div class="main-content p-0">
      <div class="map-location">
        
        
        <div id="map2"></div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function(){
    var lat  = '{{ $property->latitude}}';
    var long = '{{ $property->longitude}}';
    var loc = '{{ $property->address }}';
    setMapLocation(lat, long ,loc);
  });
</script>
@include('frontend.themes.EC.hotel.gallery')