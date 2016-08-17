@extends('master')


@section('content')

<div class="breadcrumb">
	<p><a href="{{ route('producten') }}">{{ trans('cont.products') }}</a> &raquo; {{ trans('cont.overzicht') }}</p>
</div>

<div class="catmenu_container">
	@include('catmenu', array('catmenu_active' => $catmenu_active, 'allcategories' => $allcategories, 'allsubcategories' => $allsubcategories))
</div>

<div class="categorie_overzicht">
	<h2>{{ trans('cont.cat_overview') }}</h2>

	@foreach($categories as $cat)
	<article id="{{ $cat->cat_linknaam }}">
        <div class="catoverzicht_cat">
            <h2>{{ $cat->naam }}</h2>
            <img src="{{ asset($cat->coverfoto) }}" alt="{{ $cat->naam }}"/>
            <!--<div class="producten_caption" >
                <a href="{{ route('producten') }}/{{ $cat->cat_linknaam }}">{{ $cat->naam }}</a>
            </div>		-->
        </div>
        <div class="catoverzicht_subcat">
            <h3>{{ trans('cont.subcategories') }}</h3>
            @foreach($subcategories as $subcat)
                @if($cat->id == $subcat->categorie_id)
                    <p>{{ $subcat->naam }}</p>
                    <p>{{ $subcat->beschrijving }}</p>
                    <p class="subcat-item">
                        <a href="{{ route('producten') }}/{{ $cat->cat_linknaam }}/{{ $subcat->subcat_linknaam }}" class="btn">
                            Bekijk producten {{ $subcat->naam }}
                        </a>
                    </p>
                @endif

            @endforeach
        </div>
	</article>
	@endforeach

</div>

@endsection

@section('javascript')
<script src="bower_components/jquery/dist//jquery.min.js"></script>
<script src="js/scripts.js"></script>

@endsection

