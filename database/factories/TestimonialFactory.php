<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'role' => fake()->jobTitle(),
            'company' => fake()->company(),
            'content' => fake()->paragraph(3),
            'rating' => fake()->numberBetween(4, 5),
            'is_published' => true,
            'order' => fake()->numberBetween(0, 10),
        ];
    }
}
