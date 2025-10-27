<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Éducation
        Experience::create([
            'type' => 'education',
            'company' => 'HEPL - INPRES',
            'position' => 'Diplômé - G.D. Graphiques - Orienté Web',
            'description' => 'J\'ai acquis les bases essentielles du métier ainsi qu\'une compréhension approfondie des bonnes pratiques durant mon parcours scolaire. Cette formation m\'a permis de développer une approche structurée, alliant rigueur dans le code et optimisation des solutions pour des projets performants et évolutifs.',
            'location' => 'Liège, Belgique',
            'started_at' => '2021-09-01',
            'ended_at' => '2025-06-30',
            'order' => 1,
        ]);

        Experience::create([
            'type' => 'education',
            'company' => 'HELMO GRAMME',
            'position' => 'Non Diplômé - Ingénieur Industriel',
            'description' => 'Formation en ingénierie industrielle.',
            'location' => 'Liège, Belgique',
            'started_at' => '2019-09-01',
            'ended_at' => '2021-06-30',
            'order' => 2,
        ]);

        // Stage Spade
        Experience::create([
            'type' => 'internship',
            'company' => 'Spade',
            'position' => 'Stagiaire',
            'description' => 'Chez Spade, j\'ai approfondi mes connaissances en Docker, WordPress et Twig. J\'ai travaillé sur plusieurs projets de l\'entreprise où ma tâche principale consistait à maintenir des sites en les mettant à jour de PHP 5.6 à 8.2. J\'ai construit un site WordPress en utilisant les blocs natifs du thème 2024, tout en ajoutant des blocs personnalisés à la demande du client. Pour terminer mon stage, j\'ai participé à des projets avancés de l\'entreprise, notamment Minos, qui est une interface permettant de créer rapidement des sites web sur WordPress.',
            'location' => 'Liège, Belgique',
            'started_at' => '2024-09-01',
            'ended_at' => '2024-12-31',
            'order' => 3,
        ]);

        // Stage Ludifica
        Experience::create([
            'type' => 'internship',
            'company' => 'Ludifica',
            'position' => 'Stagiaire',
            'description' => 'Chez Ludifica, j\'ai réalisé un projet de grande envergure. Ce projet a été développé avec Filament pour créer une interface simple et concise, digne d\'un SaaS. L\'objectif était de concevoir un produit permettant aux futurs clients de modifier n\'importe quelle information souhaitée, tout en rendant l\'interface aussi intuitive que possible. J\'ai évité d\'utiliser des plugins afin de fonder un projet solide, maintenable et cohérent à long terme. Le PHP était mon seul allié !',
            'location' => 'Liège, Belgique',
            'started_at' => '2025-07-01',
            'ended_at' => '2025-08-31',
            'order' => 4,
        ]);

        // Crée des expériences aléatoires pour tester
        Experience::factory()->count(3)->create();
    }
}
