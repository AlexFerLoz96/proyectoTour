<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{
    use HasFactory;

    public function Comercio() {
        return $this->belongsTo(Comercio::Class,'foreign_key');
    }

    public function User() {
        return $this->belongsTo(User::Class,'foreign_key');
    }
}
