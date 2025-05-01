<x-landing-layout>
  <x-hero title="Practice Exercises">
    <x-slot name="breadcrumbs">
      <span class="mr-2">
        <a href="{{ route('landing.index') }}">Home</a>
      </span>
      <span>Exercises</span>
    </x-slot>
  </x-hero>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-12 heading-section ftco-animate text-center">
          <h3 class="subheading">Exercises</h3>
          <h2 class="mb-1">Practice Your Skills</h2>
        </div>
      </div>
      <x-exercises-grid :exercises="$exercises" />
    </div>
  </section>
</x-landing-layout>
