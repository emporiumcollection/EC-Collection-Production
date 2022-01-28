<!DOCTYPE html>
<html lang="">
<head>    
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emporium</title>
  <meta name="msapplication-tap-highlight" content="no">
  <!-- Web Application Manifest -->
  <link rel="manifest" href="manifest.json">
  <link rel="stylesheet" href="{{ asset('assets/css/css/styles.css')}}">
  <script type="text/javascript">
    function validate(){
        alert('here');return false;
    }
  </script>
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
                <div class="auth-container-inner wizard">
                    <div class="mb-5">
                        <img src="images/logo.svg" alt="">
                    </div>
                     @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="/sendinvitation" onsubmit="return validateform()" name="form">
                        <div class="mt-5 mb-3">
                            <h3 class="font-2 mb-4">Invite companion </h3>

                            <div class="form-group">
                                <label>Copy this link</label>
                                <div class="copy-link">
                                    <input type="text" class="form-control"
                                        name="invite_link" value="http://design.emporium-collection.com/invite">
                                    <a href="#" class="btn btn-outline-dark btn-copy">Copy</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Enter multiple Email seprated by(,)comma">                                
                            </div>
                            <p style="color: red; display: none" id="email_error"><strong>select checkboxe</strong></p>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary btn-block mb-3 send">Send invitations</button>
                                <a href="/check-one-login" class="btn btn-outline-dark btn-block">Skip for now</a>
                            </div>
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
        $(document).ready(function () {
            //Wizard
            $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
                var $target = $(e.target);
                if ($target.hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function (e) {
                var $active = $('.wizard .nav li a.active');
                $active.closest('.nav-item').next().find('.nav-link').removeClass('disabled');
                nextTab($active);
            });
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
        $(document).ready(function() {
            $(".send").click(function (e) {
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
    </script>
</body>

</html>