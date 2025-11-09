<?php

namespace Database\Seeders;

use App\Enums\ProjectDifficulty;
use App\Enums\ProjectRole;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectDetailSeeder extends Seeder
{
    /**
     * Seed un projet avec toutes les données détaillées
     */
    public function run(): void
    {
        // Créer un projet d'exemple avec toutes les données
        Project::create([
            'name' => 'Portfolio Interactif',
            'slug' => 'portfolio-interactif',
            'description' => 'Création d\'un portfolio moderne et performant avec Laravel et Livewire',
            'image' => 'projects/portfolio/main.jpg',
            'logo' => 'projects/portfolio/logo.svg',
            'url' => 'https://example.com',
            'year' => 2024,
            'duration' => '3 mois',
            'client' => 'Client Privé',
            'type' => 'personnel',
            'tags' => ['Laravel', 'Livewire', 'Tailwind CSS', 'Alpine.js'],

            // Détails techniques
            'roles' => [
                ProjectRole::FULLSTACK->value,
                ProjectRole::DESIGN->value,
                ProjectRole::UX->value,
            ],
            'difficulty' => ProjectDifficulty::MEDIUM->value,
            'tools' => ['Figma', 'VSCode', 'Laravel', 'Tailwind CSS', 'Git'],

            // Contexte
            'context_title' => 'Un besoin de modernisation',
            'context_description' => 'Le client souhaitait une refonte complète de son portfolio pour mieux mettre en valeur ses projets et améliorer l\'expérience utilisateur. L\'objectif était de créer une interface moderne, rapide et responsive tout en conservant une identité visuelle forte.',
            'context_gallery' => [
                // 'projects/portfolio/context-1.jpg',
                // 'projects/portfolio/context-2.jpg',
            ],

            // Résultats
            'results_title' => 'Un portfolio performant et élégant',
            'results_description' => 'Le nouveau portfolio affiche des temps de chargement divisés par 3 avec un score Lighthouse de 95/100. L\'interface moderne et intuitive a augmenté le temps de visite moyen de 150% et le taux de conversion des demandes de contact de 40%.',
            'results_gallery' => [
                // 'projects/portfolio/result-1.jpg',
                // 'projects/portfolio/result-2.jpg',
            ],

            'is_published' => true,
            'order' => 1,
        ]);

        // Créer d'autres projets d'exemple
        Project::create([
            'name' => 'E-commerce Next Gen',
            'slug' => 'ecommerce-next-gen',
            'description' => 'Plateforme e-commerce complète avec gestion avancée des stocks',
            'year' => 2024,
            'duration' => '6 mois',
            'client' => 'TechShop Inc.',
            'type' => 'academique',
            'tags' => ['Laravel', 'Vue.js', 'MySQL'],

            'roles' => [
                ProjectRole::BACKEND->value,
                ProjectRole::FRONTEND->value,
            ],
            'difficulty' => ProjectDifficulty::HARD->value,
            'tools' => ['Laravel', 'Vue.js', 'MySQL', 'Redis', 'Docker'],

            'context_title' => 'Digitaliser la vente au détail',
            'context_description' => 'TechShop souhaitait étendre sa présence en ligne avec une plateforme e-commerce robuste capable de gérer des milliers de produits et de commandes simultanées.',

            'results_title' => 'Une croissance de 200%',
            'results_description' => 'La plateforme gère maintenant plus de 10 000 produits et traite 500 commandes par jour. Le chiffre d\'affaires en ligne a augmenté de 200% dans les 6 premiers mois.',

            'is_published' => true,
            'order' => 2,
        ]);
    }
}
