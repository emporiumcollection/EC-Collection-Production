(function () {
  'use strict';
  $(this).scrollTop(0);
  var owl = $('.landing-slider').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    items: 1,
    autoplay: true,
    autoplayTimeout: 5000,
    mouseDrag: false,
    touchDrag: false,
    dots: true,
    dotsContainer: '#carousel-custom-dots',
    transitionStyle: "fade",
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
  });

  $('.owl-dots').on('click', 'li', function (e) {
    owl.trigger('to.owl.carousel', [$(this).index(), 300]);
  });

  $('.info-page-slide').owlCarousel({
    loop: false,
    nav: true,
    items: 1,
    dots: false,
  });

  $('.amenities-slider').owlCarousel({
    loop: false,
    nav: true,
    items: 2,
    dots: false,
    margin: 20,
  });
  $('.feature').owlCarousel({
    loop: false,
    nav: true,
    items: 3,
    dots: false,
  });
  $('.feature-img-slide').owlCarousel({
    loop: false,
    nav: true,
    items: 1,
    dots: false,
  });
  $('.lifestyle-slider').owlCarousel({
    loop: false,
    nav: true,
    items: 1,
    dots: false,

  });

  $('.losl').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    console.log('beforeChange', currentSlide, nextSlide);
  });
  $('.losl').on('afterChange', function (event, slick, currentSlide) {
    console.log('afterChange', currentSlide);
  });

  $('.feature-slide').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    items: 1,
    dots: false,
  });
  $('.deal-slide').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    items: 1,
    dots: true,
  });

  $('.fav-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 8,
    dots: false,
    center: true,
    navText: ["<span class='prev-btn'><img src='images/ico-arrow.svg'></span>", "<span class='next-btn'><img src='images/ico-arrow.svg'></span>"]
  });

  $('.hotel-cat').owlCarousel({
    loop: false,
    margin: 15,
    nav: true,
    items: 3,
    dots: false,
  });

  var $hh = $('.hotel-list-slide').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    items: 1,
    dots: false,
  });

  $(".left-side").hover(function () {
    $(".right-side").css("opacity", "0.2");
    $(".left-side").css("opacity", "1");
  });

  $(".right-side").hover(function () {
    $(".left-side").css("opacity", "0.2");
    $(".right-side").css("opacity", "1");
    $(".main-right").css("opacity", "1");
  });


  $(".left-side").hover(function () {
    $(".right-side").css("opacity", "0.2");
    $(".left-side").css("opacity", "1");
  });

  $('#tabs .tab-link').click(function (e) {
    e.preventDefault();
    $(".right-side").css("opacity", "1");
    $('#tabs .tab-link').removeClass('active');
    $(this).addClass('active');
    var t = $(this).attr('data-link');
    $('.tab-em').removeClass('active animated fadeIn');
    $(t).addClass('active animated fadeIn');
  });

  $('#tabs-nav .tab-link').click(function (e) {
    e.preventDefault();
    $('#tabs-nav .tab-link').removeClass('active');
    $(this).addClass('active');
    var t = $(this).attr('data-link');
    $('.tab-em-nav').removeClass('active animated fadeIn');
    $(t).addClass('active animated fadeIn');
    $(".main-right").css("opacity", "0.2");
    $('.fav-slider-top').removeClass('active animated fadeIn');
    $('.content').css('height', 'calc(100vh - 111px)');
    $('.calendar-btn').removeClass('active');
  });
  $(document).on('click', '#tabs-nav .tab-link', function () {
    $(".left-side").css("opacity", "1");
  });

  $('.fullpage').click(function (e) {
    e.preventDefault();
    var df = $(this).attr('data-fullpage');
    $(df).addClass('active animated fadeIn');

  });

  $('.close-fullpage').click(function () {
    $(this).closest('.fullpage-content').removeClass('active animated fadeIn');
  });

  $('.favoicon').click(function () {
    $(this).toggleClass('on');
  });

  $('.btn-favorite').click(function (e) {
    e.preventDefault();
    $(this).closest('.favoicon').toggleClass('on');
  });

  $('.page-close').click(function (e) {
    e.preventDefault();
    $('#tabs-nav .tab-link').removeClass('active');
    var t = $(this).attr('data-link');
    $('.tab-em-nav').removeClass('active animated fadeIn');
    $(t).addClass('active animated fadeIn');
    $('.calendar-btn').removeClass('active');
    $('.fav-slider-top').removeClass('active');
    $('.content').css('height', 'calc(100vh - 111px)');
  });

  $('.search').click(function (e) {
    e.preventDefault();
    $('.search-left').addClass('active');
    $('.searchfield').addClass('active');
    $('.searchfield input').focus();
  });


  $('.search-filter').click(function () {
    var cls = $(this).closest('.header-main');
    var menuBtn = $(".menu-btn");
    cls.find('.logo-2').hide();
    cls.find('#tabs-nav a').not(menuBtn).hide();
    menuBtn.addClass('close-search close-search-filter');
    menuBtn.find('.ico').removeClass('ico-menu-b').addClass('ico-close');
    $('.filter-price').hide();
  });

  $('.header-main').on('click', '.close-search-filter', function () {
    var cls = $(this).closest('.header-main');
    var menuBtn = $(".menu-btn");
    cls.find('.logo-2').show();
    cls.find('#tabs-nav a').show();
    menuBtn.removeClass('close-search close-search-filter');
    menuBtn.find('.ico').removeClass('ico-close').addClass('ico-menu-b');
    $('.search-left').removeClass('active');
    $('.filter-price').show();
  });


  $('.search--092092').click(function (e) {
    e.preventDefault();
    $('.search-ico-lst').toggleClass('show');
  });
  $('.close-search').click(function (e) {
    e.preventDefault();
    $('.search-left').removeClass('active');
    $('.searchfield').removeClass('active');
  });

  $('.fav-btn').click(function () {
    $('.fav-slider-top').addClass('active animated fadeIn');
    $('.calendar-btn').addClass('active');
    $('.content').css('height', 'calc(100vh - 200px)');
    $hh.trigger('refresh.owl.carousel');
  });

  $('.search-fl').click(function () {
    $('.search-landing i').addClass('ico-search').removeClass('ico-search-w');
    $('.mc-fl i').addClass('ico-mic').removeClass('ico-mic-w');
    $('.menu-fl i').addClass('ico-menu-b').removeClass('ico-menu');
    $('.menu-fl-2 i').addClass('ico-user-single-2').removeClass('ico-user-single');
    $('.t-logo').addClass('logo-2').removeClass('logo');
    $('.header-w-search').addClass('bg-white');
  });
  $('.close-in').click(function () {
    $('.search-landing i').addClass('ico-search-w').removeClass('ico-search');
    $('.mc-fl i').addClass('ico-mic-w').removeClass('ico-mic');
    $('.menu-fl i').addClass('ico-menu').removeClass('ico-menu-b');
    $('.menu-fl-2 i').addClass('ico-user-single').removeClass('ico-user-single-2');

    $('.t-logo').addClass('logo').removeClass('logo-2');
    $('.header-w-search').removeClass('bg-white');

  });

  $('#tabs-nav .tab-compare').click(function (e) {
    e.preventDefault();
    var t = $(this).attr('data-compare');
    $(t).addClass('active animated fadeIn');
  });

  $(document).on('keyup', '.where', function () {
    if ($(this).val() == '') {
      $('.wherepopup').hide();
      $('.wherepopup').slideUp(300);
    } else {
      $('.wherepopup').show();
    }

  });

  $('#clear_search').click(function(){
    $(this).closest('.search-field').find('.where').val("");
    $('#searchF').collapse('hide')
  })

  $('.wherepopup .nav-link').click(function () {
    var asd = $(this).find('.city-l').html();
    $('.where').val(asd);
    $(this).closest('.where-container').removeClass('show');
    $('.when-container').addClass('show');
    $('.wherepopup').hide();
    $('.landing-slider').hide();
    console.log(asd);
  });

  $(document).mouseup(function (event) {
    var $trigger = $(".wherepopup");
    if ($trigger !== event.target && !$trigger.has(event.target).length) {
      $('.wherepopup').hide();
    }
  });

  $('.step-3').click(function () {
    $(this).closest('.when-container').removeClass('show');
    $('.who-container').addClass('show');
  });

  $('.all-drop').click(function (e) {
    e.preventDefault();
    $('.all-result').fadeIn();
  });

  $(document).mouseup(function (event) {
    var $trigger = $(".all-result");
    if ($trigger !== event.target && !$trigger.has(event.target).length) {
      $('.all-result').fadeOut();
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

  $(document).on('click', '.field-count-guest .plus', function () {
    $(this).prev().find('.mr-1').html(function (i, val) { return val * 1 + 1 });
    $(this).closest('.field-count-guest').find('.min').removeClass('disable');
  });
  $(document).on('click', '.field-count-guest .min', function () {
    if ($(this).next().find('.mr-1').html() > 0) {
      $(this).next().find('.mr-1').html(function (i, val) { return val * 1 - 1 });
    }
    if ($(this).next().find('.mr-1').html() < 1) {
      $(this).closest('.field-count-guest').find('.min').addClass('disable');
    }
  });
  $(document).mouseup(function (event) {
    var $trigger = $(".dropped");
    if ($trigger !== event.target && !$trigger.has(event.target).length) {
      $('.dropped').removeClass('active');
    }
  });
  $('.data-drop').click(function (e) {
    e.preventDefault();
    $('.dropped').addClass('active');
  })

  $('.save-filter-guest').click(function (e) {
    e.preventDefault();
    $('.dropped').removeClass('active');
    $('.dropdown-menu').removeClass('show');
  })

  $('.gallerylink').click(function (e) {
    e.preventDefault();
    var g = $(this).attr('data-popup');
    $(g).addClass('active animated fadeIn');
  })

  $('.popup-close').click(function (e) {
    e.preventDefault();
    $('.popup').removeClass('active animated fadeIn');
  })

  $('.page-closeslide').click(function (e) {
    e.preventDefault();
    $(this).parent().removeClass('active');
  })

  $('select').select2({
    theme: "bootstrap",
    minimumResultsForSearch: -1
  });

  $('.phone-no').select2({
    theme: "bootstrap",
    minimumResultsForSearch: -1,
    placeholder: "Choose No"
  });
  $('.countryform').select2({
    theme: "bootstrap",
    minimumResultsForSearch: -1,
    placeholder: "Country"
  });
  $('.cityform').select2({
    theme: "bootstrap",
    minimumResultsForSearch: -1,
    placeholder: "City"
  });

  $('.my-tooltip .ico').hover(function () {
    var dt = $(this).attr('data-tool');
    $(dt).toggleClass('active');
  })
  $('.dropprice').click(function (e) {
    e.stopPropagation();
  });
  $('.list-prs .btn-prc-title').click(function (e) {
    e.preventDefault();
    var pp = $(this).attr('data-price');
    $(pp).toggleClass('active');
    $(this).find('.arrow-down').toggleClass('toup');
  })

  $('.filter-tag').on('click', '.close-tag', function (e) {
    e.preventDefault();
    $(this).closest('.filter-tag').remove();
    console.log('clicked');

  })
  $('.popup-close').click(function (e) {
    e.preventDefault();
    $(this).closest('.compare-row').removeClass('active animated fadeIn');
  })

  $('.header-main').on('click', '.oncl', function () {
    $('.filter-container-fl').hide();
    var filterEl = $(this).attr('data-filter');
    $(filterEl).show();
    $('.search-left').addClass('active');
    var cls = $(this).closest('.header-main');
    var menuBtn = $(".menu-btn");
    cls.find('.logo-2').hide();
    cls.find('#tabs-nav a').not(menuBtn).hide();
    menuBtn.addClass('close-search close-search-filter');
    menuBtn.find('.ico').removeClass('ico-menu-b').addClass('ico-close');
    $('.filter-price').hide();
  });


  $('.heading-collsp').click(function () {
    $(this).closest('.collsp').toggleClass('show');
  })


  $('.first-option .nav-link').click(function (e) {
    e.preventDefault();
    $('.arrow--12').addClass('arrow-right');
    $('.nav-link').removeClass('active');
    $(this).removeClass('arrow-right').addClass('active');
    $('.guest-option').removeClass('option--selected');
    var er = $(this).attr('data-guest');
    $(er).addClass("option--selected");
    $('.rto').hide();
    $('.first-option').removeClass('active');
    $(this).closest('.first-option').addClass('active');
  });


  $('.field-count-guest').on('click', '.plus-room', function () {
    if ($(this).prev().find('.mr-1').html() < 5) {
      $(this).prev().find('.mr-1').html(function (i, val) { return val * 1 + 1 });
      $(this).closest('.field-count-guest').find('.min-room').removeClass('disable');
      var curr = $(this).closest('.guest-pick-container').find(".col-ews");
      var currLength = curr.length + 1;
      var temp = '<div class="col-6 col-ews mb-3" id="room-' + currLength + '">' +
        '<p><b>Suite ' + currLength + '</b></p>' +
        '<div class="row align-items-center py-2">' +
        '<div class="col-7">' +
        '<p class="mb-0"><b>Adults</b></p>' +
        '</div>' +
        '<div class="col-5">' +
        '<div class="row field-count-guest align-items-center">' +
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
        '<div class="row field-count-guest align-items-center">' +
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
      $(this).closest('.field-count-guest').find('.plus-room').addClass('disable');
      $('.list-eoom').hide();
      $('.room-limit').show();
    }
  });

  $('.field-count-guest ').on('click', '.min-room', function () {
    $(this).closest('.guest-pick-container').find('.col-ews').not(':first').last().remove();

    if ($(this).next().find('.mr-1').html() > 1) {
      $(this).next().find('.mr-1').html(function (i, val) { return val * 1 - 1 });
    }
    if ($(this).next().find('.mr-1').html() < 2) {
      $(this).closest('.field-count-guest').find('.min-room').addClass('disable');
      $('.guest-pick-body').find('.col-ews').addClass('col-12').removeClass('col-6');

    }
    if ($(this).prev().find('.mr-1').html() != 4) {
      $(this).closest('.field-count-guest').find('.plus-room').removeClass('disable');
      $('.list-eoom').show();
      $('.room-limit').hide();
    }
  });
  
  $('.quick-prev').slick({
    slidesToShow: 1,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
  });
  $(document).on('click', '.confirm-room', function () {
    var adultCount = 0;
    var childCount = 0;
    $('.adult-val').each(function () {
      adultCount += parseFloat($(this).html());
    });
    $('.child-val').each(function () {
      childCount += parseFloat($(this).html());
    });
    var totalGuest = parseFloat(adultCount + childCount);
    $('.guest-count').html(totalGuest);
    $('#whoF').collapse('hide');
    $('.quick-prev').slick({
      slidesToShow: 1,
      prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
      nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
    });
  });
  $(document).on('click', '.confirm-guest', function () {
    var adultCount = 0;
    var childCount = 0;
    $('.adult-val').each(function () {
      adultCount += parseFloat($(this).html());
    });
    $('.child-val').each(function () {
      childCount += parseFloat($(this).html());
    });
    var totalGuest = parseFloat(adultCount + childCount);
    $('.guest-count').html(totalGuest);
    $('#whoF').collapse('hide');
    $('.quick-prev').slick({
      slidesToShow: 1,
      prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
      nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
    });
  });

  $('.whereinner').on('click', '.nav-link', function (e) {
    e.preventDefault();
    var result = $(this).find('span').html();
    $('.where').val(result);
  })



  new WOW().init();

  $(document).ready(function () {

    if (window.XMLHttpRequest) {
      window.onscroll = function () {
        if ($('body').scrollTop() > 175 || $('html').scrollTop() > 175) {
          if ($(window).height() > 20) {
            $('.onstick').addClass('sidebarFixed');
          }
        }
        else {
          $('.onstick').removeClass('sidebarFixed');
        }
        // if ($('body').scrollTop() > 100 || $('html').scrollTop() > 100) {
        //   if ($(window).height() > 20) {
        //     $('.onstickmainpage2').addClass('sidebarFixedpages');
        //   }
        // }
        // else {
        //   $('.onstickmainpage2').removeClass('sidebarFixedpages');
        // }
        

        if ($('body').scrollTop() > 200 || $('html').scrollTop() > 200) {
          if ($(window).height() > 20) {
            $('.map-location').addClass('location-sticky');
          }
        }
        else {
          $('.map-location').removeClass('location-sticky');
        }
      };
    }
  });


  $('.humburger-menu').click(function () {
    $('.menu').addClass('show');
    $('body').addClass('noscrool');
  });
  $('.close-menu').click(function () {
    $('.menu').removeClass('show');
    $('body').removeClass('noscrool');
  });
  $('.menu-show').click(function (e) {
    e.preventDefault();
    $('.menu-main').toggleClass('show');
  });

  $(document).on('click', '.tab-link', function (e) {
    e.preventDefault();
    var t = $(this).attr('data-link');
    $('.tab-em').removeClass('active')
    $(t).addClass('active animated fadeIn');
    $('.testi-slide').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      dots: false,
      vertical: true,
      verticalSwiping: true,
      autoplaySpeed: 2000,
      centerMode: true,
    });
  });

  $('.result-grid').slick({
    slidesToShow: 1,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
  });

  $('.img-offset-slide').slick({
    slidesToShow: 1,
    // swipeToSlide: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
  });

  $("#cal1").rangeCalendar({
    minRangeWidth: 1,
    maxRangeWidth: 30,
    startRangeWidth: 1,
    start: "0",
    changeRangeCallback: rangeChanged,
  });
  function rangeChanged(target, range) {
    var startDay = moment(range.start).format('DD');
    var startMonth = moment(range.start).format('MMM');
    var endDay = moment(range.end).format('DD');
    var endMonth = moment(range.end).format('MMM');
    $(".cal-f .cal-date").html(startDay + ' ' + startMonth + ' - ' + endDay + ' ' + endMonth);
  }
  var clHeight = $('#cityList').height();
  $('#dashF').on('hidden.bs.collapse', function () {
    $('.onstick').css({
      "position": "",
      "top": "219px"
    });
  });
  $('#dashF').on('shown.bs.collapse', function () {
    $('.onstick').css({
      'position': 'fixed',
      'top': '500px'
    });
  });
  $('#calcF').on('hidden.bs.collapse', function () {
    $('.onstick').css({
      "position": "",
      "top": "219px"
    });
  });
  $('#calcF').on('shown.bs.collapse', function () {
    $('.onstick').css({
      'position': 'fixed',
      'top': '395px'
    });
  });
  $('#whoF').on('hidden.bs.collapse', function () {
    $('.onstick').css({
      "position": "",
      "top": "219px"
    });
  });
  $('#whoF').on('shown.bs.collapse', function () {
    $('.onstick').css({
      'position': 'fixed',
      'top': '570px'
    });
  });

  var clHeight = $('#cityList').height();
  $('#cityList').on('shown.bs.collapse', function () {
    $('.onstick').css({
      'position': 'fixed',
      'top': clHeight + 249
    });
  });

  $('#cityList').on('hidden.bs.collapse', function () {
    $('.onstick').css({
      "position": "",
      "top": "219px"
    });
  });

  $('#cityList').on('click', '.nav-link', function () {
    var ta = $(this).find('.city-name-nav').html();
    $('.city-f').html(ta);
  });

  $(document).on('click', function (e) {
    var menu_opened = $('.clp').hasClass('show');
    if (!$(e.target).closest('.clp').length &&
      !$(e.target).is('.clp') &&
      menu_opened === true) {
      $('.clp').collapse('hide');
      $('.onstick').css({
        "position": "",
        "top": "219px"
      });
    }
  });
  $('.login-side').click(function (e) {
    e.preventDefault();
    $('.open-side').addClass('show');
    $('.auth-signin').addClass('active');
  })
  $('.register-side').click(function (e) {
    e.preventDefault();
    $('.open-side').addClass('show');
    $('.auth-signup').addClass('active');

  })
  $('.auth-close').click(function (e) {
    e.preventDefault();
    $('.open-side').removeClass('show');
    setTimeout(function () {
      $('.auth-content').removeClass('active');
    }, 800);

  })

  $('.btn-auth').click(function () {
    var dtm = $(this).attr('data-member');
    $('.auth-content').removeClass('active');
    $(dtm).addClass('active');
    $('.btn-auth').removeClass('active')
    $(this).addClass('active');
  });

  $('.sidebar-nav').click(function (e) {
    e.preventDefault();
    $('.sidebar').addClass('show');
    $('body').append('<div class="sidebar-overlay"></div>');
  });
  $('.sidebar-close').click(function (e) {
    e.preventDefault();
    $('.sidebar').removeClass('show');
    $('.sidebar-overlay').remove();
  });

  
  $('.btn-sidebar').click(function (e) {
    e.preventDefault();
    var dataClick = $(this).attr('data-sidebar');
    $(dataClick).addClass('show');
    $('body').css('overflow', 'hidden');
    $(dataClick).closest('body').append('<div class="sidebar-overlay"></div>');
    // setTimeout(function () {
    //   map.invalidateSize();
    // }, 10);
  });
  $(".close-sidebar, .sidebar-back").click(function (e) {
    e.preventDefault();
    $(this).closest('.sidebar-main').removeClass('show');
    $(this).closest('body').css('overflow', 'auto');
    $('.sidebar-overlay').remove();
  });
  $('body').on('click', '.sidebar-overlay', function () {
    $('.sidebar-main').removeClass('show');
    $('.sidebar-overlay').remove();
    $('body').css('overflow', 'auto');
    $('.sidebar').removeClass('show');
  });
  $('.suite-list').on('click', '.select-sd', function (e) {
    e.preventDefault();
    $('.suite-board').removeClass('active');
    $('.suite-tumb').removeClass('hide');
    $(this).closest('.suite-list').find('.suite-board').addClass('active');
    $(this).closest('.suite-list').find('.suite-tumb').addClass('hide');
    $('.suite-list').css('opacity', '.3');
    $(this).closest('.suite-list').css('opacity', '1');
  });
  $('.suite-list').on('click', '.board-close', function (e) {
    e.preventDefault();
    $('.suite-board').removeClass('active');
    $('.suite-tumb').removeClass('hide');
    $('.suite-list').css('opacity', '1');
  });

  lightGallery(document.getElementById('gallery_hotel'), {
    thumbnail: false,
    currentPagerPosition: 'middle',
    download: false,
    share: true,
    escKey: false,
    closable: false
  });
  lightGallery(document.getElementById('gallery_restaurant'), {
    thumbnail: false,
    currentPagerPosition: 'middle',
    download: false,
    share: true,
    closable: false
  });
  lightGallery(document.getElementById('gallery_bars'), {
    thumbnail: false,
    currentPagerPosition: 'middle',
    download: false,
    share: true,
    closable: false
  });
  lightGallery(document.getElementById('gallery_experience'), {
    thumbnail: false,
    currentPagerPosition: 'middle',
    download: false,
    share: true,
    closable: false
  });
  lightGallery(document.getElementById('gallery_suite'), {
    thumbnail: false,
    currentPagerPosition: 'middle',
    download: false,
    share: true,
    closable: false
  });

  $('.suite-propa').click(function (e) {
    e.stopPropagation();
  })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function () {
    $('.result-grid').slick('setPosition');
  })
  $('a[data-toggle="pill"]').on('shown.bs.tab', function () {
    $('.result-grid').slick('setPosition');
  })

  $('#transfers').on('shown.bs.collapse', function () {
    $('.result-grid').slick('setPosition');
  })
  $('#inroom-amenities').on('shown.bs.collapse', function () {
    $('.result-grid').slick('setPosition');
  })
  $('#spa-service').on('shown.bs.collapse', function () {
    $('.result-grid').slick('setPosition');
  })
  $('#experiences').on('shown.bs.collapse', function () {
    $('.result-grid').slick('setPosition');
  })


  // $('video').mediaelementplayer({
  //   enableAutosize: true,
  //   alwaysShowControls: true,
  // });

  $('.prev').click(function () {
    $('video').trigger('pause');
  });
  $('.next').click(function () {
    $('video').trigger('pause');
  });

  $('.slider-detail').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    // autoplay: true,
    // autoplaySpeed: 6000,
  });
  
  lightGallery(document.getElementById('sliderDetail'), {
    thumbnail: false,
    currentPagerPosition: 'middle',
    download: false,
    share: true,
    closable: false,
    selector: '.slick-slide:not(.slick-cloned) .slider-item-inner',
  });


  $('#smartwizard').smartWizard({
    theme: 'arrows',
    selected: 0,
    enableURLhash: false,
    toolbarSettings: {
      showNextButton: false,
      showPreviousButton: false,
    },

  });

  
  $('#whoF').on('shown.bs.collapse', function () {
    $('.img-offset-slide').slick('setPosition');
  })
  $('#calcF').on('shown.bs.collapse', function () {
    $('.img-offset-slide').slick('setPosition');
  })
  $('.close-header').click(function(e){
    e.preventDefault()
    $('.collapse').collapse('hide');
  })
  

  $('#view-deal').on('show.bs.collapse', function () {
    $('#view-detail').collapse('hide');
    $('#price-detail').collapse('hide');
  });
  $('#view-detail').on('show.bs.collapse', function () {
    $('#view-deal').collapse('hide');
    $('#price-detail').collapse('hide');
  });
  $('#price-detail').on('show.bs.collapse', function () {
    $('#view-deal').collapse('hide');
    $('#view-detail').collapse('hide');
  });

  $('.board-close').click(function (e) {
    e.preventDefault();
    $('#price-detail').collapse('hide');
  });

  $('.additional-collapse').on('show.bs.collapse', function () {
    $(this).parent('.card').find('.fa-minus').show();
    $(this).parent('.card').find('.fa-plus').hide();
  })
  $('.additional-collapse').on('hide.bs.collapse', function () {
    $(this).parent('.card').find('.fa-minus').hide();
    $(this).parent('.card').find('.fa-plus').show();
  })
  $('.add').click(function () {
    $(this).prev().val(+$(this).prev().val() + 1);
  });
  $('.sub').click(function () {
    if ($(this).next().val() > 1) {
      if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    }
  });

  $('.booking-select').click(function (e) {
    e.preventDefault();
    $(this).closest('.additional-list').find('.booking-qty').addClass('hide');
    $(this).closest('.additional-list').find('.confirm-qty').addClass('show');
    $(this).closest('.additional-list').find('.title-additional-list').hide();
    $(this).closest('.additional-list').find('.added').show();
    $(this).closest('.additional-list').find('.add-txt').css('height', 'auto');
    $(this).closest('.additional-list').find('.remove-booking').show();
    $(this).html("Added to booking");
  });
  $('.remove-booking').click(function (e) {
    e.preventDefault();
    $(this).closest('.additional-list').find('.booking-qty').removeClass('hide');
    $(this).closest('.additional-list').find('.confirm-qty').removeClass('show');
    $(this).closest('.additional-list').find('.booking-select').html("Select");
    $(this).closest('.additional-list').find('.title-additional-list').show();
    $(this).closest('.additional-list').find('.add-txt').css('height', '100%');
    $(this).closest('.additional-list').find('.added').hide();
    $(this).hide();
  });
  $('.select-country').select2({
    theme: "bootstrap",
    minimumResultsForSearch: 0

  });
  $(function () {
    $(".reviews-mobile").slice(0, 4).show();
    $("#loadMore").on('click', function (e) {
      e.preventDefault();
      $(".reviews-mobile:hidden").slice(0, 4).slideDown();
      if ($(".reviews-mobile:hidden").length == 0) {
        $(this).hide();
      }
    });
  });
  $(function () {
    $(".reviews-sidebar").slice(0, 4).show();
    $("#loadMore").on('click', function (e) {
      e.preventDefault();
      $(".reviews-sidebar:hidden").slice(0, 4).slideDown();
      if ($(".reviews-sidebar:hidden").length == 0) {
        $(this).hide();
      }
    });
  });
  $('.swipe-collection').owlCarousel({
    items: 4,
    margin: 20,
    autoWidth: true,
    afterInit: setWidth()
  });
  function setWidth() {
    var carWidth = $('.owl-stage').width() + 100;
    $('.owl-stage').width(carWidth);
  }
  $('.swipe-action-btn').click(function () {
    $(this).closest('.swipe-action').find('.swipe-action-content').toggleClass('clicked');
  });
  $('.swipe-item').mouseleave(function () {
    $('.swipe-action-content').removeClass('clicked')
  });
  $('#price-detail').on('show.bs.collapse', function () {
    $('#view-deal').collapse('hide');
    $('#view-detail').collapse('hide');
  });
  var barLnght = 0;
  $('.mail-outer').on('click', '.btn-new-mail-form', function () {
    barLnght++;
    if (barLnght < 3) {
      var mailTmp1 = '<div class="row mail-list ">' +
        '<div class="col">' +
        '<label>First Name</label>' +
        '<input type="text" class="form-control" placeholder="">' +
        '</div>' +
        '<div class="col">' +
        '<label>Last Name</label>' +
        '<input type="text" class="form-control" placeholder="">' +
        '</div>' +
        '<div class="col">' +
        ' <label>Email</label>' +
        '<input type="email" class="form-control" placeholder="">' +
        '</div>' +
        '<div class="col-add pr-3">' +
        '<a href="#" class="btn btn-add-collection is-small btn-new-mail-form">' +
        '+' +
        '</a>' +
        '</div>' +
        '</div>';

      $('.mail-outer').append(mailTmp1);
      $(this).text('-');
      $(this).toggleClass('btn-new-mail-form btn-remove-mail');
    } else {
      var mailTmp2 = '<div class="row mail-list ">' +
        '<div class="col">' +
        '<label>First Name</label>' +
        '<input type="text" class="form-control" placeholder="">' +
        '</div>' +
        '<div class="col">' +
        '<label>Last Name</label>' +
        '<input type="text" class="form-control" placeholder="">' +
        '</div>' +
        '<div class="col">' +
        ' <label>Email</label>' +
        '<input type="email" class="form-control" placeholder="">' +
        '</div>' +
        '<div class="col-add pr-3">' +
        '<a href="#" class="btn btn-add-collection is-small btn-remove-mail">' +
        '-' +
        '</a>' +
        '</div>' +
        '</div>';
      $('.mail-outer').append(mailTmp2);
      $(this).text('-');
      $(this).toggleClass('btn-new-mail-form btn-remove-mail');
    }
  })

  $('.mail-outer').on('click', '.btn-remove-mail', function () {
    barLnght--;
    if (barLnght < 3) {
      $(this).closest('.mail-list').remove();
      $('.mail-list:last-child').find('.btn-remove-mail').toggleClass('btn-remove-mail btn-new-mail-form').html('+');
    }

  })


  $('.btn-diamon').click(function (e) {
    e.preventDefault();
    $(this).closest('.my-dropdown').find('.dropdown-wrapper').addClass('show');
  });
  $('.create-collection').click(function () {
    $('#addCollaction').collapse('show');
  });

  $('.success-message').hide();
  $(".shared-collection").submit(function (e) {
    e.preventDefault();
    $('.success-message').show();
    setTimeout(function () {
      $('.success-message').hide();
    }, 2000);
  });

  $(document).on("scroll", function () {
    if ($(document).scrollTop() > 100) {
      $(".second-header").addClass("show");
    }
    else {
      $(".second-header").removeClass("show");
    }
  });

  $('.close-collapse').click(function (e) {
    e.preventDefault();
    $('#destination-menu').collapse('hide');
  })

  $('.start-intro').on('click', function (e) {
    e.preventDefault();
    var intro = introJs();
    intro.setOptions({
      exitOnOverlayClick: false,
      showBullets: false,
    });
    intro.onchange(function (targetElement) {
      // and show modal on Step 4
      if ($(targetElement).attr("data-step") == 5) {
        $('#checkAvailability').css({
          "right": "0",
          "display": "block",
        });
        $('.title-offset').css('z-index', '0');
        $('.my-dropdown').css('z-index', '0');

        $('.introjs-tooltipReferenceLayer').addClass('sidebar-tooltip');
        intro.setOptions({
          highlightClass: 'sidebar-intro',
        })
      }
      if ($(targetElement).attr("data-step") == 6) {
        intro.setOptions({
          highlightClass: 'sidebar-intro-ch',
        })
        $('.introjs-tooltipReferenceLayer').removeClass('sidebar-tooltip');
        $('.introjs-tooltipReferenceLayer').addClass('sidebar-tooltip-ch');
      }
      if ($(targetElement).attr("data-step") == 7) {
        $('.include-form').css('display', 'block');
        intro.setOptions({
          highlightClass: 'sidebar-int',
        })
      }

      if (($(targetElement).attr("data-step") != 5) && ($(targetElement).attr("data-step") != 6)) {
        $("#checkAvailability").css({
          "right": "0",
          "display": "none",
        });
        $(".my-dropdown").css('z-index', '9');
        $('.introjs-helperLayer').removeClass('sidebar-intro-ch');
        $('.introjs-tooltipReferenceLayer').removeClass('sidebar-tooltip-ch');
      }

    })
    intro.start();
  })

  $("#price_range").slider({
    min: 0,
    max: 900,
    step: 1,
    range: true,
    values: [80, 824],
    slide: function (event, ui) {
      for (var i = 0; i < ui.values.length; ++i) {
        $(".priceValue[data-index=" + i + "]").val(ui.values[i]);
      }
    }
  });

  $(".priceValue").change(function () {
    var $this = $(this);
    $("#price_range").slider("values", $this.data("index"), $this.val());
  });

  $('.suite-tab-detail').on('scroll', function () {
    $('.action-hotel-sticky').addClass('show');
  });

  $('.weekselect .custom-control-input').change(function () {
    var valDta = $(this).val();
    $('.valweak').html(valDta);
  });

  $('.monthselect .custom-control-input').change(function () {
    var valDta = $(this).attr('id');
    $('[data-id="' + valDta + '"]').toggleClass('show');
    $(this).toggleClass('checked');
  });

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
    $('#calcF').collapse('hide')
    $('#whoF').collapse('show')
  });
  pickerDate.data('daterangepicker').hide = function () { };
  pickerDate.data('daterangepicker').show();

  $('.humburger-menu-sidebar').click(function(){
    $(this).closest('.sidebar-nav-section').find('.nav-collapse').toggleClass('show')
  })

  $('.close-second-menu').click(function(e){
    e.preventDefault();
    $(this).closest('.sidebar-nav-section').find('.nav-collapse').removeClass('show')
  })

  $(document).on('click', '.nav-link-sub ', function(){
    $('.nav-collapse').removeClass('show');
  })

  $('.humburger-second-menu').click(function(){
		$('.humburger-menu-mobile').toggleClass('open');
	});
  $('.humburger-landing-menu').click(function(){
		$('.menu-landing-mobile').toggleClass('show');
	});
  $('.humburger-second-menu').click(function(){
    $(this).closest('body').find('.nav-collapse').toggleClass('show')
  })


  var sidebar = new StickySidebar('#sidebar', {
    containerSelector: '#main-content',
    innerWrapperSelector: '.sidebar-nav-section',
    topSpacing: 90,
    bottomSpacing: 30
  });
  if ($(window).width() < 998) {
    sidebar.destroy();
  }

  $('.dropdown-inner .custom-control, .dropdown-inner').click(function(e){
    e.stopPropagation()
    console.log("asd");
  })

})();
