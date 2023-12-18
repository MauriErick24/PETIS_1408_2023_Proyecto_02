<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Premio;
use Illuminate\Http\Request;

class PremioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Premio::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $primera = $request->json();
        //dd($primera);
        $segunda = $primera->get('premios');
        foreach ($segunda as $premio) {
            //dd($premio);
            $premios = new Premio();
            $premios->nombre = $premio['nombre'];
            $premios->save();
        }
        return response()->json("premio creado correctamente", 201);
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
        $premio = Premio::find($id);
        $premio->delete();
        return response()->json('premio eliminado', 201);
    }

    public function asignarPremio(Request $request)
    {
        //$evento = Evento::findOrFail($request->idEvento)->first();
        $evento = Evento::find($request->idEvent);
        $evento->premios()->attach($request->premios);
    }

    public function desasignarPremio(Request $request)
    {
        $evento = Evento::find($request->idEvent);
        $evento->premios()->detach($request->premios);
        return response()->json('premio eliminado', 201);
    }

    public function cantDatos()
    {
        return Evento::select('id', 'nombre_evento', 'tipoEvento_id')
            ->with('tipoEvento', 'premios')
            ->withCount('premios')
            ->orderBy('id', 'asc')->get();
    }

    public function distintos($id)
    {
        $evento = Evento::select('premio_id')
            ->from('evento_premio')
            ->where('evento_id', $id)->get();


        $organizadoresllenos = $evento->pluck('premio_id');

        return Premio::select('id', 'nombre')
            ->whereIn('id', $organizadoresllenos)->get();
    }

    public function distintosP($id)
    {
        $evento = Evento::select('premio_id')
            ->from('evento_premio')
            ->where('evento_id', $id)->get();


        $organizadoresllenos = $evento->pluck('premio_id');

        return Premio::select('id', 'nombre')
            ->whereNotIn('id', $organizadoresllenos)->get();
    }
}
