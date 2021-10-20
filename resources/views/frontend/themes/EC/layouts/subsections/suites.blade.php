<style type="text/css">
    .suites-loader{
        width: 75%;
        text-align: center;
        display: inline-block;
        margin: auto;
        padding-left: 20%;
    }
</style>
<div class="sidebar-main pt-4" id="suiteside">
    <a href="#" class="close-sidebar">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path
                d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>


    <div class="h-100 pl-5">
        <div class="d-flex align-items-center mb-3">
            <a href="#" class="sidebar-back">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="title-second title-line mb-0">
                Your (<span data-place="property" data-replace="property_short_name"></span>) overview:
            </h3>
        </div>

        <!-- <h3 class="title-second title-line mb-5">The Ludlow Hotel</h3> -->
        <div class="row h-100" id="suites-loader">
            <img src="/themes/EC/images/suites-loader.jpg" class="suites-loader">
        </div>
        <div class="row h-100" id="suites-popup">
            <div class="col-lg-3">
                <div class="sidebar-nav-section">
                    <div class="humburger-menu-sidebar">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <div class="nav-collapse">
                        <ul class="nav flex-column nav-sidebar is-small" id="suitesside-tab" role="tablist" aria-orientation="vertical" data-place="property-suites">
                            <li class="nav-item">
                                <a class="nav-link" id="suiteslist-tab" data-toggle="pill" href="#suiteslist" role="tab"
                                    aria-controls="suiteslist" aria-selected="true">Suites</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-sub" id="suitelist1-tab" data-toggle="pill"
                                    href="#suitelist1" role="tab" aria-controls="suitelist1" aria-selected="false">Suite
                                    Name</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-sub" id="suitelist1-tab" data-toggle="pill"
                                    href="#suitelist1" role="tab" aria-controls="suitelist1" aria-selected="false">Suite
                                    Name</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-sub" id="suitelist1-tab" data-toggle="pill"
                                    href="#suitelist1" role="tab" aria-controls="suitelist1" aria-selected="false">Suite
                                    Name</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-sub" id="suitelist1-tab" data-toggle="pill"
                                    href="#suitelist1" role="tab" aria-controls="suitelist1" aria-selected="false">Suite
                                    Name</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-sub" id="suitelist1-tab" data-toggle="pill"
                                    href="#suitelist1" role="tab" aria-controls="suitelist1" aria-selected="false">Suite
                                    Name</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 h-100">
                <div class="sidebar-scroller pt-0 pp-01 sidebar-pad">
                    <div class="tab-content" id="suitesside-tabContent">
                        
                        @include('frontend.themes.EC.properties.subtemplates.suite_list')

                        @include('frontend.themes.EC.properties.subtemplates.suite_detail')
                        
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>