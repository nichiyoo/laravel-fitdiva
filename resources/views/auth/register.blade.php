<x-auth-layout>
  <h4>New here?</h4>
  <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
  <form class="pt-3" action="{{ route('register') }}" method="POST">
    @csrf
    <div class="form-group @error('name') has-danger @enderror">
      <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{ old('name') }}"
        autocomplete="name" autofocus placeholder="Your full name" required>
      @error('name')
        <span class="text-danger" role="alert">{{ $message }}</span>
      @enderror
    </div>

    <div class="form-group @error('email') has-danger @enderror">
      <input type="email" class="form-control form-control-lg" id="email" name="email"
        value="{{ old('email') }}" autocomplete="email" placeholder="Your email address" required>
      @error('email')
        <span class="text-danger" role="alert">{{ $message }}</span>
      @enderror
    </div>

    <div class="row">
      <div class="form-group col-6 pe-2 @error('password') has-danger @enderror">
        <input type="password" class="form-control form-control-lg" id="password" name="password"
          autocomplete="new-password" placeholder="Create a password" required>
        @error('password')
          <span class="text-danger" role="alert">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group col-6 ps-2 @error('password_confirmation') has-danger @enderror">
        <input type="password" class="form-control form-control-lg" id="password_confirmation"
          name="password_confirmation" autocomplete="new-password" placeholder="Confirm your password" required>
        @error('password_confirmation')
          <span class="text-danger" role="alert">{{ $message }}</span>
        @enderror
      </div>
    </div>

    <div class="form-group @error('birthdate') has-danger @enderror">
      <input type="date" class="form-control form-control-lg" id="birthdate" name="birthdate"
        value="{{ old('birthdate') }}" placeholder="Your birthdate" required>
      @error('birthdate')
        <span class="text-danger" role="alert">{{ $message }}</span>
      @enderror
    </div>

    <div class="row">
      <div class="form-group col-6 pe-2 @error('weight') has-danger @enderror">
        <input type="number" class="form-control form-control-lg" id="weight" name="weight"
          value="{{ old('weight') }}" placeholder="Your weight (kg)" required>
        @error('weight')
          <span class="text-danger" role="alert">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group col-6 ps-2 @error('height') has-danger @enderror">
        <input type="number" class="form-control form-control-lg" id="height" name="height"
          value="{{ old('height') }}" placeholder="Your height (cm)" required>
        @error('height')
          <span class="text-danger" role="alert">{{ $message }}</span>
        @enderror
      </div>
    </div>

    <div class="mb-4">
      <div class="form-check">
        <label class="form-check-label text-muted">
          <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
      </div>
    </div>

    <div class="mt-3 d-grid gap-2">
      <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Sign Up</button>
    </div>

    <div class="mt-3 d-grid gap-2">
      <a href="{{ route('login') }}" class="btn btn-block btn-gradient-light auth-form-btn">
        Already have an account? Sign In
      </a>
    </div>
  </form>
</x-auth-layout>
