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
  <link rel="stylesheet" href="css/styles.css">


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
                <div class="auth-container-inner">
                    <div class="mb-5">
                        <img src="images/logo.svg" alt="">
                    </div>

                    <form action="login-confirmation.html">
                        <div class="mt-5 mb-3">
                            <h3 class="font-2">Login</h3>
                            <h3 class="mt-4 font-2">Welcome</h3>
                        </div>
                        <div class="form-group">
                            <label class="font-2 label-2">First name</label>
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="form-group">
                            <label class="font-2 label-2">Last name</label>
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                        <div class="form-group">
                            <label class="font-2 label-2">Mobile</label>
                            <div class="d-flex">
                                <div class="col-c-code">
                                    <input type="text" class="form-control" placeholder="+49">
                                </div>
                                <div class="m-nmbr">
                                    <div class="form-inline-group">
                                        <input type="text" class="form-control" placeholder="xxxx-xxxx-xxxx">
                                        <div class="icon-inliner">
                                            <i class="fa fa-info-circle" aria-hidden="true" ></i>
                                            <div class="tooltip-cs">
                                                Please make sure to use a valid mobile number. The system uses your mobile to validate your login
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-2 label-2">Password</label>
                            <input type="password" class="form-control" placeholder="Your Password">
                        </div>
                        <div class="text-right mt-5">
                            <a href="#" class="mr-4">Forgot Password?</a>
                            <button type="submit" class="btn btn-outline-dark px-5">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery.sticky.js"></script> -->
<script type="text/javascript" src="js/sticky-sidebar.min.js"></script>
<script type="text/javascript" src="js/leaflet.js"></script>
<script type="text/javascript" src="js/plugin/jqueryui/jquery-ui.js"></script>
<script type="text/javascript" src="js/moment.min.js"></script>
<script type="text/javascript" src="js/daterangepicker.min.js"></script>
<script type="text/javascript" src="js/plugin/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/plugin/simpleLightbox.js"></script>
<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="js/jquery.rangecalendar.js"></script>
<script type="text/javascript" src="js/plugin/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/plugin/daterangepicker.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/core.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/md5.js"></script>

<script type="text/javascript" src="js/plugin/fullcalendar/core/main.js"></script>
<script type="text/javascript" src="js/plugin/fullcalendar/daygrid/main.js"></script>
<script type="text/javascript" src="js/plugin/slick/slick.min.js"></script>
<script type="text/javascript" src="js/plugin/select2/select2.full.min.js"></script>
<script type="text/javascript" src="js/plugin/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.smartWizard.min.js"></script>
<script type="text/javascript" src="js/plugin/lightbox/js/lightgallery.min.js"></script>
<script type="text/javascript" src="js/plugin/lightbox/js/lg-thumbnail.js"></script>
<script type="text/javascript" src="js/plugin/lightbox/js/lg-share.js"></script>
<script type="text/javascript" src="js/plugin/lightbox/js/lg-video.min.js"></script>
<script type="text/javascript" src="js/color-thief.min.js"></script>
<script type="text/javascript" src="js/plugin/datepick/jquery.plugin.js"></script>
<script type="text/javascript" src="js/plugin/datepick/jquery.datepick.js"></script>
<script type="text/javascript" src="js/plugin/mapbox-gl.js"></script>
<script type="text/javascript" src="./js/all.js"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
</body>

</html>