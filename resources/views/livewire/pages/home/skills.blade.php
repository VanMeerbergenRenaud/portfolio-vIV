<div>
    <section
        id="skills"
        x-data="scrollRows"
        x-init="init()"
        class="px-4 md:px-8 lg:px-10 py-30 md:py-35 lg:py-40 flex flex-col gap-20 bg-white"
    >
        <div class="flex flex-col gap-7">
            {{-- Header section --}}
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-1.5">
                    <x-font.text-md class="text-gray-light">
                        05
                    </x-font.text-md>

                    <span class="text-red" aria-hidden="true">|</span>

                    <x-font.text>
                        Compétences
                    </x-font.text>
                </div>
                <x-font.text-sm class="pl-8.5 text-gray-medium">
                    Sous-estimé
                </x-font.text-sm>
            </div>

            {{-- Big title --}}
            <x-font.title-xl>
                J'aborde chaque projet avec rigueur, passion et une attention
                <span class="text-gray-light">
                constante à la qualité du code et à l'expérience utilisateur.
            </span>
            </x-font.title-xl>
        </div>

        {{-- Grid --}}
        <div class="grid gap-2 overflow-hidden rounded-2xl">

            {{----------- START ROW 1 -----------}}

            <div data-scroll-row="left" class="flex flex-col gap-2 md:flex-row">
                {{-- For tablet : Gray empty space --}}
                <div class="hidden md:block bg-whitesmoke opacity-85 min-w-10 h-10 md:h-full lg:min-w-35 rounded-2xl"></div>

                {{-- Card --}}
                <div data-border-gray="true" class="p-6 lg:p-7 flex flex-col gap-10 lg:gap-14 rounded-2xl w-full md:min-w-[20rem] lg:min-w-[27rem] md:max-w-[27.5rem]">
                    {{-- Header card--}}
                    <div class="flex items-center gap-1.5">
                        <x-svg.star class="h-5 w-5 text-red" />

                        <x-divider vertical="true" class="rounded-sm !bg-gray-lighter !h-3.5 !w-0.5" />

                        <x-font.text-xl class="font-semibold">
                            {{ $skills[0]->name }}
                        </x-font.text-xl>
                    </div>

                    <x-font.text-lg class="text-gray-medium">
                        {{ $skills[0]->description }}
                    </x-font.text-lg>
                </div>

                {{-- For tablet : Gray empty space --}}
                <div class="hidden md:block bg-whitesmoke opacity-85 min-w-10 h-10 md:h-full lg:min-w-35 rounded-2xl"></div>

                {{-- Image --}}
                <div class="rounded-2xl overflow-hidden md:hidden lg:block lg:min-w-52">
                    @if($skills[0]->image)
                        <img src="{{ Storage::url($skills[0]->image) }}"
                             alt="{{ $skills[0]->name }}"
                             class="h-full w-full object-cover"
                             loading="lazy"
                        >
                    @else
                        <img src="{{ asset('img/placeholder.png') }}"
                             alt=""
                             class="h-full"
                             loading="lazy"
                        >
                    @endif
                </div>

                {{-- Card --}}
                <div data-border-gray="true" class="p-6 lg:p-7 flex flex-col gap-10 lg:gap-14 rounded-2xl w-full md:min-w-[20rem] lg:min-w-[27rem] md:max-w-[27.5rem]">
                    {{-- Header card--}}
                    <div class="flex items-center gap-1.5">
                        <x-svg.star class="h-5 w-5 text-red" />

                        <x-divider vertical="true" class="rounded-sm !bg-gray-lighter !h-3.5 !w-0.5" />

                        <x-font.text-xl class="font-semibold">
                            {{ $skills[1]->name }}
                        </x-font.text-xl>
                    </div>

                    <x-font.text-lg class="text-gray-medium">
                        {{ $skills[1]->description }}
                    </x-font.text-lg>
                </div>

                {{-- Gray empty space --}}
                <div class="bg-whitesmoke opacity-85 min-w-10 h-10 md:h-full lg:min-w-35 rounded-2xl"></div>
            </div>

            {{----------- END ROW 1 -----------}}

            {{----------- START ROW 2 -----------}}

            <div data-scroll-row="right" class="flex flex-col gap-2 md:flex-row">
                {{-- For tablet : Gray empty space --}}
                <div class="hidden md:block bg-whitesmoke opacity-85 min-w-10 h-10 md:h-full lg:min-w-35 rounded-2xl"></div>

                {{-- Image --}}
                <div class="rounded-2xl overflow-hidden hidden lg:block lg:min-w-52">
                    @if($skills[2]->image)
                        <img src="{{ Storage::url($skills[2]->image) }}"
                             alt="{{ $skills[2]->name }}"
                             class="h-full w-full object-cover"
                             loading="lazy"
                        >
                    @else
                        <img src="{{ asset('img/placeholder.png') }}"
                             alt=""
                             class="h-full"
                             loading="lazy"
                        >
                    @endif
                </div>

                {{-- Card --}}
                <div data-border-gray="true" class="p-6 lg:p-7 flex flex-col gap-10 lg:gap-14 rounded-2xl w-full md:min-w-[20rem] lg:min-w-[27rem] md:max-w-[27.5rem]">
                    {{-- Header card--}}
                    <div class="flex items-center gap-1.5">
                        <x-svg.star class="h-5 w-5 text-red" />

                        <x-divider vertical="true" class="rounded-sm !bg-gray-lighter !h-3.5 !w-0.5" />

                        <x-font.text-xl class="font-semibold">
                            {{ $skills[2]->name }}
                        </x-font.text-xl>
                    </div>

                    <x-font.text-lg class="text-gray-medium">
                        {{ $skills[2]->description }}
                    </x-font.text-lg>
                </div>

                {{-- Same image for mobile --}}
                <div class="rounded-2xl overflow-hidden md:hidden">
                    @if($skills[2]->image)
                        <img src="{{ Storage::url($skills[2]->image) }}"
                             alt="{{ $skills[2]->name }}"
                             class="h-full w-full object-cover"
                             loading="lazy"
                        >
                    @else
                        <img src="{{ asset('img/placeholder.png') }}"
                             alt=""
                             class="h-full"
                             loading="lazy"
                        >
                    @endif
                </div>

                {{-- For tablet : Gray empty space --}}
                <div class="hidden md:block bg-whitesmoke opacity-85 min-w-10 h-10 md:h-full lg:min-w-35 rounded-2xl"></div>

                {{-- Card --}}
                <div data-border-gray="true" class="p-6 lg:p-7 flex flex-col gap-10 lg:gap-14 rounded-2xl w-full md:min-w-[20rem] lg:min-w-[27rem] md:max-w-[27.5rem]">
                    {{-- Header card--}}
                    <div class="flex items-center gap-1.5">
                        <x-svg.star class="h-5 w-5 text-red" />

                        <x-divider vertical="true" class="rounded-sm !bg-gray-lighter !h-3.5 !w-0.5" />

                        <x-font.text-xl class="font-semibold">
                            {{ $skills[3]->name }}
                        </x-font.text-xl>
                    </div>

                    <x-font.text-lg class="text-gray-medium">
                        {{ $skills[3]->description }}
                    </x-font.text-lg>
                </div>

                {{-- Gray empty space --}}
                <div class="bg-whitesmoke opacity-85 min-w-10 h-10 md:h-full lg:min-w-35 rounded-2xl"></div>
            </div>

            {{----------- END ROW 2 -----------}}

            {{----------- START ROW 3 -----------}}

            <div data-scroll-row="left" class="flex flex-col gap-2 md:flex-row">
                {{-- For tablet : Gray empty space --}}
                <div class="hidden md:block bg-whitesmoke opacity-85 min-w-10 h-10 md:h-full lg:min-w-35 rounded-2xl"></div>

                {{-- Card --}}
                <div data-border-gray="true" class="p-6 lg:p-7 flex flex-col gap-10 lg:gap-14 rounded-2xl w-full md:min-w-[20rem] lg:min-w-[27rem] md:max-w-[27.5rem]">
                    {{-- Header card--}}
                    <div class="flex items-center gap-1.5">
                        <x-svg.star class="h-5 w-5 text-red" />

                        <x-divider vertical="true" class="rounded-sm !bg-gray-lighter !h-3.5 !w-0.5" />

                        <x-font.text-xl class="font-semibold">
                            {{ $skills[4]->name }}
                        </x-font.text-xl>
                    </div>

                    <x-font.text-lg class="text-gray-medium">
                        {{ $skills[4]->description }}
                    </x-font.text-lg>
                </div>

                {{-- Same image for mobile --}}
                <div class="rounded-2xl overflow-hidden md:hidden">
                    @if($skills[4]->image)
                        <img src="{{ Storage::url($skills[4]->image) }}"
                             alt="{{ $skills[4]->name }}"
                             class="h-full w-full object-cover"
                             loading="lazy"
                        >
                    @else
                        <img src="{{ asset('img/placeholder.png') }}"
                             alt=""
                             class="h-full"
                             loading="lazy"
                        >
                    @endif
                </div>

                {{-- For tablet : Gray empty space --}}
                <div class="hidden md:block bg-whitesmoke opacity-85 min-w-10 h-10 md:h-full lg:min-w-35 rounded-2xl"></div>

                {{-- Card --}}
                <div data-border-gray="true" class="p-6 lg:p-7 flex flex-col gap-10 lg:gap-14 rounded-2xl w-full md:min-w-[20rem] lg:min-w-[27rem] md:max-w-[27.5rem]">
                    {{-- Header card--}}
                    <div class="flex items-center gap-1.5">
                        <x-svg.star class="h-5 w-5 text-red" />

                        <x-divider vertical="true" class="rounded-sm !bg-gray-lighter !h-3.5 !w-0.5" />

                        <x-font.text-xl class="font-semibold">
                            {{ $skills[5]->name }}
                        </x-font.text-xl>
                    </div>

                    <x-font.text-lg class="text-gray-medium">
                        {{ $skills[5]->description }}
                    </x-font.text-lg>
                </div>

                {{-- Image --}}
                <div class="rounded-2xl overflow-hidden hidden lg:block lg:min-w-52">
                    @if($skills[5]->image)
                        <img src="{{ Storage::url($skills[5]->image) }}"
                             alt="{{ $skills[5]->name }}"
                             class="h-full w-full object-cover"
                             loading="lazy"
                        >
                    @else
                        <img src="{{ asset('img/placeholder.png') }}"
                             alt=""
                             class="h-full"
                             loading="lazy"
                        >
                    @endif
                </div>

                {{-- Gray empty space --}}
                <div class="hidden md:block bg-whitesmoke opacity-85 min-w-10 h-10 md:h-full lg:min-w-35 rounded-2xl"></div>
            </div>

            {{----------- END ROW 3 -----------}}
        </div>
    </section>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('scrollRows', () => ({
            rows: [],
            offset: 0,
            currentY: 0,
            targetY: 0,
            running: false,

            init() {
                if (window.innerWidth < 768) return;

                this.rows = document.querySelectorAll('[data-scroll-row]');
                this.offset = window.innerWidth >= 1024 ? 145 : 48;

                window.addEventListener('scroll', () => {
                    this.targetY = window.scrollY;
                    if (!this.running) {
                        this.running = true;
                        requestAnimationFrame(() => this.animate());
                    }
                });

                this.update();
            },

            animate() {
                this.currentY += (this.targetY - this.currentY) * 0.1;
                this.update();

                if (Math.abs(this.targetY - this.currentY) > 0.5)
                    requestAnimationFrame(() => this.animate());
                else
                    this.running = false;
            },

            update() {
                const h = window.innerHeight;

                this.rows.forEach(row => {
                    const { top, bottom } = row.getBoundingClientRect();
                    if (top < h && bottom > 0) {
                        const progress = Math.min(1, (1 - top / h) * 1.6);
                        const x = progress * this.offset;
                        const dir = row.dataset.scrollRow === 'right' ? -this.offset + x : -x;
                        row.style.transform = `translateX(${dir}px)`;
                    }
                });
            }
        }));
    });
</script>
