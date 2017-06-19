<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Design Locations</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('sximo/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('sximo/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('sximo/assets/css/daterangepicker.min.css')}}">
        <link href="{{ asset('sximo/assets/css/jquery-ui.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('sximo/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('sximo/assets/css/book-now-page-style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('sximo/assets/css/m-popup.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('sximo/assets/css/landing-page-accordian-style.css')}}" rel="stylesheet" type="text/css"/>

        <link href="{{ asset('sximo/assets/css/image-slider.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('sximo/assets/css/m_slider.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('sximo/assets/css/property.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('sximo/assets/css/landing-new.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('sximo/assets/css/filters_grid.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('sximo/assets/css/filter-bar.css')}}" rel="stylesheet" type="text/css"/>

        <link href="{{ asset('sximo/assets/css/theme.css')}}" rel="stylesheet" type="text/css" media="all">
        <script src="{{ asset('sximo/assets/js/jquery-2.1.0.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('sximo/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('sximo/assets/js/jquery-ui.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('sximo/assets/js/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('sximo/assets/js/jquery.daterangepicker.min.js')}}"></script>
        <script src="{{ asset('sximo/assets/js/book-now-page-style.js')}}" type="text/javascript"></script>
        <script src="{{ asset('sximo/assets/js/m-popup.js')}}" type="text/javascript"></script>

        <script src="{{ asset('sximo/assets/js/image-slider.js')}}" type="text/javascript"></script>
        <script src="{{ asset('sximo/assets/js/testimoniales.jss')}}" type="text/javascript"></script>
        <script src="{{ asset('sximo/assets/js/m_slider.js')}}" type="text/javascript"></script>
        <script src="{{ asset('sximo/assets/js/open-search.js')}}" type="text/javascript"></script>
    </head>
    <body id="main">
        <!--Desktop Version-->
        <div class="hidden-xs hidden-sm">
            <div class="wrapper">
                <div class="container-fluid"> 
                    <div class="row">
                        <header >
                            <div class="container-fluid logo-padding-left editorial-logo-align ">
                                <div class="col-md-12-">
                                    <p><a class="logo-d" href="{{url()}}">D</a></p>
                                </div>
                                <div class="col-md-12-">
                                    <h2 class="menu-text-align">Home</h2>
                                </div>
                                <div class="col-md-12- menu">
                                    <a href="#"><img class="menu-button" src="{{ asset('sximo/assets/images/menu.png')}}" alt=""/></a>
                                    <ul style="display: none;">
                                        <li>
                                            <a href="{{URL::to('luxurytravel/Hotel')}}">HOTELS</a>
                                        </li>
                                        <li>
                                            <a href="#">EXPERIENCE</a>
                                        </li>
                                        <li>
                                            <a href="#">MAGAZINE</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::to('luxurytravel/Villas')}}">VILLAS</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::to('luxurytravel/Yachts')}}">YACHTS</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12-">
                                    <div class="row">
                                        <a href="#" class="book-button open-book-now-page">BOOK</a>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!--Main Page-->
                        @if(!empty($slider)) 
                        <div class="col-md-10 main-page-landing">
                            <div class="row">
                                <!--Slider start here-->
                                <div class="m_slider editorial_m_slider_landing ">
                                    <ul>
                                        @foreach($slider as $key => $slider_row)
                                        <li class="{{($key == 0)? 'active' : ''}}">
                                            <div class="image editorial-image">
                                                <img src="{{url()}}/uploads/slider_images/{{$slider_row->slider_img}}" alt=""/>
                                            </div>
                                            <div class="editorial-text">
                                                <div class="editor-picks-small-text">{{$slider_row->slider_title}}</div>
                                                <div class="description-bold-text">{{$slider_row->slider_description}}</div>
                                                <!--                                                <div class="banner-text-border-bottom"></div>
                                                                                                <div><a href="{{$slider_row->slider_link}}" class="banner-border-bottom-text">Explore the hotel</a></div>-->
                                                <!--end slide -->
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="editorial-arrows-container arrows-container">
                                        <a class="editorial-previous-arrow previous-arrow" href="#">
                                            <img class="banner-arrow-bg" src="{{ asset('sximo/assets/images/editorial-right-arrow.png')}}" alt=""/>
                                        </a>
                                        <a class="editorial-next-arrow next-arrow" href="#">
                                            <img  class="banner-arrow-bg" src="{{ asset('sximo/assets/images/editorial-left-arrow.png')}}" alt=""/>
                                        </a>
                                    </div>
                                </div>
                                <div class="landing-page-footer-section">
                                    <ul class="landing-page-footer-menu-style">
                                        <li><a href="#">Members Portal</a></li>
                                        <li><a href="#">Partnerships</a></li>
                                        <li><a href="#">Legal</a></li>
                                    </ul>
                                </div>
                                <!--Slider end here-->
                            </div>
                        </div>
                        @endif
                        <!--Main Page End-->
                        <!--Sidebar-->
                        <div class="col-md-2">
                            <div class="row">
                                <div class="right-menus right-menu-sidebar">
                                    <div class="hotels-logo">
                                        <img alt="" src="{{ asset('sximo/assets/images/design-location-logo.png')}}" class="img-responsive">
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#" class="book-button open-search-page">Search Our Collection</a>
                                        </li>
                                        <li>
                                            <a href="#" class="book-button open-experience-page">Choose Your Experience</a>
                                        </li>
                                        <li>
                                            <a href="http://design-locations.biz/home">Get Inspired</a>
                                        </li>
                                        <li>
                                            <a href="#" class="book-button open-date-page">Search By Date</a>
                                        </li>
                                        <li>
                                            <a href="#" class="book-button open-destination-page">Select Your Destination</a>
                                        </li>
                                        <li>
                                            <a href="#" class="book-button open-personalized-page">Personalized Service</a>
                                        </li>
                                        <li>
                                            <a href="#" class="book-button open-about-page">About</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!--Sidebar End-->
                </div>
            </div>

            <!--Serach Page HTML-->
            <div class="search-page">
                <div class="open-search-html">
                    <div><a class="close-btn close-btn-align" href="#">&times;</a></div>
                    <div class="row search-page-box">
                        <div class="col-md-6">
                            <div class="left-serach">
                                <h2>Our Collection</h2>
                                <div class="serach-page-menu">
                                    <ul>
                                        <li><a href="{{URL::to('luxurytravel/Hotel')}}">Hotels</a></li>
                                        <li><a href="{{URL::to('luxurytravel/Villas')}}">Villas</a></li>
                                        <li><a href="{{URL::to('luxurytravel/Safari Lodges')}}">Safari</a></li>
                                        <li><a href="{{URL::to('luxurytravel/Spas')}}">Spa's</a></li>
                                        <li><a href="{{URL::to('luxurytravel/Yachts')}}">Yachts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-serach">
                                <img class="img-responsive" src="{{ asset('sximo/assets/images/design-location-logo.png')}}" alt="design-location-logo" />
                                <!--Search form start-->
                                <form autocomplete="off" method="get" id="searchform-navbar" class="searchform-navbar" action="{{URL::to('search')}}">
                                    <input  class="bh-search-input typeahead search-navbar search-box" name="s" id="search-navbar" placeholder="Enter Your Hotel or Destination" type="text">
                                </form>
                                <!--Search form end-->
                                <!--                                <form autocomplete="off" method="get" id="searchform-navbar--" class="searchform-navbar search-box" action="{{URL::to('search')}}">
                                                                    <input  class="bh-search-input- typeahead- search-navbar-" name="s" id="search-navbar--" type="text" placeholder="Enter Your Hotel or Destination">
                                                                    <div class="search-suggeations-main">
                                                                        <ul>
                                                                            <li><a href="#">Design Locations Suggestion 1</a></li>
                                                                            <li><a href="#">Design Locations Suggestion 2</a></li>
                                                                            <li><a href="#">Design Locations Suggestion 3</a></li>
                                                                            <li><a href="#">Design Locations Suggestion 4</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </form>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Serach Page HTML-->
            <!--Experience Page Html-->
            <div class="experience-page">
                <div class="open-experience-html des-holiday-sec-align">
                    <div><a class="close-btn-experience close-btn-align" href="#">&times;</a></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-logo-center">
                        <a href="#"><img class="img-responsive" src="{{ asset('sximo/assets/images/design-location-logo-new.png')}}"/></a>
                    </div>
                    <h2>Select Your Experience</h2>
                    <div class="choose-experience-center-align">
                        <div class="width-100 holiday-type-image-align ">
                            <div class="width-20">
                                <img class="img-responsive" src="{{ asset('sximo/assets/images/BeachHotels2.jpg')}}" alt=""/>
                                <a href="{{URL::to('search?s=Beach Hotels')}}"><h3 class="hover-tittles">Go Design Locations</h3></a>
                            </div>
                            <div class="width-20">
                                <img class="img-responsive" src="{{ asset('sximo/assets/images/GoGreen2.jpg')}}" alt=""/>
                                <a href="{{URL::to('search?s=Green Properties')}}"><h3 class="hover-tittles">Go Green Hotels</h3></a>
                            </div>
                            <div class="width-20">
                                <img class="img-responsive" src="{{ asset('sximo/assets/images/GoUrban2.jpg')}}" alt=""/>
                                <a href="{{URL::to('search?s=Go Urban Hotels')}}"><h3 class="hover-tittles">Go Urban Hotels</h3></a>
                            </div>
                            <div class="width-20">
                                <img class="img-responsive" src="{{ asset('sximo/assets/images/InfinityPools2.jpg')}}" alt=""/>
                                <a href="{{URL::to('search?s=Infinity Pools')}}"><h3 class="hover-tittles">Go Infinity Pools</h3></a>
                            </div>
                            <div class="width-20">
                                <img class="img-responsive" src="{{ asset('sximo/assets/images/WellnessHotels3.png')}}" alt=""/>
                                <a href="{{URL::to('search?s=Spa & Wellness Hotels')}}"><h3 class="hover-tittles">Go Spa & Wellness Hotels</h3></a>
                            </div>
                            <div class="width-20">
                                <img class="img-responsive" src="{{ asset('sximo/assets/images/MountainAndSki2.jpg')}}" alt=""/>
                                <a href="{{URL::to('search?s=Mountain  & Ski  Resorts')}}"><h3 class="hover-tittles">Go Mountains and Skin Resorts</h3></a>
                            </div>
                            <div class="width-20">
                                <img class="img-responsive" src="{{ asset('sximo/assets/images/YogaHotels3.jpg')}}" alt=""/>
                                <a href="{{URL::to('search?s=Yoga Hotels')}}"><h3 class="hover-tittles">Discover Yoga Hotels</h3></a>
                            </div>
                            <div class="width-20">
                                <img class="img-responsive" src="{{ asset('sximo/assets/images/CulinaryDelights.jpg')}}" alt=""/>
                                <a href="{{URL::to('search?s=Culinary Delights')}}"><h3 class="hover-tittles">Discover culinary Delight Hotels</h3></a>
                            </div>
                            <div class="width-20">
                                <img class="img-responsive" src="{{ asset('sximo/assets/images/FamilyFriendly-1.jpg')}}" alt=""/>
                                <a href="{{URL::to('search?s=Family Friendly')}}"><h3 class="hover-tittles">Discover Family Friendly Hotels</h3></a>
                            </div>
                            <div class="width-20">
                                <img class="img-responsive" src="{{ asset('sximo/assets/images/UnusualAdventures.jpg')}}" alt=""/>
                                <a href="{{URL::to('search?s=Unusual Adventure Hotels')}}"><h3 class="hover-tittles">Unusual Adventure Hotels</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Experience Page Html-->
            <!--Destination Page HTMl-->
            <div class="destination-page">
                <div class="open-destination-html">
                    <div><a class="close-btn-destination close-btn-align" href="#">&times;</a></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-logo-center">
                        <a href="#"><img class="img-responsive" src="{{ asset('sximo/assets/images/design-location-logo-new.png')}}"/></a>
                    </div>
                    <h2>Select Your Destination</h2>
                    <div class="panel-group-" id="accordion1">
                        @if(!empty($ourdesitnation))
                        @foreach($ourdesitnation as $destination)
                        <div class="panel panel-default  destination-sub-menues">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse-inner{{$destination['maincat']->id}}">
                                <div class="destination-panel-heading">
                                    <h4 class="panel-title menu-text accordion ">
                                        {{$destination['maincat']->category_name}}
                                    </h4>
                                </div>
                            </a>
                            <div id="collapse-inner{{$destination['maincat']->id}}" class="panel-collapse collapse ">
                                <div class="panel-body">
                                    <ul class="where-box-sub-menu">
                                        @if (array_key_exists("child",$destination))
                                        @foreach($destination['child'] as $childDest)
                                        <li><a href="{{URL::to('search?s='.$childDest->category_name)}}">{{$childDest->category_name}}</a></li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <!--Destination Page HTMl End Here-->
            <!--Personalized Page Html-->
            <div class="personalized-page">
                <div class="open-personalized-html">
                    <div><a class="close-btn-personalized close-btn-align" href="#">&times;</a></div>
                    <div class="panel-body des-about-panel-body-style">
                        <div class="col-md-6 about-us-sec">
                            <div class="row">
                                <div class="about-res-image" style="background-image: url('{{ asset('sximo/assets/images/room.png')}}')"></div>
                            </div>
                        </div>
                        <div class="col-md-6 about-us-side-text">
                            <div class="border-box">
                                <a class="video-popup-btn" data-popup-id="register-popup" href="#">Register</a>
                            </div>
                        </div>
                    </div>
                    <!--                    <div class="panel-body des-about-panel-body-style">
                                            <div class="col-md-12">
                                                <img class="img-responsive-" src="{{ asset('sximo/assets/images/JUNIOR-SUITES.png')}}" alt="">
                                                <div class="register-here-overlay">
                                                    <a class="video-popup-btn" data-popup-id="register-popup" href="#">Register</a>
                                                </div>
                                            </div>
                                        </div>-->
                </div>
            </div>
            <!--Personalized Page Html End Here-->
            <!--Date Page Start Here-->
            <div class="book-now-page date-page">
                <div class="book-now-page-content open-date-html">
                    <div><a class="close-btn-date close-btn-align" href="#">&times;</a></div>
                    <div class="headings">
                        <h2>Design Location is your ideal, vogue vacation planner!</h2>
                        <p>With over 300 posh properties, elite spas and exquisite yachts huddled in its cocoon, Design Locations ensure the ultimate luxury experience</p>
                    </div>
                    <ul class="dates" id="search-by-date">
                        <li>
                            <div class="heading">Arrive</div>
                            <input id="date-range-arrive" size="20" value="12-01-2017">
                        </li>
                        <li>
                            <div class="heading">Departure</div>
                            <input id="date-range-destination" size="20" value="">
                        </li>
                    </ul>
                    <ul class="dates">
                        <li>
                            <div class="heading">Adults</div>
                            <select>
                                <option>01</option>
                                <option selected="">02</option>
                                <option>03</option>
                            </select>
                        </li>
                        <li>
                            <div class="heading">Children</div>
                            <select>
                                <option>00</option>
                                <option>01</option>
                                <option>02</option>
                            </select>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="submit-btn">
                        <a href="#">BOOK NOW</a>
                    </div>
                    <div class="view-modify-cancel-booking">
                        <a href="#">View, Modify or Cancel your Booking</a>
                    </div>
                    <ul class="booking-page-footer-section">
                        <li>
                            <a href="#" target="_blank">
                                <span>Join the worlds leading luxury club</span>
                                <h6 class="center">Enjoy exclusive members only benefits</h6>
                            </a>
                            <div class="white-border-bottom"></div>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <span>Spa Treatment</span>
                                <h6 class="center">Book</h6>
                            </a>
                            <div class="white-border-bottom"></div>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <span>View or Modify Reserveration</span>
                                <h6 class="center">Login to Support Center</h6>
                            </a>
                            <div class="white-border-bottom"></div>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--Date Page End Here-->
            <!--about Page Html-->
            <div class="about-page">
                <div class="open-about-html">
                    <div><a class="close-btn-about close-btn-align" href="#">&times;</a></div>
                    <div class="panel-body des-about-panel-body-style">
                        <div class="col-md-6 about-us-sec">
                            <div class="row">
                                <div class="about-res-image" style="background-image: url('{{ asset('sximo/assets/images/MountainAndSki2.jpg')}}')"></div>
                            </div>
                        </div>
                        <div class="col-md-6 about-us-side-text">
                            <div class="border-box">
                                <h2>Design Locations</h2>
                                <p>
                                    From the posh, sun-soaked beaches along the
                                    Indian Ocean to the epoch heights of the Himalayas,
                                    Design Location is your ideal, vogue vacation planner!
                                    With over 300 posh properties and elite spas huddled in its cocoon,
                                    Design Locations ensure the ultimate luxury experience. Our expertise lies in our utmost diligence to provide our beau monde customers with an exotic experience they will relish forever. If you are looking for glamour, grandeur and some sinful indulgence in the lap of luxury, you have come to the right place!
                                </p>
                                <a href="#" class="about-read-more-button">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--about Page Html End Here-->
        </div>
        <!--<Desktop Version End Here-->
        <div class="page-bg-image hidden-md hidden-lg"> 
            <div class="wrapper ">
                <div class="container-fluid">
                    <div class="row">
                        <header>
                            <div class="landing-mobile-top-header">
                                <div class="col-md-2 col-xs-2 col-sm-2">
                                    <div class="row">
                                        <div class="mobile-logo-d">D</div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-2 col-sm-2">
                                    <div class="row">
                                        <div class="row res-margin-align">
                                            <div id="mySidenavpost" class="sidenavpost">
                                                <div class="filter-width">
                                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNavpost()">&times;</a>
                                                    <div class="design-locations-logo">
                                                        <a href="index.html"> <img class="img-responsive" src="{{ asset('sximo/assets/images/design-location-logo.png')}}" alt=""></a>

                                                    </div>
                                                    <div class="design-locations-logo">
                                                        <form autocomplete="off" method="get" id="searchform-navbar" class="searchform-navbar" action="{{URL::to('search')}}">
                                                            <input  class="bh-search-input typeahead search-navbar" name="s" id="search-navbar" placeholder="SEARCH" type="text">
                                                        </form>
                                                    </div>
                                                    <div class="panel-group" id="accordion">
                                                        <div class="panel panel-default custom-post-panel">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="heading-stying collapsed">
                                                                <div class="panel-heading custom-heading">
                                                                    Experience
                                                                </div>
                                                            </a>
                                                            <div id="collapse1" class="panel-collapse collapse">
                                                                <div class="panel-body custom-panel-body">
                                                                    <div class="dl-filter">
                                                                        <form>
                                                                            <div class="form-group post-filter-inputs">
                                                                                <label><a href="{{URL::to('search?s=Beach Hotels')}}">Go Design Locations</a></label>
                                                                            </div> 
                                                                            <div class="form-group post-filter-inputs">
                                                                                <label><a href="{{URL::to('search?s=Green Properties')}}">Go Green Hotels</a></label>
                                                                            </div> 
                                                                            <div class="form-group post-filter-inputs">
                                                                                <label><a href="{{URL::to('search?s=Go Urban Hotels')}}">Go Urban Hotels</a></label>
                                                                            </div> 
                                                                            <div class="form-group post-filter-inputs">
                                                                                <label><a href="{{URL::to('search?s=Infinity Pools')}}">Go Infinity Pools</a></label>
                                                                            </div>
                                                                            <div class="form-group post-filter-inputs">
                                                                                <label><a href="{{URL::to('search?s=Spa & Wellness Hotels')}}">Go Spa & Wellness Hotels</a></label>
                                                                            </div> 
                                                                            <div class="form-group post-filter-inputs">
                                                                                <label><a href="{{URL::to('search?s=Mountain  & Ski  Resorts')}}">Go Mountains and Skin Resorts</a></label>
                                                                            </div> 
                                                                            <div class="form-group post-filter-inputs">
                                                                                <label><a href="{{URL::to('search?s=Yoga Hotels')}}">Discover Yoga Hotels</a></label>
                                                                            </div> 
                                                                            <div class="form-group post-filter-inputs">
                                                                                <label><a href="{{URL::to('search?s=Culinary Delights')}}">Discover culinary Delight Hotels</a></label>
                                                                            </div>
                                                                            <div class="form-group post-filter-inputs">
                                                                                <label><a href="{{URL::to('search?s=Family Friendly')}}">Discover Family Friendly Hotels</a></label>
                                                                            </div> 
                                                                            <div class="form-group post-filter-inputs">
                                                                                <label><a href="{{URL::to('search?s=Unusual Adventure Hotels')}}">Unusual Adventure Hotels</a></label>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
