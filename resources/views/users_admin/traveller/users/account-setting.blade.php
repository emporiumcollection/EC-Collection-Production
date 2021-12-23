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
           
            <div class="card-added">
                @if($card_detail)
                    @foreach($card_detail as $detail )
                        <div class="d-flex align-items-center list-divider">
                            <div class="ico-inline mr-5">
                                <i class="ico-payment {{ $card_logos[$detail->select_card] }}"></i>
                            </div>

                            <div class="d-flex flex-column flex-grow-1">
                                <div
                                    class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                    <?php
                                        $full_card_number = \CommonHelper::decrypt($detail->card_number);
                                        $card_number = '•••• •••• •••• ' . substr($full_card_number,-4);
                                    ?>
                                    {{ $card_number }}
                                    @if ($detail->default_card == 1)
                                        <span class="default-set">default</span>
                                    @endif
                                </div>
                                <span class="text-muted font-weight-bold">Expiration: {{ $detail->exp_month }} / {{ $detail->exp_year }}</span>
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
                                            <a href="/users/default-card/{{$detail->id}}" class="navi-link">
                                                <span class="navi-text">
                                                    Set Default
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="/users/CardDetail/{{$detail->id}}" class="navi-link">
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
                @endif     
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
                                    <form action="">
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

//Model
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
            <form action="/users/CardDetail" method="post">
                <div class="modal-body">
                    <div class="mb-4">
                        <img src="{{ asset('images/credit-cards-768x178.png')}}" class="img-fluid" alt="">
                    </div>
                     <div class="form-group">
                        <label> Select Card
                            <span class="text-danger">*</span>
                        </label>
                        <select class="form-control" name="select_card">
                            <option value="1">Mastercard</option>
                            <option value="2">Visa</option>
                            <option value="3">American-express</option>
                            <option value="4">Discover</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label> Card Type
                            <span class="text-danger">*</span>
                        </label>
                        <select class="form-control" name="card_type">
                            <option value="Private">Private</option>
                            <option value="Business">Business</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Card Number <span class="text-danger">*</span></label>
                        <input type="text" name="card_number" class="form-control" placeholder="Enter Card Number">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Expiry Month <span class="text-danger">*</span></label>
                            <select name="exp_month" class="form-control">
                                <option value="" selected disabled>Month</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Expiry Year <span class="text-danger">*</span></label>
                            <select class="form-control" name="exp_year" id="expire_year">
                                <option value="" selected disabled>Year</option>
                                <?php $years = range(date('Y'), (date('Y') + 20)); ?>
                                @foreach($years as $year)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Security Code <span class="text-danger">*</span></label>
                            <input type="password" name="security_code" class="form-control" placeholder="Enter your passcode">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Name on Card <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Postal Code <span class="text-danger">*</span></label>
                            <input type="text" name="postal_code" class="form-control" placeholder="Enter your postal code">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Country <span class="text-danger">*</span></label>
                            <input type="text" name="country" class="form-control" placeholder="Enter your country">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary font-weight-bold add_card">Add Card</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection