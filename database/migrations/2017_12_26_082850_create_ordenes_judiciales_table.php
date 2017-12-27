<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesJudicialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenesjudiciales', function (Blueprint $table) {
          //es hija (morphOne) de OrdenCaptura, ordenable
            $table->increments('id');            
            $table->integer('fiscal_id'); //llave foranea de Fiscal
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
        Schema::dropIfExists('ordenesjudiciales');
    }
}
