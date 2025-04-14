<x-auth-layout>
  <h4>Forgot your password?</h4>
  <h6 class="font-weight-light">Enter your email address and we will send you a password reset link</h6>
  <form class="pt-3" action="{{ route('password.email') }}" method="POST">
    @csrf
    <div class="form-group @error('email') has-danger @enderror">
      <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{ old('email') }}"
        autocomplete="email" autofocus placeholder="Your email address" required>
      @error('email')
        <span class="text-danger" role="alert">{{ $message }}</span>
      @enderror
    </div>

    <div class="mt-3 d-grid gap-2">
      <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
        Send Reset Link
      </button>
    </div>

    <div class="mt-3 d-grid gap-2">
      <a href="{{ route('login') }}" class="btn btn-block btn-gradient-light auth-form-btn">
        Back to Login
      </a>
    </div>
  </form>
</x-auth-layout>
