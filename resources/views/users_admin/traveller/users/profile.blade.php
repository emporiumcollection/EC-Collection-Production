@extends('users_admin.traveller.layout.app')
@section('content')
	<div class="mt-15">
		<div class="row align-items-center">
			<div class="col-md-8">
				<h2 class="text-dark font-weight-bold font-saol">My Profile </h2>
					<p>In this section you manage all aspects of your profile which include,
					personal
					information, personal preferences and account settings.</p>
			</div>
			<div class="col-md-4 text-right">
				<a href="#" class="btn btn-secondary" id="remove_account">Disable and Remove Account</a>
			</div>
		</div>
		</div>

		<div class="mt-13">
			<ul class="nav nav-tabs nav-profiletabs">
				<li class="nav-item ">
					<a href="#profile" class="nav-link active" data-toggle="tab">Profile
						Information</a>
				</li>
				<li class="nav-item">
					<a href="#changepass" class="nav-link" data-toggle="tab">Change Password
					</a>
				</li>
			</ul>
		</div>
		@if(Session::has('massage'))      
	        <div class="alert alert-success alert-dismissible fade show">
	            <button type="button" class="close" data-dismiss="alert">&times;</button>
	            <strong>Success!</strong> {!! Session::get('massage') !!}.
	        </div>
	    @endif
	    @if(Session::has('Errmassage'))      
	        <div class="alert alert-danger alert-dismissible fade show">
	            <button type="button" class="close" data-dismiss="alert">&times;</button>
	            <strong>Error!</strong> {!! Session::get('Errmassage') !!}.
	        </div>
	    @endif

		<div class="tab-content p-7 profile-tabs">
			<div class="tab-pane fade show active" id="profile">
				<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
				<div class="col-xl-9">
					<h5 class="text-dark font-weight-bold mb-10">
						My Credentials
					</h5>
					<form method="post" action="/users/savetravelprofile" enctype="multipart/form-data">
						<!--begin::Group-->

						<div class="form-group row">
							<label class="col-xl-3 col-lg-3 col-form-label text-left">My
								Profile Image </label>
							<div class="col-lg-9 col-xl-9">
								<div class="image-input image-input-outline"
									id="kt_user_add_avatar">
									@if(!empty($info->avatar))
										<img class="image-input-wrapper" id="avatar" src="{{ asset('/images/user_avatar/'.$info->avatar)}}">
									@else
										<img class="image-input-wrapper" id="avatar" src="{{ asset('/images/profile-pic.png')}}">
									@endif
									<label
										class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
										data-action="change" data-toggle="tooltip"
										title="" data-original-title="Change avatar">
										<i class="fa fa-pen icon-sm text-muted"></i>
										<input type="file" name="profile_avatar" id="profile_avatar"
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
							<label class="col-xl-3 col-lg-3 col-form-label">	
								First Name
							</label>
							<div class="col-lg-9 col-xl-9">
								<input
									class="form-control form-control-solid form-control-lg"
									name="firstname" type="text" value="{{ $info->first_name }}">
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
									name="lastname" type="text" value="{{ $info->last_name }}">
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
										name="email" value="{{ $info->email }}">
								</div>
							</div>
						</div>
						<!--end::Group-->
						<!--begin::Group-->
						
						<!--end::Group-->
						<div class="form-group row fv-plugins-icon-container">
							<label class="col-xl-3 col-lg-3 col-form-label">
								Mobile Number
							</label>
							<div class="col-lg-9 col-xl-9 d-flex">
								<div class="col-c-code" style="max-width: 65px;">
									<input type="text" name="mobile_code" id="code" value="{{ $info->mobile_code }}" class="form-control form-control-solid form-control-lg" placeholder="+49" maxlength="4" required>
								</div>
								<div
									class="input-group input-group-solid input-group-lg ml-5">
									<input type="number"
										class="form-control form-control-solid form-control-lg"
										name="mobile_number" value="{{ $info->mobile_number }}" maxlength="10">
								</div>
							</div>
						</div>
						<!--begin::Group-->
						<div class="form-group row fv-plugins-icon-container">
							<label class="col-xl-3 col-lg-3 col-form-label">
								I Am
							</label>
							<div class="col-lg-9 col-xl-9">
								<select id="gender" name="gender" class="form-control">
									<option value="" selected disabled>Select</option>
									<?php foreach ($genders as $gender) { ?>
										<option value="{{ $gender }}" {{ $info->gender == $gender ? 'selected' : "" }}>{{ $gender }}</option>
									<?php } ?>
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
								<select class="form-control" id="prefer_communication_with" 
										name="prefer_communication_with">
									@foreach ($languages as $key => $language) {	
										<option value="{{ $key }}" {{ $info->prefer_communication_with == $language ? 'selected' : "" }}>
											{{$language}}
										</option>
									@endforeach
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
								
			                        <?php  $currencyList=(CommonHelper::getCurrencyList()); if(empty($currencyList)){ $currencyList = array(); } ?>

										<select class="form-control" id="preferred_currency" name="preferred_currency">
			                                <option value="EUR">Currency</option>
			                                @foreach($currencyList as $currencyCode => $currencyName)
			                                    <option value="{{ $currencyCode }}" title="{{ $currencyName }}" {{  $info->preferred_currency == $currencyCode ? 'selected' : ''}} >{{ $currencyName }}
			                                </option>                                        
			                                @endforeach
			                            </select>
							</div>
								<span class="form-text text-muted">
									Select the currency in which we display system wide
									prices.
								</span>
						</div>
						<div class="form-group row fv-plugins-icon-container mt-12">
								<div class="col-lg-9 col-xl-9">
									<button type="submit" class="btn btn-primary">
										Save Changes
									</button>
								</div>
						</div>
					</div>
						<!--end::Group-->
						<!--begin::Group-->
						<!--end::Group-->
				</div>
			</div>
			<div class="tab-pane fade" id="changepass">
				<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
					<div class="col-xl-9">
						<h5 class="text-dark font-weight-bold mb-10">
							Password
						</h5>

						<form method="post" action="/users/password">
							<!--begin::Group-->
							<div class="form-group row">
								<label class="col-form-label col-xl-3 col-lg-3">
									New Password
								</label>
								<div class="col-xl-9 col-lg-9">
									<input type="password" class="form-control" name="password">
									<div class="form-text text-muted">
										Password must be 8 character.
										Must be one uppercase character.
										Must be one Non-alphanumeric (!, @, # etc.)
										character.
									</div>
								</div>
							</div>
							<!--end::Group-->
							<!--begin::Group-->
							<div class="form-group row">
								<label class="col-form-label col-xl-3 col-lg-3">
									Confirm Password
								</label>
								<div class="col-xl-9 col-lg-9">
									<input type="password" class="form-control" name="password_confirmation">
								</div>
							</div>
							<!--end::Group-->
							<!--begin::Group-->
							<div class="form-group row fv-plugins-icon-container mt-12">
								<div class="col-xl-3 col-lg-3 col-form-div"></div>
								<div class="col-lg-9 col-xl-9">
									<button type="submit" class="btn btn-primary" name="submit">
										Save Changes
									</button>
								</div>
							</div>
							<!--end::Group-->
						</form>
					</div>
				</div>
			</div>
	
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script>
	@section('remove_acc_scr')
    var chart = new ApexCharts(element, options);
    chart.render();

		$("#remove_account").click(function (e) {
			Swal.fire({
				title: "Remove Account?",
				text: "Are you sure you wish to permanently remove your account. This action cannot be reversed. All your reservation & account information will be removed!",
				icon: "warning",
				showCancelButton: true,
				confirmButtonText: "Yes, remove it!"
			}).then(function (result) {
				if (result.value) {
					Swal.fire(
						"Removed!",
						"Your account has been removed.",
						"success"
					)
				}
			});
		});

	@endsection
</script>
@endsection