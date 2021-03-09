<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BancoTejidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banco_tejido')->delete();
        $json = File::get(__DIR__ . '/json/cucaimis.json');
        $data = json_decode($json);
          
        foreach ($data as $item){
              BancoTejido::create(array(
                  'id_banco' => $item->idBanco,
                  'nombre' => $item->nombreBanco,
                  'id_provincia' => $item ->idProvincia,
                  
          ));
        }
    }
}
