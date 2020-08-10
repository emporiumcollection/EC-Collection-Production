/*(function($) {

  $.fn.niceSelect = function(method) {
    
    // Methods
    if (typeof method == 'string') {      
      if (method == 'update') {
        this.each(function() {
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
        this.each(function() {
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
    this.each(function() {
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
      
      $dropdown.find('.current').html($selected.data('display') || $selected.text());
      
      $options.each(function(i) {
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
    
    
    
    // Unbind existing events in case that the plugin has been initialized before
    $(document).off('.nice_select');
    
    // Open/close
    $(document).on('click.nice_select', '.nice-select', function(event) {
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
    $(document).on('click.nice_select', function(event) {
      if ($(event.target).closest('.nice-select').length === 0) {
        $('.nice-select').removeClass('open').find('.option');  
      }
    });
    
    // Option click
    $(document).on('click.nice_select', '.nice-select .option:not(.disabled)', function(event) {
      var $option = $(this);
      var $dropdown = $option.closest('.nice-select');
      
      $dropdown.find('.selected').removeClass('selected');
      $option.addClass('selected');
      
      var text = $option.data('display') || $option.text();
      $dropdown.find('.current').text(text);
      
      $dropdown.prev('select').val($option.data('value')).trigger('change');
    });

    // Keyboard events
    $(document).on('keydown.nice_select', '.nice-select', function(event) {    
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

}(jQuery)); */

