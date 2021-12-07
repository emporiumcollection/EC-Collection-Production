var properties = [];
var suiteTemplate = '';
var boardTemplate = '';
var currentPropertyId = '';
var priceTemplate = '';

function replacePropertyData(id){
  currentPropertyId = id;
  var field = '';
  $('[data-place="property"]').each(function() {
      field = $(this).attr('data-replace');
      if(properties[id][field]){
        $(this).html(properties[id][field]);
        $(this).parents(".col-lg-4").show();
      }else{
        $(this).parents(".col-lg-4").hide();
      }
  });

  $('[data-place="property-multi-value"]').each(function() {
      field = $(this).attr('data-replace');
      //console.log(properties[id][field]);
      var values = properties[id][field].split(',');
      var listview = '';
      values.forEach(function(e){
        listview += '<p class="mb-0">' + e + '</p>';
      })
      if(listview){
        $(this).html(listview);
        $(this).parents(".row").show();
      }else{
        $(this).parents(".row").hide();
      }
  });

  $('[data-place="property-book-button"]').each(function() {
    $(this).html('<a href="/reservation/when/' + id + '" class="btn btn-primary btn-block rounded-0">BOOK</a>');
  });
  
  if($('#map2').length){
    setMapLocation(properties[id]['latitude'], properties[id]['longitude'],properties[id]['address']);
  }

  $('[data-place="property-images"]').each(function() {
      // field = $(this).attr('data-replace');
      //console.log(properties[id][field]);
      var values = properties[id]['images'];
      var imageview = '';
      var spanid = 1;
      var grid = 1;
      var imgUrl = '';
      var containerName = getContainerName(id);
      values.forEach(function(e){
        imgUrl = '/property-image/resize/1200x700/' + containerName + '/' + e.file_name + '/property-image';
        imageview += '<a href="' + imgUrl + '" data-sub-html="' + e.file_title + '" class="grid-item grid-row-' + grid + ' span-' + spanid + '"><img src="' + imgUrl + '" class="img-fluid" alt=""></a>';
        spanid=2;
        grid= 2;
      })
      $(this).html(imageview);
  });

  $('[data-place="room-images"]').each(function() {
      // field = $(this).attr('data-replace');
      //console.log(properties[id][field]);
      var suites = properties[id]['suites'];
      var imageview = '';
      var spanid = 1;
      var grid = 1;
      var imgUrl = '';
      var containerName = getContainerName(id);

      suites.forEach(function(s){
        spanid = 1;
        rooms = s.rooms;
        rooms.forEach(function(r){
          rimages = r.images;
          if(rimages.length){          
            rimages.forEach(function(e){
              try{
                imgUrl = '/room-image/resize/1200x700/' + containerName + '/' + e['file']['name'] + '/' + e.file.file_name;
                imageview += '<a href="' + imgUrl + '" data-sub-html="' + e.file.file_title + '" class="suite-id-' +  s.id + ' grid-item grid-row-' + grid + ' span-' + spanid + '" ><img src="' + imgUrl + '" class="img-fluid" alt=""></a>';
                spanid=2;
                grid = 2;
              }catch(e){

              }
            });
          }
        });
      });
      $(this).html(imageview);
  });

  replaceGalleryImages(id, 'restrurant-images', 'restaurantList', 'restrurant-image');
  replaceGalleryImages(id, 'bar-images', 'barList', 'bar-image');
  replaceGalleryImages(id, 'spa-images', 'spaList', 'spa-image');
  initializeAllGalleries();

  $('#experience_gallery-tab').parents('li').hide();
  $('#restaurant_gallery-tab').parents('li').hide();
  $('#bars_gallery-tab').parents('li').hide();  

  if(properties[id]['barList'].toString().length > 0){
    $('#bars_gallery-tab').parents('li').show();    
  }
  if(properties[id]['spaList'].toString().length > 0){
    $('#experience_gallery-tab').parents('li').show();    
  }
  if(properties[id]['restaurantList'].toString().length > 0){
    $('#restaurant_gallery-tab').parents('li').show();    
  }

  replaceGalleryNames(id);
}

function initializeAllGalleries(){

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
}

