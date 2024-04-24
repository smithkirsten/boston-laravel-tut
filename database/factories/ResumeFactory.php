<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resume>
 */
class ResumeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'location' => $this->faker->city(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'website' => $this->faker->url(),
            'skills' => 'laravel, php, developement, backend',
            'years_experience' => $this->faker->numberBetween(1, 20),
        ];
    }
}
