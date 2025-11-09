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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('subtitle')->nullable();
            $table->text('overview')->nullable();
            $table->string('project_name')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->integer('year')->nullable();
            $table->string('period')->nullable();
            $table->text('quote')->nullable();
            $table->string('author_name')->nullable();
            $table->string('author_title')->nullable();
            $table->string('author_image')->nullable();
            $table->json('stats')->nullable();
            $table->boolean('is_published')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
