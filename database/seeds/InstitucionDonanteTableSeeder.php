<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstitucionDonanteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institucion_donate')->delete();
        $json = File::get(__DIR__ . '/json/cucaimis.json');
        $data = json_decode($json);
          
        foreach ($data as $item){
            InstitucionDonante::create(array(
                'id_institucion'=> $item ->idInstitucion,
                'id_provincia'=> $item ->idProvincia,
                'nombre'=> $item -> nombreInstitucion,
    
                  
          ));
        }
    }
}
