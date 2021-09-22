@extends('reservation.index')
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
                          <img src="{{ asset('/images/QR-code.png')}}" class="img-fluid" alt="">
                        </div>
                      </div>
                    </div>
              </div>
              <div class="col-8">
                  <div class="hotel-user w-100">
                      <div class="pp-prof-det">
                        <img src="{{ asset('/images/img-profile.jpg')}}" alt="">
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
                          <img src="{{ asset('/images/29be6592342279.5e49609509d85.jpg')}}" class="img-fluid" alt="">
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
                          <img src="{{ asset('/images/29be6592342279.5e49609509d85.jpg')}}" class="img-fluid" alt="">
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
                          <img src="{{ asset('/images/29be6592342279.5e49609509d85.jpg')}}" class="img-fluid" alt="">
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
                          <img src="{{ asset('/images/29be6592342279.5e49609509d85.jpg')}}" class="img-fluid" alt="">
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
                          <img src="{{ asset('/images/29be6592342279.5e49609509d85.jpg')}}" class="img-fluid" alt="">
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
                          <img src="{{ asset('/images/29be6592342279.5e49609509d85.jpg')}}" class="img-fluid" alt="">
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
    <div class="col-lg-4 mb-4 pt-3 mobile-on">
      <div class="sidebar-nav-section" id="sidebar">
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
    <div class="content-em">
      <div class="top-wrapper">
        <div class="container ">
          <div id="smartwizard" class="wizard-reservation">
            <div class="block-res-title">
              Reservation Progress
            </div>
            <div class="nav-wizard-active">
              <div class="nv-wz">
                <span class="active" data-id="step-0">1. When</span>
              </div>
              <div class="nv-wz">
                <span class="" data-id="step-1">2. Where</span>
              </div>
              <div class="nv-wz">
                <span class="" data-id="step-2">3. Suite</span>
              </div>
              <div class="nv-wz">
                <span class="" data-id="step-3">4. Suite Board</span>
              </div>
              <div class="nv-wz">
                <span class="" data-id="step-4">5. Suite Policies</span>
              </div>
              <div class="nv-wz">
                <span class="" data-id="step-5">6. Additional Services</span>
              </div>
              <div class="nv-wz">
                <span class="" data-id="step-6">7. Who’s travelling</span>
              </div>
              <div class="nv-wz">
                <span class="" data-id="step-7">8. Payment Method</span>
              </div>
              <div class="nv-wz">
                <span class="" data-id="step-8">9. Hotel Policies</span>
              </div>
              <div class="nv-wz">
                <span class="" data-id="step-9">10. Booking Summary</span>
              </div>
            </div>
            <!-- <ul class="nav mt-4 mb-4 nav-wizard-active">
              <li>
                <a class="nav-link" href="#step-1">
                  <div>1</div>
                  When
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-2">
                  <div>2</div>
                  Where
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-3">
                  <div>3</div>
                  Suite
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-4">
                  <div>4</div>
                  Suite Board
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-5">
                  <div>5</div>
                  Suite Policies
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-6">
                  <div>6</div>
                  Additional Services
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-7">
                  <div>7</div>
                  Who’s travelling
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-8">
                  <div>8</div>
                  Payment Method
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-9">
                  <div>9</div>
                  Hotel Policies
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-10">
                  <div>10</div>
                  Booking Summary
                </a>
              </li>
            </ul> -->
            <ul class="nav mt-4 mb-4 nav-wizard-primary">
              <li>
                <a class="nav-link" href="#step-1">
                  When
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-2">
                  Where
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-3">
                  Suite
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-4">
                  Suite Board
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-5">
                  Suite Policies
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-6">
                  Additional Services
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-7">
                  Who’s travelling
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-8">
                  Payment Method
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-9">
                  Hotel Policies
                </a>
              </li>
              <li>
                <a class="nav-link" href="#step-10">
                  Booking Summary
                </a>
              </li>
            </ul>

            <div class="tab-content h-100 pt-4 wizard-reservation-content">
              
              @include('reservation/when')

              @include('reservation/where')

              @include('reservation/suite')

              @include('reservation/suiteboard')

              @include('reservation/suitepolicies')

              @include('reservation/services')

              @include('reservation/whotravelling')

              @include('reservation/payment_method')

              @include('reservation/hotel_policies')

              @include('reservation/booking_summary')


            </div>
          </div>

        </div>
      </div>

    </div>
  @endsection
