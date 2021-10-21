
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

          @foreach($suites[0]->suites as $suite)  
            <div class="suite-list section-shadow mb-5">
              <div class="suite-tumb">
                <div class="row align-items">
                  @foreach($property as $image)
                    <div class="col-lg-6">
                      {{-- <div class="img-offset-slide">
                        <div>
                          <a href="detail-page.html">                  
                            <img src="{{ asset('/room-image/resize/493x276/'.$image->suites[0]->rooms[0]->images[0]['file']['file_name'])}}"
                              class="img-full" alt="">
                          </a>
                        </div>
                        <div>
                          <a href="detail-page.html">
                            <img src="{{ asset('/room-image/resize/493x276/'.$image->suites[0]->rooms[0]->images[0]['file']['file_name'])}}"
                              class="img-full" alt="">
                          </a>
                        </div>
                        <div>
                          <a href="detail-page.html">
                            <img src="{{ asset('/room-image/resize/493x276/'.$image->suites[0]->rooms[0]->images[0]['file']['file_name'])}}"
                              class="img-full" alt="">
                          </a>
                        </div>
                      </div> --}}
                    </div>
                  @endforeach                                      
                    <div class="col-lg-6">
                      <div class="suite-desc">
                        <h3>{{ $suite->category_name }}</h3>
                        <p>
                          {{ $suite->room_desc }}
                        </p>
                        <div class="row align-items-center mt-5">
                          <div class="col-8 guestvalue">
                            <p class="mb-0">From: <b>€1.099 per night</b></p>
                            <p>inclusive of all taxes and fees</p>
                            <?php $i = $suites[0]->suites[0]->total_guests; ?>
                            <input type="hidden" name="select_guest" class="select_guest" id="select_guest" value="">

                            <select name="total_guest" id="select_suite_guest_{{ $suite->id }}" class="form-control select_suite_guest">
                              <option value="">Select guest(S)</option>
                              @foreach($selected_suite as $select_suite)
                                @for($j = 1;$j <= $i;$j++)      
                                  <option value="{{ $j }}"{{ $select_suite == $j ? "selected" : $j }}>{{ $j }}</option>
                                @endfor
                              @endforeach                                
                            </select>
                          </div>              
                          <div class="col-4">
                            <div class="text-right">      
                              <a href="javascript:void()" class="btn btn-dark  px-4 btn-nextwizard rounded-0 select_suite" data-suite-id="{{ $suite->id }}">Select</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach      
        </div>
          <div class="col-lg-3 col-md-4">
          @include('frontend.themes.EC.reservation.reservation-summary')
            <div class="reservation-total">
              <table class="table table-borderless mb-0">
                <tr>
                  <td class="px-0 py-1">Total</td>
                  <td class="px-0 py-1 text-right"></td>
                </tr>
              </table>
            </div>
            <div>
              <a href="/reservation/suiteboard" class="btn btn-dark  px-4 btn-nextwizard rounded-0 continue_step">Continue</a>
            </div>
          </div>
        </div>
    </div>  
  </div>
</div>
</div>
@endsection
{{-- /room-image/resize/493x276/the-mark/courtyard-junior-suites/79795411974-32769521574.jpg --}}