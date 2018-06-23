<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleDefensa extends Model
{
    protected $fillable = ['defensa_id', 'descripcion'];

    public function defensa()
    {
        return $this->belongsTo(Defensa::class);
    }
}
