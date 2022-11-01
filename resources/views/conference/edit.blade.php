@extends('layouts.app')

@section('content')
<div class="container mb-5 wrapper flex-grow-1">
	<div class="row border-bottom mb-5 pb-4">
		<div class="col-9" style="font-size: 32px;">{{ __('Edit conference') }}</div>
	</div>

	<form action="{{ route('conferences.update', $conference->id) }}" method="POST" class="mb-4">
		@csrf
		@method('patch')

		<div class="row mb-4 align-items-center">
			<div class="col-2">{{ __('Title') }}<span class="text-danger">*</span></div>

			<div class="col-10">
				<input id="title" type="text" name="title" class="form-control" value="{{ $conference->title }}" required>
			</div>
		</div>

		<div class="row mb-4 align-items-center">
			<div class="col-2">{{ __('When') }}<span class="text-danger">*</span></div>

			<div class="col-5">
				<input id="date" type="date" name="date" class="form-control" value="{{ date('Y-m-d', strtotime($conference->date_time_event)) }}" min="{{ date('Y-m-d') }}" required>
			</div>

			<div class="col-5">
				<input id="time" type="time" name="time" value="{{ date('H:i', strtotime($conference->date_time_event)) }}" class="form-control" required>
			</div>
		</div>

		<div class="row mb-3 align-items-center">
			<div class="col-2">{{ __('Address') }}</div>

			<div class="col-5">
				<input id="latitude" type="number" name="latitude" oninput="updateMap()" class="form-control"
						value="{{ $conference->latitude == NULL ? '' : $conference->latitude }}"
						min="-85" max="85"
						step="0.0001"
						placeholder="Latitude">
			</div>

			<div class="col-5">
				<input id="longitude" type="number" name="longitude" class="form-control" oninput="updateMap()"
						value="{{ $conference->longitude == NULL ? '' : $conference->longitude }}"
						min="-180" max="180"
						step="0.0001"
						placeholder="Longitude">
			</div>
		</div>

		<div class="row mb-4">
			<div id="map" class="col-10 offset-2 shadow-sm rounded" style="height: 300px"></div>

			<script type="text/javascript">
				var input_lat = document.getElementById('latitude');
				var input_lng = document.getElementById('longitude');

				var map, marker;
				var latitude, longitude;

				function initMap() {
					marker = new google.maps.Marker({
						draggable: true
					});

					marker.addListener("dragend", () => {
					    input_lat.value = marker.getPosition().lat().toPrecision(6);
			    		input_lng.value = marker.getPosition().lng().toPrecision(6);
					});

					<?php
						if ($conference->latitude == NULL || $conference->longitude == NULL) {
							?>
								pos = { lat: 50.450087, lng: 30.524010 }
								opt = { center: pos, zoom: 12 }
							<?php
						}
						else {
							?>
								pos = { lat: <?= $conference->latitude ?>, 
										lng: <?= $conference->longitude ?> }
								opt = { center: pos, zoom: 15 }

								marker.setPosition(pos);
							<?php
						}
					?>

					map = new google.maps.Map(document.getElementById("map"), opt);
					marker.setMap(map);

					map.addListener("click", (e) => {
						marker.setMap(map);

						marker.setPosition(e.latLng);
						map.panTo(e.latLng);

					    input_lat.value = marker.getPosition().lat().toPrecision(6);
			    		input_lng.value = marker.getPosition().lng().toPrecision(6);
					});
				}

				function updateMap() {
					if (input_lat.value == '' || input_lng.value == '') {
						marker.setMap(null);
					}
					else {
						marker.setMap(map);

						latitude = input_lat.value;
						longitude = input_lng.value;

						latitude = (latitude && +latitude) || 50.450087;
						longitude = (longitude && +longitude) || 30.524010;

						map.setCenter({
					        lat: latitude,
					        lng: longitude
					    });

					    marker.setPosition({lat: latitude, lng: longitude});
					}
				}
			</script>
		</div>

		<div class="row mb-4 align-items-center">
			<div class="col-2">{{ __('Country') }}<span class="text-danger">*</span></div>

			<div class="col-10">
				<select id="country" class="form-select" name="country" required>
				    <option value="" disabled selected>{{ __('Choose country') }}</option>
				    <option value="{{ $conference->country }}" selected>{{ $conference->country }}</option>

				    @foreach ($countries as $country)
				    	<option value="{{ $country->name }}">{{ $country->name }}</option>
				    @endforeach
				</select>
			</div>
		</div>

		<div class="row">
			<div class="col-2">
				<button type="button" class="btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">{{ __('Back') }}</button>
			</div>

			<div class="col-2">
				<input type="submit" name="submit" value="Save" class="btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;"/>
			</div>
		</div>
	</form>
</div>
@endsection