@extends('master', ['title' => 'Bestelling', 'headermenu_active' => 'producten'])

@section('content')

<div class="ordercontent">
	<h1>Bestelling ontvangen</h1>
    <br>
	<p>Bedankt voor uw bestelling!</p>
    @if(Auth::user()->role == 'handelaar')
    <p>Een bestelbon wordt opgemaakt die u spoedig zal ontvangen.</p>
    @else
	<p>Een offerte wordt opgemaakt die u spoedig zal ontvangen.</p>
    <p>Indien u nog vragen heeft, gelieve gerust contact met ons op te nemen.</p>
    @endif
    <br>
	<p>
		<a class="boringlink" href="{{ route('producten') }}">&larrhk; Terug naar producten</a>
	</p>	
	<br>


	<h2>Overzicht van uw bestelling</h2> 

	<p>
		Besteld door: {{ $user->lastname }} {{ $user->firstname }}<br>
		Email: <a href="mailto:{{ $user->email }}">{{ $user->email }}</a><br>
		@if(isset($user->telnr) && $user->telnr != '')
		Telefoonnr: {{ $user->telnr }}<br>
		@endif
		Datum bestelling: {{ $date }}<br>
        @if(Auth::user()->role == 'handelaar') 
            Aanvraag DOP certificaat: 
            @if(Session::get('dop') == true)
                ja
            @else
                nee
            @endif
        @endif
	</p>

	<br><br>

	<h2>Producten</h2>
	@for ($i = 0; $i < count($producten); $i++)

		<p>
			Categorie:
			<strong>{{ $categorie[$i] }} / {{ $subcategorie[$i] }}</strong><br>

		    Product: <strong>{{ $producten[$i]->naam }} {{ $producten[$i]->afmetingen }}</strong><br>

            Aantal {{ $producten[$i]->eenheid }} besteld: 
		    <strong>{{ $vierkantemeters[$i] }}</strong><br>
		    @if(Auth::user()->role == 'handelaar')
                Handelaarsprijs per {{ $producten[$i]->eenheid }}: <strong>&euro;{{ $producten[$i]->prijs_handelaar }}</strong><br>
                Uitgerekende prijs: 
                <strong>&euro;{{ $prijzen[$i] }}</strong><br>    
            @endif

		        
	    </p>
	    <br>

	@endfor

	<br>

    @if(Auth::user()->role == 'handelaar')
	    <p>Totale prijs: <strong>&euro;{{ $totaleprijs }}</strong></p>
    @endif

	<br>

	<p>
		<a class="boringlink" href="{{ route('producten') }}">&larrhk; Terug naar producten</a>
	</p>	
</div>
@endsection