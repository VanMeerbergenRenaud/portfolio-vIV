<?php

use App\Livewire\Pages\About;
use App\Livewire\Pages\Articles\Index as ArticlesIndex;
use App\Livewire\Pages\Articles\Show as ArticlesShow;
use App\Livewire\Pages\Conditions;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Policies;
use App\Livewire\Pages\Projects\Index as ProjectsIndex;
use App\Livewire\Pages\Projects\Show as ProjectsShow;
use App\Livewire\Pages\Projects\Type as ProjectsType;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/about', About::class)->name('about');
    Route::get('/projects', ProjectsIndex::class)->name('projects');
    Route::get('/projects/type/{type}', ProjectsType::class)->name('projects.type');
    Route::get('/project/{slug}', ProjectsShow::class)->name('projects.show');
    Route::get('/articles', ArticlesIndex::class)->name('articles');
    Route::get('/articles/{id}', ArticlesShow::class)->name('articles.show');
    // Privacy
    Route::get('/policies', Policies::class)->name('policies');
    Route::get('/conditions', Conditions::class)->name('conditions');
});

/* Admin login */
Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');
