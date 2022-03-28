
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content=" @yield('robots')">
    <meta name="keywords" content=" {{ CNF_APPNAME }}, @yield('meta_keywords') ">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content=" {{ CNF_APPNAME }} - @yield('meta_description') ">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> {{ CNF_APPNAME }} - @yield('meta_title') </title>

    @yield('meta_link_sitemap')

    <meta property="og:url" content="@yield('og_url')" />
    <meta property="og:title" content="@yield('og_title')" />
    <meta property="og:description" content="@yield('og_description')" />
    <meta property="og:type" content="@yield('og_type')" />
    <!--<meta property="og:image" content="@yield('og_image')" />
    <meta property="og:image:width" content="@yield('og_image_width')" />
    <meta property="og:image:height" content="@yield('og_image_height')" /> -->
    @yield('og_image')

    <meta property="og:site_name" content="@yield('og_sitename')" />
    <meta property="og:locale" content="@yield('og_locale')" />
    <meta property="article:section" content="@yield('article_section')" />

    @yield('article_tags')

    <meta property="twitter:url" content="@yield('twitter_url')" />
    <meta property="twitter:title" content="@yield('twitter_title')" />
    <meta property="twitter:description" content="@yield('twitter_description')" />

    @yield('twitter_image')

    <meta property="twitter:domain" content="@yield('twitter_domain')" />
    <meta property="twitter:card" content="@yield('twitter_card')" />
    <meta property="twitter:creator" content="@yield('twitter_creator')" />
    <meta property="twitter:site" content="@yield('twitter_site')" />
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

    <script type="application/ld+json">
        @yield('jsonld')
    </script>

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="manifest.json">
    <?php if(\Config::get('app.currentdomain') == 'voyage'){?>
    <style type="text/css">
      body{
        background-color: #FFFFF!important;
      }
    </style>
<?php } ?>
    
<?php if(\Config::get('app.currentdomain') == 'spa'){?>
    <style type="text/css">
      body{
        background-color: #F9F8F2!important;
      }
    </style>
<?php } ?>
    
<?php if(\Config::get('app.currentdomain') == 'safari'){?>
    <style type="text/css">
      body{
        background-color: #EFEAE4!important;
      }
    </style>
<?php } ?>    
<?php if(\Config::get('app.currentdomain') == 'islands'){?>
    <style type="text/css">
      body{
        background-color: #FFFFFF!important;
      }
    </style>
<?php } ?>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>


    <!-- Favicon Start -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon/apple-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicon/apple-icon-60x60.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon/apple-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon/apple-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon/apple-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon/apple-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon/apple-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon/apple-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-icon-180x180.png') }}" />
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/images/favicon/android-icon-192x192.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/favicon/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}" />
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css" rel="stylesheet">

    <link rel="manifest" href="{{ asset('assets/images/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/ms-icon-144x144.png') }}" />
    <meta name="theme-color" content="#ffffff" />
    <!-- Favicon END -->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <?php if(\Config::get('app.currentdomain') == 'voyage'){?>
        <link href="{{ asset('themes/EC/css/style_voyage.css') }}" rel="stylesheet">
    <?php } ?>
        
    <?php if(\Config::get('app.currentdomain') == 'spa'){?>
        <link href="{{ asset('themes/EC/css/style_spa.css') }}" rel="stylesheet">
    <?php } ?>
        
    <?php if(\Config::get('app.currentdomain') == 'safari'){?>
        <link href="{{ asset('themes/EC/css/style_safari.css') }}" rel="stylesheet">
    <?php } ?>    
    <?php if(\Config::get('app.currentdomain') == 'islands'){?>
        <link href="{{ asset('themes/EC/css/style_islands.css') }}" rel="stylesheet">
    <?php } ?>
    <link rel="stylesheet" href="{{ asset('themes/EC/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/EC/css/credit.css') }}">
    <!-- tilt css include -->
    <!-- end of tilt css include -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{--For Include and Add Files in Head --}}
    @section('head')
        @parent
    @show

    {{--For Custom Styles --}}
    @section('custom_css')
        @parent
    @show

    @if(defined('CNF_GOOGLE_ANALYTIC_KEY'))
        @if(CNF_GOOGLE_ANALYTIC_KEY != '')
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ CNF_GOOGLE_ANALYTIC_KEY }}"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', '{{ CNF_GOOGLE_ANALYTIC_KEY }}');
        </script>
        @endif
    @endif

    @if(defined('CNF_HUBSPOT_SCRIPT'))
        @if(CNF_HUBSPOT_SCRIPT != '')
        <!-- Start of HubSpot Embed Code -->
        {!! CNF_HUBSPOT_SCRIPT !!}
        <!-- End of HubSpot Embed Code -->
        @endif
    @endif
    @if(defined('CNF_IUBCOOKIE_SCRIPT'))
        @if(CNF_IUBCOOKIE_SCRIPT != '')
        <!-- Start of HubSpot Embed Code -->
        {!! CNF_IUBCOOKIE_SCRIPT !!}
        <!-- End of HubSpot Embed Code -->
        @endif
    @endif
    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js')}}"></script>
    <!--<script type="text/javascript" src="{{ asset('themes/EC/js/jquery.lazy.js') }}"></script>-->
