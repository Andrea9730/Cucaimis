<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->delete();
        $json = File::get(__DIR__ . '/json/cucaimis.json');
        $data = json_decode($json);
          
        foreach ($data as $item){
              Usuarios::create(array(
                  'cuil' => $item->cuilUsuario,
                  'nombre' => $item->nombreUsuario,
                  'apellido' => $item->apellidoUsuario,
                  'titulo' => $item->tituloUsuario,
                  'cargo' => $item->cargoUsuario,
                  
          ));
        
         }
      }
      
      
      }