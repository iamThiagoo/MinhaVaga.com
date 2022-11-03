<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        # Will create 10 users
        for($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name'      => $faker->name(),
                'email'     => $faker->safeEmail(),
                'phone'     => $faker->phoneNumberCleared(),
                'bio'       => $faker->paragraph(3, false),
                'password'  => $faker->password(),
                'cpf'       => $faker->cpf(),
                'birthday'  => $faker->date(),
                'slug'      => $faker->slug(),
                'cidade_id' => 3945,  // Caxias do Suk
                'estado_id' => 23,    // RS
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
