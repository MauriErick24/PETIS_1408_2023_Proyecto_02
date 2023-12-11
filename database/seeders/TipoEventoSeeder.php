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
                'nombreTipo_evento' => 'COMPETENCIA'
            ],
            [
                'nombreTipo_evento' => 'TALLER'
            ],
            [
                'nombreTipo_evento' => 'ENTRENAMIENTO'
            ],
            [
                'nombreTipo_evento' => 'RECLUTAMIENTO'
            ],
            [
                'nombreTipo_evento' => 'OTROS'
            ]
        ]);
    }
}
