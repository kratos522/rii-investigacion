<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesCapturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_captura', function (Blueprint $table) {
          //es hija (morphOne) de OrdenCaptura, ordenable
            $table->increments('id');            
            $table->integer('dependencia_id'); // llave Foranea Dependencia
            $table->integer('persona_natural_id'); //LLave Foranea Persona Natural
            $table->integer('domicilio_id'); //llave Foranea domicilio
            $table->integer('delito_id'); //llave Foranea Delito
            $table->string('perjuicio', 100);
            $table->integer('funcionarioss_id'); //llave foranea FuncionarioSS
            $table->integer('fiscal_id'); //llave foranea de fiscal
            $table->integer('fichapersona_id'); //llave Foranea de Ficha Persona
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
        Schema::dropIfExists('ordenes_captura');
    }
}
