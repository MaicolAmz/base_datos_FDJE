<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //protected $table = 'pacientes';
    protected $fillable = [
        'id',
        'cedula',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'email',
        'lugar_nacimiento',
        'fecha_diagnostico_diabetes',
        'celular',
        'telefono_convencional',
        'valor_hemoglobina',
        'fecha_ultimo_examen_hemoglobina',
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
        'fecha_ultima_cita',
        'nombre_hospital',
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
        'problemas_diabetes',
        'id_ciudad',
        'id_diabetes',
        'id_insulina_basals',
        'id_insulina_prandials',
        'id_tipo_hospital',
        'id_ayuda_fundacion',
        'id_medico'
    ];

    //Relación 1 - N (inversa)
    public function ciudad()
    {
        return $this->belongsTo('App\Ciudad');
    }

    public function diabetes()
    {
        return $this->belongsTo('App\Diabetes');
    }

    public function insulina_basal()
    {
        return $this->belongsTo('App\InsulinaBasal');
    }

    public function insulina_pradial()
    {
        return $this->belongsTo('App\InsulinaPrandial');
    }

    public function tipo_hospital()
    {
        return $this->belongsTo('App\TipoHospital');
    }

    public function ayudas_fundacion()
    {
        return $this->belongsTo('App\AyudaFundacion');
    }

    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }
}