'use strict';
// Class definition

var KTDatatableDataLocalDemo = function () {
  // Private functions

  // demo initializer
  var demo = function () {
    
    var datatable = $('#kt_datatable').KTDatatable({
      // datasource definition
      data: {
        type: 'remote',
        source: { 
          read: {
            url:'/users/reservations',
            method: 'GET',
            map: function(raw) {
              // sample data mapping
              var dataSet = raw;
              if (typeof raw.data !== 'undefined') {
                dataSet = raw.data;
              }
              return dataSet;
            },
          },
        },
        pageSize: 10,
      },

     

      // columns definition
      columns: [{
          field: 'BookingAction',
          title: '',
          sortable: false,
          overflow: 'visible',
          width: 30,
          template: function (row) {
            return ' <a href="javascript:void(0);" class="btn btn-sm btn-clean btn-icon mr-2 summary-data" title="View Reservations">\
            <i class="flaticon-calendar-1 reserve_id" data-id='+row.id+'></i>\
          </a>\ ';
          }
        },{
          field: 'booking_number',
          title: 'Booking#',
        }, {
          field: 'NightsHead',
          title: 'Nights',
          width: 60
        }, {
          field: 'checkin_date',
          title: 'Check In',
          width: 80
        }, {
          field: 'checkout_date',
          title: 'Check Out',
          width: 80
        }, {
          field: 'price',
          title: 'Total',
          Platform: 'number',
          width: 50,
          template: function (row) {
            return '€'+row.price;
          }
        }, {
          field: 'adult',
          title: 'Adult',
          width: 50
        }, {
          field: 'junior',
          title: 'Kids',
          width: 50
        }, {
          field: 'baby',
          title: 'Infant',
          width: 50
        }, {
          field: 'ContactGuest',
          title: 'Contact',
        }, {
          field: 'PlatformGuest',
          title: 'Platform',
        }],
    });

    $('#kt_datatable_search_status').on('change', function () {
      datatable.search($(this).val().toLowerCase(), 'Status');
    });

    $('#kt_datatable_search_type').on('change', function () {
      datatable.search($(this).val().toLowerCase(), 'Type');
    });

    $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
  };

  return {
    // Public functions
    init: function () {
      // init dmeo
      demo();
    },
  };
}();

jQuery(document).ready(function () {
  KTDatatableDataLocalDemo.init();
});


// 'use strict';
// // Class definition

// var KTDatatableDataLocalDemo = function () {
//   // Private functions

//   // demo initializer
//   var demo = function () {
//     var dataJSONArray = JSON.parse(
//       '[{\
//         \"Booking":"41250-166 - FR",\
//         \"NightsHead":"2",\
//         \"CheckIn":"27 Jun - 25 Jun",\
//         \"TotalPayment":"$345",\
//         \"AdultGuest":"1",\
//         \"KidsGuest":"2",\
//         \"InfantGuest":"1",\
//         \"ContactGuest":"123431231",\
//         \"PlatformGuest":"Lorem ipsum"\
//       },{\
//         \"Booking":"3442342-166 - FR",\
//         \"NightsHead":"2",\
//         \"CheckIn":"27 Jun - 25 Jun",\
//         \"TotalPayment":"$345",\
//         \"AdultGuest":"1",\
//         \"KidsGuest":"2",\
//         \"InfantGuest":"1",\
//         \"ContactGuest":"123431231",\
//         \"PlatformGuest":"Lorem ipsum"\
//       }]');

//     var datatable = $('#kt_datatable').KTDatatable({
//       // datasource definition
//       data: {
//         type: 'local',
//         source: dataJSONArray,
//         pageSize: 10,
//       },

//       // layout definition
//       layout: {
//         scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
//         // height: 450, // datatable's body's fixed height
//         footer: false, // display/hide footer
//       },

//       // column sorting
//       sortable: true,

//       pagination: true,

//       search: {
//         input: $('#kt_datatable_search_query'),
//         key: 'generalSearch',
//       },

//       // columns definition
//       columns: [
//         {
//           field: 'Booking',
//           title: 'Booking#',
//         }, {
//           field: 'NightsHead',
//           title: 'Nights',
//           width: 60
//         }, {
//           field: 'CheckIn',
//           title: 'Check In - Check Out',
//           width: 200
//         }, {
//           field: 'TotalPayment',
//           title: 'Total',
//           Platform: 'number',
//         }, {
//           field: 'AdultGuest',
//           title: 'Adult',
//           width: 60
//         }, {
//           field: 'KidsGuest',
//           title: 'Kids',
//           width: 60
//         }, {
//           field: 'InfantGuest',
//           title: 'Infant',
//           width: 60
//         }, {
//           field: 'ContactGuest',
//           title: 'Contact',
//         }, {
//           field: 'PlatformGuest',
//           title: 'Platform',
//         }, {
//           field: 'BookingAction',
//           title: '',
//           sortable: false,
//           overflow: 'visible',
//           width: 30,
//           template: function () {
//             return ' <a href="#reservation_popup" class="btn btn-sm btn-clean btn-icon mr-2" title="View Reservations" data-canvas="popup">\
//             <i class="flaticon-calendar-1"></i>\
//           </a>\ ';
//           }
//         }],
//     });

//     $('#kt_datatable_search_status').on('change', function () {
//       datatable.search($(this).val().toLowerCase(), 'Status');
//     });

//     $('#kt_datatable_search_type').on('change', function () {
//       datatable.search($(this).val().toLowerCase(), 'Type');
//     });

//     $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
//   };

//   return {
//     // Public functions
//     init: function () {
//       // init dmeo
//       demo();
//     },
//   };
// }();

// jQuery(document).ready(function () {
//   KTDatatableDataLocalDemo.init();
// });