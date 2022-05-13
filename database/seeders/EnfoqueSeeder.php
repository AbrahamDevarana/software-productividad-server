<?php

namespace Database\Seeders;

use App\Models\Enfoque;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnfoqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrEnfoque = ['Calidad'];

        foreach ($arrEnfoque as $enfoque) {
           Enfoque::create([
                'descripcion' => $enfoque,
            ]);
        }
    }
}
