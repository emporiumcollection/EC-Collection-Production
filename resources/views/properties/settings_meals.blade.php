@extends('layouts.app')

@section('content')
<style>
    .select2-container-multi .select2-choices{ height: 30px !important;}
</style>

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

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
        <div class="block-content">
            <ul class="nav nav-tabs" >
                @if(!empty($tabss))
                    @foreach($tabss as $key=>$val)
                        <li  @if($key == $active) class="active" @endif><a href="{{URL::to('properties_settings/'.$pid.'/'.$key)}}"> {{ $val->tab_name }}  </a></li>
                    @endforeach
                @endif
            </ul>

            <div class="tab-content m-t">
                <div class="tab-pane active use-padding" id="seasons">

                    <form id="frm_configmeals" class="frm_configmeals">
                        <input type="hidden" name="property_id" value="{{ $property_id }}" />
                        <table id="table_frm_configmeals"  border="1" width="800" height="100" style="text-align:center;">
                            <tr>
                                <td>Name</td>
                                <td>Order</td>
                                <td>On Check-in Day</td>
                                <td>On Check-out Day</td>
                            </tr>

                            @if (count($meals_config) > 0)

                                @foreach($meals_config as $value)

                                    <tr>
                                        <td><input class="form-control" value="{{ $value->meal_name }}" type="text" name="meal_name[]" /></td>
                                        <td><input class="form-control" value="{{ $value->meal_order }}" type="text" name="meal_order[]" /></td>
                                        <td>
                                            <select class="form-control"  name="meal_check_in[]">
                                                <option @if ($value->checkin == 0) selected="selected" @endif value="0">Not Available</option>
                                                <option @if ($value->checkin == 1) selected="selected" @endif value="0" value="1">Available</option>
                                            </select>

                                        </td>
                                        <td>
                                            <select class="form-control"  name="meal_check_out[]">
                                                <option @if ($value->checkout == 0) selected="selected" @endif value="0" value="0">Not Available</option>
                                                <option @if ($value->checkout == 1) selected="selected" @endif value="0" value="1">Available</option>
                                            </select>
                                        </td>
                                    </tr>

                                @endforeach
                            @else
                                <tr>
                                    <td><input class="form-control" type="text" name="meal_name[]" /></td>
                                    <td><input class="form-control" type="text" name="meal_order[]" /></td>
                                    <td>
                                        <select class="form-control"  name="meal_check_in[]">
                                            <option value="0">Not Available</option>
                                            <option value="1">Available</option>
                                        </select>

                                    </td>
                                    <td>
                                        <select class="form-control"  name="meal_check_out[]">
                                            <option value="0">Not Available</option>
                                            <option value="1">Available</option>
                                        </select>
                                    </td>
                                </tr>
                            @endif

                        </table>

                        <div class="text-right" style="padding: 20px;">
                            <button type="button" class="btn btn-danger b-btn addmoreconfigmeals" ><i class="fa fa-plus"></i>Add more</button>
                            <button type="button" class="btn btn-danger b-btn resetconfigmeals" >Reset</button>
                            <button type="button" class="btn btn-danger b-btn configmeals" >Submit</button>
                        </div>
                    </form>

                    <form id="frm_addmeals" class="frm_addmeals">
                        <input type="hidden" name="property_id" value="{{ $property_id }}" />
                        <table border="1" width="800" height="200" style="text-align:center;">
                            <tr>
                                <td>Board</td>
                                @if (count($meals_config) > 0)
                                    @foreach ($meals_config as $key => $value)
                                        <td>{{$value->meal_name }}</td>
                                    @endforeach
                                @endif
                            </tr>

                            @foreach ($boards_data as $key => $data)
                                <tr>
                                    <td>
                                        <input type="hidden" value="{{ $key }}" name="boards[]"/>
                                        {{ $data }}
                                    </td>
                                    @if (count($meals_config) > 0)
                                        @foreach ($meals_config as $key => $value)
                                            <td><input class="form-control" value="{{ $value->id }}" name="meals[{{ $value->id }}][]"  type="checkbox"></td>
                                        @endforeach
                                    @endif
                                </tr>

                            @endforeach
                        </table>
                        <div class="text-right" style="padding: 20px;">
                            <button type="button" class="btn btn-danger b-btn addmeals">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    $(document).on('click', '.addmeals', function() {
        addMeals();
        return false;
    });

    $(document).on('click', '.configmeals', function() {
        configMeals();
        return false;
    });

    $(document).on('click', '.resetconfigmeals', function() {
        $.ajax({
            url: "{{ URL::to('properties/resetmeals')}}",
            type: "post",
            data: $("#frm_configmeals").serializeArray(),
            dataType: "json",
            success: function(data){
                window.location.reload();
            }
        });
        return false;
    });

    $(document).on('click', '.addmoreconfigmeals', function() {
        $('#table_frm_configmeals').append('<tr><td><input class="form-control"  type="text" name="meal_name[]" /></td><td><input class="form-control"  type="text" name="meal_order[]" /></td><td><select class="form-control"  name="meal_check_in[]"><option value="0">Not Available</option><option value="1">Available</option></select></td><td><select class="form-control"  name="meal_check_out[]"><option value="0">Not Available</option><option value="1">Available</option></select></td></tr>');
        return false;
    });

    function addMeals() {
        $.ajax({
            url: "{{ URL::to('properties/addmeals')}}",
            type: "post",
            data: $("#frm_addmeals").serializeArray(),
            dataType: "json",
            success: function(data){
                window.location.reload();
            }
        });
    }

    function configMeals() {
        $.ajax({
            url: "{{ URL::to('properties/configmeals')}}",
            type: "post",
            data: $("#frm_configmeals").serializeArray(),
            dataType: "json",
            success: function(data) {
                window.location.reload();
            }
        });
    }

</script>

@stop
