
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
<div class="content-em">
  <div class="top-wrapper">
    <div class="container ">
      @include('frontend.themes.EC.reservation.nav_wizard')

    <div id="step-1" class="tab-pane" role="tabpanel">
      <div class="row">
        <div class="col-lg-9 col-md-8 mb-4">
          <h2 class="mb-5">Your date and suite</h2>
          <hr>
          <h5 class="mb-4 mt-5">Your selected dates include: </h5>
            
          <div class="row mb-5">            
            <div class="col">
              <p><b>Arrival date</b></p>
              <div class="form-group form-inline-group form-date-lg">
                <input type="hidden" name="property_id" id="property_id" value="<?php echo $property_id?>">
                <input type="text" class="form-control form-line fromdate" name="arrival_date" id="arrival_date"  value="{!! date('d-M-Y', strtotime(Session::get('arrival')));  !!}">
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
              </div>
            </div>
            <div class="col">
              <p><b>Departure date</b></p>
              <div class="form-group form-inline-group form-date-lg">
                <input type="text" class="form-control form-line todate" name="departure_date" id="departure_date" value="{!! date('d-M-Y', strtotime(Session::get('departure')));  !!}">
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 mt-4">
              <div class="text-right">
                <a href="javascript:void(0);" class="btn btn-dark px-5 goto-guest step_where">
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
@endsection