@extends('master', ['title' => 'Bestelling', 'headermenu_active' => 'producten'])

@section('content')
	<h1>Bestelling ontvangen</h1>
	<p>Bedankt voor uw bestelling!</p>
	<p>Een bestelbon wordt opgemaakt die u spoedig zal ontvangen.</p>
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
		Datum bestelling: {{ $date }}
	</p>

	<br><br>

	<h2>Producten</h2>
	@for ($i = 0; $i < count($producten); $i++)

		<p>
			Categorie:
			<strong>{{ $categorie[$i] }} / {{ $subcategorie[$i] }}</strong><br>

		    Product: <strong>{{ $producten[$i]->naam }} {{ $producten[$i]->afmetingen }}</strong><br>

		    Aantal m&sup2; besteld: 
		    <strong>{{ $vierkantemeters[$i] }}</strong><br>
		    @if(Auth::user()->role == 'particulier')
		    Particuliere prijs per m&sup2;: <strong>&euro; {{ $producten[$i]->prijs_particulier }}</strong><br>
		    @elseif(Auth::user()->role == 'handelaar')
		    Handelaarsprijs per m&sup2;: <strong>&euro; {{ $producten[$i]->prijs_handelaar }}</strong><br>
		    @endif

		    Uitgerekende prijs: 
		    <strong>&euro; {{ $prijzen[$i] }}</strong><br>    
	    </p>
	    <br>

	@endfor

	<br>

	<p>Totale prijs: <strong>&euro; {{ $totaleprijs }}</strong></p>

	<br>

	<p>
		<a class="boringlink" href="{{ route('producten') }}">&larrhk; Terug naar producten</a>
	</p>	

@endsection