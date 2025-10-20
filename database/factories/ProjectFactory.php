<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
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
        $title = fake()->sentence(3);

        return [
            'title' => $title,
            'slug' => str($title)->slug(),
            'description' => fake()->paragraph(3),
            'tech_stack' => fake()->randomElements(['Laravel', 'Livewire', 'PHP', 'Tailwind', 'MySQL', 'JavaScript', 'Vue.js', 'Docker'], rand(2, 5)),
            'url' => fake()->boolean(50) ? fake()->url() : null,
            'github_url' => fake()->boolean(70) ? 'https://github.com/' . fake()->userName() . '/' . str($title)->slug() : null,
            'image_path' => null,
            'featured' => fake()->boolean(30),
            'order' => fake()->numberBetween(1, 10),
            'started_at' => fake()->dateTimeBetween('-2 years', '-6 months'),
            'ended_at' => fake()->boolean(60) ? fake()->dateTimeBetween('-5 months', 'now') : null,
        ];
    }
}
