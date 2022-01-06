<div class="row gutter-b">
    <!--begin::Item-->
    
    <div class="col-lg-12 mb-5">    
        <a href="{{ URL::to('/dashboard')}}" class="btn btn-block btn-white text-center radius-5 py-2 px-5">
            <span class="d-block font-weight-bold font-size-h4 font-saol">My Dashboard</span>
        </a>
    </div>
    <!--end::Item-->

    <!--begin::Item-->
    @if (\Session::get('gid') == 3)
        {{-- <div class="col-lg-12 mb-5">    
            <a href="#" class="btn btn-block btn-white text-center radius-5 py-2 px-5">
                <span class="d-block font-weight-bold font-size-h4 font-saol">My Collections</span>
            </a>
        </div> --}}
    @endif
    
    <!--end::Item-->

    <!--begin::Item-->
    <div class="col-lg-12 mb-5">    
        <a href="{{ URL::to('/users/profile')}}" class="btn btn-block btn-white text-center radius-5 py-2 px-5">
            <span class="d-block font-weight-bold font-size-h4 font-saol">My Profile</span>
        </a>
    </div>
    <!--end::Item-->

    <!--begin::Item-->
    @if (\Session::get('gid') == 3)
    <div class="col-lg-12 mb-5">
        <a href="{{ URL::to('/users/companion')}}" class="btn btn-block btn-white text-center radius-5 py-2 px-5 ">
            <span class="d-block font-weight-bold font-size-h4 font-saol">My Companions</span>
        </a>
    </div>
    @endif
    <!--end::Item-->

    <!--begin::Item-->
    @if (\Session::get('gid') == 3)
    <div class="col-lg-12 mb-5">
        <a href="{{ URL::to('/users/my-preferences')}}" class="btn btn-block btn-white text-center radius-5 py-2 px-5">
            <span class="d-block font-weight-bold font-size-h4 font-saol">My Preferences </span>
        </a>
    </div>
    @endif
    <!--end::Item-->
    <!--begin::Item-->
    @if (\Session::get('gid') == 3)
    <div class="col-lg-12 mb-5">
        <a href="{{ URL::to('/users/guestinvite')}}" class="btn btn-block btn-white text-center radius-5 py-2 px-5">
            <span class="d-block font-weight-bold font-size-h4 font-saol">My Guest Invitation</span>
        </a>
    </div>
    @endif
    <!--end::Item-->
    <!--begin::Item-->
    {{-- <div class="col-lg-12 mb-5">
        <a href="" class="btn btn-block btn-white text-center radius-5 py-2 px-5">
            <span class="d-block font-weight-bold font-size-h4 font-saol">My Company Setting</span>
        </a>
    </div> --}}
    <!--end::Item-->
    <div class="col-lg-12 mb-5">
        <hr>
    </div>
     <!--begin::Item-->
    <div class="col-lg-12 mb-5">
        <a href="{{ URL::to('/users/security')}}" class="btn btn-block btn-white text-center radius-5 py-2 px-5">
            <span class="d-block font-weight-bold font-size-h4 font-saol">Security &
                Privacy</span>
        </a>
    </div>
    <!--end::Item-->
    <!--begin::Item-->
    <div class="col-lg-12 mb-5">
        <a href="{{ URL::to('/users/setting')}}" class="btn btn-block btn-white text-center radius-5 py-2 px-5">
            <span class="d-block font-weight-bold font-size-h4 font-saol">Account
                Settings</span>
        </a>
    </div>
    <!--end::Item-->
    <!--begin::Item-->
    {{-- <div class="col-lg-12 mb-5">
        <a href="" class="btn btn-block btn-white text-center radius-5 py-2 px-5">
            <span class="d-block font-weight-bold font-size-h4 font-saol">Add Payment Method</span>
        </a>
    </div> --}}
    <!--end::Item-->
    <!--begin::Item-->
    {{-- <div class="col-lg-12 mb-5">
        <a href="#" class="btn btn-block btn-white text-center radius-5 py-2 px-5">
            <span class="d-block font-weight-bold font-size-h4 font-saol">Communication</span>
        </a>
    </div> --}}
    <!--end::Item-->
    <!--begin::Item-->
    <div class="col-lg-12 mb-5">
        <a href="{{ URL::to('/users/contracts')}}" class="btn btn-block btn-white text-center radius-5 py-2 px-5 ">
            <span class="d-block font-weight-bold font-size-h4 font-saol">Billings &
                Contacts</span>
        </a>
    </div>
    <!--end::Item-->
</div>