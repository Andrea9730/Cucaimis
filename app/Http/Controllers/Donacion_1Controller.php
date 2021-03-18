<?php

namespace App\Http\Controllers;

use App\Models\donacion_1;
use Illuminate\Http\Request;

class Donacion_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donacion_1.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donacion_1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosDonacion_1= request()->all();
        return response()->json($datosDonacion_1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\donacion_1  $donacion_1
     * @return \Illuminate\Http\Response
     */
    public function show(donacion_1 $donacion_1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donacion_1  $donacion_1
     * @return \Illuminate\Http\Response
     */
    public function edit(donacion_1 $donacion_1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donacion_1  $donacion_1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donacion_1 $donacion_1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donacion1  $donacion_1
     * @return \Illuminate\Http\Response
     */
    public function destroy(donacion_1 $donacion_1)
    {
        //
    }
}
