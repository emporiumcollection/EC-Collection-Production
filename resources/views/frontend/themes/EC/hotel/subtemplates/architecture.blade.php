
<div class="col-lg-8 col-hotel-slider">
  <ul class="nav nav-pills nav-clr nav-breadcrumb nav-breadcrumb-ip mb-3 mt-3">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#america">Architect</a>
    </li>
  </ul>
  <div class="d-flex w-100 wow fadeInUp" data-wow-delay=".3s">
    <a href="javascript:history.go(-1)" class="back-btn ipad-view">
      <i class="ico ico-back-btn"></i>
    </a>
    <div class="title-main mb-4 w-100">
      <h2>{{ $property->architecture_title }}</h2>
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
      <div class="row align-items-start">
        <div class="col-md-6 mmb-4">
          <div class="row ">
            <div class="col-6">
              <a href="#">
                <div class="img-overlay">
                  <img src="{{ asset('/property-image/resize/185x231/'.$property->property_slug.'/'.$property->architecture_portraite_image1.'/architect-image')}}" alt="">
                </div>
              </a>
            </div>
            <div class="col-6">
              <a href="#">
                <div class="img-overlay">
                  <img src="{{ asset('/property-image/resize/185x231/'.$property->property_slug.'/'.$property->architecture_portraite_image2.'/architect-image')}}" alt="">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mmb-4">
          <a href="#">
            <div class="img-overlay">
              <img src="{{ asset('/property-image/resize/400x267/'.$property->property_slug.'/'. $property->architecture_landscape_image1.'/architect-image')}}" alt="">
              <div class="overlay">
                <p class="d-flex align-items-center justify-content-center">
                  {{ $property->architecture_landscapehovertext_image1 }}
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row align-items-end">
        <div class="col-md-6 mmb-4">
          <a href="#">
            <div class="img-overlay">
              <img src="{{ asset('/property-image/resize/400x267/'.$property->property_slug.'/'. $property->architecture_landscape_image2.'/architect-image')}}" alt="">
              <div class="overlay">
                <p class="d-flex align-items-center justify-content-center">
                  {{ $property->architecture_landscapehovertext_image2 }}
                </p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 mmb-4">
          <div class="row ">
            <div class="col-6">
              <a href="#">
                <div class="img-overlay">
                  <img src="{{ asset('/property-image/resize/185x231/'.$property->property_slug.'/'. $property->architecture_portraite_image3.'/architect-image')}}" alt="">
                </div>
              </a>
            </div>
            <div class="col-6">
              <a href="#">
                <div class="img-overlay">
                  <img src="{{ asset('/property-image/resize/185x231/'.$property->property_slug.'/'. $property->architecture_portraite_image3.'/architect-image')}}" alt="">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-6">
          <p class="px-5">
            {{ $property->architecture_desciription }}
            {{ $property->architecture_sub_desciription }}
          </p>
        </div>
        <div class="col-md-6">
          <div class="title-offset mt-5 relax-offset">
            <h3 class="title-second title-line mb-0 font-3">{{ $property->architecture_sub_title }}</h3>
          </div>
        </div>
      </div>
      <div class="line-separate w-100"></div>

      <div class="px-5 text-center mb-5">
        <h3 class="mb-4">{{ $property->architecture_design_title }}</h3>
        <p class="px-5">
          {{ $property->architecture_design_desciription }}
        </p>
      </div>
      <div class="user-profile mb-5">
        <img src="{{ asset('/property-image/resize/400x267/'.$property->property_slug.'/'. $property->architecture_design_image.'/architect-image')}}" class="img-fluid" alt="">
        <p class="title-second title-line font-3 user-title">Interior Design</p>
      </div>
      <div class="image-pad--1">
        <img src="{{ asset('/property-image/resize/400x267/'.$property->property_slug.'/'. $property->architecture_image.'/architect-image')}}" class="img-fluid img-rounded" alt="">
      </div>
      <p class="py-5 px-15">
        {{ $property->architecture_sub_desciription }}
      </p>
      <div class="image-pad--1">
        <img src="{{ asset('/property-image/resize/400x267/'.$property->property_slug.'/'. $property->architecture_image2.'/architect-image')}}" class="img-fluid img-rounded" alt="">
      </div>
      <?php if(isset($property->architecture_design_video) AND $property->architecture_design_video == 'upload') { ?>
        <div class="videoWrapper mt-5">
          <video width="640" height="360" style="width:100%;height:100%;" poster="images/maxresdefault.webp" preload="none" controls="" playsinline="" webkit-playsinline="">
            <source src="{{ asset('/property-image/resize/400x267/'.$property->property_slug.'/'. $property->architecture_design_video.'/architect-image')}}" type="video/mp4">
          </video>
        </div>
      <?php }elseif(isset($property->architecture_design_video) 
          AND $property->architecture_design_video_link_type == 'Youtube'
            AND $property->architecture_design_video_link_type == 'vimeo' ){ ?>
        <iframe width="700" height="315"
          src="{{ $property->architecture_design_video_link }}">
        </iframe>
      <?php }?>
    </div>
  </div>
</div>

@include('frontend.themes.EC.layouts.subsections.property_gallery')