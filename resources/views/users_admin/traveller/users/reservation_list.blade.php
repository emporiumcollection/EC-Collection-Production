@extends('users_admin.traveller.layout.app')
@section('content')
<!--begin::Card-->
<div class="card card-custom">
    
<!-- Modal Set Languange-->
<div class="modal fade" id="setLanguage" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -8px;">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
                <ul class="nav nav-tabs nav-tabs-line tab-line-cs">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold active" data-toggle="tab" href="#language">Language and
                            region</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" data-toggle="tab" href="#currency">Currency</a>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="language" role="tabpanel">
                        <h5 class="mb-5">Suggested language and region</h5>
                        <div class="radio-inline">
                            <label class="radio radio-box" data-dismiss="modal">
                                <input type="radio" name="languageRegion">
                                <div class="radio-box-label">
                                    <div>English</div>
                                    <div class="text-muted">United Kingdom</div>
                                </div>
                                
                            </label>
                        </div>

                        <h5 class="mb-5 mt-10">Choose a language and region</h5>
                        <div class="radio-inline">
                            <label class="radio radio-box" data-dismiss="modal">
                                <input type="radio" name="languageRegion" checked>
                                <div class="radio-box-label">
                                    <div>English</div>
                                    <div class="text-muted">United Kingdom</div>
                                </div>
                            </label>
                            <label class="radio radio-box" data-dismiss="modal">
                                <input type="radio" name="languageRegion" >
                                <div class="radio-box-label">
                                    <div>Deutsch</div>
                                    <div class="text-muted">Schweiz</div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="currency" role="tabpanel">
                        <h5 class="mb-5">Choose a currency</h5>
                        <div class="radio-inline">
                            <label class="radio radio-box" data-dismiss="modal">
                                <input type="radio" name="currencySet" checked>
                                <div class="radio-box-label">
                                    <div>United States dollar</div>
                                    <div class="text-muted">USD - $</div>
                                </div>
                            </label>
                            <label class="radio radio-box" data-dismiss="modal">
                                <input type="radio" name="currencySet">
                                <div class="radio-box-label">
                                    <div>Euro</div>
                                    <div class="text-muted">EUR - €</div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

<!-- Modal Add Payment-->
<div class="modal fade" id="addPayment" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment Method</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="mb-4">
                        <img src="../images/credit-cards-768x178.png" class="img-fluid" alt="">
                    </div>

                    <div class="form-group">
                        <label> Card Type
                            <span class="text-danger">*</span>
                        </label>
                        <select class="form-control">
                            <option>Private</option>
                            <option>Business</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Card number <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Card Number">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Expires On <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your address">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Security Code <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your passcode">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>First name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your firsname">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your lastname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Postal Code <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your postal code">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Country <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your country">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary font-weight-bold">Add Card</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Popup Create Company -->
