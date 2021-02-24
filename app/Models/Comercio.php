<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    use HasFactory;

    public function Imagen() {
        return $this->hasMany(Imagen::Class,'foreign_key');
    }

    public function Resena() {
        return $this->hasMany(Resena::Class,'foreign_key');
    }

    public function Categoria() {
        return $this->belongsTo(Categoria::Class,'foreign_key');
    }
}
