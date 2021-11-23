@extends('layouts.app')

@section('content')
<?php print_r(Request::all());?>
  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>
      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('review?return='.$return) }}">{{ $pageTitle }}</a></li>
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
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	

		 {!! Form::open(array('url'=>'review/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> Reviews</legend>
									
									  {!! Form::hidden('id', $row['id'],array('class'=>'form-control', 'placeholder'=>'',   'readonly'=>'true')) !!} 
									
								  <div class="form-group  ">
										<label for="Property property_neme" class=" control-label col-md-4 text-left"> Hotel Name <span class="asterix"> * </span></label>
										<div class="col-md-6">
										{{-- <select name='hotel_id' rows='5' id='hotel_id' class='select2 ' required  ></select>  --}}
										{!! Form::select('hotel_id', [], $row['hotel_id'], array('class'=>'select2', 'required'=>'true', 'id'=>'hotel_id'))!!}
										</div> 
										<div class="col-md-2">
											
										</div>
									</div>
								  
								  <div class="form-group  " >
									<label for="Rating" class=" control-label col-md-4 text-left"> Rating <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  {!! Form::text('rating', $row['rating'],array('class'=>'form-control', 'placeholder'=>'',  'required'=>'true')) !!} 
									  <label class=" control-label "> Enter 1 to 10 Rating</label>
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div>
								  <div class="form-group  " >
									<label for="Fname" class=" control-label col-md-4 text-left"> First Name </label>
									<div class="col-md-6">
									  {!! Form::text('fname', $row['fname'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div>	
								  <div class="form-group  " >
									<label for="Lname" class=" control-label col-md-4 text-left"> Last Name </label>
									<div class="col-md-6">
									  {!! Form::text('lname', $row['lname'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div>
								  <div class="form-group  " >
									<label for="Country" class=" control-label col-md-4 text-left"> Country </label>
									<div class="col-md-6">
									  {!! Form::text('country', $row['country'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Comment" class=" control-label col-md-4 text-left"> Comment </label>
									<div class="col-md-6">
									  {!! Form::textarea('comment', $row['comment'],array('class'=>'form-control', 'placeholder'=>'',  )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Is Approved" class=" control-label col-md-4 text-left"> Is Approved </label>
									<div class="col-md-6">
									  {!! Form::checkbox('is_approved', 1, $row['is_approved'], ['class' => 'form-control', 'placeholder' => '']) !!}
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> </fieldset>
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('review?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
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
		
		//get propety name
		$("#hotel_id").jCombo("{{ URL::to('properties/comboselect?filter=tb_properties:id:property_name') }}",
            { selected_value : '{{ request()->get('hotel_id') }}', condition_param: 'find_in_set' });
		
	});
	</script>		 
@stop