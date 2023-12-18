<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PremioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('premios')->insert([
            [
                'nombre' => '1000bs'
            ],
            [
                'nombre' => 'medalla de oro'
            ],
            [
                'nombre' => 'medalla de plata'
            ],
            [
                'nombre' => 'medalla de bronce'
            ],
            [
                'nombre' => '2000bs'
            ],
            [
                'nombre' => 'medalla de platino'
            ],
            [
                'nombre' => '3000bs'
            ]
        ]);
    }
}
