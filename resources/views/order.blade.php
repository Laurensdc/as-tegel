<h2>Uw bestelling</h2> 

@for ($i = 0; $i < count($producten); $i++)
    Naam: {{ $producten[$i]->naam }} - besteld: {{ $vierkantemeters[$i] }}m - prijs berekend: {{ $prijzen[$i] }}<br>



@endfor

Totale prijs: {{ $totaleprijs }}

<a href="{{ route('placeorder') }}">Plaats bestelling</a>

<a href="{{ route('producten') }}">Producten</a>
<a href="{{ route('deleteorder') }}">Order verwijderen</a>