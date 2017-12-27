<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformePerfilacionCriminalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_perfilaciones_criminales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_expediente');
            $table->string('fiscal');
            $table->DateTime('fecha_solicitud');
            $table->DateTime('fecha_envio');
            $table->string('nombre_sospechoso');
            $table->string('nombre_victima');
            $table->string('perito');
            $table->string('descripcion');
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
        Schema::dropIfExists('informe_perfilaciones_criminales');
    }
}
