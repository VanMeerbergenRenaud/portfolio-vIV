<?php

namespace Database\Factories;

use App\Models\Tool;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tool>
 */
class ToolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'slug' => fake()->slug(),
            'logo' => null,
            'is_stat_card' => false,
            'stat_number' => null,
            'stat_title' => null,
            'stat_description' => null,
            'is_published' => true,
            'order' => fake()->numberBetween(0, 10),
        ];
    }

    public function statCard(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_stat_card' => true,
            'stat_number' => fake()->numberBetween(1, 10),
            'stat_title' => fake()->sentence(3),
            'stat_description' => fake()->sentence(),
            'logo' => null,
        ]);
    }
}
