<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeTrasladoCapturadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_traslado_capturados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_expediente');
            $table->string('fiscal');
            $table->string('id_imputado');
            $table->string('nombre_imputado');
            $table->integer('id_orden_captura')->nullable();
            $table->DateTime('fecha_captura');
            $table->string('lugar_captura');
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
        Schema::dropIfExists('informe_traslado_capturados');
    }
}
