<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use App\Http\Requests\StoreExerciseRequest;
use App\Http\Requests\UpdateExerciseRequest;

class ExerciseController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $exercises = Exercise::paginate(10);

    return view('dashboard.exercises.index', [
      'exercises' => $exercises,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('dashboard.exercises.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreExerciseRequest $request)
  {
    $validated = $request->except('image');

    $exercise = Exercise::create($validated);
    $exercise->storeImage($request);
    $exercise->save();

    return redirect()->route('admin.exercises.index')
      ->with('success', 'Exercise created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Exercise $exercise)
  {
    return view('dashboard.exercises.show', [
      'exercise' => $exercise,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Exercise $exercise)
  {
    return view('dashboard.exercises.edit', [
      'exercise' => $exercise,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateExerciseRequest $request, Exercise $exercise)
  {
    $validated = $request->except('image');

    $exercise->update($validated);
    $exercise->storeImage($request);
    $exercise->save();

    return redirect()->route('admin.exercises.index')
      ->with('success', 'Exercise updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Exercise $exercise)
  {
    $exercise->delete();
    $exercise->deleteImage();

    return redirect()->route('admin.exercises.index')
      ->with('success', 'Exercise deleted successfully.');
  }
}
