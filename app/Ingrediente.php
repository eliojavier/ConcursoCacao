<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    public function recetas()
    {
        return $this->belongsToMany('App\Receta');
    }
}
