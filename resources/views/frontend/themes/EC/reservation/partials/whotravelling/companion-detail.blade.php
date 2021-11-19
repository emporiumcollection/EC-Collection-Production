<div class="col-md-4 mb-4 tagvalue">
	<input type="hidden" class="companion_id" value="{{ $companion->id }}">
	<label class="companion_name" id="companion_name">{{ $companion->first_name }} {{ $companion->last_name }}</label><br>
	<label class="companion_email">{{ $companion->email }}</label><br>
	<label class="companion_phone">{{ $companion->phone_number }}</label><br>
	<br>
	{{-- <label class="color-primary btn-use-addr">Select your Companion</label>
	<input type="checkbox" name="chkcompanion" class="color-primary btn-use-addr" value="{{ $companion->id }}">  --}}

	<div class="custom-control custom-checkbox">
		<input type="checkbox" id="chkcompanion_{{ $companion->id }}" class="custom-control-input chkcompanion" value="{{ $companion->id }}" {{ Session::get('companions') != '' ? (in_array($companion->id, Session::get('companions')) ? 'checked' : '') : '' }}>
		<label class="custom-control-label" for="chkcompanion_{{ $companion->id }}">Select your Companion</label>
	</div>
	<br>
</div>