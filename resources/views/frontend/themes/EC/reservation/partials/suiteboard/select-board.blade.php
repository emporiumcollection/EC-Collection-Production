@if(!empty($board))
  
  <div class="reservation-summary section-shadow selected-suite-bord">
    <h4>SUITE Board &nbsp;</h4>
    <p><b>{{ $board->board_name }}</b></p>
    <table class="table table-borderless mb-0"> 
    </table>
    <hr class="mb-2">
    <table class="table table-borderless mb-0">
      <tr>
          <td class="px-0 py-1">Price</td>
          <td class="px-0 py-1 text-right">€{{ $board->board_rackrate }}</td>
      </tr>
      <tr>            
        @if($board->board_vat == 1)
          <?php 
            $per = 20; 
            $tax =  $per/100 * $board->board_rackrate ; 
          ?>
          <td class="px-0 py-1">Tax 20%</td>
          <td class="px-0 py-1 text-right">€{{ $tax }}</td>
        @elseif($board->board_vat == 2)
          <?php 
            $per = 2; 
            $tax =  $per/100 * $board->board_rackrate ; 
          ?>
          <td class="px-0 py-1">Tax 2%</td>
          <td class="px-0 py-1 text-right">€{{ $tax }}</td>
        @else
          <?php 
            $per = 2; 
            $tax =  $per/100 * $board->board_rackrate ; 
          ?>
          <td class="px-0 py-1">Tax 2%</td>
          <td class="px-0 py-1 text-right">€{{ $tax }}</td>
        @endif
      </tr>
    </table>
    <hr class="mt-2">
    <table class="table table-borderless mb-0">
      <tr>
        <td class="px-0 py-1">Subtotal</td>
        <td class="px-0 py-1 text-right">
          <b>€{{ \Session::get('board_price') }}</b>
        </td>
      </tr>
    </table>
  </div>
@endif    