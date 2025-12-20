<div>
    <section class="px-6 lg:px-10 py-12 pt-30 lg:pt-40 max-w-[1200px] mx-auto">
        <h2 class="sr-only">
            Rétrospective Laravel 2025
        </h2>

        {{-- Header --}}
        <div class="flex flex-wrap items-end justify-between gap-4">

            <div class="flex flex-col gap-2 lg:gap-6">
                {{-- Laravel Wrapped logo --}}
                <a href="{{ route('home') }}" aria-label="Retour à l'accueil" wire:navigate>
                    <x-svg.wrapped.lw-logo />
                </a>

                {{-- Subtitle --}}
                <x-font.text-sm class="flex items-center gap-1.5">
                    <span>Ma rétrospective Laravel</span>
                    <span class="text-red" aria-hidden="true">|</span>
                    <span class="text-gray-medium">Année 2025</span>
                </x-font.text-sm>
            </div>

            {{-- Visit --}}
            <x-link.secondary
                link="https://wrapped.laravel.com/wrapped"
                :navigate="false"
                aria-label="Voir le site Laravel Wrapped"
                target="_blank"
                rel="noopener noreferrer"
                class="lg:mb-1"
            >
                Voir le site officiel
            </x-link.secondary>
        </div>

        {{-- Empty space --}}
        <div class="my-8 lg:my-12"></div>

        {{-- Stats --}}
        <div class="relative flex flex-col items-start gap-4">

            {{-- Title --}}
            <x-font.text-3xl class="my-6 md:mb-12 pr-16 max-w-160 text-4xl">
                Mesdames et messieurs,<br>
                Découvrez mon Laravel Wrapped<br>
                de l'année 2025 !
            </x-font.text-3xl>

            {{-- Logo --}}
            <div class="pointer-events-none absolute top-4 -right-4 lg:top-18 lg:-right-6 z-10 rotate-12" aria-hidden="true">
                <x-svg.wrapped.circular-logo class="h-32 w-32 lg:h-48 lg:w-48" />
            </div>

            {{-- Content --}}
            <div class="columns-1 md:columns-2 lg:columns-3 gap-x-4 lg:gap-x-6 w-full" role="list" aria-label="Cartes de statistiques">

                {{-- Card 1 --}}
                <x-wrapped.card-white
                    title="Série de déploiements"
                    value="11"
                    description="11 jours consécutifs de déploiements sur le Cloud. Une vraie machine à shipper."
                    role="listitem"
                    aria-label="Statistique: 11 jours consécutifs de déploiements"
                >
                    <x-slot:icon>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="h-6 w-6 shrink-0 text-neutral-500" aria-hidden="true">
                            <path d="M3.75 12.75L8.75 2.75H18L15.25 8.25H21.25L6.75 21.25L8.89706 12.75H3.75Z" stroke="#737373" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </x-slot:icon>
                </x-wrapped.card-white>

                {{-- Card 2 --}}
                <x-wrapped.card-white
                    title="Déploiements Cloud"
                    value="263"
                    description="L'app « family-nest » m'a bien occupé avec 203 déploiements à elle seule."
                    role="listitem"
                    aria-label="Statistique: 263 déploiements Cloud"
                >
                    <x-slot:icon>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 text-neutral-500" aria-hidden="true">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23 15.6689C23 15.6681 22.999 15.6677 22.9984 15.6682L15.9603 22.7071C15.7728 22.8946 15.5184 23 15.2532 23H2C1.44772 23 1 22.5523 1 22V8.74752C1 8.48232 1.10534 8.22798 1.29286 8.04045L8.0397 1.29293C8.22724 1.10537 8.48161 1 8.74684 1H22C22.5523 1 23 1.44772 23 2V15.6689ZM9.06637 5.40044C8.66112 5.40044 8.3326 5.72896 8.3326 6.13421C8.3326 6.53947 8.66112 6.86799 9.06637 6.86799H16.1326C16.6849 6.86799 17.1326 7.3157 17.1326 7.86799V14.9352C17.1326 15.3404 17.4611 15.6689 17.8663 15.6689C18.2715 15.6689 18.6 15.3404 18.6 14.9352V6.40044C18.6 5.84815 18.1523 5.40044 17.6 5.40044H9.06637ZM8.3326 3.19912C8.3326 3.60437 8.66112 3.93289 9.06637 3.93289H19.0652C19.6175 3.93289 20.0652 4.38061 20.0652 4.93289V14.933C20.0652 15.3382 20.3937 15.6667 20.7989 15.6667C21.2041 15.6667 21.5326 15.3382 21.5326 14.933V3.46535C21.5326 2.91306 21.0849 2.46535 20.5326 2.46535H9.06637C8.66112 2.46535 8.3326 2.79387 8.3326 3.19912ZM9.3326 8.33333C8.78032 8.33333 8.3326 8.78105 8.3326 9.33333V14.6667C8.3326 15.219 8.78032 15.6667 9.3326 15.6667H14.6652C15.2175 15.6667 15.6652 15.219 15.6652 14.6667V9.33333C15.6652 8.78105 15.2175 8.33333 14.6652 8.33333H9.3326Z" fill="#737373"></path>
                        </svg>
                    </x-slot:icon>
                </x-wrapped.card-white>

                {{-- Card 3 --}}
                <x-wrapped.card-boost
                    title="Construit avec Laravel Boost"
                    description="Premier déploiement le 20 mars 2025 — les débuts, les grands rêves. Rappelle-toi, chaque commit te rapproche de cette Lambo. Continue, la route est grande ouverte."
                    role="listitem"
                    aria-label="Carte promotionnelle Laravel Boost"
                />

                {{-- Card 4 --}}
                <x-wrapped.card-white
                    title="Déploiements nocturnes"
                    value="10"
                    description="10 déploiements sur le Cloud entre minuit et 4h du matin. Le ninja du code frappe la nuit."
                    role="listitem"
                    aria-label="Statistique: 10 déploiements nocturnes"
                >
                    <x-slot:icon>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 text-neutral-500" aria-hidden="true">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8644 3.5752C6.70688 4.13028 3.5 7.69064 3.5 12C3.5 16.6944 7.30558 20.5 12 20.5C16.3094 20.5 19.8697 17.2931 20.4248 13.1356C19.5298 13.5306 18.54 13.75 17.5 13.75C13.4959 13.75 10.25 10.5041 10.25 6.5C10.25 5.45996 10.4694 4.47015 10.8644 3.5752ZM2 12C2 6.47715 6.47715 2 12 2C12.0681 2 12.136 2.00068 12.2038 2.00204C12.4814 2.0076 12.7331 2.16599 12.8583 2.41377C12.9834 2.66155 12.9615 2.95819 12.8012 3.18485C12.139 4.12157 11.75 5.26425 11.75 6.5C11.75 9.67564 14.3244 12.25 17.5 12.25C18.7358 12.25 19.8784 11.861 20.8151 11.1988C21.0418 11.0385 21.3384 11.0166 21.5862 11.1417C21.834 11.2669 21.9924 11.5186 21.998 11.7962C21.9993 11.8639 22 11.9319 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z" fill="currentColor"></path>
                            <path d="M16.2404 5.01756L17.052 3.39439C17.2363 3.02587 17.7622 3.02587 17.9464 3.39439L18.758 5.01756C18.8064 5.11432 18.8849 5.19278 18.9816 5.24117L20.6048 6.05275C20.9733 6.23701 20.9733 6.76292 20.6048 6.94718L18.9816 7.75876C18.8849 7.80714 18.8064 7.8856 18.758 7.98237L17.9464 9.60554C17.7622 9.97406 17.2363 9.97406 17.052 9.60554L16.2404 7.98237C16.1921 7.8856 16.1136 7.80714 16.0168 7.75876L14.3937 6.94718C14.0251 6.76292 14.0251 6.23701 14.3937 6.05275L16.0168 5.24117C16.1136 5.19278 16.1921 5.11432 16.2404 5.01756Z" fill="currentColor"></path>
                        </svg>
                    </x-slot:icon>
                </x-wrapped.card-white>

                {{-- Card 5 --}}
                <x-wrapped.card-white
                    title="Heure de déploiement"
                    description="Quand je déploies sur le Cloud, c'est généralement à cette heure-ci pile."
                    role="listitem"
                    aria-label="Heure habituelle de déploiement: 14h00 en mars"
                >
                    <x-slot:icon>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="h-6 w-6 shrink-0 text-neutral-500" aria-hidden="true">
                            <path d="M20.25 8.75V4.75H3.75V20.25H8.75M7.75 4.75V2.75M16.25 4.75V2.75M17 14.75V16.9996L18.75 18.75M14.9917 12.1509C17.6701 11.0415 20.7396 12.3137 21.8491 14.9919C22.9586 17.6702 21.6863 20.7396 19.0079 21.8491C16.3296 22.9585 13.2601 21.6863 12.1506 19.0081C11.0419 16.3306 12.3133 13.2604 14.9917 12.1509Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </x-slot:icon>
                    <x-slot:image>
                        <div class="relative mb-3 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="296" height="296" viewBox="0 0 296 296" fill="none" class="h-74 w-74 shrink-0" aria-hidden="true">
                                <path d="M286.524 147.99H295.996M285.816 162.08L295.241 163.028M283.543 176.716L292.812 178.668M279.785 190.799L288.794 193.723M274.604 204.298L283.257 208.15M268.055 217.145L276.263 221.873M260.088 229.403L267.748 234.975M251.011 240.608L258.064 246.931M240.712 250.917L247.06 257.947M229.471 260.037L235.071 267.676M217.277 267.977L222.035 276.167M204.358 274.574L208.242 283.213M190.81 279.778L193.768 288.776M176.796 283.522L178.783 292.783M162.485 285.77L163.469 295.191M147.448 286.517L147.412 295.989M132.929 285.709L131.944 295.129M118.636 283.402L116.649 292.664M104.654 279.605L101.696 288.604M91.1469 274.356L87.2628 282.995M78.2773 267.723L73.5198 275.913M66.1395 259.759L60.5397 267.398M54.9579 250.626L48.6094 257.656M44.7194 240.318L37.6667 246.64M35.5903 228.972L27.9102 234.516M27.7903 216.893L19.5823 221.62M21.2911 204.081L12.6377 207.933M16.0443 190.297L7.02393 193.187M12.4232 176.598L3.15448 178.55M10.1687 162.022L0.74427 162.97M9.47172 146.896L0 146.823M10.2748 132.939L0.857907 131.918M12.6546 118.3L3.40104 116.277M16.5196 104.226L7.53254 101.235M21.7647 90.8418L13.1402 86.9256M28.2798 78.2406L20.1068 73.453M36.4498 65.8297L28.8309 60.202M45.2901 55.0266L38.2836 48.6527M55.7926 44.6014L49.4954 37.5258M67.3894 35.3141L61.8736 27.6138M79.1589 27.7455L74.4619 19.5201M91.7495 21.3522L87.9299 12.6845M106.144 15.8935L103.288 6.8623M119.352 12.423L117.436 3.14691M134.377 10.1219L133.465 0.693866M149.633 9.47136L149.742 0M163.115 10.2747L164.171 0.861819M178.046 12.7277L180.104 3.48193M192.174 16.6527L195.2 7.67696M205.507 21.9242L209.455 13.3144M218.042 28.4475L222.86 20.2922M230.517 36.7119L236.173 29.1135M241.289 45.5845L247.689 38.6011M251.717 56.1612L258.815 49.8898M260.959 67.787L268.68 62.2994M268.545 79.6876L276.787 75.021M275.235 93.1219L283.931 89.367M280.252 106.649L289.294 103.827M283.742 120.222L293.025 118.341M285.923 135.003L295.355 134.128" stroke="#F53003" stroke-width="2" stroke-linejoin="round"></path>
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center gap-2" aria-label="Heure de déploiement: 14h00 en mars">
                                <span class="flex h-9 items-center rounded border border-neutral-300 px-3 font-mono text-lg font-medium text-neutral-500">02:00</span>
                                <span class="flex h-9 items-center rounded border border-neutral-300 px-3 font-mono text-lg font-medium text-neutral-500">PM</span>
                                <span class="flex h-9 items-center rounded border border-neutral-300 px-3 font-mono text-lg font-medium text-neutral-500">MAR</span>
                            </div>
                        </div>
                    </x-slot:image>
                </x-wrapped.card-white>

                {{-- Card 6 --}}
                <x-wrapped.card-white
                    title="Événements"
                    value="6 801"
                    value-size="small"
                    description="J'ai tracké plus d'événements que 42% des utilisateurs Nightwatch. #champion_de_la_traçabilité."
                    role="listitem"
                    aria-label="Statistique: 6801 événements trackés"
                >
                    <x-slot:icon>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18" fill="none" class="h-6 w-6 shrink-0 text-neutral-500" aria-hidden="true">
                            <g clip-path="url(#clip0_269_1284)">
                                <path d="M6.02344 16.2998C5.71741 16.7386 5.21563 17 4.68066 17H0.218182C0.0976831 17 0 16.9023 0 16.7818V14.8178C0 14.6973 0.0976833 14.5996 0.218182 14.5996H6.79086C6.96719 14.5996 7.07069 14.7979 6.96983 14.9426L6.02344 16.2998ZM24 16.7818C24 16.9023 23.9023 17 23.7818 17H19.3184C18.7836 16.9998 18.2825 16.7385 17.9766 16.2998L17.0302 14.9426C16.9293 14.7979 17.0328 14.5996 17.2091 14.5996H23.7818C23.9023 14.5996 24 14.6973 24 14.8178V16.7818ZM8.22527 13.1429C8.18447 13.2015 8.11764 13.2363 8.0463 13.2363H0.218182C0.0976833 13.2363 0 13.1386 0 13.0181V11.2065C0 11.086 0.0976833 10.9883 0.218182 10.9883H9.30944C9.48577 10.9883 9.58926 11.1866 9.48842 11.3312L8.22527 13.1429ZM24 13.0181C24 13.1386 23.9023 13.2363 23.7818 13.2363H15.9537C15.8824 13.2363 15.8155 13.2015 15.7747 13.1429L14.5116 11.3312C14.4107 11.1866 14.5142 10.9883 14.6906 10.9883H23.7818C23.9023 10.9883 24 11.086 24 11.2065V13.0181ZM11.3758 8.37516C11.4281 8.45016 11.4281 8.54984 11.3758 8.62484L10.7438 9.53068C10.703 9.58917 10.6362 9.62402 10.5649 9.62402H0.218182C0.0976831 9.62402 0 9.52634 0 9.40584V7.59416C0 7.47366 0.0976833 7.37598 0.218182 7.37598H10.5649C10.6362 7.37598 10.703 7.41083 10.7438 7.46932L11.3758 8.37516ZM24 9.40584C24 9.52634 23.9023 9.62402 23.7818 9.62402H13.4351C13.3638 9.62402 13.297 9.58917 13.2562 9.53068L12.6242 8.62484C12.5719 8.54984 12.5719 8.45016 12.6242 8.37516L13.2562 7.46932C13.297 7.41083 13.3638 7.37598 13.4351 7.37598H23.7818C23.9023 7.37598 24 7.47366 24 7.59416V9.40584ZM9.48842 5.66875C9.58926 5.81339 9.48577 6.01172 9.30944 6.01172H0.218182C0.0976833 6.01172 0 5.91404 0 5.79354V3.98185C0 3.86136 0.0976833 3.76367 0.218182 3.76367H8.0463C8.11764 3.76367 8.18447 3.79855 8.22527 3.85707L9.48842 5.66875ZM24 5.79354C24 5.91404 23.9023 6.01172 23.7818 6.01172H14.6906C14.5142 6.01172 14.4107 5.81339 14.5116 5.66875L15.7747 3.85707C15.8155 3.79855 15.8824 3.76367 15.9537 3.76367H23.7818C23.9023 3.76367 24 3.86136 24 3.98185V5.79354ZM4.68066 0C5.21563 0 5.71741 0.261408 6.02344 0.700195L6.96983 2.05741C7.07069 2.20206 6.96719 2.40039 6.79086 2.40039H0.218181C0.0976829 2.40039 0 2.30271 0 2.18221V0.218182C0 0.0976833 0.0976833 0 0.218182 0H4.68066ZM24 2.18221C24 2.30271 23.9023 2.40039 23.7818 2.40039H17.2091C17.0328 2.40039 16.9293 2.20206 17.0302 2.05741L17.9766 0.700195C18.2825 0.261546 18.7836 0.000154249 19.3184 0H23.7818C23.9023 0 24 0.0976833 24 0.218182V2.18221Z" fill="#737373"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_269_1284">
                                    <rect width="24" height="17.4545" rx="2.18182" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </x-slot:icon>
                </x-wrapped.card-white>

                {{-- Card 7 --}}
                <x-wrapped.card-sticker :start-index="0" role="listitem" aria-label="Stickers interactifs Laravel" />

                {{-- Card 8 --}}
                <x-wrapped.card-white
                    title="Mon classement"
                    value="9%"
                    description="Je fais partie du top 9% des déployeurs Cloud. Impressionnant, vraiment."
                    role="listitem"
                    aria-label="Statistique: Top 9% des déployeurs Cloud"
                >
                    <x-slot:icon>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="h-6 w-6 shrink-0 text-neutral-500" aria-hidden="true">
                            <path d="M17.75 2L18.4668 1.77944C18.3884 1.52448 18.1804 1.33038 17.9207 1.26968C17.6609 1.20898 17.3885 1.29081 17.2051 1.4846L17.75 2ZM18.75 5.25L18.0332 5.47056C18.1062 5.70796 18.292 5.89379 18.5294 5.96683L18.75 5.25ZM22 6.25L22.5154 6.79485C22.7092 6.61154 22.791 6.33909 22.7303 6.07934C22.6696 5.81958 22.4755 5.61161 22.2206 5.53317L22 6.25ZM18.3 9.75V10.5C18.4917 10.5 18.6761 10.4266 18.8154 10.2949L18.3 9.75ZM14.25 5.7L13.7051 5.1846C13.5734 5.32387 13.5 5.5083 13.5 5.7H14.25ZM11.4697 11.4697C11.1768 11.7626 11.1768 12.2374 11.4697 12.5303C11.7626 12.8232 12.2374 12.8232 12.5303 12.5303L12 12L11.4697 11.4697ZM11.1435 7.55755C11.5501 7.47828 11.8154 7.08444 11.7361 6.67789C11.6569 6.27133 11.263 6.00601 10.8565 6.08528L11 6.82141L11.1435 7.55755ZM17.9147 13.1437C17.994 12.7371 17.7287 12.3433 17.3221 12.264C16.9156 12.1847 16.5217 12.45 16.4425 12.8566L17.1786 13.0001L17.9147 13.1437ZM12.4601 3.51222C12.8737 3.53425 13.2269 3.2168 13.2489 2.80318C13.271 2.38955 12.9535 2.03638 12.5399 2.01435L12.5 2.76328L12.4601 3.51222ZM21.9857 11.4601C21.9636 11.0465 21.6105 10.729 21.1968 10.7511C20.7832 10.7731 20.4657 11.1263 20.4878 11.5399L21.2367 11.5L21.9857 11.4601ZM17.75 2L17.0332 2.22056L18.0332 5.47056L18.75 5.25L19.4668 5.02944L18.4668 1.77944L17.75 2ZM18.75 5.25L18.5294 5.96683L21.7794 6.96683L22 6.25L22.2206 5.53317L18.9706 4.53317L18.75 5.25ZM22 6.25L21.4846 5.70515L17.7846 9.20515L18.3 9.75L18.8154 10.2949L22.5154 6.79485L22 6.25ZM18.3 9.75V9H14.25V9.75V10.5H18.3V9.75ZM14.25 9.75H15V5.7H14.25H13.5V9.75H14.25ZM14.25 5.7L14.7949 6.2154L18.2949 2.5154L17.75 2L17.2051 1.4846L13.7051 5.1846L14.25 5.7ZM14.25 9.75L13.7197 9.21967L11.4697 11.4697L12 12L12.5303 12.5303L14.7803 10.2803L14.25 9.75ZM12.013 17.25V16.5C9.52054 16.5 7.5 14.4795 7.5 11.987H6.75H6C6 15.3079 8.69211 18 12.013 18V17.25ZM6.75 11.987H7.5C7.5 9.79253 9.06706 7.96241 11.1435 7.55755L11 6.82141L10.8565 6.08528C8.08896 6.62487 6 9.06117 6 11.987H6.75ZM17.1786 13.0001L16.4425 12.8566C16.0376 14.933 14.2075 16.5 12.013 16.5V17.25V18C14.9388 18 17.3751 15.9111 17.9147 13.1437L17.1786 13.0001ZM21.25 12H20.5C20.5 16.6944 16.6944 20.5 12 20.5V21.25V22C17.5228 22 22 17.5228 22 12H21.25ZM12 21.25V20.5C7.30558 20.5 3.5 16.6944 3.5 12H2.75H2C2 17.5228 6.47715 22 12 22V21.25ZM2.75 12H3.5C3.5 7.30558 7.30558 3.5 12 3.5V2.75V2C6.47715 2 2 6.47715 2 12H2.75ZM12 2.75V3.5C12.1544 3.5 12.3078 3.50411 12.4601 3.51222L12.5 2.76328L12.5399 2.01435C12.3611 2.00482 12.1811 2 12 2V2.75ZM21.2367 11.5L20.4878 11.5399C20.4959 11.6922 20.5 11.8456 20.5 12H21.25H22C22 11.8189 21.9952 11.6389 21.9857 11.4601L21.2367 11.5Z" fill="#737373"></path>
                        </svg>
                    </x-slot:icon>
                </x-wrapped.card-white>

                {{-- Card 9 --}}
                <x-wrapped.card-white
                    title="Mots de commit préférés"
                    description="216 déploiements via Git push, 47 manuellement. Le git, c'est la vie."
                    role="listitem"
                    aria-label="Mots de commit préférés: add, invoice, update"
                >
                    <x-slot:icon>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="h-6 w-6 shrink-0 text-neutral-500" aria-hidden="true">
                            <path d="M3.75195 3.75H20.252M3.75195 7.75H10.252M3.75 11.75H7.2522M17.2384 7.75L21.252 11.7635L11.7655 21.25H7.75195V17.2365L17.2384 7.75Z" stroke="#737373" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </x-slot:icon>
                    <x-slot:content>
                        <div class="relative mb-3 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="296" height="296" viewBox="0 0 296 296" fill="none" class="h-74 w-74 shrink-0" aria-hidden="true">
                                <path d="M295.5 0.5V197.126L197.136 295.5H0.5V98.873L98.8643 0.5H295.5ZM98.1572 79.4512H216.557V197.863H237.3V58.7061H98.1572V79.4512ZM98.1572 197.833H197.813V98.167H98.1572V197.833ZM98.1572 39.9609H256.014V197.833H276.757V19.2158H98.1572V39.9609Z" stroke="#D4D4D4"></path>
                            </svg>
                            <div class="absolute top-1/2 left-8 flex -translate-y-1/2 flex-col gap-2" role="list" aria-label="Mots de commit préférés">
                                <span class="font-mono text-xl font-medium text-neutral-500" role="listitem">"add"</span>
                                <span class="font-mono text-xl font-medium text-neutral-500" role="listitem">"invoice"</span>
                                <span class="font-mono text-xl font-medium text-neutral-500" role="listitem">"update"</span>
                            </div>
                        </div>
                    </x-slot:content>
                </x-wrapped.card-white>

                {{-- Card 10 --}}
                <x-wrapped.card-white
                    title="Mois de pointe"
                    value="Avril"
                    value-size="medium"
                    description="Ce mois était 'on fire' avec 59 de mes déploiements Cloud, j'avais littéralement trop d'erreurs à corriger 🤣."
                    role="listitem"
                    aria-label="Statistique: Avril, mois de pointe avec 59 déploiements"
                >
                    <x-slot:icon>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="h-6 w-6 shrink-0 text-neutral-500" aria-hidden="true">
                            <path d="M4.52778 17.25L1.75 20.1071M6.75 19.5357L5.08333 21.25M2.75 12.25C2.75 12.25 6.51997 14.02 8.25 15.75C9.98003 17.48 11.75 21.25 11.75 21.25L15.25 18V15C19.25 13 21.75 9.74998 21.25 2.74998C14.25 2.24998 11 4.74999 9 8.75H6L2.75 12.25ZM17.25 8.49998C17.25 9.46648 16.4665 10.25 15.5 10.25C14.5335 10.25 13.75 9.46648 13.75 8.49998C13.75 7.53348 14.5335 6.74998 15.5 6.74998C16.4665 6.74998 17.25 7.53348 17.25 8.49998Z" stroke="#737373" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </x-slot:icon>
                </x-wrapped.card-white>

                {{-- Card 11 --}}
                <x-wrapped.card-boost
                    title="Construit avec Laravel Boost"
                    description="3 nouvelles applications créées, mon univers cloud prend forme. Il me reste encore beaucoup à apprendre, mais je progresse chaque jour. Les fondations sont là, l'année prochaine, je vise encore plus haut !"
                    role="listitem"
                    aria-label="Carte promotionnelle: 3 applications créées avec Laravel Boost"
                />

                {{-- Card 12 --}}
                <x-wrapped.card-boost
                    title="Construit avec Laravel Boost"
                    description="Avec 6 bases de données créées et 2 nouveaux environnements, j'ai orchestré une symphonie de magie cloud. Le devoir a été accompli, l'année prochaine, ça sera légendaire."
                    role="listitem"
                    aria-label="Carte promotionnelle: 6 bases de données et 2 environnements avec Laravel Boost"
                />

                {{-- Card finale --}}
                <x-wrapped.card-sticker :start-index="4" role="listitem" aria-label="Stickers interactifs Laravel" />
            </div>
        </div>
    </section>

    {{-- Empty space --}}
    <div class="my-8" aria-hidden="true"></div>

    {{-- Crédit --}}
    <div class="max-w-[1200px] mx-auto">
        <div class="py-8 px-6 lg:px-10 border-t border-gray-200">
            <x-font.text-sm class="text-gray-medium text-center">
                Cette page est une reproduction partielle inspirée de
                <a href="https://wrapped.laravel.com"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Visiter le site officiel de Laravel Wrapped"
                   class="text-red hover:underline"
                >
                    Laravel Wrapped
                </a>
                par Laravel.
            </x-font.text-sm>
        </div>
    </div>
</div>
