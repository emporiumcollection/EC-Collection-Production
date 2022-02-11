@extends('customer.layout.app')
    @section('content')
        <div class="container-wrapper h-100">
            <div class="row h-100">
                <div class="col-md-8 bg-white">
                    <div class="mb-4">
                        <a href="main-page.html" class="back-abs">
                            <i class="ico ico-back"></i>
                        </a>
                    </div>
                    <div class="operator-container-inner">
                        <div class="mb-5 text-center">
                            <img src="images/logo.svg" class="img-fluid" alt="">
                        </div>

                        <form action="/supplier" method="post">
                            <div class="mt-3 mb-5 text-center">
                                <h3 class="font-2">Become an operator</h3>

                                <h3 class="font-2 mt-4">Create Account</h3>
                                <p class="font-2">Have an account : <a href="login.html" class="underline"><b>Login
                                            Here</b></a>
                                </p>
                            </div>

                            <h5 class="mt-4 font-2 text-center mb-4"><b>Company Information</b></h5>
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <label class="mb-0">Company Name</label>
                                </div>
                                <div class="col-lg-9 mb-3">
                                    <input type="text" class="form-control" name="company_name">
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <label class="mb-0">Supplier Type</label>
                                </div>
                                <div class="col-lg-9 mb-3">
                                    <select class="form-control" name="supplier_type">
                                        <option value=""></option>
                                        <option value="1">Hotel</option>
                                        <option value="2">Restaurant</option>
                                        <option value="3">Spa</option>
                                        <option value="4">Showroom</option>
                                        <option value="5">Winefarm</option>
                                        <option value="6">GolfClub</option>
                                        <option value="7">Yachts Club</option>
                                        <option value="8">Polo Club</option>
                                        <option value="9">+ Supplier</option>
                                        <option value="10">Tour Operator</option>
                                        <option value="11">Attraction</option>
                                        <option value="12">Activity provider</option>
                                        <option value="13">Event Company</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <label class="mb-0">Country</label>
                                </div>
                                <div class="col-lg-9 mb-3">
                                    <select class="form-control" name="country">
                                        <option value=""></option>
                                        <option value="1">Lorem</option>
                                        <option value="1">Lorem</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <label class="mb-0">City</label>
                                </div>
                                <div class="col-lg-9 mb-3">
                                    <select class="form-control" name="city">
                                        <option value=""></option>
                                        <option value="1">Lorem</option>
                                        <option value="1">Lorem</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <label class="mb-0">Address</label>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Address" name="address">
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <input type="text" class="form-control" placeholder="Postal Code" name="postal_code">
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <label class="mb-0">Website</label>
                                </div>
                                <div class="col-lg-9 mb-3">
                                    <input type="text" class="form-control" placeholder="Your company URL" name="website">
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <label class="mb-0">General Contact Number</label>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <select class="form-control" name="company_country_code">
                                        <option value="1">+65 Singapore</option>
                                        <option value="1">+62 Indonesia</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="company_contact_no">
                                </div>  
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <label class="mb-0">Sale Currency</label>
                                </div>
                                <div class="col-lg-9 mb-3">
                                    <select class="form-control">
                                        <option value=""></option>
                                        <option value="1">Lorem</option>
                                        <option value="1">Lorem</option>
                                    </select>
                                </div>
                            </div>

                            <h5 class="mt-4 font-2 text-center mb-4"><b>Primary Account Contact Detail</b></h5>
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <label class="mb-0">Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <input type="text" class="form-control" placeholder="First Name" name="firstname">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <label class="mb-0">Job Title</label>
                                </div>
                                <div class="col-lg-9 mb-3">
                                    <input type="text" class="form-control" placeholder="Account Manager" name="job_title">
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <label class="mb-0">Email</label>
                                </div>
                                <div class="col-lg-9 mb-3">
                                    <input type="email" class="form-control" placeholder="email@example.com" name="email">
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <label class="mb-0">Phone</label>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <select class="form-control" name="country_code">
                                        <option value="1">+65 Singapore</option>
                                        <option value="1">+62 Indonesia</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="contact_number">
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <label class="mb-0">Password</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <input type="password" class="form-control" placeholder="Enter Password" name="password">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col-lg-3 mb-3"></div>
                                <div class="col-lg-9">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="accept_terms">
                                        <label class="custom-control-label" for="customCheck1">I agree to
                                            Emporium-Collection Marketplace's <a href="#" class="underline">tearm &
                                                conditions</a></label>
                                    </div>
                                </div>
                            </div>


                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-outline-dark px-5">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection    