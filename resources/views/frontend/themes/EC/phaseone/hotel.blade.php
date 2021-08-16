@extends('frontend.themes.EC.layouts.main')
{{--  For Title --}}
@section('title', 'Hotel')
{{-- For Meta Keywords --}}
@section('meta_keywords', '')
{{-- For Meta Description --}}
@section('meta_description', '')
{{-- For Page's Content Part --}}

@endsection


<div class="content-em">
   <div class="top-wrapper">
      <div class="slide-023k4"></div>
      <div class="slider-bg-inner">
         <div class="container">
            <div class="row mt-5">
               <div class="col-lg-4 mb-4 pt-3">
                  <!-- <ul class="nav flex-column nav-sidebar is-small onstick wow fadeInUp" data-wow-delay=".3s"> -->
                  <div class="sidebar-nav-section">
                     <div class="humburger-menu-sidebar">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                     </div>
                     <div class="nav-collapse">
                        <ul class="nav flex-column nav-sidebar is-small onstickmainpage2">
                           <li class="nav-item">
                              <a href="main-page.html">
                              <i class="ico ico-back mb-4"></i>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#suite" role="button" aria-expanded="false" aria-controls="suite">
                              Suites <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </a>
                              <div class="collapse show" id="suite">


                                 <ul class="nav flex-column nav-sidebar is-small">
                                   <li class="nav-item">
                                     <a class="nav-link nav-link-sub" href="/allsuites">All Suites</a>
                                   </li>

                                   @foreach($suites_name as $name)
                                     <?php
                                       $suite_url = strtolower($name);
                                       $suite_url = str_replace(' ', '-', $suite_url);
                                     ?>
                                     <li class="nav-item">
                                       <a class="nav-link nav-link-sub" href="/suite/{{ $suite_url }}">{{ $name }}</a>
                                     </li>
                                   @endforeach

                                 </ul>


<!--                                  <ul class="nav flex-column nav-sidebar is-small">
                                    <li class="nav-item">
                                       <a class="nav-link nav-link-sub" href="all-suite.html">All Suites</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link nav-link-sub" href="detail-suite.html">The Mark Fire Bedroom Terrace Suite</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link nav-link-sub" href="detail-suite.html">Suite Name</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link nav-link-sub" href="detail-suite.html">Suite Name</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link nav-link-sub" href="detail-suite.html">Suite Name</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link nav-link-sub" href="detail-suite.html">Suite Name</a>
                                    </li>
                                 </ul> -->
                              </div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="architecture.html">Architecture</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="spa.html">Spa & Wellness </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#restaurant" role="button" aria-expanded="false"
                                 aria-controls="restaurant">
                              Restaurant & Bar <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </a>
                              <div class="collapse " id="restaurant">
                                 <ul class="nav flex-column nav-sidebar is-small">
                                    <li class="nav-item">
                                       <a class="nav-link nav-link-sub" href="restaurant.html">All Restaurant</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link nav-link-sub" href="detail-restaurant.html">Restaurant Name</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link nav-link-sub" href="detail-restaurant.html">Restaurant Name</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link nav-link-sub" href="detail-restaurant.html">Restaurant Name</a>
                                    </li>
                                 </ul>
                              </div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link @@locActive" href="location.html">Location</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link @@expActive" href="experience.html">Experiences</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link btn-sidebar" href="#" data-sidebar="#gallery">Gallery</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link @@sosActive" href="social.html">Social</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link @@comActive" href="#">Video Channel</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link @@faq" href="faq.html">FAQ</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="text-right">
                     <div class="dropdown ipad-view mb-3">
                        <button class="btn dropdown-toggle p-0" type="button" id="suiteDetail" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                        Suite Details
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="suiteDetail">
                           <a class="dropdown-item scrollto" href="#reviewCollapse">Review</a>
                           <a class="dropdown-item scrollto" href="#amenitieCollapse">Ameninties</a>
                           <a class="dropdown-item scrollto" href="#hotelInfo">Hotel Info</a>
                           <a class="dropdown-item scrollto" href="#policiesCollapse">Policies</a>
                           <a class="dropdown-item scrollto" href="#">Add to collection</a>
                           <a class="dropdown-item btn-sidebar" href="#" data-sidebar="#share">Share</a>
                           <a class="dropdown-item btn-sidebar" href="#" data-sidebar="">Ask Questions</a>
                        </div>
                     </div>
                  </div>
                  <div class="slider-container hotel-page-list">
                     <a href="#" class="hotel-info btn-sidebar" data-sidebar="#quickinfo">
                     Hotel info
                     </a>
                     <div class="my-dropdown">
                        <div class="btn-group dropleft">
                           <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="ico ico-diamon diamon-label"></i>
                           </a>
                           <div class="dropdown-menu">
                              <a href="#" class="dropdown-item">Add to collection</a>
                              <a href="#" class="dropdown-item btn-sidebar create-collection"
                                 data-sidebar="#myCollection">Create
                              new collection</a>
                           </div>
                        </div>
                     </div>
                     <!-- Data video popup -->
                     <div style="display:none;" id="video1">
                        <video class="lg-video-object lg-html5" controls preload="none">
                           <source src="images/Emporium-Hotel-South-Bank.mp4" type="video/mp4">
                           Your browser does not support HTML5 video.
                        </video>
                     </div>
                     <!-- Data video popup end -->
                     <div class="slider-detail" id="sliderDetail">

                         @foreach($hotel_images as $img)
                           <div>
                             <img src="{{ $img }}" id="heading-img" class="img-fluid" alt="">
                             <div class="view-images-btn">
                                 <i class="ico icon-camera"></i> View Images
                              </div>
                           </div>
                         @endforeach


<!--                         <div>
                           <a href="images/53511811337-49267444221.jpg" class="slider-item-inner">
                              <img src="images/53511811337-49267444221.jpg" id="heading-img" class="img-fluid" alt="">
                              <div class="view-images-btn">
                                 <i class="ico icon-camera"></i> View Images
                              </div>
                           </a>
                        </div>
                        <div>
                           <a data-html="#video1" data-poster="images/video-cover.jpg" data-sub-html="video caption1"
                              class="slider-item-inner">
                              <img src="images/video-cover.jpg" id="heading-img" class="img-fluid" alt="">
                              <div class="play-button">
                                 <img src="images/video-play.png" alt="">
                              </div>
                              <div class="view-images-btn">
                                 <i class="ico icon-camera"></i> View Images
                              </div>
                           </a>
                        </div>
                        <div>
                           <a href="images/53511811337-49267444221.jpg" class="slider-item-inner">
                              <img src="images/53511811337-49267444221.jpg" id="heading-img" class="img-fluid " alt="">
                              <div class="view-images-btn">
                                 <i class="ico icon-camera"></i> View Images
                              </div>
                           </a>
                        </div> -->
                     </div>
                     <div class="prev"><i class="ico ico-back"></i></div>
                     <div class="next"><i class="ico ico-next"></i></div>
                     <div class="hotel-meta full-width hotel-meta-details">
                        <a href="#" class="view btn-sidebar i-none" data-sidebar="#reviews">
                        Reviews
                        </a>
                        <a href="#" class="view btn-sidebar i-none" data-sidebar="#quickinfo">
                        Hotel Info
                        </a>
                        <a href="#" class="view btn-sidebar i-none" data-sidebar="#policies">
                        Policies
                        </a>
                        <a href="#" class="btn-sidebar" data-sidebar="#priceinfo">
                           <div class="hotel-prices hotel-price-detail d-flex h-100">
                              <div class="row align-items-center justify-content-center">
                                 <div class="mr-2">
                                    <i class="ico ico-info-green"></i>
                                 </div>
                                 <h3 class="mb-0">
                                    <span class="title-font-2 mr-1">From</span> <span class="color-primary"> € 1.299</span>
                                 </h3>
                                 <div class="ml-2">
                                    <span class="pernight"></span>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <div class="ipad-view book-suite">
                           <a href="#">
                           Book this Suite
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="hotel-meta-mobile">
                     <div class="dropdown w-100">
                        <a href="#" class="btn dropdown-toggle text-left" type="button" id="suiteDetail"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hotel Details
                        </a>
                        <div class="dropdown-menu" aria-labelledby="suiteDetail">
                           <a class="dropdown-item scrollto" href="#reviewCollapse">Review</a>
                           <a class="dropdown-item scrollto" href="#amenitieCollapse">Ameninties</a>
                           <a class="dropdown-item scrollto" href="#hotelInfo">Hotel Info</a>
                           <a class="dropdown-item scrollto" href="#policiesCollapse">Policies</a>
                           <a class="dropdown-item scrollto" href="#">Add to collection</a>
                           <a class="dropdown-item btn-sidebar" href="#" data-sidebar="#share">Share</a>
                           <a class="dropdown-item btn-sidebar" href="#" data-sidebar="">Ask Questions</a>
                        </div>
                     </div>
                     <a href="#" class="btn btn-primary rounded-0">
                     Check Availability
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container ">
      <div class="row mt-5">
         <div class="col-lg-4"></div>
         <div class="col-lg-8 pr-0">
            <div class="pr-3">
               <div class="row">
                  <div class="col-md-8">
                     <div class="title-main title-main-mobile mt-0 mb-5">
                        <h2>{{ $property->property_name }}</h2>
                     </div>
                     <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum saepe unde expedita minus qui quos
                        harum quasi explicabo distinctio, sunt laboriosam vitae asperiores aliquam at eum quaerat fugiat
                        laudantium repellat.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum saepe unde expedita minus qui quos
                        harum quasi explicabo distinctio, sunt laboriosam vitae asperiores aliquam at eum quaerat fugiat
                        laudantium repellat.
                     </p>
                     <div class="i-none">
                        <h4 class="mt-5 mb-4 color-dark-grey ">Amenities</h4>
                        <div class="row mb-4">

                           <div class="col-md-4 mb-4">
                              {{ $amenties }}
                           </div>


<!--                            <div class="col-md-4 mb-4">
                              <p class="mb-0">Pool</p>
                              <p class="mb-0">Wlan</p>
                              <p class="mb-0">Smart-TV</p>
                              <p class="mb-0">Koffeemaschine</p>
                              <p class="mb-0">Laundry service</p>
                           </div>
                           <div class="col-md-4 mb-4">
                              <p class="mb-0">Pool</p>
                              <p class="mb-0">Wlan</p>
                              <p class="mb-0">Smart-TV</p>
                              <p class="mb-0">Koffeemaschine</p>
                              <p class="mb-0">Laundry service</p>
                           </div>
                           <div class="col-md-4 mb-4">
                              <p class="mb-0">Pool</p>
                              <p class="mb-0">Wlan</p>
                              <p class="mb-0">Smart-TV</p>
                              <p class="mb-0">Koffeemaschine</p>
                              <p class="mb-0">Laundry service</p>
                           </div>
                           <div class="col-md-4 mb-4">
                              <p class="mb-0">Pool</p>
                              <p class="mb-0">Wlan</p>
                              <p class="mb-0">Smart-TV</p>
                              <p class="mb-0">Koffeemaschine</p>
                              <p class="mb-0">Laundry service</p>
                           </div>
                           <div class="col-md-4 mb-4">
                              <p class="mb-0">Pool</p>
                              <p class="mb-0">Wlan</p>
                              <p class="mb-0">Smart-TV</p>
                              <p class="mb-0">Koffeemaschine</p>
                              <p class="mb-0">Laundry service</p>
                           </div>
                           <div class="col-md-4 mb-4">
                              <p class="mb-0">Pool</p>
                              <p class="mb-0">Wlan</p>
                              <p class="mb-0">Smart-TV</p>
                              <p class="mb-0">Koffeemaschine</p>
                              <p class="mb-0">Laundry service</p>
                           </div> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="side-detail mb-3">
                        <p>Free cancelation before <b>18 Feb 2020</b></p>
                        <p>Reserve now, pay at the Hotel</p>
                        <a href="book/reservation" class="btn btn-dark btn-block">Reservation</a>
                     </div>
                     <div class="side-detail text-left mb-3 px-2 i-none">
                        <h3 class="text-center mt-2 mb-0">
                           <span class="why-we"></span>
                        </h3>
                        <ul class="pl-4">
                           <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                              restaurant or in the drawing room.
                           </li>
                           <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                              restaurant or in the drawing room.
                           </li>
                           <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                              restaurant or in the drawing room.
                           </li>
                           <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                              restaurant or in the drawing room.
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="accordion accordion-ex" id="accordionExample">
                  <!-- display on ipad only -->
                  <div class="card ipad-view">
                     <div class="card-header" id="loveit">
                        <h2 class="mb-0">
                           <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                              data-target="#loveitcollapse" aria-expanded="true" aria-controls="loveitcollapse">
                           Why we Love it
                           <i class="fa fa-plus"></i>
                           <i class="fa fa-minus" style="display: none"></i>
                           </button>
                        </h2>
                     </div>
                     <div id="loveitcollapse" class="collapse additional-collapse" aria-labelledby="loveit"
                        data-parent="#accordionExample">
                        <div class="card-body h-100">
                           <h3 class="text-center mt-2 mb-3">
                              <span class="why-we"></span>
                           </h3>
                           <ul class="pl-4">
                              <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                                 restaurant or in the drawing room.
                              </li>
                              <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                                 restaurant or in the drawing room.
                              </li>
                              <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                                 restaurant or in the drawing room.
                              </li>
                              <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                                 restaurant or in the drawing room.
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="card ipad-view">
                     <div class="card-header" id="amenities1">
                        <h2 class="mb-0">
                           <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                              data-target="#amenitieCollapse" aria-expanded="true" aria-controls="amenitieCollapse">
                           Amenities
                           <i class="fa fa-plus"></i>
                           <i class="fa fa-minus" style="display: none"></i>
                           </button>
                        </h2>
                     </div>
                     <div id="amenitieCollapse" class="collapse additional-collapse" aria-labelledby="amenities1"
                        data-parent="#accordionExample">
                        <div class="card-body h-100">
                           <h4 class="mb-4 color-dark-grey ">Amenities</h4>
                           <div class="row">

                              <div class="col-md-4 mb-4">
                                 {{ $amenties }}
                              </div>

<!--                               <div class="col-md-4 mb-4">
                                 <p class="mb-0">Pool</p>
                                 <p class="mb-0">Wlan</p>
                                 <p class="mb-0">Smart-TV</p>
                                 <p class="mb-0">Koffeemaschine</p>
                                 <p class="mb-0">Laundry service</p>
                              </div>
                              <div class="col-md-4 mb-4">
                                 <p class="mb-0">Pool</p>
                                 <p class="mb-0">Wlan</p>
                                 <p class="mb-0">Smart-TV</p>
                                 <p class="mb-0">Koffeemaschine</p>
                                 <p class="mb-0">Laundry service</p>
                              </div>
                              <div class="col-md-4 mb-4">
                                 <p class="mb-0">Pool</p>
                                 <p class="mb-0">Wlan</p>
                                 <p class="mb-0">Smart-TV</p>
                                 <p class="mb-0">Koffeemaschine</p>
                                 <p class="mb-0">Laundry service</p>
                              </div>
                              <div class="col-md-4 mb-4">
                                 <p class="mb-0">Pool</p>
                                 <p class="mb-0">Wlan</p>
                                 <p class="mb-0">Smart-TV</p>
                                 <p class="mb-0">Koffeemaschine</p>
                                 <p class="mb-0">Laundry service</p>
                              </div>
                              <div class="col-md-4 mb-4">
                                 <p class="mb-0">Pool</p>
                                 <p class="mb-0">Wlan</p>
                                 <p class="mb-0">Smart-TV</p>
                                 <p class="mb-0">Koffeemaschine</p>
                                 <p class="mb-0">Laundry service</p>
                              </div>
                              <div class="col-md-4 mb-4">
                                 <p class="mb-0">Pool</p>
                                 <p class="mb-0">Wlan</p>
                                 <p class="mb-0">Smart-TV</p>
                                 <p class="mb-0">Koffeemaschine</p>
                                 <p class="mb-0">Laundry service</p>
                              </div> -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card ipad-view">
                     <div class="card-header" id="hotelInfo_id">
                        <h2 class="mb-0">
                           <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                              data-target="#hotelInfo" aria-expanded="true" aria-controls="hotelInfo">
                           Hotel Info
                           <i class="fa fa-plus"></i>
                           <i class="fa fa-minus" style="display: none"></i>
                           </button>
                        </h2>
                     </div>
                     <div id="hotelInfo" class="collapse additional-collapse" aria-labelledby="hotelInfo_id"
                        data-parent="#accordionExample">
                        <div class="card-body h-100">
                           <div class="row">
                              <div class="col-lg-8">
                                 <div class="row mb-5">
                                    <div class="col-lg-4 col-md-6 mb-5">
                                       <div class="qv-list">
                                          <h4>Address</h4>
                                          <i class="fa fa-map-marker" aria-hidden="true"></i> 35 east 76th st, New York
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-5">
                                       <div class="qv-list">
                                          <h4>Internet</h4>
                                          <p class="mb-0"><b>Public areas :</b> Free</p>
                                          <p class="mb-0"><b>In room :</b> Free</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-5">
                                       <div class="qv-list">
                                          <h4>Children policy</h4>
                                          <p class="mb-0">Children are welcome</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-5">
                                       <div class="qv-list">
                                          <h4>Check-in / Check-out</h4>
                                          <p class="mb-0"><b>Check-in :</b> 3 pm</p>
                                          <p class="mb-0"><b>Check-out :</b> noon</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-5">
                                       <div class="qv-list">
                                          <h4>Transportation and transfer</h4>
                                          <p class="mb-0"><b>Transfer :</b> subject to supplement</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-5">
                                       <div class="qv-list">
                                          <h4>Smooking policy</h4>
                                          <p class="mb-0">Non smooking public spaces</p>
                                          <p class="mb-0"><b>Smooking rooms:</b> not available</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-5">
                                       <div class="qv-list">
                                          <h4>Rooms</h4>
                                          <p class="mb-0">190 rooms and suites</p>
                                          <p class="mb-0"><b>In-room amenities :</b> iPod dock, flatscreen TV, in-room safe, minibar
                                          </p>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-5">
                                       <div class="qv-list">
                                          <h4>Available services</h4>
                                          <p class="mb-0">Air conditioned hotel</p>
                                          <p class="mb-0">Laundry service</p>
                                          <p class="mb-0">Concirge service</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-5">
                                       <div class="qv-list">
                                          <h4>Pets</h4>
                                          <p class="mb-0">Small dogs allowed</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-5">
                                       <div class="qv-list">
                                          <h4>Parking</h4>
                                          <p class="mb-0"><b>Car park / valet service :</b> 65 US$ per day</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row my-5">
                                    <div class="col text-center">
                                       <div class="i-touch">
                                          <p><i class="ico ico-covid"></i></p>
                                          <p>Corona Conscious</p>
                                       </div>
                                    </div>
                                    <div class="col text-center">
                                       <div class="i-touch">
                                          <p><i class="ico ico-hotel-line"></i></p>
                                          <p>Handpicked Collection</p>
                                       </div>
                                    </div>
                                    <div class="col text-center">
                                       <div class="i-touch">
                                          <p><i class="ico ico-bells"></i></p>
                                          <p>Personalize Service</p>
                                       </div>
                                    </div>
                                    <div class="col text-center">
                                       <div class="i-touch">
                                          <p><i class="ico ico-gift"></i></p>
                                          <p>Perks & Offers</p>
                                       </div>
                                    </div>
                                    <div class="col text-center">
                                       <div class="i-touch">
                                          <p><i class="ico ico-shield"></i></p>
                                          <p>Price Matching</p>
                                       </div>
                                    </div>
                                    <div class="col text-center">
                                       <div class="i-touch">
                                          <p><i class="ico ico-pay"></i></p>
                                          <p>Trusted by Visa</p>
                                       </div>
                                    </div>
                                    <div class="col text-center">
                                       <div class="i-touch">
                                          <p><i class="ico ico-lock"></i></p>
                                          <p>Secure Booking</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card ipad-view">
                     <div class="card-header" id="review_id">
                        <h2 class="mb-0">
                           <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                              data-target="#reviewCollapse" aria-expanded="true" aria-controls="reviewCollapse">
                           Review
                           <i class="fa fa-plus"></i>
                           <i class="fa fa-minus" style="display: none"></i>
                           </button>
                        </h2>
                     </div>
                     <div id="reviewCollapse" class="collapse additional-collapse" aria-labelledby="review_id"
                        data-parent="#accordionExample">
                        <div class="card-body h-100">
                           <div class="row reviews">
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                                             Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff I
                                             interacted with were great. One of the best hotel experiences I have ever had I would
                                             unreservedly recommend the hotel and will return.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                                             Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding. He
                                             managed to arrange for us to attend the Woody Allan Band show with our guest (who is a
                                             musician) even when it had been booked out and was very courteous throughout. Thank you
                                             so muclh. A wonderful stay.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                                             Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff I
                                             interacted with were great. One of the best hotel experiences I have ever had I would
                                             unreservedly recommend the hotel and will return.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                                             Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding. He
                                             managed to arrange for us to attend the Woody Allan Band show with our guest (who is a
                                             musician) even when it had been booked out and was very courteous throughout. Thank you
                                             so muclh. A wonderful stay.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                                             Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff I
                                             interacted with were great. One of the best hotel experiences I have ever had I would
                                             unreservedly recommend the hotel and will return.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                                             Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding. He
                                             managed to arrange for us to attend the Woody Allan Band show with our guest (who is a
                                             musician) even when it had been booked out and was very courteous throughout. Thank you
                                             so muclh. A wonderful stay.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                                             Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff I
                                             interacted with were great. One of the best hotel experiences I have ever had I would
                                             unreservedly recommend the hotel and will return.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                                             Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding. He
                                             managed to arrange for us to attend the Woody Allan Band show with our guest (who is a
                                             musician) even when it had been booked out and was very courteous throughout. Thank you
                                             so muclh. A wonderful stay.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 reviews-list reviews-mobile">
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
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card ipad-view">
                     <div class="card-header" id="policies_id">
                        <h2 class="mb-0">
                           <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                              data-target="#policiesCollapse" aria-expanded="true" aria-controls="policiesCollapse">
                           Policies
                           <i class="fa fa-plus"></i>
                           <i class="fa fa-minus" style="display: none"></i>
                           </button>
                        </h2>
                     </div>
                     <div id="policiesCollapse" class="collapse additional-collapse" aria-labelledby="policies_id"
                        data-parent="#accordionExample">
                        <div class="card-body h-100">
                           <div class="accordion accordion-ex" id="policiesAccordion">
                              <div class="card">
                                 <div class="card-header" id="policesOne">
                                    <h2 class="mb-0">
                                       <button class="btn btn-link btn-block btn-text-14 text-left btn-accordion collapsed" type="button"
                                          data-toggle="collapse" data-target="#policies1" aria-expanded="false"
                                          aria-controls="policies1">
                                       Collapsible Group Item #1
                                       <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                       </button>
                                    </h2>
                                 </div>
                                 <div id="policies1" class="collapse" aria-labelledby="policesOne"
                                    data-parent="#policiesAccordion">
                                    <div class="card-body">
                                       Some placeholder content for the first accordion panel. This panel is shown by default,
                                       thanks
                                       to
                                       the <code>.show</code> class.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header" id="policesTwo">
                                    <h2 class="mb-0">
                                       <button class="btn btn-link btn-block btn-text-14 text-left btn-accordion collapsed" type="button"
                                          data-toggle="collapse" data-target="#policies2" aria-expanded="false"
                                          aria-controls="policies2">
                                       Collapsible Group Item #2
                                       <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                       </button>
                                    </h2>
                                 </div>
                                 <div id="policies2" class="collapse" aria-labelledby="policesTwo"
                                    data-parent="#policiesAccordion">
                                    <div class="card-body">
                                       Some placeholder content for the first accordion panel. This panel is shown by default,
                                       thanks
                                       to
                                       the <code>.show</code> class.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header" id="policesThree">
                                    <h2 class="mb-0">
                                       <button class="btn btn-link btn-block btn-text-14 text-left btn-accordion collapsed" type="button"
                                          data-toggle="collapse" data-target="#policies3" aria-expanded="false"
                                          aria-controls="policies3">
                                       Collapsible Group Item #3
                                       <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                       </button>
                                    </h2>
                                 </div>
                                 <div id="policies3" class="collapse" aria-labelledby="policesThree"
                                    data-parent="#policiesAccordion">
                                    <div class="card-body">
                                       Some placeholder content for the first accordion panel. This panel is shown by default,
                                       thanks
                                       to
                                       the <code>.show</code> class.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- display on ipad only end -->
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
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="p-4 inner-warppa">
                                       <div class="add-txt">
                                          <h4 class="mb-4 added">Added to booking</h4>
                                          <h4 class="mb-4 title-additional-list">ONE WAY AIRPORT
                                             TRANSFER
                                          </h4>
                                          <p class="mb-4">
                                             Transfer to or from Ngurah Rai International Airport
                                             by
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
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                                       from booking</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="p-4 inner-warppa">
                                       <div class="add-txt">
                                          <h4 class="mb-4 added">Added to booking</h4>
                                          <h4 class="mb-4 title-additional-list">ROUNDTRIP AIRPORT
                                             TRANSFER
                                          </h4>
                                          <p class="mb-4">
                                             Relax with transfers to and from Ngurah Rai
                                             International
                                             Airport by private car. Suitable for up to four
                                             guests.
                                             Tax
                                             and service charge are not included. Price shown is
                                             for
                                             up
                                             to 4 guests.
                                          </p>
                                       </div>
                                       <div class="booking-qty">
                                          <p class="qty-label">Quantity</p>
                                          <div class="qty-button mb-4">
                                             <button type="button" id="sub" class="sub btn-qty">-</button>
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
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
                           <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                              data-target="#inroom-amenities" aria-expanded="false" aria-controls="inroom-amenities">
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
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="p-4 inner-warppa">
                                       <div class="add-txt">
                                          <h4 class="mb-4 added">Added to booking</h4>
                                          <h4 class="mb-4 title-additional-list">BOTTLE OF ROSE
                                             BALINESE WINE
                                          </h4>
                                          <p class="mb-4">
                                             Find a bottle of sparkling Balinese rosé in your
                                             room,
                                             awaiting your arrival.
                                          </p>
                                       </div>
                                       <div class="booking-qty">
                                          <p class="qty-label">Quantity</p>
                                          <div class="qty-button mb-4">
                                             <button type="button" id="sub" class="sub btn-qty">-</button>
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                                       from booking</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="p-4 inner-warppa">
                                       <div class="add-txt">
                                          <h4 class="mb-4 added">Added to booking</h4>
                                          <h4 class="mb-4 title-additional-list">BALINESE
                                             ORNAMENTAL BAMBOO POLE
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
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                                       from booking</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="p-4 inner-warppa">
                                       <div class="add-txt">
                                          <h4 class="mb-4 added">Added to booking</h4>
                                          <h4 class="mb-4 title-additional-list">ISLAND TROPICAL
                                             AMENITY
                                          </h4>
                                          <p class="mb-4">
                                             Step into your room and discover a true taste of
                                             Bali.
                                             This
                                             welcome platter includes fresh coconuts, seasonal
                                             fruit
                                             and
                                             assorted local desserts.
                                          </p>
                                       </div>
                                       <div class="booking-qty">
                                          <p class="qty-label">Quantity</p>
                                          <div class="qty-button mb-4">
                                             <button type="button" id="sub" class="sub btn-qty">-</button>
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
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
                           <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                              data-target="#spa-service" aria-expanded="false" aria-controls="spa-service">
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
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
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
                                             combining long rhythmic strokes with acupressure and
                                             reflexology techniques. Please Note: This is a
                                             request
                                             and not a booking, our spa team will contact you to
                                             confirm your desired appointment. Price shown is per
                                             treatment, per person.
                                          </p>
                                       </div>
                                       <div class="booking-qty">
                                          <p class="qty-label">Quantity</p>
                                          <div class="qty-button mb-4">
                                             <button type="button" id="sub" class="sub btn-qty">-</button>
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                                       from booking</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
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
                                             circulation. Please Note: This is a request and not
                                             a
                                             booking, our spa team will contact you to confirm
                                             your
                                             desired appointment. Price shown is per treatment,
                                             per
                                             person.
                                          </p>
                                       </div>
                                       <div class="booking-qty">
                                          <p class="qty-label">Quantity</p>
                                          <div class="qty-button mb-4">
                                             <button type="button" id="sub" class="sub btn-qty">-</button>
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                                       from booking</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
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
                                             pressure to points on the feet – as blissful as it
                                             is
                                             beneficial. Please Note: This is a request and not a
                                             booking, our spa team will contact you to confirm
                                             your
                                             desired appointment. Price shown is per treatment,
                                             per
                                             person.
                                          </p>
                                       </div>
                                       <div class="booking-qty">
                                          <p class="qty-label">Quantity</p>
                                          <div class="qty-button mb-4">
                                             <button type="button" id="sub" class="sub btn-qty">-</button>
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
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
                           <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                              data-target="#experiences" aria-expanded="false" aria-controls="experiences">
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
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
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
                                             combining long rhythmic strokes with acupressure and
                                             reflexology techniques. Please Note: This is a
                                             request
                                             and not a booking, our spa team will contact you to
                                             confirm your desired appointment. Price shown is per
                                             treatment, per person.
                                          </p>
                                       </div>
                                       <div class="booking-qty">
                                          <p class="qty-label">Quantity</p>
                                          <div class="qty-button mb-4">
                                             <button type="button" id="sub" class="sub btn-qty">-</button>
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                                       from booking</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
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
                                             circulation. Please Note: This is a request and not
                                             a
                                             booking, our spa team will contact you to confirm
                                             your
                                             desired appointment. Price shown is per treatment,
                                             per
                                             person.
                                          </p>
                                       </div>
                                       <div class="booking-qty">
                                          <p class="qty-label">Quantity</p>
                                          <div class="qty-button mb-4">
                                             <button type="button" id="sub" class="sub btn-qty">-</button>
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                                       from booking</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
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
                                             pressure to points on the feet – as blissful as it
                                             is
                                             beneficial. Please Note: This is a request and not a
                                             booking, our spa team will contact you to confirm
                                             your
                                             desired appointment. Price shown is per treatment,
                                             per
                                             person.
                                          </p>
                                       </div>
                                       <div class="booking-qty">
                                          <p class="qty-label">Quantity</p>
                                          <div class="qty-button mb-4">
                                             <button type="button" id="sub" class="sub btn-qty">-</button>
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                                       from booking</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
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
                                             circulation. Please Note: This is a request and not
                                             a
                                             booking, our spa team will contact you to confirm
                                             your
                                             desired appointment. Price shown is per treatment,
                                             per
                                             person.
                                          </p>
                                       </div>
                                       <div class="booking-qty">
                                          <p class="qty-label">Quantity</p>
                                          <div class="qty-button mb-4">
                                             <button type="button" id="sub" class="sub btn-qty">-</button>
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                                       from booking</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
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
                                             pressure to points on the feet – as blissful as it
                                             is
                                             beneficial. Please Note: This is a request and not a
                                             booking, our spa team will contact you to confirm
                                             your
                                             desired appointment. Price shown is per treatment,
                                             per
                                             person.
                                          </p>
                                       </div>
                                       <div class="booking-qty">
                                          <p class="qty-label">Quantity</p>
                                          <div class="qty-button mb-4">
                                             <button type="button" id="sub" class="sub btn-qty">-</button>
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                                       from booking</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
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
                                             circulation. Please Note: This is a request and not
                                             a
                                             booking, our spa team will contact you to confirm
                                             your
                                             desired appointment. Price shown is per treatment,
                                             per
                                             person.
                                          </p>
                                       </div>
                                       <div class="booking-qty">
                                          <p class="qty-label">Quantity</p>
                                          <div class="qty-button mb-4">
                                             <button type="button" id="sub" class="sub btn-qty">-</button>
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                                       from booking</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                 <div class="additional-list p-0">
                                    <div class="inner-wrapper mb-3">
                                       <div class="pr-lst result-grid">
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
                                          </div>
                                          <div>
                                             <img src="images/98d13b87078871.5dad9554e33ef.jpg" class="w-100" alt="">
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
                                             pressure to points on the feet – as blissful as it
                                             is
                                             beneficial. Please Note: This is a request and not a
                                             booking, our spa team will contact you to confirm
                                             your
                                             desired appointment. Price shown is per treatment,
                                             per
                                             person.
                                          </p>
                                       </div>
                                       <div class="booking-qty">
                                          <p class="qty-label">Quantity</p>
                                          <div class="qty-button mb-4">
                                             <button type="button" id="sub" class="sub btn-qty">-</button>
                                             <input class="form-qty" type="number" id="1" value="1" min="1" />
                                             <button type="button" id="add" class="add btn-qty">+</button>
                                          </div>
                                          <p class="qty-label">€16.00</p>
                                       </div>
                                       <div class="confirm-qty">
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                       <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                       <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                                       from booking</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <h4 class="mt-5 mb-4 color-dark-grey">Inspiration</h4>
               <div class="row">
                  <div class="col-md-4 mb-4">
                     <div class="mb-3">
                        <img src="images/ddumy.jpg" class="img-fluid" alt="">
                     </div>
                     <h4>Off the beaten track</h4>
                     <p>Here are some of your favourite winter sun destinations</p>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="mb-3">
                        <img src="images/ddumy.jpg" class="img-fluid" alt="">
                     </div>
                     <h4>Off the beaten track</h4>
                     <p>Here are some of your favourite winter sun destinations</p>
                  </div>
                  <div class="col-md-4 mb-4">
                     <div class="mb-3">
                        <img src="images/ddumy.jpg" class="img-fluid" alt="">
                     </div>
                     <h4>Off the beaten track</h4>
                     <p>Here are some of your favourite winter sun destinations</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Modal Info -->
<div class="modal fade" id="priceModal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body">
            <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <div class="row m-0 price-lst-table-head">
               <div class="col-6 pl-0">DETAILS</div>
               <div class="col-3 text-right">USD</div>
               <div class="col-3 pr-0 text-right">ZAR</div>
            </div>
            <div class="row m-0 list-prs">
               <div class="col-6 pl-0"><a href="#" class="btn-prc-title" data-price="#pr-11">Subtotal for
                  7
                  nights <span class="arrow-down"></span></a>
               </div>
               <div class="col-3 text-right">$2,250</div>
               <div class="col-3 pr-0 text-right">R33,202</div>
               <div class="col-12 sub-price-content" id="pr-11">
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
               <div class="col-6 pl-0"><a href="#" class="btn-prc-title" data-price="#pr-22">Hotel
                  taxes & fees <span class="arrow-down"></span></a>
               </div>
               <div class="col-3 text-right">$2,250</div>
               <div class="col-3 pr-0 text-right">R33,202</div>
               <div class="col-12 sub-price-content" id="pr-22">
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
         </div>
      </div>
   </div>
</div>
<!-- Modal Info End -->

<!-- Reservation -->
<div class="sidebar-main pb-0" id="policies">
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
      <div class="title-main mb-4">
         <h2>Policies</h2>
         <a href="#" class="print-btn">
         <i class="ico ico-print"></i>
         </a>
      </div>
      <div class="accordion accordion-ex" id="accordionExample">
         <div class="card">
            <div class="card-header" id="headingOne">
               <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left btn-accordion collapsed" type="button"
                     data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                     aria-controls="collapseOne">
                  Collapsible Group Item #1
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </button>
               </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
               <div class="card-body">
                  Some placeholder content for the first accordion panel. This panel is shown by default, thanks
                  to
                  the <code>.show</code> class.
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header" id="headingTwo">
               <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left btn-accordion collapsed" type="button"
                     data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                     aria-controls="collapseTwo">
                  Collapsible Group Item #2
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </button>
               </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
               <div class="card-body">
                  Some placeholder content for the second accordion panel. This panel is hidden by default.
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header" id="headingThree">
               <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left btn-accordion collapsed" type="button"
                     data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                     aria-controls="collapseThree">
                  Collapsible Group Item #3
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </button>
               </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
               <div class="card-body">
                  And lastly, the placeholder content for the third and final accordion panel. This panel is
                  hidden
                  by default.
               </div>
            </div>
         </div>
      </div>
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
                              <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
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
                              <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
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
                              <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
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
                              <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
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
                              <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
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
                              <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
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
                              <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
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
                              <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
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
                              <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
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
                                 <div id="daterangepicker-inline-container" class="daterangepicker-inline">
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
                        Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff I
                        interacted with were great. One of the best hotel experiences I have ever had I would
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
                        Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding. He
                        managed to arrange for us to attend the Woody Allan Band show with our guest (who is a
                        musician) even when it had been booked out and was very courteous throughout. Thank you
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
                        Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff I
                        interacted with were great. One of the best hotel experiences I have ever had I would
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
                        Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding. He
                        managed to arrange for us to attend the Woody Allan Band show with our guest (who is a
                        musician) even when it had been booked out and was very courteous throughout. Thank you
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
                        Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff I
                        interacted with were great. One of the best hotel experiences I have ever had I would
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
                        Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding. He
                        managed to arrange for us to attend the Woody Allan Band show with our guest (who is a
                        musician) even when it had been booked out and was very courteous throughout. Thank you
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
                        Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff I
                        interacted with were great. One of the best hotel experiences I have ever had I would
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
                        Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding. He
                        managed to arrange for us to attend the Woody Allan Band show with our guest (who is a
                        musician) even when it had been booked out and was very courteous throughout. Thank you
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                    <h4 class="mb-4 title-additional-list">ROUNDTRIP AIRPORT TRANSFER</h4>
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                    <h4 class="mb-4 title-additional-list">BOTTLE OF ROSE BALINESE WINE</h4>
                                    <p class="mb-4">
                                       Find a bottle of sparkling Balinese rosé in your room,
                                       awaiting your arrival.
                                    </p>
                                 </div>
                                 <div class="booking-qty">
                                    <p class="qty-label">Quantity</p>
                                    <div class="qty-button mb-4">
                                       <button type="button" id="sub" class="sub btn-qty">-</button>
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                    <h4 class="mb-4 title-additional-list">BALINESE ORNAMENTAL BAMBOO POLE
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                                       <input class="form-qty" type="number" id="1" value="1" min="1" />
                                       <button type="button" id="add" class="add btn-qty">+</button>
                                    </div>
                                    <p class="qty-label">€16.00</p>
                                 </div>
                                 <div class="confirm-qty">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                 </div>
                                 <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                                 <a href="#" class="btn-red-link mt-2 remove-booking">Remove from booking</a>
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
                  <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg" class="img-full"
                     alt="">
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
                  nights <span class="arrow-down toup"></span></a>
               </div>
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
                  taxes & fees <span class="arrow-down toup"></span></a>
               </div>
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
   <div class="sidebar-scroller">
      <div class="d-flex align-items-center mb-5">
         <a href="#" class="sidebar-back">
         <i class="ico ico-back"></i>
         </a>
         <h3 class="title-second title-line mb-0">
            The Ludlow Hotel
         </h3>
      </div>
      <div class="row">
         <div class="col-8">
            <div class="text-right mb-4">
               <a href="#" class="btn btn-dark btn-lg px-5 rounded-0">BOOK</a>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="row mb-5">
               <div class="col-lg-4 col-md-6 mb-5">
                  <div class="qv-list">
                     <h4>Address</h4>
                     <i class="fa fa-map-marker" aria-hidden="true"></i> 35 east 76th st, New York
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-5">
                  <div class="qv-list">
                     <h4>Internet</h4>
                     <p class="mb-0"><b>Public areas :</b> Free</p>
                     <p class="mb-0"><b>In room :</b> Free</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-5">
                  <div class="qv-list">
                     <h4>Children policy</h4>
                     <p class="mb-0">Children are welcome</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-5">
                  <div class="qv-list">
                     <h4>Check-in / Check-out</h4>
                     <p class="mb-0"><b>Check-in :</b> 3 pm</p>
                     <p class="mb-0"><b>Check-out :</b> noon</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-5">
                  <div class="qv-list">
                     <h4>Transportation and transfer</h4>
                     <p class="mb-0"><b>Transfer :</b> subject to supplement</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-5">
                  <div class="qv-list">
                     <h4>Smooking policy</h4>
                     <p class="mb-0">Non smooking public spaces</p>
                     <p class="mb-0"><b>Smooking rooms:</b> not available</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-5">
                  <div class="qv-list">
                     <h4>Rooms</h4>
                     <p class="mb-0">190 rooms and suites</p>
                     <p class="mb-0"><b>In-room amenities :</b> iPod dock, flatscreen TV, in-room safe, minibar</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-5">
                  <div class="qv-list">
                     <h4>Available services</h4>
                     <p class="mb-0">Air conditioned hotel</p>
                     <p class="mb-0">Laundry service</p>
                     <p class="mb-0">Concirge service</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-5">
                  <div class="qv-list">
                     <h4>Pets</h4>
                     <p class="mb-0">Small dogs allowed</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-5">
                  <div class="qv-list">
                     <h4>Parking</h4>
                     <p class="mb-0"><b>Car park / valet service :</b> 65 US$ per day</p>
                  </div>
               </div>
            </div>
            <h4 class="mb-4">Amenities</h4>
            <div class="row mb-5">
               <div class="col-md-3 col-sm-6 mb-4">
                  <p class="mb-0">Pool</p>
                  <p class="mb-0">Wlan</p>
                  <p class="mb-0">Smart-TV</p>
                  <p class="mb-0">Koffeemaschine</p>
                  <p class="mb-0">Laundry service</p>
               </div>
               <div class="col-md-3 col-sm-6 mb-4">
                  <p class="mb-0">Pool</p>
                  <p class="mb-0">Wlan</p>
                  <p class="mb-0">Smart-TV</p>
                  <p class="mb-0">Koffeemaschine</p>
                  <p class="mb-0">Laundry service</p>
               </div>
               <div class="col-md-3 col-sm-6 mb-4">
                  <p class="mb-0">Pool</p>
                  <p class="mb-0">Wlan</p>
                  <p class="mb-0">Smart-TV</p>
                  <p class="mb-0">Koffeemaschine</p>
                  <p class="mb-0">Laundry service</p>
               </div>
               <div class="col-md-3 col-sm-6 mb-4">
                  <p class="mb-0">Pool</p>
                  <p class="mb-0">Wlan</p>
                  <p class="mb-0">Smart-TV</p>
                  <p class="mb-0">Koffeemaschine</p>
                  <p class="mb-0">Laundry service</p>
               </div>
            </div>
            <div class="row my-5">
               <div class="col text-center">
                  <div class="i-touch">
                     <p><i class="ico ico-covid"></i></p>
                     <p>Corona Conscious</p>
                  </div>
               </div>
               <div class="col text-center">
                  <div class="i-touch">
                     <p><i class="ico ico-hotel-line"></i></p>
                     <p>Handpicked Collection</p>
                  </div>
               </div>
               <div class="col text-center">
                  <div class="i-touch">
                     <p><i class="ico ico-bells"></i></p>
                     <p>Personalize Service</p>
                  </div>
               </div>
               <div class="col text-center">
                  <div class="i-touch">
                     <p><i class="ico ico-gift"></i></p>
                     <p>Perks & Offers</p>
                  </div>
               </div>
               <div class="col text-center">
                  <div class="i-touch">
                     <p><i class="ico ico-shield"></i></p>
                     <p>Price Matching</p>
                  </div>
               </div>
               <div class="col text-center">
                  <div class="i-touch">
                     <p><i class="ico ico-pay"></i></p>
                     <p>Trusted by Visa</p>
                  </div>
               </div>
               <div class="col text-center">
                  <div class="i-touch">
                     <p><i class="ico ico-lock"></i></p>
                     <p>Secure Booking</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div id="map2"></div>
         </div>
      </div>
      <div class="text-center mb-4">
         <a href="#" class="btn btn-dark btn-lg px-5 rounded-0">BOOK</a>
      </div>
   </div>
</div>

<!-- gallery -->
<div class="sidebar-main pt-4 " id="gallery">
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
            The Ludlow Hotel
         </h3>
      </div>
      <ul class="nav nav-tab-main nav-pills nav-justified mb-2">
         <li class="nav-item">
            <a class="nav-link active" href="#hotel_gallery" id="hotel_gallery-tab" data-toggle="tab" role="tab"
               aria-controls="hotel_gallery" aria-selected="true">
            Hotel
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#suite_gallery" id="suite_gallery-tab" data-toggle="tab" role="tab"
               aria-controls="suite_gallery" aria-selected="false">
            Suites
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#experience_gallery" id="experience_gallery-tab" data-toggle="tab" role="tab"
               aria-controls="experience_gallery" aria-selected="false">
            Experience
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#restaurant_gallery" id="restaurant_gallery-tab" data-toggle="tab" role="tab"
               aria-controls="restaurant_gallery" aria-selected="false">
            Restaurant
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#bars_gallery" id="bars_gallery-tab" data-toggle="tab" role="tab"
               aria-controls="bars_gallery" aria-selected="false">
            Bars
            </a>
         </li>
      </ul>
   </div>
   <div class="tab-content h-100">
      <div id="hotel_gallery" class="tab-pane fade show active" role="tabpanel" aria-labelledby="hotel_gallery-tab">
         <div class="sidebar-scroller pt-2 is-gallery">
            <div class="gallery-wrapper">
               <div class="row justify-content-center">
                  <div class="col-8">
                     <div class="grid-layout" id="gallery_hotel">
                        <a href="images/29be6592342279.5e49609509d85.jpg"
                           data-sub-html="Lorem ipsum dolor sit amet" class="grid-item span-1">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-1"
                           data-sub-html="Adipisicing elit">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                           data-sub-html="Lorem ipsum dolor sit amet">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2 grid-row-1"
                           data-sub-html="Lorem ipsum dolor sit amet">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                           data-sub-html="Dignissimos quas">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="restaurant_gallery" class="tab-pane fade" role="tabpanel" aria-labelledby="restaurant_gallery-tab">
         <div class="sidebar-scroller pt-2 is-gallery">
            <div class="gallery-wrapper">
               <div class="row justify-content-center">
                  <div class="col-4">
                     <ul class="nav flex-column nav-sidebar ">
                        <li class="nav-item">
                           <a class="nav-link" href="#">Restaurants</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Two Bedroom Premiere Suite</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Courtyard Junior Suites</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">The Mark 3 Bedroom</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-8">
                     <div class="grid-layout" id="gallery_restaurant">
                        <a href="images/29be6592342279.5e49609509d85.jpg"
                           data-sub-html="Lorem ipsum dolor sit amet" class="grid-item span-1">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-1"
                           data-sub-html="Adipisicing elit">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                           data-sub-html="Lorem ipsum dolor sit amet">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2 grid-row-1"
                           data-sub-html="Lorem ipsum dolor sit amet">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                           data-sub-html="Dignissimos quas">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="bars_gallery" class="tab-pane fade" role="tabpanel" aria-labelledby="bars_gallery-tab">
         <div class="sidebar-scroller pt-2 is-gallery">
            <div class="gallery-wrapper">
               <div class="row justify-content-center">
                  <div class="col-4">
                     <ul class="nav flex-column nav-sidebar ">
                        <li class="nav-item">
                           <a class="nav-link" href="#">Restaurants</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Two Bedroom Premiere Suite</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Courtyard Junior Suites</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">The Mark 3 Bedroom</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-8">
                     <div class="grid-layout" id="gallery_bars">
                        <a href="images/29be6592342279.5e49609509d85.jpg"
                           data-sub-html="Lorem ipsum dolor sit amet" class="grid-item span-1">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-1"
                           data-sub-html="Adipisicing elit">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                           data-sub-html="Lorem ipsum dolor sit amet">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2 grid-row-1"
                           data-sub-html="Lorem ipsum dolor sit amet">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                           data-sub-html="Dignissimos quas">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="experience_gallery" class="tab-pane fade" role="tabpanel" aria-labelledby="experience_gallery-tab">
         <div class="sidebar-scroller pt-2 is-gallery">
            <div class="gallery-wrapper">
               <div class="row justify-content-center">
                  <div class="col-4">
                     <ul class="nav flex-column nav-sidebar ">
                        <li class="nav-item">
                           <a class="nav-link" href="#">Restaurants</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Two Bedroom Premiere Suite</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Courtyard Junior Suites</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">The Mark 3 Bedroom</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-8">
                     <div class="grid-layout" id="gallery_experience">
                        <a href="images/29be6592342279.5e49609509d85.jpg"
                           data-sub-html="Lorem ipsum dolor sit amet" class="grid-item span-1">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-1"
                           data-sub-html="Adipisicing elit">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                           data-sub-html="Lorem ipsum dolor sit amet">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2 grid-row-1"
                           data-sub-html="Lorem ipsum dolor sit amet">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                           data-sub-html="Dignissimos quas">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="suite_gallery" class="tab-pane fade" role="tabpanel" aria-labelledby="suite_gallery-tab">
         <div class="sidebar-scroller pt-2 is-gallery">
            <div class="gallery-wrapper">
               <div class="row justify-content-center">
                  <div class="col-4">
                     <ul class="nav flex-column nav-sidebar ">
                        <li class="nav-item">
                           <a class="nav-link" href="#">Restaurants</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Two Bedroom Premiere Suite</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Courtyard Junior Suites</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">The Mark 3 Bedroom</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-8">
                     <div class="grid-layout" id="gallery_suite">
                        <a href="images/29be6592342279.5e49609509d85.jpg"
                           data-sub-html="Lorem ipsum dolor sit amet" class="grid-item span-1">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-1"
                           data-sub-html="Adipisicing elit">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                           data-sub-html="Lorem ipsum dolor sit amet">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2 grid-row-1"
                           data-sub-html="Lorem ipsum dolor sit amet">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                        <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/Gandhiva-Restaurant-7.jpg" alt="">
                        </a>
                        <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                           data-sub-html="Dignissimos quas">
                        <img src="images/29be6592342279.5e49609509d85.jpg" alt="">
                        </a>
                        <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2"
                           data-sub-html="Dignissimos quas">
                        <img src="images/hotel-kjsdksd.jpg" alt="">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Reservation End -->


{{-- For custom script --}}
@section('custom_js')
    @parent
@endsection
