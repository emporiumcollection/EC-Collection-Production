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
                @foreach($card_detail as $detail )
                <div class="d-flex align-items-center list-divider">
                    @if($detail->select_card == 1)
                    <div class="ico-inline mr-5">
                        <i class="ico-payment mastercard"></i>
                    </div>
                    @endif

                    @if($detail->select_card == 2)
                    <div class="ico-inline mr-5">
                        <i class="ico-payment visa"></i>
                    </div>
                    @endif

                    @if($detail->select_card == 3)
                    <div class="ico-inline mr-5">
                         <i class="ico-payment american-express"></i>
                    </div>
                    @endif

                    @if($detail->select_card == 4)
                    <div class="ico-inline mr-5">
                        <i class="ico-payment discover"></i>
                    </div>
                    @endif

                    <div class="d-flex flex-column flex-grow-1">
                        <div
                            class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                            MasterCard {{ str_pad(substr($detail->card_number, -4), strlen($detail->card_number), '*', STR_PAD_LEFT) }} 
                            @if ($detail->default_card == 1)
                                <span class="default-set">default</span>
                            @endif
                        </div>
                        <span class="text-muted font-weight-bold">Expiration:
                            {{ $detail->expires_on }}</span>
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
    
@endsection