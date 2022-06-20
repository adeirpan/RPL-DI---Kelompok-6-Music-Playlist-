<?php

namespace App\Http\Controllers;

use App\Models\musics;
use Illuminate\Http\Request;

class musicController extends Controller
{
    // private static $instance = null;
    // public function __construct()
    // {
    //     parent::__construct();
    //     $music = music::all();
    //     return redirect()->intended('/dashboard', [
    //         'music' => $music,
    //     ]);
    // }

    // public static function getInstance()
    // {
    //     if (self::$instance == null) {
    //         self::$instance = new music();
    //     }
    //     return self::$instance;
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $music = musics::get();
        // return view('product.index', ['list' => $prods]);
        return view('admin.musicControl', [
            'list' => $music,
            'action' => 'admin/music'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.musicForm', [
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'admin/music'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $music = new musics();
        $music->title = $request->title;
        $music->artist = $request->artist;
        $music->album = $request->album;
        $music->year = $request->year;
        $music->genre = $request->genre;
        $music->path_lirik = $request->path_lirik;
        $music->path_chord = $request->path_chord;
        $music->path_downloadmusic = $request->path_downloadmusic;
        $music->path_imgPoster = $request->path_imgPoster;
        $music->time = $request->time;

        $music->save();
        return redirect('/admin/music')->with('msg', 'Tambah berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return musics::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.musicForm', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "admin/music/$id",
            // 'data' => Product::find($id)
            'data' => musics::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $music = musics::find($id);
        $music->title = $request->title;
        $music->artist = $request->artist;
        $music->album = $request->album;
        $music->year = $request->year;
        $music->genre = $request->genre;
        $music->path_lirik = $request->path_lirik;
        $music->path_chord = $request->path_chord;
        $music->path_downloadmusic = $request->path_downloadmusic;
        $music->path_imgPoster = $request->path_imgPoster;
        $music->time = $request->time;

        $music->save();
        return redirect('/admin/music')->with('msg', 'Edit berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        musics::destroy($id);
        return redirect('/admin/music')->with('msg', 'Hapus berhasil');
    }
}
