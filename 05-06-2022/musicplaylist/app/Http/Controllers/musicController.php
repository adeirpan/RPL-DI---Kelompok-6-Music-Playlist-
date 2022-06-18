<?php

namespace App\Http\Controllers;

use App\Models\music;
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
        return view('admin.musicControl', [
            'title' => 'music'
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
        $prod = new music();
        $prod->name = $request->name;
        $prod->price = $request->price;
        $prod->deskripsi = $request->deskripsi;
        $prod->image = $request->image;
        $prod->save();
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
        return music::find($id);
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
            'data' => music::find($id)
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
        $prod = music::find($id);
        $prod->name = $request->name;
        $prod->price = $request->price;
        $prod->deskripsi = $request->deskripsi;
        $prod->image = $request->image;
        $prod->save();
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
        music::destroy($id);
        return redirect('/admin/music')->with('msg', 'Hapus berhasil');
    }
}
