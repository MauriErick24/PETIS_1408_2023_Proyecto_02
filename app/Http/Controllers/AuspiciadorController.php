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
        $origen = "http://primesoft.tis.cs.umss.edu.bo/storage/";
        //$origen = Storage::url($direccionIMG);
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
        $auspiciador = Auspiciador::find($id);
        $auspiciador->nombre = $request->input('nombre');
        $auspiciador->empresa = $request->input('empresa');
        $auspiciador->email = $request->input('email');
        $auspiciador->telefono = $request->input('telefono');
        $auspiciador->direccion = $request->input('direccion');
        //$primeraParte = $request->logo;
        //$direccionIMG = file_get_contents($request->logo);
        //dd($request->logo);
        //if ($request->hasFile($request->file)) {
        // if ($request->hasFile($request->imagen)) {
        //dd($request);
        $direccionIMG = $request->file('imagen')->store('auspiciadores', 'public');
        //$origen = Storage::url($direccionIMG);
        //dd();
        // } else {
        //     $direccionIMG = 'imagen';
        // }

        //$path = Storage::putFile('auspiciadores', $request->file('imagen'));
        //}
        //dd($direccionIMG);
        //Storage::put('public/auspiciadores/', $primeraParte);
        $origen = "http://primesoft.tis.cs.umss.edu.bo/storage/";
        //$linkImagen = substr($direccionIMG, 6, strlen($direccionIMG) - 1);
        $cadenaTotal = $origen . $direccionIMG;
        $auspiciador->logo = $cadenaTotal;

        $auspiciador->save();
        return response()->json('registrado exitosamente', 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auspiciador = Auspiciador::find($id);
        $auspiciador->delete();
        return response()->json('eliminado correctamente', 201);
    }

    public function asignarAuspiciador(Request $request)
    {
        //$evento = Evento::findOrFail($request->idEvento)->first();
        $evento = Evento::find($request->idEvento);
        $evento->auspiciadores()->attach($request->selectedAuspiciador);
    }
}
