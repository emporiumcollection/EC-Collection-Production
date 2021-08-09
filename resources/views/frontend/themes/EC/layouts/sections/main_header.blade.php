<?php

  $mapsearch = URL::to("mapsearchavailability?" . Request::getQueryString());
  $videourl = URL::to("social-youtube?" . Request::getQueryString());
  $instagramurl = URL::to("social-instagram?" . Request::getQueryString());

?>

  <header>
  <div class="top-header">
    <div class="px-4 pt-2">

      <div class="row align-items-end">
        <div class="col-5">
          <div id="menunav">
            <a href="#dashF" class="mr-2 menu-nav grid-f" data-toggle="collapse" role="button" aria-expanded="false"
              aria-controls="dashF">
              <i class="ico ico-dash"></i>
            </a>
            <a href="#searchF" class="menu-nav search-f" data-toggle="collapse" role="button" aria-expanded="false"
              aria-controls="searchF">
              <i class="ico ico-search"></i>
            </a>
<!--             <a href="#cityList" class="menu-nav text-menu city-f" data-toggle="collapse" role="button"
              aria-expanded="false" aria-controls="cityList">
              <span class="label-city" style="background: green;"></span> New York
            </a> -->
            <a href="#calcF" class="menu-nav text-menu cal-f" data-toggle="collapse" role="button" aria-expanded="false"
              aria-controls="calcF">
              <span class="cal-date">22 Jun - 23 Jun</span>
            </a>
            <a href="#whoF" class="menu-nav text-menu who-f" data-toggle="collapse" role="button" aria-expanded="false"
              aria-controls="whoF">
              <div class="filter-lst expand filter-guest filter-white">
                <div class="input-group">
                  <div class="gust-dropdown">
                    <div class="guest-option rto"><span class="guest-count">2</span> Guest</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-2 text-center">
          <a href="{{route('homepage')}}">
            <i class="t-logo logo-2"></i>
          </a>
        </div>
        <div class="col-5 text-right">
          <a href="register.html">
            <i class="ico ico-club"></i>
          </a>
          <div class="d-flex justify-content-end align-items-center">

            <div class="humburger-menu">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>
            <div class="menu">
              <a href="#" class="close-menu">
                <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
                  xmlns="http://www.w3.org/2000/svg">
                  <title>Close</title>
                  <path
                    d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                  </path>
                </svg>
              </a>
              <div class="container h-100 d-flex align-items-center">
                <div class="row w-100">
                  <div class="col-4">
                    <ul class="nav flex-column nav-sidebar" data-wow-delay=".3s">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Boutique</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Design</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Lifestyle</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Beach</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Cullinary</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Urban</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Infinity</a>
                      </li>
                    </ul>

                    <div class="menu-media">
                      <a href="#" class="nav-sos"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href="#" class="nav-sos"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      <a href="#" class="nav-sos"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="row">
                      <div class="col-6">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link" href="#">Active <i class="fa fa-chevron-right"
                                aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link" href="#">Active <i class="fa fa-chevron-right"
                                aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="row">
                      <div class="col-6">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link" href="#">Active <i class="fa fa-chevron-right"
                                aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link" href="#">Active <i class="fa fa-chevron-right"
                                aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <hr class="mb-0">

      <div class="menu-s">
        <div class="d-flex align-items-center">
          <ul class="nav nav-left">
            <li class="nav-item">
              <a class="nav-link btn-sidebar" href="#" data-sidebar="#filterbar">
                <i class="ico ico-mixer"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ $mapsearch }}">
                <i class="ico ico-place"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ $videourl }}">
                <i class="ico ico-video"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ $instagramurl }}">
                <i class="ico ico-instagram"></i>
              </a>
            </li>
          </ul>
          <ul class="nav nav-text">
            <li class="nav-item">
              <a class="nav-link" href="#">
                Restaurants & Bars
              </a>
            </li>
<!--             <li class="nav-item">
              <a class="nav-link" href="#">
                Yachts
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Jet
              </a>
            </li> -->
          </ul>
          <ul class="nav nav-right ml-auto">
            <li class="nav-item">
              <a class="nav-link btn-sidebar" href="#" data-sidebar="#searchHistory">
                <i class="ico ico-layer"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-sidebar" href="#" data-sidebar="#question">
                <i class="ico ico-convertation"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-sidebar" href="#" data-sidebar="#share">
                <i class="ico ico-share-2"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="ico ico-diamon"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Add to collection</a>
                <a class="dropdown-item btn-sidebar" href="#" data-sidebar="#myCollection">Create new collection</a>
              </div>
            </li>
          </ul>
        </div>

      </div>

    </div>
  </div>
  <div class="second-header">
    <div class="px-4 pt-2">
      <div class="row">
        <div class="col-4">
          <a href="{{route('homepage')}}">
            <i class="t-logo logo-2"></i>
          </a>
        </div>
        <div class="col-8 pl-5">
          <div class="d-flex align-items-center">
            <div id="menunav">
              <a href="#calcF" class="menu-nav text-menu cal-f ml-0" data-toggle="collapse" role="button"
                aria-expanded="false" aria-controls="calcF">
                <span class="cal-date">22 Jun - 23 Jun</span>
              </a>
              <a href="#whoF" class="menu-nav text-menu who-f" data-toggle="collapse" role="button"
                aria-expanded="false" aria-controls="whoF">
                <div class="filter-lst expand filter-guest filter-white">
                  <div class="input-group">
                    <div class="gust-dropdown">
                      <div class="guest-option rto"><span class="guest-count">2</span> Guest</div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" class="menu-nav text-menu">Availability</a>
              <a href="#" class="menu-nav text-menu">Reservation</a>
            </div>
            <ul class="nav nav-right ml-auto">
              <li class="nav-item">
                <a class="nav-link " href="#searchHistory" data-toggle="collapse">
                  <i class="ico ico-layer"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-sidebar" href="#" data-sidebar="#question">
                  <i class="ico ico-convertation"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-sidebar" href="#" data-sidebar="#share">
                  <i class="ico ico-share-2"></i>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="ico ico-diamon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Add to collection</a>
                  <a class="dropdown-item btn-sidebar" href="#" data-sidebar="#myCollection">Create new collection</a>
                </div>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="menunav-group">
    <div class="collapse clp dash-clp" id="dashF" data-parent="#menunav">
      <div class="drop-grid">
        <a href="#">
          <div class="p-2 d-flex align-items-center">
            <i class="ico ico-building mr-2"></i> <span>Voyage</span>
          </div>
        </a>
        <a href="#">
          <div class="p-2 d-flex align-items-center">
            <i class="ico ico-safari mr-2"></i> <span>Safari</span>
          </div>
        </a>
        <a href="#">
          <div class="p-2 d-flex align-items-center">
            <i class="ico ico-spa-i mr-2"></i> <span>Spa</span>
          </div>
        </a>
        <a href="#">
          <div class="p-2 d-flex align-items-center">
            <i class="ico ico-islands mr-2"></i> <span>Islands</span>
          </div>
        </a>
        <a href="#">
          <div class="p-2 d-flex align-items-center">
            <i class="ico ico-golf mr-2"></i> <span>Golf</span>
          </div>
        </a>
      </div>
    </div>
