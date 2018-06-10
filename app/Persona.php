<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['ci', 'nombre', 'apellidos', 'sexo',
        'fechaNac', 'direccion', 'telefono', 'celular', 'carrera'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
