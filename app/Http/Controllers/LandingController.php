<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Course;

class LandingController extends Controller
{
  /**
   * Display landing page.
   */
  public function index()
  {
    $courses = Course::all();

    return view('landing.index', [
      'courses' => $courses,
    ]);
  }

  /**
   * Display listing of courses.
   */
  public function courses()
  {
    $courses = Course::all();

    return view('landing.courses', [
      'courses' => $courses,
    ]);
  }

  /**
   * Display course page.
   */
  public function course(String $slug)
  {
    $course = Course::where('slug', $slug)->firstOrFail();

    return view('landing.course', [
      'course' => $course,
    ]);
  }

  /**
   * Display about page.
   */
  public function about()
  {
    return view('landing.about');
  }

  /**
   * Display blog page.
   */
  public function blog()
  {
    $articles = Article::all();

    return view('landing.blog', [
      'articles' => $articles,
    ]);
  }
}
