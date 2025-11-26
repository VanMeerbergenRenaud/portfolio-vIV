<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'excerpt' => fake()->paragraph(),
            'content_blocks' => [
                [
                    'type' => 'heading',
                    'data' => [
                        'level' => 'h2',
                        'content' => fake()->sentence(),
                    ],
                ],
                [
                    'type' => 'paragraph',
                    'data' => [
                        'content' => fake()->paragraph(5),
                    ],
                ],
                [
                    'type' => 'heading',
                    'data' => [
                        'level' => 'h3',
                        'content' => fake()->sentence(),
                    ],
                ],
                [
                    'type' => 'rich_text',
                    'data' => [
                        'content' => '<p>'.fake()->paragraph(3).'</p><ul><li>'.fake()->sentence().'</li><li>'.fake()->sentence().'</li></ul>',
                    ],
                ],
                [
                    'type' => 'quote',
                    'data' => [
                        'content' => fake()->sentence(),
                        'author' => fake()->name(),
                    ],
                ],
            ],
            'cover_image' => null,
            'category' => fake()->randomElement(['developpement', 'design', 'tutoriel', 'reflexion', 'actualite']),
            'tags' => fake()->randomElements(['Laravel', 'PHP', 'JavaScript', 'Vue.js', 'Tailwind', 'Design', 'Performance', 'SEO'], rand(2, 5)),
            'reading_time' => rand(3, 15),
            'is_featured' => fake()->boolean(20),
            'is_published' => true,
            'order' => 0,
            'published_at' => fake()->dateTimeBetween('-6 months', 'now'),
        ];
    }
}
