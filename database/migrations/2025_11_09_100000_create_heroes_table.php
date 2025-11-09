<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();

            // Titre principal
            $table->string('title')->default('Full-Stack dev®');

            // Description
            $table->text('description');

            // Image principale
            $table->string('hero_image')->nullable();
            $table->string('hero_image_alt')->nullable();

            // Technologies (4 items)
            $table->string('tech1')->default('Laravel • PHP');
            $table->string('tech2')->default('Livewire • Filament');
            $table->string('tech3')->default('Tailwind • JavaScript');
            $table->string('tech4')->default('MySQL • PostgreSQL');

            // Localisation
            $table->string('copyright')->default('© 2024 - 2025');
            $table->string('location')->default('Basé en Belgique');

            // Badge passionné
            $table->string('badge_text')->default('Codeur passionné');
            $table->text('badge_description');

            // Statut disponibilité
            $table->string('availability_status')->default('En recherche active');
            $table->string('availability_type')->default('CDI/CDD');
            $table->boolean('is_available')->default(true);

            // Contact
            $table->string('contact_email')->default('renaud.vanmeerbergen@gmail.com');

            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};

