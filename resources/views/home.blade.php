@extends('master')


@section('homecontent')
    <a href="{{ route('producten') }}/specialiteiten">
        <article class="home_carius">
            <div class="home_caption">
                <span>Unieke Specialiteiten</span>
            </div>
        </article>
    </a>

    <a href="{{ route('producten') }}/keramiek">
        <article class="home_keramiek">
            <div class="home_caption">
                <span>Keramische Natuursteen</span>
            </div>
        </article>
    </a>

    <a href="{{ route('producten') }}/vietnamees">
        <article class="home_vietnamees">
            <div class="home_caption">
                <span>Vietnamese natuursteen</span>
            </div>
        </article>
    </a>

    <a href="{{ route('producten') }}/chinees">
        <article class="home_chinees">
            <div class="home_caption">
                <span>Chinese natuursteen</span>
            </div>
        </article>
    </a>

    <a href="{{ route('producten') }}/indisch">
        <article class="home_indisch">
            <div class="home_caption">
                <span>Indische natuursteen</span>
            </div>
        </article>
    </a>


@endsection