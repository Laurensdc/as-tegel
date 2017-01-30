@extends('admin.master', ['admin_menu' => ''])

@section('content')
	<div class="admin_smallcol">
		@if(Auth::check())
			<h2>Welkom!</h2>
			<p>Succesvol ingelogd als {{ Auth::user()->role }}</p>
		@endif

		<br>

		<p>
			<a class="btn" href="{{ route('admin_useroverview') }}">Gebruikers</a>

			<a class="btn" href="{{ route('admin_productoverview') }}">Producten</a>

			<a class="btn" href="{{ route('admin_categorieoverview') }}">Categorie</a>

			<a class="btn" href="{{ route('admin_subcategorieoverview') }}">Subcategorie</a>

			<a class="btn" href="{{ route('admin') }}/fotoupload">Foto Uploaden</a>

            <a class="btn" href="{{ route('admin') }}/motd">MOTD (Bericht home)</a>
		</p>
	</div>
@endsection
