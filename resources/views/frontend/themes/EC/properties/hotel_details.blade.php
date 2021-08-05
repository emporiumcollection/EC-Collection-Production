@extends('frontend.themes.EC.layouts.main')

@section('meta_keywords', '')
@section('meta_description', '')

@section('content')
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
                    <a href="#" class="close-second-menu">
                      <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <title>Close</title>
                        <path d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                        </path>
                      </svg>
                    </a>
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
                          </ul>
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
              <div class="col-lg-8 col-hotel-slider">
                <div class="text-right">
                  <div class="dropdown dropdown-suite ipad-view mb-3">
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
                    <div>
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
                    </div>
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
                <div class="hotel-meta-mobile meta-sticky">
                  <div class="dropdown dropdown-suite w-100">
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
                    Reservation
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
                    <h2>The Ludlow Hotel</h2>
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
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="side-detail mb-3">
                    <p>Free cancelation before <b>18 Feb 2020</b></p>
                    <p>Reserve now, pay at the Hotel</p>
                    <a href="reservation.html" class="btn btn-dark btn-block">Reservation</a>
                  </div>
                  <div class="side-detail text-left mb-3 px-2 i-none">
                    <h3 class="text-center mt-2 mb-0">
                    <span class="why-we"></span>
                    </h3>
                    <ul class="pl-4">
                      <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                      restaurant or in the drawing room.</li>
                      <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                      restaurant or in the drawing room.</li>
                      <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                      restaurant or in the drawing room.</li>
                      <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                      restaurant or in the drawing room.</li>
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
                  <div id="loveitcollapse" class="collapse additional-collapse hotel-info-panel" aria-labelledby="loveit"
                    data-parent="#accordionExample">
                    <div class="card-body h-100">
                      <h3 class="text-center mt-2 mb-3">
                      <span class="why-we"></span>
                      </h3>
                      <ul class="pl-4">
                        <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                        restaurant or in the drawing room.</li>
                        <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                        restaurant or in the drawing room.</li>
                        <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                        restaurant or in the drawing room.</li>
                        <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                        restaurant or in the drawing room.</li>
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
                  <div id="amenitieCollapse" class="collapse additional-collapse hotel-info-panel"
                    aria-labelledby="amenities1" data-parent="#accordionExample">
                    <div class="card-body h-100">
                      <h4 class="mb-4 color-dark-grey ">Amenities</h4>
                      <div class="row">
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
                        </div>
                        <div class="col-md-4 mb-4">
                          <p class="mb-0">Pool</p>
                          <p class="mb-0">Wlan</p>
                          <p class="mb-0">Smart-TV</p>
                          <p class="mb-0">Koffeemaschine</p>
                          <p class="mb-0">Laundry service</p>
                        </div>
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
                  <div id="hotelInfo" class="collapse additional-collapse hotel-info-panel" aria-labelledby="hotelInfo_id"
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
                  <div id="reviewCollapse" class="collapse additional-collapse hotel-info-panel"
                    aria-labelledby="review_id" data-parent="#accordionExample">
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
                  <div id="policiesCollapse" class="collapse additional-collapse hotel-info-panel"
                    aria-labelledby="policies_id" data-parent="#accordionExample">
                    <div class="card-body h-100">
                      <div class="accordion accordion-ex" id="policiesAccordion">
                        <div class="card">
                          <div class="card-header" id="policesOne">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block btn-text-14 text-left btn-accordion collapsed"
                            type="button" data-toggle="collapse" data-target="#policies1" aria-expanded="false"
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
                            <button class="btn btn-link btn-block btn-text-14 text-left btn-accordion collapsed"
                            type="button" data-toggle="collapse" data-target="#policies2" aria-expanded="false"
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
                            <button class="btn btn-link btn-block btn-text-14 text-left btn-accordion collapsed"
                            type="button" data-toggle="collapse" data-target="#policies3" aria-expanded="false"
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
                  <div id="transfers" class="collapse additional-collapse hotel-info-panel" aria-labelledby="headingOne"
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
                                TRANSFER</h4>
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
                                TRANSFER</h4>
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
                  <div id="inroom-amenities" class="collapse additional-collapse hotel-info-panel"
                    aria-labelledby="headingTwo" data-parent="#accordionExample">
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
                                AMENITY</h4>
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
                  <div id="spa-service" class="collapse additional-collapse hotel-info-panel"
                    aria-labelledby="headingThree" data-parent="#accordionExample">
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
                  <div id="experiences" class="collapse additional-collapse hotel-info-panel"
                    aria-labelledby="headingfour" data-parent="#accordionExample">
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
		            7 nights <span class="arrow-down"></span></a></div>
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
	            	<div class="col-6 pl-0"><a href="#" class="btn-prc-title" data-price="#pr-22">Hotel taxes & fees <span class="arrow-down"></span></a></div>
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
				                <p>Contact our Groups and Events team on 08989819281. and they'll take care of everything.</p>
				                
				                <a href="#" class="btn btn-dark rounded-0 px-5"><i class="fa fa-phone" aria-hidden="true"></i> REQUEST A CALL BACK</a>
				                <hr>
				                <p>Or send us an email and we'll get back to you prompty.</p>
				                <div class="row">
				                  <div class="col-8">
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
				                  <div class="col-4">
				                    <div class="barcode-suite mb-3">
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
				                <a href="#" class="availability-check saol-link">Check availability</a>
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
				            <a href="#" class="board-close"><i class="fa fa-times" aria-hidden="true"></i>
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
				                <a class="detail-policies" data-toggle="collapse" href="#breakfas"
				                  role="button" aria-expanded="false" aria-controls="breakfas">Details
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
				                <a class="detail-policies" data-toggle="collapse" href="#half"
				                  role="button" aria-expanded="false" aria-controls="half">Details &
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
				              <input type="checkbox" class="custom-control-input" id="customCheck2">
				              <label class="custom-control-label" for="customCheck2">
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
				              <input type="checkbox" class="custom-control-input" id="customCheck1">
				              <label class="custom-control-label" for="customCheck1">
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
				            <a href="#" class="board-close"><i class="fa fa-times" aria-hidden="true"></i>
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
				                <a class="detail-policies" data-toggle="collapse" href="#breakfas"
				                  role="button" aria-expanded="false" aria-controls="breakfas">Details
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
				                <a class="detail-policies" data-toggle="collapse" href="#half"
				                  role="button" aria-expanded="false" aria-controls="half">Details &
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
				              <input type="checkbox" class="custom-control-input" id="customCheck3">
				              <label class="custom-control-label" for="customCheck3">
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
				              <input type="checkbox" class="custom-control-input" id="customCheck4">
				              <label class="custom-control-label" for="customCheck4">
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
						                    <h4 class="mb-4 title-additional-list">ONE WAY AIRPORT
						                    TRANSFER</h4>
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
						                    <h4 class="mb-4 title-additional-list">ROUNDTRIP AIRPORT
						                    TRANSFER</h4>
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
						                    <h4 class="mb-4 title-additional-list">BOTTLE OF ROSE
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
						                      Delight someone special with this unique Balinese
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
						                    <h4 class="mb-4 title-additional-list">ISLAND TROPICAL
						                    AMENITY</h4>
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
						        <button class="btn btn-link btn-block text-left collapsed" type="button"
						        data-toggle="collapse" data-target="#spa-service" aria-expanded="false"
						        aria-controls="spa-service">
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
						        <button class="btn btn-link btn-block text-left collapsed" type="button"
						        data-toggle="collapse" data-target="#experiences" aria-expanded="false"
						        aria-controls="experiences">
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
						          <a href="#" class="underline color-grey" type="button" data-toggle="modal"
						          data-target="#priceModal"><i>Details and conditions</i></a>
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
				                <option value="GS">South Georgia and the South Sandwich Islands</option>
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
				          <h4 class="mb-4"><i class="fa fa-lock" aria-hidden="true"></i> Payment details <span
				          class="small color-grey">(*Required)</span></h4>
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
				              <input type="text" class="form-control" placeholder="****_****_****_****">
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
				            <p class="mb-0">Confirm number: 12313123122 - PIN code: 4681 - Unlink from your
				            business account</p>
				          </div>
				          <div class="inner-wrapper mb-3">
				            <div class="pr-lst result-grid">
				              <div>
				                <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" alt="">
				              </div>
				              <div>
				                <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" alt="">
				              </div>
				              <div>
				                <img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" alt="">
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
				          <div class="policies" id="policies">
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
				              class="fa fa-chevron-right right-arrow" aria-hidden="true"></i></a>
				            </li>
				            <li class="nav-item">
				              <a class="nav-link" href="#"><i class="fa fa-print" aria-hidden="true"></i>
				                Print details <i class="fa fa-chevron-right right-arrow"
				              aria-hidden="true"></i></a>
				            </li>
				            <li class="nav-item">
				              <a class="nav-link" href="#"><i class="fa fa-file" aria-hidden="true"></i>
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
				              class="fa fa-chevron-right right-arrow" aria-hidden="true"></i></a>
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

@endsection

@section('custom_js')
  @parent
@endsection