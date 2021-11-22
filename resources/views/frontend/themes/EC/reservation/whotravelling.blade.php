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
        <h2 class="mb-5 d-flex align-items-center">
          <a href="#" class="backwizard btn-backwizard">
            <i class="ico ico-back mr-3"></i>
          </a>
          Who’s travelling
        </h2>        
        <div class="row">          
          <div class="col-lg-9 col-md-8">
            <hr class="mb-4 mt-4">            
              <div class="row">
                <div class="col-md-2">      
                  <h5 class="mb-4 mt-5"><a href="javascript:void(0);" class="">My Address</a></h5>
                </div>
                <div class="col-md-1">      
                  <h5 class="mb-4 mt-5">or</h5>
                </div>
                <div class="col-md-3">
                  <h5 class="mb-4 mt-5"><a href="javascript:void(0);" class="add_new_addres">Add new address</a></h5>      
                </div>
              </div>

            <div class="row">
              <div class="col-md-4 form-group">
                <label>Title<sup>*</sup></label>
                <select name="address_title" id="address_title" class="form-control address_title">
                  <option value="Mr">Mr</option>
                  <option value="Mrs">Mrs</option>
                  <option value="Miss">Miss</option>
                  <option value="Ms">Ms</option>
                  <option value="Dr">Dr</option>
                  <option value="Prof">Prof</option>
                </select>
                <div class="invalid-feedback errMsg"></div>
              </div>
              <div class="col-md-4 form-group">
                <label>First name<sup>*</sup></label>
                <input type="text" name="address_first_name" id="address_first_name" class="form-control address_first_name"  value="{{ $address->first_name ? $address->first_name : ''}}">
                <div class="invalid-feedback errMsg"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label>Last name<sup>*</sup></label>
                <input type="text" name="address_last_name" id="address_last_name" class="form-control address_last_name" value="{{ $address->last_name ? $address->last_name : ''}}">
                <div class="invalid-feedback errMsg"></div>
              </div>
              <div class="col-md-4 form-group">
                <label>Email<sup>*</sup></label>
                <input type="text" name="address_email" id="email_" class="form-control address_email" value="{{ $address->email ? $address->email : ''}}">
                <div class="invalid-feedback errMsg"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label>Telephone<sup>*</sup></label>
                <input type="text" name="address_phone" id="address_phone" class="form-control address_phone" value="{{ $address->mobile_number ? $address->mobile_number : ''}}">
                <div class="invalid-feedback errMsg"></div>
              </div>
              <div class="col-md-4 form-group">
                <label>Country/Region<sup>*</sup></label>
                <select class="form-control address_country" name="address_country" id="address_country">
                  <option value="" selected disabled></option>
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Aland Islands</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguillia</option>
                  <option value="AQ">Antarctica</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BV">Bouvet Island</option>
                  <option value="BR">Brazil</option>
                  <option value="IO">British Indian Ocean Terriory</option>
                  <option value="VG">British Virgin Islands</option>
                  <option value="BN">Brunei Darussalam</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CX">Christmas Island</option>
                  <option value="CC">Cocos (Keeling) Islands</option>
                  <option value="CO">Colombia</option>
                  <option value="CO">Comoros</option>
                  <option value="CG">Congo (Brazzaville)</option>
                  <option value="CD">Congo, Democratic Republic of the</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CW">Curaçao</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="CI">Côte d'Ivoire</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands (Malvinas)</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GF">French Guiana</option>
                  <option value="PF">French Polynesia</option>
                  <option value="TF">French Southern Territories</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GP">Guadeloupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GG">Guernsey</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HM">Heard Island and Mcdonald Islands</option>
                  <option value="VA">Holy See (Vatican City State)</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JE">Jersey</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KR">Korea, Republic of</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Lao PDR</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macao</option>
                  <option value="MK">Macedonia, Republic of</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia, Federated States of</option>
                  <option value="MD">Moldova</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="AN">Netherlands Antilles</option>
                  <option value="NC">New Caledonia</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="MP">Northern Mariana Islands</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PS">Palestinian Territory, Occupied</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russian Federation</option>
                  <option value="RW">Rwanda</option>
                  <option value="RE">Réunion</option>
                  <option value="SH">Saint Helena</option>
                  <option value="KN">Saint Kitts and Nevis</option>
                  <option value="LC">Saint Lucia</option>
                  <option value="PM">Saint Pierre and Miquelon</option>
                  <option value="VC">Saint Vincent and Grenadines</option>
                  <option value="BL">Saint-Barthélemy</option>
                  <option value="MF">Saint-Martin (French part)</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SX">Sint Maarten (Dutch part)</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                  <option value="SS">South Sudan</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SJ">Svalbard and Jan Mayen Islands</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="TW">Taiwan</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania, United Republic of</option>
                  <option value="TH">Thailand</option>
                  <option value="TL">Timor-Leste</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TC">Turks and Caicos Islands</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="UM">United States Minor Outlying Islands</option>
                  <option value="US">United States of America</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela (Bolivarian Republic of)</option>
                  <option value="VN">Vietnam</option>
                  <option value="VI">Virgin Islands, US</option>
                  <option value="WF">Wallis and Futuna Islands</option>
                  <option value="EH">Western Sahara</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
                </select>
                <div class="invalid-feedback errMsg"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label>Address 1<sup>*</sup></label>
                <input type="text" name="address_address1" id="address_address1" class="form-control address_address1" value="{{ $address->address ? $address->address : ''}}">
                <div class="invalid-feedback errMsg"></div>
              </div>
              <div class="col-md-4 form-group">
                <label>Address 2</label>
                <input type="text" name="address_address2" id="address_address2" class="form-control address_address2">
                <div class="invalid-feedback errMsg"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 form-group">
                <label>City/Town<sup>*</sup></label>
                <input type="text" name="address_city" id="address_city" class="form-control address_city" value="{{ $address->city ? $address->city : ''}}">
                <div class="invalid-feedback errMsg"></div>
              </div>
              <div class="col-md-4 form-group">
                <label>County/State</label>
                <select class="form-control address_state" name="address_state" id="address_state">
                  <option value="NA">NA</option>
                </select>
                <div class="invalid-feedback errMsg"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label>Zip/Post code<sup>*</sup></label>
                <input type="text" name="address_zip_code" id="address_zip_code" class="form-control address_zip_code" value="{{ $address->zip_code ? $address->zip_code : ''}}">
                <div class="invalid-feedback errMsg"></div>
              </div>                            
            </div> 
            <input type="hidden" id="address_added" name="address_added" value=""> 
            <div class="row">              
                <div class="col-md-2 form-group" style="margin-right: 10px;">
                  <input type="button" name="confirm" class=" 
                  btn btn-dark confirm_address" value="Confirm Address">
                </div>
                <h4>or</h4>
                <div class="col-md-2 form-group">
                  <input type="button" name="confirm" class="btn btn-dark add_address" value="Add new Address">
                </div>                 
            </div>
            <hr class="mb-4">
            <br>
            <h3>My Companions</h3>
            <h3> <a href="#addCompanionModal" data-toggle="modal">Add
              new Companion</a></h3>
            <hr class="mb-4">

            <div id="companion_list" class="row">
              @foreach($companion as $data)
                @include('frontend.themes.EC.reservation.partials.whotravelling.companion-detail', ['companion' => $data])
              @endforeach
              {{-- <div class="display_add"></div> --}}
            </div>

            <div class="row">
              <div class="col-md-12 d-flex justify-content-between">
                <a href="/reservation/policies" class="btn btn-dark px-4">Go back</a>
                <a href="/reservation/paymentmethod" class="btn btn-dark px-5 validate-step">Next</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            @include('frontend.themes.EC.reservation.reservation-summary', ['suites' => $suites])
          </div>
      </div>
  </div>
