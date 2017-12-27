<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasRojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas_rojas', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('dependencia_id'); // llave Foranea Dependencia
            $table->integer('persona_natural_id'); //llave Foranea persona natural
            $table->integer('domicilio_id'); //llave Foranea domicilio
            $table->integer('delito_id'); //llave foranea Delito
            $table->string('perjuicio', 100)->nullable();
            $table->integer('funcionariopj_id'); //llave foranea FuncionarioPJ
            $table->integer('funcionarioss_id'); //llave foranea FuncionarioSS
            $table->integer('fiscal_id'); //llave foranea de fiscal
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
        Schema::dropIfExists('notas_rojas');
    }
}
