@props([
    'color' => 'dark-primary',
    'level' => '2'
])

{{-- Font-size: 40px (mobile) | 48px (tablet) | 72px (desktop) --}}
<x-font.typography
    variant="title-lg"
    :color="$color"
    :level="$level"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
