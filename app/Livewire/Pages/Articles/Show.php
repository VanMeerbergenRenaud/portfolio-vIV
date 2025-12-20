<?php

namespace App\Livewire\Pages\Articles;

use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Article')]
class Show extends Component
{
    public $article;

    public $articles;

    public function mount($slug)
    {
        $this->article = Article::where('slug', $slug)
            ->published()
            ->firstOrFail();

        $this->articles = Article::published()
            ->where('id', '!=', $this->article->id)
            ->inRandomOrder()
            ->limit(2)
            ->get();
    }

    public function render()
    {
        return view('livewire.pages.articles.show')
            ->layout('layouts.article')
            ->title($this->article->title);
    }
}
