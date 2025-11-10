<?php

namespace Database\Seeders;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            // 1. Familynest
            [
                'name' => 'Familynest',
                'slug' => 'familynest2',
                'description' => 'SaaS de gestion de budget familial qui transforme les corvées financières en un jeu d’enfant. Fruit de +500h de TFE où chaque ligne de code a été pensée, testée et optimisée pour une expérience utilisateur sans friction.',
                'image' => 'projects/mockups/01K985Q3W2FYXY0ZXTPXEWEEYR.jpg',
                'logo' => 'projects/logos/01K98979N1Q9FDR7MWD5Q3P4V7.png',
                'url' => 'https://github.com/VanMeerbergenRenaud/family-nest',
                'year' => 2025,
                'duration' => '500+ heures',
                'client' => "Travail de fin d'études",
                'type' => 'saas',
                'tags' => ['Laravel', 'Livewire', 'Tailwind', 'PHP', 'PostgreSQL'],
                'roles' => ['frontend', 'backend', 'design', 'ux', 'ui', 'devops', 'fullstack', 'project_management'],
                'difficulty' => null,
                'tools' => ['PhpStorm'],
                'context_title' => 'Dans un monde de plus en plus digitalisé, la gestion des finances personnelles reste une préoccupation majeure pour beaucoup de familles.',
                'context_description' => 'Des factures s’accumulent et elles deviennent souvent difficiles à suivre ou à organiser de manière efficace. Parfois, on les reçoit par mail, parfois par papier ou alors par message, ce dernier est de plus en plus courant pour les magasins. Face à ce constat, l’idée de développer une application dédiée à la gestion des factures familiales devient une solution pratique et utile à mon sens. Cette application permet aux familles de réunir leurs factures en un seul endroit, de les organiser de façon intuitive et de mieux comprendre leurs dépenses mensuelles.',
                'context_gallery' => [
                    'projects/context/01K9Q4CERMR8KTY2PM17ADYQ7W.jpg',
                    'projects/context/01K9Q4CF1J1RV117M0Z86Q58BF.jpg',
                    'projects/context/01K9Q5AN72JXFW1A9HNHNKK7QW.jpg',
                ],
                'results_title' => 'Gérez vos factures et dépenses familiales en toute simplicité à l\'aide d\'outils conçus pour vous simplifier la vie.',
                'results_description' => "Visualisez vos dépenses, suivez vos factures et obtenez des statistiques détaillées sur vos finances familiales via le tableau de bord. Filtrez par date, membre de la famille ou par statut de paiement en un clin d'œil et observez les résultats. Utilisez notre reconnaissance OCR afin d'extraire automatiquement les informations importantes de vos factures, pour une gestion encore plus rapide. Que vous soyez sur ordinateur, tablette ou smartphone, accédez à vos informations de manière sécurisée, à tout moment.",
                'results_gallery' => [
                    'projects/results/01K9Q60Y964PC0PRRJHC9JMQMT.jpg',
                    'projects/results/01K9Q60YNFDPGQX6G6D226NP16.jpg',
                ],
                'is_published' => true,
                'order' => 1,
                'created_at' => Carbon::parse('2025-11-02 18:55:06'),
                'updated_at' => Carbon::parse('2025-11-10 15:33:53'),
            ],
            // 2. Jiri
            [
                'name' => 'Jiri',
                'slug' => 'jiri2',
                'description' => 'Plateforme de gestion de jurys académiques qui simplifie l’évaluation des projets étudiants. Une plongée profonde dans l’écosystème TALL (Tailwind, Alpine, Livewire, Laravel) qui a définitivement forgé mon expertise.',
                'image' => 'projects/mockups/01K985XZ86P9C2G6RTE70RPFVX.jpg',
                'logo' => 'projects/logos/01K98BE6Q9SG94EYDN1VBN3PN4.png',
                'url' => 'https://github.com/VanMeerbergenRenaud/jiri-app',
                'year' => 2024,
                'duration' => '3 mois',
                'client' => 'Projet académique',
                'type' => 'academique',
                'tags' => ['Laravel', 'Livewire', 'Tailwind', 'PHP', 'MySQL'],
                'roles' => null,
                'difficulty' => null,
                'tools' => null,
                'context_title' => null,
                'context_description' => null,
                'context_gallery' => [],
                'results_title' => null,
                'results_description' => null,
                'results_gallery' => [],
                'is_published' => true,
                'order' => 2,
                'created_at' => Carbon::parse('2025-11-02 18:55:06'),
                'updated_at' => Carbon::parse('2025-11-06 16:52:12'),
            ],
            // 3. Portfolio vIII
            [
                'name' => 'Portfolio vIII',
                'slug' => 'portfolio-viii2',
                'description' => 'Ma mission : dompter WordPress avec ACF et Polylang pour un portfolio sur-mesure. Mission accomplie.',
                'image' => 'projects/mockups/01K988X69FHN8MJ0DEYCN479G5.jpg',
                'logo' => 'projects/logos/01K98BH1XYXCR3NQRQRWM7SNC5.svg',
                'url' => 'https://github.com/VanMeerbergenRenaud/portfolio-vIII',
                'year' => 2023,
                'duration' => '2 semaines',
                'client' => 'Projet académique',
                'type' => 'academique',
                'tags' => ['Wordpress', 'PHP', 'HTML', 'CSS', 'Typescript'],
                'roles' => null,
                'difficulty' => null,
                'tools' => null,
                'context_title' => null,
                'context_description' => null,
                'context_gallery' => [],
                'results_title' => null,
                'results_description' => null,
                'results_gallery' => [],
                'is_published' => true,
                'order' => 3,
                'created_at' => Carbon::parse('2025-11-02 18:55:06'),
                'updated_at' => Carbon::parse('2025-11-06 16:52:28'),
            ],
        ];

        foreach ($projects as $projectData) {
            Project::create($projectData);
        }
    }
}
