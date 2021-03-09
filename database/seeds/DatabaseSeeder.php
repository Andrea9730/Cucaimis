<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\BancoTejidoTableSeeder;
use App\ContraindicacionesTableSeeder;
use App\Donacion1TableSeeder;
use App\Donacion2TableSeeder;
use App\InstitucionDonanteTableSeeder;
use App\ProvinciaTableSeeder;
use App\UsuariosTableSeeder;
use App\ValoracionTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BancoTejidoTableSeeder::class);
        $this->call(ContraindicacionesTableSeeder::class);
        $this->call(Donacion1TableSeeder::class);
        $this->call(Donacion2TableSeeder::class);
        $this->call(InstitucionDonanteTableSeeder::class);
        $this->call(ProvinciaTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(ValoracionTableSeeder::class);
    }
}
