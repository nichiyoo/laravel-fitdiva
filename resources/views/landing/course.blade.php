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
          <p class="mb-5">
            {!! $course->content !!}
          </p>
        </div>
      </div>
    </div>
  </section>

</x-landing-layout>
