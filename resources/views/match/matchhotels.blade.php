<?php
if(isset($exthotels)){
    echo 'FFF';
    echo $exthotels.'Here';
    exit;
}else{
    //echo 'Here';
}
echo 'Here123';
?>
@extends('layouts.app')
<script type="text/javascript">

    function machhotels(catg)
    {
        window.location.href = "{{URL::to('matchdestination')}}?selcat="+catg;
    }

</script>

@section('content')

<div class="page-content row">
    @if(isset($message))
        <div class="page-header">
          <div class="page-title">
            <h3> {{$message}}</h3>
          </div>
        </div>
    @endif
<div class="page-content-wrapper m-t">      
    <div class="sbox animated fadeInRight">
    
    <div class="sbox-content">  
        <div class="toolbar-line ">
            <div class="row">
                <div class="col-sm-6">
                    <select class="form-control" name='property_category' id='property_category' style="height: 28px; margin-left: 5px;" 
                    onchange="machhotels(this.value);" > 
                        <option value="">-Select-</option>
                        @if(!empty($category))
                            @foreach($category as $catlist)
                                <option value="{{$catlist->category_name}}">{{$catlist->category_name}}</option>
                            @endforeach
                        @endif
                    </select>
                <div>
            </div>        
        </div>
    {{-- @include('footer') --}}
    </div>
    </div>
    <div class="table-responsive" style="min-height:300px;">
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>Property Name</th>
                <th>Country</th>
              </tr>
        </thead>
        <tbody>
        @if(isset($property))                             
            @foreach ($property as $data)
                <tr>
                    <td width="30">{{$data}}</td>
                    <td width="50"></td>                                 
                    {{-- <td>  </td> --}}
                </tr>
            @endforeach
        @endif    
        </tbody>
    </table>  
</div>    
</div> 
@stop
