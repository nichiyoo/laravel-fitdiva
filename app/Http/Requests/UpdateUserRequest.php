<?php

namespace App\Http\Requests;

use App\Enums\RoleType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class UpdateUserRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->user)],
      'role' => ['required', new Enum(RoleType::class)],
      'birthdate' => ['required', 'date', 'before:today'],
      'weight' => ['required', 'integer', 'min:0'],
      'height' => ['required', 'integer', 'min:0'],
      'image' => ['nullable', 'image', 'max:2048'],
    ];
  }
}
