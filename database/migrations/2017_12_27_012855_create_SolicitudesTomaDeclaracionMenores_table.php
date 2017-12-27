<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTomaDeclaracionMenoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudestomadeclaracionmenores', function (Blueprint $table) {
          //es hija (morphOne) de solicitud, solicitable
            $table->increments('id');
            $table->integer('personamenor_id'); //llave Foranea de PersonaMenor
            $table->integer('fiscal_id'); //llave foranea Fiscal
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
        Schema::dropIfExists('solicitudestomadeclaracionmenores');
    }
}
