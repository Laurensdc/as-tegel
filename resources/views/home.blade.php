@extends('master')

@section('css')
<link rel="stylesheet" href="{{ asset('bower_components/lightbox2/dist/css/lightbox.min.css') }}"/>
@endsection

@section('homecontent')
    <div class="homepromo">
        <div class="homepromo_banner">
            <h2>Spotlight</h2> <span>Tijdelijke aanbiedingen</span>
        </div>
        <div class="producten_content">

                @foreach($featuredproducts as $p)
                    <article>	
                        <a href="{{ asset($p->fullresfoto) }}" data-lightbox="{{ $p->naam }}" data-title="{{ $p->naam }}">
                            <img src="{{ asset($p->coverfoto) }}"/>
                        </a>
                        
                        <h1>{{ $p->naam }}</h1>
                        <ul>
                            <li>{{ trans('cont.dimensions') }}: {{ $p->afmetingen }}</li>
                        </ul>
                        
                        @if(isset($p->beschrijving))
                            <p>{{ $p->beschrijving }}</p>
                        @endif

                        @if($p->invoorraad == false)
                            <p class="txt_warning">{{ trans('cont.nostock') }}.</p>
                        @endif

                        <a href="{{ route('producten') }}/{{ $p->subcategorie->categorie->cat_linknaam }}/{{ $p->subcategorie->subcat_linknaam }}">Bekijk {{ $p->naam }} &rarr;</a>

                    </article>
                @endforeach

        </div>
    </div>

    <div class="hometext">
        <p>
            {{ trans('cont.nicest_products') }}
            <a href="{{ route('producten') }}" class="btn">{{ trans('cont.explore_collection') }}</a>
        </p>
    </div>

    <div class="nicest_products">
        <a href="{{ route('producten') }}/specialiteiten/carius">
            <article class="home_carius mgright-2pct">
                <div class="home_caption">
                    <span>Carius</span>
                </div>
            </article>
        </a>

        <a href="{{ route('producten') }}/keramiek/keramiek">
            <article class="home_keramiek">
                <div class="home_caption">
                    <span>Keramische Natuursteen</span>
                </div>
            </article>
        </a>

        <a href="{{ route('producten') }}/vietnamees/geschuurdgezaagd">
            <article class="home_vietnamees mgright-2pct">
                <div class="home_caption">
                    <span>Vietnamese Geschuurd Gezaagd</span>
                </div>
            </article>
        </a>

        <a href="{{ route('producten') }}/chinees/vloer">
            <article class="home_chinees">
                <div class="home_caption">
                    <span>Chinese natuursteen voor uw vloer</span>
                </div>
            </article>
        </a>

        <a href="{{ route('producten') }}/indisch/candela">
            <article class="home_indisch mgright-2pct">
                <div class="home_caption">
                    <span>Candela</span>
                </div>
            </article>
        </a>

    </div>

@endsection

@section('javascript')
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/lightbox2/dist/js/lightbox.min.js') }}"></script>
@endsection