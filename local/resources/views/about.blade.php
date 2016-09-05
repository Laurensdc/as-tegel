@extends('master')

@section('content')
	
	<div class='contact_content'>
        <h2>{{ trans('cont.about') }}</h2>
        
        {!! trans('bigcont.voorwoord') !!}
                
        
        <p><a href="{{ route('producten') }}" class="btn">{{ trans('cont.explore_collection') }}</a></p>
        <p><a href="{{ route('contact') }}">{{ trans('cont.contactus') }}</a></p>

	</div>


@endsection