<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ContraindicacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contraindicaciones')->delete();
        $json = File::get(__DIR__ . '/json/cucaimis.json');
        $data = json_decode($json);
          
        foreach ($data as $item){
              BancoTejido::create(array(
                  'id_contraindicacion' => $item->idContraindicacion,
                  'detalle' => $item->detalleContraindicacion,
                  
          ));
        }
    }
}
