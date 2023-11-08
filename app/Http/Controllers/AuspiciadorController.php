<?php

namespace App\Http\Controllers;

use App\Models\Auspiciador;
use Illuminate\Http\Request;

class AuspiciadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Auspiciador::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auspiciador = new Auspiciador();
        $auspiciador->nombre = $request->input('nombre');
        $auspiciador->empresa = $request->input('empresa');
        $auspiciador->email = $request->input('email');
        $auspiciador->telefono = $request->input('telefono');
        $auspiciador->direccion = $request->input('direccion');
        $auspiciador->logo = $request->input('logo');
        $auspiciador->save();
        return response()->json('registrado exitosamente', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
