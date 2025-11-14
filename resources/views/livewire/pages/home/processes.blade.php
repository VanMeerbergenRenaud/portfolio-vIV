<div>
    <section id="processes" class="px-4 md:px-8 lg:px-10 py-30 md:py-35 lg:py-40 flex flex-col gap-15 md:gap-20 lg:gap-25 lg:grid lg:grid-cols-[40%_1fr]">
        <h2 class="sr-only">
            Processus
        </h2>

        <div class="flex flex-col gap-4 lg:sticky lg:top-25 lg:h-fit">

            {{-- Header infos --}}
            <div class="flex items-center gap-1.5">
                <x-font.text-md class="text-gray-light">
                    04
                </x-font.text-md>

                <span class="text-red" aria-hidden="true">|</span>

                <x-font.text>
                    Processus
                </x-font.text>
            </div>

            {{-- Title --}}
            <x-font.title class="mt-3 lg:mt-4 max-w-[525px]">
                De la première ligne en local à la mise en prod, un processus clair.
            </x-font.title>

            {{-- Text --}}
            <x-font.text-lg class="text-gray-medium mb-3 lg:mb-4 max-w-[475px]">
                Ma méthode : anticiper, itérer, tester et communiquer. Pour un projet sans surprise, juste des solutions.
            </x-font.text-lg>

            <x-link.secondary
                link="mailto:renaud.vanmeerbergen@gmail.com"
                title="Vers votre application de mail"
                :navigate="false"
            >
                Discutons de votre projet
            </x-link.secondary>
        </div>

        {{-- Column right --}}
        <div class="flex flex-col gap-2">
            @foreach($processes as $index => $process)
                @php
                    $orderNumber = str_pad($process->order, 2, '0', STR_PAD_LEFT);
                    $progressBars = $process->order;
                @endphp

                <div class="relative grid grid-cols-[35px_1fr] gap-2">

                    {{-- Number --}}
                    <div class="pt-2.5 pb-4 px-1.5 flex flex-col" data-border="true">

                        <x-font.text-md class="p-1 text-gray-medium">{{ $orderNumber }}</x-font.text-md>

                        {{-- Lines --}}
                        <div class="flex flex-col grow justify-end items-center gap-0.5 mt-auto">
                            @for($i = 1; $i <= $totalProcesses; $i++)
                                <x-divider class="!bg-red rounded-sm max-w-2.5 {{ $i <= $progressBars ? '' : 'opacity-20' }}" />
                            @endfor
                        </div>
                    </div>

                    {{-- Card --}}
                    <div class="p-6 lg:pr-35 flex flex-col content-between gap-20 lg:gap-37.5 bg-white rounded-2xl">
                        <x-font.text-2xl>
                            {{ $process->title }}
                        </x-font.text-2xl>

                        <x-font.text class="text-gray-medium pr-4">
                            {{ $process->description }}
                        </x-font.text>
                    </div>

                    {{-- Number card desktop --}}
                    <div class="hidden lg:block absolute bottom-4 right-5" aria-hidden="true">
                        <x-font.title-xl level="4" class="text-whitesmoke">
                            {{ $orderNumber }}
                        </x-font.title-xl>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