<!--                                                        <div class="panel panel-default custom-post-panel">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="heading-stying collapsed">
                                                                <div class="panel-heading custom-heading">
                                                                    Filter 2
                                                                </div>
                                                            </a>
                                                            <div id="collapse2" class="panel-collapse collapse">
                                                                <div class="panel-body custom-panel-body">
                                                                    <div class="dl-filter">
                                                                        <form>
                                                                            <div class="form-group post-filter-inputs">
                                                                                <input  type="checkbox">
                                                                                <label>Additional Derivers&nbsp;<i class="fa fa-user" aria-hidden="true"></i>&nbsp;individual with all cars</label>
                                                                                <span class="info-icon-align"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                                                            </div>  
                                                                            <div class="form-group post-filter-inputs">
                                                                                <input   type="checkbox">
                                                                                <label>GPS Packages&nbsp;<i class="fa fa-user" aria-hidden="true"></i>&nbsp;(?)</label>
                                                                                <span class="info-icon-align"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                                                            </div>  
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>-->
<!--                                                        <div class="panel panel-default custom-post-panel">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="heading-stying collapsed">
                                                                <div class="panel-heading custom-heading">
                                                                    Filter 3
                                                                </div>
                                                            </a>
                                                            <div id="collapse3" class="panel-collapse collapse">
                                                                <div class="panel-body custom-panel-body">
                                                                    <div class="dl-filter">
                                                                        <form>
                                                                            <div class="form-group  post-filter-inputs">
                                                                                <input  type="checkbox">
                                                                                <label>Air Conditioning&nbsp;<i class="fa fa-user" aria-hidden="true"></i>&nbsp;individual with all cars</label>
                                                                            </div>  
                                                                            <div class="form-group  post-filter-inputs">
                                                                                <input  type="checkbox">
                                                                                <label>Automatic&nbsp;<i class="fa fa-user" aria-hidden="true"></i>&nbsp;(4)</label>
                                                                            </div>  
                                                                            <div class="form-group  post-filter-inputs">
                                                                                <input  type="checkbox">
                                                                                <label>4 Wheel Derive&nbsp;<i class="fa fa-user" aria-hidden="true"></i>&nbsp;(?)</label>
                                                                            </div>  
                                                                            <div class="form-group  post-filter-inputs">
                                                                                <input  type="checkbox">
                                                                                <label>4+ Doors&nbsp;<i class="fa fa-user" aria-hidden="true"></i>&nbsp;individual with all cars</label>
                                                                            </div>   
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>-->
<!--                                                        <div class="panel panel-default custom-post-panel">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="heading-stying collapsed">
                                                                <div class="panel-heading custom-heading">
                                                                    Filter 4
                                                                </div>
                                                            </a>
                                                            <div id="collapse4" class="panel-collapse collapse">
                                                                <div class="panel-body custom-panel-body">
                                                                    <div class="dl-filter">
                                                                        <form>
                                                                            <div class="form-group post-filter-inputs">
                                                                                <input  type="checkbox">
                                                                                <label>Full Fuel&nbsp;<i class="fa fa-user" aria-hidden="true"></i>&nbsp;individual with all cars</label>
                                                                            </div> 
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>-->
<!--                                                        <div class="panel panel-default custom-post-panel">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="heading-stying collapsed">
                                                                <div class="panel-heading custom-heading">
                                                                    Filter 5
                                                                </div>
                                                            </a>
                                                            <div id="collapse5" class="panel-collapse collapse">
                                                                <div class="panel-body custom-panel-body">
                                                                    <div class="dl-filter">
                                                                        <form>
                                                                            <div class="form-group post-filter-inputs">
                                                                                <input  type="checkbox">
                                                                                <label>Cities Office&nbsp;<i class="fa fa-user" aria-hidden="true"></i>&nbsp;individual with all cars</label>
                                                                            </div> 
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>-->
                                                    </div> 
                                                    <div class="filter-footer">
                                                        <div><a href="#" >View All Locations On Map</a></div>
                                                        <div><a href="#"><i class="fa fa-repeat" aria-hidden="true"></i>&nbsp;Clear All</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="landing-filters">
                                                <span style="font-size:14px;cursor:pointer" onclick="toogleNavpost()"><img  src="{{ asset('sximo/assets/images/menu.png')}}" alt=""/></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-2 col-sm-2 text-align">
                                    <div class="row">
                                        <a  data-popup-id="search-page" class="video-popup-btn landing-search" href="#"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-2 col-sm-2 text-align">
                                    <div class="row">
                                        <a class="add-to-cart" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-2 col-sm-2 text-align">
                                    <a class="landing-header-destination" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                                </div> 
                                <div class="col-md-2 col-xs-2 col-sm-2 text-align">
                                    <div class="row">
                                        <div class="dropdown">
                                            <button class="dropbtn"><i class="fa fa-share-alt-square" aria-hidden="true"></i></button>
                                            <div class="dropdown-content">
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>                 <header >
                            <div class="container-fluid logo-padding-left editorial-logo-align ">
                                <div class="col-md-12-">
                                    <p><a class="logo-d" href="{{url()}}">D</a></p>
                                </div>
                                <div class="col-md-12-">
                                    <h2 class="menu-text-align">Home</h2>
                                </div>
                                <div class="col-md-12- menu">
                                    <a href="#"><img class="menu-button" src="{{ asset('sximo/assets/images/menu.png')}}" alt=""/></a>
                                    <ul style="display: none;">
                                        <li>
                                            <a href="#">HOTELS</a>
                                        </li>
                                        <li>
                                            <a href="#">EXPERIENCE</a>
                                        </li>
                                        <li>
                                            <a href="#">MAGAZINE</a>
                                        </li>
                                        <li>
                                            <a href="#">VILLAS</a>
                                        </li>
                                        <li>
                                            <a href="#">YACHTS</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12-">
                                    <div class="row">
                                        <a href="#" class="book-button open-book-now-page">BOOK</a>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="container"> 
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-logo-align">
                                <a href="#"><img class="img-responsive height-165" onmouseenter="this.src='{{ asset('sximo/assets/images/luxury-logo-new.png')}}'" onmouseout="this.src = '{{ asset('sximo/assets/images/design-location-logo-new.png')}}'" src="{{ asset('sximo/assets/images/design-location-logo.png')}}" alt="design locations"/></a>
                            </div>
                        </div>
                        <div class="container">
                            <div class="panel-group" id="accordion-mobile">
                                <div class="panel panel-default  sub-menues">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion-mobile" href="#collapse-mobile-1">
                                        <div class="panel-heading">
                                            <h4 class="panel-title menu-text accordion ">
                                                Search our collection
                                            </h4>
                                        </div>
                                    </a>
                                    <div id="collapse-mobile-1" class="panel-collapse collapse ">
                                        <div class="panel-body">
                                            <form autocomplete="off" method="get" id="searchform-navbar" class="searchform-navbar" action="{{URL::to('search')}}">
                                                <input  class="bh-search-input typeahead search-navbar main-search-box" name="s" id="search-navbar" placeholder="Enter Your Hotel or Destination" type="text">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default  sub-menues">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion-mobile" href="#collapse-mobile-2">
                                        <div class="panel-heading">
                                            <h4 class="panel-title menu-text accordion">
                                                Choose Your Experience
                                            </h4>
                                        </div>
                                    </a>
                                    <div id="collapse-mobile-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="panel landing-page-panel-background">
                                                <div class="width-100 holiday-type-image-align ">
                                                    <div class="width-20">
                                                        <a href="#">
                                                            <img src="{{ asset('sximo/assets/images/BeachHotels2.jpg')}}" alt=""/>
                                                            <span class="link-txt hover-cation">Go Beach Hotels</span>
                                                        </a>

                                                    </div>
                                                    <div class="width-20">
                                                        <a href="#"><img src="{{ asset('sximo/assets/images/GoGreen2.jpg')}}" alt=""/>
                                                            <span class="link-txt hover-cation">Go Green Hotels</span>
                                                        </a>
                                                    </div>
                                                    <div class="width-20">
                                                        <a href="#"><img src="{{ asset('sximo/assets/images/GoUrban2.jpg')}}" alt=""/>
                                                            <span class="link-txt hover-cation">Go Urban</span>
                                                        </a>
                                                    </div>
                                                    <div class="width-20">
                                                        <a href="#"><img src="{{ asset('sximo/assets/images/InfinityPools2.jpg')}}" alt=""/>
                                                            <span class="link-txt hover-cation">Go Infinity Pools</span>
                                                        </a>
                                                    </div>
                                                    <div class="width-20">
                                                        <a href="#"><img src="{{ asset('sximo/assets/images/SpaAndWellnessHotels3.jpg')}}" alt=""/>
                                                            <span class="link-txt hover-cation">Go Spa & Wellness Hotels</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="width-100 holiday-type-image-align ">
                                                    <div class="width-20">
                                                        <a href="#"><img src="{{ asset('sximo/assets/images/MountainAndSki2.jpg')}}" alt=""/>
                                                            <span class="link-txt hover-cation">Go Mountains and Skin Resorts</span>
                                                        </a>
                                                    </div>
                                                    <div class="width-20">
                                                        <a href="#"><img src="{{ asset('sximo/assets/images/YogaHotels3.jpg')}}" alt=""/>
                                                            <span class="link-txt hover-cation">Discover Yoga Hotels</span>
                                                        </a>
                                                    </div>
                                                    <div class="width-20">
                                                        <a href="#"><img src="{{ asset('sximo/assets/images/CulinaryDelights.jpg')}}" alt=""/>
                                                            <span class="link-txt hover-cation">Discover culinary Delight Hotels</span>
                                                        </a>
                                                    </div>
                                                    <div class="width-20">
                                                        <a href="#"><img src="{{ asset('sximo/assets/images/FamilyFriendly-1.jpg')}}" alt=""/>
                                                            <span class="link-txt hover-cation">Discover Family Friendly Hotels</span>
                                                        </a>
                                                    </div>
                                                    <div class="width-20">
                                                        <a href="#"><img src="{{ asset('sximo/assets/images/UnusualAdventures.jpg')}}" alt=""/>
                                                            <span class="link-txt hover-cation">Unusual Adventure Hotels</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default  sub-menues">
                                    <a href="{{url()}}/home" class="collapsed">
                                        <div class="panel-heading">
                                            <h4 class="panel-title menu-text accordion">
                                                Get Inspired
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="panel panel-default  sub-menues">
                                    <a href="#" class="trigger-click-on-book-now collapsed">
                                        <div class="panel-heading">
                                            <h4 class="panel-title menu-text accordion">
                                                Search By Date
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="panel panel-default  sub-menues">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion-mobile" href="#collapse-mobile-3">
                                        <div class="panel-heading">
                                            <h4 class="panel-title menu-text accordion">
                                                Select Your Destination
                                            </h4>
                                        </div>
                                    </a>
                                    <div id="collapse-mobile-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="panel landing-page-panel-background">
                                                <div class="padding-panel-div">
                                                    <div class="clearfix"></div>
                                                    <div class="panel-group-" id="mobile-inner-accordian">
                                                        <div class="panel panel-default  destination-sub-menues">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#mobile-inner-accordian" href="#mobile-inner1">
                                                                <div class="destination-panel-heading">
                                                                    <h4 class="panel-title menu-text accordion ">
                                                                        Indian Ocean
                                                                    </h4>
                                                                </div>
                                                            </a>
                                                            <div id="mobile-inner1" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    <div class="panel-group-" id="mobile-inner-accordian-2">
                                                                        <div class="panel panel-default  destination-sub-menuess">
                                                                            <a class="collapsed" data-toggle="collapse" data-parent="#mobile-inner-accordian-2" href="#mobile-inner1-1">
                                                                                <div class="destination-panel-heading">
                                                                                    <h4 class="panel-title menu-text accordion ">
                                                                                        Luxury Vacation Maldives
                                                                                    </h4>
                                                                                </div>
                                                                            </a>
                                                                            <div id="mobile-inner1-1" class="panel-collapse collapse ">
                                                                                <div class="panel-body">
                                                                                    <ul class="where-box-sub-menu">
                                                                                        <li><a href="#">Luxury Vacation Maldives</a></li>
                                                                                        <li><a href="#">Luxury Accommodation Mauritius</a></li>
                                                                                        <li><a href="#">Luxury Vacation Maldives</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="panel panel-default  destination-sub-menuess">
                                                                            <a class="collapsed" data-toggle="collapse" data-parent="#mobile-inner-accordian-2" href="#mobile-inner1-2">
                                                                                <div class="destination-panel-heading">
                                                                                    <h4 class="panel-title menu-text accordion ">
                                                                                        Luxury Accommodation Mauritius
                                                                                    </h4>
                                                                                </div>
                                                                            </a>
                                                                            <div id="mobile-inner1-2" class="panel-collapse collapse ">
                                                                                <div class="panel-body">
                                                                                    <ul class="where-box-sub-menu">
                                                                                        <li><a href="#">Luxury Vacation Maldives</a></li>
                                                                                        <li><a href="#">Luxury Accommodation Mauritius</a></li>
                                                                                        <li><a href="#">Luxury Vacation Maldives</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="panel panel-default  destination-sub-menuess">
                                                                            <a class="collapsed" data-toggle="collapse" data-parent="#mobile-inner-accordian-2" href="#mobile-inner1-3">
                                                                                <div class="destination-panel-heading">
                                                                                    <h4 class="panel-title menu-text accordion ">
                                                                                        Luxury Vacation Maldives
                                                                                    </h4>
                                                                                </div>
                                                                            </a>
                                                                            <div id="mobile-inner1-3" class="panel-collapse collapse ">
                                                                                <div class="panel-body">
                                                                                    <ul class="where-box-sub-menu">
                                                                                        <li><a href="#">Luxury Vacation Maldives</a></li>
                                                                                        <li><a href="#">Luxury Accommodation Mauritius</a></li>
                                                                                        <li><a href="#">Luxury Vacation Maldives</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default  destination-sub-menues">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#mobile-inner-accordian" href="#mobile-inner2">
                                                                <div class="destination-panel-heading">
                                                                    <h4 class="panel-title menu-text accordion ">
                                                                        Europe
                                                                    </h4>
                                                                </div>
                                                            </a>
                                                            <div id="mobile-inner2" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    <ul class="where-box-sub-menu">
                                                                        <li><a href="#">Luxury Hotels and Spas Central Europe – Design Locations</a></li>
                                                                        <li><a href="#">Luxury Hotels Northern Europe – Design Locations</a></li>
                                                                        <li><a href="#">Luxury Hotels Southern Europe – Design Locations</a></li>
                                                                        <li><a href="#">5 Star Luxury Hotels Eastern Europe – Design Locations</a></li>
                                                                        <li><a href="#">Exclusive Spas & Resorts in Western Europe</a></li>
                                                                        <li><a href="#">Luxury Hotels South Eastern Europe – Design Locations</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default  destination-sub-menues">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#mobile-inner-accordian" href="#mobile-inner3">
                                                                <div class="destination-panel-heading">
                                                                    <h4 class="panel-title menu-text accordion ">
                                                                        Oceania
                                                                    </h4>
                                                                </div>
                                                            </a>
                                                            <div id="mobile-inner3" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    <ul class="where-box-sub-menu">
                                                                        <li><a href="#">Discover Oceanian Australia</a></li>
                                                                        <li><a href="#">Luxury Hotels New Zealand – Design Locations</a></li>
                                                                        <li><a href="#">luxury hotels in fiji islands</a></li>
                                                                        <li><a href="#">luxury boutique hotels french polynesia</a></li>
                                                                        <li><a href="#">Cook Islands Boutique Beach Resorts</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default  destination-sub-menues">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#mobile-inner-accordian" href="#mobile-inner4">
                                                                <div class="destination-panel-heading">
                                                                    <h4 class="panel-title menu-text accordion ">
                                                                        Africa
                                                                    </h4>
                                                                </div>
                                                            </a>
                                                            <div id="mobile-inner4" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    <ul class="where-box-sub-menu">
                                                                        <li><a href="#">Luxury Safari Lodges Eastern Africa</a></li>
                                                                        <li><a href="#">Exclusive Stays Southern Africa</a></li>
                                                                        <li><a href="#">Exotic Accommodation Northern Africa</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default  destination-sub-menues">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#mobile-inner-accordian" href="#mobile-inner5">
                                                                <div class="destination-panel-heading">
                                                                    <h4 class="panel-title menu-text accordion ">
                                                                        Asia
                                                                    </h4>
                                                                </div>
                                                            </a>
                                                            <div id="mobile-inner5" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    <ul class="where-box-sub-menu">
                                                                        <li><a href="#">Boutique & Luxury Hotels Eastern Asia</a></li>
                                                                        <li><a href="#">Exotic South-Eastern Asia</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default  destination-sub-menues">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#mobile-inner-accordian" href="#mobile-inner6">
                                                                <div class="destination-panel-heading">
                                                                    <h4 class="panel-title menu-text accordion ">
                                                                        Middle East
                                                                    </h4>
                                                                </div>
                                                            </a>
                                                            <div id="mobile-inner6" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    <ul class="where-box-sub-menu">
                                                                        <li><a href="#">Luxury Travel Abu Dhabi</a></li>
                                                                        <li><a href="#">Exotic Luxury Dubai</a></li>
                                                                        <li><a href="#">Epitome exotic Oman</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default  destination-sub-menues">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#mobile-inner-accordian" href="#mobile-inner7">
                                                                <div class="destination-panel-heading">
                                                                    <h4 class="panel-title menu-text accordion ">
                                                                        The America
                                                                    </h4>
                                                                </div>
                                                            </a>
                                                            <div id="mobile-inner7" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    <ul class="where-box-sub-menu">
                                                                        <li><a href="#">North America</a></li>
                                                                        <li><a href="#">North America</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default  sub-menues">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion-mobile" href="#collapse-mobile-4">
                                        <div class="panel-heading">
                                            <h4 class="panel-title menu-text accordion">
                                                Personalized Service
                                            </h4>
                                        </div>
                                    </a>
                                    <div id="collapse-mobile-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="col-md-6 about-us-sec">
                                                <div class="row">
                                                    <img  src="{{ asset('sximo/assets/images/room.png')}}" alt=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 about-us-side-text">
                                                <div class="border-box">
                                                    <a class="video-popup-btn btn-style" data-popup-id="register-popup" href="#">Register</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default  sub-menues">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion-mobile" href="#collapse-mobile-5">
                                        <div class="panel-heading">
                                            <h4 class="panel-title menu-text accordion">
                                                About
                                            </h4>
                                        </div>
                                    </a>
                                    <div id="collapse-mobile-5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="col-md-6 about-us-sec">
                                                <div class="row">
                                                    <img  src="{{ asset('sximo/assets/images/MountainAndSki2.jpg')}}" alt=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 about-us-side-text">
                                                <div class="border-box">
                                                    <h2>Design Locations</h2>
                                                    <p>
                                                        From the posh, sun-soaked beaches along the
                                                        Indian Ocean to the epoch heights of the Himalayas,
                                                        Design Location is your ideal, vogue vacation planner!
                                                        With over 300 posh properties and elite spas huddled in its cocoon,
                                                        Design Locations ensure the ultimate luxury experience. Our expertise lies in our utmost diligence to provide our beau monde customers with an exotic experience they will relish forever. If you are looking for glamour, grandeur and some sinful indulgence in the lap of luxury, you have come to the right place!
                                                    </p>
                                                    <a href="#" class="about-read-more-button">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Footer Section-->
                        </div>
                        <div class="panel-group" id="landing-footer-accordian">
                            <div class="panel panel-default">
                                <a class="collapsed" data-toggle="collapse" data-parent="#landing-footer-accordian" href="#footer-collapse1">
                                    <div class="panel-heading">
                                        <h4 class="panel-title menu-text accordion">
                                            Members Portal
                                        </h4>
                                    </div>
                                </a>
                                <div id="footer-collapse1" class="panel-collapse collapse ">
                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <a class="collapsed" data-toggle="collapse" data-parent="#landing-footer-accordian" href="#footer-collapse2">
                                    <div class="panel-heading">
                                        <h4 class="panel-title menu-text accordion">
                                            Partnerships
                                        </h4>
                                    </div>
                                </a>
                                <div id="footer-collapse2" class="panel-collapse collapse ">
                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <a class="collapsed" data-toggle="collapse" data-parent="#landing-footer-accordian" href="#footer-collapse3">
                                    <div class="panel-heading">
                                        <h4 class="panel-title menu-text accordion">
                                            Legal
                                        </h4>
                                    </div>
                                </a>
                                <div id="footer-collapse3" class="panel-collapse collapse ">
                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                        </div>
                        <!--Next-->
                    </div>
                </div>
            </div>
        </div>
        <!--Featured hotel popup start-->
        <div id="register-popup" class="popup personlized-service-pop-up-outer">
            <div class="popup-inner personlized-service-pop-up">
                <a href="#" class="popup-close-btn personlized-service-pop-up-close-btn">&times;</a>
                <div class="popup-content personlized-service-content">
                    <div class="popup-form-center">
                        <div class="form-tittle">
                            <h3>JohnnyShares - Sharing & Collaboration Platform</h3>
                        </div> 
                        <div class="form-content clearfix">
                            <div class="form-logo">
                                <img class="img-responsive" src="{{ asset('sximo/assets/images/logo-design_1.png')}}" alt="Design Locations">
                            </div>
                            <div>
                                <ul class="navigation-tabs">
                                    <li><a href="#" class="active" id="sign-in-form-link">Sign in</a></li>
                                    <li><a href="#" id="forgot-password-link">Forgot Password</a></li>
                                    <li><a href="#" id="register-form-link">Register</a></li>
                                </ul>
                            </div>
                            <div class="input-fileds">
                                <form  id="login-form" role="form" style="display: none;">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" name="email_address" placeholder="Email Address" class="form-control">
                                        <i class="fa fa-user input-fa" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input placeholder="Password" type="Password" name="password"  class="form-control">
                                        <i class="fa fa-lock input-fa" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group">
                                        <label> Remember Me ? </label>
                                        <input class="remember-me-checkbox" name="remember" value="1" type="checkbox">
                                        <i class="fa fa-lock input-fa remember-me-fa" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group">
                                        <label>Language</label>
                                        <select class="form-control" name="language">
                                            <option value="Deutsch"> Deutsch</option>
                                            <option value="en"> English</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-info form-sign-in-btn btn-sm btn-block" type="submit">Sign In</button>
                                </form>
                                <form id="register-form" role="form" style="display: block;">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="user_name" placeholder="Name" class="form-control">
                                        <i class="fa fa-user input-fa" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" name="email_address" placeholder="Email Address" class="form-control">
                                        <i class="fa fa-user input-fa" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input placeholder="Password" type="Password" name="password"  class="form-control">
                                        <i class="fa fa-lock input-fa" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input placeholder="Confirm Password" type="Password" name="password"  class="form-control">
                                        <i class="fa fa-lock input-fa" aria-hidden="true"></i>
                                    </div>
                                    <button class="btn btn-info form-sign-in-btn btn-sm btn-block" type="submit">Sign Up</button>
                                </form>
                                <form id="forgot-password" role="form" style="display: none;">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" name="email_address" placeholder="Email Address" class="form-control">
                                        <i class="fa fa-user input-fa" aria-hidden="true"></i>
                                    </div>
                                    <button class="btn btn-info form-sign-in-btn btn-sm btn-block" type="submit">Recover Account</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--Featured hotel popup end-->

        <!--HTML for book now page start here-->

        <!--HTML for book now page end here-->

        <script>
            $(document).ready(function () {
                $("header .menu > a").click(function (event) {
                    event.preventDefault();
                    $(this).parent().find("ul").toggle("slow");
                });
                $(".trigger-click-on-book-now").click(function (event) {
                    event.preventDefault();
                    $(".open-book-now-page").trigger("click");
                });
            });
        </script>
        <script>
            $('#search-by-date').dateRangePicker(
                    {
                        selectForward: (Boolean),
                        stickyMonths: (Boolean),
                        startDate: "12-01-2017",
                        format: ' DD.MM.YYYY',
                        separator: ' to ',
                        getValue: function ()
                        {
                            if ($('#search-date-range-destination').val() && $('#search-date-range-arrive').val())
                                return $('#search-date-range-destination').val() + ' to ' + $('#search-date-range-arrive').val();
                            else
                                return '';
                        },
                        setValue: function (s, s1, s2)
                        {
                            $('#date-range-arrive').val(s1);
                            $('#date-range-destination').val(s2);
                        }
                    }
            ).bind('datepicker-first-date-selected', function (event, obj) {
                $("#date-range-destination").val('');
            });

        </script>
        <script>
            $(function () {
                $('#register-form-link').click(function (e) {
                    $("#register-form").delay(100).fadeIn(100);
                    $("#login-form").fadeOut(100);
                    $("#forgot-password").fadeOut(100);
                    $('#sign-in-form-link').removeClass('active');
                    $('#forgot-password-link').removeClass('active');
                    $(this).addClass('active');
                    e.preventDefault();
                });
                $('#sign-in-form-link').click(function (e) {
                    $("#login-form").delay(100).fadeIn(100);
                    $("#register-form").fadeOut(100);
                    $("#forgot-password").fadeOut(100);
                    $('#register-form-link').removeClass('active');
                    $('#forgot-password-link').removeClass('active');
                    $(this).addClass('active');
                    e.preventDefault();
                });
                $('#forgot-password-link').click(function (e) {
                    $("#forgot-password").delay(100).fadeIn(100);
                    $("#login-form").fadeOut(100);
                    $("#register-form").fadeOut(100);
                    $('#sign-in-form-link').removeClass('active');
                    $('#register-form-link').removeClass('active');
                    $(this).addClass('active');
                    e.preventDefault();
                });

            });
            $(document).ready(function () {
                $('ul li a').click(function () {
                    $('li a').removeClass("active");
                    $(this).addClass("active");
                });
            });
        </script>
        <script>
            function toogleNavpost() {
                if (document.getElementById("mySidenavpost").style.width == "342px") {
                    return closeNavpost();
                }
                return openNavpost();
            }
            function openNavpost() {
                if ($(window).width() >= 768) {
                    document.getElementById("mySidenavpost").style.width = "342px";
                    document.getElementById("main").style.marginRight = "250px";
                } else {
                    document.getElementById("mySidenavpost").style.width = "100%";
                    document.getElementById("main").style.marginRight = "250px";
                }
            }
            function closeNavpost() {
                document.getElementById("mySidenavpost").style.width = "0";
                document.getElementById("main").style.marginRight = "0";
                document.body.style.backgroundColor = "white";
                document.body.style.transition = "all 0.5s ease 0s";
            }
