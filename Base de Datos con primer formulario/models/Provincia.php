<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $fillable = [
        'nombre'
    ];

    //Relación 1 - N
    public function ciudad()
    {
        return $this->hasMany('App\Ciudad');
    }
}
