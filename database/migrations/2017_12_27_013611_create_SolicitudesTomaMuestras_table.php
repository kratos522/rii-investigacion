<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTomaMuestrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidS
     */
    public function up()
    {
        Schema::create('solicitudestomamuestras', function (Blueprint $table) {
          //es hija (morphOne) de solicitud, solicitable
            $table->increments('id');
            $table->integer('persona_natural_id'); //llave foranea de PersonaNatural
            $table->integer('lugar_id'); //llave foranea Lugar
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
        Schema::dropIfExists('solicitudestomamuestras');
    }
}
