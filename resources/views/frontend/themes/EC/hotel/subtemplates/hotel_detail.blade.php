<div class="col-lg-8 col-hotel-slider">
  <div class="text-right">
    <div class="dropdown dropdown-suite ipad-view mb-3">
      <button class="btn dropdown-toggle p-0" type="button" id="suiteDetail" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Suite Details
      </button>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="suiteDetail">
        <a class="dropdown-item scrollto" href="#loveitcollapse">Why we Love it</a>
        <a class="dropdown-item scrollto" href="#amenitieCollapse">Ameninties</a>
        <a class="dropdown-item scrollto" href="#hotelInfo">Hotel Info</a>
        <a class="dropdown-item scrollto" href="#reviewCollapse">Reviews</a>
        <a class="dropdown-item scrollto" href="#policiesCollapse">Policies</a>
        <a class="dropdown-item scrollto" href="#transfers">Transfers</a>
        <a class="dropdown-item scrollto" href="#inroom-amenities">In-Room Amenities</a>
        <a class="dropdown-item scrollto" href="#spa-service">Spa Services</a>
        <a class="dropdown-item scrollto" href="#experiences">Experiences</a>
        <a class="dropdown-item scrollto" href="#addtocollection">Add to collection</a>
        <a class="dropdown-item scrollto btn-sidebar" href="#share" data-sidebar="#share">Share</a>
        <a class="dropdown-item scrollto btn-sidebar" href="#ask" data-sidebar="">Ask Questions</a>
      </div>
    </div>
  </div>
  <div class="slider-container hotel-page-list">
    <a href="#" class="hotel-info btn-sidebar" data-sidebar="#quickinfo" onclick="replacePropertyData(<?php echo $hotel_data[0]->id ;?>)">
      Hotel info
    </a>
    

    <!-- Data video popup -->
    {{-- <div style="display:none;" id="video1">
      <video class="lg-video-object lg-html5" controls preload="none">
        <source src="images/Emporium-Hotel-South-Bank.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    </div> --}}
    <!-- Data video popup end -->
    <div class="slider-detail" id="sliderDetail">
     <?php
     foreach($hotel_data[0]->propertyImages as $image): 
    
        if(isset($hotel_data[0]['container']['name'])){
          $container_name = $hotel_data[0]['container']['name'];
        }else{
          $container_name = strtolower(str_replace(" ", "-", trim($hotel_data[0]->property_name)));
        }

        if(is_array($image)){
          $file_name = $image['file_name'];
        }elseif(is_object($image) && isset($image->file->file_name)){
          $file_name = $image->file->file_name;
        }else{
          $file_name = 'default-image.png';
        }

      ?>
        <div>
          <a href="" class="slider-item-inner">
            <img <?php echo 'src="/property-image/resize/840x540/'.$container_name.'/'.$file_name.'/property-image"';?> id="heading-img" class="img-fluid" alt="">
            <div class="view-images-btn">
              <i class="ico icon-camera"></i> View Images
            </div>
          </a>
        </div>
    <?php endforeach; ?>
    </div>
    <div class="prev"><i class="ico ico-back"></i></div>
    <div class="next"><i class="ico ico-next"></i></div>
    <div class="hotel-meta full-width hotel-meta-details">
      <a href="#" class="view btn-sidebar i-none" data-sidebar="#reviews" onclick="replaceReviewData()">
        Reviews
      </a>
      <a href="#" data-sidebar="#quickinfo" onclick="replacePropertyData(<?php echo $hotel_data[0]->id ;?>)" class="view btn-sidebar i-none">
        Hotel Info
      </a>
      <input type="hidden" name="city_" id="city" value="<?php echo $hotel_data[0]->city?>">
      <a href="#" class="view btn-sidebar i-none" title="Privacy and cookie policy" data-toggle="modal" data-target="#privacy_policy">Policies</a>
      {{-- <script type="text/javascript" src="https://cdn.iubenda.com/iubenda_i_badge.js"></script> --}}
      {{-- <script src="https://cdn.iubenda.com/iubenda.js"></script><script src="https://cdn.iubenda.com/iubenda.js"></script><script type="text/javascript">(function (w, d) { var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s, tag); }; if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; } })(window, document);</script> --}}

      <div class="dropdown dropdown-bs mobile-on">
        <a href="#" class="btn dropdown-toggle btn-block text-left btn-sidebar" data-sidebar="#mobile_menu">
          View Suites
        </a>
        <!-- <div class="dropdown-menu" aria-labelledby="suiteDetail">
          <a href="all-suite.html" class="dropdown-item">All Suite</a>
          <a href="detail-suite.html" class="dropdown-item">The Mark Fire Bedroom</a>
          <a href="detail-suite.html" class="dropdown-item">Suite Name</a>
          <a href="detail-suite.html" class="dropdown-item">Suite Name</a>
          <a href="detail-suite.html" class="dropdown-item">Suite Name</a>
          <a href="detail-suite.html" class="dropdown-item">Suite Name</a>
          <a href="architecture.html" class="dropdown-item">Architecture</a>
          <a href="spa.html" class="dropdown-item">Spa & Wellness </a>
          <a href="restaurant.html" class="dropdown-item">Restaurant & Bar</a>
          <a href="location.html" class="dropdown-item">Location</a>
          <a href="experience.html" class="dropdown-item">Experiences</a>
          <a href="#" class="dropdown-item btn-sidebar" data-sidebar="#gallery">Gallery</a>
          <a href="social.html" class="dropdown-item">Social</a>
          <a href="#" class="dropdown-item">Video Channel</a>
          <a href="faq.html" class="dropdown-item">FAQ</a>
        </div> -->
      </div>
      <a href="javascript:void(0);" class="price-info---12">
        <div class="hotel-prices hotel-price-detail d-flex h-100">
          <div class="row align-items-center justify-content-center">
            <h3 class="mb-0">
              @if(isset($hotel_data[0]->price) AND $hotel_data[0]->price != 0)
                <span class="title-font-2 mr-1">From €</span> <span class="color-primary"> {{ $hotel_data[0]->price }}</span>
              @else
                <span class="title-font-2 mr-1">Price on request</span>
              @endif

            </h3>
            <div class="ml-2">
              <span class="pernight"></span>
            </div>
          </div>

        </div>
      </a>
      <div class="ipad-view book-suite">
        <a href="/reservation/when/{{ $hotel_data[0]->id }}">
          Book this Suite
        </a>
      </div>
    </div>

  </div>
  <div class="hotel-meta-mobile meta-sticky">
    <div class="dropdown dropdown-suite w-50">
      <a href="#" class="btn dropdown-toggle text-left" type="button" id="suiteDetail"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Hotel Info
      </a>
      <div class="dropdown-menu" aria-labelledby="suiteDetail">
        <a class="dropdown-item scrollto" href="#loveitcollapse">Why we Love it</a>
        <a class="dropdown-item scrollto" href="#amenitieCollapse">Ameninties</a>
        <a class="dropdown-item scrollto" href="#hotelInfo">Hotel Info</a>
        <a class="dropdown-item scrollto" href="#reviewCollapse">Reviews</a>
        <a class="dropdown-item scrollto" href="#policiesCollapse">Policies</a>
        <a class="dropdown-item scrollto" href="#transfers">Transfers</a>
        <a class="dropdown-item scrollto" href="#inroom-amenities">In-Room Amenities</a>
        <a class="dropdown-item scrollto" href="#spa-service">Spa Services</a>
        <a class="dropdown-item scrollto" href="#experiences">Experiences</a>
        <a class="dropdown-item scrollto" href="#addtocollection">Add to collection</a>
        <a class="dropdown-item scrollto btn-sidebar" href="#share" data-sidebar="#share">Share</a>
        <a class="dropdown-item scrollto btn-sidebar" href="#ask" data-sidebar="">Ask Questions</a>
      </div>
    </div>
    <div class="dropdown d-flex align-items-center w-50 view-suite-btn">
      <a href="#" class="btn dropdown-toggle btn-block text-left btn-sidebar" data-sidebar="#mobile_menu">
        View Suites
      </a>
    </div>
    <a href="/reservation/when/{{ $hotel_data[0]->id }}" class="btn btn-primary rounded-0 btn-reservation-detail">
      Reservation
    </a>
  </div>
  <div class="hotel-description">
    <div class="row">
      <div class="col-md-8">
        <div class="title-main title-main-mobile mt-0 mb-5">
          <h2>{{  $hotel_data[0]->property_name }}</h2>
        </div>
        <p>
          {{ $hotel_data[0]->detail_section1_description_box1 }}
        </p>
        <p>
          {{ $hotel_data[0]->detail_section1_description_box2 }}
        </p>
        
        <?php
          $availableservicesArr = [];
          if($hotel_data[0]->availableservices != ''){
            $availableservicesArr = array_chunk(explode(',', $hotel_data[0]->availableservices), 5);
          }
        ?>
        @if(!empty($availableservicesArr))
          <div class="i-none">
            <h4 class="mt-5 mb-4 color-dark-grey ">Available Services</h4>
            <div class="row mb-4">
              @foreach($availableservicesArr as $availableservices)
                <div class="col-md-4 mb-4">
                  <ul style="padding-left: 20px;">
                  @foreach($availableservices as $availableservice)
                    {{-- <p class="mb-0">{{ $availableservice }}</p> --}}
                    <li>{{ $availableservice }}</li>
                  @endforeach
                  </ul>
                </div>
              @endforeach
            </div>
          </div>
        @endif

        <?php
          $amenitiesArr = [];
          if($hotel_data[0]->assign_amenities != ''){
            $amenitiesArr = array_chunk(explode(',', $hotel_data[0]->assign_amenities), 5);
          }
        ?>
        @if(!empty($amenitiesArr))
          <div class="i-none">
            <h4 class="mt-5 mb-4 color-dark-grey ">Amenities</h4>
            <div class="row mb-4">
              @foreach($amenitiesArr as $amenities)
                <div class="col-md-4 mb-4">
                  <ul style="padding-left: 20px;">
                  @foreach($amenities as $amenity)
                    {{-- <p class="mb-0">{{ $amenity }}</p> --}}
                    <li>{{ $amenity }}</li>
                  @endforeach
                  </ul>
                </div>
              @endforeach
            </div>
          </div>
        @endif
      </div>
      <div class="col-md-4">
        <div class="side-detail mb-3">
          <!--<p>Free cancelation before <br> <b><a href="#">18 Feb 2020</a></b></p>
          <div class="mb-3">
            <a href="#">View Policy</a>
          </div>-->
          @if (!empty($hotel_data[0]->checkin) && !empty($hotel_data[0]->checkout))
              
          <p><strong>Check-in:</strong> {{ $hotel_data[0]->checkin }}</p>
          <p><strong>Check-out:</strong> {{ $hotel_data[0]->checkout }}</p>
          @endif
          <p>Reserve now, pay at the Hotel</p>
          <a href="/reservation/when/{{ $hotel_data[0]->id }}" class="btn btn-dark btn-block">Reservation</a>
        </div>

        <div class="side-detail text-left mb-3 px-2 i-none">
          <h3 class="text-center mt-2 mb-0">
            <span class="why-we"></span>
          </h3>
          <p class="pl-2">{{  $hotel_data[0]->property_usp }}</p>
          {{-- <ul class="pl-4">
            <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
              restaurant or in the drawing room.</li>
            <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
              restaurant or in the drawing room.</li>
            <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
              restaurant or in the drawing room.</li>
            <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
              restaurant or in the drawing room.</li>
          </ul> --}}
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
        <div id="loveitcollapse" class="collapse additional-collapse hotel-info-panel"
          aria-labelledby="loveit" data-parent="#accordionExample">
          <div class="card-body h-100">
            <h3 class="text-center mt-2 mb-3">
              <span class="why-we"></span>
            </h3>
            <p>{{  $hotel_data[0]->property_usp }}</p>
            {{-- <ul class="pl-4">
              <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                restaurant or in the drawing room.</li>
              <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                restaurant or in the drawing room.</li>
              <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                restaurant or in the drawing room.</li>
              <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                restaurant or in the drawing room.</li>
            </ul> --}}
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
                @if(!empty($suite['amenities']))
                  <p class="mb-0">
                    {{ $suite['amenities'][0]['amenities_eng'] }}
                  </p>
                @else
                   <p>Amenities Not Found</p>
                @endif
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
        <div id="hotelInfo" class="collapse additional-collapse hotel-info-panel"
          aria-labelledby="hotelInfo_id" data-parent="#accordionExample">
          <div class="card-body h-100">
            <div class="row">
              <div class="col-lg-8">
                <div class="row mb-5">
                  <div class="col-lg-4 col-md-6 mb-5">
                    <div class="qv-list">
                      <h4>Address</h4>
                      <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $hotel_data[0]->address }}
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-5">
                    <div class="qv-list">
                      <h4>Internet</h4>
                      @if(!empty($hotel_data[0]->internetpublic))
                        <p class="mb-0"><b>Public areas :</b> {{$hotel_data[0]->internetpublic }}</p>
                      @endif
                      @if(!empty($hotel_data[0]->internetroom))
                      <p class="mb-0"><b>In room :</b> {{$hotel_data[0]->internetroom }}</p>
                      @endif
                    </div>
                  </div>
                  @if(!empty($hotel_data[0]->children_policy))
                    <div class="col-lg-4 col-md-6 mb-5">
                      <div class="qv-list">
                        <h4>Children policy</h4>
                        <p class="mb-0">{{$hotel_data[0]->children_policy }}</p>
                      </div>
                    </div>
                  @endif
                  @if (!empty($hotel_data[0]->checkin) && !empty($hotel_data[0]->checkout))
                    <div class="col-lg-4 col-md-6 mb-5">
                      <div class="qv-list">
                        
                        <h4>Check-in / Check-out</h4>
                          <p class="mb-0"><b>Check-in :</b> {{ $hotel_data[0]->checkin }}</p>
                          <p class="mb-0"><b>Check-out :</b> {{ $hotel_data[0]->checkout }}</p>
                      </div>
                    </div>
                  @endif
                  <div class="col-lg-4 col-md-6 mb-5">
                    <div class="qv-list">
                      <h4>Transportation and transfer</h4>
                      <p class="mb-0"><b>Transfer :</b> subject to supplement</p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-5">
                    <div class="qv-list">
                      <h4>Smooking policy</h4>
                      <p class="mb-0">{{$hotel_data[0]->smookingpolicy }}</p>
                      <p class="mb-0"><b>Smooking rooms:</b> {{$hotel_data[0]->smookingrooms }}</p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-5">
                    <div class="qv-list">
                      <h4>Rooms</h4>
                      <p class="mb-0">190 rooms and suites</p>
                      <p class="mb-0"><b>In-room amenities :</b> iPod dock, flatscreen TV, in-room safe,
                        minibar
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
                  @if(!empty($hotel_data[0]->pets))
                    <div class="col-lg-4 col-md-6 mb-5">
                      <div class="qv-list">
                        <h4>Pets</h4>
                        <p class="mb-0">{{$hotel_data[0]->pets }}</p>
                      </div>
                    </div>
                  @endif
                  @if(!empty($hotel_data[0]->carpark))
                    <div class="col-lg-4 col-md-6 mb-5">
                      <div class="qv-list">
                        <h4>Parking</h4>
                        <p class="mb-0">{{$hotel_data[0]->carpark }}</p>
                      </div>
                    </div>
                  @endif
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
              Reviews
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
                        We love the hotel and its location. The front desk staff was extremely pleasant.
                        The
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
                        Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the
                        staff I
                        interacted with were great. One of the best hotel experiences I have ever had I
                        would
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
                        Probably the best City hotel weve stayed at. Alal Gogo was particularly
                        outstanding.
                        He
                        managed to arrange for us to attend the Woody Allan Band show with our guest (who
                        is a
                        musician) even when it had been booked out and was very courteous throughout.
                        Thank
                        you
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
                        We love the hotel and its location. The front desk staff was extremely pleasant.
                        The
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
                        We love the hotel and its location. The front desk staff was extremely pleasant.
                        The
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
                        Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the
                        staff I
                        interacted with were great. One of the best hotel experiences I have ever had I
                        would
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
                        Probably the best City hotel weve stayed at. Alal Gogo was particularly
                        outstanding.
                        He
                        managed to arrange for us to attend the Woody Allan Band show with our guest (who
                        is a
                        musician) even when it had been booked out and was very courteous throughout.
                        Thank
                        you
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
                        We love the hotel and its location. The front desk staff was extremely pleasant.
                        The
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
                        We love the hotel and its location. The front desk staff was extremely pleasant.
                        The
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
                        Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the
                        staff I
                        interacted with were great. One of the best hotel experiences I have ever had I
                        would
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
                        Probably the best City hotel weve stayed at. Alal Gogo was particularly
                        outstanding.
                        He
                        managed to arrange for us to attend the Woody Allan Band show with our guest (who
                        is a
                        musician) even when it had been booked out and was very courteous throughout.
                        Thank
                        you
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
                        We love the hotel and its location. The front desk staff was extremely pleasant.
                        The
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
                        We love the hotel and its location. The front desk staff was extremely pleasant.
                        The
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
                        Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the
                        staff I
                        interacted with were great. One of the best hotel experiences I have ever had I
                        would
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
                        Probably the best City hotel weve stayed at. Alal Gogo was particularly
                        outstanding.
                        He
                        managed to arrange for us to attend the Woody Allan Band show with our guest (who
                        is a
                        musician) even when it had been booked out and was very courteous throughout.
                        Thank
                        you
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
                        We love the hotel and its location. The front desk staff was extremely pleasant.
                        The
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
                    Some placeholder content for the first accordion panel. This panel is shown by
                    default,
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
                    Some placeholder content for the first accordion panel. This panel is shown by
                    default,
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
                    Some placeholder content for the first accordion panel. This panel is shown by
                    default,
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
      {{-- <div class="card">
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
        <div id="transfers" class="collapse additional-collapse hotel-info-panel"
          aria-labelledby="headingOne" data-parent="#accordionExample">
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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
              data-toggle="collapse" data-target="#inroom-amenities" aria-expanded="false"
              aria-controls="inroom-amenities">
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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

                    <a href="#" class="btn btn-dark rounded-0 booking-select">Add to reservation</a>
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
            <a href="#" class="btn btn-link btn-block text-left collapsed">
              Add to Collection
            </a>
          </h2>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingfour">
          <h2 class="mb-0">
            <a href="#" class="btn btn-link btn-block text-left btn-sidebar" data-sidebar="#share">
              Share
            </a>
          </h2>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingfour">
          <h2 class="mb-0">
            <a href="#" class="btn btn-link btn-block text-left ">
              Ask Questions
            </a>
          </h2>
        </div>
      </div> --}}

    </div>
    {{-- <h4 class="mt-5 mb-4 color-dark-grey">Inspiration</h4>
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
    </div> --}}
  </div>
</div>

@include('frontend.themes.EC.layouts.subsections.quick_info')
@include('frontend.themes.EC.layouts.subsections.reviews')
@include('frontend.themes.EC.layouts.subsections.priceinfo')
@include('frontend.themes.EC.layouts.subsections.share')
