<ul class="catmenu">
	<li class="catmenu_title">Categorieën</li>
	<li><a href="#">Toon alles</a></li>
	<li @if($categorie==='vietnamees') class="active" @endif><a href="#">Vietnamese natuursteen</a></li>
	<ul>
		<li><a href="{{ route('producten') }}/vietnamees/getrommeld">Getrommeld</a></li>
		<li><a href="#">Geschuurd Gezaagd</a></li>
	</ul>
	<li @if($categorie==='indisch') class="active" @endif><a href="#">Indische natuursteen</a></li>
	<ul>
		<li><a href="#">Chandra</a></li>
		<li><a href="#">Candela</a></li>
	</ul>
	<li @if($categorie==='chinees') class="active" @endif><a href="#">Chinese natuursteen</a></li>
	<ul>
		<li><a href="#">Prod 1</a></li>
		<li>Prod 2</li>
	</ul>
</ul>