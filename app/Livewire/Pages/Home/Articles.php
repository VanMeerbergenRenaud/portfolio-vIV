<?php

namespace App\Livewire\Pages\Home;

use App\Models\Article;
use Livewire\Component;

class Articles extends Component
{
    public $featuredBlog;

    public $articles;

    public $articleCount;

    public function mount()
    {
        $this->featuredBlog = Article::published()->featured()->first();
        $this->articles = Article::published()->where('is_featured', false)->limit(2)->get();
        $this->articleCount = Article::published()->count();
    }

    public function render()
    {
        return view('livewire.pages.home.articles');
    }
}
