<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Metronic Live preview | Keenthemes</title>
	<meta name="description" content="Updates and statistics" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="canonical" href="https://keenthemes.com/metronic" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendors Styles(used by this page)-->
	<link href="../users/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="../users/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../users/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../users/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../users/assets/css/slick.css" rel="stylesheet" type="text/css" />
	<link href="../users/assets/css/slick-theme.css" rel="stylesheet" type="text/css" />
	<link href="../users/assets/css/custom.css" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="../users/assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
	class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
	<!--begin::Main-->
	<!--begin::Header Mobile-->
	<div id="kt_header_mobile" class="header-mobile">
		<!--begin::Logo-->
		<a href="index.html">
			<img alt="Logo" src="../users/assets/media/logos/logo-letter-2.png" class="logo-default max-h-30px" />
		</a>
		<!--end::Logo-->
		<!--begin::Toolbar-->
		<div class="d-flex align-items-center">
			<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
				<span></span>
			</button>
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Header Mobile-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
			<!--begin::Aside-->
			<div class="aside aside-left d-flex aside-fixed" id="kt_aside">
				@include('users_admin/traveller/users/components/_sidebar')
				<!--begin::Tab Pane-->
				<div class="p-3 px-lg-7 py-lg-5">
					<!--begin::Form-->
					<form class="p-2 p-lg-3">
						<div class="d-flex">
							<div class="input-icon h-40px">
								<input type="text" class="form-control form-control-lg form-control-solid h-40px"
									placeholder="Search..." id="generalSearch" />
								<span>
									<span class="svg-icon svg-icon-lg">
										<!--begin::Svg Icon | path:../users/assets/media/svg/icons/General/Search.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3" />
												<path
													d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
													fill="#000000" fill-rule="nonzero" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</span>
							</div>
							<div class="dropdown" data-toggle="tooltip" title="Quick actions" data-placement="left">
								<a href="#"
									class="btn btn-icon btn-default btn-hover-primary ml-2 h-40px w-40px flex-shrink-0"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="svg-icon svg-icon-lg">
										<!--begin::Svg Icon | path:../users/assets/media/svg/icons/Code/Compiling.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
													fill="#000000" opacity="0.3" />
												<path
													d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
													fill="#000000" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
									<!--begin::Navigation-->
									<ul class="navi navi-hover py-5">
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-drop"></i>
												</span>
												<span class="navi-text">New Group</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-list-3"></i>
												</span>
												<span class="navi-text">Contacts</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-rocket-1"></i>
												</span>
												<span class="navi-text">Groups</span>
												<span class="navi-link-badge">
													<span
														class="label label-light-primary label-inline font-weight-bold">new</span>
												</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-bell-2"></i>
												</span>
												<span class="navi-text">Calls</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-gear"></i>
												</span>
												<span class="navi-text">Settings</span>
											</a>
										</li>
										<li class="navi-separator my-3"></li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-magnifier-tool"></i>
												</span>
												<span class="navi-text">Help</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="flaticon2-bell-2"></i>
												</span>
												<span class="navi-text">Privacy</span>
												<span class="navi-link-badge">
													<span
														class="label label-light-danger label-rounded font-weight-bold">5</span>
												</span>
											</a>
										</li>
									</ul>
									<!--end::Navigation-->
								</div>
							</div>
						</div>
					</form>
					<!--end::Form-->
					<div class="p-2 p-lg-3">
						<div class="row gutter-b">
							<!--begin::Item-->
							<div class="col-lg-12 mb-5">
								<a href="#" class="btn btn-block btn-white text-left radius-5 py-2 px-5 pl-12">
									<span class="d-block font-weight-bold font-size-h4 font-saol">Personal Info</span>
								</a>
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col-lg-12 mb-5">
								<a href="#" class="btn btn-block btn-white text-left radius-5 py-2 px-5 pl-12">
									<span class="d-block font-weight-bold font-size-h4 font-saol">Login &
										Security</span>
								</a>
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col-lg-12 mb-5">
								<a href="#" class="btn btn-block btn-white text-left radius-5 py-2 px-5 pl-12">
									<span class="d-block font-weight-bold font-size-h4 font-saol">Global
										Preferences</span>
								</a>
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col-lg-12 mb-5">
								<a href="#" class="btn btn-block btn-white text-left radius-5 py-2 px-5 pl-12 active">
									<span class="d-block font-weight-bold font-size-h4 font-saol">Reservations</span>
								</a>
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col-lg-12">
								<a href="#" class="btn btn-block btn-white text-left radius-5 py-2 px-5 pl-12">
									<span class="d-block font-weight-bold font-size-h4 font-saol">Messages</span>
								</a>
							</div>
							<!--end::Item-->
						</div>
					</div>
				</div>
				<!--end::Tab Pane-->
			</div>
			<!--end::Tab Content-->
		</div>
		<!--end::Workspace-->
	</div>
	<!--end::Secondary-->
	</div>
	<!--end::Aside-->
	<!--begin::Wrapper-->
	<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
		<!--begin::Content-->
		<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
			<div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
				<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
					<!--begin::Details-->
					<div class="d-flex align-items-center flex-wrap mr-2">
						<!--begin::Title-->
						<h2 class="text-dark font-weight-bold mt-2 mb-2 mr-5 font-saol">Reservations</h2>
						<!--end::Title-->
						<!--begin::Separator-->
						<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200">
						</div>
						<!--end::Separator-->
						<!--begin::Search Form-->
						<div class="d-flex align-items-center" id="kt_subheader_search">
							<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">54 Total</span>
						</div>
						<!--end::Search Form-->
			
					</div>
					<!--end::Details-->
				</div>
			</div>
			<!--begin::Subheader-->
			<div class="subheader py-2 py-lg-4 subheader-transparent">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-9 col-xl-8">
							<div class="row align-items-center">
								<div class="col-md-3">
									<input type='text' class="form-control" id="calRange" readonly
										placeholder="Select time" type="text" />
								</div>
								<div class="col-md-3 my-2 my-md-0">
									<div class="input-icon">
										<input type="text" class="form-control" placeholder="Search..."
											id="kt_datatable_search_query" />
										<span>
											<i class="flaticon2-search-1 text-muted"></i>
										</span>
									</div>
								</div>
								<div class="col-md-3 my-2 my-md-0">
									<div class="d-flex align-items-center">
										<label class="mr-3 mb-0 d-none d-md-block">Status:</label>
										<select class="form-control" id="kt_datatable_search_status">
											<option value="">All</option>
											<option value="1">Open</option>
											<option value="2">Done</option>
										</select>
									</div>
								</div>
								<div class="col-md-3 my-2 my-md-0">
									<div class="d-flex align-items-center">
										<label class="mr-3 mb-0 d-none d-md-block">Type:</label>
										<select class="form-control" id="kt_datatable_search_type">
											<option value="">All</option>
											<option value="1">Islands</option>
											<option value="2">Safari</option>
											<option value="3">Spa</option>
											<option value="4">Voyage</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
							<div class="d-flex justify-content-between align-items-center">
								<div>
									<a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
								</div>
								<div>
									<ul class="nav">
										<li class="nav-item">
											<a class="nav-link px-2 active" data-toggle="tab" href="#data-table"
												aria-selected="true">
												<i class="text-dark-50 flaticon-interface-7"></i>
											</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link px-2" data-toggle="tab" href="#data-grid"
												aria-selected="false">
												<i class="text-dark-50 flaticon-squares-1"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<!--end::Subheader-->
			<!--begin::Entry-->
			<div class="d-flex flex-column-fluid">
				<!--begin::Container-fluid-->
				<div class="container-fluid">
					<div class="tab-content">
						<div class="tab-pane fade show active" id="data-table">
							<!--begin: Datatable-->
							<div class="table-scroller">
								<div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
								</div>
							</div>
							<!--end: Datatable-->
						</div>
						<div class="tab-pane fade" id="data-grid">
							<!--begin::Row-->
							<div class="row">
								<div class="col-xl-4">
									<!--begin::Card-->
									<div class="card card-custom gutter-b card-stretch">
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Info-->
											<div class="d-flex align-items-center">
												<!--begin::Pic-->
												<div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
													<img src="../users/assets/media/project-logos/3.png" alt="image" />
												</div>
												<!--end::Pic-->
												<!--begin::Info-->
												<div class="d-flex flex-column mr-auto">
													<!--begin: Title-->
													<div class="d-flex flex-column mr-auto">
														<a href="#"
															class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
															Guest Name</a>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Info-->
												<a href="#reservation_popup" title="View Reservations" data-canvas="popup"> 
													<i class="flaticon-calendar-1" style="color: #000;"></i>
												</a>
											</div>
											<!--end::Info-->
											<!--begin::Description-->
											<div class="mb-7 mt-7">
												<div class="d-flex justify-content-between align-items-center">
													<span class="text-dark-75 font-weight-bolder mr-2">Booked
														From:</span>
													<a href="#"
														class="text-muted text-hover-primary">Emporium-Islands.com</a>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<span class="text-dark-75 font-weight-bolder mr-2">Mobile:</span>
													<a href="#" class="text-muted text-hover-primary">8901929019</a>
												</div>
												<div class="d-flex justify-content-between align-items-cente my-1">
													<span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
													<a href="#" class="text-muted text-hover-primary">you@mail.com</a>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<span class="text-dark-75 font-weight-bolder mr-2">Agent:</span>
													<span class="text-muted font-weight-bold">Lorem Lipsum</span>
												</div>
											</div>
											<!--end::Description-->
											<div class="d-flex mb-5">
												<div class="d-flex align-items-center mr-7">
													<span class="font-weight-bold mr-4">Start Date</span>
													<span
														class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14
														Jan, 17</span>
												</div>
												<div class="d-flex align-items-center">
													<span class="font-weight-bold mr-4">End Date</span>
													<span
														class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">15
														Oct, 18</span>
												</div>
											</div>
											<div class="d-flex mb-5 align-items-center">
												<span class="d-block font-weight-bold mr-5" style="width: 150px;">
													<i class="label-success-o"></i> New York</span>
												<div class="w-100">
													<div class="d-flex">
														<div class="w-100">Arrive : 2 Feb </div>
														<div class="w-100 text-right">Depart : 8 Feb </div>
													</div>
													<div class="progress progress-xs mt-2 mb-2 w-100">
														<div class="progress-bar bg-success" role="progressbar"
															style="width: 65%;" aria-valuenow="50" aria-valuemin="0"
															aria-valuemax="100"></div>
													</div>
													<!-- <span class="ml-3 font-weight-bolder">65%</span> -->
												</div>
											</div>

											<div class="d-flex mb-5 align-items-center">
												<span class="d-block font-weight-bold mr-5" style="width: 150px;"><i
														class="label-warning-o"></i> Boston</span>
												<div class="w-100">
													<div class="d-flex">
														<div class="w-100">Arrive : 8 Feb </div>
														<div class="w-100 text-right">Depart : 14 Feb </div>
													</div>
													<div class="progress progress-xs mt-2 mb-2 w-100">
														<div class="progress-bar bg-warning" role="progressbar"
															style="width: 65%;" aria-valuenow="50" aria-valuemin="0"
															aria-valuemax="100"></div>
													</div>
													<!-- <span class="ml-3 font-weight-bolder">65%</span> -->
												</div>
											</div>
											<div class="d-flex mb-5 align-items-center">
												<span class="d-block font-weight-bold mr-5" style="width: 150px;"><i
														class="label-danger-o"></i> Miami</span>
												<div class="w-100">
													<div class="d-flex">
														<div class="w-100">Arrive : 14 Feb </div>
														<div class="w-100 text-right">Depart : 22 Feb </div>
													</div>
													<div class="progress progress-xs mt-2 mb-2 w-100">
														<div class="progress-bar bg-danger" role="progressbar"
															style="width: 65%;" aria-valuenow="50" aria-valuemin="0"
															aria-valuemax="100"></div>
													</div>
													<!-- <span class="ml-3 font-weight-bolder">65%</span> -->
												</div>
											</div>
										</div>
										<!--end::Body-->
										<!-- Begin::Footer -->
										<div class="card-footer d-flex align-items-center">
											<div class="d-flex">
												<div class="d-flex align-items-center mr-7">
													<span class="svg-icon svg-icon-gray-500">
														<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Text/Bullet-list.svg-->
														<svg xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
															height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none"
																fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path
																	d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
																	fill="#000000"></path>
																<path
																	d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
																	fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<a href="#itinerary" class="font-weight-bolder text-primary ml-2"
														data-canvas="popup">Itinerary</a>
												</div>
												<div class="d-flex align-items-center mr-7">
													<span class="svg-icon svg-icon-gray-500">
														<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Communication/Group-chat.svg-->
														<svg xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
															height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none"
																fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path
																	d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
																	fill="#000000"></path>
																<path
																	d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
																	fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<a href="#chat" class="font-weight-bolder text-primary ml-2"
														id="communication" data-canvas="popup">Communications</a>
												</div>
											</div>
										</div>
										<!-- End::Footer -->
									</div>
									<!--end:: Card-->
								</div>
								<div class="col-xl-4">
									<!--begin::Card-->
									<div class="card card-custom gutter-b card-stretch">
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Info-->
											<div class="d-flex align-items-center">
												<!--begin::Pic-->
												<div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
													<img src="../users/assets/media/project-logos/3.png" alt="image" />
												</div>
												<!--end::Pic-->
												<!--begin::Info-->
												<div class="d-flex flex-column mr-auto">
													<!--begin: Title-->
													<div class="d-flex flex-column mr-auto">
														<a href="#"
															class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
															Guest Name</a>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Info-->
												<a href="#reservation_popup" title="View Reservations" data-canvas="popup"> 
													<i class="flaticon-calendar-1" style="color: #000;"></i>
												</a>
											</div>
											<!--end::Info-->
											<!--begin::Description-->
											<div class="mb-7 mt-7">
												<div class="d-flex justify-content-between align-items-center">
													<span class="text-dark-75 font-weight-bolder mr-2">Booked
														From:</span>
													<a href="#"
														class="text-muted text-hover-primary">Emporium-Islands.com</a>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<span class="text-dark-75 font-weight-bolder mr-2">Mobile:</span>
													<a href="#" class="text-muted text-hover-primary">8901929019</a>
												</div>
												<div class="d-flex justify-content-between align-items-cente my-1">
													<span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
													<a href="#" class="text-muted text-hover-primary">you@mail.com</a>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<span class="text-dark-75 font-weight-bolder mr-2">Agent:</span>
													<span class="text-muted font-weight-bold">Lorem Lipsum</span>
												</div>
											</div>
											<!--end::Description-->
											<div class="d-flex mb-5">
												<div class="d-flex align-items-center mr-7">
													<span class="font-weight-bold mr-4">Start Date</span>
													<span
														class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14
														Jan, 17</span>
												</div>
												<div class="d-flex align-items-center">
													<span class="font-weight-bold mr-4">End Date</span>
													<span
														class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">15
														Oct, 18</span>
												</div>
											</div>
											<div class="d-flex mb-5 align-items-center">
												<span class="d-block font-weight-bold mr-5" style="width: 150px;">
													<i class="label-success-o"></i> New York</span>
												<div class="w-100">
													<div class="d-flex">
														<div class="w-100">Arrive : 2 Feb </div>
														<div class="w-100 text-right">Depart : 8 Feb </div>
													</div>
													<div class="progress progress-xs mt-2 mb-2 w-100">
														<div class="progress-bar bg-success" role="progressbar"
															style="width: 65%;" aria-valuenow="50" aria-valuemin="0"
															aria-valuemax="100"></div>
													</div>
													<!-- <span class="ml-3 font-weight-bolder">65%</span> -->
												</div>
											</div>

											<div class="d-flex mb-5 align-items-center">
												<span class="d-block font-weight-bold mr-5" style="width: 150px;"><i
														class="label-warning-o"></i> Boston</span>
												<div class="w-100">
													<div class="d-flex">
														<div class="w-100">Arrive : 8 Feb </div>
														<div class="w-100 text-right">Depart : 14 Feb </div>
													</div>
													<div class="progress progress-xs mt-2 mb-2 w-100">
														<div class="progress-bar bg-warning" role="progressbar"
															style="width: 65%;" aria-valuenow="50" aria-valuemin="0"
															aria-valuemax="100"></div>
													</div>
													<!-- <span class="ml-3 font-weight-bolder">65%</span> -->
												</div>
											</div>
											<div class="d-flex mb-5 align-items-center">
												<span class="d-block font-weight-bold mr-5" style="width: 150px;"><i
														class="label-danger-o"></i> Miami</span>
												<div class="w-100">
													<div class="d-flex">
														<div class="w-100">Arrive : 14 Feb </div>
														<div class="w-100 text-right">Depart : 22 Feb </div>
													</div>
													<div class="progress progress-xs mt-2 mb-2 w-100">
														<div class="progress-bar bg-danger" role="progressbar"
															style="width: 65%;" aria-valuenow="50" aria-valuemin="0"
															aria-valuemax="100"></div>
													</div>
													<!-- <span class="ml-3 font-weight-bolder">65%</span> -->
												</div>
											</div>
										</div>
										<!--end::Body-->
										<!-- Begin::Footer -->
										<div class="card-footer d-flex align-items-center">
											<div class="d-flex">
												<div class="d-flex align-items-center mr-7">
													<span class="svg-icon svg-icon-gray-500">
														<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Text/Bullet-list.svg-->
														<svg xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
															height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none"
																fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path
																	d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
																	fill="#000000"></path>
																<path
																	d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
																	fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<a href="#itinerary" class="font-weight-bolder text-primary ml-2"
														data-canvas="popup">Itinerary</a>
												</div>
												<div class="d-flex align-items-center mr-7">
													<span class="svg-icon svg-icon-gray-500">
														<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Communication/Group-chat.svg-->
														<svg xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
															height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none"
																fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path
																	d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
																	fill="#000000"></path>
																<path
																	d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
																	fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<a href="#chat" class="font-weight-bolder text-primary ml-2"
														id="communication" data-canvas="popup">Communications</a>
												</div>
											</div>
										</div>
										<!-- End::Footer -->
									</div>
									<!--end:: Card-->
								</div>
								<div class="col-xl-4">
									<!--begin::Card-->
									<div class="card card-custom gutter-b card-stretch">
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Info-->
											<div class="d-flex align-items-center">
												<!--begin::Pic-->
												<div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
													<img src="../users/assets/media/project-logos/3.png" alt="image" />
												</div>
												<!--end::Pic-->
												<!--begin::Info-->
												<div class="d-flex flex-column mr-auto">
													<!--begin: Title-->
													<div class="d-flex flex-column mr-auto">
														<a href="#"
															class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
															Guest Name</a>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Info-->
												<a href="#reservation_popup" title="View Reservations" data-canvas="popup"> 
													<i class="flaticon-calendar-1" style="color: #000;"></i>
												</a>
											</div>
											<!--end::Info-->
											<!--begin::Description-->
											<div class="mb-7 mt-7">
												<div class="d-flex justify-content-between align-items-center">
													<span class="text-dark-75 font-weight-bolder mr-2">Booked
														From:</span>
													<a href="#"
														class="text-muted text-hover-primary">Emporium-Islands.com</a>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<span class="text-dark-75 font-weight-bolder mr-2">Mobile:</span>
													<a href="#" class="text-muted text-hover-primary">8901929019</a>
												</div>
												<div class="d-flex justify-content-between align-items-cente my-1">
													<span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
													<a href="#" class="text-muted text-hover-primary">you@mail.com</a>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<span class="text-dark-75 font-weight-bolder mr-2">Agent:</span>
													<span class="text-muted font-weight-bold">Lorem Lipsum</span>
												</div>
											</div>
											<!--end::Description-->
											<div class="d-flex mb-5">
												<div class="d-flex align-items-center mr-7">
													<span class="font-weight-bold mr-4">Start Date</span>
													<span
														class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14
														Jan, 17</span>
												</div>
												<div class="d-flex align-items-center">
													<span class="font-weight-bold mr-4">End Date</span>
													<span
														class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">15
														Oct, 18</span>
												</div>
											</div>
											<div class="d-flex mb-5 align-items-center">
												<span class="d-block font-weight-bold mr-5" style="width: 150px;">
													<i class="label-success-o"></i> New York</span>
												<div class="w-100">
													<div class="d-flex">
														<div class="w-100">Arrive : 2 Feb </div>
														<div class="w-100 text-right">Depart : 8 Feb </div>
													</div>
													<div class="progress progress-xs mt-2 mb-2 w-100">
														<div class="progress-bar bg-success" role="progressbar"
															style="width: 65%;" aria-valuenow="50" aria-valuemin="0"
															aria-valuemax="100"></div>
													</div>
													<!-- <span class="ml-3 font-weight-bolder">65%</span> -->
												</div>
											</div>

											<div class="d-flex mb-5 align-items-center">
												<span class="d-block font-weight-bold mr-5" style="width: 150px;"><i
														class="label-warning-o"></i> Boston</span>
												<div class="w-100">
													<div class="d-flex">
														<div class="w-100">Arrive : 8 Feb </div>
														<div class="w-100 text-right">Depart : 14 Feb </div>
													</div>
													<div class="progress progress-xs mt-2 mb-2 w-100">
														<div class="progress-bar bg-warning" role="progressbar"
															style="width: 65%;" aria-valuenow="50" aria-valuemin="0"
															aria-valuemax="100"></div>
													</div>
													<!-- <span class="ml-3 font-weight-bolder">65%</span> -->
												</div>
											</div>
											<div class="d-flex mb-5 align-items-center">
												<span class="d-block font-weight-bold mr-5" style="width: 150px;"><i
														class="label-danger-o"></i> Miami</span>
												<div class="w-100">
													<div class="d-flex">
														<div class="w-100">Arrive : 14 Feb </div>
														<div class="w-100 text-right">Depart : 22 Feb </div>
													</div>
													<div class="progress progress-xs mt-2 mb-2 w-100">
														<div class="progress-bar bg-danger" role="progressbar"
															style="width: 65%;" aria-valuenow="50" aria-valuemin="0"
															aria-valuemax="100"></div>
													</div>
													<!-- <span class="ml-3 font-weight-bolder">65%</span> -->
												</div>
											</div>
										</div>
										<!--end::Body-->
										<!-- Begin::Footer -->
										<div class="card-footer d-flex align-items-center">
											<div class="d-flex">
												<div class="d-flex align-items-center mr-7">
													<span class="svg-icon svg-icon-gray-500">
														<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Text/Bullet-list.svg-->
														<svg xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
															height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none"
																fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path
																	d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
																	fill="#000000"></path>
																<path
																	d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
																	fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<a href="#itinerary" class="font-weight-bolder text-primary ml-2"
														data-canvas="popup">Itinerary</a>
												</div>
												<div class="d-flex align-items-center mr-7">
													<span class="svg-icon svg-icon-gray-500">
														<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Communication/Group-chat.svg-->
														<svg xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
															height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none"
																fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path
																	d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
																	fill="#000000"></path>
																<path
																	d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
																	fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<a href="#chat" class="font-weight-bolder text-primary ml-2"
														id="communication" data-canvas="popup">Communications</a>
												</div>
											</div>
										</div>
										<!-- End::Footer -->
									</div>
									<!--end:: Card-->
								</div>

							</div>
							<!--end::Row-->
							<!--begin::Pagination-->
							<div class="d-flex justify-content-between align-items-center flex-wrap">
								<div class="d-flex flex-wrap mr-3">
									<a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
										<i class="ki ki-bold-double-arrow-back icon-xs"></i>
									</a>
									<a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
										<i class="ki ki-bold-arrow-back icon-xs"></i>
									</a>
									<a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
									<a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
									<a href="#"
										class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
									<a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
									<a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
									<a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
									<a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
									<a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
									<a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
										<i class="ki ki-bold-arrow-next icon-xs"></i>
									</a>
									<a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
										<i class="ki ki-bold-double-arrow-next icon-xs"></i>
									</a>
								</div>
								<div class="d-flex align-items-center">
									<select
										class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
										style="width: 75px;">
										<option value="10">10</option>
										<option value="20">20</option>
										<option value="30">30</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select>
									<span class="text-muted">Displaying 10 of 230 records</span>
								</div>
							</div>
							<!--end::Pagination-->
						</div>
					</div>
				</div>
				<!--end::Container-->
			</div>
			<!--end::Entry-->
		</div>
		<!--end::Content-->
		<!--begin::Footer-->
		<!--doc: add "bg-white" class to have footer with solod background color-->
		@include('users_admin/traveller/users/components/_footer')

		<!--end::Footer-->
	</div>
	<!--end::Wrapper-->
	</div>
	<!--end::Page-->
	</div>
	<!--end::Main-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop">
		<span class="svg-icon">
			<!--begin::Svg Icon | path:../users/assets/media/svg/icons/Navigation/Up-2.svg-->
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
				height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon points="0 0 24 0 24 24 0 24" />
					<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
					<path
						d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
						fill="#000000" fill-rule="nonzero" />
				</g>
			</svg>
			<!--end::Svg Icon-->
		</span>
	</div>
	<!--end::Scrolltop-->
	<div id="detail" class="offcanvas offcanvas-right p-10" style="width: 90%;">
		<!--begin::Header-->
		<div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
			<h4 class="font-weight-bold m-0">Tammy</h4>
			<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
				<i class="ki ki-close icon-xs text-muted"></i>
			</a>
		</div>
		<!--end::Header-->
		<!--begin::Content-->
		<div class="offcanvas-content">
			<!--begin::Wrapper-->
			<div class="offcanvas-wrapper mb-5 scroll-pull">

			</div>
			<!--end::Wrapper-->
			<!--begin::Purchase-->

			<!--end::Purchase-->
		</div>
		<!--end::Content-->
	</div>
	@include('users_admin/traveller/users/components/_chat-popup')
	@include('users_admin/traveller/users/components/_reservation-popup')

	<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
	<!--begin::Global Config(global config for global JS scripts)-->
	<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="../users/assets/plugins/global/plugins.bundle.js"></script>
	<script src="../users/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
	<script src="../users/assets/js/scripts.bundle.js"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Scripts(used by this page)-->
	<!-- <script src="../users/assets/js/jquery.rangecalendar.js"></script> -->
	<script src="../users/assets/js/pages/crud/ktdatatable/base/data-local-reservation.js"></script>
	<script src="../users/assets/plugins/custom/slick/slick.min.js"></script>
	<script src="../users/assets/js/custom.js"></script>
	<script>
		$('.result-grid').slick({
			slidesToShow: 1,
			prevArrow: '<button class="slide-arrow prev-arrow"><i class="ico ico-back"></i></button>',
			nextArrow: '<button class="slide-arrow next-arrow"><i class="ico ico-next"></i></button>'
		});

		$(".btn-data-grid").click(function (e) {
			e.preventDefault();
			$('.data-table').toggleClass('show');
			$('.data-grid').toggleClass('show');
		})
		$('#calRange').daterangepicker({
			buttonClasses: ' btn',
			applyClass: 'btn-primary',
			cancelClass: 'btn-secondary',
			locale: {
				format: 'D MMM'
			}
		});
	</script>
</body>
<!--end::Body-->

</html>