<?php

namespace Database\Seeders;

use App\Models\Posicion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PosicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrPosicion = ['Director', 'Gerente', 'Coordinador', 'Colaborador'];

        foreach ($arrPosicion as $posicion) {
            Posicion::create([
                'descripcion' => $posicion,
            ]);
        }
    }
}
