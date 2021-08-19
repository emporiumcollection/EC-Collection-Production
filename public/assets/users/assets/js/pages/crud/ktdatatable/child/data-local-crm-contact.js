'use strict';
// Class definition
var KTDatatableChildDataLocalDemoContact = function () {
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
					field: 'OrderID',
					title: 'Order ID',
					template: function (row) {
						return '<span>' + row.OrderID + ' - ' + row.ShipCity + '</span>';
					},
				}, {
					field: 'ShipCity',
					title: 'City',
					width: 100
				}, {
					field: 'ShipAddress',
					title: 'Ship Address',
				}, {
					field: 'ShipName',
					title: 'Ship Name',
				}, {
					field: 'TotalPayment',
					title: 'Payment',
					Platform: 'number',
				}, {
					field: 'Linkedin',
					title: 'Linkedin',
					// callback function support for column rendering
					template: function (row) {
						var Linkedin = {
							1: { 'title': 'Pending', 'class': 'label-light-primary' },
							2: { 'title': 'Delivered', 'class': ' label-light-danger' },
							3: { 'title': 'Canceled', 'class': ' label-light-primary' },
							4: { 'title': 'Success', 'class': ' label-light-success' },
							5: { 'title': 'Info', 'class': ' label-light-info' },
							6: { 'title': 'Danger', 'class': ' label-light-danger' },
							7: { 'title': 'Warning', 'class': ' label-light-warning' },
						};
						return '<span class="label ' + Linkedin[row.Linkedin].class + ' label-inline font-weight-bold label-lg">' + Linkedin[row.Linkedin].title + '</span>';
					},
				}, {
					field: 'Platform',
					title: 'Platform',
					autoHide: false,
					// callback function support for column rendering
					template: function (row) {
						var Linkedin = {
							1: { 'title': 'Online', 'state': 'danger' },
							2: { 'title': 'Retail', 'state': 'primary' },
							3: { 'title': 'Direct', 'state': 'success' },
						};
						return '<span class="label label-' + Linkedin[row.Platform].state + ' label-dot mr-2"></span><span class="font-weight-bold text-' +
							Linkedin[row.Platform].state + '">' +
							Linkedin[row.Platform].title + '</span>';
					},
				}],
		});
	};

	// demo initializer
	var mainTableInit = function () {

		var dataJSONArray = JSON.parse(
			'[{"RecordID":1,"Name":"Tommie","City":"Pee","Country":"Roodel","Phone":"tpee0@slashdot.org","LinkOnEm":"103-891-3486","Linkedin":4,"Platform":1,"Orders":[{"OrderID":"41250-166","ShipCity":"FR","ShipAddress":"5 Rutledge Court","ShipName":"Rogahn-Shanahan","OrderDate":"3/7/2017","TotalPayment":"$591994.23","Linkedin":5,"Platform":1},{"OßrderID":"0078-0595","ShipCity":"CN","ShipAddress":"953 Schlimgen Park","ShipName":"Hilpert-Sanford","OrderDate":"5/12/2017","TotalPayment":"$79774.93","Linkedin":1,"Platform":1},{"OrderID":"47593-443","ShipCity":"BY","ShipAddress":"46925 Memorial Park","ShipName":"Brakus and Sons","OrderDate":"2/12/2017","TotalPayment":"$1095029.28","Linkedin":1,"Platform":1},{"OrderID":"50114-5236","ShipCity":"NZ","ShipAddress":"1420 Mockingbird Drive","ShipName":"Beer-Harris","OrderDate":"6/6/2017","TotalPayment":"$778690.72","Linkedin":5,"Platform":3},{"OrderID":"36987-2826","ShipCity":"PL","ShipAddress":"3995 Huxley Court","ShipName":"Kling, Miller and Quitzon","OrderDate":"9/1/2017","TotalPayment":"$773995.02","Linkedin":5,"Platform":2},{"OrderID":"62750-006","ShipCity":"ID","ShipAddress":"2064 Dennis Parkway","ShipName":"Lang, Kohler and Considine","OrderDate":"9/21/2017","TotalPayment":"$830550.45","Linkedin":5,"Platform":2},{"OrderID":"59779-597","ShipCity":"IR","ShipAddress":"32 Golf Course Parkway","ShipName":"Jaskolski-Hilll","OrderDate":"4/4/2017","TotalPayment":"$754685.32","Linkedin":3,"Platform":3},{"OrderID":"59762-3743","ShipCity":"HT","ShipAddress":"76 Anthes Hill","ShipName":"Reynolds Group","OrderDate":"1/23/2017","TotalPayment":"$295435.66","Linkedin":2,"Platform":1},{"OrderID":"64942-1114","ShipCity":"ID","ShipAddress":"7511 Mayfield Avenue","ShipName":"Purdy and Sons","OrderDate":"12/1/2016","TotalPayment":"$636911.04","Linkedin":6,"Platform":2},{"OrderID":"13537-505","ShipCity":"KZ","ShipAddress":"36303 Esch Parkway","ShipName":"Reinger, Howe and Kertzmann","OrderDate":"1/31/2016","TotalPayment":"$753691.79","Linkedin":4,"Platform":1},{"OrderID":"16781-426","ShipCity":"SE","ShipAddress":"507 Columbus Lane","ShipName":"Carter, Gibson and Kassulke","OrderDate":"10/26/2017","TotalPayment":"$873190.14","Linkedin":2,"Platform":2},{"OrderID":"60512-1008","ShipCity":"ID","ShipAddress":"8 Jana Lane","ShipName":"Rutherford and Sons","OrderDate":"1/10/2017","TotalPayment":"$242894.68","Linkedin":3,"Platform":1},{"OrderID":"0456-0461","ShipCity":"CN","ShipAddress":"5127 Roxbury Trail","ShipName":"Johnson Inc","OrderDate":"12/10/2017","TotalPayment":"$328850.50","Linkedin":5,"Platform":3},{"OrderID":"63304-098","ShipCity":"GR","ShipAddress":"54627 Randy Lane","ShipName":"Johnston, Veum and Funk","OrderDate":"12/11/2016","TotalPayment":"$278247.03","Linkedin":3,"Platform":2},{"OrderID":"64092-317","ShipCity":"CN","ShipAddress":"292 Rusk Lane","ShipName":"Bode, Zboncak and Reichel","OrderDate":"4/10/2016","TotalPayment":"$798173.38","Linkedin":2,"Platform":2},{"OrderID":"36987-1483","ShipCity":"CU","ShipAddress":"2225 Saint Paul Junction","ShipName":"Dach, Haag and Koss","OrderDate":"2/7/2017","TotalPayment":"$1147799.38","Linkedin":4,"Platform":2},{"OrderID":"68084-814","ShipCity":"ID","ShipAddress":"0 Sheridan Avenue","ShipName":"Little-O\'Hara","OrderDate":"11/24/2016","TotalPayment":"$394051.79","Linkedin":6,"Platform":1},{"OrderID":"42023-131","ShipCity":"BR","ShipAddress":"4238 Roth Drive","ShipName":"Boehm LLC","OrderDate":"4/23/2016","TotalPayment":"$300684.31","Linkedin":6,"Platform":3},{"OrderID":"14290-350","ShipCity":"CN","ShipAddress":"41950 Troy Point","ShipName":"Windler, Larkin and Collier","OrderDate":"4/17/2017","TotalPayment":"$467794.40","Linkedin":4,"Platform":1}]},\n' +
			'{"RecordID":2,"Name":"Scott","City":"Coldbreath","Country":"Zooxo","Phone":"scoldbreath1@zdnet.com","LinkOnEm":"143-179-5104","Linkedin":5,"Platform":1,"Orders":[{"OrderID":"55316-029","ShipCity":"ID","ShipAddress":"56955 Rusk Street","ShipName":"Paucek, Dietrich and Bergnaum","OrderDate":"9/27/2016","TotalPayment":"$662732.49","Linkedin":2,"Platform":3},{"OrderID":"68462-467","ShipCity":"CN","ShipAddress":"13005 Bultman Court","ShipName":"Stamm Group","OrderDate":"3/22/2017","TotalPayment":"$653958.68","Linkedin":4,"Platform":2},{"OrderID":"55154-8270","ShipCity":"UG","ShipAddress":"6 Brentwood Place","ShipName":"Stroman, Schowalter and Bogan","OrderDate":"8/20/2016","TotalPayment":"$57166.20","Linkedin":3,"Platform":2},{"OrderID":"63736-002","ShipCity":"ID","ShipAddress":"51 Banding Junction","ShipName":"Crona-Konopelski","OrderDate":"2/5/2017","TotalPayment":"$733681.16","Linkedin":3,"Platform":2},{"OrderID":"54868-5182","ShipCity":"CN","ShipAddress":"629 Oxford Alley","ShipName":"Lindgren LLC","OrderDate":"5/21/2016","TotalPayment":"$921137.56","Linkedin":3,"Platform":2},{"OrderID":"55714-4529","ShipCity":"JP","ShipAddress":"9 Melvin Point","ShipName":"Kris-Will","OrderDate":"4/29/2016","TotalPayment":"$184624.81","Linkedin":1,"Platform":2},{"OrderID":"63736-305","ShipCity":"CN","ShipAddress":"84196 New Castle Junction","ShipName":"Lockman-Luettgen","OrderDate":"9/7/2016","TotalPayment":"$922821.30","Linkedin":2,"Platform":2}]}]');

		var datatable = $('#kt_datatable_contact').KTDatatable({
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
					field: 'Name',
					title: 'Name',
				}, {
					field: 'City',
					title: 'Job Title',
				}, {
					field: 'Country',
					title: 'Company',
				}, {
					field: 'Phone',
					title: 'Phone',
				}, {
					field: 'Linkedin',
					title: 'Linkedin',
					// callback function support for column rendering
					template: function (row) {
						var Linkedin = {
							1: { 'title': 'Pending', 'class': 'label-primary' },
							2: { 'title': 'Delivered', 'class': ' label-danger' },
							3: { 'title': 'Canceled', 'class': ' label-primary' },
							4: { 'title': 'Success', 'class': ' label-success' },
							5: { 'title': 'Info', 'class': ' label-info' },
							6: { 'title': 'Danger', 'class': ' label-danger' },
							7: { 'title': 'Warning', 'class': ' label-warning' },
						};
						return '<span class="label ' + Linkedin[row.Linkedin].class + ' label-inline label-pill">' + Linkedin[row.Linkedin].title + '</span>';
					},
				}, {
					field: 'LinkOnEm',
					title: 'Link On Emporium-Collection',
				}, {
					field: 'Actions',
					width: 300,
					title: 'Actions',
					sortable: false,
					overflow: 'visible',
					template: function () {
						return '\
						<div class="dropdown" data-toggle="tooltip" title="Quick actions" data-placement="left"> \
								<a href="#" class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> \
									<i class="flaticon-more-v6"></i> \
								</a> \
								<div class="dropdown-menu dropdown-menu-md dropdown-menu-right"> \
									<ul class="navi navi-hover py-5"> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-icon"> \
													<i class="flaticon2-drop"></i> \
												</span> \
												<span class="navi-text">New Group</span> \
											</a> \
										</li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-icon"> \
													<i class="flaticon2-list-3"></i> \
												</span> \
												<span class="navi-text">Contacts</span> \
											</a> \
										</li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-icon"> \
													<i class="flaticon2-rocket-1"></i> \
												</span> \
												<span class="navi-text">Groups</span> \
												<span class="navi-link-badge"> \
													<span \
														class="label label-light-primary label-inline font-weight-bold">new</span> \
												</span> \
											</a> \
										</li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-icon"> \
													<i class="flaticon2-bell-2"></i> \
												</span> \
												<span class="navi-text">Calls</span> \
											</a> \
										</li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-icon"> \
													<i class="flaticon2-gear"></i> \
												</span> \
												<span class="navi-text">Settings</span> \
											</a> \
										</li> \
										<li class="navi-separator my-3"></li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-icon"> \
													<i class="flaticon2-magnifier-tool"></i> \
												</span> \
												<span class="navi-text">Help</span> \
											</a> \
										</li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-icon"> \
													<i class="flaticon2-bell-2"></i> \
												</span> \
												<span class="navi-text">Privacy</span> \
												<span class="navi-link-badge"> \
													<span \
														class="label label-light-danger label-rounded font-weight-bold">5</span> \
												</span> \
											</a> \
										</li> \
									</ul> \
								</div> \
							</div> \
	                        <a href="#detail" class="btn btn-sm btn-clean btn-icon mr-2" data-canvas="popup" title="Notes">\
	                            <i class="flaticon-notes"></i>\
	                        </a>\
							<a href="#editContact" class="btn btn-sm btn-clean btn-icon mr-2" data-canvas="popup" title="Edit">\
								<i class="flaticon-edit-1"></i>\
							</a>\
							<a href="#statistics" class="btn btn-sm btn-clean btn-icon mr-2" data-canvas="popup" title="Mail">\
								<i class="flaticon-mail-1"></i>\
							</a>\
							<a href="#" class="btn btn-sm btn-clean btn-icon mr-2" title="Call">\
								<i class="flaticon-paper-plane"></i>\
							</a>\
							<a href="#" class="btn btn-sm btn-clean btn-icon mr-2" title="Message">\
								<i class="flaticon-chat-1"></i>\
							</a>\
							<a href="#" class="btn btn-sm btn-clean btn-icon mr-2" title="Meet">\
								<i class="flaticon-users"></i>\
							</a>\
	                    ';
					},
				}],
		});

		$('#kt_datatable_search_Linkedin').on('change', function () {
			datatable.search($(this).val().toLowerCase(), 'Linkedin');
		});

		$('#kt_datatable_search_Platform').on('change', function () {
			datatable.search($(this).val().toLowerCase(), 'Platform');
		});

		$('#kt_datatable_search_Linkedin, #kt_datatable_search_Platform').selectpicker();

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
	$('a[href="#contact_crm"]').on('shown.bs.tab', function (e) {
		KTDatatableChildDataLocalDemoContact.init();
	})
});
