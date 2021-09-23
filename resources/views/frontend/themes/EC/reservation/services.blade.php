@extends('frontend.themes.EC.layouts.main')
{{--  For Title --}}
@section('title', 'Global search availability')
{{-- For Meta Keywords --}}
@section('meta_keywords', '')
{{-- For Meta Description --}}
@section('meta_description', '')
{{-- For Page's Content Part --}}
<style>
    .experiences{
        cursor: pointer;
    }
</style>
@section('content')
<div class="content-em">
  <div class="top-wrapper">
    <div class="container ">
      
      @include('frontend.themes.EC.reservation.nav_wizard')
     
     <div id="step-6" class="tab-pane" role="tabpanel">
  <div class="row">
    <div class="col-lg-9 col-md-8 mb-4">
      <div class="row align-items-center mb-5">
        <div class="col-md-6 mb-4">
          <h2 class="mb-0 d-flex align-items-center">
            <a href="#" class="backwizard btn-backwizard">
              <i class="ico ico-back mr-3"></i>
            </a>
            Add additional services
          </h2>
        </div>
        <div class="col-md-6 mb-4 text-right">
          <a href="/reservation/whoistravelling" class="btn btn-dark  rounded-0 px-4 btn-nextwizard">Continue</a>
        </div>
      </div>
      <hr class="mb-0">
      <div class="accordion accordion-ex" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                data-target="#transfers" aria-expanded="true" aria-controls="transfers">
                Transfers
                <i class="fa fa-plus"></i>
                <i class="fa fa-minus" style="display: none"></i>
              </button>
            </h2>
          </div>
          <div id="transfers" class="collapse additional-collapse" aria-labelledby="headingOne"
            data-parent="#accordionExample">
            <div class="card-body h-100">
              <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="p-4 inner-warppa">
                      <div class="add-txt">
                        <h4 class="mb-4 added">Added to booking</h4>
                        <h4 class="mb-4 title-additional-list">ONE WAY AIRPORT
                          TRANSFER</h4>
                        <p class="mb-4">
                          Transfer to or from Ngurah Rai International Airport
                          by
                          private car. Suitable for up to four guests. Tax and
                          service
                          charge are not included. Price shown is for up to 4
                          guests.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                        from booking</a>

                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="p-4 inner-warppa">
                      <div class="add-txt">
                        <h4 class="mb-4 added">Added to booking</h4>
                        <h4 class="mb-4 title-additional-list">ROUNDTRIP AIRPORT
                          TRANSFER</h4>
                        <p class="mb-4">
                          Relax with transfers to and from Ngurah Rai
                          International
                          Airport by private car. Suitable for up to four
                          guests.
                          Tax
                          and service charge are not included. Price shown is
                          for
                          up
                          to 4 guests.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
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
              <button class="btn btn-link btn-block text-left collapsed" type="button"
                data-toggle="collapse" data-target="#inroom-amenities" aria-expanded="false"
                aria-controls="inroom-amenities">
                In-Room Amenities
                <i class="fa fa-plus"></i>
                <i class="fa fa-minus" style="display: none"></i>
              </button>
            </h2>

          </div>
          <div id="inroom-amenities" class="collapse additional-collapse" aria-labelledby="headingTwo"
            data-parent="#accordionExample">
            <div class="card-body h-100">
              <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="p-4 inner-warppa">
                      <div class="add-txt">
                        <h4 class="mb-4 added">Added to booking</h4>
                        <h4 class="mb-4 title-additional-list">BOTTLE OF ROSE
                          BALINESE WINE</h4>
                        <p class="mb-4">
                          Find a bottle of sparkling Balinese rosé in your
                          room,
                          awaiting your arrival.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                        from booking</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
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
                          Delight someone special with this unique Balinese
                          handcrafted penjor, a wonderful souvenir.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                        from booking</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="p-4 inner-warppa">
                      <div class="add-txt">
                        <h4 class="mb-4 added">Added to booking</h4>
                        <h4 class="mb-4 title-additional-list">ISLAND TROPICAL
                          AMENITY</h4>
                        <p class="mb-4">
                          Step into your room and discover a true taste of
                          Bali.
                          This
                          welcome platter includes fresh coconuts, seasonal
                          fruit
                          and
                          assorted local desserts.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
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
              <button class="btn btn-link btn-block text-left collapsed" type="button"
                data-toggle="collapse" data-target="#spa-service" aria-expanded="false"
                aria-controls="spa-service">
                Spa Services
                <i class="fa fa-plus"></i>
                <i class="fa fa-minus" style="display: none"></i>
              </button>
            </h2>

          </div>
          <div id="spa-service" class="collapse additional-collapse" aria-labelledby="headingThree"
            data-parent="#accordionExample">
            <div class="card-body h-100">
              <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
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
                          combining long rhythmic strokes with acupressure and
                          reflexology techniques. Please Note: This is a
                          request
                          and not a booking, our spa team will contact you to
                          confirm your desired appointment. Price shown is per
                          treatment, per person.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                        from booking</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
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
                          Achieve inner harmony with this 60-minute massage
                          ritual. Rhythmic pressure applied with herbal oils
                          banishes toxins and impurities while boosting
                          circulation. Please Note: This is a request and not
                          a
                          booking, our spa team will contact you to confirm
                          your
                          desired appointment. Price shown is per treatment,
                          per
                          person.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                        from booking</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
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
                          This 60-minute ancient holistic therapy applies
                          gentle
                          pressure to points on the feet – as blissful as it
                          is
                          beneficial. Please Note: This is a request and not a
                          booking, our spa team will contact you to confirm
                          your
                          desired appointment. Price shown is per treatment,
                          per
                          person.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
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
              <button class="btn btn-link btn-block text-left collapsed" type="button"
                data-toggle="collapse" data-target="#experiences" aria-expanded="false"
                aria-controls="experiences">
                Experiences
                <i class="fa fa-plus"></i>
                <i class="fa fa-minus" style="display: none"></i>
              </button>
            </h2>

          </div>
          <div id="experiences" class="collapse additional-collapse" aria-labelledby="headingfour"
            data-parent="#accordionExample">
            <div class="card-body h-100">
              <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
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
                          combining long rhythmic strokes with acupressure and
                          reflexology techniques. Please Note: This is a
                          request
                          and not a booking, our spa team will contact you to
                          confirm your desired appointment. Price shown is per
                          treatment, per person.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                        from booking</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
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
                          Achieve inner harmony with this 60-minute massage
                          ritual. Rhythmic pressure applied with herbal oils
                          banishes toxins and impurities while boosting
                          circulation. Please Note: This is a request and not
                          a
                          booking, our spa team will contact you to confirm
                          your
                          desired appointment. Price shown is per treatment,
                          per
                          person.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                        from booking</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
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
                          This 60-minute ancient holistic therapy applies
                          gentle
                          pressure to points on the feet – as blissful as it
                          is
                          beneficial. Please Note: This is a request and not a
                          booking, our spa team will contact you to confirm
                          your
                          desired appointment. Price shown is per treatment,
                          per
                          person.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                        from booking</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
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
                          Achieve inner harmony with this 60-minute massage
                          ritual. Rhythmic pressure applied with herbal oils
                          banishes toxins and impurities while boosting
                          circulation. Please Note: This is a request and not
                          a
                          booking, our spa team will contact you to confirm
                          your
                          desired appointment. Price shown is per treatment,
                          per
                          person.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                        from booking</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
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
                          This 60-minute ancient holistic therapy applies
                          gentle
                          pressure to points on the feet – as blissful as it
                          is
                          beneficial. Please Note: This is a request and not a
                          booking, our spa team will contact you to confirm
                          your
                          desired appointment. Price shown is per treatment,
                          per
                          person.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                        from booking</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
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
                          Achieve inner harmony with this 60-minute massage
                          ritual. Rhythmic pressure applied with herbal oils
                          banishes toxins and impurities while boosting
                          circulation. Please Note: This is a request and not
                          a
                          booking, our spa team will contact you to confirm
                          your
                          desired appointment. Price shown is per treatment,
                          per
                          person.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
                        from booking</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="additional-list p-0">
                    <div class="inner-wrapper mb-3">
                      <div class="pr-lst result-grid">
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
                        </div>
                        <div>
                          <img src="{{ asset('/images/98d13b87078871.5dad9554e33ef.jpg')}}" class="w-100" alt="">
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
                          This 60-minute ancient holistic therapy applies
                          gentle
                          pressure to points on the feet – as blissful as it
                          is
                          beneficial. Please Note: This is a request and not a
                          booking, our spa team will contact you to confirm
                          your
                          desired appointment. Price shown is per treatment,
                          per
                          person.
                        </p>
                      </div>
                      <div class="booking-qty">
                        <p class="qty-label">Quantity</p>
                        <div class="qty-button mb-4">
                          <button type="button" id="sub" class="sub btn-qty">-</button>
                          <input class="form-qty" type="number" id="1" value="1" min="1" />
                          <button type="button" id="add" class="add btn-qty">+</button>
                        </div>
                        <p class="qty-label">€16.00</p>
                      </div>
                      <div class="confirm-qty">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>

                      <a href="#" class="btn btn-dark rounded-0 booking-select">Select</a>
                      <a href="#" class="btn-red-link mt-2 remove-booking">Remove
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
    <div class="col-lg-3 col-md-4 mb-4">
      <div class="reservation-summary">
        <h4>YOUR RESERVATION</h4>
        <p><b>Belmond Jimbaran Puri</b></p>
        <table class="table table-borderless mb-0">
          <tr>
            <td class="px-0 py-1">Guests</td>
            <td class="px-0 py-1 text-right">2 Guests</td>
          </tr>
          <tr>
            <td class="px-0 py-1">Check-in</td>
            <td class="px-0 py-1 text-right">15 Aug 2020</td>
          </tr>
          <tr>
            <td class="px-0 py-1">Check-out</td>
            <td class="px-0 py-1 text-right">16 Aug 2020</td>
          </tr>
          <tr>
            <td class="px-0 py-1">Suites</td>
            <td class="px-0 py-1 text-right">Pavilion suite</td>
          </tr>
        </table>
      </div>
      <div class="reservation-summary section-shadow">
        <div class="row align-items-center mb-3">
          <div class="col-lg-3 pr-0 asd-sad">
            <img src="{{ asset('/images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg')}}" class="img-full"
              alt="">
          </div>
          <div class="col-lg-9">
            <h4>SUITE 1</h4>
            <p class="mb-0"><b>Superior Double Room Garden or Village View </b></p>
          </div>
        </div>
        <table class="table table-borderless mb-0">
          <tr>
            <td class="px-0 py-1">Guests</td>
            <td class="px-0 py-1 text-right">2</td>
          </tr>
          <tr>
            <td class="px-0 py-1">Suite</td>
            <td class="px-0 py-1 text-right">€4.299.00</td>
          </tr>
          <tr>
            <td class="px-0 py-1">Tax</td>
            <td class="px-0 py-1 text-right">€299.00</td>
          </tr>
          <tr>
            <td class="px-0 py-1" colspan="2">
              <a href="#" class="underline color-grey" type="button" data-toggle="modal"
                data-target="#priceModal"><i>Details and conditions</i></a>
            </td>
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
    </div>
  </div>
</div>
  </div>
</div>
</div>
@endsection
