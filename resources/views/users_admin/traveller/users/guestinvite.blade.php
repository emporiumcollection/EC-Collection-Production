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
	</div>
	@endsection