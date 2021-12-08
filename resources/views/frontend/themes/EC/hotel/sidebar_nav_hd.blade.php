<?php 
if(!isset($property)){
  $property = $hotel_data[0];
}
?>
<script type="text/javascript" src="{{ asset('themes/EC/js/global-availability-search.js') }}"></script>
<script type="text/javascript">
    properties[<?php echo $property->id;?>] = <?php echo json_encode($property);?>;
    properties[<?php echo $property->id;?>]['images'] = <?php echo json_encode($property->propertyImages);?>;
</script>
<script type="text/javascript">
    $(document).ready(function(){
        replacePropertySuites(<?php echo $property->id;?>);

        $('#suite .nav-item').click(function(){
            $('#suiteslist').hide();
            $('#suiteinfo').show();
            setTimeout('appendSuiteSlider()', 500);
        });
    });

    function appendSuiteSlider(){  
      $('#suiteinfo .slider-detail').removeClass("slick-initialized slick-slider");
      $('#suiteinfo .slider-detail').slick({
        slidesToShow: 1,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
      });
    }
</script>
<div class="sidebar-nav-section" id="sidebar">
    <div class="humburger-menu-sidebar">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>

    <div class="nav-collapse">
      <a href="#" class="close-second-menu">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
          <title>Close</title>
          <path d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
          </path>
        </svg>
      </a>
      <ul class="nav flex-column nav-sidebar is-small onstickmainpage2">
        <li class="nav-item">
          <a href="/globalsearchavailability?s={{ \Session::get('keyword') ? \Session::get('keyword') : $property->city }}">
            <i class="ico ico-back mb-4"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#suite" role="button" aria-expanded="true" aria-controls="suite">
            Suites <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
          <div class="collapse show" id="suite">
            <ul class="nav flex-column nav-sidebar is-small">
              <li class="nav-item">
                <a class="nav-link nav-link-sub" href="/hotel/suite/{{ $property->id }}">All Suites</a>
              </li>
            
              @foreach($property->suites as $suite)

              <li class="nav-item">
                <a class="nav-link nav-link-sub" href="/hotel/suite/{{ $property->id }}/#{{$suite->id}}">{{ ucfirst(strtolower($suite->category_name))}}</a>
              </li>
              @endforeach
              
            </ul>
          </div>
        </li>
        {{--<li class="nav-item">
          <a class="nav-link " href="/hotel/architecture">Architecture</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/hotel/spa">Spa & Wellness </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#restaurant" role="button" aria-expanded="false"
            aria-controls="restaurant">
            Restaurant & Bar <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
          <div class="collapse " id="restaurant">
            <ul class="nav flex-column nav-sidebar is-small">
              <li class="nav-item">
                <a class="nav-link nav-link-sub" href="/hotel/restaurant">All Restaurant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-sub" href="/hotel/detailrestaurant">Restaurant Name</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-sub" href="/hotel/detailrestaurant">Restaurant Name</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-sub" href="/hotel/detailrestaurant">Restaurant Name</a>
              </li>
            </ul>
          </div>
        </li>--}}
        <li class="nav-item">
          <a class="nav-link @@locActive" href="/hotel/location/{{ $property->id }}">Location</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link active" href="/hotel/experiences">Experiences</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link btn-sidebar" href="#" onclick="replacePropertyData(<?php echo $property->id;?>)" data-sidebar="#property-gallery">Gallery</a>
        </li>
       {{--<li class="nav-item">
          <a class="nav-link @@sosActive" href="/hotel/social">Social</a>
        </li>--}}
        
      </ul>
    </div>
  </div>
  @include('frontend.themes.EC.layouts.subsections.property_gallery')