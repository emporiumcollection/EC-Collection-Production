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

      <div id="step-10" class="tab-pane" role="tabpanel">
        <div class="row">
          <div class="col-xl-7 col-lg-12">
            <div class="row">
              <div class="col-md-7">
                <div class="bg-grey px-3 py-2 mb-3">
                  <h4>Your booking at <b>{{ $suites->category_name }}</b> in
                    Limone sul Garda, Italy</h4>
                  <p class="mb-0">Confirm number: 12313123122 - PIN code: 4681 - Unlink from your
                    business account</p>
                </div>
                
        @include('frontend.themes.EC.reservation.reservation-summary')

                <div class="reservation-summary section-shadow">
                  <div class="row align-items-center mb-3">
                    <div class="col-3 pr-0">
                      <img src="{{ asset('/images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg')}}"
                        class="img-full" alt="">
                    </div>
                    <div class="col-9">
                      <h4>SUITE 1</h4>
                      <p class="mb-0"><b>{{ $suites->category_name }}</b></p>
                    </div>
                  </div>
                  <table class="table table-borderless mb-0">
                    <tr>
                      <td class="px-0 py-1">Guests</td>
                      <td class="px-0 py-1 text-right">{!! Session::get('Guests') !!}</td>
                    </tr>
                    <tr>
                      <td class="px-0 py-1">Suite</td>
                      <td class="px-0 py-1 text-right">€4.299.00</td>
                    </tr>
                    <tr>
                      <td class="px-0 py-1">Tax</td>
                      <td class="px-0 py-1 text-right">€299.00</td>
                    </tr>
                    <tr>
                      <td class="px-0 py-1" colspan="2">
                        <a href="#" class="underline color-grey" type="button" data-toggle="modal"
                          data-target="#priceModal"><i>Details and
                            conditions</i></a>
                      </td>
                    </tr>
                  </table>
                  <hr class="mb-2">
                  <table class="table table-borderless mb-0">
                    <tr>
                      <td class="px-0 py-1">Gourmet Experience</td>
                      <td class="px-0 py-1 text-right">2</td>
                    </tr>
                  </table>
                  <hr class="mt-2">
                  <table class="table table-borderless mb-0">
                    <tr>
                      <td class="px-0 py-1">Subtotal</td>
                      <td class="px-0 py-1 text-right"><b>€4.598.00</b></td>
                    </tr>
                  </table>
                </div>
                <div class="reservation-total">
                  <table class="table table-borderless mb-0">
                    <tr>
                      <td class="px-0 py-1">Total</td>
                      <td class="px-0 py-1 text-right"><b>€4.598.00</b></td>
                    </tr>
                  </table>
                </div>
                <div class="policies" id="policies">
                  <h3>Policies</h3>
                  <div class="card card-body rounded-0">
                    <p><b>Suite 1</b></p>
                    {{ html_entity_decode($policies->booking_policy) }}
                  </div>
                  <hr>
                  <div class="booking-tearms">
                    <h3>Booking teams and conditions</h3>
                    <div class="custom-control custom-checkbox mb-5">
                      <input type="checkbox" class="custom-control-input" id="check-ste">
                      <label class="custom-control-label" for="check-ste">
                        Your reservation is made subject to our
                        <a href="#" class="underline"><b>Terms &amp; Conditions</b>
                        </a>(available
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
                  <div class="row mb-4">
                    <div class="col-6">
                      <a href="#" class="btn btn-dark  px-5 btn-backwizard">Go back</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <ul class="nav nav-step5 flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Get a PDF
                      for visa purposes <i class="fa fa-chevron-right right-arrow" aria-hidden="true"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-print" aria-hidden="true"></i>
                      Print details <i class="fa fa-chevron-right right-arrow" aria-hidden="true"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-file" aria-hidden="true"></i>
                      Get receipt <i class="fa fa-chevron-right right-arrow" aria-hidden="true"></i></a>
                  </li>
                </ul>
                <div class="bg-grey p-1 mb-5"></div>
                <h4 class="mb-4">Getting there</h4>
                <p class="mb-1"><b>Address</b></p>
                <p>30 Antigua Avenue, Cape Town, Western Cape 7975, SOuth Africa</p>
                <ul class="nav nav-step5 flex-column mb-5">
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-files-o" aria-hidden="true"></i> Copy address
                      <i class="fa fa-chevron-right right-arrow" aria-hidden="true"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                      Get directions <i class="fa fa-chevron-right right-arrow" aria-hidden="true"></i></a>
                  </li>
                </ul>
                <div id="map"></div>
              </div>

            </div>
          </div>
          <div class="col-xl-5 col-lg-12">
            <div class="row h-100">
              <div class="col-md-5 mmb-4 h-100">
                <div class="bg-grey p-3 h-100">
                  <ul class="nav nav-step5 flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        {{ Session::get('arrival_date')}}

                        <div class="d-flex align-items-center">
                          <div class="w-100">
                            <p class="mb-0 month-nav">20. AUG.</p>
                            <p class="mb-0"><b>Dienstag</b></p>
                          </div class="w-100">                          
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-7">
                <a href="guest/dashboard.html" class="btn btn-primary rounded-0 btn-lg btn-block">
                  Confirm Booking
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</div>
@endsection