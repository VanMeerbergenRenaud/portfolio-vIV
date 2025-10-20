<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = fake()->randomElement(['work', 'internship', 'education']);

        return [
            'type' => $type,
            'company' => fake()->company(),
            'position' => fake()->jobTitle(),
            'description' => fake()->paragraph(4),
            'location' => fake()->boolean(80) ? fake()->city() . ', ' . fake()->country() : null,
            'started_at' => fake()->dateTimeBetween('-5 years', '-1 year'),
            'ended_at' => fake()->boolean(40) ? fake()->dateTimeBetween('-11 months', 'now') : null,
            'order' => fake()->numberBetween(1, 10),
        ];
    }
}
