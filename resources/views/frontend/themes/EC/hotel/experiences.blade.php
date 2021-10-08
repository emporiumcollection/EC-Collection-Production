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
                    <div class="col-lg-3 col-md-4">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-12">
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
                            <div class="col-lg-3 col-md-6">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-right">
                                <a href="#">Save to collection</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="search-list-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-12">
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
                            <div class="col-lg-3 col-md-6">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-right">
                                <a href="#">Remove</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="search-list-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-12">
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
                            <div class="col-lg-3 col-md-6">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-right">
                                <a href="#">Save to collection</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="search-list-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-12">
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
                            <div class="col-lg-3 col-md-6">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-right">
                                <a href="#">Remove</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="search-list-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-12">
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
                            <div class="col-lg-3 col-md-6">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-right">
                                <a href="#">Save to collection</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="search-list-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <img src="images/29be6592342279.5e49609509d85.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <h5>The Ludlow Hotel</h5>
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-12">
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
                            <div class="col-lg-3 col-md-6">
                                <div class="text-center">
                                    2 Juni 2021
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-right">
                                <a href="#">Save to collection</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
       
        </div>
    </div>
</div>

    <div class="content-em">
        <div class="container pt-5">
            <div id="main-content">
                <div class="row mt-5">

                @include('frontend.themes.EC.hotel.sidebar_nav')

                    <div class="col-lg-8 content-lg pt-5">
                        <ul class="nav nav-pills nav-clr nav-breadcrumb nav-breadcrumb-ip mb-3 mt-3">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">The Ludlow Hotel</a>
                            </li>
                        </ul>
                        <div class="d-flex w-100 wow fadeInUp align-items-center" data-wow-delay=".3s">
                            <a href="main-page.html" class="back-btn ipad-view">
                                <i class="ico ico-back"></i>
                            </a>
                            <div class="title-main mb-4 w-100">
                                <h2>The Ludlow Hotel</h2>
                                <a href="suite.html" class="main-close">
                                    <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Close</title>
                                        <path
                                            d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
    
                        <div class="main-container wow fadeInUp" data-wow-delay=".3s">
                            <div class="main-content">
                                <div class="row align-items-center mb-5">
                                    <div class="col-7">
                                        <h3 class="mb-0 d-flex align-items-center">
                                            Add additional services
                                        </h3>
                                    </div>
                                    <div class="col-5 text-right">
                                        <a href="#" class="btn btn-dark  rounded-0 px-4 btn-nextwizard">Continue</a>
                                    </div>
                                </div>
                                <hr class="mb-0">
                                <div class="accordion accordion-ex" id="accordionExample">
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
                                            <div class="card-body h-100">
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
                                            <div class="card-body h-100">
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
                                            <div class="card-body h-100">
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
                                            <div class="card-body h-100">
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
                        </div>
                    </div>
    
                </div>
            </div>

        </div>
    </div>

    @include('frontend.themes.EC.hotel.footer')
    @include('frontend.themes.EC.hotel.gallery')
    
    @section('experience_script')
        <script>
        $('.booking-select').click(function (e) {
            e.preventDefault();
            $(this).closest('.additional-list').find('.booking-qty').addClass('hide');
            $(this).closest('.additional-list').find('.confirm-qty').addClass('show');
            $(this).closest('.additional-list').find('.title-additional-list').hide();
            $(this).closest('.additional-list').find('.added').show();
            $(this).closest('.additional-list').find('.add-txt').css('height', 'auto');
            $(this).closest('.additional-list').find('.remove-booking').show();
            $(this).html("Added to booking");
        });
        $('.remove-booking').click(function (e) {
            e.preventDefault();
            $(this).closest('.additional-list').find('.booking-qty').removeClass('hide');
            $(this).closest('.additional-list').find('.confirm-qty').removeClass('show');
            $(this).closest('.additional-list').find('.booking-select').html("Select");
            $(this).closest('.additional-list').find('.title-additional-list').show();
            $(this).closest('.additional-list').find('.add-txt').css('height', '100%');
            $(this).closest('.additional-list').find('.added').hide();
            $(this).hide();
        });
    </script>
    @endsection

@endsection