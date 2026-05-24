<?php

namespace App\Livewire\Pages\Home;

use App\Models\Article;
use Livewire\Component;

class Articles extends Component
{
    public function render()
    {
        return view('livewire.pages.home.articles', [
            'featuredBlog' => Article::published()->featured()->first(),
            'articles' => Article::published()->where('is_featured', false)->limit(2)->get(),
            'articleCount' => Article::published()->count(),
        ]);
    }
}
