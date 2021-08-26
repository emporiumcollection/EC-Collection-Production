@extends('frontend.themes.EC.layouts.main')

@section('meta_keywords', '')
@section('meta_description', '')

@section('content')

<div class="landing-header">
  <div class="slider-top-content">
      <div class="slide-header">
          <div>
              <img src="images/ecd67d87075247.5dad757ad6705.jpg" alt="">
          </div>
          <div>
              <img src="images/c52c5d91609529.5e36922fbff23.jpg" alt="">
          </div>
          <div>
              <img src="images/60c5a787075247-1.5dad757ad76ab.jpg" alt="">
          </div>
      </div>
  </div>
  <div class="booking-search-banner">
      <div class="booking-container-block">
          <h5 class="mb-3 text-white">The hotel experts at Emporium-Collection</h5>
          <form action="main-page.html">
              <div class="booking-input booking-destination">
                  <span>Where to?</span>
                  <input type="text" class="form-control where" placeholder="Destination" autocomplete="off">
                  <div class="wherepopup">
                      <div class="whereinner">
                          <div class="row">
                              <div class="col-6">
                                  <h2 style="text-transform: uppercase; color: #FFF;">Destinations</h2>
                                  <ul class="nav flex-column">
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span
                                                  class="cat-l">Hotels</span>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span class="cat-l">Map</span>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span class="cat-l">Private
                                                  Jet</span>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span
                                                  class="cat-l">Cuisine</span>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span
                                                  class="cat-l">Channel</span>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span
                                                  class="cat-l">Experiences</span>
                                          </a>
                                      </li>
                                  </ul>
                                  <ul class="nav flex-column">
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span
                                                  class="cat-l">Hotels</span>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span class="cat-l">Map</span>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span class="cat-l">Private
                                                  Jet</span>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span
                                                  class="cat-l">Cuisine</span>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span
                                                  class="cat-l">Channel</span>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span
                                                  class="cat-l">Experiences</span>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="col-6">
                                  <h2 style="text-transform: uppercase; color: #FFF;">Hotels</h2>
                                  <ul class="nav flex-column">
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span
                                                  class="cat-l">Hotels</span>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link pl-0" href="#">
                                              <span class="city-l">New York</span> <span class="cat-l">Map</span>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="booking-flex">
                  <div class="booking-staydate">
                      <div class="booking-input">
                          <span>Stay Dates</span>
                          <input type="text" class="form-control" id="rangecal" placeholder="Arrival - Departure">
                          <div class="staydate-range">
                              <div class="text-right">
                                  <a href="#" class="close-range">
                                      <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24"
                                          width="24" xmlns="http://www.w3.org/2000/svg">
                                          <title>Close</title>
                                          <path
                                              d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                                          </path>
                                      </svg>
                                  </a>
                              </div>
                              <div class="range-calendar calendar-header" id="calendar-pick">
                                  <div id="date_range_container" class="daterangepicker-inline"></div>
                                  <input type="hidden" id="date_range">
                                  <div class="clearfix"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="booking-guest">
                      <div class="booking-input booking-guest-inner">
                          <div class="is-guest">
                              <span>Guest</span>
                              <div class="booking-val-guest">1</div>
                          </div>
                          <div class="is-room">
                              <span>Suites</span>
                              <div class="booking-val-room">1</div>
                          </div>
                          <div class="booking-guest-input">
                              <div class="text-right">
                                  <a href="#" class="close-guest">
                                      <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24"
                                          width="24" xmlns="http://www.w3.org/2000/svg">
                                          <title>Close</title>
                                          <path
                                              d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                                          </path>
                                      </svg>
                                  </a>
                              </div>
                              <div class="filter-container-fl w-100" id="guest-pick">
                                  <div class="guest-pick-container mt-0">
                                      <div class="guest-pick-header">
                                          <div class="row align-items-center">
                                              <div class="col-lg-9 col-7">
                                                  <p class="mb-0"><b>Suites</b></p>
                                              </div>
                                              <div class="col-lg-3 col-5">
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
                                              <p>Contact our Groups and Events team on 08989819281. and they'll
                                                  take care of everything.</p>

                                              <a href="#" class="btn btn-dark rounded-0 px-5"><i
                                                      class="fa fa-phone" aria-hidden="true"></i>
                                                  REQUEST A CALL BACK</a>
                                              <hr>
                                              <p>Or send us an email and we'll get back to you prompty.</p>
                                              <div class="row">
                                                  <div class="col-lg-8">
                                                      <div class="row">
                                                          <div class="col-6 form-group">
                                                              <input type="text" class="form-control"
                                                                  placeholder="Your Name">
                                                          </div>
                                                          <div class="col-6 form-group">
                                                              <input type="email" class="form-control"
                                                                  placeholder="Your Email Address">
                                                          </div>
                                                          <div class="col-12 form-group">
                                                              <textarea class="form-control" cols="30" rows="10"
                                                                  placeholder="Message"></textarea>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-4">
                                                      <div class="barcode-suite mb-2">
                                                          <div class="aspect-ratio-box">
                                                              <div class="aspect-ratio-box-inside">
                                                                  <img src="images/QR-code.png" class="img-fluid"
                                                                      alt="">
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
                                                              <p class="dd-location-info mb-0"><i
                                                                      class="ico ico-place-2"></i>
                                                                  Munch</p>
                                                          </div>
                                                          <a href="#" class="plus-btn">+</a>
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>
                                          <div class="row list-eoom">
                                              <div class="col-12 col-ews mb-3" id="room-1 htl-cont">
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
                      </div>
                  </div>

                  <div class="booking-btn">
                      <button type="submit" class="btn btn-primary">Search</button>
                  </div>
              </div>
          </form>
          <div class="mt-5">
              <span class="h3 text-white">Ready to wonder?</span>
              <p class="text-white">We've built a machine to help you find new places.</p>
              <a href="get-inspired.html" class="btn btn-white btn-take rounded">Take Me Away</a>
          </div>
      </div>
  </div>
</div>

