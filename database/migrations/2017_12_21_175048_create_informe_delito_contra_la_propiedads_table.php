<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeDelitoContraLaPropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_delitos_contra_la_propiedad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sospechoso')->nullable();
            $table->string('nombre_sospechoso')->nullable();
            $table->string('descripcion_danios');
            $table->string('observaciones');
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
        Schema::dropIfExists('informe_delito_contra_la_propiedads');
    }
}
