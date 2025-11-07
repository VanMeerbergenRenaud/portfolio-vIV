@props([
    'color' => 'dark-primary',
    'level' => '3'
])

{{-- Font-size: 48px (mobile) | 64px (tablet) | 100px (desktop) --}}
<x-font.typography
    variant="title-xl"
    :color="$color"
    :level="$level"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
