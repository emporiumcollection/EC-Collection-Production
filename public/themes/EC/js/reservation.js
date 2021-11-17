$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
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

    $(".availability-check").on("click", function () {
        $('#smartwizard').smartWizard("next");
        $('.img-offset-slide').slick('setPosition');
        return true;
    });

    $(".btn-nextwizard").on("click", function (e) {
        e.preventDefault();
        $('#smartwizard').smartWizard("next");
        $('.result-grid').slick('setPosition');
        setTimeout(function () {
            map.invalidateSize();
        }, 100);
        return true;
    });

    $(".btn-newreserve").on("click", function () {
        $('#smartwizard').smartWizard("prev");
        return true;
    });
    $(".btn-backwizard").on("click", function () {
        $('#smartwizard').smartWizard("prev");
        return true;
    });

    $('.fromdate').daterangepicker({
        singleDatePicker: true,
        locale: {
            format: 'DD MMM YYYY'
        }
    });

    $('.fromdate').on('apply.daterangepicker', function (ev, picker) {
        $('.todate').prop("disabled", false);
    });

    $('.todate').daterangepicker({
        singleDatePicker: true,
        locale: {
            format: 'DD MMM YYYY'
        }
    });

    $('.policies').on('show.bs.collapse', function () {
        $('.collapse.show').each(function () {
            $(this).collapse('hide');
        });
    });

    $('.field-count-reservation ').on('click', '.min-room', function () {
        $(this).closest('.guest-pick-container').find('.col-ews').not(':first').last().remove();

        if ($(this).next().find('.mr-1').html() > 1) {
            $(this).next().find('.mr-1').html(function (i, val) { return val * 1 - 1 });
        }
        if ($(this).next().find('.mr-1').html() < 2) {
            $(this).closest('.field-count-reservation').find('.min-room').addClass('disable');
            $('.guest-pick-body').find('.col-ews').addClass('col-12').removeClass('col-6');

        }
        if ($(this).prev().find('.mr-1').html() != 4) {
            $(this).closest('.field-count-reservation').find('.plus-room').removeClass('disable');
            $('.list-eoom').show();
            $('.room-limit').hide();
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

    $(document).on('click', '.field-count-reservation .plus', function () {
        $(this).prev().find('.mr-1').html(function (i, val) { return val * 1 + 1 });
        $(this).closest('.field-count-reservation').find('.min').removeClass('disable');
    });
    $(document).on('click', '.field-count-reservation .min', function () {
        if ($(this).next().find('.mr-1').html() > 0) {
            $(this).next().find('.mr-1').html(function (i, val) { return val * 1 - 1 });
        }
        if ($(this).next().find('.mr-1').html() < 1) {
            $(this).closest('.field-count-reservation').find('.min').addClass('disable');
        }
    });

    $(document).on('click', ".add_new_addres", function(){
        var title = $( "#title option:selected" ).val("");
        var country = $( "#country option:selected" ).val("");
        var state = $( "#state option:selected" ).val("");
        var city = $( "#city").val("");
        var address2 = $('#address2').val("");
        var address1 = $('#address1').val("");
        var phone = $('#phone').val("");
        var email = $('#email_').val("");       
        var zip_code = $('#zip_code').val("");                
        var last_name = $('#last_name').val("");
        var first_name = $('#first_name').val("");
    });
});

function initilize(){
    $('select').select2({
        theme: 'bootstrap',
        minimumResultsForSearch: -1
    });
}

$( document ).ready(function() {


    $(document).on('click', ".select_suite", function(){
        var suit_id = new Array();
        var guest = new Array();
        // $(this).text("Selected");
        var curr_btn = $(this);
        var suite_id = curr_btn.data('suite-id');
        var selected_guest = curr_btn.parents('section').find('#select_suite_guest_'+suite_id).val();
        if(!selected_guest){
            curr_btn.parents('section').find('#select_suite_guest_'+suite_id).focus();
            return false;
        }
        suit_id.push(curr_btn.data('suite-id'));
        guest.push(selected_guest);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',            
            url: '/suite',
            data: { suit_id:suit_id,
                    guest: guest },
            dataType: 'json',                    
            success: function(response){
                // console.log(response);
                curr_btn.parents('section').html(response.suite_selection_html);
                initilize();
            }
        });
    });

    $(document).on('click', '.remove_suit', function(){
        var curr_btn = $(this);
        var suite_id = curr_btn.data('suite-id');
        var guest = $('#select_suite_guest_'+suite_id).val();
        $.ajax({
            url: '/remove-suite-selection/'+suite_id+'/'+guest,
            type: 'get',
            dataType: 'json',
            success: function(response){
                curr_btn.parents('section').html(response.suite_selection_html);
                initilize();
            },
        });
    });

    $(document).on('click', ".reserve_data", function(){

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'get',            
            url:'/reserve_data',
            success: function(response){
                window.location.href ="/reservation/receipt";
            }
        });
    });

    $(document).on('click', '.continue_step', function(e){
        e.preventDefault();
        var totalGuest = 0;
        $.each($('select[name="total_guest"]'), function(key, val){
            console.log($(this).val());
            if($(this).val() !== null){
                totalGuest = (totalGuest + parseInt($(this).val()));
            }
        });
        console.log(totalGuest);
        $.ajax({
            url: '/validate-suite-selection',
            type: 'POST',
            data: {
                totalGuest: totalGuest
            },
            dataType: 'json',
            beforeSend: function(){
                $('#guestValidationMsg').hide();
            },
            success: function(response){
                if(response.status === false){
                    $('#guestValidationMsg').find('#massage').html(response.message);
                    $('#guestValidationMsg').show();
                }
                console.log(response);
            },
            error: function(xhr, textStatus, error){
                console.log('Something went wrong!');
                console.log(xhr.responseText);
                console.log(xhr.statusText);
                console.log(textStatus);
                console.log(error);
            },
            complete: function(){}
        });
    });
        
});

