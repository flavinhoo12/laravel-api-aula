<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email'=> fake()->safeEmail(),
            'address'=> fake()->address(),
            'state'=> fake()->randomLetter(),
            'country'=> fake()->country(),
            'phone'=> fake()->phoneNumber(),
            'birthDate'=> fake()->date(),
        ];
    }
}