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
</style>
@section('content')
<div class="reservation-em content-em">
  <div class="top-wrapper">
    <div class="container-full  ">
      <div id="smartwizard" class="wizard-reservation sw sw-theme-arrows sw-justified">
        @include('frontend.themes.EC.reservation.nav_wizard')
        <div class="pt-4 wizard-reservation-content">
          <div id="step-1" class="tab-pane pt-lg-5 pt-xl-5" role="tabpanel">
            <div class="row pt-lg-5 pt-xl-5">
              <div class="col-lg-9 col-md-8 mb-4 ">
                <h2 class="mb-5 d-flex align-items-center"><a href="/hotel/{{ $property_slug }}"
                  class="backwizard btn-backwizard mobile-off"><i
                    class="ico ico-back mr-3"></i></a> Stay Dates:</h2>
                <hr>
                <h5 class="mb-2 mt-3">Your selected stay dates:</h5>
                <div class="row mb-5">            
                  <div class="col">
                    <div class="form-group form-inline-group form-date-lg">
                      <input type="hidden" name="property_id" id="property_id" value="<?php echo $property_id?>">
                      <?php
                        if(Session::has('arrival') && Session::has('departure')){
                          $arrival = date('m-d-Y', strtotime(Session::get('arrival')));
                          $departure = date('m-d-Y', strtotime(Session::get('departure')));
                        }else{
                          $arrival = date('m-d-Y');
                          $departure = date('m-d-Y');
                        }
                      ?>
                      <input type="text" class="form-control range_date" name="daterange" value="{!! $arrival !!} - {!! $departure !!}"/>                
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <p class="alert alert-success ml-3" id="msg" style="display:none;"></p>
                  <div class="col-lg-12 col-md-12 mt-2">
                    <div class="text-right">
                      <a href="javascript:void(0);" class="btn btn-dark px-5 goto-guest stay_dates">
                        Edit | Update
                      </a>
                      <a href="javascript:void();" class="btn btn-dark px-5 goto-guest step_where">
                        Next
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mb-4">
                @include('frontend.themes.EC.reservation.reservation-summary', ['suites' => $suites])
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
<script>
  $(function() {
    $('input[name="daterange"]').daterangepicker({
      opens: 'true',
    }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
  });
  $('.top-header').addClass('top-header-reservation');
  $('.top-header-reservation').removeClass('top-header');

  function m_reservation_header(x) {
    if (x.matches) { // If media query matches
      $('.top-header').addClass('top-header-reservation');
      $('.top-header-reservation').removeClass('top-header');
      $('.top-header-reservation').addClass('mobile-off');
    }
    else{
      $('.top-header-reservation').addClass('top-header');
      $('.top-header').removeClass('top-header-reservation');
      $('.top-header').removeClass('mobile-off');
    }
  }

  var x = window.matchMedia("(max-width: 767px)")
  m_reservation_header(x) 
  x.addListener(m_reservation_header)
  
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if ( (scroll > 220) && (scroll < 300)) {
      $(".top-header").removeClass("header-fixed");
    }
  });
</script>
@endsection