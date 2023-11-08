<?php

namespace App\Http\Controllers;

use App\Models\Organizador;
use Illuminate\Http\Request;

class OrganizadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Organizador::orderBy('id', 'asc')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organizador = new Organizador();
        $organizador->nombre = $request->input('nombre');
        $organizador->representante = $request->input('representante');
        $organizador->email = $request->input('email');
        $organizador->telefono = $request->input('telefono');
        $organizador->direccion = $request->input('direccion');
        $organizador->imagen = $request->input('imagen');
        $organizador->save();
        return response()->json('registado existosamente', 201);
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
