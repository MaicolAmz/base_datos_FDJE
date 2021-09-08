<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ayudas_Fundacion extends Model
{
    protected $fillable = [
        'tipo_ayuda'
    ];

    //Relación N - N
    public function paciente()
    {
        return $this->belongsToMany('App/Models/Paciente');
    }
}
