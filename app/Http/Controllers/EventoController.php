<?php

namespace App\Http\Controllers;

use App\Models\Afiche;
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
        $evento = Evento::all();
        foreach ($evento as $eventos) {
            if (now()->toDateString() > $eventos->fin_actividades) {
                $eventos->estado_evento = 'PASADO';
                //$eventos->setAttribute('estado_evento', 'PASADO');
            } else {
                if (now()->toDateString() < $eventos->inicio_inscripcion) {
                    $eventos->estado_evento = 'FUTURO';
                }
            }
            $eventos->save();
        }
        // foreach ($evento as $eventoImag) {
        //     $eventoImag->imagen=Afiche::select('imagen')->first();
        // }

        return Evento::with(
            'tipoEvento',
            'premios',
            'auspiciadores',
            'afiches',
            'actividades',
            'comunicados',
            'organizadores'
        )->orderBy('eventos.id')->get();
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

        $evento = new Evento();
        $evento->nombre_evento = $request->input('nombre_evento');
        $evento->inicio_inscripcion = $request->input('inicio_inscripcion');
        $evento->fin_inscripcion = $request->input('fin_inscripcion');
        $evento->inicio_actividades = $request->input('inicio_actividades');
        $evento->fin_actividades = $request->input('fin_actividades');
        $evento->inicio_premiacion = $request->input('inicio_premiacion');
        $evento->fin_evento = $request->input('fin_evento');
        $evento->imagen = 'http://127.0.0.1:8000/storage/eventos/Logo_umss.png';
        $evento->lugar = $request->input('lugar');
        $evento->email = $request->input('email');
        $evento->descripcion = $request->input('descripcion');
        $evento->hora_inicio_inscripcion = $request->input('hora_inicio_inscripcion');
        $evento->hora_fin_inscripcion = $request->input('hora_fin_inscripcion');
        $evento->hora_inicio_actividades = $request->input('hora_inicio_actividades');
        $evento->hora_fin_actividades = $request->input('hora_fin_actividades');
        $evento->telefono = $request->input('telefono');
        $evento->detalle = $request->input('detalle');
        $evento->estado_evento = 'EN VIVO';
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
        //$ultimo = Evento::select('id')->orderBy('id', 'desc')->first();
        $ultimo = Evento::latest('id')->first();
        // $eventoId = Evento::select('id')->where('nombre_evento', 'LIKE', $evento->nombre_evento)->get();
        // $eventoId[0]->premios()->attach($listaIds);
        return response()->json([
            "msg" => "Registrado exitosamente",
            "id" => $ultimo->id
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Evento::with('tipoEvento', 'premios', 'auspiciadores', 'requisitos', 'actividades', 'comunicados', 'afiches')->find($id);
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
        $evento = Evento::findOrFail($id);
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
        $evento->contenido = $request->input('contenido');
        $evento->invitado = $request->input('invitado');
        $evento->estado_evento = 'EN VIVO';
        $evento->tipoEvento_id = $request->input('tipoEvento_id');
        $evento->save();
        return response()->json("evento actualizado correctamente", 202);
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

    public function mostrarAfiches()
    {
        $evento = Evento::select('eventos.id', 'nombre_evento', 'tipo_eventos.nombreTipo_evento', 'imagen')
            ->join('tipo_eventos', 'tipo_eventos.id', '=', 'eventos.tipoEvento_id')
            ->get();
        return $evento;
    }

    public function cambiarImg(Request $request)
    {
        //$direccionIMG = $request->file('imagen')->store('evento', 'public');
        //$origen = "http://127.0.0.1:8000/storage/";
        //$cadenaTotal = $origen . $direccionIMG;
        Evento::where('id', '=', $request->idActual)
            ->update(['imagen' => $request->URLimagen]);
    }

    public function pasados()
    {
        $evento = Evento::select('eventos.id', 'nombre_evento', 'tipo_eventos.nombreTipo_evento', 'imagen', 'estado_evento')
            ->join('tipo_eventos', 'tipo_eventos.id', '=', 'eventos.tipoEvento_id')
            ->where('estado_evento', 'LIKE', 'PASADO')
            ->orderBy('id', 'asc')
            ->get();
        return $evento;
    }
    public function presentes()
    {
        $evento = Evento::select('eventos.id', 'nombre_evento', 'tipo_eventos.nombreTipo_evento', 'imagen', 'estado_evento')
            ->join('tipo_eventos', 'tipo_eventos.id', '=', 'eventos.tipoEvento_id')
            ->where('estado_evento', 'LIKE', 'EN VIVO')
            ->orderBy('id', 'asc')
            ->get();
        return $evento;
    }
    public function futuros()
    {
        $evento = Evento::select('eventos.id', 'nombre_evento', 'tipo_eventos.nombreTipo_evento', 'imagen', 'estado_evento')
            ->join('tipo_eventos', 'tipo_eventos.id', '=', 'eventos.tipoEvento_id')
            ->where('estado_evento', 'LIKE', 'FUTURO')
            ->orderBy('id', 'asc')
            ->get();
        return $evento;
    }
}
