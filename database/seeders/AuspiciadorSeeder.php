<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuspiciadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auspiciadors')->insert([
            [
                'nombre' => 'Coca Cola.sa',
                'empresa' => 'embol.sa',
                'email' => 'coca@gmail.com',
                'telefono' => 78327438,
                'direccion' => 'kom8a',
                'logo'  =>  '/public/embol'
            ],
            [
                'nombre' => 'pilAndina',
                'empresa' => 'embol.sa',
                'email' => 'coca@gmail.com',
                'telefono' => 78327438,
                'direccion' => 'kom8a',
                'logo'  =>  '/public/pil'
            ],
            [
                'nombre' => 'coolerMaster',
                'empresa' => 'embol.sa',
                'email' => 'coca@gmail.com',
                'telefono' => 78327438,
                'direccion' => 'kom8a',
                'logo'  =>  '/public/cooler'
            ]
        ]);
    }
}
