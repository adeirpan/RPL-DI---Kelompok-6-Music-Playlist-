@extends('layout.main')

@section('container')

    <section class="home">
        @if (auth()->user())
        <div class="text">
            WELCOME BACK, {{ auth()->user()->name}}
        </div>
        {{-- @else --}}

        @endif


        <div class="search_wrap search_wrap_3">
            <div class="search_box">
                <input type="text" class="input" placeholder="Find your music">
                <div class="btn btn_common">
                    <i class="fas fa-search"></i>
                </div>
            </div>

        </div>


        <div class="text1">
            TRENDING MUSIC
        </div>

        <img src="{!! asset('img/ads.png') !!}" class="ads">
        <div class="text1">
            MOST POPULAR
        </div>
        <img src="{!! asset('img/ads1.png') !!}" class="ads1">
        <img src="{!! asset('img/ads2.png') !!}" class="ads1">
        <img src="{!! asset('img/ads3.png') !!}" class="ads1">

    </section>


@endsection
