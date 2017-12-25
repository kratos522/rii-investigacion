<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeCotejamientoDactilarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_cotejamientos_dactilares', function (Blueprint $table) {
         //faltaria ver como se va a manejar la huella
            $table->increments('id');
            $table->string('perito');
            $table->string('placa_perito');
            $table->string('nombre_detenido');
            $table->string('nombre_sospechoso')->nullable();
            $table->string('delito')->nullable();
            $table->DateTime('fecha_cotejamiento');
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
        Schema::dropIfExists('informe_cotejamiento_dactilars');
    }
}
