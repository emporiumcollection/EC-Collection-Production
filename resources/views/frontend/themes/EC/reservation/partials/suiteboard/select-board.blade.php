@if(!empty($board))
  <div class="reservation-summary section-shadow selected-suite-bord">
    <h4>SUITE Board &nbsp;</h4>
    <p><b>{{ $board->board_name }}</b></p>
    <table class="table table-borderless mb-0"> 
    </table>
    <hr class="mb-2">
    <table class="table table-borderless mb-0">
      <tr>
        <td class="px-0 py-1">Tax</td>
        @if($board->board_vat == 1)
        <td class="px-0 py-1 text-right">20%</td>
        @elseif($board->board_vat == 2)
          <td class="px-0 py-1 text-right">2%</td>
        @else
          <td class="px-0 py-1 text-right">2%</td>
        @endif
      </tr>
    </table>
    <hr class="mt-2">
    <table class="table table-borderless mb-0">
      <tr>
        <td class="px-0 py-1">Subtotal</td>
        <td class="px-0 py-1 text-right">
          <b>{{ \Session::get('board_price') }}</b>
        </td>
      </tr>
    </table>
  </div>
@endif    