<!--     <div class="collapse clp" id="cityList" data-parent="#menunav">
      <ul class="nav flex-column py-2">
        <li class="nav-item">
          <a class="nav-link" href="#"><span class="city-name-nav"><span class="label-city"
                style="background: green;"></span> New York</span>. -> 2.6.20 -> 15.6.20</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><span class="city-name-nav"><span class="label-city"
                style="background: red;"></span> San Diego</span>. -> 3.7.20 -> 5.7.20</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><span class="city-name-nav"><span class="label-city"
                style="background: blue;"></span> San Francisco</span>. -> 12.8.20 -> 16.8.20</a>
        </li>
      </ul>
    </div> -->

    <div class="collapse clp" id="searchF" data-parent="#menunav">
      <div class="search-field">
        <div class="row">
          <div class="col">
            <div class="input-group align-items-center">
              <div class="input-group-prepend">
                <i class="ico ico-search"></i>
              </div>
              <input type="text" class="form-control form-control-em border-0 where" id="inlineFormInputGroup"
                placeholder="Where">
            </div>
          </div>
        </div>
        <div class="wherepopup">
          <div class="whereinner">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="city-l">New York</span> <span class="cat-l">Hotels</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="city-l">New York</span> <span class="cat-l">Map</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="city-l">New York</span> <span class="cat-l">Private Jet</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="city-l">New York</span> <span class="cat-l">Cuisine</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="city-l">New York</span> <span class="cat-l">Channel</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="city-l">New York</span> <span class="cat-l">Experiences</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="collapse clp" id="calcF" data-parent="#menunav">
      <div class="d-flex justify-content-center pt-3">
        <ul class="nav calendar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#calendarselect" data-toggle="tab">Calendar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#flexible" data-toggle="tab">I'm flexible</a>
          </li>
        </ul>
      </div>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="calendarselect">
          <div class="range-calendar calendar-header" id="calendar-pick">
            <div id="date_range_container" class="daterangepicker-inline"></div>
            <input type="hidden" id="date_range">
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="tab-pane fade" id="flexible">
          <div class="flexible-option text-center">
            <h3 class="mb-3">Stay for a <span class="valweak">weekend</span></h3>
            <div class="d-flex justify-content-center align-items-center">
              <div class="weekselect">
                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input" value="3 Days"
                  checked>
                <label class="custom-control-label" for="customRadio4">
                  <div class="d-flex align-items-center">
                    <div class="mr-2">
                      <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                        style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 2.66667px; overflow: visible;"
                        aria-hidden="true" role="presentation" focusable="false">
                        <g fill="none">
                          <path d="M16 4v16m-8-8h16M8 26h16"></path>
                        </g>
                      </svg>
                    </div>
                    <div>
                      3 days
                    </div>
                  </div>
                </label>
              </div>
              <div class="weekselect">
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="weekend"
                  checked>
                <label class="custom-control-label" for="customRadio1">Weekend</label>
              </div>
              <div class="weekselect">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="week">
                <label class="custom-control-label" for="customRadio2">Week</label>
              </div>
              <div class="weekselect">
                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" value="month">
                <label class="custom-control-label" for="customRadio3">Month</label>
              </div>
            </div>
            <h3 class="mt-4 mb-3">Go in
              <span class="valmonth">
                <span class="show" data-id="july">July</span>
                <span data-id="august">August</span>
                <span data-id="september">September</span>
                <span data-id="october">October</span>
                <span data-id="november">Novamber</span>
                <span data-id="december">December</span>
              </span>
            </h3>

            <div class="flexible-month d-flex justify-content-center align-items-center">
              <div class="monthselect">
                <input type="checkbox" class="custom-control-input checked" id="july" value="july" checked>
                <label class="custom-control-label" for="july">
                  <img src="images/calendarmonth.jpg" width="30" alt="">
                  <p>July</p>
                </label>
              </div>
              <div class="monthselect">
                <input type="checkbox" class="custom-control-input" id="august" value="august">
                <label class="custom-control-label" for="august">
                  <img src="images/calendarmonth.jpg" width="30" alt="">
                  <p>August</p>
                </label>
              </div>
              <div class="monthselect">
                <input type="checkbox" class="custom-control-input" id="september" value="september">
                <label class="custom-control-label" for="september">
                  <img src="images/calendarmonth.jpg" width="30" alt="">
                  <p>September</p>
                </label>
              </div>
              <div class="monthselect">
                <input type="checkbox" class="custom-control-input" id="october" value="october">
                <label class="custom-control-label" for="october">
                  <img src="images/calendarmonth.jpg" width="30" alt="">
                  <p>October</p>
                </label>
              </div>
              <div class="monthselect">
                <input type="checkbox" class="custom-control-input" id="december" value="december">
                <label class="custom-control-label" for="december">
                  <img src="images/calendarmonth.jpg" width="30" alt="">
                  <p>December</p>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="collapse clp" id="whoF" data-parent="#menunav">
      <div class="guest-layer">
        <div class="row">
          <div class="col-lg-6">
            <div class="filter-container-fl filter-container-mm  w-100" id="guest-pick" style="display: block;">
              <div class="guest-pick-container mt-0">
                <div class="guest-pick-header">
                  <div class="row align-items-center">
                    <div class="col-9">
                      <p class="mb-0"><b>Suites</b></p>
                    </div>
                    <div class="col-3">
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
                  <div class="room-limit">
                    <p><b>Does your booking involve more than 4 suites?</b></p>
                    <p>Contact our Groups and Events team on 08989819281. and they'll take care of everything.</p>

                    <a href="#" class="btn btn-dark rounded-0 px-5"><i class="fa fa-phone" aria-hidden="true"></i>
                      REQUEST A CALL BACK</a>
                    <hr>
                    <p>Or send us an email and we'll get back to you prompty.</p>
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="row">
                          <div class="col-6 form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                          </div>
                          <div class="col-6 form-group">
                            <input type="email" class="form-control" placeholder="Your Email Address">
                          </div>
                          <div class="col-12 form-group">
                            <textarea class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
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
                  <div class="row list-eoom">
                    <div class="col-12 col-ews mb-3" id="room-1">
                      <p><b>Suite 1</b></p>
                      <div class="row align-items-center py-2">
                        <div class="col-7">
                          <p class="mb-0"><b>Adults</b></p>
                        </div>
                        <div class="col-5">
                          <div class="row field-count-guest align-items-center">
                            <button type="button" class="min">-</button>
                            <div class="col text-center">
                              <span class="mr-1 adult-val">1 </span>
                            </div>
                            <button type="button" class="plus mr-3">+</button>
                          </div>
                        </div>
                      </div>
                      <div class="row align-items-center py-2">
                        <div class="col-7">
                          <p class="mb-0"><b>Children</b></p>
                        </div>
                        <div class="col-5">
                          <div class="row field-count-guest align-items-center">
                            <button type="button" class="min">-</button>
                            <div class="col text-center">
                              <span class="mr-1 child-val">1 </span>
                            </div>
                            <button type="button" class="plus mr-3">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="guest-pick-footer">
                  <div class="text-right">
                    <a href="#" class="confirm-room">Confirm my Suite(s)</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-7 ">
                <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
                  <div class="img-offset-slide ">
                    <div>
                      <a href="suite.html">
                        <img src="images/97678356576-24898814906.jpg" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div>
                      <a href="suite.html">
                        <img src="images/97678356576-24898814906.jpg" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div>
                      <a href="suite.html">
                        <img src="images/97678356576-24898814906.jpg" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div>
                      <a href="suite.html">
                        <img src="images/97678356576-24898814906.jpg" class="img-fluid" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="my-dropdown">
                    <div class="btn-group dropleft">
                      <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ico ico-diamon diamon-label"></i>
                      </a>
                      <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Add to collection</a>
                        <a href="#" class="dropdown-item btn-sidebar create-collection"
                          data-sidebar="#myCollection">Create new collection</a>
                      </div>
                    </div>

                  </div>
                  <div class="hotel-meta full-width">
                    <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">
                      Reviews
                    </a>
                    <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo">
                      Quick info
                    </a>
                    <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#gallery">
                      Gallery
                    </a>
                    <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside">
                      Suite(s)
                    </a>
                    <div class="hotel-prices hotel-price-detail d-flex">
                      <div class="row align-items-center justify-content-center">
                        <div class="mr-2">
                          <i class="ico ico-info-green"></i>
                        </div>
                        <h3 class="mb-0">
                          <span class="title-font-2 mr-1">From</span> <span class="color-primary">€ 167 </span>
                        </h3>

                        <div class="ml-2">
                          <span class="pernight"></span>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-5 ">
                <div class="fetaruer py-5 pl-2 pr-2">
                  <h3 class="title-3 title-i ">— featured hotel —</h3>
                  <p class="font-2 ">
                    <i>
                      Think about New York of the 1980s with its large artwork, early hip hop, and punk rock scenes.
                      Then
                      translate that vitality to a lodge on the Decrease East Aspect. Put collectively you get The
                      Ludlow
                      Resort.
                    </i>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="collapse clp" id="destination-menu" data-parent="#menunav">
      <a href="#" class="close-collapse">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
          xmlns="http://www.w3.org/2000/svg">
          <title>Close</title>
          <path
            d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
          </path>
        </svg>
      </a>
      <div class="p-5">
        <div class="desktop-view ">
    <ul class="nav nav-pills nav-clr mb-5">
        <li class="nav-item">
            <a class="nav-link active" href="#europe" data-toggle="tab" role="tab">Europe</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#indian" data-toggle="tab" role="tab">Indian Ocean</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#oceania" data-toggle="tab" role="tab">Oceania</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#asia" data-toggle="tab" role="tab">Asia</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#america" data-toggle="tab" role="tab">The Americas</a>
        </li>
    </ul>
    <p><b>Current Destination : New York</b></p>
    <div class="tab-content">
        <!-- Europe tab content -->
        <div class="tab-pane fade show active" id="europe">
            <div class="row">
                <div class="col-2 br-001 col--01920">
                    <nav class="nav flex-column nav-dest">
                        <a class="nav-link active" href="#centralEurope" data-toggle="tab" role="tab">Central Europe</a>
                        <a class="nav-link" href="#northenEurope" data-toggle="tab" role="tab">Northen
                            Europe</a>
                        <a class="nav-link" href="#southernEurope" data-toggle="tab" role="tab">Southern
                            Europe</a>
                        <a class="nav-link" href="#easternEurope" data-toggle="tab" role="tab">Eastern
                            Europe</a>
                        <a class="nav-link" href="#westernEurope" data-toggle="tab" role="tab">Western
                            Europe</a>
                    </nav>
                </div>
                <div class="col-10">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="centralEurope">
                            <div class="row">
                                <div class="col-2 col--1223 br-001">
                                    <nav class="nav flex-column nav-dest">
                                        <a class="nav-link active" href="#germany" data-toggle="tab"
                                            role="tab">Germany</a>
                                        <a class="nav-link" href="#austria" data-toggle="tab" role="tab">Austria</a>
                                        <a class="nav-link" href="#france" data-toggle="tab" role="tab">France</a>
                                        <a class="nav-link" href="#switzerland" data-toggle="tab"
                                            role="tab">Switzerland</a>
                                        <a class="nav-link" href="#belgium" data-toggle="tab" role="tab">Belgium</a>
                                        <a class="nav-link" href="#holland" data-toggle="tab" role="tab">Holland</a>
                                        <a class="nav-link" href="#croatia" data-toggle="tab" role="tab">Croatia</a>
                                        <a class="nav-link" href="#slovenia" data-toggle="tab" role="tab">Slovenia</a>
                                    </nav>
                                </div>
                                <div class="col-10 col--12929">
                                    <div class="tab-content h-100">
                                        <div class="tab-pane fade show active h-100" id="germany">
                                            <div class="row h-100">
                                                <div class="col-3 col--819281 br-001 ">
                                                    <div class="destination-img">
                                                        <img src="images/Emporium-Collection_129.jpg" class="img-fluid"
                                                            alt="">
                                                        <div class="destinatios-cntay--00">
                                                            <p class="mb-0">Germany</p>
                                                            <p class="mb-0">#loveluxurygermany</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9 col--71812 h-100">
                                                    <div class="row h-100">
                                                        <div class="col-3 col--98121 br-001 h-100">
                                                            <nav class="nav flex-column nav-dest">
                                                                <a class="nav-link " href="#frankfurt" data-toggle="tab"
                                                                    role="tab">Frankfurt</a>
                                                                <a class="nav-link active" href="#hamburg"
                                                                    data-toggle="tab" role="tab">Hamburg</a>
                                                                <a class="nav-link" href="#munich" data-toggle="tab"
                                                                    role="tab">Munich</a>
                                                                <a class="nav-link" href="#berlin" data-toggle="tab"
                                                                    role="tab">Berlin</a>
                                                                <a class="nav-link" href="#cologne" data-toggle="tab"
                                                                    role="tab">Cologne</a>
                                                                <a class="nav-link" href="#bremen" data-toggle="tab"
                                                                    role="tab">Bremen</a>
                                                            </nav>
                                                        </div>
                                                        <div class="col-4 col--9819281">
                                                            <a href="#destinationSection" data-scroll>
                                                                <div class="destination-img">
                                                                    <img src="images/e8150591299245.5e2eb7c1e4d56.jpg"
                                                                        class="img-fluid" alt="">
                                                                    <div class="destinatios-cntay--00">
                                                                        <p class="mb-0">Humburg</p>
                                                                        <p class="mb-0">
                                                                            #loveluxuryhumburg</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade h-100" id="austria">
                                            <div class="row h-100">
                                                <div class="col-3 col--819281 br-001 ">
                                                    <div class="destination-img">
                                                        <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                                            class="img-fluid" alt="">
                                                        <div class="destinatios-cntay--00">
                                                            <p class="mb-0">Austria</p>
                                                            <p class="mb-0">#loveluxuryAustria</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9 col--71812 h-100">
                                                    <div class="row h-100">
                                                        <div class="col-3 col--98121 br-001 h-100">
                                                            <nav class="nav flex-column nav-dest">
                                                                <a class="nav-link " href="#klagen" data-toggle="tab"
                                                                    role="tab">Klagenfurt</a>
                                                                <a class="nav-link active" href="#sankt"
                                                                    data-toggle="tab" role="tab">Sankt
                                                                    Veit</a>
                                                            </nav>
                                                        </div>
                                                        <div class="col-4 col--9819281">
                                                            <div class="tab-content">
                                                                <div class="tab-pane fade show active" id="klagen">
                                                                    <div class="destination-img">
                                                                        <img src="images/53511811337-49267444221.jpg"
                                                                            class="img-fluid" alt="">
                                                                        <div class="destinatios-cntay--00">
                                                                            <p class="mb-0">
                                                                                Klagenfurt</p>
                                                                            <p class="mb-0">
                                                                                #loveluxuryKlagenfurt
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="sankt">
                                                                    <div class="destination-img">
                                                                        <img src="images/97678356576-24898814906.jpg"
                                                                            class="img-fluid" alt="">
                                                                        <div class="destinatios-cntay--00">
                                                                            <p class="mb-0">Sankt
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                #loveluxurysankt
                                                                            </p>
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
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="northenEurope">
                            <div class="row">
                                <div class="col-2 col--1223 br-001">
                                    <nav class="nav flex-column nav-dest">
                                        <a class="nav-link active" href="#estonia" data-toggle="tab"
                                            role="tab">Estonia</a>
                                        <a class="nav-link" href="#latvia" data-toggle="tab" role="tab">Latvia</a>
                                    </nav>
                                </div>
                                <div class="col-10 col--12929">
                                    <div class="tab-content h-100">
                                        <div class="tab-pane fade show active h-100" id="estonia">
                                            <div class="row h-100">
                                                <div class="col-3 col--819281 br-001 ">
                                                    <div class="destination-img">
                                                        <img src="images/Emporium-Collection_129.jpg" class="img-fluid"
                                                            alt="">
                                                        <div class="destinatios-cntay--00">
                                                            <p class="mb-0">Estonia</p>
                                                            <p class="mb-0">#loveluxuryestonia</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9 col--71812 h-100">
                                                    <div class="row h-100">
                                                        <div class="col-3 col--98121 br-001 h-100">
                                                            <nav class="nav flex-column nav-dest">
                                                                <a class="nav-link " href="#frankfurt" data-toggle="tab"
                                                                    role="tab">Tallinn</a>
                                                                <a class="nav-link active" href="#hamburg"
                                                                    data-toggle="tab" role="tab">Tartu</a>
                                                            </nav>
                                                        </div>
                                                        <div class="col-4 col--9819281">
                                                            <a href="#destinationSection" data-scroll>
                                                                <div class="destination-img">
                                                                    <img src="images/e8150591299245.5e2eb7c1e4d56.jpg"
                                                                        class="img-fluid" alt="">
                                                                    <div class="destinatios-cntay--00">
                                                                        <p class="mb-0">Tallinn</p>
                                                                        <p class="mb-0">
                                                                            #loveluxuryhumburg</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade h-100" id="latvia">
                                            <div class="row h-100">
                                                <div class="col-3 col--819281 br-001 ">
                                                    <div class="destination-img">
                                                        <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                                            class="img-fluid" alt="">
                                                        <div class="destinatios-cntay--00">
                                                            <p class="mb-0">Austria</p>
                                                            <p class="mb-0">#loveluxuryAustria</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9 col--71812 h-100">
                                                    <div class="row h-100">
                                                        <div class="col-3 col--98121 br-001 h-100">
                                                            <nav class="nav flex-column nav-dest">
                                                                <a class="nav-link " href="#klagen" data-toggle="tab"
                                                                    role="tab">Klagenfurt</a>
                                                                <a class="nav-link active" href="#sankt"
                                                                    data-toggle="tab" role="tab">Sankt
                                                                    Veit</a>
                                                            </nav>
                                                        </div>
                                                        <div class="col-4 col--9819281">
                                                            <div class="tab-content">
                                                                <div class="tab-pane fade show active" id="klagen">
                                                                    <div class="destination-img">
                                                                        <img src="images/53511811337-49267444221.jpg"
                                                                            class="img-fluid" alt="">
                                                                        <div class="destinatios-cntay--00">
                                                                            <p class="mb-0">
                                                                                Klagenfurt</p>
                                                                            <p class="mb-0">
                                                                                #loveluxuryKlagenfurt
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="sankt">
                                                                    <div class="destination-img">
                                                                        <img src="images/97678356576-24898814906.jpg"
                                                                            class="img-fluid" alt="">
                                                                        <div class="destinatios-cntay--00">
                                                                            <p class="mb-0">Sankt
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                #loveluxurysankt
                                                                            </p>
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
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Europe tab content End -->

        <div class="tab-pane fade" id="indian">
            Indian Ocean
        </div>
        <div class="tab-pane fade" id="oceania">
            Oceania
        </div>
        <div class="tab-pane fade" id="asia">
            Asia
        </div>
        <div class="tab-pane fade" id="america">
            The Americas
        </div>
    </div>
