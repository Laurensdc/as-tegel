@extends('master')


@section('content')

<div class="breadcrumb">
	<p><a href="{{ route('producten') }}">Producten</a> &raquo; Overzicht categorieën</p>
</div>

<div class="catmenu_container">
	@include('catmenu', array('catmenu_active' => $catmenu_active, 'allcategories' => $allcategories, 'allsubcategories' => $allsubcategories))
</div>

<div class="categorie_overzicht">
	<h2>Overzicht categorieën</h2>

	@foreach($categories as $cat)
	<article class="categorie_overzicht_article">
		<img src="{{ asset($cat->coverfoto) }}" alt="{{ $cat->naam }}"/>
		<div class="producten_caption">
			<a href="{{ route('producten') }}/{{ $cat->cat_linknaam }}">{{ $cat->naam }}</a>
		</div>		
	</article>
	@endforeach

</div>

@endsection

@section('javascript')
<script src="bower_components/jquery/dist//jquery.min.js"></script>
<script src="js/scripts.js"></script>

@endsection