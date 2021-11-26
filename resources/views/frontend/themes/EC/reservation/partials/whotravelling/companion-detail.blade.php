<div class="col-md-4 mb-4 tagvalue">
	<input type="hidden" class="companion_id" value="{{ $companion->id }}">
	<label class="companion_name" id="companion_name">{{ $companion->first_name }} {{ $companion->last_name }}</label><br>
	<label class="companion_email">{{ $companion->email }}</label><br>
	<label class="companion_phone">{{ $companion->phone_number }}</label><br>

	<div class="row companion">
		<div class="col-md-12">
			<div class="custom-control custom-checkbox">
				<input type="checkbox" id="chkcompanion_{{ $companion->id }}" class="custom-control-input chkcompanion" value="{{ $companion->id }}" {{ Session::get('companions') != '' ? (array_key_exists($companion->id, Session::get('companions')) ? 'checked' : '') : '' }}>
				<label class="custom-control-label" for="chkcompanion_{{ $companion->id }}">Select your companion</label>
			</div>
		</div>
	</div>

	<div class="row companion_suite mt-2" style="display: {{ Session::get('companions') != '' ? (array_key_exists($companion->id, Session::get('companions')) ? 'block' : 'none') : 'none' }};">
		<div class="col-md-8">
			<select id="suite_{{ $companion->id }}" name="suite" class="form-control add_compnaion" data-companion-id="{{ $companion->id }}">
				<option value="" selected disabled>Select</option>
				@foreach($suites as $suite)
					<option value="{{ $suite[0]->id }}" {{ isset(Session::get('companions')[$companion->id]) ? ($suite[0]->id == Session::get('companions')[$companion->id]['suite_id'] ? 'selected' : '') : '' }}>{{ $suite[0]->category_name }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<br>
</div>