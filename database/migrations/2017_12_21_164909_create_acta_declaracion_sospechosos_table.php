<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaDeclaracionSospechososTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_declaracion_sospechosos', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('numero_expediente');
          $table->string('fiscal');
          $table->string('lugar_sospechos');
          $table->string('id_sospechoso');
          $table->string('nombre_sospechoso');
          $table->integer('edad_sospechoso');
          $table->string('sexo_sospechoso');
          $table->string('lugar_nacimiento');
          $table->string('estado_civil');
          $table->string('nivel_educativo');
          $table->string('direcion_vivienda');
          $table->string('telefono');
          $table->string('correo');
          $table->string('declaracion');
          $table->string('abogado_defensor')->nullable();
          $table->string('funcionario');
          $table->string('placa');
          $table->DateTime('fecha_declaracion');
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
        Schema::dropIfExists('acta_declaracion_sospechosos');
    }
}
