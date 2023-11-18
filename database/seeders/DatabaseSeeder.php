<?php

namespace Database\Seeders;

use App\Models\Evento;
use App\Models\Premio;
use App\Models\Requisito;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(TipoEventoSeeder::class);
        $this->call(AuspiciadorSeeder::class);
        $this->call(OrganizadorSeeder::class);
        $this->call(PremioSeeder::class);
        $this->call(RequisitoSeeder::class);
        $this->call(EventoSeeder::class);
    }
}
