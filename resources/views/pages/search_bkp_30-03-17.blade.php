@include('layouts/elliot/ai_header')
@include('layouts/elliot/ai_navigation_bar_style_2')

<link href="{{ asset('sximo/assets/css/footer-accordian.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('sximo/assets/css/filters_grid.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('sximo/assets/css/filter-bar.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('sximo/assets/css/ai_yachts-custom.css')}}" rel="stylesheet" type="text/css"/>


<!--Main Page Start here-->
<div class="col-md-12 col-sm-12 col-xs-12 ">
	<div class="row">
		<div class="locator clear">
			<!--<div id="quick_pager" class="pager topPopList">
				<div id="quick_pager_header">
					Jump to page
				</div>
				<div style="display: none;" class="flyoutBox">
					<ul id="quick_pager_ul">
						{{--*/ $totpage = $propertiesArr->appends($pager)->lastPage(); /*--}}
						@for($p=1;$p<=$totpage;$p++)
							<li data-id="{{$p}}"><a href="{{URL::to('search?s='.$keyword.'&page='.$p)}}">{{$p}}</a></li>
						@endfor
					</ul>
				</div>
			</div>
			<div id="itemsPager" class="pager hidden-xs">
			   {!! $propertiesArr->appends($pager)->render() !!}
			</div>-->
		</div>
	</div>
	
	<div id="cityfilters"></div>
	
	<div id="listproperties">
		<div class="row">
			@if($propertiesArr)
				{{--*/ $rw = 1 /*--}}
				@foreach($propertiesArr as $props)
					<div class="productData col-xs-12 col-sm-6 col-md-4 col-lg-3 margin-bottom-10">
						<div class="wrapperforliineedforlightboxremoval">
							<div class="cat_product_medium1">
								<div class="pictureBox gridPicture">
									@if(array_key_exists('image', $props))
										<a title="{{$props['image']->file_name}}" class="picture_link detail_view" rel="{{$props['data']->id}}" href="#">
											
											<img alt="{{$props['image']->file_name}}" src="{{URL::to('uploads/property_imgs_thumbs/front_property_'.$props['image']->folder_id.'_'.$props['image']->file_name)}}" class="img-responsive">
											
											
										</a>
									@else
										<img class="img-responsive" src="{{URL::to('sximo/assets/images/img-1.jpg')}}" alt="">
									@endif
								</div>
								<div class="listDetails">
									<div class="photographBox">
										<h2>
											<a title="{{$props['data']->property_name}}" class="photograph" rel="{{$props['data']->id}}" href="{{URL::to('our-collection/'.$props['data']->property_slug)}}">
												{{$props['data']->property_name}}
											</a>
											<span class="FltRgt">
												{{--*/ $assigncats = explode(',',$props['data']->property_category_id); /*--}}
												@if(in_array('5',$assigncats))
													<i class="icon-camera colorGrey" aria-hidden="true"></i>
												@endif
												@if(in_array('6',$assigncats))
													<i class="icon-bed colorGrey" aria-hidden="true"></i>
												@endif
												@if(in_array('7',$assigncats))
													<i class="icon-glass2 colorGrey" aria-hidden="true"></i>
												@endif
												@if($group_id==1 || $group_id==2 || $uid==$props['data']->user_id )
												
													<a title="Edit" target="_blank" href="{{URL::to('properties_settings/'.$props['data']->id.'/types')}}" >
														<i class="icon-trophy2 colorGrey"></i>
													</a>
													<a title="Edit" target="_blank" @if(array_key_exists('image', $props)) href="{{URL::to('folders/'.$props['image']->folder_id.'?show=thumb')}}" @else href="#" @endif>
														<i class="icon-images colorGrey"></i>
													</a>
												
												@endif
											</span>
										</h2>
										
									</div>
									
									<p id="LearnMoreBtn1" class="gridplt" @if(array_key_exists('image', $props)) onclick="add_to_lightbox({{$props['image']->file_id}}, {{$props['data']->id}});" @endif >Add to lightbox</p>
									
									<div class="entire_story MrgTop5">
										<a class="textButton arrowButton detail_view" rel="{{$props['data']->id}}" href="#">
											Quick View 
										</a>
										
										 <a style="margin-top:5px;" class="textButton arrowButton" rel="{{$props['data']->id}}" href="{{URL::to('our-collection/'.$props['data']->property_slug)}}">
											Detail View 
										</a>
									</div>
						
									<div class="showOnHover">
										<div class="hover_request">
									   </div>   
									</div>
								</div>
							</div>
						</div>
					</div>
					@if($rw%4==0)
						</div>
						<div class="row">
					@endif
					{{--*/ $rw++ /*--}}
				@endforeach
				{{--*/ $totpage = $propertiesArr->appends($pager)->lastPage(); $newpage = $currentPage + 2; $prevnewpage = $newpage - 2; /*--}}
				<!--<div class="productData col-xs-12 col-sm-6 col-md-4 col-lg-3 margin-bottom-10 locatorData">
					<div class="locator clear bottom">
						<div class="next_page_bottom">
							@if($currentPage!=0)
								<a href="{{URL::to('search?s='.$keyword.'&page='.$prevnewpage)}}">
									<img src="{{URL::to('sximo/images/prev_page_bottom.png')}}" alt="">
								</a>
							@endif
							@if($currentPage<=$totpage)
								<a href="{{URL::to('search?s='.$keyword.'&page='.$newpage)}}">
									<img src="{{URL::to('sximo/images/next_page_bottom.png')}}" alt="">
								</a>
							@endif
						</div>
					</div>
				</div>-->
			@endif
		</div>
	</div>
	<div id="brgrid"></div>
	<input type="hidden" id="nxtpg" value="{{$newpage}}">
	<input type="hidden" id="ttlpg" value="{{$totpage}}">
</div>
<script>
    $(document).ready(function(){
       $(document).on('click', '.top-bar-filters li.select-all', function (){
            if($(this).hasClass("active")) {
                $('.top-bar-filters li').addClass("active");
                $(this).removeClass("active");
            }
            else {
                $('.top-bar-filters li').removeClass("active");
                $(this).addClass("active");
            }
        });
        $(document).on('click', '.top-bar-filters li', function (){
            if(!$(this).hasClass("select-all")) {
                $(this).toggleClass("active");
                $('.top-bar-filters li.select-all').removeClass("active");
            }
        });
       $(document).on('click', '.clear-all-filters a', function ( event ){
            event.preventDefault();
            $('.top-bar-filters li').removeClass("active");
            $('.top-bar-filters li.select-all').addClass("active");
        });
		
		var scrollTimer, lastScrollFireTime = 0;
		
		$(window).scroll(function () {
			var minScrollTime = 10000;
			var now = new Date().getTime();
			var totlpgs = $('#ttlpg').val();
			var nxtpg = $('#nxtpg').val();
			
			if(nxtpg<=totlpgs)
			{
				if (!scrollTimer) {
					var element_position = $('#brgrid').offset().top + $('#brgrid').outerHeight() - window.innerHeight;
					var y_scroll_pos = $(window).scrollTop();
					if( ( y_scroll_pos >= element_position )) {
						var it_scroll = true;
						scrollDownloadData(it_scroll);
					}
					scrollTimer = setTimeout(function() {
						scrollTimer = null;
						lastScrollFireTime = new Date().getTime();
						var it_scroll = true;
						scrollDownloadData(it_scroll);
					}, minScrollTime);
				}
			}
		});
    });
	
	
	 
	 function scrollDownloadData(it_scroll)
	 {
		 var nxtpg = $('#nxtpg').val();
		var offSet = 20, isPreviousEventComplete = true, isDataAvailable = true;
		var sIndex = $('#listrecrds').val(); 
		var queryStrng = '';
		var destnarea = $('#selDestn').val();
		if(destnarea!='')
		{
			var dest_area = destnarea.split("#:");
			queryStrng = '&dest='+dest_area[0]+'&area='+dest_area[1];
		}
		
		if (isPreviousEventComplete && isDataAvailable) {
			isPreviousEventComplete = false;
			//$(".LoaderImage").css("display", "block");
			
			$.ajax({
			  url: "{{ URL::to('filter_search_destionation')}}",
			  type: "post",
			  data: 's={{$keyword}}&page=' + nxtpg + queryStrng ,
			  dataType: "json",
			  success: function(data){
				var html = chtml = '';
				if(data.status=='error')
				{
					if(it_scroll==false)
					{
						$('#listproperties').html(data.errors);
					}
					else
					{
						('#listproperties').append(data.errors);
					}
					isDataAvailable = false;
				}
				else
				{
					html +='<div class="row">';
					var p=1;
					$.each($.parseJSON(data.properties), function(idx, obj) {
						html += '<div class="productData col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-10">';
						html += '<div class="wrapperforliineedforlightboxremoval">';
						html += '<div class="cat_product_medium1">';
						html += '<div class="pictureBox gridPicture">';
						if( obj.hasOwnProperty("image")) {
							html += '<a title="'+obj.image.file_name+'" class="picture_link detail_view" rel="'+obj.pdata.id+'" href="#">';
							var pimg = "{{URL::to('uploads/property_imgs_thumbs/')}}/front_property_" + obj.image.folder_id + "_" + obj.image.file_name;
							html += '<img alt="'+obj.image.file_name+'" src="'+pimg+'" class="img-responsive">';
							html += '</a>';
						}else{
							var pimg = "{{URL::to('sximo/assets/images/img-1.jpg')}}";
							html += '<img class="img-responsive" src="'+pimg+'" alt="">';
						}
						
						html += '</div>';
						html += '<div class="listDetails">';
						html += '<div class="photographBox">';
						html += '<h2>';
						var detail_link = "{{URL::to('our-collection/')}}/"+obj.pdata.property_slug;
						html += '<a title="'+obj.pdata.property_name+'" class="photograph" rel="'+obj.pdata.id+'" href="'+detail_link+'">';
						html += obj.pdata.property_name;
						html += '</a>';
						html += '</h2>';
						html += '</div>';
						if(  obj.hasOwnProperty("image") ) {
							html += '<p id="LearnMoreBtn1" class="gridplt" onclick="add_to_lightbox('+obj.image.file_id+','+obj.pdata.id+');" >Add to Itinerary</p>';
						}
						else{
							html += '<p id="LearnMoreBtn1" class="gridplt" >Add to Itinerary</p>';
						}
						html += '<div class="entire_story MrgTop5">';
						html += '<a class="textButton arrowButton detail_view" rel="'+obj.pdata.id+'" href="#">Quick View</a>';
						html += '<a style="margin-top:5px;" class="textButton arrowButton" rel="'+obj.pdata.id+'" href="'+detail_link+'">Detail View </a>';
						html += '</div>';
						html += '<div class="showOnHover">';
						html += '<div class="hover_request">';
						html += '</div>'; 
						html += '</div>';
						html += '</div>';
						html += '</div>';
						html += '</div>';
						html += '</div>';
						if(p%4==0)
						{
							html += '</div>';
							html += '<div class="row">';
						}
						p++;
					});
					html += '</div>';
					if(it_scroll==false)
					{
						$('#listproperties').html(html);
					}
					else{
						$('#listproperties').append(html);
					}
					if(destnarea!='')
					{
						if (typeof $.parseJSON(data.cities) !== 'undefined' && $.parseJSON(data.cities).length > 0) {
							var ttp = p - 1;
							chtml += '<div class="row">';
							chtml += '<div class="col-md-12">';
							chtml += '<div class="clear-all-filters"><a href="javascript:void(0)"><i class="fa fa-repeat" aria-hidden="true"></i>&nbsp;Clear Filters</a></div>';
							chtml += '<ul class="top-bar-filters">';
							chtml += '<li class="active select-all">';
							chtml += '<a href="javascript:void(0)" onclick="filter_destination(\''+dest_area[0]+'\',\'city\');">';
							chtml += '<div class="filter-bg">';
							chtml += '<div class="right-text">('+ttp+')</div>';
							chtml += '<div class="clearfix"></div>';
							chtml += '<div><i class="fa fa-home" aria-hidden="true"></i></div>';
							chtml += '<div class="top-filter-name">All Properties</div>';
							chtml += '</div>';
							chtml += '</a>';
							chtml += '</li>';
							$.each($.parseJSON(data.cities), function(idx, cobj) {
								var cimg = "{{URL::to('uploads/category_imgs/')}}/"+cobj.category_image;
								chtml += '<li>';
								chtml += '<a href="javascript:void(0)" onclick="filter_destination(\''+cobj.id+'\',\'city\');">';
								chtml += '<div class="filter-bg" style="background-image: url(\''+cimg+'\');">';
								chtml += '<div class="right-text">('+cobj.totalproperty+')</div>';
								chtml += '<div class="clearfix"></div>';
								chtml += '<div><i class="fa fa-home" aria-hidden="true"></i></div>';
								chtml += '<div class="top-filter-name">'+cobj.category_name+'</div>';
								chtml += '</div>';
								chtml += '</a>';
								chtml += '</li>';
							});	
							chtml += '</ul>';
							chtml += '</div>';
							chtml += '</div>';
							
							$('#cityfilters').html(chtml);
						}
					}
					
					sIndex = parseInt(sIndex) + offSet;
					$('#listrecrds').val(sIndex); 
					$('#nxtpg').val(parseInt(nxtpg)+1);
					$('#ttlpg').val(data.ttlpages);
					isPreviousEventComplete = true;
				}
			  },
			  error: function (error) {
				  alert(error);
			  }
			});
		}
	 }
</script>
@include('layouts/elliot/ai_footer')
@include('layouts/elliot/ai_lightbox_popups')