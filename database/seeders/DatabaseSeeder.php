<?php

namespace Database\Seeders;

use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        return $this->call([
            PerspectivaSeeder::class,
            ObjetivoEstrategicoSeeder::class,
            IniciativaSeeder::class,
            EnfoqueSeeder::class,
            IniciativaSeeder::class,
            EstatusSeeder::class,
            PrioridadSeeder::class,
            TipoProyectoSeeder::class,
            ProyectoSeeder::class,
            UserSeeder::class,
            ResultadoClaveSeeder::class,
        ]);
    }
}
