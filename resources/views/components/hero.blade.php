@props(['title' => 'Title'])

@push('styles')
  <style>
    .hero {
      background-image: url({{ asset('images/hero.jpg') }})
    }
  </style>
@endpush

<section class="hero-wrap js-fullheight hero">
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
