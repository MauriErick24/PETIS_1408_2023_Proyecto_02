<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actividads')->insert([
            [
                'nombre' => 'inicio',
                'fecha_inicio' => '2024-06-12',
                'fecha_fin' => '2024-06-30'
            ],
            [
                'nombre' => 'primera prueba',
                'fecha_inicio' => '2024-06-13',
                'fecha_fin' => '2024-06-14'
            ],
            [
                'nombre' => 'segunda prueba',
                'fecha_inicio' => '2024-06-14',
                'fecha_fin' => '2024-06-15'
            ],
            [
                'nombre' => 'tercera prueba',
                'fecha_inicio' => '2024-06-15',
                'fecha_fin' => '2024-06-16'
            ],
            [
                'nombre' => 'ultima prueba',
                'fecha_inicio' => '2024-06-16',
                'fecha_fin' => '2024-06-17'
            ]
        ]);
    }
}
