<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequisitoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requisitos')->insert([
            [
                'nombre' => 'ingles 2A'
            ],
            [
                'nombre' => 'php 8'
            ],
            [
                'nombre' => 'java 8'
            ]
        ]);
    }
}
