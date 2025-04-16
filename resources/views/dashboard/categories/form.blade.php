@props(['action', 'method' => 'POST', 'category' => null])

<form class="forms-sample" action="{{ $action }}" method="POST">
  @csrf
  @method($method)

  <div class="form-group @error('name') has-danger @enderror">
    <label for="name">Category Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Category name"
      value="{{ old('name', $category->name ?? '') }}">
    @error('name')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('slug') has-danger @enderror">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" placeholder="category-name-slug"
      value="{{ old('slug', $category->slug ?? '') }}">
    @error('slug')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('description') has-danger @enderror">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="4"
      placeholder="Brief description of the category">{{ old('description', $category->description ?? '') }}</textarea>
    @error('description')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
  <a href="{{ route('admin.categories.index') }}">
    <button type="button" class="btn btn-light">Cancel</button>
  </a>
</form>
