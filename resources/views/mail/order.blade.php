<h2>Bestelling van {{ $user->lastname }} {{ $user->firstname }} op 
{{ $date }}</h2> 

<h3>Gegevens klant</h3>
<p>
	Besteld door: {{ $user->lastname }} {{ $user->firstname }}<br>
	Email: <a href="mailto:{{ $user->email }}">{{ $user->email }}</a><br>
	@if(isset($user->telnr) && $user->telnr != '')
	Telefoonnr: {{ $user->telnr }}<br>
	@endif
	Datum bestelling: {{ $date }}
</p>


<h3>Gegevens bestelling</h3>
@for ($i = 0; $i < count($producten); $i++)

	<p>
		Categorie:
		<strong>{{ $categorie[$i] }} / {{ $subcategorie[$i] }}</strong><br>

	    Product: <strong>{{ $producten[$i]->naam }} {{ $producten[$i]->afmetingen }}</strong><br>

	    Aantal m&sup2; besteld: 
	    <strong>{{ $vierkantemeters[$i] }}</strong><br>
	    @if(Auth::user()->role == 'particulier')
	    Particuliere prijs per m&sup2;: <strong>{{ $producten[$i]->prijs_particulier }}</strong><br>
	    @elseif(Auth::user()->role == 'handelaar')
	    Handelaarsprijs per m&sup2;: <strong>{{ $producten[$i]->prijs_handelaar }}</strong><br>
	    @endif

	    Uitgerekende prijs: 
	    <strong>{{ $prijzen[$i] }}</strong><br>
	    
    </p>


@endfor

Totale prijs: <strong>{{ $totaleprijs }}</strong>

<br>
<p>Bestelling opgemaakt voor AS-tegel.</p>
<br>