$(document).on('click', ".step_where", function(){
    var arrival_date = $("#arrival_date").val();
    var departure_date = $("#departure_date").val();

    if ((arrival_date == '') && (departure_date == '')) {
        $.ajax({
            type: 'get',            
            url:'/reservation/when',                
            success: function(response){
                $('#error').html(response);
                window.location.href ="/reservation/when";
            }
        });            
    }else{ 
        window.location.href = "/reservation/where";
    }        
});   

$(document).on('click', ".confirm_address", function(){

    var title = $( "#title option:selected" ).text();
    var country = $( "#country option:selected" ).text();
    var state = $( "#state option:selected" ).text();
    var city = $( "#city").val();
    var address2 = $('#address2').val();
    var address1 = $('#address1').val();
    var phone = $('#phone').val();
    var email = $('#email_').val();       
    var zip_code = $('#zip_code').val();                
    var last_name = $('#last_name').val();
    var first_name = $('#first_name').val();
    
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',            
        url:'/addresses',
        data:{  
                first_name: first_name,
                last_name: last_name,
                zip_code: zip_code,
                email: email,
                phone: phone,
                address1: address1,
                address2: address2,
                city: city,
                state: state,
                country: country,
                title: title
            },
        dataType:'json',                    
        success: function(response){
           
        }
    });
});

$(document).ready(function(){
    var companion = new Array();

    $('input[type="checkbox"]').click(function(){
        if($(this).prop("checked") == true){
            var companion_id = $(this).closest('div.tagvalue').find('.companion_id').val();
            var companion_name = $(this).closest('div.tagvalue').find('.companion_name').text();
            var companion_email = $(this).closest('div.tagvalue').find('.companion_email').text();
            var companion_phone = $(this).closest('div.tagvalue').find('.companion_phone').text();
            // guest.push(selected_guest);

            companion.push( {
                id: (companion_id ),
                name: (companion_name ),
                email:( companion_email),
                phone:( companion_phone)
            });
        }

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',            
            url:'/storeinTosession',
            data:{  
                    companion: companion,
                },
            dataType:'json',                    
            success: function(response){
               
            }
        });
    });


    $('.field-count-reservation').on('click', '.plus-room', function () {
        
        if ($(this).prev().find('.mr-1').html() < 5) {
            $(this).prev().find('.mr-1').html(function (i, val) { return val * 1 + 1 });
            $(this).closest('.field-count-reservation').find('.min-room').removeClass('disable');
            var curr = $(this).closest('.guest-pick-container').find(".col-ews");
            var currLength = curr.length + 1;
            var temp = '<div class="col-6 col-ews mb-3" id="room-' + currLength + '">' +
                '<p><b>Suite ' + currLength + '</b></p>' +
                '<div class="row align-items-center py-2">' +
                '<div class="col-7">' +
                '<p class="mb-0"><b>Adults</b></p>' +
                '</div>' +
                '<div class="col-5">' +
                '<div class="row field-count-reservation align-items-center">' +
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
                '<div class="row field-count-reservation align-items-center">' +
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
            $(this).closest('.field-count-reservation').find('.plus-room').addClass('disable');
            $('.list-eoom').hide();
            $('.room-limit').show();
        }
    });

    $(document).on('click', ".select_guest_", function(){
        var child = $(".child_val").text();
        var adult = $(".adult_val").text();
        $.ajax({
            /*headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },*/
            type: 'POST',            
            url: '/select/guest',
            // dataType:'json',                    
            data: {
                child:child,
                adult:adult
            },
            success: function(response){
                window.location.href ="/reservation/suite";
            },
        });
    });

    $(document).on('click', ".add_address", function(){
        var title = $( "#title option:selected" ).text();
        var country = $( "#country option:selected" ).text();
        var state = $( "#state option:selected" ).text();
        var city = $( "#city").val();
        var address2 = $('#address2').val();
        var address1 = $('#address1').val();
        var phone = $('#phone').val();
        var email = $('#email_').val();       
        var zip_code = $('#zip_code').val();                
        var last_name = $('#last_name').val();
        var first_name = $('#first_name').val();
        
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',            
            url:'/addresses',
            data:{  
                    first_name: first_name,
                    last_name: last_name,
                    zip_code: zip_code,
                    email: email,
                    phone: phone,
                    address1: address1,
                    address2: address2,
                    city: city,
                    state: state,
                    country: country,
                    title: title
                },
            dataType:'json',                    
            success: function(response){
               
            }
        });
    });      

    $(document).on('click', ".add_companion", function(){        
        var first_name = $('#comapnion_f_name').val();
        var last_name = $('#comapnion_l_name').val();
        var phone = $('#comapnion_phone').val();
        var email = $('#comapnion_email').val();       
        var zip_code = $('#zip_code').val();
        var language = $( "#language option:selected" ).text();
        var gender = $( "#gender option:selected" ).text();                        

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',            
            url:'/addcompanion',
            data: { first_name:first_name,
                    last_name:last_name,
                    phone:phone,
                    email:email,
                    language:language,
                    gender:gender,
                    zip_code:zip_code },
            dataType:'json',                    
            success: function(response){
                
            }
        });
    });
});