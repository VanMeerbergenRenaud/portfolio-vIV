@props([
    'link' => '#',
    'color' => 'black', // black, white
])

@php
    $colorClasses = $color === 'white'
        ? 'border-white text-white'
        : 'border-dark-primary text-dark-primary';
@endphp

<div>
    <a
        href="{{ $link }}"
        {{ $attributes->merge(['class' => "pb-0.5 inline-flex items-center gap-1.5 lg:gap-2 group border-b {$colorClasses}"]) }}
    >
        <span class="typo-link group-hover:-translate-y-0.5">{{ $slot }}</span>
        <x-svg.arrow :color="$color" class="group-hover:rotate-0 group-hover:-translate-y-0.5 transition duration-300" />
    </a>
</div>
