<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeEvidenciaEncontradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_evidencias_encontradas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_expediente');
            $table->string('fiscal');
            $table->string('evidencia');
            $table->string('tipo_evidencia');
            $table->string('descripcion');
            $table->string('lugar_encuentro');
            $table->string('oficial');
            $table->integer('placa');
            $table->DateTime('fecha_encuentro');
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
        Schema::dropIfExists('informe_evidencias_encontradas');
    }
}
