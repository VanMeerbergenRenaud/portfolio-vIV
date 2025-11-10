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
                'url' => 'https://laravel.com',
                'logo' => null,
                'is_stat_card' => false,
                'is_published' => true,
                'order' => 1,
            ],
            [
                'name' => 'Livewire',
                'url' => 'https://livewire.laravel.com',
                'logo' => null,
                'is_stat_card' => false,
                'is_published' => true,
                'order' => 2,
            ],
            // Stat Card 1
            [
                'name' => 'Années d\'expérience',
                'url' => null,
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
                'url' => 'https://tailwindcss.com',
                'logo' => null,
                'is_stat_card' => false,
                'is_published' => true,
                'order' => 4,
            ],
            [
                'name' => 'Filament',
                'url' => 'https://filamentphp.com',
                'logo' => null,
                'is_stat_card' => false,
                'is_published' => true,
                'order' => 5,
            ],
            // Stat Card 2
            [
                'name' => 'Stack préféré',
                'url' => null,
                'logo' => null,
                'is_stat_card' => true,
                'stat_number' => 'Laravel',
                'stat_title' => 'Stack préféré',
                'stat_description' => 'Avec Livewire et Tailwind CSS.',
                'is_published' => true,
                'order' => 6,
            ],
            [
                'name' => 'Alpine JS',
                'url' => 'https://alpinejs.dev',
                'logo' => null,
                'is_stat_card' => false,
                'is_published' => true,
                'order' => 7,
            ],
            [
                'name' => 'MySQL',
                'url' => 'https://www.mysql.com',
                'logo' => null,
                'is_stat_card' => false,
                'is_published' => true,
                'order' => 8,
            ],
            // Stat Card 3
            [
                'name' => 'Projets réalisés',
                'url' => null,
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
