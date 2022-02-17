<?php
if(isset($restaurant_detail) && !empty($restaurant_detail)){  
  $path = 'restrurant-image';
  $restaurant = $restaurant_detail;
}elseif(isset($bar_detail) && !empty($bar_detail)){
  $path = 'bars';
  $restaurant = $bar_detail;
}
if(Request::segment(3) == 'restaurant'){
  if(isset($property->restaurantList) AND !empty($property->restaurantList)){
    $path = 'restrurant-image'; 
    $restaurantAndbar = $property->restaurantList;
  }
}
if(Request::segment(3) == 'bar'){  
  if(isset($property->barList) AND !empty($property->barList)){
    $path = 'bars';
    $restaurantAndbar = $property->barList;
  }
}
?> 

<div class="col-lg-8 content-lg pt-5 col-restaurant-slider">
  <ul class="nav nav-pills nav-clr nav-breadcrumb nav-breadcrumb-ip mb-3 mt-3">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#">Restaurants & Bars</a>
    </li>
  </ul>
  <div class="d-flex w-100 wow fadeInUp align-items-center" data-wow-delay=".3s">
    <a href="main-page.html" class="back-btn ipad-view">
      <i class="ico ico-back"></i>
    </a>
    <div class="title-main mb-4 w-100">
      <h2>Restaurants & Bars</h2>
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
  
  <div class="slider-container hotel-page-list mmb-4">
    <div class="my-dropdown">
      <div class="btn-group dropleft">
        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="ico ico-diamon diamon-label"></i>
        </a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item">Add to collection</a>
          <a href="#" class="dropdown-item btn-sidebar create-collection"
            data-sidebar="#myCollection">Create
            new collection</a>
        </div>
      </div>
    </div>
    <div class="slider-detail">
      <?php 
      if(!empty($restaurantAndbar)):
      foreach($restaurantAndbar as $key => $value): 
        $re_name = str_slug($value['title']);
        if(isset($res_slider)): 
        foreach ($res_slider as $key => $image) :
          if(is_array($image)){
            $file_name = $image['file_name'];
          }elseif(is_object($image)){
            $file_name = $image->file_name;
          }else{
            $file_name = 'default-image.png';
          }
      ?>
      <div>
        <img src="{{ asset('/property-image/resize/1200x700/'.$re_name.'/'.$file_name.'/'.$path)}}" id="heading-img" class="img-fluid" alt="">
      </div>
      <?php endforeach;
        endif;
        endforeach;
        endif;
      ?>
    </div>
    <div class="prev"><i class="ico ico-back"></i></div>
    <div class="next"><i class="ico ico-next"></i></div>
    <div class="hotel-meta full-width hotel-meta-details">
      {{-- <a href="#" class="view btn-sidebar" data-sidebar="#reservation">
        Reservation
      </a> --}}
      {{-- <a class="nav-link btn-sidebar" href="#" data-sidebar="#info_sidebar"> --}}
      <a href="#" class="view btn-sidebar" data-sidebar="#restaurant_menu">
        Menu
      </a>
      <a href="#" class="view btn-sidebar" data-sidebar="#direction">
        Directions
      </a>
    </div>
  </div>
  <div class="mt-5">
    <div id="restaurant-3" class="tab-em active  fadeIn">
      <div class="title-offset mt-5 ">
        <h3 class="title-second title-line mb-0 font-3">{{ $restaurant->title }}</h3>
      </div>
      <div class="py-5 px-15">
        {{ $restaurant->description }}
      </div>
      <?php if(!empty($restaurantAndbar)):
      foreach($restaurantAndbar as $key => $value): 
        $re_name = str_slug($value['title']); 
      ?>
      <div class="row align-items-start">
        <div class="col-md-12 mmb-4">
          <div class="grid-layout" id="location_gallery_hotel">
            <?php
            if(isset($value['gallery']['files'])){
              foreach ($value['gallery']['files'] as $key => $image): 
              if($key == 0){
              if(is_array($image)){
                $file_name = $image['file_name'];
              }elseif(is_object($image)){
                $file_name = $image->file_name;
              }else{
                $file_name = 'default-image.png';
              }
            ?>
            <a href="{{ asset('/property-image/resize/205x300/'.$re_name.'/'.$file_name.'/'.$path)}}" data-sub-html="<?php $re_name ?> image" class="grid-item grid-row-1 span-1">
              <img data-src="{{ asset('/property-image/resize/205x300/'.$re_name.'/'.$file_name.'/'.$path)}}" alt="" class="location-photos">
          </a>
            <?php } else {
              if(is_array($image)){
                $file_name = $image['file_name'];
              }elseif(is_object($image)){
                $file_name = $image->file_name;
              }else{
                $file_name = 'default-image.png';
              }
            ?>
            <a href="{{ asset('/property-image/resize/205x300/'.$re_name.'/'.$file_name.'/'.$path)}}" data-sub-html="<?php $re_name ?> image" class="grid-item grid-row-2 span-2">
              <img data-src="{{ asset('/property-image/resize/205x300/'.$re_name.'/'.$file_name.'/'.$path)}}" alt="" class="location-photos">
            </a>
            <?php }  
             endforeach;
            }
            ?>
          </div>
        </div>
      </div>
      <?php if(isset($restaurant->video_type) AND $restaurant->video_type == 'upload') {
        if(isset($restaurant->architecture_design_video)){ ?>
        <div class="videoWrapper mt-5">
          <video width="640" height="360" style="width:100%;height:100%;" poster="images/maxresdefault.webp" preload="none" controls="" playsinline="" webkit-playsinline="">
            <source src="{{$restaurant->architecture_design_video}}" type="video/mp4">
          </video>
        </div>
      <?php } }
      if(isset($restaurant->video_type) AND $restaurant->video_type == 'link'){ 
        if(isset($restaurant->video_link)) { ?>
        <iframe width="700" height="315"
          src="{{ $restaurant->video_link }}">
        </iframe>
      <?php
        } 
      } 
      endforeach;
      endif;
       ?>
    </div>
  </div>
