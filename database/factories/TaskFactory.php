<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
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
            'tutor_id' => fake()->numberBetween(1,14),
            'student_id' => fake()->numberBetween(1,14),
            'title' => fake()->sentence(),
            'instructions' => fake()->text(),
            'date' => fake()->date(),
            'points' => fake()->numberBetween(1,100),
            'tutor_file' => fake()->filePath(),
            'student_file' => fake()->filePath(),
            'grade' => fake()->numberBetween(1,100),
            'comments' => fake()->text(),
        ];
    }
}
