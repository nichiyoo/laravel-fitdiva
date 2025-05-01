<x-landing-layout>
  <x-hero title="{{ $exercise->name }}" background="{{ $exercise->image }}">
    <x-slot name="breadcrumbs">
      <span class="mr-2">
        <a href="{{ route('landing.index') }}">Home</a>
      </span>
      <span class="mr-2">
        <a href="{{ route('landing.exercises') }}">Exercises</a>
      </span>
    </x-slot>
  </x-hero>

  <section class="ftco-section d-md-flex bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <h2 class="mb-3">{{ $exercise->description }}</h2>

          @isset($exercise->video_url)
            <div class="video">
              <iframe width="1280" height="720" src="{{ $exercise->video_url }}" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          @endisset
        </div>
      </div>
    </div>
  </section>

  @push('styles')
    <style>
      .video {
        width: 100%;
        margin: 2rem auto;
        aspect-ratio: 16 / 9;
        overflow: hidden;
        border-radius: 10px;
        border: 1px solid #e5e5e5;
      }

      .video iframe {
        width: 100%;
        height: 100%;
        border: 0;
      }
    </style>
  @endpush
</x-landing-layout>
