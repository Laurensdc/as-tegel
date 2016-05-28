
@for ($i = 0; $i < count($producten); $i++)
    Naam: {{ $producten[$i]->naam }} - besteld: {{ $vierkantemeters[$i] }}m - prijs part: {{ $producten[$i]->prijs_particulier }} - prijs hand: {{ $producten[$i]->prijs_handelaar }} - prijs berekend: {{ $prijzen[$i] }}<br>



@endfor

{{--
ID: {{ $i[0] }} - M2: {{ $i[1] }}<br>

@foreach($producten as $p) 
	 {{ $p->naam }} -
	@foreach($items as $i) 
		@if($i[0] == $p->id) 
			{{ $i[1] }} m2 besteld.
		@endif				
	@endforeach 

	<br>
@endforeach
--}}
<a href="{{ route('producten') }}">Producten</a>
<a href="{{ route('deleteorder') }}">Order verwijderen</a>