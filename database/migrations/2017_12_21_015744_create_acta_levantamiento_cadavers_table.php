<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaLevantamientoCadaversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_levantamiento_de_cadaver', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_expediente')->nullable();
            $table->integer('id_acta')->nullable();
            $table->string('fiscal');
            $table->string('lugar_levantamiento');
            $table->string('descripcion_levantamiento');
            $table->string('nombre_victima')->nullable();
            $table->string('id_victima')->nullable();
            $table->string('sexo_victima')->nullable();
            $table->integer('edad_victima')->nullable();
            $table->string('fiscal_escena_crimen');
            $table->DateTime('fecha_levantamiento');
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
        Schema::dropIfExists('acta_levantamiento_cadavers');
    }
}
