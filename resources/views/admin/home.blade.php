@extends('admin.master')

@section('content')

	<a href="{{ route('admin_useroverview') }}" class="boringlink">Overzicht gebruikers</a><br>
	<a href="{{ route('admin_productoverview') }}">Overzicht producten</a><br>
	

@endsection