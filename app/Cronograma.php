<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model
{
    protected $fillable = ['fechaDefModUno', 'fechaDefModDos', 'descripcion'];

    public function defensas()
    {
        return $this->hasMany(Defensa::class);
    }
}
