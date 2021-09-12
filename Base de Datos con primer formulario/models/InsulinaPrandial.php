<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsulinaPrandial extends Model
{
    protected $fillable = [
        'nombre'
    ];

    //Relación 1 - N
    public function paciente()
    {
        return $this->belongsToMany('App\Paciente');
    }
}
