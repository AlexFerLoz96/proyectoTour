<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    use HasFactory;

    public function Imagen() {
        return $this->hasMany(Imagen::Class,'foreign_key');
    }

    public function Ciudad() {
        return $this->belongsTo(Ciudad::Class,'foreign_key');
    }
}
