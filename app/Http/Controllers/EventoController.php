<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Premio;
use ArrayObject;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Evento::join('tipo_eventos', 'tipo_eventos.id', '=', 'tipoEvento_id')
        //     ->select('eventos.*', 'tipo_eventos.nombreTipo_evento')
        //     ->orderBy('eventos.id', 'asc')->get();

        return Evento::with('tipoEvento', 'premios')->orderBy('eventos.id')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make(
        //     $request->all(),
        //     [
        //         'nombre_evento' => 'required',
        //         'inicio_inscripcion' => 'required|date',
        //         'fin_inscripcion' => 'required|date',
        //         // 'fin_evento' => 'required|date',
        //         // 'organizador' => 'required',
        //         // 'imagen' => 'required',
        //         // 'lugar' => 'required',
        //         // 'email' => 'required',
        //         // 'descripcion' => 'required',
        //         // 'hora' => 'required',
        //         // 'telefono' => 'required|numeric',
        //         // 'requisito' => 'required',
        //         // 'premio' => 'required',
        //         // 'reglas' => 'required',
        //         // 'detalle' => 'required',
        //         // 'afiche' => 'required',
        //         // 'contenido' => 'required',
        //         // 'invitado' => 'required',
        //         'tipoEvento_id' => 'required|numeric'
        //     ],
        //     $messages = [
        //         'required' => 'El campo :attribute es requerido',
        //         'date' => 'El campo :attribute debe ser una fecha',
        //         'numeric' => 'El campo :attribute debe contener solo numeros'
        //     ]
        // );

        // if (!$validator->fails()) {
        $evento = new Evento();
        $evento->nombre_evento = $request->input('nombre_evento');
        $evento->inicio_inscripcion = $request->input('inicio_inscripcion');
        $evento->fin_inscripcion = $request->input('fin_inscripcion');
        $evento->inicio_actividades = $request->input('inicio_actividades');
        $evento->fin_actividades = $request->input('fin_actividades');
        $evento->inicio_premiacion = $request->input('inicio_premiacion');
        $evento->fin_evento = $request->input('fin_evento');
        $evento->imagen = $request->input('imagen');
        $evento->lugar = $request->input('lugar');
        $evento->email = $request->input('email');
        $evento->descripcion = $request->input('descripcion');
        $evento->hora_inicio_inscripcion = $request->input('hora_inicio_inscripcion');
        $evento->hora_fin_inscripcion = $request->input('hora_fin_inscripcion');
        $evento->hora_inicio_actividades = $request->input('hora_inicio_actividades');
        $evento->hora_fin_actividades = $request->input('hora_fin_actividades');
        $evento->telefono = $request->input('telefono');
        $evento->reglas = $request->input('reglas');
        $evento->detalle = $request->input('detalle');
        $evento->afiche = $request->input('afiche');
        $evento->contenido = $request->input('contenido');
        $evento->invitado = $request->input('invitado');
        $evento->tipoEvento_id = $request->input('tipoEvento_id');
        // $arr = Arr::flatten($request->input('premios'));
        // $listaIds = array();
        // $varLimite = sizeof($arr);
        // for ($i = 0; $i < $varLimite; $i += 2) {
        //     if ($arr[$i] == 0) {
        //         $premioNuevo = new Premio();
        //         $premioNuevo->nombre = $arr[$i + 1];
        //         $premioNuevo->save();
        //         $idNuevo = Premio::select('id')->where('nombre', 'LIKE', $arr[$i + 1])->get();
        //         $nuevoid = $idNuevo->toArray();
        //         $varintermedia = array_pop($nuevoid);
        //         $aux = array_pop($varintermedia);
        //         array_push($listaIds, $aux);
        //     } else {
        //         array_push($listaIds, $arr[$i]);
        //     }
        //}
        $evento->save();
        // $eventoId = Evento::select('id')->where('nombre_evento', 'LIKE', $evento->nombre_evento)->get();
        // $eventoId[0]->premios()->attach($listaIds);
        return response()->json('Registrado exitosamente', 201);
        // } else {
        // return response()->json($validator->errors(), 422);
        //return response()->json('no se pudo registrar los datos', 422);
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
        $evento = Evento::findOrFail($id);
        $evento->delete();
        return response()->json('evento eliminado correctamente', 202);
    }
}
