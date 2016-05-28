
@for ($i = 0; $i < count($producten); $i++)
    {{ $producten[$i]->naam }} - {{ $vierkantemeters[$i] }}<br>
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