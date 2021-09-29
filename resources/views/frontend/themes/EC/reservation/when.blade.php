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
                <input type="text" class="form-control form-line fromdate" value="{!! Session::get('arrival_date') !!}">
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
              </div>
            </div>
            <div class="col">
              <p><b>Departure date</b></p>
              <div class="form-group form-inline-group form-date-lg">
                <input type="text" class="form-control form-line todate" value="{!! Session::get('departure_date') !!}">
                <span><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">

          @include('frontend.themes.EC.reservation.reservation-summary')

          <div class="reservation-total">
            <table class="table table-borderless mb-0">
              <tr>
                <td class="px-0 py-1">Total</td>
                <td class="px-0 py-1 text-right"></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-lg-9 col-md-8 mb-4">
          <div class="text-right">
            <a href="/reservation/where" class="btn btn-dark px-5 goto-guest">
              Next
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection