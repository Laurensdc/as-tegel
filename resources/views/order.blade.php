@extends('master', ['title' => 'Bestelling', 'headermenu_active' => 'producten'])

@section('content')

<div class="ordercontent">
	<h2>Uw bestelling</h2> 

	@if(isset($producten))

		@for ($i = 0; $i < count($producten); $i++)
		    <p><strong>{{ $producten[$i]->naam }}</strong></p> 
            <div class="order_item">
                <p>{{ $producten[$i]->afmetingen }}</p>
                <p>{{ $vierkantemeters[$i] }}{{ $producten[$i]->eenheid }}
                
                @if(Auth::check())		    
                    @if(Auth::user()->role=='handelaar')
                        aan &euro;
                        {{ $producten[$i]->prijs_handelaar }}
                        /{{ $producten[$i]->eenheid }} 
                    @endif    
                @endif     
                
                </p>
                <p><a href="{{ route('deleteorder') }}/{{ $sessionIndexes[$i] }}">Item verwijderen</a></p>
            </div>
		    
		@endfor

        @if(Auth::check())		    
            @if(Auth::user()->role=='handelaar')
		        <p><strong>Totaal: </strong> &euro;{{ $totaleprijs }}</p>
                <br>
                <p>{{ trans('cont.prijzen_afgehaald') }}</p>
            @endif
        @endif

        <br>
        
		<p>
        @if(Auth::check())		    
            @if(Auth::user()->role=='handelaar')
			<a href="{{ route('placeorder') }}" class="btn">{{ trans('cont.orderit') }}</a>
            @else
            <a href="{{ route('placeorder') }}" class="btn">{{ trans('cont.vraag_offerte') }}</a>
            @endif
        @else
            <a href="{{ route('placeorder') }}" class="btn">{{ trans('cont.vraag_offerte') }}</a>
        @endif
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