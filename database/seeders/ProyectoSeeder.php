<?php

namespace Database\Seeders;

use App\Models\Proyecto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proyecto::create([
            'nombre' => 'Proyecto 1',
            'descripcion' => 'Descripcion del proyecto 1',
            'user_id' => 1,
            'inicio_periodo' => '2020-01-01',
            'fin_periodo' => '2020-12-31',
            'estatus_id' => 1,
            'prioridad_id' => 1,
            'enfoque_id' => 1,
            'iniciativa_id' => 1,
            'tipo_proyecto_id' => 1,
            'progreso' => 0,

        ]);

        Proyecto::create([
            'nombre' => 'Proyecto 2',
            'descripcion' => 'Descripcion del proyecto 2',
            'user_id' => 1,
            'inicio_periodo' => '2020-01-01',
            'fin_periodo' => '2020-12-31',
            'estatus_id' => 1,
            'prioridad_id' => 1,
            'enfoque_id' => 1,
            'iniciativa_id' => 1,
            'tipo_proyecto_id' => 1,
            'progreso' => 0,

        ]);
    }
}
