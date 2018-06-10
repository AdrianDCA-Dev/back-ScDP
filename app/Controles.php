<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Controles extends Model
{
    protected $fillable = ['planilla_id', 'inscripcion_id', 'tutor_id', 'descripcion', 'estado'];

    public function planilla()
    {
        return $this->belongsTo(Planilla::class);
    }

    public function inscripcion()
    {
        return $this->belongsTo(Inscripciones::class);
    }

    public function tutor()
    {
        return $this->belongsTo(Tutores::class);
    }
}
