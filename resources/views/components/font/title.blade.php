@props([
    'color' => 'dark-primary',
    'level' => '2'
])

{{-- Font-size: 32px (mobile) | 36px (tablet) | 48px (desktop) --}}
<x-font.typography
    variant="title"
    :color="$color"
    :level="$level"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
