<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesallanamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenesallanamientos', function (Blueprint $table) {
          //es hija (morphOne) de OrdenCaptura, ordenable
            $table->increments('id');            
            $table->integer('fiscal_id'); //llave foranea de fiscal
            $table->integer('domicilio_id'); //llave Foranea domicilio
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
        Schema::dropIfExists('ordenesallanamientos');
    }
}
