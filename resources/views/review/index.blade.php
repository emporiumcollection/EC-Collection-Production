@extends('layouts.app')
<style>
	#s2id_property {
		width: 30% !important;
	}
	#s2id_property_category{
		width: 15% !important;
	}
</style>
@section('content')
{{--*/ usort($tableGrid, "SiteHelpers::_sort") /*--}}
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
	
	
	<div class="page-content-wrapper m-t">	 	

<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h5> <i class="fa fa-table"></i> </h5>
<div class="sbox-tools" >
		<a href="{{ url($pageModule) }}" class="btn btn-xs btn-white tips" title="Clear Search" ><i class="fa fa-trash-o"></i> Clear Search </a>
		@if(Session::get('gid') ==1)
			<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="btn btn-xs btn-white tips" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa fa-cog"></i></a>
		@endif 
		</div>
	</div>
	<div class="sbox-content"> 	
	    <div class="toolbar-line ">
			@if($access['is_add'] ==1)
	   		<a href="{{ URL::to('review/update') }}" class="tips btn btn-sm btn-white"  title="{{ Lang::get('core.btn_create') }}">
			<i class="fa fa-plus-circle "></i>&nbsp;{{ Lang::get('core.btn_create') }}</a>
			@endif  
			@if($access['is_remove'] ==1)
			<a href="javascript://ajax"  onclick="SximoDelete();" class="tips btn btn-sm btn-white" title="{{ Lang::get('core.btn_remove') }}">
			<i class="fa fa-minus-circle "></i>&nbsp;{{ Lang::get('core.btn_remove') }}</a>
			@endif 
			<a href="{{ URL::to( 'review/search') }}" class="btn btn-sm btn-white" onclick="SximoModal(this.href,'Advance Search'); return false;" ><i class="fa fa-search"></i> Search</a>				
			@if($access['is_excel'] ==1)
			<a href="{{ URL::to('review/download?return='.$return) }}" class="tips btn btn-sm btn-white" title="{{ Lang::get('core.btn_download') }}">
			<i class="fa fa-download"></i>&nbsp;{{ Lang::get('core.btn_download') }} </a>
			@endif			
		 
			<select name='property' id='property' style="height: 28px; margin-left: 5px;" class='select2 '  onchange="fetchproperty(this.value);" > 
				<option value="">-Select Property-</option>
				@if(!empty($fetch_prop))
					@foreach($fetch_prop as $proplist)
						@if(isset($proplist->property_name))
						<option value="{{$proplist->id}}" <?php echo ($curntprop == $proplist->id) ? " selected='selected' " : '' ; ?>>{{$proplist->property_name}}</option>
						@endif
					@endforeach
				@endif
			</select>
			<select name='property_category' id='property_category' style="height: 28px; margin-left: 5px;" class='select2 ' onchange="filterstatus(this.value);" > 
				<option value="">-Select-</option>
				<option value="is_approved" <?php echo ($curstatus == 'is_approved') ? " selected='selected' " : '' ; ?>>Is Approved</option>
				<option value="is_not_approved" <?php echo ($curstatus == 'is_not_approved') ? " selected='selected' " : '' ; ?>>Is Not Approved</option>
			</select>
		</div> 		

	
	
	 {!! Form::open(array('url'=>'review/delete/', 'class'=>'form-horizontal' ,'id' =>'SximoTable' )) !!}
	 <div class="table-responsive" style="min-height:300px;">
    <table class="table table-striped ">
        <thead>
			<tr>
				<th class="number"> No </th>
				<th> <input type="checkbox" class="checkall" /></th>				
				<td>Property</td>
				<th>Rate</th>
				<th>Name</th>
				<th>Review</th>
				<th width="70" >{{ Lang::get('core.btn_action') }}</th>
			  </tr>
        </thead>

        <tbody>        						
            @foreach ($rowData as $row)
                <tr>
					<td width="30"> {{ ++$i }} </td>
					<td width="50"><input type="checkbox" class="ids" name="ids[]" value="{{ $row->id }}" />  </td>									
					<td>{{ ReviewHelper::getHotelName($row->hotel_id) }}</td>
					<td>{{ $row->rating }}</td>
					<td>{{ $row->fname }}</td>
					<td>{{ $row->comment }}</td>
				 <td>
					 	@if($access['is_detail'] ==1)
						<a href="{{ URL::to('review/show/'.$row->id.'?return='.$return)}}" class="tips btn btn-xs btn-primary" title="{{ Lang::get('core.btn_view') }}"><i class="fa  fa-search "></i></a>
						@endif
						@if($access['is_edit'] ==1)
						<a  href="{{ URL::to('review/update/'.$row->id.'?return='.$return) }}" class="tips btn btn-xs btn-success" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit "></i></a>
						@endif
												
					
				</td>				 
                </tr>
				
            @endforeach
              
        </tbody>
      
    </table>
	<input type="hidden" name="md" value="" />
	</div>
	{!! Form::close() !!}
	@include('footer')
	</div>
</div>	
	</div>	  
</div>	
<script>
$(document).ready(function(){

	$('.do-quick-search').click(function(){
		$('#SximoTable').attr('action','{{ URL::to("review/multisearch")}}');
		$('#SximoTable').submit();
	});
	
	
});	

function fetchproperty(prop)
	{
		window.location.href = "{{URL::to('review')}}?selprop="+prop+"&selstatus="+status;
	}

	function filterstatus(status)
	{
		var prop = $('#property').val();
		if(prop!='')
		{
			window.location.href = "{{URL::to('review')}}?selprop="+prop+"&selstatus="+status;
		}
		else
		{
			window.location.href = "{{URL::to('review')}}?selstatus="+status;
		}
	}
</script>	
@stop