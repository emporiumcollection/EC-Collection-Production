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

        $('#suite .nav-item .nav-link-sub').click(function(){
            $("#suiteslist-column").hide();
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
          <a href="/hotel/<?php echo $property->property_slug;?>">
            <i class="ico ico-back mb-4"></i>
          </a>
        </li>
        @if(!empty($property->suites))
          <li class="nav-item">
            <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#suite" role="button" aria-expanded="true" aria-controls="suite">
              Suites <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <div class="collapse show" id="suite">
              <ul class="nav flex-column nav-sidebar is-small" data-place="property-suites">
                <li class="nav-item">
                  <a class="nav-link nav-link-sub" href="/hotel/suite/">All Suites</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-sub" href="/hotel/detailsuite">The Mark Fire Bedroom Terrace Suite</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-sub" href="/hotel/detailsuite">Suite Name</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-sub" href="/hotel/detailsuite">Suite Name</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-sub" href="/hotel/detailsuite">Suite Name</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-sub" href="/hotel/detailsuite">Suite Name</a>
                </li>
              </ul>
            </div>
          </li>
        @endif
        @if(isset($property->architecture_portraite_image1) && !empty($property->architecture_portraite_image1))
          <li class="nav-item">
            <a class="nav-link " href="/hotel/{{ $property->property_slug}}/architecture">Architecture</a>
          </li>
        @endif  
        {{-- <li class="nav-item">
          <a class="nav-link " href="/hotel/spa">Spa & Wellness </a>
        </li> --}}
        <div id="personaldetails">
          <li class="nav-item">
            <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#hotel_info" role="button" aria-expanded="false" aria-controls="hotel_info">
            Hotel Info<i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <div class="collapse show" id="hotel_info">
              <ul class="nav flex-column nav-sidebar is-small">
                @if(isset($faq) && !empty($faq))
                  <li class="nav-item">
                    <a class="nav-link btn-sidebar nav-link-sub" href="#" data-sidebar="#QueAns">FAQs</a>
                  </li>
                @endif
                @if(isset($surroundings) && !empty($surroundings))
                  <li class="nav-item">
                    <a class="nav-link btn-sidebar nav-link-sub" href="#" data-sidebar="#sourounding">Sourounding</a>
                  </li>
                @endif
                @if(isset($fac) && !empty($fac))
                  <li class="nav-item">
                    <a class="nav-link btn-sidebar nav-link-sub" href="#" data-sidebar="#facilities">Facilities</a>
                  </li>
                @endif
                @if(isset($childpolicy) && !empty($childpolicy))
                  <li class="nav-item">
                    <a class="nav-link btn-sidebar nav-link-sub" href="#" data-sidebar="#child_policy">Children Policy</a>
                  </li>
                @endif
                @if(isset($tips) && !empty($tips))
                  <li class="nav-item">
                    <a class="nav-link btn-sidebar nav-link-sub" href="#" data-sidebar="#tips">Tips</a>
                  </li>
                @endif
                @if(isset($policy) && !empty($policy))
                  <li class="nav-item">
                    <a class="nav-link btn-sidebar nav-link-sub" href="#" data-sidebar="#policy">Policies</a>
                  </li>
                @endif
              </ul>
            </div>
          </li>
        </div>
        <li class="nav-item">
          <a class="nav-link @@locActive" href="/hotel-location/{{ $property->property_slug }}">Location</a>
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
        @if (!empty($property->youtube_channel))
          <li class="nav-item">
            <a class="nav-link btn-sidebar" href="#" onclick="getHotelDefaultChannel(<?php echo $property->id;?>)" data-sidebar="#channel-popup">Video Channel</a>
          </li>
        @endif
        
      </ul>
    </div>
  </div>
  <script type="text/javascript">
    $('#personaldetails').find('ul').each(function(){
      var txt = $("li", this).text();
      if(txt.length <= 0){
        $(this).hide();
      }
    });
    if(!$('#personaldetails').find('ul:visible').length){
      $('#personaldetails').hide();
    }
  </script>
