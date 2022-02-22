
@extends('layouts.app')
<script type="text/javascript">

    function machhotels(catg)
    {
        window.location.href = "{{URL::to('matchdestination')}}?selcat="+catg;
    }

</script>

@section('content')

<div class="page-content row">
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
        @if(isset($hotels))                             
            @foreach ($hotels as $val)
            <form action="/savemathhotels" method="post">
                <tr>
                    <td width="30">{{ $val['hotel_name'] }}</td>
                    <input type="hidden" name="property_id" value="{{ $val['property_id'] }}">
                    <input type="hidden" name="hotel_id" value="{{ $val['hotel_id'] }}">
                    <td width="50">
                        <select class="form-control" name='matched_property' id='matched_property' style="height: 28px; margin-left: 5px;"> 
                            @foreach ($hotels as $value)
                                <option value="{{ $value['matched_property'] }}">{{ $value['matched_property'] }}</option>
                            @endforeach
                        </select>
                    </td>                                 
                    <td width="30"><button class="form-control">Submit</button></td>
                </tr>
            </form>
            @endforeach
        @endif    
        </tbody>
    </table>  
</div>    
</div> 
@stop
