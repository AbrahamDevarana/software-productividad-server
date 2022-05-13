<?php

namespace Database\Seeders;

use App\Models\Prioridad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrioridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrPrioridad = ['Alta', 'Media', 'Baja'];

        foreach ($arrPrioridad as $prioridad) {
            Prioridad::create([
                'descripcion' => $prioridad,
            ]);
        }
    }
}
