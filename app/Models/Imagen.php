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

    public function Comercio() {
        $this->belongsTo(Comercio::Class, 'foreign_key');
    }
}
