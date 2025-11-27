<?php

namespace App\Livewire\Pages\Articles;

use App\Enums\ArticleCategory;
use App\Models\Article;
use Livewire\Component;

class Category extends Component
{
    public string $category;

    public $articles;

    public $categories;

    public function mount(string $category)
    {
        $this->category = $category;
        $this->articles = Article::published()
            ->category($category)
            ->ordered()
            ->get();

        $this->categories = Article::published()
            ->whereNotNull('category')
            ->get()
            ->pluck('category')
            ->unique()
            ->sortBy(fn ($cat) => $cat->value)
            ->values();
    }

    public function render()
    {
        $categoryEnum = ArticleCategory::tryFrom($this->category);
        $title = 'Articles '.($categoryEnum?->label() ?? ucfirst($this->category));

        return view('livewire.pages.articles.category')
            ->layout('layouts.guest')
            ->title($title);
    }
}
