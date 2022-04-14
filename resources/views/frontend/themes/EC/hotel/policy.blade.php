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
              <div class="main-content p-2" style="background-color: #FFFFFF;">
                <div class="accordion accordion-ex p-2" id="accordionExample2">
                  <?php foreach ($policy as $key => $value) { ?>
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left btn-accordion collapsed p-2" type="button" data-toggle="collapse"
                            data-target="#collapseOne-{{ $key }}" aria-expanded="false" aria-controls="collapseOne">
                            {{ $value->type }}
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                          </button>
                        </h2>
                      </div>

                      <div id="collapseOne-{{ $key }}" class="collapse p-3" aria-labelledby="headingOne" data-parent="#accordionExample2">
                        <div class="card-body">
                          <?php  $data = str_replace("\n",'</br>' ,$value->terms_n_conditions) ?>
                          {!! $data = str_replace(':','</br>' ,$data) !!}
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
          </div>
        </div>
      </div>
    @endif
  </div>
</div>      