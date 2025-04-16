<x-landing-layout>
  <x-hero title="{{ $course->name }}" background="{{ $course->image }}">
    <x-slot name="breadcrumbs">
      <span class="mr-2">
        <a href="{{ route('landing.index') }}">Home</a>
      </span>
      <span class="mr-2">
        <a href="{{ route('landing.courses') }}">Courses</a>
      </span>
    </x-slot>
  </x-hero>


  <section class="ftco-section d-md-flex bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <h2 class="mb-3">{{ $course->description }}</h2>

          <div class="video">
            <iframe width="1280" height="720" src="{{ $course->video_url }}" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>

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

          <p>{!! $course->content !!}</p>
        </div>
      </div>
    </div>
  </section>
</x-landing-layout>
