<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  /**
   * Show the profile edit form.
   *
   * @return \Illuminate\View\View
   */
  public function index()
  {
    return view('dashboard.profile.index');
  }

  /**
   * Update the user's profile.
   *
   * @param  \App\Http\Requests\UpdateProfileRequest  $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function update(UpdateProfileRequest $request)
  {
    $data = $request->validated();
    unset($data['image']);
    unset($data['password']);

    $user = Auth::user();
    $user->update($data);

    $password = $request->get('password');
    if ($password) $user->password = $request->get('password');

    $user->storeImage($request);
    $user->save();

    return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
  }
}
