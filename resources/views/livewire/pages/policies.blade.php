<div>
    <section class="px-6 lg:px-12 pt-30 pb-25 lg:pt-52 flex flex-col gap-10 lg:gap-15 lg:gap-x-2 lg:grid lg:grid-cols-[25%_1fr]">

        {{-- Header section --}}
        <div class="flex flex-col gap-2">
            <div class="flex items-center gap-1.5">
                <span class="text-red" aria-hidden="true">|</span>

                <x-font.text>
                    20 novembre 2025
                </x-font.text>
            </div>
            <x-font.text-sm class="pl-3 text-gray-medium">
                Dernière mise à jour
            </x-font.text-sm>
        </div>

        {{-- Grid --}}
        <div class="flex flex-col gap-8 max-w-175">
            <x-font.title-lg :isTitle="true" level="2">
                Politique de confidentialité.
            </x-font.title-lg>

            <x-font.text class="text-gray-medium">
                Sur ce portfolio, votre vie privée est notre priorité. Cette politique explique de manière simple et transparente quelles données nous collectons et pourquoi, comment nous les utilisons et les protégeons.
            </x-font.text>

            {{-- Sommaire --}}
            <nav
                class="mt-4 flex flex-col gap-4 py-5 px-6 bg-linear-to-br from-red/5 via-red/3 to-transparent rounded-xl border border-red/10"
                aria-labelledby="toc-heading"
            >
                <div class="flex items-center gap-1.5">
                    <span class="text-red text-xs" aria-hidden="true">|</span>
                    <x-font.text-md class="font-medium text-dark-primary">
                        Sommaire
                    </x-font.text-md>
                </div>

                <ol class="px-1 flex flex-col gap-2.5" role="list">
                    <li class="flex items-start gap-2">
                        <span class="text-gray-medium text-xs mt-0.5 min-w-4" aria-hidden="true">
                            01
                        </span>
                        <a href="#section-1" class="flex-1 hover:text-red font-medium rounded transition-colors text-sm text-gray-dark">
                            Responsable du traitement
                        </a>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-gray-medium text-xs mt-0.5 min-w-4" aria-hidden="true">
                            02
                        </span>
                        <a href="#section-2" class="flex-1 hover:text-red font-medium rounded transition-colors text-sm text-gray-dark">
                            Les données que nous collectons
                        </a>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-gray-medium text-xs mt-0.5 min-w-4" aria-hidden="true">
                            03
                        </span>
                        <a href="#section-3" class="flex-1 hover:text-red font-medium rounded transition-colors text-sm text-gray-dark">
                            Pourquoi nous collectons vos données
                        </a>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-gray-medium text-xs mt-0.5 min-w-4" aria-hidden="true">
                            04
                        </span>
                        <a href="#section-4" class="flex-1 hover:text-red font-medium rounded transition-colors text-sm text-gray-dark">
                            Partage et services tiers
                        </a>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-gray-medium text-xs mt-0.5 min-w-4" aria-hidden="true">
                            05
                        </span>
                        <a href="#section-5" class="flex-1 hover:text-red font-medium rounded transition-colors text-sm text-gray-dark">
                            Durée de conservation
                        </a>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-gray-medium text-xs mt-0.5 min-w-4" aria-hidden="true">
                            06
                        </span>
                        <a href="#section-6" class="flex-1 hover:text-red font-medium rounded transition-colors text-sm text-gray-dark">
                            Vos droits sur vos données
                        </a>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-gray-medium text-xs mt-0.5 min-w-4" aria-hidden="true">
                            07
                        </span>
                        <a href="#section-7" class="flex-1 hover:text-red font-medium rounded transition-colors text-sm text-gray-dark">
                            Notre politique sur les cookies
                        </a>
                    </li>
                </ol>
            </nav>

            {{-- Part 1 --}}
            <div id="section-1" class="mt-4 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    1. Responsable du traitement des données
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    Le responsable du traitement de vos données est <span class="text-dark-primary font-semibold">Renaud Van Meerbergen</span>. Pour toute question, vous pouvez me contacter à <a href="mailto:renaud.vanmeerbergen@gmail.com" class="text-red hover:underline font-medium">renaud.vanmeerbergen@gmail.com</a>.
                </x-font.text>
            </div>

            {{-- Part 2 --}}
            <div id="section-2" class="mt-2 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    2. Les données que nous collectons
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    Nous collectons uniquement les données dont nous avons besoin pour que ce portfolio fonctionne correctement :
                </x-font.text>

                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-2">
                        <x-font.text class="font-semibold text-dark-primary">
                            Données de navigation :
                        </x-font.text>
                        <ul class="pl-6 list-disc text-gray-medium font-medium flex flex-col gap-2">
                            <li>
                                Adresse IP et données techniques de connexion (navigateur, système d'exploitation)
                            </li>
                            <li>
                                Pages visitées et durée de navigation
                            </li>
                        </ul>
                    </div>

                    <div class="flex flex-col gap-2">
                        <x-font.text class="font-semibold text-dark-primary">
                            Données de contact (si vous me contactez) :
                        </x-font.text>
                        <ul class="pl-6 list-disc text-gray-medium font-medium flex flex-col gap-2">
                            <li>
                                Nom, prénom
                            </li>
                            <li>
                                Adresse e-mail
                            </li>
                            <li>
                                Message et contenu de votre demande
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Part 3 --}}
            <div id="section-3" class="mt-2 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    3. Pourquoi nous collectons vos données
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    Notre engagement est simple : vos données servent uniquement à vous rendre service. Nous les utilisons pour :
                </x-font.text>

                <ul class="pl-6 list-disc text-gray-medium font-medium flex flex-col gap-2">
                    <li>
                        Faire fonctionner le site web et assurer son bon fonctionnement technique
                    </li>
                    <li>
                        Répondre à vos messages et demandes de contact
                    </li>
                    <li>
                        Améliorer l'expérience utilisateur et les performances du site
                    </li>
                    <li>
                        Protéger le site contre les abus et activités frauduleuses
                    </li>
                </ul>

                <x-font.text class=" text-dark-primary">
                    Nous ne vendrons, ne louerons et ne partagerons jamais vos données personnelles à des fins commerciales.
                </x-font.text>
            </div>

            {{-- Part 4 --}}
            <div id="section-4" class="mt-2 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    4. Partage des données et services tiers
                </x-font.text-xl>

                <div class="flex flex-col gap-2">
                    <x-font.text class="text-gray-medium">
                        Nous faisons appel à des services tiers reconnus pour leur fiabilité et leur sécurité afin de faire fonctionner ce portfolio :
                    </x-font.text>

                    <x-font.text class="text-gray-medium">
                        <span class="font-semibold text-dark-primary">Amazon Web Services (AWS) :</span> Pour l'hébergement du site et le stockage sécurisé des fichiers.
                    </x-font.text>

                    <x-font.text class="text-gray-medium">
                        Ces services sont conformes au RGPD et garantissent la protection de vos données.
                    </x-font.text>
                </div>
            </div>

            {{-- Part 5 --}}
            <div id="section-5" class="mt-2 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    5. Durée de conservation
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    Nous conservons vos données pour la durée strictement nécessaire aux finalités pour lesquelles elles ont été collectées :
                </x-font.text>

                <ul class="pl-6 list-disc text-gray-medium font-medium flex flex-col gap-2">
                    <li>
                        <span class="font-semibold text-dark-primary">Données de navigation :</span> Conservées pendant 13 mois maximum
                    </li>
                    <li>
                        <span class="font-semibold text-dark-primary">Données de contact :</span> Conservées pendant 3 ans à compter de notre dernier échange
                    </li>
                </ul>

                <x-font.text class="text-gray-medium">
                    Passé ce délai, vos données sont automatiquement supprimées de nos serveurs.
                </x-font.text>
            </div>

            {{-- Part 6 --}}
            <div id="section-6" class="mt-2 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    6. Vos droits sur vos données
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    Vous avez le contrôle total sur vos données. Conformément au RGPD (Règlement Général sur la Protection des Données), vous pouvez à tout moment :
                </x-font.text>

                <ul class="pl-6 list-disc text-gray-medium font-medium flex flex-col gap-2">
                    <li>
                        <span class="font-semibold text-dark-primary">Droit d'accès :</span> Demander une copie de toutes les données que nous détenons sur vous
                    </li>
                    <li>
                        <span class="font-semibold text-dark-primary">Droit de rectification :</span> Corriger vos informations si elles sont inexactes
                    </li>
                    <li>
                        <span class="font-semibold text-dark-primary">Droit à l'effacement :</span> Demander la suppression complète de vos données
                    </li>
                    <li>
                        <span class="font-semibold text-dark-primary">Droit d'opposition :</span> Vous opposer au traitement de vos données
                    </li>
                    <li>
                        <span class="font-semibold text-dark-primary">Droit à la portabilité :</span> Recevoir vos données dans un format structuré
                    </li>
                    <li>
                        <span class="font-semibold text-dark-primary">Droit de limitation :</span> Limiter le traitement de vos données dans certaines circonstances
                    </li>
                </ul>

                <x-font.text class="text-gray-medium">
                    Pour exercer ces droits, contactez-moi simplement par e-mail à <a href="mailto:renaud.vanmeerbergen@gmail.com" class="text-red hover:underline font-medium">renaud.vanmeerbergen@gmail.com</a>. Je m'engage à vous répondre dans un délai d'un mois.
                </x-font.text>

                <x-font.text class="text-gray-medium">
                    Vous avez également le droit d'introduire une réclamation auprès de l'Autorité de Protection des Données (APD) en Belgique si vous estimez que vos droits ne sont pas respectés : <a href="https://www.autoriteprotectiondonnees.be" target="_blank" rel="noopener noreferrer" class="text-red hover:underline font-medium">www.autoriteprotectiondonnees.be</a>
                </x-font.text>
            </div>

            {{-- Part 7 --}}
            <div id="section-7" class="mt-2 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    7. Notre politique sur les cookies
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    Nous n'utilisons aucun cookie de suivi, de publicité ou d'analyse. Le seul cookie utilisé est un cookie de session, indispensable pour maintenir la connexion et assurer le bon fonctionnement du site pendant votre visite.
                </x-font.text>

                <x-font.text class="text-gray-medium">
                    Votre navigation sur ce portfolio est et restera privée.
                </x-font.text>
            </div>

            {{-- Contact final --}}
            <div class="mt-2 p-6 bg-red/5 border border-red/20 rounded-lg">
                <x-font.text class="flex flex-col gap-1 text-gray-dark">
                    <span class="font-semibold text-dark-primary">Des questions sur cette politique ?</span><br>
                    <span>N'hésitez pas à me contacter à <a href="mailto:renaud.vanmeerbergen@gmail.com" class="text-red hover:underline font-semibold">renaud.vanmeerbergen@gmail.com</a>. Je serai ravi de vous répondre et de clarifier tout point qui vous semble flou.</span>
                </x-font.text>
            </div>
        </div>
    </section>
</div>
