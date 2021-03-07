<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonacion1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donacion_1', function (Blueprint $table) {
            $table->integer('id_proceso')->unsigned()->primary();
            $table->integer('cuil_ablacionista')->unsigned();
            $table->foreign('cuil_ablacionista')->references('cuil')->on('usuarios');
            $table->boolean('cert_defuncion')->nullable();
            $table->integer('id_provincia')->unsigned();
            $table->foreign('id_provincia')->references('id_prov')->on('provincias');
            $table->integer('contraindicaciones')->unsigned();
            $table->foreign('contraindicaciones')->references('id_contraindicacion')->on('contraindicaciones');
            $table->string('manifestacion_vol')->nullable();
            $table->boolean('viabilidad')->nullable();
            $table->boolean('coordinacion')->nullable();
            $table->boolean('deteccion')->nullable();
            $table->boolean('ev_hc_globo')->nullable();
            $table->integer('id_inst_donante')->unsigned();
            $table->foreing('id_inst_donate')->references('id_institucion')->on('institucion_donante');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donacion_1');
    }
}