function replaceGalleryImages(id, place, list, image_path){
  try{
    $('[data-place="' + place + '"]').each(function() {
        // field = $(this).attr('data-replace');
        //console.log(properties[id][field]);
        var values = properties[id][list];

        var imageview = '';
        var spanid = 1;
        var grid = 1;
        var imgUrl = '';
        for (const [key, e] of Object.entries(values)) {
          if(e.gallery.files){          
            e.gallery.files.forEach(function(rgallery){          
              imgUrl = '/property-image/resize/1200x700/' + e.gallery.container + '/' + rgallery.file_name + '/' + image_path;
              imageview += '<a href="' + imgUrl + '" data-sub-html="' + rgallery.file_title + '" class="'+place+'-id-'+key+' grid-item grid-row-' + grid + ' span-' + spanid + '"><img src="' + imgUrl + '" class="img-fluid" alt=""></a>';
              spanid=2;
              grid=2;
            });  
          }
        }
        $(this).html(imageview);
    });
  }catch(e){
    
  }  
}

function replaceGalleryNames(id){
  var suitenamelist = `<li class="nav-item">
        <a class="nav-link" href="#" onclick="showSuiteImages('')">All Suites</a>
      </li>`;
  
  properties[id]['suites'].forEach(function(s) {
      suitenamelist += `<li class="nav-item">
        <a class="nav-link" href="#" onclick="showSuiteImages(`+s.id+`)">` + s.cat_short_name + `</a>
      </li>`;
  });

  $('[data-replace="suitenamelist"]').html(suitenamelist);

  var restaurant = `<li class="nav-item">
        <a class="nav-link" href="#">Restaurants</a>
      </li>`;
  for (const [key, value] of Object.entries(properties[id]['restaurantList'])) {
    restaurant += `<li class="nav-item">
        <a class="nav-link" href="#" onclick="showGalleryImages('restrurant-images','restrurant-images-id-` + key + `')">` + value.title + `</a>
      </li>`;
  }

  $('[data-replace="restaurants"]').html(restaurant);

  var bar = `<li class="nav-item">
        <a class="nav-link" href="#">Bars</a>
      </li>`;
  for (const [key, value] of Object.entries(properties[id]['barList'])) {
    bar += `<li class="nav-item">
        <a class="nav-link" href="#" onclick="showGalleryImages('bar-images','bar-images-id-` + key + `')">` + value.title + `</a>
      </li>`;
  }

  $('[data-replace="bars"]').html(bar);

  var spa = `<li class="nav-item">
        <a class="nav-link" href="#">Spas</a>
      </li>`;
  for (const [key, value] of Object.entries(properties[id]['spaList'])) {
    spa += `<li class="nav-item">
        <a class="nav-link" href="#" onclick="showGalleryImages('spa-images','spa-images-id-` + key + `')">` + value.title + `</a>
      </li>`;
  }

  $('[data-replace="spas"]').html(spa);
}

function showSuiteImages(suite_id){
  if(suite_id==''){
    $('[class*="suite-id"]').show();
  }else{

    $('[class*="suite-id"]').hide();
    $('.suite-id-' + suite_id).show();  
  }
}

function showGalleryImages(gallery, divid){
  $('[class*="'+gallery+'"]').hide();
  $('.' + divid).show();  
}

function replacePropertySuites(id){
  var suiteview = '';
  var firstsuite = 0;
  currentPropertyId = id;
  
  replaceSuiteList(id);

  $('[data-place="property-suites"]').each(function() {
      suiteview += `<li class="nav-item">
          <a class="nav-link" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab"
              aria-controls="suiteslist" aria-selected="true">All Suites</a>
      </li>`;
      var values = properties[id]['suites'];
      values.forEach(function(e){
        if(!firstsuite){
          firstsuite = e.id;
        }
        suiteview += `<li class="nav-item" onclick="replaceSuiteDetail(` + id + `, ` + e.id + `)">
            <a class="nav-link nav-link-sub" id="suitelist1-tab-` + e.id + `" data-toggle="pill"
                href="#suitelist1" role="tab" aria-controls="suitelist1" aria-selected="false"> ` + e.category_name + `</a>
        </li>`;
      })
      $(this).html(suiteview);
      //replaceRooms(id, firstsuite);
  });
}

