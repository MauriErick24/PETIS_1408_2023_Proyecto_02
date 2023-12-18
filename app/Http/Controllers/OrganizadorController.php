<?php

namespace App\Http\Controllers;

use App\Models\Evento;
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
        // return Evento::select('id', 'nombre_evento', 'tipoEvento_id')
        //     ->with('tipoEvento', 'organizadores')
        //     ->withCount('organizadores')
        //     ->orderBy('id')->get();
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
        // $direccionIMG = $request->file('logo')->store('organizadores', 'public');
        // $origen = "http://127.0.0.1:8000/storage/";
        // $cadenaTotal = $origen . $direccionIMG;
        // $organizador->imagen = $cadenaTotal;
        $organizador->imagen = "este es un logo";
        //$organizador->imagen = $request->input('imagen');
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
        $evento = Evento::where('id', '=', $id)->with('organizadores')->get();
        dd($evento);
        if ($evento->organizadores()) {
            $mensaje = $evento->organizadores;
        } else {
            $mensaje = "no hay organizadores en este evento";
        }
        return $mensaje;
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
        $organizador = Organizador::find($id);
        $organizador->delete();
        return response()->json("organizador elminado correctamente", 202);
    }

    public function agregarOrganizador(Request $request)
    {
        $evento = Evento::find($request->idEvent);
        $evento->organizadores()->attach($request->organizadores);
        // $evento = Evento::find(1);
        // $evento->organizadores()->attach([1, 2, 3]);
        return response()->json([
            'creado correctamente',
            'respuesta' => $request
        ], 201);
    }

    public function cantDatos()
    {
        return Evento::select('id', 'nombre_evento', 'tipoEvento_id')
            ->with('tipoEvento', 'organizadores')
            ->withCount('organizadores')
            ->orderBy('id')->get();
    }

    public function distintos($id)
    {
        $evento = Evento::select('organizador_id')
            ->from('evento_organizador')
            ->where('evento_id', $id)->get();

        $organizadoresllenos = $evento->pluck('organizador_id');

        return Organizador::select('id', 'nombre', 'representante')
            ->whereNotIn('id', $organizadoresllenos)->get();
    }
}
