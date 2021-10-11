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
      console.log(properties[id][field]);
      console.log(field);
      $(this).html(properties[id][field]);
  });

  $('[data-place="property-multi-value"]').each(function() {
      field = $(this).attr('data-replace');
      //console.log(properties[id][field]);
      var values = properties[id][field].split(',');
      var listview = '';
      values.forEach(function(e){
        listview += '<p class="mb-0">' + e + '</p>';
      })
      $(this).html(listview);
  });

  $('[data-place="property-images"]').each(function() {
      // field = $(this).attr('data-replace');
      //console.log(properties[id][field]);
      var values = properties[id]['images'];
      var imageview = '';
      var spanid = 1;
      var grid = 1;
      values.forEach(function(e){
        imageview += '<a href="#" data-sub-html="alter text" class="grid-item grid-row-' + grid + ' span-' + spanid + '"><img src="/property-image/resize/320x320/' + properties[id]['container']['name'] + '/' + e.file_name + '/property-image" class="img-fluid" alt=""></a>';
        spanid=2;
        grid++;
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
      suites.forEach(function(s){
        rooms = s.rooms;
        rooms.forEach(function(r){
          rimages = r.images;
          if(r.images!=undefined){          
            rimages.forEach(function(e){
              console.log(e);
              imageview += '<a href="#" data-sub-html="alter text" class="grid-item grid-row-' + grid + ' span-' + spanid + '"><img src="/room-image/resize/320x320/' + properties[id]['container']['name'] + '/' + e['file']['name'] + '/' + e.file.file_name + '" class="img-fluid" alt=""></a>';
              spanid=2;
              grid++;
            });
          }
        });
      });
      $(this).html(imageview);
  });

  $('[data-place="bar-images"]').each(function() {
      // field = $(this).attr('data-replace');
      //console.log(properties[id][field]);
      var values = properties[id]['bar_images'];
      var imageview = '';
      var spanid = 1;
      var grid = 1;
      values.forEach(function(e){
        imageview += '<a href="#" data-sub-html="alter text" class="grid-item grid-row-' + grid + ' span-' + spanid + '"><img src="/property-image/resize/320x320/' + properties[id]['container']['name'] + '/' + e.file.file_name + '/bar-image" class="img-fluid" alt=""></a>';
        spanid=2;
        grid++;
      })
      $(this).html(imageview);
  });

  $('[data-place="restrurant-images"]').each(function() {
      // field = $(this).attr('data-replace');
      //console.log(properties[id][field]);
      var values = properties[id]['restrurant_images'];
      var imageview = '';
      var spanid = 1;
      var grid = 1;
      values.forEach(function(e){
        imageview += '<a href="#" data-sub-html="alter text" class="grid-item grid-row-' + grid + ' span-' + spanid + '"><img src="/property-image/resize/320x320/' + properties[id]['container']['name'] + '/' + e.file.file_name + '/restrurant-image" class="img-fluid" alt=""></a>';
        spanid=2;
        grid++;
      })
      $(this).html(imageview);
  });

  $('[data-place="spa-images"]').each(function() {
      // field = $(this).attr('data-replace');
      //console.log(properties[id][field]);
      var values = properties[id]['spa_images'];
      var imageview = '';
      var spanid = 1;
      var grid = 1;
      values.forEach(function(e){
        imageview += '<a href="#" data-sub-html="alter text" class="grid-item grid-row-' + grid + ' span-' + spanid + '"><img src="/property-image/resize/320x320/' + properties[id]['container']['name'] + '/' + e.file.file_name + '/spa-image" class="img-fluid" alt=""></a>';
        spanid=2;
        grid++;
      })
      $(this).html(imageview);
  });

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

  setMapLocation(properties[id]['latitude'], properties[id]['longitude']);
}

function replaceGalleryNames(id){
  var suitenamelist = `<li class="nav-item">
        <a class="nav-link" href="#">Suites</a>
      </li>`;
  
  properties[id]['suites'].forEach(function(s) {
      suitenamelist += `<li class="nav-item">
        <a class="nav-link" href="#">` + s.cat_short_name + `</a>
      </li>`;
  });

  $('[data-replace="suitenamelist"]').html(suitenamelist);

  var restaurant = `<li class="nav-item">
        <a class="nav-link" href="#">Restaurants</a>
      </li>`;
  for (const [key, value] of Object.entries(properties[id]['restaurantList'])) {
    restaurant += `<li class="nav-item">
        <a class="nav-link" href="#">` + value + `</a>
      </li>`;
  }

  $('[data-replace="restaurants"]').html(restaurant);

  var bar = `<li class="nav-item">
        <a class="nav-link" href="#">Bars</a>
      </li>`;
  for (const [key, value] of Object.entries(properties[id]['barList'])) {
    bar += `<li class="nav-item">
        <a class="nav-link" href="#">` + value + `</a>
      </li>`;
  }

  $('[data-replace="bars"]').html(bar);

  var spa = `<li class="nav-item">
        <a class="nav-link" href="#">Spas</a>
      </li>`;
  for (const [key, value] of Object.entries(properties[id]['spaList'])) {
    spa += `<li class="nav-item">
        <a class="nav-link" href="#">` + value + `</a>
      </li>`;
  }

  $('[data-replace="spas"]').html(spa);
}

function replacePropertySuites(id){
  var suiteview = '';
  var firstsuite = 0;
  currentPropertyId = id;
  
  replaceSuiteList(id);

  $('[data-place="property-suites"]').each(function() {
      suiteview += `<li class="nav-item">
          <a class="nav-link" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab"
              aria-controls="suiteslist" aria-selected="true">Suites</a>
      </li>`;
      var values = properties[id]['suites'];
      values.forEach(function(e){
        if(!firstsuite){
          firstsuite = e.id;
        }
        suiteview += `<li class="nav-item" onclick="replaceSuiteDetail(` + id + `, ` + e.id + `)">
            <a class="nav-link nav-link-sub" id="suitelist1-tab" data-toggle="pill"
                href="#suitelist1" role="tab" aria-controls="suitelist1" aria-selected="false"> ` + e.category_name + `</a>
        </li>`;
      })
      $(this).html(suiteview);
      //replaceRooms(id, firstsuite);
  });
}

function replaceSuiteList(id){
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

      roomimages = '';
      suite.rooms[0].images.forEach(function(rm){
        if(onlyThree < 3){        
          roomimages += `<div>
              <img src="/room-image/resize/750x520/` + properties[id]['container']['name'] + `/` + rm['file']['name'] + `/` + rm['file']['file_name'] + `" class="w-100" alt="">
            </div>`;  
        }
        onlyThree++; 
      });
      suiteItem = suiteItem.replace('<!--TEMPLATE-SUITE-GALLERY-->', roomimages);  
      suiteItem = suiteItem.replace('<!--SUITEID-->', sid);  
      
      $('#suiteslist').append(suiteItem);
    }

  });
  setTimeout('appendResultGridSlider()', 2000);
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

  var roomimages = ``;
  suite.rooms[0].images.forEach(function(rm){
    roomimages += `<div>
      <img src="/room-image/resize/750x520/` + properties[property_id]['container']['name'] + `/` + rm['file']['name'] + `/` + rm['file']['file_name'] + `" class="img-fluid" alt="">
    </div>`;
  });

  $('[data-place="price-icon"]').html(`<i class="ico ico-info-green pointer btn-sidebar" type="button"
                                data-sidebar="#priceinfo" onclick="replacePrices(`+category_id+`)"></i>`);

  $('[data-place="suite_room_images"]').html(roomimages);
  setTimeout('appendSlider()', 2000);
  replacePropertyData(property_id);
}

