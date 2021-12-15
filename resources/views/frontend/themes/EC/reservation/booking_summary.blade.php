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
        <div id="step-10" class="tab-pane" role="tabpanel">
          <div class="row">
            <div class="col-xl-7 col-lg-12">
              <div class="row">
                <div class="col-md-7">
                  <div class="bg-grey px-3 py-2 mb-3">
                    <h4>{{ $properties[0]->property_short_name }}</h4>
                    <p class="mb-0">Confirm number: EC-{{ $db }}-{{ $hotel_name }}-{{ $randomnum }}</p>
                  </div>
                  
              @include('frontend.themes.EC.reservation.reservation-summary', ['suites' => $suites])               
                  <div class="policies" id="policies">
                    <h3>Policies</h3>
                    <div class="card card-body rounded-0">
                      <p><b>Suite 1</b></p>
                      @if(!empty($policies))
                        {{ $policies->booking_policy }}
                      @else
                        <h3>Hotel has no policies</h3>
                      @endif  
                    </div>
                    <hr>
                    <div class="booking-tearms">
                      <h3>Booking teams and conditions</h3>
                      <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="check-ste">
                        <label class="custom-control-label" for="check-ste">
                          Your reservation is made subject to our
                          <a href="#" class="underline"><b>Terms &amp; Conditions</b>
                          </a>(available  
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
                    <div class="row mb-4">
                      <div class="col-6">
                        <a href="/reservation/paymentmethod" class="btn btn-dark  px-5">Go back</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="bg-grey p-1 mb-5"></div>
                  <h4 class="mb-4">Getting there</h4>
                  @if(!empty($properties))
                    <p class="mb-1"><b>Address</b></p>
                    <p>{{ $properties[0]->address }}</p>

                    <ul class="nav nav-step5 flex-column mb-5">
                      <li class="nav-item">
                        <a class="nav-link copy_address" title="{{ $properties[0]->address }}" href="#" id="myAnchor"><i class="fa fa-files-o" aria-hidden="true"></i> Copy address
                          <i class="fa fa-chevron-right right-arrow" aria-hidden="true"></i></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="https://www.google.com/maps/search/?api=1&query={{ $properties[0]->latitude }},{{ $properties[0]->longitude }}" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>
                          Get directions <i class="fa fa-chevron-right right-arrow" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  @endif  
                  @if(!empty($properties))
                    <iframe src="https://maps.google.com/maps?q={{ $properties[0]->latitude }},{{ $properties[0]->longitude }}&t=&z=14&ie=UTF8&iwloc=&output=embed" width="99.9%" height="75%" frameborder="0" style="border: 1px solid #bfc1c3 !important; border-radius: 2px;" allowfullscreen="false" scrolling="no" aria-hidden="false" tabindex="0"></iframe>
                  @else
                    <h2>Location Not Found</h2>
                  @endif
                     
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-12">
              <div class="row h-100">
                <div class="col-md-5 mmb-4 h-100">
                  <div class="bg-grey p-3 h-100">
                    <ul class="nav nav-step5 flex-column">
                      @if(!empty($trip_dates))
                        @foreach($trip_dates as $date)
                          <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);">
                              <div class="d-flex align-items-center">
                                <div class="w-100">
                                  <p class="mb-0 month-nav">{{ date('d. M. Y', strtotime($date)) }}</p>
                                  <p class="mb-0">{{ date('l', strtotime($date)) }}</p>
                                  @if(strtotime($date) == strtotime(\Session::get('arrival')))
                                    <p class="mb-0 mt-2"><b>Arrival date</b></p>
                                  @elseif(strtotime($date) == strtotime(\Session::get('departure')))
                                    <p class="mb-0 mt-2"><b>Departure date</b></p>
                                  @endif
                                </div>
                              </div>
                            </a>
                          </li>    
                        @endforeach
                      @endif
                    </ul>
                  </div>
                </div>              
                <div class="col-md-7">
                  <div class="mb-4">
                        <a href="javascript:void(0)" class="btn btn-dark  px-5 btn-lg btn-block reserve_data">Confirm & go to dashboard</a>
                      </div>
                  <!--<div class="mb-4">
                    <a href="javascript:void();" class="btn btn-primary rounded-0 btn-lg btn-block reserve_data">
                    Get receipt
                  </a>
                  </div>                     -->
                  <!--<div class="additional-list h-auto p-0 mb-4">
                    <div class="p-4">                        
                        <img src="{{ asset('/uploads/users/EC.jpg')}}" height="100%" width="100%">            
                    </div>
                  </div>
                -->
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>
  @endsection