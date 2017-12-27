<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaDeclaracionTestigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_declaraciones_testigos', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('numero_expediente');
          $table->string('fiscal');
          $table->string('lugar_declaracion');
          $table->string('id_testigo');
          $table->string('nombre_testigo');
          $table->integer('edad_testigo');
          $table->string('sexo_testigo');
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
          $table->integer('numero_expediente');
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
        Schema::dropIfExists('acta_declaraciones_testigos');
    }
}
