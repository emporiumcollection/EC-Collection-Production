@extends('users_admin.traveller.layout.app')
@section('content')
						<div class="card-body">
							<div class="mb-7">
								<!--begin::Subheader-->
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
										<a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
									</div>
								</div>
								<!--end::Subheader-->
							</div>
							<!--begin: Datatable-->
							<div class="table-scroller">
								<div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
								</div>
							</div>
							<!--end: Datatable-->
						</div>
					</div>
					<!--end::Card-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Entry-->
		</div>
		
	@include('/users_admin/traveller/layout/chat-popup')
	@include('/users_admin/traveller/layout/reservation-popup')

@endsection