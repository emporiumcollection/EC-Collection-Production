<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Metronic Live preview | Keenthemes</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('assets/users/assets/js/custom.js')}}../users/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('assets/users/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/users/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/users/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/users/assets/css/slick.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/users/assets/css/slick-theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/users/assets/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/users/assets/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/users/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('assets/users/assets/media/logos/favicon.ico')}}" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="../users/assets/media/logo.png" class="logo-default max-h-30px" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
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
                <!--begin::Primary-->
<div class="aside-primary d-flex flex-column align-items-center flex-row-auto">
    <!--begin::Brand-->
    <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-5 py-lg-12">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="../users/assets/media/logo.png" width="60" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Nav Wrapper-->
    <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid py-5 scroll scroll-pull">
        <!--begin::Nav-->
        <ul class="nav flex-column">
            <!--begin::Item-->
            <li class="nav-item mb-3 " data-toggle="tooltip" data-placement="right" data-container="body"
                data-boundary="window" title="Dashboard">
                <a href="dashboard.html" class="nav-link btn btn-icon btn-clean btn-lg @@dashboard">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body"
                data-boundary="window" title="Property Management System">
                <a href="hotels.html" class="nav-link btn btn-icon btn-clean btn-lg  ">
                    <i class="flaticon-analytics"></i>
                </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body"
                data-boundary="window" title="User">
                <a href="crm.html" class="nav-link btn btn-icon btn-clean btn-lg @@crm" >
                    <i class="flaticon-users"></i>
                </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item mb-3 " data-toggle="tooltip" data-placement="right" data-container="body"
                data-boundary="window" title="Reservations">
                <a href="reservations.html" class="nav-link btn btn-icon btn-clean btn-lg active">
                    <i class="flaticon-calendar"></i>
                </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item mb-3 " data-toggle="tooltip" data-placement="right" data-container="body"
                data-boundary="window" title="Dynamic Rate Management">
                <a href="dynamic-rate.html" class="nav-link btn btn-icon btn-clean btn-lg @@dynamicrate">
                    <i class="flaticon-line-graph"></i>
                </a>
            </li>
            <!--end::Item-->
        </ul>
        <!--end::Nav-->
    </div>
    <!--end::Nav Wrapper-->
    <!--begin::Footer-->
    <div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-4 py-lg-10">
        <!--begin::Aside Toggle-->
        <span class="aside-toggle btn btn-icon btn-primary btn-hover-primary shadow-sm" id="kt_aside_toggle"
            data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window"
            title="Toggle Aside">
            <div class="roatate-i">
                <i class="flaticon-up-arrow"></i>
            </div>
        </span>
        <!--end::Aside Toggle-->
    </div>
    <!--end::Footer-->
</div>
<!--end::Primary-->
<!--begin::Secondary-->
<div class="aside-secondary d-flex flex-row-fluid">
    <!--begin::Workspace-->
    <div class="aside-workspace scroll scroll-push my-2">
        <!--begin::Tab Content-->
        <div class="tab-content">



            <!--begin::Hotel List Panel-->
            <div id="hotelList" class="offcanvas offcanvas-left p-10">
                <!--begin::Header-->
                <div class="offcanvas-header d-flex align-items-center justify-content-between pb-10">
                    <h3 class="font-weight-bold m-0">Hotels
                    </h3>
                    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
                        <i class="ki ki-close icon-xs text-muted"></i>
                    </a>
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="offcanvas-content pr-5 mr-n5 scroll ps ps--active-y">
                    <div class="row">
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="hotels.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">All</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="hotels.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Safari Hotels</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="hotels.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Spa Hotels</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="hotels.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Voyage Hotels</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="hotels.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Golf Hotels</span>
                            </a>
                        </div>
                        <!--end::Item-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Hotel List Panel-->
            <!--begin::Supplier list Panel-->
            <div id="supplierList" class="offcanvas offcanvas-left p-10">
                <!--begin::Header-->
                <div class="offcanvas-header d-flex align-items-center justify-content-between pb-10">
                    <h3 class="font-weight-bold m-0">Suppliers
                    </h3>
                    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
                        <i class="ki ki-close icon-xs text-muted"></i>
                    </a>
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="offcanvas-content pr-5 mr-n5 scroll ps ps--active-y">
                    <div class="row">
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">All</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Tour Operator</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Attraction</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Activity provider</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Event Company</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Hotel</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Restaurant</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Spa</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Showroom</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Winefarm</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">GolfClub</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Yachts Club</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Polo Club</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Jet Providers</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-lg-4 col-md-4 col-12 gutter-b">
                            <a href="supplier.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5 h-100 btn-flex">
                                <span class="d-block font-weight-bold font-size-h6">Gallery</span>
                            </a>
                        </div>
                        <!--end::Item-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Supplier list Panel-->

            <!--begin::Calendar Panel-->
            <div id="calendar" class="offcanvas offcanvas-left p-10">
                <!--begin::Header-->
                <div class="offcanvas-header d-flex align-items-center justify-content-between pb-10">
                    <h3 class="font-weight-bold m-0">Calendar
                    </h3>
                    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
                        <i class="ki ki-close icon-xs text-muted"></i>
                    </a>
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="offcanvas-content pr-5 mr-n5 scroll ps ps--active-y">
                    <div class="row gutter-b">
                        <!--begin::Item-->
                        <div class="col-4">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">JAN</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-4">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">FEB</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-4">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">MARC</span>
                            </a>
                        </div>
                        <!--end::Item-->
                    </div>
                    <div class="row gutter-b">
                        <!--begin::Item-->
                        <div class="col-4">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">APR</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-4">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">MAY</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-4">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">JUN</span>
                            </a>
                        </div>
                        <!--end::Item-->
                    </div>
                    <div class="row gutter-b">
                        <!--begin::Item-->
                        <div class="col-4">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">JUL</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-4">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">AUG</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-4">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">SEP</span>
                            </a>
                        </div>
                        <!--end::Item-->
                    </div>
                    <div class="row gutter-b">
                        <!--begin::Item-->
                        <div class="col-4">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">OCT</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-4">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">NOV</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-4">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">DEC</span>
                            </a>
                        </div>
                        <!--end::Item-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Calendar Panel-->
            <!--begin::Calendar weeks Panel-->
            <div id="calendar_weeks" class="offcanvas offcanvas-left p-10">
                <!--begin::Header-->
                <div class="offcanvas-header d-flex align-items-center justify-content-between pb-10">
                    <h3 class="font-weight-bold m-0">Calendar Weeks
                    </h3>
                    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
                        <i class="ki ki-close icon-xs text-muted"></i>
                    </a>
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="offcanvas-content pr-5 mr-n5 scroll ps ps--active-y">
                    <div class="row">
                        <!--begin::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW1</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW2</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW3</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW4</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW5</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW6</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW7</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW8</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW9</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW10</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW11</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW12</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW13</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW14</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW15</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW16</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW17</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW18</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW19</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW20</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW21</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW22</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW23</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW24</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW25</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW26</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW27</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW28</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW29</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW30</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW31</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW32</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW33</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW34</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW35</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW36</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW37</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW38</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW39</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW40</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW41</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW42</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW43</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW44</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW45</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW46</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW47</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW48</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW49</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW50</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW51</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                        <div class="col-4 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">CW52</span>
                            </a>
                        </div>
                        <!--end::Item-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Calendar weeks Panel-->
            <!--begin::Experience Panel-->
            <div id="experience" class="offcanvas offcanvas-left p-10">
                <!--begin::Header-->
                <div class="offcanvas-header d-flex align-items-center justify-content-between pb-10">
                    <h3 class="font-weight-bold m-0">Experience
                    </h3>
                    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
                        <i class="ki ki-close icon-xs text-muted"></i>
                    </a>
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="offcanvas-content pr-5 mr-n5 scroll ps ps--active-y">
                    <div class="row ">
                        <!--begin::Item-->
                        <div class="col-12 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">SPA</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-12 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">Islands</span>
                            </a>
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="col-12 gutter-b">
                            <a href="reservations.html"
                                class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
                                <span class="d-block font-weight-bold font-size-h6">Beautique</span>
                            </a>
                        </div>
                        <!--end::Item-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Experience Panel-->
                <!--begin::Tab Pane-->
                <div class="p-3 px-lg-7 py-lg-5">
                    <!--begin::Form-->
                    <form class="p-2 p-lg-3">
                        <div class="d-flex">
                            <div class="input-icon h-40px">
                                <input type="text" class="form-control form-control-lg form-control-solid h-40px"
                                    placeholder="Search..." id="generalSearch" />
                                <span>
                                    <span class="svg-icon svg-icon-lg">
                                        <!--begin::Svg Icon | path:../users/assets/media/svg/icons/General/Search.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                            </div>
                            <div class="dropdown" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                <a href="#"
                                    class="btn btn-icon btn-default btn-hover-primary ml-2 h-40px w-40px flex-shrink-0"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="svg-icon svg-icon-lg">
                                        <!--begin::Svg Icon | path:../users/assets/media/svg/icons/Code/Compiling.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <path
                                                    d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                    fill="#000000" />
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
                                                    <span
                                                        class="label label-light-primary label-inline font-weight-bold">new</span>
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
                                                    <span
                                                        class="label label-light-danger label-rounded font-weight-bold">5</span>
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
                        <div class="row gutter-b">
                            <!--begin::Item-->
                            <div class="col-lg-12 mb-5">
                                <a href="#" class="btn btn-block btn-white text-left radius-5 py-2 px-5 pl-12">
                                    <span class="d-block font-weight-bold font-size-h4 font-saol">Personal Info</span>
                                </a>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="col-lg-12 mb-5">
                                <a href="#" class="btn btn-block btn-white text-left radius-5 py-2 px-5 pl-12">
                                    <span class="d-block font-weight-bold font-size-h4 font-saol">Login &
                                        Security</span>
                                </a>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="col-lg-12 mb-5">
                                <a href="#" class="btn btn-block btn-white text-left radius-5 py-2 px-5 pl-12">
                                    <span class="d-block font-weight-bold font-size-h4 font-saol">Global
                                        Preferences</span>
                                </a>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="col-lg-12 mb-5">
                                <a href="#" class="btn btn-block btn-white text-left radius-5 py-2 px-5 pl-12 active">
                                    <span class="d-block font-weight-bold font-size-h4 font-saol">Reservations</span>
                                </a>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="col-lg-12">
                                <a href="#" class="btn btn-block btn-white text-left radius-5 py-2 px-5 pl-12">
                                    <span class="d-block font-weight-bold font-size-h4 font-saol">Messages</span>
                                </a>
                            </div>
                            <!--end::Item-->
                        </div>
                    </div>
                </div>
                <!--end::Tab Pane-->
            </div>
            <!--end::Tab Content-->
        </div>
        <!--end::Workspace-->
    </div>
    <!--end::Secondary-->
    </div>
    <!--end::Aside-->
    <!--begin::Wrapper-->
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
                                <h2 class="text-dark font-weight-bold font-saol">Reservations </h2>
                            </div>
                            <div class="card-toolbar">
    <a href="#setLanguage" data-toggle="modal" class="btn btn-light-primary font-weight-bolder ml-2">
        <span class="svg-icon svg-icon-md mr-0">
            <svg id="Layer_1" enable-background="new 0 0 510 510" height="20" viewBox="0 0 510 510" width="20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m255 .663c-140.931 0-255 114.051-255 255 13.271 338.27 496.769 338.195 510-.002 0-140.926-114.049-254.998-255-254.998zm-15 119.748c-22.636-.73-44.737-3.106-65.641-6.978 12.159-30.994 34.189-69.678 65.641-80.23zm0 30.014v90.238h-89.756c1.105-35.111 6.079-68.64 14.52-98.558 23.945 4.691 49.316 7.526 75.236 8.32zm0 120.238v90.238c-25.92.794-51.291 3.629-75.236 8.319-8.441-29.918-13.414-63.447-14.52-98.558h89.756zm0 120.252v87.209c-31.5-10.568-53.519-49.332-65.641-80.23 20.904-3.872 43.005-6.248 65.641-6.979zm30 0c22.635.731 44.737 3.106 65.641 6.979-12.159 30.994-34.188 69.678-65.641 80.23zm0-30.013v-90.238h89.756c-1.105 35.111-6.079 68.64-14.52 98.558-23.945-4.691-49.316-7.526-75.236-8.32zm0-120.239v-90.238c25.92-.794 51.291-3.629 75.236-8.319 8.441 29.918 13.414 63.446 14.52 98.558h-89.756zm0-120.252v-87.209c31.5 10.568 53.519 49.332 65.641 80.23-20.904 3.873-43.006 6.249-65.641 6.979zm61.23-76.444c29.048 10.492 55.332 26.804 77.448 47.519-13.28 5.929-27.858 11.039-43.41 15.247-9.242-24.627-20.766-45.884-34.038-62.766zm-186.499 62.766c-15.552-4.207-30.13-9.318-43.41-15.247 22.116-20.715 48.4-37.027 77.448-47.519-13.271 16.882-24.795 38.139-34.038 62.766zm-9.246 28.522c-8.767 31.57-14.139 67.242-15.258 105.408h-89.715c3.148-47.568 21.139-91.137 49.38-126.113 16.689 8.214 35.421 15.166 55.593 20.705zm-15.258 135.408c1.119 38.167 6.491 73.838 15.258 105.408-20.172 5.539-38.904 12.491-55.594 20.705-28.241-34.976-46.232-78.545-49.379-126.113zm24.504 133.93c9.242 24.627 20.767 45.884 34.038 62.766-29.048-10.492-55.332-26.804-77.448-47.519 13.281-5.929 27.859-11.039 43.41-15.247zm220.538.001c15.552 4.207 30.13 9.317 43.41 15.247-22.116 20.715-48.4 37.027-77.448 47.519 13.271-16.882 24.795-38.139 34.038-62.766zm9.246-28.523c8.767-31.57 14.139-67.242 15.258-105.408h89.716c-3.148 47.568-21.139 91.137-49.38 126.113-16.691-8.213-35.423-15.166-55.594-20.705zm15.257-135.408c-1.119-38.166-6.491-73.838-15.258-105.408 20.172-5.539 38.903-12.491 55.594-20.705 28.241 34.976 46.232 78.545 49.38 126.113z" />
            </svg>
        </span>
    </a>
    <!--begin::Dropdown-->
    <div class="dropdown dropdown-inline ml-2">
        <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="svg-icon svg-icon-md mr-0">
                <!--begin::Svg Icon | path:../users/assets/media/svg/icons/Design/PenAndRuller.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                        <path
                            d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                        <path
                            d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                            fill="#000000" fill-rule="nonzero"></path>
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span></button>
        <!--begin::Dropdown Menu-->
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
            <!--begin::Navigation-->
            <ul class="navi flex-column navi-hover py-2">
                <li class="navi-item">
                    <a href="profile.html" class="navi-link">
                        <span class="navi-text">Profile</span>
                    </a>
                </li>
                <li class="navi-item">
                    <a href="#" class="navi-link">
                        <span class="navi-text">Login Security</span>
                    </a>
                </li>
                <li class="navi-item">
                    <a href="profile.html#account" class="navi-link">
                        <span class="navi-text">Account</span>
                    </a>
                </li>
                <li class="navi-item">
                    <a href="profile.html#preferences" class="navi-link">
                        <span class="navi-text">Global Preferences</span>
                    </a>
                </li>
                <li class="navi-item">
                    <a href="profile.html#invite" class="navi-link">
                        <span class="navi-text">Invite Friends</span>
                    </a>
                </li>
                <li class="navi-item">
                    <a href="#myCollections" class="navi-link" data-canvas="popup">
                        <span class="navi-text">My Collections</span>
                    </a>
                </li>
                <li class="navi-item">
                    <a href="#addPayment" class="navi-link" data-toggle="modal">
                        <span class="navi-text">Add Payment Method</span>
                    </a>
                </li>
                <li class="navi-item">
                    <a href="#createCompany" class="navi-link" data-canvas="popup">
                        <span class="navi-text">Create a Company</span>
                    </a>
                </li>
                <li class="navi-item">
                    <a href="notifications.html" class="navi-link">
                        <span class="navi-text">Notifications</span>
                    </a>
                </li>
            </ul>
            <!--end::Navigation-->
        </div>
        <!--end::Dropdown Menu-->
    </div>
    <!--end::Dropdown-->
</div>


<!-- Modal Set Languange-->
<div class="modal fade" id="setLanguage" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -8px;">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
                <ul class="nav nav-tabs nav-tabs-line tab-line-cs">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold active" data-toggle="tab" href="#language">Language and
                            region</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" data-toggle="tab" href="#currency">Currency</a>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="language" role="tabpanel">
                        <h5 class="mb-5">Suggested language and region</h5>
                        <div class="radio-inline">
                            <label class="radio radio-box" data-dismiss="modal">
                                <input type="radio" name="languageRegion">
                                <div class="radio-box-label">
                                    <div>English</div>
                                    <div class="text-muted">United Kingdom</div>
                                </div>
                                
                            </label>
                        </div>

                        <h5 class="mb-5 mt-10">Choose a language and region</h5>
                        <div class="radio-inline">
                            <label class="radio radio-box" data-dismiss="modal">
                                <input type="radio" name="languageRegion" checked>
                                <div class="radio-box-label">
                                    <div>English</div>
                                    <div class="text-muted">United Kingdom</div>
                                </div>
                            </label>
                            <label class="radio radio-box" data-dismiss="modal">
                                <input type="radio" name="languageRegion" >
                                <div class="radio-box-label">
                                    <div>Deutsch</div>
                                    <div class="text-muted">Schweiz</div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="currency" role="tabpanel">
                        <h5 class="mb-5">Choose a currency</h5>
                        <div class="radio-inline">
                            <label class="radio radio-box" data-dismiss="modal">
                                <input type="radio" name="currencySet" checked>
                                <div class="radio-box-label">
                                    <div>United States dollar</div>
                                    <div class="text-muted">USD - $</div>
                                </div>
                            </label>
                            <label class="radio radio-box" data-dismiss="modal">
                                <input type="radio" name="currencySet">
                                <div class="radio-box-label">
                                    <div>Euro</div>
                                    <div class="text-muted">EUR - €</div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

<!-- Modal Add Payment-->
<div class="modal fade" id="addPayment" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment Method</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="mb-4">
                        <img src="../images/credit-cards-768x178.png" class="img-fluid" alt="">
                    </div>

                    <div class="form-group">
                        <label> Card Type
                            <span class="text-danger">*</span>
                        </label>
                        <select class="form-control">
                            <option>Private</option>
                            <option>Business</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Card number <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Card Number">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Expires On <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your address">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Security Code <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your passcode">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>First name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your firsname">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your lastname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Postal Code <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your postal code">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Country <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your country">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary font-weight-bold">Add Card</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Popup Create Company -->
<!--begin::Demo Panel-->
<div id="createCompany" class="offcanvas offcanvas-right p-10" style="width: 90%;">
  <!--begin::Header-->
  <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
    <h4 class="font-weight-bold m-0">Create Company</h4>
    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
      <i class="ki ki-close icon-xs text-muted"></i>
    </a>
  </div>
  <!--end::Header-->
  <!--begin::Content-->
  <div class="offcanvas-content">
    <!--begin::Wrapper-->
    <div class="offcanvas-wrapper mb-5 scroll-pull">
      <div class="mt-15">
        <p>
          In this section, add all your company related information for tax purposes. Make sure to enter your details
          correct as the infomration will be used for billing.
        </p>
  
        <p>
          Provide your legal business details to help us confirm you're part of a company.
        </p>
      </div>

      <form action="#">
        <div class="mt-15">
          <div class="form-group row mb-15">
            <label class="col-lg-2 col-form-label text-lg-right">Company name* </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
          </div>
          <div class="separator separator-dashed separator-border-2"></div>
          <div class="form-group row mt-15">
            <h3 class="col-lg-2 text-lg-right font-saol">Business Address</h3>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">Address </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">City</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">State </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">ZIP code </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">Country </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">Phone number* </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right"></label>
            <div class="col-lg-4">
              <div class="checkbox-inline mt-7">
                <label class="checkbox checkbox-outline checkbox-success">
                  <input type="checkbox">
                  <span></span>
                  Business address and registered office address are the same
                </label>
              </div>
            </div>
          </div>
          <div class="separator separator-dashed separator-border-2"></div>
          <div class="form-group row mt-15">
            <h3 class="col-lg-2 text-lg-right font-saol">
              Legal representative
            </h3>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">Name* </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">Email </label>
            <div class="col-lg-4">
              <input type="email" class="form-control" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">Phone number </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">Country of incorporation </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">Registration number </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">Registration number </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
          </div>
          <div class="separator separator-dashed separator-border-2"></div>
          <div class="form-group row mt-15">
            <h3 class="col-lg-2 text-lg-right font-saol">
              Company owner
            </h3>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">Name* </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">Date of birth  </label>
            <div class="col-lg-4">
              <div class="input-group date">
                <input type="text" class="form-control" id="birthday" readonly="readonly" placeholder="Select date" />
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="la la-calendar-check-o"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row my-15">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
              <button type="button" class="btn btn-secondary mr-2">Deactive my account</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!--end::Wrapper-->
    <!--begin::Purchase-->

    <!--end::Purchase-->
  </div>
  <!--end::Content-->
</div>
<!--end::Demo Panel-->

<!-- Popup My Collections -->
<!--begin::Demo Panel-->
<div id="myCollections" class="offcanvas offcanvas-right p-10" style="width: 90%;">
  <!--begin::Header-->
  <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
    <h4 class="font-weight-bold m-0">My Collections</h4>
    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
      <i class="ki ki-close icon-xs text-muted"></i>
    </a>
  </div>
  <!--end::Header-->
  <!--begin::Content-->
  <div class="offcanvas-content">
    <!--begin::Wrapper-->
    <div class="offcanvas-wrapper mb-5 scroll-pull">
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
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
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
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
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
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
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
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
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
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
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
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
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
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
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
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
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
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
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
          <div class="p-8">
            <form action="#">
              <div class="row">
                <div class="col-xl-7 col-lg-12">
                  <div class="form-group row">
                    <div class="col-4">
                      <label>Name of Collection sdsdsd<sup>*</sup> </label>
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
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
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
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
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
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
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
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
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
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
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
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
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
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
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
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
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
    <!--end::Wrapper-->
    <!--begin::Purchase-->

    <!--end::Purchase-->
  </div>
  <!--end::Content-->
</div>
<!--end::Demo Panel-->
                        </div>
                        <div class="card-body">
                            <div class="mb-7">
                                <!--begin::Subheader-->
                                <div class="row align-items-center">
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="row align-items-center">
                                            <div class="col-md-3">
                                                <input type='text' class="form-control" id="calRange" readonly
                                                    placeholder="Select time" type="text" />
                                            </div>
                                            <div class="col-md-3 my-2 my-md-0">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="Search..."
                                                        id="kt_datatable_search_query" />
                                                    <span>
                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                                    <select class="form-control" id="kt_datatable_search_status">
                                                        <option value="">All</option>
                                                        <option value="1">Open</option>
                                                        <option value="2">Done</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                                    <select class="form-control" id="kt_datatable_search_type">
                                                        <option value="">All</option>
                                                        <option value="1">Islands</option>
                                                        <option value="2">Safari</option>
                                                        <option value="3">Spa</option>
                                                        <option value="4">Voyage</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="#"
                                                    class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                                            </div>
                                            <div>
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link px-2 active" data-toggle="tab"
                                                            href="#data-table" aria-selected="true">
                                                            <i class="text-dark-50 flaticon-interface-7"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link px-2" data-toggle="tab" href="#data-grid"
                                                            aria-selected="false">
                                                            <i class="text-dark-50 flaticon-squares-1"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Subheader-->
                            </div>

                            <!--begin::Entry-->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="data-table">
                                    <!--begin: Datatable-->
                                    <div class="table-scroller">
                                        <div class="datatable datatable-bordered datatable-head-custom"
                                            id="kt_datatable">
                                        </div>
                                    </div>
                                    <!--end: Datatable-->
                                </div>
                                <div class="tab-pane fade" id="data-grid">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch">
                                                <!--begin::Body-->
                                                <div class="card-body">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Pic-->
                                                        <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                                                            <img src="../users/assets/media/project-logos/3.png"
                                                                alt="image" />
                                                        </div>
                                                        <!--end::Pic-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column mr-auto">
                                                            <!--begin: Title-->
                                                            <div class="d-flex flex-column mr-auto">
                                                                <a href="#"
                                                                    class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                                                                    Guest Name</a>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <a href="#reservation_popup" title="View Reservations"
                                                            data-canvas="popup">
                                                            <i class="flaticon-calendar-1" style="color: #000;"></i>
                                                        </a>
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Description-->
                                                    <div class="mb-7 mt-7">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="text-dark-75 font-weight-bolder mr-2">Booked
                                                                From:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">Emporium-Islands.com</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Mobile:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">8901929019</a>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-between align-items-cente my-1">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">you@mail.com</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Agent:</span>
                                                            <span class="text-muted font-weight-bold">Lorem
                                                                Lipsum</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Description-->
                                                    <div class="d-flex mb-5">
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="font-weight-bold mr-4">Start
                                                                Date</span>
                                                            <span
                                                                class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14
                                                                Jan, 17</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bold mr-4">End Date</span>
                                                            <span
                                                                class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">15
                                                                Oct, 18</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;">
                                                            <i class="label-success-o"></i> New York</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 2 Feb </div>
                                                                <div class="w-100 text-right">Depart : 8 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;"><i class="label-warning-o"></i>
                                                            Boston</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 8 Feb </div>
                                                                <div class="w-100 text-right">Depart : 14 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;"><i class="label-danger-o"></i>
                                                            Miami</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 14 Feb </div>
                                                                <div class="w-100 text-right">Depart : 22 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-danger" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                                <!-- Begin::Footer -->
                                                <div class="card-footer d-flex align-items-center">
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="svg-icon svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Text/Bullet-list.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                                            fill="#000000"></path>
                                                                        <path
                                                                            d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                                            fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <a href="#itinerary"
                                                                class="font-weight-bolder text-primary ml-2"
                                                                data-canvas="popup">Itinerary</a>
                                                        </div>
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="svg-icon svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Communication/Group-chat.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                            fill="#000000"></path>
                                                                        <path
                                                                            d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                            fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <a href="#chat" class="font-weight-bolder text-primary ml-2"
                                                                id="communication"
                                                                data-canvas="popup">Communications</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End::Footer -->
                                            </div>
                                            <!--end:: Card-->
                                        </div>
                                        <div class="col-xl-4">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch">
                                                <!--begin::Body-->
                                                <div class="card-body">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Pic-->
                                                        <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                                                            <img src="../users/assets/media/project-logos/3.png"
                                                                alt="image" />
                                                        </div>
                                                        <!--end::Pic-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column mr-auto">
                                                            <!--begin: Title-->
                                                            <div class="d-flex flex-column mr-auto">
                                                                <a href="#"
                                                                    class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                                                                    Guest Name</a>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <a href="#reservation_popup" title="View Reservations"
                                                            data-canvas="popup">
                                                            <i class="flaticon-calendar-1" style="color: #000;"></i>
                                                        </a>
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Description-->
                                                    <div class="mb-7 mt-7">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="text-dark-75 font-weight-bolder mr-2">Booked
                                                                From:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">Emporium-Islands.com</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Mobile:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">8901929019</a>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-between align-items-cente my-1">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">you@mail.com</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Agent:</span>
                                                            <span class="text-muted font-weight-bold">Lorem
                                                                Lipsum</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Description-->
                                                    <div class="d-flex mb-5">
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="font-weight-bold mr-4">Start
                                                                Date</span>
                                                            <span
                                                                class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14
                                                                Jan, 17</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bold mr-4">End Date</span>
                                                            <span
                                                                class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">15
                                                                Oct, 18</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;">
                                                            <i class="label-success-o"></i> New York</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 2 Feb </div>
                                                                <div class="w-100 text-right">Depart : 8 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;"><i class="label-warning-o"></i>
                                                            Boston</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 8 Feb </div>
                                                                <div class="w-100 text-right">Depart : 14 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;"><i class="label-danger-o"></i>
                                                            Miami</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 14 Feb </div>
                                                                <div class="w-100 text-right">Depart : 22 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-danger" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                                <!-- Begin::Footer -->
                                                <div class="card-footer d-flex align-items-center">
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="svg-icon svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Text/Bullet-list.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                                            fill="#000000"></path>
                                                                        <path
                                                                            d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                                            fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <a href="#itinerary"
                                                                class="font-weight-bolder text-primary ml-2"
                                                                data-canvas="popup">Itinerary</a>
                                                        </div>
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="svg-icon svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Communication/Group-chat.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                            fill="#000000"></path>
                                                                        <path
                                                                            d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                            fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <a href="#chat" class="font-weight-bolder text-primary ml-2"
                                                                id="communication"
                                                                data-canvas="popup">Communications</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End::Footer -->
                                            </div>
                                            <!--end:: Card-->
                                        </div>
                                        <div class="col-xl-4">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch">
                                                <!--begin::Body-->
                                                <div class="card-body">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Pic-->
                                                        <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                                                            <img src="../users/assets/media/project-logos/3.png"
                                                                alt="image" />
                                                        </div>
                                                        <!--end::Pic-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column mr-auto">
                                                            <!--begin: Title-->
                                                            <div class="d-flex flex-column mr-auto">
                                                                <a href="#"
                                                                    class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                                                                    Guest Name</a>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <a href="#reservation_popup" title="View Reservations"
                                                            data-canvas="popup">
                                                            <i class="flaticon-calendar-1" style="color: #000;"></i>
                                                        </a>
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Description-->
                                                    <div class="mb-7 mt-7">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="text-dark-75 font-weight-bolder mr-2">Booked
                                                                From:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">Emporium-Islands.com</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Mobile:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">8901929019</a>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-between align-items-cente my-1">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">you@mail.com</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Agent:</span>
                                                            <span class="text-muted font-weight-bold">Lorem
                                                                Lipsum</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Description-->
                                                    <div class="d-flex mb-5">
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="font-weight-bold mr-4">Start
                                                                Date</span>
                                                            <span
                                                                class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14
                                                                Jan, 17</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bold mr-4">End Date</span>
                                                            <span
                                                                class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">15
                                                                Oct, 18</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;">
                                                            <i class="label-success-o"></i> New York</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 2 Feb </div>
                                                                <div class="w-100 text-right">Depart : 8 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;"><i class="label-warning-o"></i>
                                                            Boston</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 8 Feb </div>
                                                                <div class="w-100 text-right">Depart : 14 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;"><i class="label-danger-o"></i>
                                                            Miami</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 14 Feb </div>
                                                                <div class="w-100 text-right">Depart : 22 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-danger" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                                <!-- Begin::Footer -->
                                                <div class="card-footer d-flex align-items-center">
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="svg-icon svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Text/Bullet-list.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                                            fill="#000000"></path>
                                                                        <path
                                                                            d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                                            fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <a href="#itinerary"
                                                                class="font-weight-bolder text-primary ml-2"
                                                                data-canvas="popup">Itinerary</a>
                                                        </div>
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="svg-icon svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Communication/Group-chat.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                            fill="#000000"></path>
                                                                        <path
                                                                            d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                            fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <a href="#chat" class="font-weight-bolder text-primary ml-2"
                                                                id="communication"
                                                                data-canvas="popup">Communications</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End::Footer -->
                                            </div>
                                            <!--end:: Card-->
                                        </div>

                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Pagination-->
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="d-flex flex-wrap mr-3">
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="ki ki-bold-arrow-back icon-xs"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="ki ki-bold-arrow-next icon-xs"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <select
                                                class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                                                style="width: 75px;">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                            <span class="text-muted">Displaying 10 of 230 records</span>
                                        </div>
                                    </div>
                                    <!--end::Pagination-->
                                </div>
                            </div>
                            <!--end::Entry-->
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
        <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2">2021©</span>
            <a href="#" target="_blank"
                class="text-dark-75 text-hover-primary">Emporium-Collection</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Nav-->
        <div class="nav nav-dark order-1 order-md-2">
            <a href="#" target="_blank" class="nav-link pr-3 pl-0">Island</a>
            <a href="#" target="_blank" class="nav-link px-3">Safari</a>
            <a href="#" target="_blank" class="nav-link pl-3 pr-0">Spa</a>
            <a href="#" target="_blank" class="nav-link pl-3 pr-0">Voyage</a>
            <a href="#" target="_blank" class="nav-link pl-3 pr-0">Yatchs</a>
        </div>
        <!--end::Nav-->
    </div>
    <!--end::Container-->
</div>

        <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    </div>
    <!--end::Main-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:../users/assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->
    <div id="detail" class="offcanvas offcanvas-right p-10" style="width: 90%;">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
            <h4 class="font-weight-bold m-0">Tammy</h4>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content">
            <!--begin::Wrapper-->
            <div class="offcanvas-wrapper mb-5 scroll-pull">

            </div>
            <!--end::Wrapper-->
            <!--begin::Purchase-->

            <!--end::Purchase-->
        </div>
        <!--end::Content-->
    </div>
    <!--begin::Demo Panel-->
<div id="chat" class="offcanvas offcanvas-right p-10" style="width: 90%;">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
        <h4 class="font-weight-bold m-0">Communications</h4>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content">
        <!--begin::Wrapper-->
        <div class="offcanvas-wrapper mb-5 scroll-pull">
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Chat-->
                    <div class="d-flex flex-row">
                        <!--begin::Aside-->
                        <div class="flex-row-auto offcanvas-mobile w-350px w-xl-400px" id="kt_chat_aside">
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin:Search-->
                                    <div class="input-group input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path
                                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control py-4 h-auto" placeholder="Email" />
                                    </div>
                                    <!--end:Search-->
                                    <!--begin:Users-->
                                    <div class="mt-7 scroll scroll-pull">
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Matt
                                                        Pears</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">Head of
                                                        Development</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">35
                                                    mins</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_11.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Charlie
                                                        Stone</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">Art
                                                        Director</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">7 hrs</span>
                                                <span class="label label-sm label-success">4</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_10.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Teresa
                                                        Fox</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">Web
                                                        Designer</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">3 hrs</span>
                                                <span class="label label-sm label-danger">5</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_13.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Giannis
                                                        Nelson</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">IT
                                                        Consultant</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">2 days</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_15.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Carles
                                                        Puyol</a>
                                                    <span
                                                        class="text-muted font-weight-bold font-size-sm">Operator</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">5 mins</span>
                                                <span class="label label-sm label-success">9</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_16.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Ana
                                                        Torn</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">Head Of
                                                        Finance</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">2 days</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Lisa
                                                        Pears</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">Web
                                                        Designer</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">6 mins</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_20.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Amanda
                                                        Bold</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">Art
                                                        Director</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">3 hrs</span>
                                                <span class="label label-sm label-warning">7</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Nick
                                                        Jhonson</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">IT
                                                        Consultant</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">10
                                                    mins</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_19.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Sarah
                                                        Larson</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">Web
                                                        Designer</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">4 hrs</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Matt
                                                        Pears</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">Head of
                                                        Development</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">35
                                                    mins</span>
                                                <span class="label label-sm label-success">5</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Tim
                                                        Stone</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">Web
                                                        Developer</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">5 hrs</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_17.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Jhon
                                                        Richardson</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">Head of
                                                        Development</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">1 week</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Ana
                                                        Kiskia</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">Web
                                                        Master</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">35
                                                    mins</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_14.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Nick
                                                        Stone</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">Art
                                                        Director</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">3 hrs</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                        <!--begin:User-->
                                        <div class="d-flex align-items-center justify-content-between mb-5">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50 mr-3">
                                                    <img alt="Pic" src="assets/media/users/300_13.jpg" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Nick
                                                        Nilson</a>
                                                    <span class="text-muted font-weight-bold font-size-sm">Software
                                                        Arcitect</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="text-muted font-weight-bold font-size-sm">3 days</span>
                                            </div>
                                        </div>
                                        <!--end:User-->
                                    </div>
                                    <!--end:Users-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Aside-->
                        <!--begin::Content-->
                        <div class="flex-row-fluid ml-lg-8" id="kt_chat_content">
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <!--begin::Header-->
                                <div class="card-header align-items-center px-4 py-3">
                                    <div class="text-left flex-grow-1">
                                        <!--begin::Aside Mobile Toggle-->
                                        <button type="button"
                                            class="btn btn-clean btn-sm btn-icon btn-icon-md d-lg-none"
                                            id="kt_app_chat_toggle">
                                            <span class="svg-icon svg-icon-lg">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Adress-book2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <path
                                                            d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                        <!--end::Aside Mobile Toggle-->
                                        <!--begin::Dropdown Menu-->
                                        <div class="dropdown dropdown-inline">
                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ki ki-bold-more-hor icon-md"></i>
                                            </button>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-left dropdown-menu-md">
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
                                                                <span
                                                                    class="label label-light-primary label-inline font-weight-bold">new</span>
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
                                                                <span
                                                                    class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!--end::Navigation-->
                                            </div>
                                        </div>
                                        <!--end::Dropdown Menu-->
                                    </div>
                                    <div class="text-center text-center">
                                        <div class="symbol-group symbol-hover justify-content-center">
                                            <div class="symbol symbol-35 symbol-circle" data-toggle="tooltip"
                                                title="Ana Fox">
                                                <img alt="Pic" src="assets/media/users/300_16.jpg" />
                                            </div>
                                            <div class="symbol symbol-35 symbol-circle" data-toggle="tooltip"
                                                title="Nich Nilson">
                                                <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                            </div>
                                            <div class="symbol symbol-35 symbol-circle" data-toggle="tooltip"
                                                title="James Stone">
                                                <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                            </div>
                                            <div class="symbol symbol-35 symbol-circle" data-toggle="tooltip"
                                                title="Micheal Bold">
                                                <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                            </div>
                                            <div class="symbol symbol-35 symbol-circle" data-toggle="tooltip"
                                                title="Sean Cooper">
                                                <img alt="Pic" src="assets/media/users/300_15.jpg" />
                                            </div>
                                            <div class="symbol symbol-35 symbol-circle symbol-light-success"
                                                data-toggle="tooltip" title="Invite someone">
                                                <span class="symbol-label font-weight-bold">5+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right flex-grow-1">
                                        <!--begin::Dropdown Menu-->
                                        <div class="dropdown dropdown-inline">
                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path
                                                                d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path
                                                                d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </button>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
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
                                                                <span
                                                                    class="label label-light-primary label-inline font-weight-bold">new</span>
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
                                                                <span
                                                                    class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!--end::Navigation-->
                                            </div>
                                        </div>
                                        <!--end::Dropdown Menu-->
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Scroll-->
                                    <div class="scroll scroll-pull" data-mobile-height="350">
                                        <!--begin::Messages-->
                                        <div class="messages">
                                            <!--begin::Message In-->
                                            <div class="d-flex flex-column mb-5 align-items-start">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-35 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                                    </div>
                                                    <div>
                                                        <a href="#"
                                                            class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Nich
                                                            Larson</a>
                                                        <span class="text-muted font-size-sm">2 Hours</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                    How likely are you to recommend our company to your friends and
                                                    family?</div>
                                            </div>
                                            <!--end::Message In-->
                                            <!--begin::Message Out-->
                                            <div class="d-flex flex-column mb-5 align-items-end">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <span class="text-muted font-size-sm">3 minutes</span>
                                                        <a href="#"
                                                            class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                    </div>
                                                    <div class="symbol symbol-circle symbol-35 ml-3">
                                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                    Hey there, we’re just writing to let you know that you’ve been
                                                    subscribed to a repository on GitHub.</div>
                                            </div>
                                            <!--end::Message Out-->
                                            <!--begin::Message In-->
                                            <div class="d-flex flex-column mb-5 align-items-start">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-35 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                                    </div>
                                                    <div>
                                                        <a href="#"
                                                            class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Adam
                                                            Cook</a>
                                                        <span class="text-muted font-size-sm">40 seconds</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                    Ok, Understood!</div>
                                            </div>
                                            <!--end::Message In-->
                                            <!--begin::Message Out-->
                                            <div class="d-flex flex-column mb-5 align-items-end">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <span class="text-muted font-size-sm">Just now</span>
                                                        <a href="#"
                                                            class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                    </div>
                                                    <div class="symbol symbol-circle symbol-35 ml-3">
                                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                    You’ll receive notifications for all issues, pull requests!
                                                </div>
                                            </div>
                                            <!--end::Message Out-->
                                            <!--begin::Message In-->
                                            <div class="d-flex flex-column mb-5 align-items-start">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-35 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_16.jpg" />
                                                    </div>
                                                    <div>
                                                        <a href="#"
                                                            class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Nina
                                                            Pears</a>
                                                        <span class="text-muted font-size-sm">40 seconds</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                    You can unwatch this repository immediately by clicking here:
                                                    <a href="#">https://github.com</a>
                                                </div>
                                            </div>
                                            <!--end::Message In-->
                                            <!--begin::Message Out-->
                                            <div class="d-flex flex-column mb-5 align-items-end">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <span class="text-muted font-size-sm">Just now</span>
                                                        <a href="#"
                                                            class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                    </div>
                                                    <div class="symbol symbol-circle symbol-35 ml-3">
                                                        <img alt="Pic" src="assets/media/users/300_1.jpg" />
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                    Discover what students who viewed Learn Figma - UI/UX Design.
                                                    Essential Training also viewed</div>
                                            </div>
                                            <!--end::Message Out-->
                                            <!--begin::Message In-->
                                            <div class="d-flex flex-column mb-5 align-items-start">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-35 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                                    </div>
                                                    <div>
                                                        <a href="#"
                                                            class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matthew
                                                            Robertson</a>
                                                        <span class="text-muted font-size-sm">40 seconds</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                    Most purchased Business courses during this sale!</div>
                                            </div>
                                            <!--end::Message In-->
                                            <!--begin::Message Out-->
                                            <div class="d-flex flex-column mb-5 align-items-end">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <span class="text-muted font-size-sm">Just now</span>
                                                        <a href="#"
                                                            class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                    </div>
                                                    <div class="symbol symbol-circle symbol-35 ml-3">
                                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                    Company BBQ to celebrate the last quater achievements and goals.
                                                    Food and drinks provided</div>
                                            </div>
                                            <!--end::Message Out-->
                                        </div>
                                        <!--end::Messages-->
                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="card-footer align-items-center">
                                    <!--begin::Compose-->
                                    <textarea class="form-control border-0 p-0" rows="2"
                                        placeholder="Type a message"></textarea>
                                    <div class="d-flex align-items-center justify-content-between mt-5">
                                        <div class="mr-3">
                                            <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                                                <i class="flaticon2-photograph icon-lg"></i>
                                            </a>
                                            <a href="#" class="btn btn-clean btn-icon btn-md">
                                                <i class="flaticon2-photo-camera icon-lg"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <button type="button"
                                                class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                                        </div>
                                    </div>
                                    <!--begin::Compose-->
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Chat-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Purchase-->

        <!--end::Purchase-->
    </div>
    <!--end::Content-->
</div>
<!--end::Demo Panel-->
    <!--begin::Demo Panel-->
<div id="reservation_popup" class="offcanvas offcanvas-right p-10 offcanvas-on" style="width: 90%;">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
        <h4 class="font-weight-bold m-0"></h4>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content">
        <!--begin::Wrapper-->
        <div class="offcanvas-wrapper mb-5 scroll-pull">
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="bg-grey p-3 h-100 col-lg-3">
                                    <div class="card card-shadow">
                                        <div class="card-header pt-0">
                                            <h3 class="font-weight-bolder font-size-h3 text-dark-75 mb-2" style="padding-top: 20px;">
                                                Itinirary
                                            </h3>
                                        </div>
                                        <div class="bg-grey p-3 h-100 card-body">
                                            @for($i = $arrive; $i <= $departure;$i++)
                                            <div class="d-flex itinirary-list py-5 align-items-center">
                                                <div class="itn-text">
                                                    <p class="mb-1"><b>{{ $i }}.
                                {{ $month }}. {{ $year }}</b></p>
                                <?php  $store = $i.-$month_int.-$year;?>
                                                    <p class="mb-0 font-weight-bolder">{{ date('l',strtotime($store)) }}</p>
                                                    @if($i == $arrive)
                                                    <p class="mb-0 font-weight-bolder">Arrival date</p>
                                                    @endif
                                                    @if($i == $departure)
                                                    <p class="mb-0 font-weight-bolder">Departure date</p>
                                                    @endif
                                                </div>
                                            </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="reservation-img mb-8">
                                        <div class="result-grid">
                                            <div>
                                                <img src="../images/64133123060-77799344932.jpg" class="w-100" alt="">
                                            </div>
                                            <div>
                                                <img src="../images/53511811337-49267444221.jpg" class="w-100" alt="">
                                            </div>
                                            <div>
                                                <img src="../images/53511811337-49267444221.jpg" class="w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="reservation-result">
                                            <!-- <h3 class="font-weight-bolder font-size-h3 text-dark-75 mb-1">
                                                The Ludlow Hotel
                                            </h3> -->
                                            <div class="d-flex mb-3">
                                                <span class="text-dark-50 flex-root font-weight-bold">Hotel Name</span>
                                                <span class="text-dark flex-root font-weight-bold text-right">The Ludlow
                                                    Hotel</span>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <span class="text-dark-50 flex-root font-weight-bold">Total Stay
                                                    Cost</span>
                                                <span class="text-dark flex-root font-weight-bold text-right">€
                                                    1.299</span>
                                            </div>
                                            
                                            <div class="d-flex mb-3">
                                            <span class="text-dark-50 flex-root font-weight-bold">
                                                Tearms & Condition
                                            </span>
                                            <a href="http://development.emporium-voyage.com/" class="iubenda-white iubenda-noiframe iubenda-embed iub-legal-only iubenda-noiframe " title="Privacy and cookie policy" style="outline: 0px; border: 0px; text-decoration: none; display: inline-block; background: none; width: 116px; height: 25px;">View</a><script type="text/javascript" src="https://cdn.iubenda.com/iubenda_i_badge.js"></script>
                                            <script src="https://cdn.iubenda.com/iubenda.js"></script><script src="https://cdn.iubenda.com/iubenda.js"></script><script type="text/javascript">(function (w, d) { var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s, tag); }; if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; } })(window, document);</script>
                                        </div>
                                            {{-- <div class="d-flex mb-3">
                                                <span class="text-dark-50 flex-root font-weight-bold">View
                                                    Conversations</span>
                                                <span class="text-dark flex-root font-weight-bold text-right"><a
                                                        href="#">View</a></span>
                                            </div> --}}
                                            <div class="d-flex mb-3">
                                                <span class="text-dark-50 flex-root font-weight-bold">Suite Name</span>
                                                <span class="text-dark flex-root font-weight-bold text-right">Lorem
                                                    Lipsum</span>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <span class="text-dark-50 flex-root font-weight-bold">Check-in</span>
                                                <span class="text-dark flex-root font-weight-bold text-right">15 Aug
                                                    2020</span>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <span class="text-dark-50 flex-root font-weight-bold">Check-out</span>
                                                <span class="text-dark flex-root font-weight-bold text-right">16 Aug
                                                    2020</span>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <span class="text-dark-50 flex-root font-weight-bold">Nights</span>
                                                <span class="text-dark flex-root font-weight-bold text-right">1</span>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <span class="text-dark-50 flex-root font-weight-bold">Guests</span>
                                                <span class="text-dark flex-root font-weight-bold text-right">2</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion accordion-ex" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#suites"
                                                        aria-expanded="true" aria-controls="transfers">
                                                        Your Reservation
                                                        <i class="fa fa-plus"></i>
                                                        <i class="fa fa-minus" style="display: none"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="suites" class="collapse additional-collapse"
                                                aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body h-100">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 mb-4">    
                                                            @include('frontend.themes.EC.reservation.reservation-summary')
                                                            <div class="p-4 inner-warppa">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 mb-4">
                                                            <?php $pos=1 ?>

                                                            @foreach($suites[0] as $value)
                                                            <div class="reservation-summary section-shadow">
                                                          <h4>SUITE &nbsp; {{ $pos++ }}</h4>
                                                          <p><b>{{ $value['category_name']}}</b></p>
                                                          <table class="table table-borderless mb-0">
                                                            <tr>
                                                              <td class="px-0 py-1">Guests</td>
                                                              @foreach($selected_suite as $key => $select_suite)
                                                              <td class="px-0 py-1 text-right">{{ $key == $value['id'] ?  $select_suite : ''}}</td>
                                                            @endforeach
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
                                                        @endforeach
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#transfers"
                                                        aria-expanded="true" aria-controls="transfers">
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
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="p-4 inner-warppa">
                                                                    <div class="add-txt">
                                                                        <h4 class="mb-4 added">Added to booking</h4>
                                                                        <h4 class="mb-4 title-additional-list">ONE WAY
                                                                            AIRPORT
                                                                            TRANSFER</h4>
                                                                        <p class="mb-4">
                                                                            Transfer to or from Ngurah Rai International
                                                                            Airport
                                                                            by
                                                                            private car. Suitable for up to four guests.
                                                                            Tax and
                                                                            service
                                                                            charge are not included. Price shown is for
                                                                            up to 4
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
                                                                        from booking</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 mb-4">
                                                            <div class="additional-list p-0">
                                                                <div class="inner-wrapper mb-3">
                                                                    <div class="pr-lst result-grid">
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="p-4 inner-warppa">
                                                                    <div class="add-txt">
                                                                        <h4 class="mb-4 added">Added to booking</h4>
                                                                        <h4 class="mb-4 title-additional-list">ROUNDTRIP
                                                                            AIRPORT
                                                                            TRANSFER</h4>
                                                                        <p class="mb-4">
                                                                            Relax with transfers to and from Ngurah Rai
                                                                            International
                                                                            Airport by private car. Suitable for up to
                                                                            four
                                                                            guests.
                                                                            Tax
                                                                            and service charge are not included. Price
                                                                            shown is
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
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
                                                    <button class="btn btn-link btn-block text-left collapsed"
                                                        type="button" data-toggle="collapse"
                                                        data-target="#inroom-amenities" aria-expanded="false"
                                                        aria-controls="inroom-amenities">
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
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="p-4 inner-warppa">
                                                                    <div class="add-txt">
                                                                        <h4 class="mb-4 added">Added to booking</h4>
                                                                        <h4 class="mb-4 title-additional-list">BOTTLE OF
                                                                            ROSE
                                                                            BALINESE WINE</h4>
                                                                        <p class="mb-4">
                                                                            Find a bottle of sparkling Balinese rosé in
                                                                            your
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
                                                                        from booking</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 mb-4">
                                                            <div class="additional-list p-0">
                                                                <div class="inner-wrapper mb-3">
                                                                    <div class="pr-lst result-grid">
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
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
                                                                            Delight someone special with this unique
                                                                            Balinese
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
                                                                        from booking</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 mb-4">
                                                            <div class="additional-list p-0">
                                                                <div class="inner-wrapper mb-3">
                                                                    <div class="pr-lst result-grid">
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="p-4 inner-warppa">
                                                                    <div class="add-txt">
                                                                        <h4 class="mb-4 added">Added to booking</h4>
                                                                        <h4 class="mb-4 title-additional-list">ISLAND
                                                                            TROPICAL
                                                                            AMENITY</h4>
                                                                        <p class="mb-4">
                                                                            Step into your room and discover a true
                                                                            taste of
                                                                            Bali.
                                                                            This
                                                                            welcome platter includes fresh coconuts,
                                                                            seasonal
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
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
                                                    <button class="btn btn-link btn-block text-left collapsed"
                                                        type="button" data-toggle="collapse" data-target="#spa-service"
                                                        aria-expanded="false" aria-controls="spa-service">
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
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
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
                                                                            combining long rhythmic strokes with
                                                                            acupressure and
                                                                            reflexology techniques. Please Note: This is
                                                                            a
                                                                            request
                                                                            and not a booking, our spa team will contact
                                                                            you to
                                                                            confirm your desired appointment. Price
                                                                            shown is per
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
                                                                        from booking</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 mb-4">
                                                            <div class="additional-list p-0">
                                                                <div class="inner-wrapper mb-3">
                                                                    <div class="pr-lst result-grid">
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
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
                                                                            Achieve inner harmony with this 60-minute
                                                                            massage
                                                                            ritual. Rhythmic pressure applied with
                                                                            herbal oils
                                                                            banishes toxins and impurities while
                                                                            boosting
                                                                            circulation. Please Note: This is a request
                                                                            and not
                                                                            a
                                                                            booking, our spa team will contact you to
                                                                            confirm
                                                                            your
                                                                            desired appointment. Price shown is per
                                                                            treatment,
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
                                                                        from booking</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 mb-4">
                                                            <div class="additional-list p-0">
                                                                <div class="inner-wrapper mb-3">
                                                                    <div class="pr-lst result-grid">
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
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
                                                                            This 60-minute ancient holistic therapy
                                                                            applies
                                                                            gentle
                                                                            pressure to points on the feet – as blissful
                                                                            as it
                                                                            is
                                                                            beneficial. Please Note: This is a request
                                                                            and not a
                                                                            booking, our spa team will contact you to
                                                                            confirm
                                                                            your
                                                                            desired appointment. Price shown is per
                                                                            treatment,
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
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
                                                    <button class="btn btn-link btn-block text-left collapsed"
                                                        type="button" data-toggle="collapse" data-target="#experiences"
                                                        aria-expanded="false" aria-controls="experiences">
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
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
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
                                                                            combining long rhythmic strokes with
                                                                            acupressure and
                                                                            reflexology techniques. Please Note: This is
                                                                            a
                                                                            request
                                                                            and not a booking, our spa team will contact
                                                                            you to
                                                                            confirm your desired appointment. Price
                                                                            shown is per
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
                                                                        from booking</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 mb-4">
                                                            <div class="additional-list p-0">
                                                                <div class="inner-wrapper mb-3">
                                                                    <div class="pr-lst result-grid">
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
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
                                                                            Achieve inner harmony with this 60-minute
                                                                            massage
                                                                            ritual. Rhythmic pressure applied with
                                                                            herbal oils
                                                                            banishes toxins and impurities while
                                                                            boosting
                                                                            circulation. Please Note: This is a request
                                                                            and not
                                                                            a
                                                                            booking, our spa team will contact you to
                                                                            confirm
                                                                            your
                                                                            desired appointment. Price shown is per
                                                                            treatment,
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
                                                                        from booking</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 mb-4">
                                                            <div class="additional-list p-0">
                                                                <div class="inner-wrapper mb-3">
                                                                    <div class="pr-lst result-grid">
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
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
                                                                            This 60-minute ancient holistic therapy
                                                                            applies
                                                                            gentle
                                                                            pressure to points on the feet – as blissful
                                                                            as it
                                                                            is
                                                                            beneficial. Please Note: This is a request
                                                                            and not a
                                                                            booking, our spa team will contact you to
                                                                            confirm
                                                                            your
                                                                            desired appointment. Price shown is per
                                                                            treatment,
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
                                                                        from booking</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 mb-4">
                                                            <div class="additional-list p-0">
                                                                <div class="inner-wrapper mb-3">
                                                                    <div class="pr-lst result-grid">
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
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
                                                                            Achieve inner harmony with this 60-minute
                                                                            massage
                                                                            ritual. Rhythmic pressure applied with
                                                                            herbal oils
                                                                            banishes toxins and impurities while
                                                                            boosting
                                                                            circulation. Please Note: This is a request
                                                                            and not
                                                                            a
                                                                            booking, our spa team will contact you to
                                                                            confirm
                                                                            your
                                                                            desired appointment. Price shown is per
                                                                            treatment,
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
                                                                        from booking</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 mb-4">
                                                            <div class="additional-list p-0">
                                                                <div class="inner-wrapper mb-3">
                                                                    <div class="pr-lst result-grid">
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
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
                                                                            This 60-minute ancient holistic therapy
                                                                            applies
                                                                            gentle
                                                                            pressure to points on the feet – as blissful
                                                                            as it
                                                                            is
                                                                            beneficial. Please Note: This is a request
                                                                            and not a
                                                                            booking, our spa team will contact you to
                                                                            confirm
                                                                            your
                                                                            desired appointment. Price shown is per
                                                                            treatment,
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
                                                                        from booking</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 mb-4">
                                                            <div class="additional-list p-0">
                                                                <div class="inner-wrapper mb-3">
                                                                    <div class="pr-lst result-grid">
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
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
                                                                            Achieve inner harmony with this 60-minute
                                                                            massage
                                                                            ritual. Rhythmic pressure applied with
                                                                            herbal oils
                                                                            banishes toxins and impurities while
                                                                            boosting
                                                                            circulation. Please Note: This is a request
                                                                            and not
                                                                            a
                                                                            booking, our spa team will contact you to
                                                                            confirm
                                                                            your
                                                                            desired appointment. Price shown is per
                                                                            treatment,
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
                                                                        from booking</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 mb-4">
                                                            <div class="additional-list p-0">
                                                                <div class="inner-wrapper mb-3">
                                                                    <div class="pr-lst result-grid">
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
                                                                                class="w-100" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <img src="../images/98d13b87078871.5dad9554e33ef.jpg"
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
                                                                            This 60-minute ancient holistic therapy
                                                                            applies
                                                                            gentle
                                                                            pressure to points on the feet – as blissful
                                                                            as it
                                                                            is
                                                                            beneficial. Please Note: This is a request
                                                                            and not a
                                                                            booking, our spa team will contact you to
                                                                            confirm
                                                                            your
                                                                            desired appointment. Price shown is per
                                                                            treatment,
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
                                                                    <a href="#"
                                                                        class="btn-red-link mt-2 remove-booking">Remove
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
                                <div class="col-lg-3">
                                    <div class="card card-shadow">
                                        <div class="card-header pt-0">
                                            <h3 class="font-weight-bolder font-size-h3 text-dark-75 mb-2">
                                                Reservation Details
                                            </h3>
                                        </div>
                                        <div class="card-body pt-2">
                                            <div class="d-flex itinirary-list py-5 align-items-center">
                                                <div class="w-100">
                                                    <p class="mb-0"><b>Who's Coming</b></p>
                                                    <p class="mb-0">{{ $count }}</p>
                                                </div>
                                                <div class="w-100">
                                                    <div class="symbol-group symbol-hover justify-content-end">
                                                    @if(isset($companion))
                                                        @foreach($companion as $data)
                                                            <div class="symbol symbol-35 symbol-circle"
                                                                data-toggle="tooltip" title=""
                                                                data-original-title="{!! Session::get('companion_name') !!}{{ $data->email }}
                                                                {{ $data->email }}
                                                                {{ $data->phone_number }}">
                                                                <img alt="Pic" src="{{ asset('/uploads/users/companion/'.$data->avatar)}}">
                                                            </div>
                                                            @if($count == 5)
                                                                @break
                                                            @endif  
                                                            @endforeach
                                                        @else
                                                            <p>Companion not found<
                                                        @endif    
                                                            <div class="symbol symbol-35 symbol-circle symbol-light-success"
                                                                data-toggle="tooltip" title=""
                                                                data-original-title="Invite someone">
                                                                <span class="symbol-label font-weight-bold">{{ $count }}+</span>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex itinirary-list py-5 align-items-center">
                                                <div class="w-100">
                                                    <p class="mb-0"><b>Confirmation Code</b></p>
                                                    <p class="mb-0">EC-{{ $hotel_name }}-{{ $randomnum }}</p>
                                                </div>
                                            </div>
                                            <div class="d-flex itinirary-list py-5 align-items-center">
                                                <div class="w-100">
                                                    <p class="mb-0"><b>Cancellation policy</b></p>
                                                    <p class="mb-1">Cancel before 12:00 PM on Sep 25 and get full refund
                                                    </p>
                                                    <a href="#">Read more</a>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <div class="d-flex itinirary-list py-5 align-items-center">
                                                    <div style="width: 40px;">
                                                        <i class="fas fa-users"
                                                            style="color: #000;font-size: 13px;"></i>
                                                    </div>
                                                    <div class="w-100" style="color: #000;">Manage guests</div>
                                                    <div class="text-right">
                                                        <i class="fas fa-chevron-right"
                                                            style="color: #000;font-size: 12px;"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="d-flex itinirary-list py-5 align-items-center">
                                                    <div style="width: 40px;">
                                                        <i class="fas fa-pen" style="color: #000; font-size: 13px;"></i>
                                                    </div>
                                                    <div class="w-100" style="color: #000;">Change reservation</div>
                                                    <div class="text-right">
                                                        <i class="fas fa-chevron-right"
                                                            style="color: #000;font-size: 12px;"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="d-flex itinirary-list py-5 align-items-center">
                                                    <div style="width: 40px;">
                                                        <i class="fas fa-circle-notch"
                                                            style="color: #000; font-size: 13px;"></i>
                                                    </div>
                                                    <div class="w-100" style="color: #000;">Cancel Reservation</div>
                                                    <div class="text-right">
                                                        <i class="fas fa-chevron-right"
                                                            style="color: #000;font-size: 12px;"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="d-flex itinirary-list py-5 align-items-center">
                                                    <div style="width: 40px;">
                                                        <i class="fas fa-globe"
                                                            style="color: #000; font-size: 13px;"></i>
                                                    </div>
                                                    <div class="w-100" style="color: #000;">Get a PDF for visa purposes
                                                    </div>
                                                    <div class="text-right">
                                                        <i class="fas fa-chevron-right"
                                                            style="color: #000;font-size: 12px;"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="d-flex itinirary-list py-5 align-items-center">
                                                    <div style="width: 40px;">
                                                        <i class="fas fa-print"
                                                            style="color: #000; font-size: 13px;"></i>
                                                    </div>
                                                    <div class="w-100" style="color: #000;">Print details</div>
                                                    <div class="text-right">
                                                        <i class="fas fa-chevron-right"
                                                            style="color: #000;font-size: 12px;"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="d-flex itinirary-list py-5 align-items-center">
                                                    <div style="width: 40px;">
                                                        <i class="fas fa-money-bill"
                                                            style="color: #000; font-size: 13px;"></i>
                                                    </div>
                                                    <div class="w-100" style="color: #000;">Get receipts and manage
                                                        payments</div>
                                                    <div class="text-right">
                                                        <i class="fas fa-chevron-right"
                                                            style="color: #000;font-size: 12px;"></i>
                                                    </div>
                                                </div>
                                            </a>

                                            <h3 class="font-weight-bolder font-size-h3 text-dark-75 mb-2 mt-7">
                                                Payment Info
                                            </h3>

                                            <div class="d-flex itinirary-list py-5 align-items-center">
                                                <div class="w-100">
                                                    <p class="mb-0"><b>Payment details</b></p>
                                                    <p class="mb-0">Total cost: €1.299</p>
                                                </div>
                                            </div>
                                            <div class="d-flex itinirary-list py-5">
                                                <div class="w-100">
                                                    <p class="mb-2"><b>This is a business trip</b></p>
                                                    <p class="mb-0">
                                                        Your company and its travel partners will have access to your
                                                        trip details
                                                    </p>
                                                </div>
                                                <div class="text-right pl-4">
                                                    <span class="switch switch-sm">
                                                        <label>
                                                            <input type="checkbox" name="select">
                                                            <span></span>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <div class="d-flex itinirary-list py-5 align-items-center">
                                                    <div style="width: 40px;">
                                                        <i class="fas fa-money-bill"
                                                            style="color: #000; font-size: 13px;"></i>
                                                    </div>
                                                    <div class="w-100" style="color: #000;">Get receipts and manage
                                                        payments</div>
                                                    <div class="text-right">
                                                        <i class="fas fa-chevron-right"
                                                            style="color: #000;font-size: 12px;"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <div style="height: 4px; background: #ebedf3;"></div>
                                            <h3 class="font-weight-bolder font-size-h3 text-dark-75 mb-2 mt-7">
                                                Support
                                            </h3>
                                            <a href="#">
                                                <div class="d-flex itinirary-list py-5 align-items-center">
                                                    <div style="width: 40px;">
                                                        <i class="fas fa-question-circle"
                                                            style="color: #000; font-size: 13px;"></i>
                                                    </div>
                                                    <div class="w-100" style="color: #000;">Help center</div>
                                                    <div class="text-right">
                                                        <i class="fas fa-chevron-right"
                                                            style="color: #000;font-size: 12px;"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-shadow">
                                <div class="card-header pt-0">
                                    <h3 class="font-weight-bolder font-size-h3 text-dark-75 mb-2">
                                        Getting there
                                    </h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex itinirary-list py-5 align-items-center">
                                        <div class="w-100">
                                            <p class="mb-0"><b>Address</b></p>
                                            <p class="mb-0">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero
                                            </p>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="d-flex itinirary-list py-5 align-items-center">
                                            <div style="width: 40px;">
                                                <i class="far fa-copy" style="color: #000; font-size: 13px;"></i>
                                            </div>
                                            <div class="w-100" style="color: #000;">Copy address</div>
                                            <div class="text-right">
                                                <i class="fas fa-chevron-right"
                                                    style="color: #000;font-size: 12px;"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="d-flex itinirary-list py-5 align-items-center">
                                            <div style="width: 40px;">
                                                <i class="fas fa-map-marker-alt"
                                                    style="color: #000; font-size: 13px;"></i>
                                            </div>
                                            <div class="w-100" style="color: #000;">Get directions</div>
                                            <div class="text-right">
                                                <i class="fas fa-chevron-right"
                                                    style="color: #000;font-size: 12px;"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div style="height: 4px; background: #ebedf3;"></div>
                                    <h3 class="font-weight-bolder font-size-h3 text-dark-75 mb-2 mt-7">
                                        Checking in & out
                                    </h3>

                                    <div class="d-flex itinirary-list py-5 align-items-center">
                                        <div class="w-100">
                                            <p class="mb-2"><b>Check-in</b></p>
                                            <p class="mb-0">
                                                Introductions will be visible during your stay
                                            </p>
                                        </div>
                                    </div>

                                    <div style="height: 4px; background: #ebedf3;"></div>
                                    <h3 class="font-weight-bolder font-size-h3 text-dark-75 mb-2 mt-7">
                                        Where you're staying
                                    </h3>

                                    <div class="d-flex itinirary-list py-5 align-items-center">
                                        <div class="w-100">
                                            <p class="mb-2"><b>House Rules</b></p>
                                            <p class="mb-0">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
                                                accusantium, omnis eum obcaecati esse aspernatur <a href="#">Read
                                                    more</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div style="height: 4px; background: #ebedf3;"></div>
                                    <a href="#">
                                        <div class="d-flex itinirary-list py-5 align-items-center">
                                            <div style="width: 40px;">
                                                <i class="far fa-address-book"
                                                    style="color: #000; font-size: 13px;"></i>
                                            </div>
                                            <div class="w-100" style="color: #000;">Show listing</div>
                                            <div class="text-right">
                                                <i class="fas fa-chevron-right"
                                                    style="color: #000;font-size: 12px;"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Purchase-->

        <!--end::Purchase-->
    </div>
    <!--end::Content-->
