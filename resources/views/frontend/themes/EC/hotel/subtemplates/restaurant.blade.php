<div class="col-lg-8 col-hotel-slider">
  <ul class="nav nav-pills nav-clr nav-breadcrumb nav-breadcrumb-ip mb-3 mt-3">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#">Restaurants & Bars</a>
    </li>
  </ul>
  <div class="d-flex w-100 wow fadeInUp " data-wow-delay=".3s">
    <a href="javascript:history.go(-1)" class="back-btn ipad-view">
      <i class="ico ico-back-btn"></i>
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
  <div class="main-container wow fadeInUp" data-wow-delay=".3s">
    <div class="main-content">
      <div class="bg-grey p-4 restarant-container">
        <div class="restaurant-slide">
        <?php if(isset($property->restaurantList) && !empty($property->restaurantList)){
          foreach ($property->restaurantList as $key => $value) {
            $slug = str_slug($value['title']);
            if(is_array($value)){
              $file_name = $value['gallery']['files'][0]['file_name'];
            }else{
              $file_name = 'default-image.png';
            }
          ?>
          <div class="slider-item">
            <a href="/hotel/{{ $property->property_slug }}/{{'restaurant'}}/{{$slug}}"  class="tab-lin scrollto">
              <div class="slider-item-img">
                <img src="{{ asset('/property-image/resize/205x300/'.$slug.'/'.$file_name.'/restrurant-image')}}" alt="">
              </div>
              <div class="text-center mt-3">
                <p class="mb-0">{{ $value['title'] }}</p>
              </div>
            </a>
          </div>
          <?php } }   
            if (isset($property->barList) && !empty($property->barList)) {
              foreach ($property->barList as $key => $bar) {
                $slug = str_slug($bar['title']);
                if(isset($bar['gallery']['files'])){
                  foreach($bar['gallery']['files'] as $key => $image){
                    if($key == 0){
                      if(is_array($image)){
                        $file_name = $image['file_name'];
                      }else{
                        $file_name = 'default-image.png';
                      }?>
                      <div class="slider-item">
                        <a href="/hotel/{{ $property->property_slug }}/{{'bar'}}/{{$slug}}" class="tab-link scrollto">
                          <div class="slider-item-img">
                            <img src="{{ asset('/property-image/resize/205x300/'.$slug.'/'.$file_name.'/bar-image')}}" alt="">
                          </div>
                          <div class="text-center mt-3">
                            <p class="mb-0">{{ $bar['title'] }}</p>
                          </div>
                        </a>
                      </div>
                    <?php }
                  }
                }  
              }
            } ?>    
          </div>
        </div>
      </div>
    </div>
  </div>
@include('frontend.themes.EC.layouts.subsections.property_gallery')