function replaceSuiteList(id){
  $('#suites-popup').hide();
  $('#suites-loader').show();

  $('[data-replace="property_short_name"]').html(properties[id]['property_short_name']);

  currentPropertyId = id;
  if(!suiteTemplate){
    suiteTemplate = $('#suiteslist').html();
  }
  $('#suiteslist').html('');

  var suiteItem = '';
  var sid;
  var roomimages;
  var onlyThree;

  properties[id].suites.forEach(function(suite){
    if(suite.show_on_booking){
      onlyThree = 0;
      sid = suite['id'];
      suiteItem = '<div class="property-suite-p'+sid+'">' + suiteTemplate + '</div>';
      var containerName = getContainerName(id);
      roomimages = '';

      console.log(suite.rooms[0].images.length);
      if(suite.rooms[0].images.length !== undefined){        
        suite.rooms[0].images.forEach(function(rm){
          if(onlyThree < 3){        
            roomimages += `<div>
                <img src="/room-image/resize/780x540/` + containerName + `/` + rm['file']['name'] + `/` + rm['file']['file_name'] + `" class="w-100" alt="">
              </div>`;  
          }
          onlyThree++; 
        });  
      }
      suiteItem = suiteItem.replace('<!--SUITE-TITLE-->', suite.category_name);
      suiteItem = suiteItem.replace('<!--TEMPLATE-SUITE-GALLERY-->', roomimages);  
      suiteItem = suiteItem.replace('<!--SUITEID-->', sid); 
      suiteItem = suiteItem.replace('<!--PROPERTY-ID-->', id);   
      suiteItem = suiteItem.replace('<!--SUITE-PRICE-->', suite.price);
      suiteItem = suiteItem.replace('<!--SUITE-NO-BEDS-->', suite.bads);
      suiteItem = suiteItem.replace('<!--SUITE-SIZE-->', suite.suite_size);   
      suiteItem = suiteItem.replace('<!--COVID-INFO-->', properties[id].covid_info);

      if(properties[id].covid_link){
        if(properties[id].covid_link.includes('http://') == true || properties[id].covid_link.includes('https://') == true){
          suiteItem = suiteItem.replace('<!--COVID-LINK-->', properties[id].covid_link);
        }
        else{
          suiteItem = suiteItem.replace('<!--COVID-LINK-->', 'http://'+properties[id].covid_link);
        }        
      }else{
          suiteItem = suiteItem.replace('<!--COVID-LINK-->', '#');
      }
      $('#suiteslist').append(suiteItem);
    }

    $('.no-beds').each(function(e){
      if($(this).html() == '0 beds'){
        $(this).parents('.meta-title').hide();
      }
    });

    $('.suite-size').each(function(e){
      if($(this).html() == 'Suite size: 0 ft'){
        $(this).parents('.meta-title').hide();
      }
    });

  });
  setTimeout('appendResultGridSlider()', 2000);    
  setTimeout("$('#suites-loader').hide();", 3000);
  setTimeout("$('#suites-popup').show();", 3000);
  setTimeout("$('#suiteslist .result-grid').slick('setPosition');", 3000);  
}

function replaceSuiteDetail(property_id, category_id){
  currentPropertyId = property_id;
  var suite;
  properties[property_id]['suites'].forEach(function(e){
    if(category_id === e.id){
      suite = e;
    }
  });

  $('[data-place="suite_category_name"]').html(suite.category_name);
  $('[data-place="suite_description"]').html(suite.room_desc);
  $('[data-place="suite_amenities"]').html(suite.suiteamenities);
  var containerName = getContainerName(property_id);
  var roomimages = ``;

  try{
    suite.rooms[0].images.forEach(function(rm){
      roomimages += `<div>
        <img src="/room-image/resize/780x540/` + containerName + `/` + rm['file']['name'] + `/` + rm['file']['file_name'] + `" class="img-fluid" alt="">
      </div>`;
    });
  }catch(e){
    
  }

  $('[data-place="price-icon"]').html(`<i class="ico ico-info-green pointer btn-sidebar" type="button"
                                data-sidebar="#priceinfo" onclick="replacePrices(`+category_id+`)"></i>`);
  $('[data-place="suite-price"]').html(suite.price);

  var beds = $('[data-place="suite-beds"]').html(suite.bads);

  if (beds > 0){
    $('[data-place="suite-beds"]').parents('span').show();
  }else{
    $('[data-place="suite-beds"]').closest('div').hide();
  }
  
  var suite = $('[data-place="suite-size"]').html(suite.suite_size);

  if(suite > 0){
    $('[data-place="suite-size"]').parents('span').show();
  }else{
    $('[data-place="suite-size"]').closest('div').hide();
  }
  $('[data-place="property_usp"]').html(properties[property_id].property_usp);
  $('[data-place="covid_info"]').html(properties[property_id].covid_info);

  if (properties[property_id].covid_link.includes('http://') == true){
    $('[data-place="covid_link"]').attr("href", properties[property_id].covid_link);
  }else{
    $('[data-place="covid_link"]').attr("href", "http://"+properties[property_id].covid_link);
  }

  $('[data-place="reserve-link"]').html(`<p>Reserve now, pay at the Hotel</p>                    
                    <a href="/reservation/when/` + property_id + `" class="btn btn-dark btn-block">Reservation</a>`);  

  $('[data-place="suite_room_images"]').html(roomimages);
  setTimeout('appendSlider()', 2000);
  replacePropertyData(property_id);
  setTimeout("$('.suite-popup').slick('setPosition');", 4000);  
  $('#suite').addClass('show');
}

