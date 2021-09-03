<?php

  $mapsearch = URL::to("mapsearchavailability?" . Request::getQueryString());
  $videourl = URL::to("social-youtube?" . Request::getQueryString());
  $instagramurl = URL::to("social-instagram?" . Request::getQueryString());

?>
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
    <div class="container pt-5">
      <div class="d-flex align-items-center nav-desc main-title-heading my-5">
        <a href="#" class="sidebar-back" title="Go back to previous page" data-toggle="tooltip">
          <i class="ico ico-back"></i>
        </a>
        <div class="title-main">
          <h2>{{$keyword}}<a href="#searchF" data-toggle="collapse"><i class="ico ico-reload reload-offset" title="Reset your search result" data-toggle="tooltip"></i></a>
          </h2>
          <input type="hidden" name="activeDestination" value="{{$keyword}}" />
          <input type="hidden" name="m_type" value="{{$m_type}}" />
          <input type="hidden" name="hid_propid" value="" />
        </div>

      </div>
      <div class="row mt-5 mmt-0" id="main-content">
        <div class="col-lg-3 col-sm-3 position-relative">
          <div class="sidebar-nav-section" id="sidebar">
            <div class="humburger-menu-sidebar">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>

            <div class="onstickmainpage2 nav-collapse main-nav-sidebar">
              <div class="navheadimage">
                <img src="https://emporium-voyage.com/uploads/category_imgs/1522478496-67775161.jpg" alt=""
                  class="mCS_img_loaded desaturate">
                <div class="headingoverlay">
                  <span class="destinationTitle">Austria<br>
                    <span class="hashTag">#loveluxuryaustria</span>
                  </span>
                </div>
              </div>
              <a href="#" class="close-second-menu">
                <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
                  xmlns="http://www.w3.org/2000/svg">
                  <title>Close</title>
                  <path
                    d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                  </path>
                </svg>
              </a>
              <ul class="nav flex-column nav-sidebar ">
                <li class="nav-item">
                  <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#experiences" role="button"
                    aria-expanded="false" aria-controls="experiences">
                    Experiences
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                @if(!empty($experiences))
                  <div class="collapse @@suiteActive" id="experiences">
                    <ul class="nav flex-column nav-sidebar is-small">
                    @foreach($experiences as $exp)
                        <li class="nav-item">
                          <a class="nav-link nav-link-sub experiences"  data-exp="{{$exp->category_name}}">{{ $exp->category_name }}</a>
                        </li>
                    @endforeach
                    </ul>
                  </div>
                @endif
                </li>

                <li class="nav-item mt-3">
                  <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#suite" role="button"
                    aria-expanded="false" aria-controls="suite">
                    Explore <span class="font-italic underline">{{ $keyword }}</span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                  <div class="collapse @@suiteActive" id="suite">
                    <ul class="nav flex-column nav-sidebar is-small">
                      <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="restaurant.html">Restaurants & Bars</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="{{ $videourl }}">Video Channel</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="{{ $instagramurl }}">Get Social</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="{{ $mapsearch }}">Map Search</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </div>
        <div class="col-lg-9 content-lg">
          <div class="main-page-banner">
            <div class="img-main-banner">
              <div>
                <img src="uploads/category_imgs/<?php echo $location[0]['category_image']; ?>" class="img-fluid"
                  alt="">
              </div>
              <div>
                <img src="https://www.emporium-voyage.com/uploads/slider_images/1517173449-45205782.jpg"
                  class="img-fluid" alt="">
              </div>
            </div>
            <ul class="nav nav-pills nav-clr nav-breadcrumb nav-breadcrumb-ip breadcrumb-main mb-3 mt-3">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <?php foreach($path as $cid => $cat):?>
              <li class="nav-item">
                <a class="nav-link" href="#"><?php echo $cat ?></a>
              </li>
              <?php endforeach;?>          
            </ul>
            <div class="hotel-meta hotel-meta-banner">
              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#quickinfo">
                Info
              </a>
              <a href="#" class="view bg-btn-gl-001 btn-sidebar" data-sidebar="#gallery">
                Gallery
              </a>
              <a href="#" class="view bg-btn-gl-001">
                Videos
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
            <div class="main-banner-content">
              <div class="content-inner">
                <h3 class="mb-4">{{ $keyword }}</h3>
                <p>
                  <?php echo $location[0]['category_description'];?>
                </p>
              </div>
            </div>
          </div>
          <div class="line-separate "></div>
          <div class="row">
            <div class="col-sm-8 mb-4">
              <div class="hotel-page-list suite-ontouch no-opacity index-2">
                <img src="images/43182548507-84265125335.jpg" class="img-fluid" alt="">
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
                <div class="hotel-meta-mobile">
                  <a href="detail-page.html" class="btn rounded-0">
                    Suite Info
                  </a>
                  <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                    Check Availability
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-4">
              <h3 class="title-line is-small fadeInUp ">Editors choice hotel</h3>
              <p class="mt-4">
                Think about New York of the 1980s with its large artwork, early hip hop, and punk rock scenes. Then
                translate that vitality to a lodge on the Decrease East Aspect. Put collectively you get The Ludlow
                Resort.
              </p>
            </div>
          </div>
          <div class="row ">
            <div class="col-sm-4 mb-4">
              <a href="detail-page.html">
                <div class="title-offset title-offset-2 mt-5 ">
                  <h3 class="title-second title-line mb-0">The Ludlow Hotel</h3>
                  <h4 class="title-font-2 title-third">experience</h4>
                </div>
              </a>
            </div>
            <div class="col-sm-8 mb-4">
              <div class="img-offset hotel-page-list suite-ontouch off-set-123">
                <div class="img-offset-slide offsets---190">
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
                <div class="hotel-meta-mobile">
                  <a href="detail-page.html" class="btn rounded-0">
                    Suite Info
                  </a>
                  <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                    Check Availability
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="line-separate "></div>
          <div class="row">
            <div class="col-sm-8 mb-4">
              <div class="hotel-page-list suite-ontouch no-opacity index-2">
                <img src="images/43182548507-84265125335.jpg" class="img-fluid" alt="">
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
                <div class="hotel-meta-mobile">
                  <a href="detail-page.html" class="btn rounded-0">
                    Suite Info
                  </a>
                  <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                    Check Availability
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-4">
              <h3 class="title-line is-small  fadeInUp ">Editors choice hotel</h3>
              <p class=" mt-4 ">
                Think about New York of the 1980s with its large artwork, early hip hop, and punk rock scenes. Then
                translate that vitality to a lodge on the Decrease East Aspect. Put collectively you get The Ludlow
                Resort.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 mb-4">
              <a href="detail-page.html">
                <div class="title-offset title-offset-2 mt-5 ">
                  <h3 class="title-second title-line mb-0">The Ludlow Hotel</h3>
                  <h4 class="title-font-2 title-third">experience</h4>
                </div>
              </a>
            </div>
            <div class="col-sm-8 mb-4">
              <div class="img-offset off-set-123">
                <div class="img-offset hotel-page-list suite-ontouch ">
                  <div class="img-offset-slide offsets---190">
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
                  <div class="hotel-meta-mobile">
                    <a href="#" class="btn rounded-0">
                      Suite Info
                    </a>
                    <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                      Check Availability
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="line-separate "></div>
          <div class="row">
            <div class="col-sm-7 mb-4">
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
                <div class="hotel-meta-mobile">
                  <a href="detail-page.html" class="btn rounded-0">
                    Suite Info
                  </a>
                  <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                    Check Availability
                  </a>
                </div>
              </div>

              <a href="detail-page.html">
                <div class="title-offset mt-5">
                  <h3 class="title-second title-line mb-0">The Ludlow Hotel</h3>
                  <h4 class="title-font-2 title-third">experience</h4>
                </div>
              </a>

            </div>
            <div class="col-sm-5 mb-4">
              <div class="fetaruer py-5 pl-5 pr-0">
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


          <div class="row mt-5">
            <div class="col-sm-5 mb-4">
              <div class="fetaruer py-5 pl-0 pr-5 ">
                <a href="suite.html" class="dtl-link">
                  <h3 class="title-3 title-i text-right">— featured hotel —</h3>
                </a>
                <p class="font-2 text-right">
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
            <div class="col-sm-7 mb-4">
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
                <div class="hotel-meta-mobile">
                  <a href="detail-page.html" class="btn rounded-0">
                    Suite Info
                  </a>
                  <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                    Check Availability
                  </a>
                </div>
              </div>
              <a href="suite.html">
                <div class="title-offset mt-5 relax-offset" data-rellax-speed="1" data-rellax-percentage="0.1">
                  <h3 class="title-second title-line mb-0">11 Howard</h3>
                  <h4 class="title-font-2 title-third">experience</h4>
                </div>
              </a>

            </div>
          </div>
          <div class="mobile-off">
            <p>396 exceptional hotels</p>
            <ul class="nav nav-tabs tabs-w3" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="lifestyle-tab" data-toggle="tab" href="#lifestyle" role="tab"
                  aria-controls="lifestyle" aria-selected="true">LIFESTYLE</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="dedicated-tab" data-toggle="tab" href="#dedicated" role="tab"
                  aria-controls="dedicated" aria-selected="false">DEDICATED</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="bespoke-tab" data-toggle="tab" href="#bespoke" role="tab"
                  aria-controls="bespoke" aria-selected="false">BESPOKE</a>
              </li>
            </ul>
          </div>
          <div class="dropdown dropdown-block mobile-on">
            <button class="btn btn-outline-dark btn-block dropdown-toggle" type="button" id="dropdownMenuButton"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              396 exceptional hotels
            </button>
            <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="tab" href="#lifestyle">Lifestyle</a>
              <a class="dropdown-item" data-toggle="tab" href="#dedicated">Dedicated</a>
              <a class="dropdown-item" data-toggle="tab" href="#bespoke">Bespoke</a>
            </div>
          </div>
          <div class="tab-content pt-5" id="myTabContent">
            <div class="tab-pane fade show active" id="lifestyle" role="tabpanel" aria-labelledby="lifestyle-tab">
              <div class="row">
                <div class="col-lg-6 col-md-6 mb-5 ">
                  <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
                    <div class="pr-lst result-grid">
                      <div>
                        <img src="images/Emporium-Collection_129.jpg" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" alt="">
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
                    <div class="hotel-meta-mobile">
                      <a href="detail-page.html" class="btn rounded-0">
                        Suite Info
                      </a>
                      <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                        Check Availability
                      </a>
                    </div>
                  </div>
                  <a href="#">
                    <div class="title-offset mt-5 ">
                      <h3 class="title-second title-line mb-0">11 Howard</h3>
                      <h4 class="title-font-2 title-third">experience</h4>
                    </div>
                  </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 ">
                  <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
                    <div class="pr-lst result-grid">
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/64133123060-77799344932.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
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
                    <div class="hotel-meta-mobile">
                      <a href="detail-page.html" class="btn rounded-0">
                        Suite Info
                      </a>
                      <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                        Check Availability
                      </a>
                    </div>
                  </div>
                  <a href="#">
                    <div class="title-offset mt-5 ">
                      <h3 class="title-second title-line mb-0">11 Howard</h3>
                      <h4 class="title-font-2 title-third">experience</h4>
                    </div>
                  </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 ">
                  <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
                    <div class="pr-lst result-grid">
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
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
                    <div class="hotel-meta-mobile">
                      <a href="detail-page.html" class="btn rounded-0">
                        Suite Info
                      </a>
                      <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                        Check Availability
                      </a>
                    </div>
                  </div>
                  <a href="#">
                    <div class="title-offset mt-5 ">
                      <h3 class="title-second title-line mb-0">11 Howard</h3>
                      <h4 class="title-font-2 title-third">experience</h4>
                    </div>
                  </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 ">
                  <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
                    <div class="pr-lst result-grid">
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
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
                    <div class="hotel-meta-mobile">
                      <a href="detail-page.html" class="btn rounded-0">
                        Suite Info
                      </a>
                      <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                        Check Availability
                      </a>
                    </div>
                  </div>
                  <a href="#">
                    <div class="title-offset mt-5 ">
                      <h3 class="title-second title-line mb-0">11 Howard</h3>
                      <h4 class="title-font-2 title-third">experience</h4>
                    </div>
                  </a>
                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="dedicated" role="tabpanel" aria-labelledby="dedicated-tab">
              <div class="row">
                <div class="col-lg-6 col-md-6 mb-5 ">
                  <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
                    <div class="pr-lst result-grid">
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
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
                    <div class="hotel-meta-mobile">
                      <a href="detail-page.html" class="btn rounded-0">
                        Suite Info
                      </a>
                      <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                        Check Availability
                      </a>
                    </div>
                  </div>
                  <a href="#">
                    <div class="title-offset mt-5 ">
                      <h3 class="title-second title-line mb-0">11 Howard</h3>
                      <h4 class="title-font-2 title-third">experience</h4>
                    </div>
                  </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 ">
                  <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
                    <div class="pr-lst result-grid">
                      <div>
                        <img src="images/64133123060-77799344932.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
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
                    <div class="hotel-meta-mobile">
                      <a href="detail-page.html" class="btn rounded-0">
                        Suite Info
                      </a>
                      <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                        Check Availability
                      </a>
                    </div>
                  </div>
                  <a href="#">
                    <div class="title-offset mt-5 ">
                      <h3 class="title-second title-line mb-0">11 Howard</h3>
                      <h4 class="title-font-2 title-third">experience</h4>
                    </div>
                  </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 ">
                  <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
                    <div class="pr-lst result-grid">
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/64133123060-77799344932.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
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
                    <div class="hotel-meta-mobile">
                      <a href="detail-page.html" class="btn rounded-0">
                        Suite Info
                      </a>
                      <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                        Check Availability
                      </a>
                    </div>
                  </div>
                  <a href="#">
                    <div class="title-offset mt-5 ">
                      <h3 class="title-second title-line mb-0">11 Howard</h3>
                      <h4 class="title-font-2 title-third">experience</h4>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="bespoke" role="tabpanel" aria-labelledby="bespoke-tab">
              <div class="row">
                <div class="col-lg-6 col-md-6 mb-5 ">
                  <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
                    <div class="pr-lst result-grid">
                      <div>
                        <img src="images/64133123060-77799344932.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
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
                    <div class="hotel-meta-mobile">
                      <a href="detail-page.html" class="btn rounded-0">
                        Suite Info
                      </a>
                      <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                        Check Availability
                      </a>
                    </div>
                  </div>
                  <a href="#">
                    <div class="title-offset mt-5 ">
                      <h3 class="title-second title-line mb-0">11 Howard</h3>
                      <h4 class="title-font-2 title-third">experience</h4>
                    </div>
                  </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 ">
                  <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
                    <div class="pr-lst result-grid">
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
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
                    <div class="hotel-meta-mobile">
                      <a href="detail-page.html" class="btn rounded-0">
                        Suite Info
                      </a>
                      <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                        Check Availability
                      </a>
                    </div>
                  </div>
                  <a href="#">
                    <div class="title-offset mt-5 ">
                      <h3 class="title-second title-line mb-0">11 Howard</h3>
                      <h4 class="title-font-2 title-third">experience</h4>
                    </div>
                  </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 ">
                  <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
                    <div class="pr-lst result-grid">
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/64133123060-77799344932.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
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
                    <div class="hotel-meta-mobile">
                      <a href="detail-page.html" class="btn rounded-0">
                        Suite Info
                      </a>
                      <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                        Check Availability
                      </a>
                    </div>
                  </div>
                  <a href="#">
                    <div class="title-offset mt-5 ">
                      <h3 class="title-second title-line mb-0">11 Howard</h3>
                      <h4 class="title-font-2 title-third">experience</h4>
                    </div>
                  </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 ">
                  <div class="inner-wrapper hotel-page-list suite-ontouch no-opacity">
                    <div class="pr-lst result-grid">
                      <div>
                        <img src="images/64133123060-77799344932.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
                      </div>
                      <div>
                        <img src="images/53511811337-49267444221.jpg" class="w-100" alt="">
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
                    <div class="hotel-meta-mobile">
                      <a href="detail-page.html" class="btn rounded-0">
                        Suite Info
                      </a>
                      <a href="#calcF" data-toggle="collapse" class="btn btn-primary rounded-0">
                        Check Availability
                      </a>
                    </div>
                  </div>
                  <a href="#">
                    <div class="title-offset mt-5 ">
                      <h3 class="title-second title-line mb-0">11 Howard</h3>
                      <h4 class="title-font-2 title-third">experience</h4>
                    </div>
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

