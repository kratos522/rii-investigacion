<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaInspeccioVehicularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_inspecciones_vehiculares', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('numero_expediente');
          $table->string('fiscal');
          $table->string('lugar_inspeccion');
          $table->string('tipo_transporte');
          $table->string('marca_vehiculo');
          $table->integer('tipo_vehiculo');
          $table->string('color_vehiculo');
          $table->string('modelo_vehiculo');
          $table->string('numero_placa');
          $table->string('VIN');
          $table->string('observaciones');
          $table->string('hallazgos_interiores');
          $table->string('observaciones_hallazgos_interiores');
          $table->string('hallazgos_externos');
          $table->string('observaciones_hallazgos_externos');
          $table->string('funcionario');
          $table->string('placa');
          $table->DateTime('fecha_inspeccion');
          $table->boolean('deleted')->default(false);
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
        Schema::dropIfExists('acta_inspecciones_vehiculares');
    }
}
