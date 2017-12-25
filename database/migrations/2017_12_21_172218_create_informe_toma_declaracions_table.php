<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeTomaDeclaracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_toma_declaraciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_expediente');
            $table->string('fiscal')->nullable();
            $table->string('id_testigo')->nullable();
            $table->string('nombre_testigo')->nullable();
            $table->string('sexo_testigo');
            $table->integer('edad_testigo');
            $table->DateTime('fecha_toma_declaracion');
            $table->string('nombre_tomador_declaracion');
            $table->string('placa');
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
        Schema::dropIfExists('informe_toma_declaracions');
    }
}