</div>
<!--end::Demo Panel-->
    <!--begin::Demo Panel-->
<div id="experience-popup" class="offcanvas offcanvas-sm offcanvas-experience offcanvas-right offcanvas-on p-10">
  <!--begin::Header-->
  <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
    <h4 class="font-weight-bold m-0">Experience</h4>
    
    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
      <i class="ki ki-close icon-xs text-muted"></i>
    </a>
  </div>
  <!--end::Header-->
  <!--begin::Content-->
  <div class="offcanvas-content">
    <!--begin::Wrapper-->
    <div class="offcanvas-wrapper mb-5 pt-5 scroll-pull">
      <div class="setting-outer">
        <div class="row">
          <div class="col-md-12 mb-4">
            <div class="input-icon input-icon-right">
              <input type="text" class="form-control" placeholder="Search...">
              <span>
                <i class="flaticon2-search-1 icon-md"></i>
              </span>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <label>Category</label>
            <select class="form-control">
              <option value="car">Car</option>
              <option value="car">Flight</option>
              <option value="car">Ship</option>
            </select>
          </div>
          <div class="col-md-9 mb-4">
            <div class="">
              <label>Price Range</label>
              <div class="row align-items-center">
                <div class="col-2">
                  <input type="text" class="form-control" id="kt_nouislider_3.1_input" placeholder="Quantity" />
                </div>
                <div class="col-2">
                  <input type="text" class="form-control" id="kt_nouislider_3_input" placeholder="Quantity" />
                </div>
                <div class="col-8">
                  <div id="kt_nouislider_3" class="nouislider"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p>Showing 26 experience</p>

        <div class="experience">
          <div class="experience-list">
            <div class="selected"><i class="flaticon2-check-mark"></i> SELECTED</div>
            <div class="row">
              <div class="col-md-3">
                <img src="../images/64133123060-77799344932.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-8">
                    <h5 class="font-weight-bold">Lorem Ipsum Dolor Sit Amet</h5>
                    <p class="mb-0">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab fugit vel totam nulla blanditiis
                      tempora velit, exercitationem quisquam voluptas ipsam
                    </p>
                  </div>
                  <div class="col-4 text-right">
                    <a href="#" class="font-weight-bold">View Details</a>
                    <div class="mt-5 block-btn">
                      <div class="h3">
                        $183
                      </div>
                      <a href="#" class="btn btn-primary canvas-close select-experience">Select</a>
                    </div>
                    <div class="mt-20 remove-btn">
                       <a href="#" class="font-weight-bold canvas-close remove">Remove</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="experience-list">
            <div class="selected"><i class="flaticon2-check-mark"></i> SELECTED</div>
            <div class="row">
              <div class="col-md-3">
                <img src="../images/64133123060-77799344932.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-8">
                    <h5 class="font-weight-bold">Lorem Ipsum Dolor Sit Amet</h5>
                    <p class="mb-0">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab fugit vel totam nulla blanditiis
                      tempora velit, exercitationem quisquam voluptas ipsam
                    </p>
                  </div>
                  <div class="col-4 text-right">
                    <a href="#" class="font-weight-bold">View Details</a>
                    <div class="mt-5 block-btn">
                      <div class="h3">
                        $183
                      </div>
                      <a href="#" class="btn btn-primary canvas-close select-experience">Select</a>
                    </div>
                    <div class="mt-20 remove-btn">
                       <a href="#" class="font-weight-bold canvas-close remove">Remove</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="experience-list">
            <div class="selected"><i class="flaticon2-check-mark"></i> SELECTED</div>
            <div class="row">
              <div class="col-md-3">
                <img src="../images/64133123060-77799344932.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-8">
                    <h5 class="font-weight-bold">Lorem Ipsum Dolor Sit Amet</h5>
                    <p class="mb-0">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab fugit vel totam nulla blanditiis
                      tempora velit, exercitationem quisquam voluptas ipsam
                    </p>
                  </div>
                  <div class="col-4 text-right">
                    <a href="#" class="font-weight-bold">View Details</a>
                    <div class="mt-5 block-btn">
                      <div class="h3">
                        $183
                      </div>
                      <a href="#" class="btn btn-primary canvas-close select-experience">Select</a>
                    </div>
                    <div class="mt-20 remove-btn">
                       <a href="#" class="font-weight-bold canvas-close remove">Remove</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="experience-list">
            <div class="selected"><i class="flaticon2-check-mark"></i> SELECTED</div>
            <div class="row">
              <div class="col-md-3">
                <img src="../images/64133123060-77799344932.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-8">
                    <h5 class="font-weight-bold">Lorem Ipsum Dolor Sit Amet</h5>
                    <p class="mb-0">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab fugit vel totam nulla blanditiis
                      tempora velit, exercitationem quisquam voluptas ipsam
                    </p>
                  </div>
                  <div class="col-4 text-right">
                    <a href="#" class="font-weight-bold">View Details</a>
                    <div class="mt-5 block-btn">
                      <div class="h3">
                        $183
                      </div>
                      <a href="#" class="btn btn-primary canvas-close select-experience">Select</a>
                    </div>
                    <div class="mt-20 remove-btn">
                       <a href="#" class="font-weight-bold canvas-close remove">Remove</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--end::Wrapper-->
    <!--begin::Purchase-->

    <!--end::Purchase-->
  </div>
  <!--end::Content-->
