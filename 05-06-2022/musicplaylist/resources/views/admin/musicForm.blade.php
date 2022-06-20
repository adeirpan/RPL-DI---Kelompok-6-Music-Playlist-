@extends('layout.admin')

@section('container')

<section class="home">

    <form class="border" style="padding:20px; margin-left:10%" method="POST" action="/{{ $action }}" enctype="multipart/form-data">
        @csrf
        <input  type="hidden" name="_method" value="{{ $method }}"/>


        <div class="form-group">
            <label class="lab">Title</label>
            <input
                id="title"
                style= "background-color:rgb(184, 184, 184); font-size:16pt"
                type="text"
                name="title"
                class="form-control"

                value="{{ isset($data)?$data->title:'' }}"/>
        </div>
        <div class="form-group">
            <label class="lab">Artist</label>
            <input
                id="artist"
                style= "background-color:rgb(184, 184, 184); font-size:16pt"
                type="text"
                name="artist"
                class="form-control"
                value="{{ isset($data)?$data->artist:'' }}"/>
        </div>
        <div class="form-group">
            <label class="lab">Album</label>
            <input
            id="album"
                style= "background-color:rgb(184, 184, 184); font-size:16pt"
                type="text"
                name="album"
                class="form-control"
                value="{{ isset($data)?$data->album:'' }}"/>
        </div>
        <div class="form-group">
            <label class="lab">Year</label>
            <input
            id="year"
                style= "background-color:rgb(184, 184, 184); font-size:16pt"
                type="text"
                name="year"
                class="form-control"
                value="{{ isset($data)?$data->year:'' }}"/>
        </div>
        <div class="form-group">
            <label class="lab">Genre</label>
            <input
                id="genre"
                style= "background-color:rgb(184, 184, 184); font-size:16pt"
                type="text"
                name="genre"
                class="form-control"
                value="{{ isset($data)?$data->genre:'' }}"/>
        </div>
        <div class="form-group">
            <label class="lab">Path Lirik</label>
            <input
                style= "background-color:rgb(184, 184, 184); font-size:16pt"
                type="text"
                name="path_lirik"
                class="form-control"
                value="{{ isset($data)?$data->path_lirik:'' }}"/>
        </div>
        <div class="form-group">
            <label class="lab">Path Chord</label>
            <input
                style= "background-color:rgb(184, 184, 184); font-size:16pt"
                type="text"
                name="path_chord"
                class="form-control"
                value="{{ isset($data)?$data->path_chord:'' }}"/>
        </div>

        <div class="form-group">
            <label class="lab">Path Download Music</label>
            <input
                style= "background-color:rgb(184, 184, 184); font-size:16pt"
                type="text"
                name="path_downloadmusic"
                class="form-control"
                value="{{ isset($data)?$data->path_downloadmusic:'' }}"/>
        </div>

        <div class="form-group">
            <label class="lab">path Music File</label>
            <input
                style= "background-color:rgb(184, 184, 184); font-size:16pt"
                type="text"
                name="path_music"
                class="form-control"
                value="{{ isset($data)?$data->path_music:'' }}"/>
        </div>


        <div class="form-group">
            <label label class="lab">Path Poster Image</label>
            <input
                style= "background-color:rgb(184, 184, 184); font-size:16pt"
                type="text"
                name="path_imgPoster"
                class="form-control"
                value="{{ isset($data)?$data->path_imgPoster:'' }}"/>
        </div>

        <div class="form-group">
            <label label class="lab">Duration</label>
            <input
                style= "background-color:rgb(184, 184, 184); font-size:16pt"
                type="text"
                name="time"
                class="form-control"
                value="{{ isset($data)?$data->time:'' }}"/>
        </div>

        {{-- file upload /images --}}
        {{-- <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <input class="form-control" type="file" id="image" name="image">
        </div> --}}
        <div style="text-align:center">
            <button class="main-btn">Save</button>
        </div>
    </form>
</section>

<script>
    const jdmediatags = window.jsmediatags;

    document.querySelector("input").addEventListener("change", (event) =>{
        const file = event.target.files[0];

        jsmediatags.read(file, {
            onSuccess: function(tag){
                console.log(tag);

                const data = tag.tags.picture.data;
                const format = tag.tags.picture.format;
                let base64String = "";

                for(let i = 0; i< data.length; i++)
                    base64String += String.fromCharCode(data[i]);

                document.querySelector("#cover").style.backgroundImage = `url(data:${format};base64,${window.btoa(base64String)})`;
                document.querySelector("#title").textContent = tag.tags.title;
                document.querySelector("#artist").textContent = tag.tags.artist;
                document.querySelector("#album").textContent = tag.tags.album;
                document.querySelector("#genre").textContent = tag.tags.genre;
                document.querySelector("#year").textContent = tag.tags.year;
            },
            onerror: function(error){
                console.log(error);
            }
        })
    })
</script>
@endsection

