<div class="row d-flex">
  @foreach ($articles as $article)
    <div class="col-md-4 d-flex ftco-animate">
      <div class="blog-entry justify-content-end">
        <a href="{{ route('landing.article', $article->slug) }}" style="background-image: url({{ $article->image }})"
          class="block-20"></a>

        <div class="text p-4 float-right d-block">
          <div class="d-flex align-items-center pt-2 mb-4">
            <div class="one">
              <span class="day">{{ $article->created_at->format('d') }}</span>
            </div>
            <div class="two">
              <span class="yr">{{ $article->created_at->format('Y') }}</span>
              <span class="mos">{{ $article->created_at->format('F') }}</span>
            </div>
          </div>

          <h3 class="heading mt-2">
            <a href="{{ route('landing.article', $article->slug) }}">{{ $article->title }}</a>
          </h3>

          <p>
            {{ \Illuminate\Support\Str::limit($article->content, 80, '...') }}
          </p>

          <div class="tagcloud">
            <a href="{{ route('landing.articles', ['category' => $article->category->slug]) }}" class="tag-cloud-link">
              {{ $article->category->name }}
            </a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
