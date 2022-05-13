<?php

namespace Database\Seeders;

use App\Models\ObjetivoEstrategico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObjetivoEstrategicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ObjetivoEstrategico::create([
            'nombre' => 'Incrementar la productividad de la empresa',
            'descripcion' => 'Descripción del objetivo estratégico',
            'inicio_periodo' => '2022-01-01',
            'fin_periodo' => '2022-12-31',
            'estatus_id' => 1,
            'perspectiva_id' => 4,
            'codigo' => '1',
        ]);
        ObjetivoEstrategico::create([
            'nombre' => 'Incentivar la cultura de innovación y mejora continua',
            'descripcion' => 'Descripción del objetivo estratégico',
            'inicio_periodo' => '2022-01-01',
            'fin_periodo' => '2022-12-31',
            'estatus_id' => 1,
            'perspectiva_id' => 4,
            'codigo' => '2',
        ]);
        ObjetivoEstrategico::create([
            'nombre' => 'Profesionalizar la administración de proyectos',
            'descripcion' => 'Descripción del objetivo estratégico',
            'inicio_periodo' => '2022-01-01',
            'fin_periodo' => '2022-12-31',
            'estatus_id' => 1,
            'perspectiva_id' => 3,
            'codigo' => '3',
        ]);
    }
}
