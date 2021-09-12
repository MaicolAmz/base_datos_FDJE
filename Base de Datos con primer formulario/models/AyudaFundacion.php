<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AyudaFundacion extends Model
{
    protected $fillable = [
        'tipo_ayuda'
    ];

    //Relación N - N
    public function paciente()
    {
        return $this->belongsToMany('App/Paciente');
    }
}
