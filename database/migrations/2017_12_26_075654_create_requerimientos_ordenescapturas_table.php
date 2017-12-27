<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequerimientosOrdenescapturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requerimientos_ordenescapturas', function (Blueprint $table) {
          //es hija (morphOne) de RequerimientoFiscal, requerimientable
            $table->increments('id');
            $table->integer('ordencaptura_id'); //llave Foranea OrdenCaptura
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
        Schema::dropIfExists('requerimientos_ordenescapturas');
    }
}