function replaceSuiteBoard(){
  console.log('hello');
  if(!boardTemplate){
    boardTemplate = $('#suiteinfo .suite-board-body').html();
  }
  $('#suiteinfo .suite-board-body').html('');

  var boards = properties[currentPropertyId].boards;
  var boardHtml='';
  boards.forEach(function(b){
    boardHtml = boardTemplate.replace('<!--PROPERTY-BOARD-TITLE-->', b.board_name);
    boardHtml = boardHtml.replace('<!--PROPERTY-BOARD-RATE-->', b.board_rackrate);
    $('#suiteinfo .suite-board-body').append(boardHtml);
  });
}

function appendSlider(){  
  $('#suitelist1 .slider-detail').removeClass("slick-initialized slick-slider");
  $('#suitelist1 .slider-detail').slick({
    slidesToShow: 1,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
  });
}

function appendResultGridSlider(){  
  $('#suiteslist .result-grid').removeClass("slick-initialized slick-slider");
  $('#suiteslist .result-grid').slick({
    slidesToShow: 1,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
  });
}

function appendSearchGridSlider(){
  $('.result-grid', $('#search-results-content')).slick({
    slidesToShow: 1,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
  });
}

function replaceRooms(property_id, category_id){
  var suite;
  properties[property_id]['suites'].forEach(function(e){
    if(category_id === e.id){
      suite = e;
    }
  });

  var roomview = ``;
  var roomimages = ``;
  var containerName = getContainerName(property_id);
  suite.rooms.forEach(function(r){
    roomimages = ``;
    r.images.forEach(function(rm){
      roomimages += `<div>
        <img src="uploads/container_user_files/locations/` + containerName + `/rooms-images/` + rm['file']['name'] + `/` + rm['file']['file_name'] + `" class="w-100" alt="">
      </div>`;
    });
    roomview += `<div>
    <div class="header-suite-list justify-content-between align-items-center mb-2">
      <div class="title-outer-container">
          <div class="title-main offset-930 pr-3 title-subs">
              <h2>Premiere Suite</h2>
          </div>
          <div class="meta-title">
              <span>Sleeps</span>
              <span>` + r.num_beds + ` Queens beds </span>
              <span>Suite size: ` + r.suite_size + ` ft</span>
          </div>
      </div>
      <div class="dropdown ipad-view">
          <button class="btn dropdown-toggle p-0" type="button" id="suiteDetail"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Suite Details
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="suiteDetail">
              <a class="dropdown-item btn-sidebar" href="#"
                  data-sidebar="#suiteinfo">Suite Info</a>
              <a class="dropdown-item btn-sidebar" href="#"
                  data-sidebar="#reviews">Reviews</a>
              <a class="dropdown-item btn-sidebar" href="#"
                  data-sidebar="#availability">Availability</a>
              <a class="dropdown-item btn-sidebar" href="#"
                  data-sidebar="#myCollection">Add to Collection</a>
              <a class="dropdown-item btn-sidebar" href="#"
                  data-sidebar="#share">Share</a>
              <a class="dropdown-item btn-sidebar" href="#" data-sidebar="">Ask
                  Questions</a>
          </div>
      </div>
    </div>
    <div class="inner-wrapper hotel-page-list mb-0910">
      <div class="pr-lst result-grid slider-big">
          `+ roomimages +`
      </div>
      <div class="my-dropdown">
          <div class="btn-group dropleft">
              <a href="#" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <i class="ico ico-diamon diamon-label"></i>
              </a>
              <div class="dropdown-menu">
                  <a href="#" class="dropdown-item">Add to collection</a>
                  <a href="#" class="dropdown-item btn-sidebar create-collection"
                      data-sidebar="#myCollection">Create new collection</a>
              </div>
          </div>
      </div>
      <a href="#">
          <div class="covid-info align-items-center">
              <div class="ico-security">
                  <i class="ico icon-security"></i>
              </div>
              <div class="pl-3 w-100">
                  <p class="covid-title mb-0 text-18">Sichere Urlaubsplanung
                      <span><i>Trotz
                              Covid 19</i></span>
                  </p>
                  <p class="mb-0">
                      ` + r.corona_guidlines + `
                  </p>
              </div>
              <div class="covid-act">
                  <a href="` + r.corona_link + `">JETZT INFORMIEREN</a>
              </div>
          </div>
      </a>
      <div class="hotel-meta full-width hotel-meta-details">
          <a href="#" class="view btn-sidebar i-none" data-sidebar="#reviews">
              Reviews
          </a>
          <a href="#" class="view btn-sidebar i-none" data-sidebar="#availability">
              Availability
          </a>
          <a href="#" class="view btn-sidebar i-none" data-sidebar="#suiteinfo">
              Suite Info
          </a>
          <div class="hotel-title i-none">
              <p class="mb-0 inc">Includes</p>
              <p class="mb-0">2 Bedrooms</p>
          </div>
          <div class="hotel-prices hotel-price-detail d-flex">
              <div class="row align-items-center justify-content-center">
                  <div class="mr-2">
                      <i class="ico ico-info-green pointer btn-sidebar" type="button"
                          data-sidebar="#priceinfo" onclick="replacePrices(` + category_id + `)"></i>
                  </div>
                  <h3 class="mb-0">
                      <span class="title-font-2 mr-1">From</span> <span
                          class="color-primary">
                          € 1.299</span>
                  </h3>
                  <div class="ml-2">
                      <span class="pernight"></span>
                  </div>
              </div>
          </div>
          <div class="ipad-view book-suite">
              <a href="#">
                  Book this Suite
              </a>
          </div>
          <div class="action-hotel i-none">
              <nav class="nav nav-pills nav-justified">
                  <a class="nav-link btn-sidebar" href="#"
                      data-sidebar="#suite-deal">Suite
                      Deals</a>
                  <a class="nav-link btn-sidebar" href="#"
                      data-sidebar="#myCollection">Add to
                      Collection</a>
                  <a class="nav-link" href="#">Ask Question</a>
                  <a class="nav-link" href="#">Share</a>
                  <a class="nav-link" href="#">Book this Suite</a>
              </nav>
          </div>
      </div>
    </div>
  </div>`;
  });

  $('[data-place="property-rooms"]').html(roomview);
  $('.result-grid', $('[data-place="property-rooms"]')).slick({
    slidesToShow: 1,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
  });
}

