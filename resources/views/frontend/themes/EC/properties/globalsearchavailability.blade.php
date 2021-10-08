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
@section('content')
<style>
    .experiences{
        cursor: pointer;
    }

    .global-search-resultbox .slick-list{
      height: 320px;
    }

    .suite-popup .result-grid .slick-list{
      height: 750px;
    }

    .global-search-resultbox .slick-slide img{
      width: 450px!important;
      height: 320px!important;
      top: 160px!important;
      left: 225px!important;
    }
</style>
<script type="text/javascript" src="{{ asset('themes/EC/js/global-availability-search.js') }}"></script>
<script type="text/javascript">
  var channelurl = '{{URL::to("getyoutubechannel/")}}';
  setTimeout("getDefaultChannel('<?php echo isset($location[0]['category_alias'])?$location[0]['category_alias']:'';?>')", 5000);
</script>
<div class="content-em">
    <div class="container pt-5">
      <div class="d-flex align-items-center nav-desc main-title-heading my-5">
        <a href="#" class="sidebar-back" title="Go back to previous page" data-toggle="tooltip">
          <i class="ico ico-back"></i>
        </a>
        <div class="title-main">
          <h2>{{$keyword}}<a href="#searchF" data-toggle="collapse"><i class="ico ico-reload reload-offset" title="Reset your search result" data-toggle="tooltip"></i></a>
          </h2>
          <input type="hidden" name="activeDestination" value="{{$keyword}}" />
          <input type="hidden" name="m_type" value="{{$m_type}}" />
          <input type="hidden" name="hid_propid" value="" />
        </div>

      </div>
      <div class="row mt-5 mmt-0" id="main-content">
        <div class="col-lg-3 col-sm-3 position-relative">
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
                <li class="nav-item mt-3">
                  <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#suite" role="button"
                    aria-expanded="false" aria-controls="suite">
                    Explore <span class="font-italic underline">{{ $keyword }}</span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                  <div class="collapse @@suiteActive" id="suite">
                    <ul class="nav flex-column nav-sidebar is-small">
                      <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="restaurant.html">Restaurants & Bars</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="{{ $videourl }}">Video Channel</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="{{ $instagramurl }}">Get Social</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="{{ $mapsearch }}">Map Search</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </div>
        <div class="col-lg-9 content-lg">
          <div class="main-page-banner">
            <div class="img-main-banner">
              <div>
                <img src="uploads/category_imgs/<?php echo isset($location[0]['category_image'])?$location[0]['category_image']:''; ?>" class="img-fluid"
                  alt="">
              </div>
              <div>
                <img src="https://www.emporium-voyage.com/uploads/slider_images/1517173449-45205782.jpg"
                  class="img-fluid" alt="">
              </div>
            </div>
            <ul class="nav nav-pills nav-clr nav-breadcrumb nav-breadcrumb-ip breadcrumb-main mb-3 mt-3">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <?php foreach($path as $cid => $cat):?>
              <li class="nav-item">
                <a class="nav-link" href="#"><?php echo $cat ?></a>
              </li>
              <?php endforeach;?>          
            </ul>
            <div class="hotel-meta hotel-meta-banner">
              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#info_sidebar">
                Info
              </a>
              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#gallery">
                Gallery
              </a>
              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#videos" id="locationViews">
                Videos
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
            <div class="main-banner-content">
              <div class="content-inner">
                <h3 class="mb-4">{{ $keyword }}</h3>
                <p>
                  <?php echo isset($location[0]['category_description'])?$location[0]['category_description']:'';?>
                </p>
              </div>
            </div>
          </div>
<?php 
foreach($editorsProperties as $editorChoice):
?>    
    @include('frontend.themes.EC.properties.subtemplates.left_aligned_hotel', ['editorChoice' => $editorChoice, 'propertyImages' => $editorChoice->propertyImages, 'block_title' => 'Editors choice hotel'])
<?php    
endforeach;
?>
<?php 
foreach($featureProperties as $featureProp):
?>    
    @include('frontend.themes.EC.properties.subtemplates.left_aligned_hotel', 
    ['editorChoice' => $featureProp, 'propertyImages' => $featureProp->propertyImages, 'block_title' => 'Feature hotel'])
