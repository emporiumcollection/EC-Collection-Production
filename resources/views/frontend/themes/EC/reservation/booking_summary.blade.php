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
            <div id="step-10" class="tab-pane pt-lg-5 pt-xl-5" role="tabpanel">
              <div class="row pt-lg-5 pt-xl-5">
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
                          @if(!empty($policies))
                            {{ $policies->booking_policy }}
                          @else
                            <h3>Hotel has no policies</h3>
                          @endif
                          <div class="">
                            <a href="#" data-toggle="modal" data-target="#terms-and-conditions">
                              <b>Terms and Conditions</b>
                            </a>
                          </div>  
                        </div>
                        <hr>
                        <div class="booking-tearms">
                          <h3>Booking teams and conditions</h3>
                          <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" class="custom-control-input" id="check-ste">
                            <label class="custom-control-label" for="check-ste">
                              Your reservation is made subject to our
                              <a href="#" data-toggle="modal" data-target="#terms-and-conditions"><b>Terms &amp; Conditions</b>
                              </a>(available  
                              in other
                              languages), and the
                              specific
                              payment tearms (deposit, tax and cancellation) set out above, Please
                              check
                              this box to agrree to these tearms and proceed with your booking. By
                              confirming your booking, you agree with all provisions of the
                              <a href="#" data-toggle="modal" data-target="#privacy_policy"><b>privacy policy</b></a>
                            </label>
                          </div>
                          <p>
                            For further information about how we use your data, please see our
                            <a href="#" data-toggle="modal" data-target="#privacy_policy"><b>privacy policy</b></a>
                          </p>
                        </div>
                        <div class="row mb-4">
                          <div class="col-5">
                            <a href="/reservation/paymentmethod" class="btn btn-dark  px-5">Go back</a>
                          </div>
                          <div class="col-7">
                            <a href="javascript:void(0)" class="btn btn-dark px-5 btn-block reserve_data">Confirm & go to dashboard</a>
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
                            <a class="nav-link copy_address" title="{{ $properties[0]->address }}" href="#" id="myAnchor"><i class="fa fa-files-o" aria-hidden="true"></i> Copy address <i class="fa fa-chevron-right right-arrow" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="https://www.google.com/maps/search/?api=1&query={{ $properties[0]->latitude }},{{ $properties[0]->longitude }}" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> Get directions <i class="fa fa-chevron-right right-arrow" aria-hidden="true"></i></a>
                          </li>
                        </ul>
                      @endif  
                      @if(!empty($properties))
                        <div id="map3"></div>
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
                                      @if(strtotime($date) == strtotime(\Session::get('arrival')))
                                        <p class="mb-0 mt-2"><b>Arrival date</b></p>
                                      @elseif(strtotime($date) == strtotime(\Session::get('departure')))
                                        <p class="mb-0 mt-2"><b>Departure date</b></p>
                                      @endif
                                      <p class="mb-0 month-nav">{{ date('d M Y', strtotime($date)) }}</p>
                                      <p class="mb-0">{{ date('l', strtotime($date)) }}</p>
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
                      <!-- <div class="mb-4">
                        <a href="javascript:void();" class="btn btn-primary rounded-0 btn-lg btn-block reserve_data">Get receipt</a>
                      </div> -->
                      <!-- <div class="additional-list h-auto p-0 mb-4">
                        <div class="p-4">                        
                          <img src="{{ asset('/uploads/users/EC.jpg')}}" height="100%" width="100%">            
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
      var lat  = '{{ $properties[0]->latitude }}';
      var long = '{{ $properties[0]->longitude }}';
      var loc = '{{ $properties[0]->address }}';
      setMapLocation(lat, long ,loc);
    });

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
  @include('frontend.themes.EC.reservation.partials.privacy_model.terms_and_conditions')
    @include('frontend.themes.EC.reservation.partials.privacy_model.privacy-policy')
  @endsection