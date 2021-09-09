'use strict';
// Class definition
var KTDatatableChildDataLocalDemo = function () {
	// Private functions

	var subTableInit = function (e) {
		$('<div/>').attr('id', 'child_data_local_' + e.data.RecordID).appendTo(e.detailCell).KTDatatable({
			data: {
				Platform: 'local',
				source: e.data.Orders,
				pageSize: 5,
			},

			// layout definition
			layout: {
				scroll: true,
				height: 400,
				footer: false,
			},

			sortable: true,

			// columns definition
			columns: [
				{
					field: 'Booking',
					title: 'Booking#',
					template: function (row) {
						return '<span>' + row.Booking + ' - ' + row.Clientname + '</span>';
					},
				}, {
					field: 'NightsHead',
					title: 'Nights',
				}, {
					field: 'CheckIn',
					title: 'Check In - Check Out',
					width: 200
				}, {
					field: 'TotalPayment',
					title: 'Total',
					Platform: 'number',
				}, {
					field: 'AdultGuest',
					title: 'Adult',
					width: 60
				}, {
					field: 'KidsGuest',
					title: 'Kids',
					width: 60
				}, {
					field: 'InfantGuest',
					title: 'Infant',
					width: 60
				}, {
					field: 'ContactGuest',
					title: 'Contact',
				}, {
					field: 'PlatformGuest',
					title: 'Platform',
				}, {
					field: 'BookingAction',
					title: '',
					sortable: false,
					overflow: 'visible',
					width: 30,
					template: function () {
						return ' <a href="#reservation_popup" class="btn btn-sm btn-clean btn-icon mr-2" title="View Reservations" data-canvas="popup">\
						<i class="flaticon-calendar-1"></i>\
					</a>\ ';
					}
				}],
		});
	};

	// demo initializer
	var mainTableInit = function () {

		var dataJSONArray = JSON.parse(
			'[{\
				\"RecordID":1,\
				\"HotelName":"Tommie",\
				\"Country":"Pee",\
				\"Website":"Roodel",\
				\"Reservations":"tpee0@slashdot.org",\
				\"Phone":"103-891-3486",\
				\"ReservationID":"99892-3",\
				\"ContactName":"Jhon Doe",\
				\"Orders":[{\
					\"Booking":"41250-166",\
					\"Clientname":"FR",\
					\"NightsHead":"5 Rutledge Court",\
					\"CheckIn":"Rogahn-Shanahan",\
					\"OrderDate":"3/7/2017",\
					\"TotalPayment":"$591994.23",\
					\"AdultGuest":"1",\
					\"KidsGuest":"1",\
					\"InfantGuest":"1",\
					\"ContactGuest":"123123123",\
					\"PlatformGuest":"test"\
				\},{\
					\"Booking":"0078-0595",\
					\"Clientname":"CN",\
					\"NightsHead":"953 Schlimgen Park",\
					\"CheckIn":"Hilpert-Sanford",\
					\"OrderDate":"5/12/2017",\
					\"TotalPayment":"$79774.93",\
					\"AdultGuest":"1",\
					\"KidsGuest":"1",\
					\"InfantGuest":"1",\
					\"ContactGuest":"1231231331",\
					\"PlatformGuest":"test"\
				\}]}]');

		var datatable = $('#kt_datatable').KTDatatable({
			// datasource definition
			data: {
				Platform: 'local',
				source: dataJSONArray,
				pageSize: 10, // display 20 records per page
			},

			// layout definition
			layout: {
				scroll: false,
				height: null,
				footer: false,
			},

			sortable: true,

			filterable: false,

			pagination: true,

			detail: {
				title: 'Load sub table',
				content: subTableInit,
			},

			search: {
				input: $('#kt_datatable_search_query'),
				key: 'generalSearch'
			},

			// columns definition
			columns: [
				{
					field: 'RecordID',
					title: '',
					sortable: false,
					width: 30,
					textAlign: 'center',
				}, {
					field: 'HotelName',
					title: 'Hotel Name',
				}, {
					field: 'Country',
					title: 'Country',
				}, {
					field: 'Website',
					title: 'Website',
				}, {
					field: 'Reservations',
					title: 'Reservations Email',
					width: 200,

				}, {
					field: 'Phone',
					title: 'Reservations Telephone',
					width: 200,
				},{
					field: 'ReservationID',
					title: 'Reservations ID',
					width: 150,
				},{
					field: 'ContactName',
					title: 'Contact Name'
				}, {
					field: 'Actions',
					width: 100,
					title: 'Actions',
					sortable: false,
					overflow: 'visible',
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
	                                            <span class="navi-icon"><i class="flaticon-list"></i></span>\
	                                            <span class="navi-text">Itinerary</span>\
	                                        </a>\
	                                    </li>\
	                                    <li class="navi-item">\
	                                        <a href="#detail" class="navi-link" data-canvas="popup">\
												<span class="navi-icon"><i class="flaticon-chat-1"></i></span>\
	                                            <span class="navi-text">Communications</span>\
	                                        </a>\
	                                    </li>\
	                                </ul>\
	                            </div>\
	                        </div>\
	                    ';
					},
				}],
		});

		$('#kt_datatable_search_status').on('change', function () {
			datatable.search($(this).val().toLowerCase(), 'Status');
		});

		$('#kt_datatable_search_Platform').on('change', function () {
			datatable.search($(this).val().toLowerCase(), 'Platform');
		});

		$('#kt_datatable_search_status, #kt_datatable_search_Platform').selectpicker();


	};

	return {
		// Public functions
		init: function () {
			// init dmeo
			mainTableInit();
		},
	};
}();

jQuery(document).ready(function () {
	KTDatatableChildDataLocalDemo.init();
});