'use strict';
// Class definition

var KTDatatableDataLocalDemo = function () {
  // Private functions

  // demo initializer
  var demo = function () {
    var dataJSONArray = JSON.parse(
      '[{\
				\"Name":"Jhon doe",\
				\"Email":"name@yourmail.com",\
				\"PhoneNumber":"61254224522",\
				\"Gender":"Male",\
				\"Languange":"English",\
				\"Currency":"EUR - €"\
			},{\
				\"Name":"Elizabet",\
				\"Email":"name@yourmail.com",\
				\"PhoneNumber":"61254224522",\
				\"Gender":"Female",\
				\"Languange":"Deutsch",\
				\"Currency":"USD - $"\
			}]');

    var datatable = $('#kt_datatable').KTDatatable({
      // datasource definition
      data: {
        type: 'local',
        source: dataJSONArray,
        pageSize: 10,
      },
      
      // layout definition
      layout: {
        scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
        // height: 450, // datatable's body's fixed height
        footer: false, // display/hide footer
      },

      // column sorting
      sortable: true,

      pagination: true,

      search: {
        input: $('#kt_datatable_search_query'),
        key: 'generalSearch',
      },

      // columns definition
      columns: [
        {
          field: 'Name',
          title: 'Name',
        }, {
          field: 'Email',
          title: 'Email',
        }, {
          field: 'PhoneNumber',
          title: 'Phone Number',
        }, {
          field: 'Gender',
          title: 'Gender',
        }, {
          field: 'Languange',
          title: 'Preferred Language',
        }, {
          field: 'Currency',
          title: 'Preferred Currency',
        }, {
          field: 'NameAction',
          title: '',
          sortable: false,
          overflow: 'visible',
          width: 30,
          template: function () {
            return '\
							<div class="dropdown dropdown-inline">\
                      <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown">\
                          <i class="flaticon-cogwheel-2"></i>\
                      </a>\
                      <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">\
                          <ul class="navi flex-column navi-hover py-2">\
                              <li class="navi-item">\
                                  <a href="#detail" class="navi-link" data-canvas="popup">\
                                      <span class="navi-text">Edit</span>\
                                  </a>\
                              </li>\
                              <li class="navi-item">\
                                  <a href="#detail" class="navi-link" data-canvas="popup">\
                                      <span class="navi-text">Delete</span>\
                                  </a>\
                              </li>\
                          </ul>\
                      </div>\
                  </div>\
              ';
          }
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
  $('a[href="#myCompanion"]').on('shown.bs.tab', function (e) {
    KTDatatableDataLocalDemo.init();
  })
});
