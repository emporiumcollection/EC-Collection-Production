
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
<?php 
	$session_suites = [];
	if(\Session::has('suites')){
		$session_suites = \Session::get('suites');
	}
?>
<div class="content-em">
  <div class="top-wrapper">
    <div class="container ">

     @include('frontend.themes.EC.reservation.nav_wizard')

      <div id="step-2" class="tab-pane" role="tabpanel">
	   <div class="row">
	      <div class="col-lg-9 col-md-8 mb-4">
	      	<div class="row">
	      		<div class="col-md-12">
	      	  	<h2 class="mb-5 d-flex align-items-center"><a href="javascript:void(0);" class="backwizard btn-backwizard"><i class="ico ico-back mr-3"></i></a> Your guest options include:</h2>
							<div class="filter-container-fl filter-container-mm" id="guest-pick" style="display: block;">
							  <div class="guest-pick-container bg-white">
							    <div class="guest-pick-header px-0">
							      <div class="row align-items-center">
							        <div class="col-lg-9 col-md-7 col-7">
							          <p class="mb-0"><b>Suites</b></p>
							        </div>
							        <div class="col-lg-3 col-md-5 col-5">
							          <div class="row field-count-reservation align-items-center">
							            <button type="button" class="min-room {{ count($session_suites) <= 1 ? 'disable' : '' }}">-</button>
							            <div class="col text-center">
							              <span class="mr-1 room-val">{{ \Session::has('total_suite') ? \Session::get('total_suite') : 0 }}</span>
							              <input type="hidden" name="suite[]" id="suites" class="suite" value="{{ \Session::get('total_suite') }}"/>

							            </div>
							            <button type="button" class="plus-room mr-3">+</button>
							          </div>
							        </div>
							      </div>
							    </div>
							    <div class="guest-pick-body px-0">
							    	
							      <div class="row list-eoom">
							      	@foreach($session_suites as $key => $val)
							        <div class="col-{{ count($session_suites) > 1 ? 6 : 12 }} col-ews mb-5" id="room-{{ ($key+1) }}">
							          <p><b>Suite {{ ($key+1) }}</b></p>
							          <input type="hidden" name="rooms[]" id="rooms_{{ $key }}"/>
							          <div class="row align-items-center py-2">
							            <div class="col-7">
							              <p class="mb-0"><b>Adults</b></p>
							            </div>
							            <div class="col-5">
							              <div class="row field-count-reservation align-items-center">
							                <button type="button" class="min">-</button>
							                <div class="col text-center">
							                  <span class="mr-1 adult-val">{{ $val['adult'] }}</span>
							                  <input type="hidden" name="adult[]" class="inp-adult" id="adult" value="{{ $val['adult'] }}" />
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
							                  <span class="mr-1 child-val">{{ $val['child'] }}</span>
							                	<input type="hidden" name="child[]" id="" class="inp-child" value="{{ $val['child'] }}" />
							                </div>
							                <button type="button" class="plus mr-3">+</button>
							              </div>
							            </div>
							          </div>
							        </div>
							        @endforeach
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
	      		<div class="col-md-12 d-flex justify-content-between mt-4">
	          	<a href="/reservation/when/{{ \Session::get('property_id') }}" class="btn btn-dark px-5">Go back</a>
	          	<a href="javascript:void(0);" class="btn btn-dark px-5 availability-check select_guest_">Next</a>
	      		</div>
	    		</div>
	      </div>
	      <div class="col-lg-3 col-md-4">
          @include('frontend.themes.EC.reservation.reservation-summary', ['suites' => $suites])
        </div>	      
	   </div>
	</div>
  </div>
</div>
</div>
@endsection

