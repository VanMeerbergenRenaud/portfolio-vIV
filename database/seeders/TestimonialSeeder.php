<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Sophie',
                'role' => 'Chef de projet',
                'company' => 'Apple',
                'content' => '"Renaud a cette capacité rare de traduire nos idées, même floues, en une application fonctionnelle et intuitive. Son approche est un vrai plus."',
                'image' => null,
                'rating' => 5,
                'is_published' => true,
                'order' => 1,
            ],
            [
                'name' => 'Marc',
                'role' => 'Lead Developer',
                'company' => 'Google',
                'content' => '"C’est simple : le code de Renaud est un plaisir à relire en code review. C’est propre, bien structuré et ça fonctionne. Un atout pour l’équipe."',
                'image' => null,
                'rating' => 5,
                'is_published' => true,
                'order' => 2,
            ],
            [
                'name' => 'Laura',
                'role' => 'CTO',
                'company' => 'Tech Startup',
                'content' => '"C’est simple : le code de Renaud est un plaisir à relire en code review. C’est propre, bien structuré et ça fonctionne. Un atout pour l’équipe."',
                'image' => null,
                'rating' => 5,
                'is_published' => true,
                'order' => 3,
            ],
            [
                'name' => 'David',
                'role' => 'Product Owner',
                'company' => null,
                'content' => '"Renaud est le genre de dev qui ne se contente pas de faire marcher les choses, il veut les faire marcher VITE. Son souci de la performance est rare."',
                'image' => null,
                'rating' => 5,
                'is_published' => true,
                'order' => 4,
            ],
            [
                'name' => 'Julie',
                'role' => 'Responsable IT',
                'company' => null,
                'content' => 'Professionnel, réactif et compétent. Renaud a su s\'adapter à nos contraintes et nos exigences. Je recommande vivement.',
                'image' => null,
                'rating' => 5,
                'is_published' => true,
                'order' => 5,
            ],
        ];

        foreach ($testimonials as $testimonialData) {
            Testimonial::create($testimonialData);
        }
    }
}
