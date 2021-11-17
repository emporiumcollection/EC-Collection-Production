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

$(document).ready(function(){
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

    $('.logo-list').slick({
      slidesToShow: 7,
      slidesToScroll: 3,
      arrows: false,
      dots: false,
      variableWidth: true,
      autoplay: true,
      autoplayTimeout: 3000,
    });

    /*$('#smartwizard').smartWizard({
      theme: 'arrows',
      selected: 0,
      enableURLhash: false,
      toolbarSettings: {
        showNextButton: false,
        showPreviousButton: false,
      },

    });*/
    $('.img-main-banner').slick({
      infinite: true,
      speed: 600,
      fade: true,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: false,
      slidesToShow: 1,

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

    $('.field-count .plus').click(function () {
      $(this).prev().find('.mr-1').html(function (i, val) { return val * 1 + 1 });
    });
    $('.field-count .min').click(function () {
      if ($(this).next().find('.mr-1').html() > 1) {
        $(this).next().find('.mr-1').html(function (i, val) { return val * 1 - 1 });
      }
    });
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

    function rangeChanged(target,range){
        var startDay = moment(range.start).format('DD');
        var startMonth = moment(range.start).format('MMM');
        var endDay = moment(range.end).format('DD');
        var endMonth = moment(range.end).format('MMM');
        $(".cal-f .cal-date").html(startDay +' '+ startMonth+' - '+ endDay +' '+ endMonth);
    }
    var rellax = new Rellax('.relax-offset');

    $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
      $('.result-grid').not('.slick-initialized').slick('setPosition');
      $('.collapse').removeClass('show');
      $('.slider-detail').not('.slick-initialized').slick('setPosition');
    });
});

var map = null;
function setMapLocation(lat, long){
    var locations = [
      ['<b>Loaction Name</b>', lat, long],
    ];

    if(!map){
      map = L.map('map2');
      map.setView([lat, long], 18);
    }else{
      map.setView([lat, long], 18);
    }

    var myIcon = L.icon({
      iconUrl: '/images/basic_geolocalize-01.svg',
      iconSize: [40, 45],
    });
    L.tileLayer(
      'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 22,
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
/*
$(window).load(function() {
  $(".loader").delay(2000).fadeOut("slow");
  $("#overlayer").delay(2000).fadeOut("slow");
});
*/
