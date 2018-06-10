<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable, EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'persona_id', 'name', 'email', 'password', 'estado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function tutor()
    {
        return $this->hasOne(Tutores::class);
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripciones::class);
    }

    public function tribunales()
    {
        return $this->hasMany(Tribunales::class);
    }

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }
}
