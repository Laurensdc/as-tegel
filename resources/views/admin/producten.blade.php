@extends('admin.master')

@section('content')

	@foreach($producten as $p) 

		{{ $p->naam }} <br>

	@endforeach


@endsection
