@extends('master')

@section('css')
<link rel="stylesheet" href="{{ asset('bower_components/lightbox2/dist/css/lightbox.min.css') }}"/>

@endsection

@section('content')

<div class="breadcrumb">
	<p>
		<a href="{{ route('producten') }}">Producten</a> 
		&raquo; <a href="{{ route('producten') }}/{{ $catmenu_active }}">{{ $hoofdcategorie }}</a> 
		&raquo; {{ $subcategorie }}
	</p>
</div>

<div class="catmenu_container">
	@include('catmenu', array('catmenu_active' => $catmenu_active, 'allcategories' => $allcategories, 'allsubcategories' => $allsubcategories))
</div>

<div class="producten_content">
	<h2>{{ $hoofdcategorie }} &ndash; {{ $subcategorie }}</h2>

	@if($producten->isEmpty())
		<p>Geen producten gevonden</p><br>
	@else
		
	@foreach($producten as $p)
		<article>	
			<a href="{{ asset($p->coverfoto) }}" data-lightbox="{{ $p->naam }}" data-title="{{ $p->naam }}">
				<img src="{{ asset($p->coverfoto) }}"/>
			</a>
			
			<h1>{{ $p->naam }}</h1>
			<ul>
				<li>Afmetingen: {{ $p->afmetingen }}</li>
				<li>Prijs: &euro;{{ $p->prijs_particulier }}/m&sup2;</li>
			</ul>
			
			@if(isset($p->beschrijving))
				<p>{{ $p->beschrijving }}</p>
			@endif

			@if($p->invoorraad == false)
				<p class="txt_warning">Niet in voorraad</p>
			@else
				<form action="" method="get" name="form">
					<p>Voeg <input type="number" name="vierkantemeter" min="1" max="1000" required/>m&sup2; toe aan mijn bestelling.</p> 
					<p><input type="submit" clas="btn btn_cta" value="Bestel"/></p>
				</form>
			@endif
		</article>

	@endforeach


	@endif

{{-- original html

	<article>	
		<a href="{{ asset('images/producten/vietnamees/getrommeld.jpg') }}" data-lightbox="image-1" data-title="Vietnamees Getrommeld"><img src="{{ asset('images/producten/vietnamees/getrommeld.jpg') }}"/></a>
		
		<h1>Vietnamees Getrommeld</h1>
		<ul>
			<li>Formaat: 20 x 20 x 2</li>
			<li>Prijs: &euro;22.34/m&sup2;</li>
		</ul>
		
		<p>Optionele beschrijving van het artikel</p>

		<p class="txt_warning">Niet in voorraad</p>

		<form  method="get" name="form">
			<p>Voeg <input type="number" name="vierkantemeter" min="1" max="1000" required/>m&sup2; toe aan mijn bestelling.</p> 
			<p><input type="submit" clas="btn btn_cta" value="Bestel"/></p>
		</form>
	</article>
--}}

</div>

@endsection

@section('javascript')
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('bower_components/lightbox2/dist/js/lightbox.min.js') }}"></script>

@endsection