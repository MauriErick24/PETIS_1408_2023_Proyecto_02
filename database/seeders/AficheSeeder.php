<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AficheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('afiches')->insert([
            [
                'nombre' => 'burger king',
                'imagen' => 'http://127.0.0.1:8000/storage/afiches/burger_king.jpg'
            ],
            [
                'nombre' => 'pepsi',
                'imagen' => 'http://127.0.0.1:8000/storage/afiches/pepsi.jpg'
            ],
            [
                'nombre' => 'spotify',
                'imagen' => 'http://127.0.0.1:8000/storage/afiches/spotify.jpg'
            ],
            [
                'nombre' => 'unilever',
                'imagen' => 'http://127.0.0.1:8000/storage/afiches/unilever.jpg'
            ]
        ]);
    }
}
