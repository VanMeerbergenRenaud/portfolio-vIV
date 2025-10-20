<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crée des projets avec ton CV en exemple
        Project::create([
            'title' => 'Minos - Interface WordPress',
            'slug' => 'minos-interface-wordpress',
            'description' => 'Interface permettant de créer rapidement des sites web sur WordPress avec des blocs personnalisés à la demande du client.',
            'tech_stack' => ['WordPress', 'PHP 5.6', 'PHP 8.2'],
            'url' => null,
            'github_url' => null,
            'image_path' => null,
            'featured' => true,
            'order' => 1,
            'started_at' => '2024-09-01',
            'ended_at' => '2024-12-01',
        ]);

        Project::create([
            'title' => 'Site WordPress 2024',
            'slug' => 'site-wordpress-2024',
            'description' => 'Construction d\'un site WordPress en utilisant les blocs natifs du thème 2024, avec ajout de blocs personnalisés.',
            'tech_stack' => ['WordPress', 'PHP', 'Docker', 'Twig'],
            'url' => null,
            'github_url' => null,
            'image_path' => null,
            'featured' => true,
            'order' => 2,
            'started_at' => '2024-09-01',
            'ended_at' => '2024-12-01',
        ]);

        Project::create([
            'title' => 'Projet SaaS - Ludifica',
            'slug' => 'projet-saas-ludifica',
            'description' => 'Développement d\'un produit SaaS avec Filament permettant aux futurs clients de modifier n\'importe quelle information souhaitée, tout en rendant l\'interface aussi intuitive que possible.',
            'tech_stack' => ['Filament', 'Laravel', 'PHP'],
            'url' => null,
            'github_url' => null,
            'image_path' => null,
            'featured' => true,
            'order' => 3,
            'started_at' => '2025-07-01',
            'ended_at' => '2025-08-01',
        ]);

        // Crée des projets aléatoires pour tester
        Project::factory()->count(5)->create();
    }
}
