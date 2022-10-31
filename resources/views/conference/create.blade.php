@extends('layouts.app')

@section('content')
<div class="container mb-5 wrapper flex-grow-1">
	<div class="row border-bottom mb-5 pb-4">
		<div class="col-9" style="font-size: 32px;">{{ __('Create conference') }}</div>
	</div>

	<form action="{{ route('conference.store') }}" method="POST" class="mb-4">
		@csrf
		<div class="row mb-4 align-items-center">
			<div class="col-2">{{ __('Title') }}<span class="text-danger">*</span></div>

			<div class="col-10">
				<input id="title" type="text" name="title" class="form-control" minlength="2" maxlength="255" required>
			</div>
		</div>

		<div class="row mb-4 align-items-center">
			<div class="col-2">{{ __('When') }}<span class="text-danger">*</span></div>

			<div class="col-5">
				<input id="date" type="date" name="date" class="form-control" min="{{ date('Y-m-d'); }}" required>
			</div>

			<div class="col-5">
				<input id="time" type="time" name="time" class="form-control" required>
			</div>
		</div>

		<div class="row mb-3 align-items-center">
			<div class="col-2">{{ __('Address') }}</div>

			<div class="col-5">
				<input id="latitude" type="number" name="latitude" class="form-control"
					   oninput="updateMap()"
					   min="-85" max="85"
					   step="0.0001"
					   placeholder="Latitude">
			</div>

			<div class="col-5">
				<input id="longitude" type="number" name="longitude" class="form-control"
					   oninput="updateMap()"
					   min="-180" max="180"
					   step="0.0001"
					   placeholder="Longitude">
			</div>
		</div>

		<div class="row mb-4">
			<div id="map" class="col-10 offset-2 shadow-sm rounded" onload="initMap();" style="height: 300px"></div>
		</div>

		<div class="row mb-4 align-items-center">
			<div class="col-2">{{ __('Country') }}<span class="text-danger">*</span></div>

			<div class="col-10">
				<select id="country" class="form-select" name="country" required>
				    <option disabled selected>{{ __('Choose country') }}</option>

				    @foreach ($countries as $country)
				    	<option value="{{ $country->name }}">{{ $country->name }}</option>
				    @endforeach
				</select>
			</div>
		</div>

		<div class="row">
			<div class="col-2">
				<a href="#">
					<button type="button" class="btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">{{ __('Back') }}</button>
				</a>
			</div>

			<div class="col-2">
				<input type="submit" name="submit" value="Save" class="btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;"/>
			</div>
		</div>
	</form>
</div>
@endsection