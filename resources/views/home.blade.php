@extends('master')


@section('homecontent')
    <article class="home_carius">
        <div class="home_caption">
            <a href="{{ route('producten') }}/carius">Carius</a>
        </div>
    </article>

    <article class="home_keramiek">
        <div class="home_caption">
            <a href="{{ route('producten') }}/keramiek">Keramische Natuursteen</a>
        </div>
    </article>


    <article class="home_vietnamees">
        <div class="home_caption">
            <a href="{{ route('producten') }}/vietnamees">Vietnamese natuursteen</a>
        </div>

    </article>

    <article class="home_chinees">
        <div class="home_caption">
            <a href="{{ route('producten') }}/chinees">Chinese natuursteen</a>
        </div>
    </article>

    <article class="home_indisch">
        <div class="home_caption">
            <a href="{{ route('producten') }}/indisch">Indische natuursteen</a>
        </div>
    </article>



@endsection