@props([
    'color' => 'dark-primary',
])

{{-- Font-size: 24px (mobile) | 26px (tablet) | 28px (desktop) --}}
<x-font.typography
    variant="text-3xl"
    :color="$color"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
