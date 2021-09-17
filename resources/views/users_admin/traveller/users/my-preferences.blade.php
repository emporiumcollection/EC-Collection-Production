
@extends('users_admin.traveller.layout.app')
@section('content')
<div class="mt-15">
    <ul class="nav nav-tabs nav-profiletabs">
    <li class="nav-item ">
        <a href="#addNew" class="nav-link active" data-toggle="tab">
            New Preferences</a>
    </li>
    <li class="nav-item">
        <a href="#mypreferences" class="nav-link" data-toggle="tab">
            My Preferences
        </a>
    </li>
</ul>
<br>
<p>
    In this section you manage personal preferences.
</p>

    <div class="mt-13">
        <!--begin: Wizard-->
        <div class="tab-content pt-7 profile-tabs">
            <div class="tab-pane fade show active" id="addNew">
                <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="step-first"
                    data-wizard-clickable="true">
                    <!--begin: Wizard Nav-->
                    <div class="wizard-nav" style="display: none;">
                        <div class="wizard-steps px-8 py-8 px-lg-15 py-lg-3">
                            <!--begin::Wizard Step 1 Nav-->
                            <div class="wizard-step" data-wizard-type="step"
                                data-wizard-state="current">
                                <div class="wizard-label">
                                    <h3 class="wizard-title">
                                        <span>1.</span>Setup Location
                                    </h3>
                                    <div class="wizard-bar"></div>
                                </div>
                            </div>
                            <!--end::Wizard Step 1 Nav-->
                            <!--begin::Wizard Step 2 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-label">
                                    <h3 class="wizard-title">
                                        <span>2.</span>Enter Details
                                    </h3>
                                    <div class="wizard-bar"></div>
                                </div>
                            </div>
                            <!--end::Wizard Step 2 Nav-->
                            <!--begin::Wizard Step 3 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-label">
                                    <h3 class="wizard-title">
                                        <span>3.</span>Select Services
                                    </h3>
                                    <div class="wizard-bar"></div>
                                </div>
                            </div>
                            <!--end::Wizard Step 3 Nav-->
                            <!--begin::Wizard Step 4 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-label">
                                    <h3 class="wizard-title">
                                        <span>4.</span>Delivery Address
                                    </h3>
                                    <div class="wizard-bar"></div>
                                </div>
                            </div>
                            <!--end::Wizard Step 4 Nav-->
                            <!--begin::Wizard Step 5 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-label">
                                    <h3 class="wizard-title">
                                        <span>5.</span>Delivery Address
                                    </h3>
                                    <div class="wizard-bar"></div>
                                </div>
                            </div>
                            <!--end::Wizard Step 5 Nav-->
                            <!--begin::Wizard Step 6 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-label">
                                    <h3 class="wizard-title">
                                        <span>6.</span>
                                    </h3>
                                    <div class="wizard-bar"></div>
                             </div>
                            </div>
                            <!--end::Wizard Step 6 Nav-->
                        </div>
                    </div>
                    <!--end: Wizard Nav-->
                    <!--begin: Wizard Body-->
                    <!--begin: Wizard Form-->
                    <form class="form" id="kt_form" method="post" action="/postPreference">

                    {{-- Route-> getPreferences --}}
                        <!--begin: Wizard Step 1-->
                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                             <div class="text-center">
                                <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                    Title
                                </h1>
                                {{-- <p>You can specify one or more destinations</p> --}}
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control">
                                </div>
                            </div>

                            <div class="text-center">
                                <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                    Where do you want to travel?
                                </h1>
                                <p>You can specify one or more destinations</p>
                                <div class="form-group">
                                    <select class="form-control select2" id="kt_select2_3"
                                        name="destinations[]" multiple="multiple">
                                        @if(isset($category)) 
                                            @foreach($category as $categories)
                                            <option value="{{ $categories->id }}" >
                                                {{ $categories->category_name }}
                                            </option>                                        
                                        @endforeach    
                                        @endif
                                    </select>
                                    <div class="select-notif">
                                        Select the destinations you prefer to travel to.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Wizard Step 1-->
                        <!--begin: Wizard Step 2-->
                      <div class="pb-5" data-wizard-type="step-content">
                            <div class="text-center">
                                <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                    What inspires you?
                                </h1>
                            </div>
                            <div class="mb-15">
                                <h3 class="text-dark font-weight-bold font-saol mb-4">
                                    Destinations
                                </h3>
                                <div class="experience-slider">
                                        @foreach($destination as $dest)
                                            <div>
                                                <div class="checkbox-inline checkbox-cs checkbox-experience m-0">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="inspirstion[]" id="destination" value="{{ $dest->id }}" />
                                                        <img src="{{ asset('/uploads/category_imgs/'.$dest->category_image)}}"
                                                            class="img-fluid" alt="">
                                                        <div class="label-inner">
                                                            <span></span>
                                                            <div class="title-checkbox">
                                                                {{ $dest->category_name }}
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                            </div>
                            <div class="mb-15">
                                <h3 class="text-dark font-weight-bold font-saol mb-4">
                                    Atmosphere
                                </h3>
                                <div class="experience-slider">
                                        @foreach($atmosphere as $atm)
                                            <div>
                                                <div class="checkbox-inline checkbox-cs checkbox-experience m-0">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="inspirstion[]" value="{{ $atm->id }}" />
                                                        <img src="{{ asset('/uploads/category_imgs/'.$atm->category_image)}}"
                                                            class="img-fluid" alt="">
                                                        <div class="label-inner">
                                                            <span></span>
                                                            <div class="title-checkbox">
                                                                {{ $atm->category_name }}
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach               
                                </div>
                            </div>
                            <div class="mb-15">
                                <h3 class="text-dark font-weight-bold font-saol mb-4">
                                    Facilities
                                </h3>
                                <div class="experience-slider">
                                        @foreach($facilities as $facilits)
                                            <div>
                                                <div class="checkbox-inline checkbox-cs checkbox-experience m-0">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="inspirstion[]" value="{{ $facilits->id }}" />
                                                        <img src="{{ asset('/uploads/category_imgs/'.$facilits->category_image)}}"
                                                            class="img-fluid" alt="">
                                                        <div class="label-inner">
                                                            <span></span>
                                                            <div class="title-checkbox">
                                                                {{ $facilits->category_name }}
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach      
                                </div>
                            </div>
                            <div class="mb-15">
                                <h3 class="text-dark font-weight-bold font-saol mb-4">
                                    Style
                                </h3>
                                <div class="experience-slider">
                                        @foreach($style as $sty)
                                            <div>
                                                <div class="checkbox-inline checkbox-cs checkbox-experience m-0">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="inspirstion[]" value="{{ $sty->id }}" />
                                                        <img src="{{ asset('/uploads/category_imgs/'.$sty->category_image)}}"
                                                            class="img-fluid" alt="">
                                                        <div class="label-inner">
                                                            <span></span>
                                                            <div class="title-checkbox">
                                                                {{ $sty->category_name }}
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                        <!--end: Wizard Step 2-->
                        <!--begin: Wizard Step 3-->
                       <div class="pb-5" data-wizard-type="step-content">
                            <div class="text-center">
                                <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                    What would you like to experience
                                </h1>
                            </div>
                            <div class="mb-15">
                                <h3 class="text-dark font-weight-bold font-saol mb-4">
                                    Spa Collection
                                </h3>
                                <div class="experience-slider">
                                    @if(isset($spaconn))
                                        @foreach($spaconn as $spa)
                                            <div>
                                                <div class="checkbox-inline checkbox-cs checkbox-experience m-0">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="spacheckbox[]" value="{{ $spa->id }}" />
                                                        <img src="{{ asset('/uploads/category_imgs/'.$spa->category_image)}}"
                                                            class="img-fluid" alt="">
                                                        <div class="label-inner">
                                                            <span></span>
                                                            <div class="title-checkbox">
                                                                {{ $spa->category_name }}
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach    
                                    @endif                                
                                </div>
                            </div>
                            <div class="mb-15">
                                <h3 class="text-dark font-weight-bold font-saol mb-4">
                                    Voyage Collection
                                </h3>
                                <div class="experience-slider">
                                    @if(isset($category))
                                        @foreach($category as $cat)
                                            <div>
                                                <div class="checkbox-inline checkbox-cs checkbox-experience m-0">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="voyagechk[]" value="{{ $cat->id }}" />
                                                        <img src="{{ asset('/uploads/category_imgs/'.$cat->category_image)}}"
                                                            class="img-fluid" alt="">
                                                        <div class="label-inner">
                                                            <span></span>
                                                            <div class="title-checkbox">
                                                                {{ $cat->category_name }}
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif                                
                                </div>
                            </div>
                            <div class="mb-15">
                                <h3 class="text-dark font-weight-bold font-saol mb-4">
                                    Islands Collection
                                </h3>
                                <div class="experience-slider">
                                    @if(isset($islandconn))
                                        @foreach($islandconn as $island)
                                            <div>
                                                <div class="checkbox-inline checkbox-cs checkbox-experience m-0">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="islandchk[]" value="{{ $island->id }}" />
                                                        <img src="{{ asset('/uploads/category_imgs/'.$island->category_image)}}"
                                                            class="img-fluid" alt="">
                                                        <div class="label-inner">
                                                            <span></span>
                                                            <div class="title-checkbox">
                                                                {{ $island->category_name }}
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif    
                                </div>
                            </div>
                            <div class="mb-15">
                                <h3 class="text-dark font-weight-bold font-saol mb-4">
                                    Safari Collection
                                </h3>
                                <div class="experience-slider">
                                    @if(isset($safariconn))
                                        @foreach($safariconn as $safari)
                                            <div>
                                                <div class="checkbox-inline checkbox-cs checkbox-experience m-0">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="safarichk[]" value="{{ $safari->id }}" />
                                                        <img src="{{ asset('/uploads/category_imgs/'.$safari->category_image)}}"
                                                            class="img-fluid" alt="">
                                                        <div class="label-inner">
                                                            <span></span>
                                                            <div class="title-checkbox">
                                                                {{ $safari->category_name }}
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif 
                                </div>
                            </div>
                        </div>
                        <!--end: Wizard Step 3-->
                        <!--begin: Wizard Step 4-->
                        <div class="pb-5" data-wizard-type="step-content">
                            <div class="text-center">
                                <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                    What is particularly important to you?
                                </h1>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="note" cols="4" rows="10"
                                    placeholder="Further comments or wishes? A concrete trip , a special occasion such as a honeymoon"></textarea>
                                <div class="text-right mt-7">
                                    <i class="fas fa-info-circle" data-toggle="tooltip"
                                        data-placement="top" data-container="body"
                                        data-boundary="window" title=""
                                        data-original-title="Your callback date can be selected in last step"></i>
                                </div>
                            </div>
                        </div>
                        <!--end: Wizard Step 4-->
                        <!--begin: Wizard Step 5-->
                        <div class="pb-5" data-wizard-type="step-content">
                            <div class="text-center">
                                <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                    How many people travel?
                                </h1>
                            </div>
                            <div class="guest-count">
                                <div class="row align-items-center">
                                    <div class="col-6 mb-10">
                                        <div class="guest-name">Adults</div>
                                        <div class="guest-adult">18* Years</div>
                                    </div>
                                    <div class="col-6 mb-10">
                                        <div class="guest-qty">
                                            <button type="button" id="min" class="min">-</button>
                                            <input class="form-control" type="number"  name="adults" value="0"
                                                min="0" readonly />
                                            <button type="button" name="adults" id="plus" class="plus">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-6 mb-10">
                                        <div class="guest-name">Youth</div>
                                        <div class="guest-adult">12-17 Years</div>
                                    </div>
                                    <div class="col-6 mb-10">
                                        <div class="guest-qty">
                                            <button type="button" id="min" class="min">-</button>
                                            <input class="form-control" type="number" name="youth" value="0"
                                                min="0" readonly />
                                            <button type="button" id="plus" class="plus">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-6 mb-10">
                                        <div class="guest-name">Children</div>
                                        <div class="guest-adult">2-11 Years</div>
                                    </div>
                                    <div class="col-6 mb-10">
                                        <div class="guest-qty">
                                            <button type="button" id="min" class="min">-</button>
                                            <input class="form-control" type="number" name="children" value="0"
                                                min="0" readonly />
                                            <button type="button" id="plus" class="plus">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-6 mb-10">
                                        <div class="guest-name">Toddlers</div>
                                        <div class="guest-adult">under 2 Years</div>
                                    </div>
                                    <div class="col-6 mb-10">
                                        <div class="guest-qty">
                                            <button type="button" id="min" class="min">-</button>
                                            <input class="form-control" type="number" name="toddlers" value="0"
                                                min="0" readonly />
                                            <button type="button" id="plus" class="plus">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Wizard Step 5-->
                        <!--begin: Wizard Step 6-->
                        <div class="pb-5" data-wizard-type="step-content">
                            <div class="text-center">
                                <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                    When do you normally travel?
                                </h1>
                            </div>

                            <div class='input-group' id='kt_daterangepicker_2'>
                                <input type='text' class="form-control" readonly
                                    placeholder="Select date range"  name="earliest_arrival" />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i
                                            class="la la-calendar-check-o"></i></span>
                                </div>
                            </div>

                            <div class="text-center mt-17">
                                <h1 class="mb-10 font-weight-bolder text-dark font-saol">
                                    How long do you normally like to travel?
                                </h1>

                            </div>
                            <div class="form-group">
                                <select name="stay_time" class="form-control">
                                    <option value="1-2 Weeks">1-2 Weeks</option>
                                    <option value="2-3 Weeks">2-3 Weeks</option>
                                    <option value="3-4 Weeks">3-4 Weeks</option>
                                    <option value="4-5 Weeks">4-5 Weeks</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-list">
                                    <label class="checkbox">
                                        <input type="checkbox" name="Checkboxes1">
                                        <span></span>
                                        I Agree to the Emporium-Collection Privacy & Data Protection
                                        Policy
                                    </label>
                                </div>
                                <p>
                                    I agree that my personal data will be collected and stored
                                    and used electronically to help the reservation agents with
                                    specialized offers pertaining to my travel preferences.
                                    Note: You may revoke your consent at any time by e-mail to
                                    info@emporium-collection.com or from your settings section in
                                    your account admin.
                                </p>
                                <div class="checkbox-list">
                                    <label class="checkbox">
                                        <input type="checkbox" name="Checkboxes1">
                                        <span></span>
                                        Emporium-Collection Privacy Policy
                                    </label>
                                </div>
                                <p>
                                    I have read and agree to the Emporium-Collection Privacy Policy.
                                </p>
                                <div class="checkbox-list">
                                    <label class="checkbox">
                                        <input type="checkbox" name="Checkboxes1">
                                        <span></span>
                                        Cookie Policy
                                    </label>
                                </div>
                                <p>
                                    I have read and agree to the Emporium-Collection Cookie Policy
                                </p>
                            </div>
                            <div class="text-right mt-7">
                                <i class="fas fa-info-circle" data-toggle="tooltip"
                                    data-placement="top" data-container="body"
                                    data-boundary="window" title=""
                                    data-original-title="Of course, we will let you know if the choosen travel period coincides with local holidays, festivals, high season or an unfavorable season."></i>
                            </div>
                        </div>
                        <!--end: Wizard Step 6-->
                        <!--begin: Wizard Actions-->
                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                            <div class="mr-2">
                                <button type="button"
                                    class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4"
                                    data-wizard-type="action-prev">Previous</button>
                            </div>
                            <div>
                                <button type="button"
                                    class="btn btn-success font-weight-bolder text-uppercase px-9 py-4 preferences"
                                    data-wizard-type="action-submit">Submit</button>
                                <button type="button"
                                    class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4 clickNext"
                                    data-wizard-type="action-next">Next</button>
                            </div>
                        </div>
                        <!--end: Wizard Actions-->
                    </form>
                    <!--end: Wizard Form-->
                    <!--end: Wizard Body-->
                </div>
            </div>
        <!--end: Wizard-->
            <div class="tab-pane fade" id="mypreferences">
                <div class="mb-7">
                    <!--begin::Subheader-->
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="row align-items-center">
                                <div class="col-md-3 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            id="kt_datatable_pre_search" />
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
                        id="preference_table">
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>

    @section('Preference_Datatable')
        var datatable = $('#preference_table').KTDatatable({
              data: {
                type: 'remote',
                source: { 
                  read: {
                    url: '{{ URL::to('/users/preferenceDatatable') }}',
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
                  input: $('#kt_datatable_pre_search'),
                  key: 'generalSearch'
              },
          
              columns: [        
                {
                  field: 'customer_id',
                  title: 'Customer Id',
                  sortable: 'asc',
                  selector: false,
                },{
                  field: 'first_name',
                  title: 'Name',
                  sortable: 'asc',
                  selector: false,
                }, {
                  field: 'adults',
                  title: 'Adults',
                  sortable: 'asc',
                  selector: false,
                }, {
                  field: 'youth',
                  title: 'Youth',
                  sortable: 'asc',
                  selector: false,
                }, {
                  field: 'children',
                  title: 'Children',
                  sortable: 'asc',
                  selector: false,
                }, {
                  field: 'toddlers',
                  title: 'Toddlers',
                  sortable: 'asc',
                  selector: false,
                },{
                  field: 'stay_time',
                  title: 'Stay time',
                  sortable: 'asc',
                  selector: false,
                },{
                  field: 'note',
                  title: 'Note',
                  sortable: 'asc',
                  selector: false,
                },{
                  field: 'earliest_arrival',
                  title: 'Earliest arrival',
                  sortable: 'asc',
                  selector: false,
                },{
                  field: 'late_check_out',
                  title: 'Late check out',
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
                            <a href="http://development.emporium-voyage.com/users/my-preferences/`+row.ps_id+`" class="navi-link">
                              <span class="navi-text">Edit</span>
                            </a>
                          </li>
                          <li class="navi-item">
                            <a href="http://development.emporium-voyage.com/users/delete-preferences/`+row.ps_id+`"" class="navi-link">
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
