<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeEnvioEvidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_envio_evidencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_expediente');
            $table->string('evidencia');
            $table->string('descripcion');
            $table->string('lugar_almacenamiento');
            $table->string('lugar_envio');
            $table->string('fiscal');
            $table->DateTime('fecha_almacenamiento');
            $table->DateTime('fecha_envio');
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
        Schema::dropIfExists('informe_envio_evidencias');
    }
}
