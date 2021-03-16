<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionDonanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucion_donante', function (Blueprint $table) {
            $table->bigIncrements('id_institucion')->unsigned();
            $table->bigInteger('id_provincia')->unsigned();
            $table->foreign('id_provincia')->references('id_prov')->on('provincias');
            $table->string('nombre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institucion_donante');
    }
}
