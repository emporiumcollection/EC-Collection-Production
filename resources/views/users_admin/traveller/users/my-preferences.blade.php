@extends('users_admin.traveller.layout.app')
@section('content')

                            <div class="mt-15">
                                <h3 class="text-dark font-weight-bold font-saol mb-4">
                                    Preferences
                                </h3>
                                <p>
                                    In this section you manage personal preferences.
                                </p>

                                <div class="mt-13">
                                    <!--begin: Wizard-->
                                    <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="step-first"
                                        data-wizard-clickable="true">
                                        <!--begin: Wizard Nav-->
                                        <div class="wizard-nav" style="display: none;">
                                            <div class="wizard-steps px-8 py-8 px-lg-15 py-lg-3">
                                                <!--begin::Wizard Step 1 Nav-->
                                                <div class="wizard-step" data-wizard-type="step"
                                                    data-wizard-state="current">
                                                    <div class="wizard-label">
                                                        <h3 class="wizard-title">
                                                            <span>1.</span>Setup Location
                                                        </h3>
                                                        <div class="wizard-bar"></div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 1 Nav-->
                                                <!--begin::Wizard Step 2 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <h3 class="wizard-title">
                                                            <span>2.</span>Enter Details
                                                        </h3>
                                                        <div class="wizard-bar"></div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 2 Nav-->
                                                <!--begin::Wizard Step 3 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <h3 class="wizard-title">
                                                            <span>3.</span>Select Services
                                                        </h3>
                                                        <div class="wizard-bar"></div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 3 Nav-->
                                                <!--begin::Wizard Step 4 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <h3 class="wizard-title">
                                                            <span>4.</span>Delivery Address
                                                        </h3>
                                                        <div class="wizard-bar"></div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 4 Nav-->
                                                <!--begin::Wizard Step 5 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <h3 class="wizard-title">
                                                            <span>5.</span>Delivery Address
                                                        </h3>
                                                        <div class="wizard-bar"></div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 5 Nav-->
                                                <!--begin::Wizard Step 6 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <h3 class="wizard-title">
                                                            <span>6.</span>sd
                                                        </h3>
                                                        <div class="wizard-bar"></div>
                  s                                  </div>
                                                </div>
                                                <!--end::Wizard Step 6 Nav-->
                                            </div>
                                        </div>
                                        <!--end: Wizard Nav-->
                                        <!--begin: Wizard Body-->
                                        <!--begin: Wizard Form-->
                                        <form class="form" id="kt_form" method="post" action="/personalized-service">
                                            <!--begin: Wizard Step 1-->
                                            <div class="pb-5" data-wizard-type="step-content"
                                                data-wizard-state="current">
                                                <div class="text-center">
                                                    <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                                        Where do you want to travel?
                                                    </h1>
                                                    <p>You can specify one or more destinations</p>
                                                    <div class="form-group">
                                                        <select class="form-control select2" id="kt_select2_3"
                                                            name="destinations[]"  multiple="multiple">
                                                            <option value="AK" selected>Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="CA">California</option>
                                                            <option value="NV" selected>Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT" selected>Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                            <option value="AL">Alabama</option>
                                                            <option value="AR">Arkansas</option>
                                                            <option value="IL">Illinois</option>
                                                            <option value="IA">Iowa</option>
                                                            <option value="KS">Kansas</option>
                                                            <option value="KY">Kentucky</option>
                                                            <option value="LA">Louisiana</option>
                                                            <option value="MN">Minnesota</option>
                                                            <option value="MS">Mississippi</option>
                                                            <option value="MO">Missouri</option>
                                                            <option value="OK">Oklahoma</option>
                                                            <option value="SD">South Dakota</option>
                                                            <option value="TX">Texas</option>
                                                            <option value="TN">Tennessee</option>
                                                            <option value="WI">Wisconsin</option>
                                                            <option value="CT">Connecticut</option>
                                                            <option value="DE">Delaware</option>
                                                            <option value="FL">Florida</option>
                                                            <option value="GA">Georgia</option>
                                                            <option value="IN">Indiana</option>
                                                            <option value="ME">Maine</option>
                                                            <option value="MD">Maryland</option>
                                                            <option value="MA">Massachusetts</option>
                                                            <option value="MI">Michigan</option>
                                                            <option value="NH">New Hampshire</option>
                                                            <option value="NJ">New Jersey</option>
                                                            <option value="NY">New York</option>
                                                            <option value="NC">North Carolina</option>
                                                            <option value="OH">Ohio</option>
                                                            <option value="PA">Pennsylvania</option>
                                                            <option value="RI">Rhode Island</option>
                                                            <option value="SC">South Carolina</option>
                                                            <option value="VT">Vermont</option>
                                                            <option value="VA">Virginia</option>
                                                            <option value="WV">West Virginia</option>
                                                        </select>
                                                        <div class="select-notif">
                                                            Select the destinations you prefer to travel to.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 1-->
                                            <!--begin: Wizard Step 2-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <div class="text-center">
                                                    <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                                        What inspires you?
                                                    </h1>
                                                </div>
                                                <div class="checkbox-inline checkbox-cs">
                                                    <div class="col-lg-3 col-md-6 mb-9">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="inspirations[]" />
                                                            <img src="https://emporium-voyage.com/uploads/category_imgs/1517633551-53631207.jpg"
                                                                class="img-fluid" alt="">
                                                            <div class="label-inner">
                                                                <span></span>
                                                                <div class="title-checkbox font-saol">Be Active
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6 mb-9">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="inspirations[]" />
                                                            <img src="https://emporium-voyage.com/uploads/category_imgs/1517633551-53631207.jpg"
                                                                class="img-fluid" alt="">
                                                            <div class="label-inner">
                                                                <span></span>
                                                                <div class="title-checkbox font-saol">Relax and
                                                                    refuel
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 mb-9">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="inspirations[]" />
                                                            <img src="https://emporium-voyage.com/uploads/category_imgs/1517633551-53631207.jpg"
                                                                class="img-fluid" alt="">
                                                            <div class="label-inner">
                                                                <span></span>
                                                                <div class="title-checkbox font-saol">Explore
                                                                    Something
                                                                    New</div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 mb-9">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="inspirations[]" />
                                                            <img src="https://emporium-voyage.com/uploads/category_imgs/1517633551-53631207.jpg"
                                                                class="img-fluid" alt="">
                                                            <div class="label-inner">
                                                                <span></span>
                                                                <div class="title-checkbox font-saol">Pampering &
                                                                    Enjoyment</div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 mb-9">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="inspirations[]" />
                                                            <img src="https://emporium-voyage.com/uploads/category_imgs/1517633551-53631207.jpg"
                                                                class="img-fluid" alt="">
                                                            <div class="label-inner">
                                                                <span></span>
                                                                <div class="title-checkbox font-saol">Time Together
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 2-->
                                            <!--begin: Wizard Step 3-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <div class="text-center">
                                                    <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                                        What would you like to experience
                                                    </h1>
                                                </div>
                                                <div class="checkbox-inline checkbox-cs">
                                                    <div class="col-lg-3 col-md-6 mb-9">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="experiences[]" />
                                                            <img src="https://emporium-voyage.com/uploads/category_imgs/1527177047-75040515.jpg"
                                                                class="img-fluid" alt="">
                                                            <div class="label-inner">
                                                                <span></span>
                                                                <div class="title-checkbox font-saol">
                                                                    Collection Experiences
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 mb-9">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="experiences[]" />
                                                            <img src="https://emporium-voyage.com/uploads/category_imgs/1527177047-75040515.jpg"
                                                                class="img-fluid" alt="">
                                                            <div class="label-inner">
                                                                <span></span>
                                                                <div class="title-checkbox font-saol">
                                                                    Spa Experiences
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 mb-9">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="experiences[]" />
                                                            <img src="https://emporium-voyage.com/uploads/category_imgs/1524840721-29306538.jpg"
                                                                class="img-fluid" alt="">
                                                            <div class="label-inner">
                                                                <span></span>
                                                                <div class="title-checkbox font-saol">
                                                                    Safari Experiences
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 mb-9">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="experiences[]" />
                                                            <img src="https://emporium-voyage.com/uploads/category_imgs/1524840721-29306538.jpg"
                                                                class="img-fluid" alt="">
                                                            <div class="label-inner">
                                                                <span></span>
                                                                <div class="title-checkbox font-saol">
                                                                    Islands Experiences
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 mb-9">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="experiences[]" />
                                                            <img src="https://emporium-voyage.com/uploads/category_imgs/1524840721-29306538.jpg"
                                                                class="img-fluid" alt="">
                                                            <div class="label-inner">
                                                                <span></span>
                                                                <div class="title-checkbox font-saol">
                                                                    Yacht Experiences
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 3-->
                                            <!--begin: Wizard Step 4-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <div class="text-center">
                                                    <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                                        What is particularly important to you?
                                                    </h1>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" cols="4" rows="10"
                                                        placeholder="Further comments or wishes? A concrete trip , a special occasion such as a honeymoon"></textarea>
                                                    <div class="text-right mt-7">
                                                        <i class="fas fa-info-circle" data-toggle="tooltip"
                                                            data-placement="top" data-container="body"
                                                            data-boundary="window" title=""
                                                            data-original-title="Your callback date can be selected in last step"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 4-->
                                            <!--begin: Wizard Step 5-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <div class="text-center">
                                                    <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                                        How many people travel?
                                                    </h1>
                                                </div>
                                                <div class="guest-count">
                                                    <div class="row align-items-center">
                                                        <div class="col-6 mb-10">
                                                            <div class="guest-name">Adults</div>
                                                            <div class="guest-adult">18* Years</div>
                                                        </div>
                                                        <div class="col-6 mb-10">
                                                            <div class="guest-qty">
                                                                <button type="button" id="min" class="min">-</button>
                                                                <input class="form-control" type="number"  name="adults" value="0"
                                                                    min="0" readonly />
                                                                <button type="button" name="adults" id="plus" class="plus">+</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-6 mb-10">
                                                            <div class="guest-name">Youth</div>
                                                            <div class="guest-adult">12-17 Years</div>
                                                        </div>
                                                        <div class="col-6 mb-10">
                                                            <div class="guest-qty">
                                                                <button type="button" id="min" class="min">-</button>
                                                                <input class="form-control" type="number" name="youth" value="0"
                                                                    min="0" readonly />
                                                                <button type="button" id="plus" class="plus">+</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-6 mb-10">
                                                            <div class="guest-name">Children</div>
                                                            <div class="guest-adult">2-11 Years</div>
                                                        </div>
                                                        <div class="col-6 mb-10">
                                                            <div class="guest-qty">
                                                                <button type="button" id="min" class="min">-</button>
                                                                <input class="form-control" type="number" name="children" value="0"
                                                                    min="0" readonly />
                                                                <button type="button" id="plus" class="plus">+</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-6 mb-10">
                                                            <div class="guest-name">Toddlers</div>
                                                            <div class="guest-adult">under 2 Years</div>
                                                        </div>
                                                        <div class="col-6 mb-10">
                                                            <div class="guest-qty">
                                                                <button type="button" id="min" class="min">-</button>
                                                                <input class="form-control" type="number" name="toddlers" value="0"
                                                                    min="0" readonly />
                                                                <button type="button" id="plus" class="plus">+</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 5-->
                                            <!--begin: Wizard Step 6-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <div class="text-center">
                                                    <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                                        When do you normally travel?
                                                    </h1>
                                                </div>

                                                <div class='input-group' id='kt_daterangepicker_2'>
                                                    <input type='text' class="form-control" readonly
                                                        placeholder="Select date range"  name="earliest_arrival" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i
                                                                class="la la-calendar-check-o"></i></span>
                                                    </div>
                                                </div>

                                                <div class="text-center mt-17">
                                                    <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                                        How long do you normally like to travel?
                                                    </h1>

                                                </div>
                                                <div class="form-group">
                                                    <select name="stay_time" class="form-control">
                                                        <option value="1-2 Weeks">1-2 Weeks</option>
                                                        <option value="2-3 Weeks">2-3 Weeks</option>
                                                        <option value="3-4 Weeks">3-4 Weeks</option>
                                                        <option value="4-5 Weeks">4-5 Weeks</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox-list">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="Checkboxes1">
                                                            <span></span>
                                                            I Agree to the Emporium-Collection Privacy & Data Protection
                                                            Policy
                                                        </label>
                                                    </div>
                                                    <p>
                                                        I agree that my personal data will be collected and stored
                                                        and used electronically to help the reservation agents with
                                                        specialized offers pertaining to my travel preferences.
                                                        Note: You may revoke your consent at any time by e-mail to
                                                        info@emporium-collection.com or from your settings section in
                                                        your account admin.
                                                    </p>
                                                    <div class="checkbox-list">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="Checkboxes1">
                                                            <span></span>
                                                            Emporium-Collection Privacy Policy
                                                        </label>
                                                    </div>
                                                    <p>
                                                        I have read and agree to the Emporium-Collection Privacy Policy.
                                                    </p>
                                                    <div class="checkbox-list">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="Checkboxes1">
                                                            <span></span>
                                                            Cookie Policy
                                                        </label>
                                                    </div>
                                                    <p>
                                                        I have read and agree to the Emporium-Collection Cookie Policy
                                                    </p>
                                                </div>

                                                <div class="text-right mt-7">
                                                    <i class="fas fa-info-circle" data-toggle="tooltip"
                                                        data-placement="top" data-container="body"
                                                        data-boundary="window" title=""
                                                        data-original-title="Of course, we will let you know if the choosen travel period coincides with local holidays, festivals, high season or an unfavorable season."></i>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 6-->
                                            <!--begin: Wizard Actions-->
                                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                <div class="mr-2">
                                                    <button type="button"
                                                        class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4"
                                                        data-wizard-type="action-prev">Previous</button>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                        class="btn btn-success font-weight-bolder text-uppercase px-9 py-4"
                                                        data-wizard-type="action-submit">Submit</button>
                                                    <button type="button"
                                                        class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4"
                                                        data-wizard-type="action-next">Next</button>
                                                </div>
                                            </div>
                                            <!--end: Wizard Actions-->
                                        </form>
                                        <!--end: Wizard Form-->
                                        <!--end: Wizard Body-->
                                    </div>
                                    <!--end: Wizard-->
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
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
@endsection