<div class="col-lg-8 content-lg pt-5">
  <ul class="nav nav-pills nav-clr nav-breadcrumb nav-breadcrumb-ip mb-3 mt-3">
    <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#">FAQ</a>
    </li>
</ul>
<div class="d-flex w-100 wow fadeInUp align-items-center" data-wow-delay=".3s">
    <a href="main-page.html" class="back-btn ipad-view">
        <i class="ico ico-back"></i>
    </a>
    <div class="title-main mb-4 w-100">
        <h2>FAQ</h2>
        <a href="suite.html" class="main-close">
            <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
                xmlns="http://www.w3.org/2000/svg">
                <title>Close</title>
                <path
                    d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                </path>
            </svg>
        </a>
    </div>
</div>
  <div class="main-container wow fadeInUp" data-wow-delay=".3s">
    <div class="main-content">
      <div class="accordion accordion-ex" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left btn-accordion collapsed" type="button" data-toggle="collapse"
                data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Collapsible Group Item #1

                <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
            data-parent="#accordionExample">
            <div class="card-body">
              Some placeholder content for the first accordion panel. This panel is shown by default, thanks to
              the <code>.show</code> class.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left btn-accordion collapsed" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Collapsible Group Item #2
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Some placeholder content for the second accordion panel. This panel is hidden by default.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left btn-accordion collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Collapsible Group Item #3
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </button>
              </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
            data-parent="#accordionExample">
              <div class="card-body">
                  And lastly, the placeholder content for the third and final accordion panel. This panel is hidden
                  by default.
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('frontend.themes.EC.hotel.gallery')

@section('faq_script')
    <script>
    $('.restaurant-slide').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  </script>
    @endsection