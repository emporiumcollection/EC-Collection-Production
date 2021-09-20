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
					<input type="hidden" name="id" value="@if(isset($data)){{ $data->id }}@endif">
					<div class="row">
						<div class="form-group col-md-6">
							<label>First name * </label>
							<input type="text" class="form-control"
								placeholder="Enter invite firstname" name="first_name" value="@if(isset($data)){{  $data->first_name ? $data->first_name : ''}} @endif">
						</div>
						<div class="form-group col-md-6">
							<label>Last Name * </label>
							<input type="text" class="form-control"
								placeholder="Enter invite lastname" name="last_name" value="@if(isset($data)){{  $data->last_name ? $data->last_name : ''}} @endif">
						</div>
					</div>
					<div class="form-group">
						<label>Email * </label>
						<input type="email" class="form-control" placeholder="Enter invite email"
							name="email" value="@if(isset($data)){{  $data->email ? $data->email : ''}} @endif">
					</div>
					<div class="form-group">
						<label>Message </label>
						<textarea class="form-control" name="message" cols="4" rows="10">@if(isset($data)){{  $data->message ? $data->message : ''}} @endif</textarea>
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
	@section('Guest_invite_datatable')
		var datatable = $('#invite_datatable').KTDatatable({
      data: {
        type: 'remote',
        source: { 
          read: {
            url: '{{ URL::to('/users/inviteGuest') }}',
            method: 'GET',
            map: function(raw) {
              // sample data mapping
              var dataSet = raw;
              if (typeof raw.data !== 'undefined') {
                dataSet = raw.data;
              }
              return dataSet;
            },
          },
        },
        pageSize: 10, // display 20 records per page
        serverPaging: true,
        serverFiltering: true,
        serverSorting: true,
      },
      layout: {
        scroll: false,
        footer: false,
      },
      sortable: true,
      pagination: true,
      search: {
          input: $('#kt_datatable_search'),
          key: 'generalSearch'
      },
  
      columns: [
        {
          field: 'first_name',
          title: 'Name',
          sortable: 'asc',
          selector: false,
        }, 
        {
          field: 'last_name',
          title: 'Last Name',
          sortable: 'asc',
          selector: false,
        },{
          field: 'email',
          title: 'Email',
          sortable: 'asc',
          selector: false,
        }, {
          field: 'message',
          title: 'Massage',
          sortable: 'asc',
          selector: false,
        },{
          field: 'Action',
          title: '',
          sortable: false,
          overflow: 'visible',
          width: 30,
          
          template: function (row) {
            return `<div class="dropdown dropdown-inline">
              <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown">
                <i class="flaticon-cogwheel-2"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <ul class="navi flex-column navi-hover py-2">
                  <li class="navi-item">
                    <a href="http://development.emporium-voyage.com/editinvite/`+row.id+`" class="navi-link">
                      <span class="navi-text">Edit</span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="http://development.emporium-voyage.com/deleteinvite/`+row.id+`"" class="navi-link">
                      <span class="navi-text">Delete</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>`;
          }
        }
      ],  
    });
	@endsection
	@endsection