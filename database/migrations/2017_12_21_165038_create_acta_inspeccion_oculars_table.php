<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaInspeccionOcularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_inspecciones_oculares', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('numero_expediente');
          $table->string('fiscal');
          $table->string('lugar_inspeccion');
          $table->string('fecha_inspeccion');
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
        Schema::dropIfExists('acta_inspecciones_oculares');
    }
}
