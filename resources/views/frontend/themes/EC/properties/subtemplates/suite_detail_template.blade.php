<div class="container pr-0">
        <div class="d-flex w-100 wow fadeInUp align-items-center" data-wow-delay=".3s">
            <a href="#" class="back-btn ipad-view">
            <i class="ico ico-back"></i>
            </a>
            <div class="title-main mb-4 w-100">
                <h2 data-place="property_name">Premiere Suite</h2>
            </div>
        </div>
        {{-- <div class="header-suite-list justify-content-between align-items-center mb-2">
            <div class="title-outer-container">
                <div class="title-main offset-930 pr-3 title-subs">
                    <h2 data-place="suite_category_name">Premiere Suite</h2>
                </div>
            </div>
            <div class="dropdown ipad-view">
                <button class="btn dropdown-toggle p-0" type="button" id="suiteDetail"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Suite Details
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="suiteDetail">
                    <a class="dropdown-item btn-sidebar" href="#"
                        data-sidebar="#suiteinfo">Suite Info</a>
                    <a class="dropdown-item btn-sidebar" href="#"
                        data-sidebar="#reviews">Reviews</a>
                    <a class="dropdown-item btn-sidebar" href="#"
                        data-sidebar="#availability">Availability</a>
                    <a class="dropdown-item btn-sidebar" href="#"
                        data-sidebar="#myCollection">Add to Collection</a>
                    <a class="dropdown-item btn-sidebar" href="#"
                        data-sidebar="#share">Share</a>
                    <a class="dropdown-item btn-sidebar" href="#" data-sidebar="">Ask
                        Questions</a>
                </div>
            </div>
        </div> --}}
        <div class="slider-container hotel-page-list">
            <a href="#" data-place="covid_link" target="_blank">
                <div class="covid-info align-items-center">
                    <div class="ico-security">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 214.27 214.27"
                            style="enable-background:new 0 0 214.27 214.27;"
                            xml:space="preserve">
                            <g>
                                <path d="M196.926,55.171c-0.11-5.785-0.215-11.25-0.215-16.537c0-4.142-3.357-7.5-7.5-7.5c-32.075,0-56.496-9.218-76.852-29.01
                                c-2.912-2.832-7.546-2.831-10.457,0c-20.354,19.792-44.771,29.01-76.844,29.01c-4.142,0-7.5,3.358-7.5,7.5
                                c0,5.288-0.104,10.755-0.215,16.541c-1.028,53.836-2.436,127.567,87.331,158.682c0.796,0.276,1.626,0.414,2.456,0.414
                                c0.83,0,1.661-0.138,2.456-0.414C199.36,182.741,197.954,109.008,196.926,55.171z M107.131,198.812
                                c-76.987-27.967-75.823-89.232-74.79-143.351c0.062-3.248,0.122-6.396,0.164-9.482c30.04-1.268,54.062-10.371,74.626-28.285
                                c20.566,17.914,44.592,27.018,74.634,28.285c0.042,3.085,0.102,6.231,0.164,9.477C182.961,109.577,184.124,170.844,107.131,198.812
                                z" />
                                <path d="M132.958,81.082l-36.199,36.197l-15.447-15.447c-2.929-2.928-7.678-2.928-10.606,0c-2.929,2.93-2.929,7.678,0,10.607
                                l20.75,20.75c1.464,1.464,3.384,2.196,5.303,2.196c1.919,0,3.839-0.732,5.303-2.196l41.501-41.5
                                c2.93-2.929,2.93-7.678,0.001-10.606C140.636,78.154,135.887,78.153,132.958,81.082z" />
                            </g>
                        </svg>
                    </div>
                    <div class="pl-3 w-100">
                        <p class="covid-title mb-0 text-18">Sichere Urlaubsplanung
                            <span><i>Trotz
                                    Covid 19</i></span>
                        </p>
                        <p class="mb-0" data-place="covid_info">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit
                        </p>
                    </div>
                    <div class="covid-act">
                        JETZT INFORMIEREN
                    </div>
                </div>
            </a>
            <div class="slider-detail suite-popup" data-place="suite_room_images">
            </div>
            <div class="prev"><i class="ico ico-back"></i></div>
            <div class="next"><i class="ico ico-next"></i></div>
            <div class="hotel-meta full-width hotel-meta-details">
                <a href="#" class="view btn-sidebar i-none" data-sidebar="#reviews" onclick="replaceReviewData()">
                    Reviews
                </a>
                <a href="#" class="view btn-sidebar i-none" data-sidebar="#quickinfo">
                    Hotel Info
                </a>
                <div class="hotel-title number_of_beds_placement">
                    <p class="mb-0 inc">Includes</p>
                    <p class="mb-0"><span id="number_of_beds">2</span> Bedrooms</p>
                </div>
                {{-- <a href="#" class="view btn-sidebar i-none" data-sidebar="#policies">
                    Policies
                </a> --}}
                <div class="hotel-prices hotel-price-detail d-flex">
                    <a href="#" class="view btn-sidebar i-none" data-sidebar="#priceinfo">
                    <div class="row align-items-center justify-content-center">
                        <div class="mr-2" data-place="price-icon">
                            <i class="ico ico-info-green pointer btn-sidebar" type="button"
                                data-sidebar="#priceinfo"></i>
                        </div>
                        <h3 class="mb-0">
                            <span class="title-font-2 mr-1">From</span> <span
                                class="color-primary"> € <span data-place="suite-price"></span></span>
                        </h3>
                        <div class="ml-2">
                            <span class="pernight"></span>
                        </div>
                    </div>
                </a>
                </div>
                <div class="ipad-view book-suite">
                    <a data-place="reserve-link" href="#">
                        Book this Suite
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="title-main mt-0 mb-3">
                    <h2 data-place="suite_category_name">Suite Name</h2>
                </div>
                <div class="meta-title meta-title-lg mb-3">
                    <span>Sleeps</span>
                    <span><span data-place="suite-beds"></span> beds </span>
                    <span>Suite size: <span data-place="suite-size"></span>ft</span>
                </div>
                <p data-place="suite_description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eum
                    laborum enim hic quia ipsa
                    explicabo doloremque ut? Magnam nulla consectetur provident odit quisquam
                    molestias voluptatum maiores
                    blanditiis aliquam natus! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Voluptas eum
                    laborum enim hic quia ipsa
                    explicabo doloremque ut? Magnam nulla consectetur provident odit quisquam
                    molestias voluptatum maiores
                    blanditiis aliquam natus!
                </p>

                <!-- display only on dektop -->
                {{-- <div class="i-none">
                    <h4 class="mt-5 mb-4 color-dark-grey ">Booking Facilities</h4>
                    <div class="row mb-4">
                        <ul data-place="booking_facilities">
                        </ul>
                    </div>
                </div> --}}
                <!-- display only on dektop end -->

                <!-- display only on dektop -->
                <div class="i-none">
                    <h4 class="mt-5 mb-4 color-dark-grey ">Amenities</h4>
                    <div class="row mb-4">
                        <ul data-place="suite_amenities">
                        </ul>
                    </div>
                </div>
                <!-- display only on dektop end -->

            </div>
            <div class="col-md-4">
                <div class="side-detail mb-3">
                    <p data-place="checkin"> </p>
                    <p data-place="checkout"> </p>
                    <p>Reserve now, pay at the Hotel</p>                    
                    <a data-place="reserve-link" href="/reservation/when" class="btn btn-dark btn-block">Reservation</a>
                </div>

                <!-- display only on dektop -->
                <div class="side-detail text-left mb-3 px-2 i-none">
                    <h3 class="text-center mt-2 mb-0">
                        <span class="why-we"></span>
                    </h3>
                    <p data-place="property_usp"></p>
                    <!--<ul class="pl-4">
                        <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                            restaurant or in the drawing room.</li>
                        <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                            restaurant or in the drawing room.</li>
                        <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                            restaurant or in the drawing room.</li>
                        <li class="mb-2">Stylish and Glamourous afternoon tea in Oscar
                            restaurant or in the drawing room.</li>
                    </ul> -->
                </div>
                <!-- display only on dektop end -->
            </div>
        </div>
</div>

@if(Request::segment(3) == 'suites')
    @include('frontend.themes.EC.layouts.subsections.quick_info')   
    @include('frontend.themes.EC.layouts.subsections.reviews')
@endif
@include('frontend.themes.EC.layouts.subsections.location_info')
@include('frontend.themes.EC.layouts.subsections.faqs')
@include('frontend.themes.EC.hotel.child_policy')  
@include('frontend.themes.EC.hotel.policy')  
@include('frontend.themes.EC.hotel.tips')  
@include('frontend.themes.EC.layouts.subsections.surrounding')
@include('frontend.themes.EC.layouts.subsections.facilities') 