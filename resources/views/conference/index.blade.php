@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row border-bottom mb-4 pb-4 align-items-center">
		<div class="col-9" style="font-size: 32px;">{{ __('Conferences') }}</div>

		@if (auth()->check())
			@if(auth()->user()->type == 'admin')
				<div class="col-3">
					<a href="{{ route('conferences.create') }}">
						<button type="button" class="btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">{{ __('Create a conference') }}</button>
					</a>
				</div>
			@endif
		@endif
	</div>

	<div>
		{{ $conferences->links() }}
	</div>

	<div>
		@foreach ($conferences as $conference)
			<div class="conference shadow p-4 px-5 mb-4 rounded">
				<div class="row align-items-center">
					<div class="col-8 text-left">
						<a href="{{ route('conferences.show', $conference->id) }}" class="conference_title mb-3 text-decoration-none text-body d-block" style="font-size: 20px;">
							{{ $conference->title }}
						</a>

						<p class="conference_date m-0" style="font-size: 16px;"> 
                            {{__('Date: ')}} {{ date('Y-m-d (D)', strtotime($conference->date_time_event)) }}
						</p>

						<p class="conference_date mb-3" style="font-size: 16px;"> 
                            {{__('Time: ')}} {{ date('H:i', strtotime($conference->date_time_event)) }}
						</p>

						<p class="conference_address text-muted m-0" style="font-size: 14px;">
                            {{ $conference->country }}
						</p>
					</div>

					@if (auth()->check())
						@if (auth()->user()->type != 'admin')
							@if ($conference->users->find(auth()->user()->id))
								<div class="col-2">
									<form action="{{ route('users.cancel', auth()->user()->id) }}" method="POST">
										@csrf

										<input type="text" value="{{$conference->id}}" name="conference_id" class="d-none">
										<input type="submit" value="Сancel participation" class="btn btn-danger p-2 rounded shadow-sm w-100" style="font-size: 14px;">
									</form>
								</div>

								<div class="col-2 d-flex justify-content-evenly"> 
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

								<div class="col-2">
									<a href="{{ route('conferences.show', $conference->id) }}">
										<button type="button" class="conference_btn btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">
											{{ __('Details') }}
										</button>
									</a>
								</div>
							@endif
						@else
							<div class="col-2">
								<a href="{{ route('conferences.edit', $conference->id) }}">
									<button type="button" class="conference_btn btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">
										{{ __('Edit') }}
									</button>
								</a>
							</div>

							<div class="col-2">
								<form action="{{ route('conferences.destroy', $conference->id) }}" method="POST">
									@csrf
									@method('delete')

									<input type="submit" value="Delete" class="btn btn-danger p-2 rounded shadow-sm w-100" style="font-size: 14px;">
								</form>
							</div>
						@endif
					@else
						<div class="col-2">
						<a href="{{ route('register') }}">
								<button type="button" class="conference_btn btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">
									{{ __('Join') }}
								</button>
							</a>
						</div>

						<div class="col-2">
							<a href="{{ route('register') }}">
								<button type="button" class="conference_btn btn btn-primary p-2 rounded shadow-sm w-100" style="font-size: 14px;">
									{{ __('Details') }}
								</button>
							</a>
						</div>
					@endif
				</div>				
			</div>
		@endforeach
	</div>

	<div>
		{{ $conferences->links() }}
	</div>
</div>
@endsection
