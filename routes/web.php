<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('landing.index'))->name('welcome');

Route::as('landing.')->group(function () {
    Route::get('/', fn() => view('landing.index'))->name('index');
    Route::get('/classes', fn() => view('landing.classes'))->name('classes');
    Route::get('/about', fn() => view('landing.about'))->name('about');
    Route::get('/blog', fn() => view('landing.blog'))->name('blog');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
