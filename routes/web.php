<?php

use App\Livewire\Pages\About;
use App\Livewire\Pages\Blog;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Projects\Index;
use App\Livewire\Pages\Projects\Show;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/about', About::class)->name('about');
    Route::get('/projects', Index::class)->name('projects');
    Route::get('/project/{id}', Show::class)->name('project');
    Route::get('/blog', Blog::class)->name('blog');
    Route::get('/contact', Contact::class)->name('contact');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
