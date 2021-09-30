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
        alert();
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

$(function() {

    $(".suites-slider").not('.slick-initialized').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
    });

    $('.slider-detail').not('.slick-initialized').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      prevArrow: $('.prev'),
      nextArrow: $('.next'),
    });

    $('video').mediaelementplayer({
      enableAutosize: true,
      alwaysShowControls: true,
      defaultVideoWidth: 480,
      defaultVideoHeight: 270,
      videoWidth: -1,
      videoHeight: -1,
      audioWidth: 400,
      audioHeight: 30,
    });

    $('.prev').click(function () {
        $('video').trigger('pause');
    });

    $('.next').click(function () {
        $('video').trigger('pause');
    });

    $("#cal1").rangeCalendar({
        minRangeWidth : 1,
        maxRangeWidth: 30,
        startRangeWidth : 1,
        start : "0",
        changeRangeCallback: rangeChanged,
    });

    
    var newArrDt = new Date(_year, _month, _day);

    var _dday = '';
    var _dmonth = '';
    var _dyear = '';
    var sp_darr = depDt.toDateString().split('-');

    if(sp_darr.length > 2){
        _dyear = sp_darr[0];
        _dmonth = sp_darr[2];
        _dday = sp_darr[1];
    }

    var newDepDt = new Date(_dyear, _dmonth, _dday);

    var defStartDay = moment(newArrDt).format('DD');
    var defStartMonth = moment(newArrDt).format('MMM');
    var defEndDay = moment(newDepDt).format('DD');
    var defEndMonth = moment(newDepDt).format('MMM');
    //$(".cal-f .cal-date").html(defStartDay +' '+ defStartMonth+' - '+ defEndDay +' '+ defEndMonth);

    function rangeChanged(target,range){
        var startDay = moment(range.start).format('DD');
        var startMonth = moment(range.start).format('MMM');
        var endDay = moment(range.end).format('DD');
        var endMonth = moment(range.end).format('MMM');
        $(".cal-f .cal-date").html(startDay +' '+ startMonth+' - '+ endDay +' '+ endMonth);
    }

    $(document).ready(function(){
        var active_cat = $("input[name='activeDestination']").val();
        console.log(active_cat);
        getDestinationPage(active_cat, '');
    });

    $(document).on('click', '.experiences', function(){
        var active_cat = $("input[name='activeDestination']").val();
        var active_exp = $(this).attr('data-exp');
        getDestinationPage(active_cat, active_exp); console.log(active_cat+', '+active_exp);
    });

    function getDestinationPage(item, active_exp){
        var mtype = $("input[name='m_type']").val();
        var _cat = item;
        getPropertyByCollection(mtype, _cat, 1, '', active_exp);
    }
    var rellax = new Rellax('.relax-offset');

    $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
      $('.result-grid').not('.slick-initialized').slick('setPosition');
      $('.collapse').removeClass('show');
      $('.slider-detail').not('.slick-initialized').slick('setPosition');
    });
});

function setMapLocation(lat, long){
    var locations = [
      ['<b>Loaction Name</b>', lat, long],
    ];

    var map = L.map('map2').setView([lat, long], 8);

    var myIcon = L.icon({
      iconUrl: 'images/basic_geolocalize-01.svg',
      iconSize: [40, 45],
    });
    L.tileLayer(
      'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18,
    }).addTo(map);

    for (var i = 0; i < locations.length; i++) {
      marker = new L.marker([locations[i][1], locations[i][2]], { icon: myIcon })
        .bindPopup(locations[i][0])
        .addTo(map);
    }
}

$(function() {
    // For header range calendar
    var pickerDate = $('#date_range').daterangepicker({
        parentEl: "#date_range_container",
        autoApply: true,
        minDate: new Date(),
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear',
        }
    });

    pickerDate.on('apply.daterangepicker', function (ev, pickerDate) {
        $('.cal-date').html(pickerDate.startDate.format('DD MMM') + ' - ' + pickerDate.endDate.format('DD MMM'));
    });
    pickerDate.data('daterangepicker').hide = function () { };
    pickerDate.data('daterangepicker').show();
});