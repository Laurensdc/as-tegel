@extends('master')


@section('content')

<div class="breadcrumb">
	<p><a href="{{ route('producten') }}">Producten</a> &raquo; {{ $catdisplayname }}</p>
</div>

<div class="catmenu_container">
	@include('catmenu', array('categorie' => $categorie))
</div>

<div class="producten_content">
<h2>{{ $catdisplayname }}</h2>

	

</div>

@endsection

@section('javascript')
<script src="{{ asset('bower_components/jquery/dist//jquery.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

@endsection