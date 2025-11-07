@props([
    'color' => 'dark-primary',
    'level' => '3'
])

{{-- Font-size: 60px (mobile) | 80px (tablet) | 120px (desktop) --}}
<x-font.typography
    variant="title-2xl"
    :color="$color"
    :level="$level"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
