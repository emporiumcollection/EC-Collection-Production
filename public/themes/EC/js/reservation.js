$(document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /*$('#smartwizard').smartWizard({   
        theme: 'arrows',
        selected: 0,
        enableURLhash: false,
        toolbarSettings: {
            showNextButton: false,
            showPreviousButton: false,
        },

    });*/

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
        minDate:new Date(), 
        locale: {
            format: 'DD MMM YYYY'
        }
    });

    $('.fromdate').on('apply.daterangepicker', function (ev, picker) {
        $('.todate').prop("disabled", false);
    });

    $('.todate').daterangepicker({
        singleDatePicker: true,
        minDate:new Date(), 
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
        if($(this).closest('.guest-pick-container').find('.col-ews').length > 1){
            $(this).closest('.guest-pick-container').find('.col-ews').not(':first').last().remove();
        }

        if($(this).closest('.guest-pick-container').find('.col-ews').length == 1){
            $(this).attr('disabled', true);   
        }

        if (parseInt($(this).next().find('.mr-1').html()) > 1) {
            $(this).next().find('.mr-1').html(function (i, val) { return val * 1 - 1 });
        }
        if (parseInt($(this).next().find('.mr-1').html()) < 2) {
            $(this).closest('.field-count-reservation').find('.min-room').addClass('disable');
            $('.guest-pick-body').find('.col-ews').addClass('col-12').removeClass('col-6');

        }
        if (parseInt($(this).prev().find('.mr-1').html()) != 4) {
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

        var obj_adult = $(this).prev().find('.inp-adult');
        if(obj_adult.length > 0){
            var _adval = $(this).prev().find('.inp-adult').val();
            $(this).prev().find('.inp-adult').val(parseInt(_adval)+1);
            $(this).prev().find('span.adult-val').html($(this).prev().find('.inp-adult').val());
        }


        var obj_child = $(this).prev().find('.inp-child');

        if(obj_child.length > 0){
            var _chval = obj_child.val();
            obj_child.val(parseInt(_chval)+1);
            $(this).prev().find('span.child-val').html(obj_child.val());
        }
        $(this).closest('.field-count-reservation').find('.min').removeClass('disable');
    });

    $('.field-count-reservation .plus-room').unbind('click')
    $(document).on('click', '.field-count-reservation .plus-room', function () {
        var obj_rooms = $(this).prev().find('.room-val');
        if(obj_rooms.length > 0){
            var _adval = $(this).prev().find('.mr-1').html();
            $(this).prev().find('.mr-1').html(parseInt(_adval));
            $(this).prev().find('.suite').val($(this).prev().find('.mr-1').html());
        }

        if($(this).prev().find('.suite').val() > 1){
            $('.min-room').removeAttr('disabled').removeClass('disable');
        }
    });

    $('.field-count-reservation .min-room').unbind('click')
    $(document).on('click', '.field-count-reservation .min-room', function () {
        if ($(this).next().find('.suite').val() > 0) {
            $(this).next().find('.suite').val(function (i, val) { return val * 1 - 1 });
            $(this).next().find('span.room-val').html($(this).next().find('.suite').val());
        }
    });

    $(document).on('click', '.field-count-reservation .min', function () {
        if ($(this).next().find('.inp-adult').val() > 0) {
            $(this).next().find('.inp-adult').val(function (i, val) { return val * 1 - 1 });
            $(this).next().find('span.adult-val').html($(this).next().find('.inp-adult').val());
        }

        if ($(this).next().find('.inp-child').val() > 0) {
            $(this).next().find('.inp-child').val(function (i, val) { return val * 1 - 1 });
            $(this).next().find('span.child-val').html($(this).next().find('.inp-child').val());
        }

        if ($(this).next().find('.adult-val, .child-val').html() < 1) {
            $(this).closest('.field-count-reservation').find('.min').addClass('disable');
        }
    });

    //add New Address in reservation who's traveling step

    $(document).on('click', ".add_new_addres", function(){
        var title = $( "#address_title option:selected" ).val("");
        var country = $( "#address_country option:selected" ).val("");
        var state = $( "#address_state option:selected" ).val("");
        var city = $( "#address_city").val("");
        var address2 = $('#address_address2').val("");
        var address1 = $('#address_address1').val("");
        var phone = $('#address_phone').val("");
        var email = $('#address_email_').val("");       
        var zip_code = $('#address_zip_code').val("");                
        var last_name = $('#address_last_name').val("");
        var first_name = $('#address_first_name').val("");
    });

    //insert board befor total off all suits
    $(".selected-suite-bord").insertBefore('.reservation-total');


    //onclick or select board in reservation
    $(document).on('click', '.board-selection', function(){
        if($(this).prop('checked') === true){
            var board_id = $(this).val();
            $('.remove_board_selection').css('display', 'none');
            $(this).nextAll().eq(1).css('display', 'block');

            $.ajax({
                // headers: {
                // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                // },
                type: 'get',            
                url: '/select/board/'+board_id,
                dataType:'json',                    
                success: function(response){
                    $("#suiteboard").html(response.select_boards);
                    $(".selected-suite-bord").insertBefore('.reservation-total');
                },
            });
        }
    });
    // TO remove selected suite board
    $(document).on('click', '.remove_board_selection', function(){
        $('.board-selection').prop('checked', false);
        $(this).css('display', 'none');
        $(".selected-suite-bord").remove();
    });
});

