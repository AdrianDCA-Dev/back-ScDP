<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidades extends Model
{
    protected $fillable = ['nombre', 'descripcion'];

    public function inscripciones()
    {
        return $this->hasMany(Inscripciones::class);
    }
}
