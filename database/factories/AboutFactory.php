<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<About>
 */
class AboutFactory extends Factory
{
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Stats
            'stat1_value' => '1+',
            'stat1_label' => 'Années d\'expérience',
            'stat2_value' => '9+',
            'stat2_label' => 'Projets réalisés',
            'stat3_value' => '500h+',
            'stat3_label' => 'Projet TFE',
            'stat4_value' => '2x',
            'stat4_label' => 'Perfs optimisées',

            // Images
            'image1' => null,
            'image1_alt' => 'Modern architectural building with red light',
            'image2' => null,
            'image2_alt' => 'Stack of balanced zen stones',
            'image3' => null,
            'image3_alt' => 'Futuristic black mannequin bust',
            'image4' => null,
            'image4_alt' => 'Modern desk setup with tablet and keyboard',

            'is_published' => true,
        ];
    }
}
