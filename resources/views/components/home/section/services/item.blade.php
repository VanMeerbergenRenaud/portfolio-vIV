@props([
    'index',
    'title',
    'description',
    'tags',
])

<div
    @click="activeService = activeService === {{ $index }}
        ? null
        : {{ $index }}"
    :class="activeService === {{ $index }}
        ? 'bg-whitesmoke text-dark-primary border-transparent'
        : 'bg-transparent text-gray-medium border-gray-light hover:border-white'"
    class="relative p-6 lg:p-9 lg:pt-8 flex flex-col gap-4 rounded-2xl border border-dashed group cursor-pointer transition-all duration-500 ease-in-out"
>
    {{-- Arrow SVG --}}
    <div
        class="absolute top-2 right-2 md:top-5 md:right-5 w-8 h-8 md:w-10 md:h-10 transition-all duration-500 ease-in-out"
        x-bind:class="activeService === {{ $index }}
            ? 'rotate-180 text-dark-primary'
            : 'text-gray-medium'"
    >
        <x-svg.arrow-up
            class="text-gray-medium w-full h-full"
            x-bind:class="activeService === {{ $index }}
                ? 'text-dark-primary'
                : 'group-hover:text-white'"
        />
    </div>

    {{-- Title --}}
    <x-font.title
        class="lg:leading-15 transition-colors duration-300 pr-6"
        x-bind:class="activeService === {{ $index }}
            ? 'text-dark-primary'
            : 'group-hover:text-white'"
    >
        {{ $title }}
    </x-font.title>

    {{-- Content --}}
    <div
        x-show="activeService === {{ $index }}"
        x-collapse
        x-cloak
    >
        <x-divider-dash class="mb-4" />

        <div class="pt-3 flex flex-col lg:items-end gap-8 md:grid md:grid-cols-2">
            <x-font.text-md class="text-gray-medium max-w-[500px]">
                {{ $description }}
            </x-font.text-md>

            <x-font.text-xs class="flex flex-wrap md:justify-end gap-1.5 max-w-[400px]">
                @foreach($tags as $tag)
                    <span class="py-1 px-2.5 text-gray-medium bg-white rounded-full">
                        {{ $tag }}
                    </span>
                @endforeach
            </x-font.text-xs>
        </div>
    </div>
</div>
