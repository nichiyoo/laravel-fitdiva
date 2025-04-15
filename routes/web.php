<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ExerciseController;
use App\Http\Controllers\Admin\ArticleController;

Route::get('/', fn() => redirect()->route('landing.index'))->name('welcome');
Route::get('/dashboard', fn() => redirect()->route('admin.dashboard'))->name('home');

Route::as('landing.')->group(function () {
    Route::get('/', fn() => view('landing.index'))->name('index');
    Route::get('/classes', fn() => view('landing.classes'))->name('classes');
    Route::get('/about', fn() => view('landing.about'))->name('about');
    Route::get('/blog', fn() => view('landing.blog'))->name('blog');
});

Auth::routes();

Route::middleware('auth')
  ->prefix('admin')
  ->as('admin.')
  ->group(function () {
    Route::get('/', fn() => view('home'))->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('exercises', ExerciseController::class);
    Route::resource('articles', ArticleController::class);
});

