<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    //protected $table = 'ciudades';
    protected $fillable = [
        'nombres'
    ];

    //Relacion 1 - N
    public function paciente()
    {
        return $this->hasMany('App\Paciente');
    }
}