</div>

<div class="sidebar-main pb-0" id="direction">
  <a href="#" class="close-sidebar">
    <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
        xmlns="http://www.w3.org/2000/svg">
        <title>Close</title>
        <path
            d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
        </path>
    </svg>
  </a>

  <div class="sidebar-scroller">
    <div class="d-flex align-items-center mb-5">
      <a href="#" class="sidebar-back">
        <i class="ico ico-back"></i>
      </a>
      <h3 class="title-second title-line mb-0">
        Direction
      </h3>
    </div>
    <div class="col-lg-8 content-lg">
      <div class="d-flex w-100 wow fadeInUp align-items-center" data-wow-delay=".3s">
        <a href="main-page.html" class="back-btn ipad-view">
          <i class="ico ico-back"></i>
        </a>
        <div class="title-main mb-4 w-100">
          <h2>{{ $restaurant->title }}</h2>
          <a href="/hotel/{{ $property->property_slug }}" class="main-close">
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
        
        <div class="main-content p-0">
          <div class="map-location">
            
            <div id="map3"></div>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function(){
        var lat  = '{{ $restaurant->latitude}}';
        var long = '{{ $restaurant->longitude}}';
        var loc = '{{ $restaurant->location }}';
        setMapLocation(lat, long ,loc);
      });
    </script>
  </div>
</div>
  <div class="sidebar-main pt-4" id="restaurant_menu">
    <a href="#" class="close-sidebar">
      <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
          xmlns="http://www.w3.org/2000/svg">
        <title>Close</title>
        <path
            d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
        </path>
      </svg>
    </a>

    <div class="sidebar-scroller">
      <div class="d-flex align-items-center mb-5">
          <a href="#" class="sidebar-back">
              <i class="ico ico-back"></i>
          </a>
          <h3 class="title-second title-line mb-0">
              Menu Name
          </h3>
      </div>
      <?php if(isset($res_menu)){ ?>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <?php foreach ($res_menu as $key => $data) { ?>
          <li class="nav-item" role="presentation{{ $data->id }}">
            <a class="nav-link @if($key == 0) active @endif" id="home-tab{{ $data->id }}" data-toggle="tab" href="#home{{ $data->id }}" role="tab" aria-controls="home{{ $data->id }}" aria-selected="@if($key == 0) true @else false @endif">{{ $data->title }}</a>
          </li>
        <?php } ?>
      </ul>
      <div class="tab-content" id="">
        <?php foreach ($res_menu as $key => $data) { ?>
          <div class="tab-pane fade @if($key == 0) show active @endif" id="home{{ $data->id }}" role="tabpanel" aria-labelledby="home-tab{{ $data->id }}">
            <iframe src="{{ asset('/uploads/container_user_files/restaurants/'.$re_name.'/menu/' . $data->file_name)}}" width="90%" height="800px">
            </iframe>
          </div>
        <?php } ?>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
</div>
</div>

<div class="sidebar-main reserve-sidebar" id="reservation_restaurant">
  <a href="#" class="close-sidebar">
    <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
        xmlns="http://www.w3.org/2000/svg">
        <title>Close</title>
        <path
            d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
        </path>
    </svg>
  </a>
  <div class="sidebar-scroller">
    <h3 class="mb-4">Reserve Table</h3>
    <p>Please fill the form below accurately to enable us serve you better!.. welcome!</p>
    <hr>
    <form action="#">
      <div class="row">
        <div class="col-md-4">
          <label class="mt-2">Full Name </label>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input type="text" class="form-control">
              <small class="form-text text-muted">First Name</small>
            </div>
            <div class="col-sm-6 form-group">
              <input type="text" class="form-control">
              <small class="form-text text-muted">Last Name</small>
            </div>
          </div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-4">
          <label class="mt-2">E-mail </label>
        </div>
        <div class="col-md-8">
          <input type="email" class="form-control" placeholder="ex: myname@example.com">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-4">
            <label class="mt-2">Phone </label>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-4">
            <label class="mt-2">#of Guests </label>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-12">
            <label class="mt-2">Reservation</label>
        </div>
        <div class="col-md-12">
            <div class="date-reserve">
                <div class="date-time"></div>
            </div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-4">
            <label class="mt-2">Reservation Type </label>
        </div>
        <div class="col-md-8">
          <select class="form-dropdown w-100">
              <option value=""> Please Select </option>
              <option value="Dinner"> Dinner </option>
              <option value="VIP/Mezzanine"> VIP/Mezzanine </option>
              <option value="Birthday/ Anniversary"> Birthday/ Anniversary </option>
              <option value="Nightlife"> Nightlife </option>
              <option value="Private"> Private </option>
              <option value="Wedding"> Wedding </option>
              <option value="Corporate"> Corporate </option>
              <option value="Holiday"> Holiday </option>
              <option value="Other"> Other </option>
          </select>
        </div>
      </div>
      <div class="row form-group">
          <div class="col-md-4">
              <label class="mt-2">If Other above, please specify </label>
          </div>
          <div class="col-md-8">
              <input type="text" class="form-control">
          </div>
      </div>
      <div class="row form-group">
          <div class="col-md-4">
              <label class="mt-2">Any special requests  </label>
          </div>
          <div class="col-md-8">
              <textarea class="form-control" cols="30" rows="4"></textarea>
          </div>
      </div>

      <div class="text-right my-4">
          <button class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@include('frontend.themes.EC.layouts.subsections.property_gallery')