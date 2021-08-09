@extends('frontend.themes.EC.layouts.home')

@section('content')

<form name="collection-search" method="post" action="{{URL::to('globalavailability')}}" id="collection_search">

  <div class="where-container show">
    <div class="form-fl-search">
      <div class="row">
        <div class="col ppls-0">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-ico"><i class="ico ico-search"></i></div>
            </div>
            <input type="text" class="form-control form-control-em border-0 where" id="inlineFormInputGroup"
              placeholder="Where" name="destination">
            <input type="hidden" name="sitename" id="sitename"  />
            <input type="hidden" name="coll_type" id="coll_type" />
<!--             <div class="input-group-prepend">
              <div class="input-group-ico color-search"> <span style="background-color: #00a000;"></span> Create
                Itinerary ->
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <div class="wherepopup">
        <div class="whereinner">
          <div class="row">
            <div class="col-6">
              <h2 style="text-transform: uppercase; color: #FFF;">Destinations</h2>
              <ul class="nav flex-column where-destination">
<!--                 <li class="nav-item">
                  <a class="nav-link pl-0" href="#">
                    <span class="city-l">New York</span> <span class="cat-l">Hotels</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-0" href="#">
                    <span class="city-l">New York</span> <span class="cat-l">Map</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-0" href="#">
                    <span class="city-l">New York</span> <span class="cat-l">Private Jet</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-0" href="#">
                    <span class="city-l">New York</span> <span class="cat-l">Cuisine</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-0" href="#">
                    <span class="city-l">New York</span> <span class="cat-l">Channel</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-0" href="#">
                    <span class="city-l">New York</span> <span class="cat-l">Experiences</span>
                  </a>
                </li>
 -->              </ul>

            </div>
            <div class="col-6">
              <h2 style="text-transform: uppercase; color: #FFF;">Hotels</h2>
              <ul class="nav flex-column where-hotel">
<!--                 <li class="nav-item">
                  <a class="nav-link pl-0" href="#">
                    <span class="city-l">New York</span> <span class="cat-l">Hotels</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-0" href="#">
                    <span class="city-l">New York</span> <span class="cat-l">Map</span>
                  </a>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="when-container">
    <div class="content-em">
      <div class="container pt-5">
        <div class="row">
          <div class="col-6">
            <div class="is-left-pad">
              <div class="title-with-icon">
                <i class="ico ico-calendar"></i>
                <h2>When</h2>
              </div>
              <div class="range-calendar range-date-9127013" id="calendar-pick">
                <div id="daterangepicker-inline-container" class="daterangepicker-inline"></div>
                <input type="hidden" id="daterangepicker-inline">
                <input type="hidden" name="arrive" id="arrive" />
                <input type="hidden" name="departure" id="departure" />
                <div class="clearfix"></div>
              </div>
              <div class="search-results mb-2">
                <h4>Your Selection</h4>
                <p>New York . -> <span class="onrange"></span></p>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="flexibledate" name="flexibledate">
                <label class="custom-control-label" for="flexibledate">
                  <div class="d-flex align-items-center text-20">
                    <div>Flexible</div>
                    <div class="px-2">
                      <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                        style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 2.66667px; overflow: visible;"
                        aria-hidden="true" role="presentation" focusable="false">
                        <g fill="none">
                          <path d="M16 4v16m-8-8h16M8 26h16"></path>
                        </g>
                      </svg>
                    </div>
                    <div>3 Days</div>
                  </div>
                </label>
              </div>
              <div class="mt-5 include-form">
