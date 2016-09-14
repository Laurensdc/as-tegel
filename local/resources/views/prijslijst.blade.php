<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="Natuursteen, keramiek en veel meer."> <!-- site description goes here -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="{{ asset('assets/favicon.gif') }}"/>
		<title>Prijslijst &ndash; As-Tegel</title>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" media="screen,print"/>
	</head>
	<body>
        <div class='prijslijst_content'>
            <h2>Prijslijst AS-Tegel</h2>
            @if(!Auth::check() || (Auth::user()->role != 'handelaar'))
                <p>Onze prijslijst is enkel voor handelaars beschikbaar.</p>
                <p><a href="{{ route('producten') }}">&larrhk; Terug naar site</a></p>
            @else
                @foreach($categories as $c)
                    <h3>{{ $c->naam }}</h3>
                    @foreach($subcategories as $s)
                        @if($s->categorie_id == $c->id)
                            @foreach($producten as $p) 
                                @if($s->id == $p->subcategorie_id)
                                    <div class="item">
                                        <div class="left">
                                            <p><!-- {{ $s->naam }} --> {{ $p->naam }} {{ $p->afmetingen }}</p>
                                        </div>
                                        <div class="right">
                                            @if($p->prijs_handelaar == '' || $p->prijs_handelaar == 0)
                                                <p>Prijs niet beschikbaar</p>
                                            @else
                                                <p>&euro;{{ $p->prijs_handelaar }}</p>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endforeach

        </div>
        <div class="prijslijst_content">
            <br><br><br><br>
            <p><a href="{{ route('producten') }}">&larrhk; Terug naar site</a></p>
            @endif
        </div>   
	</body>
</html>

