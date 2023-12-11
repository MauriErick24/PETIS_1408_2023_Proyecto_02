<?php

namespace App\Http\Controllers;

use App\Models\Afiche;
use App\Models\Evento;
use App\Models\Premio;
use Illuminate\Http\Request;

class AficheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Afiche::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eventoN = Evento::find($request->idActual);
        $direccionIMG = $request->file('imagen')->store('afiches', 'public');
        $origen = "http://127.0.0.1:8000/storage/";
        $cadenaTotal = $origen . $direccionIMG;
        $afiche = new Afiche();
        $afiche->nombre = 'mi nombre';
        $afiche->imagen = $cadenaTotal;
        $afiche->save();
        $ultimo = Afiche::latest('id')->first();
        $eventoN->afiches()->attach($ultimo);
        // foreach ($request as $afiche) {
        //     //dd($afiche);
        //     $afiche = new Afiche();
        //     $afiche->nombre = $request->nombre;
        //     $afiche->imagen = $request->imagen;
        //     $afiche->save();
        //}
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
        $evento = Evento::find($id);
        $evento->imagen = "http://127.0.0.1:8000/storage/eventos/Logo_umss.png";
        $evento->afiches()->detach();
        $evento->save();
        return response()->json('afiche removido exitosamente', 201);
    }

    // public function agregarAfiche(Request $request)
    // {
    //     $evento = Evento::find($request->idActual);
    //     $evento->afiches()->attach();
    // }
}