<!--begin::Demo Panel-->
<div id="createCompany" class="offcanvas offcanvas-right p-10" style="width: 90%;">
  <!--begin::Header-->
  <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
    <h4 class="font-weight-bold m-0">Create Company</h4>
    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
      <i class="ki ki-close icon-xs text-muted"></i>
    </a>
  </div>
  <!--end::Header-->
  <!--begin::Content-->
  <div class="offcanvas-content">
    <!--begin::Wrapper-->
    <div class="offcanvas-wrapper mb-5 scroll-pull">
      <div class="mt-15">
        <p>
          In this section, add all your company related information for tax purposes. Make sure to enter your details
          correct as the infomration will be used for billing.
        </p>
  
        <p>
          Provide your legal business details to help us confirm you're part of a company.
        </p>
      </div>

      <form action="#">
        <div class="mt-15">
          <div class="form-group row mb-15">
            <label class="col-lg-2 col-form-label text-lg-right">Company name* </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
          </div>
          <div class="separator separator-dashed separator-border-2"></div>
          <div class="form-group row mt-15">
            <h3 class="col-lg-2 text-lg-right font-saol">Business Address</h3>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">Address </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">City</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">State </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">ZIP code </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">Country </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">Phone number* </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right"></label>
            <div class="col-lg-4">
              <div class="checkbox-inline mt-7">
                <label class="checkbox checkbox-outline checkbox-success">
                  <input type="checkbox">
                  <span></span>
                  Business address and registered office address are the same
                </label>
              </div>
            </div>
          </div>
          <div class="separator separator-dashed separator-border-2"></div>
          <div class="form-group row mt-15">
            <h3 class="col-lg-2 text-lg-right font-saol">
              Legal representative
            </h3>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">Name* </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">Email </label>
            <div class="col-lg-4">
              <input type="email" class="form-control" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">Phone number </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">Country of incorporation </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">Registration number </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">Registration number </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
          </div>
          <div class="separator separator-dashed separator-border-2"></div>
          <div class="form-group row mt-15">
            <h3 class="col-lg-2 text-lg-right font-saol">
              Company owner
            </h3>
          </div>
          <div class="form-group row">
            <label class="col-lg-2 col-form-label text-lg-right">Name* </label>
            <div class="col-lg-4">
              <input type="text" class="form-control" placeholder="">
            </div>
            <label class="col-lg-2 col-form-label text-lg-right">Date of birth  </label>
            <div class="col-lg-4">
              <div class="input-group date">
                <input type="text" class="form-control" id="birthday" readonly="readonly" placeholder="Select date" />
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="la la-calendar-check-o"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row my-15">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
              <button type="button" class="btn btn-secondary mr-2">Deactive my account</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!--end::Wrapper-->
    <!--begin::Purchase-->

    <!--end::Purchase-->
  </div>
  <!--end::Content-->
</div>
<!--end::Demo Panel-->

