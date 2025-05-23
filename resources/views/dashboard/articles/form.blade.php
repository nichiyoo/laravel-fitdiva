@props(['action', 'method' => 'POST', 'article' => null, 'categories' => []])

<form class="forms-sample" action="{{ $action }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method($method)

  <div class="form-group @error('title') has-danger @enderror">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Article Title"
      value="{{ old('title', $article->title ?? '') }}">
    @error('title')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('slug') has-danger @enderror">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" placeholder="article-title-slug"
      value="{{ old('slug', $article->slug ?? '') }}">
    @error('slug')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('image') has-danger @enderror">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" name="image">
    @error('image')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('excerpt') has-danger @enderror">
    <label for="excerpt">Excerpt</label>
    <textarea class="form-control" id="excerpt" name="excerpt" rows="5" placeholder="Article excerpt...">{{ old('excerpt', $article->excerpt ?? '') }}</textarea>
    @error('excerpt')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('content') has-danger @enderror">
    <label for="content">Content</label>
    <textarea class="form-control editor" id="content" name="content" rows="5" placeholder="Article content...">{{ old('content', $article->content ?? '') }}</textarea>
    @error('content')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group @error('category_id') has-danger @enderror">
    <label for="category_id">Category</label>
    <select class="form-select" id="category_id" name="category_id">
      <option value="">-- Select Category --</option>
      @foreach ($categories as $category)
        <option value="{{ $category->id }}"
          {{ old('category_id', $article->category_id ?? '') == $category->id ? 'selected' : '' }}>
          {{ $category->name }}
        </option>
      @endforeach
    </select>
    @error('category_id')
      <span class="text-danger" role="alert">{{ $message }}</span>
    @enderror
  </div>

  <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
  <a href="{{ route('admin.articles.index') }}">
    <button type="button" class="btn btn-light">Cancel</button>
  </a>
</form>
