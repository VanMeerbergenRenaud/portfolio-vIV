@props([
    'level' => '3',
    'isTitle' => false
])

{{-- Font-size: 16px (mobile) | 17px (tablet) | 18px (desktop) --}}
<x-font.typography
    variant="text-lg"
    :level="$level"
    :isTitle="$isTitle"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
