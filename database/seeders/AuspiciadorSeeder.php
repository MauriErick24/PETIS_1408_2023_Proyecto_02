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
                'logo'  =>  'https://firebasestorage.googleapis.com/v0/b/backend-tis.appspot.com/o/auspiciadores%2Fcocacola.png?alt=media&token=f5c5413e-6ddb-45b6-9aed-de93a3d782e9'
            ],
            [
                'nombre' => 'pilAndina',
                'empresa' => 'gloria.sa',
                'email' => 'coca@gmail.com',
                'telefono' => 78327438,
                'direccion' => 'kom8a',
                'logo'  =>  'https://firebasestorage.googleapis.com/v0/b/backend-tis.appspot.com/o/auspiciadores%2Fpilandina.jpg?alt=media&token=2e51d6ae-b5fa-487f-a1ea-1f40504b483b'
            ],
            [
                'nombre' => 'coolerMaster',
                'empresa' => 'cooler.sa',
                'email' => 'coca@gmail.com',
                'telefono' => 78327438,
                'direccion' => 'kom8a',
                'logo'  =>  'https://firebasestorage.googleapis.com/v0/b/backend-tis.appspot.com/o/auspiciadores%2Fcooler_master.png?alt=media&token=e59c2139-1736-40af-8ab5-137d46c75848'
            ]
        ]);
    }
}
