<?php 
if(!isset($property)){
  $property = $hotel_data[0];
}
?>
{{-- mobile menu --}}
<div class="sidebar-main share-sidebar filter-bg" id="mobile_menu">
    <a href="#" class="close-sidebar" data-dismis="">

        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>


    <div class="sidebar-scroller">
        <div class="d-flex">
            <a href="#" class="sidebar-back" data-close="sidebar">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="mb-5">{{$property->property_name}}</h3>
        </div>
        <div class="filter-list">
            <div class="accordion accordion-ex" id="accordionExample">
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#Byexperience">
                                Suites
                                <i class="fa fa-plus" style="display: none;"></i>
                                <i class="fa fa-minus"></i>
                            </button>
                        </h2>
                    </div>
                    <div id="Byexperience" class="additional-collapse collapse show">
                        <div class="card-body" data-place="m_suite_btn1">
                            <a href="/hotel/{{ $property->property_slug }}/suites" class="nav-link">All Suite</a>
                            @foreach($property->suites as $suite)
                                <a href="/hotel/{{ $property->property_slug }}/suites/#{{str_replace(" ", "-", strtolower($suite['category_name']))}}" class="nav-link"><?php echo ucfirst(strtolower($suite->category_name)); ?></a>
                            @endforeach
                        </div>
                    </div>
                </div>
               
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="/hotel-location/{{ $property->property_slug }}" class="btn btn-link btn-block text-left">
                                Location
                            </a>
                        </h2>
                    </div>
                </div> 
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left btn-sidebar" onclick="replacePropertyData(<?php echo $property->id;?>)" data-sidebar="#property-gallery">
                                Gallery
                            </a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <a href="#" class="sidebar-back" data-close="sidebar">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="mb-5"> {{$property->property_name}}</h3>
        </div>
    </div>
</div>
{{-- mobile menu --}}