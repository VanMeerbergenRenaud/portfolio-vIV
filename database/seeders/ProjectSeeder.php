<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Familynest',
                'slug' => 'familynest',
                'description' => 'SaaS de gestion de budget familial qui transforme les corvées financières en un jeu d’enfant. Fruit de +500h de TFE où chaque ligne de code a été pensée, testée et optimisée pour une expérience utilisateur sans friction.',
                'url' => null,
                'year' => 2025,
                'duration' => '500+ heures',
                'client' => 'Travail de fin d\'études',
                'type' => 'saas',
                'tags' => ['Laravel', 'Livewire', 'Tailwind', 'PHP', 'PostgreSQL'],
                'is_published' => true,
                'order' => 1,
            ],
            [
                'name' => 'Jiri',
                'slug' => 'jiri',
                'description' => 'Plateforme de gestion de jurys académiques qui simplifie l’évaluation des projets étudiants. Une plongée profonde dans l’écosystème TALL (Tailwind, Alpine, Livewire, Laravel) qui a définitivement forgé mon expertise.',
                'url' => null,
                'year' => 2024,
                'duration' => '3 mois',
                'client' => 'Projet académique',
                'type' => 'academique',
                'tags' => ['Laravel', 'Livewire', 'Tailwind', 'PHP', 'MySQL'],
                'is_published' => true,
                'order' => 2,
            ],
            [
                'name' => 'Portfolio vIII',
                'slug' => 'portfolio-viii',
                'description' => 'Ma mission : dompter WordPress avec ACF et Polylang pour un portfolio sur-mesure. Mission accomplie.',
                'url' => null,
                'year' => 2023,
                'duration' => '2 semaines',
                'client' => 'Projet académique',
                'type' => 'academique',
                'tags' => ['Wordpress', 'PHP', 'HTML', 'CSS', 'Typescript'],
                'is_published' => true,
                'order' => 3,
            ],
        ];

        foreach ($projects as $projectData) {
            Project::create($projectData);
        }
    }
}
