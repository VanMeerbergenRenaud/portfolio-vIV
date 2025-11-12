<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CaseStudy::create([
            'title' => 'Une application digne d’un oscar.',
            'slug' => 'familynest',
            'subtitle' => 'SaaS de gestion financière familiale',
            'overview' => 'Familynest est une application web de type SaaS qui aide les familles à gérer leurs factures, suivre leurs dépenses et garder le contrôle de leur budget. Ce projet, qui représente plus de 500 heures de développement, est le fruit de mon travail de fin d\'études.',
            'project_name' => 'Familynest',
            'url' => 'https://renaud-vmb.com/projects/familynest',
            'year' => 2025,
            'period' => '2024 - 2025',
            'quote' => 'Ce projet m\'a permis de mettre en pratique l\'ensemble de mes compétences en développement full-stack, de la conception de la base de données à l\'interface utilisateur et j’en passe.',
            'author_name' => 'Renaud Vmb',
            'author_title' => 'Développeur Full-Stack',
            'stats' => [
                ['value' => '500', 'highlight' => 'h+', 'description' => 'De développement intensif'],
                ['value' => 'Full', 'highlight' => '-Stack', 'description' => 'Du backend au frontend'],
                ['value' => '100', 'highlight' => '%', 'description' => 'Architecture personnalisée'],
                ['value' => 'SaaS', 'highlight' => '+', 'description' => 'Modèle multi-utilisateurs'],
            ],
            'is_published' => true,
            'order' => 1,
        ]);
    }
}
