<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\canciones;
use App\Models\playlist;
use Illuminate\Support\Facades\Auth;
use App\Models\categorias;
use App\Models\User;
use App\Models\likes;

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
    $playlists = playlist::all();
    $usuario = Auth::user();
    $categorias = categorias::with('playlists')->get();
    $canLogin = Route::has('login');
    $canRegister = Route::has('register');
    return Inertia::render('Spotify',compact('playlists', 'usuario', 'categorias', 'canLogin', 'canRegister'));
})->name('Spotify');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/Grid', function () {
    $playlists = playlist::all();
    $usuario = Auth::user();
    $categorias = categorias::with('playlists')->get();
    return Inertia::render('Grid',  compact('playlists', 'usuario', 'categorias'));
})->name('grid');

Route::middleware(['auth:sanctum', 'verified'])->get('/Playlist/{id_playlist}', function ($id_playlist) {
    $playlist = playlist::with('canciones')->with('imagen')->find($id_playlist);
    $playlists = playlist::all();
    $usuario = Auth::user();
    return Inertia::render('SpotifyPlaylist',  compact('playlist', 'playlists', 'usuario'));
})->name('Playlist');

Route::middleware(['auth:sanctum', 'verified'])->get('/Likes', function () {
    $playlists = playlist::all();
    $u = Auth::user();
    $usuario = User::with('canciones')->find($u->id);
    return Inertia::render('SpotifyLikes',  compact('playlists', 'usuario'));
})->name('Likes');

Route::middleware(['auth:sanctum', 'verified'])->get('/DarLike/{$id_cancion}', function ($id_cancion) {
    $like = new likes();
    $like->id_cancion = $id_cancion;
    $like->id_user = Auth::user()->id;
    $like->save();
})->name('DarLike');
