<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    use HasFactory;
/*-------------------------------------------------------------------------------
------------------------FUNCIONES DE FOREIGN KEYS--------------------------------
--------------------------------------------------------------------------------*/
    public function imagen() {
        return $this->hasMany(Imagen::Class);
    }

    public function resena() {
        return $this->hasMany(Resena::Class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::Class);
    }
}
