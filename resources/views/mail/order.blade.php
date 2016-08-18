<h2>@if(Auth::user()->role == 'handelaar') Bestelling @else Offerte @endif van {{ $user->lastname }} {{ $user->firstname }} op 
{{ $date }}</h2> 

<h3>Gegevens klant</h3>
<p>
	Besteld door: {{ $user->lastname }} {{ $user->firstname }}<br>
	Email: <a href="mailto:{{ $user->email }}">{{ $user->email }}</a><br>
	@if(isset($user->telnr) && $user->telnr != '')
	Telefoonnr: {{ $user->telnr }}<br>
	@endif
    @if(isset($user->btwnr) && $user->btwnr != '' && $user->btwnr != 'BE ')
        BTW-nummer: {{ $user->btwnr }}<br>
    @endif
	Datum bestelling: {{ $date }}<br>
    @if(Auth::user()->role == 'handelaar') 
    Aanvraag DOP certificaat:  
        @if(Session::get('dop') == true)
            <strong>ja</strong>
        @else
            <strong>nee</strong>
        @endif
    @endif
</p>


<h3>Gegevens bestelling</h3>
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


@endfor

@if(Auth::user()->role == 'handelaar')
    Totale prijs: <strong>&euro;{{ $totaleprijs }}</strong>
@endif

<br>
<p>Bestelling opgemaakt voor AS-tegel.</p>
<br>

