<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
          //es hija (morphOne) de documento, documentable
            $table->increments('id');
            $table->integer('ordenable_id'); //herencia de Requerimiento Fiscal
            $table->string('ordenable_type', 191);
            $table->integer('funcionariopj_id'); //llave Foranea FuncionarioPJ
            $table->integer('lugar_id'); //llave foranea Lugar
            $table->date('fecha_orden');
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
        Schema::dropIfExists('ordenes');
    }
}
