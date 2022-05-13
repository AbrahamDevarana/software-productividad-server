<?php

namespace Database\Seeders;

use App\Models\TipoProyecto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arryTipoProyecto = ['Personal', 'Objetivos'];

        foreach ($arryTipoProyecto as $proyecto) {
            TipoProyecto::create([
                'descripcion' => $proyecto,
            ]);
        }
    }
}
