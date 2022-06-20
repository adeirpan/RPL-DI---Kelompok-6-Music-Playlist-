@extends('layout.main')

@section('container')

    <section class="home">

        <center><img class="img-rounded" src="{!! asset('img/profile.jpg') !!}" /></center>
        <div class="text2"style="font-size: 30px;">
            Profile
        </div>
        <div class="text2"style="font-size: 80px;margin-top:2px;">
            {{ auth()->user()->name}}
        </div>

        @if(auth()->user()->premiumStatus == 0 )
        <div class="text2"style="font-size: 18px;margin-top:5px;">
            Non-Premium User
        </div>
        <div class="text2"style="font-size: 18px;margin-top:5px;">
            <a class="" href="/profile/{{ auth()->user()->id}}/edit">Edit Profile</a>
        </div>
        
        @else
        <div class="text2"style="font-size: 18px;margin-top:5px;">
            Premium User
        </div>
        <div class="text2"style="font-size: 18px;margin-top:5px;">
            <a class="" href="/profile/{{ auth()->user()->id}}/edit">Edit Profile</a>
        </div>
        @endif


        <div class="text1"style="margin-top:100px;margin-left:210px">
            MY PLAYLIST
        </div>
        <img src="{!! asset('img/playlist.png') !!}" class="ads2">

        <img src="{!! asset('img/py.png') !!}" class="ads2">
        <img src="{!! asset('img/py2.png') !!}" class="ads2">
        <span class="text" style="position: relative; margin-left: 245px;">
            Tambah playlist
        </span>
        <span class="text" style="position: relative; margin-left: 310px;">
            Playlist 1
        </span>
        <span class="text" style="position: relative; margin-left: 350px;">
            Playlist 2
        </span>
    </section>

@endsection
