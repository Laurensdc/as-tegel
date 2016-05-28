

<ul class="catmenu">
	<li class="catmenu_title">Categorieën</li>
	@foreach($allcategories as $cat)
		<li @if($catmenu_active === $cat->cat_linknaam) class="active" @endif >
			<a href="#" onclick="event.preventDefault()">{{ $cat->naam }}</a>
		</li>
		<ul>
		@foreach($allsubcategories as $subcat) 

			@if($subcat->categorie_id === $cat->id)

				<li><a href="{{ route('producten') }}/{{ $cat->cat_linknaam }}/{{ $subcat->subcat_linknaam }}">{{ $subcat->naam }}</a></li>
			@endif

		@endforeach
		</ul>
	@endforeach
</ul>


{{--
<ul class="catmenu">
	<li class="catmenu_title">Categorieën</li>
	<li><a href="#">Toon alles</a></li>
	<li @if($catmenu_active==='vietnamees') class="active" @endif><a href="#">Vietnamese natuursteen</a></li>
	<ul>
		<li><a href="{{ route('producten') }}/vietnamees/getrommeld">Getrommeld</a></li>
		<li><a href="#">Geschuurd Gezaagd</a></li>
	</ul>
	<li @if($catmenu_active==='indisch') class="active" @endif><a href="#">Indische natuursteen</a></li>
	<ul>
		<li><a href="#">Chandra</a></li>
		<li><a href="#">Candela</a></li>
	</ul>
	<li @if($catmenu_active==='chinees') class="active" @endif><a href="#">Chinese natuursteen</a></li>
	<ul>
		<li><a href="#">Prod 1</a></li>
		<li>Prod 2</li>
	</ul>
</ul>

--}}