<?php

namespace Database\Seeders;

use App\Models\TipoAccion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoAccionSeeder extends Seeder
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
            TipoAccion::create([
                'descripcion' => $proyecto,
            ]);
        }
    }
}
