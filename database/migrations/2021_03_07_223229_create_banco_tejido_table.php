<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBancoTejidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banco_tejido', function (Blueprint $table) {
            $table->integer('id_banco')->unsigned()->primary();
            $table->string('nombre');
            $table->foreign('id_provincia')->references('id_prov')->on('provincias');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banco_tejido');
    }
}
