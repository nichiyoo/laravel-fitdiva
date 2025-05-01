@props(['action', 'method' => 'POST', 'exercise' => null])

<form class="forms-sample" action="{{ $action }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method($method)

  <div class="form-group @error('name') has-danger @enderror">
    <label for="name">Exercise Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Push-up, Squat, etc."
      value="{{ old('name', $exercise->name ?? '') }}">
    @error('name')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('slug') has-danger @enderror">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" placeholder="course-name-slug"
      value="{{ old('slug', $exercise->slug ?? '') }}">
    @error('slug')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('description') has-danger @enderror">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="4"
      placeholder="Explain how to perform the exercise">{{ old('description', $exercise->description ?? '') }}</textarea>
    @error('description')
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

  <div class="form-group @error('video_url') has-danger @enderror">
    <label for="video_url">Video URL</label>
    <input type="text" class="form-control" id="video_url" name="video_url" placeholder="YouTube or Vimeo URL"
      value="{{ old('video_url', $exercise->video_url ?? '') }}">
    @error('video_url')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
  <a href="{{ route('admin.exercises.index') }}">
    <button type="button" class="btn btn-light">Cancel</button>
  </a>
</form>
