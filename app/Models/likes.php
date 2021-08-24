<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class likes extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_like';
    public $timestamps = false;

    function canciones(){
        return $this->belongsToMany(canciones::class);
    }
}
