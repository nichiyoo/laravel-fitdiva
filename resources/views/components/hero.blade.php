@props([
    'title' => 'Title',
    'background' => asset('images/hero.jpg'),
])

<section class="hero-wrap js-fullheight hero" style="background-image: url({{ $background }});">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-3 bread">{{ $title }}</h1>
        @if (isset($breadcrumbs))
          <div class="breadcrumbs">
            {{ $breadcrumbs }}
          </div>
        @endif
      </div>
    </div>
  </div>
</section>
