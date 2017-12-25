<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->increments('id');
            //llevaria algun codigo de documento?
            $table->string('informable_type')->nullable();
            $table->integer('informable_id')->nullable();
            $table->string('titulo');
            $table->string('autor');
            $table->DateTime('fecha_creacion');
            $table->DateTime('fecha_envio');
            $table->string('lugar_creacion');
            $table->string('lugar_envio');
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
        Schema::dropIfExists('informes');
    }
}
