<div class="sidebar-main share-sidebar" id="filterbar">
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
        <h3 class="mb-5">Filter</h3>
        <form>
            <div class="filter-list">
                <h5 class="filter-title mb-4">By price</h5>
                <div class="px-2">
                    <div id="price_range" class="price-range"></div>
                </div>
                <div class="row align-items-center price-input">
                    <div class="col">
                        <label>Min:</label>
                        <div class="input-filter">
                            <span>€</span>
                            <input type="text" class="priceValue form-control" data-index="0" value="80" />
                        </div>
                    </div>
                    <div class="col">
                        <label>Max:</label>
                        <div class="input-filter">
                            <span>€</span>
                            <input type="text" class="priceValue form-control" data-index="1" value="824" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-list">
                <h5 class="filter-title mb-4">By Experience</h5>
                
                @foreach($experiences_data as $exp)     
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h5 class="filter-title">{{ $exp->category_name }}</h5>
                        </div>
                        <div class="col-4">
                            <div class="onoffswitch ml-auto">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="experiencefilter{{ $exp->id }}"
                                    tabindex="0">
                                <label class="onoffswitch-label" for="experiencefilter{{ $exp->id }}"></label>
                            </div>
                        </div>
                    </div>
                @endforeach    
            </div>
            <div class="filter-list">
                <h5 class="filter-title mb-4">By facility</h5>
                @foreach($facilities as $fac)
                    <div class="row form-group align-items-center">
                        <div class="col-8">
                            {{ $fac->category_name }}
                        </div>
                        <div class="col-4">
                            <div class="onoffswitch ml-auto">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="wheelchair{{ $fac->id }}"
                                    tabindex="0">
                                <label class="onoffswitch-label" for="wheelchair{{ $fac->id }}"></label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="filter-list">
                <h5 class="filter-title mb-4">By Suite type</h5>

                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Hotels with penthouse suites
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="penthouse"
                                tabindex="0">
                            <label class="onoffswitch-label" for="penthouse"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Hotels with Appartments
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="appart"
                                tabindex="0">
                            <label class="onoffswitch-label" for="appart"></label>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8">
                        Hotels with Butler
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="butler"
                                tabindex="0">
                            <label class="onoffswitch-label" for="butler"></label>
                        </div>
                    </div>
                </div>
              
            </div>
        </form>
    </div>
</div>