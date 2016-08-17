@extends('master', ['title' => 'Bestelling', 'headermenu_active' => 'producten'])

@section('content')

<div class="ordercontent">
	<h2>Uw bestelling</h2> 

	@if(isset($producten))

		@for ($i = 0; $i < count($producten); $i++)
		    <p><strong>{{ $producten[$i]->naam }}</strong></p>
            <p>{{ $producten[$i]->afmetingen }}</p>
		    <p>{{ $vierkantemeters[$i] }}m&sup2;
		    @if(Auth::check())
			    aan &euro; 
			    	@if(Auth::user()->role=='handelaar') {{ $producten[$i]->prijs_handelaar }} 
			    	@else {{ $producten[$i]->prijs_particulier }} 
			    	@endif /m&sup2;
		    @endif
		    </p>
		    <p>&euro;{{ $prijzen[$i] }}</p>
            <p><a href="{{ route('deleteorder') }}/{{ $sessionIndexes[$i] }}">Verwijder van bestelling</a></p>
		    <br>
		@endfor

		<p>Totale prijs: &euro;{{ $totaleprijs }}</p>
		<br>
        <p>{{ trans('cont.prijzen_afgehaald') }}</p>
        <br>
        
		<p>
			<a href="{{ route('placeorder') }}" class="btn">{{ trans('cont.orderit') }}</a> <a href="{{ route('deleteorder') }}" class="boringlink">Alle items verwijderen</a>
		</p>

	@else
	<p>Nog geen producten aan bestelling toegevoegd.</p>

	@endif

	<br>

	<p>
		<a class="boringlink" href="{{ route('producten') }}">&larrhk; Terug naar producten</a>
	</p>


</div>
@endsection