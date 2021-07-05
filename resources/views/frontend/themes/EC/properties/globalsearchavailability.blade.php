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

        <div class="row mt-5">
        <div class="col-lg-3">
            <div class="onstickmainpage2 onstick-width">
            <div class="d-flex align-items-center nav-desc">
                <a href="#" class="sidebar-back">
                    <i class="ico ico-back"></i>
                </a>
                <a href="#destination-menu" class="dest-link" data-toggle="collapse">
                Destinations
                </a>
            </div>
            <ul class="nav flex-column nav-sidebar ">
                <!-- <li class="nav-item">
                <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#experiences" role="button" aria-expanded="false"
                    aria-controls="experiences">
                    Experiences
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <div class="collapse @@suiteActive" id="experiences">
                    <ul class="nav flex-column nav-sidebar is-small">
                    <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="#">Design Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="#">Boutique Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="#">Spa and Wellness Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="#">Cullinary Delights</a>
                    </li>
                    </ul>
                </div>
                </li> -->


                @if(!empty($experiences))
                    <li class="nav-item">
                      <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#experiences" role="button" aria-expanded="false"
                      aria-controls="experiences">
                        Experiences
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                      </a>

                      <div class="collapse @@suiteActive" id="experiences">
                          <ul class="nav flex-column nav-sidebar is-small">
                            @foreach($experiences as $exp)
                                <li class="nav-item">
                                  <a class="nav-link experiences" data-exp="{{$exp->category_name}}">{{ $exp->category_name }}</a>
                                </li>
                            @endforeach
                          </ul>
                      </div>
                    </li>
                @endif

                <li class="nav-item mt-3">
                <a class="nav-link nav-link-parrent" data-toggle="collapse" href="#suite" role="button" aria-expanded="false"
                    aria-controls="suite">
                    Explore More
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <div class="collapse @@suiteActive" id="suite">
                    <ul class="nav flex-column nav-sidebar is-small">
                    <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="#">Restaurants & Bars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="#">Video Channel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="#">Get Social</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-sub" href="#">Map Search</a>
                    </li>
                    </ul>
                </div>
                </li>
            </ul>
            </div>
        </div>

        <div class="col-lg-9 content-lg">
          <div class="title-main mb-5 ">
            <h2>{{ $keyword }} <a href="index.html"><i class="ico ico-reload reload-offset"></i></a> </h2>
            <input type="hidden" name="activeDestination" value="{{ $keyword }}" />
            <input type="hidden" name="m_type" value="{{ $type }}" />
            <input type="hidden" name="hid_propid" />
          </div>
          <div class="load_ajax"></div>
          <!-- <div class="row">
            <div class="col-8 ">
              <div class="content-img">
                <a href="suite.html" class="dtl-link">
                <img src="images/43182548507-84265125335.jpg" alt="">
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
              <div class="hotel-page-list suite-ontouch no-opacity">
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
              </div>
            </div>
            <div class="col-4 ">
              <h3 class="title-font-2 title-line is-small  fadeInUp "><b>editors choice hotel</b></h3>
              <p class="font-2 mt-4">
                <i>
                Think about New York of the 1980s with its large artwork, early hip hop, and punk rock scenes. Then
                translate that vitality to a lodge on the Decrease East Aspect. Put collectively you get The Ludlow
                Resort.
                </i>
              </p>
            </div>
          </div>
          <div class="row relax-offset" data-rellax-speed="2">
            <div class="col-4 ">
              <div class="title-offset title-offset-2 mt-5 ">
                <h3 class="title-second title-line mb-0">The Ludlow Hotel</h3>
                <h4 class="title-font-2 title-third">experience</h4>
              </div>
            </div>
            <div class="col-8 ">
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
              </div>
            </div>
          </div>
          <div class="line-separate "></div>
          <div class="row">
            <div class="col-8 ">
              <div class="hotel-page-list suite-ontouch no-opacity">
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
              </div>
            </div>
            <div class="col-4 ">
              <h3 class="title-font-2 title-line is-small  fadeInUp "><b>editors choice hotel</b></h3>
              <p class="font-2 mt-4 ">
                <i>
                Think about New York of the 1980s with its large artwork, early hip hop, and punk rock scenes. Then
                translate that vitality to a lodge on the Decrease East Aspect. Put collectively you get The Ludlow
                Resort.
                </i>
              </p>
            </div>
          </div>
          <div class="row relax-offset" data-rellax-speed="2" data-rellax-percentage="0.2">
            <div class="col-4 ">
              <div class="title-offset title-offset-2 mt-5 ">
                <h3 class="title-second title-line mb-0">The Ludlow Hotel</h3>
                <h4 class="title-font-2 title-third">experience</h4>
              </div>
            </div>
            <div class="col-8 ">
              <div class="img-offset ">
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
                </div>
              </div>
            </div>
          </div>
          <div class="line-separate "></div>
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
              <div class="title-offset mt-5 relax-offset" data-rellax-speed="2" data-rellax-percentage="0.1">
                <h3 class="title-second title-line mb-0">The Ludlow Hotel</h3>
                <h4 class="title-font-2 title-third">experience</h4>
              </div>
            </div>
            <div class="col-5 ">
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
            <div class="col-5 ">
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
            <div class="col-7">
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
              <a href="suite.html">
                <div class="title-offset mt-5 relax-offset" data-rellax-speed="2" data-rellax-percentage="0.1">
                  <h3 class="title-second title-line mb-0">11 Howard</h3>
                  <h4 class="title-font-2 title-third">experience</h4>
                </div>
              </a>
            </div>
          </div> -->
        </div>

        </div>
        <div class="row">
        <div class="col-lg-3"></div>
        <!-- <div class="col-lg-9">
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
                <a class="nav-link" id="bespoke-tab" data-toggle="tab" href="#bespoke" role="tab" aria-controls="bespoke"
                aria-selected="false">BESPOKE</a>
            </li>
            </ul>
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

        </div> -->
            <div class="col-lg-9">
              @if(!empty($collections))
                  {{--*/ $i=1; $j=1; $k=1; $l=1; $arr_key=''; /*--}}
                  <ul class="nav nav-tabs tabs-w3 collection-tabs" id="collection-tabs" role="tablist">
                      @foreach($collections as $coll)
                          <?php $exp_cat_name = explode(' ', $coll->category_name) ?>
                          <li class="nav-item dest-collection" role="presentation" data-name="{{$coll->category_alias}}"><a href="" class="nav-link <?php echo ($m_type==$coll->category_alias) ? 'active' : '' ?>" >{{$exp_cat_name[0]}}</a></li>
                          {{--*/ $k++;  /*--}}
                      @endforeach
                  </ul>
                  <div class="tab-content pt-5" id="myTabContent">
                      <div class="tab-pane fade show active load_property_ajax" role="tabpanel"></div>
                  </div>
              @endif
  `         </div>

        </div>
    </div>
</div>

@endsection

{{-- For custom script --}}
@section('custom_js')
    @parent
@endsection
