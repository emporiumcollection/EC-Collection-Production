<?php 
// echo "<pre>";
//     print_r($globalpolicies[0]->policy);
//     echo "</pre>";
// die();
?>
@extends('layouts.app')


@section('content')

  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3><i class="fa fa-info"></i> {{ Lang::get('core.t_generalsetting') }} </h3>
      </div>
	  
	 
	  <ul class="breadcrumb">
		<li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('sximo/config') }}">{{ Lang::get('core.t_generalsetting') }}</a></li>
	  </ul>	  
	 
    </div>
 	<div class="page-content-wrapper">   
	@if(Session::has('message'))
	  
		   {{ Session::get('message') }}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		
<div class="block-content">
	@include('sximo.config.tab')	
<div class="tab-content m-t">
  <div class="tab-pane active use-padding" id="info">	
  <div class="sbox  "> 
  <div class="sbox-title"></div>
  <div class="sbox-content"> 
		 {!! Form::open(array('url'=>'sximo/config/policies/', 'class'=>'form-horizontal row', 'files' => true)) !!}

		<div class="col-sm-4 animated fadeInRight ">
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">voyage </label>
			<div class="col-md-8">
                <textarea class="form-control input-sm"  name="domains[voyage]">{{ $globalpolicies[0]->policy }}</textarea>
			 </div> 
		  </div>  
		  
		</div>

        <div class="col-sm-4 animated fadeInRight ">
            <div class="form-group">
              <label for="ipt" class=" control-label col-md-4">spa </label>
              <div class="col-md-8">
                <textarea class="form-control input-sm"  name="domains[spa]">{{ $globalpolicies[2]->policy }}</textarea>
               </div> 
            </div>  
            
          </div>

          <div class="col-sm-4 animated fadeInRight ">
            <div class="form-group">
              <label for="ipt" class=" control-label col-md-4">islands </label>
              <div class="col-md-8">
                <textarea class="form-control input-sm"  name="domains[islands]">{{ $globalpolicies[3]->policy}}</textarea> 
               </div> 
            </div>  
            
          </div>
          <div class="col-sm-4 animated fadeInRight ">
            <div class="form-group">
              <label for="ipt" class=" control-label col-md-4">safari </label>
              <div class="col-md-8">
                <textarea class="form-control input-sm"  name="domains[safari]">{{ $globalpolicies[4]->policy}}</textarea> 
               </div> 
            </div>  
            
          </div>

          <div class="col-sm-4 animated fadeInRight ">
            <div class="form-group">
              <label for="ipt" class=" control-label col-md-4">collection </label>
              <div class="col-md-8">
                <textarea class="form-control input-sm"  name="domains[collection]">{{ $globalpolicies[5]->policy}}</textarea>  
               </div> 
            </div>  
            
          </div>

          <div class="col-sm-4 animated fadeInRight ">
            <div class="form-group">
              <label for="ipt" class=" control-label col-md-4">yachts </label>
              <div class="col-md-8">
                <textarea class="form-control input-sm"  name="domains[yachts]">{{ $globalpolicies[6]->policy}}</textarea> 
               </div> 
            </div>  
        </div>
        
        <div class="col-sm-12 animated">
            <div class="form-group">
    		    <label for="ipt" class=" control-label col-md-4">&nbsp;</label>
    			<div class="col-md-8">
    				<button class="btn btn-primary" type="submit">{{ Lang::get('core.sb_savechanges') }} </button>
    			 </div> 
    		  </div> 
        </div>
		 {!! Form::close() !!}
	</div>
	</div>	 
</div>
</div>
</div>
</div>








@stop