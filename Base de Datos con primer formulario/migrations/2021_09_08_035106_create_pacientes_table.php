<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('cedula', 15)->unique();
            $table->string('nombres', 120);
            $table->string('apellidos', 120);
            $table->date('fecha_nacimiento');
            $table->string('email')->unique();
            $table->string('lugar_nacimiento', 50);
            $table->date('fecha_diagnostico_diabetes');
            $table->string('celular', 15);
            $table->string('telefono_convencional', 15);
            $table->integer('valor_hemoglobina');
            $table->integer('veces_mide_glucosa');
            $table->string('tiene_registro_glucosa', 50);
            $table->string('puede_medir_glucosa', 50);
            $table->string('dosis_insulina_basal', 120);
            $table->string('dosis_insulina_prandial', 120);
            $table->integer('sintoma_frente_hipoglucemia');
            $table->integer('veces_hipoglucemia_menos');
            $table->integer('mas_baja_hipoglucemia');
            $table->integer('administra_hipoglucemia');
            $table->boolean('tiene_convulsiones');
            $table->string('nombres_medico', 200);
            $table->date('fecha_ultima_cita');
            $table->string('nombre_hospital', 200);
            $table->string('cedula_representante', 15);
            $table->string('nombres_representante');
            $table->string('celular_representante', 15);
            $table->boolean('solicita_ayuda_fundacion');
            $table->string('otra_enfermedad', 200);
            $table->integer('cantidad_familia');
            $table->integer('cantidad_menores_edad');
            $table->string('algun_discapacitado_familia', 150);
            $table->string('zona_vive', 40);
            $table->string('tipo_vivienda', 45);
            $table->integer('personas_aportan_familia');
            $table->string('situacion_jefe_hogar', 40);                   
            $table->unsignedBigInteger('id_ciudad');
            $table->foreign('id_ciudad')
                ->references('id')->on('ciudades')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_diabetes');
            $table->foreign('id_diabetes')
                ->references('id')->on('diabetes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_insulina_basals');
            $table->foreign('id_insulina_basals')
                ->references('id')->on('insulinas_basal')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_insulina_prandials');
            $table->foreign('id_insulina_prandials')
                ->references('id')->on('insulina_prandials')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_tipo_hospitales');
            $table->foreign('id_tipo_hospitales')
                ->references('id')->on('tipo_hospitales')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_ayudas_fundacions');
            $table->foreign('id_ayudas_fundacions')
                ->references('id')->on('ayudas_fundacions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                $table->unsignedBigInteger('id_problema_diabetes');
            $table->foreign('id_problema_diabetes')
                ->references('id')->on('problema_diabetes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
