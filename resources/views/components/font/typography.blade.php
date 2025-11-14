@props([
    'variant' => 'text',
    'color' => null,
    'level' => null,
    'isTitle' => false,
])

@php
    static $config = [
        'title-2xl' => ['dark-primary', 'title-2xl', '3'],
        'title-xl'  => ['dark-primary', 'title-xl', '3'],
        'title-lg'  => ['dark-primary', 'title-lg', '3'],
        'title'     => ['dark-primary', 'title', '3'],
        'text-3xl'  => ['dark-primary', 'text-3xl', '3'],
        'text-2xl'  => ['dark-primary', 'text-2xl', '3'],
        'text-xl'   => ['dark-primary', 'text-xl', '3'],
        'text-lg'   => ['dark-primary', 'text-lg', '3'],
        'text'      => ['dark-primary', 'text', '3'],
        'text-md'   => ['dark-primary', 'text-md', '3'],
        'text-sm'   => ['dark-primary', 'text-sm', '3'],
        'text-xs'   => ['dark-primary', 'text-xs', '3'],
    ];

    [$defaultColor, $cssClass, $defaultLevel] = $config[$variant] ?? ['dark-primary', 'text', '3'];

    $tag = $isTitle
        ? 'h' . ($level ?? $defaultLevel)
        : 'p';

    $finalColor = $color ?? $defaultColor;
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => "typo-{$cssClass} text-{$finalColor}"]) }}>
    {{ $slot }}
</{{ $tag }}>
