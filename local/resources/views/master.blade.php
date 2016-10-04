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
        <div class="contentwrapper">
            <div class="toolbar">
                <div class="toolbar_content">
                    <div class="toolbar_left">
                        <div class="toolbar_languages">
                            <a href="{{ route('home') }}/lang/nl" @if(Cookie::get('ln') == 'nl') class="active" @endif>NL</a> - 
                            <a href="{{ route('home') }}/lang/fr" @if(Cookie::get('ln') == 'fr') class="active" @endif>FR</a> -
                            <a href="{{ route('home') }}/lang/en" @if(Cookie::get('ln') == 'en') class="active" @endif>EN</a></div>
                    </div>
                    <div class="toolbar_right">
                        <div class="toolbar_contact"><span class="icon-phone"></span> 0475/27.37.17</div>
                        <div class="toolbar_contact"><a href="mailto:info@as-tegel.be"><span class="icon-mail"></span> info@as-tegel.be</a></div>
                        @if(Auth::check())
                            <div class="toolbar_account"><span class="icon-user"></span> {{ str_limit(Auth::user()->firstname, $limit = 20, $end = '...') }} ({{ Auth::user()->role }}) &ndash;
                                <a href="{{ route('home') }}/logout">{{ trans('cont.logout') }}</a>
                            </div>
                        @else
                            <div class="toolbar_account"><span class="icon-user"></span> <a href="{{ route('home') }}/login">{{ trans('cont.login') }}</a> - <a href="{{ route('home') }}/register">{{ trans('cont.register') }}</a></div>
                        @endif
                    </div>
                </div>
            </div>

            <header>
                <ul>
                    <li><a href="{{ route('home') }}"  class="logo"><img src="{{ asset('assets/logo.png') }}" alt="Logo"/></a></li>
                    <li><a href="{{ route('home') }}" @if($headermenu_active === 'home') class="active" @endif>Home</a></li>
                    <li><a href="{{ route('producten') }}" @if($headermenu_active === 'producten') class="active" @endif>{{ trans('cont.products') }}</a></li>				
                    <li><a href="{{ route('contact') }}" @if($headermenu_active === 'contact') class="active" @endif>Contact</a></li>			
                </ul>
                <div class="header_bestelling">
                    <p> 
                        <a href="{{ route('order') }}">
                            <!--<img src="{{ asset('assets/icon-order.png') }}" class="order-icon" alt="Order icon"/>-->
                            <span class="icon-basket"></span> {{ trans('cont.bestelling') }} ({{ count(Session::get('orderitems')) }} items)
                        </a>
                    </p>
                </div>
            </header>

            <div class="homecontainer">
                @yield('homecontent')
            </div>

            <div class="container">
                @yield('content')
            </div>

            <div class="push"></div>
        </div>

        <footer>
            <div class="footercontent">
                <div class="footercol">
                    <p><a href="{{ route('prijslijst') }}" target="_blank"><span class="icon-download"></span> {{ trans('cont.prijslijst') }}</a></p>
                    <p><a href="{{ route('ce') }}"><span class="icon-ok"></span> {{ trans('cont.ce_markering') }}</a></p>
                    <hr>
                    <p><a href="{{ route('contact') }}">Contact</a></p>
                    <p><a href="{{ route('about') }}">{{ trans('cont.about') }}</a></p>
                </div>
                <div class="footercol">&nbsp;</div>
                <div class="footercol">
                    <p><a href="mailto:info@as-tegel.be"><span class="icon-mail"></span> info@as-tegel.be</a></p>
                    <p><span class="icon-phone"></span> 0475/27.37.17</p>
                    <p><a href="https://www.facebook.com/As-Tegel-219524735099565/" target="_blank"><span class="icon-facebook-rect"></span> {{ trans('cont.volg_ons_op') }} Facebook</a></p>
                    <hr>
                    <p>{{ trans('cont.website_by') }} <a href="http://laurensdev.com" target="_blank">Laurens Development</a></p>
                </div>
            </div>

        </footer>
        
		@yield('javascript')

	</body>
</html>
