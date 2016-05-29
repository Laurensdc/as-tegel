@extends('master')

@section('css')
<link rel="stylesheet" href="{{ asset('bower_components/lightbox2/dist/css/lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('bower_components/toastr/toastr.css') }}"/>

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
		
		@foreach($producten as $i=>$p)
			<article>	
				<a href="{{ asset($p->coverfoto) }}" data-lightbox="{{ $p->naam }}" data-title="{{ $p->naam }}">
					<img src="{{ asset($p->coverfoto) }}"/>
				</a>
				
				<h1>{{ $p->naam }}</h1>
				<ul>
					<li>Afmetingen: {{ $p->afmetingen }}</li>
					@if(Auth::check())

						@if(Auth::user()->role == 'handelaar')
							<li>Prijs: &euro;{{ $p->prijs_handelaar }}/m&sup2;</li>
						@else
							<li>Prijs: &euro;{{ $p->prijs_particulier }}/m&sup2;</li>
						@endif
					@else
						<li>Prijs: &euro;{{ $p->prijs_particulier }}/m&sup2;</li>
					@endif

				</ul>
				
				@if(isset($p->beschrijving))
					<p>{{ $p->beschrijving }}</p>
				@endif

				@if($p->invoorraad == false)
					<p class="txt_warning">Niet in voorraad</p>
				@else
					<form action="" method="post" name="form">
						{{ csrf_field() }}
						<input type="hidden" value="{{ $p->id }}" name="prod_id">
						<p>Voeg <input type="number" name="vierkantemeter" min="1" max="1000" value="20" required/>m&sup2; toe aan mijn bestelling.</p> 
						<p><input type="submit" clas="btn btn_cta" value="Bestel"/></p>
					</form>
				@endif
			</article>

			@if(($i+1)%3 == 0)
				<div class="clear"></div>
			@endif

		@endforeach

	@endif


</div>

@endsection

@section('javascript')
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

@if($showtoast)
	<script src="{{ asset('bower_components/toastr/toastr.min.js') }}"></script>
	<script>
		toastr.options = {
	  "newestOnTop": true,
	  "positionClass": "toast-top-right",
	  "timeOut": "4000",

	}
	</script>
	<script>toastr.success("Product toegevoegd aan uw bestelling");</script>
@endif

<script src="{{ asset('bower_components/lightbox2/dist/js/lightbox.min.js') }}"></script>

@endsection