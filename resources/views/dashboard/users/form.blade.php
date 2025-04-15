@props(['action', 'method' => 'POST', 'user' => null])

<form class="forms-sample" action="{{ $action }}" method="POST">
  @csrf
  @method($method)

  <div class="form-group @error('name') has-danger @enderror">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
      value="{{ old('name', $user->name ?? '') }}">
    @error('name')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('email') has-danger @enderror">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
      value="{{ old('email', $user->email ?? '') }}">
    @error('email')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  @if ($method === 'POST')
    <div class="form-group @error('password') has-danger @enderror">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      @error('password')
        <span class="text-danger" role="alert">{{ $message }}</span>
      @enderror
    </div>

    <div class="form-group @error('password_confirmation') has-danger @enderror">
      <label for="password_confirmation">Confirm Password</label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
        placeholder="Confirm Password">
      @error('password_confirmation')
        <span class="text-danger" role="alert">{{ $message }}</span>
      @enderror
    </div>
  @endif

  <div class="form-group @error('role') has-danger @enderror">
    <label for="role">Role</label>
    <select class="form-select" id="role" name="role">
      <option value="Customer" {{ old('role', $user->role ?? '') === 'Customer' ? 'selected' : '' }}>Customer</option>
      <option value="Administrator" {{ old('role', $user->role ?? '') === 'Administrator' ? 'selected' : '' }}>
        Administrator</option>
    </select>
    @error('role')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
  <a href="{{ route('admin.users.index') }}">
    <button type="button" class="btn btn-light">
      Cancel
    </button>
  </a>
</form>
