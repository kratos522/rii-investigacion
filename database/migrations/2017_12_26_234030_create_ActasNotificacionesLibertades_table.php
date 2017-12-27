<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActasNotificacionesLibertadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actasnotificacioneslibertades', function (Blueprint $table) {
          //es hija (morphOne) de Acta, actable
            $table->increments('id');
            $table->integer('persona_natural_id'); //llave Foranea PersonaNatural
            $table->date('fecha_captura');
            $table->integer('lugar_id'); //llave Foranea Lugar
            $table->date('fecha_libertad');
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
        Schema::dropIfExists('actasnotificacioneslibertades');
    }
}
