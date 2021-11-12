$(document).ready(function(){

	$(document).on('click' , '.collection_',function(e){
	    var name = $("#collection_name").val();
	    var date = $("#from_to_end").val();

	    $.ajax({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
	        type: 'POST',            
	        url:'/add_collection',
	        data:{  
	                name: name,
	                date: date
	            },
	        dataType:'json',                    
	        success: function(response){

	        }
	    });

  	});

	$(document).on('click','.add_collection',function(){
		alert();
	});


});