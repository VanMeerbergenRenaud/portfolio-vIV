<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(),
            'url' => fake()->url(),
            'year' => fake()->year(),
            'duration' => fake()->date(),
            'client' => fake()->company(),
            'type' => fake()->randomElement(['personnel', 'academique']),
            'tags' => fake()->randomElements(['Laravel', 'Livewire', 'Tailwind', 'PHP', 'MySQL']),
            'is_published' => true,
            'order' => fake()->numberBetween(0, 10),
        ];
    }
}
