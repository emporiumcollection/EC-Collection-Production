@extends('frontend.themes.EC.layouts.main')
{{--  For Title --}}
@section('title', 'Global search availability')
{{-- For Meta Keywords --}}
@section('meta_keywords', '')
{{-- For Meta Description --}}
@section('meta_description', '')
{{-- For Page's Content Part --}}
@section('content')
<div class="content-em">
  <div class="top-wrapper" id="main-content">
    <div class="slider-bg-inner">
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-4 mb-4 pt-3">
            @include('frontend.themes.EC.hotel.sidebar_nav')
          </div>        
          @include('frontend.themes.EC.hotel.subtemplates.restaurant')
        </div>
      </div>
    </div>
  </div>
</div>
@include('frontend.themes.EC.hotel.sidebar-templates')
@endsection
