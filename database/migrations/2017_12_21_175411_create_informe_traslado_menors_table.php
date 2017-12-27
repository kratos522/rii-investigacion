<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeTrasladoMenorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_traslado_menores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_expediente');
            $table->string('fiscal');
            $table->integer('id_menor');
            $table->string('nombre_menor');
            $table->integer('edad_menor');
            $table->string('lugar_captura');
            $table->DateTime('fecha_captura');
            $table->string('lugar_retencion');
            $table->DateTime('lugar_traslado');
            $table->DateTime('fecha_traslado');
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
        Schema::dropIfExists('informe_traslado_menores');
    }
}
