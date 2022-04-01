<div class="sidebar-main" id="quickinfo">
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
        <div class="d-flex align-items-center mb-5">
            <a href="#" class="sidebar-back">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="title-second title-line mb-0" data-place="property" data-replace="property_short_name">
                {{ $hotel_data[0]->property_name }}
            </h3>
        </div>
        <div class="row">
            <div class="col-8">
            </div>
            <div class="col-4">
                <div class="text-right mb-4" data-place="property-book-button">
                    <a href="#" class="btn btn-primary btn-block rounded-0">BOOK</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row mb-5">
                    <div class="col-lg-8">
                        <p style="font-size: 19px;margin-bottom: 55px;" data-place="property" data-replace="detail_section1_description_box1">
                        </p>

                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="qv-list">
                            <h4>Address</h4>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> <p data-place="property" data-replace="address">35 east 76th st, New York</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="qv-list">
                            <h4>Internet</h4>
                            <p class="mb-0"><b>Public areas :</b> <span  data-place="property" data-replace="internetpublic"></span></p>
                            <p class="mb-0"><b>In room :</b> <span data-place="property" data-replace="internetroom"></span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="qv-list">
                            <h4>Children policy</h4>
                            <p class="mb-0" data-place="property" data-replace="children_policy">Children are welcome</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="qv-list">
                            <h4>Check-in / Check-out</h4>
                            <p class="mb-0"><b>Check-in :</b> <span data-place="property" data-replace="checkin"></span></p>
                            <p class="mb-0"><b>Check-out :</b> <span data-place="property" data-replace="checkout"></span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="qv-list">
                            <h4>Transportation and transfer</h4>
                            <p class="mb-0"><b>Transfer :</b>  <span data-place="property" data-replace="transfer"></span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="qv-list">
                            <h4>Smooking policy</h4>
                            <p class="mb-0" data-place="property" data-replace="smookingpolicy">Non smooking public spaces</p>
                            <p class="mb-0"><b>Smooking rooms:</b> <span data-place="property" data-replace="smookingrooms"></span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="qv-list">
                            <h4>Suites</h4>
                            <p class="mb-0"><span data-place="property" data-replace="numberofrooms"></span></p>
                            <div data-place="property" data-replace="suiteNameList">
                                
                            </div><br>
                            <p class="mb-0"><b>In-room amenities :</b><br> <span data-place="property" data-replace="roomamenities"></span></p>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 mb-5">
                        <div class="qv-list">
                            <h4>Available services</h4>
                            <p data-place="property" data-replace="availableservices"></p>
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="qv-list">
                            <h4>Pets</h4>
                            <p class="mb-0" data-place="property" data-replace="pets">Small dogs allowed</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="qv-list">
                            <h4>Parking</h4>
                            <p class="mb-0"><b>Car park / valet service :</b> <br><span class="mb-0" data-place="property" data-replace="carpark"> 65 US$ per day</span></p>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 mb-5">
                        <div class="qv-list">
                            <h4>Amenities</h4>
                            <p class="mb-0" data-place="property-multi-value" data-replace="assign_amenities">
                                <p class="mb-0">Pool</p>
                                <p class="mb-0">Wlan</p>
                                <p class="mb-0">Smart-TV</p>
                                <p class="mb-0">Koffeemaschine</p>
                                <p class="mb-0">Laundry service</p>
                            </p>
                        </div>
                    </div> --}}
                </div>

                <div class="row mb-5" data-place="property-multi-value" data-replace="availableservices" data-replace-title="Available Services">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <p class="mb-0">Pool</p>
                        <p class="mb-0">Wlan</p>
                        <p class="mb-0">Smart-TV</p>
                        <p class="mb-0">Koffeemaschine</p>
                        <p class="mb-0">Laundry service</p>
                    </div>
                </div>

                <div class="row mb-5" data-place="property-multi-value" data-replace="assign_amenities" data-replace-title="Amenities">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <p class="mb-0">Pool</p>
                        <p class="mb-0">Wlan</p>
                        <p class="mb-0">Smart-TV</p>
                        <p class="mb-0">Koffeemaschine</p>
                        <p class="mb-0">Laundry service</p>
                    </div>
                </div>
                
                <!--<div class="row my-5">
                    <div class="col text-center">
                        <div class="i-touch">
                            <p><i class="ico ico-covid"></i></p>
                            <p>Corona Conscious</p>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="i-touch">
                            <p><i class="ico ico-hotel-line"></i></p>
                            <p>Handpicked Collection</p>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="i-touch">
                            <p><i class="ico ico-bells"></i></p>
                            <p>Personalize Service</p>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="i-touch">
                            <p><i class="ico ico-gift"></i></p>
                            <p>Perks & Offers</p>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="i-touch">
                            <p><i class="ico ico-shield"></i></p>
                            <p>Price Matching</p>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="i-touch">
                            <p><i class="ico ico-pay"></i></p>
                            <p>Trusted by Visa</p>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="i-touch">
                            <p><i class="ico ico-lock"></i></p>
                            <p>Secure Booking</p>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="col-lg-4">
                <div id="map2"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <div class="text-right mt-4" data-place="property-book-button">
                    <a href="#" class="btn btn-primary btn-block rounded-0">BOOK</a>
                </div>
            </div>
        </div>
    </div>
</div>