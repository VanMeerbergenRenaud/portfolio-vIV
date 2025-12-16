<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Laravel & Livewire : le combo parfait pour des SaaS rapides',
                'slug' => 'laravel-livewire-combo-parfait-saas-rapides',
                'excerpt' => 'Dans l\'univers tumultueux du développement web, certaines alliances transcendent la simple synergie technique. Découvrez comment Laravel et Livewire orchestrent ensemble une symphonie de productivité pour lancer des SaaS en quelques semaines.',
                'content_blocks' => [
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Il est 3 heures du matin. Votre café refroidit lentement tandis que vos doigts dansent sur le clavier. Vous êtes en pleine construction de votre SaaS, cette idée qui vous hante depuis des mois. Et soudain, vous réalisez : vous venez d\'implémenter une fonctionnalité complexe en temps réel sans écrire une seule ligne de JavaScript. Bienvenue dans l\'univers magique de Laravel et Livewire.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'L\'élégance de la simplicité'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Parlons franchement entre développeurs : combien de fois avez-vous pesté contre la complexité de votre stack front-end ? Combien d\'heures perdues à synchroniser l\'état entre votre API et votre interface ? Laravel et Livewire proposent une philosophie radicalement différente : et si la simplicité était la sophistication ultime ?'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Laravel, ce framework PHP qui a su conquérir les cœurs par son élégance syntaxique, s\'associe à Livewire pour créer des interfaces réactives avec la puissance du back-end. Imaginez : des composants dynamiques, des mises à jour en temps réel, des formulaires intelligents - le tout orchestré depuis votre code PHP adoré.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'La puissance du monolithe moderne'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Le terme "monolithe" fait grincer des dents dans l\'industrie. Pourtant, pour un SaaS en phase de lancement, c\'est souvent la stratégie la plus intelligente. Laravel et Livewire incarnent parfaitement cette approche moderne du monolithe : toute votre logique au même endroit, mais avec une architecture propre et maintenable.'],
                    ],
                    [
                        'type' => 'quote',
                        'data' => ['content' => 'La complexité prématurée est l\'ennemie du lancement rapide. Laravel et Livewire vous permettent de démarrer simple et d\'évoluer intelligemment.', 'author' => 'Caleb Porzio'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Les piliers de la vélocité'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'La réactivité sans compromis'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Livewire utilise une approche hybride brillante : vos composants PHP communiquent avec le front-end via des requêtes AJAX optimisées. Le rendu se fait côté serveur, mais l\'expérience utilisateur reste fluide et moderne.'],
                    ],
                    [
                        'type' => 'code_img',
                        'data' => [
                            'url' => null,
                            'alt' => 'Exemple de composant Livewire SearchComponent',
                            'caption' => 'Un composant de recherche en temps réel avec Livewire',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'L\'écosystème qui fait rêver'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Laravel n\'est pas juste un framework, c\'est un écosystème complet. Eloquent ORM, Queue, Events, Notifications, Horizon... Tout est là, élégant, testé, documenté. Ajoutez-y Livewire et Alpine.js, et vous avez tout ce dont vous avez besoin.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Construire un SaaS en production'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Avec Laravel et Livewire, un MVP peut être en production en 6 semaines. Pas 6 mois. Comment ? En évitant la sur-ingénierie et en se concentrant sur ce qui compte vraiment : résoudre les problèmes utilisateurs.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Performance : briser les mythes'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'On m\'a souvent dit : "Livewire, c\'est lent". Permettez-moi de briser ce mythe. Laravel Octane multiplie par 4 à 10 la vitesse de traitement. Redis pour le cache, Horizon pour les queues - l\'écosystème est conçu pour scaler.'],
                    ],
                    [
                        'type' => 'rich_text',
                        'data' => ['content' => '<p>Stratégies d\'optimisation :</p><ul><li>Lazy loading pour ne charger que le nécessaire</li><li>Cache à tous les niveaux</li><li>CDN pour les assets statiques</li><li>Database indexing intelligent</li></ul>'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Quand utiliser ce stack'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Soyons honnêtes : Laravel et Livewire ne sont pas la solution universelle. Ce stack est parfait pour les SaaS B2B, dashboards administratifs, applications internes, et MVP qui doivent être validés rapidement.'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Après des années à tester chaque nouveau framework, j\'en suis arrivé à cette conclusion : la meilleure stack est celle qui vous permet de livrer. Laravel et Livewire incarnent cette philosophie.'],
                    ],
                    [
                        'type' => 'sources',
                        'data' => [
                            'items' => [
                                [
                                    'title' => 'Livewire v3 Documentation',
                                    'url' => 'https://livewire.laravel.com/docs',
                                    'description' => 'La bible technique pour maîtriser la réactivité côté serveur.',
                                ],
                                [
                                    'title' => 'FilamentPHP - The TALL Stack Admin Panel',
                                    'url' => 'https://filamentphp.com/',
                                    'description' => 'L\'outil de prédilection pour construire des back-offices SaaS en un temps record.',
                                ],
                                [
                                    'title' => 'Alpine.js - A rugged, minimal tool',
                                    'url' => 'https://alpinejs.dev/',
                                    'description' => 'Le compagnon JavaScript indispensable pour les interactions légères.',
                                ],
                                [
                                    'title' => 'The TALL Stack ecosystem',
                                    'url' => 'https://tallstack.dev/',
                                    'description' => 'Ressources pour l\'alliance Tailwind, Alpine, Laravel et Livewire.',
                                ],
                            ],
                        ],
                    ],
                ],
                'cover_image' => null,
                'category' => 'experience',
                'tags' => ['Laravel', 'Livewire', 'SaaS', 'PHP', 'Développement rapide'],
                'reading_time' => 12,
                'is_featured' => true,
                'is_published' => true,
                'order' => 1,
                'published_at' => now()->subDays(1),
            ],
            [
                'title' => 'Optimiser les performances d\'une application Laravel',
                'slug' => 'optimiser-performances-application-laravel',
                'excerpt' => 'L\'optimisation n\'est pas une option, c\'est une nécessité. Découvrez les techniques avancées et les stratégies éprouvées pour transformer une application Laravel lente en une machine de guerre performante.',
                'content_blocks' => [
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Votre application Laravel tourne en production depuis quelques mois. Les utilisateurs affluent, les données s\'accumulent, et soudain : les pages se chargent lentement, les requêtes prennent plusieurs secondes, votre serveur commence à suffoquer. Bienvenue dans le monde de l\'optimisation des performances.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Les fondamentaux de la performance'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Avant de plonger dans les optimisations avancées, commençons par les bases. L\'optimisation Laravel repose sur trois piliers : la base de données, le cache, et l\'infrastructure. Chacun de ces piliers peut, s\'il est mal géré, devenir un goulot d\'étranglement fatal.'],
                    ],
                    [
                        'type' => 'quote',
                        'data' => ['content' => 'L\'optimisation prématurée est la racine de tous les maux. Mais l\'optimisation au bon moment est la clé de la survie.', 'author' => 'Donald Knuth (adapté)'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Optimiser la base de données'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Le problème N+1 : l\'ennemi numéro un'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Le problème N+1 est le cauchemar silencieux de toute application Laravel. Vous chargez 100 articles, et sans vous en rendre compte, votre application exécute 101 requêtes SQL au lieu d\'une seule. La solution ? L\'eager loading.'],
                    ],
                    [
                        'type' => 'code_img',
                        'data' => [
                            'url' => null,
                            'alt' => 'Comparaison mauvaise et bonne pratique pour éviter le problème N+1',
                            'caption' => 'Eager loading vs lazy loading : réduire 101 requêtes à seulement 2',
                        ],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Cette simple modification peut transformer une page qui se charge en 3 secondes en une page qui répond en 200ms. Laravel Debugbar et Telescope sont vos meilleurs amis pour détecter ces problèmes.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Les index : la puissance invisible'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Les index de base de données sont comme la table des matières d\'un livre. Sans eux, MySQL doit parcourir chaque ligne pour trouver ce que vous cherchez. Avec eux, il saute directement à la bonne page.'],
                    ],
                    [
                        'type' => 'code_img',
                        'data' => [
                            'url' => null,
                            'alt' => 'Ajout d\'index sur une table Laravel avec Schema Builder',
                            'caption' => 'Création d\'index pour optimiser les requêtes',
                        ],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Attention cependant : trop d\'index ralentissent les écritures. Il faut trouver l\'équilibre entre lectures et écritures. Indexez les colonnes utilisées dans les WHERE, JOIN, et ORDER BY.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Le cache : votre meilleur allié'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Cache de requêtes : ne calculez qu\'une fois'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Pourquoi recalculer quelque chose qui ne change pas toutes les secondes ? Le cache de requêtes est votre première ligne de défense contre les requêtes répétitives.'],
                    ],
                    [
                        'type' => 'code_img',
                        'data' => [
                            'url' => null,
                            'alt' => 'Utilisation du cache Laravel pour les requêtes répétitives',
                            'caption' => 'Cache::remember pour éviter les requêtes répétitives',
                        ],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Cette requête s\'exécute une fois par heure au lieu de milliers de fois. Redis est particulièrement efficace pour ce type de cache, offrant des temps de réponse sub-milliseconde.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Cache de vues : servez du HTML statique'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Les vues Blade, même compilées, nécessitent du traitement. Pour les pages qui ne changent pas souvent, cachez le HTML généré.'],
                    ],
                    [
                        'type' => 'code_img',
                        'data' => [
                            'url' => null,
                            'alt' => 'Directive Blade @cache pour cacher le HTML généré',
                            'caption' => 'Cache de vues Blade pour les sections statiques',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Cache de configuration et routes'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'En production, Laravel charge vos fichiers de configuration et routes à chaque requête. C\'est un gaspillage de ressources. La solution est simple mais puissante :'],
                    ],
                    [
                        'type' => 'code_img',
                        'data' => [
                            'url' => null,
                            'alt' => 'Commandes Artisan pour cacher la configuration et les routes',
                            'caption' => 'Commandes essentielles pour optimiser Laravel en production',
                        ],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Ces quatre commandes peuvent réduire le temps de boot de votre application de 50%. Intégrez-les dans votre pipeline de déploiement.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Laravel Octane : la révolution des performances'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Laravel Octane change complètement la donne. Au lieu de démarrer votre application à chaque requête, Octane la garde en mémoire. Les gains sont spectaculaires : 4x à 10x plus de requêtes par seconde.'],
                    ],
                    [
                        'type' => 'code_img',
                        'data' => [
                            'url' => null,
                            'alt' => 'Installation et configuration de Laravel Octane avec Swoole',
                            'caption' => 'Installation d\'Octane pour des performances x4 à x10',
                        ],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Attention cependant : Octane nécessite une refonte de votre façon de penser. Les variables statiques persistent entre les requêtes, ce qui peut causer des fuites de mémoire si vous n\'êtes pas vigilant.'],
                    ],
                    [
                        'type' => 'rich_text',
                        'data' => ['content' => '<p>Bonnes pratiques Octane :</p><ul><li>Évitez les variables statiques pour les données de requête</li><li>Nettoyez les ressources dans les terminables</li><li>Utilisez les intervalles pour le garbage collection</li><li>Testez la consommation mémoire sous charge</li></ul>'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Queues : libérez vos requêtes'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Tout ce qui n\'est pas nécessaire immédiatement doit être déporté en queue. Envoi d\'emails, génération de rapports, traitement d\'images, appels API externes : tout ça ne doit pas bloquer la requête utilisateur.'],
                    ],
                    [
                        'type' => 'code_img',
                        'data' => [
                            'url' => null,
                            'alt' => 'Comparaison entre envoi d\'email synchrone et asynchrone avec Laravel Queue',
                            'caption' => 'Déporter les tâches longues en queue pour un retour instantané',
                        ],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Laravel Horizon vous donne une visibilité totale sur vos queues : throughput, failed jobs, retry strategies. C\'est un outil indispensable en production.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Monitoring : mesurer pour améliorer'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Vous ne pouvez pas optimiser ce que vous ne mesurez pas. Laravel offre plusieurs outils de monitoring essentiels.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Laravel Telescope : votre télescope de développement'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Telescope enregistre chaque requête, chaque query, chaque job. C\'est votre boîte noire pour déboguer les problèmes de performance. Activez-le en développement, et occasionnellement en production pour investiguer des lenteurs.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'APM : monitoring en production'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Des solutions comme New Relic, Datadog, ou Blackfire vous donnent une visibilité complète sur les performances en production. Elles détectent automatiquement les slow queries, les endpoints lents, et les goulots d\'étranglement.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Checklist d\'optimisation'],
                    ],
                    [
                        'type' => 'rich_text',
                        'data' => ['content' => '<p>Avant le déploiement en production :</p><ul><li>Eager loading sur toutes les relations</li><li>Index sur les colonnes critiques</li><li>Cache de config, routes, et vues</li><li>Redis pour le cache et les sessions</li><li>Queues pour les tâches longues</li><li>CDN pour les assets statiques</li><li>Compression Gzip activée</li><li>Lazy loading des images</li><li>Pagination sur les grandes listes</li><li>APM configuré</li></ul>'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Le mot de la fin'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'L\'optimisation est un voyage, pas une destination. Commencez par les bases : eager loading, cache, et index. Puis progressez vers Octane et les stratégies avancées. Mais surtout : mesurez, mesurez, mesurez. Les données battent toujours les intuitions.'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Une application performante n\'est pas un luxe, c\'est la différence entre un utilisateur qui reste et un utilisateur qui part. Laravel vous donne tous les outils nécessaires. À vous de les utiliser intelligemment.'],
                    ],
                    [
                        'type' => 'sources',
                        'data' => [
                            'items' => [
                                [
                                    'title' => 'Laravel Octane - Supercharging Performance',
                                    'url' => 'https://laravel.com/docs/octane',
                                    'description' => 'Documentation sur l\'utilisation de Swoole/RoadRunner pour des performances x10.',
                                ],
                                [
                                    'title' => 'Eloquent Performance Patterns',
                                    'url' => 'https://eloquent-course.reinink.ca/',
                                    'description' => 'Référence ultime par Jonathan Reinink pour résoudre les problèmes N+1 et l\'optimisation SQL.',
                                ],
                                [
                                    'title' => 'Blackfire.io Profiler',
                                    'url' => 'https://blackfire.io/docs/integrations/laravel',
                                    'description' => 'Outil professionnel d\'APM pour visualiser les goulots d\'étranglement.',
                                ],
                                [
                                    'title' => 'High Performance MySQL',
                                    'url' => 'https://dev.mysql.com/doc/refman/8.0/en/optimization-indexes.html',
                                    'description' => 'Documentation technique sur la stratégie d\'indexation B-Tree.',
                                ],
                            ],
                        ],
                    ],
                ],
                'cover_image' => null,
                'category' => 'tutorial',
                'tags' => ['Laravel', 'Performance', 'Optimisation', 'Cache', 'Database'],
                'reading_time' => 15,
                'is_featured' => false,
                'is_published' => true,
                'order' => 2,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Architecture et Laravel Cloud service',
                'slug' => 'architecture-laravel-cloud-service',
                'excerpt' => 'Le cloud computing a révolutionné le déploiement d\'applications. Découvrez comment architecturer une application Laravel moderne pour tirer parti des services cloud et garantir scalabilité, résilience et performance.',
                'content_blocks' => [
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Le déploiement d\'applications web a radicalement changé ces dernières années. Fini le temps du serveur unique qui héberge tout. Aujourd\'hui, nous construisons des architectures distribuées, résilientes, qui s\'adaptent automatiquement à la charge. Laravel s\'intègre parfaitement dans cet écosystème cloud moderne.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'L\'architecture cloud moderne'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Une architecture cloud bien pensée repose sur plusieurs principes fondamentaux : séparation des préoccupations, scalabilité horizontale, haute disponibilité, et observabilité. Laravel, avec son écosystème riche, s\'adapte naturellement à ces principes.'],
                    ],
                    [
                        'type' => 'quote',
                        'data' => ['content' => 'Architecture is about the important stuff. Whatever that is.', 'author' => 'Martin Fowler'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'AWS : le géant incontournable'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'EC2 et auto-scaling'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'EC2 reste la base du déploiement AWS. Mais au lieu d\'un serveur unique, pensez auto-scaling group. Votre application Laravel tourne sur plusieurs instances qui s\'ajoutent ou se retirent automatiquement selon la charge.'],
                    ],
                    [
                        'type' => 'rich_text',
                        'data' => ['content' => '<p>Architecture typique AWS :</p><ul><li><strong>Application Layer Gateway</strong> : Point d\'entrée unique, SSL termination</li><li><strong>EC2 Auto Scaling Group</strong> : Serveurs web Laravel qui scalent</li><li><strong>RDS Aurora</strong> : Base de données managée, multi-AZ</li><li><strong>ElastiCache Redis</strong> : Cache et sessions distribuées</li><li><strong>S3</strong> : Stockage des fichiers statiques</li><li><strong>CloudFront</strong> : CDN global pour les assets</li></ul>'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'S3 et CloudFront : l\'art de servir les fichiers'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Ne stockez jamais les fichiers uploadés sur vos serveurs EC2. Ils sont éphémères. S3 est votre source de vérité pour tous les fichiers. Laravel rend l\'intégration triviale.'],
                    ],
                    [
                        'type' => 'code_img',
                        'data' => [
                            'url' => null,
                            'alt' => 'Configuration du disque S3 dans Laravel et utilisation du Storage',
                            'caption' => 'Intégration AWS S3 avec Laravel pour le stockage de fichiers',
                        ],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'CloudFront devant S3 donne à vos utilisateurs des temps de chargement sub-100ms, peu importe où ils se trouvent dans le monde. Les assets sont servis depuis le edge location le plus proche.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'RDS Aurora : la base de données qui scale'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Aurora est compatible MySQL et PostgreSQL, mais avec des performances supérieures. La réplication multi-AZ est automatique, les backups sont continus, et le scaling se fait à chaud sans downtime.'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Pour Laravel, c\'est transparent. Vous pointez simplement votre configuration database vers le endpoint Aurora, et tout fonctionne. Le read replica endpoint permet de router les SELECT vers les réplicas pour décharger le master.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Laravel Vapor : serverless sans friction'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Laravel Vapor est la solution serverless officielle de Laravel. Elle abstraie toute la complexité d\'AWS Lambda, API Gateway, RDS, et S3 derrière une interface simple et élégante.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Le serverless expliqué simplement'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Avec le serverless, vous ne gérez plus de serveurs. Votre code s\'exécute à la demande, scale automatiquement de 0 à l\'infini, et vous ne payez que ce que vous utilisez. Pas de requêtes ? Pas de coûts. 10 000 requêtes simultanées ? Aucun problème.'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Vapor compile votre application Laravel dans un format compatible Lambda, configure automatiquement l\'API Gateway, gère les deployments blue-green, et vous donne une URL HTTPS sécurisée en quelques minutes.'],
                    ],
                    [
                        'type' => 'code_img',
                        'data' => [
                            'url' => null,
                            'alt' => 'Installation et déploiement avec Laravel Vapor',
                            'caption' => 'Déployer en serverless avec Vapor en 3 commandes',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Quand choisir Vapor'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Vapor brille pour les applications avec un trafic variable. Un blog qui a des pics de trafic sporadiques, une landing page qui explose après une pub, un outil interne utilisé en journée uniquement : Vapor scale automatiquement et ne coûte rien quand il n\'y a pas de trafic.'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Pour les applications avec un trafic constant et prévisible, EC2 avec auto-scaling peut être plus économique. Faites le calcul en fonction de vos besoins réels.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Laravel Forge : l\'infrastructure as code simplifiée'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Forge est le couteau suisse du déploiement Laravel. Il provisionne et configure vos serveurs chez n\'importe quel provider (AWS, DigitalOcean, Linode, Vultr...), installe tout ce dont vous avez besoin (PHP, Nginx, MySQL, Redis), et gère vos déploiements avec une interface simple.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Configuration zero-downtime'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Forge peut configurer des déploiements zero-downtime avec plusieurs stratégies. La plus simple : déployer sur un serveur staging, puis swapper le load balancer une fois les tests passés.'],
                    ],
                    [
                        'type' => 'rich_text',
                        'data' => ['content' => '<p>Ce que Forge fait pour vous :</p><ul><li>Provisioning de serveurs en un clic</li><li>Configuration SSL automatique avec Let\'s Encrypt</li><li>Déploiement git automatique sur push</li><li>Gestion des workers de queue</li><li>Scheduled tasks (cron) dans l\'interface</li><li>Backup automatique de base de données</li><li>Monitoring de santé des serveurs</li></ul>'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Architecture multi-tenant avec AWS'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Les applications SaaS multi-tenant posent des défis d\'architecture uniques. Chaque client doit être isolé, performant, et ne pas affecter les autres. Laravel et AWS offrent plusieurs stratégies.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Base de données par tenant'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'La stratégie la plus robuste : chaque client a sa propre base de données. RDS supporte jusqu\'à 40 bases de données par instance. Laravel Tenancy gère automatiquement le switching entre bases.'],
                    ],
                    [
                        'type' => 'code_img',
                        'data' => [
                            'url' => null,
                            'alt' => 'Configuration Laravel Tenancy pour le multi-tenant',
                            'caption' => 'Switching automatique entre bases de données par tenant',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Isolation des fichiers'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Sur S3, chaque tenant a son propre préfixe (ou bucket). Les IAM policies garantissent qu\'un tenant ne peut jamais accéder aux fichiers d\'un autre.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Observabilité et monitoring'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Une architecture cloud sans observabilité est une bombe à retardement. Vous devez savoir ce qui se passe dans votre application à tout moment.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'CloudWatch : les logs centralisés'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Tous vos serveurs doivent envoyer leurs logs vers CloudWatch. Laravel rend ça trivial avec le driver de logging cloudwatch. Vous pouvez ensuite rechercher, filtrer, et alerter sur n\'importe quel pattern.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'CloudWatch Alarms : être alerté avant le drame'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Configurez des alarmes sur les métriques critiques : CPU > 80%, disk space < 20%, erreur rate > 5%. Recevez une notification Slack ou un SMS avant que vos utilisateurs ne soient impactés.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Sécurité dans le cloud'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Le cloud n\'est pas automatiquement sécurisé. C\'est à vous de configurer correctement les security groups, IAM policies, et secrets management.'],
                    ],
                    [
                        'type' => 'rich_text',
                        'data' => ['content' => '<p>Checklist de sécurité AWS :</p><ul><li>Secrets dans AWS Secrets Manager, jamais dans le code</li><li>IAM roles avec principe de moindre privilège</li><li>Security groups restrictifs (whitelist, pas blacklist)</li><li>SSL/TLS partout, certificats ACM</li><li>Encryption at rest pour RDS et S3</li><li>MFA activé sur tous les comptes</li><li>CloudTrail pour auditer toutes les actions</li><li>GuardDuty pour détecter les comportements suspects</li></ul>'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Coûts : optimiser sans sacrifier la performance'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Le cloud peut coûter cher si vous n\'optimisez pas. Mais avec les bonnes pratiques, vous pouvez réduire vos coûts de 40 à 60% sans impacter les performances.'],
                    ],
                    [
                        'type' => 'rich_text',
                        'data' => ['content' => '<p>Stratégies d\'optimisation des coûts :</p><ul><li>Reserved Instances pour la capacité de base (économies jusqu\'à 70%)</li><li>Spot Instances pour les workers non-critiques</li><li>Auto-scaling pour éviter la sur-provision</li><li>S3 Intelligent Tiering pour les fichiers peu accédés</li><li>CloudFront pour réduire les transferts depuis S3</li><li>RDS Aurora Serverless pour les environnements de dev/staging</li></ul>'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Le mot de la fin'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Architecturer une application Laravel pour le cloud n\'est pas sorcier. Les outils existent, ils sont matures, et ils fonctionnent ensemble harmonieusement. Que vous choisissiez AWS avec EC2, Vapor pour le serverless, ou Forge pour simplifier la gestion, l\'écosystème Laravel vous accompagne.'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Commencez simple : un serveur Forge, une base RDS, et S3 pour les fichiers. Puis scalez progressivement : ajoutez un load balancer, activez l\'auto-scaling, implémentez le caching agressif. L\'architecture cloud est un voyage itératif. L\'important est de démarrer et d\'améliorer continuellement.'],
                    ],
                    [
                        'type' => 'sources',
                        'data' => [
                            'items' => [
                                [
                                    'title' => 'The Twelve-Factor App',
                                    'url' => 'https://12factor.net/fr/',
                                    'description' => 'La méthodologie standard pour construire des applications SaaS modernes et scalables.',
                                ],
                                [
                                    'title' => 'AWS Well-Architected Framework',
                                    'url' => 'https://aws.amazon.com/architecture/well-architected/',
                                    'description' => 'Les piliers de l\'excellence architecturale cloud selon Amazon.',
                                ],
                                [
                                    'title' => 'Laravel Vapor Documentation',
                                    'url' => 'https://docs.vapor.build/',
                                    'description' => 'Guide technique du déploiement serverless sur AWS Lambda.',
                                ],
                                [
                                    'title' => 'Scaling Laravel on AWS',
                                    'url' => 'https://serverless.com/blog/laravel-serverless-architecture/',
                                    'description' => 'Étude de cas sur l\'architecture distribuée et le passage à l\'échelle.',
                                ],
                            ],
                        ],
                    ],
                ],
                'cover_image' => null,
                'category' => 'experience',
                'tags' => ['Laravel', 'AWS', 'Cloud', 'Architecture', 'DevOps', 'Scalabilité'],
                'reading_time' => 18,
                'is_featured' => false,
                'is_published' => true,
                'order' => 3,
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'CSS Wrapped 2025 : La révolution du Web Natif',
                'slug' => 'css-wrapped-2025-revolution-web-natif',
                'excerpt' => 'L\'équipe Chrome Dev vient de publier le CSS Wrapped 2025. Le constat est sans appel : nous assistons à la plus grande évolution du langage depuis Flexbox. Découvrez comment le CSS natif remplace désormais des kilooctets de JavaScript.',
                'content_blocks' => [
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'L\'équipe Chrome Dev vient de dévoiler son CSS Wrapped 2025. Au-delà de la vitrine interactive, c\'est un signal fort pour l\'industrie : le CSS de 2025 n\'a plus rien à voir avec le langage de style limité que nous avons appris à contourner pendant une décennie.'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Après avoir décortiqué cette démo technique et mesuré les gains de performance, ma conclusion est catégorique : le fossé entre "ce qu\'on peut faire en CSS" et "ce qu\'on doit faire en JavaScript" vient de se combler. 🚀'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Nous quittons l\'ère où CSS servait uniquement à la "décoration". Le navigateur prend désormais en charge nativement des interactions complexes qui nécessitaient hier de lourdes bibliothèques tierces.'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Voici les 5 piliers techniques qui redéfinissent le développement frontend en 2025.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => '1. Animations et performances natives'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'La fluidité à 60fps n\'est plus un objectif difficile à atteindre, c\'est désormais une garantie architecturale offerte par le navigateur.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Scroll-driven Animations'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Animer un élément au scroll impliquait historiquement d\'écouter l\'événement `scroll` en JS et de calculer des positions via `requestAnimationFrame`. Une méthode coûteuse en ressources, souvent saccadée sur mobile.'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Les Scroll-driven Animations délèguent cette tâche au "compositor thread". Concrètement : même si votre thread principal JavaScript est bloqué par un calcul lourd, l\'animation reste parfaitement fluide.'],
                    ],
                    [
                        'type' => 'code_text',
                        'data' => [
                            'language' => 'css',
                            'code' => '@keyframes reveal {
  from { opacity: 0; transform: translateY(100px) scale(0.8); }
  to { opacity: 1; transform: translateY(0) scale(1); }
}

.card {
  animation: reveal linear both;
  animation-timeline: view();
  animation-range: entry 0% entry 100%;
}',
                            'caption' => 'Apparition progressive au scroll sans une seule ligne de JavaScript.',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'View Transitions API'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Imiter la fluidité des applications natives (transitions entre les pages) nécessitait jusqu\'ici une architecture SPA complexe. La View Transitions API change la donne en permettant au navigateur de capturer l\'état "avant" et "après" navigation pour interpoler automatiquement le changement.'],
                    ],
                    [
                        'type' => 'code_text',
                        'data' => [
                            'language' => 'css',
                            'code' => '@view-transition {
  navigation: auto;
}

.hero-image {
  view-transition-name: hero;
}',
                            'caption' => 'Morphing automatique d\'une image entre deux pages HTML distinctes.',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Gestion des états d\'entrée'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Animer un élément passant de `display: none` à `block` a toujours été un casse-tête nécessitant des hacks. Avec `@starting-style`, nous pouvons enfin définir l\'état initial d\'un élément lors de son insertion dans le DOM.'],
                    ],
                    [
                        'type' => 'code_text',
                        'data' => [
                            'language' => 'css',
                            'code' => 'dialog {
  opacity: 1;
  transform: translateY(0);
  transition: opacity 0.3s, transform 0.3s, display 0.3s allow-discrete;
}

@starting-style {
  dialog[open] {
    opacity: 0;
    transform: translateY(-20px);
  }
}',
                            'caption' => 'Animation d\'entrée propre pour une modale, incluant la propriété display.',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => '2. Architecture orientée composants'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Le CSS moderne comprend enfin la structure logique de nos applications et propose des outils pour gérer l\'encapsulation et le contexte.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Anchor Positioning'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Positionner un tooltip ou un menu par rapport à son déclencheur ne requiert plus de bibliothèques comme Popper.js. `Anchor Positioning` rend ce lien déclaratif et gère nativement le repositionnement si l\'espace manque.'],
                    ],
                    [
                        'type' => 'code_text',
                        'data' => [
                            'language' => 'css',
                            'code' => '.tooltip {
  position: fixed;
  position-anchor: --my-trigger;
  top: anchor(bottom);
  left: anchor(center);
  translate: -50% 10px;

  position-try-fallbacks: --top, --right;
}',
                            'caption' => 'Un tooltip ancré qui s\'adapte intelligemment à l\'espace disponible.',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Container Queries'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Le responsive design évolue. Au lieu de regarder la taille de l\'écran (Media Queries), nous pouvons désormais adapter un composant selon la taille de son conteneur parent. C\'est la clé pour créer des composants réellement portables.'],
                    ],
                    [
                        'type' => 'code_text',
                        'data' => [
                            'language' => 'css',
                            'code' => '.card-container {
  container-type: inline-size;
  container-name: card;
}

@container card (min-width: 400px) {
  .card {
    grid-template-columns: 200px 1fr;
    gap: 2rem;
  }
}',
                            'caption' => 'La carte change de layout selon l\'espace conteneur, peu importe le viewport.',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'CSS Nesting natif'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'L\'imbrication, fonctionnalité phare des préprocesseurs comme SASS, est désormais standardisée. Le code est plus concis et plus lisible sans étape de compilation.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => '3. Puissance de calcul'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'CSS devient un moteur de calcul capable de gérer des logiques mathématiques complexes pour le layout et l\'animation.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Fonctions trigonométriques'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => '`sin()`, `cos()`, `tan()` débarquent nativement. Elles permettent de créer des layouts circulaires ou des trajectoires complexes sans une seule ligne de JavaScript.'],
                    ],
                    [
                        'type' => 'code_text',
                        'data' => [
                            'language' => 'css',
                            'code' => '.orbit__item {
  --angle: calc(360deg / var(--items) * var(--i));
  translate:
    calc(cos(var(--angle)) * var(--radius))
    calc(sin(var(--angle)) * var(--radius));
}',
                            'caption' => 'Positionnement circulaire calculé dynamiquement en CSS.',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Fonction attr() typée'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'La nouvelle syntaxe de `attr()` permet de récupérer une valeur HTML, de la typer (nombre, couleur, unité) et de l\'utiliser directement dans vos calculs de style. Un pont robuste entre HTML et CSS.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => '4. Couleurs haute définition'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Nos écrans modernes sont capables d\'afficher bien plus que le standard sRGB des années 90. CSS s\'ouvre enfin à cet espace colorimétrique étendu.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Espaces P3 et OKLCH'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'L\'espace Display-P3 offre des couleurs plus vibrantes (+25% de spectre). `OKLCH`, quant à lui, garantit une uniformité perceptuelle : changer la teinte ne modifie plus la luminosité perçue, ce qui simplifie drastiquement la création de palettes accessibles.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Relative Color Syntax'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'La manipulation de couleur devient programmatique. Vous pouvez désormais dériver une couleur à partir d\'une autre (éclaircir, assombrir, changer l\'opacité) directement en CSS.'],
                    ],
                    [
                        'type' => 'code_text',
                        'data' => [
                            'language' => 'css',
                            'code' => '.button:hover {
  background: oklch(from var(--brand) calc(l + 0.1) c h);
}',
                            'caption' => 'Génération automatique des variantes au survol.',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => '5. Formulaires modernes'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Styliser les éléments de formulaire natifs a toujours été un défi, poussant souvent à réinventer la roue au détriment de l\'accessibilité. C\'est terminé.'],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h4', 'content' => 'Field-sizing et Select'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => '`field-sizing: content` permet à un textarea de s\'adapter automatiquement à son contenu. De même, les nouveaux pseudos-éléments pour `<select>` permettent enfin un styling complet sans casser l\'expérience native.'],
                    ],
                    [
                        'type' => 'code_text',
                        'data' => [
                            'language' => 'css',
                            'code' => 'textarea {
  field-sizing: content;
}

::picker(select) {
  appearance: base-select;
  background: var(--surface);
  box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}',
                            'caption' => 'Composants de formulaire natifs, adaptatifs et stylés.',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'data' => ['level' => 'h3', 'content' => 'Un nouveau paradigme'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Ce CSS Wrapped 2025 marque un tournant. Pendant longtemps, nous avons utilisé JavaScript pour compenser les lacunes du CSS. Aujourd\'hui, la tendance s\'inverse :'],
                    ],
                    [
                        'type' => 'list',
                        'data' => [
                            'style' => 'unordered',
                            'items' => [
                                'ScrollTrigger → Remplacé par scroll-timeline.',
                                'Framer Motion (page transitions) → Remplacé par View Transitions API.',
                                'Popper.js → Remplacé par Anchor Positioning.',
                                'Autosize.js → Remplacé par field-sizing.'
                            ]
                        ],
                    ],
                    [
                        'type' => 'quote',
                        'data' => ['content' => 'Le CSS natif est devenu trop puissant et trop élégant pour être systématiquement abstrait ou ignoré.', 'author' => null],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Si Tailwind et les frameworks utilitaires restent excellents pour la vélocité, le CSS moderne "Ingénieur" s\'impose pour les expériences créatives et performantes. Il est temps d\'auditer vos dépendances JS et de laisser le navigateur faire ce qu\'il fait de mieux : gérer le rendu visuel. 🎨'],
                    ],
                    [
                        'type' => 'paragraph',
                        'data' => ['content' => 'Le web natif n\'a jamais été aussi puissant. Profitez-en.'],
                    ],
                    [
                        'type' => 'sources',
                        'data' => [
                            'items' => [
                                [
                                    'title' => 'Chrome Developers - CSS Wrapped 2025',
                                    'url' => 'https://chrome.dev/css-wrapped-2025/',
                                    'description' => 'L\'analyse officielle des nouvelles capacités du moteur de rendu.',
                                ],
                                [
                                    'title' => 'MDN Web Docs - View Transitions API',
                                    'url' => 'https://developer.mozilla.org/en-US/docs/Web/API/View_Transitions_API',
                                    'description' => 'Documentation technique standardisée pour les transitions de page natives.',
                                ],
                                [
                                    'title' => 'Scroll-driven Animations (Bramus Van Damme)',
                                    'url' => 'https://scroll-driven-animations.style/',
                                    'description' => 'Le site de référence pour maîtriser les animations liées au scroll sans JS.',
                                ],
                                [
                                    'title' => 'W3C CSS Anchor Positioning',
                                    'url' => 'https://www.w3.org/TR/css-anchor-position-1/',
                                    'description' => 'La spécification officielle du W3C pour le positionnement d\'éléments flottants.',
                                ],
                            ],
                        ],
                    ],
                ],
                'cover_image' => null,
                'category' => 'news',
                'tags' => ['CSS', 'Frontend', 'Performance', 'Web Design'],
                'reading_time' => 10,
                'is_featured' => true,
                'is_published' => true,
                'order' => 4,
                'published_at' => now()->subDays(2),
            ]

        ];

        foreach ($articles as $articleData) {
            Article::create($articleData);
        }
    }
}
