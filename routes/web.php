<?php

use App\Livewire\Pages\About;
use App\Livewire\Pages\Blog;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Projects\Index;
use App\Livewire\Pages\Projects\Show;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/about', About::class)->name('about');
    Route::get('/projects', Index::class)->name('projects');
    Route::get('/project/{id}', Show::class)->name('project');
    Route::get('/blog', Blog::class)->name('blog');
    Route::get('/contact', Contact::class)->name('contact');
});

/* Admin login */
Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');
