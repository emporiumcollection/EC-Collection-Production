<div class="sidebar-main" id="policy">
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
        <h3 class="title-second title-line mb-0" data-place="property">
            @if(isset($hotel_data[0]->property_name))
                <b>{{ $hotel_data[0]->property_name }}</b>
            @endif 
        </h3>
    </div>
    @if(isset($policy) && !empty($policy))
      <div class="row"> 
        <div class="col-md-8">
          <div class="main-container wow fadeInUp" data-wow-delay=".3s">
            @foreach($policy as $val)
              <p>{{ $val->terms_n_conditions }}</p>
            @endforeach
          </div>
        </div>
      </div>
    @endif
  </div>
</div>      