function getDefaultChannel(catt){            
    $.ajax({
        url: channelurl,
        //dataType:'html',
        dataType:'json',
        data: {cat:catt},
        type: 'post',
        beforeSend: function(){
            
        },
        success: function(data){ 
            if(!$('.yt-rvideos').length && !$('.yt-rvideos-2').length) return false;

            $('.yt-rvideos').yottie({  
                key:'AIzaSyAry0SsGLQVtzh61SGb2-OtBpAWtZh7zGo',
                channel: data.channel_url,
                content: {
                    columns: 4,
                    rows: 2
                },
            });

            $('.yt-rvideos-2').yottie({  
                key:'AIzaSyAry0SsGLQVtzh61SGb2-OtBpAWtZh7zGo',
                channel: data.channel_url,
                content: {
                    columns: 4,
                    rows: 2
                },
            });
        }
    });
}     

function replacePrices(cat_id, property_id = null){
    if(!property_id){
      property_id = currentPropertyId;
    }
    if(!priceTemplate){              
      priceTemplate = $('#priceinfo .sub-price-content').html();
    }
    $('[data-place="price-book-button"]').html(`<a href="/reservation/when/` + property_id + `" class="btn btn-dark btn-small-sm px-5 btn-confirm">Confirm Booking</a>`);
    $('[data-place="property-name"]').html(properties[property_id]['property_name']);
    properties[property_id]['suites'].forEach(function(e){
      if(cat_id === e.id){
        suite = e;
      }
    });
  
    $('[data-place="suite_category_name"]').html(suite.category_name);
    $('#priceinfo .sub-price-content').html('Loading...');
    $.ajax({
        url: '/property/prices?category_id=' +  cat_id + '&property_id=' +  property_id + '&arrival='+arrival+'&departure='+departure,
        //dataType:'html',
        dataType:'json',
        type: 'get',
        beforeSend: function(){
            
        },
        success: function(data){ 
            console.log(data);
            $('#priceinfo #suite-total-night').html(data.numberOfNights);
            $('#priceinfo #suite-total-price').html(data.totalPrice);
            $('#priceinfo #suite-total-usd-price').html(data.totalUSDPrice);
            var priceList = '';
            
            data.propertyPrices.forEach(function(p){
              priceList += priceTemplate.
              replace('<!--NIGHT-DATE-->', p.date).
              replace('<!--NIGHT-PRICE-->', p.price).
              replace('<!--NIGHT-USD-PRICE-->', p.usd_price);
            });

            $('#priceinfo .sub-price-content').html(priceList);
        }
    });
}

