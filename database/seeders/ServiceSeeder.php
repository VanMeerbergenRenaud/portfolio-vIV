<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'number' => '(01)',
                'title' => 'Architecture Backend Robuste',
                'slug' => 'architecture-backend',
                'description' => 'Je conçois des fondations backend solides comme le roc. Je conçois un code qui n\'est pas juste fonctionnel, mais aussi logique, maintenable et prêt à évoluer sans vous donner de maux de tête.',
                'image' => null,
                'tags' => [
                    'Laravel & Livewire',
                    'API RESTful & AWS',
                    'Tests Unitaires Pest4',
                    'Bases de données (MySQL/PostgreSQL)',
                ],
                'is_published' => true,
                'order' => 1,
            ],
            [
                'number' => '(02)',
                'title' => 'Panels d\'Admin sur-mesure',
                'slug' => 'panneaux-admin-sur-mesure',
                'description' => 'Fini les back-offices usines à gaz. Avec Filament, je crée des panels d\'admin si intuitifs que même votre grand-mère pourrait gérer le stock. Un outil puissant, taillé pour vos besoins, qui vous redonne le contrôle total.',
                'image' => null,
                'tags' => [
                    'Filament PHP',
                    'Dashboards Analytiques',
                    'Gestion de CRUDs Complexes',
                    'UX Optimisée pour la productivité',
                    'Gestion des Rôles & Permissions',
                ],
                'is_published' => true,
                'order' => 2,
            ],
            [
                'number' => '(03)',
                'title' => 'Intégration Frontend (UX/UI)',
                'slug' => 'integration-frontend-interactivite',
                'description' => 'Je traduis vos maquettes Figma en interfaces web vivantes et réactives. Avec Tailwind CSS, je garantis un design pixel-perfect et une maintenabilité à long terme. Pas de CSS spaghetti, promis. Une pincée d\'Alpine.js et le tour est joué.',
                'image' => null,
                'tags' => [
                    'SCSS / Tailwind CSS',
                    'JS / TS & Alpine.js',
                    'Responsive Design',
                    'Accessibilité Web',
                    'Intégration depuis Figma/XD',
                ],
                'is_published' => true,
                'order' => 3,
            ],
            [
                'number' => '(04)',
                'title' => 'Performance & Scalabilité',
                'slug' => 'performance-scalabilite',
                'description' => 'Votre application est lente ? C\'est ma sonnette d\'alarme. Je plonge dans le code pour traquer les requêtes N+1, optimiser les jobs en file d\'attente et mettre en place une stratégie de cache qui la rendra plus rapide que son ombre.',
                'image' => null,
                'tags' => [
                    'Profiling PHP',
                    'Optimisation des requêtes (N+1)',
                    'Caching Stratégique (Redis)',
                    'Monitoring & Analyse de logs',
                ],
                'is_published' => true,
                'order' => 4,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
