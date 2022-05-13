<?php

namespace Database\Seeders;

use App\Models\Perspectiva;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerspectivaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrPerspectiva = ['Financiera', 'Comercial', 'Operacional', 'Aprendizaje y Desarrollo'];
        
        foreach ($arrPerspectiva as $perspectiva) {
            Perspectiva::create([
                'nombre' => $perspectiva,
                'descripcion' => 'Descripción de la perspectiva',
                'estatus_id' => 1,
            ]);
        }
    }
}
