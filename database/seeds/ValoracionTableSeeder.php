<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValoracionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('valoracion')->delete();
        $json = File::get(__DIR__ . '/json/cucaimis.json');
        $data = json_decode($json);
          
        foreach ($data as $item){
              Valoracion::create(array(
                'id_proceso'=> $item ->idProceso,
                'id_banco' => $item ->idBnaco,
                'estado' => $item -> estado,
                'asignacion' => $item ->asigancion,
                'fecha_implante' => $item ->fechaImplante,
                  
          ));
        
         }
      }
      
      
      }