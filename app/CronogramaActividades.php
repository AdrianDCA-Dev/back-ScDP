<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CronogramaActividades extends Model
{
    protected $fillable = ['title', 'descripcion', 'color', 'textColor', 'start', 'end'];
}
