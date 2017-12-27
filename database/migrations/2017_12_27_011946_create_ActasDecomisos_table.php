<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActasDecomisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actasdecomisos', function (Blueprint $table) {
          //es hija (morphOne) de Acta, actable
            $table->increments('id');
            $table->integer('persona_natural_id'); //llave Foranea PersonaNatural
            $table->string('tipo_decomiso', 100);
            $table->text('descripcion');
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
        Schema::dropIfExists('actasdecomisos');
    }
}
