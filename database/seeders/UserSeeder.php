<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

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
            'name'      => 'Thiago Ferreira',
            'email'     => 'thiago@gmail.com',
            'phone'     => '(55) 55555-5555',
            'bio'       => '',
            'password'  => '123456789',
            'cpf'       => '123.456.789-10',
            'birthday'  => '1993.10.10',
            'slug'      => 'thiago-ferreira-qfbsbxasgu',
            'cidade_id' => 3945,  // Caxias do Suk
            'estado_id' => 23,    // RS
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        # Insert 10 users on DB
        User::factory(10)->create();

    }
}
