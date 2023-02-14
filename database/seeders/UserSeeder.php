<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creation de l'administrateur
        User::create([
            'pseudo' => 'administrateur',
            'password' => Hash::make('Azerty88@'),
            'email' => 'admin@niceplaces.fr',
            'email_verified_at' => now(),
            //'department_id' => '80',
            'remember_token' => Str::random(10),
            'role_id' => 2
        ]);

        //creation d'un utilisateur de test
        User::create([
            'pseudo' => 'utilisateur',
            'password' => Hash::make('Azerty88@'),
            'email' => 'utilisateur@test.fr',
            'email_verified_at' => now(),
            //'department_id' => '86',
            'remember_token' => Str::random(10),
            'role_id' => 2
        ]);

        //creation de 8 users aléatoires
        User::factory(8)->create();
    }
}
