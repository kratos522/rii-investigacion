<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
          //es hija (morphOne) de documento, documentable
            $table->increments('id');
            $table->date('fecha_solicitud');
            $table->integer('persona_natural_id'); //llave Foranea PersonaNatural
            $table->integer('dependencia_id'); //llave foranea Dependencia
            $table->integer('funcionario_id'); //llave foranea Funcionario
            $table->integer('solicitable_id'); //herencia actas
            $table->string('solicitable_type', 191);
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
        Schema::dropIfExists('solicitudes');
    }
}
