<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesInspeccionCorporalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenesInspeccionCorporal', function (Blueprint $table) {
          //es hija (morphOne) de OrdenCaptura, ordenable
            $table->increments('id');
            $table->integer('persona_natural_id'); //llave Foranea Persona Natural
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
        Schema::dropIfExists('ordenesInspeccionCorporal');
    }
}
