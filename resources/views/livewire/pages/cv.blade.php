<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#0d1117">

        <title>CV_Renaud_Van_Meerbergen_GodMode</title>

        <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/cv.css'])
    </head>
    <body class="bg-darkbg text-dim font-mono min-h-screen p-4 md:p-12 lg:pt-20 selection:bg-matrix selection:text-black">

        <div class="max-w-4xl mx-auto relative z-10">

            <!-- HEADER -->
            <header class="text-center border-b-2 border-matrix pb-8 mb-8">
                <h1 class="text-3xl md:text-5xl text-matrix font-bold uppercase tracking-tighter drop-shadow-[0_0_5px_rgba(0,255,65,0.8)]">
                    Renaud <span class="bg-error text-white text-sm md:text-lg px-2 py-1 transform -rotate-2 inline-block shadow-lg mx-2">"GIT BLAME"</span> Van Meerbergen
                </h1>
                <h2 class="text-white mt-4 text-sm md:text-xl font-light tracking-wide">
                    👑 DOMPTEUR DE LARAVEL & GARDIEN DU "IT WORKS ON MY MACHINE"
                </h2>

                <div class="flex flex-wrap justify-center gap-4 mt-6 text-xs md:text-sm text-gray-400">
                    <div class="flex items-center gap-2 hover:text-matrix transition-colors">
                        <span>📍</span> 127.0.0.1 (Neupré, Liège)
                    </div>
                    <div class="flex items-center gap-2 hover:text-error transition-colors">
                        <span>🚑</span> +32 (0)470 59 60 65
                    </div>
                    <a href="mailto:renaud.vanmeerbergen@gmail.com" class="flex items-center gap-2 hover:text-white transition-colors border-b border-dotted border-gray-600 hover:border-white">
                        <span>📧</span> renaud.vanmeerbergen@gmail.com
                    </a>
                    <a href="https://github.com/VanMeerbergenRenaud" target="_blank" class="flex items-center gap-2 hover:text-matrix transition-colors border-b border-dotted border-gray-600 hover:border-matrix">
                        <span>🐙</span> github.com/VanMeerbergenRenaud
                    </a>
                </div>
            </header>

            <!-- INTRO -->
            <section class="mb-12">
                <h3 class="text-matrix text-xl font-bold border-l-4 border-matrix pl-4 mb-4 bg-gradient-to-r from-[rgba(0,255,65,0.1)] to-transparent py-2">
                    // 💬 Console.log("WHOAMI");
                </h3>
                <div class="bg-terminal p-6 rounded-lg border border-gray-800 shadow-xl hover:border-gray-600 transition-colors duration-300">
                    <p class="mb-4 font-bold text-white">
                        <span class="text-purple-400">const</span> <span class="text-yellow-300">profil</span> = {
                        lvl: <span class="text-orange-400">24</span>,
                        classe: <span class="text-green-300">"Fullstack Warlock"</span>,
                        caffeine: <span class="text-orange-400">Infinity</span>
                        };
                    </p>
                    <p class="leading-relaxed">
                        Je parle couramment le PHP, le SQL et le Sarcasme. Ma vie est un cycle infini de <code class="bg-gray-800 text-red-400 px-1 rounded">dd($variable)</code> et de refactoring à 3h du matin. Je ne dis pas que je suis le sauveur de votre codebase, mais je n'ai jamais vu Batman et moi dans la même pièce. Mon super-pouvoir ? Transformer des tickets Jira incompréhensibles en features qui marchent (la plupart du temps).
                    </p>
                </div>
            </section>

            <!-- SKILLS -->
            <section class="mb-12">
                <h3 class="text-matrix text-xl font-bold border-l-4 border-matrix pl-4 mb-4 bg-gradient-to-r from-[rgba(0,255,65,0.1)] to-transparent py-2">
                    // ⚔️ ARSENAL & SKILLS
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-terminal p-6 rounded-lg border border-gray-800">

                    <!-- Col 1 -->
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-white font-bold">PHP 8.2 (Chad Edition)</span>
                                <span class="text-matrix">99%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2.5 border border-gray-600">
                                <div class="bg-matrix h-2.5 rounded-full shadow-[0_0_10px_#00ff41]" style="width: 99%"></div>
                            </div>
                            <p class="text-xs mt-1 text-gray-500 italic">Je tape mes variables plus fort que tes opinions.</p>
                        </div>

                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-white font-bold">Laravel & Livewire</span>
                                <span class="text-matrix">95%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2.5 border border-gray-600">
                                <div class="bg-matrix h-2.5 rounded-full shadow-[0_0_10px_#00ff41]" style="width: 95%"></div>
                            </div>
                            <p class="text-xs mt-1 text-gray-500 italic">Artisan est mon meilleur ami (après le café).</p>
                        </div>

                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-white font-bold">SQL (Drop Table Expert)</span>
                                <span class="text-matrix">90%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2.5 border border-gray-600">
                                <div class="bg-matrix h-2.5 rounded-full shadow-[0_0_10px_#00ff41]" style="width: 90%"></div>
                            </div>
                            <p class="text-xs mt-1 text-gray-500 italic">Je fais des LEFT JOIN les yeux fermés.</p>
                        </div>
                    </div>

                    <!-- Col 2 -->
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-white font-bold">CSS / Tailwind</span>
                                <span class="text-mana">85%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2.5 border border-gray-600">
                                <div class="bg-mana h-2.5 rounded-full shadow-[0_0_10px_#00b7ff]" style="width: 85%"></div>
                            </div>
                            <p class="text-xs mt-1 text-gray-500 italic">Centrer une div est ma seule faiblesse.</p>
                        </div>

                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-white font-bold">JS / Alpine</span>
                                <span class="text-mana">75%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2.5 border border-gray-600">
                                <div class="bg-mana h-2.5 rounded-full shadow-[0_0_10px_#00b7ff]" style="width: 75%"></div>
                            </div>
                            <p class="text-xs mt-1 text-gray-500 italic">Utilisé uniquement quand PHP me dit non.</p>
                        </div>

                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-white font-bold">Docker / Git</span>
                                <span class="text-yellow-500">88%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2.5 border border-gray-600">
                                <div class="bg-yellow-500 h-2.5 rounded-full shadow-[0_0_10px_#eab308]" style="width: 88%"></div>
                            </div>
                            <p class="text-xs mt-1 text-gray-500 italic">`git push --force` est mon mode de vie.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- EXP -->
            <section class="mb-12">
                <h3 class="text-matrix text-xl font-bold border-l-4 border-matrix pl-4 mb-4 bg-gradient-to-r from-[rgba(0,255,65,0.1)] to-transparent py-2">
                    // 🗺️ QUÊTES ACCOMPLIES (XP)
                </h3>

                <div class="bg-terminal p-6 rounded-lg border border-gray-800 space-y-8">

                    <!-- Job 1 -->
                    <div class="relative pl-4 border-l-2 border-dashed border-gray-700">
                        <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-matrix border-4 border-darkbg"></div>
                        <div class="flex flex-col md:flex-row md:justify-between md:items-baseline mb-2">
                            <h4 class="text-white text-lg font-bold">🏺 NÉCROMANCIEN DU LEGACY (STAGE)</h4>
                            <span class="text-matrix font-bold">@SPADE</span>
                        </div>
                        <p class="text-xs text-gray-500 mb-4 font-mono">SEPT. 2024 – DÉC. 2024 | Mission : Archéologie logicielle</p>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <span class="text-matrix mr-2">></span>
                                <span><strong>Exorcisme de Code :</strong> J'ai migré des sites qui tournaient sur du PHP 5.6 (une époque où les dinosaures régnaient). J'ai vu du code que l'homme n'était pas censé voir.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-matrix mr-2">></span>
                                <span><strong>Gutenberg Master :</strong> J'ai créé des blocs natifs WordPress. Le client voulait un bouton qui clignote ? J'ai dit non, mais j'ai fait un truc propre à la place.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-matrix mr-2">></span>
                                <span><strong>Résultat :</strong> 0% de perte de données, 100% de cheveux gris gagnés.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Job 2 -->
                    <div class="relative pl-4 border-l-2 border-dashed border-gray-700">
                        <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-mana border-4 border-darkbg"></div>
                        <div class="flex flex-col md:flex-row md:justify-between md:items-baseline mb-2">
                            <h4 class="text-white text-lg font-bold">🐺 LONE WOLF / GOD MODE (PROJET)</h4>
                            <span class="text-mana font-bold">@LUDIFICA</span>
                        </div>
                        <p class="text-xs text-gray-500 mb-4 font-mono">ÉTÉ 2024 | Mission : Faire le boulot de 4 devs</p>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <span class="text-mana mr-2">></span>
                                <span><strong>Architecture "Paranoïaque" :</strong> J'ai codé ce SaaS sans aucune dépendance inutile. J'ai des problèmes de confiance envers le code des autres.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-mana mr-2">></span>
                                <span><strong>Filament PHP :</strong> J'ai généré un Dashboard Admin tellement fluide que le client a cru que c'était de la magie noire.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-mana mr-2">></span>
                                <span><strong>Fullstack Hero :</strong> J'étais le Project Manager, le Dev Backend, le Dev Frontend, le QA Tester et le stagiaire café en même temps.</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </section>

            <!-- EDUCATION -->
            <section class="mb-12">
                <h3 class="text-matrix text-xl font-bold border-l-4 border-matrix pl-4 mb-4 bg-gradient-to-r from-[rgba(0,255,65,0.1)] to-transparent py-2">
                    // 🎓 LOADING EDUCATION...
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-terminal p-4 rounded border border-gray-800">
                        <div class="text-white font-bold mb-1">📜 BACHELIER (99% Loaded)</div>
                        <div class="text-matrix text-sm mb-2">HEPL - INPRES | 2021 – 2025</div>
                        <p class="text-sm text-gray-400">
                            J'ai appris les Design Patterns pour pouvoir les ignorer sciemment dans mes projets persos. <br>
                            <span class="italic text-xs text-gray-600">Thèse : "Pourquoi `composer update` est plus effrayant qu'un film d'horreur."</span>
                        </p>
                    </div>

                    <div class="bg-terminal p-4 rounded border border-gray-800 opacity-75">
                        <div class="text-white font-bold mb-1">👷 INGÉNIEUR (Error 404)</div>
                        <div class="text-error text-sm mb-2">HELMO GRAMME | 2019 – 2021</div>
                        <p class="text-sm text-gray-400">
                            J'ai fait deux ans d'ingénierie pour réaliser que je préférais parler aux ordinateurs qu'aux humains. J'ai gardé la rigueur scientifique, j'ai jeté la thermodynamique par la fenêtre.
                        </p>
                    </div>
                </div>
            </section>

            <!-- LOOT -->
            <section>
                <h3 class="text-matrix text-xl font-bold border-l-4 border-matrix pl-4 mb-4 bg-gradient-to-r from-[rgba(0,255,65,0.1)] to-transparent py-2">
                    // 💎 LOOT BOX & EXTRAS
                </h3>
                <div class="bg-terminal p-6 rounded-lg border border-gray-800 text-sm">
                    <ul class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                        <li class="bg-gray-900 p-3 rounded border border-gray-700 hover:border-matrix transition-colors">
                            <div class="text-white font-bold mb-1">🇫🇷 Langues</div>
                            Français (Natif) <br> Anglais (Je lis la doc sans pleurer)
                        </li>
                        <li class="bg-gray-900 p-3 rounded border border-gray-700 hover:border-matrix transition-colors">
                            <div class="text-white font-bold mb-1">🏎️ Monture</div>
                            Permis B + Voiture <br> (Je viens réparer le serveur physiquement)
                        </li>
                        <li class="bg-gray-900 p-3 rounded border border-gray-700 hover:border-matrix transition-colors">
                            <div class="text-white font-bold mb-1">🕹️ Hobbies</div>
                            Fermer les 84 onglets de mon navigateur après un bug.
                        </li>
                    </ul>
                </div>
            </section>

            <!-- FOOTER -->
            <footer class="mt-16 pt-8 border-t border-gray-800 text-center text-xs text-gray-600 font-mono">
                <p class="mb-2">root@cv-renaud:~# echo "HIRE ME OR I WILL DELETE PRODUCTION" <span class="inline-block w-2 h-4 bg-matrix align-middle blink"></span></p>
                <p>Generated with pure HTML & TailwindCSS. No WordPress plugins were harmed.</p>
            </footer>

        </div>
    </body>
</html>
