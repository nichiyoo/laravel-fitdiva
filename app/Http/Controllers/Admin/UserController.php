<?php

namespace App\Http\Controllers\Admin;

use App\Enums\RoleType;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $role = $request->query('role', 'User');
    $users = User::query()
      ->when($role !== 'User', function ($query) use ($role) {
        $query->where('role', $role);
      })
      ->paginate(10);

    return view('dashboard.users.index', [
      'users' => $users,
      'role' => $role,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('dashboard.users.create', [
      'roles' => RoleType::cases(),
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreUserRequest $request)
  {
    $validated = $request->except('image');

    $user = User::create($validated);
    $user->storeImage($request);
    $user->save();

    return redirect()
      ->route('admin.users.index')
      ->with('success', 'User created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(User $user)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(User $user)
  {
    return view('dashboard.users.edit', [
      'user' => $user,
      'roles' => RoleType::cases(),
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateUserRequest $request, User $user)
  {
    $validated = $request->except('image');

    $user->update($validated);
    $user->storeImage($request);
    $user->save();

    return redirect()
      ->route('admin.users.index')
      ->with('success', 'User updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(User $user)
  {
    $user->deleteImage();
    $user->delete();

    return redirect()
      ->route('admin.users.index')
      ->with('success', 'User deleted successfully.');
  }
}
