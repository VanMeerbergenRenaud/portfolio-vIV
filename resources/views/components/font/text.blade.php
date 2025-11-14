@props([
    'level' => '3',
    'isTitle' => false
])

{{-- Font-size: 15px (mobile) | 16px (tablet) | 16px (desktop) --}}
<x-font.typography
    variant="text"
    :level="$level"
    :isTitle="$isTitle"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
