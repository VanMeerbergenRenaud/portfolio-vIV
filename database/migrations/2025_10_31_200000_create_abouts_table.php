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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();

            // Stats (4 cartes avec statistiques)
            $table->string('stat1_value');
            $table->string('stat1_label');
            $table->string('stat2_value');
            $table->string('stat2_label');
            $table->string('stat3_value');
            $table->string('stat3_label');
            $table->string('stat4_value');
            $table->string('stat4_label');

            // Images (4 images pour desktop)
            $table->string('image1')->nullable();
            $table->string('image1_alt')->nullable();
            $table->string('image2')->nullable();
            $table->string('image2_alt')->nullable();
            $table->string('image3')->nullable();
            $table->string('image3_alt')->nullable();
            $table->string('image4')->nullable();
            $table->string('image4_alt')->nullable();

            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
