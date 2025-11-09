<?php

namespace App\Livewire\Pages\Articles;

use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Article')]
class Show extends Component
{
    public $article;

    public function mount($slug)
    {
        $this->article = Article::where('slug', $slug)
            ->published()
            ->firstOrFail();
    }

    public function render()
    {
        return view('livewire.pages.articles.show')
            ->layout('layouts.guest')
            ->title('Projet : '.$this->article->name);
    }
}
