<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoHospital extends Model
{
    protected $fillable = [
        'tipo_hospital',
    ];

    //Relación 1 - N
    public function paciente()
    {
        return $this->hasMany('App\Paciente');
    }
}
