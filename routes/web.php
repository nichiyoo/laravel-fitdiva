<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ExerciseController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;

Route::get('/', fn() => redirect()->route('landing.index'))->name('welcome');
Route::get('/dashboard', fn() => redirect()->route('admin.dashboard'))->name('home');

Route::controller(LandingController::class)
  ->as('landing.')
  ->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/courses', 'courses')->name('courses');
    Route::get('/courses/{course:slug}', 'course')->name('course');
    Route::get('/about', 'about')->name('about');
    Route::get('/blog', 'blog')->name('blog');
  });

Auth::routes();

Route::middleware('auth')
  ->prefix('admin')
  ->as('admin.')
  ->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('exercises', ExerciseController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('categories', CategoryController::class);
  });