(function() {
  'use strict';
  var owl = $('.landing-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    items:1,
    autoplay: true,
    autoplayTimeout: 5000,
    mouseDrag: false,
    touchDrag: false,
    dots: true,
    dotsContainer: '#carousel-custom-dots',
    transitionStyle : "fade",
    animateOut: 'fadeOut',
          animateIn: 'fadeIn',
  });

  $('.owl-dots').on('click', 'li', function(e) {
    owl.trigger('to.owl.carousel', [$(this).index(), 300]);
  });

  $('.info-page-slide').owlCarousel({
    loop:false,
    nav:true,
    items:1,
    dots: false,
  });
  
  $('.amenities-slider').owlCarousel({
    loop:false,
    nav:true,
    items:2,
    dots: false,
    margin: 20,
  });
  $('.feature').owlCarousel({
    loop:false,
    nav:true,
    items:3,
    dots: false,
  });
  $('.feature-img-slide').owlCarousel({
    loop:false,
    nav:true,
    items:1,
    dots: false,
  });
  $('.lifestyle-slider').owlCarousel({
    loop:false,
    nav:true,
    items:1,
    dots: false,
    
  });

  $('.losl').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    console.log('beforeChange', currentSlide, nextSlide);
  });
  $('.losl').on('afterChange', function(event, slick, currentSlide){
    console.log('afterChange', currentSlide);
  });
      
  $('.feature-slide').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    items:1,
    dots: false,
  });
  $('.deal-slide').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    items:1,
    dots: true,
  });

  $('.fav-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    items:8,
    dots: false,
    center: true,
    navText: ["<span class='prev-btn'><img src='images/ico-arrow.svg'></span>","<span class='next-btn'><img src='images/ico-arrow.svg'></span>"]
  });

  $('.hotel-cat').owlCarousel({
    loop:false,
    margin:15,
    nav:true,
    items:3,
    dots: false,
  });

  var $hh = $('.hotel-list-slide').owlCarousel({
    loop:true,
    margin:15,
    nav:true,
    items:1,
    dots: false,
  });

  $(".left-side").hover(function(){ 
    $(".right-side").css("opacity", "0.2");
    $(".left-side").css("opacity", "1");
  });

  // $(document).on('mouseover', '.right-side',function(){ 
  //   $(".left-side").css("opacity", "0.2");
  //   $(".right-side").css("opacity", "1");
  // })

  $(".right-side").hover(function(){ 
    $(".left-side").css("opacity", "0.2");
    $(".right-side").css("opacity", "1");
    $(".main-right").css("opacity", "1");
  });


  $(".left-side").hover(function(){ 
    $(".right-side").css("opacity", "0.2");
    $(".left-side").css("opacity", "1");
  });

  $('#tabs .tab-link').click(function(e){
    e.preventDefault();
    $(".right-side").css("opacity", "1");
    $('#tabs .tab-link').removeClass('active');
    $(this).addClass('active');
    var t = $(this).attr('data-link');
    $('.tab-em').removeClass('active animated fadeIn');
    $(t).addClass('active animated fadeIn');
  });

  $('#tabs-nav .tab-link').click(function(e){
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
  $(document).on('click', '#tabs-nav .tab-link', function(){
    $(".left-side").css("opacity", "1");
  });

  $('.fullpage').click(function(e){
    e.preventDefault();
    var df = $(this).attr('data-fullpage');
    $(df).addClass('active animated fadeIn');

  });

  $('.close-fullpage').click(function(){
    $(this).closest('.fullpage-content').removeClass('active animated fadeIn');
  });
 
  $('.favoicon').click(function(){
    $(this).toggleClass('on');
  });

  $('.btn-favorite').click(function(e){
    e.preventDefault();
    $(this).closest('.favoicon').toggleClass('on');
  });

  $('.page-close').click(function(e){
    e.preventDefault();
    $('#tabs-nav .tab-link').removeClass('active');
    var t = $(this).attr('data-link');
    $('.tab-em-nav').removeClass('active animated fadeIn');
    $(t).addClass('active animated fadeIn');
    $('.calendar-btn').removeClass('active');
    $('.fav-slider-top').removeClass('active');
    $('.content').css('height', 'calc(100vh - 111px)');
  });

  $('.search').click(function(e){
    e.preventDefault();
    $('.search-left').addClass('active');
    $('.searchfield').addClass('active');
    $('.searchfield input').focus();
  });

  
  $('.search-filter').click(function(){
    var cls = $(this).closest('.header-main');
    var menuBtn = $(".menu-btn");
    cls.find('.logo-2').hide();
    cls.find('#tabs-nav a').not(menuBtn).hide();
    menuBtn.addClass('close-search close-search-filter');
    menuBtn.find('.ico').removeClass('ico-menu-b').addClass('ico-close');
    $('.filter-price').hide();
  });

  $('.header-main').on('click', '.close-search-filter', function(){
    var cls = $(this).closest('.header-main');
    var menuBtn = $(".menu-btn");
    cls.find('.logo-2').show();
    cls.find('#tabs-nav a').show();
    menuBtn.removeClass('close-search close-search-filter');
    menuBtn.find('.ico').removeClass('ico-close').addClass('ico-menu-b');
    $('.search-left').removeClass('active');
    $('.filter-price').show();
  });


  $('.search--092092').click(function(e){
    e.preventDefault();
    $('.search-ico-lst').toggleClass('show');
  });
  $('.close-search').click(function(e){
    e.preventDefault();
    $('.search-left').removeClass('active');
    $('.searchfield').removeClass('active');
  });

  $('.fav-btn').click(function(){
    $('.fav-slider-top').addClass('active animated fadeIn');
    $('.calendar-btn').addClass('active');
    $('.content').css('height', 'calc(100vh - 200px)');
    $hh.trigger('refresh.owl.carousel');
  });

  $('.search-fl').click(function(){
    $('.search-landing i').addClass('ico-search').removeClass('ico-search-w');
    $('.mc-fl i').addClass('ico-mic').removeClass('ico-mic-w');
    $('.menu-fl i').addClass('ico-menu-b').removeClass('ico-menu');
    $('.menu-fl-2 i').addClass('ico-user-single-2').removeClass('ico-user-single');
    $('.t-logo').addClass('logo-2').removeClass('logo');
    $('.header-w-search').addClass('bg-white');
  });
  $('.close-in').click(function(){
    $('.search-landing i').addClass('ico-search-w').removeClass('ico-search');
    $('.mc-fl i').addClass('ico-mic-w').removeClass('ico-mic');
    $('.menu-fl i').addClass('ico-menu').removeClass('ico-menu-b');
    $('.menu-fl-2 i').addClass('ico-user-single').removeClass('ico-user-single-2');

    $('.t-logo').addClass('logo').removeClass('logo-2');
    $('.header-w-search').removeClass('bg-white');

  });

  $('#tabs-nav .tab-compare').click(function(e){
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
  

  $('.wherepopup .nav-link').click(function(){
    var asd = $(this).find('.city-l').html();
    $('.where').val(asd);
    $(this).closest('.where-container').removeClass('show');
    $('.when-container').addClass('show');
    $('.wherepopup').hide();
  });
  
  $(document).mouseup(function(event){
    var $trigger = $(".wherepopup");
    if($trigger !== event.target && !$trigger.has(event.target).length){
      $('.wherepopup').hide();
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
    $(this).closest('.field-count-guest').find('.min').removeClass('disable');
  });
  $(document).on('click', '.field-count-guest .min', function () {
      if($(this).next().find('.mr-1').html() > 0){
        $(this).next().find('.mr-1').html(function(i, val) { return val*1-1 });
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

//  $('select').niceSelect();

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

  jQuery.fn.calendarPicker = function(options) {
    // --------------------------  start default option values --------------------------
    if (!options.date) {
      options.date = new Date();
    }
  
    if (typeof(options.years) == "undefined")
      options.years=1;
  
    if (typeof(options.months) == "undefined")
      options.months=3;
  
    if (typeof(options.days) == "undefined")
      options.days=4;
  
    if (typeof(options.showDayArrows) == "undefined")
      options.showDayArrows=true;
  
    if (typeof(options.useWheel) == "undefined")
      options.useWheel=true;
  
    if (typeof(options.callbackDelay) == "undefined")
      options.callbackDelay=500;
    
    if (typeof(options.monthNames) == "undefined")
      options.monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
  
    if (typeof(options.dayNames) == "undefined")
      options.dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
  
  
    // --------------------------  end default option values --------------------------
  
    var calendar = {currentDate: options.date};
    calendar.options = options;
  
    //build the calendar on the first element in the set of matched elements.
    var theDiv = this.eq(0);//$(this);
    theDiv.addClass("calBox");
  
    theDiv.empty();
  
  
    var divYears = $("<div>").addClass("calYear");
    var divMonths = $("<div>").addClass("calMonth");
    var divDays = $("<div>").addClass("calDay");
  
  
    theDiv.append(divYears).append(divMonths).append(divDays);
  
    calendar.changeDate = function(date) {
      calendar.currentDate = date;
  
      var fillYears = function(date) {
        var year = date.getFullYear();
        var t = new Date();
        divYears.empty();
        var nc = options.years*2+1;
        var w = parseInt((theDiv.width()-4-(nc)*4)/nc)+"px";
        for (var i = year - options.years; i <= year + options.years; i++) {
          var d = new Date(date);
          d.setFullYear(i);
          var span = $("<span>").addClass("calElement").attr("millis", d.getTime()).html(i).css("width",w);
          if (d.getYear() == t.getYear())
            span.addClass("today");
          if (d.getYear() == calendar.currentDate.getYear())
            span.addClass("selected");
          divYears.append(span);
        }
      }
  
      var fillMonths = function(date) {
        var month = date.getMonth();
        var t = new Date();
        divMonths.empty();
        var oldday = date.getDay();
        var nc = options.months*2+1;
        var w = parseInt((theDiv.width()-4-(nc)*4)/nc)+"px";
        for (var i = -options.months; i <= options.months; i++) {
          var d = new Date(date);
          var oldday = d.getDate();
          d.setMonth(month + i);
  
          if (d.getDate() != oldday) {
            d.setMonth(d.getMonth() - 1);
            d.setDate(28);
          }
          var span = $("<span>").addClass("calElement").attr("millis", d.getTime()).html(options.monthNames[d.getMonth()]).css("width",w);
          if (d.getYear() == t.getYear() && d.getMonth() == t.getMonth())
            span.addClass("today");
          if (d.getYear() == calendar.currentDate.getYear() && d.getMonth() == calendar.currentDate.getMonth())
            span.addClass("selected");
          divMonths.append(span);
  
        }
      }
  
      var fillDays = function(date) {
        var day = date.getDate();
        var t = new Date();
        divDays.empty();
        var nc = options.days*2+1;
        var w = parseInt((theDiv.width()-4-(options.showDayArrows?12:0)-(nc)*4)/(nc-(options.showDayArrows?2:0)))+"px";
        for (var i = -options.days; i <= options.days; i++) {
          var d = new Date(date);
          d.setDate(day + i)
          var span = $("<span>").addClass("calElement").attr("millis", d.getTime())
          if (i == -options.days && options.showDayArrows) {
            span.addClass("prev");
          } else if (i == options.days && options.showDayArrows) {
            span.addClass("next");
          } else {
            span.html("<span class=dayNumber>" + options.dayNames[d.getDay()]  + "</span><br>" + "<span class=nmbrday>" +d.getDate()+"</span>" ).css("width",w);
            if (d.getYear() == t.getYear() && d.getMonth() == t.getMonth() && d.getDate() == t.getDate())
              span.addClass("today");
            if (d.getYear() == calendar.currentDate.getYear() && d.getMonth() == calendar.currentDate.getMonth() && d.getDate() == calendar.currentDate.getDate())
              span.addClass("selected");
          }
          divDays.append(span);
  
        }
      }
  
      var deferredCallBack = function() {
        if (typeof(options.callback) == "function") {
          if (calendar.timer)
            clearTimeout(calendar.timer);
  
          calendar.timer = setTimeout(function() {
            options.callback(calendar);
          }, options.callbackDelay);
        }
      }
  
  
      fillYears(date);
      fillMonths(date);
      fillDays(date);
  
      deferredCallBack();
  
    }
  
    theDiv.click(function(ev) {
      var el = $(ev.target).closest(".calElement");
      if (el.hasClass("calElement")) {
        calendar.changeDate(new Date(parseInt(el.attr("millis"))));
      }
    });
  
  
    //if mousewheel
    if ($.event.special.mousewheel && options.useWheel) {
      divYears.mousewheel(function(event, delta) {
        var d = new Date(calendar.currentDate.getTime());
        d.setFullYear(d.getFullYear() + delta);
        calendar.changeDate(d);
        return false;
      });
      divMonths.mousewheel(function(event, delta) {
        var d = new Date(calendar.currentDate.getTime());
        d.setMonth(d.getMonth() + delta);
        calendar.changeDate(d);
        return false;
      });
      divDays.mousewheel(function(event, delta) {
        var d = new Date(calendar.currentDate.getTime());
        d.setDate(d.getDate() + delta);
        calendar.changeDate(d);
        return false;
      });
    }
  
  
    calendar.changeDate(options.date);
  
    return calendar;
  };

  // $('.filter').on('click', '.oncl', function(){
  //   $(this).closest('.filter-lst').toggleClass('show')
  // });

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
      var curr = $(".col-ews");
      var currLength = curr.length + 1;
      var temp = '<div class="col-6 col-ews mb-5" id="room-'+ currLength +'">'+
          '<p><b>Room '+ currLength +'</b></p>'+
          '<div class="row align-items-center py-2">'+
              '<div class="col-7">'+
                  '<p class="mb-0"><b>Adults</b></p>'+
              '</div>'+
              '<div class="col-5">'+
                  '<div class="row field-count-guest align-items-center">'+
                      '<button type="button" class="min">-</button>'+
                      '<div class="col text-center">'+
                          '<span class="mr-1 adult-val" >1 </span>'+
                     '</div>'+
                      '<button type="button" class="plus mr-3">+</button>'+
                  '</div>'+
              '</div>'+
          '</div>'+
          '<div class="row align-items-center py-2">'+
              '<div class="col-7">'+
                  '<p class="mb-0"><b>Childrens</b></p>'+
              '</div>'+
              '<div class="col-5">'+
                  '<div class="row field-count-guest align-items-center">'+
                      '<button type="button" class="min">-</button>'+
                      '<div class="col text-center">'+
                          '<span class="mr-1 child-val">1 </span>'+
                      '</div>'+
                      '<button type="button" class="plus mr-3">+</button>'+
                  '</div>'+
              '</div>'+
          '</div>'+
      '</div>';
      $('.guest-pick-body').find('.col-ews').addClass('col-6').removeClass('col-12');
      $('.guest-pick-body .list-eoom').append(temp);
    }
    if($(this).prev().find('.mr-1').html() > 3 ){
      $(this).closest('.field-count-guest').find('.plus-room').addClass('disable');
    }
  });


  $('.field-count-guest ').on('click', '.min-room', function(){
    $(this).closest('.guest-pick-container').find('.col-ews').not(':first').last().remove();
    
    if($(this).next().find('.mr-1').html() > 1){
      $(this).next().find('.mr-1').html(function(i, val) { return val*1-1 });
    }
    if($(this).next().find('.mr-1').html() < 2){
      $(this).closest('.field-count-guest').find('.min-room').addClass('disable');
      $('.guest-pick-body').find('.col-ews').addClass('col-12').removeClass('col-6');

    }
    if($(this).prev().find('.mr-1').html() != 4 ){
      $(this).closest('.field-count-guest').find('.plus-room').removeClass('disable');
    }
  });

  $(document).on('click', '.confirm-room', function(){
    console.log('confirm');
    var roomVal = $('.room-val').html();  
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
    $('.filter-guest').addClass('show');
  });

  $('.whereinner').on('click', '.nav-link', function(e){
    e.preventDefault();
    var result = $(this).find('span').html();
    $('.where').val(result);
  })

 
//  new WOW().init();
  
  $(document).ready(function() {
    // IE 6 doesn't implement position fixed nicely...
    if (window.XMLHttpRequest) {
    window.onscroll = function() {
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

  $('.humburger-menu').click(function(){
    $('.menu').addClass('show');
    $('body').addClass('noscrool');
  });
  $('.close-menu').click(function(){
    $('.menu').removeClass('show');
    $('body').removeClass('noscrool');
  });
  
  $('.profile-menu').click(function(e){
    e.preventDefault();
    $('.pmenu').addClass('show');
    $('body').addClass('noscrool');
  });
  $('.close-profile-menu').click(function(){
    $('.pmenu').removeClass('show');
    $('body').removeClass('noscrool');
  });
  
  $('.menu-show').click(function(e){
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

  $('.menu-nav').click(function(e){
    e.preventDefault();
    var nv = $(this).attr('data-nav');
    $('.menu-main').removeClass('show');;
    $(nv).addClass('show');
  })
  $(document).mouseup(function(event){
    var $trigger = $(".menu-main ");
    if($trigger !== event.target && !$trigger.has(event.target).length){
      $('.menu-main ').removeClass('show');
    }            
  });
  
  $('.when').click(function(e){
    e.preventDefault();
    $(".who-container").removeClass('show');
    $(".when-container").addClass('show');  
  });
  
  $(".who-new").click(function(e){
    e.preventDefault();
    $(".when-container").removeClass('show'); 
    $(".who-container").addClass('show');    
  });
})();
