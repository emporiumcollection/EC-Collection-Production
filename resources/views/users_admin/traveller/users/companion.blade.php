@extends('users_admin.traveller.layout.app')
@section('content')
							<div class="mt-15">
								<div class="mt-15">
								<div class="row align-items-center">
									<div class="col-md-12">
										<h2 class="text-dark font-weight-bold font-saol">Companion </h2>
										<p>
											Intro text
										</p>
									</div>
								</div>
								<div class="mt-13">
									<ul class="nav nav-tabs nav-profiletabs">
										<li class="nav-item ">
											<a href="#addNew" class="nav-link active" data-toggle="tab">
												Add new Companion</a>
										</li>
										<li class="nav-item">
											<a href="#myCompanion" class="nav-link" data-toggle="tab">
												My Companions
											</a>
										</li>
									</ul>

									<div class="tab-content pt-7 profile-tabs">
										<div class="tab-pane fade show active" id="addNew">
											<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
												<div class="col-xl-9">
													<h5 class="text-dark font-weight-bold mb-10">
														Personal Informations
													</h5>
													<form method="post" action="/users/addcompanion">
												<!--begin::Group-->

												<div class="form-group row">
													<label class="col-xl-3 col-lg-3 col-form-label text-left">
														Avatar
													</label>
													<div class="col-lg-9 col-xl-9">
														<div class="image-input image-input-outline"
															id="kt_user_add_avatar">
															<div class="image-input-wrapper"
																style="background-image: url({{ asset('assets/users/assets/media/users/100_6.jpg')}})">
															</div>
															<label
																class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
																data-action="change" data-toggle="tooltip"
																title="" data-original-title="Change avatar">
																<i class="fa fa-pen icon-sm text-muted"></i>
																<input type="file" name="profile_avatar"
																	accept=".png, .jpg, .jpeg">
																<input type="hidden"
																	name="profile_avatar_remove">
															</label>
															<span
																class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
																data-action="cancel" data-toggle="tooltip"
																title="" data-original-title="Cancel avatar">
																<i
																	class="ki ki-bold-close icon-xs text-muted"></i>
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
														<input
															class="form-control form-control-solid form-control-lg"
															name="first_name" type="text" value="">

													</div>
												</div>
												<!--end::Group-->
												<!--begin::Group-->
												<div class="form-group row fv-plugins-icon-container">
													<label class="col-xl-3 col-lg-3 col-form-label">Last
														Name</label>
													<div class="col-lg-9 col-xl-9">
														<input
															class="form-control form-control-solid form-control-lg"
															name="last_name" type="text" value="">

													</div>
												</div>
												<!--end::Group-->
												<!--begin::Group-->
												<div class="form-group row fv-plugins-icon-container">
													<label class="col-xl-3 col-lg-3 col-form-label">Email
														Address</label>
													<div class="col-lg-9 col-xl-9">
														<div
															class="input-group input-group-solid input-group-lg">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-at"></i>
																</span>
															</div>
															<input type="text"
																class="form-control form-control-solid form-control-lg"
																name="email" value="">
														</div>
													</div>
												</div>
												<!--end::Group-->
												<!--begin::Group-->
												<div class="form-group row fv-plugins-icon-container">
													<label class="col-xl-3 col-lg-3 col-form-label">
														Phone Number
													</label>
													<div class="col-lg-9 col-xl-9">
														<div
															class="input-group input-group-solid input-group-lg">
															<div class="input-group-prepend">
																<span class="input-group-text">
																	<i class="la la-phone"></i>
																</span>
															</div>
															<input type="text"
																class="form-control form-control-solid form-control-lg"
																name="phone_number" value="5678967456"
																placeholder="Phone Number">
														</div>
													</div>
												</div>
												<!--end::Group-->
												<!--begin::Group-->
												<div class="form-group row fv-plugins-icon-container">
													<label class="col-xl-3 col-lg-3 col-form-label">
														I Am
													</label>
													<div class="col-lg-9 col-xl-9">
														<select name="gender" class="form-control">
															<option value="1">Male</option>
															<option value="2">Female</option>
														</select>
													</div>
												</div>
												<!--end::Group-->
												<!--begin::Group-->
												<div class="form-group row fv-plugins-icon-container">
													<label class="col-xl-3 col-lg-3 col-form-label">
														Preferred Language
													</label>
													<div class="col-lg-9 col-xl-9">
														<select class="form-control" name="preferred_language">
															<option value="en">English</option>
															<option value="de">Deutsch</option>
															<option value="es">Espanol</option>
															<option value="fr">Francais</option>
															<option value="it">Italiano</option>
															<option value="nl">Nederlands</option>
														</select>

														<span class="form-text text-muted">
															We'll send you communication in this language.
														</span>
													</div>
												</div>
												<!--end::Group-->
												<!--begin::Group-->
												<div class="form-group row fv-plugins-icon-container">
													<label class="col-xl-3 col-lg-3 col-form-label">
														Preferred Currency
													</label>
													<div class="col-lg-9 col-xl-9">
														<select class="form-control" id="preferred_currency"
															name="preferred_currency">
															<option value="OMR">
																OMR-﷼
															</option>

															<option value="BHD">
																BHD-.د.ب
															</option>

															<option value="KWD">
																KWD-د.ك
															</option>

															<option value="USD">
																USD-$
															</option>

															<option value="CHF">
																CHF-CHF
															</option>

															<option value="EUR">
																EUR-€
															</option>

															<option value="KYD">
																KYD-$
															</option>

															<option value="GIP">
																GIP-£
															</option>

															<option value="GBP">
																GBP-£
															</option>

															<option value="JOD">
																JOD-JD
															</option>

															<option value="FJD">
																FJD-$
															</option>

															<option value="AWG">
																AWG-ƒ
															</option>

															<option value="BGN">
																BGN-лв
															</option>

															<option value="NZD">
																NZD-$
															</option>

															<option value="LYD">
																LYD-ل.د
															</option>

															<option value="SGD">
																SGD-$
															</option>

															<option value="BND">
																BND-$
															</option>

															<option value="AUD">
																AUD-$
															</option>

															<option value="CAD">
																CAD-$
															</option>

															<option value="INR">
																INR-₹
															</option>
														</select>
														<span class="form-text text-muted">
															Select the currency in which we display system wide
															prices.
														</span>
													</div>
												</div>
												<!--end::Group-->
												<!--begin::Group-->
												<div class="form-group row fv-plugins-icon-container mt-12">
													<div class="col-xl-3 col-lg-3 col-form-div"></div>
													<div class="col-lg-9 col-xl-9">
														<button type="submit" class="btn btn-primary">
															Save Changes
														</button>
													</div>
												</div>
												<!--end::Group-->
											</form>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="myCompanion">
											<div class="mb-7">
												<!--begin::Subheader-->
												<div class="row align-items-center">
													<div class="col-lg-12">
														<div class="row align-items-center">
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
																<a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
															</div>
														</div>
													</div>
												</div>
												<!--end::Subheader-->
											</div>
											<!--begin: Datatable-->
											<div class="table-scroller">
												<div class="datatable datatable-bordered datatable-head-custom"
													id="kt_datatable">
												</div>
											</div>
											<!--end: Datatable-->
										</div>
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
@endsection

