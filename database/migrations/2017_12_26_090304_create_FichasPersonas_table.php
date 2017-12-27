<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FichasPersonas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('persona_natural_id'); // llave Foranea de persona Natural                                   
            $table->date('fecha_captura');
            $table->text('caracteristicas_detencion');
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
        Schema::dropIfExists('FichasPersonas');
    }
}
