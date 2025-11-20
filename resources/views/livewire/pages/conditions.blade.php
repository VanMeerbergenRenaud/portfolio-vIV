<div>
    <section class="px-6 lg:px-12 pt-30 pb-25 lg:pt-52 flex flex-col gap-10 lg:gap-15 lg:gap-x-2 lg:grid lg:grid-cols-[25%_1fr]">

        {{-- Header section --}}
        <div class="flex flex-col gap-1">
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
                Conditions générales d'utilisation.
            </x-font.title-lg>

            <x-font.text class="text-gray-medium">
                Bienvenue sur mon portfolio. En accédant et en utilisant ce site, vous acceptez les présentes conditions générales d'utilisation. Veuillez les lire attentivement avant de naviguer.
            </x-font.text>

            {{-- Sommaire --}}
            <div class="mt-4 flex flex-col gap-5 py-2.5">
                <x-font.text class="font-semibold text-dark-primary" :isTitle="true" level="3">
                    Sommaire
                </x-font.text>
                <ul class="pl-6 list-decimal text-gray-dark flex flex-col gap-2">
                    <li><a href="#section-1" class="hover:text-red hover:underline transition-colors font-medium">Mentions légales</a></li>
                    <li><a href="#section-2" class="hover:text-red hover:underline transition-colors font-medium">Objet du site</a></li>
                    <li><a href="#section-3" class="hover:text-red hover:underline transition-colors font-medium">Accès au site</a></li>
                    <li><a href="#section-4" class="hover:text-red hover:underline transition-colors font-medium">Propriété intellectuelle</a></li>
                    <li><a href="#section-5" class="hover:text-red hover:underline transition-colors font-medium">Limitation de responsabilité</a></li>
                    <li><a href="#section-6" class="hover:text-red hover:underline transition-colors font-medium">Liens hypertextes</a></li>
                    <li><a href="#section-7" class="hover:text-red hover:underline transition-colors font-medium">Modification des CGU</a></li>
                    <li><a href="#section-8" class="hover:text-red hover:underline transition-colors font-medium">Droit applicable et juridiction</a></li>
                </ul>
            </div>

            {{-- Part 1 --}}
            <div id="section-1" class="mt-4 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    1. Mentions légales
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    Le site <span class="text-dark-primary font-semibold">Renaud Vmb</span> est édité par :
                </x-font.text>

                <div class="flex flex-col gap-3 pl-4">
                    <x-font.text class="text-gray-medium">
                        <span class="font-semibold text-dark-primary">Éditeur :</span> Renaud Van Meerbergen
                    </x-font.text>
                    <x-font.text class="text-gray-medium">
                        <span class="font-semibold text-dark-primary">Adresse :</span> Belgique
                    </x-font.text>
                    <x-font.text class="text-gray-medium">
                        <span class="font-semibold text-dark-primary">Email :</span> <a href="mailto:renaud.vanmeerbergen@gmail.com" class="text-red hover:underline font-medium">renaud.vanmeerbergen@gmail.com</a>
                    </x-font.text>
                    <x-font.text class="text-gray-medium">
                        <span class="font-semibold text-dark-primary">Site web :</span> <a href="https://renaud-vmb.com" target="_blank" rel="noopener noreferrer" class="text-red hover:underline font-medium">https://renaud-vmb.com</a>
                    </x-font.text>
                </div>

                <x-font.text class="text-gray-medium mt-2">
                    <span class="font-semibold text-dark-primary">Hébergement :</span>
                </x-font.text>

                <div class="flex flex-col gap-3 pl-4">
                    <x-font.text class="text-gray-medium">
                        <span class="font-semibold text-dark-primary">Hébergeur :</span> Laravel Cloud
                    </x-font.text>
                    <x-font.text class="text-gray-medium">
                        <span class="font-semibold text-dark-primary">Société :</span> Laravel LLC
                    </x-font.text>
                    <x-font.text class="text-gray-medium">
                        <span class="font-semibold text-dark-primary">Adresse :</span> 2810 N Church St, Ste 65345, Wilmington, DE 19802-4447, USA
                    </x-font.text>
                    <x-font.text class="text-gray-medium">
                        <span class="font-semibold text-dark-primary">Site web :</span> <a href="https://cloud.laravel.com" target="_blank" rel="noopener noreferrer" class="text-red hover:underline font-medium">cloud.laravel.com</a>
                    </x-font.text>
                </div>
            </div>

            {{-- Part 2 --}}
            <div id="section-2" class="mt-2 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    2. Objet du site
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    Ce site constitue mon portfolio professionnel personnel. Il a pour objectif de présenter :
                </x-font.text>

                <ul class="pl-6 list-disc text-gray-dark flex flex-col gap-2">
                    <li>
                        Mon parcours professionnel et mes compétences
                    </li>
                    <li>
                        Mes projets et réalisations
                    </li>
                    <li>
                        Mes services et expertises
                    </li>
                    <li>
                        Des articles et contenus informatifs liés à mon domaine d'activité
                    </li>
                </ul>

                <x-font.text class="text-gray-medium">
                    Les informations fournies sur ce site sont données à titre informatif et peuvent être modifiées sans préavis.
                </x-font.text>
            </div>

            {{-- Part 3 --}}
            <div id="section-3" class="mt-2 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    3. Accès au site
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    L'accès au site est gratuit et libre pour tout utilisateur disposant d'une connexion Internet. Tous les frais supportés par l'utilisateur pour accéder au service (matériel informatique, logiciels, connexion Internet, etc.) sont à sa charge.
                </x-font.text>

                <x-font.text class="text-gray-medium">
                    Je mets tout en œuvre pour offrir aux utilisateurs des informations et/ou des outils disponibles et vérifiés. Toutefois, je ne peux garantir :
                </x-font.text>

                <ul class="pl-6 list-disc text-gray-dark flex flex-col gap-2">
                    <li>
                        L'absence d'interruption temporaire du site pour des opérations de maintenance ou de mise à jour
                    </li>
                    <li>
                        L'absence totale d'erreurs techniques
                    </li>
                    <li>
                        La disponibilité permanente du site
                    </li>
                </ul>

                <x-font.text class="text-gray-medium">
                    Je me réserve le droit de suspendre, d'interrompre ou de limiter l'accès à tout ou partie du site, notamment pour des raisons de maintenance, sans préavis ni indemnité.
                </x-font.text>
            </div>

            {{-- Part 4 --}}
            <div id="section-4" class="mt-2 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    4. Propriété intellectuelle
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    L'ensemble du contenu de ce site (textes, images, vidéos, graphismes, logos, icônes, code source, mise en page, etc.) est ma propriété exclusive ou celle de mes partenaires et est protégé par les lois belges et internationales relatives à la propriété intellectuelle.
                </x-font.text>

                <x-font.text class="text-gray-medium">
                    Toute reproduction, distribution, modification, adaptation, retransmission ou publication de ces différents éléments est strictement interdite sans mon accord écrit préalable.
                </x-font.text>

                <x-font.text class="text-gray-medium">
                    Exceptions autorisées :
                </x-font.text>

                <ul class="pl-6 list-disc text-gray-dark flex flex-col gap-2">
                    <li>
                        Consultation du site à des fins personnelles et non commerciales
                    </li>
                    <li>
                        Reproduction de citations courtes avec mention de la source et lien vers le site
                    </li>
                    <li>
                        Partage sur les réseaux sociaux via les boutons de partage prévus à cet effet
                    </li>
                </ul>

                <x-font.text class="text-gray-medium">
                    Pour toute autre utilisation, veuillez me contacter à <a href="mailto:renaud.vanmeerbergen@gmail.com" class="text-red hover:underline font-medium">renaud.vanmeerbergen@gmail.com</a>.
                </x-font.text>
            </div>

            {{-- Part 5 --}}
            <div id="section-5" class="mt-2 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    5. Limitation de responsabilité
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    Je m'efforce de fournir sur le site des informations aussi précises que possible. Toutefois, je ne pourrai être tenu responsable :
                </x-font.text>

                <ul class="pl-6 list-disc text-gray-dark flex flex-col gap-2">
                    <li>
                        Des erreurs, inexactitudes ou omissions portant sur des informations disponibles sur le site
                    </li>
                    <li>
                        De l'indisponibilité temporaire ou totale du site
                    </li>
                    <li>
                        Des dommages directs ou indirects résultant de l'accès au site ou de son utilisation
                    </li>
                    <li>
                        De l'utilisation non autorisée ou frauduleuse par un tiers du site
                    </li>
                    <li>
                        Des contenus présents sur les sites tiers vers lesquels le site pourrait rediriger
                    </li>
                </ul>

                <x-font.text class="text-gray-medium">
                    L'utilisateur est seul responsable de l'utilisation qu'il fait des contenus et informations présents sur le site.
                </x-font.text>

                <x-font.text class="text-gray-medium">
                    Je décline toute responsabilité en cas de virus informatique ou tout autre problème technique survenant lors de la consultation du site.
                </x-font.text>
            </div>

            {{-- Part 6 --}}
            <div id="section-6" class="mt-2 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    6. Liens hypertextes
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    <span class="font-semibold text-dark-primary">Liens sortants :</span>
                </x-font.text>

                <x-font.text class="text-gray-medium">
                    Le site peut contenir des liens vers des sites externes. Ces liens sont fournis à titre informatif uniquement. Je n'ai aucun contrôle sur le contenu de ces sites et ne peux être tenu responsable de leur contenu, de leur disponibilité ou de leur politique de confidentialité.
                </x-font.text>

                <x-font.text class="text-gray-medium mt-3">
                    <span class="font-semibold text-dark-primary">Liens entrants :</span>
                </x-font.text>

                <x-font.text class="text-gray-medium">
                    Vous pouvez créer un lien vers ce site sans demande préalable, à condition que :
                </x-font.text>

                <ul class="pl-6 list-disc text-gray-dark flex flex-col gap-2">
                    <li>
                        Le lien s'ouvre dans une nouvelle fenêtre
                    </li>
                    <li>
                        La source soit clairement indiquée
                    </li>
                    <li>
                        Le lien ne donne pas une image négative ou mensongère du site
                    </li>
                    <li>
                        Le site source ne contienne pas de contenu illégal, offensant ou inapproprié
                    </li>
                </ul>

                <x-font.text class="text-gray-medium">
                    Je me réserve le droit de demander le retrait d'un lien si celui-ci ne respecte pas ces conditions.
                </x-font.text>
            </div>

            {{-- Part 7 --}}
            <div id="section-7" class="mt-2 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    7. Modification des Conditions Générales d'Utilisation
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    Je me réserve le droit de modifier les présentes CGU à tout moment afin de les adapter aux évolutions du site, aux évolutions législatives ou jurisprudentielles.
                </x-font.text>

                <x-font.text class="text-gray-medium">
                    Les CGU applicables sont celles en vigueur à la date de votre visite sur le site. La date de dernière mise à jour est indiquée en haut de cette page.
                </x-font.text>

                <x-font.text class="text-gray-medium">
                    Il est donc conseillé de consulter régulièrement cette page pour prendre connaissance des éventuelles modifications.
                </x-font.text>
            </div>

            {{-- Part 8 --}}
            <div id="section-8" class="mt-2 flex flex-col gap-5">
                <x-font.text-xl class="font-semibold" :isTitle="true" level="4">
                    8. Droit applicable et juridiction compétente
                </x-font.text-xl>

                <x-font.text class="text-gray-medium">
                    Les présentes Conditions Générales d'Utilisation sont régies par le droit belge.
                </x-font.text>

                <x-font.text class="text-gray-medium">
                    En cas de litige et à défaut d'accord amiable, le litige sera porté devant les tribunaux belges compétents, conformément aux règles de droit commun.
                </x-font.text>

                <x-font.text class="text-gray-medium">
                    Pour toute question relative aux présentes CGU, vous pouvez me contacter à <a href="mailto:renaud.vanmeerbergen@gmail.com" class="text-red hover:underline font-medium">renaud.vanmeerbergen@gmail.com</a>.
                </x-font.text>
            </div>

            {{-- Contact final --}}
            <div class="mt-2 p-6 bg-red/5 border border-red/20 rounded-lg">
                <x-font.text class="flex flex-col gap-1 text-gray-dark">
                    <span class="font-semibold text-dark-primary">Une question sur ces conditions ?</span><br>
                    <span>N'hésitez pas à me contacter à <a href="mailto:renaud.vanmeerbergen@gmail.com" class="text-red hover:underline font-semibold">renaud.vanmeerbergen@gmail.com</a>. Je serai ravi de vous répondre et de clarifier tout point qui vous semble flou.</span>
                </x-font.text>
            </div>
        </div>
    </section>
</div>
