<?php

namespace Database\Seeders;

use App\Models\Estatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrEstatus = [
            'En proceso',
            'En espera',
            'En ejecución',
            'Finalizado',
            'Cancelado',
        ];

        foreach ($arrEstatus as $estatus) {
            Estatus::create([
                'descripcion' => $estatus,
            ]);
        }
    }
}
