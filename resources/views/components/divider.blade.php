@props ([
    'vertical' => false,
])

@if ($vertical)
    <div aria-orientation="vertical" role="separator" {{ $attributes->merge(['class' => 'w-px h-full bg-gray-400 dark:bg-gray-700']) }}></div>
@else
    <div aria-orientation="horizontal" role="separator" {{ $attributes->merge(['class' => 'h-px w-full bg-gray-400 dark:bg-gray-700']) }}></div>
@endif
