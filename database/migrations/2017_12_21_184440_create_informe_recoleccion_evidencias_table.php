<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeRecoleccionEvidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_recoleccion_evidencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evidencia');
            $table->string('tipo_evidencia');
            $table->string('lugar_recoleccion');
            $table->DateTime('fecha_recoleccion');
            $table->string('oficial')->nullable();
            $table->string('estado_evidencia');
            $table->string('descripcion');
            $table->string('resultados');
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
        Schema::dropIfExists('informe_recoleccion_evidencias');
    }
}
