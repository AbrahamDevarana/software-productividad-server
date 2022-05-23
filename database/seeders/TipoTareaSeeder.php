<?php

namespace Database\Seeders;

use App\Models\TipoTarea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoTareaSeeder extends Seeder
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
            TipoTarea::create([
                'descripcion' => $proyecto,
            ]);
        }
    }
}
