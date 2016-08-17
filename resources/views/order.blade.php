@extends('master', ['title' => 'Bestelling', 'headermenu_active' => 'producten'])

@section('content')

<div class="ordercontent">
	<h2>Uw bestelling</h2> 

	@if(isset($producten))

		@for ($i = 0; $i < count($producten); $i++)
		    <p><strong>{{ $producten[$i]->naam }}</strong></p> 
            <div class="order_item">
                <p>{{ $producten[$i]->afmetingen }}</p>
                <p>{{ $vierkantemeters[$i] }}m&sup2;
                aan &euro;
                @if(Auth::check())		    
                    @if(Auth::user()->role=='handelaar') {{ $producten[$i]->prijs_handelaar }} 
                    @else {{ $producten[$i]->prijs_particulier }} 
                    @endif 		    
                @else {{ $producten[$i]->prijs_particulier }} 
                @endif     
                /m&sup2;
                </p>
                <p>&rarr; &euro;{{ $prijzen[$i] }}</p>
                <p><a href="{{ route('deleteorder') }}/{{ $sessionIndexes[$i] }}">Item verwijderen</a></p>
            </div>
		    
		@endfor

		<p><strong>Totaal: </strong> &euro;{{ $totaleprijs }}</p>
		<br>
        <p>{{ trans('cont.prijzen_afgehaald') }}</p>
        <br>
        
		<p>
			<a href="{{ route('placeorder') }}" class="btn">{{ trans('cont.orderit') }}</a>
            <a href="{{ route('deleteorder') }}">Alle items verwijderen</a>
		</p>

	@else
	<p>Nog geen producten aan bestelling toegevoegd.</p>

	@endif

	<br>

	<p>
		<a href="{{ route('producten') }}">&larrhk; Terug naar producten</a>
	</p>


</div>
@endsection