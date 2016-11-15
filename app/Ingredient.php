<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function recetas()
    {
        return $this->belongsToMany(Recipe::class);
    }
}
