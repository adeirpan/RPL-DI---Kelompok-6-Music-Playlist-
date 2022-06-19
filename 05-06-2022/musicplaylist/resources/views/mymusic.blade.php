@extends('layout.main')
@section('container')
<script src="https://kit.fontawesome.com/b5b2ac5d79.js" crossorigin="anonymous"></script>
<section class="home">

    <!-- show_song_number -->
    {{-- <div class="show_song_no">
        <p id="present">1</p>
        <p>/</p>
        <p id="total">5</p>
    </div> --}}

    <img src="{{ $data->path_imgPoster }}" class="album">

    <audio id="myAudio">
        <source src="{!! asset($data->path_music) !!}" type="audio/ogg">
        <source src="{!! asset($data->path_music) !!}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

        <div id="title" class="text2"style="font-size: 24px;margin-top:20px;">
            {{ $data->title }}
        </div>
        <div class="text3" style="font-size: 20px;margin-top:20px;">
            {{-- Tulus --}}
            <p id="artist">{{ $data->artist }}</p>
        </div>

        <a class="fa-stack" style="margin-left: 600px;margin-top:20px;">
            <i class="fa-solid fa-repeat fa-lg"></i>
        </a>

        <a class="fa-stack" style= "margin-left: 30px;margin-top:20px;color:  #8D9197;" href="{{ $data->path_downloadmusic }}">
            <i class="fa-solid fa-download fa-lg"></i>
        </a>

        <a class="fa-stack" style= "margin-left: 30px;margin-top:20px;color:  #8D9197;"href="#popup1" >
            <i class="fa-solid fa-globe fa-lg"></i>
        </a>

        <a class="fa-stack" style= "margin-left: 30px;margin-top:20px;color:  #8D9197; " href="{{ $data->path_chord }}">
            <i class="fa-solid fa-location-pin fa-lg"></i>
        </a>

        <div class="volume" >
            <p id="volume_show">90</p>
            <i class="fa fa-volume-up" aria-hidden="true" onclick="mute_sound()" id="volume_icon" ></i>
            <input type="range" min="0" max="100" value="90" onchange="volume_change()" id="volume">
        </div>
        <audio src="{{ $data->path_music }}">audio</audio>
        <div class="middle">
            <button onclick="justplay()" id="play"><i class="fa fa-play" aria-hidden="true"></i></button>
        </div>

        <!--- song duration part --->
        {{-- <div class="duration">
            <input type="range" min="0" max="100" value="0" id="duration_slider" onchange="change_duration()">
            <button id="auto" onclick="autoplay_switch()">Auto &nbsp;<i class="fa fa-circle-o-notch" aria-hidden="true"></i></button>
        </div> --}}


        <div id="popup1" class="overlay">
            <div class="popup">
                <h2 style="margin-bottom: 20px;">Translate</h2>
                <a class="close" href="#">&times;</a>
                <div class="content" style="width: 100%; font-size: 16px;color: white;line-height: 2;">
                    <iframe src="{{ $data->path_lirik }}" height="500px" width="1000px"></iframe>
                </div>
            </div>
        </div>

    {{-- <script src="{!! asset('js/music.js') !!}"></script> --}}
    <script>
        var x = document.getElementById("myAudio");
        let recent_volume = document.querySelector('#volume');
        let volume_show = document.querySelector('#volume_show');

        let slider = document.querySelector('#duration_slider');
        let recent_duration = document.querySelector('#duration');

        let Playing_song = false;

        function playAudio() {
            x.play();
            Playing_song = true;
            play.innerHTML = '<i class="fa fa-pause" aria-hidden="true"></i>';
        }

        function pauseAudio() {
            x.pause();
            Playing_song = false;
            play.innerHTML = '<i class="fa fa-play" aria-hidden="true"></i>';


        }

        function justplay() {
            if (Playing_song == false) {
                playAudio();

            } else {
                pauseAudio();
            }
        }

        function mute_sound() {
            x.volume = 0;
            volume.value = 0;
            volume_show.innerHTML = 0;
        }

        function volume_change() {
            volume_show.innerHTML = recent_volume.value;
            x.volume = recent_volume.value / 100;
        }

        // function change_duration() {
        //     recent_duration.value = x.currentTime/x.duration;
        //     x.currentTime = x.duration * (slider.value / 100);
        //     alert(x.currentTime + " " + x.duration + " " + x.duration * (slider.value / 100));

        // }
    </script>
</section>
@endsection
