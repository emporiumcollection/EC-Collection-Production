var locations = [
    ['<b>Loaction Name</b>', 11.8166, 122.0942],
];

var map = L.map('map').setView([11.206051, 122.447886], 8);

var myIcon = L.icon({
    iconUrl: 'images/basic_geolocalize-01.svg',
    iconSize: [40, 45],
});
L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
}).addTo(map);

for (var i = 0; i < locations.length; i++) {
    marker = new L.marker([locations[i][1], locations[i][2]], { icon: myIcon })
        .bindPopup(locations[i][0])
        .addTo(map);
}
var locations = [
    ['<b>Loaction Name</b>', 11.8166, 122.0942],
];

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

$('.field-count-reservation').on('click', '.plus-room', function () {
    console.log("asd");
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


