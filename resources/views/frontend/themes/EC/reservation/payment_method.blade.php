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
    <div class="container-full ">

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
            <form method="POST" action="#" id="payment_form">
            {!! csrf_field() !!}
            @if(isset($cards->id) && isset($cards->id))
                @foreach($cards as $card)
                  <div class="row">
                    <div class="col-lg-7 col-md-8">
                      <div class="d-flex align-items-center list-divider">
                            <div class="ico-inline mr-5">
                              <i class="ico-payment {{ $card_logos[$card->select_card] }}"></i>
                            </div>
                            <div class="d-flex flex-column flex-grow-1">
                              <div class="text-dark-75 text-hover-primary font-weight-bold 
                                  font-size-lg mb-1">
                                <?php
                                  $full_card_number = \CommonHelper::decrypt($card->card_number);
                                  $card_number = '•••• •••• •••• ' . substr($full_card_number, -4);
                                ?>
                                {{ $card_number }} 
                                @if($card->default_card)
                                  <span class="default-set">default</span>
                                @endif
                              </div>
                              <span class="text-muted font-weight-bold">Expiration: {{ $card->exp_month }} / {{ $card->exp_year }} </span>
                            </div>
                            <div class="mb-2 text-12"><input type="radio" name="card_id" value="{{ $card->id }}" {{ $last_id->id == $card->id ? 'checked' : '' }}> Use this card</div>
                        <!--end::Dropdown-->
                      </div>
                    </div>
                  </div>
                @endforeach
              @endif
            <hr class="my-4">
            <h5 class="mb-4">Or Add New Payment Card</h5>
            <p>Credit card details are required to guarantee your reservation.</p>
            <div id="error-msg"></div>
            
            <div class="row align-items-center">
              <div class="col-md-4 form-group mb-0">
                <label>Credit/Debit card: </label>
              </div>
              <div class="col-md-8 form-group">
                <select class="form-control card_type" name="card_type" id="card_type">
                  <option value="1">Mastercard</option>
                  <option value="2">Visa</option>
                  <option value="3">American-express</option>
                  <option value="4">Discover</option>
                </select>
                <div class="invalid-feedback"></div>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-md-4 form-group mb-0">
                <label for="card_number">Card number: </label>
              </div>
              <div class="col-md-8 form-group">
                <input type="text" class="card_number credit" name="card_number" id="card_number" placeholder="****_****_****_****">
                <div class="invalid-feedback"></div>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-md-4 form-group mb-0">
                <label for="expire_month">Expiration: </label>
              </div>
              <div class="col-md-4 form-group">
                <select class="form-control exp_month" name="exp_month" id="expire_month">
                  <option value="" selected disabled>Month</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
                <div class="invalid-feedback"></div>
              </div>
              <div class="col-md-4 form-group">
                <select class="form-control exp_year" name="exp_year" id="expire_year">
                  <option value="" selected disabled>Year</option>
                  <?php $years = range(date('Y'), (date('Y') + 20)); ?>
                  @foreach($years as $year)
                    <option value="{{ $year }}">{{ $year }}</option>
                  @endforeach
                </select>
                <div class="invalid-feedback"></div>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-md-4">
                <label for="card_name">Name on card: </label>
              </div>
              <div class="col-md-8">
                <input type="text" class="form-control card_name" name="card_name" id="card_name" placeholder="Name on card">
                <div class="invalid-feedback"></div>
              </div>
            </div>

            <hr class="my-5">
            <div class="row">
              <div class="col-lg-9">
                <h5 class="mb-4">Special requirements <span class="small color-grey">(*Required)</span></h5>
                <div class="form-group">
                  <textarea class="form-control" name="requirements" id="" cols="30" rows="10"
                    placeholder="Type your requirement here"></textarea>
                    <div class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 d-flex justify-content-between mt-4">
                <a href="/reservation/whoistravelling" class="btn btn-dark px-5">Go back</a>
                <button type="submit" class="btn btn-dark px-5 save-payment" id="btn-payment-save">Next</button>
              </div>
            </div>
          </form>
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
@endsection

