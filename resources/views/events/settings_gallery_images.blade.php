@extends('layouts.app')

@section('content')

<link href="{{ asset('sximo/css/bookingSys.css')}}" rel="stylesheet">
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="{{ asset('sximo/file_upload/css/jquery.fileupload.css')}}">
<link rel="stylesheet" href="{{ asset('sximo/file_upload/css/jquery.fileupload-ui.css')}}">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="{{ asset('sximo/file_upload/css/jquery.fileupload-noscript.css')}}"></noscript>
<noscript><link rel="stylesheet" href="{{ asset('sximo/file_upload/css/jquery.fileupload-ui-noscript.css')}}"></noscript>

  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>

      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}"> Dashboard </a></li>
        <li class="active">{{ $pageTitle }}</li>
      </ul>	  
	  
    </div>
 	<div class="page-content-wrapper">
		<div id="formerrors"></div>
	@if(Session::has('message'))
	  
		   {{ Session::get('message') }}
	   
	@endif
			
	<div class="block-content">
	
    @include('events/config_tab')
		
	<div class="tab-content m-t">
	  <div class="tab-pane active use-padding" id="types">	
		<div class="sbox  "> 
			<div class="sbox-title">@if(!empty($property_data)) {{$property_data->property_name}} @endif <a href="{{URL::to('properties/update/'.$pid)}}" class="tips btn btn-xs btn-primary pull-right" title="" data-original-title="Property Management"><i class="fa fa-edit"></i>&nbsp;Property Management</a></div>
				<div class="sbox-content"> 
					<div class="tab-container">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_spa_image" data-toggle="tab">Spa Gallery Images</a></li>
							<li><a href="#tab_restrurants_image" data-toggle="tab">Restrurants Gallery Images</a></li>
							<li><a href="#tab_bar_image" data-toggle="tab">Bar Gallery Images</a></li>
						</ul>
						<div class="tab-content" style="margin-top: 20px;">
							<div class="tab-pane use-padding active" id="tab_spa_image">
								<!-- The file upload form used as target for the file upload widget -->
								<form id="fileupload" class="fileupload" action="{{URL::to('property_images_uploads')}}" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="propId" value="{{$pid}}" />
									<input type="hidden" name="uploadType" value="Spa Gallery Images" />
									<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
									<div class="row fileupload-buttonbar">
										<div class="col-lg-7">
											<!-- The fileinput-button span is used to style the file input field as button -->
											<span class="btn btn-success fileinput-button">
												<i class="glyphicon glyphicon-plus"></i>
												<span>Add files...</span>
												<input type="file" name="files[]" multiple>
											</span>
											<button type="submit" class="btn btn-primary start">
												<i class="glyphicon glyphicon-upload"></i>
												<span>Start upload</span>
											</button>
											<button type="reset" class="btn btn-warning cancel">
												<i class="glyphicon glyphicon-ban-circle"></i>
												<span>Cancel upload</span>
											</button>
											<a class="btn btn-success" @if(!empty($spaimgs)) href="{{URL::to('folders/'.$spaimgs[0]->folder_id.'?show=thumb')}}" @else href="#" @endif>
												<span>Re-Order</span>
											</a>
											<button type="button" class="btn btn-danger" onclick="delete_selected_imgs('sgi');" >
												<i class="glyphicon glyphicon-trash"></i>
												<span>Delete</span>
											</button>
											<!-- The global file processing state -->
											<span class="fileupload-process"></span>
										</div>
										<!-- The global progress state -->
										<div class="col-lg-5 fileupload-progress fade">
											<!-- The global progress bar -->
											<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
												<div class="progress-bar progress-bar-success" style="width:0%;"></div>
											</div>
											<!-- The extended global progress state -->
											<div class="progress-extended">&nbsp;</div>
										</div>
									</div>
									<!-- The table listing the files available for upload/download -->
									<table role="presentation" class="table table-striped prese">
										<tbody class="files">
											@if(!empty($spaimgs))
												<tr>
													<td colspan="5"><input type="checkbox" value="1" id="check_all_sgi" class="check-all-sgi"> Select all</td>
												</tr>
												@foreach($spaimgs as $img)
													<tr class="template-download fade in row{{$img->id}}">
														<td>
															<input type="checkbox" name="compont[]" id="compont" value="{{$img->id}}" class="no-border check-files sgi">
														</td>
														<td>
															<span class="preview">
																<a href="{{$img->imgsrc.$img->file_name}}" title="{{$img->file_name}}" download="{{$img->file_name}}" data-gallery="#blueimp-gallery-sgi">
																	<img src="{{URL::to('uploads/property_imgs_thumbs/'.$img->file_name)}}">
																</a>
															</span>
														</td>
														<td>
															<p class="name">
																<a href="{{$img->imgsrc.$img->file_name}}" title="{{$img->file_display_name}}" download="{{$img->file_name}}" data-gallery="#blueimp-gallery-sgi">{{$img->file_display_name}}</a>
															</p>
														</td>
														<td>
															<span class="size">
																{{--*/ $sizeKb = ($img->file_size/1024); /*--}} {{ round($sizeKb,2,PHP_ROUND_HALF_UP) }} KB
															</span>
														</td>
														<td>
															<button type="button" class="btn btn-danger" onclick="delete_property_image({{$img->id}});" >
																<i class="glyphicon glyphicon-trash"></i>
																<span>Delete</span>
															</button>
														</td>
													</tr>
												@endforeach
											@endif
										</tbody>
									</table>
								</form>
								
								<!-- The blueimp Gallery widget -->
								<div id="blueimp-gallery-sgi" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
									<div class="slides"></div>
									<h3 class="title"></h3>
									<a class="prev">‹</a>
									<a class="next">›</a>
									<a class="close">×</a>
									<a class="play-pause"></a>
									<ol class="indicator"></ol>
								</div>
							</div>
							
							<div class="tab-pane use-padding" id="tab_restrurants_image">
								<!-- The file upload form used as target for the file upload widget -->
								<form id="fileupload" class="fileupload" action="{{URL::to('property_images_uploads')}}" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="propId" value="{{$pid}}" />
									<input type="hidden" name="uploadType" value="Restrurants Gallery Images" />
									<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
									<div class="row fileupload-buttonbar">
										<div class="col-lg-7">
											<!-- The fileinput-button span is used to style the file input field as button -->
											<span class="btn btn-success fileinput-button">
												<i class="glyphicon glyphicon-plus"></i>
												<span>Add files...</span>
												<input type="file" name="files[]" multiple>
											</span>
											<button type="submit" class="btn btn-primary start">
												<i class="glyphicon glyphicon-upload"></i>
												<span>Start upload</span>
											</button>
											<button type="reset" class="btn btn-warning cancel">
												<i class="glyphicon glyphicon-ban-circle"></i>
												<span>Cancel upload</span>
											</button>
											<a class="btn btn-success" @if(!empty($resturan_imgs)) href="{{URL::to('folders/'.$resturan_imgs[0]->folder_id.'?show=thumb')}}" @else href="#" @endif>
												<span>Re-Order</span>
											</a>
											<button type="button" class="btn btn-danger" onclick="delete_selected_imgs('rgi');" >
												<i class="glyphicon glyphicon-trash"></i>
												<span>Delete</span>
											</button>
											<!-- The global file processing state -->
											<span class="fileupload-process"></span>
										</div>
										<!-- The global progress state -->
										<div class="col-lg-5 fileupload-progress fade">
											<!-- The global progress bar -->
											<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
												<div class="progress-bar progress-bar-success" style="width:0%;"></div>
											</div>
											<!-- The extended global progress state -->
											<div class="progress-extended">&nbsp;</div>
										</div>
									</div>
									<!-- The table listing the files available for upload/download -->
									<table role="presentation" class="table table-striped prese">
										<tbody class="files">
											@if(!empty($resturan_imgs))
												<tr>
													<td colspan="5"><input type="checkbox" value="1" id="check_all_rgi" class="check-all-rgi"> Select all</td>
												</tr>
												@foreach($resturan_imgs as $img)
													<tr class="template-download fade in row{{$img->id}}">
														<td>
															<input type="checkbox" name="compont[]" id="compont" value="{{$img->id}}" class="no-border check-files rgi">
														</td>
														<td>
															<span class="preview">
																<a href="{{$img->imgsrc.$img->file_name}}" title="{{$img->file_name}}" download="{{$img->file_name}}" data-gallery="#blueimp-gallery-rgi" >
																	<img src="{{URL::to('uploads/property_imgs_thumbs/'.$img->file_name)}}">
																</a>
															</span>
														</td>
														<td>
															<p class="name">
																<a href="{{$img->imgsrc.$img->file_name}}" title="{{$img->file_display_name}}" download="{{$img->file_name}}" data-gallery="#blueimp-gallery-rgi">{{$img->file_display_name}}</a>
															</p>
														</td>
														<td>
															<span class="size">
																{{--*/ $sizeKb = ($img->file_size/1024); /*--}} {{ round($sizeKb,2,PHP_ROUND_HALF_UP) }} KB
															</span>
														</td>
														<td>
															<button type="button" class="btn btn-danger" onclick="delete_property_image({{$img->id}});" >
																<i class="glyphicon glyphicon-trash"></i>
																<span>Delete</span>
															</button>
														</td>
													</tr>
												@endforeach
											@endif
										</tbody>
									</table>
								</form>
								
								<!-- The blueimp Gallery widget -->
								<div id="blueimp-gallery-rgi" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
									<div class="slides"></div>
									<h3 class="title"></h3>
									<a class="prev">‹</a>
									<a class="next">›</a>
									<a class="close">×</a>
									<a class="play-pause"></a>
									<ol class="indicator"></ol>
								</div>
							</div>
							
							<div class="tab-pane use-padding" id="tab_bar_image">
								<!-- The file upload form used as target for the file upload widget -->
								<form id="fileupload" class="fileupload" action="{{URL::to('property_images_uploads')}}" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="propId" value="{{$pid}}" />
									<input type="hidden" name="uploadType" value="Bar Gallery Images" />
									<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
									<div class="row fileupload-buttonbar">
										<div class="col-lg-7">
											<!-- The fileinput-button span is used to style the file input field as button -->
											<span class="btn btn-success fileinput-button">
												<i class="glyphicon glyphicon-plus"></i>
												<span>Add files...</span>
												<input type="file" name="files[]" multiple>
											</span>
											<button type="submit" class="btn btn-primary start">
												<i class="glyphicon glyphicon-upload"></i>
												<span>Start upload</span>
											</button>
											<button type="reset" class="btn btn-warning cancel">
												<i class="glyphicon glyphicon-ban-circle"></i>
												<span>Cancel upload</span>
											</button>
											<a class="btn btn-success" @if(!empty($bar_imgs)) href="{{URL::to('folders/'.$bar_imgs[0]->folder_id.'?show=thumb')}}" @else href="#" @endif>
												<span>Re-Order</span>
											</a>
											<button type="button" class="btn btn-danger" onclick="delete_selected_imgs('bgi');" >
												<i class="glyphicon glyphicon-trash"></i>
												<span>Delete</span>
											</button>
											<!-- The global file processing state -->
											<span class="fileupload-process"></span>
										</div>
										<!-- The global progress state -->
										<div class="col-lg-5 fileupload-progress fade">
											<!-- The global progress bar -->
											<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
												<div class="progress-bar progress-bar-success" style="width:0%;"></div>
											</div>
											<!-- The extended global progress state -->
											<div class="progress-extended">&nbsp;</div>
										</div>
									</div>
									<!-- The table listing the files available for upload/download -->
									<table role="presentation" class="table table-striped prese">
										<tbody class="files">
											@if(!empty($bar_imgs))
												<tr>
													<td colspan="5"><input type="checkbox" value="1" id="check_all_bgi" class="check-all-bgi"> Select all</td>
												</tr>
												@foreach($bar_imgs as $img)
													<tr class="template-download fade in row{{$img->id}}">
														<td>
															<input type="checkbox" name="compont[]" id="compont" value="{{$img->id}}" class="no-border check-files bgi">
														</td>
														<td>
															<span class="preview">
																<a href="{{$img->imgsrc.$img->file_name}}" title="{{$img->file_name}}" download="{{$img->file_name}}" data-gallery="#blueimp-gallery-bgi" >
																	<img src="{{URL::to('uploads/property_imgs_thumbs/'.$img->file_name)}}">
																</a>
															</span>
														</td>
														<td>
															<p class="name">
																<a href="{{$img->imgsrc.$img->file_name}}" title="{{$img->file_display_name}}" download="{{$img->file_name}}" data-gallery="#blueimp-gallery-bgi">{{$img->file_display_name}}</a>
															</p>
														</td>
														<td>
															<span class="size">
																{{--*/ $sizeKb = ($img->file_size/1024); /*--}} {{ round($sizeKb,2,PHP_ROUND_HALF_UP) }} KB
															</span>
														</td>
														<td>
															<button type="button" class="btn btn-danger" onclick="delete_property_image({{$img->id}});" >
																<i class="glyphicon glyphicon-trash"></i>
																<span>Delete</span>
															</button>
														</td>
													</tr>
												@endforeach
											@endif
										</tbody>
									</table>
								</form>
								
								<!-- The blueimp Gallery widget -->
								<div id="blueimp-gallery-bgi" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
									<div class="slides"></div>
									<h3 class="title"></h3>
									<a class="prev">‹</a>
									<a class="next">›</a>
									<a class="close">×</a>
									<a class="play-pause"></a>
									<ol class="indicator"></ol>
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

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
		<td></td>
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade row{%=file.id%}">
		<td></td>
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(parseInt(file.size))%}</span>
        </td>
        <td>
            <button type="button" class="btn btn-danger" onclick="delete_property_image({%=file.id%});">
				<i class="glyphicon glyphicon-trash"></i>
				<span>Delete</span>
			</button>
        </td>
    </tr>
{% } %}
</script>


<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="{{ asset('sximo/file_upload/js/vendor/jquery.ui.widget.js')}}"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- blueimp Gallery script 
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>-->
<script src="{{ asset('sximo/file_upload/js/jquery.blueimp-gallery.min.js')}}"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="{{ asset('sximo/file_upload/js/jquery.iframe-transport.js')}}"></script>
<!-- The basic File Upload plugin -->
<script src="{{ asset('sximo/file_upload/js/jquery.fileupload.js')}}"></script>
<!-- The File Upload processing plugin -->
<script src="{{ asset('sximo/file_upload/js/jquery.fileupload-process.js')}}"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="{{ asset('sximo/file_upload/js/jquery.fileupload-image.js')}}"></script>
<!-- The File Upload audio preview plugin -->
<script src="{{ asset('sximo/file_upload/js/jquery.fileupload-audio.js')}}"></script>
<!-- The File Upload video preview plugin -->
<script src="{{ asset('sximo/file_upload/js/jquery.fileupload-video.js')}}"></script>
<!-- The File Upload validation plugin -->
<script src="{{ asset('sximo/file_upload/js/jquery.fileupload-validate.js')}}"></script>
<!-- The File Upload user interface plugin -->
<script src="{{ asset('sximo/file_upload/js/jquery.fileupload-ui.js')}}"></script>
<!-- The main application script -->
<script> var baseUrl = "{{URL::to('property_images_uploads')}}"; </script>
<script src="{{ asset('sximo/file_upload/js/main.js')}}"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->

<script>
	function delete_property_image(imgID)
	{
		if(imgID!='' && imgID>0)
		{
			var conf = confirm("Are you sure? you want to delete this record!");
			if(conf==true)
			{
				$.ajax({
					url: "{{ URL::to('delete_property_image')}}",
					type: "post",
					data: "img_id="+imgID,
					dataType: "json",
					success: function(data){
					  var html ='';
					  if(data.status=='error')
					  {
							html +='<div class="alert alert-danger fade in block-inner">';
							html +='<button data-dismiss="alert" class="close" type="button">×</button>';
							html +='<i class="icon-checkmark-circle"></i> Record Not Found </div>';
							$('.page-content-wrapper #formerrors').html(html);
							window.scrollTo(0, 0);
					  }
					  else{
							$('.prese tr.row'+imgID).remove();
							html +='<div class="alert alert-success fade in block-inner">';
							html +='<button data-dismiss="alert" class="close" type="button">×</button>';
							html +='<i class="icon-checkmark-circle"></i> Record Deleted Successfully </div>';
							$('.page-content-wrapper #formerrors').html(html);
							window.scrollTo(0, 0);
					  }
					}
				});
			}
		}
	}
	
	$(function(){
		$('input[type="checkbox"][id="check_all_sgi"]').on('ifChecked', function(){
			$('input[type="checkbox"].sgi').iCheck('check');
		});
		
		$('input[type="checkbox"][id="check_all_sgi"]').on('ifUnchecked', function(){
			$('input[type="checkbox"].sgi').iCheck('uncheck');
		});
		
		$('input[type="checkbox"][id="check_all_rgi"]').on('ifChecked', function(){
			$('input[type="checkbox"].rgi').iCheck('check');
		});
		
		$('input[type="checkbox"][id="check_all_rgi"]').on('ifUnchecked', function(){
			$('input[type="checkbox"].rgi').iCheck('uncheck');
		});
		
		$('input[type="checkbox"][id="check_all_bgi"]').on('ifChecked', function(){
			$('input[type="checkbox"].bgi').iCheck('check');
		});
		
		$('input[type="checkbox"][id="check_all_bgi"]').on('ifUnchecked', function(){
			$('input[type="checkbox"].bgi').iCheck('uncheck');
		});
	});
	
	function delete_selected_imgs(cls)
	{
		var conf = confirm("Are you sure? you want to delete this record!");
		if(conf==true)
		{
			var sList = "";
			$('input[type=checkbox].'+cls).each(function () {
				if(this.checked)
				{
					sList += (sList=="" ? $(this).val() : "," + $(this).val());
				}
				
			});
			
			$.ajax({
			  url: "{{ URL::to('delete_selected_image')}}",
			  type: "post",
			  data: "items=" + sList,
			  dataType: "json",
			  success: function(data){
				  var html ='';
				  if(data.status=='error')
				  {
						html +='<div class="alert alert-danger fade in block-inner">';
						html +='<button data-dismiss="alert" class="close" type="button">×</button>';
						html +='<i class="icon-checkmark-circle"></i> Record Not Found </div>';
						$('.page-content-wrapper #formerrors').html(html);
						window.scrollTo(0, 0);
				  }
				  else{
						$.each(data.imgs, function(idx, obj) {
							$('.prese tr.row'+obj).remove();
						});
						html +='<div class="alert alert-success fade in block-inner">';
						html +='<button data-dismiss="alert" class="close" type="button">×</button>';
						html +='<i class="icon-checkmark-circle"></i> Record Deleted Successfully </div>';
						$('.page-content-wrapper #formerrors').html(html);
						window.scrollTo(0, 0);
				  }
			  }
			});
		}
	}
</script>

@stop