<!--                 <div id="accordion">
                  <div class="accor">
                    <div class="accor-header" id="headingOne">
                      <div class="row align-items-center include-list">
                        <div class="col pr-0">
                          <div class="include">
                            <p class="inc-t">Include</p>
                            <p class="inc-f">Flight</p>
                            <p class="inc-s">Search</p>
                          </div>
                        </div>
                        <div class="col text-center">
                          <i class="ico-flight"></i>
                        </div>
                        <div class="col text-center">
                          <label class="container-checkbox mb-0 collapsed" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <input type="checkbox" name="include_flight">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                      <div class="accor-body">
                        <div class="d-flex align-items-center">
                          <div class="lolsp">
                            <div class="form-asd">Departing From :</div>
                          </div>
                          <div class="pl-3">
                            <input type="text" class="form-control" name="flight_departing">
                          </div>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="lolsp">
                            <div class="form-asd">Select Airport :</div>
                          </div>
                          <div class="pl-3">
                            <input type="text" class="form-control" name="flight_airport">
                          </div>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="lolsp">
                            <div class="form-asd">Select Guest :</div>
                          </div>
                          <div class="pl-3">
                            <input type="text" class="form-control" name="flight_guest">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accor">
                    <div class="accor-header" id="headingTwo">
                      <div class="row align-items-center include-list">
                        <div class="col">
                          <div class="include">
                            <p class="inc-t">Include</p>
                            <p class="inc-f">Yacht</p>
                            <p class="inc-s">Search</p>
                          </div>
                        </div>
                        <div class="col text-center">
                          <i class="ico-yacht"></i>
                        </div>
                        <div class="col text-center">
                          <label class="container-checkbox mb-0 collapsed" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <input type="checkbox" name="include_yacht">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                      <div class="accor-body">
                        <div class="d-flex align-items-center">
                          <div class="lolsp">
                            <div class="form-asd">Departing From :</div>
                          </div>
                          <div class="pl-3">
                            <input type="text" class="form-control" name="yacht_departing">
                          </div>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="lolsp">
                            <div class="form-asd">Select Airport :</div>
                          </div>
                          <div class="pl-3">
                            <input type="text" class="form-control" name="yacht_airport">
                          </div>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="lolsp">
                            <div class="form-asd">Select Guest :</div>
                          </div>
                          <div class="pl-3">
                            <input type="text" class="form-control" name="yacht_guest">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accor">
                    <div class="accor-header" id="headingThree">
                      <div class="row align-items-center include-list">
                        <div class="col">
                          <div class="include">
                            <p class="inc-t">Include</p>
                            <p class="inc-f">Limosine</p>
                            <p class="inc-s">Search</p>
                          </div>
                        </div>
                        <div class="col text-center">
                          <i class="ico-limosine"></i>
                        </div>
                        <div class="col text-center">
                          <label class="container-checkbox mb-0 collapsed" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <input type="checkbox" name="include_limosine">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                      <div class="accor-body">
                        <div class="d-flex align-items-center">
                          <div class="lolsp">
                            <div class="form-asd">Departing From :</div>
                          </div>
                          <div class="pl-3">
                            <input type="text" class="form-control" name="limosine_departing">
                          </div>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="lolsp">
                            <div class="form-asd">Select Airport :</div>
                          </div>
                          <div class="pl-3">
                            <input type="text" class="form-control" name="limosine_airport">
                          </div>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="lolsp">
                            <div class="form-asd">Select Guest :</div>
                          </div>
                          <div class="pl-3">
                            <input type="text" class="form-control" name="limosine_guest">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="guest-pick-footer mb-5 mt-4 pr-3">
                  <div class="text-right">
                    <a href="#" class="confirm-room step-3">Submit</a>
                  </div>
                </div>

                <div class="herl">
                  <img src="images/5ac27a91813631.5e3b3fe359ee2.jpg" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 pl-0 pr--md-0">
            <div class="img-left-when">
              <img src="images/af407b90485625.5e186bd4ca52b.jpg" alt="">
            </div>

            <div class="fetaruer">
              <h3 class="title-3 title-i">— featured hotel —</h3>
              <p class="font-2">
                <i>
                  Think about New York of the 1980s with its large artwork, early hip hop, and punk rock scenes. Then
                  translate that vitality to a lodge on the Decrease East Aspect. Put collectively you get The Ludlow
                  Resort.
                </i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="who-container">
    <div class="content-em">
      <div class="container pt-5">
        <div class="row">
          <div class="col-6">
            <div class="title-with-icon">
              <i class="ico ico-profile-pp"></i>
              <h2>WHO</h2>
            </div>

            <div class="filter-container-fl filter-guest-2 ml-0" id="guest-pick" style="display: block;">
              <div class="guest-pick-container">
                <div class="guest-pick-header">
                  <div class="row align-items-center">
                    <div class="col-lg-9 col-md-8">
                      <p class="mb-0"><b>Suites</b></p>
                    </div>
                    <div class="col-lg-3 col-md-4">
                      <div class="row field-count-guest align-items-center">
                        <button type="button" class="min-room disable">-</button>
                        <div class="col text-center">
                          <span class="mr-1 room-val">1 </span>
                        </div>
                        <button type="button" class="plus-room mr-3">+</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="guest-pick-body">
                  <div class="row list-eoom">
                    <div class="col-12 col-ews mb-5" id="room-1">
                      <p><b>Suite 1</b></p>
                      <div class="row align-items-center py-2">
                        <div class="col-7">
                          <p class="mb-0"><b>Adults</b></p>
                        </div>
                        <div class="col-5">
                          <div class="row field-count-guest align-items-center">
                            <button type="button" class="min" data-id="0" data-type="adult">-</button>
                            <div class="col text-center">
                              <span class="mr-1 adult-val">1 </span>
                              <input type="hidden" name="rooms[]" id="rooms" />
                              <input type="hidden" name="adult[]" class="inp-adult" id="adult" value="1" />
                            </div>
                            <button type="button" class="plus mr-3" data-id="0" data-type="adult">+</button>
                          </div>
                        </div>
                      </div>
                      <div class="row align-items-center py-2">
                        <div class="col-7">
                          <p class="mb-0"><b>Children</b></p>
                        </div>
                        <div class="col-5">
                          <div class="row field-count-guest align-items-center">
                            <button type="button" class="min" data-id="0" data-type="children">-</button>
                            <div class="col text-center">
                              <span class="mr-1 child-val">1 </span>
                              <input type="hidden" name="child[]" id="child" class="inp-child" value="1" />
                            </div>
                            <button type="button" class="plus mr-3" data-id="0" data-type="children">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="room-limit">
                    <p><b>Does your booking involve more than 4 suites?</b></p>
                    <p>Contact our Groups and Events team on 08989819281. and they'll take care of everything.</p>

                    <a href="#" class="btn btn-dark rounded-0 px-5"><i class="fa fa-phone" aria-hidden="true"></i>
                      REQUEST A CALL BACK</a>
                    <hr>
                    <p>Or send us an email and we'll get back to you prompty.</p>
                    <div class="row">
                      <div class="col-6">
                        <div class="row">
                          <div class="col-12 form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                          </div>
                          <div class="col-12 form-group">
                            <input type="email" class="form-control" placeholder="Your Email Address">
                          </div>
                          <div class="col-12 form-group">
                            <textarea class="form-control" cols="30" rows="5" placeholder="Message"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="barcode-suite mb-2">
                          <div class="aspect-ratio-box">
                            <div class="aspect-ratio-box-inside">
                              <img src="images/QR-code.png" class="img-fluid" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="hotel-user">
                          <div class="pp-prof-det">
                            <img src="images/img-profile.jpg" alt="">
                          </div>
                          <div class="usr-info">
                            <h4 class=" mb-2"><b>June</b> Davidson</h4>
                            <p class="dd--info mb-2">Luxury Lifstyle Agent</p>
                            <p class="dd-location-info mb-0"><i class="ico ico-place-2"></i> Munch</p>
                          </div>
                          <a href="#" class="plus-btn">+</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="guest-pick-footer">
                  <div class="text-right">
                    <!-- <a href="main-page.html" class="confirm-room">View "New York Collection"</a> -->
                    <!-- <input type="hidden" name="suites_data" class="suites_data"> -->
                    <input type="submit" class="confirm-room" value="View Collection" />
                  </div>
                </div>
              </div>

