<h1>Registratie AS-Tegel</h1>
<p>Iemand heeft zich als handelaar willen registreren.</p>
<br>
<h2>Gegevens</h2>
<p>Naam: {{ $achternaam }} {{ $voornaam }}</p>
<p>Email: <a href="mailto:{{ $email }}">{{ $email }}</a></p>
@if(isset($telnr))
<p>Telefoonnr: {{ $telnr }}</p>
@endif
<br>
<a href="{{ route('home') }}/admin/accept/{{ $email }}">Goedkeuren</a>
<a href="{{ route('home') }}/admin/refuse/{{ $email }}">Afkeuren</a>

<a href="{{ route('admin') }}">Naar administrator panel</a>

<br>

