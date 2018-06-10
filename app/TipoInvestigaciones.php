<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoInvestigaciones extends Model
{
    protected $fillable = ['tema_id', 'nombre', 'descripcion'];

    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }

}
