<?php

namespace Database\Seeders;

use App\Models\TipoTarea;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use LDAP\Result;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        return $this->call([
            PerspectivaSeeder::class,
            ObjetivoEstrategicoSeeder::class,
            IniciativaSeeder::class,
            EnfoqueSeeder::class,
            IniciativaSeeder::class,
            EstatusSeeder::class,
            PrioridadSeeder::class,
            ProyectoSeeder::class,
            UserSeeder::class,
            ResultadoClaveSeeder::class,
            PosicionSeeder::class,
            TareaSeeder::class,
            TipoProyectoSeeder::class,
            TipoTareaSeeder::class,
        ]);
    }
}
