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
    <div class="container-full ">
      <div id="smartwizard" class="wizard-reservation sw sw-theme-arrows sw-justified">
        @include('frontend.themes.EC.reservation.nav_wizard')
        <div class="pt-4 wizard-reservation-content">
          <div id="step-5" class="tab-pane pt-lg-5 pt-xl-5" role="tabpanel">
            <h2 class="mb-5 d-flex align-items-center pt-lg-5 pt-xl-5"><a href="#" class="backwizard btn-backwizard mobile-off"><i class="ico ico-back mr-3"></i></a>Policies</h2>
            <div class="row">
              <div class="col-lg-9 col-md-8 mb-4">
                <h3 class="mobile-off">Policies</h3>
                <div class="card card-body rounded-0">
                  @if(!empty($policies->booking_policy))
                    @foreach($policies as $val)
                      @if($val->booking_policy)
                        <p>{{ $val->booking_policy }}</p>
                      @endif  
                    @endforeach                 
                  @elseif(isset( $terms_n_conditions->terms_n_conditions ) && !empty( $terms_n_conditions->terms_n_conditions ))
                    {{ $terms_n_conditions->terms_n_conditions }}
                    <hr>
                  @endif 
                  <div class="col-sm-3">
                    <a href="#" data-toggle="modal" data-target="#terms-and-conditions">
                      <b>Terms and Conditions</b>
                    </a>
                  </div>
                  <div class="booking-tearms mt-4" >
                    <h3>Booking terms and conditions</h3>
                    <div class="custom-control custom-checkbox mb-5">
                      <input type="checkbox" name="policies_ckh" class="custom-control-input chkpolicies" id="customCheck2">
                      <label class="custom-control-label" for="customCheck2">Your reservation is made subject to our <a href="#" data-toggle="modal"
                        data-target="#terms-and-conditions"><b>Terms & Conditions</b></a>, and the specific payment terms (deposit, tax and cancellation) set out above, Please check this box to agree to these terms and proceed with your booking. By confirming your booking, you agree with all provisions of the <a href="#" data-toggle="modal" data-target="#privacy_policy"><b>privacy policy</b></a></label>
                    </div>
                    <p>For further information about how we use your data, please see our <a href="#" data-toggle="modal" data-target="#privacy_policy"><b>privacy policy</b></a></p>
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
  </div>
</div>
@include('frontend.themes.EC.reservation.partials.privacy_model.terms_and_conditions')
@include('frontend.themes.EC.reservation.partials.privacy_model.privacy-policy')
<script>
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
</script>
@endsection
