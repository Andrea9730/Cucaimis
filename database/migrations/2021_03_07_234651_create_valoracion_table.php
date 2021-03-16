<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValoracionTable extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('valoracion', function (Blueprint $table) {
        $table->integer('id_proceso')->unsigned();
        $table->foreign('id_proceso')->references('id_proceso')->on('donacion_1');
        $table->bigInteger('id_banco')->unsigned();
        $table->foreign('id_banco')->references('id_banco')->on('banco_tejido');
        $table->integer('estado')->unsigned();
        $table->boolean('asigancion')->nullable();
        $table->date('fecha_implante')->nullable();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valoracion');
    }
}