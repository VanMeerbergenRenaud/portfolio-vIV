<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Laravel & Livewire : Le combo parfait pour des SaaS rapides.',
                'slug' => 'laravel-livewire-combo-parfait-saas-rapides',
                'excerpt' => 'Retour d\'expérience sur mon projet Familynest et pourquoi Laravel + Livewire est idéal pour créer des applications SaaS.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => null,
                'category' => 'Laravel',
                'is_featured' => true,
                'is_published' => true,
                'order' => 1,
                'published_at' => now()->subDays(1),
            ],
            [
                'title' => 'Optimiser les performances d\'une application Laravel.',
                'slug' => 'optimiser-performances-application-laravel',
                'excerpt' => 'Techniques et bonnes pratiques pour améliorer les temps de réponse et l\'efficacité de vos applications Laravel.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => null,
                'category' => 'Performance',
                'is_featured' => false,
                'is_published' => true,
                'order' => 2,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Architecture hexagonale et Laravel.',
                'slug' => 'architecture-hexagonale-laravel',
                'excerpt' => 'Comment structurer vos applications Laravel avec une architecture hexagonale pour une meilleure maintenabilité.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => null,
                'category' => 'Architecture',
                'is_featured' => false,
                'is_published' => true,
                'order' => 3,
                'published_at' => now()->subDays(10),
            ],
        ];

        foreach ($articles as $articleData) {
            Article::create($articleData);
        }
    }
}