$(document).ready(function(){

  $(".nav-item .nav-link .delete_exp").click(function(e) {
    e.preventDefault();
    $("#experience").remove();
    var url = createSearchUrl();   
    searchResults(url);
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

  $('body').click(function (e) {
    if(!$(e.target).hasClass('sidebar-main') && !$(e.target).parents('div').hasClass('sidebar-main')){
      $('.sidebar-main').removeClass('show');
      $('body').css('overflow', 'auto');
      $('.sidebar-overlay').remove();      
    }
  });

  $('#menunav .search-f').click(function (e) {
    SHOW_PARENT_CITIES = 1;
  });

  $('.city-f').click(function (e) {
    SHOW_PARENT_CITIES = 1;
    $('.search-f').trigger("click");
    $('.where').val($('span',$(this)).html());
    $('.where').trigger("keyup");
  });

  $('.menu-s #experience_dropdown .dropdown-menu .dropdown-item').on("click",function(){
    setBreadcrumbSingle($(this));    
    var url = createSearchUrl($(this).attr("data-value"));
    searchResults(url);
  });

  $('#atmosphere_dropdown .custom-control-input').on("click",function(){
    setBreadcrumb($(this));
    var url = createSearchUrl();
    searchResults(url);
    return true;
  });

  $('#facilities_dropdown .custom-control-input').on("click",function(){
    setBreadcrumb($(this));
    var url = createSearchUrl();
    searchResults(url);
    return true;
  });

  $('#style_dropdown .custom-control-input').on("click",function(){
    setBreadcrumb($(this));
    var url = createSearchUrl();
    searchResults(url);
    return true;
  });

  $('.menunav-group .nav-link').on("click", function(){
     var divid = $(this).attr("href");
     $('img', $(divid)).attr("src",$('img', $(divid)).attr("data-src"));
  });

  $('.nav-item .dropdown-menu .filter-list .price-input .filter_price').on("click", function(){
    var url = createSearchUrl();
    searchResults(url);
  });

  /*$('#resultsLoadMore').on("click", function(){
    var currentPage = $('#currentPage').val();
    var url = createSearchUrl();
    url = url + '&view=paginate';
    searchResults(url);
  });*/

  /*$('.lazy').Lazy({
      // your configuration goes here
      scrollDirection: 'both',
      effect: 'fadeIn',
      visibleOnly: true,
      onError: function(element) {
          console.log('error loading ' + element.data('src'));
      }
  });*/
});

 
$(window).on('load', function() {
  lazyLoadMe('results-media');
  lazyLoadMe('location-photos');  
});

function lazyLoadMe(selector){
  $('.' + selector).each(function(e){
    $(this).attr("src", $(this).attr("data-src"));
  });
}

function getContainerName(id){
  try{
    if(properties[id]['container']){
      return properties[id]['container']['name'];
    }else{
      return properties[id]['property_name'].trim().replaceAll(" ", '-').toLowerCase();
    }
  }catch(e){

  }
}
function searchResults(url){

  $.ajax({
        url: url,
        dataType:'html',
        type: 'get',
        async:false,
        success: function(response){ 
          $('#search-results-content').html(response);
          appendSearchGridSlider();
          setTimeout("$('.result-grid').slick('setPosition');", 1000);

          setTimeout(function () {
            $('body').css('overflow', 'auto');
            $('.pageload').hide();
            lazyLoadMe('results-media');
          }, 500)
        }
    });
}

function getUrlParam(p){
  
  $.urlParam = function (name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)')
                          .exec(window.location.search);
        return (results !== null) ? results[1] || 0 : false;
    }
  return $.urlParam(p);
}

var currentSearch = '';
function filterDestination(dest){
  currentSearch = dest;
  $('.close-collapse').trigger("click");
  var url = createSearchUrl();
  searchResults(url);
}

function createSearchUrl(experience = ''){
  $('.pageload').show();

  if(experience !== null && !experience){
    experience = getUrlParam('experience');
    if(!experience){
      experience = '';
    }
  }

  if(experience === null){
    experience = '';    
  }

  var atmospheres = [];
  var facilities = [];  
  var styles = [];

  $("input[name='atmosphere[]']").each(function(){
    if($(this).prop('checked') === true){
      atmospheres.push($(this).val());
    }
  });
  $("input[name='facilities[]']").each(function(){
    if($(this).prop('checked') === true){
      facilities.push($(this).val());
    }
  });
  $("input[name='style[]']").each(function(){
    if($(this).prop('checked') === true){
      styles.push($(this).val());
    }
  });

  var min = $("#min").val();
  var max = $("#max").val();

  var keyword = '';
  if(currentSearch){
    keyword = currentSearch;
  }else{
    keyword = getUrlParam('s');
  }
  var atmosphere_ids = atmospheres.join(',');
  var facility_ids = facilities.join(',');
  var style_ids = styles.join(',');
  
  var url = document.location.origin + document.location.pathname + `?s=`+keyword+`&atmosphere_ids=`+atmosphere_ids+`&facility_ids=`+facility_ids+`&style_ids=`+style_ids+`&experience=`+experience+`&min=`+min+`&max=`+max;
  window.history.pushState({}, '', url);
  return url + '&view=ajax';
}

function resetSearch(){
  $('.nav-tags').html('');
  var keyword = '';
  keyword = getUrlParam('s');
  var url = document.location.origin + document.location.pathname + `?s=` + keyword;
  window.history.pushState({}, '', url);
  searchResults(url + '&view=ajax');
  $('.city-f').trigger('click');
}

function removeMe(e, id){
  var url = '';
  if(id){
    $('#'+id).prop("checked", false);
    url = createSearchUrl();   
  }else{
    url = createSearchUrl(null);   
  }
  $(e).parents("li").remove();
  searchResults(url);
}

function setBreadcrumb(elem){
  var lb = elem.parents('.custom-control').find("label").html();
  var lbId = elem.attr("id");
  appendBreadCrumb(lb, lbId);
    
}

function setBreadcrumbSingle(elem){
  var lb = elem.html();
  appendBreadCrumb(lb, '');
}

function appendBreadCrumb(lb, lbId){
  $("#Exp").append(`<li class="nav-item">
      <span class="nav-link">
        <a class="" href="#">
          <span class="taxonomyTags-roundedArrow">
            <svg width="20" height="26" viewBox="0 0 20 26" xmlns="http://www.w3.org/2000/svg" style="vertical-align: auto;">
              <path d="M14.874 26c-.957.012-2.011-.227-3.167-.711-1.155-.484-2.07-1.068-2.747-1.752l-7.964-8.05C.332 14.814 0 13.988 0 13.008c0-.98.332-1.807.996-2.477L8.96 2.48c.677-.684 1.592-1.267 2.747-1.751C12.863.245 13.925 0 14.895 0h5.106v26h-5.127z" fill="currentColor" fill-rule="evenodd"></path>
            </svg>
          </span>
           
          <span class="taxonomyTags-tagTitle">
            ` + lb + `
          </span>
        </a>
        <a href="javascript:void();" class="delete delete_atm" onclick="removeMe(this,'` + lbId + `')">
          <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
          </svg>
        </a>
      </span>
    </li>`);
}