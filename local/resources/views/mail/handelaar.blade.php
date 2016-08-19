<h2>Registratie AS-Tegel</h2>
<p>{{ $achternaam }} {{ $voornaam }} heeft zich als handelaar willen registreren.</p>
<br>
<h2>Gegevens</h2>
<p>Naam: {{ $achternaam }} {{ $voornaam }}</p>
<p>Email: <a href="mailto:{{ $email }}">{{ $email }}</a></p>
@if($telnr != '')
<p>Telefoonnr: {{ $telnr }}</p>
@endif
@if($btw != '')
<p>BTW: {{ $btw }}</p>
@endif
<br>
<p>
<strong><a href="{{ route('home') }}/admin/users/{{ $email }}/makehandelaar">{{ $achternaam }} {{ $voornaam }} Goedkeuren</a> of manueel aanpassen in administrator paneel.</strong>
</p>
<br>
Om af te keuren, geen handeling ondernemen (gebruiker blijft een particulier).

<p><a href="{{ route('admin') }}">Naar administrator panel</a></p>

<br>