</div>

<div class="ipad-view">
    <p><b>Current Destination : New York</b></p>
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-columns nav-clr nav-des no-bdr mb-5">
                <li class="nav-item">
                    <a class="nav-link active" href="#designH" data-toggle="tab" role="tab">Design Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#boutiqueH" data-toggle="tab" role="tab">Boutique Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#spaH" data-toggle="tab" role="tab">Spa and Wellness Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cullinaryH" data-toggle="tab" role="tab">Cullinary Delights</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="designH">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#"><img src="images/Emporium-Collection_129.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="col-md-4">
                            <h6><b>Design Hotel</b></h6>
                        </div>
                        <div class="col-md-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident sint perspiciatis
                            similique. Iste
                            beatae
                            assumenda laboriosam id accusantium, aliquam harum quasi esse non, sequi est mollitia
                            quisquam in
                            ducimus
                            perspiciatis!

                            <div class="text-left mt-3">
                                <a href="#" class="confirm-room">View Design Hotel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="boutiqueH">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#"><img src="images/Emporium-Collection_129.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="col-md-4">
                            <h6><b>Boutique Hotels</b></h6>
                        </div>
                        <div class="col-md-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident sint perspiciatis
                            similique.
                            Iste
                            beatae
                            assumenda laboriosam id accusantium, aliquam harum quasi esse non, sequi est mollitia
                            quisquam in
                            ducimus
                            perspiciatis!

                            <div class="text-left mt-3">
                                <a href="#" class="confirm-room">View Boutique Hotels</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="spaH">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#"><img src="images/Emporium-Collection_129.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="col-md-4">
                            <h6><b>Spa and Wellness Hotels</b></h6>
                        </div>
                        <div class="col-md-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident sint perspiciatis
                            similique.
                            Iste
                            beatae
                            assumenda laboriosam id accusantium, aliquam harum quasi esse non, sequi est mollitia
                            quisquam in
                            ducimus
                            perspiciatis!

                            <div class="text-left mt-3">
                                <a href="#" class="confirm-room">View Spa and Wellness Hotels</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="cullinaryH">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#"><img src="images/Emporium-Collection_129.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="col-md-4">
                            <h6><b>Cullinary Delights</b></h6>
                        </div>
                        <div class="col-md-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident sint perspiciatis
                            similique.
                            Iste
                            beatae
                            assumenda laboriosam id accusantium, aliquam harum quasi esse non, sequi est mollitia
                            quisquam in
                            ducimus
                            perspiciatis!

                            <div class="text-left mt-3">
                                <a href="#" class="confirm-room">View Cullinary Delights</a>
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
  </div>