</div>
<!--end::Demo Panel-->

    <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/users/assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{ asset('assets/users/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
    <script src="{{ asset('assets/users/assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <!-- <script src="../users/assets/js/jquery.rangecalendar.js"></script> -->
    <script src="{{ asset('assets/users/assets/js/pages/crud/ktdatatable/base/data-local-reservation.js')}}"></script>
    <script src="{{ asset('assets/users/assets/plugins/custom/slick/slick.min.js')}}"></script>
    <script src="{{ asset('assets/users/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/users/assets/js/custom.js')}}"></script>
    <script>
        var picker = $('#daterangepicker-inline').daterangepicker({
            parentEl: "#daterangepicker-inline-container",
            autoApply: true,
            minDate: new Date(),
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear',
            }
        });

        picker.on('apply.daterangepicker', function (ev, picker) {
            $('.onrange').html(picker.startDate.format('DD-MM-YYYY') + ' -> ' + picker.endDate.format('DD-MM-YYYY'));
            $('.include-form').fadeIn("fast");
        });
        picker.data('daterangepicker').hide = function () { };
        picker.data('daterangepicker').show();

        $('.swipe-collection').owlCarousel({
            items: 4,
            margin: 20,
            autoWidth: true,
            afterInit: setWidth()
        });
        function setWidth() {
            var carWidth = $('.owl-stage').width() + 100;
            $('.owl-stage').width(carWidth);
        }
        $('.swipe-action-btn').click(function () {
            $(this).closest('.swipe-action').find('.swipe-action-content').toggleClass('clicked');
        });
        $('.swipe-item').mouseleave(function () {
            $('.swipe-action-content').removeClass('clicked')
        });
        $('.result-grid').slick({
            slidesToShow: 1,
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
        });

        $(".btn-data-grid").click(function (e) {
            e.preventDefault();
            $('.data-table').toggleClass('show');
            $('.data-grid').toggleClass('show');
        })
        $('#calRange').daterangepicker({
            buttonClasses: ' btn',
            applyClass: 'btn-primary',
            cancelClass: 'btn-secondary',
            locale: {
                format: 'D MMM'
            }
        });
        var slider = document.getElementById('kt_nouislider_3');

        noUiSlider.create(slider, {
            start: [20, 80],
            connect: true,
            range: {
                'min': 0,
                'max': 200
            }
        });


        // init slider input
        var sliderInput0 = document.getElementById('kt_nouislider_3_input');
        var sliderInput1 = document.getElementById('kt_nouislider_3.1_input');
        var sliderInputs = [sliderInput1, sliderInput0];

        slider.noUiSlider.on('update', function (values, handle) {
            sliderInputs[handle].value = values[handle];
        });

        $('.select-experience').click(function(e){
            e.preventDefault();
            $(this).closest('.experience-list').addClass('active');
            $(this).closest('.experience-list').find('.selected').addClass('active');
        })
        $(".remove").click(function(e){
            e.preventDefault();
            $(this).closest('.experience-list').removeClass('active');
            $(this).closest('.experience-list').find('.selected').removeClass('active');
        })
    </script>
</body>
<!--end::Body-->

</html>