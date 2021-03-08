<?php

use Illuminate\Database\Seeder;

class ProvinciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincia')->delete();
        $json = File::get(__DIR__ . '/json/cucaimis.json');
        $data = json_decode($json);
          
        foreach ($data as $item){
            Provincia::create(array(
                'id_provincia'=> $item ->idProvincia,
                'nombre'=> $item -> nombreInstitucion,
    
                  
          ));
        }
    }
}
