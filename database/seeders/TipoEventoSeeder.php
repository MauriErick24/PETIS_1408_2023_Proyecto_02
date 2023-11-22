<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_eventos')->insert([
            [
                'nombreTipo_evento' => 'Competencia'
            ],
            [
                'nombreTipo_evento' => 'Taller'
            ],
            [
                'nombreTipo_evento' => 'Entrenamiento'
            ],
            [
                'nombreTipo_evento' => 'Reclutamiento'
            ],
            [
                'nombreTipo_evento' => 'Otro'
            ]
        ]);
    }
}
