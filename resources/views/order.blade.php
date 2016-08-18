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
                        aan &euro;{{ $producten[$i]->prijs_handelaar }}
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
                <p>{{ trans('cont.prijzen_afgehaald') }}</p>
            @endif
        @endif

        <br>
        
		<div class="controls">
        @if(Auth::check())		    
            @if(Auth::user()->role=='handelaar')
            <p>
                <input type="hidden" id="link" value="{{ route('dop') }}"><br> <!-- pass laravel link to js -->
                <label id="dop"><input type="checkbox" @if(Session::get('dop') == true) checked @endif > Ja, ik wens een DOP certificaat te ontvangen met mijn bestelling.</label>
            </p>
            
            <br>

			<a href="{{ route('placeorder') }}" class="btn">{{ trans('cont.orderit') }}</a>
            @else
            <a href="{{ route('placeorder') }}" class="btn">{{ trans('cont.vraag_offerte') }}</a>
            @endif
        @else
            <a href="{{ route('placeorder') }}" class="btn">{{ trans('cont.vraag_offerte') }}</a>
        @endif
            <a href="{{ route('deleteorder') }}" class="ml"><span class="icon-trash-empty"></span> Alle items verwijderen</a>
		</div>

	@else
	<p>Nog geen producten aan bestelling toegevoegd.</p>

	@endif


	<p class="backtoproducts">
		<a href="{{ route('producten') }}">&larrhk; Terug naar producten</a>
	</p>


</div>
<script>
    document.getElementById('dop').onclick = function() {
        window.location = document.getElementById('link').value; // redirect in js to laravel route
    };
</script>

@endsection
