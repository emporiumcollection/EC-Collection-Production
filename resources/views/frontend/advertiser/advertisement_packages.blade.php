@extends('frontend.layouts.ev.customer')
@section('content')

<div class="col-md-12 no-padding">
	<!-- start contact form section -->
	<section class="wow fadeIn big-section cstmaiclass" id="align-to-top">
		<div class="container-fluid">
			<div class="stepwizard">
				<div class="stepwizard-row setup-panel">
					<div class="stepwizard-step">
						<a type="button" class="btn btn-primary btn-circle cursor" disabled="disabled">1</a>
						<p>Step 1</p>
					</div>
					<div class="stepwizard-step">
						<a type="button" class="btn btn-default btn-circle cursor">2</a>
						<p>Step 2</p>
					</div>
					
				</div>
			</div>
			<div class="row equalize sm-equalize-auto">
				<div class="image-slider-container image-slider-margin-align auto-slider" id="rooms">
				@if (!empty($packages))
					<ul class="image-slider">
						{{--*/ $k=1; $tottyp = count($packages); /*--}}
						@foreach($packages as $key=>$package)
						<li class="{{($k==1) ? 'active' : ''}}">
							<a href="#">
								<img class="img-responsive object-fit-size" src="http://www.emporium-voyage.com/uploads/properties_subtab_imgs/69726129-32146277.jpg" alt="{{$package->space_title}}" style="height:580px; width: 100%;">
							</a>
							<div class="col-md-12 col-sm-12">
								<div class="col-md-6 col-sm-6">
									<div class="row">
										<div class="image-slider-btns-bg">

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="row">
											<div class="slider-sec-side-text-bg">
												<div class="slider-side-sec-alignment">
													<div class="expeience-small-text">Advertisement Packages</div>
													<div class="slider-side-text-tittle">{{$package->space_title}}</div>
													<div class="slider-side-description-text">
                                                                                                            The Tiki Suite is one of the largest rooms in the hotel. It offers a large sitting area with a fireplace and bar, a king-size bed, locally roasted coffee and tea service, 42inch LG TV, and complimentary WiFi, premium bath amenities, rain shower and standalone bathtub.
													</div>
												</div>
												<div>
													<img class="slider-next-image-btn img-responsive" src="http://www.emporium-voyage.com/uploads/properties_subtab_imgs/69726129-32146277.jpg" alt="">
													<a href="#" style="margin-left:100px;" rel="{{$package->id}}" class="book-button open-show_more-page hotel-btn ClickButton">Show More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						{{--*/ $k++; /*--}}
									
						@endforeach

					</ul>
					<div class="clearfix"></div>
					<div class=" editorial-images-count images-count">1 / {{$tottyp}}</div>
					<div class="editorial-image-slider-btns image-slider-btns">
						<a class="editorial-image-slider-previous-btn image-slider-previous-btn" href="#">
							<img class="arrow-margin-right" src="{{ asset('sximo/assets/images/editorial-left-arrow.png')}}" alt="">
						</a>
						<a class="image-slider-next-btn editorial-image-slider-next-btn" href="#">
							<img class="arrow-margin-right" src="{{ asset('sximo/assets/images/editorial-right-arrow.png')}}" alt="">
						</a>
					</div>
					@endif
				</div>
			</div>
		</div>
	</section>

	<div class="hotel-property-section-bg" id="popupopn">
		<div class="clearfix"></div>
		<!--Show More Slide-->
		<div class="show_more-page">
			<div class="open-show_more-html">
				<div><a class="close-btn-show_more close-btn-align" href="#">&times;</a></div>
				<div class="container-">
					<div class="row-">
						<div class="clearfix"></div>
						<div class="col-md-6 col-sm-6 rmimgp">

						</div>
						<div class="col-md-6 col-sm-6 single-right-text-product">
							
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>


	<!-- pop up -->
        
</div>

<!-- pop up -->
<div class="modal fade vegasModelFade in" id="myModal" role="dialog">
                    <div class="modal-dialog VegasModelDialog">

                        <!-- Modal content-->
                        <div class="modal-content vegasModelContent">
                            <div class="modal-header vegasModelHeader">
                                <button type="button" class="close VegasCloseButton" data-dismiss="modal">×</button>
                                <a href="#" id="frontpage-layer-bj-header-logo"> <img class="VegasPopLogo" alt="" src="data:image/png;base64,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" data-pagespeed-url-hash="2747997174" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-2 SlickVegasWidth">
                                    <section class="Vegasregular slider slick-initialized slick-slider harman">
                                        <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="width: 0px; transform: translate3d(0px, 0px, 0px); opacity: 1;" role="listbox"><div class="slick-cstm-width slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 310px;" tabindex="-1" role="option">
                                                    <div class="side-nav-next-hotel-img Sidenavimg">
                                                        <div class="side-next-and-perivious-hotel-arrow">
                                                            <div class="arrows-commom  next-arrow">
                                                                <a href="http://www.emporium-voyage.com/luxury-hotel-the-mira-hong-kong" tabindex="0">
                                                                    <span>New Hotels</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="new-hotel-image" style="background-image:url(http://www.emporium-voyage.com/uploads/property_imgs_thumbs/xfront_property_4505_Emporium-Voyage-Hotel-Zoo-Berlin00017.jpg.pagespeed.ic.nY-effTxow.jpg)">
                                                            <div class="new-hotels-image-tittle">
                                                                <h2 class="new-hotel-name">Hotel Zoo Berlin </h2>
                                                                <div class=" new-hotel-add">
                                                                    <p>New York City</p>
                                                                    <p>United States</p>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="new-hotel-view-more-btn">
                                                                <a class="" href="http://www.emporium-voyage.com/hotel-zoo-berlin-" tabindex="0">
                                                                    View Hotel
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <a class="bootom-view-next-btn" href="http://www.emporium-voyage.com/luxury-hotel-the-mira-hong-kong" tabindex="0">
                                                            Visit All Hotels DOI
                                                        </a>
                                                    </div>
                                                </div></div></div>

                                    </section>

                                </div>
                                <div id="frontpage-layer-bj-content" class="col-md-10 vegasGallery1">
                                    <div class="frontpage-detail-content-top">
                                        <div class="frontpage-detail-content-top-link">
                                            <div class="frontpage-detail-content-top-link"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row masonry-grid vegasgalleryimg"><div class="col-md-6 col-lg-4 masonry-column">  <div>	<a href="#" class="thumbnail vogasThumbnail"><img class="img-responsive" src="http://www.emporium-voyage.com/uploads/container_user_files/locations/hotel-zoo-berlin/restrurants-gallery-images/41767802254-78148460470.jpg"></a>  </div>  <div>	<a href="#" class="thumbnail vogasThumbnail"><img class="img-responsive" src="http://www.emporium-voyage.com/uploads/container_user_files/locations/hotel-zoo-berlin/restrurants-gallery-images/45103475203-77197756287.jpg"></a>  </div>  <div>	<a href="#" class="thumbnail vogasThumbnail"><img class="img-responsive" src="http://www.emporium-voyage.com/uploads/container_user_files/locations/hotel-zoo-berlin/restrurants-gallery-images/46301073746-59684422322.jpg"></a>  </div> </div><div class="col-md-6 col-lg-4 masonry-column">  <div>	<a href="#" class="thumbnail vogasThumbnail"><img class="img-responsive" src="http://www.emporium-voyage.com/uploads/container_user_files/locations/hotel-zoo-berlin/restrurants-gallery-images/33058154168-34094477237.jpg"></a>  </div>  <div>	<a href="#" class="thumbnail vogasThumbnail"><img class="img-responsive" src="http://www.emporium-voyage.com/uploads/container_user_files/locations/hotel-zoo-berlin/restrurants-gallery-images/35361925388-86451894872.jpg"></a>  </div>  <div>	<a href="#" class="thumbnail vogasThumbnail"><img class="img-responsive" src="http://www.emporium-voyage.com/uploads/container_user_files/locations/hotel-zoo-berlin/restrurants-gallery-images/16323879650-11779554560.jpg"></a>  </div> </div><div class="col-md-6 col-lg-4 masonry-column">  <div>	<a href="#" class="thumbnail vogasThumbnail"><img class="img-responsive" src="http://www.emporium-voyage.com/uploads/container_user_files/locations/hotel-zoo-berlin/restrurants-gallery-images/69281205576-51989796012.jpg"></a>  </div>  <div>	<a href="#" class="thumbnail vogasThumbnail"><img class="img-responsive" src="http://www.emporium-voyage.com/uploads/container_user_files/locations/hotel-zoo-berlin/restrurants-gallery-images/18040249289-17359995303.jpg"></a>  </div> </div></div>
                                </div>
                            </div><!--
                          <div class="modal-footer vegasModelFooter">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>-->
                        </div>

                    </div>
                </div>

                <!-- popup end -->

@endsection

@section('css')
<!-- swiper carousel -->
<link rel="stylesheet" href="{{ asset('sximo/assets/memform/css/swiper.min.css')}}">
<!-- style -->
<link rel="stylesheet" href="{{ asset('sximo/assets/memform/css/style.css')}}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{ asset('sximo/assets/memform/css/responsive.css')}}" />
<!-- Custom style -->
<link href="{{ asset('sximo/assets/memform/css/custom-ai.css')}}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{ asset('sximo/css/hotel-membership/style.css')}}">
	<style>
		.image-slider-margin-align {
			margin-bottom: 0;
			margin-top: 0;
		}
		header.haside {
			z-index: 1;
		}
		img.img-responsive.object-fit-size {
			object-fit: cover;
		}
		.book-now-page.mobile-show-hide {
			display: none;
		}
		.book-now-page.desktop-show-hide {
			display: none;
		}
		.slider-sec-side-text-bg {
			margin-top: -103%;
		}
		.hotels-logo {
			background: #252525 none repeat scroll 0 0;
		}
		.right-menus ul li a {
			border-bottom: 1px solid #414246;
		}
		.new-sidebar-sk .panel-heading.custom-heading {
			border-bottom: 1px solid #414246;
		}
		.heading-stying {
			font-size: 12px !important;
		}
		.new-sidebar-sk .panel-heading.custom-heading:hover {
			background-color: #89837B !important;
		}
		.right-menus ul li a {
			background-color: #1E2023;
			border-bottom: 1px solid #414246;
			color: #fff;
			display: block;
			font-size: 12px !important;
			padding: 25px 0 25px 21px;
			text-transform: uppercase;
			background: rgba(37,37,37,1.0);
		}
		.hotel-book-now {
			background: #ABA07C;
			color: #fff;
			font-size: 25px;
			height: 71px;
			margin: 0px 0px 10px 3px;
			opacity: 1;
			overflow-wrap: break-word;
			padding: 27px 5px;
			position: absolute;
			text-align: center;
			text-transform: uppercase;
			width: 174px;
			z-index: 99;
			float: left;
		}
/*		.editorial-image-slider-previous-btn {
			margin-left: 35% !important;
		}*/
                .editorial-image-slider-previous-btn {
                        margin-left: 41% !important;
                }
		.image-slider-container .editorial-image-slider-btns {
			margin-top: -100px !important;
                        width: 94%;
		}
                .image-slider-container .editorial-images-count {
                        color: #fff;
                        float: left;
                        font-size: 33px;
                        margin-left: 39%;
                        margin-top: -155px;
                        position: relative;
                        width: 22%;
                }
		header.haside {
			right: 0 !important;
			position: fixed;
			top: 0;
			width: 65px;
			left: unset !important;
		}
		.next-hotel-show-pannel {
			right: 66px;
			position: absolute;
			top: 0;
			width: 250px;
			left:unset;
		}
		/* AIC Harman email sidebar css */

		.site-aside {
			position: fixed;
			top: 0;
			right: 0;
			height: 100%;
			overflow-x: visible;
			z-index: 1028;
		}
		.contact-aside {
			border-radius: 0px;
			transition: .5s;
			position: fixed;
			top: 124px;
			left: calc(100% - 65px);
			width: 340px;
			background: #272727;
			color: #fff;
			font-size: 15px;
			right: 0;
		}
		.contact-aside ul {
			padding: 7px 0px 0px 0px;
			list-style: none;
		}
		.contact-aside li {
			padding: 6px 0px 6px 18px;
			margin: 0px 0px 1px 0px;
		}
		.contact-aside li a {
			margin-left: 11px;
			font-size: 13px;
			color: #ABA07C;
		}
		.contact-aside [class*="icon-"] {
			display: inline-block;
			width: 24px;
			text-align: center;
			margin-right: 4px;
			float: right;
		}
		.contact-aside li + li {
			border-top: 1px solid #4A4A4A;
		}
		.contact-aside .icon-mail {
			position: relative;
			top: 2px;
		}
		.contact-aside.active {
			left: calc(100% - 290px);
			background: #1e2023 !important;
			color: #fff !important;
		}

		.asideIclass {
			float: left;
			margin-top: 3px;
			margin-right: 13px;
			margin-left: 8px;
			color: #ABA07C;
			font-size: 16px;
		}
		.neww-footer .container {
			width: auto;
		}
		#formerrors { color:#ff0000;}

		/*AIC model */

		.book-button.open-show_more-page.hotel-btn {
			background: #ABA07C none repeat scroll 0 0;
			color: #fff;
			font-size: 15px;
			margin-left: 0 !important;
			margin-top: 52px;
			max-height: 95px;
			min-height: 95px;
			opacity: 0.83;
			padding: 34px 27px;
			text-align: center;
			text-transform: uppercase;
			width: 174px;
		}

		.VegasModelDialog {
			width: 100%;
			margin: 4px auto;
		}

		.vegasModelFade {
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			z-index: 1050;
			display: none;
			overflow: hidden;
			-webkit-overflow-scrolling: touch;
			outline: 0;
			background-color: black;
			opacity: 0.8;
			height: 100%;
			overflow-x: hidden;
			overflow-y: hidden;
		}

		.vegasModelContent {
			background: rgba(0, 0, 0, 0.92) none repeat scroll 0 0;
			opacity: 1;
			min-height: 63em;
			border-radius: 0px;
			float: left;
		}

		.vegasModelHeader {
			border-bottom: none;
		}

		.vegasModelFooter {
			border-top: none;
		}

		.SlickVegasWidth {

			width: 18.5%;
		}

		.vegasGallery1 {
			min-height: 500px;
			padding: 0px 0px 0px 0px !important;
			float: left;
			width: 81.333%;
		}

		.Vegasregular {
			width: 100%;
			margin: 0 auto;
			float: left;
			visibility: visible;
		}

		.VegasCloseButton {
			color: #ABA07C;
			opacity: 1;
			font-size: 50px;
			box-shadow: none;
			text-shadow: none;
		}

		.VegasCloseButton:hover {
			color: #ABA07C;
			opacity: 1;
			font-size: 50px;
			box-shadow: none;
			text-shadow: none;
		}

		.VegasPopLogo {
			width: 20%;
			margin: 0 auto;
			padding-top: 100px;
			text-align: center;
			display: block;
		}

		.VegasDetailInner {
			padding: 20px;
			padding-top: 0px;
		}

		.grid-item {
			height: auto;
		}

		.vogasThumbnail img {
			width: 100%;
		}

		.vogasThumbnail {
			padding: 0px;
			background: none;
			border: none;
		}
		.Sidenavimg {
			width: auto;
			min-width: 200px;
		}

		/* AIC alider */

		.slider-sec-side-text-bg {
			margin-top: -580px;
		}
/*		.image-slider-btns-bg {
			background-color: #252525;
			color: #fff;
			float: right;
			margin-top: -157px;
			opacity: 0.85;
			padding: 49px 11px;
			width: 35%;
		}*/


                /* my*/ 
/*                    .image-slider-btns-bg {
                        background-color: #252525;
                        color: #fff;
                        float: right;
                        margin-top: -269px;
                        opacity: 0.85;
                        padding: 0px 0px;
                         width: 30%; 
                        max-width: 25%;
                        max-height: 101px;
                        height: 101px;
                }*/
                    .image-slider-btns-bg {
                            background-color: #252525;
                            color: #fff;
                            float: right;
                            margin-top: -157px;
                            opacity: 0.85;
                            padding: 49px 11px;
                            width: 35%;
                    }
                
                


	</style>
@endsection
		
@section('script')
	<script>
        $(".editorial-image-slider-previous-btn").click(function (event) {
            event.preventDefault();

            var index = $(this).parent().parent().find(".image-slider li.active").index();
            $(this).parent().parent().find(".image-slider li.active").removeClass("active");
            if (index == 0) {
                var lindex = $(this).parent().parent().find(".image-slider li:last-child").index() + 1;
                $(this).parent().parent().find(".image-slider li:nth-child(" + lindex + ")").addClass("active");
                $(this).parent().parent().find(".images-count").html(lindex + " / " + $(this).parent().parent().find(".image-slider li").length);
            } else
            {
                var rlindex = index;
                $(this).parent().parent().find(".image-slider li:eq(" + rlindex + ")").addClass("active");
                $(this).parent().parent().find(".images-count").html(index + " / " + $(this).parent().parent().find(".image-slider li").length);
            }


        });

        $(".editorial-image-slider-next-btn").click(function (event) {
            event.preventDefault();

            var index = $(this).parent().parent().find(".image-slider li.active").index();
            if (index == $(this).parent().parent().find(".image-slider li:last-child").index()) {
                index = -1;
            }
            $(this).parent().parent().find(".image-slider li.active").removeClass("active");
            $(this).parent().parent().find(".image-slider li:nth-child(" + (+index + 1) + ")").addClass("active");

            $(this).parent().parent().find(".images-count").html((+index + 1) + " / " + $(this).parent().parent().find(".image-slider li").length);

        });

        setInterval(function () {
            var index = $(".auto-slider ul.image-slider > li.active").index();
            if (index == $(".auto-slider ul.image-slider > li:last-child").index()) {
                index = -1;
            }

            $(".auto-slider ul.image-slider > li.active").removeClass("active");
            $(".auto-slider ul.image-slider > li:nth-child(" + (+index + 1) + ")").addClass("active");
            $(".auto-slider .images-count").html((+index + 1) + " / " + $(".auto-slider ul.image-slider > li").length);

        }, 40000);
		
		$(document).on('click', '.open-show_more-page', function () {
            $('.single-right-text-product').html('');
            $('.rmimgp').html('');
            $.ajax({
                url: "{{ URL::to('fetchadvertisementpackagedetails')}}" + '/' + $(this).attr('rel'),
                type: "get",
                success: function (data) {
                    $('.rmimgp').html('<div class="right-text-section"></div>');
                    var imagesPro = '';
                    imagesPro += '<div class="text-section">';
                    imagesPro += '<h2>' + data.pdata.space_title + '</h2>';
                    
                    imagesPro += '</div>';
                    imagesPro += '<div class="book-btn-sec">';
                    imagesPro += '<div class="hotel-book-price">Price on request</div>';
					imagesPro += '<a href="#"><div class="hotel-book-now">Get in touch</div></a>';
                    imagesPro += '</div>';
                    imagesPro += '</div>';
                    $('#popupopn .single-right-text-product').html(imagesPro);
                    $('.show_more-page').css("width", "100%");
                }
            });
            return false;
        });
    </script>
@endsection