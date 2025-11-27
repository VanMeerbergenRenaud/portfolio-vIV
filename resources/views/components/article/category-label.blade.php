@props(['category'])

@php
    use App\Enums\ArticleCategory;
    $categoryEnum = is_string($category) ? ArticleCategory::tryFrom($category) : $category;
    $label = $categoryEnum?->label() ?? ucfirst($category);
@endphp

{{ $label }}