<!-- Popup My Collections -->
<!--begin::Demo Panel-->
<div id="myCollections" class="offcanvas offcanvas-right p-10" style="width: 90%;">
  <!--begin::Header-->
  <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
    <h4 class="font-weight-bold m-0">My Collections</h4>
    <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary canvas-close">
      <i class="ki ki-close icon-xs text-muted"></i>
    </a>
  </div>
  <!--end::Header-->
  <!--begin::Content-->
  <div class="offcanvas-content">
    <!--begin::Wrapper-->
    <div class="offcanvas-wrapper mb-5 scroll-pull">
      <div id="collections">
        <div class="collection-slide align-items-center">
          <div class="left-add-slide">
            <a href="#addCollaction" class="collapse-collection" data-toggle="collapse">
              <div class="btn btn-add-collection">
                +
              </div>
              <p class="m---019">Add Yours</p>
            </a>
          </div>
          <div class="right-collection pl-3">
            <div class="swipe-collection owl-carousel">
              <div class="item">
                <div class="swipe-item">
                  <div class="swipe-round">
                    <span class="icon-swipe">#</span>
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
                    </div>
                    <div class="swipe-action-content">
                      <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
                      <a href="#">Edit</a>
                      <a href="#">Remove</a>
                    </div>
                  </div>
                </div>
                <p class="mb-0">#Collection Name</p>
              </div>
              <div class="item">
                <div class="swipe-item">
                  <div class="swipe-round">
                    <span class="icon-swipe">#</span>
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
                    </div>
                    <div class="swipe-action-content">
                      <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
                      <a href="#">Edit</a>
                      <a href="#">Remove</a>
                    </div>
                  </div>
                </div>
                <p class="mb-0">#Collection Name</p>
              </div>
              <div class="item">
                <div class="swipe-item">
                  <div class="swipe-round">
                    <span class="icon-swipe">#</span>
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
                    </div>
                    <div class="swipe-action-content">
                      <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
                      <a href="#">Edit</a>
                      <a href="#">Remove</a>
                    </div>
                  </div>
                </div>
                <p class="mb-0">#Collection Name</p>
              </div>
              <div class="item">
                <div class="swipe-item">
                  <div class="swipe-round">
                    <span class="icon-swipe">#</span>
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
                    </div>
                    <div class="swipe-action-content">
                      <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
                      <a href="#">Edit</a>
                      <a href="#">Remove</a>
                    </div>
                  </div>
                </div>
                <p class="mb-0">#Collection Name</p>
              </div>
              <div class="item">
                <div class="swipe-item">
                  <div class="swipe-round">
                    <span class="icon-swipe">#</span>
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
                    </div>
                    <div class="swipe-action-content">
                      <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
                      <a href="#">Edit</a>
                      <a href="#">Remove</a>
                    </div>
                  </div>
                </div>
                <p class="mb-0">#Collection Name</p>
              </div>
              <div class="item">
                <div class="swipe-item">
                  <div class="swipe-round">
                    <span class="icon-swipe">#</span>
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
                    </div>
                    <div class="swipe-action-content">
                      <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
                      <a href="#">Edit</a>
                      <a href="#">Remove</a>
                    </div>
                  </div>
                </div>
                <p class="mb-0">#Collection Name</p>
              </div>
              <div class="item">
                <div class="swipe-item">
                  <div class="swipe-round">
                    <span class="icon-swipe">#</span>
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
                    </div>
                    <div class="swipe-action-content">
                      <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
                      <a href="#">Edit</a>
                      <a href="#">Remove</a>
                    </div>
                  </div>
                </div>
                <p class="mb-0">#Collection Name</p>
              </div>
              <div class="item">
                <div class="swipe-item">
                  <div class="swipe-round">
                    <span class="icon-swipe">#</span>
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
                    </div>
                    <div class="swipe-action-content">
                      <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
                      <a href="#">Edit</a>
                      <a href="#">Remove</a>
                    </div>
                  </div>
                </div>
                <p class="mb-0">#Collection Name</p>
              </div>
              <div class="item">
                <div class="swipe-item">
                  <div class="swipe-round">
                    <span class="icon-swipe">#</span>
                    <img src="../images/aaabf028325021.5637326997cb1.jpg" alt="">
                  </div>
                  <div class="swipe-img-wrapper">
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/d9710383434639.5d3c346168dd3.jpg" alt="">
                    </div>
                    <div class="swipe-img">
                      <img src="../images/29be6592342279.5e49609509d85.jpg" alt="">
                    </div>
                  </div>
                  <div class="swipe-action">
                    <div class="swipe-action-btn">
                      <i class="fas fa-pen" aria-hidden="true"></i>
                    </div>
                    <div class="swipe-action-content">
                      <a href="#share" class="collapse-collection" data-toggle="collapse">Share</a>
                      <a href="#">Edit</a>
                      <a href="#">Remove</a>
                    </div>
                  </div>
                </div>
                <p class="mb-0">#Collection Name</p>
              </div>

            </div>
          </div>
        </div>
        <div class="collapse bg-grey" id="addCollaction" data-parent="#collections">
          <div class="p-8">
            <form action="#">
              <div class="row">
                <div class="col-xl-7 col-lg-12">
                  <div class="form-group row">
                    <div class="col-4">
                      <label>Name of Collection<sup>*</sup> </label>
                    </div>
                    <div class="col-8">
                      <input type="text" class="form-control" placeholder="Name ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-4">
                      <label>Start Date - End Date</label>
                    </div>
                    <div class="col-8">
                      <div class="range-calendar calendar-collection" id="calendar-pick">
                        <div id="daterangepicker-inline-container" class="daterangepicker-inline">
                        </div>
                        <input type="hidden" id="daterangepicker-inline">
                        <div class="clearfix"></div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="col-12">
                  <div class="text-right mt-4">
                    <button class="btn btn-dark rounded-0 px-5">Save</button>
                  </div>
                </div>
              </div>
            </form>
          </div>

        </div>
        <div class="collapse bg-grey" id="share" data-parent="#collections">
          <div class="p-4 shared-container">
            <h5 class="mb-4">Share with social media:</h5>
            <div class="sharing d-flex">
              <a href="#" class="sharing-item fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#" class="sharing-item tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#" class="sharing-item gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
              <a href="#" class="sharing-item pn"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
            </div>
            <div class="divider-share my-5"></div>
            <h5 class="mb-4">Or share with email:</h5>
            <form action="#" class="shared-collection">
              <div class="mail-outer">
                <div class="row mail-list ">
                  <div class="col">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="col">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="col">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="">
                  </div>
                  <div class="col-add pr-3">
                    <a href="#" class="btn btn-add-collection is-small btn-new-mail-form">
                      +
                    </a>
                  </div>
                </div>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="gdpr">
                <label class="custom-control-label" for="gdpr">
                  I Agree to the GDPR...
                </label>
              </div>
              <div class="text-right mt-2">
                <button type="submit" class="btn btn-dark px-5 rounded-0 ">Send</button>
              </div>
              <div class="success-message">
                <h3>Your collection has been shared</h3>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="row mt-5 mb-4">
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="pr-lst collection-lst">
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
            <i class="ico ico-diamon diamon-label"></i>
            <div class="pr-lst-desc fav-lst-desc">
              <div class="act-lst">
                <p class="title-font-2 tt-price">from - € 499</p>
                <p><a href="#">View Details</a></p>
                <p><a href="#">Reservation</a></p>
                <p><a href="#">-Remove</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="pr-lst collection-lst">
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
            <i class="ico ico-diamon diamon-label"></i>
            <div class="pr-lst-desc fav-lst-desc">
              <div class="act-lst">
                <p class="title-font-2 tt-price">from - € 499</p>
                <p><a href="#">View Details</a></p>
                <p><a href="#">Reservation</a></p>
                <p><a href="#">-Remove</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="pr-lst collection-lst">
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
            <i class="ico ico-diamon diamon-label"></i>
            <div class="pr-lst-desc fav-lst-desc">
              <div class="act-lst">
                <p class="title-font-2 tt-price">from - € 499</p>
                <p><a href="#">View Details</a></p>
                <p><a href="#">Reservation</a></p>
                <p><a href="#">-Remove</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="pr-lst collection-lst">
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
            <i class="ico ico-diamon diamon-label"></i>
            <div class="pr-lst-desc fav-lst-desc">
              <div class="act-lst">
                <p class="title-font-2 tt-price">from - € 499</p>
                <p><a href="#">View Details</a></p>
                <p><a href="#">Reservation</a></p>
                <p><a href="#">-Remove</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="pr-lst collection-lst">
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
            <i class="ico ico-diamon diamon-label"></i>
            <div class="pr-lst-desc fav-lst-desc">
              <div class="act-lst">
                <p class="title-font-2 tt-price">from - € 499</p>
                <p><a href="#">View Details</a></p>
                <p><a href="#">Reservation</a></p>
                <p><a href="#">-Remove</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="pr-lst collection-lst">
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
            <i class="ico ico-diamon diamon-label"></i>
            <div class="pr-lst-desc fav-lst-desc">
              <div class="act-lst">
                <p class="title-font-2 tt-price">from - € 499</p>
                <p><a href="#">View Details</a></p>
                <p><a href="#">Reservation</a></p>
                <p><a href="#">-Remove</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="pr-lst collection-lst">
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
            <i class="ico ico-diamon diamon-label"></i>
            <div class="pr-lst-desc fav-lst-desc">
              <div class="act-lst">
                <p class="title-font-2 tt-price">from - € 499</p>
                <p><a href="#">View Details</a></p>
                <p><a href="#">Reservation</a></p>
                <p><a href="#">-Remove</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="pr-lst collection-lst">
            <img src="../images/29be6592342279.5e49609509d85.jpg" class="w-100" data-wow-delay=".3s" alt="">
            <i class="ico ico-diamon diamon-label"></i>
            <div class="pr-lst-desc fav-lst-desc">
              <div class="act-lst">
                <p class="title-font-2 tt-price">from - € 499</p>
                <p><a href="#">View Details</a></p>
                <p><a href="#">Reservation</a></p>
                <p><a href="#">-Remove</a></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--end::Wrapper-->
    <!--begin::Purchase-->

    <!--end::Purchase-->
  </div>
  <!--end::Content-->
