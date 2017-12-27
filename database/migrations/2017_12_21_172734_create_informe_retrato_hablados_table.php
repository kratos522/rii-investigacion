<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeRetratoHabladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_retratos_hablados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_expediente');
            $table->string('fiscal');
            $table->string('id_testigo')->nullable();
            $table->string('nombre_testigo')->nullable();
            $table->string('lugar');
            $table->string('perito');
            $table->DateTime('fecha_solicitud');
            $table->DateTime('fecha_retrato');
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
        Schema::dropIfExists('informe_retratos_hablados');
    }
}