//            window.onload = function () {
//                if ($(window).width() >= 768) {
//                    document.getElementById("mySidenavpost").style.width = "100%";
//                    document.getElementById("main").style.marginRight = "250px";
//                }
//                setTimeout(function () {
//                    if ($(window).width() >= 768) {
//                        document.getElementById("mySidenavpost").style.width = "0";
//                        document.getElementById("main").style.marginRight = "0";
//                        document.body.style.backgroundColor = "white";
//                        document.body.style.transition = "all 0.5s ease 0s";
//                    }
//                }, 3000);
//
//            };

            if ($(window).width() <= 767) {
                document.getElementById("mySidenavpost").style.width = "100%";
                document.getElementById("main").style.marginRight = "250px";
            }

            $(document).on('click', function (event) {
                if ($(window).width() <= 767) {
                    if ($(event.target).has('.filter-width').length) {
                        document.getElementById("mySidenavpost").style.width = "0";
                        document.getElementById("main").style.marginRight = "0";
                    }
                }
            });
        </script>
        <style>
            .sidenavpost .bh-search-input
            {
                padding-left: 0px !important;
            }

            .sidenavpost .tt-menu
            {
                left: 0% !important;
                color:#fff !important;
            }

            .sidenavpost a
            {
                padding: 0 !important;
                font-size: 14px !important;
            }
            .sidenavpost .closebtn
            {
                font-size: 36px !important;
            }
        </style>
        @include('layouts/elliot/ai_search-page')
        @include('layouts/elliot/ai_booking-page')
        @include('layouts/elliot/ai_newsletter')
    </body>
</html>