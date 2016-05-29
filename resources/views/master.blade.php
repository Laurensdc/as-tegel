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
					<div class="toolbar_languages">
						<a href="{{ route('home') }}/lang/nl" @if(Session::get('ln') == 'nl') class="active" @endif>NL</a> - 
						<a href="{{ route('home') }}/lang/fr" @if(Session::get('ln') == 'fr') class="active" @endif>FR</a> -
						<a href="{{ route('home') }}/lang/en" @if(Session::get('ln') == 'en') class="active" @endif>EN</a></div>
				</div>
				<div class="toolbar_right">
					<div class="toolbar_contact">0470/05.38.62</div>
					<div class="toolbar_contact"><a href="mailto:contact@as-tegel.be">contact@as-tegel.be</a></div>
					@if(Auth::check())
						<div class="toolbar_account">{{ trans('cont.welkom') }}, {{ Auth::user()->firstname }} ({{ Auth::user()->role }}) &ndash;
							<a href="{{ route('home') }}/logout">{{ trans('cont.logout') }}</a>
						</div>
					@else
						<div class="toolbar_account"><a href="{{ route('home') }}/login">{{ trans('cont.login') }}</a> - <a href="{{ route('home') }}/register">{{ trans('cont.register') }}</a></div>
					@endif
				</div>
			</div>
		</div>

		<header>
			<ul>
				<li><a href="{{ route('home') }}"><img src="{{ asset('assets/logo.png') }}" alt="Logo"/></a></li>
				<li><a href="{{ route('home') }}" @if($headermenu_active === 'home') class="active" @endif>Home</a></li>
				<li><a href="{{ route('producten') }}" @if($headermenu_active === 'producten') class="active" @endif>{{ trans('cont.products') }}</a></li>				
				<li><a href="{{ route('contact') }}" @if($headermenu_active === 'contact') class="active" @endif>Contact</a></li>			
			</ul>
			<div class="header_bestelling">
				<p><a href="{{ route('order') }}">{{ trans('cont.bestelling') }} ({{ count(Session::get('orderitems')) }} items)</a></p>
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
