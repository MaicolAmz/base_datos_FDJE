<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{

    protected $fillable = [
        'cedula',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'email',
        'lugar_nacimiento',
        'fecha_diagnostico_diabetes',
        'celular',
        'valor_hemoglobina',
        'veces_mide_glucosa',
        'tiene_registro_glucosa',
        'puede_medir_glucosa',
        'dosis_insulina_basal',
        'dosis_insulina_prandial',
        'sintoma_frente_hipoglucemia',
        'veces_hipoglucemia_menos',
        'mas_baja_hipoglucemia',
        'administra_hipoglucemia',
        'tiene_convulsiones',
        'nombres_Medico',
        'fecha_ultima_cita',
        'hospital',
        'cedula_representante',
        'nombres_representante',
        'celular_representante',
        'solicita_ayuda_fundacion',
        'otra_enfermedad',
        'cantidad_familia',
        'cantidad_menores_edad',
        'algun_discapacitado_familia',
        'zona_vive',
        'tipo_vivienda',
        'personas_aportan_familia',
        'situacion_jefe_hogar',
        'problemas_diabetes'
    ];

    //Relación 1 - N (inversa)
    public function ciudad()
    {
        return $this->belongsTo('App\Models\Ciudad');
    }

    public function diabetes()
    {
        return $this->belongsTo('App\Models\Diabetes');
    }

    public function insulina_basal()
    {
        return $this->belongsTo('App\Models\Insulina_Basal');
    }

    public function insulina_pradial()
    {
        return $this->belongsTo('App\Models\Insulina_Prandial');
    }

    public function tipo_hospital()
    {
        return $this->belongsTo('App\Models\TipoHospitales');
    }

    public function ayudas_fundacion()
    {
        return $this->belongsTo('App\Models\Ayudas_Fundacion');
    }

    public function diabetes_problema()
    {
        return $this->belongsTo('App\Models\ProblemaDiabetes');
    }
}
