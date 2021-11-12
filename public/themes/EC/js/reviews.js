$(document).ready(function(){
    $(document).on('click', '#btn-review-save', function(){
        if(!$('#review_form').valid()) 
        {
            $('#error-msg').html('Please Insert all Fields');
        }
    });

        
    $("#review_form").validate({
        submitHandler: function(form) {
            if(!$('[name="rate"]:checked').length){
                $('#error-msg').html('Please Insert all Fields');
                return false;
            }
            $.ajax({
                url: "/hotel/add-reviews",
                type: "POST",
                data: $('#review_form').serialize(),
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    var post = '<div class="col-lg-6 reviews_list reviews-sidebar">'
                                    +'<div class="row">'
                                        +'<div class="col-3 pl-5">'
                                            +'<p><b>'+data.fname+' '+data.lname+'</b></p>'
                                            +'<p>'+data.country+'</p>'
                                        +'</div>'
                                        +'<div class="col pr-5">'
                                            +'<div class="rate mb-1">'
                                                +'<span class="mr-4">';
                                                for(var count = 0; count < data.rating; count++){

                                                    post+='<i class="fa fa-star mr-2" aria-hidden="true"></i>';
                                                }
                                                post+='</span>'
                                            +'<span>'
                                                    +'<b>'+data.rating+'/10</b>'
                                                +'</span>'
                                            +'</div>'
                                            +'<div class="review-content">'
                                                +'<p>'+data.comment+'</p>'
                                            +'</div>'
                                        +'</div>'
                                    +'</div>'
                                +'</div>';
                    
                    $('#reviews_list').prepend(post);
    
                    $('#review_form').trigger("reset");
                    $('#error-msg').html('Review Added successfully');
                    
    
                }, 
                error: function(data) {
                    console.log('Error:', data);
                    $('#btn-save').html('Save Changes');
                }
            });
        }
    });

    $(".reviews_list").slice(0, 10).show();
    $(".underline").on('click', function () {
        $(".reviews_list:hidden").slice(0, 10).slideDown();
        if ($(".reviews_list:hidden").length == 0) {
            $("underline").fadeOut('slow');
        }
    });
    
    $(function(){
        $("#reviews").bind('classChanged', function(){ 
            alert("asdf");
        });
    });
});

function replaceReviewData(id){
    $.ajax({
        url: "/hotel/get-reviews/"+id,
        type: "GET",
        data: $(this).serialize(),
        dataType: 'json',
        success: function(data) {
            console.log(data);
            $.each(data, function(key, val){
                var post = '<div class="col-lg-6 reviews_list reviews-sidebar">'
                                +'<div class="row">'
                                    +'<div class="col-3 pl-5">'
                                        +'<p><b>'+val.fname+' '+val.lname+'</b></p>'
                                        +'<p>'+val.country+'</p>'
                                    +'</div>'
                                    +'<div class="col pr-5">'
                                        +'<div class="rate mb-1">'
                                            +'<span class="mr-4">';
                                            for(var count = 0; count < val.rating; count++){

                                                post+='<i class="fa fa-star mr-2" aria-hidden="true"></i>';
                                            }
                                            post+='</span>'
                                        +'<span>'
                                                +'<b>'+val.rating+'/10</b>'
                                            +'</span>'
                                        +'</div>'
                                        +'<div class="review-content">'
                                            +'<p>'+val.comment+'</p>'
                                        +'</div>'
                                    +'</div>'
                                +'</div>'
                            +'</div>';
                            $('#reviews_list').prepend(post);
            });
            
                    
        }
    });
}