@extends('master')

@section('css')
<link rel="stylesheet" href="{{ asset('bower_components/lightbox2/dist/css/lightbox.min.css') }}"/>
@endsection

@section('content')

<div class="breadcrumb">
	<p><a href="{{ route('producten') }}">{{ trans('cont.products') }}</a> &raquo; {{ trans('cont.overzicht') }}</p>
</div>

<div class="catmenu_container">
	@include('catmenu', array('catmenu_active' => $catmenu_active, 'allcategories' => $allcategories, 'allsubcategories' => $allsubcategories))
</div>

<div class="categorie_overzicht">
	@foreach($categories as $cat)
	<article id="{{ $cat->cat_linknaam }}">
        <div class="catoverzicht_cat">
            <h2>{{ $cat->naam }}</h2>
            <a href="{{ asset($cat->fullresfoto) }}" data-lightbox="{{ $cat->naam }}" data-title="{{ $cat->naam }}">
                <img src="{{ asset($cat->coverfoto) }}" alt="{{ $cat->naam }}"/>
            </a>
            <!--<div class="producten_caption" >
                <a href="{{ route('producten') }}/{{ $cat->cat_linknaam }}">{{ $cat->naam }}</a>
            </div>		-->
        </div>
        <div class="catoverzicht_subcat">
            @foreach($subcategories as $subcat)
                @if($cat->id == $subcat->categorie_id)
                    <div class="catoverzicht_subcat_detail">
                        <h3>
                            <a href="{{ route('producten') }}/{{ $cat->cat_linknaam }}/{{ $subcat->subcat_linknaam }}">
                                {{ $subcat->naam }} <!--<span class="icon-angle-circled-right">-->
                            </a>
                        </h3>
                        @if(isset($subcat->beschrijving) && $subcat->beschrijving != '')
                            <p> {{ $subcat->beschrijving }}</p>
                        @endif
                        <p class="subcat-item">
                            <!--<a href="{{ route('producten') }}/{{ $cat->cat_linknaam }}/{{ $subcat->subcat_linknaam }}">
                                Toon alles voor {{ $subcat->naam }}
                            </a>-->
                        </p>
                    </div>
                @endif
            @endforeach
        </div>
	</article>
	@endforeach

</div>

@endsection

@section('javascript')
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="js/smoothscroll.js"></script>
<script src="{{ asset('bower_components/lightbox2/dist/js/lightbox.min.js') }}"></script>
@endsection

