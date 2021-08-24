@extends('users_admin.traveller.layout.app')
@section('content')
                            <div class="mt-15">
                                <h2 class="text-dark font-weight-bold font-saol">Payment Method</h2>
                                <p>Intro text for Payment Method</p>
                                <div class="card card-custom">
                                    <div class="card-header px-0">
                                        <h3 class="card-title font-saol font-15">
                                            Payments Method
                                        </h3>
                                    </div>
                                    <div class="card-body px-0">
                                        <!-- <a href="#addPayment" class="btn-add-payment" data-toggle="modal">
                                            <div class="ico-plus">+</div>
                                            Payments Method
                                        </a> -->
                                        <div class="card-added">
                                            <div class="d-flex align-items-center list-divider">
                                                <div class="ico-inline mr-5">
                                                    <i class="ico-payment mastercard"></i>
                                                </div>
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <div
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                        MasterCard ••••8928 <span class="default-set">default</span>
                                                    </div>
                                                    <span class="text-muted font-weight-bold">Expiration: 09/2025</span>
                                                </div>
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="" data-placement="left" data-original-title="Quick actions">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        Set Default
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
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
                                            <div class="d-flex align-items-center list-divider">
                                                <div class="ico-inline mr-5">
                                                    <i class="ico-payment visa"></i>
                                                </div>
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <div
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                        Visa ••••1232 </div>
                                                    <span class="text-muted font-weight-bold">Expiration: 02/2024</span>
                                                </div>
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="" data-placement="left" data-original-title="Quick actions">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        Set Default
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
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
                                            <div class="d-flex align-items-center list-divider">
                                                <div class="ico-inline mr-5">
                                                    <i class="ico-payment american-express"></i>
                                                </div>
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <div
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                        American Express ••••3251 </div>
                                                    <span class="text-muted font-weight-bold">Expiration: 10/2028</span>
                                                </div>
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="" data-placement="left" data-original-title="Quick actions">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        Set Default
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
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
                                            <div class="d-flex align-items-center list-divider">
                                                <div class="ico-inline mr-5">
                                                    <i class="ico-payment discover"></i>
                                                </div>
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <div
                                                        class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                        Discover Network ••••1415 </div>
                                                    <span class="text-muted font-weight-bold">Expiration: 06/2026</span>
                                                </div>
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                    title="" data-placement="left" data-original-title="Quick actions">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu dropdown-menu-right">
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        Set Default
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
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
                                        </div>
                                        <a href="#addPayment" class="btn btn-primary mt-10" data-toggle="modal">Add
                                            payment method</a>

                                        <p class="mt-9">
                                            Remeber emporium-voyage never ask you to wire money
                                            <a href="#">Learn More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-15">
                                <div class="card card-custom">
                                    <div class="card-header px-0">
                                        <h3 class="card-title font-saol font-15">
                                            Emporium-Collection Gift Credit
                                        </h3>
                                    </div>
                                    <div class="card-body px-0">
                                        <p>
                                            Redeem a gift card and find your credit balance. <a href="#">Learn more
                                                about gift cards.</a>
                                        </p>
                                        <div class="mt-14">
                                            <div class="credit-balance">
                                                <div class="row">
                                                    <div class="col-9">
                                                        Current credit balance
                                                    </div>
                                                    <div class="col-3 text-right">
                                                        $0.00
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-50">
                                                <div class="accordion accordion-toggle-arrow" id="giftCard">
                                                    <div class="card card-custom">
                                                        <div id="btnAddgiftcard" class="collapse show"
                                                            data-parent="#giftCard">
                                                            <div class="card-body px-0">
                                                                <a href="#addGiftcard" class="btn btn-primary" data-toggle="collapse">Add gift card</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-custom">
                                                        <div id="addGiftcard" class="collapse"
                                                            data-parent="#giftCard">
                                                            <div class="card-body px-0">
                                                                <form action="#">
                                                                    <div class="form-group">
                                                                        <label>Enter gift card number</label>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Enter pin code</label>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                    <button class="btn btn-primary" type="submit">Redeem gift card</button>
                                                                    <a href="#btnAddgiftcard" class="btn btn-secondary" data-toggle="collapse">Cancel</a>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-15">
                                <div class="card card-custom">
                                    <div class="card-header px-0">
                                        <h3 class="card-title font-saol font-15">
                                            Coupons
                                        </h3>
                                    </div>
                                    <div class="card-body px-0">
                                        <p>
                                            Add a coupon and save on your next trip.
                                        </p>
                                        <div class="mt-14">
                                            <div class="credit-balance">
                                                <div class="row align-items-center">
                                                    <div class="col-9">
                                                        Your coupons
                                                    </div>
                                                    <div class="col-3 text-right">
                                                        <select class="form-control">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-50">
                                                <div class="accordion accordion-toggle-arrow" id="coupon">
                                                    <div class="card card-custom">
                                                        <div id="btnCoupom" class="collapse show"
                                                            data-parent="#coupon">
                                                            <div class="card-body px-0">
                                                                <div class="coupon-list mb-10">
                                                                    <div class="d-flex align-items-center list-divider">
                                                                        <div class="d-flex flex-column flex-grow-1">
                                                                            <div class="text-dark-75 font-weight-bold font-size-lg mb-1">
                                                                                WEJKLAMSD - Coupon </div>
                                                                            <span class="text-muted font-weight-bold">Expired on sep 21, 2021</span>
                                                                        </div>
                                                                        <div class="font-weight-bold">
                                                                            10% off
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex align-items-center list-divider">
                                                                        <div class="d-flex flex-column flex-grow-1">
                                                                            <div class="text-dark-75 font-weight-bold font-size-lg mb-1">
                                                                                ADFASDFCX - Coupon </div>
                                                                            <span class="text-muted font-weight-bold">Expired on sep 21, 2021</span>
                                                                        </div>
                                                                        <div class="font-weight-bold">
                                                                            10% off
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#addCoupon" class="btn btn-primary" data-toggle="collapse">Add coupon</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-custom">
                                                        <!-- <div id="addCoupon" class="collapse"
                                                            data-parent="#coupon">
                                                            <div class="card-body px-0">
                                                                <form action="#">
                                                                    <div class="form-group">
                                                                        <label>Enter gift card number</label>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Enter pin code</label>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                    <button class="btn btn-primary" type="submit">Redeem gift card</button>
                                                                    <a href="#btnCoupom" class="btn btn-secondary" data-toggle="collapse">Cancel</a>
                                                                </form>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                   
                                                </div>
                                            </div>
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

    <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="../users/assets/plugins/global/plugins.bundle.js"></script>
    <script src="../users/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="../users/assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="../users/assets/js/pages/crud/forms/widgets/select2.js"></script>
    <!-- <script src="../users/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script> -->
    <script src="../users/assets/js/custom.js"></script>
@endsection