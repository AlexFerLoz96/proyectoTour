<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{

    protected $fillable = [
        'ruta'
    ];
  
    public function setFilenamesAttribute($value)
    {
        $this->attributes['ruta'] = json_encode($value);
    }

    public function comercio() {
        return $this->belongsTo(Comercio::Class);
    }

    public function lugar() {
        return $this->belongsTo(Lugar::Class);
    }
}
