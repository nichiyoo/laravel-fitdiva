<x-landing-layout>
  <x-hero title="Explore Our Courses">
    <x-slot name="breadcrumbs">
      <span class="mr-2">
        <a href="{{ route('landing.index') }}">Home</a>
      </span>
      <span>Courses</span>
    </x-slot>
  </x-hero>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-12 heading-section ftco-animate text-center">
          <h3 class="subheading">Courses</h3>
          <h2 class="mb-1">Choose Your Level &amp; Focus</h2>
        </div>
      </div>
      <x-courses-grid :courses="$courses" />
    </div>
  </section>
</x-landing-layout>