</header>

<div class="sidebar">
  <a href="#" class="sidebar-close">
    <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
      xmlns="http://www.w3.org/2000/svg">
      <title>Close</title>
      <path
        d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
      </path>
    </svg>
    </i></a>
  <ul class="nav nav-tabs nav-one" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="search"
        aria-selected="true">Search</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings"
        aria-selected="false">Settings</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="search" role="tabpanel" aria-labelledby="search-tab">
      <ul class="nav nav-tab-main nav-pills nav-justified mt-2">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login"
            aria-selected="true">Login/register</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="filter-tab" data-toggle="tab" href="#filter" role="tab" aria-controls="filter"
            aria-selected="false">Filter</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="preference-tab" data-toggle="tab" href="#preference" role="tab"
            aria-controls="preference" aria-selected="false">Preferences</a>
        </li>
      </ul>

      <div class="tab-content mt-4" id="myTabContent">
        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
          <!-- <a href="#" class="btn btn-primary"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a> -->
          <div class="auth-screen">
            <div class="auth-header">
              <div class="row align-items-center">
                <div class="col">
                  NEED HELP ?
                </div>
              </div>
            </div>
            <div class="auth-content auth-signin active">
              <div class="auth-body">
                <h2>
                  MEMBERS CLUB <br>
                  LOGIN
                </h2>
                <form action="#">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email Address">
                  </div>
                  <div class="form-group form-group-inline">
                    <input type="password" class="form-control" placeholder="Password">
                    <a href="#">FORGOT?</a>
                  </div>
                  <div class="form-group ">
                    <button class="btn btn-primary btn-block rounded-0" type="submit">LOG IN</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="auth-content auth-signup">
              <div class="auth-body">
                <h2>
                  Welcome to the Emporium Voyage <br> Members Club
                </h2>
                <form action="#">
                  <select class="w-100 mb-3">
                    <option value="">I AM:</option>
                    <option value="">LUXURY HOTEL</option>
                    <option value="">LUXURY TRAVELER</option>
                    <option value="">BESPOKE ADVERTISER</option>
                    <option value="">SUPPLIER</option>
                    <option value="">DISTRIBUTOR</option>
                  </select>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone Number">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <p>
                      By clicking on the become a member button, you agree to our <a href="#"
                        class="underline">terms</a> and conditions default communication & privacy preferences.
                    </p>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary btn-block rounded-0" type="submit">BECOME A BESPOKE MEMBER</button>
                  </div>

                </form>
              </div>
            </div>
            <div class="auth-footer row m-0">
              <button class="btn btn-auth col-6" data-member=".auth-signup">MEMBER SIGN UP</button>
              <button class="btn btn-auth col-6" data-member=".auth-signin">MEMBER LOG IN</button>
              <button class="btn btn-auth col-12" data-member=".auth-signin">ADVERTISER LOGIN</button>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="filter" role="tabpanel" aria-labelledby="filter-tab">...</div>
        <div class="tab-pane fade" id="preference" role="tabpanel" aria-labelledby="preference-tab">...</div>
      </div>
    </div>
    <div class="tab-pane fade h-100" id="settings" role="tabpanel" aria-labelledby="settings-tab">
      <ul class="nav nav-pills nav-justified nav-tab-main mt-2">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="communication-tab" data-toggle="tab" href="#communication" role="tab"
            aria-controls="communication" aria-selected="false">Communication</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting"
            aria-selected="false">Settings</a>
        </li>
      </ul>

      <div class="tab-content mt-4" id="myTabContent">
        <div class="tab-pane fade show active" id="communication" role="tabpanel" aria-labelledby="communication-tab">
          <div class="messenger">
            <div class="messenger-inner">
              <div class="messenger-in">
                <div class="row">
                  <div class="col-2 col-img">
                    <div class="messenger-img">
                      <img src="https://emporium-voyage.com/metronic/assets/app/media/img/users/user3.jpg" alt="">
                    </div>
                  </div>
                  <div class="col">
                    <div class="messenger-in-layout">
                      <div class="messenger-username">Megan wrote </div>
                      <div class="messenger-text">
                        Hi Bob. What time will be the meeting ?
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messenger-out">
                <div class="row">
                  <div class="col">
                    <div class="messenger-out-layout">
                      <div class="messenger-text">
                        Hi Megan. It's at 2.30PM
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messenger-in">
                <div class="row">
                  <div class="col-2 col-img">
                    <div class="messenger-img">
                      <img src="https://emporium-voyage.com/metronic/assets/app/media/img/users/user3.jpg" alt="">
                    </div>
                  </div>
                  <div class="col">
                    <div class="messenger-in-layout">
                      <div class="messenger-username">Megan wrote </div>
                      <div class="messenger-text">
                        Will the development team be joining ?
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messenger-out">
                <div class="row">
                  <div class="col">
                    <div class="messenger-out-layout">
                      <div class="messenger-text">
                        Yes sure. I invited them as well
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messenger-date-time">
                2:30PM
              </div>
              <div class="messenger-in">
                <div class="row">
                  <div class="col-2 col-img">
                    <div class="messenger-img">
                      <img src="https://emporium-voyage.com/metronic/assets/app/media/img/users/user3.jpg" alt="">
                    </div>
                  </div>
                  <div class="col">
                    <div class="messenger-in-layout">
                      <div class="messenger-username">Megan wrote </div>
                      <div class="messenger-text">
                        Noted. For the Coca-Cola Mobile App project as well ?
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messenger-out">
                <div class="row">
                  <div class="col">
                    <div class="messenger-out-layout">
                      <div class="messenger-text">
                        Yes, sure.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messenger-out">
                <div class="row">
                  <div class="col">
                    <div class="messenger-out-layout">
                      <div class="messenger-text">
                        Please also prepare the quotation for the Loop CRM project as well.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messenger-in">
                <div class="row">
                  <div class="col-2 col-img">
                    <div class="messenger-img">
                      <img src="https://emporium-voyage.com/metronic/assets/app/media/img/users/user3.jpg" alt="">
                    </div>
                  </div>
                  <div class="col">
                    <div class="messenger-in-layout">
                      <div class="messenger-username">Megan wrote </div>
                      <div class="messenger-text">
                        Noted. I will prepare it.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messenger-out">
                <div class="row">
                  <div class="col">
                    <div class="messenger-out-layout">
                      <div class="messenger-text">
                        Thanks Megan. I will see you later.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messenger-in">
                <div class="row">
                  <div class="col-2 col-img">
                    <div class="messenger-img">
                      <img src="https://emporium-voyage.com/metronic/assets/app/media/img/users/user3.jpg" alt="">
                    </div>
                  </div>
                  <div class="col">
                    <div class="messenger-in-layout">
                      <div class="messenger-username">Megan wrote </div>
                      <div class="messenger-text">
                        Sure. See you in the meeting soon.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="messenger-type">
              <hr>
              <div class="d-flex align-items-center">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Type Here">
                </div>
                <div class="attach-btn">
                  <a href="#" class="attach"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade h-100" id="setting" role="tabpanel" aria-labelledby="setting-tab">
          <div class="setting-outer">
            <form action="#">
              <div class="setting-inner">
                <div class="setting-group">
                  <p><b>TRANSLATION</b></p>
                  <div class="row form-group align-items-center">
                    <div class="col">
                      Language
                    </div>
                    <div class="col">
                      <select class="w-100">
                        <option>English</option>
                        <option>German</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="setting-group">
                  <p><b>CURRENCY</b></p>
                  <div class="row form-group align-items-center">

                    <div class="col-6">
                      Currency
                    </div>
                    <div class="col-6">
                      <select class="w-100">
                        <option>IDR</option>
                        <option>US</option>
                      </select>
                    </div>
                    <div class="col-6 offset-6">
                      <p class="label-ex">Select the currency in which we display system wide prices. </p>
                    </div>
                  </div>
                </div>
                <div class="setting-group">
                  <p><b>Messages</b></p>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      Email
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="email" tabindex="0">
                        <label class="onoffswitch-label" for="email"></label>
                      </div>

                    </div>
                  </div>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      Push Messages
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="push" tabindex="0">
                        <label class="onoffswitch-label" for="push"></label>
                      </div>

                    </div>
                  </div>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      SMS
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="sms" tabindex="0">
                        <label class="onoffswitch-label" for="sms"></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="setting-group">
                  <p><b>REMINDERS</b></p>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      Email
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="email-reminder"
                          tabindex="0">
                        <label class="onoffswitch-label" for="email-reminder"></label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      Push Messages
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="push-reminder"
                          tabindex="0">
                        <label class="onoffswitch-label" for="push-reminder"></label>
                      </div>

                    </div>
                  </div>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      SMS
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="sms-reminder"
                          tabindex="0">
                        <label class="onoffswitch-label" for="sms-reminder"></label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      Phone Call
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="phone-call"
                          tabindex="0">
                        <label class="onoffswitch-label" for="phone-call"></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="setting-group">
                  <p><b>EXCLUSIVE OFFERS</b></p>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      Email
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="email-offer"
                          tabindex="0">
                        <label class="onoffswitch-label" for="email-offer"></label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      Push Messages
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="push-offer"
                          tabindex="0">
                        <label class="onoffswitch-label" for="push-offer"></label>
                      </div>

                    </div>
                  </div>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      SMS
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="sms-offer"
                          tabindex="0">
                        <label class="onoffswitch-label" for="sms-offer"></label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      Phone Call
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="phone-offer"
                          tabindex="0">
                        <label class="onoffswitch-label" for="phone-offer"></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="setting-group">
                  <p><b>CUSTOMER SERVICES</b></p>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      Email
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="email-service"
                          tabindex="0">
                        <label class="onoffswitch-label" for="email-service"></label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      Push Messages
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="push-service"
                          tabindex="0">
                        <label class="onoffswitch-label" for="push-service"></label>
                      </div>

                    </div>
                  </div>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      SMS
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="sms-service"
                          tabindex="0">
                        <label class="onoffswitch-label" for="sms-service"></label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group align-items-center">
                    <div class="col-6">
                      Phone Call
                    </div>
                    <div class="col-6">
                      <div class="onoffswitch ml-auto">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="phone-service"
                          tabindex="0">
                        <label class="onoffswitch-label" for="phone-service"></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>

