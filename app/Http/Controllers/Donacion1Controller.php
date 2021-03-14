<?php

namespace App\Http\Controllers;

use App\Ablacionista as AppAblacionista;
use App\Donacion1;
use Illuminate\Http\Request;
use App\Models\Ablacionista;

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

    /**
     * Store a newly created resource in storage. 
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
        //
    }

    /**
     * Display the specified resource. 
     * 
     * @param \App\Donacion1 $donacion1
     * @return \Illuminate\Http\Response
     */
    public function show (Donacion1 $donacion1)
    {
        //
    }

    /*
     * Show the form for editing the specified resource. 
     * 
     * @param \App\Donacion1 $donacion1
     * @return \Illuminate\Http\Response
     
    public function edit (Donacion1 $donacion1)
    {
        //
    }

    
     * Update the specified resource in storage. 
     * 
     * @param \Illuminate\Http\Request $request
     * @param \App\Donacion1 $donacion1
     * @return \Illuminate\Http\Response
     
    public function update (Request $request, Donacion1 $donacion1)
    {
        //
    }

    
     * Remove the specified resource from storage. 
     * 
     * @param \App\Donacion1 $donacion1
     * @return \Illuminate\Http\Response
     
    public function destroy (Donacion1 $donacion1)
    {
        //
    }

   


* Show records

*

* @return \Illuminate\Http\Response





public function dropDownShow(Request $request)

{

   $ablacionista = Ablacionista::pluck('nombre','apellido', 'cuil');

    return view('ablacionista.edit', compact('cuil', 'ablacionista'));

}

public function showAbla()
{
    return AppAblacionista::all();

}*/

}