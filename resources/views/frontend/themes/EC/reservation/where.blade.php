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

      <div id="step-2" class="tab-pane" role="tabpanel">
	   <div class="row">
	      <div class="col-lg-9 col-md-8 mb-4">
	        <br>
	        <h2 class="mb-5 d-flex align-items-center">
	          <a href="#" class="backwizard btn-backwizard">
	            <i class="ico ico-back mr-3"></i>
	          </a>
	          Your guest options include:
	        </h2>
	        <div class="filter-container-fl filter-container-mm" id="guest-pick" style="display: block;">
	          <div class="guest-pick-container bg-white">
	            <div class="guest-pick-header px-0">
	              <div class="row align-items-center">
	                <div class="col-lg-9 col-md-7 col-7">
	                  <p class="mb-0"><b>Suites</b></p>
	                </div>
	                <div class="col-lg-3 col-md-5 col-5">
	                  <div class="row field-count-reservation align-items-center">
	                    <button type="button" class="min-room disable">-</button>
	                    <div class="col text-center">
	                      <span class="mr-1 room-val">1</span>
	                    </div>
	                    <button type="button" class="plus-room mr-3">+</button>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="guest-pick-body px-0">
	              <div class="row list-eoom">
	                <div class="col-12 col-ews mb-5" id="room-1">
	                  <p><b>Suite 1</b></p>
	                  <div class="row align-items-center py-2">
	                    <div class="col-7">
	                      <p class="mb-0"><b>Adults</b></p>
	                    </div>
	                    <div class="col-5">
	                      <div class="row field-count-reservation align-items-center">
	                        <button type="button" class="min">-</button>
	                        <div class="col text-center">
	                          <span class="mr-1 adult-val">{!! Session::get('adult') !!}</span>
	                        </div>
	                        <button type="button" class="plus mr-3">+</button>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row align-items-center py-2">
	                    <div class="col-7">
	                      <p class="mb-0"><b>Children</b></p>
	                    </div>
	                    <div class="col-5">
	                      <div class="row field-count-reservation align-items-center">
	                        <button type="button" class="min">-</button>
	                        <div class="col text-center">
	                          <span class="mr-1 child-val">{!! Session::get('children') !!} </span>
	                        </div>
	                        <button type="button" class="plus mr-3">+</button>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="room-limit">
	                <p><b>Does your booking involve more than 4 suites?</b></p>
	                <p>Contact our Groups and Events team on 08989819281. and they'll take care of everything.
	                </p>

	                <a href="#" class="btn btn-dark rounded-0 px-5"><i class="fa fa-phone" aria-hidden="true"></i>
	                  REQUEST A CALL BACK</a>
	                <hr>
	                <p>Or send us an email and we'll get back to you prompty.</p>
	                <div class="row">
	                  <div class="col-8">
	                    <div class="row">
	                      <div class="col-6 form-group">
	                        <input type="text" class="form-control" placeholder="Your Name">
	                      </div>
	                      <div class="col-6 form-group">
	                        <input type="email" class="form-control" placeholder="Your Email Address">
	                      </div>
	                      <div class="col-12 form-group">
	                        <textarea class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-4">
	                    <div class="barcode-suite mb-3">
	                      <div class="aspect-ratio-box">
	                        <div class="aspect-ratio-box-inside">
	                          <img src="{{ asset('/images/QR-code.png')}}" class="img-fluid" alt="">
	                        </div>
	                      </div>
	                    </div>
	                    <div class="hotel-user">
	                      <div class="pp-prof-det">
	                        <img src="{{ asset('/images/img-profile.jpg')}}" alt="">
	                      </div>
	                      <div class="usr-info">
	                        <h4 class=" mb-2"><b>June</b> Davidson</h4>
	                        <p class="dd--info mb-2">Luxury Lifstyle Agent</p>
	                        <p class="dd-location-info mb-0"><i class="ico ico-place-2"></i> Munch</p>
	                      </div>
	                      <a href="#" class="plus-btn">+</a>
	                    </div>
	                  </div>
	                </div>

	              </div>
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
	          <a href="/reservation/suite" class="btn btn-dark px-5 availability-check">
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

