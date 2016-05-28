<!DOCTYPE html>
<html>
	<head>
		<title>Administrator Panel &ndash; As-Tegel</title>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
		@yield('css')
	</head>
	<body>
		<div class="toolbar">
			<div class="toolbar_content">
				<div class="toolbar_left">
					<div class="toolbar_languages"><a href="{{ route('home') }}">Terug naar site</a></div>
				</div>
				<div class="toolbar_right">
					<div class="toolbar_contact">
						<a href="{{ route('admin_useroverview') }}">Overzicht gebruikers</a>
					</div>
	
					@if(Auth::check())
						<div class="toolbar_account">Ingelogd als {{ Auth::user()->firstname }} ({{ Auth::user()->role }}) &ndash;
							<a href="{{ route('home') }}/logout">Log uit</a>
						</div>
					@endif
				</div>
			</div>
		</div>

		<div class="container admin_container">
			@yield('content')
		</div>

		@yield('javascript')
	</body>
</html>
