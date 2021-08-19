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
						@include('users_admin/traveller/users/components/_dashboard-menu')
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
								<h2 class="text-dark font-weight-bold font-saol">Invite Guests </h2>
							</div>
							@include('users_admin/traveller/users/components/_nav-user')
						</div>
						<div class="card-body">
							<div class="banner-page">
								<img src="{{ asset('assets/users/assets/media/companion.jpg')}}" class="img-fluid" alt="">
								<h2 class="banner-title">Invite Guests </h2>
							</div>

							<div class="mt-15">
								<h3 class="text-dark font-weight-bold font-saol mb-4">
									Invite your friends
								</h3>
								<p>
									Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero rerum temporibus
									quas
									nulla dolorem non rem porro amet tenetur vero nostrum explicabo, hic atque quo
									delectus
									illum! Delectus, natus est.
								</p>

								<div class="mt-13">
									<form method="post" action="/users/invite" id="contact_form">
										<div class="row">
											<div class="form-group col-md-6">
												<label>First name * </label>
												<input type="text" class="form-control"
													placeholder="Enter invite firstname" name="firstname">
											</div>
											<div class="form-group col-md-6">
												<label>Last Name * </label>
												<input type="text" class="form-control"
													placeholder="Enter invite lastname" name="lastname">
											</div>
										</div>
										<div class="form-group">
											<label>Email * </label>
											<input type="email" class="form-control" placeholder="Enter invite email"
												name="email">
										</div>
										<div class="form-group">
											<label>Message </label>
											<textarea class="form-control" cols="4" rows="10"></textarea>
											<span class="form-text text-muted">
												Defalut message will be send if you do
												not enter message.
											</span>
										</div>
										<div class="form-group text-right my-12">
											<button type="submit" class="btn btn-primary" id="send-invitation">Send
												Invitation</button>
										</div>
									</form>
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
	<script src="../users/assets/js/pages/crud/forms/widgets/select2.js"></script>
	<!-- <script src="../users/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script> -->
	<script src="../users/assets/js/custom.js"></script>

	<script>
		// FormValidation.formValidation(
		// 	document.getElementById('contact_form'),
		// 	{
		// 		fields: {
		// 			firstname: {
		// 				validators: {
		// 					notEmpty: {
		// 						message: 'Firstname is required'
		// 					}
		// 				}
		// 			},
		// 			lastname: {
		// 				validators: {
		// 					notEmpty: {
		// 						message: 'Firstname is required'
		// 					}
		// 				}
		// 			},
		// 			email: {
		// 				validators: {
		// 					notEmpty: {
		// 						message: 'Email is required'
		// 					},
		// 					emailAddress: {
		// 						message: 'The value is not a valid email address'
		// 					}
		// 				}
		// 			},
		// 		},

		// 		plugins: {
		// 			trigger: new FormValidation.plugins.Trigger(),
		// 			// Bootstrap Framework Integration
		// 			bootstrap: new FormValidation.plugins.Bootstrap(),
		// 			// Validate fields when clicking the Submit button
		// 			submitButton: new FormValidation.plugins.SubmitButton(),
		// 			// Submit the form when all fields are valid
		// 			defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
		// 		}
		// 	}
		// );
		$("#send-invitation").click(function (e) {
			Swal.fire("Good job!", "Message has been sent ", "success");
		});
		
	</script>
@endsection