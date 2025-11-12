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
            'content' => fake()->paragraphs(5, true),
            'image' => '',
            'category' => fake()->randomElement(['Laravel', 'Architecture', 'Performance', 'Sécurité', 'DevOps', 'Design']),
            'is_featured' => fake()->boolean(20),
            'is_published' => true,
            'order' => 0,
            'published_at' => fake()->dateTimeBetween('-6 months', 'now'),
        ];
    }
}
