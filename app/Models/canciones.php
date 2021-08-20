<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class canciones extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_cancion';

    function imagen(){
        return $this->hasOne(imagenes::class, 'id_imagen');
    }
}
