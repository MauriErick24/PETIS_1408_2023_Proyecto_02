<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
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
        return Evento::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nombre_evento' => 'required',
                'inicio_inscripcion' => 'required|date',
                'fin_inscripcion' => 'required|date',
                'fin_evento' => 'required|date',
                'organizador' => 'required',
                'imagen' => 'required',
                'lugar' => 'required',
                'email' => 'required',
                'descripcion' => 'required',
                'hora' => 'required',
                'telefono' => 'required|numeric',
                'requisito' => 'required',
                'premio' => 'required',
                'reglas' => 'required',
                'detalle' => 'required',
                'afiche' => 'required',
                'contenido' => 'required',
                'invitado' => 'required',
                'tipoEvento_id' => 'required|numeric'
            ],
            $messages = [
                'required' => 'El campo :attribute es requerido',
                'date' => 'El campo :attribute debe ser una fecha',
                'numeric' => 'El campo :attribute debe contener solo numeros'
            ]
        );

        if (!$validator->fails()) {
            $evento = new Evento();
            $evento->nombre_evento = $request->input('nombre_evento');
            $evento->inicio_inscripcion = $request->input('inicio_inscripcion');
            $evento->fin_inscripcion = $request->input('fin_inscripcion');
            $evento->fin_evento = $request->input('fin_evento');
            $evento->organizador = $request->input('organizador');
            $evento->imagen = $request->input('imagen');
            $evento->lugar = $request->input('lugar');
            $evento->email = $request->input('email');
            $evento->descripcion = $request->input('descripcion');
            $evento->hora = $request->input('hora');
            $evento->telefono = $request->input('telefono');
            $evento->requisito = $request->input('requisito');
            $evento->premio = $request->input('premio');
            $evento->reglas = $request->input('reglas');
            $evento->detalle = $request->input('detalle');
            $evento->afiche = $request->input('afiche');
            $evento->contenido = $request->input('contenido');
            $evento->invitado = $request->input('invitado');
            $evento->tipoEvento_id = $request->input('tipoEvento_id');
            $evento->save();
            return response()->json('Registrado exitosamente', 201);
        } else {
            return response()->json($validator->errors(), 422);
            //return response()->json('no se pudo registrar los datos', 422);
        }
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
