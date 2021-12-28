@extends('frontend.themes.EC.layouts.main')
{{--  For Title --}}
@section('title', 'Global search availability')
{{-- For Meta Keywords --}}
@section('meta_keywords', '')
{{-- For Meta Description --}}
@section('meta_description', '')
{{-- For Page's Content Part --}}
@section('content')
<div class="content-em mt-xs-5">
{{-- <div class="top-wrapper" id="main-content">
  <div class="slide-023k4"></div> 
  <div class="slider-bg-inner">--}}
    <div class="container pt-5">
      <div class="row mt-5">
        <div class="col-lg-4 mb-4 pt-3">
            @include('frontend.themes.EC.hotel.sidebar_nav_hd')
        </div>        
        @include('frontend.themes.EC.hotel.subtemplates.location')
        <input type="hidden" name="city_" id="city" value="<?php echo $property->city; ?>">
      </div>
    </div>
  {{-- </div>
</div> --}}
</div>
@include('frontend.themes.EC.layouts.subsections.property_gallery')
@endsection
