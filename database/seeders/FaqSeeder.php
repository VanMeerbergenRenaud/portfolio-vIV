<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Quelles sont vos technologies de prédilection ?',
                'answer' => 'Mon cœur bat pour l\'écosystème TALL (Laravel, Livewire). Côté front, c\'est Tailwind CSS et une pincée de magie JS/TS. Pour les données, MySQL/PostgreSQL. Et pour orchestrer le tout, je ne sors jamais sans Docker et Git.',
                'order' => 1,
            ],
            [
                'question' => 'Comment vous intégrez-vous dans une nouvelle équipe ?',
                'answer' => 'D\'abord, j\'écoute et j\'absorbe la doc existante. Ensuite, je pose des questions pertinentes pour comprendre l\'architecture et les défis. Mon but est d’être rapidement autonome et apporter de la valeur, pas juste une ligne de plus sur Git.',
                'order' => 2,
            ],
            [
                'question' => 'Quel type de poste recherchez-vous ?',
                'answer' => 'Je cherche un CDI au sein d\'une équipe ambitieuse. Je veux m\'investir sur le long terme, voir un produit évoluer et grandir avec mes collègues. Le mode "mercenaire" du freelance, très peu pour moi. Je veux construire.',
                'order' => 3,
            ],
            [
                'question' => 'Face à un bug coriace, quelle est votre méthode ?',
                'answer' => 'Étape 1 : le `dd()` afin d’isoler le problème. Étape 2 : parler à mon canard en plastique (oui, ça fonctionne). Étape 3 : si le canard sèche, je n\'hésite pas à solliciter un pair (senior ou IA). Un regard neuf vaut mieux que des heures de blocage en solo.',
                'order' => 4,
            ],
            [
                'question' => 'Votre plus grande force en tant que dev junior ?',
                'answer' => 'Ma vitesse d\'apprentissage. Je n\'ai pas 10 ans d\'expérience, mais j\'ai une énorme capacité à monter en compétence sur un nouveau projet ou une nouvelle API. Chaque défi est un prétexte pour devenir meilleur, plus vite.',
                'order' => 5,
            ],
            [
                'question' => 'Le projet de vos rêves, ce serait quoi ?',
                'answer' => 'Contribuer à un SaaS complexe avec un vrai défi d\'architecture. Une équipe où l\'on se tire vers le haut avec des code reviews qui piquent mais qui font progresser. Et si possible, une machine à café qui produit un café exemplaire venant tout droit du Jacu Bird.',
                'order' => 6,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
