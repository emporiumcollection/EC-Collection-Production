<?php
$mapsearch = URL::to("mapsearchavailability?" . Request::getQueryString());
$videourl = URL::to("social-youtube?" . Request::getQueryString());
$instagramurl = URL::to("social-instagram?" . Request::getQueryString());

?>
@extends('frontend.themes.EC.layouts.main')
{{-- For Title --}}
@section('title', 'Global search availability')
{{-- For Meta Keywords --}}
@section('meta_keywords', '')
{{-- For Meta Description --}}
@section('meta_description', '')

{{-- For Page's Content Part --}}
@section('content')

<?php if(\Config::get('app.currentdomain') == 'voyage'){?>
    <style type="text/css">
      body{
        background-color: #FFFFF!important;
      }
    </style>
<?php } ?>
    
<?php if(\Config::get('app.currentdomain') == 'spa'){?>
    <style type="text/css">
      body{
        background-color: #F9F8F2!important;
      }
    </style>
<?php } ?>
    
<?php if(\Config::get('app.currentdomain') == 'safari'){?>
    <style type="text/css">
      body{
        background-color: #EFEAE4!important;
      }
    </style>
<?php } ?>    
<?php if(\Config::get('app.currentdomain') == 'islands'){?>
    <style type="text/css">
      body{
        background-color: #FFFFFF!important;
      }
    </style>
<?php } ?>
<script type="text/javascript" src="{{ asset('themes/EC/js/global-availability-search.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/reviews.js') }}"></script>
<script type="text/javascript">
  var channelurl = '{{URL::to("getyoutubechannel/")}}';
  $(window).on('load', function() {
    setTimeout("getDefaultChannel('<?php echo isset($location[0]['category_alias']) ? $location[0]['category_alias'] : ''; ?>')", 1000);
  });
</script>
<div class="content-em">
  
    <div class="col-lg-3 col-sm-3 position-relative mobile-on">
      <div class="sidebar-nav-section" id="sidebar">
        <div class="humburger-menu-sidebar">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>

        <div class="onstickmainpage2 nav-collapse main-nav-sidebar">
          <div class="navheadimage">
            <img src="https://emporium-voyage.com/uploads/category_imgs/1522478496-67775161.jpg" alt=""
              class="mCS_img_loaded desaturate">
            <div class="headingoverlay">
              <span class="destinationTitle">Austria<br>
                <span class="hashTag">#loveluxuryaustria</span>
              </span>
            </div>
          </div>
          <a href="#" class="close-second-menu">
            <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
              xmlns="http://www.w3.org/2000/svg">
              <title>Close</title>
              <path
                d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
              </path>
            </svg>
          </a>
          <ul class="nav flex-column nav-sidebar ">
            <li class="nav-item">
              <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#experiences" role="button"
                aria-expanded="false" aria-controls="experiences">
                Experiences
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
              <div class="collapse @@suiteActive" id="experiences">
                <ul class="nav flex-column nav-sidebar is-small">
                  <li class="nav-item">
                    <a class="nav-link nav-link-sub" href="#">Design Hotels</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-sub" href="#">Boutique Hotels</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-sub" href="#">Spa and Wellness Hotels</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-sub" href="#">Cullinary Delights</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item mt-3">
              <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#suite" role="button"
                aria-expanded="false" aria-controls="suite">
                Explore <span class="font-italic underline">New York</span>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
              <div class="collapse @@suiteActive" id="suite">
                <ul class="nav flex-column nav-sidebar is-small">
                  <li class="nav-item">
                    <a class="nav-link nav-link-sub" href="restaurant.html">Restaurants & Bars</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-sub" href="#">Video Channel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-sub" href="#">Get Social</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-sub" href="#">Map Search</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </div>
    <div class="container pt-5" id="search-results-content">
      @include('frontend.themes.EC.properties.subtemplates.results_grid')          
    </div>
  </div>
@endsection

{{-- For custom script --}}
@section('custom_js')
@parent
<script>
  <?php if ($view == 'channel') : ?>
    $(window).on('load', function() {
      $('.ico-video').parents("a").trigger("click");
    });
  <?php endif; ?>
  $('.img-main-banner').slick({
    infinite: true,
    speed: 600,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
    slidesToShow: 1,

  });
  $(document).on('click', ".dest-collection", function(e) {
    e.preventDefault();
    //var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var d_name = $(this).attr('data-name');
    var cat = $("input[name='cat']").val();
    var coll_type = 'destinations';
    var req_for = '';
    var cobj = $(this);
    //var token = $("input[name='_token']").val();

    $.ajax({
      url: '{{URL::to("propcollection/")}}',
      dataType: 'json',
      data: {
        d_name: d_name,
        coll_type: coll_type,
        cat: cat
      },
      type: 'post',
      success: function(response) {
        if (response.type == 'dedicated-collection') {
          var mem_types = response.mem_types;
          if (mem_types.indexOf("2") > 0) {
            //window.location.href = '{{URL::to('luxury_destinations')}}/'+cat+'/dedicated-collection';
            //cat = $("#dd-destination").val();
            getPropertyByCollection('dedicated-collection', cat, 1, req_for);
            $(".dest-collection").removeClass('active');
            cobj.addClass('active');
            $("#dest_collection").val('dedicated-collection');
          } else {
            show_modal_content(response.type);
            $("#showMemberLoginPopup").modal({
              backdrop: 'static',
              keyboard: false
            }, 'show');
          }
        } else if (response.type == 'bespoke-collection') {
          var mem_types = response.mem_types;
          if (mem_types.indexOf("3") > 0) {
            //window.location.href = '{{URL::to('luxury_experience')}}/'+cat+'/bespoke-collection';
            //cat = $("#dd-destination").val();
            getPropertyByCollection('bespoke-collection', cat, 1, req_for);
            $(".dest-collection").removeClass('active');
            cobj.addClass('active');
            $("#dest_collection").val('bespoke-collection');
          } else {
            show_modal_content(response.type);
            $("#showMemberLoginPopup").modal({
              backdrop: 'static',
              keyboard: false
            }, 'show');
          }
        } else {
          //cat = $("#dd-destination").val();
          getPropertyByCollection('lifestyle-collection', cat, 1, req_for);
          $(".dest-collection").removeClass('active');
          cobj.addClass('active');
          $("#dest_collection").val('lifestyle-collection');
          //window.location.href = '{{URL::to('luxury_experience')}}/'+cat+'/lifestyle-collection';
        }
      }
    });
  });
   
</script>
  

@include('frontend.themes.EC.layouts.subsections.mobile_hotel_info')
@include('frontend.themes.EC.layouts.subsections.suites')
@include('frontend.themes.EC.layouts.subsections.share')
@include('frontend.themes.EC.layouts.subsections.policies')
@include('frontend.themes.EC.layouts.subsections.availability')
@include('frontend.themes.EC.layouts.subsections.policies')
@include('frontend.themes.EC.layouts.subsections.my_collections')
@include('frontend.themes.EC.layouts.subsections.reservation')
@include('frontend.themes.EC.layouts.subsections.suiteinfo')
@include('frontend.themes.EC.layouts.subsections.suite_deal')
@include('frontend.themes.EC.layouts.subsections.filter')
@include('frontend.themes.EC.layouts.subsections.priceinfo')
@include('frontend.themes.EC.layouts.subsections.location_info')
@include('frontend.themes.EC.layouts.subsections.quick_info')
@include('frontend.themes.EC.layouts.subsections.reviews')
@include('frontend.themes.EC.layouts.subsections.gallery')
@include('frontend.themes.EC.layouts.subsections.property_gallery')
@include('frontend.themes.EC.layouts.subsections.search_history')
@include('frontend.themes.EC.layouts.subsections.ask_question')
@include('frontend.themes.EC.reservation.partials.privacy_model.terms_and_conditions')
@include('frontend.themes.EC.reservation.partials.privacy_model.privacy-policy')

@endsection
