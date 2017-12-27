<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeExtradicionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_extradiciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_nota_roja');
            $table->string('identificacion_extraditable');
            $table->string('nombre_extraditable');
            $table->string('lugar_captura');
            $table->DateTime('fecha_captura');
            //delito puede no ir
            $table->string('delito')->nullable();
            //puede no ir
            $table->DateTime('fecha_extradicion')->nullable();
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
        Schema::dropIfExists('informe_extradiciones');
    }
}
