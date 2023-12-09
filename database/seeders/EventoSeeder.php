<?php

namespace Database\Seeders;

use App\Models\Actividad;
use App\Models\Auspiciador;
use App\Models\Evento;
use App\Models\Premio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $auspiciadores = Auspiciador::all();
        DB::table('eventos')->insert([
            [
                'nombre_evento' => 'eveentos 1',
                'inicio_inscripcion' => '2021-01-10',
                'fin_inscripcion' => '2024-11-21',
                'inicio_actividades' => '2024-11-21',
                'fin_actividades' => '2022-11-20',
                'inicio_premiacion' => '2024-12-1',
                'fin_evento' => '2023-12-1',
                'imagen' => 'https://www.umss.edu.bo/wp-content/uploads/2022/08/Logo_umss.png',
                'lugar' => 'coña coña',
                'email' => 'preten@gmail.com',
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'hora_inicio_inscripcion' => '09:00:00.0000000',
                'hora_fin_inscripcion' => '09:00:00.0000000',
                'hora_inicio_actividades' => '09:00:00.0000000',
                'hora_fin_actividades' => '09:00:00.0000000',
                'telefono' => '78327438',
                'detalle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'invitado' => 'shrek',
                'estado_evento' => 'EN VIVO',
                'tipoEvento_id' => 1
            ],
            [
                'nombre_evento' => 'eveentos 2',
                'inicio_inscripcion' => '2021-01-10',
                'fin_inscripcion' => '2024-11-21',
                'inicio_actividades' => '2024-11-21',
                'fin_actividades' => '2022-11-20',
                'inicio_premiacion' => '2024-12-1',
                'fin_evento' => '2023-12-1',
                'imagen' => 'https://www.umss.edu.bo/wp-content/uploads/2022/08/Logo_umss.png',
                'lugar' => 'coña coña',
                'email' => 'preten@gmail.com',
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'hora_inicio_inscripcion' => '09:00:00.0000000',
                'hora_fin_inscripcion' => '09:00:00.0000000',
                'hora_inicio_actividades' => '09:00:00.0000000',
                'hora_fin_actividades' => '09:00:00.0000000',
                'telefono' => '78327438',
                'detalle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'invitado' => 'shrek',
                'estado_evento' => 'EN VIVO',
                'tipoEvento_id' => 2
            ],
            [
                'nombre_evento' => 'eveentos 3',
                'inicio_inscripcion' => '2021-01-10',
                'fin_inscripcion' => '2024-11-21',
                'inicio_actividades' => '2024-11-21',
                'fin_actividades' => '2022-11-20',
                'inicio_premiacion' => '2024-12-1',
                'fin_evento' => '2023-12-1',
                'imagen' => 'https://www.umss.edu.bo/wp-content/uploads/2022/08/Logo_umss.png',
                'lugar' => 'coña coña',
                'email' => 'preten@gmail.com',
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'hora_inicio_inscripcion' => '09:00:00.0000000',
                'hora_fin_inscripcion' => '09:00:00.0000000',
                'hora_inicio_actividades' => '09:00:00.0000000',
                'hora_fin_actividades' => '09:00:00.0000000',
                'telefono' => '78327438',
                'detalle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'invitado' => 'shrek',
                'estado_evento' => 'EN VIVO',
                'tipoEvento_id' => 3
            ],
            [
                'nombre_evento' => 'eveentos 4',
                'inicio_inscripcion' => '2021-01-10',
                'fin_inscripcion' => '2024-11-21',
                'inicio_actividades' => '2024-11-21',
                'fin_actividades' => '2022-11-20',
                'inicio_premiacion' => '2024-12-1',
                'fin_evento' => '2023-12-1',
                'imagen' => 'https://www.umss.edu.bo/wp-content/uploads/2022/08/Logo_umss.png',
                'lugar' => 'coña coña',
                'email' => 'preten@gmail.com',
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'hora_inicio_inscripcion' => '09:00:00.0000000',
                'hora_fin_inscripcion' => '09:00:00.0000000',
                'hora_inicio_actividades' => '09:00:00.0000000',
                'hora_fin_actividades' => '09:00:00.0000000',
                'telefono' => '78327438',
                'detalle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'invitado' => 'shrek',
                'estado_evento' => 'EN VIVO',
                'tipoEvento_id' => 1
            ],
            [
                'nombre_evento' => 'eveentos 5',
                'inicio_inscripcion' => '2021-01-10',
                'fin_inscripcion' => '2024-11-21',
                'inicio_actividades' => '2024-11-21',
                'fin_actividades' => '2022-11-20',
                'inicio_premiacion' => '2024-12-1',
                'fin_evento' => '2023-12-1',
                'imagen' => 'http://127.0.0.1:8000/storage/eventos/Logo_umss.png',
                'lugar' => 'coña coña',
                'email' => 'preten@gmail.com',
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'hora_inicio_inscripcion' => '09:00:00.0000000',
                'hora_fin_inscripcion' => '09:00:00.0000000',
                'hora_inicio_actividades' => '09:00:00.0000000',
                'hora_fin_actividades' => '09:00:00.0000000',
                'telefono' => '78327438',
                'detalle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
                'invitado' => 'shrek',
                'estado_evento' => 'EN VIVO',
                'tipoEvento_id' => 2
            ],
        ]);
        $eventos = Evento::all();
        foreach ($eventos as $evento) {
            foreach ($auspiciadores as $auspiciador) {
                $evento->auspiciadores()->attach($auspiciador);
            }
        }
        $premios = Premio::all();
        foreach ($eventos as $evento) {
            foreach ($premios as $premio) {
                $evento->premios()->attach($premio);
            }
        }
        $actividades = Actividad::all();
        foreach ($eventos as $evento) {
            foreach ($actividades as $actividad) {
                $evento->actividades()->attach($actividad);
            }
        }
    }
}
