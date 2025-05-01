<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Category;

class ArticleController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $articles = Article::with('category')
      ->paginate(10);

    return view('dashboard.articles.index', [
      'articles' => $articles,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $categories = Category::all();

    return view('dashboard.articles.create', [
      'categories' => $categories,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreArticleRequest $request)
  {
    $validated = $request->except('image');

    $article = Article::create($validated);
    $article->storeImage($request);
    $article->save();

    return redirect()->route('admin.articles.index')
      ->with('success', 'Article created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Article $article)
  {
    return view('dashboard.articles.show', [
      'article' => $article,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Article $article)
  {
    $categories = Category::all();

    return view('dashboard.articles.edit', [
      'article' => $article,
      'categories' => $categories,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateArticleRequest $request, Article $article)
  {
    $validated = $request->except('image');

    $article->update($validated);
    $article->storeImage($request);
    $article->save();

    return redirect()->route('admin.articles.index')
      ->with('success', 'Article updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Article $article)
  {
    $article->delete();
    $article->deleteImage();

    return redirect()->route('admin.articles.index')
      ->with('success', 'Article deleted successfully.');
  }
}
