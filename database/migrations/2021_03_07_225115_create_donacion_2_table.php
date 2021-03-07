<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonacion2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donacion_2', function (Blueprint $table) {
            $table->integer('id_proceso')->unsigned();
            $table->foreing('id_proceso')->references('id_proceso')->on('donacion_1');
            $table->boolean('entrevista_fam')->nullable();
            $table->boolean('orden_judicial')->nullable();
            $table->boolean('disp_ablacionista')->nullable();
            $table->boolean('envio')->nullable();
            $table->date('fecha_ablacion');
            $table->string('logistica');
            $table->boolean('distribucion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donacion_2');
    }
}
