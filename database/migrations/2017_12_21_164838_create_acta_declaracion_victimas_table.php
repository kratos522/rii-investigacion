<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaDeclaracionVictimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_declaracion_victimas', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('numero_expediente');
          $table->string('fiscal');
          $table->string('lugar_declaracion');
          $table->string('id_victima');
          $table->string('nombre_victima');
          $table->integer('edad_victima');
          $table->string('sexo_victima');
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
        Schema::dropIfExists('acta_declaracion_victimas');
    }
}
