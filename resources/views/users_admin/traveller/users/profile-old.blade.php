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
								<h2 class="text-dark font-weight-bold font-saol">Profile </h2>
							</div>
							@include('users_admin/traveller/users/components/_nav-user')
						</div>
						<div class="card-body">
							<ul class="nav nav-tabs nav-profiletabs">
								<li class="nav-item ">
									<a href="#profile" class="nav-link active" data-toggle="tab">Profile</a>
								</li>
								<li class="nav-item">
									<a href="#account" class="nav-link" data-toggle="tab">Account</a>
								</li>
								<li class="nav-item">
									<a href="#address" class="nav-link" data-toggle="tab">Address</a>
								</li>
								<li class="nav-item">
									<a href="#submission" class="nav-link" data-toggle="tab">Submission</a>
								</li>
								<li class="nav-item">
									<a href="#preferences" class="nav-link" data-toggle="tab">Global Preferences</a>
								</li>
								<li class="nav-item">
									<a href="#invite" class="nav-link" data-toggle="tab">Invite Friends</a>
								</li>
							</ul>

							<div class="tab-content p-7 profile-tabs">
								<div class="tab-pane fade show active" id="profile">
									<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
										<div class="col-xl-9">
											<h5 class="text-dark font-weight-bold mb-10">User's
												Profile Details:</h5>
											<!--begin::Group-->
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 col-form-label text-left">Avatar</label>
												<div class="col-lg-9 col-xl-9">
													<div class="image-input image-input-outline"
														id="kt_user_add_avatar">
														<div class="image-input-wrapper"
															style="background-image: url(../users/assets/media/users/100_6.jpg)">
														</div>
														<label
															class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
															data-action="change" data-toggle="tooltip" title=""
															data-original-title="Change avatar">
															<i class="fa fa-pen icon-sm text-muted"></i>
															<input type="file" name="profile_avatar"
																accept=".png, .jpg, .jpeg">
															<input type="hidden" name="profile_avatar_remove">
														</label>
														<span
															class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
															data-action="cancel" data-toggle="tooltip" title=""
															data-original-title="Cancel avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
													</div>
												</div>
											</div>
											<!--end::Group-->
											<!--begin::Group-->
											<div class="form-group row fv-plugins-icon-container">
												<label class="col-xl-3 col-lg-3 col-form-label">First
													Name</label>
												<div class="col-lg-9 col-xl-9">
													<input class="form-control form-control-solid form-control-lg"
														name="firstname" type="text" value="">
													<div class="fv-plugins-message-container"></div>
												</div>
											</div>
											<!--end::Group-->
											<!--begin::Group-->
											<div class="form-group row fv-plugins-icon-container">
												<label class="col-xl-3 col-lg-3 col-form-label">Last
													Name</label>
												<div class="col-lg-9 col-xl-9">
													<input class="form-control form-control-solid form-control-lg"
														name="lastname" type="text" value="">
													<div class="fv-plugins-message-container"></div>
												</div>
											</div>
											<!--end::Group-->
											<!--begin::Group-->
											<div class="form-group row fv-plugins-icon-container">
												<label class="col-xl-3 col-lg-3 col-form-label">Company
													Name</label>
												<div class="col-lg-9 col-xl-9">
													<input class="form-control form-control-solid form-control-lg"
														name="companyname" type="text" value="Loop Inc.">
													<span class="form-text text-muted">If you want
														your invoices addressed to a company. Leave
														blank to use your full name.</span>
													<div class="fv-plugins-message-container"></div>
												</div>
											</div>
											<!--end::Group-->
											<!--begin::Group-->
											<div class="form-group row fv-plugins-icon-container">
												<label class="col-xl-3 col-lg-3 col-form-label">Contact
													Phone</label>
												<div class="col-lg-9 col-xl-9">
													<div class="input-group input-group-solid input-group-lg">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-phone"></i>
															</span>
														</div>
														<input type="text"
															class="form-control form-control-solid form-control-lg"
															name="phone" value="5678967456" placeholder="Phone">
													</div>
													<span class="form-text text-muted">Enter valid
														US phone number(e.g: 5678967456).</span>
													<div class="fv-plugins-message-container"></div>
												</div>
											</div>
											<!--end::Group-->
											<!--begin::Group-->
											<div class="form-group row fv-plugins-icon-container">
												<label class="col-xl-3 col-lg-3 col-form-label">Email
													Address</label>
												<div class="col-lg-9 col-xl-9">
													<div class="input-group input-group-solid input-group-lg">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-at"></i>
															</span>
														</div>
														<input type="text"
															class="form-control form-control-solid form-control-lg"
															name="email" value="">
													</div>
													<div class="fv-plugins-message-container"></div>
												</div>
											</div>
											<!--end::Group-->
											<!--begin::Group-->
											<div class="form-group row fv-plugins-icon-container">
												<label class="col-xl-3 col-lg-3 col-form-label">Company
													Site</label>
												<div class="col-lg-9 col-xl-9">
													<div class="input-group input-group-solid input-group-lg">
														<input type="text"
															class="form-control form-control-solid form-control-lg"
															name="companywebsite" placeholder="Username" value="loop">
														<div class="input-group-append">
															<span class="input-group-text">.com</span>
														</div>
													</div>
													<div class="fv-plugins-message-container"></div>
												</div>
											</div>
											<!--end::Group-->
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="account">
									<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
										<div class="col-xl-9">
											<h5 class="text-dark font-weight-bold mb-10">
												Account Credentials</h5>
											<!--begin::Group-->
											<div class="form-group row fv-plugins-icon-container">
												<label class="col-form-label col-xl-3 col-lg-3">Language</label>
												<div class="col-xl-9 col-lg-9">
													<select class="form-control form-control-lg form-control-solid"
														name="language">
														<option value="">Select Language...</option>
														<option value="id">Bahasa Indonesia -
															Indonesian</option>
														<option value="msa">Bahasa Melayu - Malay
														</option>
														<option value="ca">Català - Catalan</option>
														<option value="cs">Čeština - Czech</option>
														<option value="da">Dansk - Danish</option>
														<option value="de">Deutsch - German</option>
														<option value="en" selected="selected">
															English</option>
														<option value="en-gb">English UK - British
															English</option>
														<option value="es">Español - Spanish
														</option>
														<option value="eu">Euskara - Basque (beta)
														</option>
														<option value="fil">Filipino</option>
														<option value="fr">Français - French
														</option>
														<option value="ga">Gaeilge - Irish (beta)
														</option>
														<option value="gl">Galego - Galician (beta)
														</option>
														<option value="hr">Hrvatski - Croatian
														</option>
														<option value="it">Italiano - Italian
														</option>
														<option value="hu">Magyar - Hungarian
														</option>
														<option value="nl">Nederlands - Dutch
														</option>
														<option value="no">Norsk - Norwegian
														</option>
														<option value="pl">Polski - Polish</option>
														<option value="pt">Português - Portuguese
														</option>
														<option value="ro">Română - Romanian
														</option>
														<option value="sk">Slovenčina - Slovak
														</option>
														<option value="fi">Suomi - Finnish</option>
														<option value="sv">Svenska - Swedish
														</option>
														<option value="vi">Tiếng Việt - Vietnamese
														</option>
														<option value="tr">Türkçe - Turkish</option>
														<option value="el">Ελληνικά - Greek</option>
														<option value="bg">Български език -
															Bulgarian</option>
														<option value="ru">Русский - Russian
														</option>
														<option value="sr">Српски - Serbian</option>
														<option value="uk">Українська мова -
															Ukrainian</option>
														<option value="he">עִבְרִית - Hebrew
														</option>
														<option value="ur">اردو - Urdu (beta)
														</option>
														<option value="ar">العربية - Arabic</option>
														<option value="fa">فارسی - Persian</option>
														<option value="mr">मराठी - Marathi</option>
														<option value="hi">हिन्दी - Hindi</option>
														<option value="bn">বাংলা - Bangla</option>
														<option value="gu">ગુજરાતી - Gujarati
														</option>
														<option value="ta">தமிழ் - Tamil</option>
														<option value="kn">ಕನ್ನಡ - Kannada</option>
														<option value="th">ภาษาไทย - Thai</option>
														<option value="ko">한국어 - Korean</option>
														<option value="ja">日本語 - Japanese</option>
														<option value="zh-cn">简体中文 - Simplified
															Chinese</option>
														<option value="zh-tw">繁體中文 - Traditional
															Chinese</option>
													</select>
													<div class="fv-plugins-message-container"></div>
												</div>
											</div>
											<!--end::Group-->
											<!--begin::Group-->
											<div class="form-group row fv-plugins-icon-container">
												<label class="col-form-label col-xl-3 col-lg-3">Time
													Zone</label>
												<div class="col-xl-9 col-lg-9">
													<select class="form-control form-control-lg form-control-solid"
														name="timezone">
														<option data-offset="-39600"
															value="International Date Line West">
															(GMT-11:00) International Date Line West
														</option>
														<option data-offset="-39600" value="Midway Island">(GMT-11:00)
															Midway
															Island</option>
														<option data-offset="-39600" value="Samoa">
															(GMT-11:00) Samoa</option>
														<option data-offset="-36000" value="Hawaii">
															(GMT-10:00) Hawaii</option>
														<option data-offset="-28800" value="Alaska">
															(GMT-08:00) Alaska</option>
														<option data-offset="-25200"
															value="Pacific Time (US &amp; Canada)">
															(GMT-07:00) Pacific Time (US &amp;
															Canada)</option>
														<option data-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana
														</option>
														<option data-offset="-25200" value="Arizona">(GMT-07:00) Arizona
														</option>
														<option data-offset="-21600"
															value="Mountain Time (US &amp; Canada)">
															(GMT-06:00) Mountain Time (US &amp;
															Canada)</option>
														<option data-offset="-21600" value="Chihuahua">(GMT-06:00)
															Chihuahua
														</option>
														<option data-offset="-21600" value="Mazatlan">(GMT-06:00)
															Mazatlan
														</option>
														<option data-offset="-21600" value="Saskatchewan">(GMT-06:00)
															Saskatchewan</option>
														<option data-offset="-21600" value="Central America">(GMT-06:00)
															Central America</option>
														<option data-offset="-18000"
															value="Central Time (US &amp; Canada)">
															(GMT-05:00) Central Time (US &amp;
															Canada)</option>
														<option data-offset="-18000" value="Guadalajara">(GMT-05:00)
															Guadalajara</option>
														<option data-offset="-18000" value="Mexico City">(GMT-05:00)
															Mexico
															City</option>
														<option data-offset="-18000" value="Monterrey">(GMT-05:00)
															Monterrey
														</option>
														<option data-offset="-18000" value="Bogota">
															(GMT-05:00) Bogota</option>
														<option data-offset="-18000" value="Lima">
															(GMT-05:00) Lima</option>
														<option data-offset="-18000" value="Quito">
															(GMT-05:00) Quito</option>
														<option data-offset="-14400"
															value="Eastern Time (US &amp; Canada)">
															(GMT-04:00) Eastern Time (US &amp;
															Canada)</option>
														<option data-offset="-14400" value="Indiana (East)">(GMT-04:00)
															Indiana (East)</option>
														<option data-offset="-14400" value="Caracas">(GMT-04:00) Caracas
														</option>
														<option data-offset="-14400" value="La Paz">
															(GMT-04:00) La Paz</option>
														<option data-offset="-14400" value="Georgetown">(GMT-04:00)
															Georgetown</option>
														<option data-offset="-10800" value="Atlantic Time (Canada)">
															(GMT-03:00) Atlantic Time (Canada)
														</option>
														<option data-offset="-10800" value="Santiago">(GMT-03:00)
															Santiago
														</option>
														<option data-offset="-10800" value="Brasilia">(GMT-03:00)
															Brasilia
														</option>
														<option data-offset="-10800" value="Buenos Aires">(GMT-03:00)
															Buenos
															Aires</option>
														<option data-offset="-9000" value="Newfoundland">(GMT-02:30)
															Newfoundland</option>
														<option data-offset="-7200" value="Greenland">(GMT-02:00)
															Greenland
														</option>
														<option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00)
															Mid-Atlantic</option>
														<option data-offset="-3600" value="Cape Verde Is.">(GMT-01:00)
															Cape
															Verde Is.</option>
														<option data-offset="0" value="Azores">(GMT)
															Azores</option>
														<option data-offset="0" value="Monrovia">
															(GMT) Monrovia</option>
														<option data-offset="0" value="UTC">(GMT)
															UTC</option>
														<option data-offset="3600" value="Dublin">
															(GMT+01:00) Dublin</option>
														<option data-offset="3600" value="Edinburgh">(GMT+01:00)
															Edinburgh
														</option>
														<option data-offset="3600" value="Lisbon">
															(GMT+01:00) Lisbon</option>
														<option data-offset="3600" value="London">
															(GMT+01:00) London</option>
														<option data-offset="3600" value="Casablanca">(GMT+01:00)
															Casablanca</option>
														<option data-offset="3600" value="West Central Africa">
															(GMT+01:00)
															West Central Africa</option>
														<option data-offset="7200" value="Belgrade">
															(GMT+02:00) Belgrade</option>
														<option data-offset="7200" value="Bratislava">(GMT+02:00)
															Bratislava</option>
														<option data-offset="7200" value="Budapest">
															(GMT+02:00) Budapest</option>
														<option data-offset="7200" value="Ljubljana">(GMT+02:00)
															Ljubljana
														</option>
														<option data-offset="7200" value="Prague">
															(GMT+02:00) Prague</option>
														<option data-offset="7200" value="Sarajevo">
															(GMT+02:00) Sarajevo</option>
														<option data-offset="7200" value="Skopje">
															(GMT+02:00) Skopje</option>
														<option data-offset="7200" value="Warsaw">
															(GMT+02:00) Warsaw</option>
														<option data-offset="7200" value="Zagreb">
															(GMT+02:00) Zagreb</option>
														<option data-offset="7200" value="Brussels">
															(GMT+02:00) Brussels</option>
														<option data-offset="7200" value="Copenhagen">(GMT+02:00)
															Copenhagen</option>
														<option data-offset="7200" value="Madrid">
															(GMT+02:00) Madrid</option>
														<option data-offset="7200" value="Paris">
															(GMT+02:00) Paris</option>
														<option data-offset="7200" value="Amsterdam">(GMT+02:00)
															Amsterdam
														</option>
														<option data-offset="7200" value="Berlin">
															(GMT+02:00) Berlin</option>
														<option data-offset="7200" value="Bern">
															(GMT+02:00) Bern</option>
														<option data-offset="7200" value="Rome">
															(GMT+02:00) Rome</option>
														<option data-offset="7200" value="Stockholm">(GMT+02:00)
															Stockholm
														</option>
														<option data-offset="7200" value="Vienna">
															(GMT+02:00) Vienna</option>
														<option data-offset="7200" value="Cairo">
															(GMT+02:00) Cairo</option>
														<option data-offset="7200" value="Harare">
															(GMT+02:00) Harare</option>
														<option data-offset="7200" value="Pretoria">
															(GMT+02:00) Pretoria</option>
														<option data-offset="10800" value="Bucharest">(GMT+03:00)
															Bucharest
														</option>
														<option data-offset="10800" value="Helsinki">(GMT+03:00)
															Helsinki
														</option>
														<option data-offset="10800" value="Kiev">
															(GMT+03:00) Kiev</option>
														<option data-offset="10800" value="Kyiv">
															(GMT+03:00) Kyiv</option>
														<option data-offset="10800" value="Riga">
															(GMT+03:00) Riga</option>
														<option data-offset="10800" value="Sofia">
															(GMT+03:00) Sofia</option>
														<option data-offset="10800" value="Tallinn">
															(GMT+03:00) Tallinn</option>
														<option data-offset="10800" value="Vilnius">
															(GMT+03:00) Vilnius</option>
														<option data-offset="10800" value="Athens">
															(GMT+03:00) Athens</option>
														<option data-offset="10800" value="Istanbul">(GMT+03:00)
															Istanbul
														</option>
														<option data-offset="10800" value="Minsk">
															(GMT+03:00) Minsk</option>
														<option data-offset="10800" value="Jerusalem">(GMT+03:00)
															Jerusalem
														</option>
														<option data-offset="10800" value="Moscow">
															(GMT+03:00) Moscow</option>
														<option data-offset="10800" value="St. Petersburg">(GMT+03:00)
															St.
															Petersburg</option>
														<option data-offset="10800" value="Volgograd">(GMT+03:00)
															Volgograd
														</option>
														<option data-offset="10800" value="Kuwait">
															(GMT+03:00) Kuwait</option>
														<option data-offset="10800" value="Riyadh">
															(GMT+03:00) Riyadh</option>
														<option data-offset="10800" value="Nairobi">
															(GMT+03:00) Nairobi</option>
														<option data-offset="10800" value="Baghdad">
															(GMT+03:00) Baghdad</option>
														<option data-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu
															Dhabi
														</option>
														<option data-offset="14400" value="Muscat">
															(GMT+04:00) Muscat</option>
														<option data-offset="14400" value="Baku">
															(GMT+04:00) Baku</option>
														<option data-offset="14400" value="Tbilisi">
															(GMT+04:00) Tbilisi</option>
														<option data-offset="14400" value="Yerevan">
															(GMT+04:00) Yerevan</option>
														<option data-offset="16200" value="Tehran">
															(GMT+04:30) Tehran</option>
														<option data-offset="16200" value="Kabul">
															(GMT+04:30) Kabul</option>
														<option data-offset="18000" value="Ekaterinburg">(GMT+05:00)
															Ekaterinburg</option>
														<option data-offset="18000" value="Islamabad">(GMT+05:00)
															Islamabad
														</option>
														<option data-offset="18000" value="Karachi">
															(GMT+05:00) Karachi</option>
														<option data-offset="18000" value="Tashkent">(GMT+05:00)
															Tashkent
														</option>
														<option data-offset="19800" value="Chennai">
															(GMT+05:30) Chennai</option>
														<option data-offset="19800" value="Kolkata">
															(GMT+05:30) Kolkata</option>
														<option data-offset="19800" value="Mumbai">
															(GMT+05:30) Mumbai</option>
														<option data-offset="19800" value="New Delhi">(GMT+05:30) New
															Delhi
														</option>
														<option data-offset="19800" value="Sri Jayawardenepura">
															(GMT+05:30)
															Sri Jayawardenepura</option>
														<option data-offset="20700" value="Kathmandu">(GMT+05:45)
															Kathmandu
														</option>
														<option data-offset="21600" value="Astana">
															(GMT+06:00) Astana</option>
														<option data-offset="21600" value="Dhaka">
															(GMT+06:00) Dhaka</option>
														<option data-offset="21600" value="Almaty">
															(GMT+06:00) Almaty</option>
														<option data-offset="21600" value="Urumqi">
															(GMT+06:00) Urumqi</option>
														<option data-offset="23400" value="Rangoon">
															(GMT+06:30) Rangoon</option>
														<option data-offset="25200" value="Novosibirsk">(GMT+07:00)
															Novosibirsk</option>
														<option data-offset="25200" value="Bangkok">
															(GMT+07:00) Bangkok</option>
														<option data-offset="25200" value="Hanoi">
															(GMT+07:00) Hanoi</option>
														<option data-offset="25200" value="Jakarta">
															(GMT+07:00) Jakarta</option>
														<option data-offset="25200" value="Krasnoyarsk">(GMT+07:00)
															Krasnoyarsk</option>
														<option data-offset="28800" value="Beijing">
															(GMT+08:00) Beijing</option>
														<option data-offset="28800" value="Chongqing">(GMT+08:00)
															Chongqing
														</option>
														<option data-offset="28800" value="Hong Kong">(GMT+08:00) Hong
															Kong
														</option>
														<option data-offset="28800" value="Kuala Lumpur">(GMT+08:00)
															Kuala
															Lumpur</option>
														<option data-offset="28800" value="Singapore">(GMT+08:00)
															Singapore
														</option>
														<option data-offset="28800" value="Taipei">
															(GMT+08:00) Taipei</option>
														<option data-offset="28800" value="Perth">
															(GMT+08:00) Perth</option>
														<option data-offset="28800" value="Irkutsk">
															(GMT+08:00) Irkutsk</option>
														<option data-offset="28800" value="Ulaan Bataar">(GMT+08:00)
															Ulaan
															Bataar</option>
														<option data-offset="32400" value="Seoul">
															(GMT+09:00) Seoul</option>
														<option data-offset="32400" value="Osaka">
															(GMT+09:00) Osaka</option>
														<option data-offset="32400" value="Sapporo">
															(GMT+09:00) Sapporo</option>
														<option data-offset="32400" value="Tokyo">
															(GMT+09:00) Tokyo</option>
														<option data-offset="32400" value="Yakutsk">
															(GMT+09:00) Yakutsk</option>
														<option data-offset="34200" value="Darwin">
															(GMT+09:30) Darwin</option>
														<option data-offset="34200" value="Adelaide">(GMT+09:30)
															Adelaide
														</option>
														<option data-offset="36000" value="Canberra">(GMT+10:00)
															Canberra
														</option>
														<option data-offset="36000" value="Melbourne">(GMT+10:00)
															Melbourne
														</option>
														<option data-offset="36000" value="Sydney">
															(GMT+10:00) Sydney</option>
														<option data-offset="36000" value="Brisbane">(GMT+10:00)
															Brisbane
														</option>
														<option data-offset="36000" value="Hobart">
															(GMT+10:00) Hobart</option>
														<option data-offset="36000" value="Vladivostok">(GMT+10:00)
															Vladivostok</option>
														<option data-offset="36000" value="Guam">
															(GMT+10:00) Guam</option>
														<option data-offset="36000" value="Port Moresby">(GMT+10:00)
															Port
															Moresby</option>
														<option data-offset="36000" value="Solomon Is.">(GMT+10:00)
															Solomon
															Is.</option>
														<option data-offset="39600" value="Magadan">
															(GMT+11:00) Magadan</option>
														<option data-offset="39600" value="New Caledonia">(GMT+11:00)
															New
															Caledonia</option>
														<option data-offset="43200" value="Fiji">
															(GMT+12:00) Fiji</option>
														<option data-offset="43200" value="Kamchatka">(GMT+12:00)
															Kamchatka
														</option>
														<option data-offset="43200" value="Marshall Is.">(GMT+12:00)
															Marshall Is.</option>
														<option data-offset="43200" value="Auckland">(GMT+12:00)
															Auckland
														</option>
														<option data-offset="43200" value="Wellington">(GMT+12:00)
															Wellington</option>
														<option data-offset="46800" value="Nuku'alofa">(GMT+13:00)
															Nuku'alofa</option>
													</select>
													<div class="fv-plugins-message-container"></div>
												</div>
											</div>
											<!--end::Group-->
											<!--begin::Group-->
											<div class="form-group row fv-plugins-icon-container has-success">
												<label class="col-form-label col-xl-3 col-lg-3">Communication</label>
												<div class="col-xl-9 col-lg-9 col-form-label">
													<div class="checkbox-inline">
														<label class="checkbox">
															<input name="communication" type="checkbox">
															<span></span>Email</label>
														<label class="checkbox">
															<input name="communication" type="checkbox">
															<span></span>SMS</label>
														<label class="checkbox">
															<input name="communication" type="checkbox">
															<span></span>Phone</label>
														<label class="checkbox">
															<input name="communication" type="checkbox">
															<span></span>Mobile</label>
													</div>
													<div class="fv-plugins-message-container"></div>
												</div>
											</div>
											<!--end::Group-->

											<a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-toggle="modal"
												data-target="#kt_modal_two_factor_authentication">Enable
												Two-factor Authentication</a>

											<div class="separator separator-dashed my-10"></div>
											<h5 class="text-dark font-weight-bold mb-10">
												Account Settings</h5>
											<!--begin::Group-->
											<div class="form-group row">
												<label class="col-form-label col-xl-3 col-lg-3">Login
													verification</label>
												<div class="col-xl-9 col-lg-9">
													<button type="button"
														class="btn btn-light-primary font-weight-bold btn-sm">Setup
														login verification</button>
													<div class="form-text text-muted mt-3">After you
														log in, you will be asked for additional
														information to confirm your identity and
														protect your account from being compromised.
														<a href="#">Learn more</a>.
													</div>
												</div>
											</div>
											<!--end::Group-->
											<!--begin::Group-->
											<div class="form-group row">
												<label class="col-form-label col-xl-3 col-lg-3">Password
													reset verification</label>
												<div class="col-xl-9 col-lg-9">
													<div class="checkbox-inline">
														<label class="checkbox mb-2">
															<input type="checkbox">
															<span></span>Require personal
															information to reset your
															password.</label>
													</div>
													<div class="form-text text-muted">For extra
														security, this requires you to confirm your
														email or phone number when you reset your
														password.
														<a href="#" class="font-weight-bold">Learn
															more</a>.
													</div>
												</div>
											</div>
											<!--end::Group-->
											<!--begin::Group-->
											<div class="form-group row mt-10">
												<label class="col-xl-3 col-lg-3"></label>
												<div class="col-xl-9 col-lg-9">
													<button type="button"
														class="btn btn-light-danger font-weight-bold btn-sm">Deactivate
														your account ?</button>
												</div>
											</div>
											<!--end::Group-->
										</div>
									</div>


								</div>
								<div class="tab-pane fade" id="address">
									<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
										<div class="col-xl-9">
											<h5 class="mb-10 font-weight-bold text-dark">Setup Your
												Address</h5>
											<!--begin::Group-->
											<div class="form-group fv-plugins-icon-container">
												<label>Address Line 1</label>
												<input type="text"
													class="form-control form-control-solid form-control-lg"
													name="address1" placeholder="Address Line 1" value="Address Line 1">
												<span class="form-text text-muted">Please enter your
													Address.</span>
												<div class="fv-plugins-message-container"></div>
											</div>
											<!--end::Group-->
											<!--begin::Group-->
											<div class="form-group">
												<label>Address Line 2</label>
												<input type="text"
													class="form-control form-control-solid form-control-lg"
													name="address2" placeholder="Address Line 2" value="Address Line 2">
												<span class="form-text text-muted">Please enter your
													Address.</span>
											</div>
											<!--begin::Row-->
											<div class="row">
												<div class="col-xl-6">
													<!--begin::Group-->
													<div class="form-group fv-plugins-icon-container">
														<label>Postcode</label>
														<input type="text"
															class="form-control form-control-solid form-control-lg"
															name="postcode" placeholder="Postcode" value="3000">
														<span class="form-text text-muted">Please
															enter your Postcode.</span>
														<div class="fv-plugins-message-container"></div>
													</div>
												</div>
												<!--end::Group-->
												<!--begin::Group-->
												<div class="col-xl-6">
													<div class="form-group fv-plugins-icon-container">
														<label>City</label>
														<input type="text"
															class="form-control form-control-solid form-control-lg"
															name="city" placeholder="City" value="Melbourne">
														<span class="form-text text-muted">Please
															enter your City.</span>
														<div class="fv-plugins-message-container"></div>
													</div>
												</div>
												<!--end::Group-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="row">
												<div class="col-xl-6">
													<!--begin::Group-->
													<div class="form-group fv-plugins-icon-container">
														<label>State</label>
														<input type="text"
															class="form-control form-control-solid form-control-lg"
															name="state" placeholder="State" value="VIC">
														<span class="form-text text-muted">Please
															enter your State.</span>
														<div class="fv-plugins-message-container"></div>
													</div>
													<!--end::Group-->
												</div>
												<div class="col-xl-6">
													<!--begin::Group-->
													<div class="form-group fv-plugins-icon-container">
														<label>Country</label>
														<select name="country"
															class="form-control form-control-solid form-control-lg">
															<option value="">Select</option>
															<option value="AF">Afghanistan</option>
															<option value="AX">Åland Islands
															</option>
															<option value="AL">Albania</option>
															<option value="DZ">Algeria</option>
															<option value="AS">American Samoa
															</option>
															<option value="AD">Andorra</option>
															<option value="AO">Angola</option>
															<option value="AI">Anguilla</option>
															<option value="AQ">Antarctica</option>
															<option value="AG">Antigua and Barbuda
															</option>
															<option value="AR">Argentina</option>
															<option value="AM">Armenia</option>
															<option value="AW">Aruba</option>
															<option value="AU" selected="selected">
																Australia</option>
															<option value="AT">Austria</option>
															<option value="AZ">Azerbaijan</option>
															<option value="BS">Bahamas</option>
															<option value="BH">Bahrain</option>
															<option value="BD">Bangladesh</option>
															<option value="BB">Barbados</option>
															<option value="BY">Belarus</option>
															<option value="BE">Belgium</option>
															<option value="BZ">Belize</option>
															<option value="BJ">Benin</option>
															<option value="BM">Bermuda</option>
															<option value="BT">Bhutan</option>
															<option value="BO">Bolivia,
																Plurinational State of</option>
															<option value="BQ">Bonaire, Sint
																Eustatius and Saba</option>
															<option value="BA">Bosnia and
																Herzegovina</option>
															<option value="BW">Botswana</option>
															<option value="BV">Bouvet Island
															</option>
															<option value="BR">Brazil</option>
															<option value="IO">British Indian Ocean
																Territory</option>
															<option value="BN">Brunei Darussalam
															</option>
															<option value="BG">Bulgaria</option>
															<option value="BF">Burkina Faso</option>
															<option value="BI">Burundi</option>
															<option value="KH">Cambodia</option>
															<option value="CM">Cameroon</option>
															<option value="CA">Canada</option>
															<option value="CV">Cape Verde</option>
															<option value="KY">Cayman Islands
															</option>
															<option value="CF">Central African
																Republic</option>
															<option value="TD">Chad</option>
															<option value="CL">Chile</option>
															<option value="CN">China</option>
															<option value="CX">Christmas Island
															</option>
															<option value="CC">Cocos (Keeling)
																Islands</option>
															<option value="CO">Colombia</option>
															<option value="KM">Comoros</option>
															<option value="CG">Congo</option>
															<option value="CD">Congo, the Democratic
																Republic of the</option>
															<option value="CK">Cook Islands</option>
															<option value="CR">Costa Rica</option>
															<option value="CI">Côte d'Ivoire
															</option>
															<option value="HR">Croatia</option>
															<option value="CU">Cuba</option>
															<option value="CW">Curaçao</option>
															<option value="CY">Cyprus</option>
															<option value="CZ">Czech Republic
															</option>
															<option value="DK">Denmark</option>
															<option value="DJ">Djibouti</option>
															<option value="DM">Dominica</option>
															<option value="DO">Dominican Republic
															</option>
															<option value="EC">Ecuador</option>
															<option value="EG">Egypt</option>
															<option value="SV">El Salvador</option>
															<option value="GQ">Equatorial Guinea
															</option>
															<option value="ER">Eritrea</option>
															<option value="EE">Estonia</option>
															<option value="ET">Ethiopia</option>
															<option value="FK">Falkland Islands
																(Malvinas)</option>
															<option value="FO">Faroe Islands
															</option>
															<option value="FJ">Fiji</option>
															<option value="FI">Finland</option>
															<option value="FR">France</option>
															<option value="GF">French Guiana
															</option>
															<option value="PF">French Polynesia
															</option>
															<option value="TF">French Southern
																Territories</option>
															<option value="GA">Gabon</option>
															<option value="GM">Gambia</option>
															<option value="GE">Georgia</option>
															<option value="DE">Germany</option>
															<option value="GH">Ghana</option>
															<option value="GI">Gibraltar</option>
															<option value="GR">Greece</option>
															<option value="GL">Greenland</option>
															<option value="GD">Grenada</option>
															<option value="GP">Guadeloupe</option>
															<option value="GU">Guam</option>
															<option value="GT">Guatemala</option>
															<option value="GG">Guernsey</option>
															<option value="GN">Guinea</option>
															<option value="GW">Guinea-Bissau
															</option>
															<option value="GY">Guyana</option>
															<option value="HT">Haiti</option>
															<option value="HM">Heard Island and
																McDonald Islands</option>
															<option value="VA">Holy See (Vatican
																City State)</option>
															<option value="HN">Honduras</option>
															<option value="HK">Hong Kong</option>
															<option value="HU">Hungary</option>
															<option value="IS">Iceland</option>
															<option value="IN">India</option>
															<option value="ID">Indonesia</option>
															<option value="IR">Iran, Islamic
																Republic of</option>
															<option value="IQ">Iraq</option>
															<option value="IE">Ireland</option>
															<option value="IM">Isle of Man</option>
															<option value="IL">Israel</option>
															<option value="IT">Italy</option>
															<option value="JM">Jamaica</option>
															<option value="JP">Japan</option>
															<option value="JE">Jersey</option>
															<option value="JO">Jordan</option>
															<option value="KZ">Kazakhstan</option>
															<option value="KE">Kenya</option>
															<option value="KI">Kiribati</option>
															<option value="KP">Korea, Democratic
																People's Republic of</option>
															<option value="KR">Korea, Republic of
															</option>
															<option value="KW">Kuwait</option>
															<option value="KG">Kyrgyzstan</option>
															<option value="LA">Lao People's
																Democratic Republic</option>
															<option value="LV">Latvia</option>
															<option value="LB">Lebanon</option>
															<option value="LS">Lesotho</option>
															<option value="LR">Liberia</option>
															<option value="LY">Libya</option>
															<option value="LI">Liechtenstein
															</option>
															<option value="LT">Lithuania</option>
															<option value="LU">Luxembourg</option>
															<option value="MO">Macao</option>
															<option value="MK">Macedonia, the former
																Yugoslav Republic of</option>
															<option value="MG">Madagascar</option>
															<option value="MW">Malawi</option>
															<option value="MY">Malaysia</option>
															<option value="MV">Maldives</option>
															<option value="ML">Mali</option>
															<option value="MT">Malta</option>
															<option value="MH">Marshall Islands
															</option>
															<option value="MQ">Martinique</option>
															<option value="MR">Mauritania</option>
															<option value="MU">Mauritius</option>
															<option value="YT">Mayotte</option>
															<option value="MX">Mexico</option>
															<option value="FM">Micronesia, Federated
																States of</option>
															<option value="MD">Moldova, Republic of
															</option>
															<option value="MC">Monaco</option>
															<option value="MN">Mongolia</option>
															<option value="ME">Montenegro</option>
															<option value="MS">Montserrat</option>
															<option value="MA">Morocco</option>
															<option value="MZ">Mozambique</option>
															<option value="MM">Myanmar</option>
															<option value="NA">Namibia</option>
															<option value="NR">Nauru</option>
															<option value="NP">Nepal</option>
															<option value="NL">Netherlands</option>
															<option value="NC">New Caledonia
															</option>
															<option value="NZ">New Zealand</option>
															<option value="NI">Nicaragua</option>
															<option value="NE">Niger</option>
															<option value="NG">Nigeria</option>
															<option value="NU">Niue</option>
															<option value="NF">Norfolk Island
															</option>
															<option value="MP">Northern Mariana
																Islands</option>
															<option value="NO">Norway</option>
															<option value="OM">Oman</option>
															<option value="PK">Pakistan</option>
															<option value="PW">Palau</option>
															<option value="PS">Palestinian
																Territory, Occupied</option>
															<option value="PA">Panama</option>
															<option value="PG">Papua New Guinea
															</option>
															<option value="PY">Paraguay</option>
															<option value="PE">Peru</option>
															<option value="PH">Philippines</option>
															<option value="PN">Pitcairn</option>
															<option value="PL">Poland</option>
															<option value="PT">Portugal</option>
															<option value="PR">Puerto Rico</option>
															<option value="QA">Qatar</option>
															<option value="RE">Réunion</option>
															<option value="RO">Romania</option>
															<option value="RU">Russian Federation
															</option>
															<option value="RW">Rwanda</option>
															<option value="BL">Saint Barthélemy
															</option>
															<option value="SH">Saint Helena,
																Ascension and Tristan da Cunha
															</option>
															<option value="KN">Saint Kitts and Nevis
															</option>
															<option value="LC">Saint Lucia</option>
															<option value="MF">Saint Martin (French
																part)</option>
															<option value="PM">Saint Pierre and
																Miquelon</option>
															<option value="VC">Saint Vincent and the
																Grenadines</option>
															<option value="WS">Samoa</option>
															<option value="SM">San Marino</option>
															<option value="ST">Sao Tome and Principe
															</option>
															<option value="SA">Saudi Arabia</option>
															<option value="SN">Senegal</option>
															<option value="RS">Serbia</option>
															<option value="SC">Seychelles</option>
															<option value="SL">Sierra Leone</option>
															<option value="SG">Singapore</option>
															<option value="SX">Sint Maarten (Dutch
																part)</option>
															<option value="SK">Slovakia</option>
															<option value="SI">Slovenia</option>
															<option value="SB">Solomon Islands
															</option>
															<option value="SO">Somalia</option>
															<option value="ZA">South Africa</option>
															<option value="GS">South Georgia and the
																South Sandwich Islands</option>
															<option value="SS">South Sudan</option>
															<option value="ES">Spain</option>
															<option value="LK">Sri Lanka</option>
															<option value="SD">Sudan</option>
															<option value="SR">Suriname</option>
															<option value="SJ">Svalbard and Jan
																Mayen</option>
															<option value="SZ">Swaziland</option>
															<option value="SE">Sweden</option>
															<option value="CH">Switzerland</option>
															<option value="SY">Syrian Arab Republic
															</option>
															<option value="TW">Taiwan, Province of
																China</option>
															<option value="TJ">Tajikistan</option>
															<option value="TZ">Tanzania, United
																Republic of</option>
															<option value="TH">Thailand</option>
															<option value="TL">Timor-Leste</option>
															<option value="TG">Togo</option>
															<option value="TK">Tokelau</option>
															<option value="TO">Tonga</option>
															<option value="TT">Trinidad and Tobago
															</option>
															<option value="TN">Tunisia</option>
															<option value="TR">Turkey</option>
															<option value="TM">Turkmenistan</option>
															<option value="TC">Turks and Caicos
																Islands</option>
															<option value="TV">Tuvalu</option>
															<option value="UG">Uganda</option>
															<option value="UA">Ukraine</option>
															<option value="AE">United Arab Emirates
															</option>
															<option value="GB">United Kingdom
															</option>
															<option value="US">United States
															</option>
															<option value="UM">United States Minor
																Outlying Islands</option>
															<option value="UY">Uruguay</option>
															<option value="UZ">Uzbekistan</option>
															<option value="VU">Vanuatu</option>
															<option value="VE">Venezuela, Bolivarian
																Republic of</option>
															<option value="VN">Viet Nam</option>
															<option value="VG">Virgin Islands,
																British</option>
															<option value="VI">Virgin Islands, U.S.
															</option>
															<option value="WF">Wallis and Futuna
															</option>
															<option value="EH">Western Sahara
															</option>
															<option value="YE">Yemen</option>
															<option value="ZM">Zambia</option>
															<option value="ZW">Zimbabwe</option>
														</select>
														<div class="fv-plugins-message-container"></div>
													</div>
													<!--end::Group-->
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="submission">
									<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
										<div class="col-xl-9">
											<h5 class="mb-10 font-weight-bold text-dark">Review your
												Details and Submit</h5>
											<!--begin::Item-->
											<div class="border-bottom mb-5 pb-5">
												<div class="font-weight-bolder mb-3">Your Account
													Details:</div>
												<div class="line-height-xl">John Wick
													<br>Phone: +61412345678
													<br>Email: johnwick@reeves.com
												</div>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="border-bottom mb-5 pb-5">
												<div class="font-weight-bolder mb-3">Your Address
													Details:</div>
												<div class="line-height-xl">Address Line 1
													<br>Address Line 2
													<br>Melbourne 3000, VIC, Australia
												</div>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div>
												<div class="font-weight-bolder">Payment Details:
												</div>
												<div class="line-height-xl">Card Number: xxxx xxxx
													xxxx 1111
													<br>Card Name: John Wick
													<br>Card Expiry: 01/21
												</div>
											</div>
											<!--end::Item-->
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="preferences">
									<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
										<div class="col-xl-9">
											Global preferences
										</div>
									</div>

								</div>
								<div class="tab-pane fade" id="invite">
									<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
										<div class="col-xl-9">
											Invite friends
										</div>
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
		<!--begin::Modal - Two-factor authentication-->
		<div class="modal fade" id="kt_modal_two_factor_authentication" tabindex="-1" aria-hidden="true">
			<!--begin::Modal header-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header flex-stack">
						<!--begin::Title-->
						<h2>Choose An Authentication Method</h2>
						<!--end::Title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
									width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
										fill="#000000">
										<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
										<rect fill="#000000" opacity="0.5"
											transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
											x="0" y="7" width="16" height="2" rx="1" />
									</g>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
						<!--begin::Options-->
						<div data-kt-element="options">
							<!--begin::Notice-->
							<p class="text-gray-400 fs-5 fw-bold mb-10">In addition to your username and password,
								you’ll have to enter a code (delivered via app or SMS) to log into your account.</p>
							<!--end::Notice-->
							<!--begin::Wrapper-->
							<div class="pb-10">
								<!--begin::Option-->
								<input type="radio" class="btn-check" name="auth_option" value="apps" checked="checked"
									id="kt_modal_two_factor_authentication_option_1" />
								<label
									class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5"
									for="kt_modal_two_factor_authentication_option_1">
									<!--begin::Svg Icon | path: icons/duotone/Media/Cog.svg-->
									<span class="svg-icon svg-icon-4x me-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
												d="M11.9999 2C10.8954 2 9.99994 2.89543 9.99994 4C9.99994 4.14834 9.89932 4.27718 9.75691 4.3187C9.19509 4.48248 8.65883 4.70622 8.15552 4.98253C8.02513 5.05412 7.86242 5.03411 7.75724 4.92893C6.97619 4.14788 5.70986 4.14788 4.92881 4.92893C4.14776 5.70998 4.14776 6.97631 4.92881 7.75736C5.03399 7.86254 5.05399 8.02525 4.98241 8.15564C4.70611 8.65893 4.48238 9.19516 4.3186 9.75695C4.27708 9.89937 4.14822 10 3.99988 10C2.89531 10 1.99988 10.8954 1.99988 12C1.99988 13.1046 2.89531 14 3.99988 14C4.14822 14 4.27708 14.1006 4.3186 14.2431C4.48238 14.8048 4.70611 15.3411 4.98241 15.8444C5.05399 15.9747 5.03399 16.1375 4.92881 16.2426C4.14776 17.0237 4.14776 18.29 4.92881 19.0711C5.70986 19.8521 6.97619 19.8521 7.75724 19.0711C7.86242 18.9659 8.02513 18.9459 8.15552 19.0175C8.65883 19.2938 9.19509 19.5175 9.75691 19.6813C9.89932 19.7228 9.99994 19.8517 9.99994 20C9.99994 21.1046 10.8954 22 11.9999 22C13.1045 22 13.9999 21.1046 13.9999 20C13.9999 19.8516 14.1006 19.7228 14.243 19.6813C14.8048 19.5175 15.341 19.2938 15.8442 19.0175C15.9746 18.9459 16.1373 18.9659 16.2425 19.0711C17.0236 19.8521 18.2899 19.8521 19.0709 19.0711C19.852 18.29 19.852 17.0237 19.0709 16.2426C18.9658 16.1375 18.9458 15.9747 19.0173 15.8444C19.2936 15.3411 19.5174 14.8048 19.6812 14.2431C19.7227 14.1006 19.8515 14 19.9999 14C21.1044 14 21.9999 13.1046 21.9999 12C21.9999 10.8954 21.1044 10 19.9999 10C19.8515 10 19.7227 9.89937 19.6812 9.75695C19.5174 9.19516 19.2936 8.65893 19.0173 8.15564C18.9458 8.02525 18.9658 7.86254 19.0709 7.75736C19.852 6.97631 19.852 5.70998 19.0709 4.92893C18.2899 4.14788 17.0236 4.14788 16.2425 4.92893C16.1373 5.03411 15.9746 5.05412 15.8442 4.98253C15.341 4.70625 14.8048 4.48252 14.243 4.31875C14.1006 4.27722 13.9999 4.14836 13.9999 4C13.9999 2.89543 13.1045 2 11.9999 2ZM12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
												fill="#12131A" />
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
												fill="#12131A" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<span class="d-block fw-bold text-start">
										<span class="text-dark fw-bolder d-block fs-3">Authenticator Apps</span>
										<span class="text-gray-400 fw-bold fs-6">Get codes from an app like Google
											Authenticator, Microsoft Authenticator, Authy or 1Password.</span>
									</span>
								</label>
								<!--end::Option-->
								<!--begin::Option-->
								<input type="radio" class="btn-check" name="auth_option" value="sms"
									id="kt_modal_two_factor_authentication_option_2" />
								<label
									class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center"
									for="kt_modal_two_factor_authentication_option_2">
									<!--begin::Svg Icon | path: icons/duotone/Contacts/Comment.svg-->
									<span class="svg-icon svg-icon-4x me-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
												d="M5.69477 2.48932C4.00472 2.74648 2.66565 3.98488 2.37546 5.66957C2.17321 6.84372 2 8.33525 2 10C2 11.6647 2.17321 13.1563 2.37546 14.3304C2.62456 15.7766 3.64656 16.8939 5 17.344V20.7476C5 21.5219 5.84211 22.0024 6.50873 21.6085L12.6241 17.9949C14.8384 17.9586 16.8238 17.7361 18.3052 17.5107C19.9953 17.2535 21.3344 16.0151 21.6245 14.3304C21.8268 13.1563 22 11.6647 22 10C22 8.33525 21.8268 6.84372 21.6245 5.66957C21.3344 3.98488 19.9953 2.74648 18.3052 2.48932C16.6859 2.24293 14.4644 2 12 2C9.53559 2 7.31411 2.24293 5.69477 2.48932Z"
												fill="#191213" />
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M7 7C6.44772 7 6 7.44772 6 8C6 8.55228 6.44772 9 7 9H17C17.5523 9 18 8.55228 18 8C18 7.44772 17.5523 7 17 7H7ZM7 11C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H11C11.5523 13 12 12.5523 12 12C12 11.4477 11.5523 11 11 11H7Z"
												fill="#121319" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<span class="d-block fw-bold text-start">
										<span class="text-dark fw-bolder d-block fs-3">SMS</span>
										<span class="text-gray-400 fw-bold fs-6">We will send a code via SMS if you need
											to use your backup login method.</span>
									</span>
								</label>
								<!--end::Option-->
							</div>
							<!--end::Options-->
							<!--begin::Action-->
							<button class="btn btn-primary w-100" data-kt-element="options-select">Continue</button>
							<!--end::Action-->
						</div>
						<!--end::Options-->
						<!--begin::Apps-->
						<div class="d-none" data-kt-element="apps">
							<!--begin::Heading-->
							<h3 class="text-dark fw-bolder mb-7">Authenticator Apps</h3>
							<!--end::Heading-->
							<!--begin::Description-->
							<div class="text-gray-500 fw-bold fs-6 mb-10">Using an authenticator app like
								<a href="https://support.google.com/accounts/answer/1066447?hl=en"
									target="_blank">Google Authenticator</a>,
								<a href="https://www.microsoft.com/en-us/account/authenticator"
									target="_blank">Microsoft Authenticator</a>,
								<a href="https://authy.com/download/" target="_blank">Authy</a>, or
								<a href="https://support.1password.com/one-time-passwords/"
									target="_blank">1Password</a>, scan the QR code. It will generate a 6 digit code for
								you to enter below.
								<!--begin::QR code image-->
								<div class="pt-5 text-center">
									<img src="assets/media/misc/qr.png" alt="" class="mw-150px" />
								</div>
								<!--end::QR code image-->
							</div>
							<!--end::Description-->
							<!--begin::Notice-->
							<div
								class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/stockholm/Code/Warning-1-circle.svg-->
								<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
										viewBox="0 0 24 24" version="1.1">
										<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
										<rect fill="#000000" x="11" y="7" width="2" height="8" rx="1" />
										<rect fill="#000000" x="11" y="16" width="2" height="2" rx="1" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-grow-1">
									<!--begin::Content-->
									<div class="fw-bold">
										<div class="fs-6 text-gray-600">If you having trouble using the QR code, select
											manual entry on your app, and enter your username and the code:
											<div class="fw-bolder text-dark pt-2">KBSS3QDAAFUMCBY63YCKI5WSSVACUMPN</div>
										</div>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Notice-->
							<!--begin::Form-->
							<form data-kt-element="apps-form" class="form" action="#">
								<!--begin::Input group-->
								<div class="mb-10 fv-row">
									<input type="text" class="form-control form-control-lg form-control-solid"
										placeholder="Enter authentication code" name="code" />
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="d-flex flex-center">
									<button type="reset" data-kt-element="apps-cancel"
										class="btn btn-white me-3">Cancel</button>
									<button type="submit" data-kt-element="apps-submit" class="btn btn-primary">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
											<span
												class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Options-->
						<!--begin::SMS-->
						<div class="d-none" data-kt-element="sms">
							<!--begin::Heading-->
							<h3 class="text-dark fw-bolder fs-3 mb-5">SMS: Verify Your Mobile Number</h3>
							<!--end::Heading-->
							<!--begin::Notice-->
							<div class="text-gray-400 fw-bold mb-10">Enter your mobile phone number with country code
								and we will send you a verification code upon request.</div>
							<!--end::Notice-->
							<!--begin::Form-->
							<form data-kt-element="sms-form" class="form" action="#">
								<!--begin::Input group-->
								<div class="mb-10 fv-row">
									<input type="text" class="form-control form-control-lg form-control-solid"
										placeholder="Mobile number with country code..." name="mobile" />
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="d-flex flex-center">
									<button type="reset" data-kt-element="sms-cancel"
										class="btn btn-white me-3">Cancel</button>
									<button type="submit" data-kt-element="sms-submit" class="btn btn-primary">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait...
											<span
												class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::SMS-->
					</div>
					<!--begin::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal header-->
		</div>
		<!--end::Modal - Two-factor authentication-->
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
	<!-- <script src="../users/assets/js/pages/custom/user/add-user.js"></script> -->
	<script src="../users/assets/js/two-factor-authentication.js"></script>

	<script src="../users/assets/js/custom.js"></script>
@endsection