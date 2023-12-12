<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Participante::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $participante = Participante::find($request->idParticipante);
        $evento = Evento::find($request->idEvento);
        if ($participante->email == $request->email) {
            if ($participante->ci == $request->ci) {
                if ($participante->codigo == $request->codigo) {
                    $evento->participantes()->attach($request->idParticipante);
                } else {
                    return response()->json('codigo invalido', 400);
                }
            } else {
                return response()->json('ci invalido', 400);
            }
        } else {
            return response()->json('email invalido', 400);
        }

        return response()->json('participante registrado correctamente', 201);
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
