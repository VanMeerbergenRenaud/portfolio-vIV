@props([
    'link' => '',
    'color' => 'black',
    'fontStyle' => 'text-base', // value : text-sm font-semibold md:text-5xl, etc.
])

@php
    $textClasses = $color === 'black'
        ? 'text-dark-primary'
        : 'text-whitesmoke';

    $textStyle = $fontStyle;
@endphp

<a
    href="{{ $link }}"
    title="Vers la page {{ $slot }}"
    {{ $attributes->merge(['class' => 'group inline-block relative overflow-hidden']) }}
>

    <div class="relative inline-flex items-center {{ $textClasses }}">
        {{-- Outgoing label --}}
        <span class="relative z-12 block group-hover:-translate-y-20 -tracking-wide {{ $textStyle }}">
            {{ $slot }}
        </span>

        {{-- Incoming label --}}
        <span class="absolute top-2 group-hover:top-0 left-0 z-10 flex-center text-red translate-y-full group-hover:translate-y-0 -tracking-wide {{ $textStyle }}">
            {{ $slot }}
        </span>
    </div>
</a>

