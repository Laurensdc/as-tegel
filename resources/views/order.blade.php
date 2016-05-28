<h2>Uw bestelling</h2> 

@if(isset($producten))

	@for ($i = 0; $i < count($producten); $i++)
	    Naam: {{ $producten[$i]->naam }} - besteld: {{ $vierkantemeters[$i] }}m - prijs berekend: {{ $prijzen[$i] }}<br>



	@endfor

	Totale prijs: {{ $totaleprijs }}

@else
Nog geen producten aan bestelling toegevoegd.

@endif

<br>

<a href="{{ route('placeorder') }}">Plaats bestelling</a>
<br>

<a href="{{ route('producten') }}">Producten</a>
<br>

<a href="{{ route('deleteorder') }}">Order verwijderen</a>
<br>
