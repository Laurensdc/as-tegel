@extends('master')

@section('css')
<link rel="stylesheet" href="{{ asset('bower_components/lightbox2/dist/css/lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('bower_components/toastr/toastr.css') }}"/>

@endsection

@section('content')

<div class="breadcrumb">
	<p>
		<a href="{{ route('producten') }}">{{ trans('cont.products') }}</a> 
		&raquo; <a href="{{ route('producten') }}#{{ $catmenu_active }}">{{ $hoofdcategorie }}</a> 
		&raquo; {{ $subcategorie }}
	</p>
</div>

<div class="catmenu_container">
	@include('catmenu', array('catmenu_active' => $catmenu_active, 'allcategories' => $allcategories, 'allsubcategories' => $allsubcategories))
</div>

<div class="producten_content">
	<h2>{{ $hoofdcategorie }} &ndash; {{ $subcategorie }}</h2>

	@if($producten->isEmpty())
		<p>&nbsp;&nbsp; {{ trans('cont.noproducts') }}</p><br>
	@else
		
		@foreach($producten as $i=>$p)
			<article>	
				<a href="{{ asset($p->fullresfoto) }}" data-lightbox="{{ $p->naam }}" data-title="{{ $p->naam }}">
					<img src="{{ asset($p->coverfoto) }}"/>
				</a>
				
				<h1>{{ $p->naam }}</h1>
				<ul>
					<li>{{ trans('cont.dimensions') }}: {{ $p->afmetingen }}</li>
					@if(Auth::check())
						@if(Auth::user()->role == 'handelaar')
                            @if($p->prijs_handelaar == '' || $p->prijs_handelaar == 0) 
                            <li>{{ trans('cont.notavailable') }}.</li>
                            @else
							<li>{{ trans('cont.price') }}: &euro;{{ $p->prijs_handelaar }}/{!! $p->eenheid !!}</li>
                            @endif
						@endif
					@endif

				</ul>
				
				@if(isset($p->beschrijving))
					<p>{{{ $p->beschrijving }}}</p>
				@endif

				@if($p->invoorraad == false)
					<p class="txt_warning">{{ trans('cont.nostock') }}.</p>
				@endif
                <form action="" method="post" name="form">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ $p->id }}" name="prod_id">
                    <p>{{ trans('cont.add') }} <input type="number" name="vierkantemeter" min="1" max="999" value="0" required/>x 1 {!! $p->eenheid !!} {{ trans('cont.toorder') }}.</p> 
                    <p><input type="submit" clas="btn btn_cta" value="{{ trans('cont.order') }}"/></p>
                </form>
			</article>

			@if(($i+1)%3 == 0)
				<div class="clear"></div>
			@endif

		@endforeach

	@endif


</div>

@endsection

@section('javascript')
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

@if($showtoast)
	<script src="{{ asset('bower_components/toastr/toastr.min.js') }}"></script>
	<script>
        toastr.options = { "newestOnTop": true, "positionClass": "toast-center", "timeOut": "4000", }
        toastr.success("{{ trans('cont.product_added') }}");
    </script>
@endif

<script src="{{ asset('bower_components/lightbox2/dist/js/lightbox.min.js') }}"></script>

@endsection