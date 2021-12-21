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
    .accesibility-checkbox{
      width: auto;
      display: flex;
      align-items: center;
    }
    .accesibility-checkbox::before, .accesibility-checkbox::after{margin-top: 6px;}
</style>
@section('content')
<div class="content-em">
  <div class="top-wrapper">
    <div class="container-full  ">
      @include('frontend.themes.EC.reservation.nav_wizard')

      <div id="step-3" class="tab-pane" role="tabpanel">
        <h2 class="mb-5 d-flex align-items-center">
          <a href="#" class="backwizard btn-backwizard">
            <i class="ico ico-back mr-3"></i>
          </a>
          {{ $property[0]->property_short_name }} services overview:
        </h2>
        <div class="row">
          <div class="col-lg-9 col-md-8">
            @if(Session::has('massage'))      
              <div class="alert alert-success alert-dismissible fade show">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Success!</strong> {!! Session::get('massage') !!}.
              </div>
            @endif            
            @if(!empty($available_services->title))
              <div class="suite-fasility section-shadow mb-5">
                <h3>ALL STAYS INCLUDE</h3>
                <ul>
                    @foreach($available_services as $value)
                      <li>{{ $value->title }}</li>
                    @endforeach
                </ul>
              </div>
            @endif    
            <div class="custom-control custom-checkbox mb-5">
               <input type="checkbox" name="accesibility" class="custom-control-input chkaccesibility" id="customCheck2">
              <label class="custom-control-label accesibility-checkbox" for="customCheck2">
                <b>Accesibility</b> <i class="ico ico-wheelchair ml-1" data-toggle="tooltip" title="" data-original-title="Accesibility"></i>
              </label>
            </div>
        @if(!empty($property[0]))
          @foreach($property[0]->suites as $suite)  
            <div class="suite-list section-shadow mb-5 <?php if($suite->is_accessible == '1') echo 'accessible'; else echo 'not-accessible'; ?> ">
              <div class="suite-tumb">
                <div class="row align-items">
                    <div class="col-lg-6">
                      <div class="img-offset-slide">
                        <?php if(!empty($suite->rooms[0]['images'])):?>
                        @foreach($suite->rooms[0]['images'] as $image)
                        <?php
                        if(isset($image['file']) && !empty($image['file'])){
                          if(isset($property[0]['container']['name'])){
                            $container_name = $property[0]['container']['name'];
                          }else{
                            $container_name = strtolower(str_replace(" ", "-", trim($property[0]->property_name)));
                          }

                          if(isset($image['file'])) $name = $image['file']['name'];
                          if(isset($image['file'])) $file_name = $image['file']['file_name'];
                        ?>
                          <div>
                            <a href="#">                  
                              <img src="{{ asset('/room-image/resize/320x266/' . $container_name . '/' . $name . '/' . $file_name) }}"
                                class="img-full" alt="">
                            </a>
                          </div>
                         <?php } ?>
                        @endforeach
                        <?php endif;?>   
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="suite-desc">
                        <h3>{{ $suite->category_name }}</h3>
                        @if($suite->room_desc)
                          <p>{!! $suite->room_desc !!}</p>
                        @endif
                        <div class="row align-items-center mt-5">
                          <div class="col-7 guestvalue">
                            <p class="mb-0">From: <b>€{{ $suite->price }}</b></p>
                            <p>inclusive of all taxes and fees</p>
                            <input type="hidden" name="select_guest" class="select_guest" id="select_guest" value="">
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
              <div id="selected-suite-list">
                @include('frontend.themes.EC.reservation.reservation-summary', ['suites' => $suites])
              </div>

            <div class="d-flex justify-content-between">
              <a href="/reservation/where" class="btn btn-dark px-4">Go back</a>
              @if(!empty($suite_board))
                <a href="/reservation/board" class="btn btn-dark continue_step px-4">Next</a>
              @else
                <a href="/reservation/policies" class="btn btn-dark continue_step px-4">Next</a>
              @endif
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