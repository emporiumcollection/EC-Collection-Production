      <div id="smartwizard" class="wizard-reservation sw sw-theme-arrows sw-justified">
        <div class="block-res-title">
          Reservation Progress
        </div>
        <div class="nav-wizard-active">
          <div class="nv-wz">
            <span class="active" data-id="step-0">1. When</span>
          </div>
          <div class="nv-wz">
            <span class="" data-id="step-1">2. Where</span>
          </div>
          <div class="nv-wz">
            <span class="" data-id="step-2">3. Suite</span>
          </div>
          <div class="nv-wz">
            <span class="" data-id="step-3">4. Suite Board</span>
          </div>
          <div class="nv-wz">
            <span class="" data-id="step-4">5.Policies</span>
          </div>
          <div class="nv-wz">
            <span class="" data-id="step-5">6. Additional Services</span>
          </div>
          <div class="nv-wz">
            <span class="" data-id="step-6">7. Who’s travelling</span>
          </div>
          <div class="nv-wz">
            <span class="" data-id="step-7">8. Payment Method</span>
          </div>
          <div class="nv-wz">
            <span class="" data-id="step-8">9. Hotel Policies</span>
          </div>
          <div class="nv-wz">
            <span class="" data-id="step-9">10. Booking Summary</span>
          </div>
        </div>            
        <ul class="nav mt-4 mb-4 nav-wizard-primary">
          <?php 
          $step_links = [
            'when' => 1,
            'where' => 2,
            'suite' => 3,
            'board' => 4,
            'policies' => 5,
            'whoistravelling' => 6,
            'paymentmethod' => 7,
            'bookingsummary' => 8,
        ];
        $current_path = request()->path(); 
        $action = explode('/',$current_path);
        $action = $action[1];
        $actionIndex = $step_links[$action];
       ?>
          <li>
            @if ($actionIndex >= 1)
              <a class="nav-link done{{ Request::is('reservation/when*') ? 'active' : ''}} " href="/reservation/when/{{ Session::get('property_id') }}"><div>1</div>When</a>
            @endif
          </li>

          <li>
            @if ($actionIndex >= 2)
              <a class="nav-link done{{ Request::is('reservation/where') ? 'active' : ''}}" href="/reservation/where"><div>2</div>Where</a>
            @endif
          </li>

          <li>
            @if ($actionIndex >= 3)
              <a class="nav-link done{{ Request::is('reservation/suite*') ? 'active' : ''}}" href="/reservation/suite"><div>3</div>Suite</a>
            @endif
          </li>
          @if(count($suite_board) > 0)
            <li>
              @if ($actionIndex >= 4)
                <a class="nav-link done{{ Request::is('reservation/board') ? 'active' : ''}}" href="/reservation/board"><div>4</div>Suite Board</a>
              @endif
            </li>
          @endif
          <li>
              @if ($actionIndex >= 5)
              <a class="nav-link done{{ Request::is('reservation/policies') ? 'active' : ''}}" href="/reservation/policies"><div>5</div>Policies</a>
              @endif
          </li>
         {{--  <li>
            <a class="nav-link {{ Request::is('reservation/services') ? 'active' : ''}}" href="/reservation/services">
              Additional Services
            </a>
          </li> --}}
          <li>
              @if ($actionIndex >= 6)
                <a class="nav-link done{{ Request::is('reservation/whoistravelling') ? 'active' : ''}}" href="/reservation/whoistravelling"><div>6</div>Who’s travelling</a>
              @endif
          </li>
          <li>
              @if ($actionIndex >= 7)
                <a class="nav-link done{{ Request::is('reservation/paymentmethod') ? 'active' : ''}}" href="/reservation/paymentmethod"><div>7</div>Payment Method</a>
              @endif
          </li>
          {{-- <li>
            <a class="nav-link {{ Request::is('reservation/hotelpolicies') ? 'active' : ''}}" href="/reservation/hotelpolicies">
              Hotel Policies
            </a>
          </li> --}}
          <li>
              @if ($actionIndex >= 8)
                <a class="nav-link done{{ Request::is('reservation/bookingsummary') ? 'active' : ''}}" href="/reservation/bookingsummary"><div>8</div>Booking Summary</a>
              @endif
          </li>
        </ul>
      </div>