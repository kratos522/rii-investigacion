<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeTrasladoEvidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_traslado_evidencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_expediente');
            $table->string('fiscal');
            $table->string('evidencia');
            $table->string('descripcion')->nullable();
            $table->DateTime('fecha_encuentro_evidencia');
            $table->string('lugar_encuentro_evidencia');
            $table->DateTime('fecha_traslado');
            $table->string('lugar_traslado');
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
        Schema::dropIfExists('informe_traslado_evidencias');
    }
}
