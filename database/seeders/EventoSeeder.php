<?php

namespace Database\Seeders;

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
        DB::table('eventos')->insert([
            'nombre_evento' => 'eveentos 153',
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
            'reglas' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'detalle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'invitado' => 'shrek',
            'estado_evento' => 'EN VIVO',
            'tipoEvento_id' => 1
        ]);
    }
}
