<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discussion>
 */
class DiscussionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // 'tutor_id' => fake()->numberBetween(1,50),
        // 'date' => fake()->date(),
        // 'from' => fake()->time(),
        // 'to' => fake()->time(),
        // 'student_id' => fake()->numberBetween(1,50),
        return [
            'from' => fake()->numberBetween(1,14),
            'to' => fake()->numberBetween(1,14),
            'date' => fake()->date(),
            'text' => fake()->text(),
        ];
    }
}
