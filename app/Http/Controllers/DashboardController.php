<?php

namespace App\Http\Controllers;

use App\Enums\RoleType;
use App\Models\Article;
use App\Models\Course;
use App\Models\Exercise;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  /**
   * Handle the redirection for each role dashboard.
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function index()
  {
    return match (Auth::user()->role) {
      RoleType::ADMIN => redirect()->route('admin.dashboard'),
      default => redirect()->route('customer.dashboard'),
    };
  }




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
    $plans = Auth::user()->plans()->count();

    return view('dashboard.customer', [
      'plans' => $plans,
    ]);
  }
}
