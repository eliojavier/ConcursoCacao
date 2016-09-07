<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    public function ingredientes()
    {
        return $this->belongsToMany('App\Ingrediente');
    }
}
