<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutores extends Model
{
    protected $fillable = ['user_id', 'tema_id', 'carrera', 'descripcion'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }

    public function controles()
    {
        return $this->hasMany(Controles::class);
    }
}
