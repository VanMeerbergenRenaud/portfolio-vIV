<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('tools')->nullable()->after('tags');
            $table->string('difficulty')->nullable()->after('tools');
            $table->string('roles')->nullable()->after('difficulty');

            // Section Contexte
            $table->string('context_title')->nullable()->after('tags');
            $table->text('context_description')->nullable()->after('context_title');
            $table->json('context_gallery')->nullable()->after('context_description');

            // Section Résultats
            $table->string('results_title')->nullable()->after('context_gallery');
            $table->text('results_description')->nullable()->after('results_title');
            $table->json('results_gallery')->nullable()->after('results_description');
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
                'difficulty',
                'roles',
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