</div>
<!--end::Demo Panel-->
                        </div>
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="#"
                                                    class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                                            </div>
                                            <div>
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link px-2 active" data-toggle="tab"
                                                            href="#data-table" aria-selected="true">
                                                            <i class="text-dark-50 flaticon-interface-7"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link px-2" data-toggle="tab" href="#data-grid"
                                                            aria-selected="false">
                                                            <i class="text-dark-50 flaticon-squares-1"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Subheader-->
                            </div>

                            <!--begin::Entry-->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="data-table">
                                    <!--begin: Datatable-->
                                    <div class="table-scroller">
                                        <div class="datatable datatable-bordered datatable-head-custom"
                                            id="kt_datatable">
                                        </div>
                                    </div>
                                    <!--end: Datatable-->
                                </div>
                                <div class="tab-pane fade" id="data-grid">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch">
                                                <!--begin::Body-->
                                                <div class="card-body">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Pic-->
                                                        <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                                                            <img src="../users/assets/media/project-logos/3.png"
                                                                alt="image" />
                                                        </div>
                                                        <!--end::Pic-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column mr-auto">
                                                            <!--begin: Title-->
                                                            <div class="d-flex flex-column mr-auto">
                                                                <a href="#"
                                                                    class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                                                                    Guest Name</a>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <a href="#reservation_popup" title="View Reservations"
                                                            data-canvas="popup">
                                                            <i class="flaticon-calendar-1" style="color: #000;"></i>
                                                        </a>
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Description-->
                                                    <div class="mb-7 mt-7">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="text-dark-75 font-weight-bolder mr-2">Booked
                                                                From:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">Emporium-Islands.com</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Mobile:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">8901929019</a>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-between align-items-cente my-1">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">you@mail.com</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Agent:</span>
                                                            <span class="text-muted font-weight-bold">Lorem
                                                                Lipsum</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Description-->
                                                    <div class="d-flex mb-5">
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="font-weight-bold mr-4">Start
                                                                Date</span>
                                                            <span
                                                                class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14
                                                                Jan, 17</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bold mr-4">End Date</span>
                                                            <span
                                                                class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">15
                                                                Oct, 18</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;">
                                                            <i class="label-success-o"></i> New York</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 2 Feb </div>
                                                                <div class="w-100 text-right">Depart : 8 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;"><i class="label-warning-o"></i>
                                                            Boston</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 8 Feb </div>
                                                                <div class="w-100 text-right">Depart : 14 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;"><i class="label-danger-o"></i>
                                                            Miami</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 14 Feb </div>
                                                                <div class="w-100 text-right">Depart : 22 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-danger" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                                <!-- Begin::Footer -->
                                                <div class="card-footer d-flex align-items-center">
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="svg-icon svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Text/Bullet-list.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                                            fill="#000000"></path>
                                                                        <path
                                                                            d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                                            fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <a href="#itinerary"
                                                                class="font-weight-bolder text-primary ml-2"
                                                                data-canvas="popup">Itinerary</a>
                                                        </div>
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="svg-icon svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Communication/Group-chat.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                            fill="#000000"></path>
                                                                        <path
                                                                            d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                            fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <a href="#chat" class="font-weight-bolder text-primary ml-2"
                                                                id="communication"
                                                                data-canvas="popup">Communications</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End::Footer -->
                                            </div>
                                            <!--end:: Card-->
                                        </div>
                                        <div class="col-xl-4">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch">
                                                <!--begin::Body-->
                                                <div class="card-body">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Pic-->
                                                        <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                                                            <img src="../users/assets/media/project-logos/3.png"
                                                                alt="image" />
                                                        </div>
                                                        <!--end::Pic-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column mr-auto">
                                                            <!--begin: Title-->
                                                            <div class="d-flex flex-column mr-auto">
                                                                <a href="#"
                                                                    class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                                                                    Guest Name</a>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <a href="#reservation_popup" title="View Reservations"
                                                            data-canvas="popup">
                                                            <i class="flaticon-calendar-1" style="color: #000;"></i>
                                                        </a>
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Description-->
                                                    <div class="mb-7 mt-7">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="text-dark-75 font-weight-bolder mr-2">Booked
                                                                From:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">Emporium-Islands.com</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Mobile:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">8901929019</a>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-between align-items-cente my-1">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">you@mail.com</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Agent:</span>
                                                            <span class="text-muted font-weight-bold">Lorem
                                                                Lipsum</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Description-->
                                                    <div class="d-flex mb-5">
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="font-weight-bold mr-4">Start
                                                                Date</span>
                                                            <span
                                                                class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14
                                                                Jan, 17</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bold mr-4">End Date</span>
                                                            <span
                                                                class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">15
                                                                Oct, 18</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;">
                                                            <i class="label-success-o"></i> New York</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 2 Feb </div>
                                                                <div class="w-100 text-right">Depart : 8 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;"><i class="label-warning-o"></i>
                                                            Boston</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 8 Feb </div>
                                                                <div class="w-100 text-right">Depart : 14 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;"><i class="label-danger-o"></i>
                                                            Miami</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 14 Feb </div>
                                                                <div class="w-100 text-right">Depart : 22 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-danger" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                                <!-- Begin::Footer -->
                                                <div class="card-footer d-flex align-items-center">
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="svg-icon svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Text/Bullet-list.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                                            fill="#000000"></path>
                                                                        <path
                                                                            d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                                            fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <a href="#itinerary"
                                                                class="font-weight-bolder text-primary ml-2"
                                                                data-canvas="popup">Itinerary</a>
                                                        </div>
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="svg-icon svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Communication/Group-chat.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                            fill="#000000"></path>
                                                                        <path
                                                                            d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                            fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <a href="#chat" class="font-weight-bolder text-primary ml-2"
                                                                id="communication"
                                                                data-canvas="popup">Communications</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End::Footer -->
                                            </div>
                                            <!--end:: Card-->
                                        </div>
                                        <div class="col-xl-4">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch">
                                                <!--begin::Body-->
                                                <div class="card-body">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Pic-->
                                                        <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                                                            <img src="../users/assets/media/project-logos/3.png"
                                                                alt="image" />
                                                        </div>
                                                        <!--end::Pic-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column mr-auto">
                                                            <!--begin: Title-->
                                                            <div class="d-flex flex-column mr-auto">
                                                                <a href="#"
                                                                    class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                                                                    Guest Name</a>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <a href="#reservation_popup" title="View Reservations"
                                                            data-canvas="popup">
                                                            <i class="flaticon-calendar-1" style="color: #000;"></i>
                                                        </a>
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Description-->
                                                    <div class="mb-7 mt-7">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="text-dark-75 font-weight-bolder mr-2">Booked
                                                                From:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">Emporium-Islands.com</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Mobile:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">8901929019</a>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-between align-items-cente my-1">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                                            <a href="#"
                                                                class="text-muted text-hover-primary">you@mail.com</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span
                                                                class="text-dark-75 font-weight-bolder mr-2">Agent:</span>
                                                            <span class="text-muted font-weight-bold">Lorem
                                                                Lipsum</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Description-->
                                                    <div class="d-flex mb-5">
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="font-weight-bold mr-4">Start
                                                                Date</span>
                                                            <span
                                                                class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14
                                                                Jan, 17</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bold mr-4">End Date</span>
                                                            <span
                                                                class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">15
                                                                Oct, 18</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;">
                                                            <i class="label-success-o"></i> New York</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 2 Feb </div>
                                                                <div class="w-100 text-right">Depart : 8 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;"><i class="label-warning-o"></i>
                                                            Boston</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 8 Feb </div>
                                                                <div class="w-100 text-right">Depart : 14 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-5 align-items-center">
                                                        <span class="d-block font-weight-bold mr-5"
                                                            style="width: 150px;"><i class="label-danger-o"></i>
                                                            Miami</span>
                                                        <div class="w-100">
                                                            <div class="d-flex">
                                                                <div class="w-100">Arrive : 14 Feb </div>
                                                                <div class="w-100 text-right">Depart : 22 Feb
                                                                </div>
                                                            </div>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-danger" role="progressbar"
                                                                    style="width: 65%;" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!-- <span class="ml-3 font-weight-bolder">65%</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                                <!-- Begin::Footer -->
                                                <div class="card-footer d-flex align-items-center">
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="svg-icon svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Text/Bullet-list.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                                            fill="#000000"></path>
                                                                        <path
                                                                            d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                                            fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <a href="#itinerary"
                                                                class="font-weight-bolder text-primary ml-2"
                                                                data-canvas="popup">Itinerary</a>
                                                        </div>
                                                        <div class="d-flex align-items-center mr-7">
                                                            <span class="svg-icon svg-icon-gray-500">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/../users/assets/media/svg/icons/Communication/Group-chat.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24">
                                                                        </rect>
                                                                        <path
                                                                            d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                            fill="#000000"></path>
                                                                        <path
                                                                            d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                            fill="#000000" opacity="0.3"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <a href="#chat" class="font-weight-bolder text-primary ml-2"
                                                                id="communication"
                                                                data-canvas="popup">Communications</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End::Footer -->
                                            </div>
                                            <!--end:: Card-->
                                        </div>

                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Pagination-->
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="d-flex flex-wrap mr-3">
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="ki ki-bold-arrow-back icon-xs"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                                            <a href="#"
                                                class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="ki ki-bold-arrow-next icon-xs"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <select
                                                class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                                                style="width: 75px;">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                            <span class="text-muted">Displaying 10 of 230 records</span>
                                        </div>
                                    </div>
                                    <!--end::Pagination-->
                                </div>
                            </div>
                            <!--end::Entry-->
                        </div>
                    </div>
                    <!--end::Card-->
