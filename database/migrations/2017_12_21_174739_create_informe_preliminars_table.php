<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformePreliminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes_preliminares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_expediente');
            $table->string('nombre_fiscal');
            $table->string('investigador');
            $table->string('placa_investigador');
            $table->string('delito');
            $table->DateTime('fecha_solicitud');
            $table->string('nombre_sospechoso')->nullable();
            $table->string('nombre_victima')->nullable();
            $table->integer('dias_plazo')->nullable();
            $table->DateTime('fecha_plazo')->nullable();
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
        Schema::dropIfExists('informes_preliminares');
    }
}
