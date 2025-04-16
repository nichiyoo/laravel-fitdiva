<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Course;
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
   * Display about page.
   */
  public function about()
  {
    return view('landing.about');
  }

  /**
   * Display blog page.
   */
  public function articles(Request $request)
  {
    $category = $request->input('category', null);
    isset($category) && $category = Category::where('slug', $category)->first();

    $articles = Article::query()
      ->when($category, function ($query) use ($category) {
        return $query->where('category_id', $category->id);
      })
      ->with('category')
      ->paginate(6);

    return view('landing.articles', [
      'articles' => $articles,
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
