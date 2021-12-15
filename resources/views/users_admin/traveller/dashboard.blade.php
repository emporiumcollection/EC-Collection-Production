@extends('users_admin.traveller.layout.app')
@section('content')
  <div class="mt-15 reservation-widget">
    <h3 class="text-dark font-weight-bold font-saol mb-10">
      My Reservations
    </h3>
    <div class="row">
      <div class="col-md-4">
        <div class="card card-custom card-stretch gutter-b">
          <div class="card-chart">
            <div id="kt_charts_widget_4_chart"></div>
            <div class="card-title-cs">
              <div class="row m-0 align-items-center">
                <div class="col-8">
                  <h3 class="font-saol font-weight-boldest">My Reservations
                  </h3>
                </div>
                {{-- <div class="col-4">
                  <select class="form-control">
                    <option value="1">2021</option>
                    <option value="2">2020</option>
                    <option value="3">2019</option>
                  </select>
                </div> --}}
              </div>
            </div>
            <div class="card-header-body">
              <div class="row justify-content-center">
                {{-- <div class="col-4">
                  <div class="text-center text-white mb-3">
                    Book Again
                  </div>
                  <div class="text-center">
                    <a href="#"
                      class="btn btn-outline-white btn-action-card btn-block">View</a>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
          <div class="card-body bg-grey">
            <!-- <div class="text-center">
              <p>Currently, there are no reservation.</p>
              <a href="#">Make a new reservation</a>
            </div> -->

             <div class="reservation-widget">
              @foreach($reservations as  $val)
                <div class="d-flex align-items-center mb-10">
                  <!--begin::Bullet-->
                  <span
                    class="bullet bullet-bar bg-success align-self-stretch"></span>
                  <!--end::Bullet-->
                  <!--begin::Checkbox-->
                  <label
                    class="checkbox checkbox-lg checkbox-light-success checkbox-inline flex-shrink-0 m-0 mx-4">
                    <input type="checkbox" name="select" value="1">
                    <span></span>
                  </label>
                  <!--end::Checkbox-->
                  <!--begin::Text-->
                  <div class="d-flex flex-column flex-grow-1">
                    <a href="#"
                      class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1"> {{ $val->property->property_short_name }}</a>
                    <span class="text-muted font-weight-bold"> {{ date("d/m/Y",strtotime($val->checkin_date)) }} | {{ date("d/m/Y",strtotime($val->checkout_date)) }}</span>
                  </div>
                  <!--end::Text-->
                </div>
              @endforeach  
            </div>
          </div>
        </div>
      </div>
     {{--  <div class="col-md-4">
        <div class="card card-custom card-stretch gutter-b">
          <div class="card-img-header">
            <img src="{{ asset('assets/users/assets/media/event_reservation.jpg')}}" alt="">
            <div class="card-title-cs">
              <div class="row m-0 align-items-center">
                <div class="col-8">
                  <h3 class="font-saol font-weight-boldest">
                    Event Reservations
                  </h3>
                </div>
                <div class="col-4">
                  <select class="form-control">
                    <option value="1">2021</option>
                    <option value="2">2020</option>
                    <option value="3">2019</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="card-header-body">
              <div class="row justify-content-center">
                <div class="col-4">
                  <div class="text-center text-white mb-3">
                    Book Again
                  </div>
                  <div class="text-center">
                    <a href="#"
                      class="btn btn-outline-white btn-action-card btn-block">View</a>
                  </div>
                </div>
                <div class="col-4">
                  <div class="text-center text-white mb-3">
                    Start Date
                  </div>
                  <div class="text-center">
                    <a href="#"
                      class="btn btn-outline-white btn-action-card btn-block">
                      <span class="display-4">15</span> <br>
                      Aug 2018
                    </a>
                  </div>
                </div>
                <div class="col-4">
                  <div class="text-center text-white mb-3">
                    End Date
                  </div>
                  <div class="text-center">
                    <a href="#"
                      class="btn btn-outline-white btn-action-card btn-block">
                      <span class="display-4">26</span> <br>
                      Aug 2018
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="card-body bg-grey">
            <div class="event-list" data-index="0">
              <small>Event Name </small>
              <div>Studio Munich / Room Name </div>
            </div>
            <div class="event-list">
              <small>Booking Confirmation Number </small>
              <div>D330-1234562546 </div>
            </div>
            <div class="event-list">
              <small>Total Charges </small>
              <div>USD 1,250.000 </div>
            </div>
            <div class="event-list">
              <small>Event Terms </small>
              <div>Event Terms </div>

              <a href="#">Show More</a>
            </div>
          </div>
        </div>
      </div> --}}
      @if (\Session::get('gid') == 3)
      <div class="col-md-4">
        <div class="card card-custom card-stretch gutter-b">
          <div class="card-img-header">
            <img src="{{ asset('assets/users/assets/media/hotel_reservation.jpg')}}" alt="">
            <div class="card-title-cs">
              <div class="row m-0 align-items-center">
                <div class="col-9">
                  <h3 class="font-saol font-weight-boldest">
                    My Preferences
                  </h3>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body bg-grey">
            <div class="preferences-btn">
              <div class="row">
                <div class="col-md-6">
                  <a href="#" class="preferences-btn-list">Preferences 1</a>
                </div>
                <div class="col-md-6">
                  <a href="{{ URL::to('/users/my-preferences')}}"
                    class="preferences-btn-list display-4">+</a>
                </div>
              </div>
            </div>

            <div class="preference-list mt-8">
              @foreach($preferences as $preference)
              <div class="d-flex align-items-center mb-10">
                <!--begin::Bullet-->
                <span
                  class="bullet bullet-bar bg-success align-self-stretch"></span>
                <!--end::Bullet-->
                <!--begin::Checkbox-->
                <label
                  class="checkbox checkbox-lg checkbox-light-success checkbox-inline flex-shrink-0 m-0 mx-4">
                  <input type="checkbox" name="select" value="1">
                  <span></span>
                </label>
                <!--end::Checkbox-->
                <!--begin::Text-->
                <div class="d-flex flex-column flex-grow-1">

                      <a href="#" class="text-dark-75 text-hover-primar font-weight-bold font-size-lg mb-1">
                        {{ $preference->first_name }}
                      </a>
                      <span class="text-muted font-weight-bold">
                        {{ \Carbon\Carbon::parse($preference->created)->diffForHumans() }}
                      </span>
                  </div>
                <!--end::Text-->
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                  title="" data-placement="left"
                  data-original-title="Quick actions">
                  <a href="#"
                    class="btn btn-hover-light-primary btn-sm btn-icon"
                    data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ki ki-bold-more-hor"></i>
                  </a>
                  <div
                    class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                    <!--begin::Navigation-->
                    <ul class="navi navi-hover">
                      <li class="navi-item">
                        <a href="#" class="navi-link">
                          <span class="navi-text">
                            Set Active
                          </span>
                        </a>
                      </li>
                      <li class="navi-item">
                        <a href="/users/my-preferences/{{$preference->ps_id}}" class="navi-link">
                          <span class="navi-text">
                            Edit
                          </span> 
                        </a>
                      </li>
                      <li class="navi-item">
                        <a href="/users/delete-preferences/{{$preference->ps_id}}" class="navi-link">
                          <span class="navi-text">
                            Remove
                          </span>
                        </a>
                      </li>
                    </ul>
                    <!--end::Navigation-->
                  </div>
                </div>
                
                <!--end::Dropdown-->
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>

    <div class="mt-15"> 
      <h3 class="text-dark font-weight-bold font-saol mb-10">
        My Settings
      </h3>

      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="{{ URL::to('/users/profile')}}" class="my-setting-container">
            <i class="icon-2x text-dark-50 flaticon-profile"></i>
            <div>My Profile</div>
          </a>
        </div>
        @if (\Session::get('gid') == 3)
        <div class="col-lg-3 col-md-6">
          <a href="{{ URL::to('/users/my-preferences')}}" class="my-setting-container">
            <i class="icon-2x text-dark-50 flaticon-interface-11"></i>
            <div>My Preferences</div>
          </a>
        </div>
        @endif
        <div class="col-lg-3 col-md-6">
          <a href="account-setting.html" class="my-setting-container">
            <i class="icon-2x text-dark-50 flaticon-settings"></i>
            <div>Account Settings</div>
          </a>
        </div>
        @if (\Session::get('gid') == 3)
        <div class="col-lg-3 col-md-6">
          <a href="invite-guest.html" class="my-setting-container">
            <i class="icon-2x text-dark-50 flaticon-mail"></i>
            <div>Guest Invitations</div>
          </a>
        </div>
        @endif
        <div class="col-lg-3 col-md-6">
          <a href="#" class="my-setting-container">
            <i class="icon-2x text-dark-50 flaticon-computer"></i>
            <div>Communication</div>
          </a>
        </div>
        @if (\Session::get('gid') == 3)
        <div class="col-lg-3 col-md-6">
          <a href="companion.html" class="my-setting-container">
            <i class="icon-2x text-dark-50 flaticon-users"></i>
            <div>Companions</div>
          </a>
        </div>
        @endif
        <div class="col-lg-3 col-md-6">
          <a href="security-privacy.html" class="my-setting-container">
            <i class="icon-2x text-dark-50 flaticon-lock"></i>
            <div>Security & Privacy</div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="billings-contracts.html" class="my-setting-container">
            <i class="icon-2x text-dark-50 flaticon-diagram"></i>
            <div>Billings & Contracts</div>
          </a>
        </div>
      </div>
    </div>
  @endsection
  
