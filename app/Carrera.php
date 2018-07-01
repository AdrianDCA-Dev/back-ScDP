<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = ['facultad_id', 'nombre', 'descripcion'];

    public function facultad()
    {
        return $this->belongsTo(Facultade::class);
    }
}
