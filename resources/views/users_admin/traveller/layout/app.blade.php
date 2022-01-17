<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
  <base href="">
  <meta charset="utf-8" />
  <title>Emporium Voyage</title>
  <meta name="description" content="Updates and statistics" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="canonical" href="https://keenthemes.com/metronic" />
  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/  css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Page Vendors Styles(used by this page)-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <link href="{{ asset('assets/users/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/users/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/users/assets/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" />
  <!--end::Page Vendors Styles-->
  <!--begin::Global Theme Styles(used by all pages)-->
  <link href="{{ asset('assets/users/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />

  <link href="{{ asset('assets/users/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/users/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/users/assets/css/slick.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/users/assets/css/slick-theme.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/users/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="{{ asset('assets/users/assets/media/logos/favicon.ico')}}" />

  <!--end::Global Theme Styles-->
  <!--begin::Layout Themes(used by all pages)-->
  <!--end::Layout Themes-->
  <link rel="shortcut icon" href="{{ asset('assets/users/assets/media/logos/favicon.ico')}}" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
  <!--begin::Main-->
  {{-- begin::Header header-mobile-fixed-> --}}
  <div id="kt_header_mobile" class="header-mobile">
    <a href="#">
			<img alt="Logo" src="http://development.emporium-voyage.com/assets/users/assets/media/logo.png" class="logo-default max-h-30px">
		</a>
    <div class="d-flex align-items-center">
      <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
        <span></span>
      </button>
    </div>
    <!--end::Toolbar-->
  </div>
  <!--end::Header Mobile-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
      <!--begin::Aside-->
      <div class="aside aside-left d-flex aside-fixed" id="kt_aside">

        @include('users_admin/traveller/layout/sidebar')

        <!--begin::Tab Pane-->
        <div class="p-3 px-lg-7 py-lg-5">
          <!--begin::Form-->
          <form class="p-2 p-lg-3">
            <div class="d-flex">
              <div class="input-icon h-40px">
                <input type="text" class="form-control form-control-lg form-control-solid h-40px" placeholder="Search..." id="generalSearch" />
                <span>
                  <span class="svg-icon svg-icon-lg">
                    <!--begin::Svg Icon | path:../users/assets/media/svg/icons/General/Search.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                </span>
              </div>
              <div class="dropdown" data-toggle="tooltip" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-icon btn-default btn-hover-primary ml-2 h-40px w-40px flex-shrink-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="svg-icon svg-icon-lg">
                    <!--begin::Svg Icon | path:../users/assets/media/svg/icons/Code/Compiling.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
                        <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                  <!--begin::Navigation-->
                  <ul class="navi navi-hover py-5">
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-drop"></i>
                        </span>
                        <span class="navi-text">New Group</span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-list-3"></i>
                        </span>
                        <span class="navi-text">Contacts</span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-rocket-1"></i>
                        </span>
                        <span class="navi-text">Groups</span>
                        <span class="navi-link-badge">
                          <span class="label label-light-primary label-inline font-weight-bold">new</span>
                        </span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-bell-2"></i>
                        </span>
                        <span class="navi-text">Calls</span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-gear"></i>
                        </span>
                        <span class="navi-text">Settings</span>
                      </a>
                    </li>
                    <li class="navi-separator my-3"></li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-magnifier-tool"></i>
                        </span>
                        <span class="navi-text">Help</span>
                      </a>
                    </li>
                    <li class="navi-item">
                      <a href="#" class="navi-link">
                        <span class="navi-icon">
                          <i class="flaticon2-bell-2"></i>
                        </span>
                        <span class="navi-text">Privacy</span>
                        <span class="navi-link-badge">
                          <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                        </span>
                      </a>
                    </li>
                  </ul>
                  <!--end::Navigation-->
                </div>
              </div>
            </div>
          </form>
          <!--end::Form-->
          <div class="p-2 p-lg-3">
            @if(Request::is('reservation/receipt'))
              @include('users_admin/traveller/layout/reservation_left_sidebar')
            @else
              @include('users_admin/traveller/layout/dashboard-menu')
            @endif
          </div>
        </div>
        <!--end::Tab Pane-->
      </div>
      <!--end::Tab Content-->
    </div>
    <!--end::Workspace-->
  </div>
  </div>

  <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
      <!--begin::Entry-->
      <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container mt-5">
          <!--begin::Card-->
          <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
              <div class="card-title">
                <h2 class="text-dark font-weight-bold font-saol">Personal Information </h2>
              </div>
              @include('users_admin/traveller/layout/nav-user')
            </div>
            <div class="card-body">
              @if(Request::is('dashboard'))  
                <div class="dashboard-slider">
                  <div>
                    <a href="/dashboard">
                      <div class="dashboard-slider-item">
                        <img src="{{ asset('images/slider_images/1568213046-24002805.jpg')}}" class="w-100" alt="">
                        <div class="slider-title">
                          Welcome to the Emporium-Collection
                        </div>
                      </div>
                    </a>
                  </div>
                  <div>
                    <a href="{{ URL::to('/users/profile')}}">
                      <div class="dashboard-slider-item">
                        <img src="{{ asset('images/slider_images/1568268146-96506761.jpg')}}" class="w-100" alt="">
                        <div class="slider-title">
                          My Profile
                        </div>
                      </div>
                    </a>
                  </div>
                  <div>
                    <a href="reservations.html">
                      <div class="dashboard-slider-item">
                        <img src="{{ asset('images/slider_images/1568268487-93942589.jpg')}}" class="w-100" alt="">
                        <div class="slider-title">
                          My Reservations
                        </div>
                      </div>
                    </a>
                  </div>
                  <div>
                    <a href="{{ URL::to('/users/companion')}}">
                      <div class="dashboard-slider-item">
                        <img src="{{ asset('images/53511811337-49267444221.jpg')}}" class="w-100" alt="">
                        <div class="slider-title">
                          My Companion
                        </div>
                      </div>
                    </a>
                  </div>
                  <div>
                    <a href="{{ URL::to('/users/guestinvite')}}">
                      <div class="dashboard-slider-item">
                        <img src="{{ asset('images/slider_images/1568269053-45751192.jpg')}}" class="w-100" alt="">
                        <div class="slider-title">
                          Invite Friends
                        </div>
                      </div>
                    </a>
                  </div>
                  <div>
                    <a href="{{ URL::to('/users/setting')}}">
                      <div class="dashboard-slider-item">
                        <img src="{{ asset('images/slider_images/1568270092-66288025.jpg')}}" class="w-100" alt="">
                        <div class="slider-title">
                          My Settings
                        </div>
                      </div>
                    </a>
                  </div>

                  <div>
                    <a href="security-privacy.html">
                      <div class="dashboard-slider-item">
                        <img src="{{ asset('images/slider_images/1568270328-17372868.jpg')}}" class="w-100" alt="">
                        <div class="slider-title">
                          My Security & Privacy
                        </div>
                      </div>
                    </a>
                  </div>
                  <div>
                    <a href="{{ URL::to('/users/my-preferences')}}">
                      <div class="dashboard-slider-item">
                        <img src="{{ asset('images/slider_images/1568270655-22658407.jpg')}}" class="w-100" alt="">
                        <div class="slider-title">
                          My Preferences
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              @endif  
              @yield('content')

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end::Card-->
  </div>
  <!--end::Container-->
  </div>
  <!--end::Entry-->
  </div>
  <!--end::Content-->
  <!--begin::Footer-->
  <!--doc: add "bg-white" class to have footer with solod background color-->
  <!--end::Footer-->
  <!--begin::Modal - Two-factor authentication-->
  </div>
  </div>
  <!--end::Main-->
  <!--begin::Scrolltop-->

  <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    @include('users_admin/traveller/layout/footer')
    <div class="modal fade" id="kt_modal_two_factor_authentication" tabindex="-1" aria-hidden="true">
      <!--begin::Modal header-->
      <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">s
          <!--begin::Modal header-->
          <div class="modal-header flex-stack">
            <!--begin::Title-->
            <h2>Choose An Authentication Method</h2>
            <!--end::Title-->
            <!--begin::Close-->
            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
              <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
              <span class="svg-icon svg-icon-1">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                    <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                    <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                  </g>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
          </div>
          <!--begin::Modal header-->
          <!--begin::Modal body-->
          <div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
            <!--begin::Options-->
            <div data-kt-element="options">
              <!--begin::Notice-->
              <p class="text-gray-400 fs-5 fw-bold mb-10">In addition to your username and password,
                you’ll have to enter a code (delivered via app or SMS) to log into your account.</p>
              <!--end::Notice-->
              <!--begin::Wrapper-->
              <div class="pb-10">
                <!--begin::Option-->
                <input type="radio" class="btn-check" name="auth_option" value="apps" checked="checked" id="kt_modal_two_factor_authentication_option_1" />
                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_1">
                  <!--begin::Svg Icon | path: icons/duotone/Media/Cog.svg-->
                  <span class="svg-icon svg-icon-4x me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M11.9999 2C10.8954 2 9.99994 2.89543 9.99994 4C9.99994 4.14834 9.89932 4.27718 9.75691 4.3187C9.19509 4.48248 8.65883 4.70622 8.15552 4.98253C8.02513 5.05412 7.86242 5.03411 7.75724 4.92893C6.97619 4.14788 5.70986 4.14788 4.92881 4.92893C4.14776 5.70998 4.14776 6.97631 4.92881 7.75736C5.03399 7.86254 5.05399 8.02525 4.98241 8.15564C4.70611 8.65893 4.48238 9.19516 4.3186 9.75695C4.27708 9.89937 4.14822 10 3.99988 10C2.89531 10 1.99988 10.8954 1.99988 12C1.99988 13.1046 2.89531 14 3.99988 14C4.14822 14 4.27708 14.1006 4.3186 14.2431C4.48238 14.8048 4.70611 15.3411 4.98241 15.8444C5.05399 15.9747 5.03399 16.1375 4.92881 16.2426C4.14776 17.0237 4.14776 18.29 4.92881 19.0711C5.70986 19.8521 6.97619 19.8521 7.75724 19.0711C7.86242 18.9659 8.02513 18.9459 8.15552 19.0175C8.65883 19.2938 9.19509 19.5175 9.75691 19.6813C9.89932 19.7228 9.99994 19.8517 9.99994 20C9.99994 21.1046 10.8954 22 11.9999 22C13.1045 22 13.9999 21.1046 13.9999 20C13.9999 19.8516 14.1006 19.7228 14.243 19.6813C14.8048 19.5175 15.341 19.2938 15.8442 19.0175C15.9746 18.9459 16.1373 18.9659 16.2425 19.0711C17.0236 19.8521 18.2899 19.8521 19.0709 19.0711C19.852 18.29 19.852 17.0237 19.0709 16.2426C18.9658 16.1375 18.9458 15.9747 19.0173 15.8444C19.2936 15.3411 19.5174 14.8048 19.6812 14.2431C19.7227 14.1006 19.8515 14 19.9999 14C21.1044 14 21.9999 13.1046 21.9999 12C21.9999 10.8954 21.1044 10 19.9999 10C19.8515 10 19.7227 9.89937 19.6812 9.75695C19.5174 9.19516 19.2936 8.65893 19.0173 8.15564C18.9458 8.02525 18.9658 7.86254 19.0709 7.75736C19.852 6.97631 19.852 5.70998 19.0709 4.92893C18.2899 4.14788 17.0236 4.14788 16.2425 4.92893C16.1373 5.03411 15.9746 5.05412 15.8442 4.98253C15.341 4.70625 14.8048 4.48252 14.243 4.31875C14.1006 4.27722 13.9999 4.14836 13.9999 4C13.9999 2.89543 13.1045 2 11.9999 2ZM12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" fill="#12131A" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#12131A" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                  <span class="d-block fw-bold text-start">
                    <span class="text-dark fw-bolder d-block fs-3">Authenticator Apps</span>
                    <span class="text-gray-400 fw-bold fs-6">Get codes from an app like Google
                      Authenticator, Microsoft Authenticator, Authy or 1Password.</span>
                  </span>
                </label>
                <!--end::Option-->
                <!--begin::Option-->
                <input type="radio" class="btn-check" name="auth_option" value="sms" id="kt_modal_two_factor_authentication_option_2" />
                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="kt_modal_two_factor_authentication_option_2">
                  <!--begin::Svg Icon | path: icons/duotone/Contacts/Comment.svg-->
                  <span class="svg-icon svg-icon-4x me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M5.69477 2.48932C4.00472 2.74648 2.66565 3.98488 2.37546 5.66957C2.17321 6.84372 2 8.33525 2 10C2 11.6647 2.17321 13.1563 2.37546 14.3304C2.62456 15.7766 3.64656 16.8939 5 17.344V20.7476C5 21.5219 5.84211 22.0024 6.50873 21.6085L12.6241 17.9949C14.8384 17.9586 16.8238 17.7361 18.3052 17.5107C19.9953 17.2535 21.3344 16.0151 21.6245 14.3304C21.8268 13.1563 22 11.6647 22 10C22 8.33525 21.8268 6.84372 21.6245 5.66957C21.3344 3.98488 19.9953 2.74648 18.3052 2.48932C16.6859 2.24293 14.4644 2 12 2C9.53559 2 7.31411 2.24293 5.69477 2.48932Z" fill="#191213" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7 7C6.44772 7 6 7.44772 6 8C6 8.55228 6.44772 9 7 9H17C17.5523 9 18 8.55228 18 8C18 7.44772 17.5523 7 17 7H7ZM7 11C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H11C11.5523 13 12 12.5523 12 12C12 11.4477 11.5523 11 11 11H7Z" fill="#121319" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                  <span class="d-block fw-bold text-start">
                    <span class="text-dark fw-bolder d-block fs-3">SMS</span>
                    <span class="text-gray-400 fw-bold fs-6">We will send a code via SMS if you need
                      to use your backup login method.</span>
                  </span>
                </label>
                <!--end::Option-->
              </div>
              <!--end::Options-->
              <!--begin::Action-->
              <button class="btn btn-primary w-100" data-kt-element="options-select">Continue</button>
              <!--end::Action-->
            </div>
            <!--end::Options-->
            <!--begin::Apps-->
            <div class="d-none" data-kt-element="apps">
              <!--begin::Heading-->
              <h3 class="text-dark fw-bolder mb-7">Authenticator Apps</h3>
              <!--end::Heading-->
              <!--begin::Description-->
              <div class="text-gray-500 fw-bold fs-6 mb-10">Using an authenticator app like
                <a href="https://support.google.com/accounts/answer/1066447?hl=en" target="_blank">Google Authenticator</a>,
                <a href="https://www.microsoft.com/en-us/account/authenticator" target="_blank">Microsoft Authenticator</a>,
                <a href="https://authy.com/download/" target="_blank">Authy</a>, or
                <a href="https://support.1password.com/one-time-passwords/" target="_blank">1Password</a>, scan the QR code. It will generate a 6 digit code for
                you to enter below.
                <!--begin::QR code image-->
                <div class="pt-5 text-center">
                  <img src="{{ asset('assets/media/misc/qr.png') }}" alt="" class="mw-150px" />
                </div>
                <!--end::QR code image-->
              </div>
              <!--end::Description-->
              <!--begin::Notice-->
              <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                <!--begin::Icon-->
                <!--begin::Svg Icon | path: icons/stockholm/Code/Warning-1-circle.svg-->
                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                    <rect fill="#000000" x="11" y="7" width="2" height="8" rx="1" />
                    <rect fill="#000000" x="11" y="16" width="2" height="2" rx="1" />
                  </svg>
                </span>
                <!--end::Svg Icon-->
                <!--end::Icon-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1">
                  <!--begin::Content-->
                  <div class="fw-bold">
                    <div class="fs-6 text-gray-600">If you having trouble using the QR code, select
                      manual entry on your app, and enter your username and the code:
                      <div class="fw-bolder text-dark pt-2">KBSS3QDAAFUMCBY63YCKI5WSSVACUMPN</div>
                    </div>
                  </div>
                  <!--end::Content-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Notice-->
              <!--begin::Form-->
              <form data-kt-element="apps-form" class="form" action="#">
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                  <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Enter authentication code" name="code" />
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="d-flex flex-center">
                  <button type="reset" data-kt-element="apps-cancel" class="btn btn-white me-3">Cancel</button>
                  <button type="submit" data-kt-element="apps-submit" class="btn btn-primary">
                    <span class="indicator-label">Submit</span>
                    <span class="indicator-progress">Please wait...
                      <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  </button>
                </div>
                <!--end::Actions-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Options-->
            <!--begin::SMS-->
            <div class="d-none" data-kt-element="sms">
              <!--begin::Heading-->
              <h3 class="text-dark fw-bolder fs-3 mb-5">SMS: Verify Your Mobile Number</h3>
              <!--end::Heading-->
              <!--begin::Notice-->
              <div class="text-gray-400 fw-bold mb-10">Enter your mobile phone number with country code
                and we will send you a verification code upon request.</div>
              <!--end::Notice-->
              <!--begin::Form-->
              <form data-kt-element="sms-form" class="form" action="#">
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                  <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Mobile number with country code..." name="mobile" />
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="d-flex flex-center">
                  <button type="reset" data-kt-element="sms-cancel" class="btn btn-white me-3">Cancel</button>
                  <button type="submit" data-kt-element="sms-submit" class="btn btn-primary">
                    <span class="indicator-label">Submit</span>
                    <span class="indicator-progress">Please wait...
                      <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  </button>
                </div>
                <!--end::Actions-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::SMS-->
          </div>
          <!--begin::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal header-->
    </div>
    <!--end::Modal - Two-factor authentication-->
  </div>
  <!--end::Wrapper-->
  </div>
  <!--end::Page-->
  </div>

  <div id="kt_scrolltop" class="scrolltop">
    <span class="svg-icon">
      <!--begin::Svg Icon | path:../users/assets/media/svg/icons/Navigation/Up-2.svg-->
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <polygon points="0 0 24 0 24 24 0 24" />
          <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
          <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
        </g>
      </svg>
      <!--end::Svg Icon-->
    </span>
  </div>
  
  <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
  <script src="{{ asset('assets/users/assets/plugins/global/plugins.bundle.js')}}"></script>
  <script src="{{ asset('assets/users/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
  <script src="{{ asset('assets/users/assets/js/pages/custom/wizard/wizard-3.js')}}"></script>
  <script src="{{ asset('assets/users/assets/js/scripts.bundle.js')}}"></script>

  <script src="{{ asset('assets/users/assets/js/two-factor-authentication.js')}}"></script>
  <script src="{{ asset('assets/users/assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
  <script src="{{ asset('assets/users/assets/plugins/custom/slick/slick.min.js')}}"></script>
  <link href="{{ asset('assets/users/assets/css/pages/wizard/wizard-3.css')}}" rel="stylesheet" type="text/css" />

  <script src="{{ asset('assets/users/assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
  <script src="{{ asset('assets/users/assets/js/pages/custom/wizard/wizard-3.js')}}"></script>
  <script src="{{ asset('assets/users/assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/users/assets/js/custom.js')}}"></script>
  <script src="{{ asset('assets/users/assets/js/dashboard-cookie.js')}}"></script>
  @yield('reservation')
  
  
  <script type="text/javascript">
    //Companion image show on file input 
    profile_avatar.onchange = evt => {
    const [file] = profile_avatar.files
      if (file) {
        avatar.src = URL.createObjectURL(file)
      }
    }
    $(document).ready(function() {
      var url = '/editcompanion/';
      const arr_url = url.split("/");

      var current_url =  window.location.pathname;
      const curr_url = current_url.split("/");

      if(arr_url[1] == curr_url[1]){
        
        $(".addNew").addClass("active");
        $(".myCompanion").removeClass("active");
        $("#addNew").addClass("active");
        $("#addNew").addClass("show");
        $("#myCompanion").removeClass("active");
        $("#myCompanion").removeClass("show");
      }
    
    });
