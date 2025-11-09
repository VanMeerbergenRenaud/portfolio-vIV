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
        Schema::table('projects', function (Blueprint $table) {
            // Vérifier si les colonnes n'existent pas déjà avant de les ajouter
            if (! Schema::hasColumn('projects', 'tools')) {
                $table->json('tools')->nullable()->after('difficulty');
            }

            // Section Contexte/Objectif
            if (! Schema::hasColumn('projects', 'context_title')) {
                $table->string('context_title')->nullable()->after('tags');
            }
            if (! Schema::hasColumn('projects', 'context_description')) {
                $table->text('context_description')->nullable()->after('context_title');
            }
            if (! Schema::hasColumn('projects', 'context_gallery')) {
                $table->json('context_gallery')->nullable()->after('context_description');
            }

            // Section Résultats
            if (! Schema::hasColumn('projects', 'results_title')) {
                $table->string('results_title')->nullable()->after('context_gallery');
            }
            if (! Schema::hasColumn('projects', 'results_description')) {
                $table->text('results_description')->nullable()->after('results_title');
            }
            if (! Schema::hasColumn('projects', 'results_gallery')) {
                $table->json('results_gallery')->nullable()->after('results_description');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $columns = [
                'tools',
                'context_title',
                'context_description',
                'context_gallery',
                'results_title',
                'results_description',
                'results_gallery',
            ];

            foreach ($columns as $column) {
                if (Schema::hasColumn('projects', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};
