@props([
    'color' => 'black',
])

@php
    $strokeColor = $color === 'white'
        ? '#ffffff'
        : '#121212';
@endphp

<svg
    role="presentation" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
    {{ $attributes->merge(['class' => 'transform -rotate-[45deg]']) }}
>
    <path d="M 0 7 L 18 7 M 18 7 L 11 0 M 18 7 L 11 14" fill="transparent" height="14px" width="18px"
          stroke="{{ $strokeColor }}" stroke-width="2" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round"
          transform="translate(3 5)"></path>
</svg>
