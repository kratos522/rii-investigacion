<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoRequerimientosInvestigativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorequerimientosinvestigativos', function (Blueprint $table) {
          //es hija (morphOne) de documento, documentable
            $table->increments('id');
            $table->integer('dependencia_id'); //llave foranea de dependencia
            $table->integer('fiscal_id'); //llave foranea de fiscal
            $table->text('solicitud');
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
        Schema::dropIfExists('autorequerimientosinvestigativos');
    }
}
