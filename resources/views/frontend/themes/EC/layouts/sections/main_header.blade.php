<header>
  <div class="top-header">
    <div class="top-header-inner">
      <div class="row align-items-center">
        <div class="col-md-5 header-left col-4">
          @if(Request::segment(1) != 'reservation')
          <div id="menunav">
            <a href="#dashF" class="menu-nav grid-f" data-toggle="collapse" role="button" aria-expanded="false"
              aria-controls="dashF">
              <i class="ico ico-dash" data-toggle="tooltip" title="Navigate to our collection"></i>
            </a>
            <a href="#searchF" class="menu-nav search-f" data-toggle="collapse" role="button" aria-expanded="false"
              aria-controls="searchF">
              <i class="ico ico-search" data-toggle="tooltip" title="Search our collection"></i>
            </a>
              @if(!empty(\Session::get('keyword')))
                <a href="#cityList" class="menu-nav text-menu city-f">
                  <span data-toggle="tooltip" title="Change destination">
                  {{ substr(\Session::get('keyword'), 0, 26) }}</span>
                </a>
              @endif
              <a href="#calcF" class="menu-nav text-menu cal-f" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="calcF">
                  <span class="cal-date" data-toggle="tooltip" title="Change availability">
                    @if(!empty(\Session::get('arrival') AND \Session::get('departure')))
                      {{ date('d M', strtotime(\Session::get('arrival'))) }} - {{ date('d M', strtotime(\Session::get('departure'))) }}
                    @else
                      Selecte Date
                    @endif
                </span>
                </a>
                <a href="#whoF" class="menu-nav text-menu who-f" data-toggle="collapse" role="button" aria-expanded="false"
                  aria-controls="whoF">
                  <div class="filter-lst expand filter-guest filter-white">
                    <div class="input-group">
                      <div class="gust-dropdown">
                        <div class="guest-option rto" data-toggle="tooltip" title="Change guest"><span class="guest-count">{{ \Session::get('Guests') }} </span>Guests</div>
                      </div>
                    </div>
                  </div>
                </a> 
          </div>
        @endif 
        </div>
        <div class="col-md-2 col-4 header-center text-center px-0">
          <a href="#" class="btn-sidebar" data-sidebar="#dashboard_menu">
            <?php if(\Config::get('app.currentdomain') == 'voyage'){?>
              <img src="{{ asset('/images/Emporium-Voyage-Logo-72dpi.png') }}" width="131" height="60">
            <?php } ?>

            <?php if(\Config::get('app.currentdomain') == 'spa'){?>
              <img src="{{ asset('/images/Emporium-Spa-Logo-72.png') }}" width="131" height="60">
            <?php } ?>

            <?php if(\Config::get('app.currentdomain') == 'safari'){?>
              <img src="{{ asset('/images/Emporium-Safari-Logo-72dpi.png') }}" width="131" height="60">
            <?php } ?>

            <?php if(\Config::get('app.currentdomain') == 'islands'){?>
              <img src="{{ asset('/images/Emporium-islands.300dpi.png') }}" width="131" height="60">
            <?php } ?>

            <?php if(\Config::get('app.currentdomain') == 'magazine'){?>
              <img src="{{ asset('/images/Emporium-Magazine-Large.svg') }}" width="131" height="60">
            <?php } ?>
            
            <?php if(\Config::get('app.currentdomain') == 'emporiumcollection'){?>
              <img src="{{ asset('/images/Emporium-Collection-Logo-1.png') }}" width="131" height="60">
            <?php } ?>
          </a>
        </div>
        <div class="col-md-5 col-4 header-right text-right mobile-flex">
          <div class="d-flex justify-content-end align-items-center my-2 menu-col-nav">
            @if(Auth::check() && Auth::user()->username)
              <a href="/dashboard" class="login-nav mr-3 pr-1" data-toggle="tooltip" title="" data-original-title="Login, Register or go to dashboard">
                <div class="user-profile-img">
                  @if(!empty(Auth::user()->avatar))
                   <img src="{{ asset('/images/user_avatar/'.Auth::user()->avatar) }}" alt="">
                  @else
                    <img src="{{ asset('themes/EC/images/user-icon-emporium-collection.svg') }}" alt="">
                  @endif
                </div>
              </a>
            @else  
              <a href="/register" class="login-nav mr-3 pr-1" data-toggle="tooltip" title="" data-original-title="Login, Register or go to dashboard">
                <div class="user-profile-img">
                  <img src="{{ asset('themes/EC/images/user-icon-emporium-collection-default.svg') }}" alt="">
                  <!-- <img src="https://i.pravatar.cc/300" alt=""> -->
                </div>
              </a>
            @endif
            @if(Request::segment(1) == 'reservation')
            @else  
          
            <div class="humburger-menu" title="" data-toggle="tooltip" data-original-title="Navigate to main menu">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>

            <div class="menu">
              <a href="#" class="close-menu">
                <svg fill="currentColor" focusable="false" height="30px" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <title>Close</title>
                  <path d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                  </path>
                </svg>
              </a>
              @include('frontend.themes.EC.layouts.sections.menus')      
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>    
    <hr class="mb-0">
    <div class="menu-s">
      <div class="d-flex align-items-center">
        <?php if(strpos(request()->route()->getAction()['controller'], 'PropertyController') || strpos(request()->route()->getAction()['controller'], 'HotelDetailController')): ?>
        <ul class="nav nav-left mobile-off">
          {{-- <li class="nav-item">
            <a class="nav-link btn-sidebar" href="#" data-sidebar="#filterbar">
              <i class="ico ico-mixer"></i>
            </a>
          </li> --}}
          <li class="nav-item">
            <?php if(Request::get('view') == 'map'):?>
            <a class="nav-link" href="<?php echo str_replace('&view=map','',Request::fullUrl());?>">
              <i class="ico ico-menu-grid mr-2"></i>
            </a>
            <?php endif;?>
            <?php if(Request::get('view')!='map'):?>
            <a class="nav-link" href="<?php echo str_replace('&view=results','&view=map',Request::fullUrl());?>">
              <i class="ico ico-place"></i>
            </a>
            <?php endif;?>              
          </li>
          <li class="nav-item">
            <a class="nav-link btn-sidebar" href="#" data-sidebar="#videos">
              <i class="ico ico-video"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-sidebar" href="#" data-sidebar="#info_sidebar">
              <i class="ico ico-info-rounded"></i>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ico ico-instagram"></i>
            </a>
          </li> -->
        </ul>
        <ul class="nav nav-text mobile-off">
            <li class="nav-item">
              <a class="nav-link" href="#destination-menu" data-toggle="collapse">
                Destinations
              </a>
            </li>
            @if(!empty($experiences))
            <li class="nav-item dropdown" id="experience_dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Experiences
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                @foreach($experiences as $exp)
                  <a href="javascript:void(0);" data-value="<?php echo $exp->category_alias;?>" class="dropdown-item">{{ $exp->category_name }}</a>
                @endforeach                
              </div>
            </li>
            @endif
            @if(!empty($atmosphere))
            <li class="nav-item dropdown" id="atmosphere_dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Atmosphere
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="dropdown-inner filter-checkbox">
                  @foreach($atmosphere as $atm)
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="atmosphere[]" class="custom-control-input" id="setting1{{ $atm->id}}" 
                      value="{{ $atm->id }}" 
                      @if(!empty($atmosphere_data)) 
                        @foreach($atmosphere_data as $selected_atm)
                        {{ $selected_atm[0]->id == $atm->id ? 'checked' : '' }} 
                        @endforeach 
                      @endif>
                      <label class="custom-control-label" for="setting1{{ $atm->id}}">{{ $atm->category_name }}</label>
                    </div>
                  @endforeach
                </div>
              </div>
            </li>
            @endif
            @if(!empty($facilities))
            <li class="nav-item dropdown" id="facilities_dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Facilities
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="dropdown-inner filter-checkbox">
                  @foreach($facilities as $fac)
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="facilities[]" class="custom-control-input" id="fasilities{{ $fac->id }}" value="{{ $fac->id }}" 
                      @if(!empty($facility_data)) 
                        @foreach($facility_data as $selected_fac)
                          {{ $selected_fac[0]->id == $fac->id ? 'checked' : '' }}
                        @endforeach 
                      @endif>
                      <label class="custom-control-label" for="fasilities{{ $fac->id }}">{{ $fac->category_name }} </label>
                    </div>
                  @endforeach  
                </div>
              </div>
            </li>
            @endif
            @if(!empty($style))
            <li class="nav-item dropdown" id="style_dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Style
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="dropdown-inner filter-checkbox">
                  @foreach($style as $sty)
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="style[]" class="custom-control-input" id="style{{ $sty->id }}" value="{{ $sty->id }}" 
                      @if(!empty($selected_style))
                        @foreach($selected_style as $sty_sel) 
                          {{ $sty_sel[0]->id == $sty->id ? 'checked' : '' }}
                        @endforeach 
                      @endif>
                      <label class="custom-control-label" for="style{{ $sty->id }}">{{ $sty->category_name }}</label>
                    </div>
                  @endforeach
                </div>
              </div>
            </li>
            @endif
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Price
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="dropdown-inner filter-checkbox">
                  <div class="custom-control custom-checkbox">
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
                                    <input type="text" class="priceValue form-control" data-index="0" id="min" value="80" />
                                </div>
                            </div>
                            <div class="col">
                                <label>Max:</label>
                                <div class="input-filter">
                                    <span>€</span>
                                    <input type="text" class="priceValue form-control" data-index="1" id="max" value="10000" />
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-left price-input">
                          <div class="col">
                            <div class="input-filter">
                              <a href="javascript:void(0);" class="btn btn-primary  filter_price">Filter Price</a>
                              <button type="button" class="btn btn-primary" id="price_reset">Reset price</button>
                            </div> 
                          </div>
                        </div>  
                    </div>
                  </div>  
                </div>
              </div>
            </li>
          </ul>
        {{-- <div class="menu-mobile">
          <div class="humburger-second-menu" id="secondMenu">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div> --}}
        <ul class="nav nav-right ml-auto">
          {{-- <li class="nav-item">
            <a class="nav-link btn-sidebar" href="#" data-sidebar="#searchHistory">
              <i class="ico ico-layer"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-sidebar" href="#" data-sidebar="#question">
              <i class="ico ico-convertation"></i>
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link btn-sidebar" href="#" data-sidebar="#share">
              <i class="ico ico-share-2"></i>
            </a>
          </li>
          
          {{-- <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i class="ico ico-diamon"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Add to collection</a>
              <a class="dropdown-item btn-sidebar" href="#" data-sidebar="#myCollection">Create new collection</a>
            </div>
          </li> --}}
        </ul>
        <?php endif; ?>
        
      </div>
    </div>
  </div>
  <div class="menunav-group">
    <div class="collapse clp dash-clp" id="dashF" data-parent="#menunav">
      <div class="drop-grid">
        <?php if($currentdomain != 'voyage'):?>
        <a href="{{ \Config::get('app.voyagedomain').Request::getRequestUri() }}">
          <div class="p-2 d-flex align-items-center">
            <i class="ico ico-building mr-2"></i> <span>Voyage</span>
          </div>
        </a>
        <?php endif;?>
        <?php if($currentdomain != 'safari'):?>
        <a href="{{ \Config::get('app.safaridomain').Request::getRequestUri() }}">
          <div class="p-2 d-flex align-items-center">
            <i class="ico ico-safari mr-2"></i> <span>Safari</span>
          </div>
        </a>
        <?php endif;?>
        <?php if($currentdomain != 'spa'):?>
        <a href="{{ \Config::get('app.spadomain').Request::getRequestUri() }}">
          <div class="p-2 d-flex align-items-center">
            <i class="ico ico-spa-i mr-2"></i> <span>Spa</span>
          </div>
        </a>
        <?php endif;?>
        <?php if($currentdomain != 'islands'):?>
        <a href="{{ \Config::get('app.islandsdomain').Request::getRequestUri() }}">
          <div class="p-2 d-flex align-items-center">
            <i class="ico ico-islands mr-2"></i> <span>Islands</span>
          </div>
        </a>
        <?php endif;?>
      </div>
    </div>
    <div class="collapse clp" id="cityList" data-parent="#menunav">
      <ul class="nav flex-column py-2">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <!-- <span class="city-name-nav"><span class="label-city"
                style="background: green;"></span> New York</span>. -> 2.6.20 -> 15.6.20 -->
            New York. -> 2.6.20 -> 15.6.20
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <!-- <span class="city-name-nav"><span class="label-city"
                style="background: red;"></span> San Diego</span>. -> 3.7.20 -> 5.7.20 -->
            San Diego. -> 3.7.20 -> 5.7.20
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <!-- <span class="city-name-nav">
              <span class="label-city"
                style="background: blue;"></span> San Francisco</span>. -> 12.8.20 -> 16.8.20 -->
            San Francisco. -> 12.8.20 -> 16.8.20
          </a>
        </li>
      </ul>
    </div>

    <div class="collapse clp" id="searchF" data-parent="#menunav">
      <div class="search-field">        
        @include('frontend.themes.EC.minitemplates.filter_bar')
        @include('frontend.themes.EC.minitemplates.where_popup')
      </div>
    </div>

    <div class="collapse clp" id="calcF" data-parent="#menunav">
      <a href="#" class="close-header">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
          xmlns="http://www.w3.org/2000/svg">
          <title>Close</title>
          <path
            d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
          </path>
        </svg>
      </a>
      <div class="row align-items-center justify-content-center">
        <div class="col-xl-6">
          <div class="d-flex justify-content-center pt-3">
            <ul class="nav calendar-nav">
              {{-- <li class="nav-item">
                <a class="nav-link active" href="#calendarselect" data-toggle="tab">Calendar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#flexible" data-toggle="tab">I'm flexible</a>
              </li> --}}
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
                <div class="row m-0 justify-content-center align-items-center">
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
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input"
                      value="weekend" checked>
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

                <div class="flexible-month row m-0 justify-content-center align-items-center">
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
        <div class="col-xl-6">
          @include('frontend.themes.EC.layouts.subsections.featured_hotel')
        </div>
      </div>
    </div>
    <div class="collapse clp" id="whoF" data-parent="#menunav">
      <a href="#" class="close-header">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
          xmlns="http://www.w3.org/2000/svg">
          <title>Close</title>
          <path
            d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
          </path>
        </svg>
      </a>
      <div class="guest-layer">
        <div class="row align-items-center">
          <div class="col-xl-6 col--xxl-0a">
            <div class="filter-container-fl filter-container-mm  w-100" id="guest-pick" style="display: block;">
              <div class="guest-pick-container mt-0">
                <div class="guest-pick-header">
                  <div class="row align-items-center">
                    <div class="col-lg-9 col-7">
                      <p class="mb-0"><b>Suites</b></p>
                    </div>
                    <div class="col-lg-3 col-5">
                      <div class="row field-count-guest align-items-center">
                        <button type="button" class="min-room {{ \Session::get('total_suite') <= 1 ? 'disable' : '' }}">-</button>
                        <div class="col text-center">
                          <span class="mr-1 room-val">{{ \Session::get('total_suite') }}</span>
                          <input type="hidden" name="suite[]" id="suites" class="suite" value="{{ \Session::get('total_suite') }}"/>
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
                    <?php $suites = \Session::get('suites'); ?>
                    @if(\Session::has('suites') && !empty(\Session::get('suites')))
                      @foreach($suites as $key => $data)
                      <div class="col-{{ count($suites) > 1 ? 6 : 12 }} col-ews mb-3" id="room-{{ $key }}">
                        <p><b>Suite Allocation{{ $key + 1 }}</b></p>
                        <input type="hidden" name="rooms[]" id="rooms_{{ $key }}"/>
                        <div class="row align-items-center py-2">
                          <div class="col-7">
                            <p class="mb-0"><b>Adult(s)</b></p>
                          </div>
                          <div class="col-5">
                            <div class="row field-count-guest align-items-center">
                              <button type="button" class="min">-</button>
                              <div class="col text-center">
                                <span class="mr-1 adult-val">{{ $data['adult'] }}</span>
                                <input type="hidden" name="adult[]" class="inp-adult" id="adult" value="{{ $data['adult'] }}" />
                              </div>
                              <button type="button" class="plus mr-3">+</button>
                            </div>
                          </div>
                        </div>
                        <div class="row align-items-center py-2">
                          <div class="col-7">
                            <p class="mb-0"><b>Children(s)</b></p>
                          </div>
                          <div class="col-5">
                            <div class="row field-count-guest align-items-center">
                              <button type="button" class="min">-</button>
                              <div class="col text-center">
                                <span class="mr-1 child-val">{{ $data['child'] }}</span>
                                <input type="hidden" name="child[]" id="" class="inp-child" value="{{ $data['child'] }}" />
                              </div>
                              <button type="button" class="plus mr-3">+</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    @endif
                  </div>
                </div>
                <div class="guest-pick-footer">
                  <div class="text-right">
                    <a href="javascript:void(0);" class="btn btn-primary px-4 select-guest">Confirm Guest(s)</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col--xxl-0asd">
            @include('frontend.themes.EC.layouts.subsections.featured_hotel')            
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
        @include('frontend.themes.EC.layouts.subsections.destination_menu')
      </div>
    </div>
  </div>
  <script type="text/javascript">
    var arrival =  '<?php echo \Session::get('arrival');?>';
    var departure =  '<?php echo \Session::get('departure');?>';
  </script>
</header>
