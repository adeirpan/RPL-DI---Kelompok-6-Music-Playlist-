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

        <div class="PopularRow">
            @foreach ($popularMusic as $item)
            <div class="col-md-3">
                <div class="card shadow my-3 text-dark p-0" type="button" style="min-height: 400px">
                    <img class="card-img-top image-fit" src=" " alt="Card image cap">
                    <div class="card-body text-left PopularRow">
                        <div class="col-md-12">
                            <h5 class="card-title mb-0">{{ $item->title }}</h5>
                            <span>{{ $item->arttist }}</span><br>
                        </div>
                        <div class="d-flex justify-content-between mt-auto col-12">
                            <div>
                                <span>Album</span>
                                <h5 class="mb-0  align-self-center">{{ $item->album }}</h5>
                            </div>
                            <div class="align-self-end">
                                <a href="/dashboard" class="btn btn-danger">Play</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($popularMusic as $item)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                {{-- <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" /> --}}
                                <!-- details-->
                                <div class="card-body p-4">
                                    <div class="text-center">

                                        <h5 class="fw-bolder">{{ $item->title }}</h5>

                                        {{ $item->artist }}
                                        <p>{{ $item->album }}</p>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

    </section>


@endsection
