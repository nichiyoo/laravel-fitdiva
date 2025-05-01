<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Course;
use App\Models\Exercise;
use Illuminate\Http\Request;

class LandingController extends Controller
{
  /**
   * Display landing page.
   */
  public function index()
  {
    $courses = Course::all();
    $articles = Article::take(3)->get();

    return view('landing.index', [
      'courses' => $courses,
      'articles' => $articles,
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

    $courses = Course::all();
    $articles = Article::take(3)->get();
    $categories = Category::all();

    return view('landing.course', [
      'course' => $course,
      'courses' => $courses,
      'articles' => $articles,
      'categories' => $categories,
    ]);
  }

  /**
   * Display listing of exercises.
   */
  public function exercises()
  {
    $exercises = Exercise::all();

    return view('landing.exercises', [
      'exercises' => $exercises,
    ]);
  }

  /**
   * Display exercise page.
   */
  public function exercise(String $slug)
  {
    $exercise = Exercise::where('slug', $slug)->firstOrFail();

    $courses = Course::all();
    $articles = Article::take(3)->get();
    $categories = Category::all();

    return view('landing.exercise', [
      'exercise' => $exercise,
      'courses' => $courses,
      'articles' => $articles,
      'categories' => $categories,
    ]);
  }

  /**
   * Display blog page.
   */
  public function articles(Request $request)
  {
    $category = $request->input('category', null);

    $articles = Article::query()
      ->when($category, function ($query) use ($category) {
        return $query->whereHas('category', function ($query) use ($category) {
          return $query->where('slug', $category);
        });
      })
      ->with('category')
      ->paginate(6);

    return view('landing.articles', [
      'articles' => $articles,
      'category' => $category ? Category::where('slug', $category)->first() : null,
    ]);
  }

  /**
   * Display article page.
   */
  public function article(String $slug)
  {
    $article = Article::where('slug', $slug)->firstOrFail();

    $courses = Course::all();
    $articles = Article::take(3)->get();
    $categories = Category::all();

    return view('landing.article', [
      'article' => $article,
      'courses' => $courses,
      'articles' => $articles,
      'categories' => $categories,
    ]);
  }
}
