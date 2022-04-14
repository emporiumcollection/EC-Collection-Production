<div class="sidebar-main" id="facilities">
    <a href="#" class="close-sidebar">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path
                d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>
    <div class="sidebar-scroller">
      <div class="d-flex align-items-center mb-5">
          <a href="#" class="sidebar-back">
              <i class="ico ico-back"></i>
          </a>
          <h3 class="title-second title-line mb-0" data-place="property">
            @if(isset($hotel_data[0]->property_name))
              <b>{{ $hotel_data[0]->property_name }}</b>
            @endif 
          </h3>
      </div>
      @if(isset($fac) && !empty($fac))
        <div class="row mb-5">
             <?php 
                $general = "";
                $business = "";
                $activities = "";
                $cleaning = "";
                $reception = "";
                $food = "";
             ?>
            @foreach($fac as $key => $val)
                @if($val->facilitytype_name == 'General')
                <?php  $general .= $val->facility_name.','; ?>
                    
                @elseif($val->facilitytype_name == 'Business facilities')
                    <?php  $business .= $val->facility_name.','; ?>
                    
                @elseif($val->facilitytype_name == 'Food & Drink')
                <?php  $food .= $val->facility_name.','; ?>
                   
                @elseif($val->facilitytype_name == 'Reception services')
                <?php  $reception .= $val->facility_name.','; ?>
                    
                @elseif($val->facilitytype_name == 'Cleaning services')
                <?php  $cleaning .= $val->facility_name.','; ?>
                   
                @elseif($val->facilitytype_name == 'Activities')
                <?php  $activities .= $val->facility_name.','; ?>
                   
                @endif    
            @endforeach
            @if($general != "" && !empty($general))
                 <div class="col-md-3 col-sm-6 mb-4">
                    <p><b>General</b></p>
                    <p style="margin: 0;">{!! str_replace(',', '</br>' ,$general) !!}</p>
                </div>
            @endif    
            @if($business != "" && !empty($business))
                <div class="col-md-3 col-sm-6 mb-4">
                    <p><b>Business facilities</b></p>
                    <p style="margin: 0; ">{!! str_replace(',','</br>' ,$business) !!}</p>
                </div>
            @endif    
            @if($food != "" && !empty($food))
                <div class="col-md-3 col-sm-6 mb-4">
                    <p><b>Food & Drink</b></p>
                    <h5 style="margin: 0;">{!! str_replace(',','</br>' ,$food) !!}</h5>
                </div>
            @endif    
            @if($reception != "" && !empty($reception))
                <div class="col-md-3 col-sm-6 mb-4">
                    <p><b>Reception services</b></p>
                    <p style="margin: 0; display: inline;">{!! str_replace(',','</br>' ,$reception) !!}</p>
                </div>
            @endif    
            @if($cleaning != "" && !empty($cleaning))
                <div class="col-md-3 col-sm-6 mb-4">
                    <p><b>Cleaning services</b></p>
                    <p style="margin: 0; display: inline;">{!! str_replace(',','</br>' ,$cleaning) !!}</p>
                </div>
            @endif    
            @if($activities != "" && !empty($activities))
                <div class="col-md-3 col-sm-6 mb-4">
                    <p><b>Activities</b></p>
                    <p style="margin: 0; display: inline;">{!! str_replace(',','</br>' ,$activities) !!}</p>
                </div>
            @endif
        </div>  
        @endif
    </div>
</div>