function replaceSuiteBoard(){
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

function replaceRooms(property_id, category_id){
  var suite;
  properties[property_id]['suites'].forEach(function(e){
    if(category_id === e.id){
      suite = e;
    }
  });

  var roomview = ``;
  var roomimages = ``;
  suite.rooms.forEach(function(r){
    roomimages = ``;
    r.images.forEach(function(rm){
      roomimages += `<div>
        <img src="uploads/container_user_files/locations/` + properties[property_id]['container']['name'] + `/rooms-images/` + rm['file']['name'] + `/` + rm['file']['file_name'] + `" class="w-100" alt="">
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
            if(!$('.yt-rvideos').length) return false;

            $('.yt-rvideos').yottie({  
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

function replacePrices(cat_id){
    $.ajax({
        url: 'property/prices?category_id=' +  cat_id + '&property_id=' +  currentPropertyId + '&arrival=2021-10-05&departure=2021-10-10',
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
            if(!priceTemplate){              
              priceTemplate = $('#priceinfo .sub-price-content').html();
            }
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
    console.log(e.target);
    if(!$(e.target).hasClass('sidebar-main') && !$(e.target).parents('div').hasClass('sidebar-main')){
      console.log('close it');
      $('.sidebar-main').removeClass('show');
      $('body').css('overflow', 'auto');
      $('.sidebar-overlay').remove();      
    }
  });
});