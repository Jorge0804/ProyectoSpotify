<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_categoria';

    function playlists(){
        return $this->belongsToMany(playlist::class, 'categorias_playlist', 'id_categoria', 'id_playlist')->with('imagen');
    }
}
