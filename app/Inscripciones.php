<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripciones extends Model
{
    protected $fillable = ['user_id', 'modalidad_id', 'fecha', 'estado'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function modalidad()
    {
        return $this->belongsTo(Modalidades::class);
    }

    public function defensas()
    {
        return $this->hasMany(Defensa::class);
    }    

    public function controles()
    {
        return $this->hasMany(Controles::class);
    }
}
