<?php

namespace Database\Seeders;

use App\Models\Accion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tipo_accion')->insert([
            'descripcion' => 'No Definido',
        ]);
        DB::table('tipo_accion')->insert([
            'descripcion' => 'Objetivos',
        ]);
        DB::table('tipo_accion')->insert([
            'descripcion' => 'Personal',
        ]);

        Accion::create([
            'nombre' => 'Acción 1',
            'descripcion' => 'Descripción de la acción 1',
            'user_id' => 1,
            'estatus_id' => 1,
            'inicio_periodo' => '2020-01-01',
            'fin_periodo' => '2020-12-31',
            'orden' => 1,
            'grupo_id' => 1,
            'tipo_accion_id' => 3,
            'resultado_clave_id' => 1,
        ]);
        Accion::create([
            'nombre' => 'Acción 2',
            'descripcion' => 'Descripción de la acción 2',
            'user_id' => 1,
            'estatus_id' => 1,
            'inicio_periodo' => '2020-01-01',
            'fin_periodo' => '2020-12-31',
            'orden' => 1,
            'grupo_id' => 1,
            'tipo_accion_id' => 2,
            'resultado_clave_id' => 1,
        ]);
        Accion::create([
            'nombre' => 'Acción 3',
            'descripcion' => 'Descripción de la acción 3',
            'user_id' => 1,
            'estatus_id' => 1,
            'inicio_periodo' => '2020-01-01',
            'fin_periodo' => '2020-12-31',
            'orden' => 1,
            'grupo_id' => 1,
            'tipo_accion_id' => 1,
            'resultado_clave_id' => 1,
        ]);

        
    }
}
