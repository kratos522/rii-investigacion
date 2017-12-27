<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaCitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_citaciones', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('numero_expediente');
          $table->string('fiscal');
          $table->string('lugar_citacion');
          $table->string('id_persona');
          $table->string('nombre_persona');
          $table->DateTime('fecha_citacion');
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
        Schema::dropIfExists('acta_citaciones');
    }
}
