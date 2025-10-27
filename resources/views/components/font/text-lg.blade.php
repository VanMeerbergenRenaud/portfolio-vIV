@props([
    'color' => 'dark-primary',
])

{{-- Font-size: 16px (mobile) | 17px (tablet) | 18px (desktop) --}}
<x-font.typography
    variant="text-lg"
    :color="$color"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
