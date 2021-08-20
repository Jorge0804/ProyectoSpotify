<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_playlist';
    protected $table = 'playlist';

    function imagen(){
        return $this->hasOne(imagenes::class, 'id_imagen');
    }

    function canciones(){
        return $this->belongsToMany(canciones::class, 'canciones_playlist', 'id_cancion', 'id_playlist');
    }
}
