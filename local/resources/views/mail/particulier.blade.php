<h2>Registratie AS-Tegel</h2>
<p>{{ $achternaam }} {{ $voornaam }} heeft zich als particulier geregistreerd.</p>
<br>
<h2>Gegevens</h2>
<p>Naam: {{ $achternaam }} {{ $voornaam }}</p>
<p>Email: <a href="mailto:{{ $email }}">{{ $email }}</a></p>
@if($telnr != '')
<p>Telefoonnr: {{ $telnr }}</p>
@endif
<br>
<p><a href="{{ route('admin') }}">Naar administrator panel</a></p>

<br>

