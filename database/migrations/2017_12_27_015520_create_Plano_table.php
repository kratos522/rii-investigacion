<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planos', function (Blueprint $table) {
          //es hija (morphOne) de documento, documentable
            $table->increments('id');
            $table->integer('ofendido_id'); //llave foranea ofendido
            $table->integer('sospechoso_id'); //llave foranea sospechoso
            $table->integer('lugar_id'); //llave foranea lugar
            $table->date('fecha');
            $table->string('levanto_croquis', 100);
            $table->integer('caso_id'); //llave foranea caso
            $table->integer('denuncia_id'); //llave foranea denuncia
            $table->string('escala', 100);
            $table->string('tipo_plano', 100);
            $table->text('description');
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
        Schema::dropIfExists('planos');
    }
}
