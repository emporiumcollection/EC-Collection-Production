<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
  <base href="">
  <meta charset="utf-8" />
  <title>Metronic Live preview | Keenthemes</title>
  <meta name="description" content="Updates and statistics" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="canonical" href="https://keenthemes.com/metronic" />
  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/  css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Page Vendors Styles(used by this page)-->
  
  <link href="{{ asset('assets/users/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
  {{-- <link href="users/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" /> --}}
  <link href="{{ asset('assets/users/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

  <!--end::Page Vendors Styles-->
  <!--begin::Global Theme Styles(used by all pages)-->
  <link href="{{ asset('assets/users/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />

  <link href="{{ asset('assets/users/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/users/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/users/assets/css/slick.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/users/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/users/assets/css/slick-theme.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/users/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('assets/users/assets/media/logos/favicon.ico')}}" />

  <!--end::Global Theme Styles-->
  <!--begin::Layout Themes(used by all pages)-->
  <!--end::Layout Themes-->
  <link rel="shortcut icon" href="{{ asset('assets/users/assets/media/logos/favicon.ico')}}" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body"
  class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
      <!--begin::Main-->
  <!--begin::Header Mobile-->
  <div id="kt_header_mobile" class="header-mobile">
    <!--begin::Logo-->
    <a href="hotels.html">
      <img alt="Logo" src="{{ asset('assets/users/assets/media/logos/logo-letter-2.png')}}" class="logo-default max-h-30px" />
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
      <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
        <span></span>
      </button>
    </div>
    <!--end::Toolbar-->
  </div>
  <!--end::Header Mobile-->

      @yield('content')

  </body>
</html>

<script src="{{ asset('assets/users/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{ asset('assets/users/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<script src="{{ asset('assets/users/assets/js/scripts.bundle.js')}}"></script>
  <!--end::Global Theme Bundle-->
  <!-- <script src="../users/assets/js/pages/custom/user/add-user.js"></script> -->
<script src="{{ asset('assets/users/assets/js/two-factor-authentication.js')}}"></script>
<script src="{{ asset('assets/users/assets/js/custom.js')}}"></script>
<script src="{{ asset('assets/users/assets//js/pages/crud/ktdatatable/child/data-local.js')}}"></script>
  <script src="{{ asset('assets/users/assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
  <script src="{{ asset('assets/users/assets/plugins/custom/datatables/   datatables.bundle.js')}}"></script>
  <script src="{{ asset('assets/users/users/assets/plugins/custom/slick/slick.min.js')}}"></script>
  <script src="{{ asset('assets/users/assets/js/custom.js')}}"></script>
  <link href="{{ asset('assets/users/assets/css/pages/wizard/wizard-3.css')}}" rel="stylesheet" type="text/css" />

  <script src="{{ asset('assets/users/assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
  <script src="{{ asset('assets/users/assets/js/pages/custom/wizard/wizard-3.js')}}"></script>
  <script>

      // var inspirations=[];
      //   var k = 0;
      //   $('#inspirations .personalized-service-checkbox-input:checked').each(function () {
      //      inspirations[k] = $(this).val();
      //      k++;
      //   });
        
      //   var experiences=[];
      //   var k = 0;
      //   $('#experience .personalized-service-checkbox-input:checked').each(function () {
      //      experiences[k] = $(this).val();
      //      k++;
      //   });

        $('.plus').click(function () {
            $(this).prev().val(+$(this).prev().val() + 1);
        });
        $('.min').click(function () {
            if ($(this).next().val() > 0) {
                if ($(this).next().val() > 0) $(this).next().val(+$(this).next().val() - 1);
            }
        });
        $('#kt_daterangepicker_2').daterangepicker({
            buttonClasses: ' btn',
            applyClass: 'btn-primary',
            cancelClass: 'btn-secondary'
        }, function (start, end, label) {
            $('#kt_daterangepicker_2 .form-control').val(start.format('DD MMM YYYY') + ' - ' + end.format('DD MMM YYYY'));
        });
    </script>
  <!-- <script src="../users/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script> -->

  
