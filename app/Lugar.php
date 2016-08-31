<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    public function getNombreAttribute($value)
    {
        return ucfirst($value);
    }
}
