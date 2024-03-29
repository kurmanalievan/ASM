<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Session>
 */
class SessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'tutor_id' => fake()->numberBetween(1,50),
            'date' => fake()->date(),
            'from' => fake()->time(),
            'to' => fake()->time(),
            // 'student_id' => fake()->optional()->numberBetween(1,50),
        ];
    }
}
