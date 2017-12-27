<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDictamenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictamenes', function (Blueprint $table) {
          //es hija (morphOne) de documento, documentable
            $table->increments('id');
            $table->string('laboratorio', 100);
            $table->date('fecha_dictamen');
            $table->integer('lugar_id');    //llave foranea Lugar
            $table->text('indicios');
            $table->text('evidencias');
            $table->text('ampliaciones');
            $table->text('rectificaciones');
            $table->text('transcripciones');
            $table->integer('funcionariomp_id');  //llave foranea FuncionarioMP
            $table->integer('dictamentable_id'); //herencia de Requerimiento Fiscal
            $table->string('dictamentable_type', 191);
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
        Schema::dropIfExists('dictamenes');
    }
}
