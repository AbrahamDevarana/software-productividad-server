<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Abraham Alvarado',
            'email' => 'abrahamag93@gmail.com',
            'password' => bcrypt('123456'),
            'google_id' => '123456789',
        ]);
        User::create([
            'name' => 'Fatima Ortiz',
            'email' => 'fatimaortiz@devarana.mx',
            'password' => bcrypt('123456'),
            'google_id' => '123456789',
            
        ]);
        User::create([
            'name' => 'Maximiliano Gonzalez',
            'email' => 'maximilianogonzalez@devarana.mx',
            'password' => bcrypt('123456'),
            'google_id' => '123456789',
            
        ]);
        User::create([
            'name' => 'Héctor Bonilla',
            'email' => 'capitalhumano@devarana.mx',
            'password' => bcrypt('123456'),
            'google_id' => '123456789',
            
        ]);
        User::create([
            'name' => 'Ximena Paramo',
            'email' => 'ximenaparamo@devarana.mx',
            'password' => bcrypt('123456'),
            'google_id' => '123456789',
            
        ]);
        User::create([
            'name' => 'Diana López',
            'email' => 'dianalopez@devarana.mx',
            'password' => bcrypt('123456'),
            'google_id' => '123456789',
            
        ]);
    }
}
