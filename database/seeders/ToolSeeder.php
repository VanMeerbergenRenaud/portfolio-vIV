<?php

namespace Database\Seeders;

use App\Models\Tool;
use Illuminate\Database\Seeder;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tools = [
            // Regular tools
            [
                'name' => 'Laravel',
                'slug' => 'laravel',
                'logo' => null,
                'is_stat_card' => false,
                'is_published' => true,
                'order' => 1,
            ],
            [
                'name' => 'Livewire',
                'slug' => 'livewire',
                'logo' => null,
                'is_stat_card' => false,
                'is_published' => true,
                'order' => 2,
            ],
            // Stat Card 1
            [
                'name' => 'Années d\'expérience',
                'slug' => 'annees-experience',
                'logo' => null,
                'is_stat_card' => true,
                'stat_number' => '4',
                'stat_title' => 'Années d\'expérience',
                'stat_description' => 'De développement web professionnel.',
                'is_published' => true,
                'order' => 3,
            ],
            [
                'name' => 'Tailwind CSS',
                'slug' => 'tailwind-css',
                'logo' => null,
                'is_stat_card' => false,
                'is_published' => true,
                'order' => 4,
            ],
            [
                'name' => 'Filament',
                'slug' => 'filament',
                'logo' => null,
                'is_stat_card' => false,
                'is_published' => true,
                'order' => 5,
            ],
            // Stat Card 2
            [
                'name' => 'Stack préféré',
                'slug' => 'stack-prefere',
                'logo' => null,
                'is_stat_card' => true,
                'stat_number' => 'Laravel',
                'stat_title' => 'Stack préféré',
                'stat_description' => 'Avec Livewire et Tailwind CSS.',
                'is_published' => true,
                'order' => 6,
            ],
            [
                'name' => 'PHP',
                'slug' => 'php',
                'logo' => null,
                'is_stat_card' => false,
                'is_published' => true,
                'order' => 7,
            ],
            [
                'name' => 'MySQL',
                'slug' => 'mysql',
                'logo' => null,
                'is_stat_card' => false,
                'is_published' => true,
                'order' => 8,
            ],
            // Stat Card 3
            [
                'name' => 'Projets réalisés',
                'slug' => 'projets-realises',
                'logo' => null,
                'is_stat_card' => true,
                'stat_number' => '10',
                'stat_title' => 'Projets réalisés',
                'stat_description' => 'Des sites web aux SaaS complexes.',
                'is_published' => true,
                'order' => 9,
            ],
        ];

        foreach ($tools as $toolData) {
            Tool::create($toolData);
        }
    }
}
