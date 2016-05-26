@extends('master')

@section('content')

<div class="breadcrumb">
	<p><a href="{{ route('producten') }}">Producten</a> &raquo; {{ $catdisplayname }}</p>
</div>

<div class="catmenu_container">
	@include('catmenu', array('categorie' => $categorie))
</div>

<div class="categorie_overzicht">
	<h2>{{ $catdisplayname }}</h2>
	<article class="producten_vietnamees_getrommeld">
		<div class="producten_caption">
			<a href="{{ route('producten') }}/{{ $categorie }}/getrommeld">Getrommeld</a>
		</div>		
	</article>
	<article class="producten_vietnamees_geschuurd_gezaagd">
		<div class="producten_caption">
			<a href="#">Geschuurd Gezaagd</a>
		</div>		
	</article>
</div>
	

@endsection

@section('javascript')
<script src="{{ asset('bower_components/jquery/dist//jquery.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

@endsection