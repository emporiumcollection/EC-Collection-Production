@extends('layouts.app')

@section('content')
<link href="{{ asset('sximo/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet">
<style>
.radio-inline{ padding-left: 0px;}
.bootstrap-tagsinput{ width: 100%; }
</style>
<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
        </div>
        <ul class="breadcrumb">
            <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
            <li><a href="{{ URL::to('properties?return='.$return) }}">{{ $pageTitle }}</a></li>
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
            <div class="sbox-title"> <h4> <i class="fa fa-table"></i> <a href="{{URL::to('properties_settings/'.$row['id'].'/types')}}" class="tips btn btn-xs btn-primary pull-right" title="" data-original-title="Reservation Management"><i class="fa fa-edit"></i>&nbsp;Reservation Management</a></h4></div>
            <div class="sbox-content"> 	

                {!! Form::open(array('url'=>'properties/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#LocationDetails" data-toggle="tab">Hotel Details</a></li>
                    <li class=""><a href="#HotelAdress" data-toggle="tab">Hotel Adress</a></li>
                    <li class=""><a href="#Owner" data-toggle="tab">Owner</a></li>
                    <li class=""><a href="#reports" data-toggle="tab">Reports</a></li>
                    <li class=""><a href="#seo" data-toggle="tab">SEO</a></li>
                    <!--<li class="AgentAgency" ><a href="#AgentAgency" data-toggle="tab" >Agents</a></li>-->
                </ul>
                
            </div>		 
        </div>	
    </div>
    <script src="{{ asset('sximo/js/typeahead.min.js')}}"></script>
    <script src="{{ asset('sximo/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>			 
    <script type="text/javascript">
        $(document).ready(function () {
            
             $('input[name="meta_keywords"]').tagsinput({
              itemText: 'label'
            });
            $('input[name="article_tags"]').tagsinput();
            
            
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
            
            $("#property_cat_ids").jCombo("{{ URL::to('properties/comboselect?filter=tb_packages:id:package_title') }}",
            {  input_param: 'allow_user_groups', parent_value: '{{\CommonHelper::getusertype("users-b2c")}}', selected_value : '{{ $property_category }}', condition_param: 'find_in_set' });

            if ($('input[type="radio"][id="displayupload"]').is(":checked"))
            {
                $(".videotypeupload").show();
                $(".videotypelink").hide();
            }

            if ($('input[type="radio"][id="displaylink"]').is(":checked"))
            {
                $(".videotypeupload").hide();
                $(".videotypelink").show();
            }

            $('input[type="radio"][id="displayupload"]').on('ifChecked', function () {
                $(".videotypeupload").show();
                $(".videotypelink").hide();
            });

            $('input[type="radio"][id="displaylink"]').on('ifChecked', function () {
                $(".videotypeupload").hide();
                $(".videotypelink").show();
            });

            /* room sutes video section */

            if ($('input[type="radio"][id="rooms_suites_displayupload"]').is(":checked"))
            {
                $(".rooms_suites_videotypeupload").show();
                $(".rooms_suites_videotypelink").hide();
            }

            if ($('input[type="radio"][id="rooms_suites_displaylink"]').is(":checked"))
            {
                $(".rooms_suites_videotypeupload").hide();
                $(".rooms_suites_videotypelink").show();
            }

            $('input[type="radio"][id="rooms_suites_displayupload"]').on('ifChecked', function () {
                $(".rooms_suites_videotypeupload").show();
                $(".rooms_suites_videotypelink").hide();
            });

            $('input[type="radio"][id="rooms_suites_displaylink"]').on('ifChecked', function () {
                $(".rooms_suites_videotypeupload").hide();
                $(".rooms_suites_videotypelink").show();
            });

            /* architecture video section */
            if ($('input[type="radio"][id="architecture_displayupload"]').is(":checked"))
            {
                $(".architecture_videotypeupload").show();
                $(".architecture_videotypelink").hide();
            }

            if ($('input[type="radio"][id="architecture_displaylink"]').is(":checked"))
            {
                $(".architecture_videotypeupload").hide();
                $(".architecture_videotypelink").show();
            }

            $('input[type="radio"][id="architecture_displayupload"]').on('ifChecked', function () {
                $(".architecture_videotypeupload").show();
                $(".architecture_videotypelink").hide();
            });

            $('input[type="radio"][id="architecture_displaylink"]').on('ifChecked', function () {
                $(".architecture_videotypeupload").hide();
                $(".architecture_videotypelink").show();
            });

            /* architecture_design video section */
            if ($('input[type="radio"][id="architecture_design_displayupload"]').is(":checked"))
            {
                $(".architecture_design_videotypeupload").show();
                $(".architecture_design_videotypelink").hide();
            }

            if ($('input[type="radio"][id="architecture_design_displaylink"]').is(":checked"))
            {
                $(".architecture_design_videotypeupload").hide();
                $(".architecture_design_videotypelink").show();
            }

            $('input[type="radio"][id="architecture_design_displayupload"]').on('ifChecked', function () {
                $(".architecture_design_videotypeupload").show();
                $(".architecture_design_videotypelink").hide();
            });

            $('input[type="radio"][id="architecture_design_displaylink"]').on('ifChecked', function () {
                $(".architecture_design_videotypeupload").hide();
                $(".architecture_design_videotypelink").show();
            });

            /* architecture_designer video section */
            if ($('input[type="radio"][id="architecture_designer_displayupload"]').is(":checked"))
            {
                $(".architecture_designer_videotypeupload").show();
                $(".architecture_designer_videotypelink").hide();
            }

            if ($('input[type="radio"][id="architecture_designer_displaylink"]').is(":checked"))
            {
                $(".architecture_designer_videotypeupload").hide();
                $(".architecture_designer_videotypelink").show();
            }

            $('input[type="radio"][id="architecture_designer_displayupload"]').on('ifChecked', function () {
                $(".architecture_designer_videotypeupload").show();
                $(".architecture_designer_videotypelink").hide();
            });

            $('input[type="radio"][id="architecture_designer_displaylink"]').on('ifChecked', function () {
                $(".architecture_designer_videotypeupload").hide();
                $(".architecture_designer_videotypelink").show();
            });

            /* spa video section */
            if ($('input[type="radio"][id="spa_displayupload"]').is(":checked"))
            {
                $(".spa_videotypeupload").show();
                $(".spa_videotypelink").hide();
            }

            if ($('input[type="radio"][id="spa_displaylink"]').is(":checked"))
            {
                $(".spa_videotypeupload").hide();
                $(".spa_videotypelink").show();
            }

            $('input[type="radio"][id="spa_displayupload"]').on('ifChecked', function () {
                $(".spa_videotypeupload").show();
                $(".spa_videotypelink").hide();
            });

            $('input[type="radio"][id="spa_displaylink"]').on('ifChecked', function () {
                $(".spa_videotypeupload").hide();
                $(".spa_videotypelink").show();
            });

            /* restaurant video section */
            if ($('input[type="radio"][id="restaurant_displayupload"]').is(":checked"))
            {
                $(".restaurant_videotypeupload").show();
                $(".restaurant_videotypelink").hide();
            }

            if ($('input[type="radio"][id="restaurant_displaylink"]').is(":checked"))
            {
                $(".restaurant_videotypeupload").hide();
                $(".restaurant_videotypelink").show();
            }

            $('input[type="radio"][id="restaurant_displayupload"]').on('ifChecked', function () {
                $(".restaurant_videotypeupload").show();
                $(".restaurant_videotypelink").hide();
            });

            $('input[type="radio"][id="restaurant_displaylink"]').on('ifChecked', function () {
                $(".restaurant_videotypeupload").hide();
                $(".restaurant_videotypelink").show();
            });

            /* restaurant2 video section */
            if ($('input[type="radio"][id="restaurant2_displayupload"]').is(":checked"))
            {
                $(".restaurant2_videotypeupload").show();
                $(".restaurant2_videotypelink").hide();
            }

            if ($('input[type="radio"][id="restaurant2_displaylink"]').is(":checked"))
            {
                $(".restaurant2_videotypeupload").hide();
                $(".restaurant2_videotypelink").show();
            }

            $('input[type="radio"][id="restaurant2_displayupload"]').on('ifChecked', function () {
                $(".restaurant2_videotypeupload").show();
                $(".restaurant2_videotypelink").hide();
            });

            $('input[type="radio"][id="restaurant2_displaylink"]').on('ifChecked', function () {
                $(".restaurant2_videotypeupload").hide();
                $(".restaurant2_videotypelink").show();
            });

            /* restaurant2 video section */
            if ($('input[type="radio"][id="bar_displayupload"]').is(":checked"))
            {
                $(".bar_videotypeupload").show();
                $(".bar_videotypelink").hide();
            }

            if ($('input[type="radio"][id="bar_displaylink"]').is(":checked"))
            {
                $(".bar_videotypeupload").hide();
                $(".bar_videotypelink").show();
            }

            $('input[type="radio"][id="bar_displayupload"]').on('ifChecked', function () {
                $(".bar_videotypeupload").show();
                $(".bar_videotypelink").hide();
            });

            $('input[type="radio"][id="bar_displaylink"]').on('ifChecked', function () {
                $(".bar_videotypeupload").hide();
                $(".bar_videotypelink").show();
            });

            /*$("#assigned_user_id").jCombo("{{ URL::to('properties/comboselect?filter=tb_users:id:first_name|last_name') }}",
                    {selected_value: '{{ $property_user }}'});*/
            $("#assigned_user_id").jCombo("{{ URL::to('properties/comboselect?filter=tb_users:id:first_name|last_name') }}",
                    {selected_value: '{{ $row->assigned_user_id }}'});

            $('.removeCurrentFiles').on('click', function () {
                var removeUrl = $(this).attr('href');
                $.get(removeUrl, function (response) {});
                $(this).parent('div').empty();
                return false;
            });

            $('input[type="radio"][class="owner_contact_person"]').on('ifChecked', function () {
                var contprs = $(this).val();
                //alert(contprs);
                if (contprs == 'Owner')
                {
                    $('.AgentAgency').css('display', 'none');
                    $('#AgentAgency input').removeAttr('required');
                } else
                {
                    $('.AgentAgency').css('display', 'block');
                    $('#AgentAgency input').attr('required', 'required');
                }
            });

            var propty = $('#property_type').val();
            check_yachts(propty);
        });

        function check_yachts(prop)
        {
            if (prop == 'Yachts')
            {
                $('.yachtin').show();
            } else
            {
                $('.yachtin').hide();
            }
        }
        $('input[type="radio"][name="rdcitytax"]').on('ifChecked', function (event) {
            var _val = event.target.value;
            if(_val=='yes'){
                $(".dvcitytax").show();    
            }else{
                $(".dvcitytax").hide();
            }
        });
        
        
    </script>		 
    @stop