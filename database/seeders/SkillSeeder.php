<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            [
                'name' => 'Artisanat du Code',
                'slug' => 'artisanat-du-code',
                'description' => 'Code propre via les principes de base de la DOC. Je construis des forteresses logicielles, pas des plats de spaghettis.',
                'is_published' => true,
                'order' => 1,
            ],
            [
                'name' => 'Ingénierie de Solutions',
                'slug' => 'ingenierie-de-solutions',
                'description' => 'Traduire un besoin complexe en une architecture élégante. Je pense en solutions, pas juste en features.',
                'is_published' => true,
                'order' => 2,
            ],
            [
                'name' => 'Spécialiste Laravel & Perf',
                'slug' => 'specialiste-laravel-performance',
                'description' => 'Maîtrise de l\'écosystème Laravel pour des apps qui scalent sans sourciller. Chasseur officiel de requêtes N+1.',
                'is_published' => true,
                'order' => 3,
            ],
            [
                'name' => 'Veille & Curiosité Technique',
                'slug' => 'veille-curiosite-technique',
                'description' => 'Ma veille est active. J\'ai déjà testé la dernière bêta pendant que d\'autres lisent la release note.',
                'is_published' => true,
                'order' => 4,
            ],
            [
                'name' => 'Pragmatisme & "Get Things Done"',
                'slug' => 'pragmatisme-get-things-done',
                'description' => 'Savoir faire la différence entre excellence et sur-ingénierie. Le code parfait existe, mais le code livré est mieux.',
                'is_published' => true,
                'order' => 5,
            ],
            [
                'name' => 'Communication via le Code',
                'slug' => 'communication-via-le-code',
                'description' => 'Des Pull Requests claires sont ma forme de politesse. Un projet avance grâce à une vision partagée, pas à du jargon.',
                'is_published' => true,
                'order' => 6,
            ],
        ];

        foreach ($skills as $skillData) {
            Skill::create($skillData);
        }
    }
}
