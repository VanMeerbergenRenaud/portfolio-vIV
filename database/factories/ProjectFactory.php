<?php

namespace Database\Factories;

use App\Enums\ProjectDifficulty;
use App\Enums\ProjectRole;
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
            'name' => fake()->sentence(3),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(),
            'url' => fake()->url(),
            'year' => fake()->year(),
            'duration' => fake()->randomElement(['3 mois', '6 mois', '1 an', '200h', '500h']),
            'client' => fake()->company(),
            'type' => fake()->randomElement(['personnel', 'academique']),
            'tags' => fake()->randomElements(['Laravel', 'Livewire', 'Tailwind', 'PHP', 'MySQL'], 3),

            // Nouveaux champs
            'roles' => fake()->randomElements(
                array_column(ProjectRole::cases(), 'value'),
                fake()->numberBetween(1, 3)
            ),
            'difficulty' => fake()->randomElement(ProjectDifficulty::cases())->value,
            'tools' => fake()->randomElements(
                ['Figma', 'VSCode', 'PhpStorm', 'Git', 'GitHub', 'Docker', 'Postman', 'Laravel', 'Tailwind'],
                fake()->numberBetween(3, 6)
            ),

            'context_title' => fake()->sentence(4),
            'context_description' => fake()->paragraph(3),
            'context_gallery' => [], // À remplir manuellement avec des vraies images

            'results_title' => fake()->sentence(4),
            'results_description' => fake()->paragraph(3),
            'results_gallery' => [], // À remplir manuellement avec des vraies images

            'is_published' => true,
            'order' => fake()->numberBetween(0, 10),
        ];
    }
}
