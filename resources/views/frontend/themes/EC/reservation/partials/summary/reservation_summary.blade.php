
<!--begin::Demo Panel-->

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
                                            @if(!empty($trip_dates))
                                                @foreach($trip_dates as $td_key => $date)
                                                    <div class="d-flex itinirary-list py-5 align-items-center">
                                                        <div class="itn-text">
                                                            <p class="mb-0 month-nav">{{ date('d. M. Y', strtotime($date)) }}</p>
                                                            <p class="mb-0">{{ date('l', strtotime($date)) }}</p>
                                                            @if(strtotime($date) == strtotime($reservations->checkin_date))
                                                                <p class="mb-0 mt-2"><b>Arrival date</b></p>
                                                            @elseif(strtotime($date) == strtotime($reservations->checkout_date))
                                                                <p class="mb-0 mt-2"><b>Departure date</b></p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="reservation-img mb-8">
                                        <div class="result-grid">
                                        <?php 
                                            foreach($property[0]->propertyImages as $images):
                                                
                                                if(isset($property[0]->container->name)){
                                                    $container_name = $property[0]->container->name;
                                                }else{
                                                    $container_name = strtolower(str_replace(" ", "-", trim($property[0]->property_name)));
                                                }

                                                if(is_array($images)){
                                                    $file_name = $images['file_name'];
                                                }elseif(is_object($images) && isset($image->file->file_name)){
                                                    $file_name = $images->file->file_name;
                                                }else{
                                                    $file_name = 'default-image.png';
                                                }
                                        ?>                  
                                            <div>
                                                <img <?php echo 'src="/property-image/resize/398x271/'.$container_name.'/default-image.png/property-image"';?> <?php echo 'data-src="property-image/resize/398x271/'.$container_name.'/'.$file_name.'/property-image"';?> class="w-100" alt="">
                                            </div>
                                        <?php endforeach; ?>    
                                        </div>
                                        <div class="reservation-result">
                                            <!-- <h3 class="font-weight-bolder font-size-h3 text-dark-75 mb-1">
                                                The Ludlow Hotel
                                            </h3> -->
                                            <div class="d-flex mb-3">
                                                <span class="text-dark-50 flex-root font-weight-bold">Hotel Name</span>
                                                <span class="text-dark flex-root font-weight-bold text-right">{{ $hotel_name   }}</span>
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
                                                <span class="text-dark flex-root font-weight-bold text-right">{{ date('d-m-Y', strtotime($reservations->checkin_date)) }}</span>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <span class="text-dark-50 flex-root font-weight-bold">Check-out</span>
                                                <span class="text-dark flex-root font-weight-bold text-right">{{ date('d-m-Y', strtotime($reservations->checkout_date)) }}</span>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <span class="text-dark-50 flex-root font-weight-bold">Nights</span>
                                                <span class="text-dark flex-root font-weight-bold text-right">1</span>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <span class="text-dark-50 flex-root font-weight-bold">Guests</span>
                                                <span class="text-dark flex-root font-weight-bold text-right">{{ $reservations->adult + $reservations->junior + $reservations->baby }}</span>
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
                                                            
                                                            <div class="p-4 inner-warppa">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 mb-4">
                                                            <?php $pos=1;
                                                            $grand_total = 0;
                                                        ?>
                                                        @if(!empty($reservations))

                                                            @foreach($reservations->reservedSuites as $suite)
                                                            <div class="reservation-summary section-shadow">
                                                          <h4>SUITE &nbsp; {{ $pos++ }}</h4>
                                                          <p><b>{{ $suite->suite->category_name }}</b></p>
                                                          <table class="table table-borderless mb-0">
                                                            <tr>
                                                              <td class="px-0 py-1">Guests</td>
                                                              
                                                              <td class="px-0 py-1 text-right">{{ $suite->guest }}</td>
                                                            
                                                            </tr>
                                                            <tr>
                                                              <td class="px-0 py-1">Suite</td>
                                                              <td class="px-0 py-1 text-right">€{{ $suite->price }}</td>
                                                            </tr>
                                                            {{-- <tr>
                                                              <td class="px-0 py-1">Tax</td>
                                                              <td class="px-0 py-1 text-right">€299.00</td>
                                                            </tr> --}}
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
                                                              <td class="px-0 py-1 text-right"><b>€{{ $suite->price }}</b></td>
                                                            </tr>
                                                            <?php $grand_total += (float)$suite->price; ?>
                                                          </table>
                                                        </div>
                                                        @endforeach
                                                        <div class="reservation-total">
                                                          <table class="table table-borderless mb-0">
                                                            <tr>
                                                              <td class="px-0 py-1">Total</td>
                                                              <td class="px-0 py-1 text-right"><b>€{{ $grand_total }}</b></td>
                                                            </tr>
                                                          </table>
                                                        </div>
                                                        
                                                    @else
                                                        <h2>Suite Not Selected</h2>
                                                    @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="card">
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
                                        </div> --}}

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
                                            @if(count($reservations->reservedCompanions) > 0)
                                                <?php
                                                    $bgClass = [
                                                        'success',
                                                        'primary',
                                                        'default',
                                                        'info',
                                                        'danger'
                                                    ];
                                                ?>
                                                <div class="d-flex itinirary-list py-5 align-items-center">
                                                    <div class="w-100">
                                                        <p class="mb-0"><b>Who's Coming</b></p>
                                                        <p class="mb-0"></p>
                                                    </div>
                                                    <div class="w-100">
                                                        <div class="symbol-group symbol-hover justify-content-end">
                                                            <?php $count = 0; ?>
                                                            @foreach($reservations->reservedCompanions as $data)
                                                             <?php $count++; ?>
                                                                <div class="symbol symbol-35 symbol-circle symbol-light-{{ $bgClass[rand(0, 4)] }}"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="{{ $data->companion->first_name  }}{{ $data->companion->email }}
                                                                    {{ $data->companion->phone_number }}" ><span class="symbol-label font-weight-bold">
                                                                    {{ strtoupper($data->companion->first_name[0]) }}{{ strtoupper($data->companion->last_name[0]) }}</span>
                                                                </div>
                                                                <?php
                                                                    if($count == 2){
                                                                        break;
                                                                    }
                                                                ?>
                                                                @endforeach
                                                                @if(count($reservations->reservedCompanions) > 2)
                                                                    <div class="symbol symbol-35 symbol-circle symbol-light-success" data-toggle="tooltip" title="" data-original-title="Invite someone"><span class="symbol-label font-weight-bold">{{ (count($reservations->reservedCompanions) - 2) }}+</span>
                                                                    </div>
                                                                @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="d-flex itinirary-list py-5 align-items-center">
                                                <div class="w-100">
                                                    <p class="mb-0"><b>Confirmation Code</b></p>
                                                    <p class="mb-0">EC-{{ $booking_number }}</p>
                                                </div>
                                            </div>
                                            @if($cancelation_status)
                                            <div class="d-flex itinirary-list py-5 align-items-center">
                                                <div class="w-100">
                                                    <p class="mb-0"><b>Cancellation policy</b></p>
                                                    <p class="mb-1">Cancel before 12:00 PM on Sep 25 and get full refund
                                                    </p>
                                                    <a href="#">Read more</a>
                                                </div>
                                            </div>
                                            @endif
                                            <a href="/reservation/whoistravelling">
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
                                            {{-- {{$reservation_diff}} --}}
                                            @if($cancelation_status)
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
                                            @endif
                                            
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

<!--end::Demo Panel-->
<script type="text/javascript">
jQuery(function($) {
      $(document).ready(function() {
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
        });    
    });
</script>