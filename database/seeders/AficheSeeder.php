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
                'imagen' => 'http://primesoft.tis.cs.umss.edu.bo/storage/afiches/burger_king.jpg'
            ],
            [
                'nombre' => 'pepsi',
                'imagen' => 'http://primesoft.tis.cs.umss.edu.bo/storage/afiches/pepsi.jpg'
            ],
            [

                'nombre' => 'spotify',
                'imagen' => 'http://primesoft.tis.cs.umss.edu.bo/storage/afiches/spotify.jpg'
            ],
            [
                'nombre' => 'unilever',
                'imagen' => 'http://primesoft.tis.cs.umss.edu.bo/storage/afiches/unilever.jpg'
            ]
        ]);
    }
}
