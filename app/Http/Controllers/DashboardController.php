<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Course;
use App\Models\Exercise;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  /**
   * Show the application admin dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function admin()
  {
    $courses = Course::count();
    $exercises = Exercise::count();
    $articles = Article::count();
    $users = User::count();

    return view('dashboard.admin', [
      'courses' => $courses,
      'exercises' => $exercises,
      'articles' => $articles,
      'users' => $users,
    ]);
  }

  /**
   * Show the application customer dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function customer()
  {
    return view('dashboard.customer');
  }
}
