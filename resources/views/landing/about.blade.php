<x-landing-layout>
  <x-hero title="About Us">
    <x-slot name="breadcrumbs">
      <span class="mr-2">
        <a href="{{ route('landing.index') }}">Home</a>
      </span>
      <span>Classes</span>
    </x-slot>
  </x-hero>

  <section class="ftco-section d-md-flex bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 text-center">
          <h2>
            We believe that emotional, mental, and spiritual flexibility are virtuous and life-enhancing, and when it
            comes to yoga practice, paramount.
          </h2>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container-fluid">
      <div class="row justify-content-center mb-5">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <h3 class="subheading">Coaches</h3>
          <h2 class="mb-1">Meet Our Coaches</h2>
        </div>
      </div>
      <x-trainer-grid />
    </div>
  </section>

  <section class="ftco-counter ftco-bg-dark img" id="section-counter">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <x-stats-grid />
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h3 class="subheading">Testimony</h3>
          <h2 class="mb-1">Successful Stories</h2>
        </div>
      </div>
      <x-testimony-grid />
    </div>
  </section>
</x-landing-layout>