<?php    
endforeach;
?>
          <div class="mobile-off">
            <p><?php print count($propertyResultsForView['lifestyle']) + count($propertyResultsForView['bespoke']) + count($propertyResultsForView['dedicated']) ;?> exceptional hotels</p>
            <ul class="nav nav-tabs tabs-w3" id="myTab" role="tablist">
              <?php if(!empty($propertyResultsForView['lifestyle'])):?>
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="lifestyle-tab" data-toggle="tab" href="#lifestyle" role="tab"
                    aria-controls="lifestyle" aria-selected="true">LIFESTYLE</a>
                </li>
              <?php endif;?>
              <?php if(!empty($propertyResultsForView['dedicated'])):?>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="dedicated-tab" data-toggle="tab" href="#dedicated" role="tab"
                    aria-controls="dedicated" aria-selected="false">DEDICATED</a>
                </li>
              <?php endif;?>
              <?php if(!empty($propertyResultsForView['bespoke'])):?>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="bespoke-tab" data-toggle="tab" href="#bespoke" role="tab"
                    aria-controls="bespoke" aria-selected="false">BESPOKE</a>
                </li>
              <?php endif;?>
            </ul>
          </div>
          <div class="dropdown dropdown-block mobile-on">
            <button class="btn btn-outline-dark btn-block dropdown-toggle" type="button" id="dropdownMenuButton"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              396 exceptional hotels
            </button>
            <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
              <?php if(!empty($propertyResultsForView['lifestyle'])):?>
              <a class="dropdown-item" data-toggle="tab" href="#lifestyle">Lifestyle</a>
              <?php endif;?>
              <?php if(!empty($propertyResultsForView['dedicated'])):?>
              <a class="dropdown-item" data-toggle="tab" href="#dedicated">Dedicated</a>
              <?php endif;?>
              <?php if(!empty($propertyResultsForView['bespoke'])):?>
              <a class="dropdown-item" data-toggle="tab" href="#bespoke">Bespoke</a>
              <?php endif;?>
            </div>
          </div>
          <div class="tab-content pt-5" id="myTabContent">
            <?php if(!empty($propertyResultsForView['lifestyle'])):?>
            <div class="tab-pane fade show active" id="lifestyle" role="tabpanel" aria-labelledby="lifestyle-tab">
              <div class="row">
                <?php 
                foreach($propertyResultsForView['lifestyle'] as $lifestyleProp):
                ?>
                  @include('frontend.themes.EC.properties.subtemplates.result_card', 
                  ['property' => $lifestyleProp, 'propertyImages' => $lifestyleProp->propertyImages])
                <?php
                endforeach;
                ?>
              </div>
            </div>
            <?php endif;?>
            <?php if(!empty($propertyResultsForView['dedicated'])):?>
            <div class="tab-pane fade" id="dedicated" role="tabpanel" aria-labelledby="dedicated-tab">
              <div class="row">
                <?php 
                foreach($propertyResultsForView['dedicated'] as $dedicatedProp):
                ?>
                  @include('frontend.themes.EC.properties.subtemplates.result_card', 
                    ['property' => $dedicatedProp, 'propertyImages' => $dedicatedProp->propertyImages])
                <?php
                endforeach;
                ?>
              </div>
            </div>
            <?php endif;?>
            <?php if(!empty($propertyResultsForView['bespoke'])):?>
            <div class="tab-pane fade" id="bespoke" role="tabpanel" aria-labelledby="bespoke-tab">
              <div class="row">
                <?php 
                foreach($propertyResultsForView['bespoke'] as $bespokeProp):
                ?>
                  @include('frontend.themes.EC.properties.subtemplates.result_card', 
                    ['property' => $bespokeProp, 'propertyImages' => $bespokeProp->propertyImages])
                <?php 
                endforeach;
                ?>
              </div>
            </div>
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

{{-- For custom script --}}
@section('custom_js')
    @parent
<script>
<?php if($view == 'channel'):?>
  $('#locationViews').trigger("click");
<?php endif;?>
$(document).on('click', ".dest-collection", function(e){
  e.preventDefault();
  //var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  var d_name = $(this).attr('data-name');
  var cat =  $("input[name='cat']").val();
  var coll_type = 'destinations';
  var req_for = '';
  var cobj = $(this);
  //var token = $("input[name='_token']").val();

  $.ajax({
    url:'{{URL::to("propcollection/")}}',
    dataType:'json',
    data: {d_name:d_name, coll_type:coll_type, cat:cat},
    type: 'post',
    success: function(response){
      if(response.type=='dedicated-collection'){
          var mem_types = response.mem_types;
          if(mem_types.indexOf("2")>0){
              //window.location.href = '{{URL::to('luxury_destinations')}}/'+cat+'/dedicated-collection';
              //cat = $("#dd-destination").val();
              getPropertyByCollection('dedicated-collection', cat, 1, req_for);
              $(".dest-collection").removeClass('active');
              cobj.addClass('active');
              $("#dest_collection").val('dedicated-collection');
          }else{
              show_modal_content(response.type);
              $("#showMemberLoginPopup").modal({backdrop: 'static', keyboard: false}, 'show');
          }
      }else if(response.type=='bespoke-collection'){
          var mem_types = response.mem_types;
          if(mem_types.indexOf("3")>0){
              //window.location.href = '{{URL::to('luxury_experience')}}/'+cat+'/bespoke-collection';
              //cat = $("#dd-destination").val();
              getPropertyByCollection('bespoke-collection', cat, 1, req_for);
              $(".dest-collection").removeClass('active');
              cobj.addClass('active');
              $("#dest_collection").val('bespoke-collection');
          }else{
              show_modal_content(response.type);
              $("#showMemberLoginPopup").modal({backdrop: 'static', keyboard: false}, 'show');
          }
      }else{
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
@endsection

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