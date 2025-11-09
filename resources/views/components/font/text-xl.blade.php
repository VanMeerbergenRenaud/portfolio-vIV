@props([
    'color' => 'dark-primary',
])

{{-- Font-size: 18px (mobile) | 19px (tablet) | 20px (desktop) --}}
<x-font.typography
    variant="text-xl"
    :color="$color"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
