<div class="sidebar-main" id="policies">
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
            <h3 class="title-second title-line mb-0" data-place="property" data-replace="property_short_name">
                {{ $hotel_data[0]->propperty_name }}
            </h3>
        </div>
        <div class="row">
            <div class="col-12">
                @if(isset( $terms_n_conditions->terms_n_conditions ) && !empty( $terms_n_conditions->terms_n_conditions ))
                        <?php echo nl2br($terms_n_conditions->terms_n_conditions) ?>
                @elseif(isset($hotel_data[0]->suites[0]->booking_policy) && !empty($hotel_data[0]->suites[0]->booking_policy) )
                    <div class="iubenda_legal_document">
                        {{ $hotel_data[0]->suites[0]->booking_policy }} 
                    </div>
                @else
                     @if(isset($global_policies))
                        @foreach($global_policies as $policy)
                          @if(Config::get('app.currentdomain') == 'voyage')  
                                @if($policy->domain == 'voyage')
                                    <?php echo $policy->policy; ?>
                                @endif 
                          @elseif(Config::get('app.currentdomain') == 'safari')
                                @if($policy->domain == 'safari')
                                    <?php echo $policy->policy; ?>
                                @endif                  
                          @elseif(Config::get('app.currentdomain') == 'spa')
                                @if($policy->domain == 'spa')
                                    <?php echo $policy->policy; ?>
                                @endif  
                          @elseif(Config::get('app.currentdomain') == 'islands')
                                @if($policy->domain == 'islands')
                                    <?php echo $policy->policy; ?>
                                @endif  
                          @endif
                        @endforeach
                    @endif
            </div>
            
            @endif
        </div>