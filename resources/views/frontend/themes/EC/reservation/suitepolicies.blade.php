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
     
     <div id="step-5" class="tab-pane" role="tabpanel">
        <h2 class="mb-5 d-flex align-items-center">
          <a href="#" class="backwizard btn-backwizard">
            <i class="ico ico-back mr-3"></i>
          </a>
          Suite Policies
        </h2>
        <div class="row">
          <div class="col-lg-9 col-md-8 mb-4">
            <h3>Policies</h3>
            <div class="card card-body rounded-0">
              <p><b>Suite 1</b></p>
              <p><b>CANCEL</b> Cancel by 1pm local time 72 hours prior or pay 1 night for
                every 3 nights booked plus tax. No show charged full stay.</p>
              <p><b>GUARANTEE</b> A credit card guarantee is required at time of booking
                unless otherwise started in the rate description.</p>
              <p><b>MEAL PLAN</b> Breakfast included</p>
              <p><b>VAT TAX</b> Rates shown are inclusive of 10 percent VAT Tax per room, per
                night. this will appear itemized in your shopping basket.</p>
              <p><b>CITY TAX</b> Rates shown are inclusive of EUR 5 city Tax per person, per
                night for persons 8 years and older for up to 10 nights. Seasonal
                adjustments may apply. This will appear itemized in your shopping basket.
              </p>
            </div>
            <hr>
            <div class="booking-tearms">
              <h3>Booking teams and conditions</h3>
              <div class="custom-control custom-checkbox mb-5">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">
                  Your reservation is made subject to our
                  <a href="#" class="underline"><b>Terms & Conditions</b> </a>(available
                  in other
                  languages <a href="#" class="underline"><b>here</b></a>), and the
                  specific
                  payment tearms (deposit, tax and cancellation) set out above, Please
                  check
                  this box to agrree to these tearms and proceed with your booking. By
                  confirming your booking, you agree with all provisions of the
                  <a href="#" class="underline"><b>privacy policy</b></a>
                </label>
              </div>
              <p>
                For further information about how we use your data, please see our
                <a href="#" class="underline"><b>privacy policy</b></a>
              </p>
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
          <div class="col-lg-9 col-md-7 mb-4">
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-dark  px-5 btn-backwizard">Go back</a>
              </div>
              <div class="col-6 text-right">
                <a href="/reservation/aditionalservices" class="btn btn-dark  px-5 btn-nextwizard">Confirm
                  booking</a>
              </div>
            </div>
          </div>
        </div>
  </div>
  </div>
</div>
</div>
@endsection

