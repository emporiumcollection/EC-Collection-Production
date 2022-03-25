@extends('frontend.themes.EC.layouts.main')
{{--  For Title --}}
@section('title', 'Global search availability')
{{-- For Meta Keywords --}}
@section('meta_keywords', '')
{{-- For Meta Description --}}
@section('meta_description', '')
{{-- For Page's Content Part --}}
@section('content')
<div class="mobile-header-detail">
  <div class="d-flex flex-column">
    <div class="d-flex w-100 title-on-header">
      <a href="javascript:history.go(-1)">
        <i class="ico ico-back-btn mr-3"></i>
      </a>
      <div class="title-main">
        <h2>{{$hotel_data[0]->property_name}}</h2>
      </div>
    </div>
    <ul class="nav nav-right ml-auto mobile-off">
      <li class="nav-item">
        <a class="nav-link " href="#searchHistory" data-toggle="collapse">
          <i class="ico ico-layer"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-sidebar" href="#" data-sidebar="#question">
          <i class="ico ico-convertation"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-sidebar" href="#" data-sidebar="#share">
          <i class="ico ico-share-2"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="ico ico-diamon"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Add to collection</a>
          <a class="dropdown-item btn-sidebar" href="#" data-sidebar="#myCollection">Create new collection</a>
        </div>
      </li>
    </ul>
  </div>
</div>
<div class="content-em content-detail-hotel">
  <div class="top-wrapper" id="main-content">
    <div class="slide-023k4"></div>
    <div class="slider-bg-inner">
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-4 mb-4 pt-3">
              @include('frontend.themes.EC.hotel.sidebar_nav_hd')
          </div>        
          @include('frontend.themes.EC.hotel.subtemplates.hotel_detail')
        </div>
      </div>
    </div>
  </div>
</div>
@section('mobile_hotel_header')
<script>
  $('.top-header').addClass('mobile-off');
  var navpos = $('.meta-sticky').offset();
$(window).bind('scroll', function () {
  if ($(window).scrollTop() > navpos.top) {
    $('.meta-sticky').addClass('sticky'); // Add sticky navbar
    $(".top-wrapper").css("margin-bottom", "97px"); // Set the correct margin space to content container below
  } else {
    $('.meta-sticky').removeClass('sticky'); // Remove sticky navbar
    $(".top-wrapper").css("margin-bottom", "");// Set margin to default
  }
});
$('a.scrollto[href*="#"]:not([href="#"])').click(function () {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    $(target).collapse('show');
    if (target.length) {
      $('html, body').animate({
        scrollTop: (target.offset().top - 120)
      }, 1000, "easeInOutExpo");
      return false;
    }
  }
});
$('.dropdown-suite .dropdown-menu a').click(function () {
  $('.dropdown').dropdown('hide')
})
if ($(window).width() < 992) {
  $('.hotel-info-panel').on('shown.bs.collapse', function (e) {
    var $panel = $(this).closest('.card');
    $('html,body').animate({
      scrollTop: $panel.offset().top - 120
    }, 500);
  });
}
</script>
@endsection
@endsection