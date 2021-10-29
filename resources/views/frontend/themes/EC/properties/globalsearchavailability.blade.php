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
<script type="text/javascript" src="{{ asset('themes/EC/js/global-availability-search.js') }}"></script>
<script type="text/javascript">
  var channelurl = '{{URL::to("getyoutubechannel/")}}';
  setTimeout("getDefaultChannel('<?php echo isset($location[0]['category_alias']) ? $location[0]['category_alias'] : ''; ?>')", 5000);
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
    <div class="container pt-5">
      <div class="mt-5">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="d-flex align-items-center nav-desc main-title-heading">
              <a href="#" class="sidebar-back" title="Go back to previous page" data-toggle="tooltip">
                <i class="ico ico-back"></i>
              </a>
              <div class="title-main pl-0">
                <h2><span data-toggle="tooltip" title="Your selected destination experience">{{$keyword}}</span> <a
                    href="#searchF" data-toggle="collapse"><i class="ico ico-reload reload-offset"
                      title="Reset your search result" data-toggle="tooltip"></i></a>
                </h2>
              </div>
              <div class="pl-4 pt-3">
                <?php print count($propertyResultsForView['lifestyle']) + count($propertyResultsForView['bespoke']) + count($propertyResultsForView['dedicated']); ?> exceptional hotels</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav nav-pills nav-clr nav-breadcrumb dedicated-breadcrumb justify-content-end">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <?php 
              foreach ($path as $cid => $cat) : 
              ?>
                <li class="nav-item">
                  <a class="nav-link" href="/globalsearchavailability?s=<?php echo $cat ?>"><?php echo $cat ?></a>
                </li>
              <?php 
              //active pr-0
              endforeach; 
              ?>
            </ul>
          </div>
        </div>
        <div class="mobile-off">          
          <ul class="nav nav-pills tabs-w3" id="myTab" role="tablist">
            <?php if (!empty($propertyResultsForView['lifestyle'])) : ?>
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="lifestyle-tab" data-toggle="pill" href="#lifestyle" role="tab" aria-controls="lifestyle" aria-selected="true">LIFESTYLE</a>
              </li>
            <?php endif; ?>
            <?php if (!empty($propertyResultsForView['dedicated'])) : ?>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="dedicated-tab" data-toggle="pill" href="#dedicated" role="tab" aria-controls="dedicated" aria-selected="false">DEDICATED</a>
              </li>
            <?php endif; ?>
            <?php if (!empty($propertyResultsForView['bespoke'])) : ?>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="bespoke-tab" data-toggle="pill" href="#bespoke" role="tab" aria-controls="bespoke" aria-selected="false">BESPOKE</a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
        <div class="dropdown dropdown-block mobile-on">
          <button class="btn btn-outline-dark btn-block dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">            
          </button>
          <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
            <?php if (!empty($propertyResultsForView['lifestyle'])) : ?>
              <a class="dropdown-item" data-toggle="tab" href="#lifestyle">Lifestyle</a>
            <?php endif; ?>
            <?php if (!empty($propertyResultsForView['dedicated'])) : ?>
              <a class="dropdown-item" data-toggle="tab" href="#dedicated">Dedicated</a>
            <?php endif; ?>
            <?php if (!empty($propertyResultsForView['bespoke'])) : ?>
              <a class="dropdown-item" data-toggle="tab" href="#bespoke">Bespoke</a>
            <?php endif; ?>
          </div>
        </div>
        <div class="tab-content pt-5" id="search-results-content">
          @include('frontend.themes.EC.properties.subtemplates.results_grid')          
        </div>
      </div>
    </div>
  </div>
@endsection

{{-- For custom script --}}
@section('custom_js')
@parent
<script>
  <?php if ($view == 'channel') : ?>
    $('#locationViews').trigger("click");
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
@include('frontend.themes.EC.layouts.subsections.videos')

@endsection
