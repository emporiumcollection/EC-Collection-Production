<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emporium</title>

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Web Application Manifest -->
  <link rel="manifest" href="manifest.json">

  <link rel="stylesheet" href="{{ asset('themes/EC/css/styles.css') }}">

</head>

<body class="auth-container">

    @yield('content')

<script type="text/javascript">var BaseURL = '{{ url() }}'; </script>    
<script type="text/javascript" src="{{ asset('themes/EC/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/sticky-sidebar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/leaflet.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/jqueryui/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/daterangepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/jquery.mousewheel.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/simpleLightbox.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/mediaelement-and-player.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/jquery.rangecalendar.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/fullcalendar/core/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/fullcalendar/daygrid/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/select2/select2.full.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/wow.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/core.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/md5.js"></script>

<script src="{{ asset('themes/EC/js/plugin/lightbox/js/lightgallery.min.js') }}"></script>
<script src="{{ asset('themes/EC/js/plugin/lightbox/js/lg-thumbnail.js') }}"></script>
<script src="{{ asset('themes/EC/js/plugin/lightbox/js/lg-share.js') }}"></script>
<script src="{{ asset('themes/EC/js/plugin/rellax.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('themes/EC/js/jquery.smartWizard.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/color-thief.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/plugin/lightbox/js/lg-video.min.js') }}"></script>
<script src="{{ asset('themes/EC/js/plugin/datepick/jquery.plugin.js') }}"></script>
<script src="{{ asset('themes/EC/js/plugin/datepick/jquery.datepick.js') }}"></script>
<script src="{{ asset('themes/EC/js/plugin/mapbox-gl.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/ScrollMagic.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/EC/js/all.js') }}"></script>
<script>
</body>

</html>