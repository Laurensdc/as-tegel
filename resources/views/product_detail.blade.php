@extends('master')


@section('content')

<div class="breadcrumb">
	<p><a href="{{ route('producten') }}">Producten</a> &raquo; <a href="{{ route('producten') }}/vietnamees">Vietnamese Natuursteen</a> &raquo;
	Getrommeld</p>
</div>

<div class="catmenu_container">
	@include('catmenu', array('catmenu_active' => $catmenu_active))
</div>

<div class="producten_content">
	<h2>Vietnamees Getrommeld</h2>


</div>

@endsection

@section('javascript')
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

@endsection