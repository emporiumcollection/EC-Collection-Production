(function () {
  $(document).on('click', '[data-canvas="popup"]', function (e) {
    e.preventDefault();
    var attr = $(this).attr('href');
    $(attr).addClass('offcanvas-on');
    $(attr).next().append
    $('<div class="offcanvas-overlay overlay-sub"></div>').insertAfter(attr);
  });

  $(document).on('click', '.canvas-close', function () {
    $(this).closest('.offcanvas').removeClass('offcanvas-on');
    $('.overlay-sub').remove();
  })
  $(document).on('click', '.overlay-sub', function () {
    $(this).prev().removeClass('offcanvas-on');
    $(this).remove();
  })

  $(document).ready(function () {

    /* 1. Visualizing things on Hover - See next part for action on click */
    $('#stars li').on('mouseover', function () {
      var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

      // Now highlight all the stars that's not after the current hovered star
      $(this).parent().children('li.star').each(function (e) {
        if (e < onStar) {
          $(this).addClass('hover');
        }
        else {
          $(this).removeClass('hover');
        }
      });

    }).on('mouseout', function () {
      $(this).parent().children('li.star').each(function (e) {
        $(this).removeClass('hover');
      });
    });


    /* 2. Action to perform on click */
    $('#stars li').on('click', function () {
      var onStar = parseInt($(this).data('value'), 10); // The star currently selected
      var stars = $(this).parent().children('li.star');

      for (i = 0; i < stars.length; i++) {
        $(stars[i]).removeClass('selected');
      }

      for (i = 0; i < onStar; i++) {
        $(stars[i]).addClass('selected');
      }

      // JUST RESPONSE (Not needed)
      var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
      var msg = "";
      if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
      }
      else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
      }
      responseMessage(msg);

    });


  });


  function responseMessage(msg) {
    $('.success-box').fadeIn(200);
    $('.success-box div.text-message').html("<span>" + msg + "</span>");
  }

  $('.list-prs .btn-prc-title').click(function (e) {
    e.preventDefault();
    var pp = $(this).attr('data-price');
    $(pp).toggleClass('active');
    $(this).find('.arrow-down').toggleClass('toup');
  })

  $('.select').select2({
    placeholder: "Select",
    minimumResultsForSearch: Infinity
  });

  //grabs the hash tag from the url
  var hash = window.location.hash;
  //checks whether or not the hash tag is set
  console.log(hash);
  if (hash != "") {
    //removes all active classes from tabs
    $('.nav-profiletabs li').each(function () {
      $(this).find('.nav-link').removeClass('active');
    });
    $('.profile-tabs .tab-pane').each(function () {
      $(this).removeClass('active show');
    });
    //this will add the active class on the hashtagged value
    var link = "";
    $('.nav-profiletabs li').each(function () {
      link = $(this).find('a').attr('href');
      if (link == hash) {
        $(this).find('.nav-link').addClass('active');
      }
    });
    $('.profile-tabs .tab-pane').each(function () {
      link = $(this).attr('id');
      if ('#' + link == hash) {
        $(this).addClass('active show');
      }
    });
  }


  $('.additional-collapse').on('show.bs.collapse', function () {
    $(this).parent('.card').find('.fa-minus').show();
    $(this).parent('.card').find('.fa-plus').hide();
  })
  $('.additional-collapse').on('shown.bs.collapse', function () {
    $('.result-grid').slick('setPosition');
    setTimeout(function () {
      map.invalidateSize();
    }, 10);
  })
  $('.additional-collapse').on('hide.bs.collapse', function () {
    $(this).parent('.card').find('.fa-minus').hide();
    $(this).parent('.card').find('.fa-plus').show();
  })
  $('.add').click(function () {
    $(this).prev().val(+$(this).prev().val() + 1);
  });
  $('.sub').click(function () {
    if ($(this).next().val() > 1) {
      if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    }
  });

  $('.booking-select').click(function (e) {
    e.preventDefault();
    $(this).closest('.additional-list').find('.booking-qty').addClass('hide');
    $(this).closest('.additional-list').find('.confirm-qty').addClass('show');
    $(this).closest('.additional-list').find('.title-additional-list').hide();
    $(this).closest('.additional-list').find('.added').show();
    $(this).closest('.additional-list').find('.add-txt').css('height', 'auto');
    $(this).closest('.additional-list').find('.remove-booking').show();
    $(this).html("Added to booking");
  });
  $('.remove-booking').click(function (e) {
    e.preventDefault();
    $(this).closest('.additional-list').find('.booking-qty').removeClass('hide');
    $(this).closest('.additional-list').find('.confirm-qty').removeClass('show');
    $(this).closest('.additional-list').find('.booking-select').html("Select");
    $(this).closest('.additional-list').find('.title-additional-list').show();
    $(this).closest('.additional-list').find('.add-txt').css('height', '100%');
    $(this).closest('.additional-list').find('.added').hide();
    $(this).hide();
  });

  $('#birthday').datepicker({
    todayHighlight: true,
    orientation: "top left",
  });
})();