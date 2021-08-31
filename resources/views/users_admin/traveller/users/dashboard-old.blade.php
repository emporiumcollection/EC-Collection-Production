@extends('users_admin.traveller.layout.app')
@section('content')
	<!--begin::Main-->
	<!--begin::Header Mobile-->
	<div id="kt_header_mobile" class="header-mobile">
		<!--begin::Logo-->
		<a href="hotels.html">
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
							<div class="col-lg-6 mb-5">
								<a href="#hotelList" class="btn btn-block btn-white text-center radius-5 py-2 px-5 "
									data-canvas="popup">
									<span class="d-block font-weight-bold font-size-h4 font-saol">Hotels</span>
								</a>
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col-lg-6 mb-5">
								<a href="client.html" class="btn btn-block btn-white text-center radius-5 py-2 px-5">
									<span class="d-block font-weight-bold font-size-h4 font-saol">Clients</span>
								</a>
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col-lg-6 mb-5">
								<a href="distributor.html"
									class="btn btn-block btn-white text-center radius-5 py-2 px-5">
									<span class="d-block font-weight-bold font-size-h4 font-saol">Distributor</span>
								</a>
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col-lg-6 mb-5">
								<a href="supplier.html" class="btn btn-block btn-white text-center radius-5 py-2 px-5 ">
									<span class="d-block font-weight-bold font-size-h4 font-saol">Supplier</span>
								</a>
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col-lg-6 mb-5">
								<a href="restaurants.html"
									class="btn btn-block btn-white text-center radius-5 py-2 px-5">
									<span class="d-block font-weight-bold font-size-h4 font-saol">Restaurants</span>
								</a>
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col-lg-6 mb-5">
								<a href="bars.html" class="btn btn-block btn-white text-center radius-5 py-2 px-5">
									<span class="d-block font-weight-bold font-size-h4 font-saol">Bars</span>
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
			<!--begin::Entry-->
			<div class="d-flex flex-column-fluid">
				<!--begin::Container-->
				<div class="container-fluid mt-5">
					<!--begin::Card-->
					<div class="card card-custom">
						<div class="card-header flex-wrap border-0 pt-6 pb-0">
							<div class="card-title">
								<h2 class="text-dark font-weight-bold font-saol">Dashboard </h2>
							</div>
							@include('users_admin/traveller/users/components/_nav-user')
						</div>
						<div class="card-body">
							<div class="row mt-5">
								<div class="col-lg-6">
									<h5 class="text-center mb-5">Dynamic Pricing Graph (Past)</h5>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label>Select Date:</label>
												<div class="input-group date">
													<input type="text" class="form-control datepick" readonly
														placeholder="Select date" />
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="mt-5">
										<canvas id="myChart" width="400" height="400"></canvas>
									</div>
								</div>
								<div class="col-lg-6">
									<h5 class="text-center mb-5">Dynamic Pricing Graph (Future)</h5>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label>From:</label>
												<div class="input-group date">
													<input type="text" class="form-control datepick" readonly
														placeholder="Select date" />
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>To:</label>
												<div class="input-group date">
													<input type="text" class="form-control datepick" readonly
														placeholder="Select date" />
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="mt-5">
										<canvas id="myChart2" width="400" height="400"></canvas>
									</div>
								</div>
							</div>

							<div class="mt-5">
								<ul class="nav nav-suites align-items-center">
									<li class="nav-item">
										<a href="#rates-name" class="nav-link" data-toggle="tab">Rate Type</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
											role="button" aria-haspopup="true" aria-expanded="false">
											Edit
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#default-rate" data-toggle="tab">
												Default
											</a>
											<a class="dropdown-item" href="#early-rate" data-toggle="tab">
												Early Bird
											</a>
										</div>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link" id="addRates">
											<i class="flaticon-add-circular-button font-size-h3"></i>
										</a>
									</li>
								</ul>
								<div class="tab-content pt-8">
									<div class="tab-pane fade active show" id="rates-name" data-rate="">
										<form action="#">
											<div class="table-responsive">
												<div class="d-flex mb-5">
													<div class="rate">
														<div class="ratehead-container">
															<div class="ratehead">
																<div>Rate Name</div>
																<div>Season</div>
															</div>
															<div class="ratehead">
																<div>Rate</div>
															</div>
															<div class="ratehead">
																<div>Mon</div>
																<div>Tue</div>
																<div>Wed</div>
																<div>Thu</div>
																<div>Fri</div>
																<div>Sat</div>
																<div>Sun</div>
															</div>
															<div class="ratehead">
																<div>Single Price</div>
															</div>
															<div class="ratehead">
																<div>Extra Adult</div>
																<div>Extra Junior</div>
																<div>Extra Baby</div>
															</div>
														</div>
														<div class="ratebody-container">
															<div class="ratebody">
																<div class="ratename">Default</div>
																<div class="rateinner">
																	<div>Default</div>
																	<div>Christmas</div>
																</div>
															</div>
															<div class="ratebody">
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
															</div>
															<div class="ratebody">
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
															</div>
															<div class="ratebody">
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
															</div>
															<div class="ratebody">
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
															</div>
														</div>

													</div>
													<div class="pl-3" style="flex: 0 0 100px;">
														<a href="#" class="btn btn-primary">
															<i class="flaticon-refresh"></i> Save
														</a>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane fade" id="default-rate" data-rate="">
										<form action="#">
											<div class="table-responsive">
												<div class="d-flex mb-5">
													<div class="rate">
														<div class="ratehead-container">
															<div class="ratehead">
																<div>Rate Name</div>
																<div>Season</div>
															</div>
															<div class="ratehead">
																<div>Rate</div>
															</div>
															<div class="ratehead">
																<div>Mon</div>
																<div>Tue</div>
																<div>Wed</div>
																<div>Thu</div>
																<div>Fri</div>
																<div>Sat</div>
																<div>Sun</div>
															</div>
															<div class="ratehead">
																<div>Single Price</div>
															</div>
															<div class="ratehead">
																<div>Extra Adult</div>
																<div>Extra Junior</div>
																<div>Extra Baby</div>
															</div>
														</div>
														<div class="ratebody-container">
															<div class="ratebody">
																<div class="ratename">Default</div>
																<div class="rateinner">
																	<div>Default</div>
																	<div>Christmas</div>
																</div>
															</div>
															<div class="ratebody">
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
															</div>
															<div class="ratebody">
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
															</div>
															<div class="ratebody">
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
															</div>
															<div class="ratebody">
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
															</div>
														</div>

													</div>
													<div class="pl-3" style="flex: 0 0 100px;">
														<a href="#" class="btn btn-primary">
															<i class="flaticon-refresh"></i> Save
														</a>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane fade" id="early-rate" data-rate="">
										<form action="#">
											<div class="table-responsive">
												<div class="d-flex mb-5">
													<div class="rate">
														<div class="ratehead-container">
															<div class="ratehead">
																<div>Rate Name</div>
																<div>Season</div>
															</div>
															<div class="ratehead">
																<div>Rate</div>
															</div>
															<div class="ratehead">
																<div>Mon</div>
																<div>Tue</div>
																<div>Wed</div>
																<div>Thu</div>
																<div>Fri</div>
																<div>Sat</div>
																<div>Sun</div>
															</div>
															<div class="ratehead">
																<div>Single Price</div>
															</div>
															<div class="ratehead">
																<div>Extra Adult</div>
																<div>Extra Junior</div>
																<div>Extra Baby</div>
															</div>
														</div>
														<div class="ratebody-container">
															<div class="ratebody">
																<div class="ratename">Default</div>
																<div class="rateinner">
																	<div>Default</div>
																	<div>Christmas</div>
																</div>
															</div>
															<div class="ratebody">
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
															</div>
															<div class="ratebody">
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
															</div>
															<div class="ratebody">
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
															</div>
															<div class="ratebody">
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
																<div class="rateinner">
																	<div><input type="text" class="form-control"></div>
																	<div><input type="text" class="form-control"></div>
																</div>
															</div>
														</div>

													</div>
													<div class="pl-3" style="flex: 0 0 100px;">
														<a href="#" class="btn btn-primary">
															<i class="flaticon-refresh"></i> Save
														</a>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="table-responsive mt-8">
									<div class="d-flex mb-5">
										<table class="table table-rate">
											<thead>
												<tr>
													<td class="text-left">
														<div class="date-nav">
															<a href="#" class="date-prev"><i
																	class="flaticon2-fast-back"></i></a>
															<div class="date-input">
																<input type="text" class="date-filter" disabled>
															</div>
															<a href="#" class="date-next"><i
																	class="flaticon2-fast-next"></i></a>
														</div>
													</td>
													<td>
														Sat <br>
														09 May
													</td>
													<td>
														Sun <br>
														10 May
													</td>
													<td>
														Mon <br>
														11 May
													</td>
													<td>
														Tue <br>
														12 May
													</td>
													<td>
														Wed <br>
														13 May
													</td>
													<td>
														Thu <br>
														14 May
													</td>
													<td>
														Fri <br>
														15 May
													</td>
													<td>
														Sat <br>
														16 May
													</td>
													<td>
														Sun <br>
														17 May
													</td>
													<td>
														Mon <br>
														18 May
													</td>
												</tr>
												<tr>
													<td class="text-left">
														Dynamic Rates
													</td>
													<td>
														<span class="switch switch-sm">
															<label>
																<input type="checkbox" checked="checked" name="select">
																<span></span>
															</label>
														</span>
													</td>
													<td>
														<span class="switch switch-sm">
															<label>
																<input type="checkbox" checked="checked" name="select">
																<span></span>
															</label>
														</span>
													</td>
													<td>
														<span class="switch switch-sm">
															<label>
																<input type="checkbox" checked="checked" name="select">
																<span></span>
															</label>
														</span>
													</td>
													<td>
														<span class="switch switch-sm">
															<label>
																<input type="checkbox" checked="checked" name="select">
																<span></span>
															</label>
														</span>
													</td>
													<td>
														<span class="switch switch-sm">
															<label>
																<input type="checkbox" checked="checked" name="select">
																<span></span>
															</label>
														</span>
													</td>
													<td>
														<span class="switch switch-sm">
															<label>
																<input type="checkbox" checked="checked" name="select">
																<span></span>
															</label>
														</span>
													</td>
													<td>
														<span class="switch switch-sm">
															<label>
																<input type="checkbox" checked="checked" name="select">
																<span></span>
															</label>
														</span>
													</td>
													<td>
														<span class="switch switch-sm">
															<label>
																<input type="checkbox" checked="checked" name="select">
																<span></span>
															</label>
														</span>
													</td>
													<td>
														<span class="switch switch-sm">
															<label>
																<input type="checkbox" checked="checked" name="select">
																<span></span>
															</label>
														</span>
													</td>
													<td>
														<span class="switch switch-sm">
															<label>
																<input type="checkbox" checked="checked" name="select">
																<span></span>
															</label>
														</span>
													</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Available Rooms (Occupancy %)</td>
													<td>35 <br> (10%)</td>
													<td>35 <br> (10%)</td>
													<td>35 <br> (10%)</td>
													<td>35 <br> (10%)</td>
													<td>35 <br> (10%)</td>
													<td>35 <br> (10%)</td>
													<td>35 <br> (10%)</td>
													<td>35 <br> (10%)</td>
													<td>35 <br> (10%)</td>
													<td>35 <br> (10%)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end::Card-->
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

	<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="../users/assets/plugins/global/plugins.bundle.js"></script>
	<script src="../users/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
	<script src="../users/assets/js/scripts.bundle.js"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Scripts(used by this page)-->
	<!-- <script src="../users/assets/js/jquery.rangecalendar.js"></script> -->
	<script src="../users/assets/js/pages/crud/ktdatatable/child/data-local.js"></script>
	<script src="../users/assets/js/pages/crud/forms/widgets/select2.js"></script>
	<!-- <script src="../users/assets/js/pages/crud/file-upload/dropzonejs.js"></script> -->
	<!-- <script src="../users/assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js"></script> -->
	<script src="../users/assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<!-- <script src="../users/assets/js/pages/crud/datatables/extensions/rowreorder.js"></script> -->
	<script src="../users/assets/js/custom.js"></script>
	<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ['1', '2', '3', '4', '5', '6'],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					y: {
						beginAtZero: true
					}
				}
			}
		});

		var ctx = document.getElementById('myChart2').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ['1', '2', '3', '4', '5', '6'],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					y: {
						beginAtZero: true
					}
				}
			}
		});

		$('.datepick').datepicker({
			format: "dd / MM / yyyy"
		});
		$('.date-filter').datepicker({
			format: "dd MM yyyy",
		}).datepicker("setDate", 'now');

		$('.date-next').on("click", function (e) {
			e.preventDefault();
			var date = $('.date-filter').datepicker('getDate');
			date.setTime(date.getTime() + (1000 * 60 * 60 * 24))
			$('.date-filter').datepicker("setDate", date);
		});

		$('.date-prev').on("click", function (e) {
			e.preventDefault();
			var date = $('.date-filter').datepicker('getDate');
			date.setTime(date.getTime() - (1000 * 60 * 60 * 24))
			$('.date-filter').datepicker("setDate", date);
		});
	</script>
@endsection