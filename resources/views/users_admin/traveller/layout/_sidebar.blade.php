<!--begin::Primary-->
<div class="aside-primary d-flex flex-column align-items-center flex-row-auto">
    <!--begin::Brand-->
    <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-5 py-lg-12">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="{{ asset('users/assets/media/logo.png')}}" width="60" />
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
                <a href="hotels.html" class="nav-link btn btn-icon btn-clean btn-lg @@hotels @@supplier">
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
                <a href="reservations.html" class="nav-link btn btn-icon btn-clean btn-lg @@reservations">
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