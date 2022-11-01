@extends('layouts.app')

@section('content')
<div class="container mb-5 wrapper flex-grow-1">
	<div class="mb-4">
		<div class="row px-5 pb-4 mb-4 border-bottom">
			<div class="col-3 font-weight-bold text-muted">{{__('Title')}}</div>
			<div class="col-9">{{ $conference->title }}</div>
		</div>

		<div class="row px-5 pb-4 mb-4 border-bottom">
			<div class="col-3 font-weight-bold text-muted">{{__('Time')}}</div>
			<div class="col-9">{{ date('H:i Y-m-d', strtotime($conference->date_time_event)) }}</div>
		</div>

		<div class="row px-5 pb-4 mb-4 border-bottom">
			<div class="col-3 font-weight-bold text-muted">{{__('Address')}}</div>

			<div class="col-9">
				<p class="mb-4">
					@if ($conference->latitude == NULL || $conference->longitude == NULL)
						Адрес не установлен
					@else
						{{ "lat: " . $conference->latitude . ", long: " . $conference->longitude }}
					@endif
				</p>

				<div id="map" class="shadow-sm rounded" style="height: 300px"></div>

				<script type="text/javascript">
					var pos, opt, map, marker;

					function initMap() {
						<?php 
							if ($conference->latitude == NULL || $conference->longitude == NULL) {
								?>
									pos = { lat: 50.450087, lng: 30.524010 }
									opt = { center: pos, zoom: 12, }
								<?php
							}
							else {
								?>
									pos = { lat: <?= $conference->latitude ?>, 
											lng: <?= $conference->longitude ?> }

									opt = { center: pos, zoom: 15 }

									marker = new google.maps.Marker({
										position: pos
									});
								<?php
							}
						?>

						map = new google.maps.Map(document.getElementById("map"), opt);
						marker != null ? marker.setMap(map) : marker = null;
					}
				</script>
			</div>
		</div>

		<div class="row px-5 pb-4 mb-4 border-bottom">
			<div class="col-3 font-weight-bold text-muted">{{__('Country')}}</div>
			<div class="col-9">{{ $conference->country }}</div>
		</div>
	</div>



	<div class="row">
		<div class="col-2">
			<a href="#">
				<button type="button" class="btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">{{__('Back')}}</button>
			</a>
		</div>

		<div class="col-2">
			<a href="#">
				<button type="button" class="btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">{{__('Join')}}</button>
			</a>
		</div>

		<div class="col-2">
			<form action="{{ route('conferences.destroy', $conference->id) }}" method="POST">
				@csrf
				@method('delete')

				<input type="submit" value="Delete" class="btn btn-danger p-2 rounded shadow-sm w-100" style="font-size: 14px;">
			</form>
		</div>
	</div>
</div>
@endsection