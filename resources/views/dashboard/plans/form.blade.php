@props(['action', 'method' => 'POST', 'plan' => null])

<form class="forms-sample" action="{{ $action }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method($method)

  <div class="form-group @error('name') has-danger @enderror">
    <label for="name">Plan Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter plan name"
      value="{{ old('name', $plan->name ?? '') }}">
    @error('name')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('description') has-danger @enderror">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="4"
      placeholder="Explain what you want to achieve">{{ old('description', $plan->description ?? '') }}</textarea>
    @error('description')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('month') has-danger @enderror">
    <label for="month">Month</label>
    <input type="number" class="form-control" id="month" name="month" placeholder="Number of month"
      value="{{ old('month', $plan->month ?? '') }}">
    @error('month')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>


  <div class="form-group @error('image') has-danger @enderror">
    <label for="image">Cover Image</label>
    <input type="file" class="form-control" id="image" name="image">
    @error('image')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('sets') has-danger @enderror">
    <label for="sets">Sets</label>
    <input type="number" class="form-control" id="sets" name="sets" placeholder="Number of sets"
      value="{{ old('sets', $plan->sets ?? '') }}">
    @error('sets')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('reps') has-danger @enderror">
    <label for="reps">Reps</label>
    <input type="number" class="form-control" id="reps" name="reps" placeholder="Number of reps"
      value="{{ old('reps', $plan->reps ?? '') }}">
    @error('reps')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('exercise_id') has-danger @enderror">
    <label for="exercise_id">Exercise</label>
    <select class="form-select" id="exercise_id" name="exercise_id">
      @foreach ($exercises as $exercise)
        <option value="{{ $exercise->id }}"
          {{ old('exercise_id', $exercise->id) === $exercise->id ? 'selected' : '' }}>
          {{ $exercise->name }}
        </option>
      @endforeach
    </select>
    @error('exercise_id')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>

  <a href="{{ route('customer.plans.index') }}">
    <button type="button" class="btn btn-light">Cancel</button>
  </a>
</form>
