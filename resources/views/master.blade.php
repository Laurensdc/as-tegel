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
			<div class="toolbar_content">
				<div class="toolbar_left">
					<div class="toolbar_languages"><a href="#" class="active">NL</a> - <a href="#">FR</a> - <a href="#">EN</a></div>
				</div>
				<div class="toolbar_right">
					<div class="toolbar_contact"><a href="tel:0470053862">0470/05.38.62</a></div>
					<div class="toolbar_contact"><a href="mailto:contact@as-tegel.be">contact@as-tegel.be</a></div>
					@if(Auth::check())
						<div class="toolbar_account">Welkom, {{ Auth::user()->firstname }} &ndash;
							<a href="{{ route('home') }}/logout">Log uit</a>
						</div>
					@else
						<div class="toolbar_account"><a href="{{ route('home') }}/login">Log in</a></div>
					@endif
				</div>
			</div>
		</div>

		<header>
			<ul>
				<li><a href="{{ route('home') }}"><img src="{{ asset('assets/logo.png') }}" alt="Logo"/></a></li>
				<li><a href="{{ route('home') }}" @if($headermenu_active === 'home') class="active" @endif>Home</a></li>
				<li><a href="{{ route('producten') }}" @if($headermenu_active === 'producten') class="active" @endif>Producten</a></li>				
				<li><a href="#" @if($headermenu_active === 'contact') class="active" @endif>Contact</a></li>			
			</ul>
			<div class="header_bestelling">
				<p><a href="#">Bestelling (0 items)</a></p>
			</div>
		</header>

		<div class="homecontainer">
			@yield('homecontent')
		</div>

		<div class="container">
			@yield('content')
		</div>

		@yield('javascript')
		
	</body>
</html>
