@extends('master')



@section('css')

<link rel="stylesheet" href="{{ asset('bower_components/lightbox2/dist/css/lightbox.min.css') }}"/>

@endsection



@section('homecontent')

    @if(sizeof($motd) > 0 && $motd->content != '')
    <div class="hometext">

        <p>
            {!! nl2br($motd->content) !!}
        </p>

    </div>
    @endif


    @if(sizeof($featuredproducts) > 0)

        <div class="homepromo">

            <div class="homepromo_banner">

                <h2>{{ trans('cont.spotlight') }}</h2> <span>{{ trans('cont.spotlight_text') }}</span>

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



                            <a href="{{ route('producten') }}/{{ $p->subcategorie->categorie->cat_linknaam }}/{{ $p->subcategorie->subcat_linknaam }}">

                                {{ trans('cont.bekijk') }} {{ $p->naam }} <span class="icon-angle-circled-right">

                            </a>



                        </article>

                    @endforeach



                    <br>

            </div>

        </div>

    @endif



    <div class="hometext">

        <p>

            {{ trans('cont.nicest_products') }}

            <a href="{{ route('producten') }}" class="btn">{{ trans('cont.explore_collection') }}</a>

        </p>

        <br>

        <p>{{ trans('cont.or') }}...<a href="{{ route('about') }}">{{ trans('cont.gettoknowus') }}</a></p>

    </div>



    <div class="nicest_products">

        <a href="{{ route('producten') }}/vietnamees/cariusviet">

            <article class="home_carius mgright-2pct">

                <div class="home_caption">

                    <span>Carius</span>

                </div>

            </article>

        </a>



        <!--<a href="{{ route('producten') }}/keramiek/keramiek">-->



        <!--</a>-->



        <a href="{{ route('producten') }}/indisch/chandra">

            <article class="home_chandra">

                <div class="home_caption">

                    <span>Chandra Blue</span>

                </div>

            </article>

        </a>



            <article class="home_sierkeien mgright-2pct">

                <div class="home_caption">

                    <span>Sierkeien</span>

                </div>

            </article>



            <article class="home_keramiek">

                <div class="home_caption">

                    <span>Keramische Natuursteen</span>

                </div>

            </article>



    </div>



@endsection



@section('javascript')

<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

<script src="{{ asset('bower_components/lightbox2/dist/js/lightbox.min.js') }}"></script>

@endsection
