@extends('master')


@section('homecontent')
    <a href="{{ route('producten') }}/specialiteiten/carius">
        <article class="home_carius">
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
        <article class="home_vietnamees">
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
        <article class="home_indisch">
            <div class="home_caption">
                <span>Candela</span>
            </div>
        </article>
    </a>


@endsection