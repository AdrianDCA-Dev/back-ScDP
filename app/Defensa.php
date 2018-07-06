<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defensa extends Model
{
    protected $fillable = ['inscripcion_id', 'cronograma_id', 'type', 'estado'];

    public function inscripcion()
    {
        return $this->belongsTo(Inscripciones::class);
    }

    public function cronograma()
    {
        return $this->belongsTo(Cronograma::class);
    }
}
