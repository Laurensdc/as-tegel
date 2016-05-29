@extends('master', ['title' => 'Geen toegang', 'headermenu_active' => ''])

@section('content')
	<br>
	<p>U bent niet ingelogd als administrator.</p>
	<a href="{{ route('home') }}/login">Log in</a> - <a href="{{ route('home') }}">Terug naar site</a>

@endsection