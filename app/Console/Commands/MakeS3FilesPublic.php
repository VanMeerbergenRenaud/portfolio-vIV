<?php

namespace App\Console\Commands;

use App\Models\Project;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class MakeS3FilesPublic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'portfolio:make-s3-public {--dry-run : Show what would be done without making changes}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make existing S3 files public for portfolio projects';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $dryRun = $this->option('dry-run');

        if ($dryRun) {
            $this->info('Mode DRY RUN - Aucun changement ne sera effectué');
        }

        $disk = Storage::disk('s3');
        $projects = Project::whereNotNull('image')
            ->orWhereNotNull('logo')
            ->get();

        if ($projects->isEmpty()) {
            $this->info('Aucun projet avec des images trouvé.');

            return Command::SUCCESS;
        }

        $this->info("Traitement de {$projects->count()} projets...");

        $bar = $this->output->createProgressBar($projects->count());
        $bar->start();

        foreach ($projects as $project) {
            try {
                // Traiter l'image principale
                if ($project->image && $disk->exists($project->image)) {
                    if (! $dryRun) {
                        $disk->setVisibility($project->image, 'public');
                    }
                    $this->line("\n✅ Image publique: {$project->image}");
                } elseif ($project->image) {
                    $this->line("\n⚠️  Image introuvable: {$project->image}");
                }

                // Traiter le logo
                if ($project->logo && $disk->exists($project->logo)) {
                    if (! $dryRun) {
                        $disk->setVisibility($project->logo, 'public');
                    }
                    $this->line("✅ Logo public: {$project->logo}");
                } elseif ($project->logo) {
                    $this->line("⚠️  Logo introuvable: {$project->logo}");
                }

            } catch (\Exception $e) {
                $this->line("\n❌ Erreur pour le projet {$project->name}: {$e->getMessage()}");
            }

            $bar->advance();
        }

        $bar->finish();
        $this->newLine();

        if ($dryRun) {
            $this->info('Mode DRY RUN terminé. Utilisez la commande sans --dry-run pour appliquer les changements.');
        } else {
            $this->info('✅ Tous les fichiers ont été rendus publics!');
        }

        return Command::SUCCESS;
    }
}