<div class="hotel-book-list container hotel-book-container">
  <h2 class="mx-1 font-weight-bold">Latest Hotels</h2>
  <div class="book-list-hotel-item">
      @foreach($latest_hotels as $lh)
          @if(isset($lh->hotel_images))
              <div>
                  <div class="m-1 htl-cont">
                      <div class="book-htl-img">
                          <a href="{{url('/')}}">
                              <img src="{{$lh->hotel_images[0]}}" class="img-fluid" alt="">
                          </a>
                          <div class="hotel-prices d-flex">
                              <div class="row align-items-center justify-content-center">
                                  <div class="mr-2">
                                      <i class="ico ico-info-green"></i>
                                  </div>
                                  <h3 class="mb-0">
                                      <span class="title-font-2 mr-1">From</span> <span class="color-primary">€
{{--                                          mahesh work for price of a suite--}}
                                          167
                                      </span>
                                  </h3>
                                  <div class="ml-2">
                                      <span class="pernight"></span>
                                  </div>
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
                          <div class="hotel-meta full-width is-small">
{{--                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">--}}
{{--                                  Reviews--}}
{{--                              </a>--}}
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-for="quickinfo" data-id="{{$lh->property_slug}}" data-sidebar="#quickinfo" data-connection="voyageconn">
                                  Quick info
                              </a>
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-for="gallery" data-id="{{$lh->property_slug}}" data-sidebar="#gallery" data-connection="voyageconn">
                                  Gallery
                              </a>
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside" data-id="{{$lh->property_slug}}" data-for="suites" data-connection="voyageconn">
                                  Suite(s)
                              </a>
                          </div>
                      </div>
                      <div class="htl-desc">
                          <a href="#">
                              <h5 class="mb-0">
                                  {{$lh->property_name}}
                              </h5>
                              <p class="mb-0">{{$lh->city}}</p>
                          </a>
                      </div>
                  </div>
              </div>
          @endif
      @endforeach
  </div>
</div>

<div class="hotel-book-list container hotel-book-container">
  <h2 class="mx-1 font-weight-bold">Trending Destinations</h2>
  <div class="book-list-hotel-item">
      @foreach($trending_destinations as $lh)
          @if(isset($lh->category_image))
              <div>
                  <div class="m-1 htl-cont">
                      <div class="book-htl-img">
                          <a href="{{url('/')}}">
                              <img src="{{'uploads/category_imgs/'.$lh->category_image}}" class="img-fluid" alt="">
                          </a>
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
                          <div class="hotel-meta full-width is-small">
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-for="quickinfo" data-id="{{$lh->category_alias}}" data-sidebar="#quickinfo">
                                  Quick info
                              </a>
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-for="gallery" data-id="{{$lh->category_alias}}" data-sidebar="#gallery">
                                  Gallery
                              </a>
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#video_channel" data-id="{{$lh->category_alias}}" data-for="video_channel">
                                  Video Channel
                              </a>
                          </div>
                      </div>
                      <div class="htl-desc">
                          <a href="#">
                              <h5 class="mb-0">
                                  {{$lh->category_name}}
                              </h5>
                          </a>
                      </div>
                  </div>
              </div>
          @endif
      @endforeach
  </div>
</div>
<div class="act-container">
  <div class="row m-0">
      <div class="col-md-6 p-0">
          <img src="images/cta-2-1024x766.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-md-6 d-flex align-items-center">
          <div class="act-content">
              <h2 class="mb-3 font-weight-bold">Act Now!</h2>
              <p class="mb-5">
                  Are you ready to fight and save our Mother Earth? <br>
                  If you are, just click the button below.
              </p>
              <a href="#" class="btn btn-white">I WANT TO HELP</a>
          </div>
      </div>
  </div>
</div>
<div class="hotel-book-list container hotel-book-container">
  <h2 class="mx-1 font-weight-bold">Spa Hotels</h2>
  <div class="book-list-hotel-item">
      @foreach($spa_hotels as $lh)
          @if(isset($lh->hotel_images))
              <div>
                  <div class="m-1 htl-cont">
                      <div class="book-htl-img">
                          <a href="{{url('/')}}">
                              <img src="{{$lh->hotel_images[0]}}" class="img-fluid" alt="">
                          </a>
                          <div class="hotel-prices d-flex">
                              <div class="row align-items-center justify-content-center">
                                  <div class="mr-2">
                                      <i class="ico ico-info-green"></i>
                                  </div>
                                  <h3 class="mb-0">
                                      <span class="title-font-2 mr-1">From</span> <span class="color-primary">€
                                          167
                                      </span>
                                  </h3>
                                  <div class="ml-2">
                                      <span class="pernight"></span>
                                  </div>
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
                          <div class="hotel-meta full-width is-small">
{{--                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">--}}
{{--                                  Reviews--}}
{{--                              </a>--}}
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-for="quickinfo" data-id="{{$lh->property_slug}}" data-sidebar="#quickinfo" data-connection="spaconn">
                                  Quick info
                              </a>
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-for="gallery" data-id="{{$lh->property_slug}}" data-sidebar="#gallery" data-connection="spaconn">
                                  Gallery
                              </a>
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside" data-id="{{$lh->property_slug}}" data-for="suites" data-connection="spaconn">
                                  Suite(s)
                              </a>
                          </div>
                      </div>
                      <div class="htl-desc">
                          <a href="#">
                              <h5 class="mb-0">
                                  {{$lh->property_name}}
                              </h5>
                              <p class="mb-0">{{$lh->city}}</p>
                          </a>
                      </div>
                  </div>
              </div>
          @endif
      @endforeach
  </div>
</div>

<div class="hotel-book-list container hotel-book-container">
  <h2 class="mx-1 font-weight-bold">Island Hotels</h2>
  <div class="book-list-hotel-item">
      @foreach($island_hotels as $lh)
          @if(isset($lh->hotel_images))
              <div>
                  <div class="m-1 htl-cont">
                      <div class="book-htl-img">
                          <a href="{{url('/')}}">
                              <img src="{{$lh->hotel_images[0]}}" class="img-fluid" alt="">
                          </a>
                          <div class="hotel-prices d-flex">
                              <div class="row align-items-center justify-content-center">
                                  <div class="mr-2">
                                      <i class="ico ico-info-green"></i>
                                  </div>
                                  <h3 class="mb-0">
                                      <span class="title-font-2 mr-1">From</span> <span class="color-primary">€
                                          167
                                      </span>
                                  </h3>
                                  <div class="ml-2">
                                      <span class="pernight"></span>
                                  </div>
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
                          <div class="hotel-meta full-width is-small">
{{--                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">--}}
{{--                                  Reviews--}}
{{--                              </a>--}}
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-for="quickinfo" data-id="{{$lh->property_slug}}" data-sidebar="#quickinfo" data-connection="islandconn">
                                  Quick info
                              </a>
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-for="gallery" data-id="{{$lh->property_slug}}" data-sidebar="#gallery" data-connection="islandconn">
                                  Gallery
                              </a>
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside" data-id="{{$lh->property_slug}}" data-connection="islandconn" data-for="suites">
                                  Suite(s)
                              </a>
                          </div>
                      </div>
                      <div class="htl-desc">
                          <a href="#">
                              <h5 class="mb-0">
                                  {{$lh->property_name}}
                              </h5>
                              <p class="mb-0">{{$lh->city}}</p>
                          </a>
                      </div>
                  </div>
              </div>
          @endif
      @endforeach
  </div>
</div>

<div class="hotel-book-list container hotel-book-container">
  <h2 class="mx-1 font-weight-bold">Safari Hotels</h2>
  <div class="book-list-hotel-item">
      @foreach($safari_hotels as $lh)
          @if(isset($lh->hotel_images))
              <div>
                  <div class="m-1 htl-cont">
                      <div class="book-htl-img">
                          <a href="{{url('/')}}">
                              <img src="{{$lh->hotel_images[0]}}" class="img-fluid" alt="">
                          </a>
                          <div class="hotel-prices d-flex">
                              <div class="row align-items-center justify-content-center">
                                  <div class="mr-2">
                                      <i class="ico ico-info-green"></i>
                                  </div>
                                  <h3 class="mb-0">
                                      <span class="title-font-2 mr-1">From</span> <span class="color-primary">€
                                          167
                                      </span>
                                  </h3>
                                  <div class="ml-2">
                                      <span class="pernight"></span>
                                  </div>
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
                          <div class="hotel-meta full-width is-small">
{{--                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">--}}
{{--                                  Reviews--}}
{{--                              </a>--}}
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-for="quickinfo" data-id="{{$lh->property_slug}}" data-sidebar="#quickinfo" data-connection="safariconn">
                                  Quick info
                              </a>
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-for="gallery" data-id="{{$lh->property_slug}}" data-sidebar="#gallery" data-connection="safariconn">
                                  Gallery
                              </a>
                              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside" data-id="{{$lh->property_slug}}" data-for="suites" data-connection="safariconn">
                                  Suite(s)
                              </a>
                          </div>
                      </div>
                      <div class="htl-desc">
                          <a href="#">
                              <h5 class="mb-0">
                                  {{$lh->property_name}}
                              </h5>
                              <p class="mb-0">{{$lh->city}}</p>
                          </a>
                      </div>
                  </div>
              </div>
          @endif
      @endforeach
  </div>
</div>
{{--<div class="hotel-book-list container hotel-book-container">--}}
{{--  <h2 class="mx-1 font-weight-bold">Yatchs</h2>--}}
{{--  <div class="book-list-hotel-item">--}}
{{--      <div>--}}
{{--          <div class="m-1 htl-cont">--}}
{{--              <div class="book-htl-img">--}}
{{--                  <a href="#">--}}
{{--                      <img src="images/43182548507-84265125335.jpg" class="img-fluid" alt="">--}}
{{--                  </a>--}}
{{--                  <div class="hotel-prices d-flex">--}}
{{--                      <div class="row align-items-center justify-content-center">--}}
{{--                          <div class="mr-2">--}}
{{--                              <i class="ico ico-info-green"></i>--}}
{{--                          </div>--}}
{{--                          <h3 class="mb-0">--}}
{{--                              <span class="title-font-2 mr-1">From</span> <span class="color-primary">€--}}
{{--                                  167--}}
{{--                              </span>--}}
{{--                          </h3>--}}
{{--                          <div class="ml-2">--}}
{{--                              <span class="pernight"></span>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--                  <div class="my-dropdown">--}}
{{--                      <div class="btn-group dropleft">--}}
{{--                          <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                              <i class="ico ico-diamon diamon-label"></i>--}}
{{--                          </a>--}}
{{--                          <div class="dropdown-menu">--}}
{{--                              <a href="#" class="dropdown-item">Add to collection</a>--}}
{{--                              <a href="#" class="dropdown-item btn-sidebar create-collection"--}}
{{--                                  data-sidebar="#myCollection">Create new collection</a>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--                  <div class="hotel-meta full-width is-small">--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">--}}
{{--                          Reviews--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo">--}}
{{--                          Quick info--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#gallery">--}}
{{--                          Gallery--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside">--}}
{{--                          Suite(s)--}}
{{--                      </a>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--              <div class="htl-desc">--}}
{{--                  <a href="#">--}}
{{--                      <h5 class="mb-0">--}}
{{--                          The Ludlow Hotel--}}
{{--                      </h5>--}}
{{--                      <p class="mb-0">New york</p>--}}
{{--                  </a>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--      <div>--}}
{{--          <div class="m-1 htl-cont">--}}
{{--              <div class="book-htl-img">--}}
{{--                  <a href="#">--}}
{{--                      <img src="images/43182548507-84265125335.jpg" class="img-fluid" alt="">--}}
{{--                  </a>--}}
{{--                  <div class="hotel-prices d-flex">--}}
{{--                      <div class="row align-items-center justify-content-center">--}}
{{--                          <div class="mr-2">--}}
{{--                              <i class="ico ico-info-green"></i>--}}
{{--                          </div>--}}
{{--                          <h3 class="mb-0">--}}
{{--                              <span class="title-font-2 mr-1">From</span> <span class="color-primary">€--}}
{{--                                  167--}}
{{--                              </span>--}}
{{--                          </h3>--}}
{{--                          <div class="ml-2">--}}
{{--                              <span class="pernight"></span>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--                  <div class="my-dropdown">--}}
{{--                      <div class="btn-group dropleft">--}}
{{--                          <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                              <i class="ico ico-diamon diamon-label"></i>--}}
{{--                          </a>--}}
{{--                          <div class="dropdown-menu">--}}
{{--                              <a href="#" class="dropdown-item">Add to collection</a>--}}
{{--                              <a href="#" class="dropdown-item btn-sidebar create-collection"--}}
{{--                                  data-sidebar="#myCollection">Create new collection</a>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--                  <div class="hotel-meta full-width is-small">--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">--}}
{{--                          Reviews--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo">--}}
{{--                          Quick info--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#gallery">--}}
{{--                          Gallery--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside">--}}
{{--                          Suite(s)--}}
{{--                      </a>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--              <div class="htl-desc">--}}
{{--                  <a href="#">--}}
{{--                      <h5 class="mb-0">--}}
{{--                          The Ludlow Hotel--}}
{{--                      </h5>--}}
{{--                      <p class="mb-0">New york</p>--}}
{{--                  </a>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--      <div>--}}
{{--          <div class="m-1 htl-cont">--}}
{{--              <div class="book-htl-img">--}}
{{--                  <a href="#">--}}
{{--                      <img src="images/43182548507-84265125335.jpg" class="img-fluid" alt="">--}}
{{--                  </a>--}}
{{--                  <div class="hotel-prices d-flex">--}}
{{--                      <div class="row align-items-center justify-content-center">--}}
{{--                          <div class="mr-2">--}}
{{--                              <i class="ico ico-info-green"></i>--}}
{{--                          </div>--}}
{{--                          <h3 class="mb-0">--}}
{{--                              <span class="title-font-2 mr-1">From</span> <span class="color-primary">€--}}
{{--                                  167--}}
{{--                              </span>--}}
{{--                          </h3>--}}
{{--                          <div class="ml-2">--}}
{{--                              <span class="pernight"></span>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--                  <div class="my-dropdown">--}}
{{--                      <div class="btn-group dropleft">--}}
{{--                          <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                              <i class="ico ico-diamon diamon-label"></i>--}}
{{--                          </a>--}}
{{--                          <div class="dropdown-menu">--}}
{{--                              <a href="#" class="dropdown-item">Add to collection</a>--}}
{{--                              <a href="#" class="dropdown-item btn-sidebar create-collection"--}}
{{--                                  data-sidebar="#myCollection">Create new collection</a>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--                  <div class="hotel-meta full-width is-small">--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">--}}
{{--                          Reviews--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo">--}}
{{--                          Quick info--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#gallery">--}}
{{--                          Gallery--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside">--}}
{{--                          Suite(s)--}}
{{--                      </a>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--              <div class="htl-desc">--}}
{{--                  <a href="#">--}}
{{--                      <h5 class="mb-0">--}}
{{--                          The Ludlow Hotel--}}
{{--                      </h5>--}}
{{--                      <p class="mb-0">New york</p>--}}
{{--                  </a>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--      <div>--}}
{{--          <div class="m-1 htl-cont">--}}
{{--              <div class="book-htl-img">--}}
{{--                  <a href="#">--}}
{{--                      <img src="images/43182548507-84265125335.jpg" class="img-fluid" alt="">--}}
{{--                  </a>--}}
{{--                  <div class="hotel-prices d-flex">--}}
{{--                      <div class="row align-items-center justify-content-center">--}}
{{--                          <div class="mr-2">--}}
{{--                              <i class="ico ico-info-green"></i>--}}
{{--                          </div>--}}
{{--                          <h3 class="mb-0">--}}
{{--                              <span class="title-font-2 mr-1">From</span> <span class="color-primary">€--}}
{{--                                  167--}}
{{--                              </span>--}}
{{--                          </h3>--}}
{{--                          <div class="ml-2">--}}
{{--                              <span class="pernight"></span>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--                  <div class="my-dropdown">--}}
{{--                      <div class="btn-group dropleft">--}}
{{--                          <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                              <i class="ico ico-diamon diamon-label"></i>--}}
{{--                          </a>--}}
{{--                          <div class="dropdown-menu">--}}
{{--                              <a href="#" class="dropdown-item">Add to collection</a>--}}
{{--                              <a href="#" class="dropdown-item btn-sidebar create-collection"--}}
{{--                                  data-sidebar="#myCollection">Create new collection</a>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--                  <div class="hotel-meta full-width is-small">--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">--}}
{{--                          Reviews--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo">--}}
{{--                          Quick info--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#gallery">--}}
{{--                          Gallery--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside">--}}
{{--                          Suite(s)--}}
{{--                      </a>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--              <div class="htl-desc">--}}
{{--                  <a href="#">--}}
{{--                      <h5 class="mb-0">--}}
{{--                          The Ludlow Hotel--}}
{{--                      </h5>--}}
{{--                      <p class="mb-0">New york</p>--}}
{{--                  </a>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--      <div>--}}
{{--          <div class="m-1 htl-cont">--}}
{{--              <div class="book-htl-img">--}}
{{--                  <a href="#">--}}
{{--                      <img src="images/43182548507-84265125335.jpg" class="img-fluid" alt="">--}}
{{--                  </a>--}}
{{--                  <div class="hotel-prices d-flex">--}}
{{--                      <div class="row align-items-center justify-content-center">--}}
{{--                          <div class="mr-2">--}}
{{--                              <i class="ico ico-info-green"></i>--}}
{{--                          </div>--}}
{{--                          <h3 class="mb-0">--}}
{{--                              <span class="title-font-2 mr-1">From</span> <span class="color-primary">€--}}
{{--                                  167--}}
{{--                              </span>--}}
{{--                          </h3>--}}
{{--                          <div class="ml-2">--}}
{{--                              <span class="pernight"></span>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--                  <div class="my-dropdown">--}}
{{--                      <div class="btn-group dropleft">--}}
{{--                          <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                              <i class="ico ico-diamon diamon-label"></i>--}}
{{--                          </a>--}}
{{--                          <div class="dropdown-menu">--}}
{{--                              <a href="#" class="dropdown-item">Add to collection</a>--}}
{{--                              <a href="#" class="dropdown-item btn-sidebar create-collection"--}}
{{--                                  data-sidebar="#myCollection">Create new collection</a>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--                  <div class="hotel-meta full-width is-small">--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">--}}
{{--                          Reviews--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo">--}}
{{--                          Quick info--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#gallery">--}}
{{--                          Gallery--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside">--}}
{{--                          Suite(s)--}}
{{--                      </a>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--              <div class="htl-desc">--}}
{{--                  <a href="#">--}}
{{--                      <h5 class="mb-0">--}}
{{--                          The Ludlow Hotel--}}
{{--                      </h5>--}}
{{--                      <p class="mb-0">New york</p>--}}
{{--                  </a>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--      <div>--}}
{{--          <div class="m-1 htl-cont">--}}
{{--              <div class="book-htl-img">--}}
{{--                  <a href="#">--}}
{{--                      <img src="images/43182548507-84265125335.jpg" class="img-fluid" alt="">--}}
{{--                  </a>--}}
{{--                  <div class="hotel-prices d-flex">--}}
{{--                      <div class="row align-items-center justify-content-center">--}}
{{--                          <div class="mr-2">--}}
{{--                              <i class="ico ico-info-green"></i>--}}
{{--                          </div>--}}
{{--                          <h3 class="mb-0">--}}
{{--                              <span class="title-font-2 mr-1">From</span> <span class="color-primary">€--}}
{{--                                  167--}}
{{--                              </span>--}}
{{--                          </h3>--}}
{{--                          <div class="ml-2">--}}
{{--                              <span class="pernight"></span>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--                  <div class="my-dropdown">--}}
{{--                      <div class="btn-group dropleft">--}}
{{--                          <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                              <i class="ico ico-diamon diamon-label"></i>--}}
{{--                          </a>--}}
{{--                          <div class="dropdown-menu">--}}
{{--                              <a href="#" class="dropdown-item">Add to collection</a>--}}
{{--                              <a href="#" class="dropdown-item btn-sidebar create-collection"--}}
{{--                                  data-sidebar="#myCollection">Create new collection</a>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--                  <div class="hotel-meta full-width is-small">--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#reviews">--}}
{{--                          Reviews--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo">--}}
{{--                          Quick info--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#gallery">--}}
{{--                          Gallery--}}
{{--                      </a>--}}
{{--                      <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#suiteside">--}}
{{--                          Suite(s)--}}
{{--                      </a>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--              <div class="htl-desc">--}}
{{--                  <a href="#">--}}
{{--                      <h5 class="mb-0">--}}
{{--                          The Ludlow Hotel--}}
{{--                      </h5>--}}
{{--                      <p class="mb-0">New york</p>--}}
{{--                  </a>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--  </div>--}}
{{--</div>--}}
<hr>
<div class="container hotel-book-container">
  <div class="row">
      <div class="col-md-5 mb-4">
          <h2 class="font-weight-bold">
              Words From <br>
              Our Founder.
          </h2>
      </div>
      <div class="col-md-7 mb-4">
          <div class="row">
              <div class="col-lg-6 mb-4">
                  <p>
                      The Rights of Mother Earth is an organization committed to protecting the Earth by
                      preserving
                      rainforests, minimizing the effects of global warming, and raising environmental awareness.
                      We
                      believe in an environmentally sustainable future.
                  </p>
                  <div class="text-center mt-4">
                      <img src="images/home4-sig-1.jpg" class="img-fluid" alt="">
                  </div>
              </div>
              <div class="col-lg-6 mb-4">
                  <p>
                      The Rights of Mother Earth is an organization committed to protecting the Earth by
                      preserving
                      rainforests, minimizing the effects of global warming, and raising environmental awareness.
                      We
                      believe in an environmentally sustainable future.
                  </p>
                  <div class="text-center mt-4">
                      <img src="images/home4-sig-1.jpg" class="img-fluid" alt="">
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<hr>
<div class="container hotel-book-container">
  <h2 class="mb-4 font-weight-bold">Who We Are</h2>
  <div class="row">
      <div class="col-md-4 mb-4">
          <h3 class="mb-3 font-weight-bold">
              SAVING FORESTS <br>
              & WILDLIFE
          </h3>
          <p>
              Saving rainforests and nurturing thousands of plants and animals found there, especially endangered,
              rare species.
          </p>
      </div>
      <div class="col-md-4 mb-4">
          <h3 class="mb-3 font-weight-bold">
              MINIMIZING THE GLOBAL <br>
              WARMING EFFECTS
          </h3>
          <p>
              We are encouraging and educating people to stop wasting and misusing the natural resources of the
              Earth.
          </p>
      </div>
      <div class="col-md-4 mb-4">
          <h3 class="mb-3 font-weight-bold">
              RAISING ENVIRONMENTAL <br>
              AWARENESS
          </h3>
          <p>
              Create awareness of Nature and the environment, as well as the importance of recycling and using
              renewable resources.
          </p>
      </div>
  </div>
</div>
<hr>
<div class="container hotel-book-container">
  <h2 class="mb-4 font-weight-bold">Magazine</h2>
  <div class="magazine-slide">
      <div>
          <div class="magazine-item">
              <div class="row m-0">
                  <div class="col-md-6 p-0">
                      <div class="magazine-title">New Hotel</div>
                      <div class="item-big">
                          <img src="images/97678356576-24898814906.jpg" alt="">
                      </div>
                  </div>
                  <div class="col-md-6 p-0">
                      <div class="item-small">
                          <img src="images/43182548507-84265125335.jpg" alt="">
                      </div>
                      <div class="row m-0">
                          <div class="col-md-6 bottom-left p-0">
                              <div class="item-big">
                                  <div class="magazine-desc">
                                      <div class="h-90">
                                          <h4>The Bold Type Hotel</h4>
                                          <p class="category">Istanbul, Turkey</p>
                                          <p>
                                              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque
                                              incidunt, voluptates veniam nulla consequuntur alias doloribus
                                          </p>
                                      </div>

                                      <a href="#" class="btn btn-dark">View Hotel</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 bottom-right p-0">
                              <div class="item-big">
                                  <img src="images/97678356576-24898814906.jpg" alt="">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div class="magazine-item">
              <div class="row m-0">
                  <div class="col-md-6 p-0">
                      <div class="magazine-title">New Hotel</div>
                      <div class="item-big">
                          <img src="images/43182548507-84265125335.jpg" alt="">
                      </div>
                  </div>
                  <div class="col-md-6 p-0">
                      <div class="item-small">
                          <img src="images/97678356576-24898814906.jpg" alt="">
                      </div>
                      <div class="row m-0">
                          <div class="col-md-6 bottom-left p-0">
                              <div class="item-big">
                                  <div class="magazine-desc">
                                      <div class="h-90">
                                          <h4>The Bank Hotel Istanbul</h4>
                                          <p class="category">Istanbul, Turkey</p>
                                          <p>
                                              A former bank in Istanbul’s hip Karaköy quarter is now a beacon for
                                              contemporary art, design, and cultural events.
                                          </p>
                                      </div>

                                      <a href="#" class="btn btn-dark">View Hotel</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 bottom-right p-0">
                              <div class="item-big">
                                  <img src="images/97678356576-24898814906.jpg" alt="">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>
</div>
<hr>
<div class="container hotel-book-container">
  <div class="jurney">
      <div class="row">
          <div class="col-md-6 mb-4">
              <div class="h2">
                  Design Hotel is an unrivalled global community for design, architecture, and original
                  hospitality experiences.
              </div>
              <div class="mt-4">
                  <a href="#" class="btn btn-primary mr-2">Join the Community</a>
                  <a href="#" class="btn btn-outline-dark">About us</a>
              </div>
          </div>
          <div class="col-md-6 mb-4">
              <div class="h2">Join the Jurney</div>
              <div class="row journey">
                  <div class="col-sm-6 journey-list">
                      <a href="#">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia earum qui
                      </a>
                  </div>
                  <div class="col-sm-6 journey-list">
                      <a href="#">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia earum qui
                      </a>
                  </div>
                  <div class="col-sm-6 journey-list">
                      <a href="#">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia earum qui
                      </a>
                  </div>
                  <div class="col-sm-6 journey-list">
                      <a href="#">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia earum qui
                      </a>
                  </div>
                  <div class="col-sm-6 journey-list">
                      <a href="#">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia earum qui
                      </a>
                  </div>
                  <div class="col-sm-6 journey-list">
                      <a href="#">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia earum qui
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<hr>

<div class="hotel-book-list container hotel-book-container">
  <div class="row mb-3">
      <div class="col-7">
          <h2 class="mb-0 font-weight-bold">Inspirations</h2>
      </div>
      <div class="col-5 text-right">
          <a href="#" class="btn btn-primary">Get Inspired</a>
      </div>
  </div>
  <div class="row inspire">
      <div class="col-md-4">
          <div class="bigger-inspire">
              <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
          </div>
      </div>
      <div class="col-md-4">
          <div class="small-inspire">
              <img src="images/hotel-kjsdksd.jpg" alt="">
          </div>
          <div class="small-inspire">
              <img src="images/hotel-kjsdksd.jpg" alt="">
          </div>
      </div>
      <div class="col-md-4">
          <div class="bigger-inspire">
              <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
          </div>
      </div>
  </div>
</div>
<div class="container hotel-book-container">
  <h2 class="mb-4 font-weight-bold">Q&A</h2>

  <p>
      Tablet is your source for discovering the world’s most interesting boutique and luxury hotels — places where
      you'll find a memorable experience, not just a room for the night. Part of the MICHELIN Guide since 2018,
      our hand-picked selection has hotels to meet every taste and budget, and we make booking them a joy. f you
      care where you stay, you've come to the right place.
  </p>
  <p>
      Have a specific question? Explore the frequently asked questions below:
  </p>

  <div class="accordion accordion-ex" id="qna">
      <div class="card">
          <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left qa-btn" type="button" data-toggle="collapse"
                      data-target="#qna1" aria-expanded="true" aria-controls="qna1">
                      Do Ineed to be a member to use Tablet?
                      <i class="fa fa-plus"></i>
                      <i class="fa fa-minus" style="display: none"></i>
                  </button>
              </h2>
          </div>
          <div id="qna1" class="collapse additional-collapse" aria-labelledby="headingOne" data-parent="#qna">
              <div class="card-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum asperiores optio quos at iusto!
                  Quas, maiores iste. Quam, incidunt et. Recusandae autem voluptatem animi voluptate deleniti. Rem
                  aspernatur doloribus eligendi?
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left qa-btn collapsed" type="button"
                      data-toggle="collapse" data-target="#qna2" aria-expanded="false" aria-controls="qna2">
                      What is Tablet Plus?
                      <i class="fa fa-plus"></i>
                      <i class="fa fa-minus" style="display: none"></i>
                  </button>
              </h2>

          </div>
          <div id="qna2" class="collapse additional-collapse" aria-labelledby="headingTwo" data-parent="#qna">
              <div class="card-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum asperiores optio quos at iusto!
                  Quas, maiores iste. Quam, incidunt et. Recusandae autem voluptatem animi voluptate deleniti. Rem
                  aspernatur doloribus eligendi?
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left qa-btn collapsed" type="button"
                      data-toggle="collapse" data-target="#qna3" aria-expanded="false" aria-controls="qna3">
                      Ithink I need help, can you help me?
                      <i class="fa fa-plus"></i>
                      <i class="fa fa-minus" style="display: none"></i>
                  </button>
              </h2>

          </div>
          <div id="qna3" class="collapse additional-collapse" aria-labelledby="headingThree" data-parent="#qna">
              <div class="card-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum asperiores optio quos at iusto!
                  Quas, maiores iste. Quam, incidunt et. Recusandae autem voluptatem animi voluptate deleniti. Rem
                  aspernatur doloribus eligendi?
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header" id="headingfour">
              <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left qa-btn collapsed" type="button"
                      data-toggle="collapse" data-target="#qna4" aria-expanded="false" aria-controls="qna4">
                      Does Tablet offer discounts?
                      <i class="fa fa-plus"></i>
                      <i class="fa fa-minus" style="display: none"></i>
                  </button>
              </h2>

          </div>
          <div id="qna4" class="collapse additional-collapse" aria-labelledby="headingfour" data-parent="#qna">
              <div class="card-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum asperiores optio quos at iusto!
                  Quas, maiores iste. Quam, incidunt et. Recusandae autem voluptatem animi voluptate deleniti. Rem
                  aspernatur doloribus eligendi?
              </div>
          </div>
      </div>

  </div>
</div>
<hr>

<footer>
  <div class="container hotel-book-container mb-0">
      <div class="footer-bottom pb-4">
          <div class="row align-items-center">
              <div class="col-md-9 mmb-4">
                  <div>
                      <nav class="nav">
                          <a class="nav-link py-0 pl-0" href="#">&copy; Emporium Collection</a>
                          <a class="nav-link py-0" href="#">Contact</a>
                          <a class="nav-link py-0" href="#">Cancel booking</a>
                          <a class="nav-link py-0" href="#">Press</a>
                          <a class="nav-link py-0" href="#">Member Services</a>
                          <a class="nav-link py-0" href="#">Privacy</a>
                          <a class="nav-link py-0" href="#">Tearms</a>
                          <a class="nav-link py-0" href="#">Cookie settings</a>
                      </nav>
                  </div>
              </div>
              <div class="col-md-3 mmb-4">
                  <nav class="nav justify-content-end sosmed">
                      <a class="nav-link py-0" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      <a class="nav-link py-0" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a class="nav-link py-0" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                      <a class="nav-link py-0" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  </nav>
              </div>
          </div>
      </div>

  </div>
</footer>

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
<div class="sidebar-main" id="myCollection">
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
              My Collection
          </h3>
      </div>
      <div id="collections">
          <div class="collection-slide align-items-center">
              <div class="left-add-slide">
                  <a href="#addCollaction" class="collapse-collection" data-toggle="collapse">
                      <div class="btn btn-add-collection">
                          +
                      </div>
                      <p class="m---019">Add Yours</p>
                  </a>
              </div>
              <div class="right-collection pl-3">
                  <div class="swipe-collection owl-carousel">
                      <div class="item">
                          <div class="swipe-item">
                              <div class="swipe-round">
                                  <span class="icon-swipe">#</span>
                                  <img src="/images/aaabf028325021.5637326997cb1.jpg" alt="">
                              </div>
                              <div class="swipe-img-wrapper">
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/d9710383434639.5d3c346168dd3.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                              </div>
                              <div class="swipe-action">
                                  <div class="swipe-action-btn">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>
                                  </div>
                                  <div class="swipe-action-content">
                                      <a href="#share" class="collapse-collection"
                                          data-toggle="collapse">Share</a>
                                      <a href="#">Edit</a>
                                      <a href="#">Remove</a>
                                  </div>
                              </div>
                          </div>
                          <p class="mb-0">#Collection Name</p>
                      </div>
                      <div class="item">
                          <div class="swipe-item">
                              <div class="swipe-round">
                                  <span class="icon-swipe">#</span>
                                  <img src="/images/aaabf028325021.5637326997cb1.jpg" alt="">
                              </div>
                              <div class="swipe-img-wrapper">
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/d9710383434639.5d3c346168dd3.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                              </div>
                              <div class="swipe-action">
                                  <div class="swipe-action-btn">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>
                                  </div>
                                  <div class="swipe-action-content">
                                      <a href="#share" class="collapse-collection"
                                          data-toggle="collapse">Share</a>
                                      <a href="#">Edit</a>
                                      <a href="#">Remove</a>
                                  </div>
                              </div>
                          </div>
                          <p class="mb-0">#Collection Name</p>
                      </div>
                      <div class="item">
                          <div class="swipe-item">
                              <div class="swipe-round">
                                  <span class="icon-swipe">#</span>
                                  <img src="/images/aaabf028325021.5637326997cb1.jpg" alt="">
                              </div>
                              <div class="swipe-img-wrapper">
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/d9710383434639.5d3c346168dd3.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                              </div>
                              <div class="swipe-action">
                                  <div class="swipe-action-btn">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>
                                  </div>
                                  <div class="swipe-action-content">
                                      <a href="#share" class="collapse-collection"
                                          data-toggle="collapse">Share</a>
                                      <a href="#">Edit</a>
                                      <a href="#">Remove</a>
                                  </div>
                              </div>
                          </div>
                          <p class="mb-0">#Collection Name</p>
                      </div>
                      <div class="item">
                          <div class="swipe-item">
                              <div class="swipe-round">
                                  <span class="icon-swipe">#</span>
                                  <img src="/images/aaabf028325021.5637326997cb1.jpg" alt="">
                              </div>
                              <div class="swipe-img-wrapper">
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/d9710383434639.5d3c346168dd3.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                              </div>
                              <div class="swipe-action">
                                  <div class="swipe-action-btn">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>
                                  </div>
                                  <div class="swipe-action-content">
                                      <a href="#share" class="collapse-collection"
                                          data-toggle="collapse">Share</a>
                                      <a href="#">Edit</a>
                                      <a href="#">Remove</a>
                                  </div>
                              </div>
                          </div>
                          <p class="mb-0">#Collection Name</p>
                      </div>
                      <div class="item">
                          <div class="swipe-item">
                              <div class="swipe-round">
                                  <span class="icon-swipe">#</span>
                                  <img src="/images/aaabf028325021.5637326997cb1.jpg" alt="">
                              </div>
                              <div class="swipe-img-wrapper">
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/d9710383434639.5d3c346168dd3.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                              </div>
                              <div class="swipe-action">
                                  <div class="swipe-action-btn">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>
                                  </div>
                                  <div class="swipe-action-content">
                                      <a href="#share" class="collapse-collection"
                                          data-toggle="collapse">Share</a>
                                      <a href="#">Edit</a>
                                      <a href="#">Remove</a>
                                  </div>
                              </div>
                          </div>
                          <p class="mb-0">#Collection Name</p>
                      </div>
                      <div class="item">
                          <div class="swipe-item">
                              <div class="swipe-round">
                                  <span class="icon-swipe">#</span>
                                  <img src="/images/aaabf028325021.5637326997cb1.jpg" alt="">
                              </div>
                              <div class="swipe-img-wrapper">
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/d9710383434639.5d3c346168dd3.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                              </div>
                              <div class="swipe-action">
                                  <div class="swipe-action-btn">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>
                                  </div>
                                  <div class="swipe-action-content">
                                      <a href="#share" class="collapse-collection"
                                          data-toggle="collapse">Share</a>
                                      <a href="#">Edit</a>
                                      <a href="#">Remove</a>
                                  </div>
                              </div>
                          </div>
                          <p class="mb-0">#Collection Name</p>
                      </div>
                      <div class="item">
                          <div class="swipe-item">
                              <div class="swipe-round">
                                  <span class="icon-swipe">#</span>
                                  <img src="/images/aaabf028325021.5637326997cb1.jpg" alt="">
                              </div>
                              <div class="swipe-img-wrapper">
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/d9710383434639.5d3c346168dd3.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                              </div>
                              <div class="swipe-action">
                                  <div class="swipe-action-btn">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>
                                  </div>
                                  <div class="swipe-action-content">
                                      <a href="#share" class="collapse-collection"
                                          data-toggle="collapse">Share</a>
                                      <a href="#">Edit</a>
                                      <a href="#">Remove</a>
                                  </div>
                              </div>
                          </div>
                          <p class="mb-0">#Collection Name</p>
                      </div>
                      <div class="item">
                          <div class="swipe-item">
                              <div class="swipe-round">
                                  <span class="icon-swipe">#</span>
                                  <img src="/images/aaabf028325021.5637326997cb1.jpg" alt="">
                              </div>
                              <div class="swipe-img-wrapper">
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/d9710383434639.5d3c346168dd3.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                              </div>
                              <div class="swipe-action">
                                  <div class="swipe-action-btn">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>
                                  </div>
                                  <div class="swipe-action-content">
                                      <a href="#share" class="collapse-collection"
                                          data-toggle="collapse">Share</a>
                                      <a href="#">Edit</a>
                                      <a href="#">Remove</a>
                                  </div>
                              </div>
                          </div>
                          <p class="mb-0">#Collection Name</p>
                      </div>
                      <div class="item">
                          <div class="swipe-item">
                              <div class="swipe-round">
                                  <span class="icon-swipe">#</span>
                                  <img src="/images/aaabf028325021.5637326997cb1.jpg" alt="">
                              </div>
                              <div class="swipe-img-wrapper">
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/d9710383434639.5d3c346168dd3.jpg" alt="">
                                  </div>
                                  <div class="swipe-img">
                                      <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                                  </div>
                              </div>
                              <div class="swipe-action">
                                  <div class="swipe-action-btn">
                                      <i class="fa fa-pencil" aria-hidden="true"></i>
                                  </div>
                                  <div class="swipe-action-content">
                                      <a href="#share" class="collapse-collection"
                                          data-toggle="collapse">Share</a>
                                      <a href="#">Edit</a>
                                      <a href="#">Remove</a>
                                  </div>
                              </div>
                          </div>
                          <p class="mb-0">#Collection Name</p>
                      </div>

                  </div>
              </div>
          </div>
          <div class="collapse bg-grey" id="addCollaction" data-parent="#collections">
              <div class="p-4">
                  <form action="#">
                      <div class="row">
                          <div class="col-xl-7 col-lg-12">
                              <div class="form-group row">
                                  <div class="col-4">
                                      <label>Name of Collection <sup>*</sup> </label>
                                  </div>
                                  <div class="col-8">
                                      <input type="text" class="form-control" placeholder="Name ">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-4">
                                      <label>Start Date - End Date</label>
                                  </div>
                                  <div class="col-8">
                                      <div class="range-calendar calendar-collection" id="calendar-pick">
                                          <div id="daterangepicker-inline-container"
                                              class="daterangepicker-inline">
                                          </div>
                                          <input type="hidden" id="daterangepicker-inline">
                                          <div class="clearfix"></div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                          <div class="col-12">
                              <div class="text-right mt-4">
                                  <button class="btn btn-dark rounded-0 px-5">Save</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>

          </div>
          <div class="collapse bg-grey" id="share" data-parent="#collections">
              <div class="p-4 shared-container">
                  <h5 class="mb-4">Share with social media:</h5>
                  <div class="sharing d-flex">
                      <a href="#" class="sharing-item fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href="#" class="sharing-item tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      <a href="#" class="sharing-item gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                      <a href="#" class="sharing-item pn"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                  </div>
                  <div class="divider-share my-5"></div>
                  <h5 class="mb-4">Or share with email:</h5>
                  <form action="#" class="shared-collection">
                      <div class="mail-outer">
                          <div class="row mail-list ">
                              <div class="col">
                                  <label>First Name</label>
                                  <input type="text" class="form-control" placeholder="">
                              </div>
                              <div class="col">
                                  <label>Last Name</label>
                                  <input type="text" class="form-control" placeholder="">
                              </div>
                              <div class="col">
                                  <label>Email</label>
                                  <input type="email" class="form-control" placeholder="">
                              </div>
                              <div class="col-add pr-3">
                                  <a href="#" class="btn btn-add-collection is-small btn-new-mail-form">
                                      +
                                  </a>
                              </div>
                          </div>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="gdpr">
                          <label class="custom-control-label" for="gdpr">
                              I Agree to the GDPR...
                          </label>
                      </div>
                      <div class="text-right mt-2">
                          <button type="submit" class="btn btn-dark px-5 rounded-0 ">Send</button>
                      </div>
                      <div class="success-message">
                          <h3>Your collection has been shared</h3>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <div class="row mt-5 mb-4">
          <div class="col-lg-3 col-md-4 mb-4">
              <div class="pr-lst collection-lst">
                  <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
                  <i class="ico ico-diamon diamon-label"></i>
                  <div class="pr-lst-desc fav-lst-desc">
                      <div class="act-lst">
                          <p class="title-font-2 tt-price">from - € 499</p>
                          <p><a href="#">View Details</a></p>
                          <p><a href="#">Reservation</a></p>
                          <p><a href="#">-Remove</a></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 mb-4">
              <div class="pr-lst collection-lst">
                  <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
                  <i class="ico ico-diamon diamon-label"></i>
                  <div class="pr-lst-desc fav-lst-desc">
                      <div class="act-lst">
                          <p class="title-font-2 tt-price">from - € 499</p>
                          <p><a href="#">View Details</a></p>
                          <p><a href="#">Reservation</a></p>
                          <p><a href="#">-Remove</a></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 mb-4">
              <div class="pr-lst collection-lst">
                  <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
                  <i class="ico ico-diamon diamon-label"></i>
                  <div class="pr-lst-desc fav-lst-desc">
                      <div class="act-lst">
                          <p class="title-font-2 tt-price">from - € 499</p>
                          <p><a href="#">View Details</a></p>
                          <p><a href="#">Reservation</a></p>
                          <p><a href="#">-Remove</a></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 mb-4">
              <div class="pr-lst collection-lst">
                  <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
                  <i class="ico ico-diamon diamon-label"></i>
                  <div class="pr-lst-desc fav-lst-desc">
                      <div class="act-lst">
                          <p class="title-font-2 tt-price">from - € 499</p>
                          <p><a href="#">View Details</a></p>
                          <p><a href="#">Reservation</a></p>
                          <p><a href="#">-Remove</a></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 mb-4">
              <div class="pr-lst collection-lst">
                  <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
                  <i class="ico ico-diamon diamon-label"></i>
                  <div class="pr-lst-desc fav-lst-desc">
                      <div class="act-lst">
                          <p class="title-font-2 tt-price">from - € 499</p>
                          <p><a href="#">View Details</a></p>
                          <p><a href="#">Reservation</a></p>
                          <p><a href="#">-Remove</a></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 mb-4">
              <div class="pr-lst collection-lst">
                  <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
                  <i class="ico ico-diamon diamon-label"></i>
                  <div class="pr-lst-desc fav-lst-desc">
                      <div class="act-lst">
                          <p class="title-font-2 tt-price">from - € 499</p>
                          <p><a href="#">View Details</a></p>
                          <p><a href="#">Reservation</a></p>
                          <p><a href="#">-Remove</a></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 mb-4">
              <div class="pr-lst collection-lst">
                  <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
                  <i class="ico ico-diamon diamon-label"></i>
                  <div class="pr-lst-desc fav-lst-desc">
                      <div class="act-lst">
                          <p class="title-font-2 tt-price">from - € 499</p>
                          <p><a href="#">View Details</a></p>
                          <p><a href="#">Reservation</a></p>
                          <p><a href="#">-Remove</a></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 mb-4">
              <div class="pr-lst collection-lst">
                  <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
                  <i class="ico ico-diamon diamon-label"></i>
                  <div class="pr-lst-desc fav-lst-desc">
                      <div class="act-lst">
                          <p class="title-font-2 tt-price">from - € 499</p>
                          <p><a href="#">View Details</a></p>
                          <p><a href="#">Reservation</a></p>
                          <p><a href="#">-Remove</a></p>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </div>
</div>
<div class="sidebar-main" id="reservation">
  <a href="#" class="close-sidebar">
      <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
          xmlns="http://www.w3.org/2000/svg">
          <title>Close</title>
          <path
              d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
          </path>
      </svg>
  </a>
  <div id="smartwizard" class="wizard-reservation">
      <ul class="nav mx-5 mt-4">
          <li>
              <a class="nav-link" href="#step-1">
                  1. WHEN
              </a>
          </li>
          <li>
              <a class="nav-link" href="#step-2">
                  2. SUITES
              </a>
          </li>
          <li>
              <a class="nav-link" href="#step-3">
                  3. ADD TO SUITE
              </a>
          </li>
          <li>
              <a class="nav-link" href="#step-4">
                  4. PAYMENT DETAILS
              </a>
          </li>
          <li>
              <a class="nav-link" href="#step-5">
                  5. CONFIRMATION
              </a>
          </li>
      </ul>

      <div class="tab-content h-100">
          <div id="step-1" class="tab-pane" role="tabpanel">
              <div class="sidebar-scroller is-reserve">
                  <div class="row">
                      <div class="col-lg-9 col-md-8">
                          <div class="choose-date">
                              <h3 class="mb-5">Your date and suite</h3>
                              <hr>
                              <h3 class="mb-4 mt-5">Your selected dates include: </h3>
                              <div class="row mb-5">
                                  <div class="col">
                                      <p><b>Arrival date</b></p>
                                      <div class="form-group form-inline-group">
                                          <input type="text" class="form-control form-line fromdate"
                                              placeholder="Select arrival date">
                                          <span><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <p><b>Departure date</b></p>
                                      <div class="form-group form-inline-group">
                                          <input type="text" class="form-control form-line todate" disabled
                                              placeholder="Select departure date">
                                          <span><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                      </div>
                                  </div>
                              </div>
                              <hr>
                              <h3 class="mt-5">Your guest options include:</h3>
                              <div class="filter-container-fl" id="guest-pick" style="display: block;">
                                  <div class="guest-pick-container">
                                      <div class="guest-pick-header">
                                          <div class="row align-items-center">
                                              <div class="col-lg-9 col-md-7 col-7">
                                                  <p class="mb-0"><b>Suites</b></p>
                                              </div>
                                              <div class="col-lg-3 col-md-5 col-5">
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
                                                              <button type="button" class="min">-</button>
                                                              <div class="col text-center">
                                                                  <span class="mr-1 adult-val">2 </span>
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
                                          <div class="room-limit">
                                              <p><b>Does your booking involve more than 4 suites?</b></p>
                                              <p>Contact our Groups and Events team on 08989819281. and they'll
                                                  take care of everything.</p>

                                              <a href="#" class="btn btn-dark rounded-0 px-5"><i
                                                      class="fa fa-phone" aria-hidden="true"></i> REQUEST A CALL
                                                  BACK</a>
                                              <hr>
                                              <p>Or send us an email and we'll get back to you prompty.</p>
                                              <div class="row">
                                                  <div class="col-8">
                                                      <div class="row">
                                                          <div class="col-6 form-group">
                                                              <input type="text" class="form-control"
                                                                  placeholder="Your Name">
                                                          </div>
                                                          <div class="col-6 form-group">
                                                              <input type="email" class="form-control"
                                                                  placeholder="Your Email Address">
                                                          </div>
                                                          <div class="col-12 form-group">
                                                              <textarea class="form-control" cols="30" rows="10"
                                                                  placeholder="Message"></textarea>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-4">
                                                      <div class="barcode-suite mb-3">
                                                          <div class="aspect-ratio-box">
                                                              <div class="aspect-ratio-box-inside">
                                                                  <img src="images/QR-code.png" class="img-fluid"
                                                                      alt="">
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
                                                              <p class="dd-location-info mb-0"><i
                                                                      class="ico ico-place-2"></i> Munch</p>
                                                          </div>
                                                          <a href="#" class="plus-btn">+</a>
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                      <div class="guest-pick-footer">
                                          <div class="text-right">
                                              <a href="#" class="availability-check saol-link">Check
                                                  availability</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-4">
                          <div class="reservation-summary">
                              <h4>YOUR RESERVATION</h4>
                              <p><b>Belmond Jimbaran Puri</b></p>
                              <table class="table table-borderless mb-0">
                                  <tr>
                                      <td class="px-0 py-1">Guests</td>
                                      <td class="px-0 py-1 text-right">2 Guests</td>
                                  </tr>
                                  <tr>
                                      <td class="px-0 py-1">Check-in</td>
                                      <td class="px-0 py-1 text-right">15 Aug 2020</td>
                                  </tr>
                                  <tr>
                                      <td class="px-0 py-1">Check-out</td>
                                      <td class="px-0 py-1 text-right">16 Aug 2020</td>
                                  </tr>
                                  <tr>
                                      <td class="px-0 py-1">Suites</td>
                                      <td class="px-0 py-1 text-right">Pavilion suite</td>
                                  </tr>
                              </table>
                          </div>
                          <div class="reservation-total">
                              <table class="table table-borderless mb-0">
                                  <tr>
                                      <td class="px-0 py-1">Total</td>
                                      <td class="px-0 py-1 text-right"></td>
                                  </tr>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div id="step-2" class="tab-pane" role="tabpanel">


              <div class="sidebar-scroller is-reserve">
                  <!-- if not available -->
                  <!-- <div class="not-available">
                  <h3>Please try again</h3>
                  <p class="mb-1">There are no suite available on your selected dates.</p>
                  <p class="mb-1">Check availability directly by calling 082082982989 or email
                      reservation@rmporium.com</p>
                  <p class="mb-1"><a href="#" class="underline btn-newreserve"><b>Or start over with new travel dates.</b></a></p>
              </div> -->
                  <!-- if not available end -->
                  <h3 class="mb-5 d-flex align-items-center">
                      <a href="#" class="backwizard btn-backwizard">
                          <i class="ico ico-back"></i>
                      </a>
                      Your (Pavilion Suite) overview:
                  </h3>

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

                          <div class="suite-list section-shadow mb-5">
                              <div class="suite-tumb">
                                  <div class="row align-items">
                                      <div class="col-lg-6">
                                          <div class="img-offset-slide">
                                              <div>
                                                  <a href="detail-page.html">
                                                      <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                                          class="img-full" alt="">
                                                  </a>
                                              </div>
                                              <div>
                                                  <a href="detail-page.html">
                                                      <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                                          class="img-full" alt="">
                                                  </a>
                                              </div>
                                              <div>
                                                  <a href="detail-page.html">
                                                      <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                                          class="img-full" alt="">
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="suite-desc">
                                              <h3>Superior Double Room Garden or Village View </h3>
                                              <p>
                                                  Superior Double Rooms are located in the Main Building, offering
                                                  a
                                                  delightful view of the village or garden.
                                              </p>
                                              <ul class="pl-3">
                                                  <li>One king or two twin-size beds</li>
                                                  <li>Extra-large marble bathroom with separate bathtub and shower
                                                  </li>
                                                  <li>Size 35-45m² / 377-484ft² </li>
                                                  <li>Maximum occupancy is 2 persons </li>
                                                  <li>Connects to another Superior Double Room or an Executive
                                                      Junior
                                                      Suite </li>
                                              </ul>
                                              <div class="row align-items-center mt-5">
                                                  <div class="col-8">
                                                      <p class="mb-0">From: <b>€1.099 per night</b></p>
                                                      <p>inclusive of all taxes and fees</p>
                                                  </div>
                                                  <div class="col-4">
                                                      <div class="text-right">
                                                          <a href="#"
                                                              class="btn btn-dark  px-4 select-sd rounded-0">Select</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="suite-board">
                                  <div class="suite-board-header">
                                      <a href="#" class="board-close"><i class="fa fa-times"
                                              aria-hidden="true"></i>
                                          CLOSE</a>
                                      <div class="row align-items-center">
                                          <div class="col-2 col---s">
                                              <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                                  class="img-full" alt="">
                                          </div>
                                          <div class="col">
                                              <h3>Superior Double Room Garden or Village View </h3>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row suite-board-body">
                                      <div class="col-lg-4 col-md-12 suite-price-feature">
                                          <div class="suite-board-main">
                                              <h4>Breakfast on the Amalfi Coast </h4>
                                              <ul class="pl-3">
                                                  <li>Accommodation</li>
                                                  <li>Daily breakfast</li>
                                              </ul>
                                          </div>
                                          <div class="suite-board-footer">
                                              <div class="collapse" id="breakfas">
                                                  <div class="card card-body border-0">
                                                      <h4 class="mb-4">Details & Policies</h4>
                                                      <ul class="text-left pl-3">
                                                          <li>
                                                              CANCEL: <br>
                                                              Cancel by 12PM local time 24 hours prior to arrival
                                                              or
                                                              pay 1 night plus tax
                                                          </li>
                                                          <li>
                                                              GUARANTEE: <br>
                                                              A credit card guarantee is required at time of
                                                              booking
                                                              unless otherwise stated in the rate description.
                                                          </li>
                                                          <li>
                                                              MEAL PLAN: <br>
                                                              Breakfast included
                                                          </li>
                                                          <li>
                                                              SERVICE CHARGE: <br>
                                                              Rates shown are inclusive of 10 percent Service
                                                              Charge
                                                              per room, per night. This will appear itemized in
                                                              your
                                                              shopping basket.
                                                          </li>
                                                          <li>
                                                              GOVERNMENT TAX: <br>
                                                              Rates shown are inclusive of 10 percent Government
                                                              Tax
                                                              per room, per night. This will appear itemized in
                                                              your
                                                              shopping basket.
                                                          </li>
                                                          <li>
                                                              GOVERNMENT TAX AND SERVICE CHARGE: <br>
                                                              Room rates do not include 11 percent Government Tax
                                                              and
                                                              10 percent Service Charge
                                                          </li>
                                                          <li>
                                                              PACKAGE GOVERNMENT TAX: <br>
                                                              Room rates do not include 10% Government Tax
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <a class="detail-policies" data-toggle="collapse" href="#breakfas"
                                                  role="button" aria-expanded="false"
                                                  aria-controls="breakfas">Details
                                                  & Policies</a>
                                              <div class="footer-sdse">
                                                  <p>€1.099 per night inclusive of all taxes and fees</p>
                                                  <a href="#policies" data-toggle="collapse" role="button"
                                                      class="btn btn-dark  btn-block rounded-0">Select</a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-12 suite-price-feature">
                                          <div class="suite-board-main">
                                              <h4>Half Board</h4>
                                              <ul class="pl-3">
                                                  <li>Accommodation</li>
                                                  <li>Daily breakfast</li>
                                                  <li>Daily à la carte lunch or dinner </li>
                                                  <li>Accommodation</li>
                                                  <li>Daily breakfast</li>
                                                  <li>Daily à la carte lunch or dinner </li>
                                              </ul>
                                          </div>
                                          <div class="suite-board-footer">
                                              <div class="collapse" id="half">
                                                  <div class="card card-body border-0">
                                                      <h4 class="mb-4">Details & Policies</h4>
                                                      <ul class="text-left pl-3">
                                                          <li>
                                                              CANCEL: <br>
                                                              Cancel by 12PM local time 24 hours prior to arrival
                                                              or
                                                              pay 1 night plus tax
                                                          </li>
                                                          <li>
                                                              GUARANTEE: <br>
                                                              A credit card guarantee is required at time of
                                                              booking
                                                              unless otherwise stated in the rate description.
                                                          </li>
                                                          <li>
                                                              MEAL PLAN: <br>
                                                              Breakfast included
                                                          </li>
                                                          <li>
                                                              SERVICE CHARGE: <br>
                                                              Rates shown are inclusive of 10 percent Service
                                                              Charge
                                                              per room, per night. This will appear itemized in
                                                              your
                                                              shopping basket.
                                                          </li>
                                                          <li>
                                                              GOVERNMENT TAX: <br>
                                                              Rates shown are inclusive of 10 percent Government
                                                              Tax
                                                              per room, per night. This will appear itemized in
                                                              your
                                                              shopping basket.
                                                          </li>
                                                          <li>
                                                              GOVERNMENT TAX AND SERVICE CHARGE: <br>
                                                              Room rates do not include 11 percent Government Tax
                                                              and
                                                              10 percent Service Charge
                                                          </li>
                                                          <li>
                                                              PACKAGE GOVERNMENT TAX: <br>
                                                              Room rates do not include 10% Government Tax
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <a class="detail-policies" data-toggle="collapse" href="#half"
                                                  role="button" aria-expanded="false" aria-controls="half">Details
                                                  &
                                                  Policies</a>
                                              <div class="footer-sdse">
                                                  <p>€1.099 per night inclusive of all taxes and fees</p>
                                                  <a href="#policies2" data-toggle="collapse" role="button"
                                                      class="btn btn-dark  btn-block rounded-0">Select</a>
                                              </div>
                                          </div>
                                      </div>

                                  </div>
                              </div>
                              <div class="collapse policies p-4" id="policies">
                                  <h3>Policies</h3>
                                  <div class="card card-body rounded-0">
                                      <p><b>Suite 1</b></p>
                                      <p><b>CANCEL</b> Cancel by 1pm local time 72 hours prior or pay 1 night for
                                          every 3 nights booked plus tax. No show charged full stay.</p>
                                      <p><b>GUARANTEE</b> A credit card guarantee is required at time of booking
                                          unless otherwise started in the rate description.</p>
                                      <p><b>MEAL PLAN</b> Breakfast included</p>
                                      <p><b>VAT TAX</b> Rates shown are inclusive of 10 percent VAT Tax per room,
                                          per
                                          night. this will appear itemized in your shopping basket.</p>
                                      <p><b>CITY TAX</b> Rates shown are inclusive of EUR 5 city Tax per person,
                                          per
                                          night for persons 8 years and older for up to 10 nights. Seasonal
                                          adjustments may apply. This will appear itemized in your shopping
                                          basket.
                                      </p>
                                  </div>
                                  <hr>
                                  <div class="booking-tearms">
                                      <h3>Booking teams and conditions</h3>
                                      <div class="custom-control custom-checkbox mb-5">
                                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                                          <label class="custom-control-label" for="customCheck2">
                                              Your reservation is made subject to our
                                              <a href="#" class="underline"><b>Terms & Conditions</b>
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
                                  <div class="row">
                                      <div class="col-6">
                                          <a href="#" class="btn btn-dark  px-5 btn-backwizard">Go back</a>
                                      </div>
                                      <div class="col-6 text-right">
                                          <a href="#" class="btn btn-dark  px-5 btn-nextwizard">Confirm
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="collapse policies p-4" id="policies2">
                                  <h3>Policies</h3>
                                  <div class="card card-body rounded-0">
                                      <p><b>Suite 1</b></p>
                                      <p><b>CANCEL</b> Cancel by 1pm local time 72 hours prior or pay 1 night for
                                          every 3 nights booked plus tax. No show charged full stay.</p>
                                      <p><b>GUARANTEE</b> A credit card guarantee is required at time of booking
                                          unless otherwise started in the rate description.</p>
                                      <p><b>MEAL PLAN</b> Breakfast included</p>
                                      <p><b>VAT TAX</b> Rates shown are inclusive of 10 percent VAT Tax per room,
                                          per
                                          night. this will appear itemized in your shopping basket.</p>
                                      <p><b>CITY TAX</b> Rates shown are inclusive of EUR 5 city Tax per person,
                                          per
                                          night for persons 8 years and older for up to 10 nights. Seasonal
                                          adjustments may apply. This will appear itemized in your shopping
                                          basket.
                                      </p>
                                  </div>
                                  <hr>
                                  <div class="booking-tearms">
                                      <h3>Booking teams and conditions</h3>
                                      <div class="custom-control custom-checkbox mb-5">
                                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                                          <label class="custom-control-label" for="customCheck1">
                                              Your reservation is made subject to our
                                              <a href="#" class="underline"><b>Terms & Conditions</b>
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
                                  <div class="row">
                                      <div class="col-6">
                                          <a href="#" class="btn btn-dark  px-5 btn-backwizard">Go back</a>
                                      </div>
                                      <div class="col-6 text-right">
                                          <a href="#" class="btn btn-dark  px-5 btn-nextwizard">Confirm
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="suite-list section-shadow mb-5">
                              <div class="suite-tumb">
                                  <div class="row align-items">
                                      <div class="col-lg-6">
                                          <div class="img-offset-slide">
                                              <div>
                                                  <a href="detail-page.html">
                                                      <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                                          class="img-full" alt="">
                                                  </a>
                                              </div>
                                              <div>
                                                  <a href="detail-page.html">
                                                      <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                                          class="img-full" alt="">
                                                  </a>
                                              </div>
                                              <div>
                                                  <a href="detail-page.html">
                                                      <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                                          class="img-full" alt="">
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="suite-desc">
                                              <h3>Superior Double Room Garden or Village View </h3>
                                              <p>
                                                  Superior Double Rooms are located in the Main Building, offering
                                                  a
                                                  delightful view of the village or garden.
                                              </p>
                                              <ul class="pl-3">
                                                  <li>One king or two twin-size beds</li>
                                                  <li>Extra-large marble bathroom with separate bathtub and shower
                                                  </li>
                                                  <li>Size 35-45m² / 377-484ft² </li>
                                                  <li>Maximum occupancy is 2 persons </li>
                                                  <li>Connects to another Superior Double Room or an Executive
                                                      Junior
                                                      Suite </li>
                                              </ul>
                                              <div class="row align-items-center mt-5">
                                                  <div class="col-8">
                                                      <p class="mb-0">From: <b>€1.099 per night</b></p>
                                                      <p>inclusive of all taxes and fees</p>
                                                  </div>
                                                  <div class="col-4">
                                                      <div class="text-right">
                                                          <a href="#"
                                                              class="btn btn-dark  px-4 select-sd rounded-0">Select</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="suite-board">
                                  <div class="suite-board-header">
                                      <a href="#" class="board-close"><i class="fa fa-times"
                                              aria-hidden="true"></i>
                                          CLOSE</a>
                                      <div class="row align-items-center">
                                          <div class="col-2 col---s">
                                              <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                                  class="img-full" alt="">
                                          </div>
                                          <div class="col">
                                              <h3>Superior Double Room Garden or Village View </h3>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row suite-board-body">
                                      <div class="col-lg-4 col-md-12 suite-price-feature">
                                          <div class="suite-board-main">
                                              <h4>Breakfast on the Amalfi Coast </h4>
                                              <ul class="pl-3">
                                                  <li>Accommodation</li>
                                                  <li>Daily breakfast</li>
                                              </ul>
                                          </div>
                                          <div class="suite-board-footer">
                                              <div class="collapse" id="breakfas">
                                                  <div class="card card-body border-0">
                                                      <h4 class="mb-4">Details & Policies</h4>
                                                      <ul class="text-left pl-3">
                                                          <li>
                                                              CANCEL: <br>
                                                              Cancel by 12PM local time 24 hours prior to arrival
                                                              or
                                                              pay 1 night plus tax
                                                          </li>
                                                          <li>
                                                              GUARANTEE: <br>
                                                              A credit card guarantee is required at time of
                                                              booking
                                                              unless otherwise stated in the rate description.
                                                          </li>
                                                          <li>
                                                              MEAL PLAN: <br>
                                                              Breakfast included
                                                          </li>
                                                          <li>
                                                              SERVICE CHARGE: <br>
                                                              Rates shown are inclusive of 10 percent Service
                                                              Charge
                                                              per room, per night. This will appear itemized in
                                                              your
                                                              shopping basket.
                                                          </li>
                                                          <li>
                                                              GOVERNMENT TAX: <br>
                                                              Rates shown are inclusive of 10 percent Government
                                                              Tax
                                                              per room, per night. This will appear itemized in
                                                              your
                                                              shopping basket.
                                                          </li>
                                                          <li>
                                                              GOVERNMENT TAX AND SERVICE CHARGE: <br>
                                                              Room rates do not include 11 percent Government Tax
                                                              and
                                                              10 percent Service Charge
                                                          </li>
                                                          <li>
                                                              PACKAGE GOVERNMENT TAX: <br>
                                                              Room rates do not include 10% Government Tax
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <a class="detail-policies" data-toggle="collapse" href="#breakfas"
                                                  role="button" aria-expanded="false"
                                                  aria-controls="breakfas">Details
                                                  & Policies</a>
                                              <div class="footer-sdse">
                                                  <p>€1.099 per night inclusive of all taxes and fees</p>
                                                  <a href="#policies3" data-toggle="collapse" role="button"
                                                      class="btn btn-dark  btn-block rounded-0">Select</a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-4 col-md-12 suite-price-feature">
                                          <div class="suite-board-main">
                                              <h4>Half Board</h4>
                                              <ul class="pl-3">
                                                  <li>Accommodation</li>
                                                  <li>Daily breakfast</li>
                                                  <li>Daily à la carte lunch or dinner </li>
                                                  <li>Accommodation</li>
                                                  <li>Daily breakfast</li>
                                                  <li>Daily à la carte lunch or dinner </li>
                                              </ul>
                                          </div>
                                          <div class="suite-board-footer">
                                              <div class="collapse" id="half">
                                                  <div class="card card-body border-0">
                                                      <h4 class="mb-4">Details & Policies</h4>
                                                      <ul class="text-left pl-3">
                                                          <li>
                                                              CANCEL: <br>
                                                              Cancel by 12PM local time 24 hours prior to arrival
                                                              or
                                                              pay 1 night plus tax
                                                          </li>
                                                          <li>
                                                              GUARANTEE: <br>
                                                              A credit card guarantee is required at time of
                                                              booking
                                                              unless otherwise stated in the rate description.
                                                          </li>
                                                          <li>
                                                              MEAL PLAN: <br>
                                                              Breakfast included
                                                          </li>
                                                          <li>
                                                              SERVICE CHARGE: <br>
                                                              Rates shown are inclusive of 10 percent Service
                                                              Charge
                                                              per room, per night. This will appear itemized in
                                                              your
                                                              shopping basket.
                                                          </li>
                                                          <li>
                                                              GOVERNMENT TAX: <br>
                                                              Rates shown are inclusive of 10 percent Government
                                                              Tax
                                                              per room, per night. This will appear itemized in
                                                              your
                                                              shopping basket.
                                                          </li>
                                                          <li>
                                                              GOVERNMENT TAX AND SERVICE CHARGE: <br>
                                                              Room rates do not include 11 percent Government Tax
                                                              and
                                                              10 percent Service Charge
                                                          </li>
                                                          <li>
                                                              PACKAGE GOVERNMENT TAX: <br>
                                                              Room rates do not include 10% Government Tax
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <a class="detail-policies" data-toggle="collapse" href="#half"
                                                  role="button" aria-expanded="false" aria-controls="half">Details
                                                  &
                                                  Policies</a>
                                              <div class="footer-sdse">
                                                  <p>€1.099 per night inclusive of all taxes and fees</p>
                                                  <a href="#policies4" data-toggle="collapse" role="button"
                                                      class="btn btn-dark  btn-block rounded-0">Select</a>
                                              </div>
                                          </div>
                                      </div>

                                  </div>
                              </div>
                              <div class="collapse policies p-4" id="policies3">
                                  <h3>Policies</h3>
                                  <div class="card card-body rounded-0">
                                      <p><b>Suite 1</b></p>
                                      <p><b>CANCEL</b> Cancel by 1pm local time 72 hours prior or pay 1 night for
                                          every 3 nights booked plus tax. No show charged full stay.</p>
                                      <p><b>GUARANTEE</b> A credit card guarantee is required at time of booking
                                          unless otherwise started in the rate description.</p>
                                      <p><b>MEAL PLAN</b> Breakfast included</p>
                                      <p><b>VAT TAX</b> Rates shown are inclusive of 10 percent VAT Tax per room,
                                          per
                                          night. this will appear itemized in your shopping basket.</p>
                                      <p><b>CITY TAX</b> Rates shown are inclusive of EUR 5 city Tax per person,
                                          per
                                          night for persons 8 years and older for up to 10 nights. Seasonal
                                          adjustments may apply. This will appear itemized in your shopping
                                          basket.
                                      </p>
                                  </div>
                                  <hr>
                                  <div class="booking-tearms">
                                      <h3>Booking teams and conditions</h3>
                                      <div class="custom-control custom-checkbox mb-5">
                                          <input type="checkbox" class="custom-control-input" id="customCheck3">
                                          <label class="custom-control-label" for="customCheck3">
                                              Your reservation is made subject to our
                                              <a href="#" class="underline"><b>Terms & Conditions</b>
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
                                  <div class="row">
                                      <div class="col-6">
                                          <a href="#" class="btn btn-dark  px-5 btn-backwizard">Go back</a>
                                      </div>
                                      <div class="col-6 text-right">
                                          <a href="#" class="btn btn-dark  px-5 btn-nextwizard">Confirm
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="collapse policies p-4" id="policies4">
                                  <h3>Policies</h3>
                                  <div class="card card-body rounded-0">
                                      <p><b>Suite 1</b></p>
                                      <p><b>CANCEL</b> Cancel by 1pm local time 72 hours prior or pay 1 night for
                                          every 3 nights booked plus tax. No show charged full stay.</p>
                                      <p><b>GUARANTEE</b> A credit card guarantee is required at time of booking
                                          unless otherwise started in the rate description.</p>
                                      <p><b>MEAL PLAN</b> Breakfast included</p>
                                      <p><b>VAT TAX</b> Rates shown are inclusive of 10 percent VAT Tax per room,
                                          per
                                          night. this will appear itemized in your shopping basket.</p>
                                      <p><b>CITY TAX</b> Rates shown are inclusive of EUR 5 city Tax per person,
                                          per
                                          night for persons 8 years and older for up to 10 nights. Seasonal
                                          adjustments may apply. This will appear itemized in your shopping
                                          basket.
                                      </p>
                                  </div>
                                  <hr>
                                  <div class="booking-tearms">
                                      <h3>Booking teams and conditions</h3>
                                      <div class="custom-control custom-checkbox mb-5">
                                          <input type="checkbox" class="custom-control-input" id="customCheck4">
                                          <label class="custom-control-label" for="customCheck4">
                                              Your reservation is made subject to our
                                              <a href="#" class="underline"><b>Terms & Conditions</b>
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
                                  <div class="row">
                                      <div class="col-6">
                                          <a href="#" class="btn btn-dark  px-5 btn-backwizard">Go back</a>
                                      </div>
                                      <div class="col-6 text-right">
                                          <a href="#" class="btn btn-dark  px-5 btn-nextwizard">Confirm
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                      <div class="col-lg-3 col-md-4">
                          <div class="reservation-summary">
                              <h4>YOUR RESERVATION</h4>
                              <p><b>Belmond Jimbaran Puri</b></p>
                              <table class="table table-borderless mb-0">
                                  <tr>
                                      <td class="px-0 py-1">Guests</td>
                                      <td class="px-0 py-1 text-right">2 Guests</td>
                                  </tr>
                                  <tr>
                                      <td class="px-0 py-1">Check-in</td>
                                      <td class="px-0 py-1 text-right">14 August 2020</td>
                                  </tr>
                                  <tr>
                                      <td class="px-0 py-1">Check-out</td>
                                      <td class="px-0 py-1 text-right">15 August 2020</td>
                                  </tr>
                                  <tr>
                                      <td class="px-0 py-1">Suites</td>
                                      <td class="px-0 py-1 text-right">Pavilion suite</td>
                                  </tr>
                              </table>
                          </div>
                          <div class="reservation-total">
                              <table class="table table-borderless mb-0">
                                  <tr>
                                      <td class="px-0 py-1">Total</td>
                                      <td class="px-0 py-1 text-right"></td>
                                  </tr>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div id="step-3" class="tab-pane" role="tabpanel">
              <div class="sidebar-scroller is-reserve">
                  <div class="row">
                      <div class="col-lg-9 col-md-8">
                          <div class="row align-items-center mb-5">
                              <div class="col-6">
                                  <h3 class="mb-0 d-flex align-items-center">
                                      <a href="#" class="backwizard btn-backwizard">
                                          <i class="ico ico-back"></i>
                                      </a>
                                      Add additional services
                                  </h3>
                              </div>
                              <div class="col-6 text-right">
                                  <a href="#" class="btn btn-dark  rounded-0 px-4 btn-nextwizard">Continue</a>
                              </div>
                          </div>
                          <hr class="mb-0">
                          <div class="accordion" id="accordionExample">
                              <div class="card">
                                  <div class="card-header" id="headingOne">
                                      <h2 class="mb-0">
                                          <button class="btn btn-link btn-block text-left" type="button"
                                              data-toggle="collapse" data-target="#transfers" aria-expanded="true"
                                              aria-controls="transfers">
                                              Transfers
                                              <i class="fa fa-plus"></i>
                                              <i class="fa fa-minus" style="display: none"></i>
                                          </button>
                                      </h2>
                                  </div>
                                  <div id="transfers" class="collapse additional-collapse"
                                      aria-labelledby="headingOne" data-parent="#accordionExample">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">ONE WAY
                                                                  AIRPORT
                                                                  TRANSFER</h4>
                                                              <p class="mb-4">
                                                                  Transfer to or from Ngurah Rai International
                                                                  Airport
                                                                  by
                                                                  private car. Suitable for up to four guests. Tax
                                                                  and
                                                                  service
                                                                  charge are not included. Price shown is for up
                                                                  to 4
                                                                  guests.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>

                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">ROUNDTRIP
                                                                  AIRPORT
                                                                  TRANSFER</h4>
                                                              <p class="mb-4">
                                                                  Relax with transfers to and from Ngurah Rai
                                                                  International
                                                                  Airport by private car. Suitable for up to four
                                                                  guests.
                                                                  Tax
                                                                  and service charge are not included. Price shown
                                                                  is
                                                                  for
                                                                  up
                                                                  to 4 guests.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="card">
                                  <div class="card-header" id="headingTwo">
                                      <h2 class="mb-0">
                                          <button class="btn btn-link btn-block text-left collapsed" type="button"
                                              data-toggle="collapse" data-target="#inroom-amenities"
                                              aria-expanded="false" aria-controls="inroom-amenities">
                                              In-Room Amenities
                                              <i class="fa fa-plus"></i>
                                              <i class="fa fa-minus" style="display: none"></i>
                                          </button>
                                      </h2>

                                  </div>
                                  <div id="inroom-amenities" class="collapse additional-collapse"
                                      aria-labelledby="headingTwo" data-parent="#accordionExample">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">BOTTLE OF
                                                                  ROSE
                                                                  BALINESE WINE</h4>
                                                              <p class="mb-4">
                                                                  Find a bottle of sparkling Balinese rosé in your
                                                                  room,
                                                                  awaiting your arrival.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">BALINESE
                                                                  ORNAMENTAL BAMBOO POLE</h4>
                                                              <p class="mb-4">
                                                                  Delight someone special with this unique
                                                                  Balinese
                                                                  handcrafted penjor, a wonderful souvenir.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">ISLAND
                                                                  TROPICAL
                                                                  AMENITY</h4>
                                                              <p class="mb-4">
                                                                  Step into your room and discover a true taste of
                                                                  Bali.
                                                                  This
                                                                  welcome platter includes fresh coconuts,
                                                                  seasonal
                                                                  fruit
                                                                  and
                                                                  assorted local desserts.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="card">
                                  <div class="card-header" id="headingThree">
                                      <h2 class="mb-0">
                                          <button class="btn btn-link btn-block text-left collapsed" type="button"
                                              data-toggle="collapse" data-target="#spa-service"
                                              aria-expanded="false" aria-controls="spa-service">
                                              Spa Services
                                              <i class="fa fa-plus"></i>
                                              <i class="fa fa-minus" style="display: none"></i>
                                          </button>
                                      </h2>

                                  </div>
                                  <div id="spa-service" class="collapse additional-collapse"
                                      aria-labelledby="headingThree" data-parent="#accordionExample">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">
                                                                  TRADITIONAL BALINESE MASSAGE
                                                              </h4>
                                                              <p class="mb-4">
                                                                  Relieve tension with a 60-minute traditional
                                                                  massage,
                                                                  combining long rhythmic strokes with acupressure
                                                                  and
                                                                  reflexology techniques. Please Note: This is a
                                                                  request
                                                                  and not a booking, our spa team will contact you
                                                                  to
                                                                  confirm your desired appointment. Price shown is
                                                                  per
                                                                  treatment, per person.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">
                                                                  ABHYANGA TREATMENT
                                                              </h4>
                                                              <p class="mb-4">
                                                                  Achieve inner harmony with this 60-minute
                                                                  massage
                                                                  ritual. Rhythmic pressure applied with herbal
                                                                  oils
                                                                  banishes toxins and impurities while boosting
                                                                  circulation. Please Note: This is a request and
                                                                  not
                                                                  a
                                                                  booking, our spa team will contact you to
                                                                  confirm
                                                                  your
                                                                  desired appointment. Price shown is per
                                                                  treatment,
                                                                  per
                                                                  person.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">
                                                                  REFLEXOLOGY FOOT MASSAGE
                                                              </h4>
                                                              <p class="mb-4">
                                                                  This 60-minute ancient holistic therapy applies
                                                                  gentle
                                                                  pressure to points on the feet – as blissful as
                                                                  it
                                                                  is
                                                                  beneficial. Please Note: This is a request and
                                                                  not a
                                                                  booking, our spa team will contact you to
                                                                  confirm
                                                                  your
                                                                  desired appointment. Price shown is per
                                                                  treatment,
                                                                  per
                                                                  person.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="card">
                                  <div class="card-header" id="headingfour">
                                      <h2 class="mb-0">
                                          <button class="btn btn-link btn-block text-left collapsed" type="button"
                                              data-toggle="collapse" data-target="#experiences"
                                              aria-expanded="false" aria-controls="experiences">
                                              Experiences
                                              <i class="fa fa-plus"></i>
                                              <i class="fa fa-minus" style="display: none"></i>
                                          </button>
                                      </h2>

                                  </div>
                                  <div id="experiences" class="collapse additional-collapse"
                                      aria-labelledby="headingfour" data-parent="#accordionExample">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">
                                                                  TRADITIONAL BALINESE MASSAGE
                                                              </h4>
                                                              <p class="mb-4">
                                                                  Relieve tension with a 60-minute traditional
                                                                  massage,
                                                                  combining long rhythmic strokes with acupressure
                                                                  and
                                                                  reflexology techniques. Please Note: This is a
                                                                  request
                                                                  and not a booking, our spa team will contact you
                                                                  to
                                                                  confirm your desired appointment. Price shown is
                                                                  per
                                                                  treatment, per person.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">
                                                                  ABHYANGA TREATMENT
                                                              </h4>
                                                              <p class="mb-4">
                                                                  Achieve inner harmony with this 60-minute
                                                                  massage
                                                                  ritual. Rhythmic pressure applied with herbal
                                                                  oils
                                                                  banishes toxins and impurities while boosting
                                                                  circulation. Please Note: This is a request and
                                                                  not
                                                                  a
                                                                  booking, our spa team will contact you to
                                                                  confirm
                                                                  your
                                                                  desired appointment. Price shown is per
                                                                  treatment,
                                                                  per
                                                                  person.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">
                                                                  REFLEXOLOGY FOOT MASSAGE
                                                              </h4>
                                                              <p class="mb-4">
                                                                  This 60-minute ancient holistic therapy applies
                                                                  gentle
                                                                  pressure to points on the feet – as blissful as
                                                                  it
                                                                  is
                                                                  beneficial. Please Note: This is a request and
                                                                  not a
                                                                  booking, our spa team will contact you to
                                                                  confirm
                                                                  your
                                                                  desired appointment. Price shown is per
                                                                  treatment,
                                                                  per
                                                                  person.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">
                                                                  ABHYANGA TREATMENT
                                                              </h4>
                                                              <p class="mb-4">
                                                                  Achieve inner harmony with this 60-minute
                                                                  massage
                                                                  ritual. Rhythmic pressure applied with herbal
                                                                  oils
                                                                  banishes toxins and impurities while boosting
                                                                  circulation. Please Note: This is a request and
                                                                  not
                                                                  a
                                                                  booking, our spa team will contact you to
                                                                  confirm
                                                                  your
                                                                  desired appointment. Price shown is per
                                                                  treatment,
                                                                  per
                                                                  person.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">
                                                                  REFLEXOLOGY FOOT MASSAGE
                                                              </h4>
                                                              <p class="mb-4">
                                                                  This 60-minute ancient holistic therapy applies
                                                                  gentle
                                                                  pressure to points on the feet – as blissful as
                                                                  it
                                                                  is
                                                                  beneficial. Please Note: This is a request and
                                                                  not a
                                                                  booking, our spa team will contact you to
                                                                  confirm
                                                                  your
                                                                  desired appointment. Price shown is per
                                                                  treatment,
                                                                  per
                                                                  person.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">
                                                                  ABHYANGA TREATMENT
                                                              </h4>
                                                              <p class="mb-4">
                                                                  Achieve inner harmony with this 60-minute
                                                                  massage
                                                                  ritual. Rhythmic pressure applied with herbal
                                                                  oils
                                                                  banishes toxins and impurities while boosting
                                                                  circulation. Please Note: This is a request and
                                                                  not
                                                                  a
                                                                  booking, our spa team will contact you to
                                                                  confirm
                                                                  your
                                                                  desired appointment. Price shown is per
                                                                  treatment,
                                                                  per
                                                                  person.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-4 col-md-6 mb-4">
                                                  <div class="additional-list p-0">
                                                      <div class="inner-wrapper mb-3">
                                                          <div class="pr-lst result-grid">
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                              <div>
                                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                                      class="w-100" alt="">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="p-4 inner-warppa">
                                                          <div class="add-txt">
                                                              <h4 class="mb-4 added">Added to booking</h4>
                                                              <h4 class="mb-4 title-additional-list">
                                                                  REFLEXOLOGY FOOT MASSAGE
                                                              </h4>
                                                              <p class="mb-4">
                                                                  This 60-minute ancient holistic therapy applies
                                                                  gentle
                                                                  pressure to points on the feet – as blissful as
                                                                  it
                                                                  is
                                                                  beneficial. Please Note: This is a request and
                                                                  not a
                                                                  booking, our spa team will contact you to
                                                                  confirm
                                                                  your
                                                                  desired appointment. Price shown is per
                                                                  treatment,
                                                                  per
                                                                  person.
                                                              </p>
                                                          </div>
                                                          <div class="booking-qty">
                                                              <p class="qty-label">Quantity</p>
                                                              <div class="qty-button mb-4">
                                                                  <button type="button" id="sub"
                                                                      class="sub btn-qty">-</button>
                                                                  <input class="form-qty" type="number" id="1"
                                                                      value="1" min="1" />
                                                                  <button type="button" id="add"
                                                                      class="add btn-qty">+</button>
                                                              </div>
                                                              <p class="qty-label">€16.00</p>
                                                          </div>
                                                          <div class="confirm-qty">
                                                              <i class="fa fa-check" aria-hidden="true"></i>
                                                          </div>

                                                          <a href="#"
                                                              class="btn btn-dark rounded-0 booking-select">Select</a>
                                                          <a href="#"
                                                              class="btn-red-link mt-2 remove-booking">Remove
                                                              from booking</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-4">
                          <div class="reservation-summary">
                              <h4>YOUR RESERVATION</h4>
                              <p><b>Belmond Jimbaran Puri</b></p>
                              <table class="table table-borderless mb-0">
                                  <tr>
                                      <td class="px-0 py-1">Guests</td>
                                      <td class="px-0 py-1 text-right">2 Guests</td>
                                  </tr>
                                  <tr>
                                      <td class="px-0 py-1">Check-in</td>
                                      <td class="px-0 py-1 text-right">15 Aug 2020</td>
                                  </tr>
                                  <tr>
                                      <td class="px-0 py-1">Check-out</td>
                                      <td class="px-0 py-1 text-right">16 Aug 2020</td>
                                  </tr>
                                  <tr>
                                      <td class="px-0 py-1">Suites</td>
                                      <td class="px-0 py-1 text-right">Pavilion suite</td>
                                  </tr>
                              </table>
                          </div>
                          <div class="reservation-summary section-shadow">
                              <div class="row align-items-center mb-3">
                                  <div class="col-lg-3 pr-0 asd-sad">
                                      <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                          class="img-full" alt="">
                                  </div>
                                  <div class="col-lg-9">
                                      <h4>SUITE 1</h4>
                                      <p class="mb-0"><b>Superior Double Room Garden or Village View </b></p>
                                  </div>
                              </div>
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
                                  <tr>
                                      <td class="px-0 py-1" colspan="2">
                                          <a href="#" class="underline color-grey" type="button"
                                              data-toggle="modal" data-target="#priceModal"><i>Details and
                                                  conditions</i></a>
                                      </td>
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
                      <div class="col-9">
                          <div class="text-right mb-4">
                              <a href="#" class="btn btn-dark  rounded-0 px-4 btn-nextwizard">Continue</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div id="step-4" class="tab-pane" role="tabpanel">
              <div class="sidebar-scroller is-reserve">
                  <div class="row">
                      <div class="col-lg-9 col-md-8">
                          <h3 class="mb-0 d-flex align-items-center">
                              <a href="#" class="backwizard btn-backwizard">
                                  <i class="ico ico-back"></i>
                              </a>
                              Payment Details
                          </h3>
                          <hr class="mb-4">
                          <h4 class="mb-4">Your details <span class="small color-grey">(*Required)</span></h4>
                          <div class="row">
                              <div class="col-lg-9">
                                  <div class="row">
                                      <div class="col-6 form-group">
                                          <label>Title<sup>*</sup></label>
                                          <select class="wide">
                                              <option value="">Mr</option>
                                              <option value="">Mrs</option>
                                              <option value="">Miss</option>
                                              <option value="">Ms</option>
                                              <option value="">Dr</option>
                                              <option value="">Prof</option>
                                          </select>
                                      </div>
                                      <div class="col-6 form-group">
                                          <label>First name<sup>*</sup></label>
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-6 form-group">
                                          <label>Last name<sup>*</sup></label>
                                          <input type="text" class="form-control">
                                      </div>
                                      <div class="col-6 form-group">
                                          <label>Email<sup>*</sup></label>
                                          <input type="email" class="form-control">
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-6 form-group">
                                          <label>Telephone<sup>*</sup></label>
                                          <input type="text" class="form-control">
                                      </div>
                                      <div class="col-6 form-group">
                                          <label>Country/Region<sup>*</sup></label>
                                          <select class="select-country">
                                              <option value="">Please select...</option>
                                              <option value="AF">Afghanistan</option>
                                              <option value="AX">Aland Islands</option>
                                              <option value="AL">Albania</option>
                                              <option value="DZ">Algeria</option>
                                              <option value="AS">American Samoa</option>
                                              <option value="AD">Andorra</option>
                                              <option value="AO">Angola</option>
                                              <option value="AI">Anguillia</option>
                                              <option value="AQ">Antarctica</option>
                                              <option value="AG">Antigua and Barbuda</option>
                                              <option value="AR">Argentina</option>
                                              <option value="AM">Armenia</option>
                                              <option value="AW">Aruba</option>
                                              <option value="AU">Australia</option>
                                              <option value="AT">Austria</option>
                                              <option value="AZ">Azerbaijan</option>
                                              <option value="BS">Bahamas</option>
                                              <option value="BH">Bahrain</option>
                                              <option value="BD">Bangladesh</option>
                                              <option value="BB">Barbados</option>
                                              <option value="BY">Belarus</option>
                                              <option value="BE">Belgium</option>
                                              <option value="BZ">Belize</option>
                                              <option value="BJ">Benin</option>
                                              <option value="BM">Bermuda</option>
                                              <option value="BT">Bhutan</option>
                                              <option value="BO">Bolivia</option>
                                              <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                              <option value="BA">Bosnia and Herzegovina</option>
                                              <option value="BW">Botswana</option>
                                              <option value="BV">Bouvet Island</option>
                                              <option value="BR">Brazil</option>
                                              <option value="IO">British Indian Ocean Terriory</option>
                                              <option value="VG">British Virgin Islands</option>
                                              <option value="BN">Brunei Darussalam</option>
                                              <option value="BG">Bulgaria</option>
                                              <option value="BF">Burkina Faso</option>
                                              <option value="BI">Burundi</option>
                                              <option value="KH">Cambodia</option>
                                              <option value="CM">Cameroon</option>
                                              <option value="CA">Canada</option>
                                              <option value="CV">Cape Verde</option>
                                              <option value="KY">Cayman Islands</option>
                                              <option value="CF">Central African Republic</option>
                                              <option value="TD">Chad</option>
                                              <option value="CL">Chile</option>
                                              <option value="CN">China</option>
                                              <option value="CX">Christmas Island</option>
                                              <option value="CC">Cocos (Keeling) Islands</option>
                                              <option value="CO">Colombia</option>
                                              <option value="CO">Comoros</option>
                                              <option value="CG">Congo (Brazzaville)</option>
                                              <option value="CD">Congo, Democratic Republic of the</option>
                                              <option value="CK">Cook Islands</option>
                                              <option value="CR">Costa Rica</option>
                                              <option value="HR">Croatia</option>
                                              <option value="CU">Cuba</option>
                                              <option value="CW">Curaçao</option>
                                              <option value="CY">Cyprus</option>
                                              <option value="CZ">Czech Republic</option>
                                              <option value="CI">Côte d'Ivoire</option>
                                              <option value="DK">Denmark</option>
                                              <option value="DJ">Djibouti</option>
                                              <option value="DM">Dominica</option>
                                              <option value="DO">Dominican Republic</option>
                                              <option value="EC">Ecuador</option>
                                              <option value="EG">Egypt</option>
                                              <option value="SV">El Salvador</option>
                                              <option value="GQ">Equatorial Guinea</option>
                                              <option value="ER">Eritrea</option>
                                              <option value="EE">Estonia</option>
                                              <option value="ET">Ethiopia</option>
                                              <option value="FK">Falkland Islands (Malvinas)</option>
                                              <option value="FO">Faroe Islands</option>
                                              <option value="FJ">Fiji</option>
                                              <option value="FI">Finland</option>
                                              <option value="FR">France</option>
                                              <option value="GF">French Guiana</option>
                                              <option value="PF">French Polynesia</option>
                                              <option value="TF">French Southern Territories</option>
                                              <option value="GA">Gabon</option>
                                              <option value="GM">Gambia</option>
                                              <option value="GE">Georgia</option>
                                              <option value="DE">Germany</option>
                                              <option value="GH">Ghana</option>
                                              <option value="GI">Gibraltar</option>
                                              <option value="GR">Greece</option>
                                              <option value="GL">Greenland</option>
                                              <option value="GD">Grenada</option>
                                              <option value="GP">Guadeloupe</option>
                                              <option value="GU">Guam</option>
                                              <option value="GT">Guatemala</option>
                                              <option value="GG">Guernsey</option>
                                              <option value="GN">Guinea</option>
                                              <option value="GW">Guinea-Bissau</option>
                                              <option value="GY">Guyana</option>
                                              <option value="HT">Haiti</option>
                                              <option value="HM">Heard Island and Mcdonald Islands</option>
                                              <option value="VA">Holy See (Vatican City State)</option>
                                              <option value="HN">Honduras</option>
                                              <option value="HK">Hong Kong</option>
                                              <option value="HU">Hungary</option>
                                              <option value="IS">Iceland</option>
                                              <option value="IN">India</option>
                                              <option value="ID" selected="">Indonesia</option>
                                              <option value="IQ">Iraq</option>
                                              <option value="IE">Ireland</option>
                                              <option value="IM">Isle of Man</option>
                                              <option value="IL">Israel</option>
                                              <option value="IT">Italy</option>
                                              <option value="JM">Jamaica</option>
                                              <option value="JP">Japan</option>
                                              <option value="JE">Jersey</option>
                                              <option value="JO">Jordan</option>
                                              <option value="KZ">Kazakhstan</option>
                                              <option value="KE">Kenya</option>
                                              <option value="KI">Kiribati</option>
                                              <option value="KR">Korea, Republic of</option>
                                              <option value="KW">Kuwait</option>
                                              <option value="KG">Kyrgyzstan</option>
                                              <option value="LA">Lao PDR</option>
                                              <option value="LV">Latvia</option>
                                              <option value="LB">Lebanon</option>
                                              <option value="LS">Lesotho</option>
                                              <option value="LR">Liberia</option>
                                              <option value="LY">Libya</option>
                                              <option value="LI">Liechtenstein</option>
                                              <option value="LT">Lithuania</option>
                                              <option value="LU">Luxembourg</option>
                                              <option value="MO">Macao</option>
                                              <option value="MK">Macedonia, Republic of</option>
                                              <option value="MG">Madagascar</option>
                                              <option value="MW">Malawi</option>
                                              <option value="MY">Malaysia</option>
                                              <option value="MV">Maldives</option>
                                              <option value="ML">Mali</option>
                                              <option value="MT">Malta</option>
                                              <option value="MH">Marshall Islands</option>
                                              <option value="MQ">Martinique</option>
                                              <option value="MR">Mauritania</option>
                                              <option value="MU">Mauritius</option>
                                              <option value="YT">Mayotte</option>
                                              <option value="MX">Mexico</option>
                                              <option value="FM">Micronesia, Federated States of</option>
                                              <option value="MD">Moldova</option>
                                              <option value="MC">Monaco</option>
                                              <option value="MN">Mongolia</option>
                                              <option value="ME">Montenegro</option>
                                              <option value="MS">Montserrat</option>
                                              <option value="MA">Morocco</option>
                                              <option value="MZ">Mozambique</option>
                                              <option value="MM">Myanmar</option>
                                              <option value="NA">Namibia</option>
                                              <option value="NR">Nauru</option>
                                              <option value="NP">Nepal</option>
                                              <option value="NL">Netherlands</option>
                                              <option value="AN">Netherlands Antilles</option>
                                              <option value="NC">New Caledonia</option>
                                              <option value="NZ">New Zealand</option>
                                              <option value="NI">Nicaragua</option>
                                              <option value="NE">Niger</option>
                                              <option value="NG">Nigeria</option>
                                              <option value="NU">Niue</option>
                                              <option value="NF">Norfolk Island</option>
                                              <option value="MP">Northern Mariana Islands</option>
                                              <option value="NO">Norway</option>
                                              <option value="OM">Oman</option>
                                              <option value="PK">Pakistan</option>
                                              <option value="PW">Palau</option>
                                              <option value="PS">Palestinian Territory, Occupied</option>
                                              <option value="PA">Panama</option>
                                              <option value="PG">Papua New Guinea</option>
                                              <option value="PY">Paraguay</option>
                                              <option value="PE">Peru</option>
                                              <option value="PH">Philippines</option>
                                              <option value="PN">Pitcairn</option>
                                              <option value="PL">Poland</option>
                                              <option value="PT">Portugal</option>
                                              <option value="PR">Puerto Rico</option>
                                              <option value="QA">Qatar</option>
                                              <option value="RO">Romania</option>
                                              <option value="RU">Russian Federation</option>
                                              <option value="RW">Rwanda</option>
                                              <option value="RE">Réunion</option>
                                              <option value="SH">Saint Helena</option>
                                              <option value="KN">Saint Kitts and Nevis</option>
                                              <option value="LC">Saint Lucia</option>
                                              <option value="PM">Saint Pierre and Miquelon</option>
                                              <option value="VC">Saint Vincent and Grenadines</option>
                                              <option value="BL">Saint-Barthélemy</option>
                                              <option value="MF">Saint-Martin (French part)</option>
                                              <option value="WS">Samoa</option>
                                              <option value="SM">San Marino</option>
                                              <option value="ST">Sao Tome and Principe</option>
                                              <option value="SA">Saudi Arabia</option>
                                              <option value="SN">Senegal</option>
                                              <option value="RS">Serbia</option>
                                              <option value="SC">Seychelles</option>
                                              <option value="SL">Sierra Leone</option>
                                              <option value="SG">Singapore</option>
                                              <option value="SX">Sint Maarten (Dutch part)</option>
                                              <option value="SK">Slovakia</option>
                                              <option value="SI">Slovenia</option>
                                              <option value="SB">Solomon Islands</option>
                                              <option value="SO">Somalia</option>
                                              <option value="ZA">South Africa</option>
                                              <option value="GS">South Georgia and the South Sandwich Islands
                                              </option>
                                              <option value="SS">South Sudan</option>
                                              <option value="ES">Spain</option>
                                              <option value="LK">Sri Lanka</option>
                                              <option value="SD">Sudan</option>
                                              <option value="SR">Suriname</option>
                                              <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                              <option value="SZ">Swaziland</option>
                                              <option value="SE">Sweden</option>
                                              <option value="CH">Switzerland</option>
                                              <option value="TW">Taiwan</option>
                                              <option value="TJ">Tajikistan</option>
                                              <option value="TZ">Tanzania, United Republic of</option>
                                              <option value="TH">Thailand</option>
                                              <option value="TL">Timor-Leste</option>
                                              <option value="TG">Togo</option>
                                              <option value="TK">Tokelau</option>
                                              <option value="TO">Tonga</option>
                                              <option value="TT">Trinidad and Tobago</option>
                                              <option value="TN">Tunisia</option>
                                              <option value="TR">Turkey</option>
                                              <option value="TM">Turkmenistan</option>
                                              <option value="TC">Turks and Caicos Islands</option>
                                              <option value="TV">Tuvalu</option>
                                              <option value="UG">Uganda</option>
                                              <option value="UA">Ukraine</option>
                                              <option value="AE">United Arab Emirates</option>
                                              <option value="GB">United Kingdom</option>
                                              <option value="UM">United States Minor Outlying Islands</option>
                                              <option value="US">United States of America</option>
                                              <option value="UY">Uruguay</option>
                                              <option value="UZ">Uzbekistan</option>
                                              <option value="VU">Vanuatu</option>
                                              <option value="VE">Venezuela (Bolivarian Republic of)</option>
                                              <option value="VN">Vietnam</option>
                                              <option value="VI">Virgin Islands, US</option>
                                              <option value="WF">Wallis and Futuna Islands</option>
                                              <option value="EH">Western Sahara</option>
                                              <option value="YE">Yemen</option>
                                              <option value="ZM">Zambia</option>
                                              <option value="ZW">Zimbabwe</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-6 form-group">
                                          <label>Address 1<sup>*</sup></label>
                                          <input type="text" class="form-control">
                                      </div>
                                      <div class="col-6 form-group">
                                          <label>Address 2</label>
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-6 form-group">
                                          <label>City/Town<sup>*</sup></label>
                                          <input type="text" class="form-control">
                                      </div>
                                      <div class="col-6 form-group">
                                          <label>County/State</label>
                                          <select class="wide">
                                              <option value="">NA</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-6 form-group">
                                          <label>Zip/Post code<sup>*</sup></label>
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <hr class="my-5">
                          <div class="row">
                              <div class="col-lg-9">
                                  <h4 class="mb-4"><i class="fa fa-lock" aria-hidden="true"></i> Payment details
                                      <span class="small color-grey">(*Required)</span></h4>
                                  <p>Credit card details are required to guarantee your reservation.</p>

                                  <div class="row align-items-center">
                                      <div class="col-4 form-group">
                                          <label>Credit/Debit card: </label>
                                      </div>
                                      <div class="col-8 form-group">
                                          <select class="wide">
                                              <option value="">Visa</option>
                                              <option value="">Master Card</option>
                                              <option value="">American Express</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="row align-items-center">
                                      <div class="col-4 form-group">
                                          <label>Card number: </label>
                                      </div>
                                      <div class="col-8 form-group">
                                          <input type="text" class="form-control"
                                              placeholder="****_****_****_****">
                                      </div>
                                  </div>
                                  <div class="row align-items-center">
                                      <div class="col-4 form-group">
                                          <label>Expiration: </label>
                                      </div>
                                      <div class="col-4 form-group">
                                          <select class="wide">
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
                                      <div class="col-4 form-group">
                                          <select class="wide">
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
                                      <div class="col-4">
                                          <label>Name on card: </label>
                                      </div>
                                      <div class="col-8">
                                          <input type="text" class="form-control" placeholder="Name on card">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <hr class="my-5">
                          <div class="row">
                              <div class="col-lg-9">
                                  <h4 class="mb-4">Special requirements <span
                                          class="small color-grey">(*Required)</span></h4>
                                  <div class="form-group">
                                      <textarea class="form-control" name="" id="" cols="30" rows="10"
                                          placeholder="Type your requirement here"></textarea>
                                  </div>
                              </div>
                          </div>
                          <hr class="my-5">
                          <div class="policies">
                              <h3>Policies</h3>
                              <div class="card card-body rounded-0">
                                  <p><b>Suite 1</b></p>
                                  <p><b>CANCEL</b> Cancel by 1pm local time 72 hours prior or pay 1 night for
                                      every 3 nights booked plus tax. No show charged full stay.</p>
                                  <p><b>GUARANTEE</b> A credit card guarantee is required at time of booking
                                      unless otherwise started in the rate description.</p>
                                  <p><b>MEAL PLAN</b> Breakfast included</p>
                                  <p><b>VAT TAX</b> Rates shown are inclusive of 10 percent VAT Tax per room, per
                                      night. this will appear itemized in your shopping basket.</p>
                                  <p><b>CITY TAX</b> Rates shown are inclusive of EUR 5 city Tax per person, per
                                      night for persons 8 years and older for up to 10 nights. Seasonal
                                      adjustments may apply. This will appear itemized in your shopping basket.
                                  </p>
                              </div>
                          </div>
                          <hr class="my-5">
                          <div class="booking-tearms">
                              <h3>Booking teams and conditions</h3>
                              <div class="custom-control custom-checkbox mb-5">
                                  <input type="checkbox" class="custom-control-input" id="policiessd">
                                  <label class="custom-control-label" for="policiessd">
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
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-4">
                          <div class="reservation-summary">
                              <h4>YOUR RESERVATION</h4>
                              <p><b>Belmond Jimbaran Puri</b></p>
                              <table class="table table-borderless mb-0">
                                  <tr>
                                      <td class="px-0 py-1">Guests</td>
                                      <td class="px-0 py-1 text-right">2 Guests</td>
                                  </tr>
                                  <tr>
                                      <td class="px-0 py-1">Check-in</td>
                                      <td class="px-0 py-1 text-right">15 Aug 2020</td>
                                  </tr>
                                  <tr>
                                      <td class="px-0 py-1">Check-out</td>
                                      <td class="px-0 py-1 text-right">16 Aug 2020</td>
                                  </tr>
                                  <tr>
                                      <td class="px-0 py-1">Suites</td>
                                      <td class="px-0 py-1 text-right">Pavilion suite</td>
                                  </tr>
                              </table>
                          </div>
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
                      <div class="col-9">
                          <div class="row mt-5 mb-5">
                              <div class="col-6">
                                  <a href="#" class="btn btn-dark  px-5 btn-backwizard">Go back</a>
                              </div>
                              <div class="col-6 text-right">
                                  <a href="#" class="btn btn-dark  px-5 btn-nextwizard">Confirm booking</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div id="step-5" class="tab-pane" role="tabpanel">
              <div class="sidebar-scroller is-reserve">
                  <div class="row">
                      <div class="col-xl-8 col-lg-12">
                          <div class="row">
                              <div class="col-7">
                                  <div class="bg-grey px-3 py-2 mb-3">
                                      <h4>Your booking at <b>Superior Double Room Garden or Village View </b> in
                                          Limone sul Garda, Italy</h4>
                                      <p class="mb-0">Confirm number: 12313123122 - PIN code: 4681 - Unlink from
                                          your
                                          business account</p>
                                  </div>
                                  <div class="inner-wrapper mb-3">
                                      <div class="pr-lst result-grid">
                                          <div>
                                              <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100"
                                                  alt="">
                                          </div>
                                          <div>
                                              <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100"
                                                  alt="">
                                          </div>
                                          <div>
                                              <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100"
                                                  alt="">
                                          </div>
                                      </div>
                                      <a href="#" class="dtl-link">
                                          <i class="ico ico-diamon diamon-label fav-button"></i>
                                      </a>
                                  </div>
                                  <div class="reservation-summary">
                                      <h4>YOUR RESERVATION</h4>
                                      <p><b>Belmond Jimbaran Puri</b></p>
                                      <table class="table table-borderless mb-0">
                                          <tr>
                                              <td class="px-0 py-1">Guests</td>
                                              <td class="px-0 py-1 text-right">2 Guests</td>
                                          </tr>
                                          <tr>
                                              <td class="px-0 py-1">Check-in</td>
                                              <td class="px-0 py-1 text-right">15 Aug 2020</td>
                                          </tr>
                                          <tr>
                                              <td class="px-0 py-1">Check-out</td>
                                              <td class="px-0 py-1 text-right">16 Aug 2020</td>
                                          </tr>
                                          <tr>
                                              <td class="px-0 py-1">Suites</td>
                                              <td class="px-0 py-1 text-right">Pavilion suite</td>
                                          </tr>
                                      </table>
                                  </div>
                                  <div class="reservation-summary section-shadow">
                                      <div class="row align-items-center mb-3">
                                          <div class="col-3 pr-0">
                                              <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                                  class="img-full" alt="">
                                          </div>
                                          <div class="col-9">
                                              <h4>SUITE 1</h4>
                                              <p class="mb-0"><b>Superior Double Room Garden or Village View </b>
                                              </p>
                                          </div>
                                      </div>
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
                                          <tr>
                                              <td class="px-0 py-1" colspan="2">
                                                  <a href="#" class="underline color-grey" type="button"
                                                      data-toggle="modal" data-target="#priceModal"><i>Details and
                                                          conditions</i></a>
                                              </td>
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
                                  <div class="policies" id="policies">
                                      <h3>Policies</h3>
                                      <div class="card card-body rounded-0">
                                          <p><b>Suite 1</b></p>
                                          <p><b>CANCEL</b> Cancel by 1pm local time 72 hours prior or pay 1 night
                                              for
                                              every 3 nights booked plus tax. No show charged full stay.</p>
                                          <p><b>GUARANTEE</b> A credit card guarantee is required at time of
                                              booking
                                              unless otherwise started in the rate description.</p>
                                          <p><b>MEAL PLAN</b> Breakfast included</p>
                                          <p><b>VAT TAX</b> Rates shown are inclusive of 10 percent VAT Tax per
                                              room,
                                              per
                                              night. this will appear itemized in your shopping basket.</p>
                                          <p><b>CITY TAX</b> Rates shown are inclusive of EUR 5 city Tax per
                                              person,
                                              per
                                              night for persons 8 years and older for up to 10 nights. Seasonal
                                              adjustments may apply. This will appear itemized in your shopping
                                              basket.
                                          </p>
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
                                                  languages <a href="#" class="underline"><b>here</b></a>), and
                                                  the
                                                  specific
                                                  payment tearms (deposit, tax and cancellation) set out above,
                                                  Please
                                                  check
                                                  this box to agrree to these tearms and proceed with your
                                                  booking. By
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
                                              <a href="#" class="btn btn-dark  px-5 btn-backwizard">Go back</a>
                                          </div>
                                          <div class="col-6 text-right">
                                              <a href="#" class="btn btn-dark  px-5 btn-nextwizard">Confirm
                                                  booking</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-5">
                                  <ul class="nav nav-step5 flex-column">
                                      <li class="nav-item">
                                          <a class="nav-link" href="#"><i class="fa fa-file-pdf-o"
                                                  aria-hidden="true"></i> Get a PDF for visa purposes <i
                                                  class="fa fa-chevron-right right-arrow"
                                                  aria-hidden="true"></i></a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="#"><i class="fa fa-print"
                                                  aria-hidden="true"></i>
                                              Print details <i class="fa fa-chevron-right right-arrow"
                                                  aria-hidden="true"></i></a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="#"><i class="fa fa-file"
                                                  aria-hidden="true"></i>
                                              Get receipt <i class="fa fa-chevron-right right-arrow"
                                                  aria-hidden="true"></i></a>
                                      </li>
                                  </ul>
                                  <div class="bg-grey p-1 mb-5"></div>
                                  <h4 class="mb-4">Getting there</h4>
                                  <p class="mb-1"><b>Address</b></p>
                                  <p>30 Antigua Avenue, Cape Town, Western Cape 7975, SOuth Africa</p>
                                  <ul class="nav nav-step5 flex-column mb-5">
                                      <li class="nav-item">
                                          <a class="nav-link" href="#"><i class="fa fa-files-o"
                                                  aria-hidden="true"></i> Copy address <i
                                                  class="fa fa-chevron-right right-arrow"
                                                  aria-hidden="true"></i></a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="#"><i class="fa fa-map-marker"
                                                  aria-hidden="true"></i>
                                              Get directions <i class="fa fa-chevron-right right-arrow"
                                                  aria-hidden="true"></i></a>
                                      </li>
                                  </ul>
                                  <div id="map"></div>
                              </div>

                          </div>
                      </div>
                      <div class="col-xl-4 col-lg-12">
                          <div class="row h-100">
                              <div class="col-5 h-100">
                                  <div class="bg-grey p-3 h-100">
                                      <ul class="nav nav-step5 flex-column">
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">
                                                  <div class="d-flex align-items-center">
                                                      <div class="w-100">
                                                          <p class="mb-0 month-nav">20. AUG.</p>
                                                          <p class="mb-0"><b>Dienstag</b></p>
                                                      </div class="w-100">
                                                      <div>
                                                          <i class="ico ico-car-i mr-0"></i>
                                                      </div>
                                                  </div>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">
                                                  <div class="d-flex align-items-center">
                                                      <div class="w-100">
                                                          <p class="mb-0 month-nav">21. AUG.</p>
                                                          <p class="mb-0"><b>Mittwoch</b></p>
                                                      </div class="w-100">

                                                  </div>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">
                                                  <div class="d-flex align-items-center">
                                                      <div class="w-100">
                                                          <p class="mb-0 month-nav">22. AUG.</p>
                                                          <p class="mb-0"><b>Donnerstag</b></p>
                                                      </div class="w-100">

                                                  </div>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">
                                                  <div class="d-flex align-items-center">
                                                      <div class="w-100">
                                                          <p class="mb-0 month-nav">23. AUG.</p>
                                                          <p class="mb-0"><b>Freitag</b></p>
                                                      </div class="w-100">

                                                  </div>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">
                                                  <div class="d-flex align-items-center">
                                                      <div class="w-100">
                                                          <p class="mb-0 month-nav">24. AUG.</p>
                                                          <p class="mb-0"><b>Samstag</b></p>
                                                      </div class="w-100">

                                                  </div>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">
                                                  <div class="d-flex align-items-center">
                                                      <div class="w-100">
                                                          <p class="mb-0 month-nav">25. AUG.</p>
                                                          <p class="mb-0"><b>Sonntag</b></p>
                                                      </div class="w-100">

                                                  </div>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">
                                                  <div class="d-flex align-items-center">
                                                      <div class="w-100">
                                                          <p class="mb-0 month-nav">26. AUG.</p>
                                                          <p class="mb-0"><b>Montag</b></p>
                                                      </div class="w-100">
                                                      <div>
                                                          <i class="ico ico-spa-i mr-0"></i>
                                                      </div>
                                                  </div>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">
                                                  <div class="d-flex align-items-center">
                                                      <div class="w-100">
                                                          <p class="mb-0 month-nav">27. AUG.</p>
                                                          <p class="mb-0"><b>Dienstag</b></p>
                                                      </div>
                                                  </div>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">
                                                  <div class="d-flex align-items-center">
                                                      <div class="w-100">
                                                          <p class="mb-0 month-nav">28. AUG.</p>
                                                          <p class="mb-0"><b>Dienstag</b></p>
                                                      </div>
                                                  </div>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">
                                                  <div class="d-flex align-items-center">
                                                      <div class="w-100">
                                                          <p class="mb-0 month-nav">29. AUG.</p>
                                                          <p class="mb-0"><b>Donnerstag</b></p>
                                                      </div>
                                                  </div>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">
                                                  <div class="d-flex align-items-center">
                                                      <div class="w-100">
                                                          <p class="mb-0 month-nav">20. AUG.</p>
                                                          <p class="mb-0"><b>Freitag</b></p>
                                                      </div>
                                                      <div>
                                                          <i class="ico ico-car-i mr-0"></i>
                                                      </div>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="col-7">
                                  <h4 class="mb-4">Additional Services Summary</h4>
                                  <div class="additional-list h-auto p-0 mb-4">
                                      <div class="add-txt h-auto">
                                          <div class="inner-wrapper mb-3">
                                              <div class="pr-lst result-grid">
                                                  <div>
                                                      <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                          class="w-100" alt="">
                                                  </div>
                                                  <div>
                                                      <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                          class="w-100" alt="">
                                                  </div>
                                                  <div>
                                                      <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                          class="w-100" alt="">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4">
                                          <h4 class="mb-4">
                                              TRADITIONAL BALINESE MASSAGE
                                          </h4>
                                          <p class="mb-4">
                                              Relieve tension with a 60-minute traditional massage,
                                              combining long rhythmic strokes with acupressure and
                                              reflexology techniques. Please Note: This is a request
                                              and not a booking, our spa team will contact you to
                                              confirm your desired appointment. Price shown is per
                                              treatment, per person.
                                          </p>
                                          <div class="d-flex align-items-center mb-5">
                                              <div>
                                                  <i class="ico ico-spa-i w-0s0"></i>
                                              </div>
                                              <div class="w-100 text-left">
                                                  <p class="mb-1"><b>Confirmation code</b></p>
                                                  <p class="mb-0">HMAQSD891QSS</p>
                                              </div>
                                          </div>

                                          <a href="#" class="btn btn-dark btn-block rounded-0">Select</a>
                                      </div>
                                  </div>
                                  <div class="additional-list h-auto p-0 mb-4">
                                      <div class="add-txt h-auto">
                                          <div class="inner-wrapper mb-3">
                                              <div class="pr-lst result-grid">
                                                  <div>
                                                      <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                          class="w-100" alt="">
                                                  </div>
                                                  <div>
                                                      <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                          class="w-100" alt="">
                                                  </div>
                                                  <div>
                                                      <img src="images/98d13b87078871.5dad9554e33ef.jpg"
                                                          class="w-100" alt="">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4">
                                          <h4 class="mb-4">
                                              TRADITIONAL BALINESE MASSAGE
                                          </h4>
                                          <p class="mb-4">
                                              Relieve tension with a 60-minute traditional massage,
                                              combining long rhythmic strokes with acupressure and
                                              reflexology techniques. Please Note: This is a request
                                              and not a booking, our spa team will contact you to
                                              confirm your desired appointment. Price shown is per
                                              treatment, per person.
                                          </p>
                                          <div class="d-flex align-items-center mb-5">
                                              <div>
                                                  <i class="ico ico-car-i w-0s0"></i>
                                              </div>
                                              <div class="w-100 text-left">
                                                  <p class="mb-1"><b>Confirmation code</b></p>
                                                  <p class="mb-0">HMAQSD891QSS</p>
                                              </div>
                                          </div>

                                          <a href="#" class="btn btn-dark btn-block rounded-0">Select</a>
                                      </div>
                                  </div>
                                  <a href="dashboard.html" class="btn btn-primary rounded-0 btn-lg btn-block">
                                      Confirm Booking
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="sidebar-main pb-0" id="suiteinfo">
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
      <div class="card mb-5">
          <div class="row suite-board-body rounded-0">
              <div class="col-lg-4 col-md-6 suite-price-feature">
                  <div class="suite-board-main">
                      <h4>Breakfast on the Amalfi Coast </h4>
                      <ul class="pl-3">
                          <li>Accommodation</li>
                          <li>Daily breakfast</li>
                      </ul>
                  </div>
                  <div class="suite-board-footer">
                      <div class="collapse" id="breakfas">
                          <div class="card card-body border-0">
                              <h4 class="mb-4">Details &amp; Policies</h4>
                              <ul class="text-left pl-3">
                                  <li>
                                      CANCEL: <br>
                                      Cancel by 12PM local time 24 hours prior to arrival or
                                      pay 1 night plus tax
                                  </li>
                                  <li>
                                      GUARANTEE: <br>
                                      A credit card guarantee is required at time of booking
                                      unless otherwise stated in the rate description.
                                  </li>
                                  <li>
                                      MEAL PLAN: <br>
                                      Breakfast included
                                  </li>
                                  <li>
                                      SERVICE CHARGE: <br>
                                      Rates shown are inclusive of 10 percent Service Charge
                                      per room, per night. This will appear itemized in your
                                      shopping basket.
                                  </li>
                                  <li>
                                      GOVERNMENT TAX: <br>
                                      Rates shown are inclusive of 10 percent Government Tax
                                      per room, per night. This will appear itemized in your
                                      shopping basket.
                                  </li>
                                  <li>
                                      GOVERNMENT TAX AND SERVICE CHARGE: <br>
                                      Room rates do not include 11 percent Government Tax and
                                      10 percent Service Charge
                                  </li>
                                  <li>
                                      PACKAGE GOVERNMENT TAX: <br>
                                      Room rates do not include 10% Government Tax
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <a class="detail-policies" data-toggle="collapse" href="#breakfas" role="button"
                          aria-expanded="false" aria-controls="breakfas">Details
                          &amp; Policies</a>
                      <div class="footer-sdse">
                          <p>€1.099 per night inclusive of all taxes and fees</p>
                          <a href="#" class="btn btn-dark  btn-block rounded-0">Select</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 suite-price-feature">
                  <div class="suite-board-main">
                      <h4>Half Board</h4>
                      <ul class="pl-3">
                          <li>Accommodation</li>
                          <li>Daily breakfast</li>
                          <li>Daily à la carte lunch or dinner </li>
                          <li>Accommodation</li>
                          <li>Daily breakfast</li>
                          <li>Daily à la carte lunch or dinner </li>
                      </ul>
                  </div>
                  <div class="suite-board-footer">
                      <div class="collapse" id="half">
                          <div class="card card-body border-0">
                              <h4 class="mb-4">Details &amp; Policies</h4>
                              <ul class="text-left pl-3">
                                  <li>
                                      CANCEL: <br>
                                      Cancel by 12PM local time 24 hours prior to arrival or
                                      pay 1 night plus tax
                                  </li>
                                  <li>
                                      GUARANTEE: <br>
                                      A credit card guarantee is required at time of booking
                                      unless otherwise stated in the rate description.
                                  </li>
                                  <li>
                                      MEAL PLAN: <br>
                                      Breakfast included
                                  </li>
                                  <li>
                                      SERVICE CHARGE: <br>
                                      Rates shown are inclusive of 10 percent Service Charge
                                      per room, per night. This will appear itemized in your
                                      shopping basket.
                                  </li>
                                  <li>
                                      GOVERNMENT TAX: <br>
                                      Rates shown are inclusive of 10 percent Government Tax
                                      per room, per night. This will appear itemized in your
                                      shopping basket.
                                  </li>
                                  <li>
                                      GOVERNMENT TAX AND SERVICE CHARGE: <br>
                                      Room rates do not include 11 percent Government Tax and
                                      10 percent Service Charge
                                  </li>
                                  <li>
                                      PACKAGE GOVERNMENT TAX: <br>
                                      Room rates do not include 10% Government Tax
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <a class="detail-policies" data-toggle="collapse" href="#half" role="button"
                          aria-expanded="false" aria-controls="half">Details &amp;
                          Policies</a>
                      <div class="footer-sdse">
                          <p>€1.099 per night inclusive of all taxes and fees</p>
                          <a href="#" class="btn btn-dark  btn-block rounded-0">Select</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="policies p-4" id="policies">
              <h3>Policies</h3>
              <div class="card card-body rounded-0">
                  <p><b>Suite 1</b></p>
                  <p><b>CANCEL</b> Cancel by 1pm local time 72 hours prior or pay 1 night for
                      every 3 nights booked plus tax. No show charged full stay.</p>
                  <p><b>GUARANTEE</b> A credit card guarantee is required at time of booking
                      unless otherwise started in the rate description.</p>
                  <p><b>MEAL PLAN</b> Breakfast included</p>
                  <p><b>VAT TAX</b> Rates shown are inclusive of 10 percent VAT Tax per room, per
                      night. this will appear itemized in your shopping basket.</p>
                  <p><b>CITY TAX</b> Rates shown are inclusive of EUR 5 city Tax per person, per
                      night for persons 8 years and older for up to 10 nights. Seasonal
                      adjustments may apply. This will appear itemized in your shopping basket.
                  </p>
              </div>
              <hr>
              <div class="booking-tearms">
                  <h3>Booking teams and conditions</h3>
                  <div class="custom-control custom-checkbox mb-5">
                      <input type="checkbox" class="custom-control-input" id="customCheck22">
                      <label class="custom-control-label" for="customCheck22">
                          Your reservation is made subject to our
                          <a href="#" class="underline"><b>Terms &amp; Conditions</b> </a>(available
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
              <div class="row">
                  <div class="col-6">
                      <a href="#" class="btn btn-dark  px-5 btn-backwizard">Go back</a>
                  </div>
                  <div class="col-6 text-right">
                      <a href="#" class="btn btn-dark  px-5 btn-nextwizard">Confirm
                          booking</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="sidebar-main pb-0" id="suite-deal">
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
      <div class="card p-5 mb-4">
          <h3 class="mb-4 color-dark-grey ">Add additional services</h3>
          <div class="accordion accordion-ex" id="accordionExample">
              <div class="card">
                  <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                              data-target="#transfers" aria-expanded="true" aria-controls="transfers">
                              Transfers
                              <i class="fa fa-plus"></i>
                              <i class="fa fa-minus" style="display: none"></i>
                          </button>
                      </h2>
                  </div>
                  <div id="transfers" class="collapse additional-collapse" aria-labelledby="headingOne"
                      data-parent="#accordionExample">
                      <div class="card-body h-100">
                          <div class="row">
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">ONE WAY AIRPORT TRANSFER</h4>
                                              <p class="mb-4">
                                                  Transfer to or from Ngurah Rai International Airport by
                                                  private car. Suitable for up to four guests. Tax and
                                                  service
                                                  charge are not included. Price shown is for up to 4
                                                  guests.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>

                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">ROUNDTRIP AIRPORT TRANSFER
                                              </h4>
                                              <p class="mb-4">
                                                  Relax with transfers to and from Ngurah Rai
                                                  International
                                                  Airport by private car. Suitable for up to four guests.
                                                  Tax
                                                  and service charge are not included. Price shown is for
                                                  up
                                                  to 4 guests.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card">
                  <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#inroom-amenities" aria-expanded="false"
                              aria-controls="inroom-amenities">
                              In-Room Amenities
                              <i class="fa fa-plus"></i>
                              <i class="fa fa-minus" style="display: none"></i>
                          </button>
                      </h2>

                  </div>
                  <div id="inroom-amenities" class="collapse additional-collapse" aria-labelledby="headingTwo"
                      data-parent="#accordionExample">
                      <div class="card-body h-100">
                          <div class="row">
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">BOTTLE OF ROSE BALINESE WINE
                                              </h4>
                                              <p class="mb-4">
                                                  Find a bottle of sparkling Balinese rosé in your room,
                                                  awaiting your arrival.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">BALINESE ORNAMENTAL BAMBOO
                                                  POLE
                                              </h4>
                                              <p class="mb-4">
                                                  Delight someone special with this unique Balinese
                                                  handcrafted penjor, a wonderful souvenir.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">ISLAND TROPICAL AMENITY</h4>
                                              <p class="mb-4">
                                                  Step into your room and discover a true taste of Bali.
                                                  This
                                                  welcome platter includes fresh coconuts, seasonal fruit
                                                  and
                                                  assorted local desserts.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card">
                  <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#spa-service" aria-expanded="false"
                              aria-controls="spa-service">
                              Spa Services
                              <i class="fa fa-plus"></i>
                              <i class="fa fa-minus" style="display: none"></i>
                          </button>
                      </h2>

                  </div>
                  <div id="spa-service" class="collapse additional-collapse" aria-labelledby="headingThree"
                      data-parent="#accordionExample">
                      <div class="card-body h-100">
                          <div class="row">
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">
                                                  TRADITIONAL BALINESE MASSAGE
                                              </h4>
                                              <p class="mb-4">
                                                  Relieve tension with a 60-minute traditional massage,
                                                  combining long rhythmic strokes with acupressure and
                                                  reflexology techniques. Please Note: This is a request
                                                  and not a booking, our spa team will contact you to
                                                  confirm your desired appointment. Price shown is per
                                                  treatment, per person.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">
                                                  ABHYANGA TREATMENT
                                              </h4>
                                              <p class="mb-4">
                                                  Achieve inner harmony with this 60-minute massage
                                                  ritual. Rhythmic pressure applied with herbal oils
                                                  banishes toxins and impurities while boosting
                                                  circulation. Please Note: This is a request and not a
                                                  booking, our spa team will contact you to confirm your
                                                  desired appointment. Price shown is per treatment, per
                                                  person.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">
                                                  REFLEXOLOGY FOOT MASSAGE
                                              </h4>
                                              <p class="mb-4">
                                                  This 60-minute ancient holistic therapy applies gentle
                                                  pressure to points on the feet – as blissful as it is
                                                  beneficial. Please Note: This is a request and not a
                                                  booking, our spa team will contact you to confirm your
                                                  desired appointment. Price shown is per treatment, per
                                                  person.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card">
                  <div class="card-header" id="headingfour">
                      <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#experiences" aria-expanded="false"
                              aria-controls="experiences">
                              Experiences
                              <i class="fa fa-plus"></i>
                              <i class="fa fa-minus" style="display: none"></i>
                          </button>
                      </h2>

                  </div>
                  <div id="experiences" class="collapse additional-collapse" aria-labelledby="headingfour"
                      data-parent="#accordionExample">
                      <div class="card-body h-100">
                          <div class="row">
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">
                                                  TRADITIONAL BALINESE MASSAGE
                                              </h4>
                                              <p class="mb-4">
                                                  Relieve tension with a 60-minute traditional massage,
                                                  combining long rhythmic strokes with acupressure and
                                                  reflexology techniques. Please Note: This is a request
                                                  and not a booking, our spa team will contact you to
                                                  confirm your desired appointment. Price shown is per
                                                  treatment, per person.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">
                                                  ABHYANGA TREATMENT
                                              </h4>
                                              <p class="mb-4">
                                                  Achieve inner harmony with this 60-minute massage
                                                  ritual. Rhythmic pressure applied with herbal oils
                                                  banishes toxins and impurities while boosting
                                                  circulation. Please Note: This is a request and not a
                                                  booking, our spa team will contact you to confirm your
                                                  desired appointment. Price shown is per treatment, per
                                                  person.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">
                                                  REFLEXOLOGY FOOT MASSAGE
                                              </h4>
                                              <p class="mb-4">
                                                  This 60-minute ancient holistic therapy applies gentle
                                                  pressure to points on the feet – as blissful as it is
                                                  beneficial. Please Note: This is a request and not a
                                                  booking, our spa team will contact you to confirm your
                                                  desired appointment. Price shown is per treatment, per
                                                  person.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">
                                                  ABHYANGA TREATMENT
                                              </h4>
                                              <p class="mb-4">
                                                  Achieve inner harmony with this 60-minute massage
                                                  ritual. Rhythmic pressure applied with herbal oils
                                                  banishes toxins and impurities while boosting
                                                  circulation. Please Note: This is a request and not a
                                                  booking, our spa team will contact you to confirm your
                                                  desired appointment. Price shown is per treatment, per
                                                  person.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">
                                                  REFLEXOLOGY FOOT MASSAGE
                                              </h4>
                                              <p class="mb-4">
                                                  This 60-minute ancient holistic therapy applies gentle
                                                  pressure to points on the feet – as blissful as it is
                                                  beneficial. Please Note: This is a request and not a
                                                  booking, our spa team will contact you to confirm your
                                                  desired appointment. Price shown is per treatment, per
                                                  person.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">
                                                  ABHYANGA TREATMENT
                                              </h4>
                                              <p class="mb-4">
                                                  Achieve inner harmony with this 60-minute massage
                                                  ritual. Rhythmic pressure applied with herbal oils
                                                  banishes toxins and impurities while boosting
                                                  circulation. Please Note: This is a request and not a
                                                  booking, our spa team will contact you to confirm your
                                                  desired appointment. Price shown is per treatment, per
                                                  person.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <div class="additional-list p-0">
                                      <div class="inner-wrapper mb-3">
                                          <div class="pr-lst result-grid">
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                              <div>
                                                  <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100"
                                                      alt="">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="p-4 inner-warppa">
                                          <div class="add-txt">
                                              <h4 class="mb-4 added">Added to booking</h4>
                                              <h4 class="mb-4 title-additional-list">
                                                  REFLEXOLOGY FOOT MASSAGE
                                              </h4>
                                              <p class="mb-4">
                                                  This 60-minute ancient holistic therapy applies gentle
                                                  pressure to points on the feet – as blissful as it is
                                                  beneficial. Please Note: This is a request and not a
                                                  booking, our spa team will contact you to confirm your
                                                  desired appointment. Price shown is per treatment, per
                                                  person.
                                              </p>
                                          </div>
                                          <div class="booking-qty">
                                              <p class="qty-label">Quantity</p>
                                              <div class="qty-button mb-4">
                                                  <button type="button" id="sub" class="sub btn-qty">-</button>
                                                  <input class="form-qty" type="number" id="1" value="1"
                                                      min="1" />
                                                  <button type="button" id="add" class="add btn-qty">+</button>
                                              </div>
                                              <p class="qty-label">€16.00</p>
                                          </div>
                                          <div class="confirm-qty">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                          </div>

                                          <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                          <a href="#" class="btn-red-link mt-2 remove-booking">Remove from
                                              booking</a>
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
                      <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                          class="img-full" alt="">
                  </div>
                  <div class="col">
                      <h3>Superior Double Room Garden or Village View </h3>
                  </div>
              </div>
          </div>
          <div class="suite-board-body p-5">
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
                          <a href="#" class="btn btn-dark btn-small-sm  px-5 btn-backwizard">Go back</a>
                      </div>
                      <div class="col-6 text-right">
                          <a href="#@@book" class="btn btn-dark btn-small-sm px-5 btn-confirm" @@classes>Confirm
                              booking</a>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </div>
</div>
<div class="sidebar-main" id="reviews">
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
      <div class="row reviews">
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>C.M</b></p>
                      <p>United States</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>8.68/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              We love the hotel and its location. The front desk staff was extremely pleasant. The
                              breakfast staff are very friendly and efficient.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>P.M</b></p>
                      <p>United Kingdom</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>9.03/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff
                              I
                              interacted with were great. One of the best hotel experiences I have ever had I
                              would
                              unreservedly recommend the hotel and will return.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>G.P</b></p>
                      <p>United Kingdom</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>9.68/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding.
                              He
                              managed to arrange for us to attend the Woody Allan Band show with our guest (who is
                              a
                              musician) even when it had been booked out and was very courteous throughout. Thank
                              you
                              so muclh. A wonderful stay.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>C.M</b></p>
                      <p>United States</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>8.68/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              We love the hotel and its location. The front desk staff was extremely pleasant. The
                              breakfast staff are very friendly and efficient.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>C.M</b></p>
                      <p>United States</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>8.68/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              We love the hotel and its location. The front desk staff was extremely pleasant. The
                              breakfast staff are very friendly and efficient.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>P.M</b></p>
                      <p>United Kingdom</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>9.03/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff
                              I
                              interacted with were great. One of the best hotel experiences I have ever had I
                              would
                              unreservedly recommend the hotel and will return.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>G.P</b></p>
                      <p>United Kingdom</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>9.68/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding.
                              He
                              managed to arrange for us to attend the Woody Allan Band show with our guest (who is
                              a
                              musician) even when it had been booked out and was very courteous throughout. Thank
                              you
                              so muclh. A wonderful stay.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>C.M</b></p>
                      <p>United States</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>8.68/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              We love the hotel and its location. The front desk staff was extremely pleasant. The
                              breakfast staff are very friendly and efficient.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>C.M</b></p>
                      <p>United States</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>8.68/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              We love the hotel and its location. The front desk staff was extremely pleasant. The
                              breakfast staff are very friendly and efficient.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>P.M</b></p>
                      <p>United Kingdom</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>9.03/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff
                              I
                              interacted with were great. One of the best hotel experiences I have ever had I
                              would
                              unreservedly recommend the hotel and will return.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>G.P</b></p>
                      <p>United Kingdom</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>9.68/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding.
                              He
                              managed to arrange for us to attend the Woody Allan Band show with our guest (who is
                              a
                              musician) even when it had been booked out and was very courteous throughout. Thank
                              you
                              so muclh. A wonderful stay.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>C.M</b></p>
                      <p>United States</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>8.68/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              We love the hotel and its location. The front desk staff was extremely pleasant. The
                              breakfast staff are very friendly and efficient.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>C.M</b></p>
                      <p>United States</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>8.68/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              We love the hotel and its location. The front desk staff was extremely pleasant. The
                              breakfast staff are very friendly and efficient.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>P.M</b></p>
                      <p>United Kingdom</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>9.03/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff
                              I
                              interacted with were great. One of the best hotel experiences I have ever had I
                              would
                              unreservedly recommend the hotel and will return.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>G.P</b></p>
                      <p>United Kingdom</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>9.68/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding.
                              He
                              managed to arrange for us to attend the Woody Allan Band show with our guest (who is
                              a
                              musician) even when it had been booked out and was very courteous throughout. Thank
                              you
                              so muclh. A wonderful stay.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 reviews-list reviews-sidebar">
              <div class="row">
                  <div class="col-3 pl-5">
                      <p><b>C.M</b></p>
                      <p>United States</p>
                  </div>
                  <div class="col pr-5">
                      <div class="rate mb-1">
                          <span class="mr-4">
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                              <i class="fa fa-star mr-2" aria-hidden="true"></i>
                          </span>
                          <span>
                              <b>8.68/10</b>
                          </span>
                      </div>
                      <div class="review-content">
                          <p>
                              We love the hotel and its location. The front desk staff was extremely pleasant. The
                              breakfast staff are very friendly and efficient.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="text-center mb-3">
          <div class="mb-3">
              <a href="#" class="underline" id="loadMore">SEE MORE COMMENTS</a>
          </div>
          <a href="#" class="btn btn-dark btn-lg px-5 rounded-0">BOOK</a>
      </div>
  </div>
</div>
<div class="sidebar-main" id="quickinfo">
    <a href="#" class="close-sidebar">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
             xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path
                    d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>

    <div class="sidebar-scroller pt-2">
        <div class="d-flex align-items-center mb-5">
            <a href="#" class="sidebar-back">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="title-second title-line mb-0" id="quickinfo_title">

            </h3>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="row mb-5" id="prop_info">

                    <div class="col-4 mb-5" id="propinfo_address">

                    </div>
                    <div class="col-4 mb-5" id="propinfo_internet">

                    </div>
                    <div class="col-4 mb-5" id="propinfo_children_policy">

                    </div>
                    <div class="col-4 mb-5" id="propinfo_checkinout">

                    </div>
                    <div class="col-4 mb-5" id="propinfo_transfer">

                    </div>
                    <div class="col-4 mb-5" id="propinfo_smoking_policy">

                    </div>
                    <div class="col-4 mb-5" id="propinfo_rooms">

                    </div>
                    <div class="col-4 mb-5" id="propinfo_avs">

                    </div>
                    <div class="col-4 mb-5" id="propinfo_pets">

                    </div>
                    <div class="col-4 mb-5" id="propinfo_parking">

                    </div>
                </div>
                <h4 class="mb-4" id="amenity_title"></h4>
                <div class="row mb-5" id="prop_amenties">

                </div>
                <div class="row my-5" id="prop_usp">

                </div>
            </div>
            <div class="col-4">
                <div id="map2"></div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="btn btn-dark btn-lg px-5 rounded-0">BOOK</a>
        </div>
    </div>
</div>
<div class="sidebar-main" id="gallery">
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
        <h3 class="title-second title-line mb-4">The Ludlow Hotel <input type="hidden" name="hid_propid" id="hid_propid" /></h3>
        <ul class="nav nav-tab-main nav-pills nav-justified mb-2">
            <li class="nav-item">
                <a class="nav-link gal-tab active" data-type="hotel" href="#hotel_gallery" id="hotel_gallery-tab" data-toggle="tab" role="tab" aria-controls="hotel_gallery" aria-selected="true">
                    Hotel
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link gal-tab" data-type="suites" href="#suite_gallery" id="suite_gallery-tab" data-toggle="tab" role="tab" aria-controls="suite_gallery" aria-selected="false">
                    Suites
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link gal-tab" data-type="restaurant" href="#restaurant_gallery" id="restaurant_gallery-tab" data-toggle="tab" role="tab" aria-controls="restaurant_gallery" aria-selected="false">
                    Restaurant
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link gal-tab" data-type="bars" href="#bars_gallery" id="bars_gallery-tab" data-toggle="tab" role="tab" aria-controls="bars_gallery" aria-selected="false">
                    Bars
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link gal-tab" data-type="spas" href="#spas_gallery" id="spas_gallery-tab" data-toggle="tab" role="tab" aria-controls="spas_gallery" aria-selected="false">
                    Spas
                </a>
            </li>

        </ul>
    </div>

    <div class="tab-content h-100">
        <div id="hotel_gallery" class="tab-pane fade show active" role="tabpanel" aria-labelledby="hotel_gallery-tab">
            <div class="sidebar-scroller pt-2 is-gallery">

                <div class="gallery-wrapper">
                    <div class="container-gallery" id="gallery_hotel">

                    </div>
                </div>
            </div>
        </div>
        <div id="restaurant_gallery" class="tab-pane fade" role="tabpanel" aria-labelledby="restaurant_gallery-tab">
            <div class="sidebar-scroller pt-2 is-gallery">
                <div class="gallery-wrapper">
                    <div class="row">
                        <div class="col-3">
                            <ul class="nav flex-column nav-sidebar is-small" id="restaurant-gal-side-tab" role="tablist" aria-orientation="vertical">

                            </ul>
                        </div>
                        <div class="col-9">
                            <div class="container-gallery" id="gallery_restaurant">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="bars_gallery" class="tab-pane fade" role="tabpanel" aria-labelledby="bars_gallery-tab">
            <div class="sidebar-scroller pt-2 is-gallery">
                <div class="gallery-wrapper">

                    <div class="row">
                        <div class="col-3">
                            <ul class="nav flex-column nav-sidebar is-small" id="bars-gal-side-tab" role="tablist" aria-orientation="vertical">

                            </ul>
                        </div>
                        <div class="col-9">

                            <div class="container-gallery" id="gallery_bars">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="spas_gallery" class="tab-pane fade" role="tabpanel" aria-labelledby="spas_gallery-tab">
            <div class="sidebar-scroller pt-2 is-gallery">
                <div class="gallery-wrapper">
                    <div class="row">
                        <div class="col-3">
                            <ul class="nav flex-column nav-sidebar is-small" id="spas-gal-side-tab" role="tablist" aria-orientation="vertical">

                            </ul>
                        </div>
                        <div class="col-9">
                            <div class="container-gallery" id="gallery_spas">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="suite_gallery" class="tab-pane fade" role="tabpanel" aria-labelledby="suite_gallery-tab">
            <div class="sidebar-scroller pt-2 is-gallery">
                <div class="gallery-wrapper">
                    <div class="row">
                        <div class="col-3">
                            <ul class="nav flex-column nav-sidebar is-small" id="suite-gal-side-tab" role="tablist" aria-orientation="vertical">

                            </ul>
                        </div>
                        <div class="col-9">
                            <div class="container-gallery" id="gallery_suite">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sidebar-main pt-4" id="suiteside">
    <a href="#" class="close-sidebar">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
             xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path
                    d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>


    <div class="h-100">
        <div class="d-flex align-items-center mb-5">
            <a href="#" class="sidebar-back">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="title-second title-line mb-0">
                Your (Pavilion Suite) overview:
            </h3>
        </div>

        <!-- <h3 class="title-second title-line mb-5">The Ludlow Hotel</h3> -->
        <div class="row h-100">
            <div class="col-3">
                <ul class="nav flex-column nav-sidebar is-small" id="suitesside-tab" role="tablist"
                    aria-orientation="vertical">
                    <li class="nav-item">
                        <a class="nav-link" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab"
                           aria-controls="suiteslist" aria-selected="true">Suites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-sub" id="suitelist1-tab" data-toggle="pill" href="#suitelist1"
                           role="tab" aria-controls="suitelist1" aria-selected="false">Suite Name</a>
                    </li>
                </ul>
            </div>
            <div class="col-9 h-100">
                <div class="sidebar-scroller pp-01">
                    <div class="tab-content" id="suitesside-tabContent">
                        <div class="tab-pane fade show active" id="suiteslist" role="tabpanel" aria-labelledby="suiteslist-tab">
                        </div>
                        <div class="tab-pane fade" id="suitelist1" role="tabpanel" aria-labelledby="suitelist1-tab">
                            <div class="container"></div>
                            <div class="container">
                                <h4 class="mt-5 mb-4 color-dark-grey ">Amenities</h4>
                                <h4 class="mt-5 mb-4 color-dark-grey">Inspiration</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom_js')
  @parent
  <script>
    $('.slide-header').slick({
        infinite: true,
        speed: 600,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        pauseOnFocus: false,
        slidesToShow: 1,

    });
    $('.magazine-slide').slick({
        speed: 600,
        fade: true,
        autoplay: true,
        autoplaySpeed: 4000,
        cssEase: 'ease-in-out',
        slidesToShow: 1,

    });

    $('.book-list-hotel-item').slick({
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1367,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    })

    $("#rangecal").click(function () {
        $('.staydate-range').addClass('show')
        if ($(window).width() < 767) {
            $('.booking-search-banner').css('z-index', '99');
            $('body').css('overflow', 'hidden')
        }
    });
    $(document).mouseup(function (event) {
        var $trigger = $(".staydate-range");
        if ($trigger !== event.target && !$trigger.has(event.target).length) {
            $trigger.removeClass('show');
        }
        if ($(window).width() < 767) {
            $('.booking-search-banner').css('z-index', '1')
            $('body').css('overflow', 'auto')
        }

    });
    $('.close-range').click(function (e) {
        e.preventDefault();
        $(this).closest('.staydate-range').removeClass('show')
        if ($(window).width() < 767) {
            $('.booking-search-banner').css('z-index', '1')
            $('body').css('overflow', 'auto')
        }
    })


    var pickerDate = $('#date_range').daterangepicker({
        parentEl: "#date_range_container",
        autoApply: true,
        minDate: new Date(),
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear',
        }
    });

    pickerDate.on('apply.daterangepicker', function (ev, pickerDate) {
        $('#rangecal').val(pickerDate.startDate.format('DD MMM') + ' - ' + pickerDate.endDate.format(
            'DD MMM'));
        $('.staydate-range').removeClass('show')
    });
    pickerDate.data('daterangepicker').hide = function () {};
    pickerDate.data('daterangepicker').show();


    $('.booking-guest').click(function () {
        $('.booking-guest-input').addClass('show')
        if ($(window).width() < 767) {
            $('.booking-search-banner').css('z-index', '99')
            $('body').css('overflow', 'hidden')
        }
    })
    $(document).mouseup(function (event) {
        var $trigger = $(".booking-guest-input");
        if ($trigger !== event.target && !$trigger.has(event.target).length) {
            $trigger.removeClass('show');
        }
        if ($(window).width() < 767) {
            $('.booking-search-banner').css('z-index', '2')
            $('body').css('overflow', 'auto')
        }

    });
    $(document).on('click', '.close-guest', function (e) {
        e.preventDefault();
        $(this).closest('.booking-guest-input').removeClass('show')
        if ($(window).width() < 767) {
            $('.booking-search-banner').css('z-index', '2')
            $('body').css('overflow', 'auto')
        }

    })

    $(document).on('click', '.confirm-room', function (e) {
        e.preventDefault();
        $(this).closest('.booking-guest-input').removeClass('show')

        if ($(window).width() < 767) {
            $('body').css('overflow', 'auto')
            $('.booking-search-banner').css('z-index', '2')
        }

        var adultCount = 0;
        var childCount = 0;

        $('.adult-val').each(function () {
            adultCount += parseFloat($(this).html());
        });
        $('.child-val').each(function () {
            childCount += parseFloat($(this).html());
        });
        var totalGuest = parseFloat(adultCount + childCount);
        var roomCount = $('.room-val').html();
        $('.booking-val-guest').html(totalGuest);
        $('.booking-val-room').html(roomCount);
    });
  </script>
@endsection