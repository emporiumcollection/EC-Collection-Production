<!DOCTYPE html>
<html lang="">

<head>
    <script src="{{ asset('js/validation.js')}}"></script>
    {{-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script> --}}
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emporium</title>

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Web Application Manifest -->
  <link rel="manifest" href="manifest.json">
  <link rel="stylesheet" href="{{ asset('assets/css/css/styles.css')}}">
</head>

<body class="auth-container">
    <div class="container-wrapper h-100">
        <div class="row h-100">
            <div class="col-md-8 bg-white">
                <div class="mb-4">
                    <a href="main-page.html" class="back-abs">
                        <i class="ico ico-back"></i>
                    </a>
                </div>
                <div class="auth-container-inner wizard" style="margin-top: 70px;">

                    <div class="mb-5">
                        <img src="images/logo.svg" alt="">
                    </div>
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item " role="presentation">
                            <a class="nav-link active" id="step4-tab" data-toggle="tab" href="#step4" role="tab"
                                aria-controls="step4" aria-selected="true">Sign up</a>
                        </li>
                        <li class="nav-item " role="presentation">
                            <a class="nav-link" href="user/login">Sign in</a>
                        </li>
                    </ul>
                    <br>
                    <br>                    
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item " role="presentation">
                            <a class="nav-link active" id="step1-tab" data-toggle="tab" href="#step1" role="tab"
                                aria-controls="step1" aria-selected="true">Account</a>
                        </li>

                        <li class="nav-item " role="presentation">
                            <a class="nav-link disabled" id="step2-tab" data-toggle="tab" href="#step2" role="tab"
                                aria-controls="step2" aria-selected="false">Credentials</a>
                        </li>
                        <li class="nav-item " role="presentation">
                            <a class="nav-link disabled" id="step3-tab" data-toggle="tab" href="#step3" role="tab"
                                aria-controls="step3" aria-selected="false">Confirmation</a>
                        </li>
                    </ul>
                    <div class="tab-pane fade show active" id="step4" role="tabpane4" aria-labelledby="step4-tab" data-step="4">
                        <form method="post" action="/invitecompanion"  name="form" id="form">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="step1" role="tabpanel"
                                    aria-labelledby="step1-tab">
                                    <div class="mt-5 mb-3">
                                        <h3 class="font-2">Create Account</h3>
                                        <p class="font-2">Already have an account : <a href="login.html"
                                                class="underline"><b>Sign
                                                    In</b></a></p>
                                    </div>
                                    <div class="form-group">
                                        <select name="user_type" id="sel-user-type" class="form-control user_type">
                                            <option value="-1">I am:</option>
                                            <option value="5">Luxury Hotel</option>
                                            <option value="2">Luxury Traveler</option>
                                            <option value="7">Bespoke Advertiser</option>
                                            <option value="14">Supplier</option>
                                        </select>
                                         <p style="color: red; display:none;" id="type_error"><strong>Please select User</strong></p>

                                    </div>
                                    <div class="form-group" id="laxury">
                                        <select id="laxury_traveller" name="membership_id" class="form-control">
                                           {{--  @foreach($packages as $package) --}}
                                           <option value="" selected>SELECT MEMBERSHIP</option>
                                            <option value="38">LIFESTYLE MEMBERSHIP</option>
                                            <option value="39">DEDICATED MEMBERSHIP</option>
                                            <option value="40">BESPOKE MEMBERSHIP</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="lifestyle">
                                        <a href="">View LIfestyle Membership Benefits</a>
                                    </div>
                                    
                                    <div class="form-group" id="dedicated">
                                     <a href="">View Dedicated Membership benefits</a>
                                    </div>

                                    <div class="form-group" id="bespoke">
                                        <a href=""> Bespoke Membership Benefits</a>                                               
                                    </div>

                                    <div>
                                        <label class="font-2 label-2">First name</label>
                                         <input type="text" name="first_name" id="first_name" class="form-control first" placeholder="First name">
                                        <p style="color: red; display: none;" id="first-name-error"><strong>Please enter First name</strong></p>  
                                        <p id="name_field"></p>  
                                    </div>
                                    <div class="form-group" style="padding-top: 10px;">
                                        <label class="font-2 label-2">Last name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control last_name" placeholder="Last name">
                                        <p style="color: red; display: none;" id="last-name-error"><strong>Please enter last name</strong></p>
                                    </div>
                                     <div>
                                        <label class="font-2 label-2">Username</label>
                                         <input type="text" name="username" id="username" class="form-control username" placeholder="Username">
                                        <p style="color: red; display: none;" id="username-error"><strong>Please Enter Username</strong></p>    
                                    </div>
                                    <div class="form-group">
                                        <label class="font-2 label-2">Mobile</label>
                                        <div class="d-flex">
                                            <div class="col-c-code">
                                                <input type="text" name="country_code" id="code" class="form-control" placeholder="+49">
                                            </div>
                                            <div class="m-nmbr">
                                                <input class="form-control txtmobileNumber"  name="txtmobileNumber" id="txtmobileNumber" type="tel" >
                                                <span id="valid-msg" class="hide" style="color: green;">✓ Valid</span>
                                                <span id="error-msg" class="hide" style="color: red;">Invalid number</span>
                                            </div>
                                        </div><p style="color: red; display: none;" id="mobile-error"><strong>Please enter Mobile Number</strong></p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-2 label-2">Email</label>
                                        <input type="text" name="email" id="email" class="form-control email" placeholder="Email Address">
                                        <p style="color: red; display: none;" id="email-error"><strong>Please provide your email</strong></p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-2 label-2">Password</label>
                                        <input type="password" name="password" id="password" class="form-control password" placeholder="Enter Password">
                                        <p style="color: red; display: none;" id="Password_error"><strong>Plaease provide password</strong></p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-2 label-2">Security Questions</label>
                                        <select name="question" id="question" class="form-control question">
                                            <option value="1" selected="">Select Questions</option>
                                        @foreach($questions as $question)
                                            <option class="form-control" value="{{ $question->id }}">{{ $question->question }}</option>
                                        @endforeach
                                        </select>
                                        <p style="color: red; display:none;" id="qua_error"><strong>Please select Security Question</strong></p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-2 label-2">Answer</label>
                                        <input type="text" name="answer" id="answer" class="form-control answer" placeholder="Enter your answer">
                                         <p style="color: red; display:none;" id="ans_error"><strong>Please Enter Security answer</strong></p>
                                    </div>
                                    <div class="text-right mt-5">
                                        <button type="button" id="nextButton" class="btn btn-outline-dark px-5 next-step">Confirm</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step2" role="tabpanel" aria-labelledby="step2-tab" data-step="2">
                                    <div class="mt-5 mb-3">
                                        <h3 class="font-2">Credentials</h3>
                                        <p class="font-2">Already have an account : <a href="login.html"
                                                class="underline"><b>Sign
                                                    In</b></a></p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-2 label-2">Nationality</label>
                                        <select name="nationality" class="nationality">
                                            <option value="afghan">Afghan</option>
                                            <option value="albanian">Albanian</option>
                                            <option value="algerian">Algerian</option>
                                            <option value="american">American</option>
                                            <option value="andorran">Andorran</option>
                                            <option value="angolan">Angolan</option>
                                            <option value="antiguans">Antiguans</option>
                                            <option value="argentinean">Argentinean</option>
                                            <option value="armenian">Armenian</option>
                                            <option value="australian">Australian</option>
                                            <option value="austrian">Austrian</option>
                                            <option value="azerbaijani">Azerbaijani</option>
                                            <option value="bahamian">Bahamian</option>
                                            <option value="bahraini">Bahraini</option>
                                            <option value="bangladeshi">Bangladeshi</option>
                                            <option value="barbadian">Barbadian</option>
                                            <option value="barbudans">Barbudans</option>
                                            <option value="batswana">Batswana</option>
                                            <option value="belarusian">Belarusian</option>
                                            <option value="belgian">Belgian</option>
                                            <option value="belizean">Belizean</option>
                                            <option value="beninese">Beninese</option>
                                            <option value="bhutanese">Bhutanese</option>
                                            <option value="bolivian">Bolivian</option>
                                            <option value="bosnian">Bosnian</option>
                                            <option value="brazilian">Brazilian</option>
                                            <option value="british">British</option>
                                            <option value="bruneian">Bruneian</option>
                                            <option value="bulgarian">Bulgarian</option>
                                            <option value="burkinabe">Burkinabe</option>
                                            <option value="burmese">Burmese</option>
                                            <option value="burundian">Burundian</option>
                                            <option value="cambodian">Cambodian</option>
                                            <option value="cameroonian">Cameroonian</option>
                                            <option value="canadian">Canadian</option>
                                            <option value="cape verdean">Cape Verdean</option>
                                            <option value="central african">Central African</option>
                                            <option value="chadian">Chadian</option>
                                            <option value="chilean">Chilean</option>
                                            <option value="chinese">Chinese</option>
                                            <option value="colombian">Colombian</option>
                                            <option value="comoran">Comoran</option>
                                            <option value="congolese">Congolese</option>
                                            <option value="costa rican">Costa Rican</option>
                                            <option value="croatian">Croatian</option>
                                            <option value="cuban">Cuban</option>
                                            <option value="cypriot">Cypriot</option>
                                            <option value="czech">Czech</option>
                                            <option value="danish">Danish</option>
                                            <option value="djibouti">Djibouti</option>
                                            <option value="dominican">Dominican</option>
                                            <option value="dutch">Dutch</option>
                                            <option value="east timorese">East Timorese</option>
                                            <option value="ecuadorean">Ecuadorean</option>
                                            <option value="egyptian">Egyptian</option>
                                            <option value="emirian">Emirian</option>
                                            <option value="equatorial guinean">Equatorial Guinean</option>
                                            <option value="eritrean">Eritrean</option>
                                            <option value="estonian">Estonian</option>
                                            <option value="ethiopian">Ethiopian</option>
                                            <option value="fijian">Fijian</option>
                                            <option value="filipino">Filipino</option>
                                            <option value="finnish">Finnish</option>
                                            <option value="french">French</option>
                                            <option value="gabonese">Gabonese</option>
                                            <option value="gambian">Gambian</option>
                                            <option value="georgian">Georgian</option>
                                            <option value="german">German</option>
                                            <option value="ghanaian">Ghanaian</option>
                                            <option value="greek">Greek</option>
                                            <option value="grenadian">Grenadian</option>
                                            <option value="guatemalan">Guatemalan</option>
                                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                                            <option value="guinean">Guinean</option>
                                            <option value="guyanese">Guyanese</option>
                                            <option value="haitian">Haitian</option>
                                            <option value="herzegovinian">Herzegovinian</option>
                                            <option value="honduran">Honduran</option>
                                            <option value="hungarian">Hungarian</option>
                                            <option value="icelander">Icelander</option>
                                            <option value="indian">Indian</option>
                                            <option value="indonesian">Indonesian</option>
                                            <option value="iranian">Iranian</option>
                                            <option value="iraqi">Iraqi</option>
                                            <option value="irish">Irish</option>
                                            <option value="israeli">Israeli</option>
                                            <option value="italian">Italian</option>
                                            <option value="ivorian">Ivorian</option>
                                            <option value="jamaican">Jamaican</option>
                                            <option value="japanese">Japanese</option>
                                            <option value="jordanian">Jordanian</option>
                                            <option value="kazakhstani">Kazakhstani</option>
                                            <option value="kenyan">Kenyan</option>
                                            <option value="kittian and nevisian">Kittian and Nevisian</option>
                                            <option value="kuwaiti">Kuwaiti</option>
                                            <option value="kyrgyz">Kyrgyz</option>
                                            <option value="laotian">Laotian</option>
                                            <option value="latvian">Latvian</option>
                                            <option value="lebanese">Lebanese</option>
                                            <option value="liberian">Liberian</option>
                                            <option value="libyan">Libyan</option>
                                            <option value="liechtensteiner">Liechtensteiner</option>
                                            <option value="lithuanian">Lithuanian</option>
                                            <option value="luxembourger">Luxembourger</option>
                                            <option value="macedonian">Macedonian</option>
                                            <option value="malagasy">Malagasy</option>
                                            <option value="malawian">Malawian</option>
                                            <option value="malaysian">Malaysian</option>
                                            <option value="maldivan">Maldivan</option>
                                            <option value="malian">Malian</option>
                                            <option value="maltese">Maltese</option>
                                            <option value="marshallese">Marshallese</option>
                                            <option value="mauritanian">Mauritanian</option>
                                            <option value="mauritian">Mauritian</option>
                                            <option value="mexican">Mexican</option>
                                            <option value="micronesian">Micronesian</option>
                                            <option value="moldovan">Moldovan</option>
                                            <option value="monacan">Monacan</option>
                                            <option value="mongolian">Mongolian</option>
                                            <option value="moroccan">Moroccan</option>
                                            <option value="mosotho">Mosotho</option>
                                            <option value="motswana">Motswana</option>
                                            <option value="mozambican">Mozambican</option>
                                            <option value="namibian">Namibian</option>
                                            <option value="nauruan">Nauruan</option>
                                            <option value="nepalese">Nepalese</option>
                                            <option value="new zealander">New Zealander</option>
                                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                                            <option value="nicaraguan">Nicaraguan</option>
                                            <option value="nigerien">Nigerien</option>
                                            <option value="north korean">North Korean</option>
                                            <option value="northern irish">Northern Irish</option>
                                            <option value="norwegian">Norwegian</option>
                                            <option value="omani">Omani</option>
                                            <option value="pakistani">Pakistani</option>
                                            <option value="palauan">Palauan</option>
                                            <option value="panamanian">Panamanian</option>
                                            <option value="papua new guinean">Papua New Guinean</option>
                                            <option value="paraguayan">Paraguayan</option>
                                            <option value="peruvian">Peruvian</option>
                                            <option value="polish">Polish</option>
                                            <option value="portuguese">Portuguese</option>
                                            <option value="qatari">Qatari</option>
                                            <option value="romanian">Romanian</option>
                                            <option value="russian">Russian</option>
                                            <option value="rwandan">Rwandan</option>
                                            <option value="saint lucian">Saint Lucian</option>
                                            <option value="salvadoran">Salvadoran</option>
                                            <option value="samoan">Samoan</option>
                                            <option value="san marinese">San Marinese</option>
                                            <option value="sao tomean">Sao Tomean</option>
                                            <option value="saudi">Saudi</option>
                                            <option value="scottish">Scottish</option>
                                            <option value="senegalese">Senegalese</option>
                                            <option value="serbian">Serbian</option>
                                            <option value="seychellois">Seychellois</option>
                                            <option value="sierra leonean">Sierra Leonean</option>
                                            <option value="singaporean">Singaporean</option>
                                            <option value="slovakian">Slovakian</option>
                                            <option value="slovenian">Slovenian</option>
                                            <option value="solomon islander">Solomon Islander</option>
                                            <option value="somali">Somali</option>
                                            <option value="south african">South African</option>
                                            <option value="south korean">South Korean</option>
                                            <option value="spanish">Spanish</option>
                                            <option value="sri lankan">Sri Lankan</option>
                                            <option value="sudanese">Sudanese</option>
                                            <option value="surinamer">Surinamer</option>
                                            <option value="swazi">Swazi</option>
                                            <option value="swedish">Swedish</option>
                                            <option value="swiss">Swiss</option>
                                            <option value="syrian">Syrian</option>
                                            <option value="taiwanese">Taiwanese</option>
                                            <option value="tajik">Tajik</option>
                                            <option value="tanzanian">Tanzanian</option>
                                            <option value="thai">Thai</option>
                                            <option value="togolese">Togolese</option>
                                            <option value="tongan">Tongan</option>
                                            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                            <option value="tunisian">Tunisian</option>
                                            <option value="turkish">Turkish</option>
                                            <option value="tuvaluan">Tuvaluan</option>
                                            <option value="ugandan">Ugandan</option>
                                            <option value="ukrainian">Ukrainian</option>
                                            <option value="uruguayan">Uruguayan</option>
                                            <option value="uzbekistani">Uzbekistani</option>
                                            <option value="venezuelan">Venezuelan</option>
                                            <option value="vietnamese">Vietnamese</option>
                                            <option value="welsh">Welsh</option>
                                            <option value="yemenite">Yemenite</option>
                                            <option value="zambian">Zambian</option>
                                            <option value="zimbabwean">Zimbabwean</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-2 label-2">Language Preference</label>
                                        <select class="lang" name="language">
                                            <option value="english">English</option>
                                            <option value="deutsch">Deutsch</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <a href="https://www.iubenda.com/privacy-policy/70156957"
                                            class="iubenda-white iubenda-noiframe iubenda-embed iub-legal-only iubenda-noiframe "
                                            title="Privacy Policy ">Privacy Policy</a>
                                        <script
                                            type="text/javascript">(function (w, d) { var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s, tag); }; if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; } })(window, document);</script>

                                        <a href="https://www.iubenda.com/privacy-policy/70156957/cookie-policy"
                                            class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe "
                                            title="Cookie Policy ">Cookie Policy</a>
                                        <script
                                            type="text/javascript">(function (w, d) { var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s, tag); }; if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; } })(window, document);</script>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="terms" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">
                                            I agree to the Emporium-Collection Terms & Conditions and have read the Privacy
                                            Policy.
                                        </label>
                                        <p style="color: red; display: none" id="term"><strong>Please select role</strong></p>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" name="a" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">
                                            I agree that my personal data will be collected and stored and used
                                            electronically to help the reservation agents with specialized offers pertaining
                                            to my travel preferences. Note: You may revoke your consent at any time by
                                            e-mail to info@emporium-collection.com or from your settings section in your
                                            account admin.
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">
                                            Emporium-Collection Privacy Policy <br>
                                            I have read and agree to the Emporium-Collection Privacy Policy.
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">
                                            I Agree to the Emporium-Collection Privacy &amp; Data Protection Policy
                                        </label>
                                    </div>
                                    <div class="text-right mt-5">
                                        <button type="button" class="btn btn-outline-dark px-5  clickconfirm">Confirm</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step3" role="tabpanel" aria-labelledby="step3-tab">
                                    <div class="mt-5 mb-3">
                                        <h3 class="font-2">Account Confirmation</h3>
                                        <p>
                                            To confirm your account and assure your privacy we have send you a SMS to the
                                            Mobile number entered previously.
                                        </p>
                                        <p>
                                            Please enter the CODE to confirm your registration.
                                        </p>
                                        <div class="d-flex code-input">
                                            <input type="text" name="code[]" class="form-control mr-1" maxlength="1">
                                            <input type="text" name="code[]" class="form-control mr-1" maxlength="1">
                                            <input type="text" name="code[]" class="form-control mr-1" maxlength="1">
                                            <input type="text" name="code[]" class="form-control mr-1" maxlength="1">
                                            <input type="text" name="code[]" class="form-control mr-1" maxlength="1">
                                            <input type="text" name="code[]" class="form-control mr-1" maxlength="1">
                                        </div>
                                        <p style="color: red; display: none" id="onetimepass"><strong>Please Enter Your OTP</strong></p>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a href="#" class="btn btn-outline-dark">Send new code</a>
                                        </div>
                                        <div class="col-6 text-right">
                                            <button type="submit" class="btn btn-outline-dark px-5 thirdwizard">Confirm</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>                                        
                </div>
            </div>
        </div>
    </div>
