@php
  $coaches = array_to_object([
      [
          'href' => '#',
          'position' => 'Owner / Head Coach',
          'name' => 'Mark Brook',
          'image' => asset('images/trainers/trainer-1.jpg'),
          'twitter' => '#',
          'facebook' => '#',
          'instagram' => '#',
      ],
      [
          'href' => '#',
          'position' => 'Owner / Head Coach',
          'name' => 'Sarah Henderson',
          'image' => asset('images/trainers/trainer-2.jpg'),
          'twitter' => '#',
          'facebook' => '#',
          'instagram' => '#',
      ],
      [
          'href' => '#',
          'position' => 'Owner / Head Coach',
          'name' => 'George Hump',
          'image' => asset('images/trainers/trainer-3.jpg'),
          'twitter' => '#',
          'facebook' => '#',
          'instagram' => '#',
      ],
      [
          'href' => '#',
          'position' => 'Owner / Head Coach',
          'name' => 'Victor Hump',
          'image' => asset('images/trainers/trainer-4.jpg'),
          'twitter' => '#',
          'facebook' => '#',
          'instagram' => '#',
      ],
  ]);
@endphp

<div class="row">
  @foreach ($coaches as $coach)
    <div class="col-lg-3 d-flex">
      <div class="coach align-items-stretch">
        <div class="img" style="background-image: url({{ $coach->image }});"></div>
        <div class="text bg-white p-4 ftco-animate">
          <span class="subheading">{{ $coach->position }}</span>
          <h3>
            <a href="{{ $coach->href }}">
              {{ $coach->name }}
            </a>
          </h3>
          <ul class="ftco-social-media d-flex mt-4">
            <li class="ftco-animate">
              <a href="{{ $coach->twitter }}" class="mr-2 d-flex justify-content-center align-items-center">
                <span class="icon-twitter"></span>
              </a>
            </li>
            <li class="ftco-animate">
              <a href="{{ $coach->facebook }}" class="mr-2 d-flex justify-content-center align-items-center">
                <span class="icon-facebook"></span>
              </a>
            </li>
            <li class="ftco-animate">
              <a href="{{ $coach->instagram }}" class="mr-2 d-flex justify-content-center align-items-center">
                <span class="icon-instagram"></span>
              </a>
            </li>
          </ul>
          <p></p>
        </div>
      </div>
    </div>
  @endforeach
</div>
