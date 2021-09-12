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
            $table->string('cedula', 15)->unique()->nullable();
            $table->string('nombres', 100)->nullable();
            $table->string('apellidos', 75)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('email', 100)->unique()->nullable();
            $table->string('lugar_nacimiento', 40)->nullable();
            $table->date('fecha_diagnostico_diabetes')->nullable();
            $table->string('celular', 15)->nullable();
            $table->string('telefono_convencional', 15)->nullable();
            $table->string('valor_hemoglobina', 10)->nullable();
            $table->date('fecha_ultimo_examen_hemoglobina')->nullable();
            $table->integer('veces_mide_glucosa')->nullable();
            $table->string('tiene_registro_glucosa', 10)->nullable();
            $table->string('puede_medir_glucosa', 10)->nullable();
            $table->string('dosis_insulina_basal', 200)->nullable();
            $table->string('dosis_insulina_prandial', 200)->nullable();
            $table->string('sintoma_frente_hipoglucemia', 10)->nullable();
            $table->integer('veces_hipoglucemia_menos')->nullable();
            $table->integer('mas_baja_hipoglucemia')->nullable();
            $table->string('administra_hipoglucemia', 120)->nullable();
            $table->string('tiene_convulsiones', 10)->nullable();
            $table->date('fecha_ultima_cita')->nullable();
            $table->string('nombre_hospital', 120)->nullable();
            $table->string('cedula_representante', 15)->nullable();
            $table->string('nombres_representante', 75)->nullable();
            $table->string('celular_representante', 15)->nullable();
            $table->string('solicita_ayuda_fundacion', 10)->nullable();
            $table->string('otra_enfermedad', 10)->nullable();
            $table->integer('cantidad_familia')->nullable();
            $table->integer('cantidad_menores_edad')->nullable();
            $table->string('algun_discapacitado_familia', 50)->nullable();
            $table->string('zona_vive', 30)->nullable();
            $table->string('tipo_vivienda', 50)->nullable();
            $table->integer('personas_aportan_familia')->nullable();
            $table->string('situacion_jefe_hogar', 35)->nullable();
            $table->string('problemas_diabetes', 60)->nullable();
            $table->unsignedBigInteger('id_ciudad');
            $table->foreign('id_ciudad')
                ->references('id')->on('ciudads')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_diabetes');
            $table->foreign('id_diabetes')
                ->references('id')->on('diabetes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                $table->unsignedBigInteger('id_insulina_basals');
            $table->foreign('id_insulina_basals')
                ->references('id')->on('insulina_basals')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_insulina_prandials');
            $table->foreign('id_insulina_prandials')
                ->references('id')->on('insulina_prandials')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                $table->unsignedBigInteger('id_tipo_hospital');
            $table->foreign('id_tipo_hospital')
                ->references('id')->on('tipo_hospitals')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_ayuda_fundacion');
            $table->foreign('id_ayuda_fundacion')
                ->references('id')->on('ayuda_fundacions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_medico');
            $table->foreign('id_medico')
                ->references('id')->on('medicos')
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
