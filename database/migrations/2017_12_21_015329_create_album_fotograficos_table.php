<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumFotograficosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_fotograficos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_expediente');
            $table->integer('id_acta');
            $table->string('fiscal');
            $table->string('nombre_autor');
            $table->string('id_autor');
            $table->string('direccion_autor');
            $table->string('departamento_investigacion_autor');
            $table->string('tel_oficina_autor');
            $table->string('direccion_oficina_autor');
            $table->string('investigador');
            $table->string('nombre_ofendido');
            $table->string('nombre_sospechoso');
            $table->string('delito');
            $table->integer('id_acta_escena_crimen');
            $table->integer('numero_fotografias_tomadas');
            $table->string('nombre_fotografo');
            $table->string('serie_camara_utilizada');
            $table->DateTime('fecha_creacion')->nullable();
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
        Schema::dropIfExists('album_fotograficos');
    }
}
