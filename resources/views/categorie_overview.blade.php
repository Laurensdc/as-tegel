@extends('master')


@section('content')

<div class="breadcrumb">
	<p><a href="{{ route('producten') }}">Producten</a> &raquo; Overzicht</p>
</div>

<div class="catmenu_container">
	@include('catmenu', array('categorie' => $categorie))
</div>

<div class="categorie_overzicht">
	<article class="producten_vietnamees">
		<div class="producten_caption">
			<a href="{{ route('producten') }}/vietnamees">Vietnamese Natuursteen</a>
		</div>		
	</article>
	<article class="producten_indisch">
		<div class="producten_caption">
			<a href="#">Indische Natuursteen</a>
		</div>		
	</article>
	<article class="producten_chinees">
		<div class="producten_caption">
			<a href="#">Chinese Natuursteen</a>
		</div>		
	</article>
	<article class="producten_vietnamees">
		<div class="producten_caption">
			<a href="#">Vietnamese Natuursteen</a>
		</div>		
	</article>
</div>

@endsection

@section('javascript')
<script src="bower_components/jquery/dist//jquery.min.js"></script>
<script src="js/scripts.js"></script>

@endsection