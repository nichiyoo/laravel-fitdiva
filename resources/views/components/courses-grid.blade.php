@props([
    'courses' => [],
])

<div class="row no-gutters">
  @foreach ($courses as $course)
    <div class="col-md-6 col-lg-4">
      <a href="{{ route('landing.course', $course->slug) }}" class="package-program ftco-animate">
        <div style="background-image: url({{ $course->image }})"
          class="img d-flex justify-content-center align-items-center">
          <div class="text p-5 text-center">
            <h3>{{ $course->name }}</h3>
          </div>
        </div>
      </a>
    </div>
  @endforeach
</div>