<div class="sidebar-main share-sidebar" id="share">
    <a href="#" class="close-sidebar">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path
                d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>


    <div class="sidebar-scroller">
        <h3>Share this accommodation with friends and family</h3>
        <nav class="nav flex-column nav-line">
            <a class="nav-link media-s" href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
            <a class="nav-link media-s" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
            <a class="nav-link media-s" href="#"><i class="fa fa-link" aria-hidden="true"></i> Copy Link</a>
            <a class="nav-link media-s" href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Email</a>
            <a class="nav-link media-s" href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</a>
            <a class="nav-link media-s" href="#"><i class="fa fa-commenting" aria-hidden="true"></i> SMS</a>
        </nav>
    </div>
</div>

<div class="sidebar-main share-sidebar" id="question">
    <a href="#" class="close-sidebar">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path
                d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>


    <div class="sidebar-scroller">
        <h3 class="mb-5">Ask Questions</h3>
        <div class="row align-items-center">
            <div class="col-4">
                <div class="barcode-suite w-100">
                    <div class="aspect-ratio-box">
                      <div class="aspect-ratio-box-inside">
                        <img src="images/QR-code.png" class="img-fluid" alt="">
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-8">
                <div class="hotel-user w-100">
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

<div class="sidebar-main pt-4" id="searchHistory">
    <a href="#" class="close-sidebar">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path
                d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>
    <div class="nav-gallery-wrapper">
        <div class="d-flex align-items-center mb-3">
            <a href="#" class="sidebar-back">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="title-second title-line mb-0">
                Search History
            </h3>
        </div>
    </div>

    <div class="pt-2 sidebar-scroller pb-100">
        <div class="nav-gallery-wrapper">
            <div class="search-list-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-10">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Destination </b>
                                    </div>
                                    <div class="w-100">
                                        : New York
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Date </b>
                                    </div>
                                    <div class="w-100">
                                        : 21 Jun - 22 Jun
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Guests </b>
                                    </div>
                                    <div class="w-100">
                                        : 2 Guests
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Experience </b>
                                    </div>
                                    <div class="w-100">
                                        : Experience Name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="#">Save to collection</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="search-list-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-10">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Destination </b>
                                    </div>
                                    <div class="w-100">
                                        : New York
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Date </b>
                                    </div>
                                    <div class="w-100">
                                        : 21 Jun - 22 Jun
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Guests </b>
                                    </div>
                                    <div class="w-100">
                                        : 2 Guests
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Experience </b>
                                    </div>
                                    <div class="w-100">
                                        : Experience Name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="#">Remove</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="search-list-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-10">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Destination </b>
                                    </div>
                                    <div class="w-100">
                                        : New York
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Date </b>
                                    </div>
                                    <div class="w-100">
                                        : 21 Jun - 22 Jun
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Guests </b>
                                    </div>
                                    <div class="w-100">
                                        : 2 Guests
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Experience </b>
                                    </div>
                                    <div class="w-100">
                                        : Experience Name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="#">Save to collection</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="search-list-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-10">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Destination </b>
                                    </div>
                                    <div class="w-100">
                                        : New York
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Date </b>
                                    </div>
                                    <div class="w-100">
                                        : 21 Jun - 22 Jun
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Guests </b>
                                    </div>
                                    <div class="w-100">
                                        : 2 Guests
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Experience </b>
                                    </div>
                                    <div class="w-100">
                                        : Experience Name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="#">Save to collection</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="search-list-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-10">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Destination </b>
                                    </div>
                                    <div class="w-100">
                                        : New York
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Date </b>
                                    </div>
                                    <div class="w-100">
                                        : 21 Jun - 22 Jun
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Guests </b>
                                    </div>
                                    <div class="w-100">
                                        : 2 Guests
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Experience </b>
                                    </div>
                                    <div class="w-100">
                                        : Experience Name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="#">Save to collection</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="search-list-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-10">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Destination </b>
                                    </div>
                                    <div class="w-100">
                                        : New York
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Date </b>
                                    </div>
                                    <div class="w-100">
                                        : 21 Jun - 22 Jun
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Guests </b>
                                    </div>
                                    <div class="w-100">
                                        : 2 Guests
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Experience </b>
                                    </div>
                                    <div class="w-100">
                                        : Experience Name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="#">Save to collection</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="search-list-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-10">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Destination </b>
                                    </div>
                                    <div class="w-100">
                                        : New York
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Date </b>
                                    </div>
                                    <div class="w-100">
                                        : 21 Jun - 22 Jun
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Guests </b>
                                    </div>
                                    <div class="w-100">
                                        : 2 Guests
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Experience </b>
                                    </div>
                                    <div class="w-100">
                                        : Experience Name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="#">Save to collection</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="search-list-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-10">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Destination </b>
                                    </div>
                                    <div class="w-100">
                                        : New York
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Date </b>
                                    </div>
                                    <div class="w-100">
                                        : 21 Jun - 22 Jun
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Guests </b>
                                    </div>
                                    <div class="w-100">
                                        : 2 Guests
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <b>Experience </b>
                                    </div>
                                    <div class="w-100">
                                        : Experience Name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="#">Save to collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sidebar-main share-sidebar" id="filterbar">
    <a href="#" class="close-sidebar">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path
                d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>


    <div class="sidebar-scroller">
        <h3 class="mb-5">Filter</h3>
        <form>
            <div class="filter-list">
                <h5 class="filter-title mb-4">By price</h5>
                <div class="px-2">
                    <div id="price_range" class="price-range"></div>
                </div>
                <div class="row align-items-center price-input">
                    <div class="col">
                        <label>Min:</label>
                        <div class="input-filter">
                            <span>€</span>
                            <input type="text" class="priceValue form-control" data-index="0" value="80" />
                        </div>
                    </div>
                    <div class="col">
                        <label>Max:</label>
                        <div class="input-filter">
                            <span>€</span>
                            <input type="text" class="priceValue form-control" data-index="1" value="824" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-list">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h5 class="filter-title">By experience</h5>
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="experiencefilter"
                                tabindex="0">
                            <label class="onoffswitch-label" for="experiencefilter"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-list">
                <h5 class="filter-title mb-4">By facility</h5>

                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Wheelchair friendly
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="wheelchair"
                                tabindex="0">
                            <label class="onoffswitch-label" for="wheelchair"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Pets Allowed
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="pets"
                                tabindex="0">
                            <label class="onoffswitch-label" for="pets"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Limousine Service
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="limousine"
                                tabindex="0">
                            <label class="onoffswitch-label" for="limousine"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Personalized Service
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="personalized"
                                tabindex="0">
                            <label class="onoffswitch-label" for="personalized"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Covid 19 +  Cancellation Flexibility
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="covid"
                                tabindex="0">
                            <label class="onoffswitch-label" for="covid"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Free Wifi
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="wifi"
                                tabindex="0">
                            <label class="onoffswitch-label" for="wifi"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Pool
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="pool"
                                tabindex="0">
                            <label class="onoffswitch-label" for="pool"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Gym
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="gym"
                                tabindex="0">
                            <label class="onoffswitch-label" for="gym"></label>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8">
                        Smoking allowed
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="smoking"
                                tabindex="0">
                            <label class="onoffswitch-label" for="smoking"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-list">
                <h5 class="filter-title mb-4">By Suite type</h5>

                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Hotels with penthouse suites
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="penthouse"
                                tabindex="0">
                            <label class="onoffswitch-label" for="penthouse"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Hotels with Appartments
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="appart"
                                tabindex="0">
                            <label class="onoffswitch-label" for="appart"></label>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8">
                        Hotels with Butler
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="butler"
                                tabindex="0">
                            <label class="onoffswitch-label" for="butler"></label>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

