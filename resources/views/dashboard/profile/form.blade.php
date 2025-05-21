@props(['action', 'method' => 'POST', 'user' => null])

<form class="forms-sample" action="{{ $action }}" method="POST" enctype="multipart/form-data">
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

  <div class="row">
    <div class="form-group col-6 pe-2 @error('password') has-danger @enderror">
      <label for="password">Current Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Current Password">
      @error('password')
        <span class="text-danger" role="alert">{{ $message }}</span>
      @enderror
    </div>

    <div class="form-group col-6 ps-2 @error('password_confirmation') has-danger @enderror">
      <label for="password_confirmation">Confirm Password</label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
        placeholder="Confirm Password">
      @error('password_confirmation')
        <span class="text-danger" role="alert">{{ $message }}</span>
      @enderror
    </div>
  </div>

  <div class="form-group @error('birthdate') has-danger @enderror">
    <label for="birthdate">Birthdate</label>
    <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Birthdate"
      value="{{ old('birthdate', $user->birthdate->format('Y-m-d') ?? '') }}">
    @error('birthdate')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="row">
    <div class="form-group col-6 pe-2 @error('weight') has-danger @enderror">
      <label for="weight">Weight</label>
      <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight"
        value="{{ old('weight', $user->weight ?? '') }}">
      @error('weight')
        <span class="text-danger" role="alert">{{ $message }}</span>
      @enderror
    </div>

    <div class="form-group col-6 ps-2 @error('height') has-danger @enderror">
      <label for="height">Height</label>
      <input type="number" class="form-control" id="height" name="height" placeholder="Height"
        value="{{ old('height', $user->height ?? '') }}">
      @error('height')
        <span class="text-danger" role="alert">{{ $message }}</span>
      @enderror
    </div>
  </div>

  <div class="form-group @error('image') has-danger @enderror">
    <label for="image">Profile Image</label>
    <input type="file" class="form-control" id="image" name="image">
    @error('image')
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
