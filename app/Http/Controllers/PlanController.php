<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Requests\StorePlanRequest;
use App\Http\Requests\UpdatePlanRequest;
use App\Models\Exercise;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->authorizeResource(Plan::class);
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $plans = Auth::user()->plans()
      ->with('exercise')
      ->paginate(10);

    return view('dashboard.plans.index', [
      'plans' => $plans,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $exercises = Exercise::select('id', 'name')->get();

    return view('dashboard.plans.create', [
      'exercises' => $exercises,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StorePlanRequest $request)
  {
    $validated = $request->except('image');

    $plan = Auth::user()->plans()->create($validated);
    $plan->storeImage($request);
    $plan->save();

    return redirect()->route('customer.plans.index')
      ->with('success', 'Plan created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Plan $plan)
  {
    return view('dashboard.plans.show', [
      'plan' => $plan,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Plan $plan)
  {
    $exercises = Exercise::select('id', 'name')->get();

    return view('dashboard.plans.edit', [
      'plan' => $plan,
      'exercises' => $exercises,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdatePlanRequest $request, Plan $plan)
  {
    $validated = $request->except('image');

    $plan->update($validated);
    $plan->storeImage($request);
    $plan->save();

    return redirect()->route('customer.plans.index')
      ->with('success', 'Plan updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Plan $plan)
  {
    $plan->delete();
    $plan->deleteImage();

    return redirect()->route('customer.plans.index')
      ->with('success', 'Plan deleted successfully.');
  }
}
