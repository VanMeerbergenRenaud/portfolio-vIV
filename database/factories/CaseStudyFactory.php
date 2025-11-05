<?php

namespace Database\Factories;

use App\Models\CaseStudy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CaseStudy>
 */
class CaseStudyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'subtitle' => fake()->sentence(),
            'overview' => fake()->paragraph(),
            'project_name' => fake()->company(),
            'url' => fake()->url(),
            'year' => fake()->year(),
            'period' => fake()->randomElement(['2024 - 2025', '2023 - 2024']),
            'quote' => fake()->paragraph(),
            'author_name' => fake()->name(),
            'author_title' => fake()->jobTitle(),
            'stats' => [
                ['value' => '500', 'highlight' => 'h+', 'description' => 'De développement intensif.'],
                ['value' => 'Full', 'highlight' => '-Stack', 'description' => 'Du backend au frontend.'],
                ['value' => '100', 'highlight' => '%', 'description' => 'Architecture personnalisée.'],
                ['value' => 'SaaS', 'highlight' => '+', 'description' => 'Modèle multi-utilisateurs.'],
            ],
            'is_published' => true,
            'order' => fake()->numberBetween(0, 10),
        ];
    }
}
