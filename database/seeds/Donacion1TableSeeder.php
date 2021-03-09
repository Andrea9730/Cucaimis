<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Donacion1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donacion_1')->delete();
        $json = File::get(__DIR__ . '/json/cucaimis.json');
        $data = json_decode($json);
          
        foreach ($data as $item){
              Donacion1::create(array(
                'id_proceso'=> $item ->idProceso,
                'cuil_ablacionista'=> $item ->cuilAblacionista,
                'cert_defuncion'=> $item ->certDefuncion,
                'id_provincia'=> $item ->idProvincia,
                'contraindicaciones'=> $item -> contraindicaciones,
                'manifestacion_vol'=> $item -> manifestacionVoluntad,
                'viabilidad' => $item -> $item ->viabilidad,
                'coordinacion'=> $item ->Coordinacion,
                'deteccion' => $item -> deteccion,
                'ev_hc_globo' => $item -> evHcGlobo,
                'id_inst_donante' => $item ->idInstDonante,
    
                  
          ));
        }
    }
}
