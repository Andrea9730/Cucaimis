<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Donacion2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donacion_2')->delete();
        $json = File::get(__DIR__ . '/json/cucaimis.json');
        $data = json_decode($json);
          
        foreach ($data as $item){
              Donacion2::create(array(
                'id_proceso'=> $item ->idProceso,
                'entrevista_fam'=> $item ->entrevistaFam,
                'orden_judicial'=> $item -> ordenJudicial,
                'disp_ablacionista' => $item -> dispAblacionista,
                'envio' => $item ->envio,
                'fecha_ablacion' => $item -> fechaAblacion,
                'logistica' => $item -> logistica,
                'distribucion' => $item -> distribucion,
    
                  
          ));
        }
    }
}
