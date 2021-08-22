<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\canciones;

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

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    $playlists = \App\Models\playlist::all();
    $usuario = \Illuminate\Support\Facades\Auth::user();
    $categorias = \App\Models\categorias::with('playlists')->get();
    $canLogin = Route::has('login');
    $canRegister = Route::has('register');
    return Inertia::render('Spotify',compact('playlists', 'usuario', 'categorias', 'canLogin', 'canRegister'));
})->name('Spotify');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/Grid', function () {
    $playlists = \App\Models\playlist::all();
    $usuario = \Illuminate\Support\Facades\Auth::user();
    $categorias = \App\Models\categorias::with('playlists')->get();
    return Inertia::render('Grid',  compact('playlists', 'usuario', 'categorias'));
})->name('grid');

Route::middleware(['auth:sanctum', 'verified'])->get('/SpotifyLikes/{id_playlist}', function ($id_playlist) {
    $playlist = \App\Models\playlist::with('canciones')->with('imagen')->find($id_playlist);
    $playlists = \App\Models\playlist::all();
    $usuario = \Illuminate\Support\Facades\Auth::user();
    return Inertia::render('SpotifyLikes',  compact('playlist', 'playlists', 'usuario'));
})->name('SpotifyLikes');
