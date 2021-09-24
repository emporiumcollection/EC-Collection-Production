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
              <div class="row row-m-9">
                <div class="col-md-4">
                  <a href="#">
                    <img src="{{ asset('images/img-dummy.jpg')}}" class="w-100" alt="">
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#">
                    <img src="{{ asset('images/img-dummy.jpg')}}" class="w-100" alt="">
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#">
                    <img src="{{ asset('images/img-dummy.jpg')}}" class="w-100" alt="">
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#">
                    <img src="{{ asset('images/img-dummy.jpg')}}" class="w-100" alt="">
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#">
                    <img src="{{ asset('images/img-dummy.jpg')}}" class="w-100" alt="">
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#">
                    <img src="{{ asset('images/img-dummy.jpg')}}" class="w-100" alt="">
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#">
                    <img src="{{ asset('images/img-dummy.jpg')}}" class="w-100" alt="">
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#">
                    <img src="{{ asset('images/img-dummy.jpg')}}" class="w-100" alt="">
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#">
                    <img src="{{ asset('images/img-dummy.jpg')}}" class="w-100" alt="">
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#">
                    <img src="{{ asset('images/img-dummy.jpg')}}" class="w-100" alt="">
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#">
                    <img src="{{ asset('images/img-dummy.jpg')}}" class="w-100" alt="">
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#">
                    <img src="{{ asset('images/img-dummy.jpg')}}" class="w-100" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

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
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-1"
                                    data-sub-html="Adipisicing elit">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                                    data-sub-html="Lorem ipsum dolor sit amet">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2 grid-row-1"
                                    data-sub-html="Lorem ipsum dolor sit amet">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
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
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-1"
                                    data-sub-html="Adipisicing elit">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                                    data-sub-html="Lorem ipsum dolor sit amet">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2 grid-row-1"
                                    data-sub-html="Lorem ipsum dolor sit amet">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
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
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-1"
                                    data-sub-html="Adipisicing elit">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                                    data-sub-html="Lorem ipsum dolor sit amet">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2 grid-row-1"
                                    data-sub-html="Lorem ipsum dolor sit amet">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
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
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-1"
                                    data-sub-html="Adipisicing elit">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                                    data-sub-html="Lorem ipsum dolor sit amet">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2 grid-row-1"
                                    data-sub-html="Lorem ipsum dolor sit amet">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
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
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-1"
                                    data-sub-html="Adipisicing elit">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                                    data-sub-html="Lorem ipsum dolor sit amet">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2 grid-row-1"
                                    data-sub-html="Lorem ipsum dolor sit amet">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2 grid-row-4"
                                    data-sub-html="Dignissimos quas">
                                    <img src="images/hotel-kjsdksd.jpg" alt="">
                                </a>
                                <a href="images/Gandhiva-Restaurant-7.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/Gandhiva-Restaurant-7.jpg')}}" alt="">
                                </a>
                                <a href="images/29be6592342279.5e49609509d85.jpg" class="grid-item span-2 grid-row-3"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/29be6592342279.5e49609509d85.jpg')}}" alt="">
                                </a>
                                <a href="images/hotel-kjsdksd.jpg" class="grid-item span-2"
                                    data-sub-html="Dignissimos quas">
                                    <img src="{{ asset('images/hotel-kjsdksd.jpg')}}" alt="">
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