<!--               <div class="oldo-o">
                <div class="quick-prev">
                  <div>
                    <img src="images/d9710383434639.5d3c346168dd3.jpg" class="img-fluid" alt="">
                  </div>
                  <div>

                    <img src="images/d9710383434639.5d3c346168dd3.jpg" class="img-fluid" alt="">
                  </div>
                  <div>
                    <img src="images/d9710383434639.5d3c346168dd3.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <div class="col-6 pl-0 pr--md-0">
            <div class="img-left-when">
              <img src="images/60c5a787075247-1.5dad757ad76ab.jpg" alt="">
            </div>

            <div class="fetaruer to-right">
              <h3 class="title-3 title-i">— featured hotel —</h3>
              <p class="font-2">
                <i>
                  Think about New York of the 1980s with its large artwork, early hip hop, and punk rock scenes. Then
                  translate that vitality to a lodge on the Decrease East Aspect. Put collectively you get The Ludlow
                  Resort.
                </i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</form>

  <div class="owl-carousel owl-theme landing-slider ">
    <div class="item">
      <img src="images/ecd67d87075247.5dad757ad6705.jpg" alt="">
      <div class="landing-slider-content">
        <h2>Welcome to the Emporium-Voyage Collection</h2>
        <p>
          Emporium-Collection is a unique, memorable experience company that provides its High-net-worth members,
          bespoke luxury travel management services via the “by invitation only members club”.
        </p>
        <div class="action-button">
          <a href="#" class="btn btn-outline-white btn-lg">Action Button</a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="images/c52c5d91609529.5e36922fbff23.jpg" alt="">
      <div class="landing-slider-content">
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
        <p>

          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam dignissimos nesciunt vitae cumque, perspiciatis,
          facere praesentium tempore aut soluta doloribus vero, nulla debitis officiis eos et expedita eveniet earum
          iure?

        </p>
        <div class="action-button">
          <a href="#" class="btn btn-outline-white btn-lg">Action Button</a>
        </div>

      </div>
    </div>
    <div class="item">
      <img src="images/60c5a787075247-1.5dad757ad76ab.jpg" alt="">
      <div class="landing-slider-content">
        <h2>Nam dignissimos nesciunt vitae cumque</h2>
        <p>
          Nam dignissimos nesciunt vitae cumque, perspiciatis, facere praesentium tempore aut soluta doloribus vero,
          nulla debitis officiis eos et expedita eveniet earum iure?
        </p>
        <div class="action-button">
          <a href="#" class="btn btn-outline-white btn-lg">Action Button</a>
        </div>

      </div>
    </div>
  </div>

@endsection
