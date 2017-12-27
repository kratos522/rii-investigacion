<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequerimientosFiscalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requerimientos_fiscales', function (Blueprint $table) {
            //es hija (morphOne) de documento, documentable
            $table->increments('id');
            $table->integer('imputado_id'); //llave foranea Imputado
            $table->text('narracion');
            $table->text('descripcion_pruebas');
            $table->string('calificacion_juridica', 100);
            $table->integer('requerimientable_id'); //herencia de Requerimiento Fiscal
            $table->string('requerimientable_type', 191);
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
        Schema::dropIfExists('requerimientos_fiscales');
    }
}
