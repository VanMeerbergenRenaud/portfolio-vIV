<?php

namespace App\Livewire\Pages\Articles;

use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Mes articles')]
class Index extends Component
{
    public $articles;

    public $categories;

    public function mount()
    {
        $this->articles = Article::published()
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
        return view('livewire.pages.articles.index')
            ->layout('layouts.guest');
    }
}
