@extends('layouts.app')

@section('content')
<link href="{{ asset('sximo/css/custom_ps.css')}}" rel="stylesheet">
<style>
.leng { display:none; }
</style>
  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>
      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('attributes?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active">{{ Lang::get('core.addedit') }} </li>
      </ul>
	  	  
    </div>
 
 	<div class="page-content-wrapper">

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i>  <span style="float:right;"> <a href="#" onclick="change_lang('dutch');">Deutsch</a> || <a href="#" onclick="change_lang('eng');">English</a></span></h4></div>
	<div class="sbox-content"> 	

		 {!! Form::open(array('url'=>'attributes/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
		 <input type="hidden" name="attr_type" value="{{$groupType}}" />
<div class="col-md-12">
						<fieldset><legend> {{strtoupper($groupType)}} {{ Lang::get('core.attributes') }}</legend>
									
								  <div class="form-group hidethis " style="display:none;">
									<label for="Id" class=" control-label col-md-4 text-left"> Id </label>
									<div class="col-md-6">
									  {!! Form::text('id', $row['id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								   					
								  <div class="form-group  " >
									<label for="Title" class=" control-label col-md-4 text-left"> {{ Lang::get('core.tab_title') }} <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  {!! Form::text('attr_title', ($groupType=="group")?'Groupped':$row['attr_title'],array('class'=>'form-control ldutch', 'placeholder'=>'', 'required'=>'true', 'id'=>'attr_title'  )) !!} 
									  
									  {!! Form::text('attr_title_eng', ($groupType=="group")?'Groupped':$row['attr_title_eng'],array('class'=>'form-control leng', 'placeholder'=>'', 'id'=>'attr_title_eng'  )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for=" Description" class=" control-label col-md-4 text-left">  {{ Lang::get('core.tab_description') }} </label>
									<div class="col-md-6">
									  {!! Form::text('attr_desc', $row['attr_desc'],array('class'=>'form-control ldutch', 'placeholder'=>'',   )) !!} 
									  
									  {!! Form::text('attr_desc_eng', $row['attr_desc_eng'],array('class'=>'form-control leng', 'placeholder'=>'',   )) !!}
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div>
								<div class="form-group  " >
									<label for="Type" class=" control-label col-md-4 text-left"> Category <span class="asterix"> * </span></label>
									<div class="col-md-6">
										<select name='attr_cat' class="form-control" required > 
										<option value="">-Select-</option>
										<option value="Size" <?php echo ($row['attr_cat'] == 'Size' ? " selected='selected' " : '' ); ?>>Size</option>
										<option value="Material" <?php echo ($row['attr_cat'] == 'Material' ? " selected='selected' " : '' ); ?>>Material</option>
										<option value="Materialien" <?php echo ($row['attr_cat'] == 'Materialien' ? " selected='selected' " : '' ); ?>>Materialien</option>
										</select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								</div>
								@if($groupType=="tab")
									<div class="form-group  " >
										<label for="tab_number" class=" control-label col-md-4 text-left"> {{ Lang::get('core.tab_number') }} <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('tab_num', $row['tab_num'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true',  )) !!} 
										 </div> 
										 <div class="col-md-2">
											
										 </div>
									  </div> 								  
								 @endif
								  <div class="form-group  " >
									<label for="Status" class=" control-label col-md-4 text-left"> {{ Lang::get('core.status') }} <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  
										<label class='radio radio-inline'>
										<input type='radio' name='attr_status' value ='1' required @if($row['attr_status'] == '1') checked="checked" @endif > Active </label>
										<label class='radio radio-inline'>
										<input type='radio' name='attr_status' value ='0' required @if($row['attr_status'] == '0') checked="checked" @endif > Inactive </label> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div>
								  
								  <div class="form-group  " >
									<label for="Status" class=" control-label col-md-4 text-left"> {{ Lang::get('core.permission') }} <span class="asterix"> * </span></label>
									<div class="col-md-6">
										<label class='radio radio-inline'>
										<input type='radio' name='attr_permission' value ='1' required @if($row['attr_permission'] == '1') checked="checked" @endif > Public </label>
										<label class='radio radio-inline'>
										<input type='radio' name='attr_permission' value ='0' required @if($row['attr_permission'] == '0') checked="checked" @endif > Private </label> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div>

								  </fieldset>
			</div>
			
			
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right"> </label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('attributes?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		$(".js-example-basic-single").select2();
	});
	
	function change_lang(lang)
	{
		if(lang=='dutch')
		{
			$('.ldutch').css('display', 'block');
			$('.leng').css('display', 'none');
		}
		else if(lang=='eng')
		{
			$('.ldutch').css('display', 'none');
			$('.leng').css('display', 'block');
		}
	}
	
	</script>		 
@stop