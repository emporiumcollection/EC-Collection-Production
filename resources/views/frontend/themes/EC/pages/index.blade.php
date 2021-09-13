@extends('frontend.themes.EC.layouts.home')

@section('content')
<style type="text/css">
  .wherepopup .nav{
    margin-bottom: 10px;
  }
  .ico-reload{
    margin-top: 20px;
  }
</style>
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
            <i class="ico ico-reload reload-offset" style="display: none;" title="" data-toggle="tooltip" data-original-title="Reset your search result"></i>
          </div>
        </div>
      </div>
      <div class="wherepopup">
        <div class="whereinner">
          <div class="row">
            <div class="col-6" id="destisresults">
              <h2 style="text-transform: uppercase; color: #FFF;">Destinations</h2>
              <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="voyage-desti-header">Voyage</h3>
              <ul class="flex-column voyage-destination">
              </ul>
              <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="spa-desti-header">Spa</h3>
              <ul class="flex-column spa-destination">
              </ul>
              <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="safari-desti-header">Safari</h3>
              <ul class="flex-column safari-destination">
              </ul>
              <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="islands-desti-header">Islands</h3>
              <ul class="flex-column islands-destination">
              </ul>
            </div>
            <div class="col-6" id="hotelsresults">
              <h2 style="text-transform: uppercase; color: #FFF;">Hotels</h2>
              <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="voyage-hotel-header">Voyage</h3>
              <ul class="flex-column voyage-hotels">
              </ul>
              <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="spa-hotel-header">Spa</h3>
              <ul class="flex-column spa-hotels">
              </ul>
              <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="safari-hotel-header">Safari</h3>
              <ul class="flex-column safari-hotels">
              </ul>
              <h3 class="nav" style="text-transform: uppercase; color: #FFF;" id="islands-hotel-header">Islands</h3>
              <ul class="flex-column islands-hotels">
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="owl-carousel owl-theme landing-slider">
<?php foreach($slider as $slide):?>    
    <div class="item">
      <img src="uploads/slider_images/<?php echo $slide->slider_img;?>" alt="">
      <div class="landing-slider-content">
        <h2><?php echo $slide->slider_title;?></h2>
        <p>
          <?php echo $slide->slider_description;?>
        </p>
        <div class="action-button">
          <a href="<?php echo $slide->slider_link;?>" class="btn btn-outline-white btn-lg">Action Button</a>
        </div>
      </div>
    </div>
<?php endforeach;?>
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
              <div class="mt-5 include-form" style="display: block;">
                <div class="guest-pick-footer mb-5 mt-4 pr-3">
                  <div class="text-right">
                    <a href="#" class="step-3 btn btn-primary">Who is traveling</a>
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
                    <input type="submit" class="btn btn-primary" value="View Collection" />
                  </div>
                </div>
              </div>
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
@endsection
