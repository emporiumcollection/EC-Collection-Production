

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
     
      <div id="step-4" class="tab-pane" role="tabpanel">
        <h2 class="mb-5 d-flex align-items-center">
          <a href="#" class="backwizard btn-backwizard">
            <i class="ico ico-back mr-3"></i>
          </a>
          Suite Board
        </h2>
      <div class="row">
      <div class="col-lg-9 col-md-8">
        <div class="suite-board d-block section-shadow">
          <div class="suite-board-header">
            <div class="row align-items-center">
              <div class="col-2 col---s">
                <img src="{{ asset('/images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg')}}" class="img-full"
                  alt="">
              </div>
              <div class="col">
                <h3>Superior Double Room Garden or Village View </h3>
              </div>
            </div>
          </div>
          <div class="row suite-board-body">
            <div class="col-lg-4 col-md-12 suite-price-feature">
              <div class="suite-board-main">
                <h4>Breakfast on the Amalfi Coast </h4>
                <ul class="pl-3">
                  <li>Accommodation</li>
                  <li>Daily breakfast</li>
                </ul>
              </div>
              <div class="suite-board-footer">
                <div class="collapse" id="breakfas">
                  <div class="card card-body border-0">
                    <h4 class="mb-4">Details & Policies</h4>
                    <ul class="text-left pl-3">
                      <li>
                        CANCEL: <br>
                        Cancel by 12PM local time 24 hours prior to arrival or
                        pay 1 night plus tax
                      </li>
                      <li>
                        GUARANTEE: <br>
                        A credit card guarantee is required at time of booking
                        unless otherwise stated in the rate description.
                      </li>
                      <li>
                        MEAL PLAN: <br>
                        Breakfast included
                      </li>
                      <li>
                        SERVICE CHARGE: <br>
                        Rates shown are inclusive of 10 percent Service Charge
                        per room, per night. This will appear itemized in your
                        shopping basket.
                      </li>
                      <li>
                        GOVERNMENT TAX: <br>
                        Rates shown are inclusive of 10 percent Government Tax
                        per room, per night. This will appear itemized in your
                        shopping basket.
                      </li>
                      <li>
                        GOVERNMENT TAX AND SERVICE CHARGE: <br>
                        Room rates do not include 11 percent Government Tax and
                        10 percent Service Charge
                      </li>
                      <li>
                        PACKAGE GOVERNMENT TAX: <br>
                        Room rates do not include 10% Government Tax
                      </li>
                    </ul>
                  </div>
                </div>
                <a class="detail-policies" data-toggle="collapse" href="#breakfas" role="button"
                  aria-expanded="false" aria-controls="breakfas">Details
                  & Policies</a>
                <div class="footer-sdse">
                  <p>€1.099 per night inclusive of all taxes and fees</p>
                  <a href="/reservation/suitepolicies" class="btn btn-dark btn-block rounded-0 btn-nextwizard">Select</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 suite-price-feature">
              <div class="suite-board-main">
                <h4>Half Board</h4>
                <ul class="pl-3">
                  <li>Accommodation</li>
                  <li>Daily breakfast</li>
                  <li>Daily à la carte lunch or dinner </li>
                  <li>Accommodation</li>
                  <li>Daily breakfast</li>
                  <li>Daily à la carte lunch or dinner </li>
                </ul>
              </div>
              <div class="suite-board-footer">
                <div class="collapse" id="half">
                  <div class="card card-body border-0">
                    <h4 class="mb-4">Details & Policies</h4>
                    <ul class="text-left pl-3">
                      <li>
                        CANCEL: <br>
                        Cancel by 12PM local time 24 hours prior to arrival or
                        pay 1 night plus tax
                      </li>
                      <li>
                        GUARANTEE: <br>
                        A credit card guarantee is required at time of booking
                        unless otherwise stated in the rate description.
                      </li>
                      <li>
                        MEAL PLAN: <br>
                        Breakfast included
                      </li>
                      <li>
                        SERVICE CHARGE: <br>
                        Rates shown are inclusive of 10 percent Service Charge
                        per room, per night. This will appear itemized in your
                        shopping basket.
                      </li>
                      <li>
                        GOVERNMENT TAX: <br>
                        Rates shown are inclusive of 10 percent Government Tax
                        per room, per night. This will appear itemized in your
                        shopping basket.
                      </li>
                      <li>
                        GOVERNMENT TAX AND SERVICE CHARGE: <br>
                        Room rates do not include 11 percent Government Tax and
                        10 percent Service Charge
                      </li>
                      <li>
                        PACKAGE GOVERNMENT TAX: <br>
                        Room rates do not include 10% Government Tax
                      </li>
                    </ul>
                  </div>
                </div>
                <a class="detail-policies" data-toggle="collapse" href="#half" role="button"
                  aria-expanded="false" aria-controls="half">Details &
                  Policies</a>
                <div class="footer-sdse">
                  <p>€1.099 per night inclusive of all taxes and fees</p>
                  <a href="/reservation/suitepolicies" class="btn btn-dark  btn-block rounded-0 btn-nextwizard">Select</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="reservation-summary">
          <h4>YOUR RESERVATION</h4>
          <p><b>Belmond Jimbaran Puri</b></p>
          <table class="table table-borderless mb-0">
            <tr>
              <td class="px-0 py-1">Guests</td>
              <td class="px-0 py-1 text-right">2 Guests</td>
            </tr>
            <tr>
              <td class="px-0 py-1">Check-in</td>
              <td class="px-0 py-1 text-right">14 August 2020</td>
            </tr>
            <tr>
              <td class="px-0 py-1">Check-out</td>
              <td class="px-0 py-1 text-right">15 August 2020</td>
            </tr>
            <tr>
              <td class="px-0 py-1">Suites</td>
              <td class="px-0 py-1 text-right">Pavilion suite</td>
            </tr>
          </table>
        </div>
        <div class="reservation-total">
          <table class="table table-borderless mb-0">
            <tr>
              <td class="px-0 py-1">Total</td>
              <td class="px-0 py-1 text-right"></td>
            </tr>
          </table>
        </div>
      </div>
      </div>
  </div>
  </div>
</div>
</div>
@endsection

