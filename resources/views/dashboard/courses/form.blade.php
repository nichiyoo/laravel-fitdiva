@props(['action', 'method' => 'POST', 'course' => null])

<form class="forms-sample" action="{{ $action }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method($method)

  <div class="form-group @error('name') has-danger @enderror">
    <label for="name">Course Name</label>
    <input type="text" class="form-control" id="name" name="name"
      placeholder="Beginner Yoga, Full Body Burn, etc." value="{{ old('name', $course->name ?? '') }}">
    @error('name')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('slug') has-danger @enderror">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" placeholder="course-name-slug"
      value="{{ old('slug', $course->slug ?? '') }}">
    @error('slug')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('description') has-danger @enderror">
    <label for="description">Short Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"
      placeholder="Brief summary of the course">{{ old('description', $course->description ?? '') }}</textarea>
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
      value="{{ old('video_url', $course->video_url ?? '') }}">
    @error('video_url')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('content') has-danger @enderror">
    <label for="content">Course Content</label>
    <textarea class="form-control editor" id="content" name="content" rows="5"
      placeholder="Full content of the course">{{ old('content', $course->content ?? '') }}</textarea>
    @error('content')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
  <a href="{{ route('admin.courses.index') }}">
    <button type="button" class="btn btn-light">Cancel</button>
  </a>
</form>
