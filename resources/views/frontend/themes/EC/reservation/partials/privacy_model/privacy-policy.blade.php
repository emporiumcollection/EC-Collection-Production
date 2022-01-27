
<div class="modal fade" id="privacy_policy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Privacy Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if(isset($hotel_data[0]->suites[0]->booking_policy) && !empty($hotel_data[0]->suites[0]->booking_policy) )
          <div class="iubenda_legal_document">
            {{ $hotel_data[0]->suites[0]->booking_policy }} </div>
          </div>
        @elseif(isset( $terms_n_conditions->terms_n_conditions ) && !empty( $terms_n_conditions->terms_n_conditions ))
            {{ $terms_n_conditions->terms_n_conditions }} </div>
        @else
      <div class="iubenda_legal_document"> 
        <h1 style="outline: none;">Privacy Policy of <strong>emporium-collection.com</strong></h1> 
        <p>
          @if(isset($global_policies))
            @foreach($global_policies as $policy)
              @if(Config::get('app.currentdomain') == 'voyage')  
                @if($policy->domain == 'voyage')
                  {{$policy->policy }}
                @endif 
              @elseif(Config::get('app.currentdomain') == 'safari')
                  @if($policy->domain == 'safari')
                    {{ $policy->policy }}
                  @endif                  
              @elseif(Config::get('app.currentdomain') == 'spa')
                  @if($policy->domain == 'spa')
                    {{ $policy->policy }}
                  @endif  
              @elseif(Config::get('app.currentdomain') == 'islands')
                  @if($policy->domain == 'islands')
                    {{$policy->policy}}
                  @endif  
              @endif
            @endforeach
          @endif      
        ?></p>
        </div>
      </div>
      @endif
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Accept!</button>
      </div>
    </div>
  </div>
</div>