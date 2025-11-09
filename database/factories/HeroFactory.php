<?php

namespace Database\Factories;

use App\Models\Hero;
use Illuminate\Database\Eloquent\Factories\Factory;

class HeroFactory extends Factory
{
    protected $model = Hero::class;

    public function definition(): array
    {
        return [
            'title' => 'Full-Stack dev®',
            'description' => 'Je transforme le chaos des specs en <span class="text-gray-medium">code élégant, performant et qui traverse le temps.</span>',
            'hero_image' => null,
            'hero_image_alt' => 'Portrait of a person with motion blur effect, representing creative work.',
            'tech1' => 'Laravel • PHP',
            'tech2' => 'Livewire • Filament',
            'tech3' => 'Tailwind • JavaScript',
            'tech4' => 'MySQL • PostgreSQL',
            'copyright' => '© 2024 - 2025',
            'location' => 'Basé en Belgique',
            'badge_text' => 'Codeur passionné',
            'badge_description' => 'Diplômé avec grande distinction<br><span class="text-dark-primary">et une addiction au café.</span>',
            'availability_status' => 'En recherche active',
            'availability_type' => 'CDI/CDD',
            'is_available' => true,
            'contact_email' => 'renaud.vanmeerbergen@gmail.com',
            'is_published' => true,
        ];
    }
}

