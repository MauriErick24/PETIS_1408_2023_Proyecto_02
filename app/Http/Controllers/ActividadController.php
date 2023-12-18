<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Evento;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Actividad::all();
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
        foreach ($primera as $actividad) {
            $actividades = new Actividad();
            $actividades->nombre = $actividad['task'];
            $actividades->fecha_inicio = $actividad['fecha_inicio'];
            $actividades->fecha_fin = $actividad['fecha_fin'];
            $actividades->save();
        }

        return response()->json('actividad creada correctamente', 201);
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

    public function asignarActividades(Request $request)
    {
        //$evento = Evento::findOrFail($request->idEvento)->first();

        $actividad = new Actividad();
        $actividad->nombre = $request->task;
        $actividad->fecha_inicio = $request->fecha_inicio;
        $actividad->fecha_fin = $request->fecha_fin;
        $actividad->save();
        $ultimo = Actividad::latest('id')->first();

        $evento = Evento::find($request->idActual);
        $evento->actividades()->attach($ultimo);
        return response()->json('actividad asignada correctamente', 201);
    }

    public function cantDatos()
    {
        return Evento::select('id', 'nombre_evento', 'tipoEvento_id')
            ->with('tipoEvento', 'actividades')
            ->withCount('actividades')
            ->orderBy('id', 'asc')->get();
    }

    // public function distintos($id)
    // {
    //     $evento = Evento::select('auspiciador_id')
    //         ->from('auspiciador_evento')
    //         ->where('evento_id', $id)->get();


    //     $organizadoresllenos = $evento->pluck('auspiciador_id');

    //     return Actividad::select('id', 'nombre', 'empresa')
    //         ->whereIn('id', $organizadoresllenos)->get();
    // }
}
