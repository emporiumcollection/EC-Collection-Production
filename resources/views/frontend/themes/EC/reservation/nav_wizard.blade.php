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
          <li>
            <a class="nav-link {{ Request::is('reservation/when') ? 'active' : ''}} " href="/reservation/when/{id}">
              When
            </a>
          </li>
          <li>
            <a class="nav-link {{ Request::is('reservation/where') ? 'active' : ''}}" href="/reservation/where">
              Where
            </a>
          </li>
          <li>
            <a class="nav-link {{ Request::is('reservation/suite') ? 'active' : ''}}" href="/reservation/suite">
              Suite
            </a>
          </li>
          <li>
            <a class="nav-link {{ Request::is('reservation/suiteboard') ? 'active' : ''}}" href="/reservation/suiteboard">
              Suite Board
            </a>
          </li>
          <li>
            <a class="nav-link {{ Request::is('reservation/policies') ? 'active' : ''}}" href="/reservation/policies">
              Policies
            </a>
          </li>
         {{--  <li>
            <a class="nav-link {{ Request::is('reservation/services') ? 'active' : ''}}" href="/reservation/services">
              Additional Services
            </a>
          </li> --}}
          <li>
            <a class="nav-link {{ Request::is('reservation/whoistravelling') ? 'active' : ''}}" href="/reservation/whoistravelling">
              Who’s travelling
            </a>
          </li>
          <li>
            <a class="nav-link {{ Request::is('reservation/paymentmethod') ? 'active' : ''}}" href="/reservation/paymentmethod">
              Payment Method
            </a>
          </li>
          {{-- <li>
            <a class="nav-link {{ Request::is('reservation/hotelpolicies') ? 'active' : ''}}" href="/reservation/hotelpolicies">
              Hotel Policies
            </a>
          </li> --}}
          <li>
            <a class="nav-link {{ Request::is('reservation/bookingsummary') ? 'active' : ''}}" href="/reservation/bookingsummary">
              Booking Summary
            </a>
          </li>
        </ul>
      </div>