<?php

namespace App\Http\Controllers;

use App\Donacion1;
use Illuminate\Http\Request;

class Donacion1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      return view('Donacion_1.index');
    }

    public function create()
    {
        return view('Donacion_1.create');
    }

    public function listaAb()
    {
        $usuario = \DB::table('usuarios')-> select('cuil', 'nombre', 'apellido')-> get();
        return view ('Donacion_1.create',['usuario'=> $usuario]);
    }

}