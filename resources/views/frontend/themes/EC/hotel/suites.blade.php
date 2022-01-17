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
</style>
<div class="d-flex p-3 mobile-on" style="background: #f9f9f9;">
  <a href="javascript:history.go(-1)" class="back-btn">
    <i class="ico ico-back"></i>
  </a>
  <div class="title-main">
    <h2><?php echo $property->property_name;?></h2>
  </div>
</div>
<div class="content-em">
<div class="container pt-5" id="main-content">
  <div class="slide-023k4"></div>
  <div class="slider-bg-inner">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4 pt-3">
            @include('frontend.themes.EC.hotel.sidebar_nav')
        </div>
        <div class="col-lg-8 col-hotel-slider" id="suiteslist-column">
            <div class="header-suite-list justify-content-between align-items-center mb-2">
                <div class="title-outer-container">
                    <div class="title-main offset-930 pr-3 title-subs">
                        <h2 data-place="property_name"><?php echo $property->property_name;?></h2>
                    </div>
                </div>
            </div>
            <div class="col-hotel-slider" id="suiteslist">
              @include('frontend.themes.EC.properties.subtemplates.suite_list_template')
            </div>
        </div>    
        <div class="col-lg-8 col-hotel-slider" id="suiteinfo" style="display: none;">
            @include('frontend.themes.EC.properties.subtemplates.suite_detail_template')
        </div>
        <input type="hidden" name="city_" id="city" value="<?php echo $property->city;?>">
      </div>
    </div>
  </div>
</div>
</div>
@include('frontend.themes.EC.reservation.partials.privacy_model.terms_and_conditions')
@include('frontend.themes.EC.reservation.partials.privacy_model.privacy-policy')
@include('frontend.themes.EC.layouts.subsections.priceinfo')
@include('frontend.themes.EC.layouts.subsections.quick_info')
@include('frontend.themes.EC.layouts.subsections.reviews')
@include('frontend.themes.EC.layouts.subsections.share')
@include('frontend.themes.EC.layouts.subsections.suiteinfo')
@include('frontend.themes.EC.layouts.subsections.channel_popup')
<?php if(isset($property_id)):?>
<script>
   $('.top-header').addClass('mobile-off');
  currentPropertyId = <?php echo $property_id;?>;
  $(document).ready(function(){
    $('#suitelist1-tab-' + parseInt(window.location.hash.substring(1))).trigger("click");
    
    $("#suiteslist-tab").click(function(){
      $("#suiteslist-column").show();
      $("#suiteslist").show();
      $("#suiteinfo").hide();
    });

  });
  var city = '<?php echo $property->city;?>';
</script>
<?php endif; ?>
@section('mobile_hotel_header')
<script>
  $('.top-header').addClass('mobile-off');
  
</script>
@endsection
@endsection

