<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizadors')->insert([
            [
                'nombre' => 'cocacola',
                'representante' => 'embol',
                'email' => 'coca_cola@gmail.com',
                'telefono' => 78451236,
                'direccion' => 'km 9',
                'imagen' => 'public/logoCocacola',
                'email' => 'cocacola@gmail.com'
            ],
            [
                'nombre' => 'umss',
                'representante' => 'fcyt',
                'email' => 'fcyt@gmail.com',
                'telefono' => 78121236,
                'direccion' => 'km 12',
                'imagen' => 'public/logoUmss',
                'email' => 'umss@gmail.com'
            ],
            [
                'nombre' => 'ende',
                'representante' => 'luz y fuerza',
                'email' => 'elfec@gmail.com',
                'telefono' => 79551236,
                'direccion' => 'puente quillacollo',
                'imagen' => 'public/logoElfec',
                'email' => 'elfec@gmail.com'
            ]
        ]);
    }
}
