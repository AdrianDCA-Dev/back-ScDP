<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tribunales extends Model
{
    protected $fillable = ['user_id', 'defensa_id', 'nota'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function defensa()
    {
        return $this->belongsTo(Defensa::class);
    }

    public function tribunales()
    {
        return $this->hasMany(Tribunales::class);
    }
}
