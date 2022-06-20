<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\musicController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\premiumPlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\adminUserController;
use App\Http\Controllers\musicPlayerController;
use App\Models\music;
use App\Models\musics;
use Illuminate\Cache\RateLimiting\Limit;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/playMusic', [musicPlayerController::class, 'playMusic']);

Route::get('/', function () {
    return view('login');
});



Route::get('/admin', function () {
    return redirect('/admin/music');
});

Route::resource('/admin/music', musicController::class);
Route::resource('/admin/user', adminUserController::class);
Route::resource('/profile', ProfileController::class);
Route::resource('/popular', musicPlayerController::class);

Route::get('/dashboard', function () {
    $popularMusic = musics::limit(4)->get();

    return view('dashboard', compact('popularMusic'));
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/musicPlayer', function () {
    return view('musicPlayer');
});

Route::get('/mymusic', function () {
    return view('mymusic') ;
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/premiumPlan', function () {
    return view('premiumPlan');
});

Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'authentication']);
Route::get('/logout', [loginController::class, 'logout']);
Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);



Route::get('/fileinduk', function () {
    return view('layout.main');
});
