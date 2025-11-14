@props([
    'color' => 'dark-primary',
    'level' => '3',
    'isTitle' => false
])

{{-- Font-size: 48px (mobile) | 64px (tablet) | 100px (desktop) --}}
<x-font.typography
    variant="title-xl"
    :color="$color"
    :level="$level"
    :isTitle="$isTitle"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
