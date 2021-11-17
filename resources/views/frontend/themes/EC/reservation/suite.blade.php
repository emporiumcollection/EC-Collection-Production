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
// $suites = \Session::get('suite_array');
// echo '<pre>';
// print_r($suites);
// echo '</pre>';
?>
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
            @if(Session::has('massage'))      
              <div class="alert alert-success alert-dismissible fade show">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Success!</strong> {!! Session::get('massage') !!}.
              </div>
            @endif

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

          <?php
            // echo '<pre>';
            // print_r(Session::all());
            // echo '</pre>';
          ?>

        @if(!empty($property[0]))
          @foreach($property[0]->suites as $suite)  
            <div class="suite-list section-shadow mb-5">
              <div class="suite-tumb">
                <div class="row align-items">
                    <div class="col-lg-6">
                      <div class="img-offset-slide">
                        <?php if(!empty($suite->rooms[0]['images'])):?>
                        @foreach($suite->rooms[0]['images'] as $image)
                        <?php
                          if(isset($property[0]['container']['name'])){
                            $container_name = $property[0]['container']['name'];
                          }else{
                            $container_name = strtolower(str_replace(" ", "-", trim($property[0]->property_name)));
                          }

                          if(isset($image['file'])) $name = $image['file']['name'];
                          if(isset($image['file'])) $file_name = $image['file']['file_name'];
                        ?>
                          <div>
                            <a href="detail-page.html">                  
                              <img src="{{ asset('/room-image/resize/500x700/' . $container_name . '/' . $name . '/' . $file_name) }}"
                                class="img-full" alt="">
                            </a>
                          </div>
                        @endforeach
                        <?php endif;?>   
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="suite-desc">
                        <h3>{{ $suite->category_name }}</h3>
                        <p>
                          {{ $suite->room_desc }}
                        </p>
                        <div class="row align-items-center mt-5">
                          <div class="col-7 guestvalue">
                            <p class="mb-0">From: <b>€{{ $suite->guests_in_base_price }}</b></p>
                            <p>inclusive of all taxes and fees</p>
                            <input type="hidden" name="select_guest" class="select_guest" id="select_guest" value="">

                            {{-- <select name="total_guest" id="select_suite_guest_{{ $suite->id }}" class="form-control select_suite_guest col-6">
                              <option value="" selected disabled>Select guest(S)</option>
                              
                                @for($j = 1; $j <= $suite->total_guests; $j++)      
                                  <option value="{{ $j }}" {{ array_key_exists($suite->id, \Session::get('suite_array') ? \Session::get('suite_array') : [1] ) && \Session::get('suite_array')[$suite->id] == $j ? 'selected' : '' }}>{{ $j }}</option>
                                @endfor
                                                              
                            </select> --}}
                          </div>              
                          <div class="col-5 d-flex justify-content-end align-self-end">
                            <div class="text-right"> 
                            <?php if(!empty(\Session::get('suite_array')) && array_key_exists($suite->id, \Session::get('suite_array'))){ ?>
                                {{-- <a href="javascript:void(0);" class="btn btn-dark  px-4 btn-nextwizard rounded-0 select_suite" data-suite-id="{{ $suite->id }}"><i class="fa fa-edit"></i></a> --}}
                                {{-- <a href="javascript:void(0);" class="btn btn-dark  px-4 btn-nextwizard rounded-0 select_suite" data-suite-id="{{ $suite->id }}"><i class="fa fa-times-circle-o"></i></a> --}}
                            <?php }else{ ?>
                                {{-- <a href="javascript:void(0);" class="btn btn-dark  px-4 btn-nextwizard rounded-0 select_suite" data-suite-id="{{ $suite->id }}">Select</a> --}}
                            <?php } ?>
                            </div>
                          </div>
                        </div>

                        <section id="guest_selection">
                          @include('frontend.themes.EC.reservation.partials.suite.guest-selection', ['suite' => $suite])
                        </section>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            @else
              <h2>Suite Not found</h2>
            @endif              
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

            <div id="guestValidationMsg" class="alert alert-danger fade show mt-4" style="display: none;">
              <p id="massage" class="mb-0"></p>
            </div>

          </div>
        </div>
    </div>  
  </div>
</div>
</div>
@endsection