<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActasRegistrosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actasregistrospersonales', function (Blueprint $table) {
          //es hija (morphOne) de Acta, actable
            $table->increments('id');
            $table->integer('persona_natural_id'); //llave foranea PersonaNatural
            $table->integer('lugar_id'); //llave Foranea de Lugar
            $table->date('fecha_registro');
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
        Schema::dropIfExists('actasregistrospersonales');
    }
}