</script>
  <script>
    // $("a[data-toggle='dropdown']").click(function(e){
    //   $(".dropdown-menu").removeClass("show");
    //   $(this).closest(".dropdown").find(".dropdown-menu").toggleClass("show");

    // })
    $(document).ready(function(){
        $(document).on("click",'.summary-data',function(){
            var id = $(this).find('.reserve_id').data('id');
            
            $.ajax({
                url: '/reserve/summary/'+id,
                type: 'get',
                dataType:'json',
                success:function(response){
                    $("#reservation_popup").html(response.reserve_summary);
                    $("#reservation_popup").removeClass('offcanvas-off').addClass('offcanvas-on');
                }
            });
        });

    });

    $('.experience-slider').slick({
      infinite: false,
      speed: 300,
      slidesToShow: 6,
      slidesToScroll: 1,
      prevArrow: '<a class="slide-arrow prev-arrow"><i class="ico ico-back"></i></a>',
      nextArrow: '<a class="slide-arrow next-arrow"><i class="ico ico-next"></i></a>',
      responsive: [{
          breakpoint: 1627,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1366,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    $('.dashboard-slider').slick({
      slidesToShow: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
      nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
    });
    $('.plus').click(function() {
      $(this).prev().val(+$(this).prev().val() + 1);
    });
    $('.min').click(function() {
      if ($(this).next().val() > 0) {
        if ($(this).next().val() > 0) $(this).next().val(+$(this).next().val() - 1);
      }
    });
    $('#kt_daterangepicker_2').daterangepicker({
      buttonClasses: ' btn',
      applyClass: 'btn-primary',
      cancelClass: 'btn-secondary'
    }, function(start, end, label) {
      $('#kt_daterangepicker_2 .form-control').val(start.format('DD MMM YYYY') + ' - ' + end.format('DD MMM YYYY'));
    });
    $("#send-invitation").click(function(e) {
      Swal.fire("Good job!", "Message has been sent ", "success");
    });

    $(".clickNext").click(function(e) {
      var sal = $('.select2 option:selected').eq(0).val();
    });

    $('.result-grid').slick({
      slidesToShow: 1,
      prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
      nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
    });

    $('#calRange').daterangepicker({
      buttonClasses: ' btn',
      applyClass: 'btn-primary',
      cancelClass: 'btn-secondary',
      locale: {
        format: 'D MMM'
      }
    });

    var element = document.getElementById("kt_charts_widget_4_chart");
    var options = {
      series: [{
        name: 'Net Profit',
        data: [60, 50, 80, 40, 100, 60]
      }, {
        name: 'Revenue',
        data: [70, 60, 110, 40, 50, 70]
      }],
      chart: {
        type: 'area',
        height: 290,
        background: '#c0dadb',
        toolbar: {
          show: false
        },
        sparkline: {
          enabled: true
        }
      },
      plotOptions: {},
      legend: {
        show: false
      },
      dataLabels: {
        enabled: false
      },
      fill: {
        type: 'solid',
        opacity: 1
      },
      stroke: {
        curve: 'smooth'
      },
      xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        axisBorder: {
          show: false,
        },
        axisTicks: {
          show: false
        },
        labels: {
          show: false,
        },
        crosshairs: {
          position: 'front',
          stroke: {
            width: 1,
            dashArray: 3
          }
        },
        tooltip: {
          enabled: true,
          formatter: undefined,
          offsetY: 0,
          style: {
            fontSize: '12px'
          }
        }
      },
      yaxis: {
        labels: {
          show: false,
        }
      },
      states: {
        normal: {
          filter: {
            type: 'none',
            value: 0
          }
        },
        hover: {
          filter: {
            type: 'none',
            value: 0
          }
        },
        active: {
          allowMultipleDataPointsSelection: false,
          filter: {
            type: 'none',
            value: 0
          }
        }
      },
      tooltip: {
        style: {
          fontSize: '12px'
        },
        y: {
          formatter: function(val) {
            return "$" + val + " thousands"
          }
        }
      },
      grid: {
        yaxis: {
          lines: {
            show: false
          }
        }
      },
      markers: {
        strokeWidth: 3
      }
    };

    var chart = new ApexCharts(element, options);
    chart.render();

    $(document).on("click",".add_card", function(){
        
    });
    jQuery(function($) {
      $(document).ready(function() {
        $(document).on("click",'.change_password' ,function(){
          alert();
        });
        @yield('companion_datatable')

        @yield('Preference_Datatable')

        @yield('Guest_invite_datatable')

        @yield('remove_acc_scr')

      });
    });

  </script>
</body>

</html>