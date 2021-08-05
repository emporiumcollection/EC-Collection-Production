@extends('frontend.themes.EC.layouts.main')

@section('meta_keywords', '')
@section('meta_description', '')

@section('content')

<div class="landing-header">
    <div class="slider-top-content">
        <div class="slide-header">
            <div>
                <img src="images/ecd67d87075247.5dad757ad6705.jpg" alt="">
            </div>
            <div>
                <img src="images/c52c5d91609529.5e36922fbff23.jpg" alt="">
            </div>
            <div>
                <img src="images/60c5a787075247-1.5dad757ad76ab.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="booking-search-banner">
        <div class="container inpired-container">
            <h2 class="text-white">Welcome to the Emporium-Voyage Collection</h2>
            <p class="text-white">
                Emporium-Collection is a unique, memorable experience company that provides its High-net-worth
                members,
                bespoke luxury travel management services via the “by invitation only members club”.
            </p>
        </div>
    </div>

</div>

<div class="categoty-list">
    <div class="category-container py-5">
        <h2 class="text-center mb-4">Destination</h2>
        <div class="category-inner text-center">
            <div class="category-select">
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Close By</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Driving Distance</label>
                </div>
            </div>
            <!-- <div class="category-select">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Africa & Indian Ocean Islands</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Asia</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">Europe</label>
                </div>
            </div> -->
        </div>
        <div class="h5 my-3 text-center">Or</div>
        <div class="container">
            <div class="desktop-view ">
                <ul class="nav nav-pills justify-content-center nav-clr mb-5">
                    <li class="nav-item">
                        <a class="nav-link" href="#europe" data-toggle="tab" role="tab"
                            aria-selected="false">Europe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#indian" data-toggle="tab" role="tab" aria-selected="false">Indian
                            Ocean</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#oceania" data-toggle="tab" role="tab"
                            aria-selected="false">Oceania</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#asia" data-toggle="tab" role="tab" aria-selected="false">Asia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#america" data-toggle="tab" role="tab" aria-selected="false">The
                            Americas</a>
                    </li>
                </ul>
                <p class="text-center mb-5"><b>Current Destination : New York</b></p>
                <div class="tab-content">
                    <!-- Europe tab content -->
                    <div class="tab-pane fade" id="europe">
                        <div class="row">
                            <div class="col-2 br-001 col--01920">
                                <nav class="nav flex-column nav-dest">
                                    <a class="nav-link" href="#centralEurope" data-toggle="tab" role="tab"
                                        aria-selected="false">Central Europe</a>
                                    <a class="nav-link active" href="#northenEurope" data-toggle="tab" role="tab"
                                        aria-selected="true">Northen
                                        Europe</a>
                                    <a class="nav-link" href="#southernEurope" data-toggle="tab" role="tab">Southern
                                        Europe</a>
                                    <a class="nav-link" href="#easternEurope" data-toggle="tab" role="tab">Eastern
                                        Europe</a>
                                    <a class="nav-link" href="#westernEurope" data-toggle="tab" role="tab">Western
                                        Europe</a>
                                </nav>
                            </div>
                            <div class="col-10">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="centralEurope">
                                        <div class="row">
                                            <div class="col-2 col--1223 br-001">
                                                <nav class="nav flex-column nav-dest">
                                                    <a class="nav-link active" href="#germany" data-toggle="tab"
                                                        role="tab">Germany</a>
                                                    <a class="nav-link" href="#austria" data-toggle="tab"
                                                        role="tab">Austria</a>
                                                    <a class="nav-link" href="#france" data-toggle="tab"
                                                        role="tab">France</a>
                                                    <a class="nav-link" href="#switzerland" data-toggle="tab"
                                                        role="tab">Switzerland</a>
                                                    <a class="nav-link" href="#belgium" data-toggle="tab"
                                                        role="tab">Belgium</a>
                                                    <a class="nav-link" href="#holland" data-toggle="tab"
                                                        role="tab">Holland</a>
                                                    <a class="nav-link" href="#croatia" data-toggle="tab"
                                                        role="tab">Croatia</a>
                                                    <a class="nav-link" href="#slovenia" data-toggle="tab"
                                                        role="tab">Slovenia</a>
                                                </nav>
                                            </div>
                                            <div class="col-10 col--12929">
                                                <div class="tab-content h-100">
                                                    <div class="tab-pane fade show active h-100" id="germany">
                                                        <div class="row h-100">
                                                            <div class="col-3 col--819281 br-001 ">
                                                                <div class="destination-img">
                                                                    <img src="images/Emporium-Collection_129.jpg"
                                                                        class="img-fluid" alt="">
                                                                    <div class="destinatios-cntay--00">
                                                                        <p class="mb-0">Germany</p>
                                                                        <p class="mb-0">#loveluxurygermany</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-9 col--71812 h-100">
                                                                <div class="row h-100">
                                                                    <div class="col-3 col--98121 br-001 h-100">
                                                                        <nav class="nav flex-column nav-dest">
                                                                            <a class="nav-link " href="#frankfurt"
                                                                                data-toggle="tab"
                                                                                role="tab">Frankfurt</a>
                                                                            <a class="nav-link active"
                                                                                href="#hamburg" data-toggle="tab"
                                                                                role="tab">Hamburg</a>
                                                                            <a class="nav-link" href="#munich"
                                                                                data-toggle="tab"
                                                                                role="tab">Munich</a>
                                                                            <a class="nav-link" href="#berlin"
                                                                                data-toggle="tab"
                                                                                role="tab">Berlin</a>
                                                                            <a class="nav-link" href="#cologne"
                                                                                data-toggle="tab"
                                                                                role="tab">Cologne</a>
                                                                            <a class="nav-link" href="#bremen"
                                                                                data-toggle="tab"
                                                                                role="tab">Bremen</a>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-4 col--9819281">
                                                                        <a href="#destinationSection"
                                                                            data-scroll="">
                                                                            <div class="destination-img">
                                                                                <img src="images/e8150591299245.5e2eb7c1e4d56.jpg"
                                                                                    class="img-fluid" alt="">
                                                                                <div class="destinatios-cntay--00">
                                                                                    <p class="mb-0">Humburg</p>
                                                                                    <p class="mb-0">
                                                                                        #loveluxuryhumburg</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade h-100" id="austria">
                                                        <div class="row h-100">
                                                            <div class="col-3 col--819281 br-001 ">
                                                                <div class="destination-img">
                                                                    <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                                                        class="img-fluid" alt="">
                                                                    <div class="destinatios-cntay--00">
                                                                        <p class="mb-0">Austria</p>
                                                                        <p class="mb-0">#loveluxuryAustria</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-9 col--71812 h-100">
                                                                <div class="row h-100">
                                                                    <div class="col-3 col--98121 br-001 h-100">
                                                                        <nav class="nav flex-column nav-dest">
                                                                            <a class="nav-link " href="#klagen"
                                                                                data-toggle="tab"
                                                                                role="tab">Klagenfurt</a>
                                                                            <a class="nav-link active" href="#sankt"
                                                                                data-toggle="tab" role="tab">Sankt
                                                                                Veit</a>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-4 col--9819281">
                                                                        <div class="tab-content">
                                                                            <div class="tab-pane fade" id="klagen">
                                                                                <div class="destination-img">
                                                                                    <img src="images/53511811337-49267444221.jpg"
                                                                                        class="img-fluid" alt="">
                                                                                    <div
                                                                                        class="destinatios-cntay--00">
                                                                                        <p class="mb-0">
                                                                                            Klagenfurt</p>
                                                                                        <p class="mb-0">
                                                                                            #loveluxuryKlagenfurt
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade active show"
                                                                                id="sankt">
                                                                                <div class="destination-img">
                                                                                    <img src="images/97678356576-24898814906.jpg"
                                                                                        class="img-fluid" alt="">
                                                                                    <div
                                                                                        class="destinatios-cntay--00">
                                                                                        <p class="mb-0">Sankt
                                                                                        </p>
                                                                                        <p class="mb-0">
                                                                                            #loveluxurysankt
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade active show" id="northenEurope">
                                        <div class="row">
                                            <div class="col-2 col--1223 br-001">
                                                <nav class="nav flex-column nav-dest">
                                                    <a class="nav-link" href="#estonia" data-toggle="tab" role="tab"
                                                        aria-selected="false">Estonia</a>
                                                    <a class="nav-link active" href="#latvia" data-toggle="tab"
                                                        role="tab" aria-selected="true">Latvia</a>
                                                </nav>
                                            </div>
                                            <div class="col-10 col--12929">
                                                <div class="tab-content h-100">
                                                    <div class="tab-pane fade h-100" id="estonia">
                                                        <div class="row h-100">
                                                            <div class="col-3 col--819281 br-001 ">
                                                                <div class="destination-img">
                                                                    <img src="images/Emporium-Collection_129.jpg"
                                                                        class="img-fluid" alt="">
                                                                    <div class="destinatios-cntay--00">
                                                                        <p class="mb-0">Estonia</p>
                                                                        <p class="mb-0">#loveluxuryestonia</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-9 col--71812 h-100">
                                                                <div class="row h-100">
                                                                    <div class="col-3 col--98121 br-001 h-100">
                                                                        <nav class="nav flex-column nav-dest">
                                                                            <a class="nav-link " href="#frankfurt"
                                                                                data-toggle="tab"
                                                                                role="tab">Tallinn</a>
                                                                            <a class="nav-link active"
                                                                                href="#hamburg" data-toggle="tab"
                                                                                role="tab">Tartu</a>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-4 col--9819281">
                                                                        <a href="#destinationSection"
                                                                            data-scroll="">
                                                                            <div class="destination-img">
                                                                                <img src="images/e8150591299245.5e2eb7c1e4d56.jpg"
                                                                                    class="img-fluid" alt="">
                                                                                <div class="destinatios-cntay--00">
                                                                                    <p class="mb-0">Tallinn</p>
                                                                                    <p class="mb-0">
                                                                                        #loveluxuryhumburg</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade h-100 active show" id="latvia">
                                                        <div class="row h-100">
                                                            <div class="col-3 col--819281 br-001 ">
                                                                <div class="destination-img">
                                                                    <img src="images/car-acc-room-superior-double-inroom-breakfast01_320x266.jpg"
                                                                        class="img-fluid" alt="">
                                                                    <div class="destinatios-cntay--00">
                                                                        <p class="mb-0">Austria</p>
                                                                        <p class="mb-0">#loveluxuryAustria</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-9 col--71812 h-100">
                                                                <div class="row h-100">
                                                                    <div class="col-3 col--98121 br-001 h-100">
                                                                        <nav class="nav flex-column nav-dest">
                                                                            <a class="nav-link" href="#klagen"
                                                                                data-toggle="tab" role="tab"
                                                                                aria-selected="false">Klagenfurt</a>
                                                                            <a class="nav-link active" href="#sankt"
                                                                                data-toggle="tab" role="tab"
                                                                                aria-selected="true">Sankt
                                                                                Veit</a>
                                                                        </nav>
                                                                    </div>
                                                                    <div class="col-4 col--9819281">
                                                                        <div class="tab-content">
                                                                            <div class="tab-pane fade show active"
                                                                                id="klagen">
                                                                                <div class="destination-img">
                                                                                    <img src="images/53511811337-49267444221.jpg"
                                                                                        class="img-fluid" alt="">
                                                                                    <div
                                                                                        class="destinatios-cntay--00">
                                                                                        <p class="mb-0">
                                                                                            Klagenfurt</p>
                                                                                        <p class="mb-0">
                                                                                            #loveluxuryKlagenfurt
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade" id="sankt">
                                                                                <div class="destination-img">
                                                                                    <img src="images/97678356576-24898814906.jpg"
                                                                                        class="img-fluid" alt="">
                                                                                    <div
                                                                                        class="destinatios-cntay--00">
                                                                                        <p class="mb-0">Sankt
                                                                                        </p>
                                                                                        <p class="mb-0">
                                                                                            #loveluxurysankt
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Europe tab content End -->
                    <div class="tab-pane fade" id="indian">
                        Indian Ocean
                    </div>
                    <div class="tab-pane fade" id="oceania">
                        Oceania
                    </div>
                    <div class="tab-pane fade" id="asia">
                        Asia
                    </div>
                    <div class="tab-pane fade" id="america">
                        The Americas
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="category-container py-5">
        <h2 class="text-center mb-4">Atmosphere</h2>
        <div class="category-inner text-center">
            <div class="category-select">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="setting1">
                    <label class="custom-control-label" for="setting1">Charm (229)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="setting2">
                    <label class="custom-control-label" for="setting2">Nature (111)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="setting3">
                    <label class="custom-control-label" for="setting3">Trendy (111)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="setting5">
                    <label class="custom-control-label" for="setting5">Intimate (86)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="setting6">
                    <label class="custom-control-label" for="setting6">Evasion (85)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="setting7">
                    <label class="custom-control-label" for="setting7">Tropical (56)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="setting8">
                    <label class="custom-control-label" for="setting8">Myth (49)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="setting9">
                    <label class="custom-control-label" for="setting9">Castle life (38)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="setting10">
                    <label class="custom-control-label" for="setting10">Country house (25)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="setting11">
                    <label class="custom-control-label" for="setting11">Colonial (24)</label>
                </div>
            </div>
        </div>
    </div>
    <div class="category-container py-5">
        <h2 class="text-center mb-4">Fasilities</h2>
        <div class="category-inner text-center">
            <div class="category-select">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fasilities6">
                    <label class="custom-control-label" for="fasilities6">Fitness (383)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fasilities7">
                    <label class="custom-control-label" for="fasilities7">Spa (361)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fasilities8">
                    <label class="custom-control-label" for="fasilities8">Outdoor pool (246)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fasilities9">
                    <label class="custom-control-label" for="fasilities9">Outdoor pool (246)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fasilities10">
                    <label class="custom-control-label" for="fasilities10">Indoor pool (150)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fasilities11">
                    <label class="custom-control-label" for="fasilities11">Indoor pool (150)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fasilities12">
                    <label class="custom-control-label" for="fasilities12">Kids club (117)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fasilities13">
                    <label class="custom-control-label" for="fasilities13">Beach (105)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fasilities14">
                    <label class="custom-control-label" for="fasilities14">Pets (86)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fasilities15">
                    <label class="custom-control-label" for="fasilities15">Water sports (54)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fasilities16">
                    <label class="custom-control-label" for="fasilities16">Diving (47)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fasilities17">
                    <label class="custom-control-label" for="fasilities17">Golf (33)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fasilities18">
                    <label class="custom-control-label" for="fasilities18">Ski (11)</label>
                </div>
            </div>
        </div>
    </div>
    <div class="category-container py-5">
        <h2 class="text-center mb-4">Style</h2>
        <div class="category-inner text-center">
            <div class="category-select">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="style6">
                    <label class="custom-control-label" for="style6">Classic (114)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="style7">
                    <label class="custom-control-label" for="style7">Contemporary (112)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="style8">
                    <label class="custom-control-label" for="style8">Historical (85)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="style9">
                    <label class="custom-control-label" for="style9">Unusual (18)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="style10">
                    <label class="custom-control-label" for="style10">Unusual (18)</label>
                </div>
            </div>
        </div>
    </div>
    <div class="category-container py-5">
        <h2 class="text-center mb-4">Price</h2>
        <div class="category-inner text-center">
            <div class="category-select">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="price7">
                    <label class="custom-control-label" for="price7">Price (ascending)</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="price8">
                    <label class="custom-control-label" for="price8">Price (descending)</label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="btn-category text-center">
    <a href="main-page.html" class="btn btn-dark">No Matches</a>
</div>

@endsection

@section('custom_js')
  @parent
  <script>
    $('.slide-header').slick({
      infinite: true,
      speed: 600,
      fade: true,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: false,
      pauseOnFocus: false
    });
  </script>
@endsection