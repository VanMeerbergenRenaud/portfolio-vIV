<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->randomElement([
            'Développement Backend',
            'Interfaces Admin',
            'Frontend Moderne',
            'Optimisation & Performance',
            'Architecture API',
            'Intégration Continue',
        ]);

        return [
            'number' => '('.str_pad(fake()->unique()->numberBetween(1, 99), 2, '0', STR_PAD_LEFT).')',
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'description' => fake()->paragraph(),
            'image' => 'img/placeholder.png',
            'tags' => fake()->randomElements([
                'Laravel & Livewire',
                'API RESTful',
                'Architecture MVC',
                'Bases de données MySQL/PostgreSQL',
                'Filament PHP',
                'Dashboard personnalisés',
                'Tailwind CSS',
                'JavaScript / TypeScript',
                'Responsive Design',
                'Optimisation PHP',
                'Mise en cache',
            ], fake()->numberBetween(3, 5)),
            'is_published' => true,
            'order' => fake()->numberBetween(0, 10),
        ];
    }
}
