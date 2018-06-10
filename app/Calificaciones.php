<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificaciones extends Model
{
    protected $fillable = ['tribunal_id', 'nota_final', 'descripcion'];

    public function tribunal()
    {
        return $this->belongsTo(Tribunales::class);
    }

}
