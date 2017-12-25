<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeRemisionPersonaMedicinaForensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_remision_personas_medicina_forense', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_expediente');
            $table->string('fiscal')->nullable();
            $table->string('id_victima')->nullable();
            $table->string('nombre_victima');
            $table->integer('edad_victima');
            $table->string('sexo_victima');
            $table->integer('lugar_traslado')->nullable();
            $table->DateTime('fecha_traslado');
            $table->string('perito');
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
        Schema::dropIfExists('informe_remision_persona_medicina_forenses');
    }
}
