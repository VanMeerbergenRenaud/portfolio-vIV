<?php

namespace App\Console\Commands;

use Aws\S3\S3Client;
use Illuminate\Console\Command;

class ConfigureS3Permissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'portfolio:configure-s3 {--dry-run : Show what would be done without making changes}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Configure S3 bucket permissions for public access to portfolio images';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $dryRun = $this->option('dry-run');

        if ($dryRun) {
            $this->info('Mode DRY RUN - Aucun changement ne sera effectué');
        }

        $bucket = config('filesystems.disks.s3.bucket');
        $region = config('filesystems.disks.s3.region');

        if (! $bucket || ! $region) {
            $this->error('Configuration S3 manquante. Vérifiez votre fichier .env');

            return Command::FAILURE;
        }

        $this->info("Configuration du bucket S3: {$bucket}");

        try {
            $s3Client = new S3Client([
                'version' => 'latest',
                'region' => $region,
                'credentials' => [
                    'key' => config('filesystems.disks.s3.key'),
                    'secret' => config('filesystems.disks.s3.secret'),
                ],
            ]);

            // 1. Désactiver le blocage d'accès public
            $this->info('Étape 1: Configuration du blocage d\'accès public...');

            if (! $dryRun) {
                $s3Client->putPublicAccessBlock([
                    'Bucket' => $bucket,
                    'PublicAccessBlockConfiguration' => [
                        'BlockPublicAcls' => false,
                        'IgnorePublicAcls' => false,
                        'BlockPublicPolicy' => false,
                        'RestrictPublicBuckets' => false,
                    ],
                ]);
            }

            // 2. Appliquer la politique de bucket
            $this->info('Étape 2: Application de la politique de bucket...');

            $bucketPolicy = [
                'Version' => '2012-10-17',
                'Statement' => [
                    [
                        'Sid' => 'PublicReadGetObject',
                        'Effect' => 'Allow',
                        'Principal' => '*',
                        'Action' => 's3:GetObject',
                        'Resource' => "arn:aws:s3:::{$bucket}/projects/*",
                    ],
                ],
            ];

            if (! $dryRun) {
                $s3Client->putBucketPolicy([
                    'Bucket' => $bucket,
                    'Policy' => json_encode($bucketPolicy),
                ]);
            } else {
                $this->line('Politique qui serait appliquée:');
                $this->line(json_encode($bucketPolicy, JSON_PRETTY_PRINT));
            }

            // 3. Configurer CORS si nécessaire
            $this->info('Étape 3: Configuration CORS...');

            $corsConfiguration = [
                'CORSRules' => [
                    [
                        'AllowedHeaders' => ['*'],
                        'AllowedMethods' => ['GET'],
                        'AllowedOrigins' => ['*'],
                        'MaxAgeSeconds' => 3600,
                    ],
                ],
            ];

            if (! $dryRun) {
                $s3Client->putBucketCors([
                    'Bucket' => $bucket,
                    'CORSConfiguration' => $corsConfiguration,
                ]);
            }

            $this->info('✅ Configuration S3 terminée avec succès!');

            if (! $dryRun) {
                $this->warn('⚠️  Il peut falloir quelques minutes pour que les changements prennent effet.');
            }

            return Command::SUCCESS;

        } catch (\Exception $e) {
            $this->error("Erreur lors de la configuration S3: {$e->getMessage()}");

            return Command::FAILURE;
        }
    }
}
