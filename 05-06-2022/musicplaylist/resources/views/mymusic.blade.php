@extends('layout.main') @section('container')

<section class="home">

    <!-- show_song_number -->
    <div class="show_song_no">
        <p id="present">1</p>
        <p>/</p>
        <p id="total">5</p>
    </div>

    <img src="{!! asset('img/album.jpg') !!}" class="album">
    {{-- <img id="track_image" class="album"> --}}

    {{-- <audio id="title" class='text2' src="music/musicList/1.mp3"  autoplay></audio> --}}

        <div id="title" class="text2"style="font-size: 24px;margin-top:20px;">
            Hati-Hati di Jalan
        </div>
        <div class="text3" style="font-size: 20px;margin-top:20px;">
            {{-- Tulus --}}
            <p id="artist">Artist name</p>
        </div>

        <div class="volume">
            <p id="volume_show">90</p>
            <i class="fa fa-volume-up" aria-hidden="true" onclick="mute_sound()" id="volume_icon"></i>
            <input type="range" min="0" max="100" value="90" onchange="volume_change()" id="volume">
        </div>

        <div class="middle">
            <button onclick="previous_song()" id="pre"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
            <button onclick="justplay()" id="play"><i class="fa fa-play" aria-hidden="true"></i></button>
            <button onclick="next_song(), playsong()" id="next"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
        </div>

        <!--- song duration part --->
        <div class="duration">
            <input type="range" min="0" max="100" value="0" id="duration_slider" onchange="change_duration()">
            <button id="auto" onclick="autoplay_switch()">Auto &nbsp;<i class="fa fa-circle-o-notch" aria-hidden="true"></i></button>
        </div>

    <span class="fa-stack" style="margin-left: 600px;margin-top:20px;color: #8D9197">
            <i class="fa-solid fa-repeat fa-lg"></i>
          </span>

          <a class="fa-stack" style= "margin-left: 30px;margin-top:20px;color:  #8D9197;" href="https://www84.zippyshare.com/d/gvQLbwOW/15126/TULUS-Hati-Hati-di-Jalan.mp3">
            <i class="fa-solid fa-download fa-lg"></i>
          </a>

          <a class="fa-stack" style= "margin-left: 30px;margin-top:20px;color:  #8D9197;"href="#popup1" >
            <i class="fa-solid fa-globe fa-lg"></i>
          </a>

          <a class="fa-stack" style= "margin-left: 30px;margin-top:20px;color:  #8D9197; " href="https://www.chordtela.com/2022/03/tulus-hati-hati-di-jalan.html">
            <i class="fa-solid fa-location-pin fa-lg"></i>
          </a>

          "popup1" class="overlay">
            <div class="popup">
                <h2 style="margin-bottom: 20px;">Translate</h2>
                <a class="close" href="#">&times;</a>
                <div class="content" style="width: 100%; font-size: 16px;color: white;line-height: 2;">
                    Travel takes you
                    Met me, I met you
                    Like you I'm looking for
                    It is said that I am also what you are looking for
                    I thought we were Acid and Salt
                    And we meet in Belanga
                    The story that turned out to be not that beautiful
                    I thought we would be together
                    So much the same
                    Your background and mine
                    I guess there won't be any problems
                    I think this is easy
                    You-I become us
                    Your love is frozen
                    Dampen now has a special glow
                    I don't know what the world means
                    About the end of the story, we are not together
                    I hope this miss disappears
                    It is said that time heals
                    Will there be more like you?
                    I thought we would be together
                    So much the same
                    Your background and mine
                    I guess there won't be any problems
                    I think this is easy
                    You-I become us
                    You continue your journey
                    I continue my journey
                    Uh-uh, uh-uh
                    I thought we would be together
                    So much the same
                    Your background and mine
                    I guess there won't be any problems
                    I think this is easy
                    You-I become us
                    I thought we would be together
                    Be careful on the way
                </div>
            </div>


    <script src="{!! asset('js/music.js') !!}"></script>
</section>
@endsection
