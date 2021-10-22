<div class="reservation-summary">
  <h4>YOUR RESERVATION</h4>
  <p><b>{!! Session::get('suite_name') !!}</b></p>
  <table class="table table-borderless mb-0">
    <tr>
      <td class="px-0 py-1">Guests</td>
      <td class="px-0 py-1 text-right">{!! Session::get('Guests') !!}</td>
    </tr>
    <tr>
      <td class="px-0 py-1">Check-in</td>
      <td class="px-0 py-1 text-right">{!! Session::get('arrival_date') !!}</td>
    </tr>
    <tr>
      <td class="px-0 py-1">Check-out</td>
      <td class="px-0 py-1 text-right">{!! Session::get('departure_date') !!}</td>
    </tr>
    <tr>
      <td class="px-0 py-1">Suites</td>
      <td class="px-0 py-1 text-right">{!! Session::get('suite_name') !!}</td>
    </tr>
  </table>
</div>