</head>
<body>
    @include('frontend.themes.EC.layouts.sections.preloader')
    @include('frontend.themes.EC.layouts.subsections.sidebar_collection')
    {{-- @include('frontend.themes.EC.layouts.sections.preloader') --}}

    @if(isset($layout_type) && $layout_type == 'old')
        @section('header')
            @parent
            @include('frontend.themes.EC.layouts.sections.main_header')
        @show

        @section('leftsidebar')
            @parent
            @include('frontend.themes.EC.layouts.sections.main_sidebar')
        @show
    @else
        @section('header')
            @parent
            @include('frontend.themes.EC.layouts.sections.new_header')
        @show
    @endif
    {{-- @include('frontend.themes.EC.properties.reservation.header') --}}
    @yield('content')

    @if(isset($layout_type) && $layout_type == 'old')

    @else
        {{-- @section('loader')
            @parent
            @include('frontend.themes.EC.layouts.sections.loader')
        @show --}}
    @endif

    @section('loader')
        @parent
        @include('frontend.themes.EC.layouts.sections.loader')
    @show

    @section('footer')
        @parent
        @include('frontend.themes.EC.layouts.sections.footer')
    @show

@include('frontend.themes.EC.layouts.subsections.videos')
<script type="text/javascript" src="{{ asset('js/mediaelement-and-player.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/plugin/select2/select2.full.min.js')}}"></script>


<script type="text/javascript">var BaseURL = '{{ url() }}'; </script>
<script type="text/javascript" src="{{ asset('themes/EC/js/jquery-3.5.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/reviews.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/leaflet.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/jquery.sticky.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/jqueryui/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/jquery.mousewheel.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/simpleLightbox.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/mediaelement-and-player.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/jquery.rangecalendar.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/daterangepicker.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/core.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/md5.js"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/fullcalendar/core/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/fullcalendar/daygrid/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/select2/select2.full.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/jquery.smartWizard.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/lightbox/js/lightgallery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/lightbox/js/lg-thumbnail.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/lightbox/js/lg-share.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/color-thief.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/datepick/jquery.plugin.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/datepick/jquery.datepick.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/mapbox-gl.js') }}"></script>
<script src="{{ asset('themes/EC/js/plugin/rellax.min.js') }}"></script>
<script src="{{ asset('lib/yottie/jquery.yottie.bundled.js')}}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/ScrollMagic.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/all.js')}}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/collection.js')}}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/reservation.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/credit.js') }}"></script>
<script type="text/javascript">
    jQuery(function ( $ ){
    $(".credit").credit();
    });
    </script>
@section('custom_js')
    @parent
@show

<script type="text/javascript" src="{{ asset('themes/EC/js/common-footer.js') }}"></script>
<script type="text/javascript">
  var channelurl = '{{URL::to("getyoutubechannel/")}}';
  $(window).on('load', function() {
    setTimeout("getDefaultChannel('<?php echo isset($location[0]['category_alias']) ? $location[0]['category_alias'] : ''; ?>')", 1000);
  });
</script>
@yield('mobile_hotel_header')
</body>
</html>