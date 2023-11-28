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
        $eventoN = Evento::find(1);
        $eventoN->afiches()->attach($request->selectedAuspiciador);
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
        //
    }
}
