<?php

namespace App\Http\Controllers;

use App\Models\Auspiciador;
use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        //$primeraParte = $request->logo;
        //$direccionIMG = file_get_contents($request->logo);
        //dd($request->logo);
        //if ($request->hasFile($request->file)) {
        $direccionIMG = $request->file('imagen')->store('auspiciadores', 'public');
        //}
        //dd($direccionIMG);
        //Storage::put('public/auspiciadores/', $primeraParte);
        $origen = "http://127.0.0.1:8000/storage/";
        //$linkImagen = substr($direccionIMG, 6, strlen($direccionIMG) - 1);
        $cadenaTotal = $origen . $direccionIMG;
        $auspiciador->logo = $cadenaTotal;
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

    public function asignarAuspiciador(Request $request)
    {
        //$evento = Evento::findOrFail($request->idEvento)->first();
        $evento = Evento::find($request->idEvento);
        $evento->auspiciadores()->attach($request->selectedAuspiciador);
    }
}
