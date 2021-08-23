<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Ruta de me gustas para cada usuario
Route::get('/users', function(){
    return \App\Models\User::with('canciones')->find(2);
});

Route::get('/canciones', function(){
    return \App\Models\canciones::with('imagen')->first();
});

Route::get('/playlist', function(){
    return \App\Models\playlist::with('imagen')->with('canciones')->get();
});

Route::get('/categorias', function(){
    return \App\Models\categorias::with('playlists')->get();
});

Route::get('/likes', function(){
    return \App\Models\categorias::with('playlists')->get();
});
