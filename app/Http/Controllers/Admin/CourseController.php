<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $courses = Course::paginate(10);

    return view('dashboard.courses.index', [
      'courses' => $courses,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('dashboard.courses.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreCourseRequest $request)
  {
    $validated = $request->except('image');

    $course = Course::create($validated);
    $course->storeImage($request);
    $course->save();

    return redirect()->route('admin.courses.index')
      ->with('success', 'Course created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Course $course)
  {
    return view('dashboard.courses.show', [
      'course' => $course,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Course $course)
  {
    return view('dashboard.courses.edit', [
      'course' => $course,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateCourseRequest $request, Course $course)
  {
    $validated = $request->except('image');

    $course->update($validated);
    $course->storeImage($request);
    $course->save();

    return redirect()->route('admin.courses.index')
      ->with('success', 'Course updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Course $course)
  {
    $course->delete();
    $course->deleteImage();

    return redirect()->route('admin.courses.index')
      ->with('success', 'Course deleted successfully.');
  }
}
