<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['ci', 'nombre', 'apellidos', 'sexo',
        'fechaNac', 'direccion', 'telefono', 'celular', 'carrera_id'];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function carrera()
    {
       return $this->belongsTo(Carrera::class);
    }
}
