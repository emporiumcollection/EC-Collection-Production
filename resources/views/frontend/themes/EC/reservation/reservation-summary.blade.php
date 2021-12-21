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
      <td class="px-0 py-1 text-right">{{ \Session::get('arrival') ? date('d F Y', strtotime(\Session::get('arrival'))) : '' }}</td>
    </tr>
    <tr>
      <td class="px-0 py-1">Check-out</td>
      <td class="px-0 py-1 text-right">{{ \Session::get('departure') ? date('d F Y', strtotime(\Session::get('departure'))) : '' }}</td>
    </tr>
    <?php if(\Session::has('selected_suite_number')){ ?>
      <tr>
        <td class="px-0 py-1">Suites</td>
        <td class="px-0 py-1 text-right">{{ \Session::get('selected_suite_number') }}</td>
      </tr>
    <?php } ?>
  </table>
</div>
<?php
  $pos = 1;
  $total = 0;
  $board_price = \Session::get('board_price') * $numberOfNights; 
?>  
@if(!empty($suites))
  @if(isset($suites))
  @foreach($suites as $suite)    
    @foreach($suite as $value)
        @if(isset($selected_suite[$value->id]))
        <div class="reservation-summary section-shadow">
          <div class="row align-items-center mb-3">
            <div class="col-lg-3">
            <?php if(!empty($images)): ?>
            <?php
            $image = $images[$value->id];
            if(isset($image['file']) && !empty($image['file'])){
              if(isset($image['file'])) $name = $image['file']['name'];
              if(isset($image['file'])) $file_name = $image['file']['file_name'];

            ?>  
              <img src="{{ asset('/room-image/resize/69x58/'.$container_name.'/'. $name . '/' . $file_name) }}" class="img-full" alt="">
           <?php } ?>
           <?php endif;?>
            </div>
            <div class="col-lg-9">
              <h4>SUITE &nbsp; {{ $pos++ }}</h4>
              <p><b>{{ $value->category_name }}</b></p>
            </div>
          </div>
          <table class="table table-borderless mb-0">
            <tr>
              <td class="px-0 py-1">Adult</td>
              <td class="px-0 py-1 text-right">{{ $selected_suite[$value->id]['adult'] }}</td>
            </tr>
            @if($selected_suite[$value->id]['junior'])
              <tr>
                <td class="px-0 py-1">Junior</td>
                <td class="px-0 py-1 text-right">{{ $selected_suite[$value->id]['junior'] }}</td>
              </tr>
            @endif
            @if($selected_suite[$value->id]['infant'])
              <tr>
                <td class="px-0 py-1">Infant</td>
                <td class="px-0 py-1 text-right">{{ $selected_suite[$value->id]['infant'] }}</td>
              </tr>
            @endif            
            <tr>
              <td class="px-0 py-1">Suite</td>
              <td class="px-0 py-1 text-right">{{ $numberOfNights }} * €{{ $selected_suite[$value->id]['price'] }}</td>
            </tr>
            {{-- <tr>
              <td class="px-0 py-1">Tax</td>
              <td class="px-0 py-1 text-right">€299.00</td>
            </tr> --}}
          </table>
          <hr class="mt-2">
          @if(isset($selected_suite[$value->id]['price']))

          <?php $suite_subtotal =  $selected_suite[$value->id]['price'] * $numberOfNights ; ?>
            
          <table class="table table-borderless mb-0">
            <tr>
              <td class="px-0 py-1">Subtotal</td>
              <td class="px-0 py-1 text-right">
                <b>€{{ $suite_subtotal }}</b>
                <?php $total += (float)$suite_subtotal ; ?>
              </td>
            </tr>
          </table>
          @endif
        </div>
        @endif
    @endforeach
  @endforeach   
    <?php
      $grand_total = $total + $board_price 
    ?>
      <div class="reservation-total">
        <table class="table table-borderless mb-0">
          <tr>
            <td class="px-0 py-1">Subtotal</td>
            <td class="px-0 py-1 text-right">
              <b>€{{ $grand_total }}</b>
            </td>
          </tr>
          @if(isset($vattax_id))
            @if($vattax_id == 1)
              <?php $vat = round(($grand_total * 20) / 100, 2); ?>
              <tr>
                <td class="px-0 py-1">VAT(20%)</td>
                <td class="px-0 py-1 text-right">
                  <b>€{{ $vat }}</b>
                </td>
              </tr>
            @elseif($vattax_id == 2 || $vattax_id == 3)
              <?php $vat = round(($grand_total * 2) / 100, 2); ?>
              <tr>
                <td class="px-0 py-1">VAT(2%)</td>
                <td class="px-0 py-1 text-right">
                  <b>€{{ $vat }}</b>
                </td>
              </tr>
            @endif
          @endif
          <tr>
            <?php $total_price = round($grand_total + isset($vat), 2); ?>
            <td class="px-0 py-1">Total</td>
            <td class="px-0 py-1 text-right">
              <b>€{{ $total_price }}</b>
            </td>
          </tr>  
        </table>
      </div>
    @else
      <h2>Suite Not Found</h2>
    @endif
  @endif
  @if(!empty($boards))
    @include('frontend.themes.EC.reservation.partials.suiteboard.select-board', ['board' => $boards])
@endif