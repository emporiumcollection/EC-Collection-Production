<div class="row d-flex justify-content-between">
    <div class="col-md-3">
        <label for="adult_guest_{{ $suite->id }}">Adult(s)</label>
        <select name="adult" id="adult_guest_{{ $suite->id }}" class="form-control select_suite_guest w-100">
            <option value="" selected disabled>Select</option>
            @for($j = 1; $j <= $suite->guests_adults; $j++)      
                <option value="{{ $j }}" {{ array_key_exists($suite->id, \Session::get('suite_array') ? \Session::get('suite_array') : [] ) && \Session::get('suite_array')[$suite->id]['adult'] == $j ? 'selected' : '' }}>{{ $j }}</option>
            @endfor                       
        </select>
    </div>
    <div class="col-md-3">
        @if($suite->guests_juniors)
            <label for="junior_guest_{{ $suite->id }}">Junior(s)</label>
            <select name="junior" id="junior_guest_{{ $suite->id }}" class="form-control select_suite_guest w-100">
                <option value="" selected disabled>Select</option>
                @for($j = 1; $j <= $suite->guests_juniors; $j++)      
                    <option value="{{ $j }}" {{ array_key_exists($suite->id, \Session::get('suite_array') ? \Session::get('suite_array') : [] ) && \Session::get('suite_array')[$suite->id]['junior'] == $j ? 'selected' : '' }}>{{ $j }}</option>
                @endfor                       
            </select>
        @endif
    </div>
    <div class="col-md-3">
        <?php if(!$suite->guests_babies){
            $suite->guests_babies = 3;
        }?>
        @if($suite->guests_babies)
            <label for="infant_guest_{{ $suite->id }}">Infant(s)</label>
            <select name="infant" id="infant_guest_{{ $suite->id }}" class="form-control select_suite_guest w-100">
                <option value="" selected disabled>Select</option>
                @for($j = 1; $j <= $suite->guests_babies; $j++)      
                    <option value="{{ $j }}" {{ array_key_exists($suite->id, \Session::get('suite_array') ? \Session::get('suite_array') : [] ) && \Session::get('suite_array')[$suite->id]['infant'] == $j ? 'selected' : '' }}>{{ $j }}</option>
                @endfor                       
            </select>
        @endif
    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-12">
                <label class="w-100">Edit/Update</label>
            </div>
            <div class="col-md-12">
                <?php if(!empty(\Session::get('suite_array')) && array_key_exists(  $suite->id, \Session::get('suite_array'))){ ?>
                    <a href="javascript:void(0);" class="btn btn-dark select_suite" title="Update" data-suite-id="{{ $suite->id }}" style="padding: 10px 9px;"><i class="fa fa-edit"></i></a>
                    <a href="javascript:void(0);" class="btn btn-dark ml-2 remove_suite" title="Remove" data-suite-id="{{ $suite->id }}" style="padding: 10px 9px;"><i class="fa fa-times-circle-o"></i></a>
                <?php }else{ ?>
                    <a href="javascript:void(0);" class="btn btn-dark select_suite" data-suite-id="{{ $suite->id }}">Select</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

