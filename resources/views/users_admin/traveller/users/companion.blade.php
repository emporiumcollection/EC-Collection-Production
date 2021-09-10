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
								<form method="post" action="/users/addcompanion" enctype="multipart/form-data">
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
										name="first_name" type="text" value="@if(isset($data)){{  $data->first_name ? $data->first_name : ''}} @endif">

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
										name="last_name" type="text" value="@if(isset($data)){{  $data->last_name ? $data->last_name : ''}}@endif">

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
											name="email" value="@if(isset($data)){{  $data->email ? $data->email : ''}} @endif">
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
											name="phone_number" value=" @if(isset($data)){{  $data->phone_number ? $data->phone_number : ''}}@endif"
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
										<option value="Man" @if(isset($data)){{  $data->gender == 'Man' ? 'selected' : ''}} @endif>Male</option>
										<option value="Woman" @if(isset($data)){{  $data->gender == 'Woman' ? 'selected' : ''}} @endif>Woman</option>
										<option value="Non-Binary" @if(isset($data)){{  $data->gender == 'Non-Binary' ? 'selected' : ''}} @endif>Non-Binary</option>
										<option value="Cigender" @if(isset($data)){{  $data->gender == 'Cigender' ? 'selected' : ''}} @endif>Cigender</option>
										<option value="Intersex" @if(isset($data)){{  $data->gender == 'Intersex' ? 'selected' : ''}} @endif>Intersex</option>
										<option value="Other" @if(isset($data)){{  $data->gender == 'Other' ? 'selected' : ''}} @endif>Other</option>
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
										<option value="en" @if(isset($data)){{  $data->preferred_language == 'en' ? 'selected' : ''}} @endif>English</option>
										<option value="de" @if(isset($data)){{  $data->preferred_language == 'de' ? 'selected' : ''}}@endif>Deutsch</option>
										<option value="es" @if(isset($data)){{  $data->preferred_language == 'es' ? 'selected' : ''}}@endif>Espanol</option>
										<option value="fr" @if(isset($data)){{  $data->preferred_language == 'fr' ? 'selected' : ''}}@endif>Francais</option>
										<option value="it"@if(isset($data)) {{  $data->preferred_language == 'it' ? 'selected' : ''}}@endif>Italiano</option>
										<option value="nl" @if(isset($data)){{  $data->preferred_language == 'nl' ? 'selected' : ''}}@endif>Nederlands</option>
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
										<option value="OMR" @if(isset($data)){{  $data->preferred_currency == 'OMR' ? 'selected' : ''}}@endif> 
											OMR-﷼
										</option>

										<option value="BHD"@if(isset($data)) {{  $data->preferred_currency == 'BHD' ? 'selected' : ''}}@endif>
											BHD-.د.ب
										</option>

										<option value="KWD" @if(isset($data)){{  $data->preferred_currency == 'KWD' ? 'selected' : ''}}@endif>
											KWD-د.ك
										</option>

										<option value="USD"@if(isset($data)) {{  $data->preferred_currency == 'USD' ? 'selected' : ''}}@endif>
											USD-$
										</option>

										<option value="CHF" @if(isset($data)){{  $data->preferred_currency == 'CHF' ? 'selected' : ''}}@endif>
											CHF-CHF
										</option>

										<option value="EUR"@if(isset($data)) {{  $data->preferred_currency == 'EUR' ? 'selected' : ''}}@endif>
											EUR-€
										</option>

										<option value="KYD"@if(isset($data)) {{  $data->preferred_currency == 'KYD' ? 'selected' : ''}}@endif>
											KYD-$
										</option>

										<option value="GIP" @if(isset($data)){{  $data->preferred_currency == 'GIP' ? 'selected' : ''}}@endif>
											GIP-£
										</option>

										<option value="GBP" @if(isset($data)){{  $data->preferred_currency == 'GBP' ? 'selected' : ''}}@endif>
											GBP-£
										</option>

										<option value="JOD"@if(isset($data)) {{  $data->preferred_currency == 'JOD' ? 'selected' : ''}}@endif>
											JOD-JD
										</option>

										<option value="FJD" @if(isset($data)){{  $data->preferred_currency == 'FJD' ? 'selected' : ''}}@endif>
											FJD-$
										</option>

										<option value="AWG"@if(isset($data)) {{  $data->preferred_currency == 'AWG' ? 'selected' : ''}}@endif>
											AWG-ƒ
										</option>

										<option value="BGN" @if(isset($data)){{  $data->preferred_currency == 'BGN' ? 'selected' : ''}}@endif>
											BGN-лв
										</option>

										<option value="NZD"@if(isset($data)) {{  $data->preferred_currency == 'NZD' ? 'selected' : ''}}@endif>
											NZD-$
										</option>

										<option value="LYD"@if(isset($data)) {{  $data->preferred_currency == 'LYD' ? 'selected' : ''}}@endif>
											LYD-ل.د
										</option>

										<option value="SGD" @if(isset($data)){{  $data->preferred_currency == 'SGD' ? 'selected' : ''}}@endif>
											SGD-$
										</option>

										<option value="BND" @if(isset($data)){{  $data->preferred_currency == 'BND' ? 'selected' : ''}}@endif>
											BND-$
										</option>

										<option value="AUD"@if(isset($data)) {{  $data->preferred_currency == 'AUD' ? 'selected' : ''}}@endif>
											AUD-$
										</option>

										<option value="CAD"@if(isset($data)) {{  $data->preferred_currency == 'CAD' ? 'selected' : ''}}@endif>
											CAD-$
										</option>

										<option value="INR" @if(isset($data)){{  $data->preferred_currency == 'INR' ? 'selected' : ''}}@endif>
											INR-₹
										</option>
									</select>
									<span class="form-text text-muted">
										Select the currency in which we display system wide
										prices.
									</span>
								</div>
								<input type="hidden" name="id" value="@if(isset($data)){{ $data->id ? $data->id : ''   }}@endif">
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
	<!--begin::Global Theme Bundle(used by all pages)-->
@endsection

