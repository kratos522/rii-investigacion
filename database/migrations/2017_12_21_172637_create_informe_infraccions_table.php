<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeInfraccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_infracciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('licencia');
            $table->integer('identidad');
            $table->string('nombre_infractor');
            $table->string('placa');
            $table->string('marca_vehiculo');
            $table->string('tipo_vehiculo');
            $table->string('modelo_vehiculo');
            $table->string('infraccion');
            $table->string('lugar_infraccion');
            $table->DateTime('fecha_infraccion');
            $table->string('observacion');
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
        Schema::dropIfExists('informe_infracciones');
    }
}
