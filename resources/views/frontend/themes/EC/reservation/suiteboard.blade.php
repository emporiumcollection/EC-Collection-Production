@extends('frontend.themes.EC.layouts.main')
{{--  For Title --}}
@section('title', 'Global search availability')
{{-- For Meta Keywords --}}
@section('meta_keywords', '')
{{-- For Meta Description --}}
@section('meta_description', '')
{{-- For Page's Content Part --}}
<style>
.experiences{
  cursor: pointer;
}
.radio-toolbar {
  /*margin: 10px;*/
}

.radio-toolbar input[type="radio"] {
  opacity: 0;
  position: fixed;
  width: 0;
}

.radio-toolbar label {
    display: block;
    width: 100%;
    background-color: #ddd;
    padding: 0.375rem 0.75rem;
    /*font-family: sans-serif, Arial;*/
    font-size: 16px;
    border: 1px solid #444;
    /*border-radius: 4px;*/
    line-height: 1.5;
    margin: 0px;
}

.radio-toolbar label:hover {
  background-color: #000;
  color: #fff;
}

.radio-toolbar input[type="radio"]:focus + label {
    border: 2px solid #444;
}

.radio-toolbar input[type="radio"]:checked + label {
    background-color: #000;
    color: #fff;
    border-color: #000;
}
</style>
@section('content')
<div class="content-em">
  <div class="top-wrapper">
    <div class="container">
      @include('frontend.themes.EC.reservation.nav_wizard')
      <div id="step-4" class="tab-pane" role="tabpanel">
        <h2 class="mb-5 d-flex align-items-center"><a href="#" class="backwizard btn-backwizard"><i class="ico ico-back mr-3"></i></a>Suite Board</h2>
        <div class="row">
          <div class="col-lg-9 col-md-8">
            <form method="post" action="{{ route('store.suiteboard') }}">
              <div class="suite-board d-block section-shadow">
                <div class="suite-board-header">
                </div>
                <div class="row suite-board-body">
                  @if(count($suitesboards->boards) > 0)
                    @foreach($suitesboards->boards as $data)
                      <div class="col-lg-4 col-md-12 suite-price-feature">
                        <div class="suite-board-main">
                          <h4>{{ $data->board_name }}</h4>
                          <ul class="pl-3">
                            <li>Accommodation</li>
                            <li>Daily breakfast</li>
                          </ul>
                        </div>
                        <div class="suite-board-footer">                  
                          <div class="footer-sdse">
                            <p>€{{ $data->board_rackrate }} per night inclusive of all taxes and fees</p>
                            {{-- <a href="javascript:void(0);" class="btn btn-dark btn-block rounded-0 btn-nextwizard">Select</a> --}}
                            <div class="radio-toolbar">
                              <input type="radio" id="board_{{ $data->id }}" name="board" class="board-selection" value="{{ $data->id }}" {{ $board == $data->id ? 'checked' : '' }}>
                              <label for="board_{{ $data->id }}">Select</label> 
                              <a href="javascript:void(0);" class="remove_board_selection" style="display: {{ \Session::get('board_id') == $data->id ? 'block' : 'none' }};">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  @else
                    <h2>Suite Boards are not available!</h2>
                  @endif
                </div>            
              </div>
              <div class="row">
                <div class="col-md-12 mt-4">
                  <div class="text-right">
                    <button type="submit" class="btn btn-dark px-5 availability-check ">Next</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-3 col-md-4" id="suiteboard">
            @include('frontend.themes.EC.reservation.reservation-summary', ['suites' => $suites])
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

