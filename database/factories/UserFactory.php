<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = $this->faker;

        return [
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
            'create_profile' => true
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