</div>
</div>
<!-- Modal Add Payment-->
<div class="modal fade" id="addCompanionModal" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Companion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
                <div class="modal-body">                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>First name <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" class="form-control first_name" id="comapnion_f_name" placeholder="Enter your firsname">
                            <div class="invalid-feedback errMsg"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="last_name" id="comapnion_l_name" class="form-control last_name" placeholder="Enter your lastname">
                            <div class="invalid-feedback errMsg"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="text" name="email" id="comapnion_email" class="form-control email" placeholder="Enter your email">
                            <div class="invalid-feedback errMsg"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Phone<span class="text-danger">*</span></label>
                            <input type="text" name="phone" id="comapnion_phone" class="form-control phone" placeholder="Enter your phone">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Gender<span class="text-danger">*</span></label>
                            <select name="gender" class="form-control gender" id="gender">
                              <option value="Man">Man</option>
                              <option value="Woman">Woman</option>
                              <option value="Non-Binary">Non-Binary</option>
                              <option value="Cigender">Cigender</option>
                              <option value="Intersex">Intersex</option>
                              <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Prefered Language<span class="text-danger">*</span></label>
                            <select class="form-control preferred_language" name="preferred_language" id="language">
                              <option value="en" >English</option>
                              <option value="de">Deutsch</option>
                              <option value="es">Espanol</option>
                              <option value="fr">Francais</option>
                              <option value="it">Italiano</option>
                              <option value="nl">Nederlands</option>
                            </select>
                        </div>                         
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary font-weight-bold add_companion">Add Card</button>
                </div>
        </div>
    </div>
</div>
<!-- Popup Preferences -->
@endsection
