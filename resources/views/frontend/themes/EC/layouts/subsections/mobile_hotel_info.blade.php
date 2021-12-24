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
            <h3 class="mb-5" data-replace="m_property_short_name"></h3>
        </div>
        <div class="filter-list">
            <div class="accordion accordion-ex" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0" data-replace="m_property_link">
                            <a href="" class="btn btn-link btn-block text-left" >
                                View 
                            </a>
                        </h2>
                    </div>
                </div>
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
                            <a href="all-suite.html" class="nav-link">All Suite</a>
                            <a href="detail-suite.html" class="nav-link">The Mark Fire Bedroom</a>
                            <a href="detail-suite.html" class="nav-link">Suite Name</a>
                            <a href="detail-suite.html" class="nav-link">Suite Name</a>
                            <a href="detail-suite.html" class="nav-link">Suite Name</a>
                            <a href="detail-suite.html" class="nav-link">Suite Name</a>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left btn-sidebar" data-sidebar="#suiteside" data-replace="m_suite_btn" onclick="replacePropertySuites()">
                                Suite
                            </a>
                        </h2>
                    </div>
                </div>
               
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left btn-sidebar" data-sidebar="#quickinfo" data-replace="m_quickinfo_btn" onclick="replacePropertyData()">
                                Hotel Info
                            </a>
                        </h2>
                    </div>
                </div> 
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left btn-sidebar" data-sidebar="#property-gallery" data-replace="m_property_gallery_btn" onclick="replacePropertyData()">
                                Gallery
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left btn-sidebar" data-sidebar="#reviews" data-replace="m_reviews_btn" onclick="replaceReviewData()">
                                Reviews
                            </a>
                        </h2>
                    </div>
                </div>
                {{--<div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left">
                                Spa &amp; Wellness
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="restaurant.html" class="btn btn-link btn-block text-left">
                                Restaurants &amp; Bars
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="location.html" class="btn btn-link btn-block text-left">
                                Location
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="#" class="btn btn-link btn-block text-left">
                                Video Channel
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <a href="faq.html" class="btn btn-link btn-block text-left">
                                FAQ
                            </a>
                        </h2>
                    </div>
                </div> --}}
                
            </div>
        </div>
        <div class="d-flex">
            <a href="#" class="sidebar-back" data-close="sidebar">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="mb-5" data-replace="m_property_short_name"></h3>
        </div>
    </div>
</div>
{{-- mobile menu --}}