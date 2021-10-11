
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
          Policies
        </h2>
        <div class="row">
          <div class="col-lg-9 col-md-8 mb-4">
            <h3>Policies</h3>            
              @if(!empty($policies->booking_policy))
                <div class="card card-body rounded-0">
                  @foreach($policies as $policy)
                    <p>{{ $policy->booking_policy }}</p>
                  @endforeach
                </div>                
              @endif

              @if(empty($policies))
                @if(!empty($termDetail->terms_and_condition))
                  <div class="card card-body rounded-0">
                    @foreach($termDetail as $policy)
                      <p>{{ $policy[0]->terms_and_condition }}</p>
                    @endforeach
                @endif
              @endif          
            
            <hr>              
                @if(!empty($global_terms))
                  @foreach($global_terms as $links)
                    <div class="form-group">
                        <a href="https://superdevresources.com/open-links-popup" class="iubenda-white iubenda-noiframe iubenda-embed iub-legal-only iubenda-noiframe " title="Privacy and cookie policy" style="outline: 0px; border: 0px; text-decoration: none; display: inline-block; background: none; width: 116px; height: 25px;">Privacy and cookie policy</a><script type="text/javascript" src="https://cdn.iubenda.com/iubenda_i_badge.js"></script>
                        <script src="https://cdn.iubenda.com/iubenda.js"></script><script src="https://cdn.iubenda.com/iubenda.js"></script><script type="text/javascript">(function (w, d) { var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s, tag); }; if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; } })(window, document);</script>

                        <a href="https://www.iubenda.com/privacy-policy/70156957/cookie-policy" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Cookie solution" style="outline: 0px; border: 0px; text-decoration: none; display: inline-block; background: none; width: 116px; height: 25px;"> Cookie solution</a><script type="text/javascript" src="https://cdn.iubenda.com/iubenda_i_badge.js"></script>
                        <script type="text/javascript">(function (w, d) { var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s, tag); }; if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; } })(window, document);</script>

                         <a href="https://www.iubenda.com/privacy-policy/70156957/cookie-policy" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Term and Condition" style="outline: 0px; border: 0px; text-decoration: none; display: inline-block; background: none; width: 116px; height: 25px;">Term and Condition</a><script type="text/javascript" src="https://cdn.iubenda.com/iubenda_i_badge.js"></script>
                        <script type="text/javascript">(function (w, d) { var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s, tag); }; if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; } })(window, document);</script>


                        <a href="https://www.iubenda.com/privacy-policy/70156957/cookie-policy" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Term and Condition" style="outline: 0px; border: 0px; text-decoration: none; display: inline-block; background: none; width: 116px; height: 25px;">Consent Solution</a><script type="text/javascript" src="https://cdn.iubenda.com/iubenda_i_badge.js"></script>
                        <script type="text/javascript">(function (w, d) { var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s, tag); }; if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; } })(window, document);</script>

                    </div>
                  @endforeach
                @endif  
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
                <a href="/reservation/whoistravelling" class="btn btn-dark  px-5 btn-nextwizard">Confirm
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