<div class="sidebar-main" id="priceinfo">
    <a href="#" class="close-sidebar">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path
                d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>


    <div class="sidebar-scroller">
        <div class="d-flex align-items-center mb-5">
            <a href="#" class="sidebar-back">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="title-second title-line mb-0">
                The Ludlow Hotel
            </h3>
        </div>
        <div class="card mb-4">
            <div class="suite-board-header">
                <div class="row align-items-center">
                    <div class="col-2 col---s">
                        <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg" class="img-full"
                            alt="">
                    </div>
                    <div class="col">
                        <h3>Superior Double Room Garden or Village View </h3>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="row m-0 price-lst-table-head">
                    <div class="col-6 pl-0">DETAILS</div>
                    <div class="col-3 text-right">USD</div>
                    <div class="col-3 pr-0 text-right">ZAR</div>
                </div>
                <div class="row m-0 list-prs">
                    <div class="col-6 pl-0"><a href="#" class="btn-prc-title" data-price="#pr-1">Subtotal for
                            7
                            nights <span class="arrow-down toup"></span></a></div>
                    <div class="col-3 text-right">$2,250</div>
                    <div class="col-3 pr-0 text-right">R33,202</div>
                    <div class="col-12 sub-price-content active" id="pr-1">
                        <div class="row subs-price">
                            <div class="col-6">February 19, 2020</div>
                            <div class="col-3 text-right">$375</div>
                            <div class="col-3 text-right pr-0">R5,534</div>
                        </div>
                        <div class="row subs-price">
                            <div class="col-6">February 19, 2020</div>
                            <div class="col-3 text-right">$375</div>
                            <div class="col-3 text-right pr-0">R5,534</div>
                        </div>
                        <div class="row subs-price">
                            <div class="col-6">February 19, 2020</div>
                            <div class="col-3 text-right">$375</div>
                            <div class="col-3 text-right pr-0">R5,534</div>
                        </div>
                        <div class="row subs-price">
                            <div class="col-6">February 19, 2020</div>
                            <div class="col-3 text-right">$375</div>
                            <div class="col-3 text-right pr-0">R5,534</div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 list-prs">
                    <div class="col-6 pl-0"><a href="#" class="btn-prc-title" data-price="#pr-2">Hotel
                            taxes & fees <span class="arrow-down toup"></span></a></div>
                    <div class="col-3 text-right">$2,250</div>
                    <div class="col-3 pr-0 text-right">R33,202</div>
                    <div class="col-12 sub-price-content active" id="pr-2">
                        <div class="row subs-price">
                            <div class="col-6">February 19, 2020</div>
                            <div class="col-3 text-right">$375</div>
                            <div class="col-3 text-right pr-0">R5,534</div>
                        </div>
                        <div class="row subs-price">
                            <div class="col-6">February 19, 2020</div>
                            <div class="col-3 text-right">$375</div>
                            <div class="col-3 text-right pr-0">R5,534</div>
                        </div>
                        <div class="row subs-price">
                            <div class="col-6">February 19, 2020</div>
                            <div class="col-3 text-right">$375</div>
                            <div class="col-3 text-right pr-0">R5,534</div>
                        </div>
                        <div class="row subs-price">
                            <div class="col-6">February 19, 2020</div>
                            <div class="col-3 text-right">$375</div>
                            <div class="col-3 text-right pr-0">R5,534</div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 list-prs">
                    <div class="col-6 pl-0">Total with taxes & fees</div>
                    <div class="col-3 text-right">$2,250</div>
                    <div class="col-3 pr-0 text-right">R33,202</div>
                </div>
                <div class="row m-0 mt-2 txt-do">
                    <div class="col-12 pl-0">
                        *All hotel prices are based on local currency. <br>
                        Guests may be subject to additional fees and taxes.
                    </div>
                </div>
                <hr>
                <div class="booking-tearms">
                    <h3><b>Booking teams and conditions</b></h3>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="policies43">
                        <label class="custom-control-label" for="policies43">
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
                    <div class="row mt-4">
                        <div class="col-6">
                            <a href="#" class="btn btn-dark  px-5 btn-backwizard">Go back</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#@@book" class="btn btn-dark px-5 btn-confirm" @@classes>Confirm
                                booking</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

