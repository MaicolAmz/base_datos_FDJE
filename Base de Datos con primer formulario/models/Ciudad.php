<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    //protected $table = 'ciudades';
    protected $fillable = [
        'nombre_ciudad',
        'id_provincia'
    ];

    //Relacion 1 - N
    public function paciente()
    {
        return $this->hasMany('App\Paciente');
    }

    //Relacion 1 - N (inversa)
    public function provincia()
    {
        return $this->belongsTo('App\Provincia');
    }
}
