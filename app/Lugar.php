<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    public function getNombreAttribute($value)
    {
        return ucfirst($value);
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