</div></div>
<script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/sticky-sidebar.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/leaflet.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/jqueryui/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/daterangepicker.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/jquery.mousewheel.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/simpleLightbox.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/mediaelement-and-player.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.rangecalendar.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/core.js')}}"></script>
<script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/md5.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/plugin/fullcalendar/core/main.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/fullcalendar/daygrid/main.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/select2/select2.full.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/wow.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.smartWizard.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/lightbox/js/lightgallery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/lightbox/js/lg-thumbnail.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/lightbox/js/lg-share.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/lightbox/js/lg-video.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/color-thief.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/datepick/jquery.plugin.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/datepick/jquery.datepick.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/plugin/mapbox-gl.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/all.js')}}"></script>
<script src="https://www.emporium-voyage.com/sximo/assets/js/intlTelInput.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){    
            $("#lifestyle").hide();
            $("#dedicated").hide();
            $("#bespoke").hide();
            $("#laxury_traveller").change(function(){
                $("select option:selected").each(function(){
                    if($(this).attr("value")=="38"){
                        $("#dedicated").hide();
                        $("#bespoke").hide();
                        $("#lifestyle").show();                        
                    }
                    if($(this).attr("value")=="39"){
                        $("#bespoke").hide();
                        $("#lifestyle").hide();                        
                        $("#dedicated").show();
                    }
                    if($(this).attr("value")=="40"){
                        $("#lifestyle").hide();                        
                        $("#dedicated").hide();
                        $("#bespoke").show();
                    }
                });
            }).change();
            });

            $(".first").focusin(function(){
                $("#first-name-error").hide();
            });
            $(".username").focusin(function(){
                $("#username-error").hide();    
            });
            $(".last_name").focusin(function(){
                $("#last-name-error").hide();
            });
            $(".txtmobileNumber").focusin(function(){
                $("#mobile-error").hide();
            });
            $(".password").focusin(function(){
                $("#Password_error").hide();
            });
            $(".email").focusin(function(){
                $("#email-error").hide();
            });
            $(".question").focusin(function(){
                $("#qua_error").hide();
            });
            $(".answer").focusin(function(){
                $("#ans_error").hide();
            });

        $(document).ready(function() {
        $(".next-step").click(function (e) { 
            $("input").focusout(function() { 
                if($(this).val()=='') { 
                    $(this).css('border', 'solid 2px red');
                }
                else {
                    $(this).css('border', 'solid 2px green');     
                }    
            }) .trigger("focusout");
        });
        });  
        $(document).ready(function () {
            //Wizard
            $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
                var $target = $(e.target);
                if ($target.hasClass('disabled')) {
                    return false;
                }
            });

            $(".nav-item").click(function (e) {
                var $active = $('.wizard .nav li a.active');
                $active.closest('.nav-item').next().find('.nav-link').removeClass('disabled');
                nextTab($active);
            });

            $(".next-step").click(function (e) {
                if (validate() == false) {
                    var $active = $('.wizard .nav li a.active');
                    $active.closest('.nav-item').next().find('.nav-link');
                    nextTab($active);
                }
                if (validate() == true) {
                    var $active = $('.wizard .nav li a.active');
                    $active.closest('.nav-item').next().find('.nav-link').removeClass('disabled');
                    nextTab($active);
                }
            });


            $(".clickconfirm").click(function (e) {
                if (SecondWizardValidate() == false) {
                    var $active = $('.wizard .nav li a.active');
                    $active.closest('.nav-item').next().find('.nav-link');
                    nextTab($active);
                }
                if (SecondWizardValidate() == true) {
                    var $active = $('.wizard .nav li a.active');
                    $active.closest('.nav-item').next().find('.nav-link').removeClass('disabled');
                    nextTab($active);
                }
            });
            $(".thirdwizard").click(function (e) {
                if (ThirdWizardValidate() == false) {
                    var $active = $('.wizard .nav li a.active');
                    $active.closest('.nav-item').next().find('.nav-link');
                    nextTab($active);
                }
                // if (ThirdWizardValidate() == true) {
                //     var $active = $('.wizard .nav li a.active');
                //     $active.closest('.nav-item').next().find('.nav-link').removeClass('disabled');
                //     nextTab($active);
                // }
            });

            var telInput = $("#txtmobileNumber"),
                errorMsg = $("#error-msg"),
                validMsg = $("#valid-msg");
            // initialise plugin
            telInput.intlTelInput({
                initialCountry: "auto",
                geoIpLookup: function(callback) {
                    $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                      var countryCode = (resp && resp.country) ? resp.country : "";
                      callback(countryCode);
                    });
                },
                utilsScript: "{{ asset('sximo/assets/js/utils.js')}}"
            });

            var reset = function () {
                telInput.removeClass("error");
                errorMsg.addClass("hide");
                validMsg.addClass("hide");
            };

            // on blur: validate
            telInput.blur(function () {
                reset();
                if ($.trim(telInput.val())) {
                    if (telInput.intlTelInput("isValidNumber")) {
                        validMsg.removeClass("hide");
                    } else {
                        telInput.addClass("error");
                        errorMsg.removeClass("hide");
                    }
                }
            });

            // on keyup / change flag: reset
            telInput.on("keyup change", reset);
        });

        function nextTab(elem) {
            $(elem).closest('.nav-item').next().find('a[data-toggle="tab"]').click();
        }
        function prevTab(elem) {
            $(elem).closest('.nav-item').prev().find('a[data-toggle="tab"]').click();
        }

        $('.nationality').select2({
            theme: "bootstrap",
        });
        $('.lang').select2({
            theme: "bootstrap",
            minimumResultsForSearch: -1

        });
        $(".code-input input").keyup(function () {
            if (this.value.length == this.maxLength) {
                $(this).next('.code-input input').focus();
            } else if (this.value.length < 1) {
                $(this).prev('.code-input input').focus();
            }
        });

        $(document).on('click','.clickconfirm',function(e) {
            var mobile_number = $("#txtmobileNumber").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var code = $("#code").val();
            $.ajax({
                type: "post",
                url: "sendSMS",
                data: { mobile_number :mobile_number ,
                        email :email,
                        code :code,
                        password :password },
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                success: function(dataResult){
                    console.log(dataResult);
                }
            });
        });

        $(document).ready(function(){
            $("#laxury").hide();
            $("#sel-user-type").change(function(){
                $("select option:selected").each(function(){
                    $("#type_error").hide();
                    if($(this).attr("value")=="2"){
                        $("#laxury").show();
                    }
                    if($(this).attr("value")=="-1"){
                        $("#laxury").hide();
                    }
                    if($(this).attr("value")=="5"){
                        $("#laxury").hide();
                    }
                    if($(this).attr("value")=="7"){
                        $("#laxury").hide();
                    }
                    if($(this).attr("value")=="14"){
                        $("#laxury").hide();
                    }
                });
            }).change();
            });

         $(document).ready(function(){
            $("#question").change(function(){
                $("select option:selected").each(function(){
                    $("#qua_error").hide();
                });
            }).change();
            });

    </script>
</body>
    
</html>