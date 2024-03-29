@extends('layouts.app')

@section('content')
<link href="{{ asset('sximo/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet">
<style>
    .radio-inline{ padding-left: 0px;}
    .bootstrap-tagsinput{ width: 100%; }
    .radio-inline + .radio-inline, .checkbox-inline + .checkbox-inline{ margin-top: 10px; }
</style>
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
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('events?return='.$return) }}">{{ $pageTitle }}</a></li>
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
             	
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#EventDetails" data-toggle="tab">Event Details</a></li>                    
                    <li class=""><a href="#GalleryImages" data-toggle="tab">Gallery Images</a></li>                    
                </ul>
                <div class="tab-content">
                    <div class="tab-pane m-t active" id="EventDetails">                      
                        
                        <div class="col-md-12">
                            {!! Form::open(array('url'=>'events/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
    						<ul class="nav nav-tabs">
                                <li class="active"><a href="#SubtabEventDetails" data-toggle="tab">Details</a></li>
                                <li><a href="#OrganizerDetails" data-toggle="tab">Organizer Details</a></li>
                                <li><a href="#VenueDetails" data-toggle="tab">Venue Details</a></li>
                                <li><a href="#VideoDetails" data-toggle="tab">Video</a></li>
                                <li><a href="#seo" data-toggle="tab">SEO</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane m-t active" id="SubtabEventDetails">
    									
    								  <div class="form-group hidethis " style="display:none;">
    									<label for="Id" class=" control-label col-md-4 text-left"> Id </label>
    									<div class="col-md-6">
    									  {!! Form::text('id', $row['id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
    									 </div> 
    									 <div class="col-md-2">
    									 	
    									 </div>
    								  </div>
                                      					
    								  <div class="form-group">
    									<label for="Title" class=" control-label col-md-4 text-left"> Title </label>
    									<div class="col-md-6">
    									  {!! Form::text('title', $row['title'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
    									 </div> 
    									 <div class="col-md-2">
    									 	
    									 </div>
    								  </div>
                                      <div class="form-group">
    									<label for="Alias" class=" control-label col-md-4 text-left"> Alias </label>
    									<div class="col-md-6">
    									  {!! Form::text('alias', $row['alias'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
    									 </div> 
    									 <div class="col-md-2">
    									 	
    									 </div>
    								  </div>                                          								  				
    								  <div class="form-group">
    									 <label for="Desciription" class=" control-label col-md-4 text-left"> Desciription </label>
    									 <div class="col-md-6">
    									  <textarea name='desciription' rows='5' id='desciription' class='form-control'>{{ $row['desciription'] }}</textarea> 
    									 </div> 
    									 <div class="col-md-2">
    									 	
    									 </div>
    								  </div>
                                      <div class="form-group">
    									<label for="Category" class=" control-label col-md-4 text-left"> Category </label>
    									<div class="col-md-6">
    									  <select name='category_id' class='select2' >
    										@if(!empty($event_categories))
    											@foreach($event_categories as $evnts)
    												<option value="{{$evnts->id}}" {{ ($evnts->id==$row['category_id']) ? 'selected="selected"' : '' }}>	
    													{{$evnts->category_name}}
    												</option>
    											@endforeach
    										@endif
    									  </select> 
    									 </div> 
    									 <div class="col-md-2">
    									 	<input type="hidden" name="user_id" value="1" />
    									 </div>
    								  </div>
                                      <div class="form-group">
                                            <label for="Destinations" class="control-label col-md-4 text-left">Destinations</label>
                                            <div class="col-md-6">                                            
                                                <select name='destinations[]' id="destination_id" rows='5' class='select2' multiple="multiple"> 
                                                    <option value="0">-- Select Destination --</option> 
                                                    @foreach($destinations as $val)            
                                                    <option  value ="{{$val->id}}" {{in_array($val->id, explode(',',$event_destinations)) ? " selected='selected' " : '' }}>{{$val->category_name}}</option> 						
                                                    @endforeach						
                                                </select> 
                                            </div> 
                                            <div class="col-md-2"></div>
                                      </div>
                                      <div class="form-group">
        									<label for="start_date" class=" control-label col-md-4 text-left"> Start Date </label>
        									<div class="col-md-6">
        									  {!! Form::text('start_date', $row['start_date'],array('class'=>'form-control datetimepicker', 'placeholder'=>'',   )) !!} 
        									 </div> 
        									 <div class="col-md-2">
        									 	
        									 </div>
    								  </div> 
                                      <div class="form-group">
        									<label for="end_date" class=" control-label col-md-4 text-left"> End Date </label>
        									<div class="col-md-6">
        									  {!! Form::text('end_date', $row['end_date'],array('class'=>'form-control datetimepicker', 'placeholder'=>'',   )) !!} 
        									 </div> 
        									 <div class="col-md-2">
        									 	
        									 </div>
    								  </div>
                                      <?php if(empty($event_times)){  ?>
                                      <div class="form-group">
        									<label for="end_date" class=" control-label col-md-4 text-left"> Start Time </label>
        									<div class="col-md-6">
        									  {!! Form::text('start_time[]', '',array('class'=>'form-control timepicker', 'placeholder'=>'',   )) !!} 
        									 </div> 
        									 <div class="col-md-2">
        									 	
        									 </div>
    								  </div>
                                      <div class="form-group">
        									<label for="end_date" class=" control-label col-md-4 text-left"> End Time </label>
        									<div class="col-md-6">
        									  {!! Form::text('end_time[]', '',array('class'=>'form-control timepicker', 'placeholder'=>'',   )) !!} 
        									 </div> 
        									 <div class="col-md-2">
        									 	
        									 </div>
    								  </div>
                                      <?php 
                                      }else{
                                            for($i=0; $i < count($event_times); $i++){
                                      ?>
                                            @if($i >= 1) 
                                            <div class="removetimesection">';
                                              <div class="col-md-10 text-right removemoretime">x</div>
                                            @endif                                        
                                              <div class="form-group">
                									<label for="end_date" class=" control-label col-md-4 text-left"> Start Time </label>
                									<div class="col-md-6">
                									  {!! Form::text('start_time[]', $event_times[$i]->start_time, array('class'=>'form-control timepicker', 'placeholder'=>'',   )) !!} 
                									 </div> 
                									 <div class="col-md-2">
                									 	
                									 </div>
            								  </div>
                                              <div class="form-group">
                									<label for="end_date" class=" control-label col-md-4 text-left"> End Time </label>
                									<div class="col-md-6">
                									  {!! Form::text('end_time[]', $event_times[$i]->end_time, array('class'=>'form-control timepicker', 'placeholder'=>'',   )) !!} 
                									 </div> 
                									 <div class="col-md-2">
                									 	
                									 </div>
            								  </div>
                                              
                                            @if($i >= 1)                                                    
                                              </div> 
                                            @endif                                                                         
                                      <?php 
                                                    
                                            } 
                                      }
                                      ?>
                                      <div id="dvaddmoretime"></div>
                                      <div class="form-group"> 
                                            <div class="col-md-4"></div> 
                                            <div class="col-md-4"><button class="btn btn-success" id="btnAddMoreTime">Add More Time Slot</button></div>
                                      </div>
                                      
                                      <div class="form-group">
                                            <label for="recurring_event" class="control-label col-md-4 text-left">Recurring Event</label>
                                            <div class="col-md-6">                                            
                                                <select name='recurring_event' id="recurring_event" rows='5' class='select2'> 
                                                    <option  value ="1" {{($row['recurring_event']==1 ? 'selected="selected"' : '')}}>Yes</option>
                                                    <option  value ="0" {{($row['recurring_event']==0 ? 'selected="selected"' : '')}}>No</option>					
                                                </select> 
                                            </div> 
                                            <div class="col-md-2"></div>
                                      </div>
                                      
                                      <div class="form-group">
                                            <label for="event_recurring" class="control-label col-md-4 text-left">Event Recurring</label>
                                            <div class="col-md-6">                                            
                                                <select name='event_recurring' id="event_recurring" rows='5' class='select2'> 
                                                    <option value="">Select</option>
                                                    <option value="1" {{($row['event_recurring']==1 ? 'selected="selected"' : '')}}>Every day</option>
                                                    <option value="2" {{($row['event_recurring']==2 ? 'selected="selected"' : '')}}>Every second day</option>
                                                    <option value="3" {{($row['event_recurring']==3 ? 'selected="selected"' : '')}}>Every third day</option>
                                                    <option value="4" {{($row['event_recurring']==4 ? 'selected="selected"' : '')}}>Every fourth day</option>
                                                    <option value="5" {{($row['event_recurring']==5 ? 'selected="selected"' : '')}}>Every fifth day</option>
                                                    <option value="6" {{($row['event_recurring']==6 ? 'selected="selected"' : '')}}>Every sixth day</option>
                                                    <option value="7" {{($row['event_recurring']==7 ? 'selected="selected"' : '')}}>Every week</option>
                                                    <option value="30" {{($row['event_recurring']==30 ? 'selected="selected"' : '')}}>Every month</option>						
                                                </select> 
                                            </div> 
                                            <div class="col-md-2"></div>
                                      </div>
                                      
                                      <div class="form-group">
                                            <label for="recurring_frequency" class="control-label col-md-4 text-left">Recurring Frequency</label>
                                            <div class="col-md-6">                                            
                                                {!! Form::text('recurring_frequency', $row['recurring_frequency'],array('class'=>'form-control', 'placeholder'=>'',   )) !!}     
                                            </div> 
                                            <div class="col-md-2"></div>
                                      </div>
                                       					
    								     								  
    								  @if($group!=1 && $group!=2)
    								  <div class="form-group">
    									<label for="Property Id" class=" control-label col-md-4 text-left"> Property Id </label>
    									<div class="col-md-6">
    									  <select name='property_id' class='select2' >
    										@if(!empty($proprty))
    											@foreach($proprty as $prps)
    												<option value="{{$prps->id}}" {{ ($prps->id==$row['property_id']) ? 'selected="selected"' : '' }}>	
    													{{$prps->property_name}}
    												</option>
    											@endforeach
    										@endif
    									  </select> 
    									 </div> 
    									 <div class="col-md-2">
    									 	<input type="hidden" name="user_id" value="1" />
    									 </div>
    								  </div>    								  
    								  @else    								  
    								  <div class="form-group">
    									<label for="Property Id" class=" control-label col-md-4 text-left"> Property Id </label>
    									<div class="col-md-6">
    									  <select name='property_id' rows='5' id='property_id' class='select2 '   ></select> 
    									 </div> 
    									 <div class="col-md-2">
    									 	
    									 </div>
    								  </div> 					
    								  <div class="form-group">
    									<label for="User Id" class=" control-label col-md-4 text-left"> User Id </label>
    									<div class="col-md-6">
    									  <select name='user_id' rows='5' id='user_id' class='select2 '   ></select> 
    									 </div> 
    									 <div class="col-md-2">
    									 	
    									 </div>
    								  </div> 
    								  @endif                                    
    								  				
    								  <div class="form-group" style="display: none;">
    									<label for="Event Type" class=" control-label col-md-4 text-left"> Event Type </label>
    									<div class="col-md-6">    									  
                        					<?php $event_type = explode(',',$row['event_type']);
                        					$event_type_opt = array( 'Event' => 'Event' ,  'Occasion' => 'Occasion' , ); ?>
                        					<select name='event_type' rows='5'   class='select2 '  > 
                        						<?php 
                        						foreach($event_type_opt as $key=>$val)
                        						{
                        							echo "<option  value ='$key' ".($row['event_type'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
                        						}						
                        						?>
                                            </select> 
    									 </div> 
    									 <div class="col-md-2">    									 	
    									 </div>
    								  </div>
                                            <div class="form-group">
            									<label for="Location" class=" control-label col-md-4 text-left"> Location </label>
            									<div class="col-md-6">
            									  {!! Form::text('location', $row['location'],array('class'=>'form-control', 'placeholder'=>'Copy the address from google map to get lat long',   )) !!} 
            									 </div> 
            									 <div class="col-md-2">    									 	
            									 </div>
            								</div>
                                            <div class="form-group">
                                                <label for="Website" class=" control-label col-md-4 text-left"> Latitude </label>
                                                <div class="col-md-6">
                                                    {!! Form::text('latitude', $row['latitude'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
                                                </div> 
                                                <div class="col-md-2">            
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Website" class=" control-label col-md-4 text-left"> Longitude </label>
                                                <div class="col-md-6">
                                                    {!! Form::text('longitude', $row['longitude'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
                                                </div> 
                                                <div class="col-md-2">            
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="tags" class="control-label col-md-4 text-left">Tags</label>
                                                <div class="col-md-6">                                            
                                                    <select name='tags[]' id="tag_id" rows='5' class='select2' multiple="multiple"> 
                                                        <option value="0">-- Select Tag --</option> 
                                                        @foreach($tags as $val)            
                                                        <option  value ="{{$val->id}}" {{in_array($val->id, explode(',',$event_tags)) ? " selected='selected' " : '' }}>{{$val->tag_title}}</option> 						
                                                        @endforeach						
                                                    </select> 
                                                </div> 
                                                <div class="col-md-2">
                                                    <a href="#" id="btn_add_new_tag">Add New Tag</a>
                                                </div>
                                            </div>
                                                                                  
                                    </div>
                                    
                                    <div class="tab-pane m-t" id="OrganizerDetails">
                                          <div class="form-group">
        									<label for="Organizer Name" class=" control-label col-md-4 text-left"> Organizer Name </label>
        									<div class="col-md-6">
        									  {!! Form::text('organizer_name', $row['organizer_name'],array('class'=>'form-control', 'placeholder'=>'', )) !!} 
        									 </div> 
        									 <div class="col-md-2">    									 	
        									 </div>
        								  </div> 					
        								  <div class="form-group">
        									<label for="Organizer Email" class=" control-label col-md-4 text-left"> Organizer Email </label>
        									<div class="col-md-6">
        									  {!! Form::text('organizer_email', $row['organizer_email'],array('class'=>'form-control', 'placeholder'=>'', )) !!} 
        									 </div> 
        									 <div class="col-md-2">
        									 	
        									 </div>
        								  </div> 	
                                          <div class="form-group  " >
        									<label for="Website" class=" control-label col-md-4 text-left"> Organizer Website </label>
        									<div class="col-md-6">
        									  {!! Form::text('website', $row['website'],array('class'=>'form-control', 'placeholder'=>'', )) !!} 
        									 </div> 
        									 <div class="col-md-2">
        									 	
        									 </div>
        								  </div> 
                                          <div class="form-group  " >
        									<label for="Organizer Phone" class=" control-label col-md-4 text-left">Organizer Phone </label>
        									<div class="col-md-6">
        									  {!! Form::text('organizer_phone', $row['organizer_phone'],array('class'=>'form-control', 'placeholder'=>'', )) !!} 
        									 </div> 
        									 <div class="col-md-2">
        									 	
        									 </div>
        								  </div> 	
                                          <div class="form-group">
        									<label for="Phonenumber" class=" control-label col-md-4 text-left">Organizer Youtube Channel ID </label>
        									<div class="col-md-6">
        									  {!! Form::text('organizer_youtube_channel', $row['organizer_youtube_channel'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
        									</div> 
        									<div class="col-md-2">
        									 	
        									</div>
        								  </div> 	
                                          <div class="form-group">
        									<label for="Phonenumber" class=" control-label col-md-4 text-left">Organizer Instagram </label>
        									<div class="col-md-6">
        									  {!! Form::text('organizer_instagram', $row['organizer_instagram'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
        									 </div> 
        									 <div class="col-md-2">
        									 	
        									 </div>
        								  </div>    
                                    </div>
                                    
                                    <div class="tab-pane m-t" id="VenueDetails">
                                        
                                        <div class="form-group">
                                            <label for="Venue" class="control-label col-md-4 text-left">Venue</label>
                                            <div class="col-md-6">
                                                <select name='venue' rows='5' class='select2' id="venue">
                                                    <option value="">Select</option>  
                                                    @if(!empty($venues))
                                                        @foreach($venues as $si)
                                                            <option value="{{$si->id}}" {{$row['venue_id']==$si->id ? 'selected="selected"' : '' }}>{{$si->name}}</option>            
                                                        @endforeach
                                                    @endif 
                                                    <!--<option value="0">Add New</option>-->
                                                </select>    
                                            </div>
                                            <div class="col-md-2">
                                                <a href="#" id="btn_add_new_venue">Add New Venue</a>
                                            </div> 
                                        </div>
                                        <div class="form-group" style="display: none;">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-8">OR</div>    
                                        </div>
                                        <div class="form-group" style="display: none;">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-8">
                                                <a href="#" id="add_new_venue">Click to Add New</a>
                                            </div>    
                                        </div>
                                        <div class="add-new-venue-details" style="display: none;">
                                            <div class="form-group">
            									<label for="Venue Name" class=" control-label col-md-4 text-left">Venue Name</label>
            									<div class="col-md-6">
            									  {!! Form::text('venue_name', '',array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
            									 </div> 
            									 <div class="col-md-2">
            									 	
            									 </div>
            								</div> 
                                            <div class="form-group">
            									<label for="Venue Email" class=" control-label col-md-4 text-left"> Venue Email </label>
            									<div class="col-md-6">
            									  {!! Form::text('venue_email', '',array('class'=>'form-control', 'placeholder'=>'', )) !!} 
            									 </div> 
            									 <div class="col-md-2">
            									 	
            									 </div>
            								</div> 	
                                            <div class="form-group  " >
            									 <label for="venue_website" class=" control-label col-md-4 text-left"> Venue Website </label>
            									 <div class="col-md-6">
            									  {!! Form::text('venue_website', '',array('class'=>'form-control', 'placeholder'=>'', )) !!} 
            									 </div> 
            									 <div class="col-md-2">
            									 	
            									 </div>
            								</div> 
                                            <div class="form-group  " >
            								    <label for="venue_phone" class=" control-label col-md-4 text-left">Venue Phone </label>
            									<div class="col-md-6">
            									  {!! Form::text('venue_phone', '',array('class'=>'form-control', 'placeholder'=>'', )) !!} 
            									 </div> 
            									 <div class="col-md-2">
            									 	
            									 </div>
            								</div> 	
                                            <div class="form-group">
            									<label for="venue_youtube_channel" class=" control-label col-md-4 text-left">Venue Youtube Channel ID </label>
            									<div class="col-md-6">
            									  {!! Form::text('venue_youtube_channel', '',array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
            									</div> 
            									<div class="col-md-2">
            									 	
            									</div>
            								</div> 	
                                            <div class="form-group">
            									<label for="venue_instagram" class=" control-label col-md-4 text-left">Venue Instagram </label>
            									<div class="col-md-6">
            									  {!! Form::text('venue_instagram', '',array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
            									 </div> 
            									 <div class="col-md-2">
            									 	
            									 </div>
            								</div>	
                                            <div class="form-group">
            									 <label for="Venue Address" class=" control-label col-md-4 text-left">Venue Address</label>
            									 <div class="col-md-6">
            									  {!! Form::text('venue_address', '',array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
            									 </div> 
            									 <div class="col-md-2">
            									 </div>
            								</div>
                                             
                                            <div class="form-group">
            									<label for="Location" class=" control-label col-md-4 text-left"> Location </label>
            									<div class="col-md-6">
            									  {!! Form::text('event_location', '',array('class'=>'form-control', 'placeholder'=>'Copy the address from google map to get lat long',   )) !!} 
            									 </div> 
            									 <div class="col-md-2">    									 	
            									 </div>
            								</div>
                                            <div class="form-group">
                                                <label for="Website" class=" control-label col-md-4 text-left"> Latitude </label>
                                                <div class="col-md-6">
                                                    {!! Form::text('event_latitude', '',array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
                                                </div> 
                                                <div class="col-md-2">            
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Website" class=" control-label col-md-4 text-left"> Longitude </label>
                                                <div class="col-md-6">
                                                    {!! Form::text('event_longitude', '',array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
                                                </div> 
                                                <div class="col-md-2">            
                                                </div>
                                            </div>  						
            								
                                        </div>
                                    </div>                                       
                                    <div class="tab-pane m-t" id="VideoDetails">
                                          					
        								  <div class="form-group">
        									<label for="Video Type" class=" control-label col-md-4 text-left"> Video Type </label>
        									<div class="col-md-6">        									  
                                                <label class='radio radio-inline'>
                                                <input type='radio' name='video_type' value ='upload'  @if($row['video_type'] == 'upload') checked="checked" @endif > Upload </label>
                                                <label class='radio radio-inline'>
                                                <input type='radio' name='video_type' value ='link'  @if($row['video_type'] == 'link') checked="checked" @endif > Link </label>
                						 
        									 </div> 
        									 <div class="col-md-2">
        									 	
        									 </div>
        								  </div> 					
        								  
                                          <div class="restaurant_videotypelink" style="display:none;" >
                                                <div class="form-group  " >
                                                	<label for="Video Link Type" class=" control-label col-md-4 text-left"> Video Link Type </label>
                                                	<div class="col-md-6">
                                                		
                                                		<label class='radio radio-inline'>
                                                		<input type='radio' name='video_link_type' value ='youtube'  @if($row['video_link_type'] == 'youtube') checked="checked" @endif > Youtube </label>
                                                		<label class='radio radio-inline'>
                                                		<input type='radio' name='video_link_type' value ='vimeo'  @if($row['video_link_type'] == 'vimeo') checked="checked" @endif > Vimeo </label>
                                                	</div>
                                                	<div class="col-md-2">
                                                		
                                                	</div>
                                                </div>
                                                <div class="form-group  " >
                                                	<label for="Video Link" class=" control-label col-md-4 text-left"> Video Link </label>
                                                	<div class="col-md-6">
                                                		{!! Form::text('video_link', $row['video_link'],array('class'=>'form-control', 'placeholder'=>'',   )) !!}
                                                	</div>
                                                	<div class="col-md-2">
                                                		
                                                	</div>
                                                </div>
                                          </div>					
        								  <div class="form-group restaurant_videotypeupload" style="display:none;" >
                        						<label for="Video" class=" control-label col-md-4 text-left"> Video </label>
                        						<div class="col-md-6">
                        							<input  type='file' name='video' id='video' @if($row['video'] =='') class='required' @endif style='width:150px !important;'  />
                        							<div >
                        								{!! SiteHelpers::showUploadedFile($row['video'],'') !!}
                        								
                        							</div>
                        							
                        						</div>
                        						<div class="col-md-2">
                        							
                        						</div>
                                          </div> 
                                    </div>
                                    <div class="tab-pane m-t" id="seo">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#MetaTags" data-toggle="tab">Meta Tags</a></li>
                                            <li class=""><a href="#OpenGraph" data-toggle="tab">Open Graph</a></li>
                                            <li class=""><a href="#TwitterCard" data-toggle="tab">Twitter Card</a></li>                                                     
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane m-t active" id="MetaTags">                        
                                        
                                                <div class="form-group  " >
                                                    <label for="meta_title" class=" control-label col-md-4 text-left"> Meta Title </label>
                                                    <div class="col-md-6">                                
                                                        {!! Form::text('meta_title', $row['meta_title'], array('class'=>'form-control', 'placeholder'=>'' )) !!}                                
                                                     </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div>
                                                 					
                                                <div class="form-group  " >
                                                    <label for="meta_description" class=" control-label col-md-4 text-left"> Meta Description </label>
                                                    <div class="col-md-6">
                                                        {!! Form::textarea('meta_description', $row['meta_description'] ,array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div>
                                                 
                                                <div class="form-group  " >
                                                    <label for="meta_keywords" class=" control-label col-md-4 text-left"> Meta Keywords </label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('meta_keyword', $row['meta_keyword'],array('class'=>'form-control', 'placeholder'=>'', 'data-role'=>'tagsinput'  )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="tab-pane m-t" id="OpenGraph"> 
                                                <div class="form-group  " >
                                                    <label for="og_title" class=" control-label col-md-4 text-left"> OG Title </label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('og_title', $row['og_title'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group  " >
                                                    <label for="og_description" class=" control-label col-md-4 text-left"> OG Description </label>
                                                    <div class="col-md-6">
                                                        {!! Form::textarea('og_description', $row['og_description'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group  " >
                                                    <label for="og_url" class=" control-label col-md-4 text-left"> OG url </label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('og_url', $row['og_url'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div>
                                                 
                                                <div class="form-group  " >
                                                    <label for="type" class=" control-label col-md-4 text-left"> OG type </label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('og_type', $row['og_type'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div> 
                                                
                                                <div class="form-group" style="display: none;">
                                                    <label for="og_image" class=" control-label col-md-4 text-left"> OG Image </label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('og_image', $row['og_image'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div>
                                                <!-- upload or link section --!>
                                                <div class="form-group">
                                                    <label for="Video Type" class=" control-label col-md-4 text-left"> Image Type </label>
                                                    <div class="col-md-6"> 
                                                        <label class='radio radio-inline'>
                                                            <input type='radio' name='og_image_type' value ='upload' id='og_image_upload' <?php echo ($row['og_upload_type'] == 'upload') ? 'checked="checked"' : '';  ?> /> Upload 
                                                        </label>
                                                        <label class='radio radio-inline'>
                                                            <input type='radio' name='og_image_type' value ='link' id='og_image_type_link' <?php echo($row['og_upload_type'] == 'link') ?  'checked="checked"' : ''; ?> /> Link 
                                                        </label> 
                                                    </div> 
                
                                                </div>
                
                                                <div class="form-group og-image-type-upload" style="display:none;" >
                                                    <label for="og_image" class=" control-label col-md-4 text-left"> Image </label>
                                                    <div class="col-md-6">
                                                        <input  type='file' name='og_image_type_upload' id='og_image_type_upload'  />
                                                        <div >                                            
                                                            {!! SiteHelpers::showUploadedFile($row['og_image'],'/uploads/properties_subtab_imgs/') !!}                 
                                                        </div>    
                                                    </div> 
                                                    <div class="col-md-2">
                
                                                    </div>
                                                </div>
                
                                                <div class="og-image-type-link" style="display:none;" >
                                                    
                                                    <div class="form-group" >
                                                        <label for="og image Link" class=" control-label col-md-4 text-left"> Link </label>
                                                        <div class="col-md-8">
                                                            <input type='text' name='og_image_type_link' id='og_image_type_link' class="form-control" value="<?php echo $row['og_image_link']; ?>" />
                                                                                                        
                                                        </div> 
                
                
                                                    </div>
                                                    
                                                </div>
                                                        
                                                <!-- End upload or link section --!>
                                                
                                                <div class="form-group  " >
                                                    <label for="og_sitename" class=" control-label col-md-4 text-left"> OG Sitename </label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('og_sitename', $row['og_sitename'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div> 
                        
                                                <div class="form-group  " >
                                                    <label for="og_locale" class=" control-label col-md-4 text-left"> OG Locale </label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('og_locale', $row['og_locale'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="tab-pane m-t" id="TwitterCard">
                                                <div class="form-group  " >
                                                    <label for="article_section" class=" control-label col-md-4 text-left"> Article section </label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('article_section', $row['article_section'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div> 
                        
                                                <div class="form-group  " >
                                                    <label for="article_tags" class=" control-label col-md-4 text-left"> Article tags </label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('article_tags', $row['article_tags'],array('class'=>'form-control', 'placeholder'=>'', 'data-role'=>'tagsinput' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div> 
                                                
                                                <div class="form-group  " >
                                                    <label for="twitter_url" class=" control-label col-md-4 text-left">Twitter url </label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('twitter_url', $row['twitter_url'],array('class'=>'form-control', 'placeholder'=>''  )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div> 
                                                
                                                <div class="form-group  " >
                                                    <label for="twitter_title" class=" control-label col-md-4 text-left"> Twitter title </label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('twitter_title', $row['twitter_title'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div> 
                                                
                                                <div class="form-group  " >
                                                    <label for="twitter_description" class=" control-label col-md-4 text-left"> Twitter description </label>
                                                    <div class="col-md-6">
                                                        {!! Form::textarea('twitter_description', $row['twitter_description'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group" style="display: none;">
                                                    <label for="twitter_image" class=" control-label col-md-4 text-left">Twitter image</label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('twitter_image', $row['twitter_image'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div> 
                                                
                                                <!-- upload or link section --!>
                                                <div class="form-group">
                                                    <label for="Video Type" class=" control-label col-md-4 text-left"> Image Type </label>
                                                    <div class="col-md-6"> 
                                                        <label class='radio radio-inline'>
                                                            <input type='radio' name='twitter_image_type' value ='upload' id='twitter_image_upload' @if($row['twitter_upload_type'] == 'upload') checked="checked" @endif /> Upload 
                                                        </label>
                                                        <label class='radio radio-inline'>
                                                            <input type='radio' name='twitter_image_type' value ='link' id='twitter_image_link' @if($row['twitter_upload_type'] == 'link') checked="checked" @endif  /> Link 
                                                        </label> 
                                                    </div> 
                
                                                </div>
                
                                                <div class="form-group twitter-image-type-upload" style="display:none;" >
                                                    <label for="twitter_image" class=" control-label col-md-4 text-left"> Image </label>
                                                    <div class="col-md-6">
                                                        <input  type='file' name='twitter_image_type_upload' id='twitter_image_type_upload'  />
                                                        <div>                                                
                                                            {!! SiteHelpers::showUploadedFile($row['twitter_image'],'/uploads/properties_subtab_imgs/') !!}                   
                                                        </div>					
                
                                                    </div> 
                                                    <div class="col-md-2">
                
                                                    </div>
                                                </div>
                
                                                <div class="twitter-image-type-link" style="display:none;" >
                                                    
                                                    <div class="form-group" >
                                                        <label for="twitter image Link" class=" control-label col-md-4 text-left"> Link </label>
                                                        <div class="col-md-8">
                                                            <input type='text' name='twitter_image_type_link' id='twitter_image_type_link' class="form-control" value="<?php echo ($row['twitter_image_link']); ?>" />
                                                                                                        
                                                        </div> 
                
                
                                                    </div>
                                                    
                                                </div>
                                                        
                                                <!-- End upload or link section --!>
                                                <div class="form-group  " >
                                                    <label for="twitter_domain" class=" control-label col-md-4 text-left"> Twitter domain </label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('twitter_domain', $row['twitter_domain'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div> 
                                                
                                                <div class="form-group  " >
                                                    <label for="twitter_card" class=" control-label col-md-4 text-left"> Twitter card </label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('twitter_card', $row['twitter_card'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group  " >
                                                    <label for="twitter_creator" class=" control-label col-md-4 text-left">Twitter creator</label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('twitter_creator', $row['twitter_creator'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div>      
                                                
                                                <div class="form-group  " >
                                                    <label for="twitter_site" class=" control-label col-md-4 text-left">Twitter Site</label>
                                                    <div class="col-md-6">
                                                        {!! Form::text('twitter_site', $row['twitter_site'],array('class'=>'form-control', 'placeholder'=>'')) !!} 
                                                    </div> 
                                                    <div class="col-md-2">
                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                          
                
                                    </div>
                                    
                                </div>
    			             </div>
    			             <div style="clear:both"></div>	
    				
    					
        				    <div class="form-group">
        					<label class="col-sm-4 text-right">&nbsp;</label>
        					<div class="col-sm-8">	
        					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
        					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
        					<button type="button" onclick="location.href='{{ URL::to('events?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
        					</div>	  
        			
        				  </div> 
    		 
    		              {!! Form::close() !!}
    			     </div>
                    <div class="tab-pane m-t" id="GalleryImages">
                    <!-- The file upload form used as target for the file upload widget -->
					<form id="fileuploadgalleryimages" class="fileupload" action="{{URL::to('event_images_uploads')}}" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="propId" value="{{$row['id']}}" />
						<input type="hidden" name="uploadType" value="Gallery" />
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
								<a class="btn btn-success" @if(!empty($res_gallery)) href="{{URL::to('folders/'.$res_gallery[0]->folder_id.'?show=thumb')}}" @else href="#" @endif>
									<span>Re-Order</span>
								</a>
								<button type="button" class="btn btn-danger" onclick="delete_rest_selected_imgs('sgi');" >
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
                                
								@if(!empty($res_gallery))
									<tr>
										<td colspan="5"><input type="checkbox" value="1" id="check_all_sgi" class="check-all-sgi"> Select all</td>
									</tr>
									@foreach($res_gallery as $img)
										<tr class="template-download fade in row{{$img->id}}">
											<td>
												<input type="checkbox" name="compont[]" id="compont" value="{{$img->id}}" class="no-border check-files sgi">
											</td>
											<td>
												<span class="preview">
													<a href="{{$img->imgsrc.$img->file_name}}" title="{{$img->file_name}}" download="{{$img->file_name}}" data-gallery="#blueimp-gallery-sgi">
														<img src="{{URL::to('uploads/thumbs/thumb_'.$img->folder_id.'_'.$img->file_name)}}" width="128">
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
						<a class="prev">�</a>
						<a class="next">�</a>
						<a class="close">�</a>
						<a class="play-pause"></a>
						<ol class="indicator"></ol>
					</div>
                </div>
                </div>
    
    		
    			
    	</div>
    </div>		 
</div>	
</div>

<div id="modaladdnewtag" class="custom_modal modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Tag</h5>
            </div>
            <div class="modal-body">
                <div id="formerrors"></div>
                <form id="add_tag_title_form"> 
                    <div class="row">
                                       
                        <div class="form-group col-lg-12">
                            <label for="Title">Tag</label>                            
                            <input class="form-control" type="text" name="menuTitle" value="" />                            				
                        </div>                        
                        <div class="form-group col-lg-12">
                            <input type="hidden" name="mID" id="mID" />
                            <button type="submit" class="btn btn-default submit-btn" id="sbt_btn_menu_title" >Submit</button>
                        </div>
                        
                    </div>
                </form>
            </div>        
        </div>	
	</div>
</div>
<div id="modaladdnewvenue" class="custom_modal modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Add Venue</h5>
            </div>
            <div class="modal-body">
                <div id="formerrors"></div>
                <form name="frm_add_new_venue" id="frm_add_new_venue"  enctype="multipart/form-data"> 
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active" ><a href="#popVenueDetails" aria-controls="VenueDetails" role="tab" data-toggle="tab">Venue Details</a></li>
                        <li role="presentation" class=""><a href="#popseo" aria-controls="popseo" role="tab" data-toggle="tab">SEO</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane m-t active" id="popVenueDetails">
                            <div class="row">
                                
                                <div class="form-group col-lg-12">
                    				<label for="Venue Name">Venue Name</label>            				
                    				{!! Form::text('venue_name', '',array('class'=>'form-control', 'placeholder'=>'',   )) !!}           				 
                    			</div> 
                                <div class="form-group col-lg-12">
                    				<label for="Venue Email"> Venue Email </label>            				
                    				{!! Form::text('venue_email', '',array('class'=>'form-control', 'placeholder'=>'', )) !!}            				 
                    			</div> 	
                                <div class="form-group col-lg-12">
                    				 <label for="venue_website"> Venue Website </label>            				 
                    				 {!! Form::text('venue_website', '',array('class'=>'form-control', 'placeholder'=>'', )) !!}
                    			</div> 
                                <div class="form-group col-lg-12">
                    			    <label for="venue_phone">Venue Phone </label>            				
                    				{!! Form::text('venue_phone', '',array('class'=>'form-control', 'placeholder'=>'', )) !!}            				 
                    			</div> 	
                                <div class="form-group col-lg-12">
                    				<label for="venue_youtube_channel">Venue Youtube Channel ID </label>
                    				{!! Form::text('venue_youtube_channel', '',array('class'=>'form-control', 'placeholder'=>'',   )) !!}            				
                    			</div> 	
                                <div class="form-group col-lg-12">
                    				<label for="venue_instagram">Venue Instagram </label>
                    				{!! Form::text('venue_instagram', '',array('class'=>'form-control', 'placeholder'=>'',   )) !!}            				 
                    			</div>	
                                <div class="form-group col-lg-12">
                    				 <label for="Venue Address">Venue Address</label>            				 
                    				 {!! Form::text('venue_address', '',array('class'=>'form-control', 'placeholder'=>'',   )) !!}            				 
                    			</div>                      
                                <div class="form-group col-lg-12">
                    				<label for="Location"> Location </label>            				
                  				    {!! Form::text('venue_location', '',array('class'=>'form-control', 'placeholder'=>'Copy the address from google map to get lat long',   )) !!}            				 
                    			</div>
                                <div class="form-group col-lg-12">
                                    <label for="Website"> Latitude </label>                            
                                    {!! Form::text('venue_latitude', '',array('class'=>'form-control', 'placeholder'=>'',   )) !!}                          
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="Website"> Longitude </label>                            
                                    {!! Form::text('venue_longitude', '',array('class'=>'form-control', 'placeholder'=>'',   )) !!}                           
                                </div>
                                                    
                                
                                
                            </div>
                       </div>
                       
                       <div role="tabpanel" class="tab-pane m-t " id="popseo">                        
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#popMetaTags" data-toggle="tab">Meta Tags</a></li>
                                <li class=""><a href="#popOpenGraph" data-toggle="tab">Open Graph</a></li>
                                <li class=""><a href="#popTwitterCard" data-toggle="tab">Twitter Card</a></li>                                                     
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane m-t active" id="popMetaTags">                        
                                <div class="row">
                                    <div class="form-group col-lg-12  " >
                                        <label for="meta_title" > Meta Title </label>
                                                                       
                                            {!! Form::text('pop_meta_title', $row['meta_title'], array('class'=>'form-control', 'placeholder'=>'' )) !!}                                
                                        
                                    </div>
                                     					
                                    <div class="form-group  col-lg-12 " >
                                        <label for="meta_description"> Meta Description </label>
                                        
                                            {!! Form::textarea('pop_meta_description', $row['meta_description'] ,array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div>
                                     
                                    <div class="form-group  col-lg-12 " >
                                        <label for="meta_keywords"> Meta Keywords </label>
                                        
                                            {!! Form::text('pop_meta_keyword', $row['meta_keyword'],array('class'=>'form-control', 'placeholder'=>'', 'data-role'=>'tagsinput'  )) !!} 
                                        
                                    </div>
                                </div>    
                                </div>
                                <div class="tab-pane m-t" id="popOpenGraph"> 
                                    <div class="row">
                                    <div class="form-group   col-lg-12" >
                                        <label for="og_title"> OG Title </label>
                                        
                                            {!! Form::text('pop_og_title', $row['og_title'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div>
                                    
                                    <div class="form-group   col-lg-12" >
                                        <label for="og_description"> OG Description </label>
                                        
                                            {!! Form::textarea('pop_og_description', $row['og_description'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div>
                                    
                                    <div class="form-group  col-lg-12 " >
                                        <label for="og_url"> OG url </label>
                                        
                                            {!! Form::text('pop_og_url', $row['og_url'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div>
                                     
                                    <div class="form-group  col-lg-12 " >
                                        <label for="type"> OG type </label>
                                        
                                            {!! Form::text('pop_og_type', $row['og_type'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div> 
                                    
                                    <div class="form-group col-lg-12" style="display: none;">
                                        <label for="og_image"> OG Image </label>
                                        
                                            {!! Form::text('pop_og_image', $row['og_image'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div>
                                    <!-- upload or link section --!>
                                    <div class="form-group col-lg-12">
                                        <label for="Video Type"> Image Type </label>
                                    
                                        <div>     
                                            <label class='radio radio-inline'>
                                                <input type='radio' name='pop_og_image_type' value ='upload' id='pop_og_image_upload' <?php echo ($row['og_upload_type'] == 'upload') ? 'checked="checked"' : '';  ?> /> Upload 
                                            </label>
                                            <label class='radio radio-inline'>
                                                <input type='radio' name='pop_og_image_type' value ='link' id='pop_og_image_type_link' <?php echo($row['og_upload_type'] == 'link') ?  'checked="checked"' : ''; ?> /> Link 
                                            </label> 
                                        
                                        </div>
                                    </div>
    
                                    <div class="form-group col-lg-12 pop_og-image-type-upload" style="display:none;" >
                                        <label for="og_image" > Image </label>
                                        
                                            <input  type='file' name='pop_og_image_type_upload' id='pop_og_image_type_upload'  />
                                            <div >                                            
                                                {!! SiteHelpers::showUploadedFile($row['og_image'],'/uploads/venue_meta_imgs/') !!}                 
                                            </div>    
                                        
                                    </div>
    
                                    <div class="pop_og-image-type-link" style="display:none;" >
                                        
                                        <div class="form-group col-lg-12" >
                                            <label for="og image Link"> Link </label>
                                            
                                                <input type='text' name='pop_og_image_type_link' id='pop_og_image_type_link' class="form-control" value="<?php echo $row['og_image_link']; ?>" />
                                                                                            
                                            
    
                                        </div>
                                        
                                    </div>
                                            
                                    <!-- End upload or link section --!>
                                    
                                    <div class="form-group col-lg-12  " >
                                        <label for="og_sitename"> OG Sitename </label>
                                        
                                            {!! Form::text('pop_og_sitename', $row['og_sitename'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div> 
            
                                    <div class="form-group col-lg-12  " >
                                        <label for="og_locale"> OG Locale </label>
                                        
                                            {!! Form::text('pop_og_locale', $row['og_locale'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div>
                                </div>
                                </div> 
                                <div class="tab-pane m-t" id="popTwitterCard">
                                <div class="row">
                                    <div class="form-group col-lg-12  " >
                                        <label for="article_section"> Article section </label>
                                        
                                            {!! Form::text('pop_article_section', $row['article_section'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div> 
            
                                    <div class="form-group col-lg-12  " >
                                        <label for="article_tags"> Article tags </label>
                                        
                                            {!! Form::text('pop_article_tags', $row['article_tags'],array('class'=>'form-control', 'placeholder'=>'', 'data-role'=>'tagsinput' )) !!} 
                                        
                                    </div> 
                                    
                                    <div class="form-group col-lg-12  " >
                                        <label for="twitter_url" >Twitter url </label>
                                        
                                            {!! Form::text('pop_twitter_url', $row['twitter_url'],array('class'=>'form-control', 'placeholder'=>''  )) !!} 
                                        
                                    </div> 
                                    
                                    <div class="form-group col-lg-12  " >
                                        <label for="twitter_title"> Twitter title </label>
                                        
                                            {!! Form::text('pop_twitter_title', $row['twitter_title'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div> 
                                    
                                    <div class="form-group col-lg-12  " >
                                        <label for="twitter_description"> Twitter description </label>
                                        
                                            {!! Form::textarea('pop_twitter_description', $row['twitter_description'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div>
                                    
                                    <div class="form-group col-lg-12" style="display: none;">
                                        <label for="twitter_image">Twitter image</label>
                                        
                                            {!! Form::text('pop_twitter_image', $row['twitter_image'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div> 
                                    
                                    <!-- upload or link section --!>
                                    <div class="form-group col-lg-12">
                                        <label for="Video Type"> Image Type </label>
                                    
                                        <div>
                                           
                                            <label class='radio radio-inline'>
                                                <input type='radio' name='pop_twitter_image_type' value ='upload' id='pop_twitter_image_upload' @if($row['twitter_upload_type'] == 'upload') checked="checked" @endif /> Upload 
                                            </label>
                                            <label class='radio radio-inline'>
                                                <input type='radio' name='pop_twitter_image_type' value ='link' id='pop_twitter_image_link' @if($row['twitter_upload_type'] == 'link') checked="checked" @endif  /> Link 
                                            </label> 
                                        </div>    
    
                                    </div>
    
                                    <div class="form-group col-lg-12 pop_twitter-image-type-upload" style="display:none;" >
                                        <label for="twitter_image"> Image </label>
                                        
                                            <input  type='file' name='pop_twitter_image_type_upload' id='pop_twitter_image_type_upload'  />
                                            <div>                                                
                                                {!! SiteHelpers::showUploadedFile($row['twitter_image'],'/uploads/venue_meta_imgs/') !!}                   
                                            </div>					
    
                                        
                                    </div>
    
                                    <div class="pop_twitter-image-type-link col-lg-12" style="display:none;" >
                                        
                                        <div class="form-group" >
                                            <label for="twitter image Link"> Link </label>
                                            
                                                <input type='text' name='pop_twitter_image_type_link' id='pop_twitter_image_type_link' class="form-control" value="<?php echo ($row['twitter_image_link']); ?>" />
                                                                                            
                                            
    
    
                                        </div>
                                        
                                    </div>
                                            
                                    <!-- End upload or link section --!>
                                    <div class="form-group col-lg-12  " >
                                        <label for="twitter_domain"> Twitter domain </label>
                                        
                                            {!! Form::text('pop_twitter_domain', $row['twitter_domain'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div> 
                                    
                                    <div class="form-group col-lg-12  " >
                                        <label for="twitter_card"> Twitter card </label>
                                        
                                            {!! Form::text('pop_twitter_card', $row['twitter_card'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div>
                                    
                                    <div class="form-group col-lg-12  " >
                                        <label for="twitter_creator">Twitter creator</label>
                                        
                                            {!! Form::text('pop_twitter_creator', $row['twitter_creator'],array('class'=>'form-control', 'placeholder'=>'' )) !!} 
                                        
                                    </div>      
                                    
                                    <div class="form-group col-lg-12  " >
                                        <label for="twitter_site">Twitter Site</label>
                                        
                                            {!! Form::text('pop_twitter_site', $row['twitter_site'],array('class'=>'form-control', 'placeholder'=>'')) !!} 
                                        
                                    </div>
                                </div>
                                </div>
                            </div>    
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="mID" id="mID" />
                                <button type="submit" class="btn btn-default submit-btn" id="sbt_btn_venue" >Submit</button>
                            </div>
                        </div>                       
                    </div>
                </form>
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
<!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
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
<script> var baseUrl = "{{URL::to('event_images_uploads')}}"; </script>
<script src="{{ asset('sximo/file_upload/js/main.js')}}"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
<script src="{{ asset('sximo/js/typeahead.min.js')}}"></script>
<script src="{{ asset('sximo/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>			 
   <script type="text/javascript">
   
    $(document).on('click', '#btn_add_new_tag', function(){
        $("#modaladdnewtag").modal();    
    }); 
    $(document).on('click', '#btn_add_new_venue', function(){
        $("#modaladdnewvenue").modal();    
    });
	$(document).ready(function() {
	    
        /* OG Upload Image section */
        if ($('input[type="radio"][id="og_image_upload"]').is(":checked"))
        {
            $(".og-image-type-upload").show();
            $(".og-image-type-link").hide();
        }

        if ($('input[type="radio"][id="og_image_type_link"]').is(":checked"))
        {
            $(".og-image-type-upload").hide();
            $(".og-image-type-link").show();                
        }

        $('input[type="radio"][id="og_image_upload"]').on('ifChecked', function () {
            $(".og-image-type-upload").show();
            $(".og-image-type-link").hide();
        });

        $('input[type="radio"][id="og_image_type_link"]').on('ifChecked', function () {
            $(".og-image-type-upload").hide();
            $(".og-image-type-link").show();
        });
        /* End Upload Image */
        
        /* Twitter Upload Image section */
        if ($('input[type="radio"][id="twitter_image_upload"]').is(":checked"))
        {
            $(".twitter-image-type-upload").show();
            $(".twitter-image-type-link").hide();
        }

        if ($('input[type="radio"][id="twitter_image_link"]').is(":checked"))
        {
            $(".twitter-image-type-upload").hide();
            $(".twitter-image-type-link").show();                
        }

        $('input[type="radio"][id="twitter_image_upload"]').on('ifChecked', function () { console.log("heel");
            $(".twitter-image-type-upload").show();
            $(".twitter-image-type-link").hide();
        });

        $('input[type="radio"][id="twitter_image_link"]').on('ifChecked', function () { console.log("ggg");
            $(".twitter-image-type-upload").hide();
            $(".twitter-image-type-link").show();
        });
        /* End Upload Image */
        /* OG Upload Image section */
        if ($('input[type="radio"][id="pop_og_image_upload"]').is(":checked"))
        {
            $(".pop_og-image-type-upload").show();
            $(".pop_og-image-type-link").hide();
        }

        if ($('input[type="radio"][id="pop_og_image_type_link"]').is(":checked"))
        {
            $(".pop_og-image-type-upload").hide();
            $(".pop_og-image-type-link").show();                
        }

        $('input[type="radio"][id="pop_og_image_upload"]').on('ifChecked', function () {
            $(".pop_og-image-type-upload").show();
            $(".pop_og-image-type-link").hide();
        });

        $('input[type="radio"][id="pop_og_image_type_link"]').on('ifChecked', function () {
            $(".pop_og-image-type-upload").hide();
            $(".pop_og-image-type-link").show();
        });
        /* End Upload Image */
        
        /* Twitter Upload Image section */
        if ($('input[type="radio"][id="pop_twitter_image_upload"]').is(":checked"))
        {
            $(".pop_twitter-image-type-upload").show();
            $(".pop_twitter-image-type-link").hide();
        }

        if ($('input[type="radio"][id="pop_twitter_image_link"]').is(":checked"))
        {
            $(".pop_twitter-image-type-upload").hide();
            $(".pop_twitter-image-type-link").show();                
        }

        $('input[type="radio"][id="pop_twitter_image_upload"]').on('ifChecked', function () { console.log("heel");
            $(".pop_twitter-image-type-upload").show();
            $(".pop_twitter-image-type-link").hide();
        });

        $('input[type="radio"][id="pop_twitter_image_link"]').on('ifChecked', function () { console.log("ggg");
            $(".pop_twitter-image-type-upload").hide();
            $(".pop_twitter-image-type-link").show();
        });
        /* End Upload Image */       
        
		$(".datetimepicker").datepicker({
            format: 'yyyy-mm-dd',          
		});
        $(".timepicker").datetimepicker({
            format: 'hh:ii',
            autoclose: true,
            pickTime: true,
            // todayHighlight: true,
            //showMeridian: true,
            startView: 1,
            maxView: 1
        });
        		
		$("#property_id").jCombo("{{ URL::to('events/comboselect?filter=tb_properties:id:property_name|property_slug') }}",
		{  selected_value : '{{ $row["property_id"] }}' });
		
		$("#user_id").jCombo("{{ URL::to('events/comboselect?filter=tb_users:id:username|id') }}",
		{  selected_value : '{{ $row["user_id"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
        $('input[type="radio"][name="video_type"]').on('ifChecked', function () {
                
                if($(this).val()=='upload'){
                	$(".restaurant_videotypeupload").show();
					$(".restaurant_videotypelink").hide();
                }else{
					$(".restaurant_videotypeupload").hide();
					$(".restaurant_videotypelink").show();
				}

        });
        
	});
    
    $(document).on('click', '#btnAddMoreTime', function(e){
        e.preventDefault();
        _html = '<div class="removetimesection">';
        _html += '<div class="col-md-10 text-right removemoretime">x</div>';
        _html += '<div class="form-group">';
        _html +='<label for="start_time" class=" control-label col-md-4 text-left"> Start Time </label>';
        _html +='<div class="col-md-6">';
        _html +='<input name="start_time[]" type="text" class="form-control timepicker" placeholder="" >'; 
        _html +='</div>'; 
        _html +='<div class="col-md-2">';
        _html +='</div>';
    	_html +='</div>';
        _html +='<div class="form-group">';
        _html +='<label for="end_date" class=" control-label col-md-4 text-left"> End Time </label>';
        _html +='<div class="col-md-6">';
        _html +='<input name="end_time[]" type="text" class="form-control timepicker" placeholder="" >'; 
        _html +='</div>'; 
        _html +='<div class="col-md-2">';
        _html +='</div>';
    	_html +='</div>';
        _html +='</div>';
        $("#dvaddmoretime").append(_html);     
        $(".timepicker").datetimepicker({
            format: 'hh:ii',
            autoclose: true,
            // todayHighlight: true,
            //showMeridian: true,
            startView: 1,
            maxView: 1
        });   
    });
    
    $(document).on('click', '.removemoretime', function(){
        $(this).parent(".removetimesection").remove();    
    });
    
    /*$(document).on('change', '#venue', function(){
        var dd_venue = $("#venue").val();
        if(dd_venue==0){
            $(".add-new-venue-details").css('display', '');
        }else{
            $(".add-new-venue-details").css('display', 'none');
        } 
    });*/
    
    function delete_property_image(imgID)
	{
		if(imgID!='' && imgID>0)
		{
			var conf = confirm("Are you sure? you want to delete this record!");
			if(conf==true)
			{
				$.ajax({
					url: "{{ URL::to('delete_event_image')}}",
					type: "post",
					data: "img_id="+imgID,
					dataType: "json",
					success: function(data){
					  var html ='';
					  if(data.status=='error')
					  {
							html +='<div class="alert alert-danger fade in block-inner">';
							html +='<button data-dismiss="alert" class="close" type="button">�</button>';
							html +='<i class="icon-checkmark-circle"></i> Record Not Found </div>';
							$('.page-content-wrapper #formerrors').html(html);
							window.scrollTo(0, 0);
					  }
					  else{
							$('.prese tr.row'+imgID).remove();
							html +='<div class="alert alert-success fade in block-inner">';
							html +='<button data-dismiss="alert" class="close" type="button">�</button>';
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
			  url: "{{ URL::to('delete_selected_event_image')}}",
			  type: "post",
			  data: "items=" + sList,
			  dataType: "json",
			  success: function(data){
				  var html ='';
				  if(data.status=='error')
				  {
						html +='<div class="alert alert-danger fade in block-inner">';
						html +='<button data-dismiss="alert" class="close" type="button">�</button>';
						html +='<i class="icon-checkmark-circle"></i> Record Not Found </div>';
						$('.page-content-wrapper #formerrors').html(html);
						window.scrollTo(0, 0);
				  }
				  else{
						$.each(data.imgs, function(idx, obj) {
							$('.prese tr.row'+obj).remove();
						});
						html +='<div class="alert alert-success fade in block-inner">';
						html +='<button data-dismiss="alert" class="close" type="button">�</button>';
						html +='<i class="icon-checkmark-circle"></i> Record Deleted Successfully </div>';
						$('.page-content-wrapper #formerrors').html(html);
						window.scrollTo(0, 0);
				  }
			  }
			});
		}
	}
    
    $(document).on('click', '#sbt_btn_menu_title', function(e){        
       e.preventDefault();
       submit_menuTitle();        
    });
    function submit_menuTitle(){
        $.ajax({
            url: "{{ URL::to('addtagtitle')}}",
            type: "post",
            data: $('#add_tag_title_form').serialize(),
            dataType: "json",
            success: function(data){
                var html = '';
                if(data.status=='error')
                {
                	html +='<ul class="parsley-error-list">';
                	$.each(data.message, function(idx, obj) {
                		html +='<li>'+obj+'</li>';
                	});
                	html +='</ul>';
                	$('#formerrors').html(html);
                }
                else{
                	var htmli = '';
                	htmli +='<div class="alert alert-success fade in block-inner">';
                	htmli +='<button data-dismiss="alert" class="close" type="button">x</button>';
                	htmli +='<i class="icon-checkmark-circle"></i> '+data.message+' </div>';
                	$('#formerrors').html(htmli);
                	$('#add_tag_title_form')[0].reset();
                    //$(".m_title_"+data.mid).html(data.menutitle);
                    var objtag = data.newtag;
                    console.log(data);
                    console.log(objtag);
                    var newOption = new Option(objtag.tag_title, objtag.id, true, true);
                    console.log(newOption);
                    $('#tag_id').append(newOption).trigger('change');
                    
                    $("#modaladdnewtag").modal('hide');
                    $('#formerrors').html('');
                }
            }
        });
    }
    $(document).on('click', '#sbt_btn_venue', function(e){        
       e.preventDefault();
       submit_venue();        
    });
    function submit_venue(){
        var frm = document.getElementById("frm_add_new_venue");
        var formData = new FormData(frm);
        $.ajax({
            url: "{{ URL::to('venue/addnewvenue')}}",
            type: "post",
            //data: $('#frm_add_new_venue').serialize(),
            data: formData,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(data){
                var html = '';
                if(data.status=='error')
                {
                	html +='<ul class="parsley-error-list">';
                	$.each(data.message, function(idx, obj) {
                		html +='<li>'+obj+'</li>';
                	});
                	html +='</ul>';
                	$('#formerrors').html(html);
                }
                else{
                	var htmli = '';
                	htmli +='<div class="alert alert-success fade in block-inner">';
                	htmli +='<button data-dismiss="alert" class="close" type="button">x</button>';
                	htmli +='<i class="icon-checkmark-circle"></i> '+data.message+' </div>';
                	$('#formerrors').html(htmli);
                	$('#add_tag_title_form')[0].reset();
                    //$(".m_title_"+data.mid).html(data.menutitle);
                    var objvenue = data.newvenue;
                    console.log(data);
                    console.log(objvenue);
                    var newOption = new Option(objvenue.name, objvenue.id, true, true);
                    console.log(newOption);
                    $('#venue').append(newOption).trigger('change');
                    
                    $("#modaladdnewvenue").modal('hide');
                    $('#formerrors').html('');
                }
            }
        });
    }
</script>		 
@stop