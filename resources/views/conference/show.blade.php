@extends('layouts.app')

@section('content')
<div class="container mb-5 wrapper flex-grow-1">
	<div class="mb-4">
		<div class="row px-5 pb-4 mb-4 border-bottom">
			<div class="col-3 font-weight-bold text-muted">{{__('Title')}}</div>
			<div class="col-9">{{ $conference->title }}</div>
		</div>

		<div class="row px-5 pb-4 mb-4 border-bottom">
			<div class="col-3 font-weight-bold text-muted">{{__('Date')}}</div>
			<div class="col-9">{{ date('Y-m-d, l', strtotime($conference->date_time_event)) }}</div>
		</div>

		<div class="row px-5 pb-4 mb-4 border-bottom">
			<div class="col-3 font-weight-bold text-muted">{{__('Time')}}</div>
			<div class="col-9">{{ date('H:i', strtotime($conference->date_time_event)) }}</div>
		</div>

		@if ($formatted_address != NULL)
		<div class="row px-5 pb-4 mb-4 border-bottom">
			<div class="col-3 font-weight-bold text-muted">{{__('Address')}}</div>

			<div class="col-9">
				<p class="mb-4">
					{{ $formatted_address }}
				</p>

				<div id="map" class="shadow-sm rounded" style="height: 300px"></div>
			</div>
		</div>
		@endif

		<div class="row px-5 pb-4 mb-4 border-bottom">
			<div class="col-3 font-weight-bold text-muted">{{__('Country')}}</div>
			<div class="col-9">{{ $conference->country }}</div>
		</div>
	</div>



	<div class="row">
		<div class="col-2">
			<a href="{{ url()->previous() }}">
				<button type="button" class="btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">{{__('Back')}}</button>
			</a>
		</div>

		@if(auth()->user()->type != 'admin')
			@if ($conference->users->find(auth()->user()->id))
				<div class="col-2">
					<form action="{{ route('users.cancel', auth()->user()->id) }}" method="POST">
						@csrf

						<input type="text" value="{{$conference->id}}" name="conference_id" class="d-none">
						<input type="submit" value="Сancel participation" class="btn btn-danger p-2 rounded shadow-sm w-100" style="font-size: 14px;">
					</form>
				</div>

				<div class="col-2 d-flex justify-content-evenly ms-auto"> 
					<a href="{{ config('share.facebook.url', 'https://www.facebook.com/') }}{{ urlencode(route('conferences.show', $conference->id)) }}" title="Share the conference in Facebook">
						<svg class="bi bi-facebook text-primary" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
							<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
						</svg>
					</a>
					
					<a href="{{ config('share.twitter.url', 'https://www.twitter.com/') }}{{urlencode(route('conferences.show', $conference->id))}}" title="Share the conference in Twitter">
						<svg class="bi bi-twitter text-primary" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
							<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
						</svg>
					</a>
				</div>
			@else
				<div class="col-2">
					<form action="{{ route('users.join', auth()->user()->id) }}" method="POST">
						@csrf

						<input type="text" value="{{$conference->id}}" name="conference_id" class="d-none">
						<input type="submit" value="Join" class="btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">
					</form>
				</div>
			@endif
		@else
			<div class="col-2">
				<form action="{{ route('conferences.destroy', $conference->id) }}" method="POST">
					@csrf
					@method('delete')

					<input type="submit" value="Delete" class="btn btn-danger p-2 rounded shadow-sm w-100" style="font-size: 14px;">
				</form>
			</div>
		@endif
	</div>
</div>

<script type="text/javascript">
	function initMap() {
		var pos = { lat: <?= $conference->latitude ?>, 
				lng: <?= $conference->longitude ?> }

		var opt = { center: pos, zoom: 15 }

		var marker = new google.maps.Marker({
			position: pos
		});

		var map = new google.maps.Map(document.getElementById("map"), opt);
		marker.setMap(map);
	}
</script>

@endsection