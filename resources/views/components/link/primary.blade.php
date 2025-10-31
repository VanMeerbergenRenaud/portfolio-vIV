@props([
    'link' => '#',
    'variant' => 'default' // 'default' ou 'bw'
])

@php
    $classes = $variant === 'bw'
        ? 'p-1 bg-white hover:bg-black rounded-2xl flex justify-between gap-1 border border-transparent border-dashed hover:border-white group'
        : 'p-1 bg-red hover:bg-white rounded-2xl flex justify-between gap-1 border border-transparent border-dashed hover:border-gray-light group';

    $textClasses = $variant === 'bw'
        ? 'text-black group-hover:text-white'
        : 'text-white group-hover:text-dark-primary';

    $arrowBg = $variant === 'bw'
        ? 'bg-black group-hover:bg-white'
        : 'bg-white';

    $arrowStroke = $variant === 'bw'
        ? '#000000'
        : '#F74040';

    $arrowStrokeHover = $variant === 'bw'
        ? 'group-hover:stroke-white'
        : 'group-hover:stroke-dark-primary';
@endphp

<div class="w-full max-w-[350px]">
    <a
        href="{{ $link }}"
        title="Vers la page {{ $slot }}"
        {{ $attributes->merge(['class' => $classes]) }}
        wire:navigate
    >
        {{-- Text effect --}}
        <div class="p-4 flex gap-2 typo-link {{ $textClasses }}">
            <span class="relative p-0 h-4 md:h-4.5 overflow-hidden">
                <span class="block transition-transform duration-400 ease-in-out group-hover:-translate-y-4 md:group-hover:-translate-y-4.5">
                    <span class="block origin-right transition-transform duration-400 ease-in-out group-hover:rotate-[20deg]">{{ $slot }}</span>
                    <span class="block origin-left transition-transform duration-400 ease-in-out rotate-[20deg] group-hover:rotate-0">{{ $slot }}</span>
                </span>
            </span>
        </div>
        {{-- Arrow --}}
        <div class="aspect-square overflow-clip rounded-xl w-12 h-12 flex-center {{ $arrowBg }}">
            <svg class="transform -rotate-45 group-hover:rotate-0 transition-all duration-300" role="presentation" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    class="transition-colors {{ $variant === 'bw' ? 'stroke-white group-hover:stroke-black' : 'stroke-red group-hover:stroke-dark-primary' }}"
                    d="M 0 7 L 18 7 M 18 7 L 11 0 M 18 7 L 11 14" fill="transparent" height="14px"
                    stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="3" transform="translate(3 5)"
                    width="18px"></path>
            </svg>
        </div>
    </a>
</div>
