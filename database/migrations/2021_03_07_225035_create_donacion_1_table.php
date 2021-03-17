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
            $table->bigInteger('cuil_ablacionista')->unsigned();
            $table->foreign('cuil_ablacionista')->references('cuil')->on('usuarios');
            $table->boolean('cert_defuncion')->nullable();
            $table->bigInteger('id_provincia')->unsigned();
            $table->foreign('id_provincia')->references('id_prov')->on('provincias');
            $table->bigInteger('contraindicaciones')->unsigned();
            $table->foreign('contraindicaciones')->references('id_contraindicacion')->on('contraindicaciones');
            $table->string('manifestacion_vol')->nullable();
            $table->boolean('viabilidad')->nullable();
            $table->boolean('coordinacion')->nullable();
            $table->boolean('deteccion')->nullable();
            $table->boolean('ev_hc_globo')->nullable();
            $table->bigInteger('id_inst_donante')->unsigned();
            $table->foreign('id_inst_donante')->references('id_institucion')->on('institucion_donante');

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