function sticky_relocate() {
  var window_top = $(window).scrollTop();
  var div_top = $('#sticky-anchor').offset().top;
  var first_suite = $('.btn-backwizard').offset().top;

  var perc = ($(window).scrollTop() * 100) / $(document).height();
  if (perc  >= 10) {
    $('.reservation-summary-sidebar').addClass('stick');
  } else {
    $('.reservation-summary-sidebar').removeClass('stick');
  }
  var last_suite = $('.suite-list').last().offset().top;
  
  if (perc  >= 60) {
    $('.reservation-summary-sidebar').removeClass('stick');
  }
}

$(function() {
//   $(window).scroll(sticky_relocate);
//   sticky_relocate();
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
        var guests = new Array();
        var adult,
            infant,
            junior = 0;
        var curr_btn = $(this);
        var curr_section = curr_btn.parents('section');
        var suite_id = curr_btn.data('suite-id');
        if(curr_section.find('select[name="adult"]').val() != ''){
            adult = curr_section.find('select[name="adult"]').val();
        }
        if(curr_section.find('select[name="junior"]').length && (curr_section.find('select[name="junior"]').val() !== null || typeof 'undefined' !== curr_section.find('select[name="junior"]').val())){
            junior = curr_section.find('select[name="junior"]').val();
        }
        if(curr_section.find('select[name="infant"]').length && (curr_section.find('select[name="infant"]').val() !== null || typeof 'undefined' !== curr_section.find('select[name="infant"]').val())){
            infant = curr_section.find('select[name="infant"]').val();
        }
        if(!adult && !junior && !infant){
            curr_btn.parents('section').find('select[name="adult"]').focus();
            return false;
        }
        suit_id.push(curr_btn.data('suite-id'));
        guests.push({
            adult: adult,
            junior: junior,
            infant: infant
        });

        $.ajax({
            type: 'POST',            
            url: '/suite',
            data: {
                suit_id: suit_id,
                guests: guests,
                adult: adult,
                junior: junior,
                infant: infant
            },
            dataType: 'json',                    
            success: function(response){
                curr_section.html(response.suite_selection_html);

                curr_section.find('select[name="adult"], select[name="junior"], select[name="infant"]').select2({
                    theme: 'bootstrap',
                    minimumResultsForSearch: -1
                });
                $("#selected-suite-list").html(response.reserve_suite_html);
                $(response.select_board).insertBefore(".reservation-total");
            }
        });
    });
    

    $(document).on('click', ".select_guest_", function(){

        var suite = $(".tab-pane input[name='suite[]']")
              .map(function(){return $(this).val();}).get();
        var rooms = $(".tab-pane input[name='rooms[]']")
              .map(function(){return $(this).val();}).get();
        var adult = $(".tab-pane input[name='adult[]']")
              .map(function(){return $(this).val();}).get();
        var child = $(".tab-pane input[name='child[]']")
              .map(function(){return $(this).val();}).get();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',            
            url: '/select/guest',
            // dataType:'json',                    
            data: {
                rooms: rooms,
                child: child,
                adult: adult,
                suite: suite
            },
            success: function(response){
                window.location.href ="/reservation/suite";
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

    $(document).on('click', '.remove_suite', function(){
        var curr_btn = $(this);
        var curr_section = curr_btn.parents('section');
        var suite_id = curr_btn.data('suite-id');
        var adult,
            infant,
            junior = 0;
        if(curr_section.find('select[name="adult"]').val() != ''){
            adult = curr_section.find('select[name="adult"]').val();
        }
        if(curr_section.find('select[name="junior"]').length && (curr_section.find('select[name="junior"]').val() !== null || typeof 'undefined' !== curr_section.find('select[name="junior"]').val())){
            junior = curr_section.find('select[name="junior"]').val();
        }
        if(curr_section.find('select[name="infant"]').length && (curr_section.find('select[name="infant"]').val() !== null || typeof 'undefined' !== curr_section.find('select[name="infant"]').val())){
            infant = curr_section.find('select[name="infant"]').val();
        }
        $.ajax({
            url: '/remove-suite-selection/'+suite_id,
            type: 'get',
            dataType: 'json',
            success: function(response){
                curr_section.html(response.suite_selection_html);
                curr_section.find('select[name="adult"], select[name="junior"], select[name="infant"]').select2({
                    theme: 'bootstrap',
                    minimumResultsForSearch: -1
                });
                $("#selected-suite-list").html(response.reserve_suite_html);
                $(response.select_board).insertBefore(".reservation-total");
            },
        });
    });

    $(document).on('click', '.continue_step', function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        var totalGuest = 0;
        var total_adult = 0;
        var total_junoir = 0;
        var total_infant = 0;
        $.each($('select[name="adult"]'), function(key, val){
            if($(this).val() !== null){
                total_adult = (total_adult + parseInt($(this).val()));
            }
        });
        $.each($('select[name="junior"]'), function(key, val){
            if($(this).val() !== null){
                total_junoir = (total_junoir + parseInt($(this).val()));
            }
        });
        $.each($('select[name="infant"]'), function(key, val){
            if($(this).val() !== null){
                total_infant = (total_infant + parseInt($(this).val()));
            }
        });
        totalGuest = parseInt(total_adult + total_junoir + total_infant);
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
                }else if(response.status === true){
                    window.location.href = href;
                }
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

$(document).on('click', ".stay_dates", function(){
    var arrival_date = $("#arrival_date").val();
    var departure_date = $("#departure_date").val();
    var propertyid = $("#property_id").val();

    $.ajax({
        type: 'post',            
        url: '/store_dates/session',             
        data: {
            property_id:propertyid,
            arrival_date:arrival_date,
            departure_date:departure_date
        },
        success:function(response){
            $("#msg").show();
            $("#msg").html("Date selected");
            $("#msg").fadeOut(5000);
        }
    });
});


$(document).on('click', ".step_where", function(){
    var arrival_date = $("#arrival_date").val();
    var departure_date = $("#departure_date").val();
    var propertyid = $("#property_id").val();
    if(arrival_date == ''){
        $('#guestValidationMsg').find('#massage').html("Please select your stay dates");
        $('#guestValidationMsg').show();
        return false;
    }else{
        $.ajax({
            type: 'post',            
            url: '/store_dates/session',             
            data: {
                property_id:propertyid,
                arrival_date:arrival_date,
                departure_date:departure_date
            },
            success:function(response){
                window.location.href ="/reservation/where";
            }
        });
    }
});


$(document).ready(function(){
    $('.chkcompanion').click(function(){
        var curr_checkbox = $(this);
        if(curr_checkbox.prop('checked') == true){
            curr_checkbox.parents('.companion').next('.companion_suite').show();
        }else{
            var suite_id = curr_checkbox.parents('.companion').next('.companion_suite').find('select[name="suite"]').val();
            var companion_id = curr_checkbox.val();
            if(suite_id){
                addRemoveCompanionAjaxCall(companion_id, suite_id, 'remove');
            }
            curr_checkbox.parents('.companion').next('.companion_suite').hide();
        }
    });

    $('.chkpolicies_btn').click(function(){
        if($('input[name = "policies_ckh"]').prop('checked') == true){
            window.location.href = '/reservation/whoistravelling';
        }else{
            $('#guestValidationMsg').find('#massage').html("Terms and Conditions required");
            $('#guestValidationMsg').show();
        }
    });

    $('.chkaccesibility').click(function(){
        if($(this).prop('checked') == true)
        {
            $(".accessible").show();
            $(".not-accessible").hide();
        }else{
            $(".accessible").show();
            $(".not-accessible").show();
        }
    });

    $(document).on('change', '.add_compnaion', function(){
        var suite_id = $(this).val();
        var companion_id = $(this).data('companion-id');
        addRemoveCompanionAjaxCall(companion_id, suite_id, 'save');
    });

    $('.field-count-reservation').on('click', '.plus-room', function () {
        if ($(this).prev().find('.mr-1').html() < 5) {
            $(this).prev().find('.mr-1').html(function (i, val) { return val * 1 + 1 });
            $(this).closest('.field-count-reservation').find('.min-room').removeClass('disable');
            var curr = $(this).closest('.guest-pick-container').find(".col-ews");
            var currLength = curr.length + 1;
            var temp = '<div class="col-6 col-ews mb-3" id="room-' + currLength + '">' +
                '<p><b>Suite ' + currLength + '</b></p>' +
                '<input type="hidden" name="rooms[]" id="rooms_' + currLength + '"/>'+
                '<div class="row align-items-center py-2">' +
                    '<div class="col-7">' +
                        '<p class="mb-0"><b>Adults</b></p>' +
                    '</div>' +
                    '<div class="col-5">' +
                        '<div class="row field-count-reservation align-items-center">' +
                            '<button type="button" class="min">-</button>' +
                            '<div class="col text-center">' +
                                '<span class="mr-1 adult-val" >0 </span>' +
                                '<input type="hidden" name="adult[]" class="inp-adult" id="adult" value="0" />'+
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
                                '<span class="mr-1 child-val">0 </span>' +
                                '<input type="hidden" name="child[]" id="" class="inp-child" value="0" />'+
                            '</div>' +
                        '<button type="button" class="plus mr-3">+</button>' +
                    '</div>' +
                '</div>' +
            '</div>';
            $(this).closest('.guest-pick-container').find('.guest-pick-body').find('.col-ews').addClass('col-6').removeClass('col-12');
            $(this).closest('.guest-pick-container').find('.guest-pick-body .list-eoom').append(temp);
        }
        if ($(this).prev().find('.mr-1').html() > 4) {
            $(this).closest('.field-count-reservation').find('.plus-room').addClass('disable');
            $('.list-eoom').hide();
            $('.room-limit').show();
        }
    });


    $(document).on('click', ".confirm_address, .add_address", function(){
        var title = $( "#address_title option:selected" ).val();
        var country = $( "#address_country option:selected" ).val();
        var state = $( "#address_state option:selected" ).val();
        var city = $( "#address_city").val();
        var address2 = $('#address_address2').val();
        var address1 = $('#address_address1').val();
        var phone = $('#address_phone').val();
        var email = $('#email_').val();       
        var zip_code = $('#address_zip_code').val();                
        var last_name = $('#address_last_name').val();
        var first_name = $('#address_first_name').val();
        
        $.ajax({
            type: 'POST',            
            url: '/addresses',
            data: {  
                address_first_name: first_name,
                address_last_name: last_name,
                address_zip_code: zip_code,
                address_email: email,
                address_phone: phone,
                address_address1: address1,
                address_address2: address2,
                address_city: city,
                address_state: state,
                address_country: country,
                address_title: title
            },
            dataType:'json',                    
            success: function(response){
                $('.errMsg').empty();
                $('.form-control').removeClass('is-invalid');
                if(response.status != false){
                    $('#address_added').val('1');
                }else{
                    $.each(response.errors, function(key, val){
                        $('.'+key).addClass('is-invalid');
                        $('.'+key).next('.errMsg').html(val);
                    }); 
                }
            }
        });
    });      

    $(document).on('click', ".add_companion", function(){        
        var first_name = $('#comapnion_f_name').val();
        var last_name = $('#comapnion_l_name').val();
        var phone_code = $('#comapnion_phone_code').val();
        var phone = $('#comapnion_phone').val();
        var email = $('#comapnion_email').val();
        var preferred_language = $("#preferred_language").val();
        var gender = $("#gender").val();
        var suite = $('#suite').val();

        $.ajax({
            type: 'POST',            
            url: '/addcompanion',
            data: { 
                first_name: first_name,
                last_name: last_name,
                email: email,
                phone_code: phone_code,
                phone: phone,
                gender: gender,
                preferred_language: preferred_language,
                suite: suite
            },
            dataType: 'json',                    
            success: function(response){
                $('.errMsg').empty();
                $('.form-control').removeClass('is-invalid');
                if(response.status){
                    $('#companion_list').append(response.companion_html);
                    $('#addCompanionModal').modal('hide');
                }else{
                    $.each(response.errors, function(key, val){
                        $('.ac_'+key).empty();
                        $('.'+key).addClass('is-invalid');
                        $('.ac_'+key).html(val);
                    });
                }
            }
        });
    });

    $(document).on('click', '.validate-step', function(e){
        e.preventDefault();
        var next_url = $(this).attr('href');
        // if($('#address_added').val() == ''){
        //     $('#guestValidationMsg').find('#massage').html("Please add Address");
        //     $('#guestValidationMsg').show();
        //     return false;
        // }
        $.ajax({
            url:"/validate-companion",
            type:"get",
            dataType:"json",
        
            // beforeSend: function(){
            //     $('#guestValidationMsg').hide();
            // },
            success: function(response) {
                if(response.status === false){
                    $('#guestValidationMsg').find('#massage').html(response.message);
                    $('#guestValidationMsg').show();
                }else if(response.status === true){
                    window.location.href = '/reservation/paymentmethod';
                }
            }
        });

    });

    //save paymnet 
    $("#payment_form").validate();
    $(document).on('click', '#btn-payment-save', function(){
          $.ajax({
              url: "/reservation/savepaymentmethod",
              type: "POST",
              data: $('#payment_form').serialize(),
              dataType: 'json',
            success: function(response) {
                $('.form-control').removeClass('is-invalid');
                $('.invalid-feedback').empty();
                if(response.status == true){
                    window.location.href = '/reservation/bookingsummary';
                }else{
                    $.each(response.errors, function(key, val){
                        $('.'+key).addClass('is-invalid');
                        $('.'+key).next('.invalid-feedback').html(val);
                    });
                }
              }, 
              error: function(response) {
                  $('#btn-save').html('Save Changes');
              }
          });
          return false;
      });
    //save paymet end

    //copy to clipboard
    $(document).on('click', '.copy_address', function(){
        var element = $(this);
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(element.attr('title')).select();
        document.execCommand("copy");
        $temp.remove();
        element.html("<font color='green'>Copied!</font>");
        setTimeout(function(){
            element.html('<i class="fa fa-files-o" aria-hidden="true"></i>Copy address');
        }, 2000);
    });

});

function addRemoveCompanionAjaxCall(companion_id, suite_id, operation){
    $.ajax({
        url: '/storeinTosession',
        type: 'POST',
        async: false,
        data: {
            companion_id: companion_id,
            suite_id: suite_id,
            operation: operation
        },
        dataType: 'json',                
        success: function(response){},
        error: function(response){},
    });
}