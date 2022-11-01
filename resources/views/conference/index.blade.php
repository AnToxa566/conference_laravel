@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row border-bottom mb-4 pb-4">
		<div class="col-9" style="font-size: 32px;">{{ __('Conferences') }}</div>

		<div class="col-3">
			<a href="{{ route('conferences.create') }}">
				<button type="button" class="btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">{{ __('Create a conference') }}</button>
			</a>
		</div>
	</div>

	<div>
		@foreach ($conferences as $conference)
			<div class="conference shadow p-4 px-5 mb-4 rounded">
				<div class="row align-items-center">
					<div class="col-8 text-left">
						<a href="{{ route('conferences.show', $conference->id) }}" class="conference_title mb-3 text-decoration-none text-body d-block" style="font-size: 20px;">
							{{ $conference->title }}
						</a>

						<p class="conference_date mb-3" style="font-size: 18px;"> 
                            {{ date('H:i Y-m-d', strtotime($conference->date_time_event)) }}
						</p>

						<p class="conference_address text-muted">
                            {{ $conference->country }}
						</p>
					</div>

					<div class="col-2">
						<a href="#">
							<button type="button" class="conference_btn btn d-none btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">
                                {{ __('Join') }}
							</button>
						</a>
					</div>
					
					<div class="col-2">
						<a href="#" data-toggle="modal">
							<button type="button" class="conference_btn btn d-none btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">
                                {{ __('Details') }}
							</button>
						</a>  
					</div>
				</div>				
			</div>
		@endforeach
	</div>
</div>
@endsection
