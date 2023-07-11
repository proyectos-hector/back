<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Person;
use App\Models\Catalog;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $person = Person::create([
            'identification_type' => 'Cédula',
            'identification' => '1111111111',
            'names' => 'Pablo',
            'last_names' => 'Vega',
        ]);

        $user = User::create([
            'email' => 'profesor@gmail.com',
            'password' => Hash::make('profesor1810'),
            'person' => $person->id,
        ]);
        $user->assignRole('Docente');



        $personOne = Person::create([
            'identification_type' => 'Cédula',
            'identification' => '1755516802',
            'names' => 'Hector',
            'last_names' => 'Ordoñez',
        ]);

        $userOne = User::create([
            'email' => 'estudiante@gmail.com',
            'password' => Hash::make('estudiante1810'),
            'person' => $personOne->id,
        ]);
        $userOne->assignRole('Estudiante');
    }
}
