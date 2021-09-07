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
                <div class="row align-items-center">
                    <div class="col-8">
                        <h5 class="filter-title">By experience</h5>
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="experiencefilter"
                                tabindex="0">
                            <label class="onoffswitch-label" for="experiencefilter"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-list">
                <h5 class="filter-title mb-4">By facility</h5>

                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Wheelchair friendly
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="wheelchair"
                                tabindex="0">
                            <label class="onoffswitch-label" for="wheelchair"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Pets Allowed
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="pets"
                                tabindex="0">
                            <label class="onoffswitch-label" for="pets"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Limousine Service
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="limousine"
                                tabindex="0">
                            <label class="onoffswitch-label" for="limousine"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Personalized Service
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="personalized"
                                tabindex="0">
                            <label class="onoffswitch-label" for="personalized"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Covid 19 +  Cancellation Flexibility
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="covid"
                                tabindex="0">
                            <label class="onoffswitch-label" for="covid"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Free Wifi
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="wifi"
                                tabindex="0">
                            <label class="onoffswitch-label" for="wifi"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Pool
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="pool"
                                tabindex="0">
                            <label class="onoffswitch-label" for="pool"></label>
                        </div>
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <div class="col-8">
                        Gym
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="gym"
                                tabindex="0">
                            <label class="onoffswitch-label" for="gym"></label>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8">
                        Smoking allowed
                    </div>
                    <div class="col-4">
                        <div class="onoffswitch ml-auto">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="smoking"
                                tabindex="0">
                            <label class="onoffswitch-label" for="smoking"></label>
                        </div>
                    </div>
                </div>
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