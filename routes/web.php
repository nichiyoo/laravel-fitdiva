<?php

use App\Enums\RoleType;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ExerciseController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PlanController;

Route::get('/', fn() => redirect()->route('landing.index'))->name('welcome');

Route::controller(LandingController::class)
  ->as('landing.')
  ->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/courses', 'courses')->name('courses');
    Route::get('/courses/{course:slug}', 'course')->name('course');
    Route::get('/exercises', 'exercises')->name('exercises');
    Route::get('/exercises/{exercise:slug}', 'exercise')->name('exercise');
    Route::get('/articles', 'articles')->name('articles');
    Route::get('/articles/{article:slug}', 'article')->name('article');
  });

Auth::routes();

Route::middleware('auth')
  ->get('/dashboard', function () {
    switch (Auth::user()->role) {
      case RoleType::ADMIN:
        return redirect()->route('admin.dashboard');
      default:
        return redirect()->route('customer.dashboard');
    }
  })
  ->name('dashboard');

Route::middleware('auth', 'role:admin')
  ->prefix('admin')
  ->as('admin.')
  ->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'admin'])->name('dashboard');
    Route::resource('users', UserController::class)->except('show');
    Route::resource('courses', CourseController::class)->except('show');
    Route::resource('exercises', ExerciseController::class)->except('show');
    Route::resource('articles', ArticleController::class)->except('show');
    Route::resource('categories', CategoryController::class)->except('show');
  });

Route::middleware('auth', 'role:customer,admin')
  ->prefix('customer')
  ->as('customer.')
  ->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'customer'])->name('dashboard');
    Route::resource('plans', PlanController::class)->except('show');
  });
