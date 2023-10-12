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
                'tipo_evento' => 'Competencia'
            ],
            [
                'tipo_evento' => 'Taller'
            ],
            [
                'tipo_evento' => 'Entrenamiento'
            ],
            [
                'tipo_evento' => 'Otro'
            ]
        ]);
    }
}
