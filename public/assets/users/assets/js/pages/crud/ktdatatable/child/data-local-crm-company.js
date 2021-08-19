'use strict';
// Class definition
var KTDatatableChildDataLocalDemoCompany = function () {
	// Private functions

	var subTableInit = function (e) {
		$('<div/>').attr('id', 'child_data_local_' + e.data.RecordID).appendTo(e.detailCell).KTDatatable({
			data: {
				linkemSub: 'local',
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
					field: 'companySub',
					title: 'Company',
					template: function (row) {
						return '<span>' + row.companySub + ' - ' + row.citySub + '</span>';
					},
				}, {
					field: 'citySub',
					title: 'City',
					width: 100
				}, {
					field: 'countrySub',
					title: 'Country',
				}, {
					field: 'phoneSub',
					title: 'Phone',
				}, {
					field: 'linkedinSub',
					title: 'Linkedin',
					// linkemSub: 'number',
				}, {
					field: 'linkemSub',
					title: 'Link On Emporium-Eollection',
					width: 230,
					autoHide: false,
					// callback function support for column rendering
					template: function (row) {
						var Linkedin = {
							1: { 'title': 'Online', 'state': 'danger' },
							2: { 'title': 'Retail', 'state': 'primary' },
							3: { 'title': 'Direct', 'state': 'success' },
						};
						return '<span class="label label-' + Linkedin[row.linkemSub].state + ' label-dot mr-2"></span><span class="font-weight-bold text-' +
							Linkedin[row.linkemSub].state + '">' +
							Linkedin[row.linkemSub].title + '</span>';
					},
				}],
		});
	};

	// demo initializer
	var mainTableInit = function () {

		var dataJSONArray = JSON.parse(
			'[{"RecordID":1,"CompanyName":"Tommie","City":"Pee","Country":"Roodel","Phone":"tpee0@slashdot.org","LinkOnEm":"103-891-3486","Linkedin":4,"linkemSub":1,"Orders":[{"companySub":"41250-166","citySub":"FR","countrySub":"5 Rutledge Court","phoneSub":"Rogahn-Shanahan","OrderDate":"3/7/2017","linkedinSub":"$591994.23","Linkedin":5,"linkemSub":1},{"OßrderID":"0078-0595","citySub":"CN","countrySub":"953 Schlimgen Park","phoneSub":"Hilpert-Sanford","OrderDate":"5/12/2017","linkedinSub":"$79774.93","Linkedin":1,"linkemSub":1},{"companySub":"47593-443","citySub":"BY","countrySub":"46925 Memorial Park","phoneSub":"Brakus and Sons","OrderDate":"2/12/2017","linkedinSub":"$1095029.28","Linkedin":1,"linkemSub":1},{"companySub":"50114-5236","citySub":"NZ","countrySub":"1420 Mockingbird Drive","phoneSub":"Beer-Harris","OrderDate":"6/6/2017","linkedinSub":"$778690.72","Linkedin":5,"linkemSub":3},{"companySub":"36987-2826","citySub":"PL","countrySub":"3995 Huxley Court","phoneSub":"Kling, Miller and Quitzon","OrderDate":"9/1/2017","linkedinSub":"$773995.02","Linkedin":5,"linkemSub":2},{"companySub":"62750-006","citySub":"ID","countrySub":"2064 Dennis Parkway","phoneSub":"Lang, Kohler and Considine","OrderDate":"9/21/2017","linkedinSub":"$830550.45","Linkedin":5,"linkemSub":2},{"companySub":"59779-597","citySub":"IR","countrySub":"32 Golf Course Parkway","phoneSub":"Jaskolski-Hilll","OrderDate":"4/4/2017","linkedinSub":"$754685.32","Linkedin":3,"linkemSub":3},{"companySub":"59762-3743","citySub":"HT","countrySub":"76 Anthes Hill","phoneSub":"Reynolds Group","OrderDate":"1/23/2017","linkedinSub":"$295435.66","Linkedin":2,"linkemSub":1},{"companySub":"64942-1114","citySub":"ID","countrySub":"7511 Mayfield Avenue","phoneSub":"Purdy and Sons","OrderDate":"12/1/2016","linkedinSub":"$636911.04","Linkedin":6,"linkemSub":2},{"companySub":"13537-505","citySub":"KZ","countrySub":"36303 Esch Parkway","phoneSub":"Reinger, Howe and Kertzmann","OrderDate":"1/31/2016","linkedinSub":"$753691.79","Linkedin":4,"linkemSub":1},{"companySub":"16781-426","citySub":"SE","countrySub":"507 Columbus Lane","phoneSub":"Carter, Gibson and Kassulke","OrderDate":"10/26/2017","linkedinSub":"$873190.14","Linkedin":2,"linkemSub":2},{"companySub":"60512-1008","citySub":"ID","countrySub":"8 Jana Lane","phoneSub":"Rutherford and Sons","OrderDate":"1/10/2017","linkedinSub":"$242894.68","Linkedin":3,"linkemSub":1},{"companySub":"0456-0461","citySub":"CN","countrySub":"5127 Roxbury Trail","phoneSub":"Johnson Inc","OrderDate":"12/10/2017","linkedinSub":"$328850.50","Linkedin":5,"linkemSub":3},{"companySub":"63304-098","citySub":"GR","countrySub":"54627 Randy Lane","phoneSub":"Johnston, Veum and Funk","OrderDate":"12/11/2016","linkedinSub":"$278247.03","Linkedin":3,"linkemSub":2},{"companySub":"64092-317","citySub":"CN","countrySub":"292 Rusk Lane","phoneSub":"Bode, Zboncak and Reichel","OrderDate":"4/10/2016","linkedinSub":"$798173.38","Linkedin":2,"linkemSub":2},{"companySub":"36987-1483","citySub":"CU","countrySub":"2225 Saint Paul Junction","phoneSub":"Dach, Haag and Koss","OrderDate":"2/7/2017","linkedinSub":"$1147799.38","Linkedin":4,"linkemSub":2},{"companySub":"68084-814","citySub":"ID","countrySub":"0 Sheridan Avenue","phoneSub":"Little-O\'Hara","OrderDate":"11/24/2016","linkedinSub":"$394051.79","Linkedin":6,"linkemSub":1},{"companySub":"42023-131","citySub":"BR","countrySub":"4238 Roth Drive","phoneSub":"Boehm LLC","OrderDate":"4/23/2016","linkedinSub":"$300684.31","Linkedin":6,"linkemSub":3},{"companySub":"14290-350","citySub":"CN","countrySub":"41950 Troy Point","phoneSub":"Windler, Larkin and Collier","OrderDate":"4/17/2017","linkedinSub":"$467794.40","Linkedin":4,"linkemSub":1}]},\n' +
			'{"RecordID":2,"CompanyName":"Scott","City":"Coldbreath","Country":"Zooxo","Phone":"scoldbreath1@zdnet.com","LinkOnEm":"143-179-5104","Linkedin":5,"linkemSub":1,"Orders":[{"companySub":"55316-029","citySub":"ID","countrySub":"56955 Rusk Street","phoneSub":"Paucek, Dietrich and Bergnaum","OrderDate":"9/27/2016","linkedinSub":"$662732.49","Linkedin":2,"linkemSub":3},{"companySub":"68462-467","citySub":"CN","countrySub":"13005 Bultman Court","phoneSub":"Stamm Group","OrderDate":"3/22/2017","linkedinSub":"$653958.68","Linkedin":4,"linkemSub":2},{"companySub":"55154-8270","citySub":"UG","countrySub":"6 Brentwood Place","phoneSub":"Stroman, Schowalter and Bogan","OrderDate":"8/20/2016","linkedinSub":"$57166.20","Linkedin":3,"linkemSub":2},{"companySub":"63736-002","citySub":"ID","countrySub":"51 Banding Junction","phoneSub":"Crona-Konopelski","OrderDate":"2/5/2017","linkedinSub":"$733681.16","Linkedin":3,"linkemSub":2},{"companySub":"54868-5182","citySub":"CN","countrySub":"629 Oxford Alley","phoneSub":"Lindgren LLC","OrderDate":"5/21/2016","linkedinSub":"$921137.56","Linkedin":3,"linkemSub":2},{"companySub":"55714-4529","citySub":"JP","countrySub":"9 Melvin Point","phoneSub":"Kris-Will","OrderDate":"4/29/2016","linkedinSub":"$184624.81","Linkedin":1,"linkemSub":2},{"companySub":"63736-305","citySub":"CN","countrySub":"84196 New Castle Junction","phoneSub":"Lockman-Luettgen","OrderDate":"9/7/2016","linkedinSub":"$922821.30","Linkedin":2,"linkemSub":2}]}]');

		var datatable = $('#kt_datatable_company').KTDatatable({
			// datasource definition
			data: {
				linkemSub: 'local',
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
					field: 'CompanyName',
					title: 'Company Name',
					width: 130,

				}, {
					field: 'City',
					title: 'City',
				}, {
					field: 'Country',
					title: 'Country',
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
					width: 230,

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
												<span class="navi-text">Edit</span> \
											</a> \
										</li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-text">New</span> \
											</a> \
										</li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-text">Delete</span> \
											</a> \
										</li> \
										<li class="navi-separator my-3"></li>\
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-text">Companies</span> \
											</a> \
										</li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-text">Group</span> \
											</a> \
										</li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-text">Contact</span> \
											</a> \
										</li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-text">Contracts</span> \
											</a> \
										</li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-text">Communication</span> \
											</a> \
										</li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-text">Hotels/Suites</span> \
											</a> \
										</li> \
										<li class="navi-item"> \
											<a href="#" class="navi-link"> \
												<span class="navi-text">Reservations</span> \
											</a> \
										</li> \
									</ul> \
								</div> \
							</div> \
	                        <a href="#detail" class="btn btn-sm btn-clean btn-icon mr-2" data-canvas="popup" title="Notes">\
	                            <i class="flaticon-notes"></i>\
	                        </a>\
							<a href="#editCompany" class="btn btn-sm btn-clean btn-icon mr-2" data-canvas="popup" title="Edit">\
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

		$('#kt_datatable_search_linkemSub').on('change', function () {
			datatable.search($(this).val().toLowerCase(), 'linkemSub');
		});

		$('#kt_datatable_search_Linkedin, #kt_datatable_search_linkemSub').selectpicker();
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
	$('a[href="#company_crm"]').on('shown.bs.tab', function (e) {
		KTDatatableChildDataLocalDemoCompany.init();
	})
});
