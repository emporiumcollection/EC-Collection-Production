<div class="reservation-summary">
  <h4>YOUR RESERVATION</h4>
  <p><b>{!! Session::get('suite_name') !!}</b></p>
  <table class="table table-borderless mb-0">
    <tr>
      <td class="px-0 py-1">Guests</td>
      <td class="px-0 py-1 text-right">{{ \Session::get('selected_suite_guest') ? \Session::get('selected_suite_guest') : \Session::get('Guests') }} </td>
    </tr>
    <tr>
      <td class="px-0 py-1">Check-in</td>
      <td class="px-0 py-1 text-right">{{ date('d-M-Y', \Session::get('arrival_date')) ? date('d-M-Y', \Session::get('arrival_date')) : '' }}</td>
    </tr>
    <tr>
      <td class="px-0 py-1">Check-out</td>
      <td class="px-0 py-1 text-right">{{ date('d-M-Y', \Session::get('departure_date')) ? date('d-M-Y', \Session::get('departure_date')) : '' }}</td>
    </tr>
    <tr>
      <td class="px-0 py-1">Suites</td>
      <td class="px-0 py-1 text-right">{{ \Session::get('selected_suite_number') ? \Session::get('selected_suite_number') : '' }}</td>
    </tr>
  </table>
</div>