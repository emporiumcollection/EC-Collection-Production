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