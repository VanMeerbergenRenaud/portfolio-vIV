@props([
    'level' => '3',
    'isTitle' => false
])

{{-- Font-size: 18px (mobile) | 19px (tablet) | 20px (desktop) --}}
<x-font.typography
    variant="text-xl"
    :level="$level"
    :isTitle="$isTitle"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
