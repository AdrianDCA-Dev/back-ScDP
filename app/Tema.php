<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $fillable = ['inscripcion_id', 'nombre', 'descripcion'];

    public function inscripcion()
    {
        return $this->belongsTo(Inscripciones::class);
    }

    public function tutor()
    {
        return $this->hasOne(Tutores::class);
    }

    public function tipoInvestigacion()
    {
        return $this->hasOne(TipoInvestigaciones::class);
    }
}
