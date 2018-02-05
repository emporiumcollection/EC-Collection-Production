@extends('frontend.layouts.ev.index')
@section('title', 'Personalized Service')
@section('css')
<link href="{{ asset('sximo/assets/css/chosen.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('sximo/assets/css/personalized.css')}}" rel="stylesheet" type="text/css"/>
<!--<link href="{{ asset('sximo/assets/memform/css/custom-ai.css')}}" rel="stylesheet" type="text/css"/>-->
@stop
@section('content')
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
<!--                    <div class="header-logo-image">
                        <img class="img-responsive" src="assets/images/logo-design_1_1.Pampering" alt=""/>
                    </div>
                    <div class="top-progress-bar">
                        <div class="progress-bar-inner"></div>
                    </div>
                    <div class="top-nav-align">
                        <ul class="booking-navigation-menues">
                            <li class="active">Holiday Destination</li>
                            <li>Travel Style</li>
                            <li>Details</li>
                            <li>Contact Details</li>
                        </ul>
                    </div>-->
                    <!-- steps start -->
                   <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
                    <!-- steps end -->
             
                    <div class="col-md-12 col-sm-8">
                            <form action="{{URL::to('personalized-service/save')}}" method="POST">
                                <fieldset class="muti-form-align">
                                    <div class="centred-tab-align tab-pane active" role="tabpanel" id="step1">
                                        <div>
                                            <h2 class="black-heading-big">Where do you want to travel?</h2>
                                            <p class="sub-des-heading">You can specify one or more destinations</p>
                                        </div>
                                        <div class="choosen-input-align">
                                            <select name="destinations[]" data-placeholder="Ex: Argentina, South Africa, Cape Town" class="chosen-select-default chosen-select-input-style" multiple tabindex="4">
                                                <?php
                                                if(!empty($destinations)) {
                                                    foreach ($destinations as $destination) {
                                                        echo '<option value="'.$destination->id.'">'.$destination->category_name.'</option>'.PHP_EOL;
                                                        if(!empty($destination->sub_destinations)) {
                                                            foreach ($destination->sub_destinations as $sub_destination) {
                                                                echo '<option value="'.$sub_destination->id.'">'.$sub_destination->category_name.'</option>'.PHP_EOL;
                                                                if(!empty($sub_destination->sub_destinations)) {
                                                                    foreach ($sub_destination->sub_destinations as $sub_dest) {
                                                                        echo '<option value="'.$sub_dest->id.'">'.$sub_dest->category_name.'</option>'.PHP_EOL;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="wrong-selection-pannel">
                                            <p class="sub-des-heading wrong-selected-text">We can not make travel arrangements to "Delhi".</p>
                                        </div>
                                        <div class="suggestions-pannel">
                                            <div class="suggestions-titles-align">
                                                <p class="sub-des-heading suggestions-headin-tittle">The following alternatives could be interesting:</p>
                                            </div>
                                            <ul class="suggestions-pannel-list-align">
                                                <?php
                                                if(!empty($destinations)) {
                                                    foreach ($destinations as $destination) {
                                                        echo '<li><a href="#'.$destination->id.'">'.$destination->category_name.'</a></li>';
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <input type="button" name="next" class="next action-button personalized-btn-deafult progress-bar-btn-increment next-step" value="Continue" />
                                </fieldset>
                                <fieldset class="hide-form muti-form-align">
                                    <div class="experience-page-align tab-pane" role="tabpanel" id="step2">
                                        <h2 class="black-heading-big">Inspirations</h2>
                                        <div class="selector-outer-align">
                                            <?php
                                            if(!empty($inspirations)) {
                                                foreach ($inspirations as $inspiration) {
                                                    ?>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group ps-fields-align">
                                                                <label for=""></label>
                                                                <label for="inspiration_{{$inspiration->id}}" style="background-image: url('{{URL::to('uploads/category_imgs/'.$inspiration->category_image)}}');" class="personalized-service-checkbox-label">
                                                                    <span class="selected-chexkbox"><i class="fa fa-check" aria-hidden="true"></i></span>{{$inspiration->category_name}}
                                                                </label>
                                                                <input id="inspiration_{{$inspiration->id}}" class="personalized-service-checkbox-input" name="inspirations[]" value="{{$inspiration->id}}" type="checkbox">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button personalized-btn-deafult next-step" value="Continue" />
                                    <div></div>
                                    <input type="button" name="previous" class="previous action-button  ps-basic-btn progress-bar-btn-decrement prev-step" value="Previous" />
                                </fieldset>
                                <fieldset class="hide-form muti-form-align">
                                    <div class="experience-page-align tab-pane" role="tabpanel" id="step2">
                                        <h2 class="black-heading-big">What would you like experience</h2>
                                        <div class="selector-outer-align">
                                            <?php
                                            if(!empty($experiences)) {
                                                foreach ($experiences as $experience) {
                                                    ?>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="row">
                                                            <div class="form-group ps-fields-align">
                                                                <label for="experience_{{$experience->id}}" style="background-image: url('{{URL::to('uploads/category_imgs/'.$experience->category_image)}}');" class="personalized-service-checkbox-label">
                                                                    <span class="selected-chexkbox"><i class="fa fa-check" aria-hidden="true"></i></span>{{$experience->category_name}}
                                                                </label>
                                                                <input id="experience_{{$experience->id}}" class="personalized-service-checkbox-input" name="experiences[]" value="{{$experience->id}}" type="checkbox">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button personalized-btn-deafult progress-bar-btn-increment" value="Continue" />
                                    <div></div>
                                    <input type="button" name="previous" class="previous action-button  ps-basic-btn" value="Previous" />
                                </fieldset>
                                <fieldset class="hide-form muti-form-align">
                                    <div class="centred-tab-align tab-pane" role="tabpanel" id="step3">
                                        <div>
                                            <h2 class="black-heading-big">What is particularly important to you?</h2>
                                            <p class="sub-des-heading">Tell us what you value - the more detailed the better.</p>
                                        </div>
                                        <div class="form-group textarea-left-align">
                                            <textarea class="form-control ps-text-area-style" name="note" placeholder="Further comments or wishes? A concrete trip tour, a special occasion such as A honeymoon or your approximate travel budget."></textarea>
                                        </div> 
                                        <div class="help-hover-icon">
                                            <a class="custom-tooltip" href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Your callback date can be selected in last step"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button personalized-btn-deafult next-step" value="Continue" />
                                    <div></div>
                                    <input type="button" name="previous" class="previous action-button  ps-basic-btn progress-bar-btn-decrement prev-step" value="Previous" />
                                </fieldset>
                                <fieldset class="hide-form muti-form-align">
                                    <div class="centred-tab-align tab-pane" role="tabpanel" id="step4">
                                        <div>
                                            <h2 class="black-heading-big">How many people travel?</h2>
                                        </div>
                                        <div class="peoples-travel-sec-outer-align col-md-offset-2">
                                            <div class="fileds-main-align">
                                                <div class="col-md-4 col-sm-4">
                                                    <p class="sub-des-heading suggestions-headin-tittle spinner-label">Adults</p>
                                                    <p class="smalldes-label">18* Years</p>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="ps-adults-handle-counter ps-handle-counter">
                                                        <button type="button" class="spinner-btns counter-minus btn btn-primary">-</button>
                                                        <input class="spinner-input" name="adults" type="text" value="2">
                                                        <button type="button" class="spinner-btns counter-plus btn btn-primary">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fileds-main-align">
                                                <div class="col-md-4 col-sm-4">
                                                    <p class="sub-des-heading suggestions-headin-tittle spinner-label">Youth</p>
                                                    <p class="smalldes-label">12-17 Years</p>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="ps-youth-handle-counter ps-handle-counter">
                                                        <button type="button" class="spinner-btns counter-minus btn btn-primary">-</button>
                                                        <input class="spinner-input" name="youth" type="text" value="0">
                                                        <button type="button" class="spinner-btns counter-plus btn btn-primary">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fileds-main-align">
                                                <div class="col-md-4 col-sm-4">
                                                    <p class="sub-des-heading suggestions-headin-tittle spinner-label">Children</p>
                                                    <p class="smalldes-label">2-11 Years</p>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="ps-children-handle-counter ps-handle-counter">
                                                        <button type="button" class="spinner-btns counter-minus btn btn-primary">-</button>
                                                        <input class="spinner-input" name="children" type="text" value="0">
                                                        <button type="button" class="spinner-btns counter-plus btn btn-primary">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fileds-main-align"> 
                                                <div class="col-md-4 col-sm-4">
                                                    <p class="sub-des-heading suggestions-headin-tittle spinner-label">toddlers</p>
                                                    <p class="smalldes-label">under 2 Years</p>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="ps-toddlers-handle-counter ps-handle-counter">
                                                        <button type="button" class="spinner-btns counter-minus btn btn-primary">-</button>
                                                        <input class="spinner-input" name="toddlers" type="text" value="0">
                                                        <button type="button" class="spinner-btns counter-plus btn btn-primary">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button personalized-btn-deafult next-step" value="Continue" />
                                    <div></div>
                                    <input type="button" name="previous" class="previous action-button  ps-basic-btn prev-step" value="Previous" />
                                </fieldset>
                                <fieldset class="hide-form muti-form-align">
                                    <div class="centred-tab-align">
                                        <div>
                                            <h2 class="black-heading-big">When would you like to travel?</h2>
                                        </div>
                                        <div class="textarea-left-align">
                                            <div class="get-travel-details">
                                                <div class="form-group">
                                                    <input class="ps-input-style form-control get-earliest-arrival" name="earliest_arrival" type="text" placeholder="Earliest Arrival">
                                                </div>
                                                <div class="form-group">
                                                    <input class="ps-input-style form-control get-checkout-date" name="late_check_out" type="text" placeholder="Late Check Out">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control ps-input-style" name="stay_time">
                                                    <option value="1-2 Weeks">1-2 Weeks</option>
                                                    <option value="2-3 Weeks">2-3 Weeks</option>
                                                    <option value="3-4 Weeks">3-4 Weeks</option>
                                                    <option value="4-5 Weeks">4-5 Weeks</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="help-hover-icon">
                                            <a class="custom-tooltip" href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Of course, we will let you know if the chosen travel period coincides with local holidays, festivals, high season or an unfavorable season."><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button personalized-btn-deafult" value="Continue" />
                                    <div></div>
                                    <input type="button" name="previous" class="previous action-button  ps-basic-btn" value="Previous" />
                                </fieldset>
                                <fieldset class="hide-form muti-form-align">
                                    <div class="centred-tab-align">
                                        <div>
                                            <h2 class="black-heading-big">Contact Details</h2>
                                            <p class="sub-des-heading margin-bottom-30">Please complete the following information.</p>
                                        </div>
                                        <div class="form-group text-left">
                                            <input class="radio-btn" type="radio" name="salutation" value="Sir">
                                            <label class="radio-inline radio-btn-label">Sir</label>
                                            <input class="radio-btn" type="radio" name="salutation" value="Mrs">
                                            <label class="radio-inline radio-btn-label">Mrs</label>
                                        </div>
                                        <div class="form-group">
                                            <input class="ps-input-style form-control" type="text" name="first_name" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <input class="ps-input-style form-control" type="text" name="surname" placeholder="Surname">
                                        </div>
                                        <div class="form-group">
                                            <input class="ps-input-style form-control" type="text" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <button type="submit" class="next action-button personalized-btn-deafult">Submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @stop
        @section('script')

        <style>
             .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}

@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
        </style>

        <script src=" {{ asset('sximo/assets/js/chosen.jquery.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('sximo/assets/js/init.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('sximo/assets/js/handleCounter.js') }}" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                // Multi Tab Form
                var current_fs, next_fs, previous_fs;
                var left, opacity, scale;
                var animating;

                $(".next").click(function () {
                    if (animating)
                        return false;
                    animating = true;

                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

                    $(".ps-progressbar li").eq($(".muti-form-align").index(next_fs)).addClass("active");

                    next_fs.show();
                    current_fs.animate({opacity: 0}, {
                        step: function (now, mx) {
                            scale = 1 - (1 - now) * 0.2;
                            left = (now * 50) + "%";
                            opacity = 1 - now;
                            current_fs.css({
                                'transform': 'scale(' + scale + ')',
                            });
                            next_fs.css({'left': left, 'opacity': opacity});
                        },
                        duration: 800,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        easing: 'easeInOutBack'
                    });
                });

                $(".previous").click(function () {
                    if (animating)
                        return false;
                    animating = true;

                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();
                    $(".ps-progressbar li").eq($(".muti-form-align").index(current_fs)).removeClass("active");
                    previous_fs.show();
                    current_fs.animate({opacity: 0}, {
                        step: function (now, mx) {
                            scale = 0.8 + (1 - now) * 0.2;
                            left = ((1 - now) * 50) + "%";
                            opacity = 1 - now;
                            current_fs.css({'left': left});
                            previous_fs.css({'transform': 'scale(' + scale + ')', 'opacity': opacity});
                        },
                        duration: 800,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        easing: 'easeInOutBack'
                    });
                });

                $(".submit").click(function () {
                    return false;
                })
                $('.personalized-service-checkbox-label').click(function (e) {
                    $(this).toggleClass('active').siblings().removeClass('active');
                });
                // Tooltip
                $('[data-toggle="tooltip"]').tooltip();
                //Input Spinner
                var options = {
                    minimum: 1,
                    maximize: 10,
                    onMinimum: function (e) {
                        console.log('reached minimum: ' + e);
                    },
                    onMaximize: function (e) {
                        console.log('reached maximize' + e);
                    }
                };
                
                $('.ps-adults-handle-counter').handleCounter({minimum:1, maximize: 100});
                $('.ps-youth-handle-counter').handleCounter({minimum:0, maximize: 100});
                $('.ps-children-handle-counter').handleCounter({minimum:0, maximize: 100});
                $('.ps-toddlers-handle-counter').handleCounter({minimum:0, maximize: 100});
                
                //Progress Bar
                var clicks = 1;
                $('.progress-bar-btn-increment').on('click', function () {
                    clicks++;
                    var percent = Math.min(Math.round(clicks / 3 * 100), 100);
                    percent = 25 * clicks;
                    $('.progress-bar-inner').width(percent + '%');
                });
                $('.progress-bar-btn-decrement').on('click', function () {
                    clicks--;
                    var percent = Math.min(Math.round(clicks / 3 * 100), 100);
                    percent = 25 * clicks;
                    $('.progress-bar-inner').width(percent + '%');
                });
                //Date Range Picker
                $(".get-travel-details").dateRangePicker({
                        selectForward: (Boolean),
                        stickyMonths: (Boolean),
                        startDate: "12-01-2017",
                        format: ' DD.MM.YYYY',
                        separator: ' to ',
                        getValue: function () {
                            if ($('.get-earliest-arrival').val() && $('.get-checkout-date').val())
                                return $('.get-earliest-arrival').val() + ' to ' + $('.get-checkout-date').val();
                            else
                                return '';
                        },
                        setValue: function (s, s1, s2) {
                            $('.get-earliest-arrival').val(s1);
                            $('.get-checkout-date').val(s2);
                        }
                    }
                ).bind('datepicker-first-date-selected', function (event, obj) {
                    $(".get-checkout-date").val('');
                });
            });
        </script>
        
        <script>
            $(document).ready(function () {
    //Initialize tooltips
//    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
            
        </script>


@stop