<div class="row d-flex justify-content-between">
    <div class="col-md-5">
      <select name="total_guest" id="select_suite_guest_{{ $suite->id }}" class="form-control select_suite_guest w-100">
        <option value="" selected disabled>Select guest(S)</option>
        @for($j = 1; $j <= $suite->total_guests; $j++)      
          <option value="{{ $j }}" {{ array_key_exists($suite->id, \Session::get('suite_array') ? \Session::get('suite_array') : [] ) && \Session::get('suite_array')[$suite->id]['guest'] == $j ? 'selected' : '' }}>{{ $j }}</option>
        @endfor                       
      </select>
    </div>
    <div class="col-md-4 d-flex justify-content-end align-self-center">
        <?php if(!empty(\Session::get('suite_array')) && array_key_exists(  $suite->id, \Session::get('suite_array'))){ ?>
            <a href="javascript:void(0);" class="btn btn-dark select_suite" title="Update" data-suite-id="{{ $suite->id }}"><i class="fa fa-edit"></i></a>
            <a href="javascript:void(0);" class="btn btn-dark ml-2 remove_suit" title="Remove" data-suite-id="{{ $suite->id }}"><i class="fa fa-times-circle-o"></i></a>
        <?php }else{ ?>
            <a href="javascript:void(0);" class="btn btn-dark select_suite" data-suite-id="{{ $suite->id }}">Select</a>
        <?php } ?>
    </div>
</div>