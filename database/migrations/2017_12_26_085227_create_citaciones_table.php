<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citaciones', function (Blueprint $table) {
          //es hija (morphOne) de documento, documentable
            $table->increments('id');
            $table->string('asunto', 100);            
            $table->dateTime('fecha');
            $table->string('lugar', 100);
            $table->integer('persona_natural_id'); //llave foranea de persona Natural
            $table->integer('funcionario_id'); //llave foranea de funcionario
            $table->boolean('deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migra$table->string('lugar', 100);tions.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citaciones');
    }
}
