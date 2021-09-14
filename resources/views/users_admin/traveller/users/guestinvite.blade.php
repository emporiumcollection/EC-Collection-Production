@extends('users_admin.traveller.layout.app')
@section('content')
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
			<ul class="nav nav-tabs nav-profiletabs">
					<li class="nav-item ">
						<a href="#addNew" class="nav-link active" data-toggle="tab">
							Invite Guest</a>
					</li>
					<li class="nav-item">
						<a href="#myGuestList" class="nav-link" data-toggle="tab">
							Invited Guest List
						</a>
					</li>
				</ul>
			<div class="tab-content pt-7 profile-tabs">
			<div class="tab-pane fade show active" id="addNew">
				<form method="post" action="/users/invite" id="contact_form">
					<div class="row">
						<div class="form-group col-md-6">
							<label>First name * </label>
							<input type="text" class="form-control"
								placeholder="Enter invite firstname" name="first_name">
						</div>
						<div class="form-group col-md-6">
							<label>Last Name * </label>
							<input type="text" class="form-control"
								placeholder="Enter invite lastname" name="last_name">
						</div>
					</div>
					<div class="form-group">
						<label>Email * </label>
						<input type="email" class="form-control" placeholder="Enter invite email"
							name="email">
					</div>
					<div class="form-group">
						<label>Message </label>
						<textarea class="form-control" name="message" cols="4" rows="10"></textarea>
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
			<div class="tab-pane fade" id="myGuestList">
				<div class="mb-7">
					<div class="row align-items-center">
						<div class="col-lg-12">
							<div class="row align-items-center">
								<div class="col-md-3 my-2 my-md-0">
									<div class="input-icon">
										<input type="text" class="form-control" placeholder="Search..."
											id="kt_datatable_search" />
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
				</div>
				<!--begin: Datatable-->
					<div class="table-scroller">
						<div class="datatable datatable-bordered datatable-head-custom"
							id="invite_datatable">
						</div>
					</div>
				<!--end: Datatable-->
			</div>
		</div>
		</div>
	</div>
	@endsection