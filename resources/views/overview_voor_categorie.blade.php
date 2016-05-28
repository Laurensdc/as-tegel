@extends('master')

@section('content')

<div class="breadcrumb">
	<p><a href="{{ route('producten') }}">Producten</a> &raquo; {{ $hoofdcategorie }}</p>
</div>

<div class="catmenu_container">
	@include('catmenu', array('catmenu_active' => $catmenu_active, 'allcategories' => $allcategories, 'allsubcategories' => $allsubcategories))
</div>

<div class="categorie_overzicht">
	<h2>{{ $hoofdcategorie }}</h2>


	@foreach($subcategories as $cat) 
	<article class="categorie_overzicht_article">
		<img src="{{ asset($cat->coverfoto) }}" alt="{{ $cat->naam }}"/>
		<div class="producten_caption">
			<a href="{{ route('producten') }}/{{ $hoofdcategorielink }}/{{ $cat->subcat_linknaam }}">{{ $cat->naam }}</a>
		</div>		
	</article>
	@endforeach

{{-- 
	<!-- Original html
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
	-->
	--}}
</div>
	

@endsection

@section('javascript')
<script src="{{ asset('bower_components/jquery/dist//jquery.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

@endsection