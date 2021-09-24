

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

      <div id="step-3" class="tab-pane" role="tabpanel">
        <h2 class="mb-5 d-flex align-items-center">
          <a href="#" class="backwizard btn-backwizard">
            <i class="ico ico-back mr-3"></i>
          </a>
          Your (Pavilion Suite) overview:
        </h2>
        <div class="row">
          <div class="col-lg-9 col-md-8">
            <div class="suite-fasility section-shadow mb-5">
              <h3>ALL STAYS INCLUDE</h3>
              <ul>
                <li>WiFi</li>
                <li>Daily bottled water</li>
                <li>Daily à la carte breakfast</li>
                <li>Scheduled shuttle to Amalfi and Positano</li>
                <li>Two-hour boat rides along the coast in the morning</li>
                <li>Access to the fitness centre</li>
                <li>Access to 24 hour business centre</li>
              </ul>
            </div>

            <div class="suite-list section-shadow mb-5">
              <div class="suite-tumb">
                <div class="row align-items">
                  <div class="col-lg-6">
                    <div class="img-offset-slide">
                      <div>
                        <a href="detail-page.html">
                          <img src="{{ asset('/images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg')}}"
                            class="img-full" alt="">
                        </a>
                      </div>
                      <div>
                        <a href="detail-page.html">
                          <img src="{{ asset('/images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg')}}"
                            class="img-full" alt="">
                        </a>
                      </div>
                      <div>
                        <a href="detail-page.html">
                          <img src="{{ asset('/images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg')}}"
                            class="img-full" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="suite-desc">
                      <h3>Superior Double Room Garden or Village View </h3>
                      <p>
                        Superior Double Rooms are located in the Main Building, offering
                        a
                        delightful view of the village or garden.
                      </p>
                      <ul class="pl-3">
                        <li>One king or two twin-size beds</li>
                        <li>Extra-large marble bathroom with separate bathtub and shower
                        </li>
                        <li>Size 35-45m² / 377-484ft² </li>
                        <li>Maximum occupancy is 2 persons </li>
                        <li>Connects to another Superior Double Room or an Executive
                          Junior
                          Suite </li>
                      </ul>
                      <div class="row align-items-center mt-5">
                        <div class="col-8">
                          <p class="mb-0">From: <b>€1.099 per night</b></p>
                          <p>inclusive of all taxes and fees</p>
                        </div>
                        <div class="col-4">
                          <div class="text-right">
                            <a href="/reservation/suiteboard" class="btn btn-dark  px-4 btn-nextwizard rounded-0">Select</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="suite-list section-shadow mb-5">
              <div class="suite-tumb">
                <div class="row align-items">
                  <div class="col-lg-6">
                    <div class="img-offset-slide">
                      <div>
                        <a href="detail-page.html">
                          <img src="{{ asset('/images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg')}}"
                            class="img-full" alt="">
                        </a>
                      </div>
                      <div>
                        <a href="detail-page.html">
                          <img src="{{ asset('/images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg')}}"
                            class="img-full" alt="">
                        </a>
                      </div>
                      <div>
                        <a href="detail-page.html">
                          <img src="{{ asset('/images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg')}}"
                            class="img-full" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="suite-desc">
                      <h3>Superior Double Room Garden or Village View </h3>
                      <p>
                        Superior Double Rooms are located in the Main Building, offering
                        a
                        delightful view of the village or garden.
                      </p>
                      <ul class="pl-3">
                        <li>One king or two twin-size beds</li>
                        <li>Extra-large marble bathroom with separate bathtub and shower
                        </li>
                        <li>Size 35-45m² / 377-484ft² </li>
                        <li>Maximum occupancy is 2 persons </li>
                        <li>Connects to another Superior Double Room or an Executive
                          Junior
                          Suite </li>
                      </ul>
                      <div class="row align-items-center mt-5">
                        <div class="col-8">
                          <p class="mb-0">From: <b>€1.099 per night</b></p>
                          <p>inclusive of all taxes and fees</p>
                        </div>
                        <div class="col-4">
                          <div class="text-right">
                            <a href="/reservation/suiteboard" class="btn btn-dark  px-4 btn-nextwizard rounded-0">Select</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="suite-list section-shadow mb-5">
              <div class="suite-tumb">
                <div class="row align-items">
                  <div class="col-lg-6">
                    <div class="img-offset-slide">
                      <div>
                        <a href="detail-page.html">
                          <img src="{{ asset('/images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg')}}"
                            class="img-full" alt="">
                        </a>
                      </div>
                      <div>
                        <a href="detail-page.html">
                          <img src="{{ asset('/images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg')}}"
                            class="img-full" alt="">
                        </a>
                      </div>
                      <div>
                        <a href="detail-page.html">
                          <img src="{{ asset('/images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg')}}"
                            class="img-full" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="suite-desc">
                      <h3>Superior Double Room Garden or Village View </h3>
                      <p>
                        Superior Double Rooms are located in the Main Building, offering
                        a
                        delightful view of the village or garden.
                      </p>
                      <ul class="pl-3">
                        <li>One king or two twin-size beds</li>
                        <li>Extra-large marble bathroom with separate bathtub and shower
                        </li>
                        <li>Size 35-45m² / 377-484ft² </li>
                        <li>Maximum occupancy is 2 persons </li>
                        <li>Connects to another Superior Double Room or an Executive
                          Junior
                          Suite </li>
                      </ul>
                      <div class="row align-items-center mt-5">
                        <div class="col-8">
                          <p class="mb-0">From: <b>€1.099 per night</b></p>
                          <p>inclusive of all taxes and fees</p>
                        </div>
                        <div class="col-4">
                          <div class="text-right">
                            <a href="/reservation/suiteboard" class="btn btn-dark  px-4 btn-nextwizard rounded-0">Select</a>
                          </div>
                        </div>
                      </div>
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
