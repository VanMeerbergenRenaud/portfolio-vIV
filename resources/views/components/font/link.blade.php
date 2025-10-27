@props([
    'color' => 'primary',
    'link' => '#'
])

<div>
    <a
        href="{{ $link }}"
        title="Vers la page {{ $slot }}"
        {{ $attributes->merge(['class' => 'p-1 bg-red hover:bg-white rounded-2xl flex justify-between gap-1 border border-transparent border-dashed hover:border-gray-light group']) }}
        wire:navigate
    >
        {{-- Text effect --}}
        <div class="p-4 flex gap-2 text-white group-hover:text-dark-primary typo-link">
            <span class="relative p-0 h-5 overflow-hidden">
                <span class="block transition-transform duration-400 ease-in-out group-hover:-translate-y-4">
                    <span class="block origin-right transition-transform duration-400 ease-in-out group-hover:rotate-[20deg]">{{ $slot }}</span>
                    <span class="block origin-left transition-transform duration-400 ease-in-out rotate-[20deg] group-hover:rotate-0">{{ $slot }}</span>
                </span>
            </span>
        </div>
        {{-- Arrow --}}
        <div class="aspect-square overflow-clip bg-white rounded-xl w-12 h-12 flex-center">
            <svg class="transform -rotate-45 group-hover:rotate-0 transition-all duration-300" role="presentation" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M 0 7 L 18 7 M 18 7 L 11 0 M 18 7 L 11 14" fill="transparent" height="14px"
                    stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" stroke="#F74040" transform="translate(3 5)"
                    width="18px"></path>
            </svg>
        </div>
    </a>
</div>
