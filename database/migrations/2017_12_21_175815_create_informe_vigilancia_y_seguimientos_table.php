<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeVigilanciaYSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_vigilancias_y_seguimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_expediente');
            $table->string('fiscal');
            $table->integer('id_orden');
            $table->string('oficial_asignado')->nullable();
            $table->integer('nombre_sospechoso')->nullable();
            $table->string('lugar_seguimiento')->nullable();
            $table->DateTime('fecha_comienzo_seguimiento')->nullable();
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('informe_vigilancias_y_seguimientos');
    }
}
