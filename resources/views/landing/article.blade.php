<x-landing-layout>
  <x-hero title="{{ $article->title }}" background="{{ $article->image }}">
    <x-slot name="breadcrumbs">
      <span class="mr-2">
        <a href="{{ route('landing.index') }}">Home</a>
      </span>
      <span class="mr-2">
        <a href="{{ route('landing.articles') }}">Articles</a>
      </span>
    </x-slot>
  </x-hero>


  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <h2 class="mb-3">{{ $article->excerpt }}</h2>
          <p>{!! $article->content !!}</p>
        </div>

        <div class="col-lg-4 sidebar ftco-animate">
          <div class="sidebar-box ftco-animate">
            <div class="categories">
              <h3 class="heading-2">Available Courses</h3>
              @foreach ($courses as $course)
                <li><a href="{{ route('landing.course', $course->slug) }}">{{ $course->name }}</a></li>
              @endforeach
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading-2">Recent Blog</h3>
            @foreach ($articles as $article)
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{ $article->image }});"></a>
                <div class="text">
                  <h3 class="heading">
                    <a href="#">{{ $article->title }}</a>
                  </h3>
                  <div class="meta">
                    <div>
                      <span class="icon-calendar"></span>
                      {{ $article->updated_at->format('d F Y') }}
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading-2">Categories</h3>
            <div class="tagcloud">
              @foreach ($categories as $category)
                <a href="{{ route('landing.articles', ['category' => $category->slug]) }}" class="tag-cloud-link">
                  {{ $category->name }}
                </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-landing-layout>
