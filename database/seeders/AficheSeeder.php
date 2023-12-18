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
                'imagen' => 'https://firebasestorage.googleapis.com/v0/b/backend-tis.appspot.com/o/evento%2Fburger_king.jpg?alt=media&token=4608d9e8-7ec4-4a55-93fe-701a76f1d0ff'
            ],
            [
                'nombre' => 'pepsi',
                'imagen' => 'https://firebasestorage.googleapis.com/v0/b/backend-tis.appspot.com/o/evento%2Fpepsi.jpg?alt=media&token=deb1ac99-f9ee-489b-8858-97e2316b69e8'
            ],
            [
                'nombre' => 'spotify',
                'imagen' => 'https://firebasestorage.googleapis.com/v0/b/backend-tis.appspot.com/o/evento%2Fspotify.jpg?alt=media&token=7bb45e4c-14d1-408c-9b47-e8fb56a4a6f5'
            ],
            [
                'nombre' => 'unilever',
                'imagen' => 'https://firebasestorage.googleapis.com/v0/b/backend-tis.appspot.com/o/evento%2Funilever.jpg?alt=media&token=a9047ecb-664f-4b5c-a131-d052eba43902'
            ]
        ]);
    }
}
