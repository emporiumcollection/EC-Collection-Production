<?php
  $mapsearch = URL::to("mapsearchavailability?" . Request::getQueryString());
  $videourl = URL::to("social-youtube?" . Request::getQueryString());
  $instagramurl = URL::to("social-instagram?" . Request::getQueryString());

?>
@extends('frontend.themes.EC.layouts.main')
{{--  For Title --}}
@section('title', 'Global search availability')
{{-- For Meta Keywords --}}
@section('meta_keywords', '')
{{-- For Meta Description --}}
@section('meta_description', '')
{{-- For Page's Content Part --}}
<style>
    .experiences{
        cursor: pointer;
    }
    .hotel-item-map .inner-wrapper
    {
      height: 250px;
    }
</style>
<script type="text/javascript" src="{{ asset('themes/EC/js/global-availability-search.js') }}"></script>
<script type="text/javascript">
  var channelurl = '{{URL::to("getyoutubechannel/")}}';
  setTimeout("getDefaultChannel('<?php echo $location[0]['category_alias'];?>')", 5000);
</script>
@section('content')
<div class="content-em pb-0">
    <div class="px-3 pt-5">
      <div class="title-main offset-381 mt-5 wow fadeInUp mobile-off">
        <div class="row align-items-end">
          <div class="col-9">
            <h2><?php echo $keyword;?> <a href="index.html"><i class="ico ico-reload reload-offset"></i></a></h2>
          </div>
          <div class="col-3 text-right">
            <a href="main-page.html" class="m-none">
              <i class="ico ico-menu-grid mr-2"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-5">
      <div class="maps-container">
        <div class="hotel-list-onmap">
          <a href="#" class="close-view">
            <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
              xmlns="http://www.w3.org/2000/svg">
              <title>Close</title>
              <path
                d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
              </path>
            </svg>
          </a>
          <?php foreach($propertyResults as $property):?>
            <div class="hotel-item-map" id="hotel_<?php echo $property->id;?>">
              <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
                <div class="pr-lst result-grid">
                  <?php foreach($property->propertyImages as $image):?>
                  <div>
                    <img src="<?php echo 'uploads/container_user_files/locations/'.$property['container']['name'].'/property-images/'.$image['file_name'];?>" class="w-100" alt="">
                  </div>
                  <?php endforeach;?>
                </div>
                <div class="my-dropdown">
                  <div class="btn-group dropleft">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="ico ico-diamon diamon-label"></i>
                    </a>
                    <div class="dropdown-menu">
                      <a href="#" class="dropdown-item btn-sidebar" data-sidebar="#myCollection">Add to collection</a>
                      <a href="#" class="dropdown-item btn-sidebar create-collection" data-sidebar="#myCollection">Create
                        new collection</a>
                      <a href="#" class="dropdown-item btn-sidebar create-collection" data-sidebar="#share">Share</a>
                    </div>
                  </div>

                </div>
                <div class="hotel-meta full-width is-small">
                  <!--<a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">
                    Reviews
                  </a>-->
                  <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo">
                    Quick info
                  </a>
                  <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#gallery">
                    Gallery
                  </a>
                  <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside">
                    Suite(s)
                  </a>
                  <div class="hotel-prices hotel-price-detail d-flex">
                    <div class="row align-items-center justify-content-center">
                      <div class="mr-2">
                        <i class="ico ico-info-green"></i>
                      </div>
                      <h3 class="mb-0">
                        <span class="title-font-2 mr-1">From</span> <span class="color-primary">€ 167 </span>
                      </h3>
                      <div class="ml-2">
                        <span class="pernight"></span>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="hotel-meta-mobile">
                  <a href="#" class="btn rounded-0">
                    Suite Info
                  </a>
                  <a href="#" class="btn btn-primary rounded-0">
                    Check Availability
                  </a>
                </div>
              </div>
              <a href="#">
                <div class="mb-3 mt-2 ">
                  <h3 class="title-second is-small title-line mb-0"><?php echo $property->property_name;?></h3>
                </div>
              </a>
              <?php if(isset($property->suites[0]->rooms[0])):?>
                <div class="hotel-info-content px-3 font-2">
                  <div class="row align-items-center mb-3">
                    <div class="col-md-7">
                      <p class="mb-0 text-16"><b><?php echo $property->suites[0]->rooms[0]->room_name;?></b> </p>
                      <p class="text-16 mb-0"><?php echo $property->suites[0]->rooms[0]->num_beds;?> single beds</p>
                    </div>
                    <div class="col-md-5">
                      <a href="#" class="btn btn-dark btn-block btn-sm btn-sidebar" data-sidebar="#suiteside">View
                        Suites</a>
                    </div>
                  </div>

                  <p class="mb-0 guest-info">2 weeks, 2 adults </p>
                  <div class="row align-items-center mb-3">
                    <div class="col-md-6">
                      <p class="price-info mb-0">€269</p>
                    </div>
                    <div class="col-md-6 text-right">
                      <a href="#" class="btn btn-dark btn-block btn-sm">Book "11 Howard 12"</a>
                    </div>
                  </div>
                  <p class=" included"> Includes taxes and charges </p>
                  <p class="cancellation "><b>Free cancellation</b> </p>
                  <p class="text-danger "><b>Only 4 left at this price on our site</b></p>
                  <div class="addre">
                    Sitio Santo Estevão, s/n , Silves
                  </div>
                  <div class="addre-list">
                    <p class="mb-0 text-16"><b>Top attractions</b></p>
                    <div class="row">
                      <div class="col-9">Misericórdia Church</div>
                      <div class="col-3 text-right">5.1 km</div>
                      <div class="col-9">City Doors</div>
                      <div class="col-3 text-right">5.2 km</div>
                    </div>
                  </div>
                  <hr class="line-dark">
                  <div class="addre-list">
                    <p class="mb-0 text-16"><b>Top Experiences:</b></p>
                    <div class="row">
                      <div class="col-9">Lorem ipsum dolor</div>
                      <div class="col-3 text-right"><a href="#" class="btn-sidebar" data-sidebar="#topExperiences">View</a>
                      </div>
                      <div class="col-9">Sit amet</div>
                      <div class="col-3 text-right"><a href="#" class="btn-sidebar" data-sidebar="#topExperiences">View</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif;?>
            </div>
          <?php endforeach;?>
        </div>
        <div class="map-box">
          <div class="map-checkbox">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Search as I move the map </label>
            </div>
          </div>
          <div id='map_results' style='width: 100%; height: 100vh;'></div>
        </div>
      </div>
    </div>
  </div>
@endsection

{{-- For custom script --}}
@section('custom_js')
@parent
<script>
      mapboxgl.accessToken = 'pk.eyJ1IjoiZmFyaXNzeWFpZnVkZGluIiwiYSI6ImNrb253OWNqOTA1ajUyd2w0Mm92ZXEzeWUifQ.2zZbnnViPfgP4-jHknMifQ';

        var mapOfResults = new mapboxgl.Map({
          container: 'map_results',
          style: 'mapbox://styles/mapbox/light-v10',
          center: [<?php echo $center_coordinate;?>],
          zoom: 11.15
        });
        mapOfResults.addControl(new mapboxgl.NavigationControl());

        var geojsonFeatures = 
        {
          type: 'FeatureCollection',
          features: <?php echo $propertyResultsForMap;?>
        };

        mapOfResults.on('load', function () {
          geojsonFeatures.features.forEach(function (marker) {
            var el = document.createElement('div');
            el.className = 'marker';
            el.style.backgroundImage = 'url(images/basic_geolocalize-01.png)';
            el.style.width = 40 + 'px';
            el.style.height = 40 + 'px';
            el.style.backgroundRepeat = 'no-repeat',
              el.style.backgroundSize = "contain",
              el.style.backgroundPosition = "center center"
            var description = marker.properties.description;
            var title = marker.properties.title;
            var price = marker.properties.price;
            var images = marker.properties.images;
            var dataId = marker.properties.dataId;

            var slideshowContent = ""

            for (var i = 0; i < images.length; i++) {
              var img = images[i];

              slideshowContent += '<div class="image-list' + (i === 1 ? ' active' : '') + '">' +
                '<img src="' + img[0] + '" class="img-fluid" />' +
                '</div>';
            }
            var popupContent = '<div class="map-detail-container">' +
              '<div class="map-hotel-img">' +
              '<div class="popup-slider">' +
              slideshowContent +
              '</div>' +
              // '<div class="popup-nav">' +
              // '<div class="popup-btn popup-prev"></div>' +
              // '<div class="popup-btn popup-next"></div>' +
              // '</div>' +
              '</div>' +
              '<div class="map-hotel-description">' +
              '<strong class="saol-font">' + title + '</strong>' +
              '<p>' + description + '</p>' +
              '<p class="map-hotel-price">Night from <span>' + price + '</span></p>' +
              '</div>' +
              '</div>';
            console.log(popupContent);
            var popup = new mapboxgl.Popup({ offset: 25 }).setHTML(popupContent).setMaxWidth("400px");

            var tmpMarker = new mapboxgl.Marker(el);

            el.markerInstance = tmpMarker;

            tmpMarker
              .setLngLat(marker.geometry.coordinates)
              .setPopup(popup)
              .addTo(mapOfResults);

            el.addEventListener("click", e => {
              let coords = e.target.markerInstance.getLngLat();
              mapOfResults.flyTo({
                center: coords,
                zoom: 12
              });

              // popup.on('close', function (e) {
              //   $('.hotel-info-content').removeClass('active');
              //   $('.hotel-item-map').removeClass('active');
              //   $('.hotel-item-map').removeClass('not-active');
              //   $('.close-view').css('display', 'none')
              // })
              $('.hotel-item-map').removeClass('active').addClass('not-active');
              $('#' + dataId).addClass('active').removeClass('not-active');
              $('.hotel-info-content').removeClass('active');
              $('#' + dataId).find('.hotel-info-content').addClass('active');
              $('.close-view').css('display', 'flex')
              setTimeout(function () {
                $('.popup-slider').slick({
                  slidesToShow: 1,
                  prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
                  nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
                });
                $('.popup-slider').addClass('show');
              }, 100);
              $('.hotel-list-onmap').addClass('show');
            });

          })
        });

        $('.close-view').click(function (e) {
          e.preventDefault();
          $('.hotel-info-content').removeClass('active');
          $('.hotel-item-map').removeClass('active');
          $('.hotel-item-map').removeClass('not-active');
          $('.close-view').css('display', 'none');
          $('.mapboxgl-popup').remove();
          $(this).closest('.hotel-list-onmap').removeClass('show');
        })


        var locations = [
          ['<b>Loaction Name</b>', 11.8166, 122.0942],
        ];

        var mapL = L.map('map2').setView([11.206051, 122.447886], 8);

        var myIcon = L.icon({
          iconUrl: 'images/basic_geolocalize-01.svg',
          iconSize: [40, 45],
        });
        L.tileLayer(
          'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 18,
        }).addTo(mapL);

        for (var i = 0; i < locations.length; i++) {
          marker = new L.marker([locations[i][1], locations[i][2]], { icon: myIcon })
            .bindPopup(locations[i][0])
            .addTo(mapL);
        }

        var picker = $('#daterangepicker-inline').daterangepicker({
          parentEl: "#daterangepicker-inline-container",
          autoApply: true,
          minDate: new Date(),
          autoUpdateInput: false,
          locale: {
            cancelLabel: 'Clear',
          }
        });

        picker.on('apply.daterangepicker', function (ev, picker) {
          $('.onrange').html(picker.startDate.format('DD-MM-YYYY') + ' -> ' + picker.endDate.format('DD-MM-YYYY'));
          $('.include-form').fadeIn("fast");
        });
        picker.data('daterangepicker').hide = function () { };
        picker.data('daterangepicker').show();

</script>
@endsection
