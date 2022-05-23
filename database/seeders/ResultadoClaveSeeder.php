<?php

namespace Database\Seeders;

use App\Models\ResultadoClave;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultadoClaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ResultadoClave::create([
            'nombre' => 'Resultado Clave 1',
            'descripcion' => 'Descripcion del resultado clave 1',
            'ponderacion' => 1,
            'inicio_periodo' => '2020-01-01',
            'fin_periodo' => '2020-12-31',
            'progreso' => 0,
            'orden' => 1,
            'user_id' => 1,
            'prioridad_id' =>  1,
            'estatus_id' => 1,
            'proyecto_id' => 1,
            'resultado_id' => 1,
        ]);

        ResultadoClave::create([
            'nombre' => 'Resultado Clave 2',
            'descripcion' => 'Descripcion del resultado clave 2',
            'ponderacion' => 1,
            'inicio_periodo' => '2020-01-01',
            'fin_periodo' => '2020-12-31',
            'progreso' => 0,
            'orden' => 2,
            'user_id' => 1,
            'prioridad_id' =>  1,
            'estatus_id' => 1,
            'proyecto_id' => 1,
            'resultado_id' => 1,
        ]);

        ResultadoClave::create([
            'nombre' => 'Resultado Clave 3',
            'descripcion' => 'Descripcion del resultado clave 3',
            'ponderacion' => 1,
            'inicio_periodo' => '2020-01-01',
            'fin_periodo' => '2020-12-31',
            'progreso' => 0,
            'orden' => 3,
            'user_id' => 1,
            'prioridad_id' =>  1,
            'estatus_id' => 1,
            'proyecto_id' => 1,
            'resultado_id' => 1,
        ]);
     
        
    }
}
