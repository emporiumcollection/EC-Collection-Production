
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
                    <div class="distri-container-inner">
                        <div class="mb-5 text-center">
                            <img src="images/logo.svg" class="img-fluid" alt="">
                        </div>

                        <form action="/distributor" method="post">
                            <div class="mt-3 mb-5 text-center">
                                <h3 class="font-2">Become a distribution partner</h3>
                                <p class="font-2">Have an account : <a href="login.html" class="underline"><b>Login
                                            Here</b></a>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" placeholder="First name" name="firstname">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" placeholder="Last name" name="lastname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-mail" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6 form-group">
                                            <select class="form-control phone-no" name="country_code">
                                                <option value="91">India</option>
                                                <option value="92">asd</option>
                                                <option value="93">ads</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <input type="text" class="form-control" placeholder="Phone" name="phon_number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input type="text" class="form-control" placeholder="Position Held" name="position">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input type="text" class="form-control" placeholder="Company name (in english)" name="company_name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <select class="form-control countryform" name="country">
                                        <option value=""></option>
                                        <option value="1">a</option>
                                        <option value="2">b</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" placeholder="City Name" name="city">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <input type="password" class="form-control" placeholder="Password (min. 6 characters)" name="password">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="password" class="form-control"
                                        placeholder="Confirm Password (min. 6 characters)" name="confirm_password">
                                </div>
                            </div>

                            <label class="mt-4"><b>Which one of the products are you interested in?</b></label>
                            <div class="choosen row">
                                <div class="custom-control custom-radio col-lg-6 pl-3">
                                    <input type="radio" id="customRadio1" name="marketplace" class="custom-control-input">
                                    <label class="custom-control-label w-100" for="customRadio1">AGENT MARKETPLACE</label>
                                </div>
                                <div class="custom-control custom-radio col-lg-6 pl-3">
                                    <input type="radio" id="customRadio2" name="whitelabel" class="custom-control-input">
                                    <label class="custom-control-label w-100" for="customRadio2">WHITELABEL / API</label>
                                </div>
                            </div>

                            <label class="mt-4"><b>Company Website</b></label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" placeholder="example.com" name="company_website">
                                </div>
                            </div>

                            <label class="mt-4"><b>Company Size</b></lanel>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select class="form-control" name="company_size">
                                        <option value="">0-10</option>
                                        <option value="1">10-100</option>
                                        <option value="2">100-500</option>
                                    </select>
                                </div>
                            </div>

                            <label class="mt-4"><b>Which of the following documents can you provide? (at least one)</b></label> 
                            <div class="choosen">
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <div class="custom-control custom-radio pl-0">
                                            <input type="radio" id="aa" name="iata_license_num" class="custom-control-input">
                                            <label class="custom-control-label w-100" for="aa">IATA LICENSE NUMBER</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" placeholder="IATA License Number (Optional)" name="license_num">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <div class="custom-control custom-radi pl-0">
                                            <input type="radio" id="bb" name="agent_license_num" class="custom-control-input">
                                            <label class="custom-control-label w-100" for="bb">AGENT LICENSE NUMBER</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" placeholder="Agent License Number (Optional)" name="agent_license_num">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <div class="custom-control custom-radi pl-0">
                                            <input type="radio" id="cc" name="company_registration_num" class="custom-control-input">
                                            <label class="custom-control-label w-100" for="cc">COMPANY REGISTRATION NUMBER </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" placeholder="Company Register Number (Optional)" name="company_registration_num">
                                    </div>
                                </div>
                            </div>

                            <label class="mt-4"><b>What type of products are you currently selling?</b></label>
                            <div class="choosen row">
                                <div class="custom-control custom-radio col-lg-4 pl-3 form-group">
                                    <input type="radio" id="selling" name="flight" class="custom-control-input">
                                    <label class="custom-control-label w-100" for="selling">FLIGHTS</label>
                                </div>
                                <div class="custom-control custom-radio col-lg-4 pl-3 form-group">
                                    <input type="radio" id="selling1" name="hotels" class="custom-control-input">
                                    <label class="custom-control-label w-100" for="selling1">HOTELS</label>
                                </div>
                                <div class="custom-control custom-radio col-lg-4 pl-3 form-group">
                                    <input type="radio" id="selling2" name="tours_and_activity" class="custom-control-input">
                                    <label class="custom-control-label w-100" for="selling2">TOURS & ACTIVITIES</label>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" placeholder="other" name="other">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-6 form-group">
                                    <label><b>Sales revenue (monthly)</b></label>
                                    <select class="form-control" name="sales_revenue">
                                        <option value=""></option>
                                        <option value="1">Lorem</option>
                                        <option value="2">Lipsum</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label><b>Unique visits (monthly)</b></label>
                                    <input type="text" class="form-control" placeholder="Number of unique visits" name="unique_visit">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 form-group">
                                    <label><b>Top 10 destinations you customers book</b></label>

                                    <select name='destinations[]' class='form-control' multiple="multiple"> 
                                        <option  value ="0">-- Select Category --</option> 
                                        @foreach($categories as $val)
                                            <option  value ="{{$val->id}}" {{(isset($row['property_category_id']) && in_array($val->id,explode(',',env('ROOT_DESTINATIONS')))) ? " selected='selected' " : '' }}>
                                                {{$val->category_name}}
                                            </option>                       
                                        @endforeach                     
                                    </select> 
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 form-group">
                                    <label><b>Top 5 nationalities of your customers</b></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 form-group">
                                    <textarea class="form-control" cols="30" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="accept_terms">
                                <label class="custom-control-label" for="customCheck1">I agree to Emporium-Collection Marketplace's <a href="#" class="underline">tearm & conditions</a></label>
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