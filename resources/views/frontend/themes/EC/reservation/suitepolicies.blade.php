
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
        <h2 class="mb-5 d-flex align-items-center"><a href="#" class="backwizard btn-backwizard"><i class="ico ico-back mr-3"></i></a>Policies</h2>
        <div class="row">
          <div class="col-lg-9 col-md-8 mb-4">
            <h3>Policies</h3>
            <div class="card card-body rounded-0">
              @if(!empty($policies->booking_policy))
                @foreach($policies as $val)
                  @if($val->booking_policy)
                    <p>{{ $val->booking_policy }}</p>
                  @endif  
                @endforeach                 
              @elseif(!empty($hotel_policy->smookingpolicy || $hotel_policy->children_policy))
                <p>{{ $hotel_policy->smookingpolicy }}</p>
                <p>{{ $hotel_policy->children_policy }}</p>
              @else 
                <hr>     
                <div class="form-group">
                  <p>You do not have a statutory right of withdrawal from booking as per Sec. 312 g para 2 no. 9 of the German Civil Code (BGB). However, a hotel may voluntarily offer a right to cancel or change a booking for selected offers in the emporium-collection™ reservation system. Any such right will be displayed in the order form before you make your order. Where a hotel voluntarily grants such right to cancel or to change a booking in the emporium-collection™ reservation system, any such changes and cancellations have to be carried out via the emporium-collection™ online system or via the emporium-collection™ reservation number (see www.emporium-collection.com) to be fully effective. In case of a change or cancellation carried out directly at the hotel, emporium-collection™ cannot provide any information concerning possible discrepancies concerning the date of the cancellation or the fact of cancellation as such</p>
                </div>
              @endif  
              <div class="booking-tearms">
                <h3>Booking terms and conditions</h3>
                <div class="custom-control custom-checkbox mb-5">
                  <input type="checkbox" name="policies_ckh" class="custom-control-input chkpolicies" id="customCheck2">
                  <label class="custom-control-label" for="customCheck2">Your reservation is made subject to our <a href="#" class="underline"><b>Terms & Conditions</b></a>, and the specific payment terms (deposit, tax and cancellation) set out above, Please check this box to agree to these terms and proceed with your booking. By confirming your booking, you agree with all provisions of the <a href="#" class="underline"><b>privacy policy</b></a></label>
                </div>
                <p>For further information about how we use your data, please see our <a href="#" class="underline"><b>privacy policy</b></a></p>
                <div id="guestValidationMsg" class="alert alert-danger fade show mt-4" style="display: none;">
                  <p id="massage" class="mb-0"></p>
                </div>
              </div>
            </div>          
            <div class="row mt-3">
              <div class="col-6">
                @if(!empty($boards))
                  <a href="/reservation/board" class="btn btn-dark px-5">Go back</a>
                @else
                  <a href="/reservation/suite" class="btn btn-dark px-5">Go back</a>
                @endif
              </div>
              <div class="col-6 text-right">
                <a href="javascript:void(0);" class="btn btn-dark px-5 chkpolicies_btn">Next</a>
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

