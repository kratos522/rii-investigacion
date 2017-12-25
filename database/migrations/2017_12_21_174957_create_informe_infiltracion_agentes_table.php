<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeInfiltracionAgentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_infiltracion_agentes', function (Blueprint $table) {
            $table->increments('id');
            $table->DateTime('fecha_infiltracion');
            $table->string('organizacion_infiltrada')->nullable();
            $table->string('nombre_agente')->nullable();
            $table->string('fiscal');
            $table->string('descripcion_infiltracion');
            $table->string('observaciones');
            $table->string('lugar_captura');
            $table->DateTime('fecha_captura');
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
        Schema::dropIfExists('informe_infiltracion_agentes');
    }
}
