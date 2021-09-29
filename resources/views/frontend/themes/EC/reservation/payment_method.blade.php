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
     
      <div id="step-8" class="tab-pane" role="tabpanel">
        <h2 class="mb-5 d-flex align-items-center">
          <a href="#" class="backwizard btn-backwizard">
            <i class="ico ico-back mr-3"></i>
          </a>
          Payment Method
        </h2>
        <h5 class="mb-4">Your Card </h5>

        <div class="row">
          <div class="col-lg-9 col-md-8">
            <div class="row">
              <div class="col-lg-7 col-md-8">
                <div class="d-flex align-items-center list-divider">
                  <div class="ico-inline mr-5">
                    <i class="ico-payment mastercard"></i>
                  </div>
                  <div class="d-flex flex-column flex-grow-1">
                    <div class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                      MasterCard ••••8928 <span class="default-set">default</span>
                    </div>
                    <span class="text-muted font-weight-bold">Expiration: 09/2025</span>
                  </div>
                  <div class="mb-2 text-12"><a href="#" class="color-primary btn-use-addr">Use this card</a></div>
                  <!--end::Dropdown-->
                </div>
              </div>
            </div>
            <hr class="my-4">
            <h5 class="mb-4">Or Add New Payment Card</h5>
            <p>Credit card details are required to guarantee your reservation.</p>

            <div class="row align-items-center">
              <div class="col-md-4 form-group mb-0">
                <label>Credit/Debit card: </label>
              </div>
              <div class="col-md-8 form-group">
                <select class="form-control">
                  <option value="">Visa</option>
                  <option value="">Master Card</option>
                  <option value="">American Express</option>
                </select>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-md-4 form-group mb-0">
                <label>Card number: </label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" class="form-control" placeholder="****_****_****_****">
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-md-4 form-group mb-0">
                <label>Expiration: </label>
              </div>
              <div class="col-md-4 form-group">
                <select class="form-control">
                  <option value="">Month</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
              <div class="col-md-4 form-group">
                <select class="form-control">
                  <option value=""> Year</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                  <option value="2032">2032</option>
                  <option value="2033">2033</option>
                  <option value="2034">2034</option>
                </select>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-md-4">
                <label>Name on card: </label>
              </div>
              <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Name on card">
              </div>
            </div>

            <hr class="my-5">
            <div class="row">
              <div class="col-lg-9">
                <h5 class="mb-4">Special requirements <span class="small color-grey">(*Required)</span></h5>
                <div class="form-group">
                  <textarea class="form-control" name="" id="" cols="30" rows="10"
                    placeholder="Type your requirement here"></textarea>
                </div>
              </div>
            </div>
            .
          </div>
          <div class="col-lg-3 col-md-4">
          @include('frontend.themes.EC.reservation.reservation-summary')
            <div class="reservation-summary section-shadow">
              <h4>SUITE 1</h4>
              <p><b>Superior Double Room Garden or Village View </b></p>
              <table class="table table-borderless mb-0">
                <tr>
                  <td class="px-0 py-1">Guests</td>
                  <td class="px-0 py-1 text-right">2</td>
                </tr>
                <tr>
                  <td class="px-0 py-1">Suite</td>
                  <td class="px-0 py-1 text-right">€4.299.00</td>
                </tr>
                <tr>
                  <td class="px-0 py-1">Tax</td>
                  <td class="px-0 py-1 text-right">€299.00</td>
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
          </div>
          <div class="col-md-9">
            <div class="text-right">
              <a href="/reservation/hotelpolicies" class="btn btn-dark px-5 btn-nextwizard">Next</a>
            </div>
          </div>
        </div>

      </div>
  </div>
</div>
</div>
@endsection

