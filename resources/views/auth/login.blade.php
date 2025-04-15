<x-auth-layout>
  <h4>Hello! let's get started</h4>
  <h6 class="font-weight-light">Sign in to continue.</h6>
  <form class="pt-3" action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-group @error('email') has-danger @enderror">
      <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{ old('email') }}"
        autocomplete="email" autofocus placeholder="Your email address" required>
      @error('email')
        <span class="text-danger" role="alert">{{ $errors->first('email') }}</span>
      @enderror
    </div>

    <div class="form-group @error('password') has-danger @enderror">
      <input type="password" class="form-control form-control-lg" id="password" name="password"
        autocomplete="current-password" placeholder="Enter password" required>
      @error('password')
        <span class="text-danger" role="alert">{{ $message }}</span>
      @enderror
    </div>

    <div class="my-2 d-flex justify-content-between align-items-center">
      <div class="form-check">
        <label class="form-check-label text-muted">
          <input type="checkbox" class="form-check-input">Keep me signed in </label>
      </div>
      <a href="{{ route('password.request') }}" class="auth-link text-primary">
        Forgot password?
      </a>
    </div>

    <div class="mt-3 d-grid gap-2">
      <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Sign In</button>
    </div>

    <div class="mt-3 d-grid gap-2">
      <a href="{{ route('register') }}" class="btn btn-block btn-gradient-light auth-form-btn">
        Don't have an account? Sign Up
      </a>
    </div>
  </form>
</x-auth-layout>
