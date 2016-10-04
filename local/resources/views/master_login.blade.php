<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="Natuursteen, keramiek en veel meer."> <!-- site description goes here -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="{{ asset('assets/favicon.gif') }}"/>

		<title>{{ $title }} &ndash; As-Tegel</title>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
		@yield('css')
	</head>
	<body>
		<div class="toolbar">
			<div class="toolbar_content_small">
				<div class="toolbar_left">
					<a href="{{ route('home') }}">{{ trans('auth.backtosite') }}</a>
				</div>
				<div class="toolbar_right">
					@if(Auth::check())
						<div class="toolbar_account">Welkom, {{ Auth::user()->firstname }} &ndash;
							<a href="{{ route('home') }}/logout">Log uit</a>
						</div>
					@else
						<div class="toolbar_account"><a href="{{ route('home') }}/login">{{ trans('cont.login') }}</a> - <a href="{{ route('home') }}/register">{{ trans('cont.register') }}</a></div>
					@endif
				</div>
			</div>
		</div>

		<div class="container">
			@yield('content')
		</div>

		@yield('javascript')
		
	</body>
</html>