{{-- For custom script --}}
@section('custom_js')
    @parent
  <script>
        $(document).on('click', ".dest-collection", function(e){
                e.preventDefault();
                //var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                var d_name = $(this).attr('data-name');
                var cat =  $("input[name='cat']").val();
                var coll_type = 'destinations';
                var req_for = '';
                var cobj = $(this);
                //var token = $("input[name='_token']").val();

                $.ajax({
                    url:'{{URL::to("propcollection/")}}',
                    dataType:'json',
                    data: {d_name:d_name, coll_type:coll_type, cat:cat},
                    type: 'post',
                    success: function(response){

                        if(response.type=='dedicated-collection'){
                            var mem_types = response.mem_types;
                            if(mem_types.indexOf("2")>0){
                                //window.location.href = '{{URL::to('luxury_destinations')}}/'+cat+'/dedicated-collection';
                                //cat = $("#dd-destination").val();
                                getPropertyByCollection('dedicated-collection', cat, 1, req_for);
                                $(".dest-collection").removeClass('active');
                                cobj.addClass('active');
                                $("#dest_collection").val('dedicated-collection');
                            }else{
                                show_modal_content(response.type);
                                $("#showMemberLoginPopup").modal({backdrop: 'static', keyboard: false}, 'show');
                            }
                        }else if(response.type=='bespoke-collection'){
                            var mem_types = response.mem_types;
                            if(mem_types.indexOf("3")>0){
                                //window.location.href = '{{URL::to('luxury_experience')}}/'+cat+'/bespoke-collection';
                                //cat = $("#dd-destination").val();
                                getPropertyByCollection('bespoke-collection', cat, 1, req_for);
                                $(".dest-collection").removeClass('active');
                                cobj.addClass('active');
                                $("#dest_collection").val('bespoke-collection');
                            }else{
                                show_modal_content(response.type);
                                $("#showMemberLoginPopup").modal({backdrop: 'static', keyboard: false}, 'show');
                            }
                        }else{
                            //cat = $("#dd-destination").val();
                            getPropertyByCollection('lifestyle-collection', cat, 1, req_for);
                            $(".dest-collection").removeClass('active');
                            cobj.addClass('active');
                            $("#dest_collection").val('lifestyle-collection');
                            //window.location.href = '{{URL::to('luxury_experience')}}/'+cat+'/lifestyle-collection';
                        }
                    }
                });
            });

        </script>
@endsection
