@extends('users_admin.metronic.layouts.app')

@section('page_name')
    
@stop

@section('breadcrumb')
    <li class="m-nav__separator"> - </li>
    <li class="m-nav__item"> 
        <a href="{{ URL::to('dashboard')}}" class="m-nav__link"> 
            <span class="m-nav__link-text"> Dashboard </span> 
        </a> 
    </li>
    <li class="m-nav__separator"> - </li>
    <li class="m-nav__item"> 
        <a href="javascript:;" class="m-nav__link"> 
            <span class="m-nav__link-text breadcrumb-end"> Billings &amp; Contracts </span> 
        </a> 
    </li>
@stop

@section('style')
    @parent
<link href="{{ asset('metronic/assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<style>
.pagination{
   display: inline-block;
}
.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 3;
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7;
    cursor: default;
}
.pagination>li>a:hover{
   color: #fff;
    background-color: #337ab7;
}
.pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    line-height: 1.42857;
    text-decoration: none;
    color: #337ab7;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-left: -1px;
}
.pagination>li {
    display: inline;
}
.pagination>.disabled {
    cursor: not-allowed;
}
.pagination>.disabled span {
    background-color: #f1f4f7;
    color: #b1b7bd;
    cursor: not-allowed;
}
</style>
@stop

@section('content')
    {{--*/ usort($tableGrid, "SiteHelpers::_sort") /*--}}
    
    
<div class="row">
    <div class="col-xl-12 col-sm-12 col-md-12 col-lg-12">
        <h2>Billings &amp; Contracts</h2>
    </div> 
    <div class="col-xl-12 col-sm-12 col-md-12 col-lg-12">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare diam at convallis lacinia. Duis a sapien et erat finibus molestie eu id nisi. Integer nibh elit, blandit ac volutpat eget, tempus eget enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas mollis dictum risus. Vivamus aliquam at elit non dictum. Integer nisi ante, interdum at purus vitae, rhoncus bibendum dui. Praesent pharetra augue at ultrices facilisis. Vestibulum erat urna, iaculis et purus in, fermentum varius nibh.
    </div>
    <div class="col-xl-12 col-sm-12 col-md-12 col-lg-12">
        <hr />
    </div>     
    <div class="col-sm-12 col-md-12 col-xl-12">    
    
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <i class="fa fa-celander"></i>
                </div>
                <div class="m-portlet__head-tools"><a href="{{URL::to('hotelinvoices')}}" class="btn btn-primary">Invoices</a></div>
                
            </div>
            
            <div class="m-portlet__body">
                <?php /* @if(count($rowData) > 0)
                    <button data-toggle="modal" data-target="#sximo-modal" class="btn btn-primary btn-md" style="margin-bottom: 10px;"><i class="fa fa-search"></i> Search</button>
                @endif
                @if(strpos($_SERVER['REQUEST_URI'],'search') !== false) 
                    <a href="{{ url($pageModule) }}" class="btn btn-xs btn-primary tips"  style="margin-bottom: 10px;" title="Clear Search" ><i class="fa fa-trash-o"></i> Clear Search </a> 
                @endif */ ?>
                <!--begin: Datatable -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-checkable" style="width: 99%;">
                        <thead>
        					<tr>
        						<th class="number"> No </th>
                                @foreach ($tableGrid as $t)
                					@if($t['view'] =='1')				
                						<?php $limited = isset($t['limited']) ? $t['limited'] :''; ?>
                						@if(SiteHelpers::filterColumn($limited ))            						
                							<th>{{ $t['label'] }}</th>			
                						@endif 
                					@endif
                				@endforeach
                				<th>Commission (%)</th>
                				<th>Status</th>
                				<th width="70" >{{ Lang::get('core.btn_action') }}</th>
        					</tr>
        				</thead>
                        <tbody>
                            @if(count($rowData) > 0)
                                @foreach ($rowData as $row)
                                    <tr>
                                       <td> {{ ++$i }} </td>
        					           @foreach ($tableGrid as $field)
                        				 	{{--*/ $tyu= $field['field']  /*--}}
                        					 @if($field['view'] =='1')
                                             	<?php $limited = isset($field['limited']) ? $field['limited'] :''; ?>
                        					 	@if(SiteHelpers::filterColumn($limited ))
                        						 <td>					 
                        						 	{{--*/ $conn = (isset($field['conn']) ? $field['conn'] : array() ) /*--}}
                       								{!! SiteHelpers::gridDisplay($row->$tyu,$field['field'],$conn) !!}						 
                        						 </td>
                        						@endif	
                        					 @endif					 
                        			   @endforeach
                                       <td>
                                       		@if(!empty($row->commission_type))
                                                @if($row->commission_type == 'partial')
                                                    {{$row->partial_availability_commission}}
                                                @endif
                                                @if($row->commission_type == 'full')
                                                    {{$row->full_availability_commission}}
                                                @endif
                                            @endif		 
                        				</td>
                                        <td>
                        				    @if((bool) $row->status) Active @else Inactive @endif			
                        				</td>
                                        <td>
                    						<a href="{{ URL::to('download_contract/'.$row->id)}}" class="tips btn btn-sm btn-primary" title="bestellung"><i class="fa  icon-file-pdf "></i></a>	
                    				    </td>	
                                    </tr>
                                @endforeach
                            @else
                               <tr><td colspan="7">No records found</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!--end: Datatable -->
                @if(count($rowData) > 0)
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="table-actions" >
                            
                            {!! Form::open(array('url'=>$pageModule.'/filter/', 'class'=>'form-inline')) !!}
                                {{--*/ $pages = array(5,10,20,30,50) /*--}}
                                {{--*/ $orders = array('asc','desc') /*--}}
                                <select name="rows" class="form-control" data-placeholder="{{ Lang::get('core.grid_show') }}" class="select-alt"  >
                                    <option value=""> {{ Lang::get('core.grid_page') }} </option>
                                    @foreach($pages as $p)
                                        <option value="{{ $p }}" 
                                            @if(isset($pager['rows']) && $pager['rows'] == $p) 
                                            selected="selected"
                                            @endif	
                                            >{{ $p }}
                                        </option>
                                    @endforeach
                                </select>
                                <select name="sort" class="form-control" data-placeholder="{{ Lang::get('core.grid_sort') }}" class="select-alt"  >
                                    <option value=""> {{ Lang::get('core.grid_sort') }} </option>	 
                                    @foreach($tableGrid as $field)
                                        @if($field['view'] =='1' && $field['sortable'] =='1') 
                                            <option value="{{ $field['field'] }}" 
                                                @if(isset($pager['sort']) && $pager['sort'] == $field['field']) 
                                                	selected="selected"
                                                @endif	
                                                >{{ $field['label'] }}
                                            </option>
                                        @endif	  
                                    @endforeach
                                </select>	
                                <select name="order" class="form-control" data-placeholder="{{ Lang::get('core.grid_order') }}" class="select-alt">
                                    <option value=""> {{ Lang::get('core.grid_order') }}</option>
                                    @foreach($orders as $o)
                                        <option value="{{ $o }}"
                                            @if(isset($pager['order']) && $pager['order'] == $o)
                                            selected="selected"
                                            @endif	
                                            >{{ ucwords($o) }}
                                        </option>
                                    @endforeach
                                </select>	
                                <button type="submit" class="btn btn-primary btn-sm">GO</button>	
                                <input type="hidden" name="md" value="{{ (isset($masterdetail['filtermd']) ? $masterdetail['filtermd'] : '') }}" />
                            {!! Form::close() !!}
                            </div>					
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <p class="text-center" style=" padding: 5px 0">
                                Total : <b>{{ $pagination->total() }}</b>
                            </p>		
                        </div>
                        <div class="col-sm-12 col-md-5 text-right">			 
                            {!! $pagination->appends($pager)->render() !!}
                        </div>
                    </div>
                @endif                
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="sximo-modal" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog">
      <div class="modal-content">
    	<div class="modal-header bg-default">
    		<h4 class="modal-title">Advance Search</h4>
    		<button type="button " class="close" data-dismiss="modal" aria-hidden="true">�</button>
    	</div>
    	<div class="modal-body" id="sximo-modal-content">
            <div>
                <form id="shopordersSearch">
                    <table class="table search-table table-striped" id="advance-search">
                    	<tbody>
                			<tr id="id" class="fieldsearch">
                    			<td>Id </td>
                    			<td> 
                    			<select id="id_operate" class="form-control oper" name="operate" onchange="changeOperate(this.value , 'id')">
                    				<option value="equal"> = </option>
                    				<option value="bigger_equal"> &gt;= </option>
                    				<option value="smaller_equal"> &lt;= </option>
                    				<option value="smaller"> &lt; </option>
                    				<option value="bigger"> &gt; </option>
                    				<option value="not_null"> ! Null  </option>
                    				<option value="is_null"> Null </option>
                    				<option value="between"> Between </option>
                    				<option value="like"> Like </option>	
                    
                    			</select> 
                    			</td>
                    			<td id="field_id"></td>
                    		</tr>
                			<tr id="page" class="fieldsearch">
                    			<td>Page </td>
                    			<td> 
                    			<select id="page_operate" class="form-control oper" name="operate" onchange="changeOperate(this.value , 'page')">
                    				<option value="equal"> = </option>
                    				<option value="bigger_equal"> &gt;= </option>
                    				<option value="smaller_equal"> &lt;= </option>
                    				<option value="smaller"> &lt; </option>
                    				<option value="bigger"> &gt; </option>
                    				<option value="not_null"> ! Null  </option>
                    				<option value="is_null"> Null </option>
                    				<option value="between"> Between </option>
                    				<option value="like"> Like </option>	
                    
                    			</select> 
                    			</td>
                    			
                    		</tr>
                			<tr>
                    			<td></td>
                    			<td colspan="2"><button type="button" name="search" class="doSearch btn btn-sm btn-primary pull-right"> Search </button></td>
                    		</tr>
                    	</tbody>     
                	</table>
                </form>	
            </div>
        </div>
      </div>
   </div>
</div>
	
@stop

@section('custom_js_script')
<script>

</script>
@stop