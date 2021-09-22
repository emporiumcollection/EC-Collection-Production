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

  <link rel="stylesheet" href="{{ asset('assets/css/css/styles.css')}}">

</head>

<body>

@include('reservation/header')

  @yield('content')

  <!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
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
  <script src="{{ asset('js/reservation.js')}}"></script>
  <script>

    if ($('.fromdate, .todate').length) {
      // check if element is available to bind ITS ONLY ON HOMEPAGE
      var currentDate = moment().format("DD-MM-YYYY");

      $('.fromdate, .todate').daterangepicker({
        locale: {
          format: 'DD MMM YYYY'
        },
        "minDate": currentDate,
        autoApply: true,
        autoUpdateInput: false
      }, function (start, end, label) {
        // console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
        // Lets update the fields manually this event fires on selection of range
        var selectedStartDate = start.format('DD MMM YYYY'); // selected start
        var selectedEndDate = end.format('DD MMM YYYY'); // selected end

        $checkinInput = $('.fromdate');
        $checkoutInput = $('.todate');

        // Updating Fields with selected dates
        $checkinInput.val(selectedStartDate);
        $checkoutInput.val(selectedEndDate);

        // Setting the Selection of dates on calender on CHECKOUT FIELD (To get this it must be binded by Ids not Calss)
        var checkOutPicker = $checkoutInput.data('daterangepicker');
        checkOutPicker.setStartDate(selectedStartDate);
        checkOutPicker.setEndDate(selectedEndDate);

        // Setting the Selection of dates on calender on CHECKIN FIELD (To get this it must be binded by Ids not Calss)
        var checkInPicker = $checkinInput.data('daterangepicker');
        checkInPicker.setStartDate(selectedStartDate);
        checkInPicker.setEndDate(selectedEndDate);

      });

    } // End Daterange Picker

    $(document).on("click", ".btn-use-addr", function (e) {
      e.preventDefault();
      $('.btn-use-addr').removeClass('active')
      $(this).addClass('active')
    });
    $(".nav-wizard-active").click(function () {
      $('.nav-wizard-primary').addClass('active');
      $('body').append("<div class='wizard-overlay'>");
    });

    $(document).on('click', '.wizard-overlay', function () {
      $('.nav-wizard-primary').removeClass('active');
      $(this).remove();
    });



    // var map = L.map('map').setView([11.206051, 122.447886], 8);

    var myIcon = L.icon({
      iconUrl: 'images/basic_geolocalize-01.svg',
      iconSize: [40, 45],
    });
    var locations = [
      ['<b>Loaction Name</b>', 11.8166, 122.0942],
    ];
    L.tileLayer(
      'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18,
    }).addTo(map);

    for (var i = 0; i < locations.length; i++) {
      marker = new L.marker([locations[i][1], locations[i][2]], { icon: myIcon })
        .bindPopup(locations[i][0])
        .addTo(map);
    }


    $('#smartwizard').smartWizard({
      theme: 'arrows',
      selected: 0,
      enableURLhash: false,
      toolbarSettings: {
        showNextButton: false,
        showPreviousButton: false,
      },

    });

    $(".availability-check").on("click", function () {
      $('#smartwizard').smartWizard("next");
      $('.img-offset-slide').slick('setPosition');
      var iis = $(this).closest('.tab-pane').attr('id');
      $(".nav-wizard-active span").removeClass('active');
      $("[data-id='" + iis + "']").addClass('active');
      return true;
    });

    $(".btn-nextwizard").on("click", function (e) {
      $('#smartwizard').smartWizard("next");
      // $('.result-grid').slick('setPosition');
      setTimeout(function () {
        map.invalidateSize();
      }, 100);
      var iis = $(this).closest('.tab-pane').attr('id');
      $(".nav-wizard-active span").removeClass('active');
      $("[data-id='" + iis + "']").addClass('active');
      return true;
    });

    $('.goto-guest').on("click", function (e) {
      $('#smartwizard').smartWizard("next");
      var iis = $(this).closest('.tab-pane').attr('id');
      $(".nav-wizard-active span").removeClass('active');
      $("[data-id='" + iis + "']").addClass('active');
      return true;
    })


    $(".btn-newreserve").on("click", function () {
      $('#smartwizard').smartWizard("prev");
      var iis = $(this).closest('.tab-pane').attr('id');
      $(".nav-wizard-active span").removeClass('active');
      $("[data-id='" + iis + "']").addClass('active');
      return true;
    });
    $(".btn-backwizard").on("click", function () {
      $('#smartwizard').smartWizard("prev");
      var iis = $(this).closest('.tab-pane').attr('id');
      $(".nav-wizard-active span").removeClass('active');
      $("[data-id='" + iis + "']").closest('.nv-wz').prev().prev().find('span').addClass('active');
      return true;
    });

    $('.nav-wizard-primary .nav-link').click(function () {
      $(this).closest('.nav-wizard-primary').removeClass('active');
      $(".wizard-overlay").remove();
      if ($(this).hasClass('active')) {
        var idNav = $(this).attr("href");
        var sp = idNav.split("#").join("");
        $(".nav-wizard-active span").removeClass('active');
        $("[data-id='" + sp + "']").closest('.nv-wz').prev().find('span').addClass('active');
      }
    })

    $('.policies').on('show.bs.collapse', function () {
      $('.collapse.show').each(function () {
        $(this).collapse('hide');
      });
    });

    $('.field-count-reservation').on('click', '.plus-room', function () {
      if ($(this).prev().find('.mr-1').html() < 5) {
        $(this).prev().find('.mr-1').html(function (i, val) { return val * 1 + 1 });
        $(this).closest('.field-count-reservation').find('.min-room').removeClass('disable');
        var curr = $(this).closest('.guest-pick-container').find(".col-ews");
        var currLength = curr.length + 1;
        var temp = '<div class="col-6 col-ews mb-3" id="room-' + currLength + '">' +
          '<p><b>Suite ' + currLength + '</b></p>' +
          '<div class="row align-items-center py-2">' +
          '<div class="col-7">' +
          '<p class="mb-0"><b>Adults</b></p>' +
          '</div>' +
          '<div class="col-5">' +
          '<div class="row field-count-reservation align-items-center">' +
          '<button type="button" class="min">-</button>' +
          '<div class="col text-center">' +
          '<span class="mr-1 adult-val" >1 </span>' +
          '</div>' +
          '<button type="button" class="plus mr-3">+</button>' +
          '</div>' +
          '</div>' +
          '</div>' +
          '<div class="row align-items-center py-2">' +
          '<div class="col-7">' +
          '<p class="mb-0"><b>Children</b></p>' +
          '</div>' +
          '<div class="col-5">' +
          '<div class="row field-count-reservation align-items-center">' +
          '<button type="button" class="min">-</button>' +
          '<div class="col text-center">' +
          '<span class="mr-1 child-val">1 </span>' +
          '</div>' +
          '<button type="button" class="plus mr-3">+</button>' +
          '</div>' +
          '</div>' +
          '</div>' +
          '</div>';
        $('.guest-pick-body').find('.col-ews').addClass('col-6').removeClass('col-12');
        $('.guest-pick-body .list-eoom').append(temp);
      }
      if ($(this).prev().find('.mr-1').html() > 4) {
        $(this).closest('.field-count-reservation').find('.plus-room').addClass('disable');
        $('.list-eoom').hide();
        $('.room-limit').show();
      }
    });

    $('.field-count-reservation ').on('click', '.min-room', function () {
      $(this).closest('.guest-pick-container').find('.col-ews').not(':first').last().remove();

      if ($(this).next().find('.mr-1').html() > 1) {
        $(this).next().find('.mr-1').html(function (i, val) { return val * 1 - 1 });
      }
      if ($(this).next().find('.mr-1').html() < 2) {
        $(this).closest('.field-count-reservation').find('.min-room').addClass('disable');
        $('.guest-pick-body').find('.col-ews').addClass('col-12').removeClass('col-6');

      }
      if ($(this).prev().find('.mr-1').html() != 4) {
        $(this).closest('.field-count-reservation').find('.plus-room').removeClass('disable');
        $('.list-eoom').show();
        $('.room-limit').hide();
      }
    });

    $('.field-count .plus').click(function () {
      $(this).prev().find('.mr-1').html(function (i, val) { return val * 1 + 1 });
    });
    $('.field-count .min').click(function () {
      if ($(this).next().find('.mr-1').html() > 1) {
        $(this).next().find('.mr-1').html(function (i, val) { return val * 1 - 1 });
      }
    });

    $(document).on('click', '.field-count-reservation .plus', function () {
      $(this).prev().find('.mr-1').html(function (i, val) { return val * 1 + 1 });
      $(this).closest('.field-count-reservation').find('.min').removeClass('disable');
    });
    $(document).on('click', '.field-count-reservation .min', function () {
      if ($(this).next().find('.mr-1').html() > 0) {
        $(this).next().find('.mr-1').html(function (i, val) { return val * 1 - 1 });
      }
      if ($(this).next().find('.mr-1').html() < 1) {
        $(this).closest('.field-count-reservation').find('.min').addClass('disable');
      }
    });

  </script>
</body>

</html>