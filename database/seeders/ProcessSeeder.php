<?php

namespace Database\Seeders;

use App\Models\Process;
use Illuminate\Database\Seeder;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $processes = [
            [
                'title' => 'Découverte',
                'description' => 'J’analyse vos besoins pour traduire votre vision en "user stories" claires et définir un périmètre fonctionnel solide.',
                'is_published' => true,
                'order' => 1,
            ],
            [
                'title' => 'Architecture',
                'description' => 'Je modélise la base de données et définis les services clés. C’est le plan d’une forteresse digitale imprenable.',
                'is_published' => true,
                'order' => 2,
            ],
            [
                'title' => 'Développement',
                'description' => 'J’écris un code propre et testable, en suivant une approche agile. Communication via Git pour une collaboration efficace.',
                'is_published' => true,
                'order' => 3,
            ],
            [
                'title' => 'Test & Livraison',
                'description' => 'Tests unitaires (Pest4) et tests d’intégration. La qualité n’est pas une option.',
                'is_published' => true,
                'order' => 4,
            ],
        ];

        foreach ($processes as $processData) {
            Process::create($processData);
        }
    }
}
