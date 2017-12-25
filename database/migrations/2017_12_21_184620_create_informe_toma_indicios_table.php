<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeTomaIndiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_toma_indicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('indicio');
            $table->string('descripcion');
            $table->string('lugar_toma_indicio');
            $table->DateTime('fecha_toma_indicio');
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
        Schema::dropIfExists('informe_toma_indicios');
    }
}
