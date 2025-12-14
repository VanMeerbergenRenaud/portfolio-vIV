<?php

use App\Livewire\Pages\About;
use App\Livewire\Pages\Articles\Category as ArticlesCategory;
use App\Livewire\Pages\Articles\Index as ArticlesIndex;
use App\Livewire\Pages\Articles\Show as ArticlesShow;
use App\Livewire\Pages\Conditions;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\LaravelWrapped;
use App\Livewire\Pages\Policies;
use App\Livewire\Pages\Projects\Index as ProjectsIndex;
use App\Livewire\Pages\Projects\Show as ProjectsShow;
use App\Livewire\Pages\Projects\Type as ProjectsType;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    // Home
    Route::get('/', Home::class)->name('home');
    // About
    Route::get('/about', About::class)->name('about');
    // Laravel Wrapped
    Route::get('/laravel-wrapped', LaravelWrapped::class)->name('laravel-wrapped');
    // Projects
    Route::get('/projects', ProjectsIndex::class)->name('projects');
    Route::get('/projects/type/{type}', ProjectsType::class)->name('projects.type');
    Route::get('/project/{slug}', ProjectsShow::class)->name('projects.show');
    // Articles
    Route::get('/articles', ArticlesIndex::class)->name('articles');
    Route::get('/articles/category/{category}', ArticlesCategory::class)->name('articles.category');
    Route::get('/articles/{slug}', ArticlesShow::class)->name('articles.show');
    // Privacy and Terms
    Route::get('/policies', Policies::class)->name('policies');
    Route::get('/conditions', Conditions::class)->name('conditions');
});

/* Admin login */
Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');
