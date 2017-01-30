<!DOCTYPE html>
<html>
	<head>
		<title>Administrator Panel &ndash; As-Tegel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
		@yield('css')
	</head>
	<body>
		<div class="toolbar toolbar_admin">
			<div class="toolbar_content">
				<div class="toolbar_left">
					<div class="toolbar_languages"><a href="{{ route('home') }}">Terug naar site</a> - <a href="{{ route('admin') }}">Admin Panel</a></div>
				</div>
				<div class="toolbar_right">
					<div class="toolbar_admin_item">
						<a @if($admin_menu=='gebruikers') class="admin_active" @endif href="{{ route('admin_useroverview') }}">
                            <span class="icon-user"></span> Gebruikers
                        </a>
					</div>
					<div class="toolbar_admin_item">
						<a @if($admin_menu=='categorie') class="admin_active" @endif href="{{ route('admin_categorieoverview') }}">
                            &#10022; Categorie
                        </a>
					</div>
					<div class="toolbar_admin_item">
						<a @if($admin_menu=='subcategorie') class="admin_active" @endif href="{{ route('admin_subcategorieoverview') }}">
                            &#10039; Subcategorie
                        </a>
					</div>
                    <div class="toolbar_admin_item">
						<a @if($admin_menu=='producten') class="admin_active" @endif href="{{ route('admin_productoverview') }}">
                            <span class="icon-basket"></span>Producten
                        </a>
					</div>
					<div class="toolbar_admin_item">
						<a @if($admin_menu=='fotoupload') class="admin_active" @endif href="{{ route('admin') }}/fotoupload">
                            <span class="icon-upload"></span> Foto Uploaden
                        </a>
					</div>
                    <div class="toolbar_admin_item">
                        <a @if($admin_menu=='motd') class="admin_active" @endif href="{{ route('admin') }}/motd">
                            MOTD
                        </a>
                    </div>
					@if(Auth::check())
						<div class="toolbar_account">Ingelogd als {{ str_limit(Auth::user()->firstname, $limit = 10, $end = '...') }} ({{ Auth::user()->role }}) &ndash;
							<a href="{{ route('home') }}/logout">Log uit</a>
						</div>
					@endif
				</div>
			</div>
		</div>

		<div class="container admin_container">
			@yield('content')
		</div>

		<div class="admin_hugecontainer admin_container">
			@yield('hugecontent')
		</div>

		@yield('javascript')
	</body>
</html>
