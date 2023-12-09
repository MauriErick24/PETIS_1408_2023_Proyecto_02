<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use App\Models\Evento;
use Illuminate\Http\Request;

class ComunicadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Comunicado::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evento = Evento::find($request->id);
        // $comunicado = new Comunicado();
        // $comunicado->nombre = $request->comentario;
        // $comunicado->save();
        // $ultimo = Comunicado::latest('id')->first();
        $evento->comunicados()->create([
            'nombre' => $request->comentario
        ]);
        return response()->json('comunicado asignado correctamente', 201);
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
        $comunicado = Comunicado::find($id);
        $comunicado->delete();
        return response()->json('comunicado elminado', 201);
    }

    public function cantDatos(Request $request)
    {
        return Evento::select('id', 'nombre_evento', 'tipoEvento_id')->with('tipoEvento')->withCount('comunicados')->get();
    }
}
