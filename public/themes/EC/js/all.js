var SHOW_PARENT_CITIES = 0;
var ajaxReq = 'ToCancelPrevReq';
(function ($) {

  $.fn.niceSelect = function (method) {

    // Methods
    if (typeof method == 'string') {
      if (method == 'update') {
        this.each(function () {
          var $select = $(this);
          var $dropdown = $(this).next('.nice-select');
          var open = $dropdown.hasClass('open');

          if ($dropdown.length) {
            $dropdown.remove();
            create_nice_select($select);

            if (open) {
              $select.next().trigger('click');
            }
          }
        });
      } else if (method == 'destroy') {
        this.each(function () {
          var $select = $(this);
          var $dropdown = $(this).next('.nice-select');

          if ($dropdown.length) {
            $dropdown.remove();
            $select.css('display', '');
          }
        });
        if ($('.nice-select').length == 0) {
          $(document).off('.nice_select');
        }
      } else {
        console.log('Method "' + method + '" does not exist.');
      }
      return this;
    }

    // Hide native select
    this.hide();

    // Create custom markup
    this.each(function () {
      var $select = $(this);

      if (!$select.next().hasClass('nice-select')) {
        create_nice_select($select);
      }
    });

    function create_nice_select($select) {
      $select.after($('<div></div>')
        .addClass('nice-select')
        .addClass($select.attr('class') || '')
        .addClass($select.attr('disabled') ? 'disabled' : '')
        .attr('tabindex', $select.attr('disabled') ? null : '0')
        .html('<span class="current"></span><ul class="list"></ul>')
      );

      var $dropdown = $select.next();
      var $options = $select.find('option');
      var $selected = $select.find('option:selected');

      $dropdown.find('.current').html($selected.data('display') || $selected.text());

      $options.each(function (i) {
        var $option = $(this);
        var display = $option.data('display');

        $dropdown.find('ul').append($('<li></li>')
          .attr('data-value', $option.val())
          .attr('data-display', (display || null))
          .addClass('option' +
            ($option.is(':selected') ? ' selected' : '') +
            ($option.is(':disabled') ? ' disabled' : ''))
          .html($option.text())
        );
      });
    }

    /* Event listeners */

    // Unbind existing events in case that the plugin has been initialized before
    $(document).off('.nice_select');

    // Open/close
    $(document).on('click.nice_select', '.nice-select', function (event) {
      var $dropdown = $(this);

      $('.nice-select').not($dropdown).removeClass('open');
      $dropdown.toggleClass('open');

      if ($dropdown.hasClass('open')) {
        $dropdown.find('.option');
        $dropdown.find('.focus').removeClass('focus');
        $dropdown.find('.selected').addClass('focus');
      } else {
        $dropdown.focus();
      }
    });

    // Close when clicking outside
    $(document).on('click.nice_select', function (event) {
      if ($(event.target).closest('.nice-select').length === 0) {
        $('.nice-select').removeClass('open').find('.option');
      }
    });

    // Option click
    $(document).on('click.nice_select', '.nice-select .option:not(.disabled)', function (event) {
      var $option = $(this);
      var $dropdown = $option.closest('.nice-select');

      $dropdown.find('.selected').removeClass('selected');
      $option.addClass('selected');

      var text = $option.data('display') || $option.text();
      $dropdown.find('.current').text(text);

      $dropdown.prev('select').val($option.data('value')).trigger('change');
    });

    // Keyboard events
    $(document).on('keydown.nice_select', '.nice-select', function (event) {
      var $dropdown = $(this);
      var $focused_option = $($dropdown.find('.focus') || $dropdown.find('.list .option.selected'));

      // Space or Enter
      if (event.keyCode == 32 || event.keyCode == 13) {
        if ($dropdown.hasClass('open')) {
          $focused_option.trigger('click');
        } else {
          $dropdown.trigger('click');
        }
        return false;
        // Down
      } else if (event.keyCode == 40) {
        if (!$dropdown.hasClass('open')) {
          $dropdown.trigger('click');
        } else {
          var $next = $focused_option.nextAll('.option:not(.disabled)').first();
          if ($next.length > 0) {
            $dropdown.find('.focus').removeClass('focus');
            $next.addClass('focus');
          }
        }
        return false;
        // Up
      } else if (event.keyCode == 38) {
        if (!$dropdown.hasClass('open')) {
          $dropdown.trigger('click');
        } else {
          var $prev = $focused_option.prevAll('.option:not(.disabled)').first();
          if ($prev.length > 0) {
            $dropdown.find('.focus').removeClass('focus');
            $prev.addClass('focus');
          }
        }
        return false;
        // Esc
      } else if (event.keyCode == 27) {
        if ($dropdown.hasClass('open')) {
          $dropdown.trigger('click');
        }
        // Tab
      } else if (event.keyCode == 9) {
        if ($dropdown.hasClass('open')) {
          return false;
        }
      }
    });

    // Detect CSS pointer-events support, for IE <= 10. From Modernizr.
    var style = document.createElement('a').style;
    style.cssText = 'pointer-events:auto';
    if (style.pointerEvents !== 'auto') {
      $('html').addClass('no-csspointerevents');
    }

    return this;

  };

}(jQuery));

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

        //var sitename = $("#sitename").val();
        var sitename = "voyage";
        $('[data-action="global-search-error"]').html('');

        if ($(this).val() == '') {
            $('.wherepopup').hide();
            $('.wherepopup').slideUp(300);
        } else {

                //console.log(BaseURL);

            var fvalue = $(this).val();
                //console.log(fvalue);

            if(fvalue.length > 2)
            {
                    //clearTimeout(timeout);
                    //timeout = setTimeout(function () {
                  globalSearchForAll(fvalue, sitename);
                        //$('input[name="hote_or_dest_has_value"]').val(1);
                    //}, 500);
            }else{
                //$('input[name="hote_or_dest_has_value"]').val('');
            }


            $('.wherepopup').show();
        }

  });

  function globalSearchForAll(searcValue, sitename) {
    var _token = $('meta[name="csrf-token"]').attr('content');
    $('.ico-reload').show();
    ajaxReq = $.ajax({
        url: BaseURL + '/destination/global-search?showParent=' + SHOW_PARENT_CITIES,
        type: "get",
        dataType: "json",
        data: {'keyword':searcValue, 'sitename':sitename, '_token':_token},
        beforeSend : function() {
          console.log(ajaxReq);
          if(ajaxReq != 'ToCancelPrevReq' && ajaxReq.readyState < 4) {
              ajaxReq.abort();
          }
        },
        success: function (data){
            $('.ico-reload').hide();
            if(data.status=='success'){
                var obj = data.data;
                var voyage = obj.voyage;
                var spa = obj.spa;
                var safari = obj.safari;
                var island = obj.island;

                var voyage_html_hotel = "";
                var voyage_html_destination = "";

                var spa_html_hotel = "";
                var spa_html_destination = "";

                var safari_html_hotel = "";
                var safari_html_destination = "";

                var islands_html_hotel = "";
                var islands_html_destination = "";

                voyage_html_hotel = getHotelHtml(voyage, 'voyage');
                voyage_html_destination = getDestinationHtml(voyage, 'voyage');

                spa_html_hotel = getHotelHtml(spa, 'spa');
                spa_html_destination = getDestinationHtml(spa, 'spa');

                safari_html_hotel = getHotelHtml(safari, 'safari');
                safari_html_destination = getDestinationHtml(safari, 'safari');

                islands_html_hotel = getHotelHtml(island, 'islands');
                islands_html_destination = getDestinationHtml(island, 'islands');
            }

            if(!voyage_html_destination && 
              !spa_html_destination && 
              !safari_html_destination && 
              !islands_html_destination){
              $("#distiresults").hide();
            }else{
              $("#distiresults").show();
            }

            if(!voyage_html_hotel && 
              !spa_html_hotel && 
              !safari_html_hotel && 
              !islands_html_hotel){
              $("#hotelsresults").hide();
            }else{
              $("#hotelsresults").show();
            }
            
        }
    });
}



  $('.wherepopup .nav-link').click(function(){
    var location = $(this).find('.city-l').html();
    $('.where').val(location);
    $(this).closest('.where-container').removeClass('show');
    $('.when-container').addClass('show');
    $('.wherepopup').hide();
  });

  $(document).on('click', '.wherepopup .nav-link', function(){
    
    var location = $(this).find('.city-l').html();
    if(SHOW_PARENT_CITIES == 1){
      document.location = '/globalsearchavailability?s=' + location;
      return true;
    }

    $('.where').val(location);
    $("#where_selection").html('');
    $("#where_selection").html(location);
    $(this).closest('.where-container').removeClass('show');
    $('.when-container').addClass('show');
    $('.wherepopup').hide();
    var _type = $(this).attr('data-type');
    var _collection = $(this).attr('data-collection');
    var _targetpage = $(this).attr('data-page');
    $("#sitename").val(_collection);
    $("#coll_type").val(_type);
    $("#target_page").val(_targetpage);
    $("#your-selection").html(location);

    get_featured_prop(_type, _collection, location);
    $('.quick-prev-when1').slick({
                    slidesToShow: 1,
                    prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
                    nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
                });
  });
  
  var homePageFeaturedProperties = '';
  function get_featured_prop(_type, _collection, _location){
    var _token = $('meta[name="csrf-token"]').attr('content');
    //console.log(BaseURL);
    $.ajax({
        url: BaseURL + '/featuredproperty',
        type: "get",
        dataType: "json",
        data: {'type':_type, 'collection':_collection, '_token':_token, 'keyword':_location},
        success: function (data){
                homePageFeaturedProperties = data;
            //if(data.status == "success"){
                $('.title-2').html(data[0]['property_name']);
                $('.fetaruer .font-2').html(data[0]['detail_section1_description_box1']);

                var containername;
                try{
                  if(data[0]['container']){
                    containername = data[0]['container']['name'];
                  }else{
                    containername = data[0]['property_name'].trim().replaceAll(" ", '-').toLowerCase();
                  }
                }catch(e){

                }

                $('.herl').html(`<img src="uploads/container_user_files/locations/` 
                  + containername + `/property-images/` + data[0]['property_images'][0]['file']['file_name'] + `" class="img-fluid" alt="" />`);

                $('.img-left-when').html(`<img src="/property-image/resize/645x600/` + 
                  containername + `/` + 
                  data[0]['property_images'][1]['file']['file_name'] + 
                  `/property-image" class="img-fluid" alt="" />`);                

                $('.to-right .title-2').html(data[0]['property_name']);
                $('.fetaruer .font-2').html(data[0]['detail_section1_description_box1']);                
            //}
        }
    });
  }
  $(document).on('click', '.step-3', function () {
    if(!homePageFeaturedProperties[1]){
      return true;
    }
    var containername;
    try{
      if(homePageFeaturedProperties[1]['container']){
        containername = homePageFeaturedProperties[1]['container']['name'];
      }else{
        containername = homePageFeaturedProperties[1]['property_name'].trim().replaceAll(" ", '-').toLowerCase();
      }
    }catch(e){

    }
    
    $('.who-container .herl').html(`<img src="uploads/container_user_files/locations/` 
                  + containername + `/property-images/` + homePageFeaturedProperties[1]['property_images'][0]['file']['file_name'] + `" class="img-fluid" alt="" />`);
    $('.who-container .img-left-when').html(`<img src="/property-image/resize/645x600/` + 
      containername + `/` + 
      homePageFeaturedProperties[1]['property_images'][1]['file']['file_name'] + 
      `/property-image" class="img-fluid" alt="" />`);  

      $('.to-right .title-2').html(homePageFeaturedProperties[1]['property_name']);
      $('.fetaruer .font-2').html(homePageFeaturedProperties[1]['detail_section1_description_box1']);  
  });


  $(document).mouseup(function(event){
    var $trigger = $(".wherepopup");
    if($trigger !== event.target && !$trigger.has(event.target).length){
//      $('.wherepopup').hide();
    }
  });

  $('.step-3').click(function(){
    $(this).closest('.when-container').removeClass('show');

    $('.who-container').addClass('show');
  });

  $('.all-drop').click(function(e){
    e.preventDefault();
    $('.all-result').fadeIn();
  });

  $(document).mouseup(function(event){
    var $trigger = $(".all-result");
    if($trigger !== event.target && !$trigger.has(event.target).length){
      $('.all-result').fadeOut();
    }
  });

  $('.field-count .plus').click(function () {
    $(this).prev().find('.mr-1').html(function(i, val) { return val*1+1 });
  });
  $('.field-count .min').click(function () {
      if($(this).next().find('.mr-1').html() > 1){
        $(this).next().find('.mr-1').html(function(i, val) { return val*1-1 });
      }
  });


  $(document).on('click', '.field-count-guest .plus', function () {
    $(this).prev().find('.mr-1').html(function(i, val) { return val*1+1 });
    var obj_adult = $(this).prev().find('.inp-adult');
    if(obj_adult.length > 0){
        var _adval = $(this).prev().find('.inp-adult').val();
        $(this).prev().find('.inp-adult').val(parseInt(_adval)+1)

    }
    var obj_child = $(this).prev().find('.inp-child');
    if(obj_child.length > 0){
        var _chval = $(this).prev().find('.inp-child').val();
        $(this).prev().find('.inp-child').val(parseInt(_chval)+1)
        //console.log(_chval);
        //console.log('_chval');
    }
    $(this).closest('.field-count-guest').find('.min').removeClass('disable');
  });
  $(document).on('click', '.field-count-guest .min', function () { console.log('min');
      if($(this).next().find('.mr-1').html() > 0){ console.log('min in');
        $(this).next().find('.mr-1').html(function(i, val) { return val*1-1 });

        var obj_adult = $(this).next().find('.inp-adult');
        if(obj_adult.length > 0){
            var _adval = $(this).next().find('.inp-adult').val();
            $(this).next().find('.inp-adult').val(parseInt(_adval)-1)
            //console.log(_adval);
            //console.log('_adval');
        }
        var obj_child = $(this).next().find('.inp-child');
        if(obj_child.length > 0){
            var _chval = $(this).next().find('.inp-child').val();
            $(this).next().find('.inp-child').val(parseInt(_chval)-1)
            //console.log(_chval);
            //console.log('_chval');
        }

      }
      if($(this).next().find('.mr-1').html() < 1){
        $(this).closest('.field-count-guest').find('.min').addClass('disable');
      }
  });
  $(document).mouseup(function(event){
    var $trigger = $(".dropped");
    if($trigger !== event.target && !$trigger.has(event.target).length){
      $('.dropped').removeClass('active');
    }
  });
  $('.data-drop').click(function(e){
    e.preventDefault();
    $('.dropped').addClass('active');
  })

  $('.save-filter-guest').click(function(e){
    e.preventDefault();
    $('.dropped').removeClass('active');
    $('.dropdown-menu').removeClass('show');
  })

  $('.gallerylink').click(function(e){
    e.preventDefault();
    var g = $(this).attr('data-popup');
    $(g).addClass('active animated fadeIn');
  })

  $('.popup-close').click(function(e){
    e.preventDefault();
    $('.popup').removeClass('active animated fadeIn');
  })

  $('.page-closeslide').click(function(e){
    e.preventDefault();
    $(this).parent().removeClass('active');
  })

  $('select').select2({
    theme: "bootstrap",
    minimumResultsForSearch: -1
  });


  $('select').niceSelect();

  $('.my-tooltip .ico').hover(function(){
    var dt = $(this).attr('data-tool');
    $(dt).toggleClass('active');
  })
  $('.dropprice').click(function(e) {
    e.stopPropagation();
  });
  $('.list-prs .btn-prc-title').click(function(e){
    e.preventDefault();
    var pp = $(this).attr('data-price');
    $(pp).toggleClass('active');
    $(this).find('.arrow-down').toggleClass('toup');
  })

  $('.filter-tag').on('click', '.close-tag', function(e){
    e.preventDefault();
    $(this).closest('.filter-tag').remove();
    console.log('clicked');

  })
  $('.popup-close').click(function(e){
    e.preventDefault();
    $(this).closest('.compare-row').removeClass('active animated fadeIn');
  })

  $('.header-main').on('click', '.oncl', function(){
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


  $('.heading-collsp').click(function(){
    $(this).closest('.collsp').toggleClass('show');
  })


  $('.first-option .nav-link').click(function(e){
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

  var family = $('[data-guest=".family-option"]');
  var familyInput = $('.family-option');
  var group = $('[data-guest=".group-option"]');
  var groupInput = $('.group-option');
  var bussiness = $('[data-guest=".bussiness-option"]');
  var bussinessInput = $('.bussiness-option');
  $('.field-count-search .plus-room').click(function () {
    $(this).prev().find('.mr-1').html(function(i, val) { return val*1+1 });
    // family.find('.room-count').html(function(i, val) { return val*1+1 });
    family.find('.room-count').html(function(i, val) { return val*1+1 });
    $(familyInput).find('.room-count').html(function(i, val) { return val*1+1 });
    $(this).closest('.field-count-search').find('.min-room').removeClass('disable');
  });
  $('.field-count-search .min-room').click(function () {
      if($(this).next().find('.mr-1').html() > 1){
        $(this).next().find('.mr-1').html(function(i, val) { return val*1-1 });
        family.find('.room-count').html(function(i, val) { return val*1-1 });
        $(familyInput).find('.room-count').html(function(i, val) { return val*1-1 });
      }
      if($(this).next().find('.mr-1').html() < 2){
        $(this).closest('.field-count-search').find('.min-room').addClass('disable');
      }
  });

  // ----------

  $('.field-count-search .plus-adult').click(function () {
    $(this).prev().find('.mr-1').html(function(i, val) { return val*1+1 });
    family.find('.adult-count').html(function(i, val) { return val*1+1 });
    $(familyInput).find('.adult-count').html(function(i, val) { return val*1+1 });
    $(this).closest('.field-count-search').find('.min-adult').removeClass('disable');

  });
  $('.field-count-search .min-adult').click(function () {
      if($(this).next().find('.mr-1').html() > 1){
        $(this).next().find('.mr-1').html(function(i, val) { return val*1-1 });
        family.find('.adult-count').html(function(i, val) { return val*1-1 });
        $(familyInput).find('.adult-count').html(function(i, val) { return val*1-1 });
      }
      if($(this).next().find('.mr-1').html() < 2){
        $(this).closest('.field-count-search').find('.min-adult').addClass('disable');
      }
  });

  // ----------

  $('.field-count-search .plus-child').click(function () {
    $(this).prev().find('.mr-1').html(function(i, val) { return val*1+1 });
    family.find('.child-count').html(function(i, val) { return val*1+1 });
    family.find('.child-before').addClass('show');
    $(familyInput).find('.child-before').addClass('show');
    $(familyInput).find('.child-count').html(function(i, val) { return val*1+1 });
    $(this).closest('.field-count-search').find('.min-child').removeClass('disable');
  });
  $('.field-count-search .min-child').click(function () {
      if($(this).next().find('.mr-1').html() > 0){
        $(this).next().find('.mr-1').html(function(i, val) { return val*1-1 });
        $(familyInput).find('.child-count').html(function(i, val) { return val*1-1 });
        family.find('.child-count').html(function(i, val) { return val*1-1 });
      }
      if($(this).next().find('.mr-1').html() < 1){
        $(this).closest('.field-count-search').find('.min-child').addClass('disable');
        family.find('.child-before').removeClass('show');
        $(familyInput).find('.child-before').removeClass('show');

      }
  });

  $('.field-count-search .plus-group-room').click(function () {
    $(this).prev().find('.mr-1').html(function(i, val) { return val*1+1 });
    // family.find('.room-count').html(function(i, val) { return val*1+1 });
    group.find('.room-count').html(function(i, val) { return val*1+1 });
    $(groupInput).find('.room-count').html(function(i, val) { return val*1+1 });
    $(this).closest('.field-count-search').find('.min-group-room').removeClass('disable');
  });
  $('.field-count-search .min-group-room').click(function () {
      if($(this).next().find('.mr-1').html() > 1){
        $(this).next().find('.mr-1').html(function(i, val) { return val*1-1 });
        group.find('.room-count').html(function(i, val) { return val*1-1 });
        $(groupInput).find('.room-count').html(function(i, val) { return val*1-1 });
      }
      if($(this).next().find('.mr-1').html() < 2){
        $(this).closest('.field-count-search').find('.min-group-room').addClass('disable');
      }
  });

  // ----------

  $('.field-count-search .plus-group-adult').click(function () {
    $(this).prev().find('.mr-1').html(function(i, val) { return val*1+1 });
    group.find('.adult-count').html(function(i, val) { return val*1+1 });
    $(groupInput).find('.adult-count').html(function(i, val) { return val*1+1 });
    $(this).closest('.field-count-search').find('.min-group-adult').removeClass('disable');

  });
  $('.field-count-search .min-group-adult').click(function () {
      if($(this).next().find('.mr-1').html() > 1){
        $(this).next().find('.mr-1').html(function(i, val) { return val*1-1 });
        group.find('.adult-count').html(function(i, val) { return val*1-1 });
        $(groupInput).find('.adult-count').html(function(i, val) { return val*1-1 });
      }
      if($(this).next().find('.mr-1').html() < 2){
        $(this).closest('.field-count-search').find('.min-group-adult').addClass('disable');
      }
  });

  // ----------

  $('.field-count-search .plus-group-child').click(function () {
    $(this).prev().find('.mr-1').html(function(i, val) { return val*1+1 });
    group.find('.child-count').html(function(i, val) { return val*1+1 });
    group.find('.child-before').addClass('show');
    $(groupInput).find('.child-before').addClass('show');
    $(groupInput).find('.child-count').html(function(i, val) { return val*1+1 });
    $(this).closest('.field-count-search').find('.min-group-child').removeClass('disable');
  });
  $('.field-count-search .min-group-child').click(function () {
      if($(this).next().find('.mr-1').html() > 0){
        $(this).next().find('.mr-1').html(function(i, val) { return val*1-1 });
        $(groupInput).find('.child-count').html(function(i, val) { return val*1-1 });
        group.find('.child-count').html(function(i, val) { return val*1-1 });
      }
      if($(this).next().find('.mr-1').html() < 1){
        $(this).closest('.field-count-search').find('.min-group-child').addClass('disable');
        group.find('.child-before').removeClass('show');
        $(groupInput).find('.child-before').removeClass('show');
      }
  });


  $('.bussiness-option .field-count-search .plus-bussiness-room').click(function () {
    $(this).prev().find('.mr-1').html(function(i, val) { return val*1+1 });
    bussiness.find('.room-count').html(function(i, val) { return val*1+1 });
    $(bussinessInput).find('.room-count').html(function(i, val) { return val*1+1 });
    $(this).closest('.bussiness-option .field-count-search').find('.min-bussiness-room').removeClass('disable');

  });
  $('.bussiness-option .field-count-search .min-bussiness-room').click(function () {
      if($(this).next().find('.mr-1').html() > 1){
        $(this).next().find('.mr-1').html(function(i, val) { return val*1-1 });
        bussiness.find('.room-count').html(function(i, val) { return val*1-1 });
        $(bussinessInput).find('.room-count').html(function(i, val) { return val*1-1 });
      }
      if($(this).next().find('.mr-1').html() < 1){
        $(this).closest('.bussiness-option .field-count-search').find('.min-bussiness-room').addClass('disable');
      }
  });

  // ----------

  $('.bussiness-option .field-count-search .plus-bussiness-adult').click(function () {
    $(this).prev().find('.mr-1').html(function(i, val) { return val*1+1 });
    bussiness.find('.adult-count').html(function(i, val) { return val*1+1 });
    $(bussinessInput).find('.adult-count').html(function(i, val) { return val*1+1 });
    $(this).closest('.bussiness-option .field-count-search').find('.min-bussiness-adult').removeClass('disable');

  });
  $('.bussiness-option .field-count-search .min-bussiness-adult').click(function () {
      if($(this).next().find('.mr-1').html() > 1){
        $(this).next().find('.mr-1').html(function(i, val) { return val*1-1 });
        bussiness.find('.adult-count').html(function(i, val) { return val*1-1 });
        $(bussinessInput).find('.adult-count').html(function(i, val) { return val*1-1 });
      }
      if($(this).next().find('.mr-1').html() < 1){
        $(this).closest('.bussiness-option .field-count-search').find('.min-bussiness-adult').addClass('disable');
      }
  });

  $('.field-count-guest .plus-room').click(function(){
    if($(this).prev().find('.mr-1').html() != 4 ){
      $(this).prev().find('.mr-1').html(function(i, val) { return val*1+1 });
      $(this).closest('.field-count-guest').find('.min-room').removeClass('disable');
      var curr = $(this).closest('.guest-pick-container').find('.col-ews');
      //console.log(curr);
      var currLength = curr.length + 1;
      var temp = '<div class="col-6 col-ews mb-3" id="room-'+ currLength +'">'+
          '<p><b>Suite '+ currLength +'</b></p>'+
          '<input type="hidden" name="rooms[]"  />'+
          '<div class="row align-items-center py-2">'+
              '<div class="col-7">'+
                  '<p class="mb-0"><b>Adults</b></p>'+
              '</div>'+
              '<div class="col-5">'+
                  '<div class="row field-count-guest align-items-center">'+
                      '<button type="button" class="min">-</button>'+
                      '<div class="col text-center">'+
                          '<span class="mr-1 adult-val" >1 </span>'+
                          '<input type="hidden" name="adult[]" class="inp-adult" value="1" />'+
                     '</div>'+
                      '<button type="button" class="plus mr-3">+</button>'+
                  '</div>'+
              '</div>'+
          '</div>'+
          '<div class="row align-items-center py-2">'+
              '<div class="col-7">'+
                  '<p class="mb-0"><b>Children</b></p>'+
              '</div>'+
              '<div class="col-5">'+
                  '<div class="row field-count-guest align-items-center">'+
                      '<button type="button" class="min">-</button>'+
                      '<div class="col text-center">'+
                          '<span class="mr-1 child-val">1 </span>'+
                          '<input type="hidden" name="child[]" class="inp-child" value="1" />'+
                      '</div>'+
                      '<button type="button" class="plus mr-3">+</button>'+
                  '</div>'+
              '</div>'+
          '</div>'+
      '</div>';
      $(this).closest('.guest-pick-container').find('.guest-pick-body').find('.col-ews').addClass('col-6').removeClass('col-12');
      $(this).closest('.guest-pick-container').find('.guest-pick-body .list-eoom').append(temp);
      $(this).prev().find('.suite').val($(this).prev().find('.mr-1').html());
    }
    if($(this).prev().find('.mr-1').html() > 3 ){
      $(this).closest('.field-count-guest').find('.plus-room').addClass('disable');
    }
  });

  $('.field-count-guest ').on('click', '.min-room', function(){
    $(this).closest('.guest-pick-container').find('.col-ews').not(':first').last().remove();

    if($(this).next().find('.mr-1').html() > 1){
      $(this).next().find('.mr-1').html(function(i, val) { return val*1-1 });
      $(this).next().find('.suite').val($(this).next().find('span.room-val').html());
    }
    if($(this).next().find('.mr-1').html() < 2){
      $(this).closest('.field-count-guest').find('.min-room').addClass('disable');
      $('.guest-pick-body').find('.col-ews').addClass('col-12').removeClass('col-6');

    }
    if($(this).prev().find('.mr-1').html() != 4 ){
      $(this).closest('.field-count-guest').find('.plus-room').removeClass('disable');
    }
  });

  $(document).on('click', '#whoF .select-guest', function(){
    
    /*var roomVal = $('.room-val').html();
    var adultTotal = 0;
    $('.adult-val').each(function(){
      adultTotal += parseFloat($(this).html());
    });
    var chiltTotal = 0;
    $('.child-val').each(function(){
      chiltTotal += parseFloat($(this).html());
    });
    $('.opt-select').show();
    $('.rto').hide();
    $('.opt-select').find('.room-count').html(roomVal);
    $('.opt-select').find('.adult-count').html(adultTotal);
    $('.opt-select').find('.child-count').html(chiltTotal);
    $('.filter-guest').addClass('show');*/

    var suite = $("#whoF input[name='suite[]']")
          .map(function(){return $(this).val();}).get();
    var rooms = $("#whoF input[name='rooms[]']")
          .map(function(){return $(this).val();}).get();
    var adult = $("#whoF input[name='adult[]']")
          .map(function(){return $(this).val();}).get();
    var child = $("#whoF input[name='child[]']")
          .map(function(){return $(this).val();}).get();
    /*console.log(suite);          
    console.log(rooms);          
    console.log(adult);          
    console.log(child);
    return false;*/
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: 'POST',            
      url: '/select/guest',
      data: {
        rooms: rooms,
        child: child,
        adult: adult,
        suite: suite
      },
      success: function(response){
        window.location.href = '';
      },
    });

  });

  $(document).on('click', '.confirm-room-when', function(){
    var adultCount = 0;
    var childCount = 0;
    // confirm-room-when
    $('.adult-val').each(function(){
      adultCount += parseFloat($(this).html());
      alert(adultCount);
    });
    $('.child-val').each(function(){
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

    $('.quick-prev-when1').slick({
      slidesToShow: 1,
      prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
      nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
    });

  });

  $(document).on('click', '.confirm-room-submit', function(e){
    e.preventDefault();
    $("#collection_search").submit();
  });

  $('.whereinner').on('click', '.nav-link', function(e){
    e.preventDefault();
    var result = $(this).find('span').html();
    $('.where').val(result);
  })


  new WOW().init();

  $(document).ready(function () {

    if (window.XMLHttpRequest) {
      window.onscroll = function () {
        if ($('body').scrollTop() > 145 || $('html').scrollTop() > 145) {
          if ($(window).height() > 20) {
            $('.onstick').addClass('sidebarFixed');
          }
        }
        else {
          $('.onstick').removeClass('sidebarFixed');
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
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
  });



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

  $('.close-header').click(function(e){
    e.preventDefault()
    $('.collapse').collapse('hide');
  });

  $('#clear_search').click(function(){
    $(this).closest('.search-field').find('.where').val("");
    $('#searchF').collapse('hide')
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
    // $('body').css('overflow', 'hidden');
  })
  $('.register-side').click(function (e) {
    e.preventDefault();
    $('.open-side').addClass('show');
    $('.auth-signup').addClass('active');
    // $('body').css('overflow', 'hidden');

  })
  $('.auth-close').click(function (e) {
    e.preventDefault();
    $('.open-side').removeClass('show');
    setTimeout(function () {
      $('.auth-content').removeClass('active');
    }, 800);
    // $('body').css('overflow', 'auto');

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
  });
  $('.sidebar-close').click(function (e) {
    e.preventDefault();
    $('.sidebar').removeClass('show');
  });

  $(document).on('click', '.btn-sidebar', function (e) {
    e.preventDefault();
    var dataClick = $(this).attr('data-sidebar');
    $(dataClick).addClass('show');
    $('body').css('overflow', 'hidden');

    var _type = $('.gal-tab.active').attr('data-type');
    var _slug = $(this).attr('data-id');

    var _for = $(this).attr('data-for');
    //console.log(_type);
    $("#hid_propid").val(_slug);
    if (_for == 'reviews') {

    } else if (_for == 'quickinfo') {
      $.ajax({
        url: BaseURL + '/quickinfo',
        dataType: 'json',
        data: { 'propid': _slug },
        type: 'get',
        beforeSend: function () {

        },
        success: function (data) {
          /*var _htmlinfo = '';
          var objinfo = data.prop_info;
          if(typeof objinfo != 'undefined'){
              //_htmlinfo = objinfo.
              $(objinfo).each(function(key, value){
                  _htmlinfo += '<div class="col-4 mb-5"><div class="qv-list"><h4>'+value['title']+'</h4>'+value['description']+'</div> </div>';
              });
              //$("#prop_info").html('');
              //$("#prop_info").html(_htmlinfo);
          }*/
          var objprop = data.prop_details;
          console.log(objprop);
          if (typeof objprop != 'undefined') {
            $("#quickinfo_title").html('');
            $("#quickinfo_title").html(objprop.property_name);
            var p_address = objprop.address;
            var p_address_html = '';
            if (p_address != '') {
              $("#propinfo_address").css('display', '');
              $("#propinfo_address_text").html('');
              p_address_html += '<div class="qv-list"><h4>Address</h4><i class="fa fa-map-marker" aria-hidden="true"></i> ' + p_address + ' </div>';
              $("#propinfo_address").html(p_address_html);
            } else {
              $("#propinfo_address").css('display', 'none');
            }
            var p_internetpublic = objprop.internetpublic;
            var p_internetroom = objprop.internetroom;
            $("#propinfo_internet").css('display', '');
            $("#propinfo_internet").html('');
            var p_internet = '';
            p_internet += '<div class="qv-list">';
            p_internet += '<h4>Internet</h4>';
            if (p_internetpublic) {
              var intp = p_internetpublic ? 'Free' : 'No';
              p_internet += '<p class="mb-0"><b>Public areas :</b> ' + intp + '</p>';
            }
            if (p_internetroom) {
              var intr = p_internetroom ? 'Free' : 'No';
              p_internet += '<p class="mb-0"><b>In room :</b> ' + intr + '</p>';
            }
            p_internet += '</div>';
            $("#propinfo_internet").html(p_internet);

            var p_children_policy = objprop.children_policy;
            var p_children_policy_html = '';
            if (p_children_policy != '' && p_children_policy != null) {
              $("#propinfo_children_policy").css('display', '');
              $("#propinfo_children_policy").html('');
              p_children_policy_html += '<div class="qv-list"><h4>Children policy</h4><p class="mb-0">' + p_children_policy + '</p></div>';
              $("#propinfo_children_policy").html(p_children_policy_html);
            } else {
              $("#propinfo_children_policy").css('display', 'none');
            }

            var p_checkin = objprop.checkin;
            var p_checkout = objprop.checkout;
            $("#propinfo_checkinout").css('display', '');
            $("#propinfo_checkinout").html('');
            var p_checkout_html = '';
            p_checkout_html += '<div class="qv-list">';
            p_checkout_html += '<h4>Check-in / Check-out</h4>';
            if (p_checkin != '' && p_checkin != null) {
              p_checkout_html += '<p class="mb-0"><b>Check-in :</b> ' + p_checkin + '</p>';
            }
            if (p_checkout != '' && p_checkout != null) {
              p_checkout_html += '<p class="mb-0"><b>Check-out :</b> ' + p_checkout + '</p>';
            }
            p_checkout_html += '</div>';
            $("#propinfo_checkinout").html(p_checkout_html);

            var p_transfer = objprop.transfer;
            var p_transfer_html = '';
            if (typeof p_transfer != '' && p_transfer != null) {
              $("#propinfo_transfer").css('display', '');
              $("#propinfo_transfer").html('');
              p_transfer_html += '<div class="qv-list"><h4>Transportation and transfer</h4><p class="mb-0"><b>Transfer :</b> ' + p_transfer + '</p></div>';
              $("#propinfo_transfer").html(p_transfer_html);
            } else {
              $("#propinfo_transfer").css('display', 'none');
            }

            var p_smookingpolicy = objprop.smookingpolicy;
            var p_smookingrooms = objprop.smookingrooms;
            $("#propinfo_smoking_policy").css('display', '');
            $("#propinfo_smoking_policy").html('');
            var p_smookingpolicy_html = '';
            p_smookingpolicy_html += '<div class="qv-list">';
            p_smookingpolicy_html += '<h4>Smooking policy</h4>';
            if (typeof p_smookingpolicy != '' && p_smookingpolicy != null) {
              p_smookingpolicy_html += '<p class="mb-0"> ' + p_smookingpolicy + '</p>';
            }
            if (typeof p_smookingrooms != '' && p_smookingrooms != null) {
              var smkp = p_smookingrooms ? 'available' : 'Not available';
              p_smookingpolicy_html += '<p class="mb-0"><b>Smooking rooms:</b> ' + smkp + '</p>';
            }
            p_smookingpolicy_html += '</div>';
            $("#propinfo_smoking_policy").html(p_smookingpolicy_html);

            var p_numberofrooms = objprop.numberofrooms;
            var p_roomamenities = objprop.roomamenities;
            $("#propinfo_rooms").css('display', '');
            $("#propinfo_rooms").html('');
            var p_rooms_html = '';
            p_rooms_html += '<div class="qv-list">';
            p_rooms_html += '<h4>Rooms</h4>';
            if (typeof p_numberofrooms != '' && p_numberofrooms != null) {
              p_rooms_html += '<p class="mb-0"> ' + p_numberofrooms + ' rooms and suites</p>';
            }
            if (typeof p_roomamenities != '' && p_roomamenities != null) {
              //var smkp = p_smookingrooms ? 'available' : 'Not available';
              var objRA = data.room_amneties;
              var p_ra = '';
              if (typeof objRA != 'undefined') {
                $(objRA).each(function (key, value) {
                  p_ra += value['amenity_title'] + ", ";
                });
              }
              p_rooms_html += '<p class="mb-0"><b>In-room amenities :</b> ' + p_ra.replace(/, +$/g, ""); +'</p>';
            }
            p_rooms_html += '</div>';
            $("#propinfo_rooms").html(p_rooms_html);


            var p_availableservices = objprop.availableservices;
            var p_availableservices_html = '';
            if (p_availableservices != '' && p_availableservices != null) {
              $("#propinfo_avs").css('display', '');
              $("#propinfo_avs").html('');
              p_availableservices_html += '<div class="qv-list">';
              p_availableservices_html += '<h4>Available services</h4>';

              var objAvs = data.available_services;
              var p_avs = '';
              if (typeof objAvs != 'undefined') {
                $(objAvs).each(function (key, value) {
                  //p_avs += value['title']+", ";
                  p_availableservices_html += '<p class="mb-0">' + value['title'] + '</p>';
                });
              }
              //p_availableservices_html += '<p class="mb-0">'+p_avs+'</p>';
              p_availableservices_html += '</div>';
              $("#propinfo_avs").html(p_availableservices_html);
            } else {
              $("#propinfo_avs").css('display', 'none');
            }

            var p_pets = objprop.pets;
            var p_pets_html = '';
            if (p_pets != '' && p_pets != null) {
              $("#propinfo_pets").css('display', '');
              $("#propinfo_pets").html('');
              p_pets_html += '<div class="qv-list">';
              p_pets_html += '<h4>Pets</h4>';
              p_pets_html += '<p class="mb-0">' + p_pets + '</p>';
              p_pets_html += '</div>';
              $("#propinfo_pets").html(p_pets_html);
            } else {
              $("#propinfo_pets").css('display', 'none');
            }

            var p_carpark = objprop.carpark;
            var p_carpark_html = '';
            if (p_carpark != '' && p_carpark != null) {
              $("#propinfo_parking").css('display', '');
              $("#propinfo_parking").html('');
              p_carpark_html += '<div class="qv-list">';
              p_carpark_html += '<h4>Parking</h4>';
              p_carpark_html += '<p class="mb-0"><b>Car park / valet service :</b>' + p_carpark + '</p>';
              p_carpark_html += '</div>';
              $("#propinfo_parking").html(p_carpark_html);
            } else {
              $("#propinfo_parking").css('display', 'none');
            }

            var _lttude = parseFloat(objprop.latitude);
            var _lngtude = parseFloat(objprop.longitude);

            var locations = [
              ['<b>Loaction Name</b>', _lttude, _lngtude],
            ];

            var map = L.map('map2').setView([_lttude, _lngtude], 8);

            var myIcon = L.icon({
              iconUrl: BaseURL + '/images/basic_geolocalize-01.svg',
              iconSize: [40, 45],
            });
            L.tileLayer(
              'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              maxZoom: 18,
            }).addTo(map);

            for (var i = 0; i < locations.length; i++) {
              var marker = new L.marker([locations[i][1], locations[i][2]], { icon: myIcon })
                .bindPopup(locations[i][0])
                .addTo(map);
            }

          } else {
            $("#propinfo_address").css('display', 'none');
          }
          /*var objprop = data.prop_details;
          if(typeof objprop != 'undefined'){
              var p_address = objprop.address;
              $("#propinfo_address").css('display', '');
              $("#propinfo_address_text").html('');
              $("#propinfo_address_text").html(p_address);
          }else{
              $("#propinfo_address").css('display', 'none');
          }*/



          var _htmlamt = '';
          var objamn = data.amneties;
          if (typeof objamn != 'undefined') {
            $("#amenity_title").html('Amenities');
            //_htmlinfo = objinfo.
            $(objamn).each(function (key, value) {
              _htmlamt += '<div class="col-md-3 col-sm-6 mb-4"><p class="mb-0">' + value['amenity_title'] + '</p></div>';
            });
            $("#prop_amenties").html('');
            $("#prop_amenties").html(_htmlamt);
          }
          var _htmlusp = '';
          var objusp = data.prop_usp;
          if (typeof objusp != 'undefined') {
            //_htmlinfo = objinfo.
            $(objusp).each(function (key, value) {
              var img_path = BaseURL + '/uploads/property_usp/' + value['image_path'];
              _htmlusp += '<div class="col text-center"><div class="i-touch"><p><i class="ico"><img style="width:53px" src="' + img_path + '"></i></p><p>' + value['title'] + '</p></div></div>';
            });
            $("#prop_usp").html('');
            $("#prop_usp").html(_htmlusp);
          }

        }
      }).done(function () {

      });
    } else if (_for == 'gallery') {
      $.ajax({
        url: BaseURL + '/galleryimages',
        dataType: 'json',
        data: { 'propid': _slug, 'type': _type },
        type: 'get',
        beforeSend: function () {

        },
        success: function (data) {
          var _html = '';
          if (data.imgs && (data.imgs).length > 0) {
            $(data.imgs).each(function (key, value) {
              //console.log(key);
              //console.log(value);
              _html += '<a class="tile" href=""><img src="' + value['imgsrc'] + value['file_name'] + '" alt=""></a>'
            });
            $('#gallery_hotel').html('');
            $('#gallery_hotel').html(_html);
          } else {
            console.log("no");
          }
        }
      }).done(function () {
        lightGallery(document.getElementById('gallery_hotel'), {
          thumbnail: true,
          currentPagerPosition: 'middle',
          download: false,
          share: true,
          escKey: false,
          closable: false
        });
      });
    } else if (_for == 'suites') {
      $.ajax({
        url: BaseURL + '/suitesbyid',
        dataType: 'json',
        data: { 'slug': _slug },
        type: 'get',
        beforeSend: function () {

        },
        success: function (data) {
          var roomimgobj = data.propertyDetail.roomimgs;
          var sidebarobj = data.propertyDetail.typedata;
          var sidebar_html = '';
          var roomimg_html = '';
          var img_html = '';
          if (typeof sidebarobj != "undefined") {
            $(sidebarobj).each(function (key, val) {
              //sidebar_html += '<li class="nav-item"><a class="nav-link nav-link-sub suite-details" data-id="'+val['id']+'" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab" aria-controls="suiteslist" aria-selected="true">'+val['category_name']+'</a></li>';
              sidebar_html += '<li class="nav-item"><a class="nav-link nav-link-sub" href="' + BaseURL + '/' + _slug + '/' + val['category_name'] + '" >' + val['category_name'] + '</a></li>';
              //console.log(val['id']);
              var _indx = $.inArray(val['id'], roomimgobj);
              //console.log(roomimgobj[val['id']]);
              if (typeof roomimgobj[val['id']] != 'undefined') {
                var imgpath = roomimgobj[val['id']]['imgsrc'];
                var objimgs = roomimgobj[val['id']]['imgs'];
                //$(objimgs).each(function(key, val){
                //    img_html += '';
                //});

                roomimg_html += '';

                roomimg_html += '<div class="inner-wrapper hotel-page-list">';
                roomimg_html += '<div class="pr-lst result-grid suite-imgs">';
                $(objimgs).each(function (key, val) {
                  roomimg_html += '<div><img src="' + imgpath + '/' + val['file_name'] + '" class="w-100" alt=""></div>';
                });
                /*roomimg_html += '<div>';
                    roomimg_html += '<img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" alt="">';
                roomimg_html += '</div>';
                roomimg_html += '<div>';
                    roomimg_html += '<img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" alt="">';
                roomimg_html += '</div>';
                roomimg_html += '<div>';
                    roomimg_html += '<img src="images/29be6592342279.5e49609509d85.jpg" class="w-100" alt="">';
                roomimg_html += '</div>';*/
                roomimg_html += '</div>';
                roomimg_html += '<a href="#" class="dtl-link">';
                roomimg_html += '<i class="ico ico-diamon diamon-label fav-button"></i>';
                roomimg_html += '</a>';
                roomimg_html += '<div class="hotel-meta">';
                roomimg_html += '<a data-toggle="collapse" href="#view-detail" role="button" aria-expanded="false" aria-controls="view-deal" class="view more">VIEW DETAILS</a>';
                roomimg_html += '<div class="hotel-title">';
                roomimg_html += '<p class="mb-0">2 Bedrooms</p>';
                roomimg_html += '<p class="mb-0 inc">Includes</p>';
                roomimg_html += '</div>';
                roomimg_html += '<div class="hotel-prices hotel-price-detail">';
                roomimg_html += '<div class="row align-items-center justify-content-center">';
                roomimg_html += '<h3 class="mb-0">â‚¬ 1.299</h3>';
                roomimg_html += '<div class="ml-1">';
                roomimg_html += '<i class="ico ico-info-green pointer" type="button" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="view-deal" data-target="#price-detail"></i>';
                roomimg_html += '</div>';
                roomimg_html += '<div class="ml-2"><span class="pernight"></span></div>';
                roomimg_html += '</div>';
                roomimg_html += '<p><i><b>Includes breakfast</b></i></p>';
                roomimg_html += '</div>';
                roomimg_html += '<div class="action-hotel">';
                roomimg_html += '<a data-toggle="collapse" href="#view-deal" role="button" aria-expanded="false" aria-controls="view-deal">View Deals</a> | <a href="#">Add to Favorite</a> | <a href="#">Book this Suite</a>';
                roomimg_html += '</div>';
                roomimg_html += '</div>';
                roomimg_html += '</div>';



              }
            });
            $("#suitesside-tab").html('');
            $("#suitesside-tab").html(sidebar_html);
            $("#suiteslist").html('');
            $("#suiteslist").html(roomimg_html);
            console.log(roomimg_html);



          }
        }
      }).done(function () {
        $('.suite-imgs').slick({
          slidesToShow: 1,
          prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
          nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
        });
      });
    }


  });
/*
  $(document).on('click', '#restaurant_gallery-tab', function () {
    var _type = $(this).attr('data-type');
    var _slug = $("#hid_propid").val();

    $.ajax({
      url: BaseURL + '/galleryimages',
      dataType: 'json',
      data: { 'propid': _slug, 'type': _type },
      type: 'get',
      beforeSend: function () {

      },
      success: function (data) {
        var sidebar = data.sidebar;
        console.log(sidebar);
        var _html = '';
        var _sidebar = '';
        console.log((data.imgs).length);
        if ((data.imgs).length > 0) {
          $(data.imgs).each(function (key, value) {
            //console.log(key);
            //console.log(value);
            _html += '<a class="tile" href=""><img src="' + value['imgsrc'] + value['file_name'] + '" alt=""></a>'
          });
          $('#gallery_restaurant').html('');
          $('#gallery_restaurant').html(_html);
        } else {
          console.log("no");
        }
        if ((data.sidebar).length > 0) {
          _sidebar += '<li class="nav-item"><a class="nav-link" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab" aria-controls="suiteslist" aria-selected="true">Restaurants</a></li>';
          $(data.sidebar).each(function (key, value) {
            //console.log(key);
            //console.log(value);
            _sidebar += '<li class="nav-item"><a class="nav-link res-sidebar" data-id="' + value['id'] + '" data-type="res" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab" aria-controls="suiteslist" aria-selected="true">' + value['title'] + '</a></li>'
          });
          $('#restaurant-gal-side-tab').html('');
          $('#restaurant-gal-side-tab').html(_sidebar);
        } else {
          console.log("no");
        }
      }
    }).done(function () {

    });
  });
*/
  $(document).on('click', '.res-sidebar', function () {
    var id = $(this).attr('data-id');
    var type = 'res';
    $.ajax({
      url: BaseURL + '/restaurantimagebyid',
      dataType: 'json',
      data: { 'rid': id },
      type: 'get',
      beforeSend: function () {

      },
      success: function (data) {
        var sidebar = data.sidebar;
        console.log(sidebar);
        var _html = '';
        var _sidebar = '';
        console.log((data.imgs).length);
        if ((data.imgs).length > 0) {
          $(data.imgs).each(function (key, value) {
            //console.log(key);
            //console.log(value);
            _html += '<a class="tile" href=""><img src="' + value['imgsrc'] + value['file_name'] + '" alt=""></a>'
          });
          $('#gallery_restaurant').html('');
          $('#gallery_restaurant').html(_html);
        } else {
          console.log("no");
        }

      }
    }).done(function () {

    });
  });

  $(document).on('click', '#bars_gallery-tab', function () {
    var _type = $(this).attr('data-type');
    var _slug = $("#hid_propid").val();

    $.ajax({
      url: BaseURL + '/galleryimages',
      dataType: 'json',
      data: { 'propid': _slug, 'type': _type },
      type: 'get',
      beforeSend: function () {

      },
      success: function (data) {
        var _html = '';
        var _sidebar = '';
        if ((data.imgs).length > 0) {
          $(data.imgs).each(function (key, value) {
            //console.log(key);
            //console.log(value);
            _html += '<a class="tile" href=""><img src="' + value['imgsrc'] + value['file_name'] + '" alt=""></a>'
          });
          $('#gallery_bars').html('');
          $('#gallery_bars').html(_html);
        } else {
          console.log("no");
        }
        if ((data.sidebar).length > 0) {
          _sidebar += '<li class="nav-item"><a class="nav-link" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab" aria-controls="suiteslist" aria-selected="true">Restaurants</a></li>';
          $(data.sidebar).each(function (key, value) {
            //console.log(key);
            //console.log(value);
            _sidebar += '<li class="nav-item"><a class="nav-link bar-sidebar" data-id="' + value['id'] + '" data-type="bar" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab" aria-controls="suiteslist" aria-selected="true">' + value['title'] + '</a></li>'
          });
          $('#bars-gal-side-tab').html('');
          $('#bars-gal-side-tab').html(_sidebar);
        } else {
          console.log("no");
        }
      }
    }).done(function () {

    });
  });

  $(document).on('click', '.bar-sidebar', function () {
    var id = $(this).attr('data-id');
    var type = 'bar';
    $.ajax({
      url: BaseURL + '/restaurantimagebyid',
      dataType: 'json',
      data: { 'rid': id },
      type: 'get',
      beforeSend: function () {

      },
      success: function (data) {
        var sidebar = data.sidebar;
        console.log(sidebar);
        var _html = '';
        var _sidebar = '';
        console.log((data.imgs).length);
        if ((data.imgs).length > 0) {
          $(data.imgs).each(function (key, value) {
            //console.log(key);
            //console.log(value);
            _html += '<a class="tile" href=""><img src="' + value['imgsrc'] + value['file_name'] + '" alt=""></a>'
          });
          $('#gallery_restaurant').html('');
          $('#gallery_restaurant').html(_html);
        } else {
          console.log("no");
        }

      }
    }).done(function () {

    });
  });

  $(document).on('click', '.spa-sidebar', function () {
    var id = $(this).attr('data-id');
    var type = 'spa';
    $.ajax({
      url: BaseURL + '/restaurantimagebyid',
      dataType: 'json',
      data: { 'rid': id },
      type: 'get',
      beforeSend: function () {

      },
      success: function (data) {
        var sidebar = data.sidebar;
        console.log(sidebar);
        var _html = '';
        var _sidebar = '';
        console.log((data.imgs).length);
        if ((data.imgs).length > 0) {
          $(data.imgs).each(function (key, value) {
            //console.log(key);
            //console.log(value);
            _html += '<a class="tile" href=""><img src="' + value['imgsrc'] + value['file_name'] + '" alt=""></a>'
          });
          $('#gallery_restaurant').html('');
          $('#gallery_restaurant').html(_html);
        } else {
          console.log("no");
        }

      }
    }).done(function () {

    });
  });

  $(document).on('click', '#spas_gallery-tab', function () {
    var _type = $(this).attr('data-type');
    var _slug = $("#hid_propid").val();

    $.ajax({
      url: BaseURL + '/galleryimages',
      dataType: 'json',
      data: { 'propid': _slug, 'type': _type },
      type: 'get',
      beforeSend: function () {

      },
      success: function (data) {
        var _html = '';
        var _sidebar = '';
        console.log((data.imgs).length);
        if ((data.imgs).length > 0) {
          $(data.imgs).each(function (key, value) {
            //console.log(key);
            //console.log(value);
            _html += '<a class="tile" href=""><img src="' + value['imgsrc'] + value['file_name'] + '" alt=""></a>'
          });
          $('#gallery_spas').html('');
          $('#gallery_spas').html(_html);
        } else {
          console.log("no");
        }
        if ((data.sidebar).length > 0) {
          _sidebar += '<li class="nav-item"><a class="nav-link" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab" aria-controls="suiteslist" aria-selected="true">Restaurants</a></li>';
          $(data.sidebar).each(function (key, value) {
            //console.log(key);
            //console.log(value);
            _sidebar += '<li class="nav-item"><a class="nav-link spa-sidebar" data-id="' + value['id'] + '" data-type="spa" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab" aria-controls="suiteslist" aria-selected="true">' + value['title'] + '</a></li>'
          });
          $('#spas-gal-side-tab').html('');
          $('#spas-gal-side-tab').html(_sidebar);
        } else {
          console.log("no");
        }
      }
    }).done(function () {

    });
  });

  $(document).on('click', '#suite_gallery-tab2', function () {
    var _type = $(this).attr('data-type');
    var _slug = $("#hid_propid").val();

    $.ajax({
      url: BaseURL + '/galleryimages',
      dataType: 'json',
      data: { 'propid': _slug, 'type': _type },
      type: 'get',
      beforeSend: function () {

      },
      success: function (data) {
        var _html = '';
        var _sidebar = '';
        console.log((data.imgs).length);
        if ((data.imgs).length > 0) {
          $(data.imgs).each(function (key, value) {
            //console.log(key);
            //console.log(value);
            _html += '<a class="tile" href=""><img src="' + value['imgsrc'] + value['file_name'] + '" alt=""></a>'
          });
          $('#gallery_suite').html('');
          $('#gallery_suite').html(_html);
        } else {
          console.log("no");
        }
        if ((data.sidebar).length > 0) {
          _sidebar += '<li class="nav-item"><a class="nav-link" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab" aria-controls="suiteslist" aria-selected="true">Restaurants</a></li>';
          $(data.sidebar).each(function (key, value) {
            //console.log(key);
            //console.log(value);
            _sidebar += '<li class="nav-item"><a class="nav-link sidebar-suite" data-id="' + value['id'] + '" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab" aria-controls="suiteslist" aria-selected="true">' + value['category_name'] + '</a></li>'
          });
          $('#suite-gal-side-tab').html('');
          $('#suite-gal-side-tab').html(_sidebar);
        } else {
          console.log("no");
        }
      }
    }).done(function () {

    });
  });

  $(document).on('click', '.sidebar-suite', function () {
    var cid = $(this).attr('data-id');
    var _slug = $("#hid_propid").val();

    $.ajax({
      url: BaseURL + '/suiteimagebyid',
      dataType: 'json',
      data: { 'cid': cid },
      type: 'get',
      beforeSend: function () {

      },
      success: function (data) {
        var _html = '';
        var _sidebar = '';
        console.log((data.imgs).length);
        if ((data.imgs).length > 0) {
          $(data.imgs).each(function (key, value) {
            //console.log(key);
            //console.log(value);
            _html += '<a class="tile" href=""><img src="' + value['imgsrc'] + value['file_name'] + '" alt=""></a>'
          });
          $('#gallery_suite').html('');
          $('#gallery_suite').html(_html);
        } else {
          console.log("no");
        }

      }
    }).done(function () {

    });
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

  $('.close-collapse').click(function (e) {
    e.preventDefault();
    $('#destination-menu').collapse('hide');
  })

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
    thumbnail: true,
    currentPagerPosition: 'middle',
    download: false,
    share: true,
    escKey: false,
    closable: false
  });
  lightGallery(document.getElementById('hotel_gallery'), {
    thumbnail: true,
    currentPagerPosition: 'middle',
    download: false,
    share: true,
    escKey: false,
    closable: false
  });
  lightGallery(document.getElementById('gallery_restaurant'), {
    thumbnail: true,
    currentPagerPosition: 'middle',
    download: false,
    share: true,
    closable: false
  });
  lightGallery(document.getElementById('gallery_bars'), {
    thumbnail: true,
    currentPagerPosition: 'middle',
    download: false,
    share: true,
    closable: false
  });
  lightGallery(document.getElementById('gallery_experience'), {
    thumbnail: true,
    currentPagerPosition: 'middle',
    download: false,
    share: true,
    closable: false
  });
  lightGallery(document.getElementById('gallery_suite'), {
    thumbnail: true,
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

  $('.humburger-second-menu').click(function(){
    $('.humburger-menu-mobile').toggleClass('open');
  });
  $('.humburger-landing-menu').click(function(){
    $('.menu-landing-mobile').toggleClass('show');
  });
  $('.humburger-second-menu').click(function(){
    $(this).closest('body').find('.nav-collapse').toggleClass('show')
  })
  $('.dropdown-inner .custom-control, .dropdown-inner').click(function(e){
    e.stopPropagation()
    console.log("asd");
  })
  $(document).on("scroll", function () {
    if ($(document).scrollTop() > 100) {
      $(".second-header").addClass("show");
    }
    else {
      $(".second-header").removeClass("show");
    }
  });

  $(document).on("click", '#title_main', function () {
    $("#searchF").toggle();
  });

})();

function getNavitems(location, collection_name){
  var searchResultsPageUrl = "/globalsearchavailability?view=map&s="+location+"&arrive="+$("#arrive").val()+"&departure="+$("#departure").val()+"&type=destination&rac=r0a2c1#";
  var searchResultsChannelUrl = "/globalsearchavailability?view=channel&s="+location+"&arrive="+$("#arrive").val()+"&departure="+$("#departure").val()+"&type=destination&rac=r0a2c1#";

  return `<li class="nav-item">
      <a class="nav-link nav-link-map" data-page="map" href="`+searchResultsPageUrl+`">
        <span class="city-l">` + location + `</span> <span class="cat-l">Map</span>
      </a>
    </li>
   <li class="nav-item">
      <a class="nav-link nav-link-map" data-page="channel" href="`+searchResultsChannelUrl+`">
        <span class="city-l">` + location + `</span> <span class="cat-l">Channel</span>
      </a>
    </li>
   <!--<li class="nav-item">
      <a class="nav-link nav-link-map" href="`+searchResultsPageUrl+`">
        <span class="city-l">` + location + `</span> <span class="cat-l">Cuisine</span>
      </a>
    </li>-->`;
}

function getHotelHtml(result, collection_name){
  var result_html_hotel = '';
  $('.wherepopup .'+collection_name+'-hotels').html(result_html_hotel);
  if(result.collection != undefined){
      var domainName = collection_name;
      if(collection_name == 'islands'){
        domainName = 'island';
      }
      $(result.collection).each(function(key, val){
        result_html_hotel += '<li class="nav-item"><a class="nav-link" href="#" data-type="hotel" data-collection="'+domainName+'" data-page="results"><span class="city-l">' + val.property_name + '</span> </a></li>';
      });
  }

  if(result_html_hotel!=''){
    $('.wherepopup .'+collection_name+'-hotels').html(result_html_hotel);
    $('.wherepopup .'+collection_name+'-hotels').show();
    $('#'+collection_name+'-hotel-header').show();
  }else{
    $('.wherepopup .'+collection_name+'-hotels').hide();
    $('#'+collection_name+'-hotel-header').hide();
  }

  return result_html_hotel;
}

function getDestinationHtml(result, collection_name){
  var searchedLocation = '';
  var result_html_destination = '';
  $('.wherepopup .' + collection_name + '-destination').hide();
  $('#' + collection_name + '-desti-header').hide();

  $('.wherepopup .' + collection_name + '-destination').html(result_html_destination);
  if(result.dest != undefined){
    $(result.dest).each(function(key, val){
      searchedLocation = val.category_name;
      var domainName = collection_name;
      if(collection_name == 'islands'){
        domainName = 'island';
      }
      result_html_destination += `
      <li class="nav-item">
        <a class="nav-link" href="#" data-type="destination" data-collection="` + domainName + `" 
        data-page="results">
          <span class="city-l">` + val.category_name + `</span>
        </a>
      </li>`;
    });

    if(result.dest.length === 1){
       result_html_destination += getNavitems(searchedLocation, collection_name);
    }

    if(result_html_destination !== ''){
      $('.wherepopup .' + collection_name + '-destination').html(result_html_destination);
      $('.wherepopup .' + collection_name + '-destination').show();
      $('#' + collection_name + '-desti-header').show();
    }

    return result_html_destination;
  }
}

$(document).ready(function(){

    $(function() {

  $('input[name="datefilter"]').daterangepicker({
      minDate:new Date(), 
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});

    
});      

function setWidth() {
    var carWidth = $('.owl-stage').width() + 100;
    $('.owl-stage').width(carWidth);
  }
$(document).ready(function () {

  $('.swipe-collection').owlCarousel({
    items: 4,
    margin: 20,
    autoWidth: true,
    afterInit: setWidth()
  });
  
  $('.swipe-action-btn').click(function () {
    $(this).closest('.swipe-action').find('.swipe-action-content').toggleClass('clicked');
  });
  $('.swipe-item').mouseleave(function () {
    $('.swipe-action-content').removeClass('clicked')
  });

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
  
  $(".who").click(function (e) {
     var dest = $("#inlineFormInputGroup").val();
     $("#collection").val('View ' + dest + ' Collection');
  });

  var picker = $('#daterangepicker-inline').daterangepicker({
    parentEl: "#daterangepicker-inline-container",
    minDate:new Date(), 
    autoApply: true,
    autoUpdateInput: false,
    locale: {
      cancelLabel: 'Clear',
    }
  });

  picker.on('apply.daterangepicker', function (ev, picker) {
    $('.onrange').html(picker.startDate.format('YYYY-MM-DD') + ' -> ' + picker.endDate.format('YYYY-MM-DD'));
    $('input[name="arrive"]').val(picker.startDate.format('YYYY-MM-DD'));
    $('input[name="departure"]').val(picker.endDate.format('YYYY-MM-DD'));
    $('.include-form').fadeIn("fast");
  });
  
  picker.data('daterangepicker').hide = function () { };
  picker.data('daterangepicker').show();

});

(function( func ) {
  $.fn.addClass = function() { // replace the existing function on $.fn
      func.apply( this, arguments ); // invoke the original function
      this.trigger('classChanged'); // trigger the custom event
      return this; // retain jQuery chainability
  }
})($.fn.addClass); // pass the original function as an argument

(function( func ) {
  $.fn.removeClass = function() {
      func.apply( this, arguments );
      //this.trigger('classChanged');
      return this;
  }
})($.fn.removeClass);