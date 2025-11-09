<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            // Stats
            'stat1_value' => '1+',
            'stat1_label' => 'Année d\'expérience',
            'stat2_value' => '9+',
            'stat2_label' => 'Projets réalisés',
            'stat3_value' => '500h+',
            'stat3_label' => 'Projet TFE',
            'stat4_value' => '4x',
            'stat4_label' => 'Plus productif avec du café',

            // Images
            'image1' => null,
            'image1_alt' => null,
            'image2' => null,
            'image2_alt' => null,
            'image3' => null,
            'image3_alt' => null,
            'image4' => null,
            'image4_alt' => null,

            'is_published' => true,
        ]);
    }
}
