<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeIntervencionComunicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_intervencion_comunicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_solicitud');
            $table->integer('id_aprobacion');
            $table->DateTime('fecha_solicitud');
            $table->DateTime('fecha_aprovacion');
            $table->integer('numero_juez');
            $table->integer('numero_expediente');
            $table->string('fiscal');
            $table->string('descripcion_intervencion');
            $table->integer('tiempo_intervencion')->nullable();
            $table->DateTime('fecha_comienzo_intervencion');
            $table->DateTime('fecha_fin_intervension')->nullable();
            $table->string('observaciones');
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
        Schema::dropIfExists('informe_intervencion_comunicacions');
    }
}
