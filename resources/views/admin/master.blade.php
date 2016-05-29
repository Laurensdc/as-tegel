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
					<div class="toolbar_languages"><a href="{{ route('home') }}">Terug naar site</a> - <a href="{{ route('admin') }}">Admin Panel</a></div>
				</div>
				<div class="toolbar_right">
					<div class="toolbar_contact">
						<a @if($admin_menu=='gebruikers') class="admin_active" @endif href="{{ route('admin_useroverview') }}">Gebruikers</a>
					</div>
					<div class="toolbar_contact">
						<a @if($admin_menu=='producten') class="admin_active" @endif href="{{ route('admin_productoverview') }}">Producten</a>
					</div>
					<div class="toolbar_contact">
						<a @if($admin_menu=='categorie') class="admin_active" @endif href="{{ route('admin_categorieoverview') }}">Categorie</a>
					</div>
					<div class="toolbar_contact">
						<a @if($admin_menu=='subcategorie') class="admin_active" @endif href="{{ route('admin_subcategorieoverview') }}">Subcategorie</a>
					</div>
					<div class="toolbar_contact">
						<a @if($admin_menu=='fotoupload') class="admin_active" @endif href="{{ route('admin') }}/fotoupload">Foto Uploaden</a>
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

		<div class="admin_hugecontainer admin_container">
			@yield('hugecontent')
		</div>

		@yield('javascript')
	</body>
</html>
