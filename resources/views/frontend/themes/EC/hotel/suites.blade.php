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
<div class="content-em">
<div class="top-wrapper" id="main-content">
  <div class="slide-023k4"></div>
  <div class="slider-bg-inner">
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-4 mb-4 pt-3">
            @include('frontend.themes.EC.hotel.sidebar_nav')
        </div>
        <div class="col-lg-8 col-hotel-slider" id="suiteslist">
            @include('frontend.themes.EC.properties.subtemplates.suite_list_template')
        </div>
        <div class="col-lg-8 col-hotel-slider" id="suiteinfo">
            @include('frontend.themes.EC.properties.subtemplates.suite_detail_template')
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php if(isset($property_id)):?>
<script>
  $(document).ready(function(){
    $('#suitelist1-tab-' + parseInt(window.location.hash.substring(1))).trigger("click");
  });
</script>
<?php endif; ?>
@endsection

