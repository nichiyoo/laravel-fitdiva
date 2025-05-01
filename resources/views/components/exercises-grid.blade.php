@props([
    'exercises' => [],
])

<div class="row no-gutters">
  @foreach ($exercises as $exercise)
    <div class="col-md-6 col-lg-4">
      <a href="{{ route('landing.exercise', $exercise->slug) }}" class="package-program ftco-animate">
        <div style="background-image: url({{ $exercise->image }})"
          class="img d-flex justify-content-center align-items-center">
          <div class="text p-5 text-center">
            <h3>{{ $exercise->name }}</h3>
          </div>
        </div>
      </a>
    </div>
  @endforeach
</div>
