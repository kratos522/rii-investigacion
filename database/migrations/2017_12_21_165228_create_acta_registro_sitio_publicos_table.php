<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaRegistroSitioPublicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_registro_sitio_publicos', function (Blueprint $table) {
          //es hija (morphOne) de Acta, actable
            $table->increments('id');
            $table->integer('denuncia_id'); //llave denuncia
            $table->string('atendido', 100);
            $table->text('finalidad_registro');
            $table->text('descripcion_elementos_recolectados');
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
        Schema::dropIfExists('acta_registro_sitio_publicos');
    }
}
