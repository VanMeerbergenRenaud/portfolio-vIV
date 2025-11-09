@props([
    'variant' => 'text',
    'color' => null,
    'level' => null,
    'class' => ''
])

@php
    $variants = [
        'title-2xl' => ['h', 'dark-primary', 'title-2xl'],
        'title-xl' => ['h', 'dark-primary', 'title-xl'],
        'title-lg' => ['h', 'dark-primary', 'title-lg'],
        'title' => ['h', 'dark-primary', 'title'],
        'text-3xl' => ['p', 'dark-primary', 'text-3xl'],
        'text-2xl' => ['p', 'dark-primary', 'text-2xl'],
        'text-xl' => ['p', 'dark-primary', 'text-xl'],
        'text-lg' => ['p', 'dark-primary', 'text-lg'],
        'text' => ['p', 'dark-primary', 'text'],
        'text-md' => ['p', 'dark-primary', 'text-md'],
        'text-sm' => ['p', 'dark-primary', 'text-sm'],
        'text-xs' => ['p', 'dark-primary', 'text-xs'],
    ];

    [$baseTag, $defaultColor, $cssClass] = $variants[$variant] ?? ['p', 'dark-primary', 'text'];

    $tag = $baseTag === 'h' ? 'h' . ($level ?? '2') : $baseTag;

    $textColor = $color ?? $defaultColor;
@endphp

<{{ $tag }}
    {{ $attributes->merge(['class' => 'typo-' . $cssClass . ' text-[var(--color-' . $textColor . ')] ' . $class]) }}
>
    {{ $slot }}
</{{ $tag }}>
