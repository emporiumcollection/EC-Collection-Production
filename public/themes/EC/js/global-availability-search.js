var properties = [];
function replacePropertyData(id){
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
        imageview += '<a href="#" data-sub-html="alter text" class="grid-item grid-row-' + grid + ' span-' + spanid + '"><img src="uploads/container_user_files/locations/' + properties[id]['container']['name'] + '/property-images/' + e.file_name + '" class="img-fluid" alt=""></a>';
        spanid=2;
        grid++;
      })
      $(this).html(imageview);
  });

  setMapLocation(properties[id]['latitude'], properties[id]['longitude']);
}

function replacePropertySuites(id){
  var suiteview = '';
  $('[data-place="property-suites"]').each(function() {
      suiteview += `<li class="nav-item">
          <a class="nav-link" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab"
              aria-controls="suiteslist" aria-selected="true">Suites</a>
      </li>`;
      var values = properties[id]['suites'];
      values.forEach(function(e){
        suiteview += `<li class="nav-item">
            <a class="nav-link nav-link-sub" id="suitelist1-tab" data-toggle="pill"
                href="#suitelist1" role="tab" aria-controls="suitelist1" aria-selected="false"> ` + e.category_name + `</a>
        </li>`;
      })
      $(this).html(suiteview);
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
            
            console.log(data.channel_url);   
//            $(".dv-youtube-channel").html('<div class="yt-rvideos"></div>');
            //$(".dv-youtube-channel").html('<div data-yt data-yt-channel="'+data.channel_url+'" data-yt-content-columns="4"  data-yt-content-rows="3"></div>')                    
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