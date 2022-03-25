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
        @if(!empty($property->suites))
          <li class="nav-item">
            <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#suite" role="button" aria-expanded="true" aria-controls="suite">
              Suites <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <div class="collapse show" id="suite">
              <ul class="nav flex-column nav-sidebar is-small">
                <li class="nav-item">
                  <a class="nav-link nav-link-sub" href="/hotel/{{ $property->property_slug }}/suites">All Suites</a>
                </li>
                @foreach($property->suites as $suite)
                  <li class="nav-item">
                    <a class="nav-link nav-link-sub" href="/hotel/{{ $property->property_slug }}/suites/#{{str_replace(" ", "-", strtolower($suite['category_name']))}}"> <?php echo ucfirst(strtolower($suite->category_name)); ?> </a>
                  </li>
                @endforeach
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
        <?php if(!empty($property->restaurantList) || !empty($property->barList)): ?>
          <li class="nav-item">
            <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#restaurant" role="button" aria-expanded="false" aria-controls="restaurant">
            Restaurants &amp; Bars <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
            <div class="collapse show" id="restaurant">
              <ul class="nav flex-column nav-sidebar is-small">
                <li class="nav-item">
                  <a class="nav-link nav-link-sub" href="/hotel/{{ $property->property_slug }}/restaurant">All Restaurants & Bars</a>
                </li>
                <?php if(isset($property->restaurantList)):
                 foreach($property->restaurantList as $key => $value): 
                 $slug = str_slug($value['title']); ?>
                <li class="nav-item">
                  <a class="nav-link nav-link-sub" href="/hotel/{{ $property->property_slug }}/{{'restaurant'}}/{{$slug}}">{{ $value['title'] }}</a>
                </li>
                <?php endforeach; 
                endif;

                if(isset($property->barList)):
                  foreach($property->barList as $key => $value): 
                  $slug = str_slug($value['title']); ?>
                  <li class="nav-item">
                    <a class="nav-link nav-link-sub" href="/hotel/{{ $property->property_slug }}/{{'bar'}}/{{$slug}}">{{ $value['title'] }}</a>
                  </li>
                <?php endforeach; 
                endif; ?>
              </ul>
            </div>
          </li>
        <?php endif; ?>

        <li class="nav-item">
          <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#hotel_info" role="button" aria-expanded="false" aria-controls="hotel_info">
          Hotel Info<i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
          <div class="collapse show" id="hotel_info">
            <ul class="nav flex-column nav-sidebar is-small">
              <li class="nav-item">
                <a class="nav-link btn-sidebar" href="#" data-sidebar="#QueAns">FAQs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-sidebar" href="#" data-sidebar="#sourounding">Sourounding</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-sidebar" href="#" data-sidebar="#facilities">Facilities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-sidebar" href="#" data-sidebar="#childpolicy">Children Policy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-sidebar" href="#" data-sidebar="#tips">Tips</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-sidebar" href="#" data-sidebar="#policy">Policies</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link @@locActive" href="/hotel-location/{{ $property->property_slug }}">Location</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link active" href="/hotel/experiences">Experiences</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link btn-sidebar" href="#" onclick="replacePropertyData(<?php echo $property->id;?>)" data-sidebar="#property-gallery">Gallery</a>
        </li>
        @if (!empty($property->youtube_channel))
          
          <li class="nav-item">
            <a class="nav-link btn-sidebar" href="#" onclick="getHotelDefaultChannel(<?php echo $property->id;?>)" data-sidebar="#channel-popup">Video Channel</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
@include('frontend.themes.EC.layouts.subsections.priceinfo')
@include('frontend.themes.EC.layouts.subsections.quick_info')
@include('frontend.themes.EC.layouts.subsections.reviews')
@include('frontend.themes.EC.layouts.subsections.share')
@include('frontend.themes.EC.layouts.subsections.suiteinfo')
@include('frontend.themes.EC.layouts.subsections.faqs')
@include('frontend.themes.EC.layouts.subsections.surrounding')
@include('frontend.themes.EC.layouts.subsections.facilities')  
@include('frontend.themes.EC.hotel.child_policy')
@include('frontend.themes.EC.hotel.tips')
@include('frontend.themes.EC.hotel.policy')  
@include('frontend.themes.EC.layouts.subsections.property_gallery')
@include('frontend.themes.EC.layouts.subsections.channel_popup')

@include('frontend.themes.EC.hotel.mobile_sidebar_nav')
<?php if(isset($restaurant)):?>
@include('frontend.themes.EC.hotel.subtemplates.detailrestaurant')
<?php endif;?>
