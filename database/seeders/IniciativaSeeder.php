<?php

namespace Database\Seeders;

use App\Models\Iniciativa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IniciativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Iniciativa::create([
            'nombre' => 'Implementar un Sistema Integral de Gestión',
            'descripcion' => 'Descripción de la iniciativa',
            'inicio_periodo' => '2022-01-01',
            'fin_periodo' => '2022-12-31',
            'estatus_id' => 1,
            'objetivo_estrategico_id' => 1,
            'etapa' => 1,
            'ponderacion' => 0
        ]);
        Iniciativa::create([
            'nombre' => 'Certificación ISO de Servicio Legendario',
            'descripcion' => 'Descripción de la iniciativa',
            'inicio_periodo' => '2022-01-01',
            'fin_periodo' => '2022-12-31',
            'estatus_id' => 1,
            'objetivo_estrategico_id' => 1,
            'etapa' => 1,
            'ponderacion' => 0
        ]);
        Iniciativa::create([
            'nombre' => 'Automatizar y digitalizar los procesos clave de la empresa',
            'descripcion' => 'Descripción de la iniciativa',
            'inicio_periodo' => '2022-01-01',
            'fin_periodo' => '2022-12-31',
            'estatus_id' => 1,
            'objetivo_estrategico_id' => 1,
            'etapa' => 1,
            'ponderacion' => 0
        ]);
    }
}
