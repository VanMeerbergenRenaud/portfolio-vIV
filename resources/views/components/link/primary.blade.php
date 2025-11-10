@props([
    'link' => '#',
    'variant' => 'default', // 'default', 'bw' ou 'wb'
    'navigate' => true
])

@php
    if ($variant === 'bw') {
        $classes = 'p-1 bg-white hover:bg-black rounded-2xl flex justify-between gap-8 border border-transparent border-dashed hover:border-white group';
        $textClasses = 'text-black group-hover:text-white';
        $arrowBg = 'bg-black group-hover:bg-white';
        $arrowStrokeClass = 'stroke-white group-hover:stroke-black';
    } elseif ($variant === 'wb') {
        $classes = 'p-1 bg-black hover:bg-white rounded-2xl flex justify-between gap-8 border border-transparent border-dashed hover:border-black group';
        $textClasses = 'text-white group-hover:text-black';
        $arrowBg = 'bg-white group-hover:bg-black';
        $arrowStrokeClass = 'stroke-black group-hover:stroke-white';
    } else {
        // default (red)
        $classes = 'p-1 bg-red hover:bg-white rounded-2xl flex justify-between gap-8 border border-transparent border-dashed hover:border-gray-light group';
        $textClasses = 'text-white group-hover:text-dark-primary';
        $arrowBg = 'bg-white';
        $arrowStrokeClass = 'stroke-red group-hover:stroke-dark-primary';
    }
@endphp

<div class="w-full max-w-[750px]">
    <a
        href="{{ $link }}"
        title="Vers {{ $slot }}"
        {{ $attributes->merge(['class' => $classes]) }}
        @if($navigate) wire:navigate @endif
    >
        {{-- Text effect --}}
        <div class="p-4 flex gap-2 typo-link {{ $textClasses }}">
            <span class="relative p-0 h-4 md:h-4.5 overflow-hidden">
                <span class="block transition-transform duration-400 ease-in-out group-hover:-translate-y-3 md:group-hover:-translate-y-4">
                    <span class="block origin-right transition-transform duration-400 ease-in-out group-hover:rotate-[20deg]">{{ $slot }}</span>
                    <span class="block origin-left transition-transform duration-400 ease-in-out rotate-[20deg] group-hover:rotate-0">{{ $slot }}</span>
                </span>
            </span>
        </div>
        {{-- Arrow --}}
        <div class="aspect-square overflow-clip rounded-xl w-12 h-12 flex-center {{ $arrowBg }}">
            <svg class="transform -rotate-45 group-hover:rotate-0 transition-all duration-300" role="presentation" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    class="transition-colors {{ $arrowStrokeClass }}"
                    d="M 0 7 L 18 7 M 18 7 L 11 0 M 18 7 L 11 14" fill="transparent" height="14px"
                    stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="3" transform="translate(3 5)"
                    width="18px"></path>
            </svg>
        </div>
    </a>
</div>