@endsection                
<script type="text/javascript">
      
        var picker = $('#daterangepicker-inline').daterangepicker({
            parentEl: "#daterangepicker-inline-container",
            autoApply: true,
            minDate: new Date(),
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear',
            }
        });

        picker.on('apply.daterangepicker', function (ev, picker) {
            $('.onrange').html(picker.startDate.format('DD-MM-YYYY') + ' -> ' + picker.endDate.format('DD-MM-YYYY'));
            $('.include-form').fadeIn("fast");
        });
        picker.data('daterangepicker').hide = function () { };
        picker.data('daterangepicker').show();


        $(".btn-data-grid").click(function (e) {
            e.preventDefault();
            $('.data-table').toggleClass('show');
            $('.data-grid').toggleClass('show');
        })
        $('#calRange').daterangepicker({
            buttonClasses: ' btn',
            applyClass: 'btn-primary',
            cancelClass: 'btn-secondary',
            locale: {
                format: 'D MMM'
            }
        });
        var slider = document.getElementById('kt_nouislider_3');

        noUiSlider.create(slider, {
            start: [20, 80],
            connect: true,
            range: {
                'min': 0,
                'max': 200
            }
        });
        
        var sliderInput0 = document.getElementById('kt_nouislider_3_input');
        var sliderInput1 = document.getElementById('kt_nouislider_3.1_input');
        var sliderInputs = [sliderInput1, sliderInput0];

        slider.noUiSlider.on('update', function (values, handle) {
            sliderInputs[handle].value = values[handle];
        });

        $('.select-experience').click(function(e){
            e.preventDefault();
            $(this).closest('.experience-list').addClass('active');
            $(this).closest('.experience-list').find('.selected').addClass('active');
        })
        $(".remove").click(function(e){
            e.preventDefault();
            $(this).closest('.experience-list').removeClass('active');
            $(this).closest('.experience-list').find('.selected').removeClass('active');
        })
</script>