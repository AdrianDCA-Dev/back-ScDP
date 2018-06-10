<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planilla extends Model
{
    protected $fillable = ['numero', 'contenido', 'fechaEntrega'];

    public function controles()
    {
        return $this->hasMany(Controles::class);
    }

}
