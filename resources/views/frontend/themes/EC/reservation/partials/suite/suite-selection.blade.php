<div class="reservation-summary">
  <h4>YOUR RESERVATION</h4>
  <p><b>{!! Session::get('hotel_name') !!}</b></p>
  <table class="table table-borderless mb-0">
    <tr>
      <td class="px-0 py-1">Guests</td>
      <td class="px-0 py-1 text-right">{{ \Session::get('Guests') }} </td>
    </tr>
    <tr>
      <td class="px-0 py-1">Check-in</td>
      <td class="px-0 py-1 text-right">{{ \Session::get('arrival') ? \Session::get('arrival') : '' }}</td>
    </tr>
    <tr>
      <td class="px-0 py-1">Check-out</td>
      <td class="px-0 py-1 text-right">{{ \Session::get('departure') ? \Session::get('departure') : '' }}</td>
    </tr>
    <tr>
      <td class="px-0 py-1">Suites</td>
      <td class="px-0 py-1 text-right">{{ \Session::get('selected_suite_number')}}</td>
    </tr>
  </table>
</div>
<?php
  $pos = 1;
  $grand_total = 0;
?>
@if(!empty($suites))
  @foreach($suites as $suite)
    @foreach($suite as $value)
      <div class="reservation-summary section-shadow">
        <h4>SUITE &nbsp; {{ $pos++ }}</h4>
        <p><b>{{ $value->category_name }}</b></p>
        <table class="table table-borderless mb-0"> 
          @if(!empty($selected_suite))
            <tr>
              <td class="px-0 py-1">Guests</td>
              @foreach($selected_suite as $key => $select_suite)
                @if($key == $value->id)
                  <td class="px-0 py-1 text-right">{{ $key == $value->id ? $select_suite['guest'] : ''}}</td>
                @endif
              @endforeach
            </tr>
          @if(isset($selected_suite[$value->id]['price']))
          <tr>
            <td class="px-0 py-1">Suite</td>
            <td class="px-0 py-1 text-right">€{{ $selected_suite[$value->id]['price'] }}</td>
          </tr>
          @endif
          @endif
          {{-- <tr>
            <td class="px-0 py-1">Tax</td>
            <td class="px-0 py-1 text-right">€299.00</td>
          </tr> --}}
        </table>
        <hr class="mb-2">
        <table class="table table-borderless mb-0">
          <tr>
            <td class="px-0 py-1">Gourmet Experience</td>
            <td class="px-0 py-1 text-right">2</td>
          </tr>
        </table>
        <hr class="mt-2">
        @if(isset($selected_suite[$value->id]['price']))
        <table class="table table-borderless mb-0">
          <tr>
            <td class="px-0 py-1">Subtotal</td>
            <td class="px-0 py-1 text-right">
              <b>€{{ $selected_suite[$value->id]['price'] }}</b>
              <?php $grand_total += (float)$selected_suite[$value->id]['price']; ?>
            </td>
          </tr>
        </table>
        @endif
      </div>
    @endforeach
  @endforeach
  @else
    <h2>Suite Not Found</h2>
@endif
<div class="reservation-total">
  <table class="table table-borderless mb-0">
    <tr>
      <td class="px-0 py-1">Total</td>
      <td class="px-0 py-1 text-right"><b>€{{ $grand_total }}</b></td>
    </tr>
  </table>
</div>